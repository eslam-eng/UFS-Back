@extends('master')



@section('content')
    <br>
    <div class="w3-center w3-large">
        <b>Pricetable Report</b>
    </div>
    <br>
    <table class="w3-table w3-bordered">
        <tr class="w3-light-gray">
            <th>{{trans2('Origin')}}</th>
            <th>{{trans2('Destionation')}}</th>
            <th>{{trans2('price')}}</th>
            <th>{{trans2('return_price')}}</th>
            <th>{{trans2('First KG')}}</th>
            <th>{{trans2('Additional KG	')}}</th>
        </tr>
        @foreach ($resources as $item)
            <tr>
                <td>{{ $item->cityFromObject->name }}</td>
                <td>{{ $item->cityToObject->name}}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->return_price }}</td>
                <td>{{ $item->basic_kg}}</td>
                <td>{{ $item->additional_kg_price }}</td>
            </tr>
        @endforeach
    </table>
@endsection
