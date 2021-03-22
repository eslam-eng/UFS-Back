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
        if(!$resource)
            return back()->with('failed', [__('this code doesnot exists')]);

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
