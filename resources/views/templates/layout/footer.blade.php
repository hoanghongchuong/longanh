<?php
    $setting = Cache::get('setting');
    $lang = Cache::get('lang');
    $about = Cache::get('about');
    $cateProducts = Cache::get('cateProducts');
?>
<section class="footer-info">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="" title=""><img src="{{asset('upload/hinhanh/'.$setting->photo)}}" alt="" title=""> </a>
            </div>
            <div class="col-md-4 pdt">
                <h5>@if($lang == 'vi') {{$setting->company}} @elseif($lang == 'en') {{$setting->company_en}}  @endif</h5>
                <p>@if($lang == 'vi') {{$setting->address}} @elseif($lang == 'en') {{$setting->address_en}}  @endif</p>
            </div>
            <div class="col-md-5 pdt">
                <p class="mgt-5">{{$setting->email}} </p>
                <p>{{$setting->phone}}</p>
            </div>
        </div>
    </div>
</section>
<section class="footer-address">
    <div class="container">
        <h4 class="text-center">@if($lang == 'vi') {{$biendich[28]->name_vi}} @elseif($lang == 'en') {{$biendich[28]->name_en}}  @endif</h4>
        <ul class="flex-center-center">
            <li><a href="{{$setting->facebook}}" title="" class="fa fa-facebook"></a> </li>
            <li><a href="{{$setting->twitter}}" title="" class="fa fa-twitter"></a> </li>
            <li><a href="{{$setting->google}}" title="" class="fa fa-google-plus"></a> </li>
            <li><a href="{{$setting->skype}}" title="" class="fa fa-skype"></a> </li>
        </ul>
        <ul class="flex-center-center footer-nav">
            <li><a href="{{ url('') }}" title="">@if($lang == 'vi') {{$biendich[0]->name_vi}} @elseif($lang == 'en') {{$biendich[0]->name_en}}  @endif</a> </li>
            <li><a href="{{ url('phong') }}" title="">@if($lang == 'vi') phòng @elseif($lang == 'en') room  @endif</a> </li>
            <li><a href="{{ url('bar') }}" title="">@if($lang == 'vi') bar nhà hàng @elseif($lang == 'en') bar restaurant  @endif</a> </li>
            <li><a href="{{ url('dich-vu') }}" title="">@if($lang == 'vi') {{$biendich[8]->name_vi}} @elseif($lang == 'en') {{$biendich[8]->name_en}}  @endif</a> </li>
            <li><a href="{{ url('tin-tuc') }}" title="">@if($lang == 'vi') {{$biendich[3]->name_vi}} @elseif($lang == 'en') {{$biendich[3]->name_en}}  @endif</a> </li>
            <li><a href="{{ url('lien-he') }}" title="">@if($lang == 'vi') {{$biendich[4]->name_vi}} @elseif($lang == 'en') {{$biendich[4]->name_en}}  @endif</a> </li>
        </ul>
        <p class="text-center">All rights reserved 2018 © LongAnh — Hotel</p>
    </div>
</section>
<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.6&appId=124844007858325";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>