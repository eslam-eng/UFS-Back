<?php

namespace App\Http\Controllers;

use App\Models\MailBox;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailboxController extends Controller
{
    public function index()
    {
        $query = MailBox::where('type',request()->type);


        if (request()->search)
        {
            $query->where('name',"like", "%" . request()->search . "%")
                  ->orWhere('company',"like", "%" . request()->search . "%")
                  ->orWhere('message',"like", "%" . request()->search . "%")
                  ->orWhere('phone',"like", "%" . request()->search . "%");

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
            $data = $request->all();
            $data['type'] = "sent";
            $resource = MailBox::create($data);

            // send email
            sendMail($request->email, "New Message From " . $request->user()->email, view("mail", compact("resource")));


            return responseJson(1, __('Message has Been Sent'));
        }catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }

    public function destroy(MailBox $resource)
    {
        try {
            watch(__('delete Mail ').$resource->company,'fa fa-trash');

            if ($resource->type == 'trash')
                $resource->delete();
            else
                $resource->update([ "type" => "trash" ]);
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
            'message'=>'required',
        ];
    }
}
