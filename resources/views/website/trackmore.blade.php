@extends('website.layouts.master')

@section('script')
    <script type="text/javascript" src="//s.trackingmore.com/plugins/v1/buttonCurrent.js"></script>
@endsection
@section('content')
    @include('website.layouts.fixednavbar')
    <!--start breadcrumb area-->
    @include('website.layouts.breadcrumb',['head'=>trans('website.contact.contact_us'),'mainlink'=>trans('website.home.home'),'childlink'=>trans('website.contact.contact_us')])
    <!--    start contact page content-->
    <style>
        .submit{
            top: 5.5%;
        }
    </style>
    <section class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="welcome_text" style="text-align: center">
                    <h3>Track Your International Shipments</h3>
                    <br>
                    <div class="welcome_form">
                        <form role="form" action="//track.trackingmore.com" method="get" onsubmit="return false">
                            <input  type="text"  class="form-control" id="button_tracking_number" name="button_tracking_number" value="" autocomplete="off" maxlength="100" placeholder="Enter your Awb Number...">
                            <button class="submit" type="button" id="query" onclick="return doTrack()" >Track your product</button>
                            <input type="hidden" name="lang" value="en" />
                            <input id="button_express_code" type="hidden" name="lang" value="" />
                        </form>
                    </div>
                </div>
                <div id="TRNum"></div>
            </div>
        </div>
    </section>
@endsection
