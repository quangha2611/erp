@extends('Layout.master4')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('title', 'ERP-Thêm phiếu xin thu')

@section('content-page')

    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/accounting"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/accounting/account">kế toán</a></li>
            <li class="active">Thêm tài khoản kế toán</li>
        </ul>
        <div id="page-idea-add">
            <div class="main-header">
                <h2>Thêm tài khoản kế toán</h2>
                <em>Các trường có dấu * là bắt buộc phải nhập</em>
            </div>
            <form method="post" name="AccountIndex" id="AccountIndex">
                <div class="form-horizontal">
                    <div class="col-md-6 ">
                        <fieldset>
                            <legend>Thêm tài khoản</legend>
                            <div class="form-group"><label class="col-md-4 control-label">Công
                                    ty:</label>
                                <div class="col-md-8"><select name="companyId" id="companyId"
                                        class="form-control">
                                        <option value="1" selected="selected">Nhanh.vn</option>
                                    </select></div>
                            </div>
                            <div class="form-group"><label
                                    class="col-md-4 control-label required">Tên tài khoản: <span
                                        class="required">*</span> </label>
                                <div class="col-md-8"><input type="text" name="name" maxlength="255"
                                        id="name" class="form-control" value=""></div>
                            </div>
                            <div class="form-group"><label class="col-md-4 control-label">Thuộc
                                    khoản mục:</label>
                                <div class="col-md-8"><input type="text" name="parentName"
                                        id="parentName" class="form-control ui-autocomplete-input"
                                        value="" autocomplete="off"></div>
                            </div><input type="hidden" name="parentId" id="parentId" value="">
                            <div class="form-group"><label
                                    class="col-md-4 control-label required">Mã code: <span
                                        class="required">*</span> </label>
                                <div class="col-md-8"><input type="text" name="code" maxlength="255"
                                        id="code" class="form-control" value=""></div>
                            </div>
                            <div class="form-group"><label class="col-md-4 control-label">Hình
                                    thức:</label>
                                <div class="col-md-8"><select name="type" id="type"
                                        class="form-control">
                                        <option value="">- Loại -</option>
                                        <option value="3">Tiền mặt</option>
                                        <option value="1">Chuyển khoản</option>
                                    </select></div>
                            </div>
                        </fieldset>
                    </div>
                    <div style="clear:both"></div>
                    <div class="col-md-12">
                        <div>
                            <div class="form-group"><label class="col-md-2 control-label">Sau khi
                                    lưu dữ liệu:</label>
                                <div class="col-md-10"><label class="radio radio-inline"><input
                                            checked="checked" type="radio"
                                            value="/accounting/account/add" name="afterSubmit">Tiếp
                                        tục nhập</label><label class="radio radio-inline"><input
                                            type="radio" value="/accounting/account/index"
                                            name="afterSubmit">Hiện danh sách vừa nhập</label></div>
                            </div>
                        </div>
                    </div>
                    <div style="clear:both"></div>
                    <div class="col-md-6">
                        <div>
                            <div class="form-group"><label class="col-md-4 control-label"></label>
                                <div class="col-md-8"><input name="submit" type="submit"
                                        id="btnSave" class="btn btn-primary" value="Lưu"></div>
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
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/account/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/account/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/account/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/account/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/account/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/account/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/account/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/account/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/account/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/account/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/account/add.js') }}"></script>


@endsection
