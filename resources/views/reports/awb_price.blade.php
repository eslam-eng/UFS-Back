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
    <table class="w3-table w3-bordered">
        <tr class="w3-light-gray">
            <th>#</th>
            <th>code</th>
            <th>date</th>
            <th>Ref</th>
            <th>Name</th>
            <th>Area</th>
            <th>Zone</th>
            <th>zprice</th>
            <th>w</th>
            <th>AKP</th>
            <th>w price</th>
            <th>Amount</th>
            <th>Comm</th>
            <th>Net</th>
            <th>Status</th>
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
                <td>{{ optional($item->receiver)->referance }}</td>
                <td>{{ optional($item->receiver)->name }}</td>
                <td>{{ optional(optional($item->receiver)->area)->name }}</td>
                <td>{{ optional(optional($item->receiver)->city)->name }}</td>
                <td>{{ $item->zprice }}</td>
                <td>{{ $item->weight }}</td>
                <td>{{ $item->additional_kg_price }}</td>
                <td>{{ $item->additional_price }}</td>
                <td>{{ $item->collection }}</td>
                <td>{{ $item->shiping_price }}</td>
                <td>{{ $item->net_price }}</td>
                <td>{{ optional($item->status)->name }}</td>
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
                <td></td>
                <td>
                    {{ $totalAmount }}
                </td>
                <td>
                    {{ $totalComm }}
                </td>
                <td>
                    {{ $totalNet }}
                </td>
            </tr>
    </table>
    <br>
    <table class="w3-table text-center w3-large">
        <tr>
            <td class="w3-large">
                <b>اسم المستلم</b>
                <br>
                <div class="w3-block" style="border: 2px dashed gray"></div>
            </td>
            <td class="w3-large">
                <b>التوقيع</b>
                <br>
                <div class="w3-block" style="border: 2px dashed gray"></div>
            </td>
            <td class="w3-large">
                <b>التاريخ</b>
                <br>
                <div class="w3-block" style="border: 2px dashed gray"></div>
            </td>
        </tr>
    </table>
@endsection
