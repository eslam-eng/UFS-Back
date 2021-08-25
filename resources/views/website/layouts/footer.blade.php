@php
    $company = App\Models\Company::admin();
@endphp

<!--   end of slider area-->
<section class="footer-area" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-3 col-xs-12 col-lg-3">
                <div class="single-footer">
                    <h2></h2>
                    <a href="/"><img src="{{asset('uploads/company/161752858777432.png')}}" alt="ufs" style="width: 50%"></a>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 col-lg-4">
                <div class="single-footer">
                    <h2>{{trans('website.home.about_us')}}</h2>
                    <p style="text-align: justify;color: #fff">{{trans('website.home.about_us_content')}}</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-12 col-lg-2">
                <div class="single-footer">
                    <h2>More links</h2>
                    <ul class="list">
                        <li><a href="/about-us">about us.</a></li>
                        <li><a href="/contact-us">contact us.</a></li>
                        <li><a href="/request-pickup">pickup request</a></li>
                        <li><a href="/services">Services</a></li>
                        <li><a href="/career">Carrer</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 col-lg-3">
                <div class="single-footer clearfix">
                    <h2>{{ ___('Get In Touch') }}</h2>
                    <ul class="list">
                        <li>
                            <div class="icon"><i class="fa fa-location-arrow fa-2x"></i></div>
                            <a class="text"  target="_blank" href="https://www.google.com/maps/place/{{ $company->address }}">
                                <p>{{ $company->address }}</p>
                            </a>
                        </li>
                        <li>
                            <div class="icon"><i class="fa fa-phone-square fa-2x"></i></div>
                            <a class="text"  href="tel:{{ $company->phone }}" >
                                <p>{{ $company->phone }}</p>
                            </a>
                        </li>
                        <li>
                            <div class="icon"><i class="fa fa-fax fa-2x"></i></div>
                            <div class="text">
                                <p>FAX: {{ $company->fax }}</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon"><i class="fa fa-mail-forward fa-2x"></i></div>
                            <div class="text">
                                <p><a href="mailto:Customer.Service@ufs-eg.com">{{ $company->email }}</a></p>
                            </div>
                        </li>
                        <li>
                            <div class="icon"><i class="fa fa-home fa-2x"></i></div>
                            <a class="text" target="_blank" href="https://www.google.com/maps/place/{{ optional($company->city)->name }}-{{ optional($company->area)->name }}" >
                                <p>{{ optional($company->city)->name }} - {{ optional($company->area)->name }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end of footer area-->

<!--   start copyright text area-->
<div class="copyright-area">
    <div class="container">
        <div class="col-xs-12 col-sm-6 col-md-6 text-left">
            <div class="footer-text">
                <p>Copyright 2016, All Rights Reserved</p>
            </div>
        </div>
        <div class="col-xs-12  col-sm-6 col-md-6 text-right">
            <div class="footer-text">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-linkedin"></a>
                <a href="#" class="fa fa-google-plus"></a>
                <a href="#" class="fa fa-dribbble"></a>
            </div>
        </div>
    </div>
</div>
<!--    end of copyright text area-->

<!--  jquery.min.js  -->
<script src="{{asset('website/js/jquery.min.js')}}"></script>
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>--}}
<!--    bootstrap.min.js-->
<script src="{{asset('website/js/bootstrap.min.js')}}"></script>
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>--}}
<!--    jquery.sticky.js-->
<script src="{{asset('website/js/jquery.sticky.js')}}"></script>
<!--  owl.carousel.min.js  -->
<script src="{{asset('website/js/jquery.meanmenu.js')}}"></script>
<script src="{{asset('website/js/owl.carousel.min.js')}}"></script>
<!--  jquery.mb.YTPlayer.min.js   -->
<script src="{{asset('website/js/jquery.mb.YTPlayer.min.js')}}"></script>
<!--    slick.min.js-->
<script src="{{asset('website/js/slick.min.js')}}"></script>
<!--    jquery.nav.js-->
<script src="{{asset('website/js/jquery.nav.js')}}"></script>
<!--jquery waypoints js-->
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<!--    jquery counterup js-->
<script src="{{asset('website/js/jquery.counterup.min.js')}}"></script>
<!--    main.js-->
<script src="{{asset('website/js/main.js')}}"></script>
    @yield('script')
    @if($errors->has('track_number'))
        <script>
            alert("{{$errors->first('track_number')}}")
        </script>
    @endif

</body>

</html>
