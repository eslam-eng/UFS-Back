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


    public function destroy(PickupHistory $resource)
    {
        try {
            watch(__('delete pickup ').$resource->id,'fa fa-trash');
            $resource->delete();
            return responseJson(1, __('done'));
        } catch (\Exception $th) {
            return responseJson(0, __($this->exception_message),$th->getMessage());
        }

    }
}
