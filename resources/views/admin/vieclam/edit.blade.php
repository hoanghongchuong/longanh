@extends('admin.master')
@section('content')
@section('controller','Việc làm')
@section('action','Edit')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    @yield('controller')
    <small>@yield('action')</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="admin"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="javascript:">@yield('controller')</a></li>
    <li class="active">@yield('action')</li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
  
    <div class="box">
      @include('admin.messages_error')
        <div class="box-body">
          
          <form name="frmAdd" method="post" action="{!! route('admin.vieclam.update', $data->id) !!}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
            
            <div class="nav-tabs-custom">
                  <ul class="nav nav-tabs">
                      <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Thông tin chung</a></li>
                      <li><a href="#tab_2" data-toggle="tab" aria-expanded="true">Tiếng anh</a></li>
                      <li><a href="#tab_5" data-toggle="tab" aria-expanded="true">SEO</a></li>
                  </ul>
                  <div class="tab-content">
                      <div class="tab-pane active" id="tab_1">
                        <div class="row">
                          <div class="col-md-6 col-xs-12">
                            @if (count($errors) > 0)
                              <div class="form-group has-error">
                                  @foreach ($errors->all() as $error)
                                  <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {!! $error !!}</label><br>
                                  @endforeach
                              </div>
                            @endif
                            
                            <div class="form-group">
                              <label for="">Công việc</label>
                              <input type="text" name="txtName" id="txtName" class="form-control" value="{{ $data->name }}">
                            </div>
                            <div class="form-group @if ($errors->first('txtAlias')!='') has-error @endif">
                                  <label for="alias">Đường dẫn tĩnh</label>
                                  <input type="text" name="txtAlias" id="txtAlias" value="{{$data->alias}}"  class="form-control" />
                                  @if ($errors->first('txtAlias')!='')
                                  <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {!! $errors->first('txtAlias'); !!}</label>
                                  @endif
                            </div>
                            <div class="form-group @if ($errors->first('txtAlias')!='') has-error @endif">
                                  <label for="alias">Nơi làm việc</label>
                                  <select name="province" class="form-control">
                                    <option value="">Chọn nơi làm việc</option>
                                    @foreach($province as $p)
                                    <option @if($p->id == $data->province_id) {{"selected"}} @endif value="{{$p->id}}">{{$p->province_name}}</option>
                                    @endforeach
                                  </select>
                            </div>
                            <div class="form-group">
                                  <label for="alias">Lĩnh vực</label>
                                  <select name="linhvuc_id" class="form-control">
                                    <option value="">Chọn lĩnh vực</option>
                                    @foreach($linhvuc as $lv)
                                    <option @if($lv->id == $data->linhvuc_id) {{"selected"}} @endif value="{{$lv->id}}">{{$lv->name}}</option>
                                    @endforeach
                                  </select>
                            </div>
                            <div class="form-group">
                              <label for="">Ngày hết hạn</label>
                              <input type="date" name="expiration_date" value="{{date('Y-m-d', strtotime($data->expiration_date))}}" class="form-control">
                            </div>
                          </div>
                          
                        </div>
                          <div class="row">
                            <div class="col-md-12 col-xs-12">
                              <div class="form-group">
                                    <label for="desc">Mô tả</label>
                                    <textarea name="mota" rows="5" id="txtContent" class="form-control">{!! $data->mota !!}</textarea>
                              </div>
                              <div class="box box-info">
                                        <div class="box-header">
                                            <h3 class="box-title">Nội dung</h3>
                                            <div class="pull-right box-tools">
                                              <button class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                              <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                                          </div>
                                        </div>
                                        <div class="box-body pad">
                                  <textarea name="content" id="txtContent" cols="50" rows="5">{{$data->content}}</textarea>
                                </div>
                              </div>
                            </div>
                          </div>
              
                            <div class="clearfix"></div>
                          </div><!-- /.tab-pane -->
                      <div class="tab-pane" id="tab_2">
                        <div class="row">
                          <div class="col-md-6 col-xs-12">
                              <div class="form-group">
                                  <label for="txtTitle">Name</label>
                                  <input type="text" name="name_en" id="name_en" value="{{$data->name_en}}"  class="form-control" />
                              </div>
                                                            
                    
                          </div>
                
                        </div>
              <div class="row">
                <div class="col-md-12 col-xs-12">
                  <div class="form-group">
                    <label for="">Mô tả</label>
                    <textarea name="mota_en" rows="5" id="txtContent" class="form-control">{!! $data->mota_en !!}</textarea>
                  </div>
                  <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">Nội dung</h3>
                                <div class="pull-right box-tools">
                                  <button class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                  <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                              </div>
                            </div>
                            <div class="box-body pad">
                          <textarea name="content_en" id="txtContent" cols="50" rows="5">{!! $data->content_en !!}</textarea>
                        </div>
                      </div>
                </div>
              </div>
              <div class="clearfix"></div>
                    </div><!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_5">
                      
                      <div class="tab-pane" id="tab_3">
                          <div class="row">
                            <div class="col-md-6 col-xs-12">
                              <div class="form-group">
                                  <label for="keyword">Title</label>
                                  <input name="txtTitle" rows="5" class="form-control" />
                              </div>
                              <div class="form-group">
                                  <label for="keyword">Keyword</label>
                                  <textarea name="txtKeyword" rows="5" class="form-control"></textarea>
                              </div>
                              <div class="form-group">
                                  <label for="description">Description</label>
                                  <textarea name="txtDescription" rows="5" class="form-control"></textarea>
                              </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                              <div class="form-group">
                                  <label for="keyword">Title english</label>
                                  <input name="title_en" rows="5" class="form-control" />
                              </div>
                                        <div class="form-group">
                                              <label for="keyword">Keyword english</label>
                                              <textarea name="keyword_en" rows="5" class="form-control"></textarea>
                                        </div>
                              <div class="form-group">
                                    <label for="description">Description english</label>
                                    <textarea name="description_en" rows="5" class="form-control"></textarea>
                              </div>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                      </div><!-- /.tab-pane -->
                    </div><!-- /.tab-content -->
              </div>
              <div class="clearfix"></div>
          <div class="col-md-6">
            
          </div>
          <div class="clearfix"></div>
          <div class="box-footer">
            <div class="row">
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary">Lưu</button>
                <button type="button" onclick="javascript:window.location='backend/vieclam'" class="btn btn-danger">Thoát</button>
              </div>
            </div>
          </div>
        </form>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
    
</section><!-- /.content -->

@endsection()
