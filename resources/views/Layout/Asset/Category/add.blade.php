@extends('Layout.master2')

@section('css')
    <link rel="stylesheet" href="{{ asset('asset/css/asset/category/style.css') }}" type="text/css">
@endsection

@section('title','ERP-Thêm danh sách tài sản')

@section('content-page')
    
    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/asset"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/asset/index/index">Tài sản</a></li>
            <li class="active">Danh sách danh mục</li>
        </ul>
        <div id="page-add">
            <div class="main-header">
                <h2>Thêm danh mục tài sản</h2>
                <em>Các trường có dấu * là bắt buộc phải nhập</em>
            </div>
            <form method="post" name="ExpenseCategoryIndex" id="ExpenseCategoryIndex">
                <div class="form-horizontal">
                    <div class="col-md-6 ">
                        <fieldset>
                            <legend>Thêm danh mục tài sản</legend>
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
                                    class="col-md-4 control-label required">Tên danh mục: <span
                                        class="required">*</span> </label>
                                <div class="col-md-8"><input type="text" name="name" maxlength="255"
                                        id="name" class="form-control" value=""></div>
                            </div>
                            <div class="form-group"><label class="col-md-4 control-label">Danh mục
                                    cha:</label>
                                <div class="col-md-8"><input type="text" name="parentName"
                                        id="parentName" class="form-control ui-autocomplete-input"
                                        value="" autocomplete="off"></div>
                            </div><input type="hidden" name="parentId" id="parentId" value="">
                            <div class="form-group"><label class="col-md-4 control-label">Mã
                                    code:</label>
                                <div class="col-md-8"><input type="text" name="code" maxlength="255"
                                        id="code" class="form-control" value=""></div>
                            </div><input type="hidden" name="id" id="id" value="">
                        </fieldset>
                    </div>
                    <div style="clear:both"></div>
                    <div class="col-md-12">
                        <div>
                            <div class="form-group"><label class="col-md-2 control-label">Sau khi
                                    lưu dữ liệu:</label>
                                <div class="col-md-10"><label class="radio radio-inline"><input
                                            checked="checked" type="radio"
                                            value="/asset/category/add" name="afterSubmit">Tiếp tục
                                        nhập</label><label class="radio radio-inline"><input
                                            type="radio" value="/asset/category/index"
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
	<script type="text/javascript" src="{{ asset('/asset/js/asset/category/saved_resource') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/asset/category/firebase-app.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/asset/category/firebase-messaging.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/asset/category/firebase-firestore.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/asset/category/firebase-auth.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/asset/category/getfirebaseconfig') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/asset/category/notification.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/asset/category/notification.reducer.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/asset/category/ckeditor.js') }}"></script>
	<script type="text/javascript">
		CKEDITOR.env.isCompatible = true;
	</script>
	<script type="text/javascript" src="{{ asset('/asset/js/asset/category/saved_resource(1)') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/asset/category/add.js') }}"></script>
    

@endsection