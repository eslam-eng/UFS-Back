@extends('website.layouts.master')
@section('content')
    @include('website.layouts.fixednavbar')
    <!--start breadcrumb area-->
    @include('website.layouts.breadcrumb',['head'=>trans('website.pricing'),'mainlink'=>trans('website.home.home'),'childlink'=>trans('website.pricing')])
    <!--start calculate area-->
    <section class="calculate_area" id="tracking">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="calculate_title">
                        <h2>UFS Courier Service</h2>
                        <p>Calculate Your shipment price | Thank you for choosing UFS. We are glad to serve you </p>
                    </div>
                    <div class="calculate_form">
                        <form action="{{route('calc-price')}}" id="contact" method="post">
                            {{csrf_field()}}

                            <label>{{___('name')}}*</label>
                            <input type="text" class="form-control" required name="name" id="name" placeholder="{{___('name')}}...">
                            <div>
                                @if($errors->has('name'))
                                    <p class="text-danger">
                                        <b>{{$errors->first('name')}}</b>
                                    </p>
                                @endif
                            </div>
                            <br>
                            <label>{{___('email')}}</label>
                            <input type="text" class="form-control" name="email" id="name" placeholder="{{___('email')}}...">
                            <div>
                                @if($errors->has('email'))
                                    <p class="text-danger">
                                        <b>{{$errors->first('email')}}</b>
                                    </p>
                                @endif
                            </div>
                            <br>
                            <label>{{___('phone')}}*</label>
                            <input type="text" class="form-control" name="phone" id="phone_number" pattern="(01)[0-9]{9}" required="required" placeholder="{{___('phone number')}}...">
                            <div>
                                @if($errors->has('phone'))
                                    <p class="text-danger">
                                        <b>{{$errors->first('phone')}}</b>
                                    </p>
                                @endif
                            </div>
                            <br>
                            <label>{{___('from')}}*</label>
                            <div class="selectdiv">
                                <select class="form-control" aria-label="monthly order" name="city_from" id="shipments-field-head">
                                    @foreach($cities as $city)
                                        <option value="{{$city->id}}">{{$city->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                @if($errors->has('city_from'))
                                    <p class="text-danger">
                                        <b>{{$errors->first('city_from')}}</b>
                                    </p>
                                @endif
                            </div>
                            <br>
                            <label>{{___('to')}}*</label>
                            <div class="selectdiv">
                                <select class="form-control" aria-label="industry" name="city_to" id="industry-field-head">
                                    @foreach($cities as $city)
                                        <option value="{{$city->id}}">{{$city->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                @if($errors->has('city_to'))
                                    <p class="text-danger">
                                        <b>{{$errors->first('city_to')}}</b>
                                    </p>
                                @endif
                            </div>
                            <br>
                            <label>{{___('weight')}}</label>
                            <input type="number" class="form-control" value="1"  required name="weight" id="weight" placeholder="{{___('weight')}}...">
                            <div>
                                @if($errors->has('weight'))
                                    <p class="text-danger">
                                        <b>{{$errors->first('weight')}}</b>
                                    </p>
                                @endif
                            </div>
                            <br>
                            <div class="row">
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h2 class="mb-0">
                                                <button class="btn  text-left collapsed" style="margin-left: 15px" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    {{___('dimensions')}}
                                                </button>
                                            </h2>
                                        </div>
                                        <br>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label for="height">{{___('height')}}</label>
                                                        <input type="number" value="0" name="height" class="form-control" id="height">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="width">{{___('width')}}</label>
                                                        <input type="number" value="0" name="width" class="form-control" id="width">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="length">{{___('length')}}</label>
                                                        <input type="number" value="0" name="length" class="form-control" id="length">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <label>{{___('description')}}</label>
                            <input type="text" class="form-control"  name="desc" id="name" placeholder="{{___('description')}}...">
                            <div class="calculat-button">
                                <input type="submit" class="calulate" value="Calculate your cost now">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <img src="{{asset('uploads/images/cal.jpeg')}}" alt="#">
                </div>
            </div>

        </div>

    </section>
    <!--    end of calculate area-->
@endsection
