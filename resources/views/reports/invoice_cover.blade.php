@extends('master')

@php
    $totalAmount = 0;
    $totalComm = 0;
    $totalNet = 0;
    $finalTotal = 0;
    $discount = 0;
    $fuelCharge = 0;

    $vetTaxTotal = 0;
    $postFeesTotal = 0;
    $totalPriceTotal = 0;
    $netPriceTotal = 0;
    $piecesTotal = 0;
    $weightTotal = 0;
    $fuelChargeTotal = 0;
    $discountTotal = 0;
    $otherTotal = 0;
@endphp

@foreach ($awbs as $item)
            @php
                $totalAmount += $item->collection;
                $totalComm += $item->shiping_price;
                $totalNet += $item->net_price;

                $discountValue = $item->net_price * (request()->discount / 100);
                $fuelChargeValue = $item->net_price * (request()->fuel_charge / 100);
                $otherValue = $item->net_price * (request()->other / 100);

                $totalPrice = ($item->net_price + $fuelChargeValue + $otherValue) - $discountValue;

                $postalFees = $totalPrice * request()->postal_fees; // 0.10
                $vetFax = ($totalPrice + $postalFees) * request()->vet_fax; // 0.14

                $total = $totalPrice + $vetFax + $postalFees;

                $finalTotal += $total;
                $vetTaxTotal += $vetFax;
                $postFeesTotal += $postalFees;
                $totalPriceTotal += $totalPrice;
                $netPriceTotal += $item->net_price;
                $piecesTotal += $item->pieces;
                $weightTotal += $item->weight;
                $fuelChargeTotal += $fuelChargeValue;
                $discountTotal += $discountValue;
                $otherTotal += $otherValue;
            @endphp
@endforeach

@section('content')
    <br>
    <table class="w3-table">
        <tr>
            <td>
                <b>{{ __('Customer Data') }}</b>
                <div class="w3-border w3-padding w3-border-gray">
                    <div class="w3-block">
                        <b>{{ __("Account No") }}</b> : {{ $company->id }}
                    </div>
                    <div class="w3-block">
                        <b>{{ __("Customer Name") }}</b> : {{ $company->name }}
                    </div>
                    <div class="w3-block">
                        <b>{{ __("Contact Name") }}</b> : {{ $company->name }}
                    </div>
                    <div class="w3-block">
                        <b>{{ __("Tel") }}</b> : {{ $company->phone }}
                    </div>
                    <div class="w3-block">
                        <b>{{ __("Email") }}</b> : {{ $company->email }}
                    </div>
                    <div class="w3-block">
                        <b>{{ __("Address") }}</b> : {{ $company->address }}
                    </div>
                    <div class="w3-block">
                        <b>{{ __("city") }}</b> : {{ optional($company->city)->name }}
                    </div>
                    <div class="w3-block">
                        <b>{{ __("area") }}</b> : {{ optional($company->area)->name }}
                    </div>
                </div>
            </td>

            <td>
                <b>{{ __('Total Amount') }}</b>
                <div class="w3-border w3-padding w3-border-gray">
                    <div class="w3-block">
                        <b>{{ __("Currency Type") }}</b> : EGP
                    </div>
                    <div class="w3-block">
                        <b>{{ __("Total Amound") }}</b> : {{ $total }}
                    </div>
                </div>
                <br>

                <b>{{ __('Invoice Detail') }}</b>
                <div class="w3-border w3-padding w3-border-gray">
                    <div class="w3-block">
                        <b>{{ __("Invoice No") }}</b> :
                    </div>
                    <div class="w3-block">
                        <b>{{ __("Date") }} </b>: {{ date('Y-m-d') }}
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2" >
                <div class="w3-border w3-padding w3-border-gray">
                    <div class="w3-row">
                        <div class="w3-col l6 m6 s6" style="text-align: left" >
                            <b class="w3-left"> {{ __('Total Shipment') }}</b>
                        </div>
                        <div class="w3-col l6 m6 s6" style="text-align: right" >
                            <b class="w3-right"> {{ $finalTotal }}</b>
                        </div>
                    </div>
                    <div class="w3-block w3-display-container w3-row">


                    </div>

                    <div class="w3-block w3-display-container w3-row">
                        <b class="w3-left"> {{ __('Total Weight') }}</b>
                        <b class="w3-right"> {{ $weightTotal }}</b>
                    </div>

                    <div class="w3-block w3-display-container w3-row">
                        <b class="w3-left"> {{ __('Fuel Charge') }}</b>
                        <b class="w3-right"> {{ $fuelChargeTotal }}</b>
                    </div>

                    <div class="w3-block w3-display-container w3-row">
                        <b class="w3-left"> {{ __('Other Charge') }}</b>
                        <b class="w3-right"> {{ $otherTotal }}</b>
                    </div>

                    <div class="w3-block w3-display-container w3-row">
                        <b class="w3-left"> {{ __('Discount') }}</b>
                        <b class="w3-right"> {{ $discountTotal }}</b>
                    </div>

                    <div class="w3-block w3-display-container w3-row">
                        <b class="w3-left"> {{ __('Total Price') }}</b>
                        <b class="w3-right"> {{ $netPriceTotal }}</b>
                    </div>

                    <div class="w3-block w3-display-container w3-row">
                        <b class="w3-left"> {{ __('Postal Fee') }}</b>
                        <b class="w3-right"> {{ $postFeesTotal }}</b>
                    </div>

                    <div class="w3-block w3-display-container w3-row">
                        <b class="w3-left"> {{ __('Vat Tax') }}</b>
                        <b class="w3-right"> {{ $vetTaxTotal }}</b>
                    </div>

                    <div class="w3-block w3-display-container w3-row">
                        <b class="w3-left"> {{ __('Total Amound') }}</b>
                        <b class="w3-right"> {{ $finalTotal }}</b>
                    </div>


                </div>
            </td>
        </tr>
    </table>

    <div class="w3-center w3-large">
        <p>{{ __('footer1 invoice') }}</p>
        <br>
        <br>


        <p>{{ __('footer2 invoice') }}</p>
        <br>
    </div>
    <br>
@endsection
