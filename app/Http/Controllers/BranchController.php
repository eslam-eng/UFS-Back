<?php

namespace App\Http\Controllers;

use App\Imports\BranchImport;
use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function index()
    {
        $query = Branch::with('company','city','area');

        if (request()->user()->company_id != 1) {
            $query->where('company_id', request()->user()->company_id);
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

            $resource = Branch::create($request->all());
            watch(__('add branch ').$resource->name,'fa fa-code-branch');
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
    public function update(Request $request, Branch $resource)
    {
        $validator = validator($request->all(),$this->rules());
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->first(), "");
        }
        try {
            $resource->update($request->all());
            watch(__('update branch ').$resource->name,'fa fa-code-branch');
            return responseJson(1, __('done'), $resource);
        } catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }


    public function destroy(Branch $resource)
    {
        try {
            watch(__('delete branch ').$resource->name,'fa fa-trash');
            $resource->delete();
            return responseJson(1, __('done'));
        } catch (\Exception $th) {
            return responseJson(0, __($this->exception_message),$th->getMessage());
        }

    }


    public function downloadExcel()
    {
        return response()->download(public_path('/uploads/excel/branches.xlsx'));
    }

    //    import excel file into data base

    public function branchImport(Request $request)
    {
        $validator = validator($request->all(),['file'=>'required|mimes:xls,xlsx',]);
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->getMessages(), "");
        }
        try {
            $file = $request->file('file');
            $branchfile = new BranchImport();
            $branchfile->import($file);
            if ($branchfile->failures()->isNotEmpty())
                return responseJson(0, "", $branchfile->failures());
            return responseJson(1, __('file imported'), "");
        }catch (\Exception $e){
            return responseJson(0, $e->getMessage(), "");
        }

    }



    public function rules()
    {
        return [
            'name'=>'required|string',
            'company_id'=>'required|exists:companies,id',
            'city_id'=>'required|exists:cities,id',
            'area_id'=>'required|exists:areas,id',
            'address'=>'nullable|string',
            'phone'=>'nullable|string',
        ];
    }
}
