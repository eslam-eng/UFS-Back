<?php

namespace App\Http\Controllers;

use App\Models\CourierSheetDetail;
use Illuminate\Http\Request;

class CourierSheetDetailController extends Controller
{
    public function index()
    {
        $query = CourierSheetDetail::with('sheet','awb')->latest()->get();
        return $query;
    }

    public function store(Request $request)
    {
        $validator = validator($request->all(),$this->rules());
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->getMessages(), "");
        }
        try {
          foreach ($request->awb_id as $awb)
          {
              $resource = CourierSheetDetail::create(['sheet_id'=>$request->sheet_id, 'awb_id'=>$awb]);
          }
          if ($resource)
          {
              watch(__('add courierSheetDetail'),'fa fa-file');
              return responseJson(1, __('done'), '');
          }else
              return responseJson(0, __('fail'), '');

        }catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }


    public function update(Request $request,CourierSheetDetail $resource)
    {
        $validator = validator($request->all(),$this->rules());
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->getMessages(), "");
        }
        try {
            $resource->update($request->all());
            watch(__('update courierSheetDetail').$resource->sheet_id,'fa fa-file');
            return responseJson(1, __('done'), $resource);
        } catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }


    public function destroy(CourierSheetDetail $resource)
    {
        try {
            $resource->delete();
            watch(__('delete courierSheetDetail').$resource->sheet_id,'fa fa-trash');
            return responseJson(1, __('done'));
        } catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }

    }


    public function rules()
    {
        return [
            'sheet_id'=>'required|integer|exists:courier_sheets,id',
            'awb_id'=>'required|array|min:1|exists:awbs,id',
        ];
    }
}
