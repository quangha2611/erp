@extends('Layout.master')

@section('title','ERP-Quản lý sự kiện')

@section('css')
    <link rel="stylesheet" href="{{ asset('asset/css/crm/calendar/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('asset/css/crm/calendar/fullcalendar.css') }}" type="text/css">
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
            method="post" action="https://erp.nhanh.vn/crm/calendar/edit?id=88229">
            <div class="form-horizontal">
                <div class="col-md-6" id="groupBasic">
                    <fieldset>
                        <legend>Thông tin sự kiện</legend>

                        <div class="form-group">
                            <label class="col-md-4 control-label required">Tiêu đề:<span
                                    class="required">*</span></label>
                            <div class="col-md-8">
                                <input type="text" name="title" maxlength="255" id="title"
                                    class="form-control" value="Yêu cầu gọi cho khách"> </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label required">Từ lúc:<span
                                    class="required">*</span></label>
                            <div class="col-md-8">
                                <input type="text" name="beginDateTime" maxlength="17"
                                    id="beginDateTime" class="form-control"
                                    value="14/07/2020 10:10 AM"> </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Đến lúc:</label>
                            <div class="col-md-8">
                                <input type="text" name="endDateTime" maxlength="17"
                                    id="endDateTime" class="form-control"
                                    value="14/07/2020 11:59 PM"> </div>
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
                                <span id="target-type">Thông tin</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">ID:</label>
                            <div class="col-md-8">
                                <span id="target-id">406317</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Tên:</label>
                            <div class="col-md-8">
                                <span id="target-name">Ứng Đình Hướng</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Website:</label>
                            <div class="col-md-8">
                                <span id="target-website">123job.vn</span>
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
                                <span id="target-phone">0333383633 - </span>
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
    <script type="text/javascript" src="{{ asset('asset/js/crm/calendar/saved_resource')}}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/calendar/firebase-app.js')}}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/calendar/firebase-messaging.js')}}">
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/calendar/firebase-firestore.js')}}">
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/calendar/firebase-auth.js')}}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/calendar/getfirebaseconfig')}}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/calendar/notification.js')}}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/calendar/notification.reducer.js')}}">
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/calendar/ckeditor.js')}}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/calendar/saved_resource(1)')}}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/calendar/add.js')}}"></script>
@endsection