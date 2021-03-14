<?php

namespace App\Http\Controllers;

use App\Models\ExpenseType;
use Illuminate\Http\Request;
use App\Imports\ExpenseTypeImport;

class ExpenseTypeController extends Controller
{
    public function index()
    {
        $query = ExpenseType::get();
        return $query;
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
            $resource = ExpenseType::create($request->all());
            watch(__('add city ').$resource->name,'fa fa-file');
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
    public function update(Request $request, ExpenseType $resource)
    {
        $validator = validator($request->all(),$this->rules());
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->first(), "");
        }
        try {
            $resource->update($request->all());
            watch(__('update expense ').$resource->name,'fa fa-file');
            return responseJson(1, __('done'), $resource);
        } catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }

    public function downloadExcel()
    {
        return response()->download(public_path('/uploads/excel/expenseType.xlsx'));
    }

    public function import(Request $request)
    {
        $validator = validator($request->all(),['file'=>'required|mimes:xls,xlsx',]);
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->first(), "");
        }
        try {
            $file = $request->file('file');
            $expensefile = new ExpenseTypeImport();
            $expensefile->import($file);
            if ($expensefile->failures()->isNotEmpty())
                return responseJson(0,"",  $expensefile->failures());
            return responseJson(1, __('file imported'), "");
        }catch (\Exception $e){
            return responseJson(0, $e->getMessage(), "");
        }

    }


    public function destroy(ExpenseType $resource)
    {
        try {
            watch(__('delete expense ').$resource->name,'fa fa-trash');
            $resource->delete();
            return responseJson(1, __('done'));
        } catch (\Exception $th) {
            return responseJson(0, __($this->exception_message),$th->getMessage());
        }

    }


    public function rules()
    {
        return [
            'name'=>'required|string',
        ];
    }
}
