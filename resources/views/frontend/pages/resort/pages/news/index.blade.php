@extends('frontend.pages.resort.layouts.frontend_master')
@section('title','Luxury Hotel | News')
@section('content')
<!-- Header Banner -->
<div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="{{ asset('frontend') }}/img/slider/7.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left caption mt-90">
                <h5>Hotel Blog</h5>
                <h1>Our News</h1>
            </div>
        </div>
    </div>
</div>
<!-- News 2 -->
<section class="news2 section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        <div class="item">
                            <div class="post-img">
                                <a href="post.html"> <img src="{{ asset('frontend') }}/img/restaurant/2.jpg" alt=""> </a>
                                <div class="date">
                                    <a href="post.html"> <span>Dec</span> <i>02</i> </a>
                                </div>
                            </div>
                            <div class="post-cont">
                                <a href="news.html"><span class="tag">Restaurant</span></a>
                                <h5><a href="post.html">Historic restaurant renovated</a></h5>
                                <p>Hotel potenti fringilla pretium ipsum non blandit. Vivamus eget nisi non mi iaculis iaculis imperie quiseros sevin elentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis enesta mauris suscipit mis nec est aliquam, a tincidunt eros iacu suscipit risus eu ullamcorper fauibu.</p>
                                <div class="butn-dark"> <a href="post.html"><span>Read More</span></a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="item">
                            <div class="post-img">
                                <a href="post.html"> <img src="{{ asset('frontend') }}/img/spa/3.jpg" alt=""> </a>
                                <div class="date">
                                    <a href="post.html"> <span>Dec</span> <i>04</i> </a>
                                </div>
                            </div>
                            <div class="post-cont"> <a href="news.html"><span class="tag">Spa Center</span></a>
                                <h5><a href="post.html">Benefits of Spa Treatments</a></h5>
                                <p>Hotel potenti fringilla pretium ipsum non blandit. Vivamus eget nisi non mi iaculis iaculis imperie quiseros sevin elentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis enesta mauris suscipit mis nec est aliquam, a tincidunt eros iacu suscipit risus eu ullamcorper fauibu.</p>
                                <div class="butn-dark"> <a href="post.html"><span>Read More</span></a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="item">
                            <div class="post-img">
                                <a href="post.html"> <img src="{{ asset('frontend') }}/img/slider/7.jpg" alt=""> </a>
                                <div class="date">
                                    <a href="post.html"> <span>Dec</span> <i>06</i> </a>
                                </div>
                            </div>
                            <div class="post-cont">
                                <a href="news.html"><span class="tag">Hotel Design</span></a>
                                <h5><a href="post.html">Retro Lighting Design in The Hotels</a></h5>
                                <p>Hotel potenti fringilla pretium ipsum non blandit. Vivamus eget nisi non mi iaculis iaculis imperie quiseros sevin elentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis enesta mauris suscipit mis nec est aliquam, a tincidunt eros iacu suscipit risus eu ullamcorper fauibu.</p>
                                <div class="butn-dark"> <a href="post.html"><span>Read More</span></a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <!-- Pagination -->
                        <ul class="news-pagination-wrap align-center mb-30 mt-30">
                            <li><a href="blog2.html#"><i class="ti-angle-left"></i></a></li>
                            <li><a href="blog2.html#">1</a></li>
                            <li><a href="blog2.html#" class="active">2</a></li>
                            <li><a href="blog2.html#">3</a></li>
                            <li><a href="blog2.html#"><i class="ti-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="news2-sidebar row">
                    <div class="col-md-12">
                        <div class="widget search">
                            <form>
                                <input type="text" name="search" placeholder="Type here ...">
                                <button type="submit"><i class="ti-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="widget">
                            <div class="widget-title">
                                <h6>Recent Posts</h6>
                            </div>
                            <ul class="recent">
                                <li>
                                    <div class="thum"> <img src="{{ asset('frontend') }}/img/restaurant/2.jpg" alt=""> </div>
                                    <a href="post.html">Historic restaurant renovated</a>
                                </li>
                                <li>
                                    <div class="thum"> <img src="{{ asset('frontend') }}/img/spa/3.jpg" alt=""> </div>
                                    <a href="post.html">Benefits of Spa Treatments</a>
                                </li>
                                <li>
                                    <div class="thum"> <img src="{{ asset('frontend') }}/img/slider/7.jpg" alt=""> </div>
                                    <a href="post.html">Retro Lighting Design in The Hotels</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="widget">
                            <div class="widget-title">
                                <h6>Archives</h6>
                            </div>
                            <ul>
                                <li><a href="#">December 2023</a></li>
                                <li><a href="#">November 2023</a></li>
                                <li><a href="#">October 2023</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="widget">
                            <div class="widget-title">
                                <h6>Categories</h6>
                            </div>
                            <ul>
                                <li><a href="news.html"><i class="ti-angle-right"></i>Restaurant</a></li>
                                <li><a href="news.html"><i class="ti-angle-right"></i>Hotel Design</a></li>
                                <li><a href="news.html"><i class="ti-angle-right"></i>Span Center</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="widget">
                            <div class="widget-title">
                                <h6>Tags</h6>
                            </div>
                            <ul class="tags">
                                <li><a href="#">Restaurant</a></li>
                                <li><a href="#">Hotel</a></li>
                                <li><a href="#">Spa</a></li>
                                <li><a href="#">Health Club</a></li>
                                <li><a href="#">Luxury Hotel</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection