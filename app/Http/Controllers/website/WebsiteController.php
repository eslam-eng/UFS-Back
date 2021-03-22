<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Imports\AreaImport;
use App\Models\Area;
use App\Models\Company;
use App\Models\Status;
use App\Models\TransType;
use Illuminate\Http\Request;
use DB;

class WebsiteController extends Controller
{


    public function home()
    {
        $company = Company::admin();
        return view('website.home', compact('company'));
    }

    public function about()
    {
        $data = DB::table('website_setting')->find(1);
        $company = Company::admin();
        return view('website.about', compact('company', 'data'));
    }

    public function services()
    {
        $data = DB::table('website_setting')->find(2);
        $company = Company::admin();
        return view('website.service', compact('company', 'data'));
    }

    public function contact()
    {
        $company = Company::admin();
        return view('website.contact', compact('company'));
    }

    public function requestPickup()
    {
        $company = Company::admin();
        $status = Status::where('type', 'pickup')->get();
        $companies = Company::all();
        $transTypes = TransType::all();
        $types = ['domestic', 'international'];

        return view('website.request_pickup', compact('company', 'companies', 'status', 'transTypes', 'types'));
    }

}
