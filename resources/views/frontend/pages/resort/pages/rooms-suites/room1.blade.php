@extends('frontend.pages.resort.layouts.frontend_master')
@section('title', 'Luxury Hotel | Rooms & Suites')

@section('content')
<!-- Header Banner -->
<div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="5" data-background="{{ asset('frontend') }}/img/slider/5.jpg">
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
                <h5>{{$data->Branch->name ?? ''}}</h5>
                <h1>Rooms & Suites</h1>
            </div>
        </div>
    </div>
</div>
<div id="premium"></div>
<section class="services section-padding" style="padding: 40px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-subtitle">{{$data->name ?? ''}}</div>
                <div class="section-title">Rooms & Suites</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 p-0 bg-cream valign animate-box" data-animate-effect="fadeInRight">
                <div class="content">
                    <div class="cont text-left">
                        <div class="info">
                            <h6>Subtitle</h6>
                        </div>
                        <h4>{{$data->name ?? ''}}</h4>
                        <p>{{$data->details ?? ''}}</p>
                        {{--<div class="butn-dark">
                            <a href="{{route('branch.accommodation', $data->id)}}">
                                <span>Learn More</span>
                            </a>
                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-0 animate-box" data-animate-effect="fadeInLeft">
                <div class="img left">
                    <a href="{{ asset('uploads/pictures/'.$data->featured_photo ?? '')}}" data-lightbox="Room">
                        <img src="{{ asset('uploads/pictures/'.$data->featured_photo ?? '')}}" alt="" style="width:500px"></a>
                </div>
            </div>
        </div>
    </div>
</section>



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