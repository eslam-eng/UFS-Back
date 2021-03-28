<?php

namespace App\Http\Controllers;

use App\Models\CourierDaily;
use Illuminate\Http\Request;

class CourierDailyController extends Controller
{

    public function index()
    {
        $query = CourierDaily::with('courier', 'discountExpense', 'additionalExpense')->get();
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
            $resource = CourierDaily::create($request->all());
            watch(__('add courier daily ').$resource->courier_id,'fa fa-building');
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
    public function update(Request $request, CourierDaily $resource)
    {
        $validator = validator($request->all(),$this->rules());
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->first(), "");
        }
        try {
            $resource->update($request->all());
            watch(__('update courier daily ').$resource->courier_id,'fa fa-building');
            return responseJson(1, __('done'), $resource);
        } catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }


    public function destroy(CourierDaily $resource)
    {
        try {
            watch(__('delete courier daily').$resource->courier_id,'fa fa-trash');
            $resource->delete();
            return responseJson(1, __('done'));
        } catch (\Exception $th) {
            return responseJson(0, __($this->exception_message),$th->getMessage());
        }

    }


    public function rules()
    {
        return [
            'discount'=>'nullable|numeric',
            'additional'=>'nullable|numeric',
            'commission'=>'nullable|numeric',
            'salary'=>'nullable|numeric',
            'courier_id'=>'required|exists:couriers,id',
        ];
    }

}
