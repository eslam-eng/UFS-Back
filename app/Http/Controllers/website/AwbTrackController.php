<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Awb;
use App\Models\AwbHistory;
use Illuminate\Http\Request;

class AwbTrackController extends Controller
{

    public function index()
    {

        $resource = Awb::where('code',request()->track_number)->first();
        return view('website.pickup_history',compact('resource'));
    }
}
