@extends('frontend.pages.resort.layouts.frontend_master')
@section('title','Luxury Hotel | News')
@section('content')

<section class="rooms1 section-padding bg-cream" data-scroll-index="1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-subtitle">Welcome D'More Resorts</div>
                <div class="section-title"> Resort</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="item">
                    <section class=" video-wrapper video section-padding bg-img bg-fixed" data-overlay-dark="5" data-background="{{asset('uploads/pictures/'.$item->featured_photo ?? '')}}">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 offset-md-2 text-center">
                                    <span>
                                        <i class="star-rating"></i>
                                        <i class="star-rating"></i>
                                        <i class="star-rating"></i>
                                        <i class="star-rating"></i>
                                        <i class="star-rating"></i>
                                    </span>
                                    <div class="section-subtitle"><span>{{$item->name ?? ''}}</span></div>
                                    <div class="section-title"><span>Promotional Video</span></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="text-center col-md-12">
                                    <a class="vid" controls href="{{asset('uploads/videos/'.$item->video ?? '' )}}">
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
                </div>
            </div>

            {{--<div class="col-md-6">
                <div class="item">
                    <div class="position-re o-hidden"><a href="{{ asset('frontend') }}/img/slider/2.jpg" data-lightbox="HOTEL">
            <img src="{{ asset('frontend') }}/img/slider/2.jpg" alt=""></a>
        </div>
        <span class="category"><a href="https://kuakata.hsblco.com/home" target="_blank">Resort </a></span>
        <div class="con">

            <h5><a href="https://kuakata.hsblco.com/home" target="_blank"> Hotel D'More Kuakata </a></h5>
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
                    <div class="permalink"><a href="https://kuakata.hsblco.com/home" target="_blank">Details <i class="ti-arrow-right"></i></a></div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="col-md-6">
        <div class="item">
            <div class="position-re o-hidden"><a href="{{ asset('frontend') }}/img/slider/3.jpg" data-lightbox="HOTEL">
                    <img src="{{ asset('frontend') }}/img/slider/3.jpg" alt=""></a></div>
            <span class="category"><a href="https://sreemongol.hsblco.com/home" target="_blank">Resort </a></span>
            <div class="con">

                <h5><a href="https://sreemongol.hsblco.com/home" target="_blank"> Hotel D'More Sreemangal </a></h5>
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
                        <div class="permalink"><a href="https://sreemongol.hsblco.com/home" target="_blank">Details <i class="ti-arrow-right"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="item">
            <div class="position-re o-hidden"><a href="{{ asset('frontend') }}/img/slider/4.jpg" data-lightbox="HOTEL">
                    <img src="{{ asset('frontend') }}/img/slider/4.jpg" alt=""></a></div>
            <span class="category"><a href="https://bandarban.hsblco.com/home" target="_blank">Resort </a></span>
            <div class="con">

                <h5><a href="https://bandarban.hsblco.com/home" target="_blank"> Hotel D'More Bandarban </a></h5>
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
                        <div class="permalink"><a href="https://bandarban.hsblco.com/home" target="_blank">Details <i class="ti-arrow-right"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="item">
            <div class="position-re o-hidden"><a href="{{ asset('frontend') }}/img/slider/5.jpg" data-lightbox="HOTEL">
                    <img src="{{ asset('frontend') }}/img/slider/5.jpg" alt=""></a></div>
            <span class="category"><a href="https://galesia.hsblco.com/home" target="_blank">Resort </a></span>
            <div class="con">

                <h5><a href="https://galesia.hsblco.com/home" target="_blank"> Galesia Hotel & Resort Ltd. </a></h5>
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
                        <div class="permalink"><a href="https://galesia.hsblco.com/home" target="_blank">Details <i class="ti-arrow-right"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="item">
            <div class="position-re o-hidden"><a href="{{ asset('frontend') }}/img/slider/6.jpg" data-lightbox="HOTEL">
                    <img src="{{ asset('frontend') }}/img/slider/6.jpg" alt=""></a></div>
            <span class="category"><a href="https://www.hotelthecoxtoday.com/" target="_blank">Resort </a></span>
            <div class="con">

                <h5><a href="https://www.hotelthecoxtoday.com/" target="_blank"> Hotel Cox Today </a></h5>
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
                        <div class="permalink"><a href="https://www.hotelthecoxtoday.com/" target="_blank">Details <i class="ti-arrow-right"></i></a></div>
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