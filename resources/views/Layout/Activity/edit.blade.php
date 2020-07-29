@extends('Layout.master')

@section('title','ERP-Danh sách cần gọi')

@section('css')
	<link rel="stylesheet" href="{{ asset('asset/css/activity/style.css') }}" type="text/css">
@endsection


@section('content-page')
    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/crm/activity/index">Lịch sử chăm sóc</a></li>
            <li class="active">Sửa hành động</li>
        </ul>
        <div class="main-header">
            <h2>Sửa hành động</h2>
            <em>Các trường có dấu * là bắt buộc phải nhập</em>
        </div>
        <!-- start form -->
        <form id="activityEdit" name="activityEdit" method="post"
            action="https://erp.nhanh.vn/crm/activity/edit?id=3047677&amp;redirectUri=L2NybS9hY3Rpdml0eS9saXN0Y2FsbD9wYWdlVHlwZT0x"
            enctype="multipart/form-data">
            <div class="form-horizontal">
                <div class="col-md-6">
                    <fieldset>
                        <legend>Thông tin hành động: Yêu cầu gọi điện</legend>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Tiêu đề:</label>
                            <div class="col-md-8">
                                <input type="text" name="title" maxlength="255" id="title"
                                    class="form-control" value="Yêu cầu gọi cho khách"> </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label ">Tình trạng:</label>
                            <div class="col-md-8">
                                Thành công </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Kết quả:</label>
                            <div class="col-md-8">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">File upload:</label>
                            <div class="col-md-8">
                                <input type="file" name="fileUpload[]" multiple="multiple"
                                    id="fileUpload"> </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Nội dung:</label>
                            <div class="col-md-8">
                                <textarea name="content" class="form-control"
                                    id="content"></textarea> </div>
                        </div>
                    </fieldset>
                </div>

                <div class="col-md-6">
                    <fieldset>
                        <legend>Thông tin khách hàng</legend>
                        <ul class="accountInfor">
                            <li>
                                <div class="col-md-4 ">Loại:</div>
                                <div class="col-md-8 accountInfor-content">Thông tin</div>
                                <div style="clear: both"></div>
                            </li>
                            <li>
                                <div class="col-md-4 ">ID:</div>
                                <div class="col-md-8 accountInfor-content">406317</div>
                                <div style="clear: both"></div>
                            </li>
                            <li>
                                <div class="col-md-4 ">Tên:</div>
                                <div class="col-md-8 accountInfor-content">Ứng Đình Hướng</div>
                                <div style="clear: both"></div>
                            </li>
                            <li>
                                <div class="col-md-4 ">Website:</div>
                                <div class="col-md-8 accountInfor-content">123job.vn</div>
                                <div style="clear: both"></div>
                            </li>
                            <li>
                                <div class="col-md-4 ">Phone:</div>
                                <div class="col-md-8 accountInfor-content">
                                    0333383633 </div>
                                <div style="clear: both"></div>
                            </li>
                        </ul>
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
        <!-- end form -->
        <script>
            var statusFailed = '2';
            var statusSuccess = '1';

            var resultReject = '1';
            var resultMeeting = '2';
            var resultPhonecall = '3';
            var resultEmail = '4';
            var resultChangeMeeting = '5';
        </script>
        <style>
            .accountInfor {
                margin-top: -12px;
            }

            .accountInfor li {
                background: #eee;
                line-height: 30px;
                list-style: none;
                margin-bottom: 12px;
            }

            .accountInfor li .accountInfor-content {
                line-height: 30px;
                background: white;
                min-height: 30px;
                border: 1px solid #eee;
            }

            .hide-element {
                display: none;
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
    <script type="text/javascript" src="{{ asset('asset/js/activity/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/activity/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/activity/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/activity/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/activity/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/activity/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/activity/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/activity/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/activity/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/activity/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/activity/indexvg.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/activity/saved_resource(2)') }}"></script>
@endsection