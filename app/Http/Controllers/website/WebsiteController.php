<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Status;
use App\Models\TransType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebsiteController extends Controller
{


    public function home()
    {
        $company = Company::admin();
        $cities = DB::table('cities')->select('id', 'name')->get();
        return view('website.home', compact('company','cities'));
    }
//----------------------------------------------------------------------------------
//    old about blade that return data to view from dashboard
//    public function about()
//    {
//        $data = DB::table('website_setting')->find(1);
//        $company = Company::admin();
//        return view('website.about', compact('company', 'data'));
//    }
//----------------------------------------------------------------------------------
//    public function services()
//    {
//        $data = DB::table('website_setting')->find(2);
//        $company = Company::admin();
//        return view('website.service', compact('company', 'data'));
//    }


    public function about()
    {
        return view('website.about');
    }



    public function domesticService()
    {
        return view('website.domestic_service');
    }
// export shipments view

    public function exportShipmentService()
    {
        return view('website.exportshipment');
    }
// import shipments view
    public function importShipmentService()
    {
        return view('website.importshipment');
    }

    public function service()
    {
        return view('website.services');
    }


    public function specialService()
    {
        return view('website.specialserive');
    }

    public function additionalService()
    {
        return view('website.additional_service');
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
