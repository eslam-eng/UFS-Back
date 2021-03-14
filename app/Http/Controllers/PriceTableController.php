<?php

namespace App\Http\Controllers;

use App\Models\PriceTable;
use Illuminate\Http\Request;
use App\Imports\PriceTableImport;

class PriceTableController extends Controller
{
    public function index()
    {
        $query = PriceTable::with('cityFromObject','cityToObject','areaFromObject','areaToObject');
        if (request()->show_offer > 0) {
            $query->where('date_to','!=',null);
        }

        $query->where('model_id', request()->model_id);

        return $query->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = validator($request->all(),$this->rules());
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->first(), "");
        }
        try {
            $resource = PriceTable::create($request->all());
            watch(__('add price ').$resource->name,'fa fa-money-bill-alt');
            return responseJson(1, __('done'), $resource->refresh());
        }catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PriceTable $resource)
    {
        $validator = validator($request->all(),$this->rules());
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->first(), "");
        }
        try {
            $resource->update($request->all());
            watch(__('update price ').$resource->name,'fa fa-money-bill-alt');
            return responseJson(1, __('done'), $resource);
        } catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }


    public function destroy(PriceTable $resource)
    {
        try {
            watch(__('delete price ').$resource->name,'fa fa-trash');
            $resource->delete();
            return responseJson(1, __('done'));
        } catch (\Exception $th) {
            return responseJson(0, __($this->exception_message),$th->getMessage());
        }

    }

    public function downloadExcel()
    {
        return response()->download(public_path('/uploads/excel/price_table.xlsx'));
    }


//    import excel file into data base

    public function import(Request $request)
    {
        $validator = validator($request->all(),['file'=>'required|mimes:xls,xlsx',]);
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->first(), "");
        }
        try {
            $file = $request->file('file');
            $priceFile = new PriceTableImport();
            $priceFile->import($file);
            if ($priceFile->failures()->isNotEmpty())
                return responseJson(0, "", $priceFile->failures());

            return responseJson(1, __('file imported'), "");
        }catch (\Exception $e){
            return responseJson(0, __('this item cannot be deleted may be there relation to another'), $e->getMessage());
        }

    }


    public function rules()
    {
        return [
            'area_from'=>'nullable|exists:areas,id',
            'area_to'=>'nullable|exists:areas,id',
            'city_from'=>'required|exists:cities,id',
            'city_to'=>'required|exists:cities,id',
            'country_from'=>'nullable|exists:countries,id',
            'country_to'=>'nullable|exists:countries,id',
            'price'=>'required|numeric',
            'model_id'=>'required',
            'basic_kg'=>'required',
            'additional_kg_price'=>'required'
        ];
    }
}
