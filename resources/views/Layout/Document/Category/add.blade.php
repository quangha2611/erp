@extends('Layout.master3')

@section('css')
    <link rel="stylesheet" href="{{ asset('asset/css/document/document/style.css') }}" type="text/css">
@endsection

@section('title','ERP-Thêm danh mục tài liệu')

@section('content-page')
    
    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/document/document/category">Danh mục tài liệu</a></li>
            <li class="active">Thêm danh mục tài liệu</li>
        </ul>
        <div id="page-crm-contact-add">
            <div class="main-header">
                <h2>Thêm loại tài liệu</h2>
                <em>Các trường có dấu * là bắt buộc phải nhập</em>
            </div>
            <form method="post" name="categoriesIndex" id="categoriesIndex">
                <div class="form-horizontal">
                    <div class="col-md-6 ">
                        <fieldset>
                            <legend>Thông tin loại tài liệu </legend>
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
                            <div class="form-group"><label class="col-md-4 control-label">Phòng
                                    ban:</label>
                                <div class="col-md-8"><select name="departmentId" id="departmentId"
                                        class="form-control">
                                        <option value="">- Phòng ban -</option>
                                        <option value="1270">Kinh doanh Nhanh.vn</option>
                                        <option value="950">-- Nhanh.vn Hà Nội</option>
                                        <option value="1072">-- -- Nhanh HN - KD1_LanNT</option>
                                        <option value="1133">-- -- Nhanh HN - KD6_LâmVN</option>
                                        <option value="1157">-- -- Nhanh HN - KD7_ĐiệpNH</option>
                                        <option value="1248">-- -- Nhanh HN - KD11_NganLTT</option>
                                        <option value="1269">-- -- CTV Kinh doanh</option>
                                        <option value="1317">-- -- Nhanh HN - Phòng KD5_AnhNX
                                        </option>
                                        <option value="1284">-- -- -- Nhanh HN - KD16_TungNH
                                        </option>
                                        <option value="1285">-- -- -- Nhanh HN - ThanhTV_Phát triển
                                            đối tác</option>
                                        <option value="1318">-- -- Nhanh HN - Phòng KD2_TùngNT
                                        </option>
                                        <option value="1319">-- -- Nhanh HN - Phòng KD3_HuyPV
                                        </option>
                                        <option value="1320">-- -- Nhanh HN - Phòng KD4_TrườngVV
                                        </option>
                                        <option value="1241">-- -- -- Nhanh HN - KD10_ThanhPT
                                        </option>
                                        <option value="1263">-- -- -- Nhanh HN - KD8_CôngND</option>
                                        <option value="1313">-- -- -- Nhanh HN - KD17_TùngNT
                                        </option>
                                        <option value="1292">-- Nhanh Nghệ An</option>
                                        <option value="1439">-- Phòng đại lý</option>
                                        <option value="1440">-- -- HN - Đại lý - KD5_AnhNX</option>
                                        <option value="1445">-- -- HN - Đại lý - KD18_ThanhNT
                                        </option>
                                        <option value="1452">-- -- Đại lý công ty</option>
                                        <option value="1453">Khối văn phòng</option>
                                        <option value="300">-- Phòng IT</option>
                                        <option value="452">-- -- IT admin</option>
                                        <option value="453">-- -- IT ERP</option>
                                        <option value="454">-- -- IT giao diện</option>
                                        <option value="849">-- -- Tester</option>
                                        <option value="313">-- Phòng kế toán</option>
                                        <option value="840">-- Giám đốc dự án</option>
                                        <option value="829">-- -- Trợ lý</option>
                                        <option value="1282">-- -- Phòng Dịch Vụ Khách Hàng</option>
                                        <option value="843">-- Chăm sóc đơn hàng - HươngĐTM</option>
                                        <option value="1147">-- Chăm sóc khách hàng - UyênTL
                                        </option>
                                        <option value="1209">-- Support văn phòng</option>
                                        <option value="1387">-- Phòng nhân sự - Nhanh.vn</option>
                                        <option value="1459">Khối sale dịch vụ mkt</option>
                                        <option value="845">-- Marketing</option>
                                        <option value="1386">-- Sale Marketing</option>
                                        <option value="1419">-- Ecomcare</option>
                                        <option value="1457">-- Phòng dịch vụ SEO GG MAPS</option>
                                    </select></div>
                            </div>
                            <div class="form-group"><label class="col-md-4 control-label">Danh mục
                                    cha:</label>
                                <div class="col-md-8"><input type="text" name="parentName"
                                        id="parentName" class="form-control ui-autocomplete-input"
                                        value="" autocomplete="off"></div>
                            </div><input type="hidden" name="parentId" id="parentId" value="">
                            <div class="form-group"><label
                                    class="col-md-4 control-label required">Tên : <span
                                        class="required">*</span> </label>
                                <div class="col-md-8"><input type="text" name="name" maxlength="255"
                                        id="name" class="form-control" value=""></div>
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
                                            value="/document/category/add" name="afterSubmit">Tiếp
                                        tục nhập</label><label class="radio radio-inline"><input
                                            type="radio" value="/document/category/index"
                                            name="afterSubmit">Hiện danh sách loại tài liệu</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="clear:both"></div>
                    <div class="col-md-6">
                        <div>
                            <div class="form-group"><label class="col-md-4 control-label"></label>
                                <div class="col-md-8"><input name="submit" type="submit"
                                        id="btnSaveCrmContact" class="btn btn-primary" value="Lưu">
                                </div>
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
	<script type="text/javascript" src="{{ asset('/asset/js/document/document/saved_resource') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/document/document/firebase-app.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/document/document/firebase-messaging.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/document/document/firebase-firestore.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/document/document/firebase-auth.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/document/document/getfirebaseconfig') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/document/document/notification.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/document/document/notification.reducer.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/document/document/ckeditor.js') }}"></script>
	<script type="text/javascript">
		CKEDITOR.env.isCompatible = true;
	</script>
	<script type="text/javascript" src="{{ asset('/asset/js/document/document/saved_resource(1)') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/document/document/add.js') }}"></script>
    

@endsection