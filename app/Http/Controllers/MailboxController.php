<?php

namespace App\Http\Controllers;

use App\Models\MailBox;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailboxController extends Controller
{
    public function index()
    {
        $query = MailBox::query();

        if (request()->type)
        {
            $query->where('type',request()->type);

        }

        if (request()->serch)
        {
            $query->where('name',"like", "%" . request()->serch . "%")
                  ->orWhere('company',"like", "%" . request()->serch . "%")
                  ->orWhere('message',"like", "%" . request()->serch . "%")
                  ->orWhere('phone',"like", "%" . request()->serch . "%")
            ;

        }
        return $query->get();
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
            Mail::to("$request->email")->send(new \App\Mail\MailBox($request->all()));
//            watch(__('some one send mail ').$resource->company,'fa fa-building');
            return back();
        }catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }

    public function destroy(MailBox $resource)
    {
        try {
            watch(__('delete Mail ').$resource->company,'fa fa-trash');
            $resource->delete();
            return responseJson(1, __('done'));
        } catch (\Exception $th) {
            return responseJson(0, __($this->exception_message),$th->getMessage());
        }

    }

    public function rules()
    {
        return [
            'name'=>'required|string',
            'company'=>'required|string',
            'phone'=>'required|string',
            'website'=>'nullable|string|max:50',
            'email'=>'required|email',
            'message'=>'required|string|max:200',
        ];
    }
}
