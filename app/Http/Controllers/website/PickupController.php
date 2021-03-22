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

        $data = $this->validate($request,$this->rules());
        try {
            $data['code'] = time();

            $resource = Pickup::create($data);
            $code = date('d') . date('m') . $resource->id;

            $resource->update([
                "code" => $code
            ]);

            // store first status
            PickupHistory::create([
                'pickup_id' => $resource->id,
                'status_id' => $request->status_id
            ]);

            watch(__('add pickup ').$resource->code,'fa fa-people-carry');
            return back()->with('done',__('pickup sent successfully'));
        }catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }


    public function rules()
    {
        return [
            'date'=>'required',
            'company_id'=>'required|exists:companies,id',
            'status_id'=>'required|exists:statuses,id',
            'trans_type_id'=>'required|exists:trans_type,id',
            'time_from'=>'required',
            'time_to'=>'required',
            'shipment_number'=>'required|numeric',
            'courier_id'=>'nullable|exists:couriers,id'
        ];
    }
}
