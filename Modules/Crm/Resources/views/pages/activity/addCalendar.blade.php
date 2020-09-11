@extends('crm::layouts.master')

@section('title','ERP-Đặt lịch')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/crm/activity/style.css') }}" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content-page')

<div class="col-md-10 content-wrapper">
    <ul class="breadcrumb">
        <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
        <li><a href="https://erp.nhanh.vn/crm/activity/index">Lịch sử chăm sóc</a></li>
        <li class="active">Đặt lịch</li>
    </ul>
    <div class="main-header">
        <h2>Đặt lịch</h2>
        <em>Các trường có dấu * là bắt buộc phải nhập</em>
    </div>
    <form method="post" action="{{ route('post.crm.activity.storeCalendar') }}">
        @csrf
        <input type="hidden" name="customer_id" value="{{ $customer->id }}">
        <input type="hidden" name="company_id" value="{{ $customer->company_id }}">
        <input type="hidden" name="author" value="{{ Auth::user()->id }}">
        <div class="form-horizontal">
            <div class="col-md-6" id="groupBasic">
                <fieldset>
                    <legend>Thông tin sự kiện</legend>

                    <div class="form-group">
                        <label class="col-md-4 control-label required">Tiêu đề:<span
                                class="required">*</span></label>
                        <div class="col-md-8">
                            <input type="text" name="title" maxlength="255" id="title"
                                class="form-control" value="{{ old('title') }}"> 
                            @error('title')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label required">Từ lúc:<span
                                class="required">*</span></label>
                        <div class="col-md-8">
                            <input type="datetime-local" name="begin_date_time" maxlength="17"
                                class="form-control" id="beginDateTime" value="{{ old('begin_date_time') }}">
                            @error('begin_date_time')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Đến lúc:</label>
                        <div class="col-md-8">
                            <input type="datetime-local" name="end_date_time" maxlength="17"
                                class="form-control" id="endDateTime" value="{{ old('end_date_time') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label required">Thành viên:<span
                                class="required">*</span></label>
                        <div class="col-md-8">
                            <select class="js-example-basic-multiple form-control" name="joins[]" multiple>
                                @foreach ($users as $user) 
                                    <option value="{{ $user->id }}" {{ (collect(old('joins'))->contains($user->id)) ? 'selected':'' }}> 
                                        {{ $user->name }}
                                    </option>  
                                @endforeach
                            </select>
                            @error('joins')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label required">Địa điểm:<span
                            class="required">*</span></label>
                        <div class="col-md-8">
                            <input type="text" name="location" maxlength="255" id="location"
                                class="form-control" value="{{ old('location') }}"> 
                            @error('location')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Ghi chú:</label>
                        <div class="col-md-8">
                            <textarea name="description" class="form-control"
                                id="description">{{ old('description') }}</textarea> </div>
                    </div>

                </fieldset>
            </div>
            <div class="col-md-6" id="groupTargetInfor">
                <fieldset>
                    <legend>Thông tin khách hàng</legend>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Loại:</label>
                        <div class="col-md-8">
                            <span id="target-type">{{ $customer->type->name }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">ID:</label>
                        <div class="col-md-8">
                            <span id="target-id">{{ $customer->id }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Tên:</label>
                        <div class="col-md-8">
                            <span id="target-name">{{ $customer->name }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Website:</label>
                        <div class="col-md-8">
                            <span id="target-website">{{ $customer->website }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Phone:</label>
                        <div class="col-md-8">
                            <span id="target-phone"> {{ $customer->phone }} </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Email:</label>
                        <div class="col-md-8">
                            <span id="target-type"> {{ $customer->email }}</span>
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
    <style>
    </style>
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

        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>
    <script type="text/javascript" src="{{ asset('js/crm/activity/saved_resource')}}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/activity/getfirebaseconfig')}}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/crm/activity/saved_resource(1)')}}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/activity/saved_resource(2)')}}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/activity/app.js') }}"></script>
@endsection