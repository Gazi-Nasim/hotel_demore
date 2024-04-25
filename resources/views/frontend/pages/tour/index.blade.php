@extends('frontend.layouts.frontend_master')
@section('title','Luxury Hotel | News')
@section('content')
<style>
    .imgdiv {
        margin: 0;
        padding: 0;
        background-size: cover;
        background-position: center;
        height: 100vh;
    }
</style>
<section class="rooms1 section-padding bg-cream" data-scroll-index="1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-subtitle">Welcome D'More Resorts</div>
                <div class="section-title"> Resort</div>
            </div>
        </div>
        <div class="row">
            @foreach($branchs as $item)
            <div class="col-md-6">
                <div class="item">
                    <div class="position-re o-hidden"><a href="{{asset('uploads/pictures/'.$item->feature_photo)}}" data-lightbox="HOTEL">
                            <img src="{{asset('uploads/pictures/'.$item->feature_photo)}}" alt=""></a></div>
                    <span class="category">
                        <a href="{{route('branch.main', [$item->id])}}" target="_blank">Resort </a>
                    </span>
                    <div class="con">
                        <h5><a href="{{route('branch.tour', [$item->id])}}" target="_blank"> {{$item->name}} </a></h5>
                        <div class="line"></div>
                        <div class="row facilities">
                            <div class="col col-md-7">
                                <ul>
                                    <li><i class="flaticon-bed"></i></li>
                                    <li><i class="flaticon-bath"></i></li>
                                    <li><i class="flaticon-breakfast"></i></li>
                                    <li><i class="flaticon-towel"></i></li>
                                </ul>
                            </div>
                            <div class="col col-md-5 text-end">
                                <div class="permalink">
                                    <a href="{{route('branch.tour', [$item->id])}}" target="_blank">Details <i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{--<div class="col-md-6">
                <div class="imgdiv" data-background="{{asset('uploads/pictures/'.$item->feature_photo)}}">
            <iframe src="{{asset('uploads/videos/'.$item->video ?? '' )}}" frameborder="0" allowfullscreen autoplay=1></iframe>
            <div class="overlay-text">
                <h1>{{$item->name}}</h1>
                <p>{{$item->details}}</p>
                <a href="{{route('branch.tour', [$item->id])}}">Details..</a>
            </div>
        </div>

    </div>--}}
    @endforeach
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