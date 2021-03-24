@extends('website.master', ["title" => "Track & Trace"])

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

.table-responsive th {
    position: sticky;
    top: 0;
    background-color: #f1f1f1!important;
  }

  .md-stepper-horizontal {
      display:table;
      width:100%;
      margin:0 auto;
      background-color:#FFFFFF;
      box-shadow: 0 3px 8px -6px rgba(0,0,0,.50);
  }
  .md-stepper-horizontal .md-step {
      display:table-cell;
      position:relative;
      padding:24px;
  }
  .md-stepper-horizontal .md-step:hover,
  .md-stepper-horizontal .md-step:active {
      background-color:rgba(0,0,0,0.04);
  }
  .md-stepper-horizontal .md-step:active {
      border-radius: 15% / 75%;
  }
  .md-stepper-horizontal .md-step:first-child:active {
      border-top-left-radius: 0;
      border-bottom-left-radius: 0;
  }
  .md-stepper-horizontal .md-step:last-child:active {
      border-top-right-radius: 0;
      border-bottom-right-radius: 0;
  }
  .md-stepper-horizontal .md-step:hover .md-step-circle {
      background-color:#757575;
  }
  .md-stepper-horizontal .md-step:first-child .md-step-bar-left,
  .md-stepper-horizontal .md-step:last-child .md-step-bar-right {
      display:none;
  }
  .md-stepper-horizontal .md-step .md-step-circle {
      width:30px;
      height:30px;
      margin:0 auto;
      background-color:#999999;
      border-radius: 50%;
      text-align: center;
      line-height:30px;
      font-size: 16px;
      font-weight: 600;
      color:#FFFFFF;
  }
  .md-stepper-horizontal.green .md-step.active .md-step-circle {
      background-color:#00AE4D;
  }
  .md-stepper-horizontal.orange .md-step.active .md-step-circle {
      background-color:#F96302;
  }
  .md-stepper-horizontal .md-step.active .md-step-circle {
      background-color: rgb(33,150,243);
  }
  .md-stepper-horizontal .md-step.done .md-step-circle:before {
      font-family:'FontAwesome';
      font-weight:100;
      content: "\f00c";
  }
  .md-stepper-horizontal .md-step.done .md-step-circle *,
  .md-stepper-horizontal .md-step.editable .md-step-circle * {
      display:none;
  }
  .md-stepper-horizontal .md-step.editable .md-step-circle {
      -moz-transform: scaleX(-1);
      -o-transform: scaleX(-1);
      -webkit-transform: scaleX(-1);
      transform: scaleX(-1);
  }
  .md-stepper-horizontal .md-step.editable .md-step-circle:before {
      font-family:'FontAwesome';
      font-weight:100;
      content: "\f0d1";
  }
  .md-stepper-horizontal .md-step .md-step-title {
      margin-top:16px;
      font-size:16px;
      font-weight:600;
  }
  .md-stepper-horizontal .md-step .md-step-title,
  .md-stepper-horizontal .md-step .md-step-optional {
      text-align: center;
      color:rgba(0,0,0,.26);
  }
  .md-stepper-horizontal .md-step.active .md-step-title {
      font-weight: 600;
      color:rgba(0,0,0,.87);
  }
  .md-stepper-horizontal .md-step.active.done .md-step-title,
  .md-stepper-horizontal .md-step.active.editable .md-step-title {
      font-weight:600;
  }
  .md-stepper-horizontal .md-step .md-step-optional {
      font-size:12px;
  }
  .md-stepper-horizontal .md-step.active .md-step-optional {
      color:rgba(0,0,0,.54);
  }
  .md-stepper-horizontal .md-step .md-step-bar-left,
  .md-stepper-horizontal .md-step .md-step-bar-right {
      position:absolute;
      top:36px;
      height:1px;
      border-top:1px solid #DDDDDD;
  }
  .md-stepper-horizontal .md-step .md-step-bar-right {
      right:0;
      left:50%;
      margin-left:20px;
  }
  .md-stepper-horizontal .md-step .md-step-bar-left {
      left:0;
      right:50%;
      margin-right:20px;
  }


  .track-background {
      background-image: url("/customer_service.png");
      background-size: auto 100%;
      background-position: right;
      background-repeat: no-repeat;
  }

  .main-background {
      background-image: url("/main_background.jpg");
      background-size: cover;
      background-repeat: no-repeat;
  }
</style>
@endsection

@section('content')
<div class="container-fluid">

<!-- form modal -->
<div class="modal- light-gray w3-animate-top">
    <div class="modal-header text-center">
        <h4 class="modal-title w3-center w3-xlarge w3-text-indigo">
            <span   >{{ __('tracking awb') }}</span> {{ $resource->code }}
        </h4>
    </div>
    <div class="w3-block main-background">
        <div class="track-background row">
            <div class="col-lg-9 col-md-9">

                <div class="md-stepper-horizontal orange" style="background-color: transparent!important;" >
                    @foreach($steppers as $row)
                    <div
                        class="md-step {{ isset($awbStepers[$row])? 'active editable' : '' }}  "  >
                        <div class="md-step-circle"><span>{{ $loop->iteration  }}</span></div>
                        <div class="md-step-title">{{ __($row) }}</div>
                        <div class="md-step-bar-left"></div>
                        <div class="md-step-bar-right"></div>
                    </div>
                    @endforeach
                </div>
                <div class="md-stepper-horizontal orange" style="background-color: transparent!important;"  >
                    <div class="md-step active">
                        <div class="md-step-circle w3-xlarge" style="background-color: transparent!important;color: orangered;" ><span><i class="fa fa-circle-o"></i></span></div>
                        <div class="md-step-title">{{__('Sender')}}</div>
                        <div class="md-step-optional">
                            @if($resource->company)
                            <span>
                              {{ $resource->company->city? $resource->company->city->name : '' }},
                              {{ $resource->company->area? $resource->company->area->name : '' }}
                            </span>
                            @endif
                        </div>
                        <div class="md-step-bar-left" style="border-style: dashed;" ></div>
                        <div class="md-step-bar-right" style="border-style: dashed;"></div>
                    </div>
                    <div class="md-step active">
                        <div class="md-step-circle w3-xlarge" style="background-color: transparent!important;color: orangered;" ><span><i class="fa fa-map-marker"></i></span></div>
                        <div class="md-step-title">{{__('Receiver')}}</div>
                        <div class="md-step-optional">
                            @if($resource->receiver)
                                <span>
                                  {{ $resource->receiver->city? $resource->receiver->city->name : '' }},
                                  {{ $resource->receiver->area? $resource->receiver->area->name : '' }}
                                </span>
                            @endif

                        </div>
                        <div class="md-step-bar-left" style="border-style: dashed;"></div>
                        <div class="md-step-bar-right" style="border-style: dashed;"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="modal-body">
        <div class="row">



        </div>


        <br>

        <div class="table-responsive w3-white text-center" style="height: 200px;" >
            <table class="table table-bordered text-center">
                <tr style="background-color: #616161!important;" >
                    <th class="w3-dark-gray"  style="color: #fff; background-color: #616161!important;" >{{ "#" }}</th>
                    <th class="w3-dark-gray"  style="color: #fff; background-color: #616161!important;" >{{ __('awb')  }}</th>
                    <th class="w3-dark-gray"  style="color: #fff; background-color: #616161!important;" >{{__('sender')  }}</th>
                    <th class="w3-dark-gray"  style="color: #fff; background-color: #616161!important;" >{{ __('status')  }}</th>
                    <th class="w3-dark-gray"  style="color: #fff; background-color: #616161!important;" >{{ __('user')   }}</th>
                    <th class="w3-dark-gray"  style="color: #fff; background-color: #616161!important;" >{{ __('datetime') }}</th>
                </tr>

                @foreach($resource->awbHistory()->get() as $item)
                <tr>
                    <td>{{ $resource->code }}</td>
                    <td>{{ $resource->company? $resource->company->name : '' }}</td>
                    <td>{{ $item->status? $item->status->name : '' }}</td>
                    <td>{{ $item->user? $item->user->name : '' }}</td>
                    <td>{{ date("Y-m-d g:iA", strtotime($item->created_at)) }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>

</div><!-- /.modal-content -->

</div>
@endsection
