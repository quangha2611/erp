@extends('crm::layouts.master')

@section('title','ERP-Quản lý sự kiện')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/crm/calendar/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/crm/calendar/fullcalendar.css') }}" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

@endsection

@section('content-page')
    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/crm/calendar/index">Lịch làm việc</a></li>
            <li class="active">Sửa lịch làm việc</li>
        </ul>
        <div class="main-header">
            <h2>Sửa lịch làm việc</h2>
            <em>Các trường có dấu * là bắt buộc phải nhập</em>
        </div>
        <form id="activityPhonecall" enctype="multipart/form-data" name="activityPhonecall"
            method="post" action="{{ route('post.crm.calendar.update',$calendar->id) }}">
            @csrf
            <input type="hidden" name="company_id" value="{{ $calendar->company_id }}">
            <div class="form-horizontal">
                <div class="col-md-6" id="groupBasic">
                    <fieldset>
                        <legend>Thông tin sự kiện</legend>

                        <div class="form-group">
                            <label class="col-md-4 control-label required">Tiêu đề:<span
                                    class="required">*</span></label>
                            <div class="col-md-8">
                                <input type="text" name="title" maxlength="255" id="title"
                                    class="form-control" value="{{ $calendar->title }}"> 
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
                                    id="beginDateTime" class="form-control"
                                    value="{{ substr(str_replace(' ','T',$calendar->begin_date_time),0,-3) }}"> 
                                @error('begin_date_time')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror    
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Đến lúc:</label>
                            <div class="col-md-8">
                                <input type="datetime-local" name="end_date_time" maxlength="17"
                                    id="endDateTime" class="form-control"
                                    value="{{ substr(str_replace(' ','T',$calendar->end_date_time),0,-3) }}"> </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label required">Thành viên:<span
                                    class="required">*</span></label>
                            <div class="col-md-8">
                                <select class="js-example-basic-multiple form-control" name="joins[]" multiple value="">
                                    @foreach ($users as $user)
                                        @php
                                            $count = 0;
                                        @endphp
                                        @foreach ($calendar->users as $item)
                                            @if ($user->id == $item->id)
                                                <option value="{{ $user->id }}" selected>{{ $user->name }}</option>
                                                @php
                                                    $count++;
                                                @endphp
                                            @endif
                                        @endforeach
                                        @if ($count == 0)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>   
                                        @endif
                                    @endforeach
                                </select>
                                @error('joins')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror 
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Địa điểm:</label>
                            <div class="col-md-8">
                                <input type="text" name="location" maxlength="255" id="location"
                                    class="form-control" value="{{ $calendar->location }}"> </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Ghi chú:</label>
                            <div class="col-md-8">
                                <textarea name="description" class="form-control" id="description">{{ $calendar->location }}</textarea> </div>
                        </div>

                    </fieldset>
                </div>
                <div class="col-md-6" id="groupTargetInfor">
                    <fieldset>
                        <legend>Thông tin khách hàng</legend>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Loại:</label>
                            <div class="col-md-8">
                                <span id="target-type">Thông tin</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">ID:</label>
                            <div class="col-md-8">
                                <span id="target-id">{{$calendar->customer->id}}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Tên:</label>
                            <div class="col-md-8">
                                <span id="target-name">{{$calendar->customer->name}}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Website:</label>
                            <div class="col-md-8">
                                <span id="target-website">{{$calendar->customer->website}}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Mobile</label>
                            <div class="col-md-8">
                                <span id="target-mobile"> - </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Phone:</label>
                            <div class="col-md-8">
                                <span id="target-phone">{{$calendar->customer->phone}}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Email:</label>
                            <div class="col-md-8">
                                <span id="target-type">{{$calendar->customer->email}}</span>
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
    <script type="text/javascript" src="{{ asset('js/crm/calendar/saved_resource')}}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/calendar/getfirebaseconfig')}}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('js/crm/calendar/saved_resource(1)')}}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/calendar/app.js') }}"></script>
@endsection