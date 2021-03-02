<?php

namespace App\Imports;

use App\models\Courier;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class CourierImport implements ToModel,SkipsOnError,WithHeadingRow,WithValidation,SkipsOnFailure
{
    use Importable,SkipsErrors,SkipsFailures;
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Courier([
            'name'=>$row['name'],
            'phone'=>$row['phone'],
            'email'=>$row['email'],
            'address'=>$row['address'],
            'notes'=>$row['notes'],
            'insurance_num'=>$row['insurance_num'],
            'national_id'=>$row['national_id'],
            'work_area'=>$row['work_area'],
            'company_id'=>$row['company_code'],
            'branch_id'=>$row['branch_code'],
            'department_id'=>$row['department_code'],
        ]);
    }

    public function rules(): array
    {
        return [
            '.*name'=>['required','string'],
            '.*phone'=>['required','string'],
            '.*email'=>['nullable','string','email'],
            '.*address'=>['required','string'],
            '.*notes'=>['nullable','string'],
            '.*insurance_num'=>['nullable','string'],
            '.*national_id'=>['required','numeric'],
            '.*work_area'=>['nullable','string'],
            '.*company_code'=>['required','exists:companies,id'],
            '.*branch_code'=>['required','exists:branches,id'],
            '.*department_code'=>['required','exists:departments,id']

        ];
    }
}
