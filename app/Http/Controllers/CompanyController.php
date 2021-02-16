<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{

    public function index()
    {
        $query = Company::latest()->get();
        return $query;
    }

    public function store(Request $request)
    {
        $validator = validator($request->all(),$this->rules());
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->getMessages(), "");
        }
        try {
            $resource = Company::create($request->all());
            return responseJson(1, __('done'), $resource);
        }catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }


    public function update(Request $request, Company $resource)
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


    public function destroy(Company $resource)
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
            'name'=>'required|string',
            'logo'=>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
            'ceo'=>'nullable|string',
            'address'=>'required|string',
            'phone'=>'required|string',
            'fax'=>'nullable|string',
            'email'=>'required|string'	,
            'active'=>'required',
            'notes'=>'nullable|string|max:180',
            'commercial_number'=>'nullable|integer',
            'commercial_photo'=>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
            'type'=>'required',
            'city_id'=>'required|integer|exists:cities,id',
            'area_id'=>'required|integer|exists:areas,id'
        ];
    }
}
