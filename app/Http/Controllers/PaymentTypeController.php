<?php

namespace App\Http\Controllers;

use App\Imports\paymentTypeImport;
use App\Models\PaymentType;
use Illuminate\Http\Request;

class PaymentTypeController extends Controller
{
    public function index()
    {
        $query = PaymentType::all();
        return $query;
    }


    public function store(Request $request)
    {
        $validator = validator($request->all(),$this->rules());
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->first(), "");
        }
        try {
            $resource = PaymentType::create($request->all());
            watch(__('add payment ').$resource->name,'fa fa-credit-card');
            return responseJson(1, __('done'), $resource->refresh());
        }catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }



    public function update(Request $request, PaymentType $resource)
    {
        $validator = validator($request->all(),$this->rules($request->id));
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->first(), "");
        }
        try {
            $resource->update($request->all());
            watch(__('update payment ').$resource->name,'fa fa-credit-card');
            return responseJson(1, __('done'), $resource);
        } catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }


    public function destroy(PaymentType $resource)
    {
        try {
            watch(__('delete payment ').$resource->name,'fa fa-trash');
            $resource->delete();
            return responseJson(1, __('done'));
        } catch (\Exception $th) {
            return responseJson(0, __($this->exception_message),$th->getMessage());
        }

    }


    public function downloadExcel()
    {
        return response()->download(public_path('/uploads/excel/countryOrServiceOrPayment.xlsx'));
    }

//    import excel file into data base

    public function paymentTypeImport(Request $request)
    {
        $validator = validator($request->all(),['file'=>'required|mimes:xls,xlsx',]);
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->getMessages(), "");
        }
        try {
            $file = $request->file('file');
            $paymentfile = new paymentTypeImport();
            $paymentfile->import($file);
            if ($paymentfile->failures()->isNotEmpty())
                return responseJson(0, $paymentfile->failures(), "");
            return responseJson(1, __('file imported'), "");
        }catch (\Exception $e){
            return responseJson(0, $e->getMessage(), "");
        }

    }



    public function rules($id=null)
    {
        return [
            'name'=>'required|string|unique:payment_types,name,'.$id,
        ];
    }
}
