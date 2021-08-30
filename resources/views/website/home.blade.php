@extends('website.layouts.master')
@section('content')
    @include('website.layouts.navbar')

    <style>
        .bosta
        {
            margin-left: 40px !important;
        }
        .item_icon
        {
            width: 100px;
        }
        .container-fluid .ml
        {
            margin: 0 44px 10px;
        }
    </style>
    <!--   start about top area-->
    <section class="about_top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="about_single_item">
                        <div class="item_icon">
                            <img src="{{asset('uploads/images/fastdelivery.jpg')}}" alt="item">
                        </div>
                        <div class="about_single_item_content">
                            <h4>Fastest Delivery</h4>
                            <p class="ml">We understand that sometimes you need immediate service.
                                We worked hard to make sure we can accommodate your quick requests by having the right staff and flexible scheduling.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="about_single_item">
                        <div class="item_icon">
                            <img src="{{asset('uploads/images/ecommercce.png')}}" alt="item">
                        </div>
                        <div class="about_single_item_content">
                            <h4>E-Commerce Shop</h4>
                            <p class="ml">Easily connect your Shopify or WooCommerce Website with UFS Plugins and deliver what you love, always on schedule.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="about_single_item">
                        <div class="item_icon">
                            <img src="{{asset('uploads/images/cod.png')}}" alt="item">
                        </div>
                        <div class="about_single_item_content">
                            <h4>Manage COD</h4>
                            <p class="ml">Manage your cash flow by monitoring collected cash and pending invoices through UFS cash collection service.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--    end of about top area-->


    <!--    start about us area-->
    <section class="about_us_area" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="about_us_content">
                        <h2>{{trans('website.home.about_us')}}</h2>
                        <p>{{trans('website.home.about_us_content')}}</p>
                        <a href="/about-us">{{trans('website.read_more')}}<span  class="fa fa-long-arrow-right"></span></a>
                    </div>
                </div>
                <div class="col-md-offset-1 col-sm-6 col-md-5">
                    <div class="about_car">
                        <img src="{{asset('uploads/images/aboutus.jpg')}}" alt="car">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--   end of about us area-->

    <!--start count up area-->
    <section class="couter_up_area" id="service">
        <div class="mytable">
            <div class="cell">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-3 text-center">
                            <div class="single_count">
                                <h1 class="counter">165</h1>
                                <h5>Satisfied clients</h5>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 col-md-offset-1 text-center">
                            <div class="single_count">
                                <h1 class="counter">12</h1>
                                <h5>Branches</h5>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 col-md-offset-1 text-center">
                            <div class="single_count">
                                <h1 class="counter">150</h1>
                                <h5>Active workers</h5>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-md-offset-1 text-center">
                            <div class="single_count counterplus-area">
                                <h1 class="counter">10000</h1>
                                <h5>More Than 10000 Product delivered per month</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--    end of counter up area-->

    <!--start calculate area-->
    <section class="calculate_area" id="tracking">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="calculate_title">
                        <h2>Calculate your cost</h2>
                        <p>Calculate Your shipment price | Thank you for choosing UFS. We are glad to serve you</p>
                    </div>
                    <div class="calculate_form">
                        <form action="{{route('calc-price')}}" id="contact" method="post">
                            {{csrf_field()}}

                            <label>{{___('name')}}*</label>
                            <input type="text" class="form-control" value="{{old('name')}}" required name="name" id="name" placeholder="{{___('name')}}...">
                            <div>
                                @if($errors->has('name'))
                                    <p class="text-danger">
                                        <b>{{$errors->first('name')}}</b>
                                    </p>
                                @endif
                            </div>
                            <br>
                            <label>{{___('email')}}</label>
                            <input type="text" class="form-control" value="{{old('email')}}" name="email" id="name" placeholder="{{___('example@gmail.com')}}...">
                            <div>
                                @if($errors->has('email'))
                                    <p class="text-danger">
                                        <b>{{$errors->first('email')}}</b>
                                    </p>
                                @endif
                            </div>
                            <br>
                            <label>{{___('phone')}}*</label>
                            <input type="tel" class="form-control" value="{{old('phone')}}" name="phone" id="phone_number" pattern="(01)[0-9]{9}" required="required" placeholder="{{___('phone number')}}...">
                            <div>
                                @if($errors->has('phone'))
                                    <p class="text-danger">
                                        <b>{{$errors->first('phone')}}</b>
                                    </p>
                                @endif
                            </div>
                            <br>
                            <label>{{___('from')}}*</label>
                            <div class="selectdiv">
                                <select class="form-control" aria-label="monthly order" name="city_from" id="shipments-field-head">
                                   @foreach($cities as $city)
                                       <option value="{{$city->id}}">{{$city->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                @if($errors->has('city_from'))
                                    <p class="text-danger">
                                        <b>{{$errors->first('city_from')}}</b>
                                    </p>
                                @endif
                            </div>
                            <br>
                            <label>{{___('to')}}*</label>
                            <div class="selectdiv">
                                <select class="form-control" aria-label="industry" name="city_to" id="industry-field-head">
                                    @foreach($cities as $city)
                                        <option value="{{$city->id}}">{{$city->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                @if($errors->has('city_to'))
                                    <p class="text-danger">
                                        <b>{{$errors->first('city_to')}}</b>
                                    </p>
                                @endif
                            </div>
                            <br>
                            <label>{{___('weight')}}</label>
                            <input type="number" class="form-control" value="1"  required name="weight" id="name" placeholder="{{___('weight')}}...">
                            <div>
                                @if($errors->has('weight'))
                                    <p class="text-danger">
                                        <b>{{$errors->first('weight')}}</b>
                                    </p>
                                @endif
                            </div>
                            <br>
                            <div class="row">
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h2 class="mb-0">
                                                <button class="btn  text-left collapsed" style="margin-left: 15px" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    {{___('dimensions')}}
                                                </button>
                                            </h2>
                                        </div>
                                        <br>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label for="height">{{___('height')}}</label>
                                                        <input type="number" value="0" name="height" class="form-control" id="height">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="width">{{___('width')}}</label>
                                                        <input type="number" value="0" name="width" class="form-control" id="width">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="length">{{___('length')}}</label>
                                                        <input type="number" value="0" name="length" class="form-control" id="length">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <label>{{___('description')}}</label>
                            <input type="text" class="form-control" value="{{old('desc')}}"  name="desc" id="name" placeholder="{{___('description')}}...">
                            <div class="calculat-button">
                                <input type="submit" class="calulate" value="Calculate your cost now">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <img src="{{asset('uploads/images/cal.jpeg')}}" alt="#">
                </div>
            </div>

        </div>

    </section>
    <!--    end of calculate area-->


    <!--    start client say area-->
    <section class="client-area" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-xs-12 col-sm-8">
                    <div class="slients-title">
                        <h2>Contact Us</h2>
                        <h4>We aim to reach you anytime & everywhere.. Your satisfaction is our mission.</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <a href="/contact-us"><button class="btn btn-info btn-block btn-lg"><i class="fa fa-phone"></i>Contact Us</button></a>
                </div>
            </div>
        </div>
    </section>
    <!--    end of client area-->
    <!--   start about top area-->
    <section class="about_top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="about_single_item">
                        <div class="bosta">
                            <img src="{{asset('uploads/images/nextdaydelivery.svg')}}" alt="item">
                        </div>
                        <div class="about_single_item_content">
                            <h4>Next Day Delivery</h4>
                            <p>Our promise is to deliver the next day we receive the pickups, depending on the drop-off city location.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="about_single_item">
                        <div class="bosta">
                            <img src="{{asset('uploads/images/exchange.svg')}}" alt="item">
                        </div>
                        <div class="about_single_item_content">
                            <h4>Exchange Shipments</h4>
                            <p>Exchange a shipment for another through our smart logistics system.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="about_single_item">
                        <div class="bosta">
                            <img src="{{asset('uploads/images/customerreturns.svg')}}" alt="item">
                        </div>
                        <div class="about_single_item_content">
                            <h4>Customer Returns</h4>
                            <p>From second thoughts to total satisfaction, UFS handles customer returns.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="about_single_item">
                        <div class="bosta">
                            <img src="{{asset('uploads/images/cachcollection.svg')}}" alt="item">
                        </div>
                        <div class="about_single_item_content">
                            <h4>Cash Collection</h4>
                            <p>Real-time insights on your cash collections through UFS cash collection service.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--    end of about top area-->
    <!--start Pricing Area -->
    <section class="pricing-area" id="pricing">
        <div class="mytable">
            <div class="cell">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-sm-12">
                            <div class="about_us_content">
                                <h2>{{trans('website.services.services')}}</h2>
                                <p>{{trans('website.services.header_content')}}</p>
                                <a href="/services">{{trans('website.read_more')}}<span  class="fa fa-long-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="column-out">
            <div class="pricing-slider">
                <ul class="carousel">
                    <li class="items main-pos slides" id="1">
                        <!-- Single Pricing Table -->
                        <div class="single-pricing-table">
                            <div class="pricing-head">
                                <h6 class="price-title">Domestic Shipments</h6>
                            </div>
                            <div class="price">
                                <img src="{{asset('uploads/images/domestic.PNG')}}">
                            </div>
                            <div class="pricing-body">
                                <ul>
                                    <li>Send and receive shipments within your country</li>
                                </ul>
                                <a href="/domestic-shipments" class="price-btn">Explore Domestic Shipments</a>
                            </div>
                        </div>
                        <!-- /.End Of Single Pricing Table -->
                    </li>
                    <li class="items right-pos slides" id="2">
                        <!-- Single Pricing Table -->
                        <div class="single-pricing-table">
                            <div class="pricing-head">
                                <h6 class="price-title">Export from Egypt</h6>
                            </div>
                            <div class="price">
                                <img src="{{asset('uploads/images/export.PNG')}}">
                            </div>
                            <div class="pricing-body">
                                <ul>
                                    <li>Your Ship goods to over 200 countries or more</li>

                                </ul>
                                <a href="/export-shipments" class="price-btn">Explore export service</a>
                            </div>
                        </div>
                        <!-- /.End Of Single Pricing Table -->
                    </li>
                    <li class="items back-pos slides" id="3">
                        <!-- Single Pricing Table -->
                        <div class="single-pricing-table">
                            <div class="pricing-head">
                                <h6 class="price-title">Import to Egypt</h6>
                            </div>
                            <div class="price">
                                <img src="{{asset('uploads/images/import.PNG')}}">
                            </div>
                            <div class="pricing-body">
                                <ul>
                                    <li>Book and receive shipments from other countries</li>
                                </ul>
                                <a href="/import-shipments" class="price-btn">Explore import service</a>
                            </div>
                        </div>
                        <!-- /.End Of Single Pricing Table -->
                    </li>
                    <li class="items back-pos slides" id="4">
                        <!-- Single Pricing Table -->
                        <div class="single-pricing-table">
                            <div class="pricing-head">
                                <h6 class="price-title">Import to Egypt</h6>
                            </div>
                            <div class="price">
                                <img src="{{asset('uploads/images/import.PNG')}}">
                            </div>
                            <div class="pricing-body">
                                <ul>
                                    <li>Book and receive shipments from other countries</li>
                                </ul>
                                <a href="/import-shipments" class="price-btn">Explore export service</a>
                            </div>
                        </div>
                        <!-- /.End Of Single Pricing Table -->
                    </li>
                    <li class="items back-pos slides" id="5">
                        <!-- Single Pricing Table -->
                        <div class="single-pricing-table">
                            <div class="pricing-head">
                                <h6 class="price-title">Export from Egypt</h6>
                            </div>
                            <div class="price">
                                <img src="{{asset('uploads/images/export.PNG')}}">
                            </div>
                            <div class="pricing-body">
                                <ul>
                                    <li>Your Ship goods to over 200 countries or more</li>

                                </ul>
                                <a href="/export-shipments" class="price-btn">Explore export service</a>
                            </div>
                        </div>
                        <!-- /.End Of Single Pricing Table -->
                    </li>
                    <li class="items back-pos slides" id="6">
                        <!-- Single Pricing Table -->
                        <div class="single-pricing-table">
                            <div class="pricing-head">
                                <h6 class="price-title">Domestic Shipments</h6>
                            </div>
                            <div class="price">
                                <img src="{{asset('uploads/images/domestic.PNG')}}">
                            </div>
                            <div class="pricing-body">
                                <ul>
                                    <li>Send and receive shipments within your country</li>
                                </ul>
                                <a href="/domestic-shipments" class="price-btn">Explore Domestic Shipments</a>
                            </div>
                        </div>
                        <!-- /.End Of Single Pricing Table -->
                    </li>
                    <li class="items left-pos slides" id="7">
                        <!-- Single Pricing Table -->
                        <div class="single-pricing-table">
                            <div class="pricing-head">
                                <h6 class="price-title">Import to Egypt</h6>
                            </div>
                            <div class="price">
                                <img src="{{asset('uploads/images/import.PNG')}}">
                            </div>
                            <div class="pricing-body">
                                <ul>
                                    <li>Book and receive shipments from other countries</li>
                                </ul>
                                <a href="/import-shipments" class="price-btn">Explore export service</a>
                            </div>
                        </div>
                        <!-- /.End Of Single Pricing Table -->
                    </li>
                </ul>

                <div class="slider-navs">
{{--                    <div class="prev-nav" id="prev"><i class="fa fa-angle-left"></i></div>--}}
                    <div class="next-nav" id="next"><i class="fa fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.End Of Pricing Area -->

@endsection





