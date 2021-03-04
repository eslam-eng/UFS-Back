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
            'address'=>$row['address'],
            'phone'=>$row['phone'],
            'email'=>$row['email'],
            'company_name'=>$row['company_name'],
            'referance'=>$row['reference'],
            'title'=>$row['title'],
            'branch_name'=>$row['branch_name'],
            'company_id'=>$row['company_code'],
            'address2'=>$row['address2'],
            'city_id'=>$row['city_code'],
            'area_id'=>$row['province_code'],
            'branch_id'=>$row['branch_code'],
        ]);
    }

    public function rules(): array
    {
        return [
            '*.name'=>['required','string'],
            '*.address'=>['required','string'],
            '*.phone'=>['nullable','string'],
            '*.email'=>['nullable','email'],
            '*.company_name'=>['nullable','string'],
            '*.branch_name'=>['nullable','string'],
            '*.address2'=>['nullable','string'],
            '*.referance'=>['nullable','string'],
            '*.company_code'=>['required','exists:companies,id'],
            '*.city_code'=>['required','exists:cities,id'],
            '*.province_code'=>['required','exists:areas,id'],
            '*.branch_code'=>['required','exists:branches,id'],

        ];
    }
}
