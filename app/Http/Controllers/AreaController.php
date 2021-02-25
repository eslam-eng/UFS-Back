<?php

namespace App\Http\Controllers;

use App\Imports\AreaImport;
use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public $add_Icon = 'fa fa-building';
    public $update_Icon = 'fa fa-building';
    public $delete_Icon = 'fa fa-building';
    public function index()
    {
        $query = Area::get();
        return $query;
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
            return responseJson(0, $validator->errors()->first(), "");
        }
        try {
            $resource = Area::create($request->all());
            watch(__('add area ') . $resource->name, $this->add_Icon);
            return responseJson(1, __('done'), $resource.refresh);
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
    public function update(Request $request, Area $resource)
    {
        $validator = validator($request->all(),$this->rules());
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->first(), "");
        }
        try {
            $resource->update($request->all());
            watch(__('update area ') . $resource->name, $this->update_Icon);
            return responseJson(1, __('done'), $resource);
        } catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }


    public function destroy(Area $resource)
    {
        try {
            watch(__('delete area ') . $resource->name, $this->delete_Icon);
            $resource->delete();
            return responseJson(1, __('done'));
        } catch (\Exception $th) {
            return responseJson(0, __($this->exception_message),$th->getMessage());
        }

    }



//    import excel file into data base

    public function areaImport(Request $request)
    {
        $validator = validator($request->all(),['file'=>'required|mimes:xls,xlsx',]);
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->first(), "");
        }
        try {
            $file = $request->file('file');
            $areafile = new AreaImport();
            $areafile->import($file);
            if ($areafile->failures()->isNotEmpty())
                return responseJson(0, $areafile->failures(), "");
            return responseJson(1, __('file imported'), "");
        }catch (\Exception $e){
            return responseJson(0, __('this item cannot be deleted may be there relation to another'), $e->getMessage());
        }

    }


    public function rules()
    {
        return [
            'name'=>'required|string',
            'city_id'=>'required|exists:cities,id',
        ];
    }
}
