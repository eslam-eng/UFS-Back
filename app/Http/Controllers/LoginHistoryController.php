<?php

namespace App\Http\Controllers;

use App\Models\LoginHistory;
use Illuminate\Http\Request;

class LoginHistoryController extends Controller
{
    public function index()
    {
        $query = LoginHistory::with('user')->latest()->get();
        return $query;
    }
}
