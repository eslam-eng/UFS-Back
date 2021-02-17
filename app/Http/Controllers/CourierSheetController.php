<?php

namespace App\Http\Controllers;

use App\Models\CourierSheet;
use Illuminate\Http\Request;

class CourierSheetController extends Controller
{

    public function index()
    {
        $query = CourierSheet::with('courier','user','sheetDetails')->latest()->get();
        return $query;
    }

    public function store(Request $request)
    {
        $validator = validator($request->all(),$this->rules());
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->getMessages(), "");
        }
        try {
            $resource = CourierSheet::create($request->all());
            watch(__('add courierSheet').$resource->courier->name,'fa fa-file');
            return responseJson(1, __('done'), $resource);
        }catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }


    public function update(Request $request, CourierSheet $resource)
    {
        $validator = validator($request->all(),$this->rules());
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->getMessages(), "");
        }
        try {
            $resource->update($request->all());
            watch(__('update courierSheet').$resource->courier->name,'fa fa-file');
            return responseJson(1, __('done'), $resource);
        } catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }


    public function destroy(CourierSheet $resource)
    {
        try {
            $resource->delete();
            watch(__('delete courierSheet').$resource->courier->name,'fa fa-trash');
            return responseJson(1, __('done'));
        } catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }

    }


    public function rules()
    {
        return [
            'courier_id'=>'required|integer|exists:couriers,id',
            'user_id'=>'required|integer|exists:users,id',
            'date'=>'required',

        ];
    }
}
