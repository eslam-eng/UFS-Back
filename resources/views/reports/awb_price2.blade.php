@extends('master')


@php
    $totalAmount = 0;
    $totalComm = 0;
    $totalNet = 0;

    $totalPercent = 0;
    $totalFinalTotal = 0;
@endphp

@section('content')
    <br>
    <div class="w3-center w3-large">
        <b>Daily Report Sheet</b>
    </div>
    <table class="w3-table">
        <tr>
            <td>
               {{trans2('Account Name')}} : {{ $company->name }}
            </td>
        </tr>
    </table>
    <br>
    <table class="w3-table w3-bordered table-bordered">
        <tr class="w3-light-gray">
            <th>#</th>
            <th>{{ trans2('awb code') }}</th>
            <th>{{ trans2('date') }}</th>
            <th>{{ trans2('origin') }}</th>
            <th>{{ trans2('destination') }}</th>
            <th>{{ trans2('pieces') }}</th>
            <th>{{ trans2('weight') }}</th>
            <th>{{ trans2('net_price') }}</th>
            <th>{{ trans2('collection_percent') }}</th>
            <th>{{ trans2('final_total') }}</th>
        </tr>
        @foreach ($awbs as $item)
            @php
                $totalAmount += $item->collection;
                $totalComm += $item->shiping_price;
                $totalNet += $item->net_price;

                $collectionPercent = $item->net_price * (request()->collection_percent / 100);
                $finalTotal = $item->net_price + $collectionPercent;

                $totalPercent += $collectionPercent;
                $totalFinalTotal += $finalTotal;
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
                <td>{{ $collectionPercent }}</td>
                <td>{{ $finalTotal }}</td>
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
                <td>
                    {{ $totalNet }}
                </td>
                <td>{{ $totalPercent }}</td>
                <td>{{ $totalFinalTotal }}</td>
            </tr>
    </table>
    <br>
    <table class="w3-table text-center w3-large">
        <tr>
            <td class="w3-large">
                <b>{{ trans2('footer of bill') }}</b>
            </td>
        </tr>
    </table>
@endsection
