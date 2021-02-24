<?php

namespace App\Imports;

use App\Models\Receiver;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class ReceiverImport implements ToModel,SkipsOnError,WithHeadingRow,WithValidation,SkipsOnFailure
{
    use Importable,SkipsErrors,SkipsFailures;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Receiver([
            'name'=>$row['name'],
            'address'=>$row['company_code'],
            'phone'=>$row['phone'],
            'company_id'=>$row['company_code'],
            'city_id'=>$row['city_code'],
            'area_id'=>$row['area_code'],
        ]);
    }

    public function rules(): array
    {
        return [
            '*.name'=>['required','string'],
            '*.address'=>['required','string'],
            '*.phone'=>['required','string'],
            '*.company_code'=>['required','exists:companies,id'],
            '*.city_code'=>['required','exists:cities,id'],
            '*.area_code'=>['required','exists:areas,id']

        ];
    }
}
