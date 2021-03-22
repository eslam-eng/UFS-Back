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
        $data = $this->validate($request,['track_number'=>'required|exists:awbs,code']);
        $resource = Awb::where('code',$request->track_number)->first();

        $awbStepers = [];

        $steppers = ['in_company', 'processing', 'hold', 'delivered'];

        foreach($resource->awbHistory()->get() as $item) {
            if (!isset($awbStepers[optional($item->status)->stepper])) {
                $awbStepers[optional($item->status)->stepper] = 1;
            }
        }

        return view('website.awb_track',compact('resource', 'steppers', 'awbStepers'));
    }
}
