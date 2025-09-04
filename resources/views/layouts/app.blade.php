<!doctype html>
<html class="no-js" lang="zxx" @if(isset($rtl) && $rtl) dir="rtl" @endif>
<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title', 'E-commerce Store')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/progressbar_barfiller.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animated-headline.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

     @yield('styles')


<!-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> -->

</head>
<body class="full-wrapper">
@include('partials.header')


<main id="main">@yield('content')

</main>
@include('partials.Services')



@include('partials.footer')


<!-- <script src="{{ asset('js/main.js') }}"></script> -->



<script src="{{ asset('./assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
<script src="{{ asset('./assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('./assets/js/popper.min.js') }}"></script>
<script src="{{ asset('./assets/js/bootstrap.min.js') }}"></script>

<!-- Slick-slider , Owl-Carousel ,slick-nav -->
<script src="{{ asset('./assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('./assets/js/slick.min.js') }}"></script>
<script src="{{ asset('./assets/js/jquery.slicknav.min.js') }}"></script>

<!-- One Page, Animated-HeadLin, Date Picker -->
<script src="{{ asset('./assets/js/wow.min.js') }}"></script>
<script src="{{ asset('./assets/js/animated.headline.js') }}"></script>
<script src="{{ asset('./assets/js/jquery.magnific-popup.js') }}"></script>
<script src="{{ asset('./assets/js/gijgo.min.js') }}"></script>

<!-- Nice-select, sticky,Progress -->
<script src="{{ asset('./assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('./assets/js/jquery.sticky.js') }}"></script>
<script src="{{ asset('./assets/js/jquery.barfiller.js') }}"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="{{ asset('./assets/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('./assets/js/waypoints.min.js') }}"></script>
<script src="{{ asset('./assets/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('./assets/js/hover-direction-snake.min.js') }}"></script>

<!-- contact js -->
<script src="{{ asset('./assets/js/contact.js') }}"></script>
<script src="{{ asset('./assets/js/jquery.form.js') }}"></script>
<script src="{{ asset('./assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('./assets/js/mail-script.js') }}"></script>
<script src="{{ asset('./assets/js/jquery.ajaxchimp.min.js') }}"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="{{ asset('./assets/js/plugins.js') }}"></script>
<script src="{{ asset('./assets/js/main.js') }}"></script>
@yield('scripts')
</body>
</html>