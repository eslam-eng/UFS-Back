<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function career()
    {
        return view('website.carrer');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }

}
