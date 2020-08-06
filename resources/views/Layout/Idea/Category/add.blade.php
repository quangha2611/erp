@extends('Layout.master5')

@section('css')
    <link rel="stylesheet" href="{{ asset('asset/css/idea/manage/style.css') }}" type="text/css">
@endsection

@section('title','ERP-Thêm danh mục cải tiến')

@section('content-page')
    
    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/idea"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/idea/category">Danh sách danh mục cải tiến</a></li>
            <li class="active">Thêm danh mục cải tiến</li>
        </ul>
        <div id="page-idea-add">

            <div class="main-header">
                <h2>Thêm danh mục cải tiến</h2>
                <em>Các trường có dấu * là bắt buộc phải nhập</em>
            </div>
            <form method="post" name="CategoryIndex" id="CategoryIndex">
                <div class="form-horizontal">
                    <div class="col-md-6 ">
                        <fieldset>
                            <legend>Thêm danh mục cải tiến</legend>
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
                                    class="col-md-4 control-label required">Tên danh mục cải tiến:
                                    <span class="required">*</span> </label>
                                <div class="col-md-8"><input type="text" name="name" maxlength="255"
                                        id="name" class="form-control" value=""></div>
                            </div>
                            <div class="form-group"><label class="col-md-4 control-label">Thuộc mục
                                    cải tiến:</label>
                                <div class="col-md-8"><select name="parentId" id="parentId"
                                        class="form-control">
                                        <option value="">- Danh mục -</option>
                                        <option value="11">Cải tiến Admin</option>
                                        <option value="22">-- bynlllng</option>
                                        <option value="12">Cải tiến Store</option>
                                        <option value="23">-- jvyxetkx</option>
                                        <option value="13">Cải tiến trong ERP</option>
                                        <option value="14">Cải tiến nhahang</option>
                                        <option value="15">Cải tiến Phần Mềm bán hàng</option>
                                        <option value="20">Cải tiến tính năng</option>
                                        <option value="21">Bất tiện cho người sử dụng</option>
                                        <option value="24">Cải thiện môi trường làm việc</option>
                                        <option value="25">Tăng doanh số</option>
                                    </select></div>
                            </div>
                        </fieldset>
                    </div><input type="hidden" name="id" id="id" value="">
                    <div style="clear:both"></div>
                    <div class="col-md-12">
                        <div>
                            <div class="form-group"><label class="col-md-2 control-label">Sau khi
                                    lưu dữ liệu:</label>
                                <div class="col-md-10"><label class="radio radio-inline"><input
                                            checked="checked" type="radio"
                                            value="/idea/category/add" name="afterSubmit">Tiếp tục
                                        nhập</label><label class="radio radio-inline"><input
                                            type="radio" value="/idea/category/index"
                                            name="afterSubmit">Hiện danh sách công ty</label></div>
                            </div>
                        </div>
                    </div>
                    <div style="clear:both"></div>
                    <div class="col-md-6">
                        <div>
                            <div class="form-group"><label class="col-md-4 control-label"></label>
                                <div class="col-md-8"><input name="submit" type="submit"
                                        id="btnSaveCategory" class="btn btn-primary" value="Lưu">
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
	<script type="text/javascript" src="{{ asset('/asset/js/idea/manage/saved_resource') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/idea/manage/firebase-app.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/idea/manage/firebase-messaging.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/idea/manage/firebase-firestore.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/idea/manage/firebase-auth.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/idea/manage/getfirebaseconfig') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/idea/manage/notification.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/idea/manage/notification.reducer.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/idea/manage/ckeditor.js') }}"></script>
	<script type="text/javascript">
		CKEDITOR.env.isCompatible = true;
	</script>
	<script type="text/javascript" src="{{ asset('/asset/js/idea/manage/saved_resource(1)') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/idea/manage/add.js)') }}"></script>
    

@endsection