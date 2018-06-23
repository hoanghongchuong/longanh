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
                    <li class="vk-list__item"><a href="{{url('')}}"><i class="vk-icon fa fa-home"></i> @if($lang == 'vi') {{$biendich[0]->name_vi}} @elseif($lang == 'en') {{$biendich[0]->name_en}}  @endif</a></li>

                    <li class="vk-list__item active">@if($lang == 'vi') {{$biendich[31]->name_vi}} @elseif($lang == 'en') {{$biendich[31]->name_en}}  @endif</li>
                </ul>
            </div>

        </nav>
    </div>
    <!--./vk-breadcrumb-->   
    <div class="vk-page vk-page--relation">

        <div class="container">
            <h1 class="vk-page__heading">@if($lang == 'vi') {{$biendich[31]->name_vi}} @elseif($lang == 'en') {{$biendich[31]->name_en}}  @endif</h1>
            <div class="vk-relation__list row">
            @foreach($data as $item)
                <div class="col-sm-6 col-md-4 col-lg-3 _item">
                    <div class="vk-relation-item">
                        <div class="vk-img vk-img--cover">
                            <a href="{{url('quan-he-co-dong/'.$item->alias.'.html')}}" title="@if($lang == 'vi') {{$item->name}} @elseif($lang == 'en') {{$item->name_en}} @endif" class="vk-img__link">
                                <img src="{{asset('upload/news/'.$item->photo)}}" alt="Tổng quan" class="vk-img__img">
                            </a>
                        </div>

                        <div class="vk-relation-item__brief">
                            <h2 class="vk-relation-item__title"><a href="{{url('quan-he-co-dong/'.$item->alias.'.html')}}" title="@if($lang == 'vi') {{$item->name}} @elseif($lang == 'en') {{$item->name_en}} @endif">@if($lang == 'vi') {{$item->name}} @elseif($lang == 'en') {{$item->name_en}} @endif</a></h2>
                        </div>
                    </div> <!--./vk-relation-item-->
                </div>
            @endforeach
               
            </div>

        </div>

    </div><!--./page-->
    <!-- Button trigger modal -->

</section>
@endsection
