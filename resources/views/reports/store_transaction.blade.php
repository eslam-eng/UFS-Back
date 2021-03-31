@extends('master')


@php
    $total = $store->init_value;
@endphp

@section('content')
    <br>
    <div class="w3-center w3-large">
        <b>Store Transactions Report</b>
    </div>
    <br>
    <table class="w3-table w3-bordered">
        <tr class="w3-light-gray">
            <th>#</th>
            <th>code</th>
            <th>date</th>
            <th>value</th>
            <th>Expense Type</th>
            <th>Customer Name</th>
            <th>Type</th>
            <th>Notes</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td class="w3-text-green" >
                +{{ $store->init_value }}
            </td>
            <td>رصيد افتتاحى</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        @foreach ($resources as $item)
            @php
                if ($item->type == 'in')
                    $total += $item->value;
                else
                    $total -= $item->value;
            @endphp
            <tr>
                <td>{{ $loop->iteration + 1 }}</td>
                <td>{{ $item->id }}</td>
                <td>{{ $item->date }}</td>
                <td class="{{ $item->type == 'out' && $item->value > 0? 'w3-text-red' : 'w3-text-green' }}" >
                    {{ $item->type == 'out' && $item->value > 0? '-' : '+' }}{{ abs($item->value) }}
                </td>
                <td>{{ optional($item->expenseType)->name }}</td>
                <td>{{ optional($item->company)->name }}</td>
                <td>{{ $item->type == 'out' && $item->value > 0? 'مدين' : 'دائن' }}</td>
                <td>{{ $item->notes }}</td>
            </tr>
        @endforeach
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    {{ $total }}
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
    </table>
@endsection
