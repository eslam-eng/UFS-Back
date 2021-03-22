<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#" class="no-js">

<!-- include website css files -->
@include('website.layouts.header')

@yield('styles')

<body class="home page-template-default page page-id-2 header_style_4 transparent_header wpb-js-composer js-comp-ver-6.4.1 vc_responsive">

    <div id="main">
        <div id="wrapper">

            <!-- include website navbar -->
            @include('website.layouts.navbar', ["title" => $title])


            <!-- content of page -->
            <div id="content">
                @yield('content')
            </div>


            <!-- include website footer -->
            @include('website.layouts.footer')


            <!-- include website scripts -->
            @include('website.layouts.scripts')

            @yield('scripts')

            @if($errors->has('track_number'))

                <script>
                    alert("{{$errors->first('track_number')}}")
                </script>
            @endif
        </div>
    </div>

</html>
