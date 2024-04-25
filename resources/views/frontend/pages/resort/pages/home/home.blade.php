    @extends('frontend.pages.resort.layouts.frontend_master')
    @section('title', 'Hotel More Kuakata Valley')
    @section('content')
    <!-- Slider -->
    <header class="header">
        <div class="slider-fade">
            <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
            @foreach($branchsliders as $item)
            <div class="text-center item bg-img" data-overlay-dark="5">
                <img src="{{ asset('uploads/pictures/'.$item->photo ?? '') }}" alt="">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <h4>{{$item->title_1 ?? ""}}</h4>
                                <h1>{{$item->title_2 ?? "" }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            {{--<div class="text-center item bg-img" data-overlay-dark="5">
                <img src="{{ asset('frontend') }}/img/slider/3.jpg" alt="">
            <div class="v-middle caption">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <h4>D'more Kuakata Hotel & Resort</h4>
                            <h1>The Perfect Base For You</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center item bg-img" data-overlay-dark="5">
            <img src="{{ asset('frontend') }}/img/slider/4.jpg" alt="">
            <div class="v-middle caption">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <h4>D'more Kuakata Hotel & Resort</h4>
                            <h1>Enjoy a Luxury Experience</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center item bg-img" data-overlay-dark="5">
            <img src="{{ asset('frontend') }}/img/slider/5.jpg" alt="">
            <div class="v-middle caption">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <h4>D'more Kuakata Hotel & Resort</h4>
                            <h1>The Perfect Base For You</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center item bg-img" data-overlay-dark="5">
            <img src="{{ asset('frontend') }}/img/slider/6.jpg" alt="">
            <div class="v-middle caption">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <h4>D'more Kuakata Hotel & Resort</h4>
                            <h1>The Perfect Base For You</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>--}}
        </div>
        <div class="slider-nav mt-2">
            @foreach($branchsliders as $item)
            <div>
                <a href="{{ asset('uploads/pictures/'.$item->photo ?? '') }}" data-lightbox="slider">
                    <img src="{{ asset('uploads/pictures/'.$item->photo ?? '')}}" alt="Picture">
                </a>
            </div>
            @endforeach
            {{--<div>
                <a href="{{ asset('frontend') }}/img/slider/3.jpg" data-lightbox="slider">
            <img src="{{ asset('frontend') }}/img/slider/3.jpg" alt="">
            </a>
        </div>
        <div> <a href="{{ asset('frontend') }}/img/slider/4.jpg" data-lightbox="slider">
                <img src="{{ asset('frontend') }}/img/slider/4.jpg" alt="">
            </a></div>
        <div>
            <a href="{{ asset('frontend') }}/img/slider/5.jpg" data-lightbox="slider">
                <img src="{{ asset('frontend') }}/img/slider/5.jpg" alt="">
            </a>
        </div>
        <div>
            <a href="{{ asset('frontend') }}/img/slider/6.jpg" data-lightbox="slider">
                <img src="{{ asset('frontend') }}/img/slider/6.jpg" alt="">
            </a>
        </div>--}}
        </div>
    </header>
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
                    <div class="section-subtitle">{{$branches->name ?? ""}}</div>
                    <div class="section-title">{{$branches->about_text ?? ""}}</div>
                    <p class="" style="text-align: justify;">
                        {{$branches->about_banner ?? ""}}
                    </p>
                    <!-- call -->
                    <div class="reservations">
                        <div class="icon">
                            <span class="flaticon-call"></span>
                        </div>
                        <div class="text">
                            <p>Reservation</p> <a href="tel:01329-723050">{{$branches->phone ?? ""}}</a>
                        </div>
                    </div>
                </div>
                <div class="col col-md-2 animate-box img" data-animate-effect="fadeInUp">
                    <a href="{{ asset('uploads/pictures/'.$branches->about_photo_1 ?? '')}}" data-lightbox="about">
                        <img src="{{ asset('uploads/pictures/'.$branches->about_photo_1 ?? '')}}" alt="" class="mt-90 mb-30">
                    </a>
                </div>
                <div class="col col-md-2 animate-box img" data-animate-effect="fadeInUp">
                    <a href="{{ asset('uploads/pictures/'.$branches->about_photo_2 ?? '')}}" data-lightbox="about">
                        <img src="{{ asset('uploads/pictures/'.$branches->about_photo_2 ?? '')}}" alt="">
                    </a>
                </div>
                <div class="col col-md-2 animate-box img" data-animate-effect="fadeInUp">
                    <a href="{{ asset('uploads/pictures/'.$branches->about_photo_3 ?? '')}}" data-lightbox="about">
                        <img src="{{ asset('uploads/pictures/'.$branches->about_photo_3 ?? '')}}" alt="" class="mt-90 mb-30">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <div id="room"></div>
    <!-- Rooms -->
    <section class="rooms1 section-padding bg-cream" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle">{{$branches->name ?? ""}}</div>
                    <div class="section-title">Rooms & Suites</div>
                </div>
            </div>
            <div class="row">
                @foreach($room_data as $item)
                <div class="col-md-4">
                    <div class="item">
                        <div class="position-re o-hidden">
                            <a href="{{ asset('uploads/pictures/'.$item->featured_photo ?? '') }}" data-lightbox="room">
                                <img src="{{ asset('uploads/pictures/'.$item->featured_photo ?? '') }}" alt="">
                            </a>
                        </div>
                        <span class="category">
                            <a href="{{route('branch.tour',[request()->route('id'), $item->id])}}">Video</a>
                        </span>
                        <div class="con">
                            <h6><a href="{{ asset('uploads/pictures/'.$item->featured_photo ?? '') }}" data-lightbox="room1">{{$item->price ?? ""}}৳ / Night</a></h6>
                            <h5><a href="{{ asset('uploads/pictures/'.$item->featured_photo ?? '') }}" data-lightbox="room2">{{$item->name ?? ""}}</a> </h5>
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
                                        <a href="{{route('branch.'.$item->type,[request()->route('id'), $item->id])}}">Details <i class="ti-arrow-right"></i></a>
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
    <!-- Promo Video -->
    
    <section class="video-wrapper video section-padding bg-img bg-fixed" data-overlay-dark="5" data-background="{{ asset('uploads/pictures/'.$branches->feature_photo ?? '')}}">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center">
                <span><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i></span>
                <div class="section-subtitle">
                    <span>{{$branches->name ?? ''}}</span>
                </div>
                <div class="section-title">
                    <span>Promotional Video</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="text-center col-md-12">
                <a class="vid" href="{{$branches->video ?? ''}}">
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
    <!-- Facilties -->
    <section class="facilties section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle">Our Services</div>
                    <div class="section-title">Hotel Facilities</div>
                </div>
            </div>
            <div class="row">
                {{-- <div class="col-md-4">
                        <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                            <span class="flaticon-world"></span>
                            <h5>Pick Up & Drop</h5>
                            <p style="text-align: justify;">Effortless Pickup and Drop-off Services, Providing You with Hassle-free and Convenient
                                Transportation Options.</p>
                            <div class="facility-shape"> <span class="flaticon-world"></span> </div>
                        </div>
                    </div> --}}
                @foreach($facility as $faci_item)
                <div class="col-md-4">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <span class="{{$faci_item->icon}}"></span>
                        <h5>{{$faci_item->name ?? ""}}</h5>
                        <p style="text-align: justify;">{{$faci_item->details ?? ""}}</p>
                        <div class="facility-shape">
                            <span class="{{$faci_item->icon}}"></span>
                        </div>
                    </div>
                </div>
                @endforeach
                {{--<div class="col-md-4">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <span class="flaticon-bed"></span>
                        <h5>Room Service</h5>
                        <p style="text-align: justify;">Enjoy the convenience of our Room Service, bringing a variety of options right to your door for a effortless dining experience.</p>
                        <div class="facility-shape"> <span class="flaticon-bed"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <span class="flaticon-swimming"></span>
                        <h5>Swimming Pool</h5>
                        <p style="text-align: justify;">Dive into relaxation at our inviting swimming pool, where crystal-clear waters and enjoy a peaceful atmosphere for a refreshing getaway.</p>
                        <div class="facility-shape"> <span class="flaticon-swimming"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <span class="flaticon-wifi"></span>
                        <h5>Fibre Internet</h5>
                        <p style="text-align: justify;">Experience seamless connectivity with our high-speed Wi-Fi, ensuring uninterrupted browsing and streaming during your stay.</p>
                        <div class="facility-shape"> <span class="flaticon-wifi"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <span class="flaticon-breakfast"></span>
                        <h5>Buffet Breakfast</h5>
                        <p style="text-align: justify;">Kickstart your day with a delicious breakfast served to your doorstep, Customized breakfast for a delightful start.</p>
                        <div class="facility-shape"> <span class="flaticon-breakfast"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <span class="flaticon-breakfast"></span>
                        <h5>Welcome Drinks</h5>
                        <p style="text-align: justify;">Every guest will get welcome drinks on arrival.</p>
                        <div class="facility-shape"> <span class="flaticon-breakfast"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <span class="flaticon-breakfast"></span>
                        <h5>Air Conditionar</h5>
                        <p style="text-align: justify;">All the rooms are air conditioned.</p>
                        <div class="facility-shape"> <span class="flaticon-breakfast"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <span class="flaticon-breakfast"></span>
                        <h5>Intercom Phone and Television</h5>
                        <p style="text-align: justify;">Every Room guest will get Intercom Phone and Television.</p>
                        <div class="facility-shape"> <span class="flaticon-breakfast"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <span class="flaticon-breakfast"></span>
                        <h5>Mineral Water</h5>
                        <p style="text-align: justify;">Guest will get bottle of mineral water everyday in room.</p>
                        <div class="facility-shape"> <span class="flaticon-breakfast"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <span class="flaticon-breakfast"></span>
                        <h5>1 Child Complementary</h5>
                        <p style="text-align: justify;">1 child under 5 years will get complementary</p>
                        <div class="facility-shape"> <span class="flaticon-breakfast"></span> </div>
                    </div>
                </div>--}}
            </div>
        </div>
    </section>
    <!-- Services -->
    <section class="services section-padding" style="padding: 40px">
        <div class="container">
            <div class="row">
                <div class="col-md-6 p-0 animate-box" data-animate-effect="fadeInLeft">
                    <div class="img left">
                        <a href="restaurant.html"><img src="{{ asset('frontend') }}/img/restaurant/1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-md-6 p-0 bg-cream valign animate-box" data-animate-effect="fadeInRight">
                    <div class="content">
                        <div class="cont text-left">
                            <div class="info">
                                <h6>Discover</h6>
                            </div>
                            <h4>Lebur Char Dine & Delight</h4>
                            <p>Restaurant inilla duiman at elit finibus viverra nec a lacus themo the nesudea seneoice
                                misuscipit non sagie the fermen ziverra tristiue duru the ivite dianne onen nivami
                                acsestion augue artine.</p>
                            <div class="butn-dark"> <a href="restaurant.html"><span>Learn More</span></a> </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                    <div class="col-md-6 bg-cream p-0 order2 valign animate-box" data-animate-effect="fadeInLeft">
                        <div class="content">
                            <div class="cont text-left">
                                <div class="info">
                                    <h6>Experiences</h6>
                                </div>
                                <h4>Spa Center</h4>
                                <p>Spa center inilla duiman at elit finibus viverra nec a lacus themo the nesudea seneoice
                                    misuscipit non sagie the fermen ziverra tristiue duru the ivite dianne onen nivami
                                    acsestion augue artine.</p>
                                <div class="butn-dark"> <a href="spa-wellness.html"><span>Learn More</span></a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 p-0 order1 animate-box" data-animate-effect="fadeInRight">
                        <div class="img">
                            <a href="spa-wellness.html"><img src="{{ asset('frontend') }}/img/restaurant/4.jpg"
            alt=""></a>
        </div>
        </div>
        </div>--}}
        @foreach($recreations as $key=>$recreation)
        @if( $key % 2 == 0)
        <div class="row">
            <div class="col-md-6 p-0 bg-cream valign animate-box" data-animate-effect="fadeInRight">
                <div class="content">
                    <div class="cont text-left">
                        <div class="info">
                            <h6>Modern</h6>
                        </div>
                        <h4>{{$recreation->name ?? ''}}</h4>
                        <p>{{$recreation->details ?? ''}}</p>
                        <div class="butn-dark">
                            <a href="{{route('branch.recreation',$recreation->id)}}">
                                <span>Learn More</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-0 animate-box" data-animate-effect="fadeInLeft">
                <div class="img left">
                    <a href="#">
                        <img src="{{ asset('uploads/pictures/'.$recreation->featured_photo ?? '' )}}" alt="">
                    </a>
                </div>
            </div>
        </div>
        @else
        <div class="row">
            <div class="col-md-6 p-0 order1 animate-box" data-animate-effect="fadeInRight">
                <div class="img">
                    <a href="#"><img src="{{ asset('uploads/pictures/'.$recreation->featured_photo ?? '' )}}" alt=""></a>
                </div>
            </div>
            <div class="col-md-6 bg-cream p-0 order2 valign animate-box" data-animate-effect="fadeInLeft">
                <div class="content">
                    <div class="cont text-left">
                        <div class="info">
                            <h6>Experiences</h6>
                        </div>
                        <h4>{{$recreation->name ?? ''}}</h4>
                        <p>{{$recreation->details ?? ''}}</p>
                        <div class="butn-dark">
                            <a href="{{route('branch.recreation',$recreation->id)}}">
                                <span>Learn More</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach
        </div>
    </section>
    <!-- News -->
    <section class="news section-padding bg-blck">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle"><span>Hotel Blog</span></div>
                    <div class="section-title"><span>Offer / Package</span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        @foreach($offers as $item)
                        <div class="item">
                            <div class="position-re o-hidden">
                                <a href="{{ asset('uploads/pictures/'.$item->photo) }}" data-lightbox="offer">
                                    <img src="{{ asset('uploads/pictures/'.$item->photo ?? '') }}" alt="">
                                </a>
                            </div>
                            <div class="con">
                                {{-- <span class="category">
                                        <a href="news.html">Restaurant</a>
                                    </span> --}}
                                <h5><a href="post.html">{{ $item->name ?? ""}}</a></h5>
                            </div>
                        </div>
                        @endforeach
                        {{--<div class="item">
                            <div class="position-re o-hidden">
                                <a href="{{ asset('frontend') }}/img/rooms/14.png" data-lightbox="offer">
                        <img src="{{ asset('frontend') }}/img/rooms/14.png" alt="">
                        </a>
                    </div>
                    <div class="con">
                        <h5><a href="post.html">The Best Reservation in Kuakata</a></h5>
                    </div>
                </div>
                <div class="item">
                    <div class="position-re o-hidden">
                        <a href="{{ asset('frontend') }}/img/rooms/13.png" data-lightbox="offer">
                            <img src="{{ asset('frontend') }}/img/rooms/13.png" alt="">
                        </a>
                    </div>
                    <div class="con">
                        <h5><a href="post.html">Hotel Bathroom Collections</a></h5>
                    </div>
                </div>
                <div class="item">
                    <div class="position-re o-hidden">
                        <a href="{{ asset('frontend') }}/img/news/4.jpg" data-lightbox="offer">
                            <img src="{{ asset('frontend') }}/img/news/4.jpg" alt="">
                        </a>
                    </div>
                    <div class="con">
                        <h5><a href="post.html">Weight Loss with Fitness Health Club</a></h5>
                    </div>
                </div>
                <div class="item">
                    <div class="position-re o-hidden">
                        <a href="{{ asset('frontend') }}/img/news/6.jpg" data-lightbox="offer">
                            <img src="{{ asset('frontend') }}/img/news/6.jpg" alt="">
                        </a>
                    </div>
                    <div class="con">
                        <h5><a href="post.html">Retro Lighting Design in The Hotels</a></h5>
                    </div>
                </div>
                <div class="item">
                    <div class="position-re o-hidden">
                        <a href="{{ asset('frontend') }}/img/news/5.jpg" data-lightbox="offer">
                            <img src="{{ asset('frontend') }}/img/news/5.jpg" alt="">
                        </a>
                    </div>
                    <div class="con">
                        <h5><a href="post.html">Benefits of Swimming for Your Health</a></h5>
                    </div>
                </div>--}}
            </div>
        </div>
        </div>
        </div>
    </section>
    <!-- Reservation & Booking Form -->
    {{-- <section class="testimonials">
            <div class="background bg-img bg-fixed section-padding pb-0"
                data-background="{{ asset('frontend') }}/img/slider/2.jpg" data-overlay-dark="5">
    <div class="container">

    </div>
    </section> --}}

    {{-- <div class="col-md-6 map animate-box fadeInUp animated" data-animate-effect="fadeInUp">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3704.092347070369!2d90.12192747611321!3d21.815362580038236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30aa7d2c91871215%3A0xef4da8e8cd365faa!2sD'more%20Kuakata%20Hotel%20%26%20Resort!5e0!3m2!1sen!2sbd!4v1706383810058!5m2!1sen!2sbd" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div> --}}

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