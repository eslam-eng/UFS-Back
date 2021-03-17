<?php

namespace App\Http\Controllers;

use App\Models\Awb;
use Illuminate\Http\Request;

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

        $company_awbs = $query->get();
        return $company_awbs;

    }

    public function undeliverdAwbReport()
    {
        $query = Awb::query();

        if (request()->status_id >0)
        {
            $query->where('status_id',request()->status_id);
        }
        if (request()->date_from >0)
        {
            $query->whereDate('date','>=',request()->date_from);
        }

        if (request()->date_to >0)
        {
            $query->whereDate('date','<=',request()->date_to);
        }

        $undeliverd_awbs = $query->get();
        return $undeliverd_awbs;

    }
}
