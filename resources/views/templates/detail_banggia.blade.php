@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $cateProducts = Cache::get('cateProducts');
?>
<section class="vk-content">
    <div class="vk-breadcrumb">
        <div class="vk-breadcrumb__banner">
            <div class="vk-img vk-img--cover">
                <img src="{{asset('public/images/banner/banner-1.jpg')}}" alt="" class="">
            </div>
        </div>
        <div class="vk-breadcrumb__content">
            <nav class="container">
                <ul class="vk-list vk-list--inline vk-list--breadcrumb">
                    <li class="vk-list__item"><a href="{{url('')}}">Trang chủ</a></li>
                    <li class="vk-list__item"><a href="{{url('bang-gia')}}">Bảng giá</a></li>

                    <li class="vk-list__item active">{{$data->name}}</li>
                </ul>
            </nav>
        </div>

    </div>
    <!--./vk-breadcrumb-->   
    <div class="vk-page vk-page--price-table">
        <div class="container">
            <!-- <h1 class="vk-page__heading">{{$data->name}}</h1> -->
            <div class="row">
                <div class="col-lg-10">
                    <div class="">{!! $data->content !!}</div>
                    <div class="vk-button text-center">
                        <a href="{{asset('upload/document/'.$data->doc)}}" title="Download"><img src="{{asset('public/images/icon/download.png')}}" alt=""></a>
                    </div>

                    <div class="vk-comment">
                        <div class="fb-comments" data-href="{{url('tin-tuc/'.$data->alias.'.html')}}" data-width="100%" data-numposts="5"></div>
                    </div>
                </div> <!--./col-->

                <div class="col-lg-2">
                    <aside class="vk-sidebar">
                        <div class="vk-sidebar__box">
                            <nav class="vk-shop__nav">
                                <ul class="vk-list vk-shop__nav vk-shop__nav--mod-1">
                                    @foreach($cateProducts as $cate)
                                    <li class="vk-list__item"><a href="{{url('san-pham/'.$cate->alias)}}" title="">{{$cate->name}}</a></li>
                                    @endforeach
                                </ul>
                            </nav> <!--./nav-->
                        </div> <!--./box-->

                        <div class="vk-sidebar__box">
                            <div class="vk-sidebar__box d-none d-lg-block">
                                <div class="vk-ads vk-img">
                                    <a href="#" title="">
                                        <img src="{{asset('public/images/ads/ads-1.jpg')}}" alt="" >
                                    </a>
                                </div>
                            </div><!--./box-->
                        </div> <!--./box-->

                    </aside> <!--./sidebar-->
                </div> <!--./col-->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div> <!--./page-->

    <div class="vk-partner animation fadeIn">

        <div class="container">
            <div class="vk-partner__list row vk-slider" data-slider="partner">
                <?php $partners = DB::table('partner')->where('status',1)->orderBy('id','desc')->get(); ?>
                @foreach($partners as $partner)
                <div class="col-lg-2 _item">
                    <div class="vk-partner__item">
                        <div class="vk-img--mw100">
                            <img src="{{asset('upload/banner/'.$partner->photo)}}" alt="">
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div><!-- /.container -->
    </div> <!--./partner-->

    <div class="vk-map">
       {!! $setting->iframemap !!}
    </div>

</section>
@endsection