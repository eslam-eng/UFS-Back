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


    public function destroy(AwbHistory $resource)
    {
        try {
            watch(__('delete Awb History ').$resource->id,'fa fa-trash');
            $resource->delete();
            return responseJson(1, __('done'));
        } catch (\Exception $th) {
            return responseJson(0, __($this->exception_message),$th->getMessage());
        }

    }
}
