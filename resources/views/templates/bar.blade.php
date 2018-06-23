@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $about = Cache::get('about');
    $lang = Cache::get('lang');
    $biendich = Cache::get('biendich');
    $banner = DB::table('banner_content')->where('position', 6)->first();
?>
<section class="banner">
    <img src="{{ asset('upload/banner/'.$banner->image)}}" alt="" title="">
</section>
<section class="room-nav">
    <div class="container">
        <ul class="nav nav-tabs flex-center-center" role="tablist">
            @foreach($bar as $k=>$b)
            <li class="nav-item">
                <a class="nav-link @if($k==0)active @endif" href="#bar-{{$k}}" role="tab" data-toggle="tab">
                @if($lang =='vi')
                    {{$b->name}}
                @elseif($lang =='en')
                    {{$b->name_en}}
                @endif
                </a>
            </li>
            @endforeach
            
        </ul>
    </div>
</section>
<section class="bar-sec pd-30">
    <div class="container">
        <div class="tab-content">
            @foreach($bar as $k=>$b)
            <div role="tabpanel" class="tab-pane fade in @if($k==0)active show @endif " id="bar-{{$k}}">
                <h1 class="title-page">@if($lang =='vi'){{$b->name}} @elseif($lang =='en') {{$b->name_en}} @endif</h1>
                <div class="detail">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="bar-slider owl-carousel slider-general">
                                <?php $albums = DB::table('images')->where('service_id', $b->id)->get(); ?>
                                @if(count($albums) > 0)
                                @foreach($albums as $album)
                                <p><img src="{{asset('upload/service/'.$album->photo)}}" alt="" title=""> </p>
                                @endforeach
                                @else
                                <p><img src="{{asset('upload/news/'.$b->photo)}}" alt="" title=""> </p>
                                @endif                       
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bar-text">
                                @if($lang =='vi'){!!$b->content!!} @elseif($lang =='en') {!!$b->content_en!!} @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             @endforeach
        </div>
    </div>
</section>
@endsection