<?php

namespace App\Http\Controllers;

use App\Models\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function index()
    {
        $query = Price::with('cityFrom','cityTo','areaFrom','areaTo')->get();
        return $query;
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
            $resource = Price::create($request->all());
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
    public function update(Request $request, Price $resource)
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


    public function destroy(Price $resource)
    {
        try {
            watch(__('delete price ').$resource->name,'fa fa-trash');
            $resource->delete();
            return responseJson(1, __('done'));
        } catch (\Exception $th) {
            return responseJson(0, __($this->exception_message),$th->getMessage());
        }

    }


    public function rules()
    {
        return [

            'date_from'=>'date|nullable',
            'date_to'=>"date|after:date_from",
//            'model_id',
//            'model_type',
            'area_from'=>'nullable|exists:areas,id',
            'area_to'=>'nullable|exists:areas,id',
            'city_from'=>'required|exists:cities,id',
            'city_to'=>'required|exists:cities,id',
            'country_from'=>'nullable|exists:countries,id',
            'country_to'=>'nullable|exists:countries,id',
            'price'=>'required|numeric',
            'basic_kg'=>'required',
            'additional_kg_price'=>'required'
        ];
    }
}
