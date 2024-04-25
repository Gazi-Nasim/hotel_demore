@extends('frontend.pages.resort.layouts.frontend_master')
@section('title', 'Luxury Hotel | Rooms & Suites')
@section('content')
<!-- Header Banner -->
<div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="5" data-background="{{ asset('frontend') }}/img/slider/2.jpg">
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
                <h5>{{$data[0]->Branch->name ?? ''}}</h5>
                <h1>Rooms & Suites</h1>
            </div>
        </div>
    </div>
</div>
<div id="room"></div>
<!-- Rooms -->
<section class="rooms1 section-padding bg-cream" data-scroll-index="1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-subtitle">{{$data[0]->Branch->name ?? ''}}</div>
                <div class="section-title">Rooms & Suites</div>
            </div>
        </div>
        <div class="row">
            @foreach($data as $item)
            <div class="col-md-4">
                <div class="item">
                    <div class="position-re o-hidden">
                        <a href="{{ asset('uploads/pictures/'.$item->featured_photo ?? '')}}" data-lightbox="room">
                            <img src="{{ asset('uploads/pictures/'.$item->featured_photo ?? '')}}" alt="">
                        </a>
                    </div>
                    <span class="category">
                        <a href="rooms2.html">Video</a>
                    </span>
                    <div class="con">
                        <h6><a href="{{ asset('uploads/pictures/'.$item->featured_photo ?? '')}}" data-lightbox="room1">{{$item->price}}৳ / Night</a></h6>
                        <h5><a href="{{ asset('uploads/pictures/'.$item->featured_photo ?? '')}}" data-lightbox="room2">{{$item->name}}</a> </h5>
                        <div class="line"></div>
                        <div class="row facilities">
                            <div class="col col-md-7">
                                <ul>
                                    @if($item->bed)
                                    <li><i class="flaticon-bed"></i></li>
                                    @endif
                                    @if($item->tv)
                                    <li><i class="flaticon-bath"></i></li>
                                    @endif
                                    @if($item->ac)
                                    <li><i class="flaticon-breakfast"></i></li>
                                    @endif
                                    @if($item->towel)
                                    <li><i class="flaticon-towel"></i></li>
                                    @endif
                                </ul>
                            </div>
                            <div class="col col-md-5 text-end">
                                <div class="permalink">
                                    <a href="{{route( 'branch.accommodation',[request()->route('id'),$item->id])}}">Details <i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            {{--<div class="col-md-4">
                <div class="item">
                    <div class="position-re o-hidden">
                        <a href="{{ asset('frontend') }}/img/rooms/couple.png" data-lightbox="room">
            <img src="{{ asset('frontend') }}/img/rooms/couple.png" alt="">
            </a>
        </div>
        <span class="category"><a href="rooms2.html">Video</a></span>
        <div class="con">
            <h6> <a href="{{ asset('frontend') }}/img/rooms/couple.png" data-lightbox="room1">10000৳ / Night</a></h6>
            <h5> <a href="{{ asset('frontend') }}/img/rooms/couple.png" data-lightbox="room2">DELUX TWIN ROOM</a></h5>
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
                    <div class="permalink"><a href="room-details.html">Details <i class="ti-arrow-right"></i></a></div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="col-md-4">
        <div class="item">
            <div class="position-re o-hidden">
                <a href="{{ asset('frontend') }}/img/rooms/double.png" data-lightbox="room">
                    <img src="{{ asset('frontend') }}/img/rooms/double.png" alt="">
                </a>
            </div>
            <span class="category"><a href="rooms2.html">Video</a></span>
            <div class="con">
                <h6><a href="{{ asset('frontend') }}/img/rooms/double.png" data-lightbox="room1">12000৳ / Night</a></h6>
                <h5><a href="{{ asset('frontend') }}/img/rooms/double.png" data-lightbox="room2">DELUXE TRIPLE ROOM</a></h5>
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
                        <div class="permalink"><a href="room-details.html">Details <i class="ti-arrow-right"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="item">
            <div class="position-re o-hidden">
                <a href="{{ asset('frontend') }}/img/rooms/room4.png" data-lightbox="room">
                    <img src="{{ asset('frontend') }}/img/rooms/room4.png" alt="">
                </a>
            </div>
            <span class="category"><a href="rooms2.html">Video</a></span>
            <div class="con">
                <h6><a href="{{ asset('frontend') }}/img/rooms/room4.png" data-lightbox="room1">13000৳ / Night</a></h6>
                <h5><a href="{{ asset('frontend') }}/img/rooms/room4.png" data-lightbox="room2">HONEYMOON SUITE</a></h5>
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
                        <div class="permalink"><a href="room-details.html">Details <i class="ti-arrow-right"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="item">
            <div class="position-re o-hidden">
                <a href="{{ asset('frontend') }}/img/rooms/room5.png" data-lightbox="room">
                    <img src="{{ asset('frontend') }}/img/rooms/room5.png" alt="">
                </a>
            </div>
            <span class="category"><a href="rooms2.html">Video</a></span>
            <div class="con">
                <h6> <a href="{{ asset('frontend') }}/img/rooms/room5.png" data-lightbox="room1">15000৳ / Night</a></h6>
                <h5> <a href="{{ asset('frontend') }}/img/rooms/room5.png" data-lightbox="room2">EXECUTIVE SUITE</a></h5>
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
                        <div class="permalink"><a href="room-details.html">Details <i class="ti-arrow-right"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="item">
            <div class="position-re o-hidden">
                <a href="{{ asset('frontend') }}/img/rooms/room6.png" data-lightbox="room">
                    <img src="{{ asset('frontend') }}/img/rooms/room6.png" alt="">
                </a>
            </div>
            <span class="category"><a href="rooms2.html">Video</a></span>
            <div class="con">
                <h6><a href="{{ asset('frontend') }}/img/rooms/room6.png" data-lightbox="room">50000৳ / Night</a></h6>
                <h5><a href="{{ asset('frontend') }}/img/rooms/room6.png" data-lightbox="room">PRESIDENTIAL ROOM</a></h5>
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
                        <div class="permalink"><a href="room-details.html">Details <i class="ti-arrow-right"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
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
        'showImageNumberLabel': false,
    })
</script>
@endsection