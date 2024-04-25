@extends('frontend.layouts.frontend_master')
@section('title', 'Luxury Hotel | About')
@section('content')
<!-- Header Banner -->
{{-- <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="{{ asset('frontend') }}/img/slider/1.jpg"> --}}
<div class="container">
    <div class="row">
        <div class="col-12 mt-90">
            <h1 class="center">About Us</h1>
        </div>
    </div>
</div>
{{-- </div> --}}
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
                <div class="section-subtitle">{{$branchs[0]->name ?? ''}}</div>
                <div class="section-title">{{$branchs[0]->about_text ?? ''}}</div>
                <p style="text-align: justify;">
                    {{$branchs[0]->about_banner ?? ''}}
                    {{--Welcome to <strong>D'more Hotel & Resort</strong>, the first-ever
                    <strong>Local Chain Hotel in Bangladesh</strong>, offering a truly unique and extraordinary
                    experience. Our chain proudly boasts several properties strategically located in some of the most
                    attractive tourist places in the country like; <strong>Cox’s Bazar, Dhaka , Bandarban, Sajek,
                        Kuakata, Sreemongal and Chittagong.</strong>--}}
                </p>
                <p>
                    @foreach($branchs as $key=>$item)
                    <li>
                        {{ ++$key ?? ''}}. <strong>{{ $item->name ?? ''}}</strong> - {{ $item->about_text}}
                    </li>
                    @endforeach
                    {{--<li>
                        1. <strong>D'more Hotel The Cox Today, Cox’s Bazar</strong> - A Five-Star Oasis: Located in
                        Cox’s Bazar, one of the most breathtaking destinations in Bangladesh, D'more Hotel The Cox Today
                        is our flagship property. As a five-star hotel, it sets the standard for luxury and comfort,
                        providing guests with a truly unforgettable stay.
                    </li>
                    <li>
                        2. <strong>D'more Galesia Hotel & Resort, Banani, Dhaka</strong> - Three-Star Excellence:
                        Situated in the vibrant heart of Banani, Dhaka, D'more Galesia Hotel & Resort delivers the
                        perfect blend of sophistication and convenience. Despite being a three-star hotel, we ensure
                        that our guests receive a five-star standard of service, making their stay memorable and
                        delightful.
                    </li>
                    <li>
                        3. <strong>D'more Babdarban Hotel & Resort, Bandarban</strong> - Embracing Nature's Charm:
                        Nestled in the enchanting hills of Bandarban, our D'more Babdarban Hotel & Resort offers a
                        tranquil escape from the hustle and bustle. Despite being a three-star property, our commitment
                        to excellence ensures that guests experience world-class service amidst breathtaking natural
                        surroundings.
                    </li>
                    <li>
                        4. <strong>D'more Sajek Hotel & Resort, Sajek, Rangamati</strong> - A Serene Retreat: In the
                        picturesque landscapes of Sajek, Rangamati, D'more Sajek Hotel & Resort stands tall as an oasis
                        of peace. Our three-star hotel provides guests with a comforting and rejuvenating stay,
                        complemented by impeccable service and hospitality.
                    </li>
                    <li>
                        5. <strong>D'more Kuakata Hotel and Resort, Patuakhali</strong> - Coastal Charm: Experience the
                        coastal charm at D'more Kuakata Hotel and Resort, located in Patuakhali. Our three-star property
                        offers guests a delightful beachfront stay, coupled with the same high-quality service found
                        across all our D'more hotels.
                    </li>
                    <li>
                        6. <strong>D'more Chittagong Hotel & Resort, Chittagong</strong> - Where Comfort Meets
                        Convenience: In the bustling city of Chittagong, D'more Chittagong Hotel & Resort caters to both
                        business and leisure travelers. While it may be a three-star hotel, we ensure that guests
                        receive nothing less than a world-class experience during their stay.
                    </li>
                    <li>
                        7. <strong>D'more Sreemangal Hotel & Resort, Sreemangal</strong> - Located in the entertainment
                        district, Hotel D'More Sreemangal is a great choice for a stay in Kamalganj. After having fun at
                        the outdoor pool, you can grab a bite to eat at the restaurant.
                    </li>
                    <li>
                        8. <strong>Upcoming Property: Saint Martin, and Rangamati</strong> - As the first-ever Local
                        Chain Hotel in Bangladesh, we take immense pride in showcasing the beauty and diversity of our
                        nation through our strategically located properties.
                        Each of our hotels is situated in attractive tourist spots, offering guests the perfect
                        opportunity to explore the wonders of Bangladesh.
                        We are committed to providing our guests with exceptional service and state-of-the-art
                        amenities, ensuring they feel pampered and well-cared-for throughout their stay.
                        Our culinary team delights in offering a diverse and delectable menu, crafted with the finest
                        ingredients, to provide guests with an unforgettable dining experience.Our team of dedicated
                        professionals is well-trained and passionate about hospitality, ensuring that every guest
                        receives personalized attention and care.

                    </li>--}}
                </p>
                <p style="text-align: justify;"><strong>
                        {{$branchs[0]->about_banner ?? ''}}
                        {{--At D'more Hotel & Resort, we believe in going above and beyond
                        to create cherished memories for our guests. Come and experience the essence of Bangladesh's
                        hospitality with us. Your journey begins here!--}}</strong></p>
                <!-- reservation -->
                <!--<div class="reservations">-->
                <!--    <div class="icon"><span class="flaticon-call"></span></div>-->
                <!--    <div class="text">-->
                <!--        <p>Reservation</p> <a href="tel:+8801844-114833">+8801844-114833</a>-->
                <!--    </div>-->
                <!--</div>-->
            </div>

            <div class="col col-md-3 animate-box" data-animate-effect="fadeInUp" style="width:50%; margin-top:35px;">
                @foreach($branchs as $key=>$item)
                <img src="{{ asset('uploads/pictures/'.$item->feature_photo ?? '' ) }}" alt="">
                @endforeach
                {{--<img src="{{ asset('frontend') }}/img/slider/2.jpg" alt="">
                <img src="{{ asset('frontend') }}/img/slider/3.jpg" alt="">
                <img src="{{ asset('frontend') }}/img/slider/4.jpg" alt="">
                <img src="{{ asset('frontend') }}/img/slider/5.jpg" alt="">
                <img src="{{ asset('frontend') }}/img/slider/6.jpg" alt="">--}}
            </div>

        </div>
    </div>
</section>