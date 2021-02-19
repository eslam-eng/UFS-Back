<?php

namespace App\Http\Controllers;

use App\Models\Courier;
use Illuminate\Http\Request;

class CourierController extends Controller
{


    public function index()
    {
        $query = Courier::with(['company', 'branch', 'department'])->latest();
        
        if (request()->search) {
            $query
                    ->where('name', 'like', '%'.request()->search.'%') 
                    ->orWhere('phone', 'like', '%'.request()->search.'%') 
                    ->orWhere('email', 'like', '%'.request()->search.'%') 
                    ->orWhere('notes', 'like', '%'.request()->search.'%')  
                    ->orWhere('address', 'like', '%'.request()->search.'%');
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

    public function store(Request $request)
    {
        $validator = validator($request->all(),$this->rules());
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->getMessages(), "");
        }
        try {
            $resource = Courier::create($request->all());
            watch(__('add courier').$resource->name,'fa fa-user');
            return responseJson(1, __('done'), $resource);
        }catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }


    public function update(Request $request, Courier $resource)
    {
        $validator = validator($request->all(),$this->rules());
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->getMessages(), "");
        }
        try {
            $resource->update($request->all());
            watch(__('update courier').$resource->name,'fa fa-user');
            return responseJson(1, __('done'), $resource);
        } catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }


    public function destroy(Courier $resource)
    {
        try {
            watch(__('delete courier').$resource->name,'fa fa-trash');
            $resource->delete();
            return responseJson(1, __('done'));
        } catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }

    }


    public function rules()
    {
        return [
            'name'=>'required|string',
            'photo'=>'nullable|string',
            'phone'=>'required|string',
            'email'=>'nullable|string',
            'address'=>'required|string',
            'notes'=>'nullable|string',
            'active'=>'required',
            'company_id'=>'required|integer|exists:companies,id',
            'branch_id'=>'required|integer|exists:branches,id',
            'department_id'=>'required|integer|exists:departments,id'
        ];
    }
}
