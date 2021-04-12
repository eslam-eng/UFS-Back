<!DOCTYPE html>
<html>
<title>@yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
    * {
        direction: ltr;
    }

    .text-center, .text-center td {
        text-align: center!important;
    }

    .report-content table td, .report-content table th {
        text-align: center!important;
    }

</style>

@yield('styles')
<body>

	<div class="w3-padding">
        @include('header')

        <div class="report-content">
            @yield("content")
        </div>
    </div>

    @if(!isset($nonPrint))
        @include("ask_print")
    @endif

</body>
</html>


