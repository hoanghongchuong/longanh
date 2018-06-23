@extends('index')
@section('content')

<?php
$setting = Cache::get('setting');
$lang = Cache::get('lang');
$cateProducts = Cache::get('cateProducts');
$banner = DB::table('banner_content')->where('position',1)->get();
$lang = Cache::get('lang');
$biendich = Cache::get('biendich');
// dd($tintuc_moinhat);
?>

<section class="page-title">
    <div class="container">
        <div class="title">
            <p><span class="mgl-70 dash">@if($lang == 'vi') {{$biendich[31]->name_vi}} @elseif($lang == 'en') {{$biendich[31]->name_en}}  @endif</span></p>
            <h1 class="title-h">@if($lang == 'vi') Đối tác của Brity @elseif($lang == 'en') Customer of Brity @endif</h1>
        </div>
    </div>
</section>
<section class="client">
    <div class="container">
        <ul class="flex-center">
            @foreach($data as $item)
            <li>
                <a href="" title=""><img src="{{ asset('upload/banner/'.$item->photo) }}" alt="" title=""></a>
            </li>
            @endforeach
        </ul>
    </div>
</section>
@endsection