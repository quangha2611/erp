@extends('Layout.master')

@section('title','ERP-Đặt Lịch')

@section('css')
    <link rel="stylesheet" href="{{ asset('asset/css/infomation/opportunity/style.css') }}" type="text/css">
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
        <form id="activityPhonecall" enctype="multipart/form-data" name="activityPhonecall"
            method="post" action="https://erp.nhanh.vn/crm/activity/addcalendar?accountId=21810">
            <div class="form-horizontal">
                <div class="col-md-6" id="groupBasic">
                    <fieldset>
                        <legend>Thông tin sự kiện</legend>

                        <div class="form-group">
                            <label class="col-md-4 control-label required">Tiêu đề:<span
                                    class="required">*</span></label>
                            <div class="col-md-8">
                                <input type="text" name="title" maxlength="255" id="title"
                                    class="form-control" value=""> </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label required">Từ lúc:<span
                                    class="required">*</span></label>
                            <div class="col-md-8">
                                <input type="text" name="beginDateTime" maxlength="17"
                                    class="datetimepicker form-control" id="beginDateTime" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Đến lúc:</label>
                            <div class="col-md-8">
                                <input type="text" name="endDateTime" maxlength="17"
                                    class="datetimepicker form-control" id="endDateTime" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label required">Thành viên:<span
                                    class="required">*</span></label>
                            <div class="col-md-8">
                                <input type="text" name="calendar_userIds" style="display:none;"
                                    id="calendar_userIds" class="form-control" value="8627">
                                <div class="bootstrap-tagsinput" id="calendar_user_input">
                                    <span class="tag label label-info" idref="8627">
                                        nhandtt<span data-role="remove"></span>
                                    </span>
                                    <input size="1" type="text" placeholder="" id="tag-input"
                                        class="ui-autocomplete-input" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Địa điểm:</label>
                            <div class="col-md-8">
                                <input type="text" name="location" maxlength="255" id="location"
                                    class="form-control" value=""> </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Ghi chú:</label>
                            <div class="col-md-8">
                                <textarea name="description" class="form-control"
                                    id="description"></textarea> </div>
                        </div>

                    </fieldset>
                </div>
                <div class="col-md-6" id="groupTargetInfor">
                    <fieldset>
                        <legend>Thông tin khách hàng</legend>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Loại:</label>
                            <div class="col-md-8">
                                <span id="target-type">Khách hàng</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">ID:</label>
                            <div class="col-md-8">
                                <span id="target-id">21810</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Tên:</label>
                            <div class="col-md-8">
                                <span id="target-name">CÔNG TY TNHH AUCO</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Website:</label>
                            <div class="col-md-8">
                                <span id="target-website"></span>
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
                                <span id="target-phone"> - </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Email:</label>
                            <div class="col-md-8">
                                <span id="target-type"></span>
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
    <script type="text/javascript">
        var usrCnf = {
            language: 'vi'
        };
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/infomation/opportunity/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/infomation/opportunity/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/infomation/opportunity/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/infomation/opportunity/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/infomation/opportunity/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/infomation/opportunity/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/infomation/opportunity/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/infomation/opportunity/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/infomation/opportunity/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/infomation/opportunity/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/infomation/opportunity/addcalendar.js') }}"></script>
@endsection