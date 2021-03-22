<?php

namespace App\Http\Controllers;

use App\Models\TransType;
use Illuminate\Http\Request;

class TransTypeController extends Controller
{
    public function index()
    {
        $query = TransType::orderBy('name')->get();
        return $query;
    }


    public function store(Request $request)
    {
        $validator = validator($request->all(),$this->rules());
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->first(), "");
        }
        try {
            $resource = TransType::create($request->all());
            watch(__('add trans type ').$resource->code,'fa fa-car');
            return responseJson(1, __('done'), $resource->refresh());
        }catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }



    public function update(Request $request, TransType $resource)
    {
        $validator = validator($request->all(),$this->rules($request->id));
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->first(), "");
        }
        try {
            $resource->update($request->all());
            watch(__('update trans type ').$resource->code,'fa fa-car');
            return responseJson(1, __('done'), $resource);
        } catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }


    public function destroy(TransType $resource)
    {
        try {
            watch(__('delete trans type ').$resource->code,'fa fa-trash');
            $resource->delete();
            return responseJson(1, __('done'));
        } catch (\Exception $th) {
            return responseJson(0, __($this->exception_message),$th->getMessage());
        }

    }




    public function rules($id=null)
    {
        return [
            'name'=>'required|string|unique:trans_type,name,'.$id
        ];
    }
}
