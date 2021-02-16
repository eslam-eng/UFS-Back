<?php

namespace App\Http\Controllers;

use App\Models\Courier;
use Illuminate\Http\Request;

class CourierController extends Controller
{


    public function index()
    {
        $query = Courier::latest()->get();
        return $query;
    }

    public function store(Request $request)
    {
        $validator = validator($request->all(),$this->rules());
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->getMessages(), "");
        }
        try {
            $resource = Courier::create($request->all());
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
            return responseJson(1, __('done'), $resource);
        } catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }


    public function destroy(Courier $resource)
    {
        try {
            $resource->delete();
            return responseJson(1, __('done'));
        } catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }

    }


    public function rules()
    {
        return [
            'name'=>'requied|string',
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
