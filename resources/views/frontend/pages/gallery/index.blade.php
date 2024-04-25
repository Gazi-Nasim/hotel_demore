@extends('frontend.layouts.frontend_master')
@section('title', 'Luxury Hotel | Rooms & Suites')

@section('content')
<!-- Header Banner -->
<div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="7" data-background="{{ asset('frontend') }}/img/slider/1.jpg" style="height: 30vh;">
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
<section class="rooms1 section-padding bg-cream" data-scroll-index="1">
    <div class="container">
        <div class="row">
            @foreach($rooms as $item)
            <div class="col-md-4">
                <div class="item">
                    <div class="position-re o-hidden">
                        <a href="{{ asset('uploads/pictures/'.$item->featured_photo) }}" data-lightbox="roadtrip">
                            <img src="{{ asset('uploads/pictures/'.$item->featured_photo )}}" alt="Picture">
                        </a>
                    </div>
                    <div class="con">
                        <h5><a href="{{ route('branch.' . $item->type, ['id' => $item->id]) }}" target="_blank">{{$item->name ?? ''}}</a> </h5>
                        <div class="line"></div>
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
                                    <a href="{{ route('branch.'.$item->type,  $item->id )}}" target="_blank">Details<i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            {{--<div class="col-md-4">
                <div class="item">
                    <div class="position-re o-hidden"><a href="{{ asset('frontend') }}/img/rooms/2.jpg" data-lightbox="roadtrip">
            <img src="{{ asset('frontend') }}/img/rooms/2.jpg" alt=""></a>
        </div>
        <div class="con">
            <h5><a href="room-details.html">Family Room</a></h5>
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
            <div class="position-re o-hidden"><a href="{{ asset('frontend') }}/img/rooms/3.jpg" data-lightbox="roadtrip">
                    <img src="{{ asset('frontend') }}/img/rooms/3.jpg" alt=""></a></div>
            <div class="con">
                <h5><a href="room-details.html">Double Room</a></h5>
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

    <div class="col-md-6">
        <div class="item">
            <div class="position-re o-hidden"><a href="{{ asset('frontend') }}/img/rooms/4.jpg" data-lightbox="roadtrip">
                    <img src="{{ asset('frontend') }}/img/rooms/4.jpg" alt=""></a></div>
            <div class="con">
                <h5><a href="room-details.html">Deluxe Room</a></h5>
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
    <div class="col-md-6">
        <div class="item">
            <div class="position-re o-hidden"><a href="{{ asset('frontend') }}/img/rooms/5.jpg" data-lightbox="roadtrip">
                    <img src="{{ asset('frontend') }}/img/rooms/5.jpg" alt=""></a></div>
            <div class="con">
                <h5><a href="room-details.html">Superior Room</a></h5>
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
    })
</script>
@endsection