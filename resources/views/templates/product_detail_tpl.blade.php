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
<section class="room-nav">
    <div class="container">
        <ul class="nav nav-tabs flex-center-center" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" href="#room" role="tab" data-toggle="tab">@if($lang == 'vi') PHÒNG @elseif($lang =='en') ROOM @endif</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#price" role="tab" data-toggle="tab">@if($lang == 'vi') BẢNG GIÁ @elseif($lang =='en') PRICE @endif</a>
            </li>
        </ul>
    </div>
</section>
<section class="room-detail pd-30">
    <div class="container">
        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in show active" id="room">
                <h1 class="title-page">@if($lang == 'vi'){{$product_detail->name}} @elseif($lang =='en') {{$product_detail->name_en}} @endif</h1>
                <p class="desc text-center">@if($lang == 'vi') {{ $product_detail->mota }} @elseif($lang =='en') {{ $product_detail->mota_en }} @endif</p>
                <div class="room-image">
                    <div class="room-slider owl-carousel slider-general">
                        <?php $albums = DB::table('images')->where('product_id', $product_detail->id)->get(); ?>
                        @if(count($albums) > 0)
                            @foreach($albums as $album)
                            <p><img src="{{asset('upload/hasp/'.$album->photo)}}" alt="" title=""> </p>
                            @endforeach
                            @else
                            <p><img src="{{asset('upload/product/'.$product_detail->photo)}}" alt="" title=""> </p>
                        @endif
                    </div>
                </div>
                <p class="desc">@if($lang == 'vi'){!! $product_detail->content !!} @elseif($lang =='en') {!! $product_detail->content_en !!} @endif</p>
                <p class="text-center" style="margin-top: 20px;"><a href="" title="" class="btn-border inflex-center-center" data-toggle="modal" data-target="#register-modal">@if($lang == 'vi')ĐẶT PHÒNG @elseif($lang =='en') BOOK ROOM @endif</a> </p>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="price">
                {!! $product_detail->banggia !!}
            </div>
        </div>
    </div>
</section>
<section class="room room-related">
    <div class="window">
        @foreach($anotherRoom as $k => $room)
        <div class="split-screen-cta @if($k%2==0)left-half @else right-half @endif">
            <a href="{{ url('phong/'.$room->alias.'.html') }}" title="" class="cta-content">
                <span class=" left-arrow-dark inline-icon">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                    @if($lang =='vi') {{$room->name}} @elseif($lang =='en') {{$room->name_en}} @endif
                </span>
            </a>
        </div>
        @endforeach
        
    </div>
</section>
@endsection
