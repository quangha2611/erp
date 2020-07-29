@extends('Layout.master')

@section('title','ERP-Thêm Sự Kiện')

@section('css')
    <link rel="stylesheet" href="{{ asset('asset/css/calendar/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('asset/css/calendar/fullcalendar.css') }}" type="text/css">
@endsection

@section('content-page')
    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/crm/calendar/index">Lịch làm việc</a></li>
            <li class="active">Thêm lịch làm việc</li>
        </ul>
        <div class="main-header">
            <h2>Thêm lịch làm việc</h2>
            <em>Các trường có dấu * là bắt buộc phải nhập</em>
        </div>
        <form id="activityPhonecall" enctype="multipart/form-data" name="activityPhonecall"
            method="post" action="https://erp.nhanh.vn/crm/calendar/add">
            <div class="form-horizontal">
                <div class="col-md-6" id="groupBasic">
                    <fieldset>
                        <legend>Thông tin sự kiện</legend>
                        <div class="form-group">
                            <label class="col-md-4 control-label required">Công ty:<span
                                    class="required">*</span></label>
                            <div class="col-md-8">
                                <select name="companyId" id="companyId" class="form-control">
                                    <option value="391" selected="selected">123job.vn</option>
                                </select> </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label required">Tiêu đề:<span
                                    class="required">*</span></label>
                            <div class="col-md-8">
                                <input type="text" name="title" maxlength="255" id="title"
                                    class="form-control" value=""> </div>
                        </div>
                        <input type="hidden" name="accountId" id="accountId" value=""> <input
                            type="hidden" name="contactId" id="contactId" value=""> <input
                            type="hidden" name="leadId" id="leadId" value="">
                        <div class="form-group">
                            <label class="col-md-4 control-label required">Từ lúc:<span
                                    class="required">*</span></label>
                            <div class="col-md-8">
                                <input type="text" name="beginDateTime" maxlength="17"
                                    id="beginDateTime" class="form-control" value=""> </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Đến lúc:</label>
                            <div class="col-md-8">
                                <input type="text" name="endDateTime" maxlength="17"
                                    id="endDateTime" class="form-control" value=""> </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label required">Thành viên:<span
                                    class="required">*</span></label>
                            <div class="col-md-8">
                                <input type="text" name="calendar_userIds" style="display:none;"
                                    id="calendar_userIds" class="form-control" value="5374">
                                <div class="bootstrap-tagsinput" id="calendar_user_input">
                                    <span class="tag label label-info" idref="5374">
                                        hungnv5<span data-role="remove"></span>
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
                        <legend>
                            Thông tin khách hàng <i class="fa fa-exchange"></i>
                            <a class="addNewCustomer" title="">Tạo khách hàng mới </a>
                        </legend>
                        <div class="form-group">
                            <label class="col-md-4 control-label required">Khách hàng:<span
                                    class="required">*</span></label>
                            <div class="col-md-8">
                                <div class="has-feedback">
                                    <input type="text" name="targetName" maxlength="255"
                                        placeholder="sdt, email, hoặc website của khách hàng"
                                        id="targetName" class="form-control ui-autocomplete-input"
                                        value="" autocomplete="off"> <span
                                        class="form-control-feedback targetName-check"></span>
                                </div>

                            </div>
                        </div>
                        <div class="groupContent" style="display: none;">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Loại:</label>
                                <div class="col-md-8">
                                    <span id="target-type"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">ID:</label>
                                <div class="col-md-8">
                                    <span id="target-id"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Tên:</label>
                                <div class="col-md-8">
                                    <span id="target-name"></span>
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
                        </div>
                    </fieldset>
                </div>
                <div class="col-md-6" id="groupNewCustomer" style="display: none;">
                    <fieldset>
                        <legend>
                            Tạo khách hàng mới <i class="fa fa-exchange"></i>
                            <a class="backsystemCustomer">Dùng khách hàng cũ </a>
                        </legend>
                        <input type="hidden" id="isNewCustomer" name="isNewCustomer" value="">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Tên người dùng / doanh
                                nghiệp:</label>
                            <div class="col-md-8">
                                <input type="text" name="lead_name" maxlength="255" id="lead_name"
                                    class="form-control" value=""> </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Mobile:</label>
                            <div class="col-sm-8">
                                <div class="col-md-6" style="padding-left: 0;">
                                    <div class="form-group has-feedback">
                                        <input type="text" name="lead_mobile" maxlength="15"
                                            placeholder="Mobile" id="lead_mobile"
                                            class="form-control" value=""> <span
                                            class="form-control-feedback"></span>
                                    </div>
                                </div>
                                <div class="col-md-6" style="padding-right: 0;">
                                    <div class="form-group has-feedback">
                                        <input type="text" name="lead_mobile2" maxlength="15"
                                            placeholder="Mobile 2" id="lead_mobile2"
                                            class="form-control" value=""> <span
                                            class="form-control-feedback"></span>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Phone:</label>
                            <div class="col-sm-8">
                                <div class="col-md-6" style="padding-left: 0;">
                                    <div class="form-group has-feedback">
                                        <input type="text" name="lead_phone" maxlength="15"
                                            placeholder="Phone" id="lead_phone" class="form-control"
                                            value=""> <span class="form-control-feedback"></span>
                                    </div>
                                </div>
                                <div class="col-md-6" style="padding-right: 0;">
                                    <div class="form-group has-feedback">
                                        <input type="text" name="lead_phone2" maxlength="15"
                                            placeholder="Phone 2" id="lead_phone2"
                                            class="form-control" value=""> <span
                                            class="form-control-feedback"></span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Email:</label>
                            <div class="col-md-8">
                                <div class="form-group has-feedback">
                                    <input type="text" name="lead_email" maxlength="255"
                                        id="lead_email" class="form-control" value=""> <span
                                        class="form-control-feedback"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Website:</label>
                            <div class="col-md-8">
                                <div class="form-group has-feedback">
                                    <input type="text" name="lead_website" maxlength="255"
                                        id="lead_website" class="form-control" value=""> <span
                                        class="form-control-feedback"></span>
                                </div>

                            </div>
                        </div>
                    </fieldset>
                </div>
                <div style="clear: both"></div>
                <div class="col-md-12">
                    <div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Sau khi lưu dữ liệu:</label>
                            <div class="col-md-10">
                                <label class="radio radio-inline"><input type="radio"
                                        value="/crm/calendar/add" name="afterSubmit">Tiếp tục thêm
                                    sự kiện</label><label class="radio radio-inline"><input
                                        checked="checked" type="radio" value="/crm/calendar/index"
                                        name="afterSubmit">Quản lí sự kiện</label><label
                                    class="radio radio-inline"><input type="radio"
                                        value="/crm/calendar/personalview" name="afterSubmit">Về
                                    lịch của tôi</label> </div>
                        </div>
                    </div>
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
            .form-horizontal .has-feedback .form-control-feedback {
                right: 0px;
            }

            legend a {
                cursor: pointer;
            }
        </style>
    </div>

@endsection

@section('js')
    <script type="text/javascript">
        var usrCnf = {
            language: 'vi'
        };
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/calendar/saved_resource')}}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/calendar/firebase-app.js')}}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/calendar/firebase-messaging.js')}}">
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/calendar/firebase-firestore.js')}}">
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/calendar/firebase-auth.js')}}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/calendar/getfirebaseconfig')}}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/calendar/notification.js')}}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/calendar/notification.reducer.js')}}">
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/calendar/ckeditor.js')}}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/calendar/saved_resource(1)')}}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/calendar/fullcalendar.js')}}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/calendar/view.js')}}"></script>
@endsection