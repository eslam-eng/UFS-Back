<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\MailBox;
use Illuminate\Http\Request;

class MailBoxController extends Controller
{

    public function store(Request $request)
    {
        $data = $this->validate($request,$this->rules());
        try {
            $data['type']='inbox';
            $resource = MailBox::create($data);
            watch(__('some one send mail ').$resource->company,'fa fa-building');
            return back()->with('done',__('data sent successfully'));
        }catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }


    public function rules()
    {
        return [
            'name'=>'required|string',
            'company'=>'required|string',
            'phone'=>'required|string',
            'website'=>'nullable|string',
            'email'=>'required|email',
            'message'=>'required|string|max:200',
        ];
    }

}
