<?php

namespace App\Http\Controllers;

use App\Models\Receiver;
use Illuminate\Http\Request;

class ReceiverController extends Controller
{
    public function index()
    {
        $query = Receiver::latest()->get();
        return $query;
    }

    public function store(Request $request)
    {
        $validator = validator($request->all(),$this->rules());
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->getMessages(), "");
        }
        try {
            $resource = Receiver::create($request->all());
            watch(__('add receiver').$resource->code,'fa fa-people-carry');
            return responseJson(1, __('done'), $resource);
        }catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }


    public function update(Request $request, Receiver $resource)
    {
        $validator = validator($request->all(),$this->rules());
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->getMessages(), "");
        }
        try {
            $resource->update($request->all());
            watch(__('update receiver').$resource->code,'fa fa-people-carry');
            return responseJson(1, __('done'), $resource);
        } catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }


    public function destroy(Receiver $resource)
    {
        try {
            $resource->delete();
            watch(__('delete receiver').$resource->code,'fa fa-trash');
            return responseJson(1, __('done'));
        } catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }

    public function rules()
    {
        return [
            'name'=>'required|string',
            'address'=>'required|string',
            'phone'=>'required|string',
            'company_id'=>'required|integer|exists:companies,id',
            'city_id'=>'required|integer|exists:cities,id',
            'area_id'=>'required|integer|exists:areas,id'
        ];
    }
}
