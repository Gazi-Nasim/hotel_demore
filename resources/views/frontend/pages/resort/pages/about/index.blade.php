@extends('frontend.pages.resort.layouts.frontend_master')
@section('title', 'Luxury Hotel | About')
@section('content')
<!-- Header Banner -->
<div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="5" data-background="{{ asset('uploads/pictures/'.$datas->feature_photo ?? '' )}}">
    <div class="container">
        <div class="row">
            <div class="col-md-12 caption mt-90">
                <h5>Luxury Hotel</h5>
                <h1>About Us</h1>
            </div>
        </div>
    </div>
</div>
<!-- About -->
<section class="about section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                <span>
                    <i class="star-rating"></i>
                    <i class="star-rating"></i>
                    <i class="star-rating"></i>
                    <i class="star-rating"></i>
                    <i class="star-rating"></i>
                </span>
                <div class="section-subtitle">{{$datas->name ?? ''}}</div>
                <div class="section-title">{{$datas->about_short ?? ''}}</div>
                <p>{{$datas->about_banner ?? ''}}</p>

                <!-- reservation -->
                <div class="reservations">
                    <div class="icon"><span class="flaticon-call"></span></div>
                    <div class="text">
                        <p>Reservation</p> <a href="tel:(+88) 01329-723050">{{$datas->phone ?? ''}}</a>
                    </div>
                </div>
            </div>
            <div class="col col-md-3 animate-box" data-animate-effect="fadeInUp">
                <img src="{{ asset('uploads/pictures/'.$datas->about_photo_1 ?? '' )}}" alt="" class="mt-90 mb-30">
            </div>
            <div class="col col-md-3 animate-box" data-animate-effect="fadeInUp"> <img src="{{ asset('uploads/pictures/'.$datas->about_photo_2 ?? '' )}}" alt=""> </div>
        </div>
    </div>
</section>