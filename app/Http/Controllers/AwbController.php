<?php

namespace App\Http\Controllers;

use App\Models\Awb;
use App\Models\AwbHistory;
use App\Models\AwbDetail;
use App\Models\Status;
use Illuminate\Http\Request;
use App\Models\CourierSheetDetail;
use Illuminate\Support\Facades\DB;

class AwbController extends Controller {

    public function index() {
        $query = Awb::query()->with(['company', 'department', 'paymentType', 'branch', 'receiver', 'service', 'status', 'city', 'area', 'user', 'awbHistory']);

        if (request()->company_id > 0)
            $query->where('company_id', request()->company_id);

        if (request()->branch_id > 0)
            $query->where('branch_id', request()->branch_id);

        if (request()->city_id > 0)
            $query->where('city_id', request()->city_id);

        if (request()->area_id > 0)
            $query->where('area_id', request()->area_id);

        if (request()->department_id > 0)
            $query->where('department_id', request()->department_id);

        if (request()->search > 0)
            $query->where('code', "like", "%" . request()->search . "%");

        if (request()->code)
            $query->where('code', "like", "%" . request()->code . "%");

        if (request()->date_from)
            $query->whereDate('date', '>=', request()->date_from);

        if (request()->date_to)
            $query->whereDate('date', '<=', request()->date_to);

        if (request()->courier_sheet == 'active') {
            $ids = CourierSheetDetail::select('awb_id')->pluck('awb_id')->toArray();
            $query->whereNotIn('id', $ids);
        }

        if (request()->user()->company_id != 1) {
            $query->where('company_id', request()->user()->company_id);
        }

        if (request()->steper) {
            $ids = Status::where('steper', request()->steper)->pluck('id')->toArray();
            $query->whereIn('status_id', $ids);
        }

        return $query->paginate(60);
    }

    public function load($resource) {
        $query = Awb::with(['details', 'company', 'department', 'paymentType', 'branch', 'receiver', 'service', 'status', 'city', 'area', 'user']);

        return $query->where('id', $resource)->first();
    }

    public function getTrash()
    {
        return Awb::onlyTrashed()
                ->with(['company', 'department', 'paymentType', 'branch',
                    'receiver', 'service', 'status', 'city', 'area', 'user', 'awbHistory'])->get();

    }

    public function changeStatus(Awb $resource, Request $request) {
        $oldStatus = $resource->status->name;
        $validator = validator($request->all(), ['status_id' => 'required']);
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->first(), "");
        }
        try {
            // store awb status
            $resource->update([
                'status_id' => $request->status_id
            ]);
            AwbHistory::create([
                'awb_id' => $resource->id,
                'user_id' => $request->user()->id,
                'status_id' => $request->status_id
            ]);
            watch(__('The shipment ') . $resource->code . ' status has changed from ' . $oldStatus . ' to ' . $resource->status->name, 'fa fa-newspaper-o');
            return responseJson(1, __('done'), $resource->awbHistory()->get());
        } catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }

    public function print(Awb $resource) {
        return view('awb', compact("resource"));
    }

    public function printSelected(Request $request) {
        $awbs = Awb::whereIn('id', $request->awbs)->get();
        $string = view('awbs', compact("awbs"));
        return $string;
    }

    public function store(Request $request) {
        $validator = validator($request->all(), $this->rules());
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->first(), "");
        }

        if (Status::count() <= 0)
            return responseJson(0, __('there is not status exists'));

        try {
            $data = $request->all();
            $data['status_id'] = optional(Status::first())->id;
            $data['user_id'] = $request->user()->id;
            $data['date'] = date('Y-m-d');

            // store awb object
            $resource = Awb::create($data);

            // generate awb code
            $resource->update([
                "code" => date('Y') . date('m') . date('d') . $resource->id
            ]);

            // store history
            AwbHistory::create([
                'awb_id' => $resource->id,
                'user_id' => $request->user()->id,
                'status_id' => $resource->status_id
            ]);

            // store details of awb
            foreach ($data['details'] as $row) {
                $row['awb_id'] = $resource->id;
                AwbDetail::create($row);
            }

            // calculate awb shipment price
            $calAwbShipmentPrice = new CalculatorShipmentPriceController();
            $calAwbShipmentPrice->getShipmentPrice($resource->refresh());

            watch(__('create awb with code ') . $resource->code, 'fa fa-newspaper-o');
            return responseJson(1, __('done'), $resource->refresh());
        } catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }

    public function update(Request $request, Awb $resource) {
        $validator = validator($request->all(), $this->rules());
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->first(), "");
        }
        try {
            $data = $request->all();

            // store awb object
            $resource->update($data);

            // delete old
            $resource->details()->delete();

            // store new details of awb
            foreach ($data['details'] as $row) {
                $row['awb_id'] = $resource->id;
                AwbDetail::create($row);
            }

            // calculate awb shipment price
            $calAwbShipmentPrice = new CalculatorShipmentPriceController();
            $calAwbShipmentPrice->getShipmentPrice($resource->refresh());

            watch(__('update awb with code ') . $resource->code, 'fa fa-newspaper-o');
            return responseJson(1, __('done'), $resource);
        } catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }

    public function destroy($resource) {
        try {
            $resource = DB::table('awbs')->find($resource);

            watch(__('delete awb with code ') . $resource->code, 'fa fa-trash');
            if ($resource->deleted_at) {
                $resource = Awb::onlyTrashed()->find($resource->id);
                $resource->forceDelete();
            }
            else {
                $resource = Awb::find($resource->id);
                $resource->delete();
            }
            return responseJson(1, __('done'));
        } catch (\Exception $th) {
            return responseJson(0, __($this->exception_message),$th->getMessage());
        }
    }

    public function restore($resource) {
        try {
            $resource = Awb::onlyTrashed()->find($resource);
            watch(__('restore awb with code ') . $resource->code, 'fa fa-reply');
            $resource->restore();
            return responseJson(1, __('done'));
        } catch (\Exception $th) {
            return responseJson(0, __($this->exception_message),$th->getMessage());
        }
    }


    public function awbHistory()
    {
        $query = Awb::query()->with('awbHistory');
        if (request()->code > 0)
            $query->where('code', "like", "%" . request()->code . "%");
        return $query->get();
    }



    public function rules() {
        return [
            'collection' => 'nullable|numeric',
            'company_id' => 'required|exists:companies,id',
            'branch_id' => 'required|exists:branches,id',
            'department_id' => 'required|exists:departments,id',
            'receiver_id' => 'required|exists:receivers,id',
            'payment_type_id' => 'required|exists:payment_types,id',
            'service_id' => 'required|exists:services,id',
            'city_id' => 'required|exists:cities,id',
            'area_id' => 'required|exists:areas,id',
            'weight' => 'required',
            'pieces' => 'required',
        ];
    }

}
