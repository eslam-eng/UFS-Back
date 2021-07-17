<?php

namespace App\Imports;

use App\Models\Area;
use App\Models\Branch;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class BranchImport implements ToModel,SkipsOnError,WithHeadingRow,WithValidation,SkipsOnFailure
{
    use Importable,SkipsErrors,SkipsFailures;
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $area = Area::find($row['area_code']);

        return new Branch([
            'name'=>$row['name'],
            'phone'=>$row['phone'],
            'address'=>$row['address'],
            'company_id'=>$row['company_code'],
            'area_id'=>$row['area_code'],
            'city_id'=>optional($area)->city_id,
        ]);
    }

    public function rules(): array
    {
        return [
            '*.name'=>['required','string'],
            '*.company_code'=>['required','exists:companies,id'],
            //'*.city_code'=>['required','exists:cities,id'],
            '*.area_code'=>['required','exists:areas,id'],
        ];
    }
}
