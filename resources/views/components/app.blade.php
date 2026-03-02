<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="{{asset('assets/images/icon.png')}}" type="image/gif" sizes="16x16">

    <title>K U L U - High-Performance Windows & Doors Calgary | REHAU Certified | Calgary | Alberta</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description"
          content="Kulu Windows & Doors offers NFRC certified, energy-efficient REHAU 4500 series windows in Calgary, Alberta. Engineered for the Canadian climate. Get a free quote today!">

    <meta name="keywords"
          content="windows and doors Calgary, energy efficient windows Alberta, REHAU 4500 series Calgary, vinyl windows Calgary, tilt and turn windows Canada, NFRC certified windows, Kulu windows, window replacement Calgary | Calgary, Edmonton, Red Deer, Lethbridge, St. Albert, Airdrie, Medicine Hat, Grande Prairie, Lloydminster, Leduc, Spruce Grove, Fort Saskatchewan, Camrose, Wetaskiwin, Brooks, Canmore, Banff, Cold Lake">

    <meta name="geo.region" content="CA-AB"/>
    <meta name="geo.placename" content="Calgary"/>
    <meta name="geo.placename" content="Edmonton"/>
    <meta name="geo.position" content="51.0447;-114.0719"/>
    <meta name="ICBM" content="51.0447, -114.0719"/>

    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Kulu Windows & Doors | High-Performance Solutions in Calgary">
    <meta property="og:description"
          content="NFRC Certified & REHAU engineered windows designed for Alberta's extreme weather.">
    <meta property="og:image" content="{{ asset('assets/images/og-image.jpg') }}">

    <meta name="author" content="Kulu Windows & Doors">

    <!-- CSS Files
    ================================================== -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap"/>
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/color.css') }}" rel="stylesheet" type="text/css">

    <!-- custom background -->
    <link rel="stylesheet" href="{{asset('assets/css/bg.css')}}" type="text/css">

    <!-- color scheme -->
    <link rel="stylesheet" href="{{asset('assets/css/colors/red.css')}}" type="text/css" id="colors">

    <!-- revolution slider -->
    <link rel="stylesheet" href="{{asset('assets/rs-plugin/css/settings.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/rev-settings.css')}}" type="text/css">
</head>

<body>

<div id="wrapper">

    <!-- header begin -->
    @include('layouts.header')
    <!-- header close -->

    <!-- content begin -->
    {{$slot}}

    <!-- footer begin -->
    @include('layouts.footer')
    <!-- footer end -->

</div>

<!-- Javascript Files
================================================== -->
<script src="{{asset('assets/js/plugins.js')}}"></script>
<script src="{{asset('assets/js/designesia.js')}}"></script>
<script src="{{asset('assets/js/jquery.event.move.js')}}"></script>
<script src="{{asset('assets/js/jquery.twentytwenty.js')}}"></script>

<!-- SLIDER REVOLUTION SCRIPTS  -->
<script src="{{asset('assets/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('assets/rs-plugin/js/jquery.themepunch.plugins.min.js')}}"></script>

<script>
    $(function () {
        // --------------------------------------------------
        // revolution slider
        // --------------------------------------------------
        var revapi;

        revapi = jQuery('#revolution-slider').revolution({
            delay: 15000,
            startwidth: 1170,
            startheight: 500,
            hideThumbs: 10,
            fullWidth: "on",
            fullScreen: "on",
            fullScreenOffsetContainer: "",
            touchenabled: "on",
            navigationType: "none",
            dottedOverlay: ""
        });
    });
</script>

<script>
    $(window).on("load", function () {
        $(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({default_offset_pct: 0.5});
        $(".twentytwenty-container[data-orientation='vertical']").twentytwenty({
            default_offset_pct: 0.5,
            orientation: 'vertical'
        });
    });
</script>

</body>
</html>

