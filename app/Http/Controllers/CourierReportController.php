<?php

namespace App\Http\Controllers;

use App\Models\CourierSheet;
use Illuminate\Http\Request;

class CourierReportController extends Controller
{
    public function courierAwbReport()
    {
        $query = CourierSheet::with('sheetDetails');
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
        $courierAwbs = $query->get();

        return $courierAwbs;
    }
}
