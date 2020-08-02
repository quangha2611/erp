@extends('Layout.master')

@section('title','Danh sách liên hệ')

@section('css')
	<link rel="stylesheet" href="{{ asset('asset/css/crm/contact/style.css') }}" type="text/css">
@endsection

@section('content-page')
    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/crm/contact/index">Danh sách liên hệ</a></li>
            <li class="active">Thêm liên hệ</li>
        </ul>
        <div id="page-crm-contact-add">
            <div class="main-header">
                <h2>Thêm liên hệ</h2>
                <em>Các trường có dấu * là bắt buộc phải nhập</em>
            </div>
            <form name="crmContact" method="post" id="crmContact">
                <div class="form-horizontal">
                    <div class="col-md-6">
                        <fieldset>
                            <legend>Thông tin liên lạc</legend>
                            <div class="form-group"><label
                                    class="col-md-4 control-label required">Tên liên hệ:<span
                                        class="required">*</span></label>
                                <div class="col-md-8">
                                    <input type="text" name="name" id="name" class="form-control"
                                        value="">
                                </div>
                            </div>
                            <div class="form-group"><label class="col-md-4 control-label">Khách
                                    hàng:</label>
                                <div class="col-md-8">
                                    <input type="text" name="customerName" id="customerName"
                                        class="form-control ui-autocomplete-input" value=""
                                        autocomplete="off"> <input type="hidden" name="accountId"
                                        id="accountId" class="form-control" value="">
                                    <div class="description text-muted fontsize-85">Nhập vào
                                        'tên','số điện thoại' để lấy thông tin khách hàng trong hệ
                                        thống</div>
                                </div>
                            </div>
                            <div class="form-group"><label
                                    class="col-md-4 control-label required">Giới tính:<span
                                        class="required">*</span></label>
                                <div class="col-md-8">
                                    <select name="gender" id="gender" class="form-control">
                                        <option value="">- Giới tính -</option>
                                        <option value="1">Nam</option>
                                        <option value="2">Nữ</option>
                                    </select> </div>
                            </div>
                            <div class="form-group"><label
                                    class="col-md-4 control-label required">Mobile:<span
                                        class="required">*</span></label>
                                <div class="col-md-8">
                                    <input type="text" name="mobile" maxlength="12" id="mobile"
                                        class="form-control" value=""> </div>
                            </div>
                            <div class="form-group"><label class="col-md-4 control-label">Phòng ban
                                    công tác:</label>
                                <div class="col-md-8">
                                    <input type="text" name="department" maxlength="255"
                                        id="department" class="form-control" value="">

                                </div>
                            </div>
                            <div class="form-group"><label class="col-md-4 control-label">Địa
                                    chỉ:</label>
                                <div class="col-md-8">
                                    <input type="text" name="address" maxlength="255" id="address"
                                        class="form-control" value=""> </div>
                            </div>
                            <div class="form-group"><label
                                    class="col-md-4 control-label">Email:</label>
                                <div class="col-md-8">
                                    <input type="text" name="email" maxlength="255" id="email"
                                        class="form-control" value=""> </div>
                            </div>
                            <div class="form-group"><label class="col-md-4 control-label">Ghi
                                    chú:</label>
                                <div class="col-md-8">
                                    <textarea name="description" style="height:100px;width:100%;"
                                        id="description"></textarea> </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-12">
                            <div class="col-md-12 customerInfor" style="display:none;">
                                <legend>Chi tiết khách hàng</legend>
                                <div class="form-group">
                                    <label class="col-md-4 form-label">Tên khách hàng: </label>
                                    <div class="col-md-8">
                                        <input value="" class="form-control" type="text" disabled=""
                                            id="customer-Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 form-label">Số điện thoại: </label>
                                    <div class="col-md-8">
                                        <input class="form-control" value="" type="text" disabled=""
                                            id="customerMobile">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 form-label">
                                        Địa chỉ:
                                    </label>
                                    <div class="col-md-8">
                                        <input value="" class="form-control" type="text" disabled=""
                                            id="customerAddress">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 form-label">
                                        Email:
                                    </label>
                                    <div class="col-md-8">
                                        <input value="" class="form-control" type="text" disabled=""
                                            id="customerEmail">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 form-label">
                                        Website:
                                    </label>
                                    <div class="col-md-8">
                                        <input value="" class="form-control" type="text" disabled=""
                                            id="customerWebsite">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div>
                        <div class="form-group">
                            <div class="col-md-6" style="text-align: right;">
                                <input type="submit" value="Lưu" class="btn btn-primary"
                                    id="btnSaveCrmContact" name="submit">
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        var usrCnf = {
            language: 'vi'
        };
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/contact/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/contact/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/contact/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/contact/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/contact/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/contact/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/contact/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/contact/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/contact/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/contact/saved_resource(1)') }}"></script>
@endsection
    