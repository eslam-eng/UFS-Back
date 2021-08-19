@extends('website.master', ["title" => "About Us"])

@section('styles')
<style>
    #header {
        background-image: url("{{ url('/') }}/wp-content/uploads/2015/11/header_bg_13.jpg")!important;
        background-repeat: repeat!important;
    }
    #header {
        position: relative!important;
        background-color: #183650!important;
        background-position: 50% 0!important;
        color: #fff!important;
        z-index: 50!important;
        margin: 0 0 37px!important;
    }
/*    pragraph in overview style*/
     p{
        font-weight: bold;
        font-size: 20px;
    }
     h4,.timeline-heading h4{

         font-weight: bold;
     }
     #strengths_ufs , #service_felex
     {
         padding: 10px;
         box-shadow: 5px 10px 8px 8px #ded4d4;
     }
    #service_felex
    {
        margin-left: 2%;
    }
    .fade-in-left {
        animation: fadeInLeft ease 1s;
        -webkit-animation: fadeInLeft ease 1s;
        -moz-animation: fadeInLeft ease 1s;
        -o-animation: fadeInLeft ease 1s;
        -ms-animation: fadeInLeft ease 1s;
    }

    .fadein {
        animation: fadeIn ease 1s;
        -webkit-animation: fadeIn ease 2s;
        -moz-animation: fadeIn ease 2s;
        -o-animation: fadeIn ease 2s;
        -ms-animation: fadeIn ease 2s;
    }

    @keyframes fadeInLeft {
        from {
            opacity: 0;
            -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0);
        }
        to {
            opacity: 1;
            -webkit-transform: none;
            transform: none;
        }
    }
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translate3d(0, -20%, 0);
        }
        to {
            opacity: 1;
            transform: translate3d(0, 0, 0);
        }
    }
</style>
<link href="{{asset('css/timelinestyle.css')}}" rel="stylesheet">
@endsection

@section('content')
<div id="first" class="container">
    <div class="pageSection section">

        <section class="other content-campaign  disable-coveroverlay-paddings cms-u-padding__top-custom-30 cms-u-padding__bottom-custom-16" style="background-color:#ffffff">
            <div class="cover__overlay">

                <div class="wrapper">
                    <div class="layout">
                        <div class="parWithoutWhiteBoxnew parsys"><div class="text parbase section">
                                <div class="cms-c-text text one_column  cms-u-padding__top- cms-u-padding__bottom-" data-gdl="" data-gdl-component-type="rich-text" data-gdl-component-name="unknown" data-gdl-component-id="0">
                                    <h3><span class="c-heading o-heading--h1">About Us In Egypt </span></h3>

                                </div>
                            </div>
                            <div class="columncontrol section"><div class="">
                                    <div class="layout__item 2/3 lap-1/1  palm-1/1">
                                        <div class="columncontrol"><div class="text parbase section">
                                                <div class="cms-c-text text one_column componentbottommargin cms-u-padding__top-enable cms-u-padding__bottom-enable" data-gdl="" data-gdl-component-type="rich-text" data-gdl-component-name="unknown" data-gdl-component-id="1">
                                                    <p>
                                                        UFS started  working  in  Egypt  since  2009,  as  a  legal  local  courier  company
                                                        and  powered  by  well Experienced key persons in sales and operation staff. Our vision is to be the biggest local company in Egypt.
                                                    </p>

                                                </div>
                                            </div>

                                        </div>
                                    </div><div class="layout__item 1/3  lap-1/1 palm-1/1 layout__item--width-varient">
                                        <div class="columncontrol">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>

    </div>
    <hr>
    <div class="pageSection section">
        <div class="container bootdey">
            <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- timeline start -->
                            <div class="timeline">
                                <div class="timeline-row">
                                    <div class="timeline-dot fb-bg"></div>
                                    <div class="timeline-content">
                                        <i class="fa fa-star"></i>
                                        <h4>UFS Mission</h4>
                                        <p>
                                            Our mission is to satisfy our customers' transportation and delivery needs and meet their expectations by providing the fastest and most reliable express services.
                                        </p>
                                    </div>
                                </div>
                                <div class="timeline-row">
                                    <div class="timeline-dot green-one-bg"></div>
                                    <div class="timeline-content green-one">
                                        <i class="fa fa-book"></i>
                                        <h4>UFS Vision</h4>
                                        <p>
                                            Our vision is to be the first and most flexible in this business by delivering cost-effective and quality services.
                                        </p>
                                    </div>
                                </div>
                                <div class="timeline-row">
                                    <div class="timeline-dot green-two-bg"></div>
                                    <div class="timeline-content green-two">
                                        <i class="fa fa-handshake-o"></i>
                                        <h4>UFS Strategy</h4>
                                        <p>
                                            Our strategy is to be the solution provider for all customer needs.
                                        </p>

                                    </div>
                                </div>
                                {{--
                                                                <div class="timeline-row">
                                                                    <div class="timeline-time">
                                                                        3:55 PM<small>Apr 26</small>
                                                                    </div>
                                                                    <div class="timeline-dot green-three-bg"></div>
                                                                    <div class="timeline-content green-three">
                                                                        <i class="icon-directions"></i>
                                                                        <h4>Milestone Admin</h4>
                                                                        <p>
                                                                            Admin theme includes graphs, invoice, timeline, widgets, projects, calendar, components, layouts, todo's.
                                                                        </p>
                                                                        <div>
                                                                            <span class="badge badge-light">Profile</span>
                                                                            <span class="badge badge-light">Dashboard</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="timeline-row">
                                                                    <div class="timeline-time">
                                                                        5:24 PM<small>Apr 12</small>
                                                                    </div>
                                                                    <div class="timeline-dot green-four-bg"></div>
                                                                    <div class="timeline-content green-four">
                                                                        <i class="fa fa-user"></i>
                                                                        <h4>Milestone Dashboard</h4>
                                                                        <p class="no-margin">Milestone Admin Dashboard includes invoice, profile, tasks, gallery, projects, maintanence.</p>
                                                                        <div>
                                                                            <span class="badge badge-light">Analytics</span>
                                                                            <span class="badge badge-light">Graphs</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="timeline-row">
                                                                    <div class="timeline-time">
                                                                        11:25 AM<small>Apr 19</small>
                                                                    </div>
                                                                    <div class="timeline-dot teal-bg"></div>
                                                                    <div class="timeline-content teal">
                                                                        <i class="fa fa-coffee"></i>
                                                                        <h4>Milestone Template</h4>
                                                                        <p class="no-margin">Panels, alerts, notifications, new input styles, pricing plans, project plan, signup, login and register.</p>
                                                                        <div>
                                                                            <span class="badge badge-light">Labels</span>
                                                                            <span class="badge badge-light">Filters</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="timeline-row">
                                                                    <div class="timeline-time">
                                                                        12:30 PM<small>May 25</small>
                                                                    </div>
                                                                    <div class="timeline-dot sea-green-bg"></div>
                                                                    <div class="timeline-content sea-green">
                                                                        <i class="fa fa-image"></i>
                                                                        <h4>Milestone dashboard</h4>
                                                                        <p>Milestone Admin Dashboard contains Ion slider, heatmap, alerts, breadcrumbs, alerts, pricing, signup, login and register.</p>
                                                                        <div>
                                                                            <span class="badge badge-light">BS 4</span>
                                                                            <span class="badge badge-light">Sass</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                --}}
                            </div>
                            <!-- timeline end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>


{{--        <div class="container">--}}
{{--            <ul class="timeline">--}}
{{--                <li class="timeline-list">--}}
{{--                    <div class="timeline-badge"><i class="fa fa-star"></i></div>--}}
{{--                    <div class="timeline-panel">--}}
{{--                        <div class="timeline-heading">--}}
{{--                            <h4 class="timeline-title">Ufs Mission</h4>--}}
{{--                        </div>--}}
{{--                        <div class="timeline-body">--}}
{{--                            <p>--}}
{{--                                Our mission is to satisfy our customers' transportation and delivery needs and meet their expectations by providing the fastest and most reliable express services.                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="timeline-inverted">--}}
{{--                    <div class="timeline-badge warning"><i class="fa fa-book"></i></div>--}}
{{--                    <div class="timeline-panel">--}}
{{--                        <div class="timeline-heading">--}}
{{--                            <h4 class="timeline-title">Ufs Vision</h4>--}}
{{--                        </div>--}}
{{--                        <div class="timeline-body">--}}
{{--                           <p>Our vision is to be the first and most flexible in this business by delivering cost-effective and quality services.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="timeline-list">--}}
{{--                    <div class="timeline-badge danger"><i class="fa fa-handshake-o"></i></div>--}}
{{--                    <div class="timeline-panel">--}}
{{--                        <div class="timeline-heading">--}}
{{--                            <h4 class="timeline-title">Ufs Strategy</h4>--}}
{{--                        </div>--}}
{{--                        <div class="timeline-body">--}}
{{--                            <p>Our strategy is to be the solution provider for all customer needs.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </li>--}}

{{--                <li class="timeline-inverted">--}}
{{--                    <div class="timeline-panel">--}}
{{--                        <div class="timeline-heading">--}}
{{--                            <h4 class="timeline-title">Mussum ipsum cacilds</h4>--}}
{{--                        </div>--}}
{{--                        <div class="timeline-body">--}}
{{--                            <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <div class="timeline-badge info"><i class="glyphicon glyphicon-floppy-disk"></i></div>--}}
{{--                    <div class="timeline-panel">--}}
{{--                        <div class="timeline-heading">--}}
{{--                            <h4 class="timeline-title">Mussum ipsum cacilds</h4>--}}
{{--                        </div>--}}
{{--                        <div class="timeline-body">--}}
{{--                            <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>--}}
{{--                            <hr>--}}
{{--                            <div class="btn-group">--}}
{{--                                <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">--}}
{{--                                    <i class="glyphicon glyphicon-cog"></i> <span class="caret"></span>--}}
{{--                                </button>--}}
{{--                                <ul class="dropdown-menu" role="menu">--}}
{{--                                    <li><a href="#">Action</a></li>--}}
{{--                                    <li><a href="#">Another action</a></li>--}}
{{--                                    <li><a href="#">Something else here</a></li>--}}
{{--                                    <li class="divider"></li>--}}
{{--                                    <li><a href="#">Separated link</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <div class="timeline-panel">--}}
{{--                        <div class="timeline-heading">--}}
{{--                            <h4 class="timeline-title">Mussum ipsum cacilds</h4>--}}
{{--                        </div>--}}
{{--                        <div class="timeline-body">--}}
{{--                            <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="timeline-inverted">--}}
{{--                    <div class="timeline-badge success"><i class="glyphicon glyphicon-thumbs-up"></i></div>--}}
{{--                    <div class="timeline-panel">--}}
{{--                        <div class="timeline-heading">--}}
{{--                            <h4 class="timeline-title">Mussum ipsum cacilds</h4>--}}
{{--                        </div>--}}
{{--                        <div class="timeline-body">--}}
{{--                            <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
    </div>
    <hr class="bg-info">

    <div class="pageSection section">
        <div id="strengths_ufs" class="col-md-6 col-sm-12 fade-in-left">
            <h4>Strengths of the UFS Network</h4>
            <ul>
                <li><p>Pro-active customer service.</p></li>
                <li><p>Competitive tariff, flexibility in services, quick decision making process.</p></li>
                <li><p>A worldwide network of reliable partners.</p></li>
                <li><p>A computerized system for tracking and communication.</p></li>
            </ul>
        </div>
        <div id="service_felex" class="col-md-5 col-sm-12 fadein">
            <h4>Service - Flexibility</h4>
            <ul>
                <li><p>Flexibility is one of our main strengths.</p></li>
                <li><p>Even after office hours, we are ready to deliver.</p></li>
                <li><p>On special request, we can deliver your shipment as per your request.</p></li>
            </ul>
        </div>

    </div>

</div>
    <hr>
<div class="container coverage">
    <div class="row">
        <div class="col-md-12">
            <div class="main-timeline">
                <div class="timeline">
                    <a class="timeline-content">
                        <div class="timeline-icon">
                            <i class="fa fa-globe"></i>
                        </div>
                        <h3 class="title">Challenge </h3>
                        <p class="description">
                            It is a continuous challenge to provide our customers with a faster, reliable
                            and cost-effective service.
                        </p>
                    </a>
                </div>
                <div class="timeline">
                    <a  class="timeline-content">
                        <div class="timeline-icon">
                            <i class="fa fa-area-chart"></i>
                        </div>
                        <h3 class="title">Coverage</h3>
                        <p class="description">
                            We have established a full network of couriers and branches to deliver all
                            throughout the nation.

                        </p>
                    </a>
                </div>
                <div class="timeline">
                    <a class="timeline-content">
                        <div class="timeline-icon">
                            <i class="fa fa-globe"></i>
                        </div>
                        <h3 class="title">Software</h3>
                        <p class="description">
                            We also can provide through our software printing Air Way Bills by UFS, where
                            all we need is a soft copy of your destinations.

                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
@section('script')
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script>
        $(document).ready(function (){
            $(window).on('scroll',function (){

                var scrollhight = $(window).scrollTop();

                if (scrollhight>300)
                    $('.pageSection .container .timeline .timeline-row').addClass('fade-in-left')
                else
                    $('.pageSection .container .timeline .timeline-row').removeClass('fade-in-left')

                if (scrollhight>900)
                    $('.container .row .main-timeline .timeline').addClass('fade-in-left')
                else
                    $('.container .row .main-timeline .timeline').removeClass('fade-in-left')
            })

        });
    </script>
@endsection

