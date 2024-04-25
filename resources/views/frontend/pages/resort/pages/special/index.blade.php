@extends('frontend.pages.resort.layouts.frontend_master')
@section('title', 'Luxury Hotel | Rooms & Suites')

@section('content')
<!-- Header Banner -->
<div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="5" data-background="{{ asset('frontend') }}/img/slider/5.jpg" style="max-height: 200px">
    <div class="container">
        <div class="row">
            <div class="col-md-12 caption mt-90">
                <span>
                    <i class="star-rating"></i>
                    <i class="star-rating"></i>
                    <i class="star-rating"></i>
                    <i class="star-rating"></i>
                    <i class="star-rating"></i>
                </span>
                <h5>D'MORE DHAKA HOTEL & RESORT</h5>
                <h1>Special Offer</h1>
            </div>
        </div>
    </div>
</div>
{{-- <div id="premium"></div>
    <section class="services section-padding" style="padding: 40px">
        <div class="container"> --}}
{{-- <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle">D'more Dhaka Hotel & Resort</div>
                    <div class="section-title">Rooms & Suites</div>
                </div>
            </div> --}}

{{-- <div class="row">
                <div class="col-md-6 p-0 animate-box" data-animate-effect="fadeInLeft">
                    <div class="img left">
                        <a href="{{ asset('frontend') }}/img/rooms/double.jpg" data-lightbox="Room">
<img src="{{ asset('frontend') }}/img/rooms/double.jpg" alt="" style="width:500px"></a>
</div>
</div>
<div class="col-md-6 p-0 animate-box" data-animate-effect="fadeInRight">
    <div class="img left">
        <a href="{{ asset('frontend') }}/img/rooms/couple.jpg" data-lightbox="Room">
            <img src="{{ asset('frontend') }}/img/rooms/couple.jpg" alt="" style="width:500px"></a>
    </div>
</div>
</div>
<hr>
<hr>
<div class="row">
    <div class="col-md-6 p-0 animate-box" data-animate-effect="fadeInLeft">
        <div class="img left">
            <a href="{{ asset('frontend') }}/img/rooms/triple.png" data-lightbox="Room">
                <img src="{{ asset('frontend') }}/img/rooms/triple.png" alt="" style="width:500px"></a>
        </div>
    </div>
    <div class="col-md-6 p-0 animate-box" data-animate-effect="fadeInRight">
        <div class="img left">
            <a href="{{ asset('frontend') }}/img/rooms/room4.jpg" data-lightbox="Room">
                <img src="{{ asset('frontend') }}/img/rooms/room4.jpg" alt="" style="width:500px"></a>
        </div>
    </div>
</div>

</div>
</section> --}}


<section class="news section-padding bg-blck">
    <div class="container">
        {{-- <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle"><span>Hotel Blog</span></div>
                    <div class="section-title"><span>Offer / Package</span></div>
                </div>
            </div> --}}
        <div class="row">
            <div class="col-md-12">
                <div class="owl-theme" style="display: flex; justify-content:space-between;">

                    <div class="item">
                        <div class="position-re o-hidden"> <a href="{{ asset('frontend') }}/img/rooms/room4.png" data-lightbox="Room">
                                <img src="{{ asset('frontend') }}/img/rooms/room5.png" alt="" style="width:500px"></a>
                            <div class="date">
                                <a href="post.html"> <span>Winter</span> <i>Offer</i> </a>
                            </div>
                        </div>
                        <div class="con">
                            <h5><a href="#">Enjoy This Offer!!</a></h5>
                        </div>
                    </div>

                    <div class="item">
                        <div class="position-re o-hidden"> <a href="{{ asset('frontend') }}/img/rooms/double.png" data-lightbox="Room">
                                <img src="{{ asset('frontend') }}/img/rooms/double.png" alt="" style="width:500px"></a>
                            <div class="date">
                                <a href="post.html"> <span>Summer</span> <i>Offer</i> </a>
                            </div>
                        </div>
                        <div class="con">
                            <h5><a href="#" style="justify-content: center">Enjoy This Offer!!</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<hr>

<script src="{{ asset('frontend') }}/js/lightbox-plus-jquery.js"></script>
<script>
    lightbox.option({
        'resizeDuration': 150,
        'wrapAround': true,
        'disableScrolling': true,
        'fitImagesInViewport': true,
    })
</script>
@endsection

@stack('child-scripts')