@extends('frontend.layouts.frontend_master')
@section('title', 'Luxury Hotel | Contact')
@section('content')
<!-- Header Banner -->
<div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="7" data-background="{{ asset('frontend') }}/img/slider/5.jpg" style="height: 30vh;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left caption mt-90" style="margin-bottom: 40px">
                <h5>Get in touch</h5>
                <h1>Contact Us</h1>
            </div>
        </div>
    </div>
</div>
<!-- Contact -->
<section class="contact section-padding">
    <div class="container">
        @foreach($branchs as $item)
        <div class="row mb-90">
            {{-- Hotel Cox Today --}}
            <div class="col-md-6 mb-60">
                <h3>{{$item->name}}</h3>
                <p>{{$item->name}}</p>
                <div class="reservations mb-30">
                    <div class="icon"><span class="flaticon-call"></span></div>
                    <div class="text">
                        <p>Reservation</p> <a href="tel:+88-0341 52410-22">{{$item->phone}}</a>
                    </div>
                </div>
                <div class="reservations mb-30">
                    <div class="icon"><span class="flaticon-envelope"></span></div>
                    <div class="text">
                        <p>Email Info</p> <a href="{{$item->email}}">{{$item->email}}</a>
                    </div>
                </div>
                <div class="reservations">
                    <div class="icon"><span class="flaticon-location-pin"></span></div>
                    <div class="text">
                        <p>Address</p> {{$item->address ?? ''}}
                        <!--<br>Kolatoly Road Cox's Bazar, Bangladesh-->
                    </div>
                </div>
            </div>
            <div class="col-md-5 mb-30 offset-md-1">
                <h3>Get in touch</h3>
                <form method="post" class="" action="{{ route('contact.store') }}">
                    @csrf
                    <!-- form message -->
                    <div class="row">
                        <div class="col-12">
                            @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Success!</strong> {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif
                            @if (session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Error!</strong> {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif
                        </div>
                    </div>
                    <!-- form elements -->
                    <div class="row">
                        <input type="hidden" name="branch_id" value="{{$item->id}}">
                        <div class="col-md-6 form-group">
                            <input name="name" type="text" placeholder="Your Name *" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <input name="email" type="email" placeholder="Your Email *" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <input name="phone" type="text" placeholder="Your Number">
                        </div>
                        <div class="col-md-6 form-group">
                            <input name="subject" type="text" placeholder="Subject">
                        </div>
                        <div class="col-md-12 form-group">
                            <textarea name="message" id="message" cols="30" rows="4" placeholder="Message *" required></textarea>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="butn-dark2"><span>Send Message</span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @endforeach
        {{--
        <!-- Kuakata -->
        <div class="row mb-90">
            <div class="col-md-6 mb-60">
                <h3>The Luxury D'more Kuakata Hotel</h3>
                <p>Discover the enchanting beauty of Galesia at Hotel D’More Galesia Valley – a charming, privately owned retreat. Our luxury 3-star accommodations come with a touch of refined service that meets the standards of a 5-star experience. Immerse yourself in the warmth of our hospitality and embrace the natural wonders surrounding you, making every moment at Galesia Valley truly memorable</p>
                <div class="reservations mb-30">
                    <div class="icon"><span class="flaticon-call"></span></div>
                    <div class="text">
                        <p>Reservation</p> <a href="tel:+8801329-723050">(+88) 01329-723050</a>
                    </div>
                </div>
                <div class="reservations mb-30">
                    <div class="icon"><span class="flaticon-envelope"></span></div>
                    <div class="text">
                        <p>Email Info</p> <a href="mailto:salesctg@hotelthecoxtoday.com">salesctg@hotelthecoxtoday.com</a>
                    </div>
                </div>
                <div class="reservations">
                    <div class="icon"><span class="flaticon-location-pin"></span></div>
                    <div class="text">
                        <p>Address</p> Hotel & Resort, D'more,
                        <br>Kuakata, Bangladesh
                    </div>
                </div>
            </div>
            <div class="col-md-5 mb-30 offset-md-1">
                <h3>Get in touch</h3>
                <form method="post" class="" action="{{ route('contact.store') }}">
        @csrf
        <!-- form message -->
        <div class="row">
            <div class="col-12">
                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
            </div>
        </div>
        <!-- form elements -->
        <div class="row">
            <div class="col-md-6 form-group">
                <input name="name" type="text" placeholder="Your Name *" required>
            </div>
            <div class="col-md-6 form-group">
                <input name="email" type="email" placeholder="Your Email *" required>
            </div>
            <div class="col-md-6 form-group">
                <input name="phone" type="text" placeholder="Your Number">
            </div>
            <div class="col-md-6 form-group">
                <input name="subject" type="text" placeholder="Subject">
            </div>
            <div class="col-md-12 form-group">
                <textarea name="message" id="message" cols="30" rows="4" placeholder="Message *" required></textarea>
            </div>
            <div class="col-md-12">
                <button type="submit" class="butn-dark2"><span>Send Message</span></button>
            </div>
        </div>
        </form>
    </div>
    </div>
    <!-- Sajek -->
    <div class="row mb-90">
        <div class="col-md-6 mb-60">
            <h3>The Luxury D'more Sajek Hotel</h3>
            <p>Discover the enchanting beauty of Sajek Valley at Hotel D’More Sajek Valley – a charming, privately owned retreat. Our luxury 3-star accommodations come with a touch of refined service that meets the standards of a 5-star experience. Immerse yourself in the warmth of our hospitality and embrace the natural wonders surrounding you, making every moment at Sajek Valley truly memorable.</p>
            <div class="reservations mb-30">
                <div class="icon"><span class="flaticon-call"></span></div>
                <div class="text">
                    <p>Reservation</p> <a href="tel:+8801844-114833"> (+88) 01844-114833</a>
                </div>
            </div>
            <div class="reservations mb-30">
                <div class="icon"><span class="flaticon-envelope"></span></div>
                <div class="text">
                    <p>Email Info</p> <a href="mailto:salesctg@hotelthecoxtoday.com">salesctg@hotelthecoxtoday.com</a>
                </div>
            </div>
            <div class="reservations">
                <div class="icon"><span class="flaticon-location-pin"></span></div>
                <div class="text">
                    <p>Address</p> Rului Para, Sajek Valley,
                    <br>Rangamati, Bangladesh
                </div>
            </div>
        </div>
        <div class="col-md-5 mb-30 offset-md-1">
            <h3>Get in touch</h3>
            <form method="post" class="" action="{{ route('contact.store') }}">
                @csrf
                <!-- form message -->
                <div class="row">
                    <div class="col-12">
                        @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success!</strong> {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Error!</strong> {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                    </div>
                </div>
                <!-- form elements -->
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input name="name" type="text" placeholder="Your Name *" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <input name="email" type="email" placeholder="Your Email *" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <input name="phone" type="text" placeholder="Your Number">
                    </div>
                    <div class="col-md-6 form-group">
                        <input name="subject" type="text" placeholder="Subject">
                    </div>
                    <div class="col-md-12 form-group">
                        <textarea name="message" id="message" cols="30" rows="4" placeholder="Message *" required></textarea>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="butn-dark2"><span>Send Message</span></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Bandarban -->
    <div class="row mb-90">
        <div class="col-md-6 mb-60">
            <h3>The Luxury D'more Bandarban Hotel</h3>
            <p>Discover the enchanting beauty of Bandarban Valley at Hotel D’More Bandarban Valley – a charming, privately owned retreat. Our luxury 3-star accommodations come with a touch of refined service that meets the standards of a 5-star experience. Immerse yourself in the warmth of our hospitality and embrace the natural wonders surrounding you, making every moment at Bandarban Valley truly memorable.</p>
            <div class="reservations mb-30">
                <div class="icon"><span class="flaticon-call"></span></div>
                <div class="text">
                    <p>Reservation</p> <a href="tel:+8801713-754500"> (+88) 01713-754500</a>
                </div>
            </div>
            <div class="reservations mb-30">
                <div class="icon"><span class="flaticon-envelope"></span></div>
                <div class="text">
                    <p>Email Info</p> <a href="mailto:salesctg@hotelthecoxtoday.com">salesctg@hotelthecoxtoday.com</a>
                </div>
            </div>
            <div class="reservations">
                <div class="icon"><span class="flaticon-location-pin"></span></div>
                <div class="text">
                    <p>Address</p> Lusai Bari, Chimbuk Road, Hafezgona,
                    <br>Bandarban, Bangladesh
                </div>
            </div>
        </div>
        <div class="col-md-5 mb-30 offset-md-1">
            <h3>Get in touch</h3>
            <form method="post" class="" action="{{ route('contact.store') }}">
                @csrf
                <!-- form message -->
                <div class="row">
                    <div class="col-12">
                        @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success!</strong> {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Error!</strong> {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                    </div>
                </div>
                <!-- form elements -->
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input name="name" type="text" placeholder="Your Name *" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <input name="email" type="email" placeholder="Your Email *" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <input name="phone" type="text" placeholder="Your Number">
                    </div>
                    <div class="col-md-6 form-group">
                        <input name="subject" type="text" placeholder="Subject">
                    </div>
                    <div class="col-md-12 form-group">
                        <textarea name="message" id="message" cols="30" rows="4" placeholder="Message *" required></textarea>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="butn-dark2"><span>Send Message</span></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Sreemongol -->
    <div class="row mb-90">
        <div class="col-md-6 mb-60">
            <h3>The Luxury D'more Sreemongol Hotel</h3>
            <p>Discover the enchanting beauty of Sreemangal Valley at Hotel D’More Sreemangal Valley – a charming, privately owned retreat. Our luxury 3-star accommodations come with a touch of refined service that meets the standards of a 5-star experience. Immerse yourself in the warmth of our hospitality and embrace the natural wonders surrounding you, making every moment at Sreemangal Valley truly memorable.</p>
            <div class="reservations mb-30">
                <div class="icon"><span class="flaticon-call"></span></div>
                <div class="text">
                    <p>Reservation</p> <a href="tel:+8801755-598443">(+88) 01755-598443</a>
                </div>
            </div>
            <div class="reservations mb-30">
                <div class="icon"><span class="flaticon-envelope"></span></div>
                <div class="text">
                    <p>Email Info</p> <a href="mailto:salesctg@hotelthecoxtoday.com">salesctg@hotelthecoxtoday.com</a>
                </div>
            </div>
            <div class="reservations">
                <div class="icon"><span class="flaticon-location-pin"></span></div>
                <div class="text">
                    <p>Address</p> Radhanagar, Sreemangal,
                    <br>Moulvibazar, Bangladesh
                </div>
            </div>
        </div>
        <div class="col-md-5 mb-30 offset-md-1">
            <h3>Get in touch</h3>
            <form method="post" class="" action="{{ route('contact.store') }}">
                @csrf
                <!-- form message -->
                <div class="row">
                    <div class="col-12">
                        @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success!</strong> {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Error!</strong> {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                    </div>
                </div>
                <!-- form elements -->
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input name="name" type="text" placeholder="Your Name *" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <input name="email" type="email" placeholder="Your Email *" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <input name="phone" type="text" placeholder="Your Number">
                    </div>
                    <div class="col-md-6 form-group">
                        <input name="subject" type="text" placeholder="Subject">
                    </div>
                    <div class="col-md-12 form-group">
                        <textarea name="message" id="message" cols="30" rows="4" placeholder="Message *" required></textarea>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="butn-dark2"><span>Send Message</span></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Galesia -->
    <div class="row mb-90">
        <div class="col-md-6 mb-60">
            <h3>The Luxury D'more Galesia Hotel</h3>
            <p>Discover the enchanting beauty of Galesia at Hotel D’More Galesia Valley – a charming, privately owned retreat. Our luxury 3-star accommodations come with a touch of refined service that meets the standards of a 5-star experience. Immerse yourself in the warmth of our hospitality and embrace the natural wonders surrounding you, making every moment at Galesia Valley truly memorable.</p>
            <div class="reservations mb-30">
                <div class="icon"><span class="flaticon-call"></span></div>
                <div class="text">
                    <p>Reservation</p> <a href="tel:+8801787-671877">(+88) 01787-671877</a>
                </div>
            </div>
            <div class="reservations mb-30">
                <div class="icon"><span class="flaticon-envelope"></span></div>
                <div class="text">
                    <p>Email Info</p> <a href="mailto:salesctg@hotelthecoxtoday.com">salesctg@hotelthecoxtoday.com</a>
                </div>
            </div>
            <div class="reservations">
                <div class="icon"><span class="flaticon-location-pin"></span></div>
                <div class="text">
                    <p>Address</p> House #39, Road #21, Block #B,
                    <br>Banani Model Town, Dhaka, Bangladesh
                </div>
            </div>
        </div>
        <div class="col-md-5 mb-30 offset-md-1">
            <h3>Get in touch</h3>
            <form method="post" class="" action="{{ route('contact.store') }}">
                @csrf
                <!-- form message -->
                <div class="row">
                    <div class="col-12">
                        @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success!</strong> {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Error!</strong> {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                    </div>
                </div>
                <!-- form elements -->
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input name="name" type="text" placeholder="Your Name *" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <input name="email" type="email" placeholder="Your Email *" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <input name="phone" type="text" placeholder="Your Number">
                    </div>
                    <div class="col-md-6 form-group">
                        <input name="subject" type="text" placeholder="Subject">
                    </div>
                    <div class="col-md-12 form-group">
                        <textarea name="message" id="message" cols="30" rows="4" placeholder="Message *" required></textarea>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="butn-dark2"><span>Send Message</span></button>
                    </div>
                </div>
            </form>
        </div>
    </div>--}}
    <!-- Map Section -->
    <div class="row">
        <div class="col-md-12 map animate-box" data-animate-effect="fadeInUp">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1573147.7480448114!2d-74.84628175962355!3d41.04009641088412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25856139b3d33%3A0xb2739f33610a08ee!2s1616%20Broadway%2C%20New%20York%2C%20NY%2010019%2C%20Amerika%20Birle%C5%9Fik%20Devletleri!5e0!3m2!1str!2str!4v1646760525018!5m2!1str!2str" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
    </div>
</section>
<!-- Reservation & Booking Form -->
<!--<section class="testimonials">-->
<!--    <div class="background bg-img bg-fixed section-padding pb-0"-->
<!--        data-background="{{ asset('frontend') }}/img/slider/2.jpg" data-overlay-dark="2">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!-- Reservation -->
<!--                <div class="col-md-5 mb-30 mt-30">-->
<!--                    <p><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i-->
<!--                            class="star-rating"></i><i class="star-rating"></i></p>-->
<!--                    <h5>Each of our guest rooms feature a private bath, wi-fi, cable television and include full-->
<!--                        breakfast.</h5>-->
<!--                    <div class="reservations mb-30">-->
<!--                        <div class="icon color-1"><span class="flaticon-call"></span></div>-->
<!--                        <div class="text">-->
<!--                            <p class="color-1">Reservation</p> <a class="color-1" href="tel:855-100-4444">855 100-->
<!--                                4444</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <p><i class="ti-check"></i><small>Call us, it's toll-free.</small></p>-->
<!--                </div>-->
<!-- Booking From -->
<!--                <div class="col-md-5 offset-md-2">-->
<!--                    <div class="booking-box">-->
<!--                        <div class="head-box">-->
<!--                            <h6>Rooms & Suites</h6>-->
<!--                            <h4>Hotel Booking Form</h4>-->
<!--                        </div>-->
<!--                        <div class="booking-inner clearfix">-->
<!--                            <form action="https://duruthemes.com/demo/html/cappa/demo1-light/rooms2.html"-->
<!--                                class="form1 clearfix">-->
<!--                                <div class="row">-->
<!--                                    <div class="col-md-12">-->
<!--                                        <div class="input1_wrapper">-->
<!--                                            <label>Check in</label>-->
<!--                                            <div class="input1_inner">-->
<!--                                                <input type="text" class="form-control input datepicker"-->
<!--                                                    placeholder="Check in">-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="col-md-12">-->
<!--                                        <div class="input1_wrapper">-->
<!--                                            <label>Check out</label>-->
<!--                                            <div class="input1_inner">-->
<!--                                                <input type="text" class="form-control input datepicker"-->
<!--                                                    placeholder="Check out">-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="col-md-6">-->
<!--                                        <div class="select1_wrapper">-->
<!--                                            <label>Adults</label>-->
<!--                                            <div class="select1_inner">-->
<!--                                                <select class="select2 select" style="width: 100%">-->
<!--                                                    <option value="0">Adults</option>-->
<!--                                                    <option value="1">1</option>-->
<!--                                                    <option value="2">2</option>-->
<!--                                                    <option value="3">3</option>-->
<!--                                                    <option value="4">4</option>-->
<!--                                                </select>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="col-md-6">-->
<!--                                        <div class="select1_wrapper">-->
<!--                                            <label>Children</label>-->
<!--                                            <div class="select1_inner">-->
<!--                                                <select class="select2 select" style="width: 100%">-->
<!--                                                    <option value="0">Children</option>-->
<!--                                                    <option value="1">1</option>-->
<!--                                                    <option value="2">2</option>-->
<!--                                                    <option value="3">3</option>-->
<!--                                                    <option value="4">4</option>-->
<!--                                                </select>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="col-md-12">-->
<!--                                        <button type="submit" class="btn-form1-submit mt-15">Check-->
<!--                                            Availability</button>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </form>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!-- Clients -->
<!--<section class="clients">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-7">-->
<!--                <div class="owl-carousel owl-theme">-->
<!--                    <div class="clients-logo">-->
<!--                        <a href="#0"><img src="{{ asset('frontend') }}/img/clients/1.png" alt=""></a>-->
<!--                    </div>-->
<!--                    <div class="clients-logo">-->
<!--                        <a href="#0"><img src="{{ asset('frontend') }}/img/clients/2.png" alt=""></a>-->
<!--                    </div>-->
<!--                    <div class="clients-logo">-->
<!--                        <a href="#0"><img src="{{ asset('frontend') }}/img/clients/3.png" alt=""></a>-->
<!--                    </div>-->
<!--                    <div class="clients-logo">-->
<!--                        <a href="#0"><img src="{{ asset('frontend') }}/img/clients/4.png" alt=""></a>-->
<!--                    </div>-->
<!--                    <div class="clients-logo">-->
<!--                        <a href="#0"><img src="{{ asset('frontend') }}/img/clients/5.png" alt=""></a>-->
<!--                    </div>-->
<!--                    <div class="clients-logo">-->
<!--                        <a href="#0"><img src="{{ asset('frontend') }}/img/clients/6.png" alt=""></a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
@endsection