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
                   
                    <li class="vk-list__item"><a href="{{ url('co-hoi-viec-lam') }}">@if($lang == 'vi'){{"Cơ hội việc làm"}} @elseif($lang =='en') {{"Jobs"}} @endif</a></li>

                    <li class="vk-list__item active">@if($lang =='vi') {{$data->name}} @elseif($lang == 'en') {{$data->name_en}} @endif</li>
                </ul>
            </div>

        </nav>
    </div>
    <!--./vk-breadcrumb-->    
    <div class="vk-page vk-page--recruitment">

        <div class="container">
            <div class="vk-recruitment__detail">
                <h1 class="vk-recruitment__title">@if($lang =='vi') {{$data->name}} @elseif($lang == 'en') {{$data->name_en}} @endif</h1>
                <div class="row">
                    <div class="col-lg-3 order-lg-2">
                        <div class="vk-recruitment__brief">
                            <div class="vk-recruitment__brief-top">
                                @if($lang == 'vi') {!! $data->mota !!} @elseif($lang == 'en') {!! $data->mota_en !!} @endif

                            </div>
                            <div class="vk-recruitment__brief-bot">Ứng tuyển liên hệ: <a href="callto:{{$setting->phone}}" title="">{{$setting->phone}}</a></div>
                        </div>
                    </div>
                    <div class="col-lg-9 order-lg-1">
                        <div class="vk-recruitment__content">
                            @if($lang == 'vi') {!! $data->content !!} @elseif($lang == 'en') {!! $data->content_en !!} @endif
                        </div> <!--./content-->
                    </div>
                </div>
                <div class="vk-recruitment__related">
                    <a href="{{url('co-hoi-viec-lam')}}" title=""><i class="fa fa-forward"></i> @if($lang == 'vi') {{"Xem thêm những công việc khác"}} @elseif($lang == 'en') {{"Read more jobs"}} @endif</a>
                </div>

            </div>
        </div>
        <!-- /.container -->

    </div><!--./page-->
    <!-- Button trigger modal -->

</section>
<!--./content-->
@endsection
