<?php

namespace Modules\Mobile\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Mobile\Entities\Setting;
use DB;

class SettingController extends Controller
{

    public function get()
    {
        return DB::table('settings')
            ->select('id', 'name', 'value')
            ->where('name', 'like', "%". Setting::$MOBILE_PREFIX ."%")
			->pluck('value', 'name')
            ->toArray();
    }

}
