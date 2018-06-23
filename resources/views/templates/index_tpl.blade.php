@extends('index')
@section('content')

<?php
$setting = Cache::get('setting');
$lang = Cache::get('lang');
$cateProducts = Cache::get('cateProducts');
$banner = DB::table('banner_content')->where('position',1)->get();
$lang = Cache::get('lang');
$biendich = Cache::get('biendich');
$gioithieu = DB::table('about')->where('com', 'gioi-thieu')->first();
$sloganRoom = DB::table('about')->where('com', 'phong')->first();
?>

@include('templates.layout.slider')
<section class="about-index pd-30">
    <div class="container">
        <h1 class="title-index">@if($lang == 'vi') {{$biendich[5]->name_vi}} @elseif($lang == 'en') {{$biendich[5]->name_en}}  @endif</h1>
        <div class="about-image">
            <a href="" title="" class="zoom"><img src="{{asset('upload/hinhanh/'.$gioithieu->photo)}}" alt="" title=""> </a>
        </div>
        <p class="desc">@if($lang == 'vi') {{$gioithieu->mota}} @elseif($lang == 'en') {{$gioithieu->mota_en}} @endif</p>
        <p class="text-center"><a href="" title="" data-toggle="modal" data-target="#register-modal" class="btn-border inflex-center-center">@if($lang =='vi')ĐẶT PHÒNG @elseif($lang =='en') BOOK ROOM @endif</a> </p>
    </div>
</section>
<section class="room  pd-30">
    <div class="container">
        <h2 class="title-index">@if($lang == 'vi') phòng @elseif($lang == 'en') Room  @endif</h2>
        <div class="window">
        @foreach($hot_product as $k=>$hot)
            <div class="split-screen-cta @if($k%2==0)left-half @else right-half @endif">
                <a href="{{url('phong/'.$hot->alias)}}" title="" class="cta-content">
                    <span class=" left-arrow-dark inline-icon">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                       @if($lang == 'vi') {{$hot->name}} @elseif($lang == 'en') {{$hot->name_en}}  @endif
                    </span>
                </a>
            </div>
        @endforeach
            <!-- <div class="split-screen-cta right-half">
                <a href="chi-tiet-phong.html" title="" class="cta-content">
                    <span class=" right-arrow-dark inline-icon">
                        FAMILY SUITE
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </span>
                </a>
            </div> -->

        </div>
        <p class="desc">@if($lang == 'vi') {{ $sloganRoom->mota }} @elseif($lang == 'en') {{ $sloganRoom->mota_en }} @endif</p>
    </div>
</section>
<section class="service-index pd-30">
    <div class="container">
        <h3 class="title-index">@if($lang == 'vi') {{$biendich[8]->name_vi}} @elseif($lang == 'en') {{$biendich[8]->name_en}}  @endif</h3>
        <div class="row">
            @foreach($services as $service)
            <div class="col-md-4">
                <div class="item-service">
                    <div class="images-well zoom relative">
                        <a href="{{url('dich-vu/'.$service->alias.'.html')}}" target="_blank"><img src="{{asset('upload/news/'.$service->photo)}}" title="" alt=""></a>
                        <div class="absolute flex-center-center">
                            <a href="{{url('dich-vu/'.$service->alias.'.html')}}" title="" class="btn-border inflex-center-center">XEM CHI TIẾT</a>
                        </div>
                    </div>
                    <h3 class="text-center"><a href="{{url('dich-vu/'.$service->alias.'.html')}}" title="">@if($lang == 'vi') {{ $service->name }} @elseif($lang == 'en') {{ $service->name_en }} @endif</a></h3>
                    <div class="balance text-center">
                       @if($lang == 'vi') {{ $service->mota }} @elseif($lang == 'en') {{ $service->mota_en }} @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section class="news-index pd-30">
    <div class="container">
        <h4 class="title-index">@if($lang == 'vi') {{$biendich[3]->name_vi}} @elseif($lang == 'en') {{$biendich[3]->name_en}}  @endif</h4>
        <div class="news-slider owl-carousel slider-general">
            @foreach($hot_news as $hotNews)
            <div class="news-item text-center">
                <a href="{{ url('tin-tuc/'.$hotNews->alias.'.html') }}" title="@if($lang == 'vi'){{$hotNews->name}} @elseif($lang == 'en') {{$hotNews->name_en}}@endif"><img src="{{asset('upload/news/'.$hotNews->photo)}}" alt="@if($lang == 'vi'){{$hotNews->name}} @elseif($lang == 'en') {{$hotNews->name_en}}@endif" title="@if($lang == 'vi'){{$hotNews->name}} @elseif($lang == 'en') {{$hotNews->name_en}}@endif"> </a>
                <h4><a href="{{ url('tin-tuc/'.$hotNews->alias.'.html') }}" title="@if($lang == 'vi'){{$hotNews->name}} @elseif($lang == 'en') {{$hotNews->name_en}}@endif">@if($lang == 'vi'){{$hotNews->name}} @elseif($lang == 'en') {{$hotNews->name_en}}@endif</a> </h4>
                <p class="desc">@if($lang == 'vi'){{$hotNews->mota}} @elseif($lang == 'en') {{$hotNews->mota_en}}@endif</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section class="parten">
    <div class="container">
        <div class="parten-slider owl-carousel">
            @foreach($partners as $partner)
            <a href="{{$partner->url}}" target="_blank" title=""><img src="{{asset('upload/banner/'.$partner->photo)}}" alt="" title=""> </a>
            @endforeach
        </div>
    </div>
</section>
<!-- <footer></footer> -->

@endsection
