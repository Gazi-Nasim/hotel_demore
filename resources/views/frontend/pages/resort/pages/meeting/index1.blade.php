@extends('frontend.pages.resort.layouts.frontend_master')
@section('title', 'Luxury Hotel | Restaurant')

@section('content')
<div id="recreation" style="margin-bottom: 150px"></div>
<section class="services section-padding" style="padding: 40px">
    <div class="container">
        <div class="row">
            <div class="col-md-6 p-0 bg-cream valign animate-box" data-animate-effect="fadeInRight">
                <div class="content">
                    <div class="cont text-left">
                        <div class="info">
                            <h6>Modern</h6>
                        </div>
                        <h4>{{$data->name ?? ''}}</h4>
                        <p>{{$data->details ?? ''}}</p>
                        {{--<div class="butn-dark">
                            <a href="{{route('branch.meeting',[request()->route('id'),$data->id])}}">
                                <span>Learn More</span>
                            </a>
                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-0 animate-box" data-animate-effect="fadeInLeft">
                <div class="img left">
                    <a href="#">
                        <img src="{{ asset('uploads/pictures/'.$data->featured_photo ?? '' )}}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="row">
    <hr>
</div>
@endsection