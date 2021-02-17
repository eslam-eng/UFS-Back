<?php

namespace App\Http\Controllers;

use App\Models\Translation;
use Illuminate\Http\Request;

class TranslateController extends Controller
{
    public function index()
    {
        $query = Translation::latest()->get();
        return $query;
    }

    public function store(Request $request)
    {
        $validator = validator($request->all(),$this->rules());
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->getMessages(), "");
        }
        try {
            $resource = Translation::create($request->all());
            watch(__('add translation').$resource->name_en,'fa fa-cubes');
            return responseJson(1, __('done'), $resource);
        }catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }

    public function update(Request $request, Translation $resource)
    {
        $validator = validator($request->all(),$this->rules());
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->getMessages(), "");
        }
        try {
            $resource->update($request->all());
            watch(__('update translation').$resource->name_en,'fa fa-language');
            return responseJson(1, __('done'), $resource);
        } catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }

    public function destroy(Translation $resource)
    {
        try {
            $resource->delete();
            watch(__('delete translation').$resource->name_en,'fa fa-language');
            return responseJson(1, __('done'));
        } catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }

    }

    public function rules()
    {
        return [
            'key'=>'required|string',
            'name_ar'=>'required',
            'name_en'=>'required'
        ];
    }
}
