<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\MailBox;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailBoxController extends Controller
{

    public function store(Request $request)
    {
        $validator = validator($request->all(),$this->rules());
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->first(), "");
        }
        try {
            $resource = MailBox::create($request->all());
            watch(__('some one send mail ').$resource->company,'fa fa-building');
            return back();
        }catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }



}
