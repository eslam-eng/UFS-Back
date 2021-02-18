<?php

namespace App\Http\Controllers;

use App\Models\Awb;
use Illuminate\Http\Request;

class AwbController extends Controller
{

    public function index()
    {
        $query = Awb::latest()->get();
        return $query;
    }


    public function store(Request $request)
    {
        $validator = validator($request->all(),$this->rules());
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->getMessages(), "");
        }
        try {
            $resource = Awb::create($request->all());
            watch(__('add awb').$resource->code,'fa fa-file-alt');
            return responseJson(1, __('done'), $resource);
        }catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }


    public function update(Request $request, Awb $resource)
    {
        $validator = validator($request->all(),$this->rules());
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->getMessages(), "");
        }
        try {
            $resource->update($request->all());
            watch(__('update awb').$resource->code,'fa fa-file-alt');
            return responseJson(1, __('done'), $resource);
        } catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }


    public function destroy(Awb $resource)
    {
        try {
            $resource->delete();
            watch(__('delete awb').$resource->code,'fa fa-trash');
            return responseJson(1, __('done'));
        } catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }

    }


    public function rules()
    {
        return
            [
                'code',
                'collection'=>'required|numeric',
                'company_id'=>'required|integer|exists:companies,id',
                'branch_id'=>'required|integer|exists:branches,id',
                'department_id'=>'required|exists:departments,id',
                'receiver_id'=>'required|exists:receivers,id',
                'Payment_type_id'=>'required|exists:payment_types,id',
                'service_id'=>'required|exists:services,id',
                'status_id'=>'required|exists:statuses,id',
                'user_id'=>'required|exists:users,id',
                'city_id'=>'required|exists:cities,id',
                'area_id'=>'required|exists:areas,id',
                'date'=>'required',
                'weight'=>'required',
                'pieces'=>'required',
            ];
    }
}
