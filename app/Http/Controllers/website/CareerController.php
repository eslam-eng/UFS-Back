<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
//    for angular dashboard view

    public function index(){
        $query = Career::query();
        return $query->latest()->get();
    }



//    -----------for web routes and website views--------------------------------------------------------
    public function career()
    {
        return view('website.carrer');
    }

    public function store(Request $request)
    {
        if ($request->ajax())
        {
            $data = $this->validate($request,$this->rules());
            if ($request->has('cv')){
                $file = $request->file('cv');
                $data['cv']=$img_name = time()."-".$file->getClientOriginalName();
                $file->move(public_path('uploads/career'),$img_name);
            }
            $resource = Career::create($data);
            if ($resource)
                return response(['status'=>true,'message'=>'The data has been sent successfully. You will be contacted soon. Thank You']);

        }

    }

    public function rules()
    {
        return [
            'name'=>'required|string',
            'email'=>'nullable|string|email|unique:careers,email',
            'phone'=>'required|string',
            'address'=>'required|string',
            'qualification'=>'nullable',
            'degree'=>'nullable',
            'experiance'=>'nullable',
            'collage'=>'nullable|string',
            'industry'=>'nullable|string',
            'skills'=>'nullable|string',
            'cv'=>'nullable|mimes:docs,pdf|max:2048',
        ];
    }

}
