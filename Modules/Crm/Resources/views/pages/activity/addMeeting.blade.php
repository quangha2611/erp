@extends('crm::layouts.master')

@section('title','ERP-Quản trị hành động')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/crm/activity/style.css') }}" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content-page')
<div class="col-md-10 content-wrapper">
    <ul class="breadcrumb">
        <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
        <li><a href="https://erp.nhanh.vn/crm/lead/index">Danh sách thông tin</a></li>
        <li class="active">Thêm chăm sóc</li>
    </ul>
    <div id="page-crm-contact-add" style="min-height: 680px;">
        <div class="main-header">
            <h2>Thêm meeting</h2>
            <em>Các trường có dấu * là bắt buộc phải nhập</em>
        </div>
        <div class="sub-header">
            Thêm cuộc gặp với khách hàng {{ $customer->name }}</div>

        <!-- start form -->
        <form id="crmAddmeeting" name="crmAddmeeting" method="post"
            action="{{ route('post.crm.activity.storeMeting') }}"
            enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="customer_id" value="{{ $customer->id }}">
            <input type="hidden" name="action_id" value="1">
            <input type="hidden" name="author" value="{{ Auth::user()->id }}">
            <div class="form-horizontal">
                <div class="col-md-6">
                    <fieldset>
                        <legend>Thông tin chung</legend>
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
                            <label class="col-md-4 control-label required">Tiêu đề: <span
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
                            <label class="col-md-4 control-label required">Địa điểm:<span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-8">
                                <input type="text" name="location" maxlength="255" id="location"
                                    class="form-control"
                                    value="{{ old('location') }}">
                                @error('location')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label required">Từ lúc:<span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-8">
                                <input type="datetime-local" name="begin_date_time" maxlength="17" id="begin_date_time" class="form-control" value="{{ old('begin_date_time') }}" > 
                                @error('begin_date_time')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label ">Đến lúc:
                            </label>
                            <div class="col-md-8">
                                <input type="datetime-local" name="end_date_time" maxlength="17" id="end_date_time" class="form-control" value="{{ old('end_date_time') }}" > 
                                @error('end_date_time')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label required">
                                Thành viên đi cùng:
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
                        {{-- <div class="form-group">
                            <label class="col-md-4 control-label">Tình trạng gặp:</label>
                            <div class="col-md-8">
                                <select name="" id="status" class="form-control">
                                    <option value="">- Tình trạng gặp -</option>
                                    <option value="1" selected="selected">Gặp được</option>
                                    <option value="2">Không gặp được</option>
                                </select> </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Kết quả:</label>
                            <div class="col-md-8">
                                <select name="" id="result" class="form-control">
                                    <option value="">- Kết quả -</option>
                                    <option value="1">Khách từ chối</option>
                                    <option value="2">Khách suy nghĩ - hẹn gặp sau</option>
                                    <option value="3">Khách suy nghĩ - hẹn gọi lại sau</option>
                                    <option value="7">Khách có yêu cầu riêng cần trao đổi thêm
                                    </option>
                                    <option value="6">Thành công - chốt hợp đồng</option>
                                    <option value="200">Khác</option>
                                </select> </div>
                        </div>
                        <div class="form-group hide-element">
                            <label class="col-md-4 control-label">Lí do:</label>
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
                            <label class="col-md-4 control-label ">Nội dung: </label>
                            <div class="col-md-8">
                                <textarea name="description" class="form-control"
                                    id="description">{{ old('description') }}</textarea> </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Level khách hàng</label>
                            <div class="col-md-8">
                                {{ $customer->level->name }}
                            </div>
                        </div>
                    </fieldset>
                </div>
                <input type="hidden" name="accountId" id="accountId" value="21810"> <input
                    type="hidden" name="contactId" id="contactId" value=""> <input type="hidden"
                    name="leadId" id="leadId" value="405449">
                <div class="col-md-6" id="levelGroup" style="display: block;">
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

            </div>
            <div style="clear: both"></div>


            <div class="col-md-6">
                <div>
                    <div class="form-group">
                        <label class="col-md-4 control-label"></label>
                        <div class="col-md-8">
                            <input type="submit" value="Lưu" class="btn btn-primary"
                                id="btnSaveCrmContact" name="submit">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- end form -->
    <div class="clearfix"></div>
    <hr>
    <script>
        var statusFailed = '2';
        var statusSuccess = '1';
        var resultRequest = '7';
        var resultReject = '1';
        var resultMeeting = '2';
        var resultPhonecall = '3';
        var resultSuccess = '6';
        var resultChangeMeeting = '5';
    </script>
    <style>
        #levelGroup hr {
            margin-top: 5px;
            margin-left: 5px;
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
            margin: 3px 0 10px 10px;
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