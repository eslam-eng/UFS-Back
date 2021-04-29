@extends('master')

@section('content')
    <br>
    <div class="w3-center w3-large">
        <b>{{___('status Awb Count Report')}}</b>
    </div>
    <br>
    <table class="w3-table w3-bordered">
        <tr class="w3-light-gray">
            <th>#</th>
            <th>{{___('status')}}</th>
            <th>{{___('count')}}</th>
        </tr>
        @foreach ($awb_status_count as $key=>$count)
            <tr>
                <td>{{ $loop->iteration + 1 }}</td>
                <td>{{ $item->id }}</td>
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
