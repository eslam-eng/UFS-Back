@extends('website.layouts.master')
@section('style')
    <link rel="stylesheet" href="{{asset('website/css/trackAwb.css')}}"/>
@endsection
@section('content')
    @include('website.layouts.fixednavbar')
    @include('website.layouts.breadcrumb',['head'=>trans('website.track.track'),'mainlink'=>trans('website.home.home'),'childlink'=>trans('website.track.track')])
    <div class="container-fluid">
        <!-- form modal -->
        <div class="modal- light-gray w3-animate-top">
            <div class="modal-header text-center">
                <h4 class="modal-title">
                    <span   >{{ __('tracking awb') }}</span> {{ $resource->code }}
                </h4>
            </div>
            <div class="main-background">
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
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            @if($resource->receiver_name)
                                <label>{{___('receiver name')}}</label>
                                <h4>{{$resource->receiver_name}}</h4>
                            @endif
                        </div>
                        <div class="col-md-6 col-sm-12">
                            @if($resource->receiver_title)
                                <label>{{___('receiver title')}}</label>
                                <h4>{{$resource->receiver_title}}</h4>
                            @endif
                        </div>
                    </div>
                </div>
                <br>

                <div class="table-responsive text-center">
                    <table class="table table-bordered table-striped text-center">
                        <tr style="background-color: #616161!important;" >
                            <th style="color: #fff; background-color: #616161!important; text-align: center" >{{ "#" }}</th>
                            <th style="color: #fff; background-color: #616161!important; text-align: center" >{{ __('awb')  }}</th>
                            <th style="color: #fff; background-color: #616161!important; text-align: center" >{{__('sender')  }}</th>
                            <th style="color: #fff; background-color: #616161!important; text-align: center" >{{ __('status')  }}</th>
                            <th style="color: #fff; background-color: #616161!important; text-align: center" >{{ __('user')   }}</th>
                            <th style="color: #fff; background-color: #616161!important; text-align: center" >{{ __('date-time') }}</th>
                        </tr>
                        <tbody>
                             @foreach($resource->awbHistory()->get() as $index => $item)
                            <tr>
                                <td>{{ $index+1}}</td>
                                <td>{{ $resource->code }}</td>
                                <td>{{ $resource->company? $resource->company->name : '' }}</td>
                                <td>{{ $item->status? $item->status->name : '' }}</td>
                                <td>{{ $item->user? $item->user->name : '' }}</td>
                                <td>{{ date("Y-m-d g:iA", strtotime($item->created_at)) }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div><!-- /.modal-content -->
    </div>
@endsection


