<?php

namespace App\Http\Controllers;

use App\Imports\CourierImport;
use App\Models\Courier;
use Illuminate\Http\Request;

class CourierController extends Controller
{


    public function index()
    {
        $query = Courier::query()->with(['company', 'branch', 'department']);

        if (request()->search) {
            $query
                    ->where('name', 'like', '%'.request()->search.'%')
                    ->orWhere('phone', 'like', '%'.request()->search.'%')
                    ->orWhere('email', 'like', '%'.request()->search.'%')
                    ->orWhere('notes', 'like', '%'.request()->search.'%')
                    ->orWhere('address', 'like', '%'.request()->search.'%');
        }

        if (request()->company_id > 0) {
            $query->where('company_id', request()->company_id);
        }

        if (request()->branch_id > 0) {
            $query->where('branch_id', request()->branch_id);
        }

        if (request()->department_id > 0) {
            $query->where('department_id', request()->department_id);
        }

        if (request()->user()->company_id != 1) {
            $query->where('company_id', request()->user()->company_id);
            //
        }

        return $query->get();
    }

    public function store(Request $request)
    {
        $validator = validator($request->all(),$this->rules());
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->first(), "");
        }
        try {
            $resource = Courier::create($request->all());
            watch(__('add courier ').$resource->name,'fa fa-user');
            return responseJson(1, __('done'), $resource->refresh());
        }catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }


    public function update(Request $request, Courier $resource)
    {
        $validator = validator($request->all(),$this->rules());
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->first(), "");
        }
        try {
            $resource->update($request->all());
            watch(__('update courier ').$resource->name,'fa fa-user');
            return responseJson(1, __('done'), $resource);
        } catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }


    public function destroy(Courier $resource)
    {
        try {
            watch(__('delete courier ').$resource->name,'fa fa-trash');
            $resource->delete();
            return responseJson(1, __('done'));
        } catch (\Exception $th) {
            return responseJson(0,__($this->exception_message) ,$th->getMessage());
        }

    }



    public function downloadExcel()
    {
        return response()->download(public_path('/uploads/excel/courier.xlsx'));
    }

    public function courierImport(Request $request)
    {
        $validator = validator($request->all(),['file'=>'required|mimes:xls,xlsx',]);
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->first(), "");
        }
        try {
            $file = $request->file('file');
            $courierfile = new CourierImport();
            $courierfile->import($file);
            if ($courierfile->failures()->isNotEmpty())
                return responseJson(0, $courierfile->failures(), "");
            return responseJson(1, __('file imported'), "");
        }catch (\Exception $e){
            return responseJson(0, $e->getMessage(), "");
        }

    }



    public function rules()
    {
        return [
            'name'=>'required|string',
            'photo'=>'nullable|string',
            'phone'=>'required|string|unique:couriers,phone,'.request()->id,
            'email'=>'required|string|unique:couriers,email,'.request()->id,
            'address'=>'required|string',
            'insurance_number'=>'nullable|numeric',
            'national_id'=>'required|size:14|unique:couriers,national_id,'.request()->id,
            'work_area'=>'nullable|string',
            'notes'=>'nullable|string',
            'active'=>'required',
            'company_id'=>'required|exists:companies,id',
            'branch_id'=>'required|exists:branches,id',
            'department_id'=>'required|integer|exists:departments,id'
        ];
    }
}
