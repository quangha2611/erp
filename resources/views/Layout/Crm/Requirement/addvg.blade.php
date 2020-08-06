@extends('Layout.master')

@section('title','Thêm yêu cầu')
    
@section('css')
	<link rel="stylesheet" href="{{ asset('asset/css/crm/requirement/style.css') }}" type="text/css">
@endsection

@section('content-page')
    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/crm/requirement/index">Danh sách yêu cầu</a></li>
            <li class="active">Thêm yêu cầu</li>
        </ul>
        <div class="main-header">
            <h2>Thêm yêu cầu</h2>
            <em>Các trường có dấu * là bắt buộc phải nhập</em>
        </div>
        <form action="https://erp.nhanh.vn/crm/requirement/addvg" method="post" id="">
            <div class="form-horizontal">
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label class="col-md-4 form-label required">
                            Khách hàng: <span class="required">*</span>
                        </label>
                        <div class="col-md-7">
                            <input type="text" name="customerName" id="customerName"
                                class="form-control ui-autocomplete-input" value=""
                                autocomplete="off">
                            <span class="form-control-feedback fa"></span>
                            <div class="description text-muted fontsize-85">Nhập vào 'tên','số điện
                                thoại', 'email', 'CMND' hoặc 'mã số thuế' để lấy thông tin khách
                                hàng trong hệ thống</div>
                        </div>
                        <div class="col-md-1">
                            <a class="btn btn-default btn-sm" id="btnAddNewCustomer"
                                data-toggle="tooltip" title=""
                                data-original-title="Tạo khách hàng mới"><i
                                    class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <input type="hidden" name="accountId" id="accountId" value="">
                    <input type="hidden" name="leadId" id="leadId" value="">
                    <div class="form-group">
                        <label class="col-md-4 form-label required">
                            Sản phẩm: <span class="required">*</span>
                        </label>
                        <div class="col-md-8">
                            <select name="productId" id="productId" class="form-control">
                                <option value=""> - Sản phẩm -</option>
                                <option value="232">GHĐB (mới)</option>
                                <option value="231">GHĐB (tái ký)</option>
                                <option value="222">GHĐB (Phát sinh)</option>
                                <option value="223">GHĐB (Ngoại tỉnh)</option>
                                <option value="230">Nạp tiền</option>
                                <option value="120">VChat</option>
                                <option value="224">Tin VIP</option>
                                <option value="226">Siêu VIP</option>
                                <option value="225">Siêu VIP Dính</option>
                                <option value="227">Banner</option>
                                <option value="228">SEO Popup</option>
                                <option value="279">Fanpage</option>
                                <option value="276">Gói Traffic</option>
                            </select> </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 form-label required">
                            Số tiền: <span class="required">*</span>
                        </label>
                        <div class="col-md-8">
                            <input type="text" name="value" class="intAutoNumeric form-control"
                                id="value" value=""> </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 form-label required">
                            Mô tả:
                        </label>
                        <div class="col-md-8">
                            <textarea name="description" class="form-control"
                                style="min-height:100px;" id="description"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 form-label">
                        </label>
                        <div class="col-md-8">
                            <input type="submit" value="Lưu" class="btn btn-primary">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 customerInfor" style="display:none;">
                    <div class="form-group">
                        <label class="col-md-4 form-label required">
                            Tên khách hàng:
                        </label>
                        <div class="col-md-8">

                            <input type="text" value="" disabled="" id="customer-Name"
                                class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 form-label required">
                            Số điện thoại:
                        </label>
                        <div class="col-md-8">
                            <input class="form-control" value="" type="text" disabled=""
                                id="customerMobile">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 form-label required">
                            Địa chỉ:
                        </label>
                        <div class="col-md-8">
                            <input value="" class="form-control" type="text" disabled=""
                                id="customerAddress">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 form-label required">
                            CMND:
                        </label>
                        <div class="col-md-8">
                            <input class="form-control" value="" type="text" disabled=""
                                id="customerIdentification">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 form-label required">
                            Mã số thuế:
                        </label>
                        <div class="col-md-8">
                            <input class="form-control" value="" type="text" disabled=""
                                id="customerTaxcode">
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <div class="modal fade" id="customerAddquickModal" aria-hidden="true"
            style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Thêm khách hàng</h4>
                    </div>
                    <div class="modal-body">
                        <form action="https://erp.nhanh.vn/crm/customer/addquick" method="post"
                            id="customerAddquickForm">
                            <div class="form-horizontal">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label col-md-3">Loại:<span
                                                class="color-red">*</span></label>
                                        <div class="col-md-8">
                                            <select class="form-control customer-type" name="type">
                                                <option value="">- Loại -</option>
                                                <option value="1">Công ty</option>
                                                <option value="2">Cá nhân</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label col-md-3">Tên khách hàng:<span
                                                class="color-red">*</span></label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control customer-name"
                                                name="name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label col-md-3">ID Gian hàng:</label>
                                        <div class="col-md-8">
                                            <input type="text"
                                                class="form-control customer-servicePrivateId"
                                                name="servicePrivateId">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label col-md-3">Tên gian hàng:</label>
                                        <div class="col-md-8">
                                            <input type="text"
                                                class="form-control customer-servicePrivateName"
                                                name="servicePrivateName">
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" class="form-control customer-informations"
                                    name="informations">
                                <div class="col-md-12">
                                    <legend>Liên hệ <span class="color-red">*</span></legend>
                                    <table class="table customer-contacts">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <select class="form-control contactType">
                                                        <option value="">- loại liên hệ -</option>
                                                        <option value="email">email</option>
                                                        <option value="mobile">Số điện thoại
                                                        </option>
                                                        <option value="address">Địa chỉ</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="has-feedback">
                                                        <input type="text"
                                                            class="form-control contactContent">
                                                        <span
                                                            class="form-control-feedback fa"></span>
                                                        <span class="help-block"></span>
                                                    </div>

                                                </td>
                                                <td class="">
                                                    <a
                                                        class="fa fa-times icon form-icon-control removeContact"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select class="form-control contactType">
                                                        <option value="">- loại liên hệ -</option>
                                                        <option value="email">email</option>
                                                        <option value="mobile">Số điện thoại
                                                        </option>
                                                        <option value="address">Địa chỉ</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="has-feedback">
                                                        <input type="text"
                                                            class="form-control contactContent">
                                                        <span
                                                            class="form-control-feedback fa"></span>
                                                        <span class="help-block"></span>
                                                    </div>

                                                </td>
                                                <td class="">
                                                    <a
                                                        class="fa fa-times icon form-icon-control removeContact"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select class="form-control contactType">
                                                        <option value="">- loại liên hệ -</option>
                                                        <option value="email">email</option>
                                                        <option value="mobile">Số điện thoại
                                                        </option>
                                                        <option value="address">Địa chỉ</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="has-feedback">
                                                        <input type="text"
                                                            class="form-control contactContent">
                                                        <span
                                                            class="form-control-feedback fa"></span>
                                                        <span class="help-block"></span>
                                                    </div>

                                                </td>
                                                <td class="">
                                                    <a
                                                        class="fa fa-times icon form-icon-control removeContact"></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="3"><a
                                                        class="fa fa-plus-circle addContact"></a>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btnSave">Lưu</button>
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>
        <table id="customerContactTemplate" style="display: none;">
            <tbody>
                <tr>
                    <td>
                        <select class="form-control contactType">
                            <option value="">- loại liên hệ -</option>
                            <option value="email">email</option>
                            <option value="mobile">Số điện thoại</option>
                            <option value="address">Địa chỉ</option>
                        </select>
                    </td>
                    <td>
                        <div class="has-feedback">
                            <input type="text" class="form-control contactContent">
                            <span class="form-control-feedback fa"></span>
                            <span class="help-block"></span>
                        </div>

                    </td>
                    <td class="">
                        <a class="fa fa-times icon form-icon-control removeContact"></a>
                    </td>
                </tr>
            </tbody>
        </table>
        <style>
            #customerAddquickModal.form-icon-control {
                line-height: 28px;
            }

            #customerAddquickModal.table .has-feedback .form-control-feedback {
                right: 0px;
                top: -3px;
            }
        </style>
        <div id="alertModal" class="modal fade">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">×</button>
                        <h4 class="modal-title">Thông báo</h4>
                    </div>
                    <div class="modal-body">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default reload"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('js')
    <script type="text/javascript">
        var usrCnf = {
            language: 'vi'
        };
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/requirement/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/requirement/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/requirement/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/requirement/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/requirement/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/requirement/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/requirement/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/requirement/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/requirement/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/requirement/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/requirement/addvg.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/requirement/addquick.js') }}"></script>
@endsection