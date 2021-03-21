<?php

namespace App\Http\Controllers;

use App\Models\WebsiteSetting;
use Illuminate\Http\Request;
use DB;

class WebsiteSettingController extends Controller
{


    public function get() {
        return optional(WebsiteSetting::find(request()->id))->value;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validator = validator($request->all(),$this->rules());
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->first(), "");
        }
        try {
            $resource = WebsiteSetting::find($request->id);

            if ($resource) {
                $resource->update([
                    "value" => $request->value
                ]);
            } else {
                $resource = WebsiteSetting::create([
                    "id" => $request->id,
                    "value" => $request->value
                ]);
            }
            watch(__('update website settings ') . $resource->name, "fa fa-cogs");
            return responseJson(1, __('done'));
        }catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }

    public function rules()
    {
        return [
            'id'=>'required',
            'value'=>'required',
        ];
    }
}
