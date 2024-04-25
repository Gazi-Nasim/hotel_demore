@php
$general_infos = App\Models\Backend\General_info::first();
$branchNav=App\Models\Backend\Branch::get();

@endphp
<section>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-fixed-top">
                <div class="container">
                        <!-- Logo -->
                        <div class="logo-wrapper navbar-nav">
                                <a href="{{ route('home') }}"> <img src="{{ asset('frontend') }}/img/logo.png" class="logo-img" alt="">
                                </a>
                        </div>
                        <!-- Button -->
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"><i class="ti-menu"></i></span>
                        </button>
                        <!-- Menu -->
                        <div class="collapse navbar-collapse" id="navbar" style="justify-content: center;">
                                <ul class="navbar-nav">
                                        <li class="nav-item"> <a class="nav-link{{ request()->is('/') ? ' active' : '' }}" href="{{ route('main') }}">Home </a></li>
                                        <li class="nav-item"><a class="nav-link{{ request()->is('about') ? ' active' : '' }}" href="{{ route('about') }}">About</a></li>
                                        <li class="dropdown nav-item"><a class="nav-link{{ request()->is('hotels') ? ' active' : '' }}" href="{{ route('hotels') }}">Our Hotels</a>
                                                <ul class="dropdown-menu">
                                                        @foreach($branchNav as $item)
                                                        @php 
                                                        $url=strtolower(str_replace([' ', '+', '\''], '-', $item->name));
                                                        @endphp
                                                        <li class="dropdown-item">
                                                                <a href="{{route('branch.main', [$item->id, $url])}}" data-hover=" " target="_blank">{{$item->name ?? ''}}</a>
                                                        </li>
                                                        @endforeach

                                                        {{--<li class="dropdown-item"><a href="https://kuakata.hsblco.com/home" data-hover=" " target="_blank">D'More Kuakata</a></li>
                                                        <li class="dropdown-item"><a href="https://sreemongol.hsblco.com/home" data-hover=" " target="_blank">D'More Sreemongol</a></li>
                                                        <li class="dropdown-item"><a href="https://bandarban.hsblco.com/home" data-hover=" " target="_blank">D'More Bandarban</a></li>
                                                        <li class="dropdown-item"><a href="https://resort.hsblco.com/home" data-hover=" " target="_blank">D'More Sajek Valley</a></li>
                                                        <li class="dropdown-item"><a href="https://galesia.hsblco.com/home" data-hover=" " target="_blank">D'More Dhaka Galesia</a></li>
                                                        <li class="dropdown-item"><a href="https://www.hotelthecoxtoday.com/" data-hover=" " target="_blank">D'More Hotel Cox Today</a></li>
                                                        <li class="dropdown-item"><a href="https://chattogram.hsblco.com/" data-hover=" " target="_blank">D'More Chattogram</a></li>--}}
                                                </ul>
                                        </li>
                                        <li class="nav-item"><a class="nav-link{{ request()->is('gallery') ? ' active' : '' }}" href="{{ route('gallery') }}">Gallery</a></li>
                                        <li class="nav-item"><a class="nav-link{{ request()->is('contact') ? ' active' : '' }}" href="{{ route('contact') }}">Contacts</a></li>
                                        <li class="nav-item"><a class="nav-link{{ request()->is('career') ? ' active' : '' }}" href="{{ route('career') }}">Career</a></li>
                                        <li class="dropdown nav-item"><a class="nav-link{{ request()->is('tour') ? ' active' : '' }}" href="{{ route('tour') }}">virtual tour</a>
                                                <ul class="dropdown-menu">
                                                        @foreach($branchNav as $item)
                                                        <li class="dropdown-item">
                                                                <a href="{{route('branch.tour',$item->id)}}" data-hover=" " target="_blank">{{$item->name ?? ""}}</a>
                                                        </li>
                                                        @endforeach
                                                        {{--<li class="dropdown-item"><a href="https://kuakata.hsblco.com/home" data-hover=" " target="_blank">D'More Kuakata</a></li>
                                                        <li class="dropdown-item"><a href="https://sreemongol.hsblco.com/home" data-hover=" " target="_blank">D'More Sreemongol</a></li>
                                                        <li class="dropdown-item"><a href="https://bandarban.hsblco.com/home" data-hover=" " target="_blank">D'More Bandarban</a></li>
                                                        <li class="dropdown-item"><a href="https://resort.hsblco.com/home" data-hover=" " target="_blank">D'More Sajek Valley</a></li>
                                                        <li class="dropdown-item"><a href="https://galesia.hsblco.com/home" data-hover=" " target="_blank">D'More Dhaka Galesia</a></li>
                                                        <li class="dropdown-item"><a href="https://www.hotelthecoxtoday.com/" data-hover=" " target="_blank">D'More Hotel Cox Today</a></li>
                                                        <li class="dropdown-item"><a href="https://chattogram.hsblco.com/" data-hover=" " target="_blank">D'More Chattogram</a></li>--}}
                                                </ul>
                                        </li>
                                </ul>
                        </div>
                </div>
        </nav>
</section>

<nav class="navbartwo navbar-expand-lg">
        <div class="container-fluid">
                <!-- Menu -->
                <div class="row justify-content: space-between;">
                        <div class="navbarcol ">
                                <ul class="navbar-navtwo" style="">

                                </ul>
                        </div>
                        <div class="navbarcol d-flex justify-content-end ">
                                <ul class="navbar-navtwo">
                                        <div class="nav-item footer-about-social-list" style="margin-top: 0px;">
                                                <a href="{{$general_infos->whatsapp}}"><img class="auto" src="{{ asset('frontend') }}/img/icon/whatsapp.png" alt="" /></a>
                                                <a href="{{$general_infos->fb}}"><img class="auto" src="{{ asset('frontend') }}/img/icon/facebook.png" alt="" /></a>
                                                <a href="{{$general_infos->instagram}}"><img class="auto" src="{{ asset('frontend') }}/img/icon/instagram.png" alt="" /></a>
                                                <a href="{{$general_infos->twitter}}"><img class="auto" src="{{ asset('frontend') }}/img/icon/twitter.png" alt="" /></a>
                                                <a href="{{$general_infos->pinterest}}"><img class="auto" src="{{ asset('frontend') }}/img/icon/pinterest.png" alt="" /></a>
                                                <a href="{{$general_infos->youtube}}"><img class="auto" src="{{ asset('frontend') }}/img/icon/youtube.png" alt="" /></a>
                                        </div>
                                </ul>
                        </div>
                </div>
        </div>
</nav>