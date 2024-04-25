@extends('frontend.pages.resort.layouts.frontend_master')
@section('title', 'Luxury Hotel | Rooms & Suites')
@section('content')
<!-- Header Banner -->
<div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="7" data-background="{{ asset('frontend') }}/img/slider/2.jpg" style="height: 30vh;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 caption mt-90" style="margin-bottom: 40px">
                <span>
                    <i class="star-rating"></i>
                    <i class="star-rating"></i>
                    <i class="star-rating"></i>
                    <i class="star-rating"></i>
                    <i class="star-rating"></i>
                </span>
                <h5>The Luxury Hotels D'mores</h5>
                <h1>Gallery</h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row" style="padding: 20px;">
        @foreach($galleries as $gallery)
        <div class="col-md-4" style="margin-bottom:20px">
            <div class="item img">
                <div class="position-re o-hidden">
                    <a href="{{ asset('uploads/pictures/'.$gallery->featured_photo ?? '')}}" data-lightbox="gallery">
                        <img src="{{ asset('uploads/pictures/'.$gallery->featured_photo ?? '' )}}" alt="">
                    </a>
                </div>
            </div>
        </div>
        @endforeach
        {{--<div class="col-md-4">
            <div class="item img">
                <div class="position-re o-hidden">
                    <a href="{{ asset('frontend') }}/img/slider/3.jpg" data-lightbox="gallery">
        <img src="{{ asset('frontend') }}/img/slider/3.jpg" alt="">
        </a>
    </div>
</div>
</div>
<div class="col-md-4">
    <div class="item img">
        <div class="position-re o-hidden">
            <a href="{{ asset('frontend') }}/img/slider/4.jpg" data-lightbox="gallery">
                <img src="{{ asset('frontend') }}/img/slider/4.jpg" alt="">
            </a>
        </div>
    </div>
</div>
<div class="col-md-4" style="margin-bottom:20px">
    <div class="item img">
        <div class="position-re o-hidden">
            <a href="{{ asset('frontend') }}/img/slider/5.jpg" data-lightbox="gallery">
                <img src="{{ asset('frontend') }}/img/slider/5.jpg" alt="">
            </a>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="item img">
        <div class="position-re o-hidden">
            <a href="{{ asset('frontend') }}/img/slider/6.jpg" data-lightbox="gallery">
                <img src="{{ asset('frontend') }}/img/slider/6.jpg" alt="">
            </a>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="item img">
        <div class="position-re o-hidden">
            <a href="{{ asset('frontend') }}/img/slider/2.jpg" data-lightbox="gallery">
                <img src="{{ asset('frontend') }}/img/slider/2.jpg" alt="">
            </a>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="item img">
        <div class="position-re o-hidden">
            <a href="{{ asset('frontend') }}/img/rooms/double.png" data-lightbox="gallery">
                <img src="{{ asset('frontend') }}/img/rooms/double.png" alt="">
            </a>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="item img">
        <div class="position-re o-hidden">
            <a href="{{ asset('frontend') }}/img/restaurant/1.png" data-lightbox="gallery">
                <img src="{{ asset('frontend') }}/img/restaurant/1.png" alt="">
            </a>
        </div>
    </div>
</div>--}}
</div>
</div>

<script src="{{ asset('frontend') }}/js/lightbox-plus-jquery.js"></script>
<script>
    lightbox.option({
        'resizeDuration': 150,
        'wrapAround': true,
        'disableScrolling': true,
        'fitImagesInViewport': true,
        'showImageNumberLabel': false,
    })
</script>
@endsection