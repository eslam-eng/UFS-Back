<?php

namespace App\Http\Controllers;

use App\Imports\ServiceImport;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $query = Service::get();
        return $query;
    }

    public function store(Request $request)
    {
        $validator = validator($request->all(),$this->rules());
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->first(), "");
        }
        try {
            $resource = Service::create($request->all());
            watch(__('add service ').$resource->name,'fa fa-cubes');
            return responseJson(1, __('done'), $resource->refresh());
        }catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }

    public function update(Request $request, Service $resource)
    {
        $validator = validator($request->all(),$this->rules($request->id));
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->first(), "");
        }
        try {
            $resource->update($request->all());
            watch(__('update service ').$resource->name,'fa fa-cubes');
            return responseJson(1, __('done'), $resource);
        } catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }

    public function destroy(Service $resource)
    {
        try {
            watch(__('delete service ').$resource->name,'fa fa-trash');
            $resource->delete();
            return responseJson(1, __('done'));
        } catch (\Exception $th) {
            return responseJson(0, __($this->exception_message),$th->getMessage());
        }

    }



    //    import excel file into data base

    public function serviceTypeImport(Request $request)
    {
        $validator = validator($request->all(),['file'=>'required|mimes:xls,xlsx',]);
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->getMessages(), "");
        }
        try {
            $file = $request->file('file');
            $servicefile = new ServiceImport();
            $servicefile->import($file);
            if ($servicefile->failures()->isNotEmpty())
                return responseJson(0, $servicefile->failures(), "");
            return responseJson(1, __('file imported'), "");
        }catch (\Exception $e){
            return responseJson(0, $e->getMessage(), "");
        }

    }


    public function rules($id=null)
    {
        return [
            'name'=>'required|string|unique:services,name,'.$id,
        ];
    }
}
