<?php

namespace App\Http\Controllers;

use App\Imports\CompanyImport;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{

    public function index()
    {
        $query = Company::query()->with(['city', 'area']);

        if (request()->search) {
            $query
                    ->where('name', 'like', '%'.request()->search.'%')
                    ->orWhere('phone', 'like', '%'.request()->search.'%')
                    ->orWhere('email', 'like', '%'.request()->search.'%')
                    ->orWhere('ceo', 'like', '%'.request()->search.'%')
                    ->orWhere('fax', 'like', '%'.request()->search.'%')
                    ->orWhere('address', 'like', '%'.request()->search.'%');
        }

        if (request()->city_id > 0) {
            $query->where('city_id', request()->city_id);
        }

        if (request()->area_id > 0) {
            $query->where('area_id', request()->area_id);
        }

        if (request()->user()->company_id != 1) {
            $query->where('id', request()->user()->company_id);
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
            $data = $request->all();
            $data['type'] = "company";

            $resource = Company::create($data);

            uploadImg($request->file('logo'), Company::$PATH, function($filename) use ($resource) {
                $resource->update([
                    "logo" => $filename
                ]);
            });
            uploadImg($request->file('commercial_photo'), Company::$PATH, function($filename) use ($resource) {
                $resource->update([
                    "commercial_photo" => $filename
                ]);
            });

            watch(__('add company ').$resource->name,'fa fa-building');
            return responseJson(1, __('done'), $resource->refresh());
        }catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }


    public function update(Request $request, Company $resource)
    {
        $validator = validator($request->all(),$this->rules());
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->first(), "");
        }
        try {
            $resource->update($request->all());
            uploadImg($request->file('logo'), Company::$PATH, function($filename) use ($resource) {
                $resource->update([
                    "logo" => $filename
                ]);
            });
            uploadImg($request->file('commercial_photo'), Company::$PATH, function($filename) use ($resource) {
                $resource->update([
                    "commercial_photo" => $filename
                ]);
            });
            watch(__('update company ').$resource->name,'fa fa-building');
            return responseJson(1, __('done'), $resource);
        } catch (\Exception $th) {
            return responseJson(0, $th->getMessage());
        }
    }


    public function destroy(Company $resource)
    {
        try {
            watch(__('delete company ').$resource->name,'fa fa-trash');
            $resource->delete();
            return responseJson(1, __('done'));
        } catch (\Exception $th) {
            return responseJson(0, __($this->exception_message),$th->getMessage());
        }

    }



    public function downloadExcel()
    {
        return response()->download(public_path('/uploads/excel/company.xlsx'));
    }

    //    import excel file into data base

    public function companyImport(Request $request)
    {
        $validator = validator($request->all(),['file'=>'required|mimes:xls,xlsx',]);
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->first(), "");
        }
        try {
            $file = $request->file('file');
            $companyfile = new CompanyImport();
            $companyfile->import($file);
            if ($companyfile->failures()->isNotEmpty())
                return responseJson(0, "", $companyfile->failures());
            return responseJson(1, __('file imported'), "");
        }catch (\Exception $e){
            return responseJson(0, $e->getMessage(), "");
        }

    }



    public function rules()
    {
        return [
            'name'=>'required|string',
            'logo'=>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
            'ceo'=>'nullable|string',
            'address'=>'required|string',
            'phone'=>'required|string',
            'fax'=>'nullable|string',
            'email'=>'required|string|email',
            'notes'=>'nullable|string|max:180',
            'commercial_number'=>'nullable|string',
            'commercial_photo'=>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
            'city_id'=>'required|exists:cities,id',
            'area_id'=>'required|exists:areas,id'
        ];
    }
}
