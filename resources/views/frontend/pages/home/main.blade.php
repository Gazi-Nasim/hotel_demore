@extends('frontend.layouts.frontend_master')
@section('title', 'Welcome to Dmore Hotel & Resort')
@section('content')

<!-- Slider -->
<header class="header">
    <div class="slider-fade">
        <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
        @foreach($mainSliders as $item)
        <div class="text-center item bg-img" data-overlay-dark="5">
            <img src="{{asset('uploads/pictures/'.$item->photo ?? '' )}}" alt="Picture">
            <div class="v-middle caption">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <h4>{{$item->title_1 ?? ''}}</h4>
                            <h1>{{$item->title_2 ?? ''}}</h1>
                            <a href="{{ route('branch.main',$item->id ?? 'null')}}" class="btn btn-primary" target="_blank">Visit Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="slider-nav mt-2">
        @foreach($mainSliders as $item)
        <div>
            <img src="{{asset('uploads/pictures/'.$item->photo ?? '' )}}" alt="">
        </div>
        @endforeach
    </div>
</header>
<!-- resort -->
<section class="rooms1 section-padding bg-cream" data-scroll-index="1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-subtitle">Welcome To D'More Hotel & Resort</div>
                <!--<div class="section-title"> Resort</div>-->
            </div>
        </div>
        <div class="row">
            @foreach($branchs as $item)
            <div class="col-md-6">
                <div class="item">
                    <div class="position-re o-hidden">
                        <img src="{{asset('uploads/pictures/'.$item->feature_photo ?? '' )}}" alt="Picture">
                    </div>
                    <span class="category">
                        <a href="{{ route('branch.tour',$item->id )}}" target="_blank">Video </a>
                    </span>
                    <div class="con">
                        <h5>
                            <a href="{{ route('branch.main',$item->id )}}" target="_blank">{{$item->name ?? ''}}</a>
                        </h5>
                        <div class="line"></div>
                        <div class="row">
                            <div class="col col-md-12 facilitiy resmail">
                                <p>
                                    <i class="flaticon-phone">{{$item->phone ?? ''}}</i>
                                    <i class="flaticon-envelope">{{$item->email ?? ''}}</i>
                                </p>
                            </div>
                        </div>
                        <div class="row facilities">
                            <div class="col col-md-7">
                                <ul>
                                    @if($item->bed)
                                    <li><i class="flaticon-bed"></i></li>
                                    @endif
                                    @if($item->bath)
                                    <li><i class="flaticon-bath"></i></li>
                                    @endif
                                    @if($item->bed)
                                    <li><i class="flaticon-breakfast"></i></li>
                                    @endif
                                    @if($item->bed)
                                    <li><i class="flaticon-towel"></i></li>
                                    @endif
                                </ul>
                            </div>
                            <div class="col col-md-5 text-end">
                                <div class="permalink">
                                    <a href="{{ route('branch.main',$item->id )}}" target="_blank">Details
                                        <i class="ti-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- About -->
<section class="about section-padding">
    <div class="container">
        <div class="d-flex flex-column justify-content-center align-items-center text-center">
            <span>
                <i class="star-rating"></i>
                <i class="star-rating"></i>
                <i class="star-rating"></i>
                <i class="star-rating"></i>
                <i class="star-rating"></i>
            </span>
            <div class="section-subtitle">The D'More Luxury Hotel & Resort</div>
            <div class="section-title">Enjoy a Luxury Experience</div>
            <p>{{$general_infos->about_short ?? ''}}</p>
        </div>
    </div>
</section>

<!-- Promo Video -->
<section class="video-wrapper video section-padding bg-img bg-fixed" data-overlay-dark="5" data-background="{{asset('uploads/pictures/'.$mainSliders[0]->photo ?? '' )}}">
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2 text-center">
            <span><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i></span>
            <div class="section-subtitle"><span>Welcome to Dmore Hotel & Resort</span></div>
            <div class="section-title"><span>Promotional Video</span></div>
        </div>
    </div>
    <div class="row">
        <div class="text-center col-md-12">
            <a class="vid" href="{{$branchs[0]->video ?? '' }}">
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

{{--<section id="videoCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach($branchs as $key=>$branch)
        <div class="carousel-item active" style="height: 350px; width:100%">
            <video class="d-block w-100" style="height: 80%; width:100%" controls>
                <source  src="{{asset('uploads/videos/'.$branch->video ?? '' )}}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="carousel-caption d-none d-md-block">
                <h5>Video Caption {{$key}}</h5>
                <p>This is a description of video {{$key}}.</p>
            </div>
        </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#videoCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#videoCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</section>--}}

{{--
<section class="header slider">
    <div class="owl-carousel owl-theme" style="height: 600px">
        <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
        @foreach($branchs as $branch)
        <div class="text-center item bg-img" data-overlay-dark="5" data-background="{{ asset('uploads/pictures/'.$branch->feature_photo ?? '' )}}">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2 text-center">
                        <span><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i></span>
                        <div class="section-subtitle"><span>Welcome to Dmore Hotel & Resort</span></div>
                        <div class="section-title"><span>Promotional Video</span></div>
                    </div>
                </div>
                <div class="row">
                    <div class="text-center col-md-12">
                        <iframe class="vid" href="{{asset('uploads/videos/'.$branch->video ?? '' )}}">
                            <div class="vid-butn">
                                <span class="icon">
                                    <i class="ti-control-play"></i>
                                </span>
                            </div>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
--}}
<!-- Reservation & Booking Form -->
<section class="testimonials">
    <div class="background bg-img bg-fixed section-padding pb-0" data-background="{{asset('uploads/pictures/'.$mainSliders[0]->photo ?? '' )}}" data-overlay-dark="5">
        <div class="container">
            <div class="row">
                <!-- Reservation -->
                <!--<div class="col-md-5 mb-30 mt-30">-->
                <!--    <p><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i-->
                <!--            class="star-rating"></i><i class="star-rating"></i></p>-->
                <!--    <h5>Each of our guest rooms feature a private bath, wi-fi, cable television and include full-->
                <!--        breakfast.</h5>-->
                <!--<div class="reservations mb-30">-->
                <!--    <div class="icon color-1"><span class="flaticon-call"></span></div>-->
                <!--    <div class="text">-->
                <!--        <p class="color-1">Reservation</p> <a class="color-1" href="tel:+8801844-114833">+8801844-114833</a>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<p><i class="ti-check"></i><small>Call us, it's toll-free.</small></p>-->
                <!--</div>-->
                <!-- Booking From -->
                <!--<div class="col-md-5 offset-md-2">-->
                <!--    <div class="booking-box">-->
                <!--        <div class="head-box">-->
                <!--            <h6>Rooms & Suites</h6>-->
                <!--            <h4>Hotel Booking Form</h4>-->
                <!--        </div>-->
                <!--        <div class="booking-inner clearfix">-->
                <!--            <form action="https://duruthemes.com/demo/html/cappa/demo1-light/rooms2.html"-->
                <!--                class="form1 clearfix">-->
                <!--                <div class="row">-->
                <!--                    <div class="col-md-12">-->
                <!--                        <div class="input1_wrapper">-->
                <!--                            <label>Check in</label>-->
                <!--                            <div class="input1_inner">-->
                <!--                                <input type="text" class="form-control input datepicker"-->
                <!--                                    placeholder="Check in">-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                    <div class="col-md-12">-->
                <!--                        <div class="input1_wrapper">-->
                <!--                            <label>Check out</label>-->
                <!--                            <div class="input1_inner">-->
                <!--                                <input type="text" class="form-control input datepicker"-->
                <!--                                    placeholder="Check out">-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                    <div class="col-md-6">-->
                <!--                        <div class="select1_wrapper">-->
                <!--                            <label>Adults</label>-->
                <!--                            <div class="select1_inner">-->
                <!--                                <select class="select2 select" style="width: 100%">-->
                <!--                                    <option value="0">Adults</option>-->
                <!--                                    <option value="1">1</option>-->
                <!--                                    <option value="2">2</option>-->
                <!--                                    <option value="3">3</option>-->
                <!--                                    <option value="4">4</option>-->
                <!--                                </select>-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                    <div class="col-md-6">-->
                <!--                        <div class="select1_wrapper">-->
                <!--                            <label>Children</label>-->
                <!--                            <div class="select1_inner">-->
                <!--                                <select class="select2 select" style="width: 100%">-->
                <!--                                    <option value="0">Children</option>-->
                <!--                                    <option value="1">1</option>-->
                <!--                                    <option value="2">2</option>-->
                <!--                                    <option value="3">3</option>-->
                <!--                                    <option value="4">4</option>-->
                <!--                                </select>-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                    <div class="col-md-12">-->
                <!--                        <button type="submit" class="btn-form1-submit mt-15">Check-->
                <!--                            Availability</button>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--            </form>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
        </div>
    </div>

</section>
<!-- Clients -->
<section class="clients">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="owl-carousel owl-theme">
                    {{-- <div class="clients-logo">
                            <a href="#0"><img src="{{ asset('frontend') }}/img/clients/1.png" alt=""></a>
                </div>
                <div class="clients-logo">
                    <a href="#0"><img src="{{ asset('frontend') }}/img/clients/2.png" alt=""></a>
                </div>
                <div class="clients-logo">
                    <a href="#0"><img src="{{ asset('frontend') }}/img/clients/3.png" alt=""></a>
                </div>
                <div class="clients-logo">
                    <a href="#0"><img src="{{ asset('frontend') }}/img/clients/4.png" alt=""></a>
                </div>
                <div class="clients-logo">
                    <a href="#0"><img src="{{ asset('frontend') }}/img/clients/5.png" alt=""></a>
                </div>
                <div class="clients-logo">
                    <a href="#0"><img src="{{ asset('frontend') }}/img/clients/6.png" alt=""></a>
                </div> --}}
            </div>
        </div>
    </div>
    </div>
</section>
@endsection