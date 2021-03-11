<?php

namespace App\Http\Controllers;

use App\Models\Awb;
use App\Models\PriceTable;
use App\Models\Receiver;
use Illuminate\Http\Request;

class CalculatorShipmentPriceController extends Controller
{
    //    'is_return', 'collection', //now its temporary after it will calc automaticlly depends on city an area price
//        'zprice', 'shiping_price', 'additional_kg_price', 'additional_price', 'net_price'

    private function queryCreteria(Awb $resource) {
        $query = PriceTable::query()
            // destination from
            ->where('city_from', $resource->city_id)
            //->orWhere('area_from', $resource->area_id)

            // destination to
            ->where('city_from', optional($resource->receiver)->city_id);
            //->orWhere('area_from', optional($resource->receiver)->area_id);

        return $query;
    }

    // check in there is an offer for the company
    private function offerCretiria(Awb $resource) {
        $date = date('Y-m-d');
        $query = $this->queryCreteria($resource)
            ->whereDate('date_to', '>=', $date)
            ->where('model_id', $resource->company_id)
            ->where('model_type', 'company');

        return $query;
    }

    private function companyCretiria(Awb $resource) {
        $query =  $this->queryCreteria($resource)
            ->where('model_id', $resource->company_id)
            ->where('model_type', 'company');

        return $query;
    }

    private function adminCretiria(Awb $resource) {
        $query = $this->queryCreteria($resource)
            ->where('model_id', 1)
            ->where('model_type', 'company');

        return $query;
    }

    private function calculateShipingPrice(Awb $awb, PriceTable $resource) {
        $zprice = $resource->price;
        $additionalWeight = ($awb->weight - $resource->basic_kg) > 0? $awb->weight - $resource->basic_kg : 0;
        $additionalPrice = $additionalWeight * $resource->additional_kg_price;
        $shipingPrice = $additionalPrice + $zprice;
        $additionKgPrice = $resource->additional_kg_price;
        $netPrice = $awb->collection - $shipingPrice;

        $awb->update([
            "zprice" => $zprice,
            "shiping_price" => $shipingPrice,
            "additional_kg_price" => $additionKgPrice,
            "additional_price" => $additionalPrice,
            "net_price" => $netPrice
        ]);
    }

    public function getShipmentPrice(Awb $resource)
    {
        $priceTable = null;

        // check on offer
        if ($this->offerCretiria($resource)->count() > 0) {
            $priceTable = $this->offerCretiria($resource)->first();
            return $this->calculateShipingPrice($resource, $priceTable);
        }

        // check on company
        if ($this->companyCretiria($resource)->count() > 0) {
            $priceTable = $this->companyCretiria($resource)->first();
            return $this->calculateShipingPrice($resource, $priceTable);
        }

        // check on admin
        if ($this->adminCretiria($resource)->count() > 0) {
            $priceTable = $this->adminCretiria($resource)->first();
            return $this->calculateShipingPrice($resource, $priceTable);
        }
    }



}
