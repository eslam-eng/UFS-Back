<?php

namespace App\Http\Controllers\Reports;

use App\Helper\StatusCode;
use App\Http\Controllers\Controller;
use App\Models\Awb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AwbReportController extends Controller
{
    public function companyAwbReport()
    {
        $query = Awb::query();

        if (request()->company_id >0)
        {
            $query->where('company_id',request()->company_id);
        }
        if (request()->date_from >0)
        {
            $query->whereDate('date','>=',request()->date_from);
        }

        if (request()->date_to >0)
        {
            $query->whereDate('date','<=',request()->date_to);
        }

        if (request()->status_id >0)
        {
            $query->where('status_id',request()->status_id);
        }

        return $query;
    }

    public function awbStatusReport()
    {
        $awbStatusChart = DB::table('statuses')
            ->select(
                'statuses.name',
                DB::raw('(select count(awbs.id) from awbs where status_id=statuses.id) as status_count')
            )->get(['code', 'status_count'])->toArray();

        return $awbStatusChart ;

//        $deliverd_awb = $query->where('status_id',StatusCode::$DELIVERED)->count();
//        $prepare_awb = $query->where('status_id',StatusCode::$PREPARE)->count();
//        $return_with_charge_awb = $query->where('status_id',StatusCode::$RETURN_WITH_CHARGE)->count();
//        $return_without_charge_awb = $query->where('status_id',StatusCode::$RETURN_WITHOUT_CHARGE)->count();
//        $collected_awb = $query->where('status_id',StatusCode::$COLLECTED)->count();
//        $paied_to_customer = $query->where('status_id',StatusCode::$PAID_TO_CUSTOMER)->count();
//
//
//        $awb_status_count = [
//            'deliverd'=>$deliverd_awb,
//            'prepared'=>$prepare_awb,
//            'returnWithCharge'=>$return_with_charge_awb,
//            'returnWithoutCharge'=>$return_without_charge_awb,
//            'collected'=>$collected_awb,
//            'paidToCustomer'=>$paied_to_customer,
//        ];
//
//        return view('reports.awb_status',['awb_status_count'=>$awb_status_count]) ;

    }


    public function deleverdAwb()
    {
        $deliverdAwb = Awb::with(['company', 'department', 'paymentType', 'branch', 'receiver', 'service', 'status', 'city', 'area', 'user'])->where('status_id',StatusCode::$DELIVERED)->get();
        return $deliverdAwb;
    }

    public function prepairedAwb()
    {
        $prepairedAwb = Awb::with(['company', 'department', 'paymentType', 'branch', 'receiver', 'service', 'status', 'city', 'area', 'user'])->where('status_id',StatusCode::$PREPARE)->get();
        return $prepairedAwb;
    }


}
