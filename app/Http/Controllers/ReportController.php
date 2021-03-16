<?php

namespace App\Http\Controllers;

use App\Imports\AreaImport;
use Illuminate\Http\Request;
use App\Models\Awb;
use App\Models\Company;
use App\Models\Receipt;
use App\Models\Status;
use App\Models\Store;

class ReportController extends Controller
{

    public function awbPrices()
    {
        $status = Status::whereIn('code', ['7', '3'])->pluck('id')->toArray();
        $query = Awb::whereIn('status_id', $status);

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

}
