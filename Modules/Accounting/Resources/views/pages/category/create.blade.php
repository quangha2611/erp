@extends('accounting::layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/accounting/category/style.css') }}" type="text/css">
@endsection

@section('title', 'ERP-Sửa hoản mục')

@section('content-page')
    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/accounting"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/accounting/expense/category">Khoản mục chi phí</a>
            </li>
            <li class="active">Thêm khoản mục</li>
        </ul>
        <div id="page-idea-edit">
            <div class="main-header">
                <h2>Thêm khoản mục chi phí</h2>
                <em>Các trường có dấu * là bắt buộc phải nhập</em>
            </div>
            <form method="post" name="ExpenseCategoryIndex" id="ExpenseCategoryIndex" action="{{ route('post.accounting.category.store') }}">
                @csrf
                <div class="form-horizontal">
                    <div class="col-md-6 ">
                        <fieldset>
                            <legend>Thêm tài khoản</legend>
                            <div class="form-group">
                                <label class="col-md-4 control-label required">Công ty: 
                                    <span class="required">*</span> 
                                </label>
                                <div class="col-md-8">
                                    <select name="companyId" id="companyId" class="form-control" required>
                                        <option value="">- Công ty -</option>
                                        @include('accounting::pages.category.include._inc_recursiveInput',[
                                            'data' => $companies,
                                            'parentId' => null,
                                            'note' => '--'
                                        ])
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label required">Tên khoản mục: 
                                    <span class="required">*</span> 
                                </label>
                                <div class="col-md-8">
                                    <input type="text" name="name" maxlength="255" id="name" class="form-control" value="{{old('name')}}" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Thuộc khoản mục:</label>
                                <div class="col-md-8">
                                    <select name="parentId" id="parentId" class="form-control">
                                        <option value="">- Danh mục cha -</option>
                                        @include('accounting::pages.category.include._inc_recursiveInput',[
                                            'data' => $categories,
                                            'parentId' => null,
                                            'note' => '--'
                                        ])
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label required">Mã code: 
                                    <span class="required">*</span> 
                                </label>
                                <div class="col-md-8">
                                    <input type="text" name="code" maxlength="255" id="code" class="form-control" value="{{old('code')}}" required>
                                    @error('code')
                                        <p style="color: red">{{ $message }}</p>
                                    @enderror
                                </div>
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
                                            value="continue"
                                            name="afterSubmit">Tiếp tục nhập</label><label
                                        class="radio radio-inline"><input type="radio"
                                            value="show"
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
                <input type="hidden" name="author" value="{{ Auth::user()->id }}">
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
    <script type="text/javascript" src="{{ asset('/js/accounting/category/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/accounting/category/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/accounting/category/app.js') }}"></script>
    <script>
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('/js/accounting/category/saved_resource(1)') }}"></script>


@endsection