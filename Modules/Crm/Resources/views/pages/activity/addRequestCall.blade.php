@extends('crm::layouts.master')

@section('title','ERP-Thêm yêu cầu cuộc gọi')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/crm/activity/style.css') }}" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content-page')
    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/crm/lead/index">Danh sách thông tin</a></li>
            <li class="active">Thêm yêu cầu gọi</li>
        </ul>

        <div class="main-header">
            <h2>Thêm yêu cầu gọi</h2>
            <em>Các trường có dấu * là bắt buộc phải nhập</em>
        </div>
        <div class="sub-header">

        </div>
        <!-- stat form -->

        <form method="post" action="{{ route('post.crm.activity.storeRequestCall') }}">
            @csrf
            <div class="form-horizontal">
                <div class="col-md-8" id="groupBasic">
                    <fieldset>
                        <legend>Yêu cầu gọi cho khách hàng {{ $customer->name }}</legend>
                        <input type="hidden" name="customer_id" id="customer_id" value="{{ $customer->id }}">
                        <input type="hidden" name="action_id" value="4">
                        <input type="hidden" name="author" id="author" value="{{ Auth::user()->id }}">
                        <div class="form-group">
                            <label class="col-md-3 control-label required">Tiêu đề:<span
                                class="required">*</span></label>
                            <div class="col-md-6">
                                <input type="text" name="title" maxlength="255" id="title"
                                    class="form-control" value="{{ old('title') }}"> 
                                @error('title')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label required">Thời điểm gọi:<span
                                    class="required">*</span></label>
                            <div class="col-md-6">
                                <select name="request_time_call" id="requestTimecall"
                                    class="form-control">
                                    <option value="">- Thời điểm gọi -</option>
                                    <option value="0" {!! old('request_time_call') == 0 ? 'selected' : '' !!}>Trong ngày</option>
                                    <option value="1" {!! old('request_time_call') == 1 ? 'selected' : '' !!}>Sau 1 ngày</option>
                                    <option value="2" {!! old('request_time_call') == 2 ? 'selected' : '' !!}>Sau 2 ngày</option>
                                    <option value="7" {!! old('request_time_call') == 7 ? 'selected' : '' !!}>Sau 1 tuần</option>
                                </select> 
                                @error('request_time_call')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label required">Người gọi:<span
                                class="required">*</span></label>
                            <div class="col-md-6">
                                <select name="tele_sale_id" id="" class="form-control">
                                    <option value="">- Người gọi -</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}" {!! old('tele_sale_id') == $user->id ? 'selected' : '' !!}>{{$user->name}}</option>
                                    @endforeach
                                </select>
                                @error('tele_sale_id')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Nội dung:</label>
                            <div class="col-md-9" id="commentArea">
                                <textarea name="content" style="width: 100%; height: 250px">{{old('content')}}</textarea>
                            </div>
                        </div>

                    </fieldset>
                </div>
                <div style="clear: both"></div>
                <div class="col-md-6">
                    <div>
                        <div class="form-group">
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-8">
                                <input name="submit" type="submit" id="btnSaveCrmContact"
                                    class="btn btn-primary" value="Lưu"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    <script type="text/javascript">
        var usrCnf = {
            language: 'vi'
        };
    </script>
    <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'editor' );
    </script>
    <script type="text/javascript" src="{{ asset('js/crm/activity/saved_resource')}}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/activity/getfirebaseconfig')}}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/crm/activity/saved_resource(1)')}}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/activity/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/activity/bootstrap-multiselect.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/crm/activity/addrequestphonecall.js') }}"></script>
@endsection