@extends('Layout.master2')

@section('css')
    <link rel="stylesheet" href="{{ asset('asset/css/asset/manage/style.css') }}" type="text/css">
@endsection

@section('title','ERP-Thêm tài sản')

@section('content-page')
    
    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/asset"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/asset/manage/index">Danh sách tài sản</a></li>
            <li class="active">Thêm tài sản</li>
        </ul>
        <div id="page-add">
            <div class="main-header">
                <h2>Thêm tài sản</h2>
                <em>Các trường có dấu * là bắt buộc phải nhập</em>
            </div>
            <form method="post" name="ExpenseCategoryIndex" id="ExpenseCategoryIndex">
                <div class="form-horizontal">
                    <div class="col-md-12 label1 ">
                        <fieldset>
                            <legend>Sản phẩm</legend>
                        </fieldset>
                    </div>
                    <div class="col-md-6 ">
                        <fieldset>
                            <div class="form-group"><label
                                    class="col-md-4 control-label required">Công ty: <span
                                        class="required">*</span> </label>
                                <div class="col-md-8"><select name="companyId" id="companyId"
                                        class="form-control">
                                        <option value="">- Công ty -</option>
                                        <option value="10">VNP group</option>
                                        <option value="2">---Công ty cổ phần Vật Giá Việt Nam
                                        </option>
                                        <option value="315">------Vật giá - Hà Nội</option>
                                        <option value="319">------Vật giá - Hồ Chí Minh</option>
                                        <option value="365">------Vật giá - Hải Phòng</option>
                                        <option value="387">------WeSave</option>
                                        <option value="389">------123doc.org</option>
                                        <option value="390">------Cunghocvui.com</option>
                                        <option value="391">------123job.vn</option>
                                        <option value="392">------9houz.com</option>
                                        <option value="393">------123dok.com</option>
                                        <option value="321">---Công ty cổ phần TMDT Bảo Kim</option>
                                        <option value="322">------Bảo Kim - Hà Nội</option>
                                        <option value="323">------Bảo Kim - Hồ Chí Minh</option>
                                        <option value="324">---Công ty cổ phần Nhanh.vn</option>
                                        <option value="1">------Nhanh.vn</option>
                                        <option value="366">------Nhanh.vn Đà Nẵng</option>
                                        <option value="395">------Nhanh.vn HCM</option>
                                        <option value="379">---Westay</option>
                                        <option value="384">---Công ty cổ phần WeHelp</option>
                                        <option value="398">---WeLove</option>
                                    </select></div>
                            </div>
                            <div class="form-group"><label
                                    class="col-md-4 control-label required">Danh mục tài sản: <span
                                        class="required">*</span> </label>
                                <div class="col-md-8"><select name="categoryId" id="categoryId"
                                        class="form-control">
                                        <option value="">- Danh mục -</option>
                                    </select></div>
                            </div>
                            <div class="form-group"><label
                                    class="col-md-4 control-label required">Tên tài sản: <span
                                        class="required">*</span> </label>
                                <div class="col-md-8"><input type="text" name="name" maxlength="255"
                                        id="name" class="form-control ui-autocomplete-input"
                                        value="" autocomplete="off"></div>
                            </div><input type="hidden" name="nameId" id="nameId" value="">
                            <div class="form-group"><label class="col-md-4 control-label">Mã
                                    TS:</label>
                                <div class="col-md-8"><input type="text" name="code" maxlength="255"
                                        id="code" class="form-control" value=""></div>
                            </div>
                            <div class="form-group"><label
                                    class="col-md-4 control-label required">Giá trị: <span
                                        class="required">*</span> </label>
                                <div class="col-md-8"><input type="text" name="originalValue"
                                        maxlength="45" class="intAutoNumeric form-control"
                                        id="originalValue" value=""></div>
                            </div>
                            <div class="form-group"><label
                                    class="col-md-4 control-label required">Số lượng: <span
                                        class="required">*</span> </label>
                                <div class="col-md-8"><input type="text" name="quantity"
                                        maxlength="45" class="quantity form-control" id="quantity"
                                        value=""></div>
                            </div><input type="hidden" name="id" id="id" value="">
                        </fieldset>
                    </div>
                    <div class="col-md-6 ">
                        <fieldset>
                            <div class="form-group"><label
                                    class="col-md-4 control-label required">Tình trạng thiết bị:
                                    <span class="required">*</span> </label>
                                <div class="col-md-8"><select name="deviceStatus" id="deviceStatus"
                                        class="form-control">
                                        <option value="">- Tình trạng thiết bị -</option>
                                        <option value="7">Mới 100%</option>
                                        <option value="8">Sử dụng tốt</option>
                                        <option value="2">Đang sửa chữa</option>
                                        <option value="3">Đang bảo dưỡng</option>
                                        <option value="4">Đang bảo hành</option>
                                        <option value="5">Đã thanh lý</option>
                                        <option value="6">Hỏng</option>
                                    </select></div>
                            </div>
                            <div class="form-group"><label
                                    class="col-md-4 control-label required">Ngày mua: <span
                                        class="required">*</span> </label>
                                <div class="col-md-8">
                                    <div class="input-group"><span class="input-group-addon"><i
                                                class="fa fa-calendar"></i></span><input type="text"
                                            name="boughtDate" class="datepicker form-control"
                                            id="boughtDate" value="23/07/2020"></div>
                                </div>
                            </div>
                            <div class="form-group"><label class="col-md-4 control-label">Ngày sản
                                    xuất:</label>
                                <div class="col-md-8">
                                    <div class="input-group"><span class="input-group-addon"><i
                                                class="fa fa-calendar"></i></span><input type="text"
                                            name="manufactureDate" class="datepicker form-control"
                                            id="manufactureDate" value=""></div>
                                </div>
                            </div>
                            <div class="form-group"><label class="col-md-4 control-label">Ngày hết
                                    hạn:</label>
                                <div class="col-md-8">
                                    <div class="input-group"><span class="input-group-addon"><i
                                                class="fa fa-calendar"></i></span><input type="text"
                                            name="expiredDate" class="datepicker form-control"
                                            id="expiredDate" value=""></div>
                                </div>
                            </div>
                            <div class="form-group"><label class="col-md-4 control-label">Số tháng
                                    bảo hành:</label>
                                <div class="col-md-8"><input type="text" name="warrantyMonths"
                                        maxlength="45" id="warrantyMonths" class="form-control"
                                        value=""></div>
                            </div>
                        </fieldset>
                    </div>
                    <div style="clear:both"></div>
                    <div class="col-md-12">
                        <div>
                            <div class="form-group"><label class="col-md-2 control-label">Sau khi
                                    lưu dữ liệu:</label>
                                <div class="col-md-10"><label class="radio radio-inline"><input
                                            checked="checked" type="radio" value="/asset/manage/add"
                                            name="afterSubmit">Tiếp tục nhập</label><label
                                        class="radio radio-inline"><input type="radio"
                                            value="/asset/manage/index" name="afterSubmit">Hiện danh
                                        sách vừa nhập</label></div>
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


        <style>
            .label1 fieldset {
                margin: 0 0;
            }

            .col-md-6 fieldset {
                margin: 0 0 5px 0;
            }

            .product {
                display: inline-block;
                width: 100%;
            }

            .toolProduct {
                display: inline-block;
                float: right;
            }

            .toolProduct a {
                font-size: 14px;
                margin: 0 0 0 5px;
                cursor: pointer;
            }

            .table input,
            .table select {
                border: none;
                background: none;
            }

            .table input:focus,
            .table select:focus {
                outline: none;
                box-shadow: none;
            }

            .table td {
                padding: 0 0 !important;
            }

            .colIndex {
                text-align: center;
                line-height: 30px !important;
            }

            .toolProduct a {
                font-size: 13px;
            }

            .toolProduct a:hover {
                text-decoration: none;
            }

            .toolProduct a#delProduct {
                color: #999;
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
	<script type="text/javascript" src="{{ asset('/asset/js/asset/manage/saved_resource') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/asset/manage/firebase-app.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/asset/manage/firebase-messaging.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/asset/manage/firebase-firestore.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/asset/manage/firebase-auth.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/asset/manage/getfirebaseconfig') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/asset/manage/notification.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/asset/manage/notification.reducer.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/asset/manage/ckeditor.js') }}"></script>
	<script type="text/javascript">
		CKEDITOR.env.isCompatible = true;
	</script>
	<script type="text/javascript" src="{{ asset('/asset/js/asset/manage/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/asset/manage/saved_resource(2)') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/asset/manage/index.js') }}"></script>
    

@endsection