@extends('website.layouts.master')
@section('content')
    @include('website.layouts.fixednavbar')
    <!--start breadcrumb area-->
    @include('website.layouts.breadcrumb',['head'=>trans('website.contact.contact_us'),'mainlink'=>trans('website.home.home'),'childlink'=>trans('website.contact.contact_us')])
    <!--    start contact page content-->
    <section class="contact-page-area" style="background: #eee">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6 text-left">
                    <div class="about_us_content_title">
                        <h2>contact us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="contact-form">
                        <h2 class="contact_page_headings">{{trans('website.contact.send_message_to_us')}}</h2>
                        <form action="/contact" id="contact" method="post">
                            {{csrf_field()}}
                            <input type="text" class="form-control" value="{{old('name')}}" required name="name" id="name" placeholder="{{trans('website.contact.name')}}...">
                            @if($errors->has('name'))
                                <p class="text-danger">
                                    <b>{{$errors->first('name')}}</b>
                                </p>
                            @endif
                            <input type="text" class="form-control" value="{{old('company')}}" required name="company" placeholder="{{trans('website.contact.company')}}... " id="company">
                            @if($errors->has('company'))
                                <p class="text-danger">
                                    <b>{{$errors->first('company')}}</b>
                                </p>
                            @endif
                            <input type="text" class="form-control" value="{{old('phone')}}" required name="phone" placeholder="{{trans('website.contact.mobile')}}..." id="phone">
                            @if($errors->has('phone'))
                                <p class="text-danger">
                                    <b>{{$errors->first('phone')}}</b>
                                </p>
                            @endif
                            <input type="text" class="form-control" value="{{old('website')}}" name="website" placeholder="{{trans('website.contact.website')}}... " id="website">
                            <input type="text" class="form-control" value="{{old('email')}}" required name="email" placeholder=" {{trans('website.contact.email')}}..." id="email">
                            @if($errors->has('email'))
                                <p class="text-danger">
                                    <b>{{$errors->first('email')}}</b>
                                </p>
                            @endif
                            <div class="selectdiv">
                                <select class="form-control" aria-label="monthly order" name="monthly_order" id="shipments-field-head">

                                    <option value="" disabled="" selected="" data-i18n="monthlyOrder">Monthly Orders</option>
                                    <option value="0 - 100">0 - 100</option>
                                    <option value="100 - 500">100 - 500</option>
                                    <option value="500 - 1000">500 - 1000</option>
                                    <option value="1000 - 3000">1000 - 3000</option>
                                    <option value="3000+">3000+</option>
                                </select>
                            </div>
                            <br>
                            <div class="selectdiv">
                                <select class="form-control" aria-label="industry" name="industryType" id="industry-field-head">
                                    <option data-i18n="Industry" value="" disabled="" selected="">Industry</option>
                                    <option data-i18n="Fashion" value="Fashion">Fashion</option>
                                    <option data-i18n="Cosmetics" value="Cosmetics">Cosmetics</option>
                                    <option data-i18n="Food/Drinks" value="Food/Drinks">Food/Drinks</option>
                                    <option data-i18n="Electronics/Home Products" value="Electronics/Home Products">Electronics/Home Products</option>
                                    <option data-i18n="Furniture" value="Furniture">Furniture</option>
                                    <option data-i18n="Others" value="Others">Others</option>
                                </select>
                            </div>
                            <br>
                            <textarea name="messages" placeholder=" {{trans('website.contact.message')}}..."></textarea>
                            <input type="submit" value="{{trans('website.contact.submit')}}" class="btn btn-primary btn-sm">
                            <input type="reset" value="{{trans('website.contact.reset')}}" class="btn btn-warning" style="width: 35%;border-radius: 15px;font-size: 20px;color: #000;">
                        </form>
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-1 col-sm-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3455.6559377143526!2d31.297466014956694!3d29.98931648190244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145838e5c50df569%3A0xcfd49815c7e779fa!2sRing%20Rd%2C%20Al%20Abageyah%2C%20El-Khalifa%2C%20Cairo%20Governorate!5e0!3m2!1sen!2seg!4v1616406821635!5m2!1sen!2seg" style="width: 100%;border:0;margin-top: 60px" height="500"  allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>


@endsection
