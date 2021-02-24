<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Http\Request;

use DB;

class RoleController extends Controller
{
    public function index()
    {
        $query = Role::with(['permissions']);
        
        if (request()->user()->company_id != 1) {
            $query->where('company_id', request()->user()->company_id);
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
            return responseJson(0, $validator->errors()->getMessages(), "");
        }
        try {
            $resource = new Role();
            $resource->name = $request->name;
            $resource->display_name= $request->display_name;
            $resource->company_id= $request->company_id;
            $resource->save();
            watch(__('add role') . $resource->name, "fa fa-building");
            return responseJson(1, __('done'), $resource);
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
    public function update(Request $request, Role $resource)
    {
        $validator = validator($request->all(),$this->rules());
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->getMessages(), "");
        }
        try {
            $resource->name = $request->name;
            $resource->display_name= $request->display_name;
            $resource->company_id= $request->company_id;
            $resource->update();
            watch(__('update role') . $resource->name, "fa fa-building");
            return responseJson(1, __('done'), $resource);
        } catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }

    /**
     * Role a newly created resource in storage.
     * @param Request $request
     * @return Response
     */ 
    public function updatePermissions(Request $request, Role $resource) { 
        try { 
            
            $data = $request->all(); 
            
            // remove old
            DB::table('permission_role')->where('role_id', $resource->id)->delete();
            
            // detach all permissions
            $resource->detachPermissions(Permission::whereIn('id', $data['permissions'])->get());
            
            //return $data['permissions'];
            foreach($data['permissions'] as $row) { 
                $permission = Permission::find($row);
                if ($permission && !$resource->hasPermission($permission))
                    $resource->attachPermission($permission);
            }
             
            
            watch(__('update permission of resource ') . $resource->name, "fa fa-list-th");
        } catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
        
        return responseJson(1, __('done'), $resource);
    }
  

    public function destroy(Role $resource)
    {
        try {
            $resource->delete();
            watch(__('delete role') . $resource->name, "fa fa-trash");
            return responseJson(1, __('done'));
        } catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }

    }

    public function rules()
    {
        return [
            'name'=>'required|string',
            'display_name'=>'required',
            'company_id'=>'required',
        ];
    }
}
