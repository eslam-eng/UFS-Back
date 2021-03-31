@extends('master')


@php
    $totalAmount = 0;
    $totalComm = 0;
    $totalNet = 0;
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
        </tr>
        @foreach ($awbs as $item)
            @php
                $totalAmount += $item->collection;
                $totalComm += $item->shiping_price;
                $totalNet += $item->net_price;
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
                    {{ $finalTotal }}
                </td>
            </tr>
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
