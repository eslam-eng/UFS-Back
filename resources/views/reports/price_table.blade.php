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
            <th>{{___('Origin')}}</th>
            <th>{{___('Destionation')}}</th>
            <th>{{___('price')}}</th>
            <th>{{___('return_price')}}</th>
            <th>{{___('First KG')}}</th>
            <th>{{___('Additional KG	')}}</th>
        </tr>
        @foreach ($resources as $item)
            <tr>
                <td>{{ $loop->iteration + 1 }}</td>
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
