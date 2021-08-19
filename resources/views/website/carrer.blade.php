@extends('website.master', ["title" => "Career"])

@section('styles')
    <style>
        #header {
            background-image: url("{{ url('/') }}/wp-content/uploads/2015/11/header_bg_13.jpg") !important;
            background-repeat: repeat !important;
        }

        #header {
            position: relative !important;
            background-color: #183650 !important;
            background-position: 50% 0 !important;
            color: #fff !important;
            z-index: 50 !important;
            margin: 0 0 37px !important;
        }
        .vc_services_grid .item .item_wr .item_thumbnail img
        {
            display: block;
            max-width: 100%;
            height: 220px!important;
        }
        .js-cms-img
        {

            background-image: url("/wp-content/uploads/2015/11/tnt.png") !important;
        }
        img{
            border-radius: 5px;
        }
        .row h3
        {
            color: #337ab7;
        }
        .row h4
        {
            text-transform: capitalize;
        }
        .apply
        {
            font-size: 16px;
            color: #fff;
            text-decoration: none !important;

        }

        .modal-body h4
        {
            color: #337ab7 ;
            text-align: center;
        }
        .modal-body form input:not([type=file])
        {
            margin-bottom: 10px;
            border-radius: 8px;
        }
        .contentcareer
        {
            margin-top: 6%;

        }
        .contentcareer p
        {
            font-size: 18px!important;
            font-family: 'Nunito', sans-serif;
            line-height: 30px;
        }

        .fade-in-left {
            animation: fadeInLeft ease 2s;
            -webkit-animation: fadeInLeft ease 2s;
            -moz-animation: fadeInLeft ease 2s;
            -o-animation: fadeInLeft ease 2s;
            -ms-animation: fadeInLeft ease 2s;
        }

        .fadein {
            animation: fadeIn ease 1s;
            -webkit-animation: fadeIn ease 2s;
            -moz-animation: fadeIn ease 2s;
            -o-animation: fadeIn ease 2s;
            -ms-animation: fadeIn ease 2s;
        }

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0);
            }
            to {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translate3d(0, -20%, 0);
            }
            to {
                opacity: 1;
                transform: translate3d(0, 0, 0);
            }
        }


    </style>

@endsection


@section('content')
    <div>

        <div class="container-fluid">
           <div class="row">
               <div class="col-md-5 col-sm-12 fade-in-left">
                   <h3>Why work for us?</h3>
                   <h4>
                       <img src="{{asset('uploads/company/team3.jpg')}}" width="600px" height="500px" class="img-fluid" alt="Responsive image">
                   </h4>
               </div>
               <div class="col-md-7 col-sm-12 contentcareer fadein">
                   <p>

                           At UFS, you will be working for a company that is well acclaimed for its services, quality standards and level of professionalism.
                       <br>Our international presence will give your career a shot in the arm. You will get an opportunity to work in a fast paced and dynamic environment that fosters trust, respect,
                           teamwork and intellectual creativity. We strive to be the best in the industry and therefore we create and nurture a workforce that is also the best in the industry.<br><br>
                           There are many perks and rewards at work. We work as a team to expand this field

                   </p>
                   <!-- Button trigger modal -->
                   <a role="button" class="btn btn-info btn-block apply" data-toggle="modal" data-target="#exampleModal">
                       Apply Now
                   </a>

{{--                   <a  href="#" class=" btn btn-warning btn-block apply" role="button">Apply Now</a>--}}
               </div>
           </div>
        </div>
    </div>

@endsection



<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style="background-color: #fafafa;">
            <div id="alert" class="alert alert-danger alert-dismissible fade" role="alert">
                <h4 id="feedback_msg"></h4>
                <ul></ul>
            </div>

            <div class="modal-body">
                <form id="careerform" action="{{route('career')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="row">
                        <h4>Contact Details</h4>
                        <div class="col-md-6 col-sm-12">
                            <input type="text" name="name" value="{{old('phone')}}" placeholder="Name..." />
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input type="text" name="phone" value="{{old('phone')}}" placeholder="phone number..."/>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input type="email" name="email" value="{{old('email')}}" placeholder="email eaxmple(johne@gmail.com)" />
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <input type="text" name="address" value="{{old('address')}}"  placeholder="your address..." />
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
                            <input type="text" name="collage" value="{{old('collage')}}"  placeholder="faculty&collage" />
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
                            <input type="text" name="industry" value="{{old('industry')}}" placeholder="current industry..." />
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input type="text" name="skills" value="{{old('skills')}}" placeholder="your skills..." />
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

@section('script')
    <script src="{{asset('js/jquery.min.js')}}"></script>
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

