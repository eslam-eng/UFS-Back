@extends('website.layouts.master')
@section('content')
    @include('website.layouts.fixednavbar')
    <!--start breadcrumb area-->
    @include('website.layouts.breadcrumb',['head'=>trans('website.home.about_us'),'mainlink'=>trans('website.home.home'),'childlink'=>trans('website.home.about_us')])
    <section class="about_us_area" id="about">
        <div class="container">
            <div class="row page-title">
                <div class="col-md-6 col-sm-6 col-xs-6 text-left">
                    <div class="about_us_content_title">
                        <h2>About Us</h2>
                    </div>
                </div>
            </div>
            <div class="row" id="aboutus">
                <div class="col-md-6 col-sm-6">
                    <div class="about_us_content">
                        <p>UFS started working in Egypt since 2009, as a legal local courier company
                            and powered by well Experienced key persons in sales and operation staff.<br>
                            Our vision is to be the biggest local company in Egypt.</p>

                        <hr>
                        <h2>STRENGTHS OF THE UFS NETWORK</h2>
                        <ul>
                            <li>Pro-active customer service.</li>
                            <li>Competitive tariff, flexibility in services, quick decision making process.</li>
                            <li>A worldwide network of reliable partners.</li>
                            <li>A computerized system for tracking and communication.</li>
                        </ul>

                        <hr>
                        <h2>SERVICE - FLEXIBILITY</h2>
                        <ul>
                            <li>Flexibility is one of our main strengths.</li>
                            <li>Even after office hours, we are ready to deliver.</li>
                            <li>On special request, we can deliver your shipment as per your request.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="about_car">
                        <img src="{{asset('uploads/images/aboutus.jpg')}}"  alt="About Us">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--start about bottom area-->
    <section class="about-us-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12 col-lg-4">
                    <div class="single-about-us-bottom">
                        <h4>UFS MISSION</h4>
                        <p>Our mission is to satisfy our customers' transportation and delivery needs and meet their
                            expectations by providing the fastest and most reliable express services.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 col-lg-4">
                    <div class="single-about-us-bottom">
                        <h4>UFS VISION</h4>
                        <p>Our vision is to be the first and most flexible in this business by delivering cost-effective and quality services. </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 col-lg-4">
                    <div class="single-about-us-bottom">
                        <h4>UFS STRATEGY</h4>
                        <p>Our strategy is to be the solution provider for all customer needs.</p>
                    </div>
                </div>
            </div>
            <br><hr>
            <div class="row">
                <div class="col-lg-4">
                    <div class="panel box1">

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-area-chart fa-4x"></i>
                                </div>
                                <div class="col-xs-9 text-left" >
                                    <div class="huge">
                                        <h4>COVERAGE</h4>
                                        <br/>
                                    </div>
                                    <div class="coverage">We have established a full network of couriers and branches to deliver all throughout the nation.</div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="panel box1">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-globe fa-4x"></i>
                                </div>
                                <div class="col-xs-9 text-left">
                                    <div class="huge">
                                        <h4>SOFTWARE</h4>
                                        <br/>
                                    </div>
                                    <div>We also can provide through our software printing Air Way Bills by UFS, where all we need is a soft copy of your destinations.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="panel box1">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-smile-o fa-4x"></i>
                                </div>
                                <div class="col-xs-9 text-left">
                                    <div class="huge">
                                        <h4>CHALLENGE</h4>
                                        <br/>
                                    </div>
                                    <div class="challange">It is a continuous challenge to provide our customers with a faster, reliable and cost-effective service.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--    start client say area-->
@endsection

