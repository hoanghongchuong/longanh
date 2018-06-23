@extends('index')
@section('content')

<?php
    $setting = Cache::get('setting');
    $about = Cache::get('about');
    $lang = Cache::get('lang');
    $biendich = Cache::get('biendich');
?>
<section class="vk-content">
    <div class="vk-breadcrumb">
        <nav class="container">
            <div class="vk-breadcrumb__wrapper">
                <ul class="vk-list vk-list--inline vk-breadcrumb__list">
                    <li class="vk-list__item"><a href="index.html"><i class="vk-icon fa fa-home"></i> @if($lang == 'vi') {{$biendich[0]->name_vi}} @elseif($lang == 'en') {{$biendich[0]->name_en}}  @endif</a></li>

                    <li class="vk-list__item active">@if($lang == 'vi') {{$biendich[32]->name_vi}} @elseif($lang == 'en') {{$biendich[32]->name_en}}  @endif </li>
                </ul>
            </div>

        </nav>
    </div>
    <!--./vk-breadcrumb-->    
    <div class="vk-page vk-page--relation">

        <div class="container">
            <h1 class="vk-page__heading">@if($lang == 'vi') {{$biendich[26]->name_vi}} @elseif($lang == 'en') {{$biendich[26]->name_en}}  @endif </h1>
            <div class="vk-relation__list row">
                @foreach($data as $item)
                <div class="col-sm-6 col-lg-4 _item">
                    <div class="vk-compare-item">
                        <div class="vk-img vk-img--cover">
                            <a href="{{ url('su-khac-biet/'.$item->alias.'.html') }}" title="@if($lang == 'vi'){{$item->name}} @elseif($lang =='en') {{$item->name_en}} @endif" class="vk-img__link">
                                <img src="{{asset('upload/news/'.$item->photo)}}" alt="@if($lang == 'vi'){{$item->name}} @elseif($lang =='en') {{$item->name_en}} @endif" class="vk-img__img">
                            </a>
                        </div>
                        <div class="vk-compare-item__brief">
                            <h2 class="vk-compare-item__title"><a href="{{ url('su-khac-biet/'.$item->alias.'.html') }}" title="Tiêu đề  sự khác biệt">@if($lang == 'vi'){{$item->name}} @elseif($lang =='en') {{$item->name_en}} @endif</a></h2>
                        </div>
                    </div> <!--./vk-compare-item-->
                </div>
                @endforeach
            </div>

        </div>

    </div><!--./page-->
    <!-- Button trigger modal -->

</section>
@endsection
