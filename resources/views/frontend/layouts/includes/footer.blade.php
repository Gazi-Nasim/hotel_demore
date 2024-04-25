 <!-- Footer -->
 @php
 $footer_branch = App\Models\Backend\Branch::get();
 $general_infos = App\Models\Backend\General_info::first();
 $n=1;
 @endphp
 <footer class="footer">
     <div class="footer-top">
         <div class="container">
             <div class="row">
                 <div class="col-md-3">
                     <div class="footer-column footer-about">
                         <h3 class="footer-title">About Hotel</h3>
                         <p class="footer-about-text" style="text-align: justify;">{{$general_infos->about_full}}</p>
                         {{-- <div class="footer-language"> <i class="lni ti-world"></i>

                         </div> --}}
                     </div>
                 </div>
                 {{-- offset-md-1 --}}

                 <div class="col-md-3">
                     <div class="footer-column footer-contact">
                         <h3 class="footer-title">Contact Us</h3>
                         <div>
                             <p class="footer-contact-text">Dhaka Office: <br>House # 39, Road # 21 Block # B<br>
                                 Banani, Dhaka-1213</p>
                             <div class="footer-contact-info">
                                 <p class="footer-contact-phone"><span class="flaticon-call"></span> 02-55 03 51 57</p>
                                 <br />
                             </div>
                         </div>
                         <div>
                             <p class="footer-contact-text">Chattogram Office: <br>Pacific Tower (2nd Floor) 206/2017
                                 <br>Jamal Khan Road, Chattogram
                             </p>
                             <div class="footer-contact-info">
                                 <p class="footer-contact-phone"><span class="flaticon-call"></span> 02-33 33 88 582-86
                                 </p>
                             </div>
                         </div>
                         <div class="footer-about-social-list">
                             <a href="#"><i class="ti-instagram"></i></a>
                             <a href="#"><i class="ti-twitter"></i></a>
                             <a href="#"><i class="ti-youtube"></i></a>
                             <a href="https://www.facebook.com/Dmoresajekvalley"><i class="ti-facebook"></i></a>
                             <a href="#"><i class="flaticon-whatsapp"></i></a>

                         </div>
                     </div>
                 </div>

                 @if($n<=3) 
                 <div class="col-md-3">
                     <div class="footer-column footer-contact">
                         <h3 class="footer-title">Reservation</h3>
                         <div>
                             @foreach($footer_branch as $k=>$item)
                             @if($n<=3) <p class="footer-contact-text">{{$item->name}}<br>Helpline: {{$item->phone}}<br>
                                 {{$item->email}}
                                 </p><br />
                                 @endif
                                 @php $n=$n+1;
                                 $footer_branch2=$item;
                                 @endphp
                                 @endforeach
                         </div>
                     </div>
             </div>

             @endif
             @if($n>=4 && $n<=6)
             <div class="col-md-3">
                 <div class="footer-column footer-contact">                     
                     <div class="rsecond"><br />
                         @foreach($footer_branch2 as $k=>$item2)
                         @if($n>=4 && $n<=6) <p class="footer-contact-text">{{$item->name}}<br>Helpline: {{$item->phone}}<br>
                             {{$item->email}}
                             </p><br />
                             @endif
                             @php
                             $n=$n+1;
                             $footer_branch3=$item2;
                             @endphp
                             @endforeach

                     </div>
                 </div>
         </div>
         @endif
         @if($n>=7 && $n<=9)
         <div class="col-md-3">
             <div class="footer-column footer-contact">                 
                 <div class="rsecond"><br />
                     @foreach($footer_branch3 as $k=>$item3)
                     @if($n>=7 && $n<=9) <p class="footer-contact-text">{{$item3->name}}<br>Helpline: {{$item->phone}}<br>
                         {{$item3->email}}
                         </p><br />
                         @endif
                         @php $n=$n+1; @endphp
                         @endforeach

                 </div>
             </div>
     </div>

     @endif
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
     <a class="buy-now booknowMar" href="{{route('contact')}}" data-original-title="Online Hotel Reservation - Comming Soon!" data-toggle="tooltip" target="_blank">
         <img src="{{ asset('frontend') }}/img/booknow.png" style="width: 90px; height:100px;">
     </a>
     <a class="buy-now logo360Mar" href="{{route('tour')}}" data-original-title="Online Hotel Reservation - Comming Soon!" data-toggle="tooltip" target="_blank">
         <img src="{{ asset('frontend') }}/img/logo360.png" style="width: 90px; height:
         90px;">
     </a>
 </footer>