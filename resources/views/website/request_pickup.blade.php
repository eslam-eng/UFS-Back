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

        <div class="w3-block">
            <form action="{{ url('/request-pickup') }}" method="post" >
                <div class="row">
                    @csrf
                    <div class="col-lg-6 w3-padding">
                      <label>{{ __("date") }} *</label>
                      <input type="date" class="form-control input-sm w3-round" required name="date"   >
                    </div>

                    <div class="col-lg-6 w3-padding">
                      <label>{{ __("status") }} *</label>
                      <select class="form-control input-sm w3-round"  required name="status_id" >
                        @foreach ($status as $item)
                        <option  value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                      </select>
                    </div>

                    <div class="col-lg-6 w3-padding">
                      <label>{{ __("time_from")  }}  *</label>
                      <input type="time" class="form-control input-sm w3-round" required  name="time_from" >
                    </div>

                    <div class="col-lg-6 w3-padding">
                      <label>{{ __("Pickup Time Ready") }} *</label>
                      <input type="time" class="form-control input-sm w3-round" required name="time_to" >
                    </div>

                    <div class="col-lg-6 w3-padding">
                      <label>{{ __("company") }} *</label>
                      <select class="form-control input-sm w3-round"  name="company_id"  >
                        @foreach ($companies as $item)
                        <option  value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                      </select>
                    </div>

                    <div class="col-lg-6 w3-padding">
                      <label>{{ __("shipment type") }}</label>
                      <select class="form-control input-sm w3-round"  name="shipment_type"  >
                        @foreach ($types as $item)
                        <option  value="{{ $item }}">{{ $item }}</option>
                        @endforeach
                      </select>
                    </div>

                    <div class="col-lg-6 w3-padding">
                      <label>{{ __("shipment number") }}</label>
                      <input type="text" class="form-control input-sm w3-round"  name="shipment_number" >
                    </div>

                    <div class="col-lg-6 w3-padding">
                      <label>{{ __("Trans Type" ) }}</label>
                      <select class="form-control input-sm w3-round"  name="trans_type_id"  >
                        @foreach ($transTypes as $item)
                        <option  value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                      </select>
                    </div>

                    <div class="col-lg-12 w3-padding">
                      <label>{{ __("notes") }} </label>
                      <textarea  class="form-control input-sm w3-round" name="notes" ></textarea>
                    </div>

                    <div class="col-lg-12 w3-padding">
                        <label></label>
                        <button class="btn btn-primary" >{{ __('send') }}</button>
                      </div>

                  </div>
            </form>

        </div>

        <br>
    </div>

</div>
@endsection
