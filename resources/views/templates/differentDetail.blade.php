@extends('index')
@section('content')

<?php
    $setting = Cache::get('setting');
    $about = Cache::get('about');
    $lang = Cache::get('lang');
    $biendich = Cache::get('biendich');
?>
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
                    <li class="vk-list__item"><a href="news.html">@if($lang == 'vi') {{$biendich[3]->name_vi}} @elseif($lang == 'en') {{$biendich[3]->name_en}}  @endif</a></li>

                    <li class="vk-list__item active">@if($lang == 'vi') {{$news_detail->name}} @elseif ($lang == 'en') {{$news_detail->name_en}} @endif</li>
                </ul>
            </div>

        </nav>
    </div>
    <!--./vk-breadcrumb-->    
    <div class="vk-page vk-page--news">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="vk-news__left">
                        <h1 class="vk-page__heading vk-page__heading--news-detail">@if($lang == 'vi') {{$news_detail->name}} @elseif ($lang == 'en') {{$news_detail->name_en}} @endif</h1>
                        <p class="vk-news-item__meta vk-news-item__meta--detail"><span><i class="fa fa-user"></i> Post by: JSC Thuận Đức</span>
                            <span></span></p>
                        <div class="vk-news-detail__content">
                            @if($lang == 'vi') {!! $news_detail->content !!} @elseif ($lang == 'en') {!! $news_detail->content_en !!} @endif
                        </div> <!--./news-content-->

                        <div class="vk-news__related">
                            <h3 class="vk-news-related__heading">@if($lang == 'vi') {{$biendich[17]->name_vi}} @elseif($lang == 'en') {{$biendich[17]->name_en}}  @endif</h3>
                            <ul class="vk-list vk-list--style-2">
                                @foreach($tinkhac as $tk)
                                <li class="vk-list__item"><a href="{{url('tin-tuc/'.$tk->alias.'.html')}}" title="@if($lang == 'vi') {{$tk->name}} @elseif ($lang == 'en') {{$tk->name_en}} @endif">@if($lang == 'vi') {{$tk->name}} @elseif ($lang == 'en') {{$tk->name_en}} @endif</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="vk-news__left">
                        <div class="vk-sidebar">
                            <div class="vk-sidebar__box">
                                <?php $adv = DB::table("lienket")->where('com','chuyen-muc')->first(); ?>
                                <a href="{{$adv->link}}"><img src="{{asset('upload/hinhanh/'.$adv->photo)}}" alt="" class="img-fluid"></a>
                            </div> <!--./box-->

                            <div class="vk-sidebar__box">
                                <h3 class="vk-sidebar__heading">@if($lang == 'vi'){{"Tin tức mới nhất"}} @elseif($lang =='en') {{"Latest News"}} @endif</h3>
                                    
                                <div class="vk-news-item vk-news-item--sidebar">
                                    <div class="vk-img vk-img--cover">
                                        <a href="{{url('tin-tuc/'.$news[0]->alias.'.html')}}" title="@if($lang == 'vi') {{$news[0]->name}} @elseif($lang == 'en') {{$news[0]->name_en}} @endif" class="vk-img__link">
                                            <img src="{{asset('upload/news/'.$news[0]->photo)}}" alt="@if($lang == 'vi') {{$news[0]->name}} @elseif($lang == 'en') {{$news[0]->name_en}} @endif" class="vk-img__img">
                                        </a>
                                    </div>
                                    <div class="vk-news-item__brief">
                                        <h2 class="vk-news-item__title"><a href="news-detail.html" title="@if($lang == 'vi') {{$news[0]->name}} @elseif($lang == 'en') {{$news[0]->name_en}} @endif">@if($lang == 'vi') {{$news[0]->name}} @elseif($lang == 'en') {{$news[0]->name_en}} @endif</a></h2>
                                        <p class="vk-news-item__meta"><span><i class="fa fa-user"></i> Post by: JSC Thuận Đức</span> </p>
                                        <p class="vk-news-item__text">@if($lang == 'vi') {{$news[0]->mota}} @elseif($lang == 'en') {{$news[0]->mota_en}} @endif</p>
                                    </div>
                                </div>
                                <ul class="vk-list vk-list--style-1">
                                    @for($i=1; $i < count($news); $i++)
                                    <li class="vk-list__item"><a href="{{url('tin-tuc/'.$news[$i]->alias.'.html')}}" title="@if($lang == 'vi') {{ $news[$i]->name }} @elseif($lang == 'en') {{ $news[$i]->name_en }} @endif">@if($lang == 'vi') {{ $news[$i]->name }} @elseif($lang == 'en') {{ $news[$i]->name_en }} @endif</a></li>
                                    @endfor
                                </ul>
                            </div> 

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div><!--./page-->

</section>
@endsection

@endsection
