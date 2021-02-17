<?php

namespace App\Http\Controllers;

use App\Models\Pickup;
use Illuminate\Http\Request;

class PickupController extends Controller
{
    public function index()
    {
        $query = Pickup::latest()->get();
        return $query;
    }


    public function store(Request $request)
    {
        $validator = validator($request->all(),$this->rules());
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->getMessages(), "");
        }
        try {
            $resource = Pickup::create($request->all());
            watch(__('add pickup').$resource->code,'fa fa-people-carry');
            return responseJson(1, __('done'), $resource);
        }catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }



    public function update(Request $request, Pickup $resource)
    {
        $validator = validator($request->all(),$this->rules());
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->getMessages(), "");
        }
        try {
            $resource->update($request->all());
            watch(__('update pickup').$resource->code,'fa fa-people-carry');
            return responseJson(1, __('done'), $resource);
        } catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }


    public function destroy(Pickup $resource)
    {
        try {
            $resource->delete();
            watch(__('delete pickup').$resource->code,'fa fa-trash');
            return responseJson(1, __('done'));
        } catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }

    }


    public function rules()
    {
        return [
            'date'=>'required',
            'company_id'=>'required|integer|exists:companies,id',
            'status_id'=>'required|integer|exists:statuses,id',
            'user_id'=>'required|integer|exists:users,id',
            'time_from'=>'required',
            'time_to'=>'required',
            'courier_id'=>'required|integer|exists:couriers,id'
        ];
    }
}
