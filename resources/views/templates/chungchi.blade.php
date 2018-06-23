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

                    <li class="vk-list__item active">Chứng chỉ</li>
                </ul>
            </nav>
        </div>

    </div>
    <!--./vk-breadcrumb-->    
    <div class="vk-page vk-page--certify">
        <div class="container">
            <h1 class="vk-page__heading">CHỨNG CHỈ KỸ THUẬT</h1>

            <p>
               {!! $data->content !!}
            </p>
            <div class="row" id="gallery">
            	<?php $images = DB::table('slider')->where('com','thu-vien-anh')->get(); ?>
            	@foreach($images as $img)
                <div class="col-lg-4 _item" data-src="{{asset('upload/hinhanh/'.$img->photo)}}" >
                    <img src="{{asset('upload/hinhanh/'.$img->photo)}}" alt="" class="img-fluid">
                </div>
                @endforeach

            </div>
            <!-- /.row -->

        </div><!-- /.container -->
    </div> <!--./page-->

    <div class="vk-partner animation fadeIn">

        <div class="container">
            <div class="vk-partner__list row vk-slider" data-slider="partner">
                <div class="col-lg-2 _item">
                    <div class="vk-partner__item">
                        <div class="vk-img--mw100">
                            <img src="images/partner/partner-1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 _item">
                    <div class="vk-partner__item">
                        <div class="vk-img--mw100">
                            <img src="images/partner/partner-2.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 _item">
                    <div class="vk-partner__item">
                        <div class="vk-img--mw100">
                            <img src="images/partner/partner-3.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 _item">
                    <div class="vk-partner__item">
                        <div class="vk-img--mw100">
                            <img src="images/partner/partner-4.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 _item">
                    <div class="vk-partner__item">
                        <div class="vk-img--mw100">
                            <img src="images/partner/partner-1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 _item">
                    <div class="vk-partner__item">
                        <div class="vk-img--mw100">
                            <img src="images/partner/partner-5.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 _item">
                    <div class="vk-partner__item">
                        <div class="vk-img--mw100">
                            <img src="images/partner/partner-6.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </div> <!--./partner-->

    <div class="vk-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.5858091078217!2d105.86899801486167!3d20.96914219518686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac25be4ca5e3%3A0xe81d88694b0116b9!2zWcOqbiBEdXnDqm4sIFnDqm4gU-G7nywgSG_DoG5nIE1haSwgSMOgIE7hu5lpLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1509524787964" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

</section>
@endsection