@extends('website.layouts.master')
@section('content')
    @include('website.layouts.fixednavbar')
    <!--start breadcrumb area-->
    @include('website.layouts.breadcrumb',['head'=>trans('website.shipmentdata'),'mainlink'=>trans('website.home.home'),'childlink'=>trans('website.shipmentdata')])
    <!--    start contact page content-->
    <style>
       .contact-page-area
        {
            background: #eee;
        }
       .calc-area
       {
           background: #fff;
       }
       .price-shipment {
           background: #0304c1  none repeat scroll 0 0;
           border-radius: 5px;
           color: #fff;
           display: inline-block;
           font-weight: 600;
           padding: 15px 30px;
           text-transform: uppercase;
       }
       .card-body
       {
           padding: 20px;
           color: #000;
           font-size: 17px;
       }
       .card-body .ship-header
       {
           padding: 10px !important;
       }
       .card-body .ship-data
       {
           text-align: justify;
           float: right;
       }
    </style>
    <section class="contact-page-area">
        <div class="container calc-area">
            @if(isset($error))
                <br>
                <div class="alert alert-danger">
                    <strong>error!</strong> {{$error}} <a href="{{route('pricingIndex')}}" class="alert-link">{{___('try again')}}</a>.
                </div>
            @else

                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-header price-shipment">
                                <h4>Shipment Data</h4>
                            </div>
                            <div class="card-body">
                                <div class="col-md-4" style="border-right: dashed;">
                                    <div class="ship-header">{{___('from')}}:<span class="ship-data">{{$ship_price->cityFromObject->name}}</span></div>
                                    <div class="ship-header">{{___('to')}}:<span class="ship-data">{{$ship_price->cityToObject->name}}</span></div>
                                    <div class="ship-header">{{___('Weight')}}:<span class="ship-data">{{$shipmentdata['weight']}}</span></div>
                                    <div class="ship-header">{{___('Vol-Weight')}}:<span class="ship-data">{{$shipmentdata['vol_weight']}}</span></div>
                                    <div class="ship-header">{{___('Height')}}:<span class="ship-data">{{$shipmentdata['height']}}</span></div>
                                    <div class="ship-header">{{___('Width')}}:<span class="ship-data">{{$shipmentdata['width']}}</span></div>
                                    <div class="ship-header">{{___('Length')}}:<span class="ship-data">{{$shipmentdata['length']}}</span></div>

                                </div>
                                <div class="col-md-4">
                                    <div class="ship-header">{{___('name')}}:<span class="ship-data">{{$shipmentdata['name']}}</span></div>
                                    <div class="ship-header">{{___('email')}}:<span class="ship-data">{{$shipmentdata['email']}}</span></div>
                                    <div class="ship-header">{{___('phone')}}:<span class="ship-data">{{$shipmentdata['phone']}}</span></div>
                                    <div class="ship-header">{{___('date')}}:<span class="ship-data">{{date("Y-m-d")}}</span></div>

                                </div>
                                <div class="col-md-4">
                                    <img src="{{asset('uploads/images/personcalc.jpg')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 price price-shipment">
                        <h3> <span style="margin-left: 8px">Price |</span> {{$shipmentdata['price']}}<span style="margin-left: 8px">EGP</span> </h3>
                        <a href="/contact-us"><button  class="btn btn-warning pull-right">Ship now</button></a>
                        <a role="button" href="{{route('pricingIndex')}}"><button class="btn btn-default pull-right" style="margin-right: 8px">Retry</button></a>
                    </div>
                </div>
            @endif
        </div>
    </section>
@endsection


