<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1" />
    <title>@yield('title', 'Hotel More Sajek Valley')</title>
    <link rel="shortcut icon" href="img/favicon.png" />
    <link rel="stylesheet" href="../../../../../fonts.googleapis.com/css2ea8f.css?family=Barlow&amp;family=Barlow+Condensed&amp;family=Gilda+Display&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/plugins.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/lightbox.css" />
    

</head>

<body>
    <!-- Preloader -->
    <div class="preloader-bg"></div>
    <div id="preloader">
        <div id="preloader-status">
            <div class="preloader-position loader"> <span></span> </div>
        </div>
    </div>
    @include('frontend.pages.resort.layouts.includes.scroll_button')
    @include('frontend.pages.resort.layouts.includes.navbar')
    <!-- Slider -->
    @yield('content')
    @include('frontend.pages.resort.layouts.includes.footer')
    <!-- jQuery -->
    <script src="{{ asset('frontend') }}/js/jquery-3.6.3.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery-migrate-3.0.0.min.js"></script>
    <script src="{{ asset('frontend') }}/js/modernizr-2.6.2.min.js"></script>
    <script src="{{ asset('frontend') }}/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.isotope.v3.0.2.js"></script>
    <script src="{{ asset('frontend') }}/js/pace.js"></script>
    <script src="{{ asset('frontend') }}/js/popper.min.js"></script>
    <script src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('frontend') }}/js/scrollIt.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.waypoints.min.js"></script>
    <script src="{{ asset('frontend') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.stellar.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.magnific-popup.js"></script>
    <script src="{{ asset('frontend') }}/js/YouTubePopUp.js"></script>
    <script src="{{ asset('frontend') }}/js/select2.js"></script>
    <script src="{{ asset('frontend') }}/js/datepicker.js"></script>
    <script src="{{ asset('frontend') }}/js/smooth-scroll.min.js"></script>
    <script src="{{ asset('frontend') }}/js/custom.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.slider-fade').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: false,
                fade: true,
                asNavFor: '.slider-nav'
            });

            $('.slider-nav').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                asNavFor: '.slider-fade',
                dots: false,
                arrows: false,
                centerMode: true,
                focusOnSelect: true
            });
        });
    </script>

</body>

</html>