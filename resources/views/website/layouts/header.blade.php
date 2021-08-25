<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fast Delivery</title>
    <!--  bootstrap css -->
    <link rel="stylesheet" href="{{asset('website/css/bootstrap.min.css')}}">
    <!--  font Awesome Css  -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <!--    stylesheet for fonts-->
    <link href="{{asset('website/fonts/stylesheet.css')}}" rel="stylesheet">
    <!-- Reset css-->
    <link href="{{asset('website/css/reset.css')}}" rel="stylesheet">
    <!--slick css-->
    <link href="{{asset('website/css/slick.css')}}" rel="stylesheet">
    <!--  owl-carousel css -->
    <link href="{{asset('website/css/owl.carousel.css')}}" rel="stylesheet">
    <!--  owl-carousel css -->
    <link href="{{asset('website/css/animate.css')}}" rel="stylesheet">
    <!--  YTPlayer css For Background Video -->
    <link href="{{asset('website/css/jquery.mb.YTPlayer.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('website/css/meanmenu.css')}}">
    <!--  style css  -->
    <link href="{{asset('website/css/version-5-slider.css')}}" rel="stylesheet">
    <link href="{{asset('website/style.css')}}" rel="stylesheet">
    <!--  Responsive Css  -->
    <link href="{{asset('website/css/responsive.css')}}" rel="stylesheet">

    @yield('style')
    <!--  browser campatibel css files-->
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="js">
<div id="preloader"></div>
@if(session()->has('error'))
    <div class="row">
        <div class="alert alert-danger alert-dismissible fade show">
            <strong>Error!</strong> {{session()->get('error')}}.
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
    </div>
@endif
