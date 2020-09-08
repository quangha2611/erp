@extends('accounting::layouts.master')

@section('css')
        <link rel="stylesheet" href="{{ asset('/css/accounting/account/style.css') }}" type="text/css">
@endsection

@section('title', 'ERP-Thêm tài khoản kế toán')

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
            <form method="post" name="AccountIndex" id="AccountIndex" action="{{ route('post.accounting.account.store') }}">
                @csrf
                <div class="form-horizontal">
                    <div class="col-md-6 ">
                        <fieldset>
                            <legend>Thêm tài khoản</legend>
                            <div class="form-group"><label class="col-md-4 control-label required">Công
                                    ty: <span class="required">*</span></label>
                                <div class="col-md-8"><select name="companyId" id="companyId"
                                        class="form-control" >
                                        <option value="" selected="selected">-Công ty-</option>
                                        @include('accounting::pages.account.include._inc_recursiveInput',[
                                            'data' => $companies,
                                            'parentId' => null,
                                            'note' => '--',
                                            'currentItem' => ['id'=>old('companyId')],
                                        ])
                                    </select>
                                    @error('companyId')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group"><label
                                    class="col-md-4 control-label required">Tên tài khoản: <span
                                        class="required">*</span> </label>
                                <div class="col-md-8">
                                    <input type="text" name="name" maxlength="255"
                                        id="name" class="form-control" value="{{ old('name') }}" >
                                    @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group"><label class="col-md-4 control-label">Thuộc
                                    khoản mục:</label>
                                <div class="col-md-8">
                                    <select name="categoryId" id="categoryId" class="form-control">
                                        <option value="">- Danh mục cha -</option>
                                        @include('accounting::pages.category.include._inc_recursiveInput',[
                                            'data' => $categories,
                                            'parentId' => null,
                                            'note' => '--',
                                            'currentItem' => ['id'=>old('categoryId')]
                                        ])
                                    </select>
                                    @error('categoryId')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div><input type="hidden" name="parentId" id="parentId" value="">
                            <div class="form-group"><label
                                    class="col-md-4 control-label required">Mã code: <span
                                        class="required">*</span> </label>
                                <div class="col-md-8"><input type="text" name="code" maxlength="255"
                                        id="code" class="form-control" value="{{old('code')}}" >
                                    @error('code')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group"><label class="col-md-4 control-label">Hình
                                    thức:</label>
                                <div class="col-md-8"><select name="type" id="type"
                                        class="form-control">
                                        <option value="">- Loại -</option>
                                        @foreach ($types as $type)
                                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                                        @endforeach
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
                                            value="continue" name="afterSubmit">Tiếp
                                        tục nhập</label><label class="radio radio-inline"><input
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
    <script type="text/javascript" src="{{ asset('/js/accounting/account/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/accounting/account/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/accounting/account/app.js') }}"></script>
    <script>
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('/js/accounting/account/saved_resource(1)') }}"></script>


@endsection
