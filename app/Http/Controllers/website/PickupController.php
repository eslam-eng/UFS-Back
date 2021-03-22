<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Pickup;
use App\Models\PickupHistory;
use Illuminate\Http\Request;

class PickupController extends Controller
{
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
            return back();
        }catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
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
