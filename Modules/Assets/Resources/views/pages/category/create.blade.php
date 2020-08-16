@extends('assets::layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/asset/category/style.css') }}" type="text/css">
@endsection

@section('title','ERP-Thêm danh mục tài sản')

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
            <form method="post" name="ExpenseCategoryIndex" id="ExpenseCategoryIndex" action="{{ route('post.asset.category.store') }}">
                @csrf
                <div class="form-horizontal">
                    <div class="col-md-6 ">
                        <fieldset>
                            <legend>Thêm danh mục tài sản</legend>
                            <div class="form-group">
                                <label class="col-md-4 control-label required">Công ty: 
                                    <span class="required">*</span> 
                                </label>
                                <div class="col-md-8">
                                    <select name="companyId" id="companyId" class="form-control" required>
                                        <option value="">- Công ty -</option>
                                        @include('assets::pages.category.include._inc_recursiveInput',[
                                            'data' => $companies,
                                            'parentId' => null,
                                            'note' => '--',
                                        ])
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label required">Tên danh mục: 
                                    <span class="required">*</span> 
                                </label>
                                <div class="col-md-8">
                                    <input type="text" name="name" maxlength="255" id="name" class="form-control" value="" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Danh mục cha:</label>
                                <div class="col-md-8">
                                    <select name="parentId" id="parentId" class="form-control">
                                        <option value="">- Danh mục -</option>
                                        @include('assets::pages.category.include._inc_recursiveInput',[
                                            'data' => $categories,
                                            'parentId' => null,
                                            'note' => '--',
                                        ])
                                    </select>
                                </div>
                            </div>
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
                                            value="continue" name="afterSubmit">Tiếp tục
                                        nhập</label><label class="radio radio-inline"><input
                                            type="radio" value="show"
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
	<script type="text/javascript" src="{{ asset('/js/asset/category/saved_resource') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/asset/category/getfirebaseconfig') }}"></script>
	<script type="text/javascript">
		CKEDITOR.env.isCompatible = true;
	</script>
	<script type="text/javascript" src="{{ asset('/js/asset/category/saved_resource(1)') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/asset/category/app.js') }}"></script>
    
@endsection