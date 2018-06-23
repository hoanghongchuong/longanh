@extends('index')
@section('content')

<?php
    $setting = Cache::get('setting');
    $about = Cache::get('about');
    $lang = Cache::get('lang');
    $biendich = Cache::get('biendich');
?>
<section class="banner">
    <img src="{{ asset('public/images/picture/banner-12.jpg')}}" alt="" title="">
</section>
<section class="news news-details pd-60">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="news-detail">
                    <h1>@if($lang == 'vi') {{ $news_detail->name }} @elseif($lang == 'en') {{ $news_detail->name_en }} @endif</h1>
                    <p class="date">Upload: {{ date('d/m/Y', strtotime($news_detail->created_at)) }}</p>
                    <div class="news-image"><img src="{{asset('upload/news/'.$news_detail->photo)}}" alt="@if($lang == 'vi') {{ $news_detail->name }} @elseif($lang == 'en') {{ $news_detail->name_en }} @endif" title="@if($lang == 'vi') {{ $news_detail->name }} @elseif($lang == 'en') {{ $news_detail->name_en }} @endif"> </div>
                    <p>@if($lang == 'vi') {!! $news_detail->content !!} @elseif($lang == 'en') {!! $news_detail->content_en !!} @endif</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-sticky">
                    <div class="search mgb-20">
                        <h5>TÌM KIẾM</h5>
                        <form>
                            <input type="text" placeholder="">
                            <button type="submit"><i class="fa fa-search"></i> </button>
                        </form>
                    </div>
                    <div class="news-hot mgb-20">
                        <h5>TIN NỔI BẬT</h5>
                        <ul class="ul-block">
                            @foreach($hot_news as $hot)
                            <li>
                                <div class="block-hori">
                                    <div class="hori-left">
                                        <a href="{{ url('tin-tuc/'.$hot->alias.'.html') }}" title=""><img src="{{asset('upload/news/'.$hot->photo)}}" alt="" title=""> </a>
                                    </div>
                                    <div class="hori-right">
                                        <p><a href="{{ url('tin-tuc/'.$hot->alias.'.html') }}" title="">@if($lang == 'vi') {{$hot->name}} @elseif($lang == 'en') {{$hot->name_en}} @endif</a> </p>
                                        <p class="date">Upload: {{date('d/m/Y', strtotime($hot->created_at))}}</p>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="galery">
                        <h5>@if($lang == 'vi') THƯ VIỆN ẢNH @elseif($lang == 'en') GALLERIES @endif</h5>
                        <ul class="flex-center">
                            <?php $gallaries = DB::table('lienket')->where('com','thu-vien')->get(); ?>
                            @foreach($gallaries as $g)
                            <li>
                                <a href="{{ asset('upload/hinhanh/'.$g->photo) }}" data-fancybox="images"><img src="{{ asset('upload/hinhanh/'.$g->photo) }}" alt="" title="" /></a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
