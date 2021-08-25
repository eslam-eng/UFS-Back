@extends('website.layouts.master')
@section('content')
    @include('website.layouts.fixednavbar')
    <!--start breadcrumb area-->
    @include('website.layouts.breadcrumb',['head'=>trans('website.pickup.pickup'),'mainlink'=>trans('website.home.home'),'childlink'=>trans('website.pickup.pickup')])
    <!--    start contact page content-->
    <style>
        .contact-page-area
        {
            color: #000;
            background: #fbfbfb;
        }
        .item_icon {
            float: left;
            margin-right: 20px !important;
            width: 65px !important;
        }
    </style>
    <section class="contact-page-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="about_single_item">
                        <div class="item_icon">
                            <img src="{{asset('uploads/company/161752858777432.png')}}" alt="item">
                        </div>
                        <div class="about_single_item_content">
                            <h4>{{trans('website.pickup.pickup')}}</h4>
                            <p>{{trans('website.pickup.pickup_headercontent')}}</p>
                        </div>
                    </div>
                </div>
            </div>

            <form action="{{ url('/request-pickup') }}" method="post" >
                <div class="row">
                    @csrf
                    <div class="col-md-6 col-sm-6">
                        <label>{{ __("date") }} *</label>
                        <input type="date" value="{{old('date')}}" class="form-control" required name="date"   >

                        @if($errors->has('date'))
                            <p class="text-danger">
                                <b>{{$errors->first('date')}}</b>
                            </p>
                        @endif
                        <br>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <label>{{ __("status") }} *</label>
                        <select class="form-control"  required name="status_id" >
                            @foreach ($status as $item)
                                <option  value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>

                        @if($errors->has('status_id'))
                            <p class="text-danger">
                                <b>{{$errors->first('status_id')}}</b>
                            </p>
                        @endif
                        <br>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <label>{{ __("time_from")  }}  *</label>
                        <input type="time" value="{{old('time_from')}}" class="form-control" required  name="time_from" >
                        @if($errors->has('time_from'))
                            <p class="text-danger">
                                <b>{{$errors->first('time_from')}}</b>
                            </p>
                        @endif
                        <br>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <label>{{ __("Pickup Time Ready") }} *</label>
                        <input type="time" value="{{old('time_to')}}" class="form-control" required name="time_to" >

                        @if($errors->has('time_to'))
                            <p class="text-danger">
                                <b>{{$errors->first('time_to')}}</b>
                            </p>
                        @endif
                        <br>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <label>{{ __("company") }} *</label>
                        <select class="form-control"  name="company_id"  >
                            @foreach ($companies as $item)
                                <option  value="{{ $item->id }}">{{ $item->id }}</option>
                            @endforeach
                        </select>

                        @if($errors->has('company_id'))
                            <p class="text-danger">
                                <b>{{$errors->first('company_id')}}</b>
                            </p>
                        @endif
                        <br>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <label>{{ __("shipment type") }}</label>
                        <select class="form-control"  name="shipment_type"  >
                            @foreach ($types as $item)
                                <option  value="{{ $item }}">{{ $item }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('shipment_type'))
                            <p class="text-danger">
                                <b>{{$errors->first('shipment_type')}}</b>
                            </p>
                        @endif
                        <br>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <label>{{ __("shipment number") }}*</label>
                        <input type="text" value="{{old('shipment_number')}}" class="form-control"  name="shipment_number" >


                        @if($errors->has('shipment_number'))
                            <p class="text-danger">
                                <b>{{$errors->first('shipment_number')}}</b>
                            </p>
                        @endif
                        <br>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <label>{{ __("Trans Type" ) }}</label>
                        <select class="form-control"  name="trans_type_id"  >
                            @foreach ($transTypes as $item)
                                <option  value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>

                        @if($errors->has('trans_type_id'))
                            <p class="text-danger">
                                <b>{{$errors->first('trans_type_id')}}</b>
                            </p>
                        @endif

                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label>{{ __("notes") }} </label>
                        <textarea  class="form-control" name="notes" >{{old('notes')}}</textarea>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12" style="margin-top: 15px;">
                        <button class="btn btn-primary btn-block" >{{ __('send') }}</button>
                    </div>

                </div>
            </form>
        </div>
    </section>

@endsection

