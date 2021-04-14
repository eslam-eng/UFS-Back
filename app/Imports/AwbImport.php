<?php

namespace App\Imports;

use App\Http\Controllers\AwbController;
use App\Models\Awb;
use App\Models\Branch;
use App\Models\Receiver;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;


class AwbImport implements ToModel,SkipsOnError,WithHeadingRow,WithValidation,SkipsOnFailure
{
    use Importable,SkipsErrors,SkipsFailures;
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */

    public function model(array $row)
    {
        $request = request();
        $referance = str_replace(" ", "", $row['receiver_code']);
        $branchCode = str_replace(" ", "", $row['branch_code']);

        $receiver = Receiver::where('referance', $referance)->first();
        $branch = Branch::where('id', $branchCode)->first();

        if (!$branch || !$receiver || !is_numeric($row['branch_code'])) {
            return null;
        }

        $request->merge([
            "company_id" => $branch->company_id,
            "department_id" => $row['department_code'],
            "branch_id" => $row['branch_code'],
            "receiver_id" => $receiver->id,

            // from receiver
            "city_id" => $receiver->city_id,
            "area_id" => $receiver->area_id,

            "payment_type_id" => $row['payment_type_code'],
            "service_id" => $row['service_code'],
            "weight" => $row['weight'],
            "pieces" => $row['pieces'],
            "category_id" => $row['category_code'],
            "notes" => $row['notes'],
            "is_return" => isset($row['is_return'])? $row['is_return'] : 0,
            "collection" => $row['collection']
        ]);

        $awbInstanceController = new AwbController();
        $res = $awbInstanceController->store($request);

        file_put_contents("import_log.txt", $res);
        return null;
    }

    public function rules(): array
    {
        return [
            //'*.company_code'=>['required','exists:companies,id'],
            '*.department_code'=>['required','exists:departments,id'],
            '*.branch_code'=>['required','exists:branches,id'],
            '*.receiver_code'=>['required','exists:receivers,referance'],
            '*.payment_type_code'=>['required','exists:payment_types,id'],
            '*.service_code'=>['required','exists:services,id'],
            //'*.city_code'=>['required','exists:cities,id'],
            //'*.area_code'=>['required','exists:areas,id'],
            '*.category_code'=>['required','exists:awb_categories,id'],
            '*.weight'=>['required','numeric'],
            '*.pieces'=>['required','numeric'],
            //'*.is_return'=>['nullable','boolean'],
        ];
    }
}
