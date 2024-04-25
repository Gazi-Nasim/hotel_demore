@php
$branch_data=App\Models\Backend\Branch::find(request()->route('id'));
@endphp
<div class="row">
    <div class="col-md-12 animate-box fadeInUp animated" data-animate-effect="fadeInUp">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3704.0922181926935!2d90.12192747601301!3d21.815367560296313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30aa7d2c91871215%3A0xef4da8e8cd365faa!2sD&#39;more%20Kuakata%20Hotel%20%26%20Resort!5e0!3m2!1sen!2sbd!4v1706465625954!5m2!1sen!2sbd" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>
<!-- Footer -->
<footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-column footer-about">
                        <h3 class="footer-title">About Hotel</h3>
                        <p class="footer-about-text" style="text-align: justify;">{{$branch_data->about_banner ?? ''}}</p>

                        <div class="footer-language">
                            {{-- <i class="lni ti-world"></i> --}}

                        </div>
                    </div>
                </div>
                <div class="col-md-3 offset-md-1">
                    <div class="footer-column footer-explore clearfix">
                        <h3 class="footer-title">Explore</h3>
                        <ul class="footer-explore-list list-unstyled">
                            <li><a href="{{ route('branch.main', request()->route('id')) }}">Home</a></li>
                            <li><a href="{{ route('branch.about', request()->route('id')) }}">About Hotel</a></li>
                            <li><a href="{{ route('branch.accommodation', request()->route('id')) }}">Accommodation</a></li>
                            <li><a href="{{ route('branch.restaurant', request()->route('id')) }}">Restaurant</a></li>
                            <li><a href="{{ route('branch.recreation', request()->route('id')) }}">Recreation</a></li>
                            <li><a href="{{ route('branch.meeting', request()->route('id')) }}">Meeting and Events</a></li>
                            <li><a href="{{ route('branch.gallery', request()->route('id')) }}">Gallery</a></li>
                            <li><a href="{{ route('branch.contact', request()->route('id')) }}">Contact</a></li>
                            <li><a href="#">Virtual Tour</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-column footer-contact">
                        <h3 class="footer-title">Contact</h3>
                        <p class="footer-contact-text">
                            {{$branch_data->address ?? ''}}
                        </p>
                        <div class="footer-contact-info">
                            <p class="footer-contact-phone"><span class="flaticon-call"></span> {{$branch_data->phone ?? ''}}</p>                            
                            <p class="footer-contact-phone" style="margin:0px 0px 0px 0px; line-height:0; font-size:20px;">
                            <span><img src="{{ asset('frontend') }}/img/icon/email.png" alt="" /></span>
                            <a href="mailto:{{$branch_data->email ?? ''}}">{{$branch_data->email ?? ''}}</a>
                            </p>
                        </div>
                        <div class="footer-about-social-list">
                            <a href="#"><i class="ti-instagram"></i></a>
                            <a href="#"><i class="ti-twitter"></i></a>
                            <a href="#"><i class="ti-youtube"></i></a>
                            <a href="https://www.facebook.com/Dmoresajekvalley"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a>
                            {{-- <a href="#"><img src="{{ asset('frontend') }}/img/restaurant/whatsapp.png" alt="" /></a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-bottom-inner">
                        <p class="footer-bottom-copy-right">© Copyright 2023 by <a href="#">Hsblco</a> All
                            Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="buy-now booknowMar" href="{{ route('branch.contact', request()->route('id') )}}" data-original-title="Online Hotel Reservation - Comming Soon!" data-toggle="tooltip">
        <img src="{{ asset('frontend') }}/img/booknow.png" class="popUpsize Desksize" >
    </a>
    <a class="buy-now logo360Mar" href="{{ route('branch.contact', request()->route('id') )}}" data-original-title="Online Hotel Reservation - Comming Soon!" data-toggle="tooltip" target="_blank">
        <img src="{{ asset('frontend') }}/img/logo360.png" class="popUpsize Desksize" >
    </a>
    <a class="buy-now packagesMar" href="{{ route('branch.special', request()->route('id') )}}" data-original-title="Online Hotel Reservation - Comming Soon!" data-toggle="tooltip">
        <img src="{{ asset('frontend') }}/img/packages.gif" class="popUpsize Desksize" >
    </a>
    {{--<a class="buy-now" style="margin-bottom: -40px;" href="{{ route('branch.special', request()->route('id') )}}" data-original-title="Online Hotel Reservation - Comming Soon!" data-toggle="tooltip" target="_blank">
        <img src="{{ asset('frontend') }}/img/live-chat.png" class="popUpsize Desksize" >
    </a>--}}
</footer>