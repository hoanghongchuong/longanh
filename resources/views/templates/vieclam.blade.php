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
                   
                    <li class="vk-list__item active">@if($lang == 'vi') {{"Cơ hội việc làm"}} @elseif($lang =='en') {{ "New jobs" }} @endif</li>
                </ul>
            </div>

        </nav>
    </div>
    <!--./vk-breadcrumb-->    
    <div class="vk-page vk-page--news">

        <div class="container">
            <div class="vk-form vk-recruitment__wrapper">
            	<form method="post" action="{{ route('searchJob') }}">
            		{{ csrf_field() }}
	                <div class="vk-form vk-recruitment__filter">
	                    <div class="form-group">
	                        <input type="text" name="key_search" class="form-control" placeholder="@if($lang == 'vi') {{'Tìm kiếm'}} @elseif($lang=='en') {{'search'}} @endif ">
	                    </div>
	                    <div class="form-group">
	                        <select name="linhvuc"  class="form-control">
	                            <option value="">@if($lang == 'vi') {{"Lĩnh vực"}} @elseif($lang =='en') {{"Field"}} @endif</option>
	                            @foreach($linhvuc as $lv)
	                            <option value="{{$lv->id}}">@if($lang=='vi') {{$lv->name}} @elseif($lang == 'en') {{$lv->name_en}} @endif</option>
	                            @endforeach
	                        </select>

	                    </div>
	                    <div class="form-group">
	                        <select name="province_data"  class="form-control">
	                            <option value="">@if($lang == 'vi') {{"Nơi làm việc"}} @elseif($lang =='en') {{"Location"}} @endif</option>
	                            @foreach($province as $p)
	                            <option value="{{$p->id}}">@if($lang=='vi') {{$p->province_name}} @elseif($lang == 'en') {{$p->province_en}} @endif</option>
	                            @endforeach
	                        </select>
	                    </div>
	                    <div class="form-group">
	                        <button class="vk-btn vk-form__submit">@if($lang == 'vi') {{"Tìm kiếm việc làm"}} @elseif($lang =='en') {{"Search job"}} @endif</button>
	                    </div>
	                </div> 
				</form>
                <div class="vk-recruitment__list">
                    <table class="vk-table vk-recruitment__table">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>@if($lang == 'vi') {{"CÔNG VIỆC"}} @elseif($lang == 'en') {{"Job"}} @endif</th>
                            <th>@if($lang == 'vi') {{"NƠI LÀM VIỆC"}} @elseif($lang == 'en') {{"LOCATION"}} @endif</th>
                            <th>@if($lang == 'vi') {{"Ngày đăng"}} @elseif($lang == 'en') {{"POSTED DATE"}} @endif</th>
                            <th>@if($lang == 'vi') {{"Ngày hết hạn"}} @elseif($lang == 'en') {{"EXPIRATION DATE"}} @endif</th>
                        </tr>
                        </thead>
                        <TBODY>
                        @foreach($data as $key => $item)	
	                        <tr>
	                        	<?php $location = DB::table('province')->where('id', $item->province_id)->first(); 
	                            ?>
	                            <td>{{$key+1}}</td>
	                            <td>
                                    <a href="{{url('viec-lam/'.$item->alias.'.html')}}">@if($lang == 'vi') {{$item->name}} @elseif($lang == 'en') {{$item->name_en}} @endif</a>
                                </td>
	                            <td>@if($lang == 'vi') {{@$location->province_name}} @elseif($lang == 'en') {{@$location->province_en}} @endif</td>
	                            <td>{{date('d/m/Y', strtotime($item->created_at))}}</td>
	                            <td>{{date('d/m/Y', strtotime($item->expiration_date))}}</td>
	                        </tr>
                        @endforeach
                        </TBODY>
                    </table>
                </div> <!--./list-->


               <div class="pagi">{!! $data->links() !!}</div>
                <!--./vk-breadcrumb-->
            </div> <!--./wrapper-->

        </div>

    </div><!--./page-->
    <!-- Button trigger modal -->

</section>
<!--./content-->
@endsection