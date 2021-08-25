@extends('website.layouts.master')
@section('content')
    @include('website.layouts.fixednavbar')
    <!--start breadcrumb area-->
    @include('website.layouts.breadcrumb',['head'=>trans('website.services.services'),'mainlink'=>trans('website.home.home'),'childlink'=>trans('website.services.services')])
    <style>
        .iconservice{
            color: #0304c1;
        }
        .service_area
        {
            height: 465px;
            position: relative;
            background: url(/uploads/images/person.jpg) no-repeat center center / cover !important;
        }
        .why_ufs
        {
            color: #000000;
            font-weight: bold;
            text-align: justify;
            padding: 10px;
        }
        #service ul li
        {
            text-align: justify;
            color: #000;
            padding: 10px;
            font-weight: bold;
        }
        .domestic_content
        {
            overflow: hidden;
            position: relative;
            height: 364px;
            padding: 0px;
            background: #FFFFFF;
            margin-left: 30px;
        }
        .domestic_content h4
        {
            padding-top: 30px;
        }
        .domestic_content ul li
        {
            color: #000000;
            font-weight: bold;
            padding-bottom: 5px;
        }
        .single_count:before
        {
            height: 110px !important;
        }
    </style>
    <!-- Pricing Area -->
    <section class="about_top">
        <div class="container">
            <div class="row page-title">
                <div class="col-md-5 col-sm-6">
                    <div class="pricing-desc section-padding-two">
                        <div class="pricing-desc-title">
                            <div class="title">
                                <h2>{{trans('website.services.import_services')}}</h2>
                                <p>{{trans('website.services.import_services_content')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about_top" style="background: #eee">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 domestic_content">
                    <div class="about_single_item">
                        <div class="about_single_item_content">
                            <h4>Faster</h4>
                            <p>Express delivery on the next possible business day</p>
                            <hr>
                            <ul>
                                <li>9:00 Express: delivered before 9am.</li>
                                <li>10:00 Express: delivered before 10am.</li>
                                <li>12:00 Express: delivered before 12pm.</li>
                                <li>Express: delivered before 6pm
                                </li>
                            </ul>
                        </div>
                        <div>
                            <img src="{{asset('uploads/images/svgman.PNG')}}">
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-6 col-xs-12 domestic_content">
                    <div class="about_single_item">
                        <div class="about_single_item_content">
                            <h4>Lower price</h4>
                            <p>Economy Express delivery from two business days</p>
                            <hr>
                            <ul>
                                <li>Economy Express: delivered by 6pm .</li>

                            </ul>
                        </div>
                        <div>
                            <img src="{{asset('uploads/images/svgcourier.PNG')}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--start count up area-->
    <section class="service_area" id="service">
        <div class="mytable">
            <div class="cell">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 text-center" style="background: #eeeeee94;padding: 20px">
                            <div class="single_count">
                                <h3 class="why_ufs">Special services</h3>
                                <p class="why_ufs">Tailor-made shipping solutions for your special requests</p>
                                <ul>
                                    <li>Urgent, confidential, temperature controlled or sensitive shipments .</li>
                                    <li>Large or heavy items (freight)</li>
                                    <li>Industry-specific solutions</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--    end of counter up area-->
    <section class="about_top" style="background: #eaebec!important;">
        <div class="container">
            <div class="row" style="margin: auto  !important;">
                <h2 style="color: #000000;margin-bottom: 30px">Where do you want to ship?</h2>
                <div class="col-md-4 col-sm-6 col-xs-12 shipmetstype">
                    <div class="single-pricing-table">
                        <div class="price">
                            <img src="{{asset('uploads/images/export.PNG')}}">
                        </div>
                        <div class="pricing-head">
                            <h6 class="price-title">Export from Egypt</h6>
                        </div>
                        <div class="pricing-body">
                            <ul>
                                <li>Your Ship goods to over 200 countries or more</li>
                            </ul>
                            <a href="/export-shipments" role="button" class="price-btn">{{trans('website.explore_export_service')}}</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 shipmetstype">
                    <div class="single-pricing-table">
                        <div class="price">
                            <img src="{{asset('uploads/images/domestic.PNG')}}">
                        </div>
                        <div class="pricing-head">
                            <h6 class="price-title">Domestic shipments</h6>
                        </div>
                        <div class="pricing-body">
                            <ul>
                                <li style="padding: 11px 0;">Send and receive shipments within your country.</li>
                            </ul>
                            <a href="/domestic-shipments" role="button" class="price-btn">{{trans('website.explore_export_service')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


