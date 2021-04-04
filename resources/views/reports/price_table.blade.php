@extends('master')



@section('content')
    <br>
    <div class="w3-center w3-large">
        <b>Pricetable Report</b>
    </div>
    <br>
    <table class="w3-table w3-bordered">
        <tr class="w3-light-gray">
            <th>#</th>
            <th>{{__('Origin')}}</th>
            <th>{{__('Destionation')}}</th>
            <th>{{__('price')}}</th>
            <th>{{__('return_price')}}</th>
            <th>{{__('First KG')}}</th>
            <th>{{__('Additional KG	')}}</th>
        </tr>
        @foreach ($resources as $item)
            <tr>
                <td>{{ $loop->iteration + 1 }}</td>
                <td>{{ $item->city_from }}</td>
                <td>{{ $item->city_to }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->return_price }}</td>
                <td>{{ $item->basic_kg}}</td>
                <td>{{ $item->additional_kg_price }}</td>
            </tr>
        @endforeach
    </table>
@endsection
