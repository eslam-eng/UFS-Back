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
            text-align: justify;
            padding: 10px;
            font-weight: bold;
            color: #000000;
        }
        #service ul li
        {
            text-align: justify;
            color: #000;
            padding: 10px;
            font-weight: bold;
        }
        .single_count:before
        {
            height: 85px !important;
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
                                <h2>{{trans('website.services.services')}}</h2>
                                <p>{{trans('website.services.header_content')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="about_single_item">
                        <div class="item_icon">
                            <p class="iconservice"><i class="fa fa-user fa-4x"></i></p>
                        </div>
                        <div class="about_single_item_content">
                            <h4>{{trans('website.services.services_isItForYou')}}</h4>
                            <p>{{trans('website.services.services_isItForYou_content')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="about_single_item">
                        <div class="item_icon">
                            <p class="iconservice"><i class="fa fa-cubes fa-4x"></i></p>
                        </div>
                        <div class="about_single_item_content">
                            <h4>{{trans('website.services.services_whatOffer')}}</h4>
                            <p>{{trans('website.services.services_whatOffer_content')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="about_single_item">
                        <div class="item_icon">
                            <p class="iconservice"><i class="fa fa-info-circle fa-4x"></i></p>
                        </div>
                        <div class="about_single_item_content">
                            <h4>{{trans('website.services.services_howWork')}}</h4>
                            <p>{{trans('website.services.services_howWork_content')}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <h2 style="text-align: center;color: #000000;margin-bottom: 30px">Where do you want to ship?</h2>

                <div class="col-md-4 col-sm-6 col-xs-12 shipmetstype">
                    <div class="single-pricing-table">
                        <div class="price">
                            <img src="{{asset('uploads/images/domestic.PNG')}}">
                        </div>
                        <div class="pricing-head">
                            <h6 class="price-title">Domestic Shipments</h6>
                        </div>
                        <div class="pricing-body">
                            <ul>
                                <li style="padding: 11px">Send and receive shipments within your country</li>
                            </ul>
                            <a href="/domestic-shipments" role="button" class="price-btn">{{trans('website.explore_domestic_service')}}</a>
                        </div>
                    </div>
                </div>
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
                            <img src="{{asset('uploads/images/import.PNG')}}">
                        </div>
                        <div class="pricing-head">
                            <h6 class="price-title">Import to Egypt</h6>
                        </div>
                        <div class="pricing-body">
                            <ul>
                                <li>Book and receive shipments from other countries</li>
                            </ul>
                            <a href="/import-shipments" role="button" class="price-btn">{{trans('website.explore_import_service')}}</a>
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
                        <div class="col-md-6 col-sm-6 text-center" style="background: #eeeeee94; padding: 20px">
                            <div class="single_count">
                                <h3 class="why_ufs">Why ship with UFS?</h3>
                                <ul>
                                    <li>We ship to over 200 countries including remote areas.</li>
                                    <li>Over 10 years of global expertise.</li>
                                    <li>Personalised rates for frequent shippers.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--    end of counter up area-->
@endsection

