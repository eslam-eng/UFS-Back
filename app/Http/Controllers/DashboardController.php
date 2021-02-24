<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DashboardController extends Controller
{

    public function home()
    {

        $awb_count = DB::table('awbs')->count();
        $receiver_count = DB::table('receivers')->count();
        $courier_count = DB::table('couriers')->count();
        $pickup_count = DB::table('pickups')->count();

        $awbStatusChart = DB::table('statuses')
                ->select(
                    'statuses.name',
                    DB::raw('(select count(awbs.id) from awbs where status_id=statuses.id) as status_count')
                )->get(['code', 'status_count'])->toArray();

        $awbCollectionChart = DB::table('awbs')->get(['code', 'collection'])->toArray();

        $data =[
            'awb_count'=>$awb_count,
            'receiver_count'=>$receiver_count,
            'courier_count'=>$courier_count,
            'pickup_count'=>$pickup_count,
            'awb_status_chart'=>$awbStatusChart,
            'awb_collection_chart'=>$awbCollectionChart
        ];

        return $data;
    }

}
