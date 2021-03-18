<?php

namespace App\Http\Controllers\Reports;

use App\Http\Controllers\Controller;
use App\Models\Awb;
use App\Models\CourierSheet;
use App\Models\CourierSheetDetail;

class CourierReportController extends Controller
{
    public function courierAwbReport()
    {
        $query = CourierSheet::query();

        if (request()->courier_id >0)
        {
            $query->where('courier_id',request()->courier_id);
        }
        if (request()->date_from >0)
        {
            $query->whereDate('date','>=',request()->date_from);
        }

        if (request()->date_to >0)
        {
            $query->whereDate('date','<=',request()->date_to);
        }

        $ids = $query->pluck('id')->toArray();
        $detailsIds = CourierSheetDetail::whereIn('sheet_id', $ids)->pluck('awb_id')->toArray();
        $awbs = Awb::whereIn('id', $detailsIds)->get();
        return $awbs;
    }
}
