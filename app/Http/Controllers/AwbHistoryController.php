<?php

namespace App\Http\Controllers;

use App\Models\Awb;
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
            $awb = Awb::find($resource->awb_id);
            watch(__('delete Awb History ').$resource->id,'fa fa-trash');
            $resource->delete();


            return responseJson(1, __('done'), $awb->awbHistory()->get());
        } catch (\Exception $th) {
            return responseJson(0, __($this->exception_message),$th->getMessage());
        }

    }
}
