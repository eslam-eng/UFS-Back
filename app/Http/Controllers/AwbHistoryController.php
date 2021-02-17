<?php

namespace App\Http\Controllers;

use App\Models\AwbHistory;
use Illuminate\Http\Request;

class AwbHistoryController extends Controller
{
    public function index()
    {
        $query = AwbHistory::with('awb','user','status')->latest()->get();
        return $query;
    }
}
