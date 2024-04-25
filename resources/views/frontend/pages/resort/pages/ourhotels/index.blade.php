@extends('frontend.pages.resort.layouts.frontend_master')
@section('title','Luxury Hotel | News')
@section('content')

<section class="video-wrapper video section-padding bg-img bg-fixed" data-overlay-dark="5" data-background="{{asset('uploads/pictures/'.$branchs->feature_photo ?? '' )}}">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center">
                <span><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i></span>
                <div class="section-subtitle"><span>{{$branchs->name ?? ''}}</span></div>
                <div class="section-title"><span>Promotional Video</span></div>
            </div>
        </div>
        <div class="row">
            <div class="text-center col-md-12">
                <a class="vid" href="{{asset('uploads/videos/'.$branchs->video ?? '' )}}">
                    <div class="vid-butn">
                        <span class="icon">
                            <i class="ti-control-play"></i>
                        </span>
                    </div>
                </a>
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