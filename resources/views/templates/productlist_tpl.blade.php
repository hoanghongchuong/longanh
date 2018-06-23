@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $cateProducts = Cache::get('cateProducts');
    $lang = Cache::get('lang');
    $biendich = Cache::get('biendich');
?>
<section class="vk-content">
    <div class="vk-breadcrumb">
        <nav class="container">
            <div class="vk-breadcrumb__wrapper">
                <ul class="vk-list vk-list--inline vk-breadcrumb__list">
                    <li class="vk-list__item"><a href="{{url('')}}"><i class="vk-icon fa fa-home"></i> @if($lang == 'vi') {{$biendich[0]->name_vi}} @elseif($lang == 'en') {{$biendich[0]->name_en}}  @endif</a></li>
                    
                    <li class="vk-list__item active">@if($lang == 'vi') {{$product_cate->name}} @elseif($lang == 'en') {{$product_cate->name_en}}  @endif</li>
                </ul>
            </div>

        </nav>
    </div>
    <!--./vk-breadcrumb-->    
    <div class="vk-page vk-page--shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 order-lg-2">
                                      
                    <div class="vk-shop__list row">
                        @foreach($products as $key=>$product)
                        <div class="col-sm-6 col-lg-4 _item">
                            <div class="vk-shop-item">
                                <div class="vk-img vk-img--mw100">
                                    <a href="javascrip:;" data-toggle="modal" data-target="#exampleModal{{$key}}" title="@if($lang == 'vi') {{$product->name}} @elseif($lang == 'en' ) {{$product->name_en}} @endif" class="vk-img__link" data-id="{{$product->id}}">
                                        <img src="{{asset('upload/product/'.$product->photo)}}" alt="@if($lang == 'vi') {{$product->name}} @elseif($lang == 'en') {{$product->name_en}} @endif" class="vk-img__img">
                                    </a>
                                </div>
                                <div class="vk-shop-item__brief">
                                    <h2 class="vk-shop-item__title">
                                        <a href="#" title="@if($lang == 'vi') {{$product->name}} @elseif($lang == 'en') {{$product->name_en}} @endif" data-toggle="modal" data-target="#exampleModal">@if($lang == 'vi') {{$product->name}} @elseif($lang == 'en') {{$product->name_en}} @endif</a>
                                    </h2>
                                </div>
                            </div> <!--./vk-shop-item-->
                        </div>
                        @endforeach
                        
                    </div>

                    <div class="pagi">{!! $products->links() !!}</div>
                    <!--./vk-breadcrumb-->
                </div>

                <div class="col-lg-3 order-lg-1">
                    <div class="vk-sidebar vk-sidebar--shop">
                        <div class="vk-sidebar__box">
                            <h2 class="vk-sidebar__title">@if($lang == 'vi') {{$biendich[9]->name_vi}} @elseif($lang == 'en') {{$biendich[9]->name_en}}  @endif</h2>
                            <div class="vk-sidebar__wrapper">
                                <ul class="vk-list vk-cate__main" id="parent">
                                    @foreach($cate_pro as $key=>$cateProduct)
                                    <li class="vk-list__item">
                                        <span class="vk-cate__title @if($key == 0) {{'active'}} @endif">
                                            <a href="{{url('san-pham/'.$cateProduct->alias)}}" title="@if($lang == 'vi') {{$cateProduct->name}} @elseif($lang == 'en') {{$cateProduct->name_en}} @endif">@if($lang == 'vi') {{$cateProduct->name}} @elseif($lang == 'en') {{$cateProduct->name_en}} @endif</a>
                                            <a data-toggle="collapse" href="#col{{$key}}" class="vk-cate__arrow" aria-expanded="true"><i class="_icon fa fa-angle-right"></i></a>
                                        </span>
                                        <?php $cateChilds = DB::table('product_categories')->where('status',1)->where('parent_id', $cateProduct->id)->get(); ?>
                                        <ul class="vk-list vk-cate__sub collapse @if($key == 0) {{'show'}} @endif"  id="col{{$key}}" data-parent="#parent">
                                            @foreach($cateChilds as $cateChild)
                                            <li class="vk-list__item"><a href="{{url('san-pham/'.$cateChild->alias)}}" title="">@if($lang == 'vi') {{$cateChild->name}} @elseif($lang == 'en') {{$cateChild->name_en}} @endif</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>

                        </div> <!--./box-->
                        <div class="vk-sidebar__box">
                            <h2 class="vk-sidebar__title">@if($lang == 'vi') {{$biendich[30]->name_vi}} @elseif($lang == 'en') {{$biendich[30]->name_en}}  @endif </h2>

                            <div class="vk-sidebar__wrapper">
                                <form action="{{route('postNewsletter')}}" method="post">
                                    {{ csrf_field() }}
                                    <div class="vk-form vk-form--register-news">
                                        @if($lang == 'vi')
                                        <p>Hãy nhập Email của bạn để nhận tin nhanh nhất từ chúng tôi</p>
                                        @elseif($lang =='en')
                                        <p>{{"Enter your email"}}</p>
                                        @endif
                                        <input type="email" name="txtEmail" placeholder="Enter your email" class="form-control">

                                        <div class="vk-button">
                                            <button class="vk-btn vk-form__button">@if($lang =='vi') {{"GỬI TIN"}} @elseif($lang =='en') {{"Send"}} @endif</button>
                                        </div>
                                    </div>
                                </form>
                            </div>


                        </div> <!--./box-->

                        <div class="vk-sidebar__box">
                            <h2 class="vk-sidebar__title">FOLLOW US</h2>
                            <div class="vk-sidebar__wrapper">
                                <ul class="vk-list vk-list--social-1">
                                    <li class="vk-list__item facebook"><a href="{{$setting->facebook}}" title=""><i class="_icon fa fa-facebook"></i>
                                        &nbsp; Facebook</a></li>
                                    <li class="vk-list__item twitter"><a href="{{$setting->twitter}}" title=""><i class="_icon fa fa-twitter"></i>
                                        &nbsp; Twitter</a></li>
                                    <li class="vk-list__item pinterest"><a href="{{$setting->skype}}" title=""><i class="_icon fa fa-pinterest"></i>
                                        &nbsp; Pinterest</a></li>
                                    <li class="vk-list__item google-plus"><a href="{{$setting->google}}" title=""><i class="_icon fa fa-google-plus"></i>
                                        &nbsp; Google+</a></li>
                                </ul>
                            </div>

                        </div> <!--./box-->

                    </div>
                </div>
            </div>
        </div>

    </div><!--./page-->
    <!-- Button trigger modal -->
    @foreach($products as $key=>$item)
    <div class="vk-modal modal fade" id="exampleModal{{$key}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg vk-modal--lg" role="document">
            <div class="modal-content vk-modal__content">
                <button type="button" class="vk-btn vk-modal__btn-close close" data-dismiss="modal" aria-label="Close">
                    x
                </button>

                <div class="vk-shop-modal">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="vk-shop-modal__left">
                                <div class="vk-shop-modal__slider vk-slider" data-slider="shop-modal">
                                    <?php 
                                        $album_hinh = DB::table('images')->select()->where('product_id',$item->id)->orderby('id','asc')->get();
                                    ?>
                                    @if(count($album_hinh)>0)
                                        @foreach($album_hinh as $album)
                                        <div class="vk-img vk-img--mw100">
                                            <img src="{{asset('upload/hasp/'.$album->photo)}}" alt="">
                                        </div>
                                        @endforeach
                                    @else
                                        <img src="{{asset('upload/product/'.$item->photo)}}" alt="">
                                    @endif
                                </div>
                            </div> <!--./left-->
                        </div> <!--./col-->
                        <div class="col-lg-6">
                            <div class="vk-shop-modal__right">

                                <div class="vk-shop-modal__item">
                                    <h3 class="vk-shop-modal__title">@if($lang =='vi') {{$item->name}} @elseif($lang=='en') {{$item->name_en}} @endif</h3>
                                    <p class="vk-shop-modal__text">
                                        
                                        @if($lang =='vi') {!! $item->mota !!} @elseif($lang=='en') {!! $item->mota_en !!} @endif
                                    </p>
                                </div>

                            </div>
                        </div> <!--./col-->

                    </div>
                </div>

            </div>
        </div>
    </div>
    @endforeach
</section>
@endsection
