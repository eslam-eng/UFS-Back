<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{


    public function index()
    {
        $query = User::latest()->get();
        return $query;
    }


    public function store(Request $request)
    {
        $validator = validator($request->all(),$this->rules());
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->getMessages(), "");
        }
        try {
            $resource = User::create($request->all());
            watch(__('add user').$resource->code,'fa fa-user');
            return responseJson(1, __('done'), $resource);
        }catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }


    public function update(Request $request, User $resource)
    {
        $validator = validator($request->all(),$this->rules($request->id));
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->getMessages(), "");
        }
        try {
            $resource->update($request->all());
            watch(__('update user').$resource->code,'fa fa-user');
            return responseJson(1, __('done'), $resource);
        } catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }


    public function destroy(User $resource)
    {
        try {
            $resource->delete();
            watch(__('delete user').$resource->code,'fa fa-trash');
            return responseJson(1, __('done'));
        } catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }

    }


    public function rules($id=null)
    {
        return
        [
            'name'=>'required|string',
            'username'=>'required|string|unique:users,username,'.$id,
            'email'=>'required|email|unique:users,email,'.$id,
            'password'=>'required|string|min:8',
            'phone'=>'required|string',
            'address'=>'required|string',
            'photo'=>'nullable|string',
            'active'=>'required',
            'notes'=>'nullable|string|max:188',
            'company_id'=>'required|integer|exists:companies,id',
            'branch_id'=>'required|integer|exists:branches,id',
            'department_id'=>'required|integer|exists:departments,id'
        ];
    }
}
