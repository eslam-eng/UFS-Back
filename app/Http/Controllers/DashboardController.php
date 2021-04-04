<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Awb;
use App\Models\Status;


class DashboardController extends Controller
{

    public function home()
    {
        $awbQuery = Awb::query();

        if (request()->user()->company_id != 1) {
            $awbQuery->where('company_id', request()->user()->company_id);
        }

        $stepers = ['in_company','processing','hold','delivered'];
        $counts = [];
        foreach ($stepers as $steper) {
            $steperQuery = clone $awbQuery;
            $statusIds = Status::where('steper', $steper)->pluck('id')->toArray();
            $counts[$steper] = $steperQuery->whereIn('status_id', $statusIds)->count();
        }

        $awbStatusChart = DB::table('statuses')
                ->select(
                    'statuses.name',
                    DB::raw('(select count(awbs.id) from awbs where status_id=statuses.id) as status_count')
                )->get(['code', 'status_count'])->toArray();

        $awbCollectionQuery = clone $awbQuery;
        $awbCollectionChart = $awbCollectionQuery->where('collection', '>', '0')->get(['code', 'collection'])->toArray();

        $data =[
            'counts'=>$counts,
            'awb_status_chart'=>$awbStatusChart,
            'awb_collection_chart'=>$awbCollectionChart
        ];

        return $data;
    }

}
