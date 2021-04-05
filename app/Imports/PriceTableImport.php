<?php

namespace App\Imports;

use App\Models\PriceTable;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class PriceTableImport implements ToModel,SkipsOnError,WithHeadingRow,WithValidation,SkipsOnFailure
{
    use Importable,SkipsErrors,SkipsFailures;
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $modelId = $row['company_id'];
        $modelType = "company";

        return new PriceTable([
            'city_from'=>$row['city_from'],
            'city_to'=>$row['city_to'],
            'model_id'=> $modelId,
            'model_type'=> $modelType,
            'price'=>$row['price'],
            'basic_kg'=>$row['basic_kg'],
            'additional_kg_price'=>$row['additional_kg_price'],
            'return_price'=>$row['return_price'],
        ]);
    }

    public function rules(): array
    {
        return [
            '*.city_from'=>['required','exists:cities,id'],
            '*.city_to'=>['required','exists:cities,id'],
            '*.company_id'=>['required','exists:companies,id'],
            '*.price'=>['required', 'numeric'],
            '*.basic_kg'=>['required', 'numeric'],
            '*.additional_kg_price'=> ['required', 'numeric']
        ];
    }
}
