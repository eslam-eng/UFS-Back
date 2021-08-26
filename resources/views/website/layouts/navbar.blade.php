
<link rel="stylesheet" href="{{asset('website/css/nav.css')}}"/>
<section class="header_area five" id="home">
{{--    <nav id="mynav" class="navbar navbar-light bg-light justify-content-between">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-6 col-sm-6">--}}

{{--                </div>--}}
{{--                <div class="col-md-6 col-sm-6">--}}
{{--                    <ul>--}}
{{--                        <li>--}}
{{--                            <i class="fa fa-phone"></i>--}}
{{--                            <span>CALL FREE: {{ $company->phone }}</span>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="mailto:{{ $company->email }}">--}}
{{--                                <i class="fa fa-envelope" aria-hidden="true"></i>--}}
{{--                                <span>{{ $company->email }}</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <i class="fa fa-map-marker"></i>--}}
{{--                            <span>{{ $company->address }}</span>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </nav>--}}
    <div class="logo_menu" id="sticker">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-6">
                    <div class="logo">
                        <a href="/"><img src="{{asset('uploads/company/161752858777432.png')}}" alt="ufs"></a>
                    </div>
                </div>
                <div class="col-md-8 col-xs-6  col-sm-7 col-lg-offset-1 col-lg-7 mobMenuCol" style="margin-top: 0px;">
                    <nav class="navbar">
                        <ul class="nav navbar-nav navbar-right menu">
                            <li><a href="/">{{___('home')}}</a></li>
                            <li><a href="/about-us">{{___('about')}}</a></li>
                            <li><a href="/services">{{___('services')}}</a></li>
                            <li><a href="/contact-us">{{___('contact')}}</a></li>
                            <li><a href="/career">{{___('carrier')}}</a></li>
                            <li><a href="/price-shipments">{{___('pricing')}}</a></li>
                            <li><a href="/request-pickup">{{___('pick request')}}</a></li>
                            <li class="current-menu-item">
                                <a role="button" class="btn" style="color: #fff">
                                    Track&Trace<span class="caret"></span>
                                </a>
                                <ul class="dropdownMenu trackbox">
                                    <p>For more detailed tracking and status information, sign in or contact your local
                                        BestLogistic representative for access.
                                    </p>
                                    <div class="about_single_item">
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">

                                            <li class="nav-item active">
                                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Track Domestic</a>
                                            </li>
                                            <li class="nav-item" style="width: 165px">
                                                <a class="nav-link" id="contact-tab" style="margin-top: 15px" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Track International</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade active in" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                                <div class="welcome_form">
                                                    <br>
                                                    <form action="{{ route('trackAwb') }}" method="get">
                                                        @csrf
                                                        <input class="form-control" required type="text"  name="track_number" autocomplete="off" placeholder="Enter your Awb Number">
                                                        <input class="submit" type="submit" value="{{trans('website.contact.submit')}}">
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                                <br>
                                                <p>
                                                    To Track International shipments<a role="button" style="color:#829eec;padding-left: 8px;font-size: 17px;font-weight: bold;" href="{{ route('trackMore') }}" aria-current="page" data-wpel-link="internal">{{ ___('Click Here') }}</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-4 col-lg-2 signup" style="margin-top: 25px;">
                    <ul class="nav navbar-nav menu">
                        <li class="current-menu-item"><a role="button" class="btn" style="color: #fff"><i class="fa fa-sign-in fa-2x" aria-hidden="true"></i>
                                Login<span class="caret"></span></a>
                            <ul class="dropdownMenu">
                                <li><a href="https://universal.ufs-eg.com/" target="_blank" aria-current="page">{{___('go to system')}}</a></li>
                                <li><a href="https://info.ufs-eg.com/"> {{ ___('Go to System2') }}</a></li>

                            </ul>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="Modern-Slider">
        <!-- Item -->
        <div class="item">
            <div class="img-fill">
                <img src="{{asset('uploads/slider/slider_1.jpg')}}" alt="#">
                <div class="info">
                    <div>
                        <h1>CONTINENTAL TRANSPORTATION</h1>
                        <h4>To best support your ever-changing logistics needs <br>we are continuously evolving our transportation services.</h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- // Item -->
        <!-- Item -->
        <div class="item">
            <div class="img-fill">
                <img src="{{asset('uploads/slider/slider_2.jpg')}}" alt="#">
                <div class="info">
                    <div>
                        <h1>TRANSATLANTIC DELIVERY</h1>
                        <h4>Combined rail road transport is particularly well suited to the shipping of hazardous goods since it reduces risk.</h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- // Item -->
        <!-- Item -->
        <div class="item">
            <div class="img-fill">
                <img src="{{asset('uploads/slider/slider_3.jpg')}}" alt="#">
                <div class="info">
                    <div>
                        <h1>SEA & OCEAN DELIVERY</h1>
                        <h4>Sea-Air cargo is the last to be loaded and the first to be unloaded,reducing transshipment times and risk.</h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- // Item -->
        <!-- Item -->
        <div class="item">
            <div class="img-fill">
                <img src="{{asset('uploads/slider/slider_4.jpg')}}" alt="#">
                <div class="info">
                    <div>
                        <h1>WAREHOUSING STORAGE</h1>
                        <h4>You can opt for dedicated platforms from the advantages related to shared surfaces,resources and equipment.</h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- // Item -->
    </div>
</section>
<!--end of header area-->
