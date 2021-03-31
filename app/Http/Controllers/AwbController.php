<?php

namespace App\Http\Controllers;

use App\Helper\StatusCode;
use App\Models\Awb;
use App\Models\AwbHistory;
use App\Models\AwbDetail;
use App\Models\Receipt;
use App\Models\Status;
use App\Models\Store;
use Illuminate\Http\Request;
use App\Models\CourierSheetDetail;
use Illuminate\Support\Facades\DB;

class AwbController extends Controller {

    public function index() {
        $referanceCol = "(select referance from receivers where receivers.id = receiver_id)";
        $query = Awb::latest()
        ->with(['company', 'department', 'paymentType', 'branch', 'receiver', 'service', 'status', 'city', 'area', 'user', 'awbHistory'])
        ->select('*', DB::raw($referanceCol . ' as referance'));

        if (request()->company_id > 0) {
            $query->where('company_id', request()->company_id);
        }

        if (request()->branch_id > 0)
            $query->where('branch_id', request()->branch_id);

        if (request()->city_id > 0)
            $query->where('city_id', request()->city_id);

        if (request()->area_id > 0)
            $query->where('area_id', request()->area_id);

        if (request()->department_id > 0)
            $query->where('department_id', request()->department_id);

        if (request()->search > 0)
            $query->where(function($q){
                $q->where('code', "like", "%" . request()->search . "%");
            });

        if (request()->referance) {
            $query->having('referance', request()->referance);
        }

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
            $query->where('branch_id', request()->user()->branch_id);
        }

        if (request()->steper) {
            $ids = Status::where('steper', request()->steper)->pluck('id')->toArray();
            $query->whereIn('status_id', $ids);
        }

        return $query->latest()->paginate(60);
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

        if (optional($resource->status)->code == StatusCode::$DELIVERED && $request->status_id == optional(Status::delivered())->id) {

            return responseJson(0, __('the shipment already delivered'));

        }

        $validator = validator($request->all(), ['status_id' => 'required']);
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->first(), "");
        }
        try {


            // store awb status
            $resource->update($request->all());

            AwbHistory::create([
                'awb_id' => $resource->id,
                'user_id' => $request->user()->id,
                'status_id' => $request->status_id
            ]);

            // calculate awb shipment price
            $calAwbShipmentPrice = new CalculatorShipmentPriceController();
            $calAwbShipmentPrice->getShipmentPrice($resource->fresh());

            // make transaction on treasury in case of collected status
            $this->makeTransactionForCollectedStatus($resource->fresh());

            // make transaction on treasury in case of paid to sender status
            $this->makeTransactionForPaidToSenderStatus($resource->fresh());

            // make transaction on treasury in case of Return With Paid Status
            $this->makeTransactionForReturnWithChargeStatus($resource->fresh());

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
            $data['status_id'] = optional(Status::where('type', 'awb')->first())->id;
            $data['user_id'] = $request->user()->id;
            $data['date'] = date('Y-m-d');

            // store awb object
            $resource = Awb::create($data);

            // awb code
            $code = date('Y') . date('m') . date('d') . $resource->id;

            // check if is return
            if ($resource->is_return)
                $code = "R-" . $code;

            // generate awb code
            $resource->update([
                "code" => $code
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
            $calAwbShipmentPrice->getShipmentPrice($resource->fresh());

            // make transationc
            $this->makeTransactionForCollectedStatus($resource->refresh());

            watch(__('create awb with code ') . $resource->code, 'fa fa-newspaper-o');
            return responseJson(1, __('done'), $resource->fresh());
        } catch (\Exception $th) {
        return responseJson(0, $th->getMessage()/*__('please fill all inputs')*/);
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

            if (isset($data['details'])) {
                // delete old
                $resource->details()->delete();

                // store new details of awb
                foreach ($data['details'] as $row) {
                    $row['awb_id'] = $resource->id;
                    AwbDetail::create($row);
                }
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


    public function makeTransactionForReturnWithChargeStatus(Awb $awb)
    {
        if (optional($awb->status)->code == 3 && $awb->payment_type_id != 1)
        {
            $value = $awb->shiping_price;
            $store = Store::first();

            if ($value == 0) {
                return;
            }
            $receipt = Receipt::where('model_id', $awb->id)->where('model_type', 'awb')->where('type', 'in')->first();
            if ($receipt) {
                if ($receipt->value != $value) {
                    $store->makeTransation($receipt->value * -1);
                    $receipt->delete();
                } else
                    return;
            }

            $inReceipt = Receipt::create([
                'date'=>date('Y-m-d'),
                'store_id'=>optional($store)->id,
                'model_id'=>$awb->id,
                'model_type'=>'awb',
                'notes'=>__('تم التحصيل من بوليصه رقم ').$awb->code,
                'value'=>$value,
                'type'=>'in'
            ]);

            $store->makeTransation($value);
        }
    }

    public function makeTransactionForCollectedStatus(Awb $awb)
    {
        if ((optional($awb->status)->code == 7 && $awb->payment_type_id != 1) || ($awb->payment_type_id == 1 && optional($awb->status)->code != 8))
        {
            $value = $awb->shiping_price+$awb->collection;
            $store = Store::first();

            if ($value == 0) {
                return;
            }
            $receipt = Receipt::where('model_id', $awb->id)->where('model_type', 'awb')->where('type', 'in')->first();
            if ($receipt) {
                if ($receipt->value != $value) {
                    $store->makeTransation($receipt->value * -1);
                    $receipt->delete();
                } else
                    return;
            }

            $inReceipt = Receipt::create([
                'date'=>date('Y-m-d'),
                'store_id'=>optional($store)->id,
                'model_id'=>$awb->id,
                'model_type'=>'awb',
                'notes'=>__('تم التحصيل من بوليصه رقم ').$awb->code,
                'value'=>$value,
                'type'=>'in'
            ]);

            $store->makeTransation($value);
        }
    }

    public function makeTransactionForPaidToSenderStatus(Awb $awb)
    {
        if (optional($awb->status)->code == 8)
        {
            $value = $awb->net_price;
            $store = Store::first();

            if ($value == 0) {
                return;
            }

            $receipt = Receipt::where('model_id', $awb->id)->where('model_type', 'awb')->where('type', 'out')->first();
            if ($receipt) {
                if ($receipt->value != $value) {
                    $store->makeTransation($receipt->value);
                    $receipt->delete();
                } else
                    return;
            }

            $inReceipt = Receipt::create([
                'date'=>date('Y-m-d'),
                'store_id'=>optional($store)->id,
                'model_id'=>$awb->id,
                'model_type'=>'awb',
                'notes'=>__('تم التوريد من البوليصه رقم ').$awb->code,
                'value'=>$value,
                'type'=>'out'
            ]);

            $store->makeTransation($value * -1);
        }
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
