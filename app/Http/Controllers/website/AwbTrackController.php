<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Awb;
use App\Models\AwbHistory;
use Illuminate\Http\Request;

class AwbTrackController extends Controller
{

    public function index(Request $request)
    {
//        $data = $this->validate($request,['track_number'=>'required|exists:awbs,code']);


        $awbStepers = [];

        $steppers = ['in_company', 'processing', 'hold', 'delivered'];
        $resource = Awb::where('code',$request->track_number)->first();
        if (!$resource)
        {
            $info_resource = new Awb();
            $info_resource->setConnection('mysql2');
            $resource = $info_resource->where('code',$request->track_number)->first();
            if (!$resource)
                return back()->withErrors(['track_number'=>___('Awb does not exsist')]);
            
        }


        foreach($resource->awbHistory()->get() as $item) {
            //return optional($item->status)->steper;
            if (!isset($awbStepers[optional($item->status)->steper])) {
                $awbStepers[optional($item->status)->steper] = 1;
            }
        }

        return view('website.awb_track',compact('resource', 'steppers', 'awbStepers'));
    }

    public function trackMore()
    {
        return view('website.trackmore');
    }
}
