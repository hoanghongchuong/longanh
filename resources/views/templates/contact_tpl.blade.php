@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $about = DB::table('about')->where('com', 'lien-he')->first();
    $lang = Cache::get('lang');
    $biendich = Cache::get('biendich');
?>
<section class="banner">
    <img src="{{ asset('public/images/picture/banner-10.jpg')}}" alt="" title="">
</section>
<section class="contact pd-60">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="info text-center">
                    <p><i class="fa fa-map-marker"></i> </p>
                    <p>@if($lang == 'vi') Địa chỉ @elseif($lang == 'en') Address @endif</p>
                    <p>@if($lang == 'vi') {{$setting->address}} @elseif($lang == 'en') {{$setting->address_en}}  @endif</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info text-center">
                    <p><i class="fa fa-phone"></i> </p>
                    <p>@if($lang == 'vi') Điện thoại @elseif($lang == 'en') Phone @endif</p>
                    <p>{{$setting->phone}}</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info text-center">
                    <p><i class="fa fa-envelope"></i> </p>
                    <p>Email</p>
                    <p>{{$setting->email}}</p>
                </div>
            </div>
        </div>
        <form class="form-contact" method="post" action="{{ route('postContact') }}">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <h1 class="text-center">@if($lang == 'vi') GỬI TIN NHẮN @elseif($lang == 'en') SEND MESSAGE  @endif</h1>
                    <input type="text" name="name" placeholder="@if($lang == 'vi') HỌ VÀ TÊN @elseif($lang == 'en') FULLNAME  @endif">
                    <input type="number" name="phone" placeholder="@if($lang == 'vi') SỐ ĐIỆN THOẠI @elseif($lang == 'en') PHONE  @endif">
                    <input type="email" name="email" placeholder="EMAIL">
                    <textarea placeholder="@if($lang == 'vi') NỘI DUNG @elseif($lang == 'en') CONTENT  @endif" name="content"></textarea>
                    <p class="text-center"><button type="submit">@if($lang == 'vi') GỬI TIN @elseif($lang == 'en') SEND MESSAGE  @endif </button></p>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection
