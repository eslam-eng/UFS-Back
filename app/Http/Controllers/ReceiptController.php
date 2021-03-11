<?php

namespace App\Http\Controllers;

use App\Models\Receipt;
use Illuminate\Http\Request;

class ReceiptController extends Controller
{
    public function index()
    {
        $query = Receipt::query()->with(['store','company','expenseType']);

        if (request()->date > 0) {
            $query
                ->where('date', request()->date);
        }

        if (request()->type > 0) {
            $query->where('type',request()->type);
        }

        if (request()->company_id > 0) {
            $query->where('model_id',request()->company_id)->where('model_type', 'company');
        }

        if (request()->expense_type_id) {
            $query->where('expense_type_id',request()->expense_type_id);
        }

        return $query->get();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = validator($request->all(),$this->rules());
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->first(), "");
        }
        try {
            $resource = Receipt::create($request->all());
            watch(__('add receipt ').$resource->name,'fa fa-file');
            return responseJson(1, __('done'), $resource->refresh());
        }catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Receipt $resource)
    {
        $validator = validator($request->all(),$this->rules());
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->first(), "");
        }
        try {
            $resource->update($request->all());
            watch(__('update receipt ').$resource->name,'fa fa-file');
            return responseJson(1, __('done'), $resource);
        } catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }


    public function destroy(Receipt $resource)
    {
        try {
            watch(__('delete city ').$resource->name,'fa fa-trash');
            $resource->delete();
            return responseJson(1, __('done'));
        } catch (\Exception $th) {
            return responseJson(0, __($this->exception_message),$th->getMessage());
        }

    }

    public function makeTransation($store_id)
    {

    }

    public function rules()
    {
        return [

        'date'=>'required',
        'expense_type_id'=>'required|exists:expense_types,id',
        'value'=>'required',
        'notes'=>'nullable|string',
        'type'=>'required',
        'store_id'=>'required|exists:stores,id'
        ];
    }
}
