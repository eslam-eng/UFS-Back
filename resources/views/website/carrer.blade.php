@extends('website.layouts.master')
@section('content')
    @include('website.layouts.fixednavbar')
    <!--start breadcrumb area-->
    @include('website.layouts.breadcrumb',['head'=>trans('website.carrier'),'mainlink'=>trans('website.home.home'),'childlink'=>trans('website.carrier')])
    <!--    start contact page content-->
    <style>
        .modal
        {
            z-index: 9999;
        }
        .contact_page_headings
        {
            margin-bottom: 22px !important;
        }

        .contact-form h4
        {
            color: #000;
            line-height: 24px;
            font-size: 16px;
            text-align: justify;
        }

        .item_icon
        {
            width: 70px;
            margin-top: -20px;
        }
        #careerform h4
        {
            color: #0304c1;
            text-align: center;
            margin: 10px;
            text-decoration: underline;
        }
        #careerform input
        {
            margin: 10px;
        }
        #careerform select
        {
            margin-left: 10px;
        }
    </style>
    <section class="contact-page-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="contact-form">
                        <h2 class="contact_page_headings">Why Work With US?</h2>
                        <h4>
                            At UFS, you will be working for a company that is well acclaimed for its services, quality standards and level of professionalism.
                            Our international presence will give your career a shot in the arm. You will get an opportunity to work in a fast paced and dynamic environment that fosters trust, respect, teamwork and intellectual creativity. We strive to be the best in the industry and therefore we create and nurture a workforce that is also the best in the industry.
                            There are many perks and rewards at work. We work as a team to expand this field
                        </h4>
                        <br>
                        <button  class="btn btn-info btn-block apply" data-toggle="modal" data-target="#exampleModal">
                            Apply Now
                        </button>
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-1 col-sm-6">
                    <div class="google-map">
                        <img src="{{asset('uploads/images/Career.jpg')}}">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="background-color: #fffdfd;">
                <div id="alert" class="alert alert-danger alert-dismissible fade" role="alert">
                    <h4 id="feedback_msg"></h4>
                    <ul></ul>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-offset-1 col-md-offset-1 col-sm-6 col-xs-12">
                        <div class="about_single_item">
                            <div class="item_icon">
                                <img src="{{asset('uploads/company/161752858777432.png')}}" alt="item">
                            </div>
                            <div class="about_single_item_content">
                                <h4>{{___('join to us Now')}}</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-body">
                    <form id="careerform" action="{{route('career')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="row">
                            <h4>Contact Details</h4>
                            <div class="col-md-6 col-sm-12">
                                <input type="text" class="form-control" name="name" value="{{old('phone')}}" placeholder="Name..." />
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <input type="text" class="form-control" name="phone" value="{{old('phone')}}" placeholder="phone number..."/>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="email eaxmple(johne@gmail.com)" />
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <input type="text" class="form-control" name="address" value="{{old('address')}}"  placeholder="your address..." />
                            </div>
                        </div>

                        <div class="row">
                            <h4>Personal & Education Details</h4>
                            <div class="col-md-6 col-sm-12">
                                <select class="form-control" name="qualification">
                                    <option>Select Qualification</option>
                                    <option value="B.A">B.A</option>
                                    <option value="B.Arch">B.Arch</option>
                                    <option value="BCA">BCA</option>
                                    <option value="B.B.A">B.B.A</option>
                                    <option value="B.Com">B.Com</option>
                                    <option value="B.Ed">B.Ed</option>
                                    <option value="BDS">BDS</option>
                                    <option value="BHM">BHM</option>
                                    <option value="B.Pharma">B.Pharma</option>
                                    <option value="B.Sc">B.Sc</option>
                                    <option value="B.Tech">B.Tech</option>
                                    <option value="B.E">B.E</option>
                                    <option value="LLB">LLB</option>
                                    <option value="MBBS">MBBS</option>
                                    <option value="BVSC">BVSC</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <input type="text" class="form-control" name="collage" value="{{old('collage')}}"  placeholder="faculty&collage" />
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <select class="form-control" name="degree">
                                    <option value="-1">Select Grade</option>
                                    <option value="B.A">A+</option>
                                    <option value="B.Arch">A</option>
                                    <option value="BCA">A-</option>
                                    <option value="B.B.A">B+</option>
                                    <option value="B.Com">B</option>
                                    <option value="B.Ed">B-</option>
                                    <option value="BDS">C+</option>
                                    <option value="BHM">C</option>
                                    <option value="B.Pharma">C-</option>
                                    <option value="B.Sc">D+</option>
                                    <option value="B.Tech">D</option>
                                    <option value="B.E">D-</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <h4>Current Professional Details</h4>
                            <div class="col-md-6 col-sm-12">
                                <input type="text" class="form-control" name="industry" value="{{old('industry')}}" placeholder="current industry..." />
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <input type="text" class="form-control" name="skills" value="{{old('skills')}}" placeholder="your skills..." />
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <select class="form-control" name="experiance">
                                    <option>Select Experiance</option>
                                    <option>0</option>
                                    <option>Less Than Year</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>More Than 8 Years</option>
                                </select>
                            </div>
                            <br>
                        </div>

                        <div class="row">
                            <h4>Upload C.V</h4>
                            <div class="col-md-12 col-sm-12">
                                <input type="file" name="cv" />
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" id="sendcareerdata" class="btn btn-primary"><i class="fa fa-send"></i> Send</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection
@section('script')
    <script>
        $(document).ready(function (){
            $('#sendcareerdata').click(function (){
                var formdata = new FormData($( "#careerform" )[0]);
                // var formdata = $('#careerform').serialize();
                var url = $('#careerform').attr('action');
                $.ajax({
                    url:url,
                    dataType:'json',
                    type:'post',
                    data:formdata,
                    contentType: false,
                    processData: false,
                    beforeSend:function (){
                        $("#feedback_msg").empty();
                        $('.alert ul').empty();
                    },
                    success:function (res){
                        if (res.status)
                        {
                            $("#alert").removeClass('fade alert-danger').addClass('fadein alert-success');
                            $("#feedback_msg").html(res.message);
                        }

                    },
                    error:function (data_error,exception){

                        $("#alert").removeClass('fade').addClass('fadein')
                        var errorlist = '';
                        if (exception=='error')
                        {
                            $("#feedback_msg").html(data_error.responseJSON.message);
                            $.each(data_error.responseJSON.errors,function (index,value){
                                errorlist+="<li>"+value+"</li>"
                            });
                            $('.alert ul').html(errorlist);

                        }
                    }
                });
            });
        });
    </script>
@endsection

