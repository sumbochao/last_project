<!doctype html>
<html class="no-js" lang="zxx">
<!-- index-431:41-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{$title}}</title>
    <meta name="description" content="{{$metaDescriptions}}">
    <meta name="keywords" content="{{$metaKeywords}}">
    <meta name="robots" content="INDEX,FOLLOW">
    <link rel="canonical" href="{{$urlCanonical}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/nguoi_dung/menu//logo/logo.jpg')}}">
    <!-- Material Design Iconic Font-V2.2.0 -->
{{--    <link rel="stylesheet" href="{{asset('css/nguoi_dung/material-design-iconic-font.min.css')}}">--}}
    <!-- Font Awesome -->
{{--    <link rel="stylesheet" href="{{asset('css/nguoi_dung/font-awesome.min.css')}}">--}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Font Awesome Stars-->
    <link rel="stylesheet" href="{{asset('css/nguoi_dung/fontawesome-stars.css')}}">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{asset('css/nguoi_dung/meanmenu.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('css/nguoi_dung/owl.carousel.min.css')}}">
    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" href="{{asset('css/nguoi_dung/slick.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('css/nguoi_dung/animate.css')}}">
    <!-- Jquery-ui CSS -->
    <link rel="stylesheet" href="{{asset('css/nguoi_dung/jquery-ui.min.css')}}">
    <!-- Venobox CSS -->
    <link rel="stylesheet" href="{{asset('css/nguoi_dung/venobox.css')}}">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{asset('css/nguoi_dung/nice-select.css')}}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{asset('css/nguoi_dung/magnific-popup.css')}}">
    <!-- Bootstrap V4.1.3 Fremwork CSS -->
    <link rel="stylesheet" href="{{asset('css/nguoi_dung/bootstrap.min.css')}}">
    <!-- Helper CSS -->
    <link rel="stylesheet" href="{{asset('css/nguoi_dung/helper.css')}}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('css/nguoi_dung/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('css/nguoi_dung/responsive.css')}}">
{{--    <style type="text/css">--}}
{{--        .bg-10{--}}
{{--            background-image: url("{{asset('img/nguoi_dung/slider/01_Aug5aec00a85d9bc742de00edd625bb3bc0.png')}}") !important;--}}
{{--        }--}}
        {{--.bg-2,.bg-3,.bg-4,.bg-5,.bg-6,.bg-7,.bg-8,.bg-9,.bg-10,.bg-12{--}}
        {{--    background-image: url("{{asset('img/admin/card-2.jpeg')}}") !important;--}}
        {{--}--}}
{{--    </style>--}}
    <!-- Modernizr js -->
    <script src="{{asset('js/nguoi_dung/vendor/modernizr-2.8.3.min.js')}}"></script>
    @stack('css')
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- Begin Body Wrapper -->
<div class="body-wrapper">
    <!-- Begin Header Area -->
    <header class="li-header-4">
{{--            Header--}}
        @include('LayoutWebsite.Header')
{{--                Menu--}}
        @include('LayoutWebsite.Menu')
        <!-- Begin Mobile Menu Area -->
        <div class="mobile-menu-area mobile-menu-area-4 d-lg-none d-xl-none col-12">
            <div class="container">
                <div class="row">
                    <div class="mobile-menu">
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu Area End Here -->
    </header>
    <!-- Header Area End Here -->
    <div class="content">
        <div class="container-fluid">
            <div class="header text-left">
                @yield('content')
            </div>
        </div>
    </div>
{{--            Footer--}}
    @include('LayoutWebsite.Footer')
</div>
<script src="{{asset('js/nguoi_dung/fairyDustCursor.js')}}"></script>
<!-- Body Wrapper End Here -->
<!-- jQuery-V1.12.4 -->
<script src="{{asset('js/nguoi_dung/vendor/jquery-1.12.4.min.js')}}"></script>
<!-- Popper js -->
<script src="{{asset('js/nguoi_dung/vendor/popper.min.js')}}"></script>
<!-- Bootstrap V4.1.3 Fremwork js -->
<script src="{{asset('js/nguoi_dung/bootstrap.min.js')}}"></script>
<!-- Ajax Mail js -->
<script src="{{asset('js/nguoi_dung/ajax-mail.js')}}"></script>
<!-- Meanmenu js -->
<script src="{{asset('js/nguoi_dung/jquery.meanmenu.min.js')}}"></script>
<!-- Wow.min js -->
<script src="{{asset('js/nguoi_dung/wow.min.js')}}"></script>
<!-- Slick Carousel js -->
<script src="{{asset('js/nguoi_dung/slick.min.js')}}"></script>
<!-- Owl Carousel-2 js -->
<script src="{{asset('js/nguoi_dung/owl.carousel.min.js')}}"></script>
<!-- Magnific popup js -->
<script src="{{asset('js/nguoi_dung/jquery.magnific-popup.min.js')}}"></script>
<!-- Isotope js -->
<script src="{{asset('js/nguoi_dung/isotope.pkgd.min.js')}}"></script>
<!-- Imagesloaded js -->
<script src="{{asset('js/nguoi_dung/imagesloaded.pkgd.min.js')}}"></script>
<!-- Mixitup js -->
<script src="{{asset('js/nguoi_dung/jquery.mixitup.min.js')}}"></script>
<!-- Countdown -->
<script src="{{asset('js/nguoi_dung/jquery.countdown.min.js')}}"></script>
<!-- Counterup -->
<script src="{{asset('js/nguoi_dung/jquery.counterup.min.js')}}"></script>
<!-- Waypoints -->
<script src="{{asset('js/nguoi_dung/waypoints.min.js')}}"></script>
<!-- Barrating -->
<script src="{{asset('js/nguoi_dung/jquery.barrating.min.js')}}"></script>
<!-- Jquery-ui -->
<script src="{{asset('js/nguoi_dung/jquery-ui.min.js')}}"></script>
<!-- Venobox -->
<script src="{{asset('js/nguoi_dung/venobox.min.js')}}"></script>
<!-- Nice Select js -->
<script src="{{asset('js/nguoi_dung/jquery.nice-select.min.js')}}"></script>
<!-- ScrollUp js -->
<script src="{{asset('js/nguoi_dung/scrollUp.min.js')}}"></script>
<!-- Main/Activator js -->
<script src="{{asset('js/nguoi_dung/main.js')}}"></script>
</body>

<!-- index-431:47-->
@stack('js')
</html>
