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

@section('content')
    <br>
    <div class="w3-center w3-large">
        <b>{{___('Daily Report Sheet')}}</b>
    </div>
    <table class="w3-table">
        <tr>
            <td>
               {{___('Account Name')}} : {{ $company->name }}
            </td>
        </tr>
    </table>
    <br>
    <table class="w3-table w3-bordered table-bordered">
        <tr class="w3-light-gray">
            <th>#</th>
            <th>{{ ___('awb code') }}</th>
            <th>{{ ___('date') }}</th>
            <th>{{ ___('origin') }}</th>
            <th>{{ ___('destination') }}</th>
            <th>{{ ___('pieces') }}</th>
            <th>{{ ___('weight') }}</th>
            <th>{{ ___('net_price') }}</th>
            <th>{{ ___('fuelCharge_value') }}</th>
            <th>{{ ___('discount_value') }}</th>
            <th>{{ ___('other_value') }}</th>
            <th>{{ ___('total_price') }}</th>
            <th>{{ ___('postal_fees') }}</th>
            <th>{{ ___('vat_tax') }}</th>
            <th>{{ ___('total') }}</th>
        </tr>
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
            <tr>
                <td>{{ $loop->iteration + 1 }}</td>
                <td>{{ $item->code }}</td>
                <td>{{ $item->date }}</td>
                <td>{{ optional($item->city)->name }}</td>
                <td>{{ optional(optional($item->receiver)->city)->name }}</td>
                <td>{{ $item->pieces }}</td>
                <td>{{ $item->weight }}</td>
                <td>{{ $item->net_price }}</td>
                <td>{{ $fuelChargeValue }}</td>
                <td>{{ $discountValue }}</td>
                <td>{{ $otherValue }}</td>
                <td>{{ $totalPrice }}</td>
                <td>{{ $postalFees }}</td>
                <td>{{ $vetFax }}</td>
                <td>{{ $total }}</td>
            </tr>
        @endforeach
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>{{ $piecesTotal }}</td>
                <td>{{ $weightTotal }}</td>
                <td>{{ $netPriceTotal }}</td>
                <td>{{ $fuelChargeTotal }}</td>
                <td>{{ $discountTotal }}</td>
                <td>{{ $otherTotal }}</td>
                <td>{{ $totalPriceTotal }}</td>
                <td>{{ $postFeesTotal }}</td>
                <td>{{ $vetTaxTotal }}</td>
                <td>{{ $finalTotal }}</td>
            </tr>
    </table>
    <br>
    <table class="w3-table text-center w3-large">
        <tr>
            <td class="w3-large">
                <b>{{ ___('footer of bill') }}</b>
            </td>
        </tr>
    </table>
@endsection
