@extends('crm::layouts.master')

@section('title','ERP-Thêm cuộc gọi')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/crm/activity/style.css') }}" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content-page')
<div class="col-md-10 content-wrapper">
    <ul class="breadcrumb">
        <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
        <li><a href="https://erp.nhanh.vn/crm/lead/index">Danh sách thông tin</a></li>
        <li class="active">Thêm cuộc gọi</li>
    </ul>

    <div class="main-header">
        <h2>Thêm cuộc gọi</h2>
        <em>Các trường có dấu * là bắt buộc phải nhập</em>
    </div>

    <div class="col-md-12" style="min-height: 600px;">
        <div class="sub-header">
            Thêm cuộc gọi với khách hàng {{ $customer->name }}</div>
        <!-- stat form -->

        <form method="post" action="{{ route('post.crm.activity.storePhoneCall') }}">
            @csrf
            <input type="hidden" name="customer_id" value="{{ $customer->id }}">
            <input type="hidden" name="company_id" value="{{ $customer->company_id }}">
            <input type="hidden" name="action_id" value="2">
            <input type="hidden" name="author" value="{{ Auth::user()->id }}">
            <div class="form-horizontal">
                <div class="col-md-6" id="groupBasic">
                    <fieldset>
                        <legend>Thông tin chung</legend>
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
                            <label class="col-md-4 control-label required">Chiều gọi:<span
                                    class="required">*</span> </label>
                            <div class="col-md-8">
                                <select name="direction" id="direction" class="form-control">
                                    <option value="">- Chiều gọi -</option>
                                    <option value="1" {{ 1 == old('direction') ? 'selected' : ''}}>Gọi đi (Gọi cho khách)
                                    </option>
                                    <option value="2" {{ 2 == old('direction') ? 'selected' : ''}}>Gọi đến (Khách gọi)</option>
                                </select> 
                                @error('direction')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label required">Tình trạng gọi:<span
                                    class="required">*</span> </label>
                            <div class="col-md-8">
                                <select name="status_id" id="status_id" class="form-control">
                                    <option value="">- Tình trạng gọi -</option>
                                    <option value="1" {{ 1 == old('status_id') ? 'selected' : ''}}>Gọi được</option>
                                    <option value="2" {{ 2 == old('status_id') ? 'selected' : ''}}>Không gọi được</option>
                                </select> 
                                @error('status_id')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label required">Kết quả:<span
                                    class="required">*</span> </label>
                            <div class="col-md-8">
                                <select name="result_id" id="result_id" class="form-control">
                                    <option value="">- Kết quả -</option>
                                    @foreach ($phoneCallResults as $result)
                                        <option value="{{ $result->id }}" {{ $result->id == old('result_id') ? 'selected' : ''}}>{{ $result->name }}</option>
                                    @endforeach
                                </select> 
                                @error('result_id')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        {{-- <div class="form-group hide-element">
                            <label class="col-md-4 control-label ">Lí do:</label>
                            <div class="col-md-8">
                                <select name="reasonId[]" multiple="multiple"
                                    class="multiselect form-control" id="reasonId"
                                    style="display: none;">
                                    <option value="12">Khách chưa có nhu cầu</option>
                                    <option value="11">Gọi nhầm số</option>
                                    <option value="10">Bị tác động sau khi quyết định - đắn đo
                                        về giá</option>
                                    <option value="9">Có IT khó chốt</option>
                                    <option value="8">Kho giao diện xấu</option>
                                    <option value="7">Cần module Kế toán</option>
                                    <option value="6">Không hỗ trợ marketing, SEO - Nhân viên
                                        thiếu kiến thức marketing</option>
                                    <option value="5">Không tin là bán online được</option>
                                    <option value="4">Bảo mật ko tin tưởng</option>
                                    <option value="3">Chờ bản Offline</option>
                                    <option value="2">Khách muốn mua đứt (không muốn trả phí
                                        hàng tháng)</option>
                                    <option value="1">Giá đắt</option>
                                </select>
                                <div class="btn-group"><button type="button"
                                        class="multiselect dropdown-toggle btn btn-default"
                                        data-toggle="dropdown" title="None selected">None
                                        selected <b class="caret"></b></button>
                                    <ul class="multiselect-container dropdown-menu">
                                        <li><a href="javascript:void(0);"><label
                                                    class="checkbox"><input type="checkbox"
                                                        value="12"> Khách chưa có nhu
                                                    cầu</label></a></li>
                                        <li><a href="javascript:void(0);"><label
                                                    class="checkbox"><input type="checkbox"
                                                        value="11"> Gọi nhầm số</label></a></li>
                                        <li><a href="javascript:void(0);"><label
                                                    class="checkbox"><input type="checkbox"
                                                        value="10"> Bị tác động sau khi quyết
                                                    định - đắn đo về giá</label></a></li>
                                        <li><a href="javascript:void(0);"><label
                                                    class="checkbox"><input type="checkbox"
                                                        value="9"> Có IT khó chốt</label></a>
                                        </li>
                                        <li><a href="javascript:void(0);"><label
                                                    class="checkbox"><input type="checkbox"
                                                        value="8"> Kho giao diện xấu</label></a>
                                        </li>
                                        <li><a href="javascript:void(0);"><label
                                                    class="checkbox"><input type="checkbox"
                                                        value="7"> Cần module Kế
                                                    toán</label></a></li>
                                        <li><a href="javascript:void(0);"><label
                                                    class="checkbox"><input type="checkbox"
                                                        value="6"> Không hỗ trợ marketing, SEO -
                                                    Nhân viên thiếu kiến thức
                                                    marketing</label></a></li>
                                        <li><a href="javascript:void(0);"><label
                                                    class="checkbox"><input type="checkbox"
                                                        value="5"> Không tin là bán online
                                                    được</label></a></li>
                                        <li><a href="javascript:void(0);"><label
                                                    class="checkbox"><input type="checkbox"
                                                        value="4"> Bảo mật ko tin
                                                    tưởng</label></a></li>
                                        <li><a href="javascript:void(0);"><label
                                                    class="checkbox"><input type="checkbox"
                                                        value="3"> Chờ bản Offline</label></a>
                                        </li>
                                        <li><a href="javascript:void(0);"><label
                                                    class="checkbox"><input type="checkbox"
                                                        value="2"> Khách muốn mua đứt (không
                                                    muốn trả phí hàng tháng)</label></a></li>
                                        <li><a href="javascript:void(0);"><label
                                                    class="checkbox"><input type="checkbox"
                                                        value="1"> Giá đắt</label></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> --}}
                        <div class="form-group">
                            <label class="col-md-4 control-label">Tạo lịch:</label>
                            <div class="col-md-8">
                                <input type="checkbox" name="create_new_calendar" id="createCalendar" value="1" {!! old('create_new_calendar') ? 'checked' : '' !!}> 
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label required">Nội dung: <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-8">
                                <textarea name="content" class="form-control"
                                    id="content">{{ old('content') }}</textarea> 
                                @error('content')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Level khách hàng</label>
                            <div class="col-md-8">
                                <input type="checkbox" name="update_level_customer" id="updateLevelCustomer" value="1"> 
                            </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-md-6 hide-element" id="groupCalendar">
                    <fieldset>
                        <legend>Thông tin cuộc hẹn</legend>
                        <div class="form-group">
                            <label class="col-md-4 control-label required">Công ty:<span
                                    class="required">*</span></label>
                            <div class="col-md-8">
                                <select name="company_id" id="company_id" class="form-control" >
                                    <option value="">-Công ty-</option>
                                    @include('crm::pages.calendar.include._inc_recursiveInput',[
                                        'data' => $companies,
                                        'parentId' => null,
                                        'note' => '--',
                                        'currentItem' => ['id' => old('company_id'),]
                                    ])
                                </select> 
                                @error('company_id')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label required">Tiêu đề:<span
                                    class="required">*</span></label>
                            <div class="col-md-8">
                                <input type="text" name="calendar_title" maxlength="255"
                                    id="calendar_title" class="form-control"
                                    value="{{ old('calendar_title') }}"> 
                                @error('calendar_title')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label required">
                                Thành viên cuộc hẹn:
                                <span class="required">*</span>
                            </label>
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
                            <label class="col-md-4 control-label">Địa chỉ hẹn:</label>
                            <div class="col-md-8">
                                <input type="text" name="calendar_location" maxlength="255"
                                    id="calendar_location" class="form-control" value="{{ old('calendar_location') }}"> 
                                @error('location')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror    
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label required">Thời điểm bắt
                                đầu:<span class="required">*</span></label>
                            <div class="col-md-8">
                                <input type="datetime-local" name="calendar_begin_date_time" maxlength="255"
                                    id="" class="form-control"
                                    value="{{ old('calendar_begin_date_time') }}"> 
                                @error('begin_date_time')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror 
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Thời điểm kết thúc:</label>
                            <div class="col-md-8">
                                <input type="datetime-local" name="calendar_end_date_time" maxlength="255"
                                    id="" class="form-control" value="{{ old('calendar_end_date_time') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Ghi chú:</label>
                            <div class="col-md-8">
                                <textarea name="calendar_description" class="form-control"
                                    id="calendar_description">{{ old('description') }}</textarea> </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-md-6 hide-element" id="levelGroup" style="float: right;">
                    <fieldset>
                        <legend>Cập nhật level khách hàng</legend>
                        @foreach ($customerLevels as $levelParent)
                            @php
                                $countSons = 0;
                            @endphp
                            @if ($levelParent->parent_id == null)
                                <div class="levelCustomerArea">
                                    <div class="clearfix"></div>
                                    <div class="col-md-2">
                                        <b>{{ $levelParent->name }}</b>
                                    </div>
                                @foreach ($customerLevels as $level)
                                    @if ($level->parent_id == $levelParent->id && $countSons != 0)
                                        <div class="col-md-2"></div>
                                        <div class="col-md-5">
                                            <label>
                                                <input type="radio" name="level_id"
                                                    class="levelSaleStageRadio" style="margin:0px 5px;"
                                                    value="{{ $level->id }}">{{ $level->code.' '.$level->name}}
                                                    {{ $level->id == $customer->level->id ? 'selected' : ''}}
                                            </label>
                                        </div>
                                        <div class="clearfix"></div>
                                    @endif
                                    @if ($level->parent_id == $levelParent->id && $countSons == 0)
                                        <div class="col-md-5">
                                            <label>
                                                <input type="radio" name="level_id"
                                                    class="levelSaleStageRadio" style="margin:0px 5px;"
                                                    value="{{ $level->id }}" {!! $level->id == $customer->level->id ? "checked" : '' !!}>
                                                    {{ $level->code.' '.$level->name}}  
                                            </label>
                                        </div>
                                        <div class="clearfix"></div>
                                        @php
                                            $countSons ++;
                                        @endphp
                                    @endif
                                @endforeach
                                    <div class="clearfix"></div>
                                    <hr>
                                </div>
                            @endif
                        @endforeach
                    </fieldset>
                </div>
                <div class="col-md-6" style="float:right;">
                    <legend>Lịch sử chăm sóc gần nhất (<a
                            href="https://erp.nhanh.vn/crm/account/view?id=21810&amp;tab=activities"
                            style="font-size: 0.7em;text-decoration:none;">Xem tất cả</a>)
                    </legend>
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
    <div class="clearfix"></div>
    <hr>
    <div class="page-description">
       
    </div><!-- end form -->
    <script>
        var statusFailed = '2';
        var statusSuccess = '1';

        var resultReject = '1';
        var resultMeeting = '2';
        var resultPhonecall = '3';
        var resultEmail = '4';
        var resultChangeMeeting = '5';
        var resultSuccess = '6';
        var resultRequest = '7';

        var titlePhonecall = 'Gọi lại cho khách';
        var titleMeeting = 'Hẹn gặp với khách';
        var titleEmail = 'Gửi email cho khách';
    </script>
    <style>
        #levelGroup hr {
            margin-top: 5px;
            margin-left: 5px;
        }

        ul.activity-list>li {
            padding-left: 40px;
        }

        ul.activity-list>li .activity-icon,
        ul.activity-list>li img.avatar {
            margin-left: -40px;
        }

        ul.activity-list li p {
            padding-left: 0;
        }

        ul.activity-list .well>div {
            padding-left: 40px;
        }

        ul.activity-list .activity-sub-list {
            padding: 5px 0 0 40px;
        }

        .uiActivityAction {
            margin-top: 5px;
        }

        .uiActivityAction a {
            cursor: pointer;
        }

        .activity-list .save-comment {
            cursor: pointer;
            border: 1px solid #ccc;
        }

        ul.activity-list li .activity-icon.activity-icon-o {
            background: none;
        }

        .icon-chevron-up,
        .icon-chevron-down {
            display: inline-block;
            font-family: FontAwesome;
            font-style: normal;
            font-weight: normal;
            font-size: 0.8em;
        }

        .icon-chevron-up:before {
            content: "\f077";
        }

        .icon-chevron-down:before {
            content: "\f078";
        }

        .sub-header {
            font-size: 1.5em;
            font-weight: bold;
            margin: 3px 0 15px 10px;
        }

        .hide-element {
            display: none;
        }
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
            $('.select2-container').attr('style', 'width: 100% !important');
        });

        if (document.getElementById('createCalendar').checked == true) {
            document.getElementById('groupCalendar').classList.remove("hide-element");
        }
        
        document.getElementById('status_id').addEventListener('change', function () {
            if (document.getElementById('status_id').value == 2) {
                document.getElementById('result_id').style.display = 'none';
            } else {
                document.getElementById('result_id').style.display = 'block';
            }
        });
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
    <script type="text/javascript" src="{{ asset('js/crm/activity/addphonecall.js') }}"></script>
@endsection