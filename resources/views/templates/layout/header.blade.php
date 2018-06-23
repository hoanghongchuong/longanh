<?php
    $setting = Cache::get('setting');
    $menu_top = Cache::get('menu_top');
    $cateProducts = Cache::get('cateProducts');
    $about = Cache::get('about');
    $gioithieu = DB::table('gioithieu')->orderBy('id','desc')->get();
    $lang = Cache::get('lang');
    $biendich = Cache::get('biendich');
    // dd($com);
?>

<header>
    <section class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="logo">
                        <a href="{{url('')}}" title=""><img src="{{asset('upload/hinhanh/'.$setting->photo)}}" alt="" title=""> </a>
                        <div class="language flex">
                            <a href="{{ url('langs/vi') }}" title=""><img src="{{ asset('public/images/icon/icon-vn.png')}}" alt="" title=""> </a>
                            <a href="{{ url('langs/en') }}" title=""><img src="{{ asset('public/images/icon/icon-eng.png')}}" alt="" title=""> </a>
                        </div>
                        <a id="cd-menu-trigger" href="#0" class=""><span class="cd-menu-icon"></span></a>
                    </div>
                </div>
                <div class="col-md-10 visible-desktop">
                    <div class="header-nav flex">
                        <ul class="flex">
                            <li @if(@$com=='index') class="active" @endif><a href="{{url('')}}" title="">@if($lang == 'vi') {{$biendich[0]->name_vi}} @elseif($lang == 'en') {{$biendich[0]->name_en}}  @endif</a> </li>
                            <li @if(@$com=='phong') class="active" @endif><a href="{{url('phong')}}" title="">@if($lang == 'vi') phòng @elseif($lang == 'en') room  @endif</a> </li>
                            <li @if(@$com=='bar') class="active" @endif><a href="{{url('bar')}}" title="">@if($lang == 'vi') bar nhà hàng @elseif($lang == 'en') bar restaurant  @endif</a> </li>
                            <li @if(@$com=='dich-vu') class="active" @endif>
                                <a href="{{url('dich-vu')}}" title="">@if($lang == 'vi') {{$biendich[8]->name_vi}} @elseif($lang == 'en') {{$biendich[8]->name_en}}  @endif</a>
                                <ul class="menu-sub">
                                    <?php $service = DB::table('news')->where('com','dich-vu')->where('status',1)->get(); ?>
                                    @foreach($service as $s)
                                    <li><a href="{{url('dich-vu/'.$s->alias.'.html')}}" title="">@if($lang == 'vi') {{$s->name}} @elseif($lang == 'en') {{$s->name_en}}  @endif</a> </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li @if(@$com=='tin-tuc') class="active" @endif><a href="{{url('tin-tuc')}}" title="">@if($lang == 'vi') {{$biendich[3]->name_vi}} @elseif($lang == 'en') {{$biendich[3]->name_en}}  @endif</a> </li>
                            <li @if(@$com=='lien-he') class="active" @endif><a href="{{url('lien-he')}}" title="">@if($lang == 'vi') {{$biendich[4]->name_vi}} @elseif($lang == 'en') {{$biendich[4]->name_en}}  @endif</a> </li>
                            <li><a href="" title=""  data-toggle="modal" data-target="#register-modal"><span><i class="fa fa-angle-right"></i> @if($lang == 'vi') Đặt phòng @elseif($lang == 'en') Book room  @endif</span></a> </li>
                        </ul>
                        <div class="language flex">
                            <a href="{{ url('langs/vi') }}" title=""><img src="{{ asset('public/images/icon/icon-vn.png')}}" alt="" title=""> </a>
                            <a href="{{ url('langs/en') }}" title=""><img src="{{ asset('public/images/icon/icon-eng.png')}}" alt="" title=""> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>