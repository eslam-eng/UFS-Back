@extends('website.master', ["title" => "Request A Pickup"])

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

    .w3-padding {
        padding: 8px 16px!important;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="container">
        @if(session()->has('done'))
        <div class="alert alert-success alert-dismissible col-md-8" id="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{session('done')}}
        </div>
        @endif
        <div class="w3-block">
            <form action="{{ url('/request-pickup') }}" method="post" >
                <div class="row">
                    @csrf
                    <div class="col-lg-6 w3-padding">
                      <label>{{ __("date") }} *</label>
                      <input type="date" value="{{old('date')}}" class="form-control input-sm w3-round" required name="date"   >

                        @if($errors->has('date'))
                            <p class="text-danger">
                                <b>{{$errors->first('date')}}</b>
                            </p>
                        @endif
                    </div>

                    <div class="col-lg-6 w3-padding">
                      <label>{{ __("status") }} *</label>
                      <select class="form-control input-sm w3-round"  required name="status_id" >
                        @foreach ($status as $item)
                        <option  value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                      </select>

                        @if($errors->has('status_id'))
                            <p class="text-danger">
                                <b>{{$errors->first('status_id')}}</b>
                            </p>
                        @endif

                    </div>

                    <div class="col-lg-6 w3-padding">
                      <label>{{ __("time_from")  }}  *</label>
                      <input type="time" value="{{old('time_from')}}" class="form-control input-sm w3-round" required  name="time_from" >


                        @if($errors->has('time_from'))
                            <p class="text-danger">
                                <b>{{$errors->first('time_from')}}</b>
                            </p>
                        @endif
                    </div>

                    <div class="col-lg-6 w3-padding">
                      <label>{{ __("Pickup Time Ready") }} *</label>
                      <input type="time" value="{{old('time_to')}}" class="form-control input-sm w3-round" required name="time_to" >

                        @if($errors->has('time_to'))
                            <p class="text-danger">
                                <b>{{$errors->first('time_to')}}</b>
                            </p>
                        @endif
                    </div>

                    <div class="col-lg-6 w3-padding">
                      <label>{{ __("company") }} *</label>
                      <select class="form-control input-sm w3-round"  name="company_id"  >
                        @foreach ($companies as $item)
                        <option  value="{{ $item->id }}">{{ $item->id }}</option>
                        @endforeach
                      </select>

                        @if($errors->has('company_id'))
                            <p class="text-danger">
                                <b>{{$errors->first('company_id')}}</b>
                            </p>
                        @endif
                    </div>

                    <div class="col-lg-6 w3-padding">
                      <label>{{ __("shipment type") }}</label>
                      <select class="form-control input-sm w3-round"  name="shipment_type"  >
                        @foreach ($types as $item)
                        <option  value="{{ $item }}">{{ $item }}</option>
                        @endforeach
                      </select>
                        @if($errors->has('shipment_type'))
                            <p class="text-danger">
                                <b>{{$errors->first('shipment_type')}}</b>
                            </p>
                        @endif
                    </div>

                    <div class="col-lg-6 w3-padding">
                      <label>{{ __("shipment number") }}*</label>
                      <input type="text" value="{{old('shipment_number')}}" class="form-control input-sm w3-round"  name="shipment_number" >


                        @if($errors->has('shipment_number'))
                            <p class="text-danger">
                                <b>{{$errors->first('shipment_number')}}</b>
                            </p>
                        @endif
                    </div>

                    <div class="col-lg-6 w3-padding">
                      <label>{{ __("Trans Type" ) }}</label>
                      <select class="form-control input-sm w3-round"  name="trans_type_id"  >
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

                    <div class="col-lg-12 w3-padding">
                      <label>{{ __("notes") }} </label>
                      <textarea  class="form-control input-sm w3-round" name="notes" >{{old('notes')}}</textarea>
                    </div>

                    <div class="col-lg-12 w3-padding">
                        <label></label>
                        <button class="btn btn-primary btn-lg" >{{ __('send') }}</button>
                      </div>

                  </div>
            </form>

        </div>

        <br>
    </div>

</div>
@endsection
