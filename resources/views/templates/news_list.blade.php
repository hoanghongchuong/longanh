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

                    <li class="vk-list__item active">@if($lang == 'vi') {{$biendich[3]->name_vi}} @elseif($lang == 'en') {{$biendich[3]->name_en}}  @endif</li>
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
                        <h1 class="vk-page__heading">@if($lang == 'vi') {{$tintuc_cate->name}} @elseif($lang == 'en') {{$tintuc_cate->name_en}} @endif</h1>
                        <div class="vk-news__list row vk-news__list--fix-top">
						@foreach($tintuc as $item)
                            <div class="col-sm-6 col-md-4 _item">
                                <div class="vk-news-item">
                                    <div class="vk-img vk-img--cover">
                                        <a href="{{ url('tin-tuc/'.$item->alias.'.html') }}" title="@if($lang == 'vi') {{$item->name}} @elseif($lang == 'en') {{$item->name_en}} @endif" class="vk-img__link">
                                            <img src="{{asset('upload/news/'.$item->photo)}}" alt="@if($lang == 'vi') {{$item->name}} @elseif($lang == 'en') {{$item->name_en}} @endif" class="vk-img__img">
                                        </a>
                                    </div>

                                    <div class="vk-news-item__brief">
                                        <h2 class="vk-news-item__title"><a href="{{ url('tin-tuc/'.$item->alias.'.html') }}" title="@if($lang == 'vi') {{$item->name}} @elseif($lang == 'en') {{$item->name_en}} @endif">@if($lang == 'vi') {{$item->name}} @elseif($lang == 'en') {{$item->name_en}} @endif</a></h2>
                                        <p class="vk-news-item__meta"><span><i class="fa fa-user"></i> Post by: JSC Thuận Đức</span>
                                            <span></p>
                                        <p class="vk-news-item__text">@if($lang == 'vi') {{$item->mota}} @elseif($lang == 'en') {{$item->mota_en}} @endif</p>
                                    </div>
                                </div>
                            </div>
						@endforeach
                            
                        </div>
						{!! $tintuc->links() !!}
                        
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