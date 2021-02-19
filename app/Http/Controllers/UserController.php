<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class UserController extends Controller {

    public function index() {
        $query = User::with(['company', 'branch', 'department'])->latest();

        if (request()->search) {
            $query
                    ->where('name', 'like', '%' . request()->search . '%')
                    ->orWhere('phone', 'like', '%' . request()->search . '%')
                    ->orWhere('email', 'like', '%' . request()->search . '%')
                    ->orWhere('notes', 'like', '%' . request()->search . '%')
                    ->orWhere('address', 'like', '%' . request()->search . '%');
        }

        if (request()->company_id > 0) {
            $query->where('company_id', request()->company_id);
        }

        if (request()->branch_id > 0) {
            $query->where('branch_id', request()->branch_id);
        }

        if (request()->department_id > 0) {
            $query->where('department_id', request()->department_id);
        }

        return $query->get();
    }

    public function store(Request $request) {
        $validator = validator($request->all(), $this->rules());
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->getMessages(), "");
        }
        try {
            $resource = User::create($request->all());

            if ($request->role_id) {
                $role = Role::find($request->role_id);
                $resource->attachRole($role);
            }

            watch(__('add user') . $resource->name, 'fa fa-user');
            return responseJson(1, __('done'), $resource);
        } catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }

    public function update(Request $request, User $resource) {
        $validator = validator($request->all(), $this->rules());
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->getMessages(), "");
        }
        try {
            $resource->update($request->all());

            if ($request->role_id) {
                // remove old role
                $role = Role::find($resource->role_id);
                if ($role)
                    $resource->detachRole($role);

                // add new role
                $role = Role::find($request->role_id);
                $resource->attachRole($role);
            }

            watch(__('update user') . $resource->name, 'fa fa-user');
            return responseJson(1, __('done'), $resource);
        } catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }

    public function destroy(User $resource) {
        try {
            // remove role
            $role = Role::find($resource->role_id);
            if ($role)
                $resource->detachRole($role);
            
            watch(__('delete user') . $resource->name, 'fa fa-trash');
            $resource->delete();
            return responseJson(1, __('done'));
        } catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }

    public function rules() {
        return [
            'name' => 'required|string',
            'username' => 'required',
            'photo' => 'nullable|string',
            'phone' => 'required|string',
            'email' => 'nullable|string',
            'address' => 'required|string',
            'notes' => 'nullable|string',
            'active' => 'required',
            'company_id' => 'required|exists:companies,id',
            'branch_id' => 'required|exists:branches,id',
            'department_id' => 'required|exists:departments,id'
        ];
    }

}
