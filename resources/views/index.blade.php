<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php 
        $setting = Cache::get('setting'); 
        $product_list = Cache::get('product_list');
        $lang = Cache::get('lang');
    ?>
    <meta http-equiv="content-language" content="vi" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
    <meta name="robots" content="noindex, nofollow" />
    <meta name='revisit-after' content='1 days' /> 
    <title><?php if(!empty($title)) echo $title; else echo $setting->title; ?></title>
    <meta name="author" content="{!! $setting->website !!}" />
    <meta name="copyright" content="GCO" />
    <meta name="keywords" content="<?php if(!empty($keyword)) echo $keyword; else echo $setting->keyword; ?>" />
    <meta name="description" content="<?php if(!empty($description)) echo $description; else echo $setting->description; ?>" />
    <meta http-equiv="content-language" content="vi" />
    <meta property="og:title" content="<?php if(!empty($title)) echo $title; else echo $setting->title; ?>" />
    <meta property="og:locale" content="vi_VN"/>
    <meta property="og:url" content="{!! $setting->website !!}" />
    <meta property="og:site_name" content="<?php if(!empty($title)) echo $title; else echo $setting->title; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="<?php if(!empty($img_share)) echo $img_share; else echo asset('upload/hinhanh/'.$setting->photo) ?>" />
    <meta property="og:description" content="<?php if(!empty($description)) echo $description; else echo $setting->description; ?>" />

    <meta name="googlebot" content="all, index, follow" />
    <meta name="geo.region" content="VN" />
    <meta name="geo.position" content="10.764338, 106.69208" />
    <meta name="geo.placename" content="Hà Nội" />
    <meta name="Area" content="HoChiMinh, Saigon, Hanoi, Danang, Vietnam" />
    <link rel="shortcut icon" href="{!! asset('upload/hinhanh/'.$setting->favico) !!}" type="image/png" />
    
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/responsive.css')}}">

    <!--Jquery library-->
    <script type="text/javascript" src="{{ asset('public/js/jquery.min.js')}}"></script>

    <script type="text/javascript">
        function baseUrl(){
            return '<?php echo url('/'); ?>';
        }
        window.token = '{{ csrf_token() }}';
        
   </script>
</head>
<body>
    
    @include('templates.layout.header')
   
    <main class="cd-main-content">
        @yield('content')
    </main>    
   
    @include('templates.layout.footer')
        <div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="{{ route('book.room') }}" method="post">
                    {{csrf_field()}}
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-center" id="exampleModalLabel">@if($lang =='vi')ĐẶT PHÒNG @elseif($lang =='en') BOOK ROOM @endif</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body form-regis">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>@if($lang =='vi')Họ và tên @elseif($lang =='en') Full name @endif</p>
                                        <input type="text" name="full_name" placeholder="">
                                    </div>
                                    <div class="col-md-6">
                                        <p>@if($lang =='vi') Số điện thoại @elseif($lang =='en') Phone @endif</p>
                                        <input type="text" name="phone" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>@if($lang =='vi') Ngày đến @elseif($lang =='en') Check in date @endif</p>
                                        <input type="date" name="check_in" placeholder="">
                                    </div>
                                    <div class="col-md-6">
                                        <p>@if($lang =='vi') Ngày đi @elseif($lang =='en') Check out date @endif</p>
                                        <input type="date" name="check_out" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>@if($lang =='vi') Số lượng người lớn @elseif($lang =='en') Number audults @endif </p>
                                         <input type="number" name="audult" class="form-control" value="">
                                        <!-- <select>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select> -->
                                    </div>
                                    <div class="col-md-6">
                                        <p>@if($lang =='vi') Số lượng trẻ em @elseif($lang =='en')Number children @endif</p>
                                        <input type="number" name="children" class="form-control" value="">
                                        <!-- <select>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select> -->
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>@if($lang =='vi') Chọn loại phòng @elseif($lang =='en') Kind of room @endif</p>
                                       <?php $cateRoom = DB::table('product_categories')->get(); ?>
                                        <select name="cate_room">
                                            @foreach($cateRoom as $cate)
                                            <option value="{{$cate->id}}">@if($lang =='vi') {{ $cate->name }} @elseif($lang =='en') {{$cate->name_en}} @endif</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>@if($lang =='vi') Số lượng phòng @elseif($lang =='en') Number room @endif</p>
                                        <input type="text" name="number_room" class="form-control" value="">
                                        <!-- <select>
                                            <option>1</option>
                                            <option>2</option>
                                        </select> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer flex-center-center">
                            <button type="submit" class="btn btn-primary">@if($lang =='vi') ĐẶT PHÒNG @elseif($lang =='en') BOOK ROOM @endif</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <nav id="cd-lateral-nav" class=" visible-mobile">
            <ul class="cd-navigation nav-dropdown">
                <li><a href="{{url('')}}" title="">@if($lang == 'vi') {{$biendich[0]->name_vi}} @elseif($lang == 'en') {{$biendich[0]->name_en}}  @endif</a> </li>
                <li><a href="{{url('')}}" title="">@if($lang == 'vi') phòng @elseif($lang == 'en') room  @endif</a> </li>
                <li><a href="{{url('bar')}}" title="">@if($lang == 'vi') bar nhà hàng @elseif($lang == 'en') bar restaurant  @endif</a> </li>
                <li class="item-has-children">
                    <a href="{{url('dich-vu')}}" title="">@if($lang == 'vi') {{$biendich[8]->name_vi}} @elseif($lang == 'en') {{$biendich[8]->name_en}}  @endif</a>
                    <span class="arrow"><img src="{{asset('public/images/icon/cd-arrow.svg')}}" alt="" title=""> </span>
                    <ul class="sub-menu">
                        <?php $service = DB::table('news')->where('com','dich-vu')->where('status',1)->get(); ?>
                        @foreach($service as $s)
                        <li><a href="{{url('dich-vu/'.$s->alias.'.html')}}" title="">@if($lang == 'vi') {{$s->name}} @elseif($lang == 'en') {{$s->name_en}}  @endif</a> </li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="{{url('tin-tuc')}}" title="">@if($lang == 'vi') {{$biendich[3]->name_vi}} @elseif($lang == 'en') {{$biendich[3]->name_en}}  @endif</a> </li>
                <li><a href="{{url('lien-he')}}" title="">@if($lang == 'vi') {{$biendich[4]->name_vi}} @elseif($lang == 'en') {{$biendich[4]->name_en}}  @endif</a> </li>
                <li><a href="" title=""  data-toggle="modal" data-target="#register-modal"><span> @if($lang == 'vi') Đặt phòng @elseif($lang == 'en') Book room  @endif</span></a> </li>
            </ul>
        </nav>
    {!! $setting->codechat !!}
    
    {{ $setting->analytics }}
    @yield('script')
    <script type="text/javascript" src="{{ asset('public/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public/js/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public/js/jquery.fancybox.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public/js/wow.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public/js/private.js')}}"></script>
<!-- END: SCRIPT -->
</body>
</html>