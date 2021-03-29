@extends('website.master', ["title" => "tracking more"])

@section('styles')
    <style>
        #header {
            background-image: url("{{ url('/') }}/wp-content/uploads/2015/11/Fotolia_74832474_Subscription_Monthly_M.jpg")!important;
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
        .TM_my_search_button_style  {
            height: 38px!important;
            background-color: #005a87!important;
        }
    </style>
@endsection

@section('script')
    <script type="text/javascript" src="//s.trackingmore.com/plugins/v1/buttonCurrent.js"></script>
@endsection
@section('content')
    <div class="container">
        <div style="width: 100%;margin:0 auto;text-align:center;">
            <form role="form" action="//track.trackingmore.com" method="get" onsubmit="return false">
                <div class="TM_input-group">
                    <input type="text" class="TM_my_search_input_style " id="button_tracking_number" placeholder="Tracking Number" name="button_tracking_number" value="" autocomplete="off" maxlength="100" style="border-color: #4c1cff">
                    <span class="TM_input-group-btn">
               <button class="TM_my_search_button_style " id="query" type="button" onclick="return doTrack()" style="background-color: #4c1cff">Track</button>
           </span>
                </div>
                <input type="hidden" name="lang" value="en" />
                <input id="button_express_code" type="hidden" name="lang" value="" />
            </form>
            <div id="TRNum"></div>
        </div>
    </div>
    <br>
@endsection

