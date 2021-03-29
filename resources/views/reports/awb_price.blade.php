@extends('master')


@php
    $totalAmount = 0;
    $totalComm = 0;
    $totalNet = 0;
    $finalTotal = 0;
    $discount = 0;
    $fuelCharge = 0;
@endphp

@section('content')
    <br>
    <div class="w3-center w3-large">
        <b>Daily Report Sheet</b>
    </div>
    <table class="w3-table">
        <tr>
            <td>
               Account Name : {{ $company->name }}
            </td>
        </tr>
    </table>
    <br>
    <table class="w3-table w3-bordered table-bordered">
        <tr class="w3-light-gray">
            <th>#</th>
            <th>{{ __('awb code') }}</th>
            <th>{{ __('date') }}</th>
            <th>{{ __('origin') }}</th>
            <th>{{ __('destination') }}</th>
            <th>{{ __('pieces') }}</th>
            <th>{{ __('weight') }}</th>
            <th>{{ __('net_price') }}</th>
            <th>{{ __('postal_fees') }}</th>
            <th>{{ __('vat_tax') }}</th>
            <th>{{ __('total') }}</th>
        </tr>
        @foreach ($awbs as $item)
            @php
                $totalAmount += $item->collection;
                $totalComm += $item->shiping_price;
                $totalNet += $item->net_price;
                $postalFees = $item->net_price * request()->postal_fees; // 0.10
                $vetFax = ($item->net_price + $postalFees) * request()->vet_fax; // 0.14
                $total = $item->net_price + $vetFax + $postalFees;
                $finalTotal += $total;
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
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    {{ $finalTotal }}
                </td>
            </tr>
            @if (request()->discount > 0)
            @php
                $discount = $finalTotal - ($finalTotal * (request()->discount / 100));
            @endphp
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="w3-text-red" >
                    {{ __('discount') }} : {{ request()->discount }} %
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    {{ __('total after discount') }} : {{ $discount }}
                </td>
            </tr>
            @else
            @php
                $discount = $finalTotal;
            @endphp
            @endif
            @if (request()->fuel_charge > 0)
            @php
                $fuelCharge = $discount + ($discount * (request()->fuel_charge / 100));
            @endphp
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="w3-text-green" >
                    {{ __('fuel charge') }} : {{ request()->fuel_charge }} %
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    {{ __('total after fuel charge') }} : {{ $fuelCharge }}
                </td>
            </tr>
            @endif
    </table>
    <br>
    <table class="w3-table text-center w3-large">
        <tr>
            <td class="w3-large">
                <b{{ __('footer of bill') }}</b>
            </td>
        </tr>
    </table>
@endsection
