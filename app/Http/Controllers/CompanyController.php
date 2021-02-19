<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{

    public function index()
    {
        $query = Company::with(['city', 'area'])->latest();
        
        if (request()->search) {
            $query
                    ->where('name', 'like', '%'.request()->search.'%') 
                    ->orWhere('phone', 'like', '%'.request()->search.'%') 
                    ->orWhere('email', 'like', '%'.request()->search.'%') 
                    ->orWhere('ceo', 'like', '%'.request()->search.'%') 
                    ->orWhere('fax', 'like', '%'.request()->search.'%') 
                    ->orWhere('address', 'like', '%'.request()->search.'%');
        }
        
        if (request()->city_id > 0) {
            $query->where('city_id', request()->city_id);
        }
        
        if (request()->area_id > 0) {
            $query->where('area_id', request()->area_id);
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
            $data = $request->all();
            $data['type'] = "company";
            
            $resource = Company::create($data);
            watch(__('add company').$resource->name,'fa fa-building');
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
            watch(__('update company').$resource->name,'fa fa-building');
            return responseJson(1, __('done'), $resource);
        } catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }


    public function destroy(Company $resource)
    {
        try {
            watch(__('delete company').$resource->name,'fa fa-trash');
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
            'email'=>'required|string', 
            'notes'=>'nullable|string|max:180',
            'commercial_number'=>'nullable|integer',
            'commercial_photo'=>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10000', 
            'city_id'=>'required|integer|exists:cities,id',
            'area_id'=>'required|integer|exists:areas,id'
        ];
    }
}
