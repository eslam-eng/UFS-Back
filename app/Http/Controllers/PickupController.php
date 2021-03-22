<?php

namespace App\Http\Controllers;

use App\Models\Pickup;
use App\Models\PickupHistory;
use App\Models\Status;
use Illuminate\Http\Request;

class PickupController extends Controller
{
    public function index()
    {
        $query = Pickup::query()->with(['company', 'status', 'courier', 'user', 'transType', 'pickupHistory']);

        if (request()->search) {
            $query
                    ->where('date', 'like', '%'.request()->search.'%')
                    ->where('time_from', 'like', '%'.request()->search.'%')
                    ->where('time_to', 'like', '%'.request()->search.'%')
                    ->orWhere('code', 'like', '%'.request()->search.'%');
        }

        if (request()->date) {
            $query->where('date', request()->date);
        }

        if (request()->company_id > 0) {
            $query->where('company_id', request()->company_id);
        }

        if (request()->courier_id > 0) {
            $query->where('courier_id', request()->courier_id);
        }

        if (request()->status_id > 0) {
            $query->where('status_id', request()->status_id);
        }

        if (request()->user()->company_id != 1) {
            $query->where('company_id', request()->user()->company_id);
        }

        return $query->get();
    }

    public function changeStatus(Pickup $resource, Request $request) {
        $oldStatus = $resource->status->name;
        $validator = validator($request->all(), ['status_id' => 'required']);
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->first(), "");
        }
        try {


            // store pickup status
            $resource->update($request->all());

            PickupHistory::create([
                'pickup_id' => $resource->id,
                'user_id' => $request->user()->id,
                'status_id' => $request->status_id
            ]);



            watch(__('The pickup ') . $resource->code . ' status has changed from ' . $oldStatus . ' to ' . $resource->status->name, 'fa fa-newspaper-o');
            return responseJson(1, __('done'), $resource->pickupHistory()->get());
        } catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }

    public function store(Request $request)
    {
        $validator = validator($request->all(),$this->rules());
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->first(), "");
        }
        try {
            $data = $request->all();
            $data['code'] = time();
            $data['user_id'] = $request->user()->id;

            $resource = Pickup::create($data);
            $code = date('d') . date('m') . $resource->id;

            $resource->update([
                "code" => $code
            ]);

            // store first status
            PickupHistory::create([
                'pickup_id' => $resource->id,
                'user_id' => $request->user()->id,
                'status_id' => $request->status_id
            ]);

            watch(__('add pickup ').$resource->code,'fa fa-people-carry');
            return responseJson(1, __('done'), $resource->refresh());
        }catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }


    public function update(Request $request, Pickup $resource)
    {
        $validator = validator($request->all(),$this->rules());
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->first(), "");
        }
        try {
            $resource->update($request->all());

            // record status
            PickupHistory::create([
                'pickup_id' => $resource->id,
                'user_id' => $request->user()->id,
                'status_id' => $request->status_id
            ]);

            watch(__('update pickup ').$resource->code,'fa fa-people-carry');
            return responseJson(1, __('done'), $resource);
        } catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }


    public function destroy(Pickup $resource)
    {
        try {
            watch(__('delete pickup ').$resource->code,'fa fa-trash');
            $resource->delete();
            return responseJson(1, __('done'));
        } catch (\Exception $th) {
            return responseJson(0, __($this->exception_message),$th->getMessage());
        }

    }

    public function pickupHistory()
    {
        $query = Pickup::query()->with('pickupHistory')->get();
        return $query;
    }

    public function rules()
    {
        return [
            'date'=>'required',
            'company_id'=>'required|integer|exists:companies,id',
            'status_id'=>'required|integer|exists:statuses,id',
            'time_from'=>'required',
            'time_to'=>'required',
            'courier_id'=>'nullable|exists:couriers,id'
        ];
    }
}
