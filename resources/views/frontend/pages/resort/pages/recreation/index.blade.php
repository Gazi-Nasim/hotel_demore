@extends('frontend.pages.resort.layouts.frontend_master')
@section('title', 'Luxury Hotel | Restaurant')
@section('content')

<div id="recreation" style="margin-bottom: 150px"></div>
<section class="services section-padding" style="padding: 40px">
    <div class="container">
        @foreach($data as $key=>$item)
        @if( $key % 2 == 0)
        <div class="row">
            <div class="col-md-6 p-0 bg-cream valign animate-box" data-animate-effect="fadeInRight">
                <div class="content">
                    <div class="cont text-left">
                        <div class="info">
                            <h6>Modern</h6>
                        </div>
                        <h4>{{$item->name ?? ''}}</h4>
                        <p>{{$item->details ?? ''}}</p>
                        <div class="butn-dark">
                            <a href="{{route('branch.recreation',[request()->route('id'),$item->id])}}">
                                <span>Learn More</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-0 animate-box" data-animate-effect="fadeInLeft">
                <div class="img left">
                    <a href="#">
                        <img src="{{ asset('uploads/pictures/'.$item->featured_photo ?? '' )}}" alt="">
                    </a>
                </div>
            </div>
        </div>
        @else
        <div class="row">
            <div class="col-md-6 p-0 order1 animate-box" data-animate-effect="fadeInRight">
                <div class="img">
                    <a href="#"><img src="{{ asset('uploads/pictures/'.$item->featured_photo ?? '' )}}" alt=""></a>
                </div>
            </div>
            <div class="col-md-6 bg-cream p-0 order2 valign animate-box" data-animate-effect="fadeInLeft">
                <div class="content">
                    <div class="cont text-left">
                        <div class="info">
                            <h6>Experiences</h6>
                        </div>
                        <h4>{{$item->name ?? ''}}</h4>
                        <p>{{$item->details ?? ''}}</p>
                        <div class="butn-dark">
                            <a href="{{route('branch.recreation',[request()->route('id') ,$item->id])}}">
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
<div class="row">
    <hr>
</div>
@endsection