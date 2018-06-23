@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $lang = Cache::get('lang');
    $biendich = Cache::get('biendich');
?>
<section class="page-title">
    <div class="container">
        <div class="title">
            <p><span class="mgl-70 dash">@if($lang =='vi') {{"Tuyển dụng"}} @elseif($lang =='en') {{"Recruiment"}} @endif</span></p>
            <h2 class="title-h">@if($lang == 'vi') {!! $slogan->mota !!} @elseif($lang =='en') {!! $slogan->mota_en !!} @endif</h2>
        </div>
    </div>
</section>
<section class="join">
    <div class="container">
        @foreach($tintuc as $k => $item)
        <div class="join-item">
            <div class="row">
                <div class="col-md-4 @if($k % 2 == 0) order-2 @endif">
                    <a href="{{url('tuyen-dung/'.$item->alias.'.html')}}" title="@if($lang == 'vi') {{$item->name}} @else($lang =='en') {{$item->name_en}} @endif" class="zoom"><img src="{{asset('upload/news/'.$item->photo)}}" alt="" title=""> </a>
                </div>
                <div class="col-md-8 flex-center @if($k % 2 == 0) order-1 @endif">
                    <div class="join-text">
                        <h4 class="text-uppercase"><a href="{{url('tuyen-dung/'.$item->alias.'.html')}}" title="@if($lang == 'vi') {{$item->name}} @elseif($lang =='en') {{$item->name_en}} @endif">@if($lang == 'vi') {{$item->name}} @else($lang =='en') {{$item->name_en}} @endif</a> </h4>
                        <p>@if($lang == 'vi') {{$item->mota}} @elseif($lang =='en') {{$item->mota_en}} @endif <a href="{{url('tuyen-dung/'.$item->alias.'.html')}}" title="@if($lang == 'vi') {{$item->name}} @else($lang =='en') {{$item->name_en}} @endif"><i class="fa fa-long-arrow-right"></i></a></p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection
