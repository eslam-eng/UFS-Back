<?php

namespace App\Imports;

use App\Models\Company;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class CompanyImport implements ToModel,SkipsOnError,WithHeadingRow,WithValidation,SkipsOnFailure
{
    use Importable,SkipsErrors,SkipsFailures;
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Company([
            'name'=>$row['name'],
            'ceo'=>$row['ceo'],
            'address'=>$row['address'],
            'phone'=>$row['phone'],
            'fax'=>$row['fax'],
            'email'=>$row['email'],
            'notes'=>$row['notes'],
            'commercial_number'=>$row['commercial_number'],
            'city_id'=>$row['city_code'],
            'area_id'=>$row['area_code'],
        ]);
    }

    public function rules(): array
    {
        return [
            '.*name'=>['required','string'],
            '.*ceo'=>['nullable','string'],
            '.*address'=>['required','string'],
            '.*phone'=>['required','string'],
            '.*fax'=>['nullable','string'],
            '.*email'=>['required','string','email'],
            '.*notes'=>['nullable','string','max:180'],
            '.*commercial_number'=>['nullable','string'],
            '.*city_code'=>['required','exists:cities,id'],
            '.*area_code'=>['required','exists:areas,id']

        ];
    }

}
