<?php

namespace App\Http\Controllers;

use App\Imports\ReceiverImport;
use App\Models\Receiver;
use Illuminate\Http\Request;

class ReceiverController extends Controller
{
    public function index()
    {
        $query = Receiver::with(['city', 'area', 'company', 'branch']);

        if (request()->search) {
            $query
                    ->where('name', 'like', '%'.request()->search.'%')
                    ->orWhere('phone', 'like', '%'.request()->search.'%')
                    ->orWhere('address', 'like', '%'.request()->search.'%');
        }

        if (request()->city_id > 0) {
            $query->where('city_id', request()->city_id);
        }

        if (request()->area_id > 0) {
            $query->where('area_id', request()->area_id);
        }

        if (request()->company_id > 0) {
            $query->where('company_id', request()->company_id);
        }

        if (request()->user()->company_id != 1) {
            $query->where('company_id', request()->user()->company_id);
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
            $resource = Receiver::create($request->all());
            watch(__('add receiver ').$resource->code,'fa fa-people-carry');
            return responseJson(1, __('done'), $resource->refresh());
        }catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }


    public function update(Request $request, Receiver $resource)
    {
        $validator = validator($request->all(),$this->rules());
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->first(), "");
        }
        try {
            $resource->update($request->all());
            watch(__('update receiver ').$resource->code,'fa fa-people-carry');
            return responseJson(1, __('done'), $resource);
        } catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }


    public function destroy(Receiver $resource)
    {
        try {
            $resource->delete();
            watch(__('delete receiver ').$resource->code,'fa fa-trash');
            return responseJson(1, __('done'));
        } catch (\Exception $th) {
            return responseJson(0, __($this->exception_message),$th->getMessage());
        }
    }



    public function downloadExcel()
    {
        return response()->download(public_path('/uploads/excel/receiver.xlsx'));
    }


    //    import excel file into data base

    public function receiverImport(Request $request)
    {
        $validator = validator($request->all(),['file'=>'required|mimes:xls,xlsx',]);
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->first(), "");
        }
        try {
            $file = $request->file('file');
            $receiverfile = new ReceiverImport();
            $receiverfile->import($file);
            if ($receiverfile->failures()->isNotEmpty())
                return responseJson(0, $receiverfile->failures(), "");
            return responseJson(1, __('file imported'), "");
        }catch (\Exception $e){
            return responseJson(0, $e->getMessage(), "");
        }

    }


    public function rules()
    {
        return [
            'name'=>'required|string',
            'address'=>'required|string',
            'phone'=>'required|string',
            'company_id'=>'required|exists:companies,id',
            'city_id'=>'required|exists:cities,id',
            'area_id'=>'required|exists:areas,id',
            'branch_id'=>'required|exists:branches,id',
        ];
    }
}
