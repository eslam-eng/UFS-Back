<?php

namespace App\Http\Controllers;

use App\Imports\AreaImport;
use Illuminate\Http\Request;
use App\Models\Awb;
use App\Models\City;
use App\Models\Company;
use App\Models\Courier;
use App\Models\CourierDaily;
use App\Models\CourierSheet;
use App\Models\CourierSheetDetail;
use App\Models\PaymentType;
use App\Models\Receipt;
use App\Models\Status;
use App\Models\Store;
use DB;

class ReportController extends Controller
{

    public function awbPrices()
    {
        $status = Status::whereIn('code', ['7', '3'])->pluck('id')->toArray();
        $statusPaidToCustomer = Status::where('code', '8')->first();


        return $statusPaidToCustomer;
        $query = Awb::query()
       // ->whereIn('status_id', $status)
        ->whereRaw('(status_id != "'.optional($statusPaidToCustomer)->id.'" && payment_type_id = "'.optional(PaymentType::first())->id.'") or (status_id in ('.$status.'))');
       // ->orWhereRaw('(status_id != "'.optional($statusPaidToCustomer)->id.'" && payment_type_id = "'.optional(PaymentType::first())->id.'")');
            /*->orWhere(function($q) use ($statusPaidToCustomer) {
                $q->where('status_id', '!=', optional($statusPaidToCustomer)->id)
                ->where('payment_type_id', optional(PaymentType::first())->id);
            });*/


        if (request()->company_id > 0) {
            $query->where('company_id', request()->company_id);
        }

        if (request()->date_from)
            $query->whereDate('date', '>=', request()->date_from);

        if (request()->date_to)
            $query->whereDate('date', '<=', request()->date_to);

        $awbs = $query->get();
        $company = Company::find(request()->company_id);

        return view('reports.awb_price', compact('company', 'awbs'));
    }

    public function storeTransactions()
    {
        $query = Receipt::query();

        if (request()->store_id > 0) {
            $query->where('store_id', request()->store_id);
        }

        if (request()->date_from)
            $query->whereDate('date', '>=', request()->date_from);

        if (request()->date_to)
            $query->whereDate('date', '<=', request()->date_to);

        $store = Store::find(request()->store_id);
        $resources = $query->get();

        return view('reports.store_transaction', compact('resources', 'store'));
    }

    public function companyAwbs() {
        $data = Company::all();
        foreach($data as $item) {
            $awbQuery = Awb::where('company_id', $item->id);

            if (request()->date_from)
                $awbQuery->whereDate('date', '>=', request()->date_from);

            if (request()->date_to)
                $awbQuery->whereDate('date', '<=', request()->date_to);

            $countQuery = clone $awbQuery;
            $wQuery = clone $awbQuery;
            $pQuery = clone $awbQuery;

            $item->awb_count = $countQuery->count();
            $item->awb_weight = $wQuery->sum('weight');
            $item->awb_pieces = $pQuery->sum('pieces');
        }

        return $data;
    }

    public function oneCompanyAwbStatus() {
        $data = Status::all();
        foreach($data as $item) {
            $awbQuery = Awb::where('status_id', $item->id)->where('company_id', request()->company_id);

            if (request()->date_from)
                $awbQuery->whereDate('date', '>=', request()->date_from);

            if (request()->date_to)
                $awbQuery->whereDate('date', '<=', request()->date_to);

            $countQuery = clone $awbQuery;
            $wQuery = clone $awbQuery;
            $pQuery = clone $awbQuery;

            $item->awb_count = $countQuery->count();
            $item->awb_weight = $wQuery->sum('weight');
            $item->awb_pieces = $pQuery->sum('pieces');
        }

        return $data;
    }

    public function oneCompanyAwbCity() {
        $data = City::all();
        foreach($data as $item) {
            $awbQuery = Awb::where('city_id', $item->id)->where('company_id', request()->company_id);

            if (request()->date_from)
                $awbQuery->whereDate('date', '>=', request()->date_from);

            if (request()->date_to)
                $awbQuery->whereDate('date', '<=', request()->date_to);

            $countQuery = clone $awbQuery;
            $wQuery = clone $awbQuery;
            $pQuery = clone $awbQuery;

            $item->awb_count = $countQuery->count();
            $item->awb_weight = $wQuery->sum('weight');
            $item->awb_pieces = $pQuery->sum('pieces');
        }

        return $data;
    }

    public function courierCommission() {
        $data = Courier::where(function($q){
            if (request()->courier_id > 0) {
                $q->where('id', request()->courier_id);
            }
        })->get();

        foreach($data as $item) {
            $courierDailyQuery = CourierDaily::where('courier_id', $item->id);

            if (request()->date_from)
                $courierDailyQuery->whereDate('date', '>=', request()->date_from);

            if (request()->date_to)
                $courierDailyQuery->whereDate('date', '<=', request()->date_to);


            $discountQuery = clone $courierDailyQuery;
            $additionalQuery = clone $courierDailyQuery;
            $courierCommission = $item->calculateCommission(request()->date_from, request()->date_to);


            $item->discount = $discountQuery->sum('discount');
            $item->additional = $additionalQuery->sum('additional');
            $item->commission = $courierCommission;
            $item->net_salary = ($item->salary + $item->additional + $item->commission) - ($item->discount);
        }

        return $data;
    }


    public function oneCourierAwbStatus() {
        $courierSheetQuery = CourierSheet::where('courier_id', request()->courier_id);

        if (request()->date_from)
            $courierSheetQuery->whereDate('date', '>=', request()->date_from);

        if (request()->date_to)
            $courierSheetQuery->whereDate('date', '<=', request()->date_to);


        $courierSheetIds = $courierSheetQuery->pluck('id')->toArray();

        $awbIds = CourierSheetDetail::whereIn('sheet_id', $courierSheetIds)->pluck('awb_id')->toArray();
        $awbQuery = Awb::whereIn('id', $awbIds);


        $data = Status::all();

        foreach($data as $item) {
            $statusQuery = clone $awbQuery;
            $item->awb_count = $statusQuery->where('status_id', $item->id)->count();
        }

        return $data;
    }
}
