<?php

namespace App\Http\Controllers;

use App\Models\CourierCommission;
use Illuminate\Http\Request;

class CourierCommissionController extends Controller
{
    public function index()
    {
        $query = CourierCommission::with('courier','service');
        if (request()->courier_id > 0)
        {
            $query->where('courier_id',request()->courier_id);
        }
        if (request()->service_id > 0)
        {
            $query->where('service_id',request()->service_id);
        }
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

            if (CourierCommission::where('courier_id',$request->courier_id)->where('service_id',$request->service_id)->exists()) {
                return responseJson(0, __('data already exists'));
            }
            $resource = CourierCommission::create($request->all());
            watch(__('add Courier Commission '),'fa fa-building');
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
    public function update(Request $request, CourierCommission $resource)
    {
        $validator = validator($request->all(),$this->rules());
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->first(), "");
        }
        try {
            $condition = CourierCommission::query()
            ->where('courier_id',$request->courier_id)
            ->where('service_id',$request->service_id)
            ->exists() &&
            ($request->courier_id != $resource->courier_id ||
            $request->service_id != $resource->service_id);

            if($condition) {
                return responseJson(0, __('data already exists'));
            }

            $resource->update($request->all());
            watch(__('update Courier Commission '),'fa fa-building');
            return responseJson(1, __('done'), $resource);
        } catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }


    public function destroy(CourierCommission $resource)
    {
        try {
            watch(__('delete courier commission '),'fa fa-trash');
            $resource->delete();
            return responseJson(1, __('done'));
        } catch (\Exception $th) {
            return responseJson(0, __($this->exception_message),$th->getMessage());
        }

    }


    public function rules()
    {
        return [
            'courier_id'=>'required|exists:couriers,id',
            'service_id'=>'required|exists:services,id',
            'commission'=>'required|numeric',
        ];
    }
}
