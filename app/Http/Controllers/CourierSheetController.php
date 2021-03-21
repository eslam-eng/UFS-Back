<?php

namespace App\Http\Controllers;

use App\Helper\StatusCode;
use App\Models\Awb;
use App\Models\CourierSheet;
use App\Models\CourierSheetDetail;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Status;

class CourierSheetController extends Controller
{

    public function index()
    {
        $query = CourierSheet::query()->with('courier','user','sheetDetails');


        if (request()->id > 0)
            $query->where('id', request()->id);

        if (request()->courier_id > 0)
            $query->where('courier_id', request()->courier_id);

        if (request()->search)
            $query->where('date', "like", "%" . request()->search . "%");

        if (request()->date_from)
            $query->where('date', '>=', request()->date_from);

        if (request()->date_to)
            $query->where('date', '<=', request()->date_to);

        if (request()->date_from && request()->date_to)
            $query->whereBetween('date', [request()->date_from, request()->date_to]);

        if (request()->user()->company_id != 1) {
            $query->where('company_id', request()->user()->company_id);
        }

        if (request()->is_pending == 1) {
            $query->whereIn('id', $this->sheetPendding());
        }

        return $query->get();
    }

    public function print(CourierSheet $resource) {
        $company = Company::admin();
        return view("courier_sheet", compact("resource", "company"));
    }

    public function load($resource)
    {
        $query = CourierSheet::with('courier','user','sheetDetails')->where('id', $resource)->first();
        return $query;
    }

    public function store(Request $request)
    {
        $validator = validator($request->all(),$this->rules());
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->first(), "");
        }
        try {
            $data = $request->all();
            $data['user_id'] = $request->user()->id;
            $resource = CourierSheet::create($data);

            // add new awb id
            foreach($data['details'] as $awbId) {
                CourierSheetDetail::create([
                    "sheet_id" => $resource->id,
                    "awb_id" => $awbId,
                ]);
            }

            watch(__('add courierSheet ').$resource->courier->name,'fa fa-file');
            return responseJson(1, __('done'), $resource->refresh());
        }catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }


    public function update(Request $request, CourierSheet $resource)
    {
        $validator = validator($request->all(),$this->rules());
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->first(), "");
        }
        try {
            $data = $request->all();
            $data['user_id'] = $request->user()->id;
            $resource->update($data);

            // remove old
            $resource->sheetDetails()->delete();

            // add new awb id
            foreach($data['details'] as $awbId) {
                CourierSheetDetail::create([
                    "sheet_id" => $resource->id,
                    "awb_id" => $awbId,
                ]);
            }
            watch(__('update courierSheet ').$resource->courier->name,'fa fa-file');
            return responseJson(1, __('done'), $resource);
        } catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }


    public function destroy(CourierSheet $resource)
    {
        try {
            $resource->sheetDetails()->delete();
            watch(__('delete courierSheet ').$resource->courier->name,'fa fa-trash');
            $resource->delete();
            return responseJson(1, __('done'));
        } catch (\Exception $th) {
            return responseJson(0, __($this->exception_message),$th->getMessage());
        }

    }


    public function sheetTransfer(Request $request)
    {
        //sheet_id,awb_id
        $validator = validator($request->all(),['sheet_id'=>'required|exists:courier_sheets,id','awb_id'=>'required|array|min:1|exists:awbs,id']);
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->first(), "");
        }
        //delete awb from old sheet
        CourierSheetDetail::whereIn('awb_id',$request->awb_id)->delete();

        //transfer awb
        foreach ($request->awb_id as $awb)
        {
            CourierSheetDetail::create([
                'sheet_id'=>$request->sheet_id,
                'awb_id'=>$awb,
            ]);
        }
        watch(__('awb transfer to sheet').$request->sheet_id,'fa fa-file');
        return responseJson(1, __('done'));
    }


    public function sheetPendding()
    {
        $statusIds = Status::whereIn('code', [StatusCode::$DELIVERED, StatusCode::$PAID_TO_CUSTOMER])->pluck('id')->toArray();
        $query = Awb::query();
        $undeliverdAwbs = $query->whereNotIn('status_id', $statusIds)->pluck('id')->toArray();
        $sheetdetailsIds = CourierSheetDetail::whereIn('awb_id', $undeliverdAwbs)->pluck('sheet_id')->toArray();
        return $sheetdetailsIds;
    }

    public function rules()
    {
        return [
            'courier_id'=>'required|integer|exists:couriers,id',
            'date'=>'required',

        ];
    }
}
