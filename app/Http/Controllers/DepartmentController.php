<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $query = Department::latest()->get();
        return $query;
    }


    public function store(Request $request)
    {
        $validator = validator($request->all(),$this->rules());
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->getMessages(), "");
        }
        try {
            $resource = Department::create($request->all());
            watch(__('add department').$resource->name,'fa fa-codepen');
            return responseJson(1, __('done'), $resource);
        }catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }



    public function update(Request $request, Department $resource)
    {
        $validator = validator($request->all(),$this->rules($request->id));
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->getMessages(), "");
        }
        try {
            $resource->update($request->all());
            watch(__('update department').$resource->name,'fa fa-codepen');
            return responseJson(1, __('done'), $resource);
        } catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }


    public function destroy(Department $resource)
    {
        try {
            watch(__('delete department').$resource->name,'fa fa-trash');
            $resource->delete();
            return responseJson(1, __('done'));
        } catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }

    }


    public function rules($id=null)
    {
        return [
            'name'=>'required|string',
            'company_id'=>'required',
        ];
    }
}
