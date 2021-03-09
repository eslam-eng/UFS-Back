<?php

namespace App\Http\Controllers;

use App\Models\PickupHistory;
use Illuminate\Http\Request;

class PickupHistoryController extends Controller
{
    public function index()
    {
        $query = PickupHistory::with('pickup','user','status')->latest()->get();
        return $query;
    }
}
