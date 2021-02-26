<?php

namespace App\Http\Controllers;

use App\Models\PermissionGroup;
use Illuminate\Http\Request;

class PermissionGroupController extends Controller
{
    public function index()
    {
        $query = PermissionGroup::query()->with(['permissions']);

        if (request()->user()->company_id != 1) {
            $query->where('is_admin', null);
        }

        return $query->get();
    }


    public function store(Request $request)
    {
        $validator = validator($request->all(),$this->rules());
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->first(), "");
        }
        try {
            $resource = PermissionGroup::create($request->all());
            watch(__('add permission group ').$resource->name,'fa fa-credit-card');
            return responseJson(1, __('done'), $resource->refresh());
        }catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }



    public function update(Request $request, PermissionGroup $resource)
    {
        $validator = validator($request->all(),$this->rules($request->id));
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->getMessages(), "");
        }
        try {
            $resource->update($request->all());
            watch(__('update permission group ').$resource->name,'fa fa-credit-card');
            return responseJson(1, __('done'), $resource);
        } catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }


    public function destroy(PermissionGroup $resource)
    {
        try {
            watch(__('delete permission group ').$resource->name,'fa fa-trash');
            $resource->delete();
            return responseJson(1, __('done'));
        } catch (\Exception $th) {
            return responseJson(0, __($this->exception_message),$th->getMessage());
        }

    }


    public function rules()
    {
        return [
            'name'=>'required|string',
        ];
    }
}
