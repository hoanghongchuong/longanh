@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
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

                    <li class="vk-list__item active">Bảng giá</li>
                </ul>
            </nav>
        </div>

    </div>
    <!--./vk-breadcrumb-->    
    <div class="vk-page vk-page--price-table">
        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <div class="vk-price-table__box">
                        <h1 class="vk-page__heading">BẢNG GIÁ</h1>
                        <p>
                           <?php $gt = DB::table('about')->where('com', 'bang-gia')->first(); ?>
                           {!! $gt->content !!}
                        </p>

                        <ul class="vk-list vk-list--style-3">
                        	<?php $data = DB::table('banggia')->get(); ?>
                            @foreach($data as $item)
                            <li class="vk-list__item"><a href="{{url('bang-gia/'.$item->alias.'.html')}}" title="">{{$item->name}}</a></li>
							@endforeach
                        </ul>

                    </div> <!--./box-->

                </div> <!--./col-->
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="vk-price-table__box-1">
                        <a href="{{url('bang-gia/'.$data[0]->alias.'.html')}}" title="" class="vk-btn vk-btn--outline-danger">BẢNG GIÁ TẠI HÀ NỘI</a>
                        <a href="{{url('bang-gia/'.$data[1]->alias.'.html')}}" title="" class="vk-btn vk-btn--green-1 vk-btn--outline">BẢNG GIÁ TẠI
                            <br> TP. HỒ CHÍ MINH</a>
                        <img src="{{asset('public/images/price-table/map.png')}}" alt="" class="img-fluid">
                    </div> <!--./box-->
                </div>
            </div> <!--./row-->

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
<script>
    $('[data-slider="partner"]').slick({
            nextArrow: '<button  class="vk-btn vk-slider__arrow vk-slider__arrow--next"><img src="{{asset('public/images/icon/arrow-right-3.png')}}"></button>',
            prevArrow: '<button  class="vk-btn vk-slider__arrow vk-slider__arrow--prev"><img src="{{asset('public/images/icon/arrow-left-3.png')}}"></button>',
            slidesToShow: 5,
            swipeToSlide:true,
            autoplay:true,

            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                        arrows: false
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        arrows: false
                    }
                },
                {
                    breakpoint: 567,
                    settings: {
                        slidesToShow: 1,
                        arrows: false

                    }
                }
            ],
        })
</script>
@endsection