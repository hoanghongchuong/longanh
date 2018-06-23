@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $about = Cache::get('about');
    $lang = Cache::get('lang');
    $biendich = Cache::get('biendich');
    $banner = DB::table('banner_content')->where('position', 7)->first();
?>
<section class="banner">
    <img src="{{ asset('upload/banner/'.$banner->image)}}" alt="" title="">
</section>
<section class="rooms">
    <div class="container">
        <div class="news-item text-center">
            <a href="{{ url('phong/'.$productHot->alias.'.html') }}" title="{{ $productHot->name }}" class=""><img src="{{ asset('upload/product/'. $productHot->photo)}}" alt="" title=""> </a>
            <h4><a href="{{ url('phong/'.$productHot->alias.'.html') }}" title="{{ $productHot->name }}">{{ $productHot->name }}</a> </h4>
                <p class="desc">{{ $productHot->mota }}
            </p>
        </div>
        <div class="row">
            @foreach($products as $item)
            <div class="col-md-6">
                <div class="news-item text-center">
                    <a href="{{ url('phong/'.$item->alias.'.html') }}" title="" class="zoom"><img src="{{asset('upload/product/'.$item->photo)}}" alt="" title=""> </a>
                    <h4><a href="{{ url('phong/'.$item->alias.'.html') }}" title="">@if($lang == 'vi') {{$item->name}} @elseif($lang == 'en') {{$item->name_en}} @endif</a> </h4>
                    <p class="desc">@if($lang == 'vi') {{$item->mota}} @elseif($lang == 'en') {{$item->mota_en}} @endif</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
