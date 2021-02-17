<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        $query = Status::latest()->get();
        return $query;
    }


    public function store(Request $request)
    {
        $validator = validator($request->all(),$this->rules());
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->getMessages(), "");
        }
        try {
            $resource = Status::create($request->all());
            watch(__('add status').$resource->code,'fa fa-stack-exchange');
            return responseJson(1, __('done'), $resource);
        }catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }



    public function update(Request $request, Status $resource)
    {
        $validator = validator($request->all(),$this->rules($request->id));
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->getMessages(), "");
        }
        try {
            $resource->update($request->all());
            watch(__('update status').$resource->code,'fa fa-stack-exchange');
            return responseJson(1, __('done'), $resource);
        } catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }


    public function destroy(Status $resource)
    {
        try {
            $resource->delete();
            watch(__('delete status').$resource->code,'fa fa-trash');
            return responseJson(1, __('done'));
        } catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }

    }


    public function rules($id=null)
    {
        return [
            'name'=>'required|string|unique:statuses,name,'.$id,
            'description'=>'nullable|string',
        ];
    }
}
