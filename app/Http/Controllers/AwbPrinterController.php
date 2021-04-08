<?php

namespace App\Http\Controllers;

use App\Helper\StatusCode;
use App\Imports\AwbImport;
use App\Models\Awb;
use App\Models\AwbHistory;
use App\Models\AwbDetail;
use App\Models\Receipt;
use App\Models\Status;
use App\Models\Store;
use Illuminate\Http\Request;
use App\Models\CourierSheetDetail;
use Illuminate\Support\Facades\DB;

class AwbPrinterController extends Controller {

    /**
     * print One Awb In A4 size
     *
     */
    public function printA4(Awb $resource) {

        // Test Mode
        //$resource = Awb::first();
        return view('awb_print.awb', compact("resource"));
    }

    /**
     * print More Than Awbs Paper In A4
     *
     */
    public function printA4s(Request $request) {
        $awbs = Awb::whereIn('id', $request->awbs)->get();

        // Test Mode
        //$awbs = Awb::take(2)->get();
        return view('awb_print.awbs', compact("awbs"));
    }

    /**
     * print 3 Awbs In A4 Size
     *
     */
    public function print1x3(Request $request) {
        $awbs = Awb::whereIn('id', $request->awbs)->get();

        // Test Mode
        //$awbs = Awb::take(3)->get();
        return view('awb_print.threeAwbs', compact('awbs'));
    }

    /**
     * print 3x7 Awbs In A4 Size
     * 21 Awbs In One Paper
     *
     */
    public function print3x7(Request $request) {
        $awbs = Awb::whereIn('id', $request->awbs)->get();

        // Test Mode
        //$awbs = Awb::take(21)->get();
        return view('awb_print.3x7Awbs', compact('awbs'));
    }

    /**
     * print 3x8 Awbs In A4 Size
     * 24 Awbs In One Paper
     *
     */
    public function print3x8(Request $request) {
        $awbs = Awb::whereIn('id', $request->awbs)->get();

        // Test Mode
        //$awbs = Awb::take(24)->get();
        return view('awb_print.3x8Awbs', compact('awbs'));
    }

    /**
     * print 3x9 Awbs In A4 Size
     * 27 Awbs In One Paper
     *
     */
    public function print3x9(Request $request) {
        $awbs = Awb::whereIn('id', $request->awbs)->get();

        // Test Mode
        //$awbs = Awb::take(27)->get();
        return view('awb_print.3x9Awbs', compact('awbs'));
    }

    /**
     * print 3x10 Awbs In A4 Size
     * 30 Awbs In One Paper
     *
     */
    public function print3x10(Request $request) {
        $awbs = Awb::whereIn('id', $request->awbs)->get();

        // Test Mode
        //$awbs = Awb::take(31)->get();
        return view('awb_print.3x10Awbs', compact('awbs'));
    }


}
