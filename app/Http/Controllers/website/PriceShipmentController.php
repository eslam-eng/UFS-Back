<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\PriceShipment;
use App\Models\PriceTable;
use Illuminate\Http\Request;
use mysql_xdevapi\Exception;
use function PHPUnit\Framework\isEmpty;

class PriceShipmentController extends Controller
{

    public function  allAskPrice(){
        $query = PriceShipment::query();
        return $query->latest()->get();
    }

    public function index()
    {
        $cities = City::all('id','name');
        return view('website.priceshipment', compact('cities',));

    }


    public function calcPrice(Request $request)
    {

        $weight_from_dimentions = ($request->height*$request->width*$request->length)/5000;
        $errormessage = ___('there is a problem please try again or call us 01113622098');
        $data = $this->validate($request,$this->rules());
        $checkuserExsist = PriceShipment::where('phone',$request->phone)
            ->orWhere('email',$request->email)
            ->get();
        $ship_price_data= PriceTable::with(['cityFromObject','cityToObject'])->where('city_from',$request->city_from)->where('city_to',$request->city_to)->where('model_type','admin')->first();

        if (!$ship_price_data)
            return view('website.calcprice',['error'=>$errormessage]);

        $weight = $data['weight']-$ship_price_data->basic_kg;
        $vol_weight = $weight_from_dimentions-$ship_price_data->basic_kg;
        if ($checkuserExsist->count()<1)
            PriceShipment::create($data);
        $data = $request;
        $price = $weight > $vol_weight?
            $ship_price_data->price+($weight * $ship_price_data->additional_kg_price):
            $ship_price_data->price+($vol_weight * $ship_price_data->additional_kg_price);
        $data['vol_weight']=$vol_weight;
        $data['price'] = $price;
        return view('website.calcprice',['ship_price'=>$ship_price_data,'shipmentdata'=>$data]);


    }


    public function rules()
    {
        return [
            'name'=>'required|string',
            'email' => 'nullable|string|email',
            'phone'=>'required',
            'weight'=>'required|numeric',
            'city_from'=>'required|exists:cities,id',
            'city_to'=>'required|exists:cities,id',
            'desc'=>'nullable|string|max:200',
        ];
    }
}
