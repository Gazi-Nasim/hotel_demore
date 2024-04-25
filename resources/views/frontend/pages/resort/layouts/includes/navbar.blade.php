@php
$branch_data=App\Models\Backend\Branch::find(request()->route('id'));
$accommos=App\Models\Backend\Room::where('type','accommodation')->get();
$restaurants=App\Models\Backend\Room::where('type','restaurant')->get();
$recreations=App\Models\Backend\Room::where('type','recreation')->get();
$meetings=App\Models\Backend\Room::where('type','meeting')->get();
@endphp
<section>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-fixed-top">
        <div class="container">
            <!-- Logo -->
            <div class="logo-wrapper navbar-nav">
                <a href="{{ route('branch.main',request()->route('id') )}}"> <img src="{{ asset('frontend') }}/img/logo.jpg" class="logo-img" alt="">
                </a>
                <!-- <a class="logo" href="index.html"> <h2>THE CAPPA <span>Luxury Hotel</span></h2> </a> -->
            </div>
            <!-- Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="ti-menu"></i>
                </span>
            </button>
            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link{{ request()->is('/') ? ' active' : '' }}" href="{{ route('branch.main',request()->route('id')) }}">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link{{ request()->is('about') ? ' active' : '' }}" href="{{ route('branch.about',request()->route('id')) }}">About</a>
                    </li>
                    <li class="dropdown nav-item">
                        <a class="nav-link{{ Route::is('branch.accommodation') ? ' active' : '' }}" href="{{ route('branch.accommodation',[request()->route('id')]) }}">Accommodation</a>
                        <ul class="dropdown-menu">
                            @foreach($accommos as $accommo)
                            <li class="dropdown-item">
                                <a href="{{ route('branch.accommodation', [request()->route('id'), $accommo->id])}}" data-hover="">{{$accommo->name}}</a>
                            </li>
                            @endforeach
                            {{--<li class="dropdown-item"><a href="/rooms/twin" data-hover=" ">DELUXE TWIN ROOM</a></li>
                            <li class="dropdown-item"><a href="/rooms/triple" data-hover=" ">DELUXE TRIPLE ROOM</a></li>
                            <li class="dropdown-item"><a href="/rooms/honeymoon" data-hover=" ">HONEYMOON SUITE</a></li>
                            <li class="dropdown-item"><a href="/rooms/executive" data-hover=" ">EXECUTIVE SUITE</a></li>
                            <li class="dropdown-item"><a href="/rooms/presidential" data-hover=" ">PRESIDENTIAL ROOM</a></li>--}}
                        </ul>
                    </li>
                    <li class="dropdown nav-item"><a class="nav-link{{ request()->is('restaurant') ? ' active' : '' }}" href="{{ route('branch.restaurant',request()->route('id')) }}">Restaurant</a>
                        <ul class="dropdown-menu">
                            @foreach($restaurants as $restaurant)
                            @php 
                            $url=strtolower(str_replace([' ', '+', '\''], '-', $restaurant->name));
                            @endphp
                            <li class="dropdown-item">
                                <a href="{{ route('branch.restaurant',[request()->route('id'), $url , $restaurant->id]) }}" data-hover="">{{$restaurant->name}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class=" dropdown nav-item"><a class="nav-link{{ request()->is('recreation') ? ' active' : '' }}" href="{{ route('branch.recreation',request()->route('id')) }}">Recreation</a>
                        <ul class="dropdown-menu">
                            @foreach($recreations as $recreation)
                            @php 
                            $url=strtolower(str_replace([' ', '+', '\''], '-', $recreation->name));
                            @endphp
                            <li class="dropdown-item">
                                <a href="{{ route('branch.recreation',[request()->route('id'), $url,$recreation->id] )}}" data-hover=" ">{{$recreation->name}}</a>
                            </li>
                            @endforeach
                            {{--<li class="dropdown-item">
                                <a href="recreation#recreation" data-hover=" ">GYM</a>
                            </li>--}}
                        </ul>
                    </li>
                    <li class="dropdown nav-item"><a class="nav-link{{ request()->is('meeting') ? ' active' : '' }}" href="{{ route('branch.meeting',request()->route('id')) }}">Meeting & Events</a>
                        <ul class="dropdown-menu">
                            @foreach($meetings as $meeting)
                            @php 
                            $url=strtolower(str_replace([' ', '+', '\''], '-', $restaurant->name));
                            @endphp
                            <li class="dropdown-item">
                                <a href="{{ route('branch.meeting',[request()->route('id'), $url,$meeting->id] )}}" data-hover=" ">{{$meeting->name}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link{{ request()->is('gallery') ? ' active' : '' }}" href="{{ route('branch.gallery',request()->route('id')) }}">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link{{ request()->is('contact') ? ' active' : '' }}" href="{{ route('branch.contact',request()->route('id')) }}">Contacts</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('branch.tour', request()->route('id') )}}">Virtual Tour</a></li>
                </ul>
            </div>
        </div>
    </nav>
</section>

<nav class="navbartwo navbar-expand-lg">
    <div class="container-fluid">
        <!-- Menu -->
        <div class="row ">
            <div class="navbarcol">
                <ul class="navbar-navtwo">
                    {{-- <p class="footer-contact-phone" style="margin-top:0px; line-height:0; font-size:20px;"><span class="flaticon-call"></span> <a href="tel:(+88) 01329-723050">(+88) 01329-723050/51</a></p>
                    <p class="footer-contact-phone" style="margin-top:0px; line-height:1; font-size:20px; text-indent:10px"><a href="mailto:reservation.kuakata@hoteldmore.com" style="display: unset">reservation.kuakata@hoteldmore.com</a></p> --}}
                    {{-- <p class="footer-contact-phone" style="margin-top:0px; line-height:unset; font-size:20px; text-indent:10px;justify-content:center;"> <span><i class="ti-email" style="line-height:unset;"></i></span><a href="mailto:salesctg@hotelthecoxtoday.com">salesctg@hotelthecoxtoday.com</a></p> --}}
                    <p class="footer-contact-phone" style="margin-top:0px; line-height:0; font-size:20px;"><span><img src="{{ asset('frontend') }}/img/icon/phone.png" alt="" /></span> <a href="tel:(+88) 01329-723050">{{$branch_data->phone ?? ''}}</a></p>
                    <p class="footer-contact-phone" style="margin:0px 0px 0px 10px; line-height:0; font-size:20px;"><span><img src="{{ asset('frontend') }}/img/icon/email.png" alt="" /></span> <a href="mailto:reservation.kuakata@hoteldmore.com">{{$branch_data->email ?? ''}}</a></p>
                </ul>
            </div>
            <div class="navbarcol d-flex justify-content-end ">
                <ul class="navbar-navtwo">
                    <div class="nav-item footer-about-social-list" style="margin-top: -20px;">
                        <a href="https://wa.me/8801329723050"><img src="{{ asset('frontend') }}/img/icon/whatsapp.png" alt="" /></a>
                        <a href="#"><img src="{{ asset('frontend') }}/img/icon/facebook.png" alt="" /></a>
                        <a href="#"><img src="{{ asset('frontend') }}/img/icon/instagram.png" alt="" /></a>
                        <a href="#"><img src="{{ asset('frontend') }}/img/icon/twitter.png" alt="" /></a>
                        <a href="#"><img src="{{ asset('frontend') }}/img/icon/pinterest.png" alt="" /></a>
                        <a href="#"><img src="{{ asset('frontend') }}/img/icon/youtube.png" alt="" /></a>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</nav>
{{-- test --}}