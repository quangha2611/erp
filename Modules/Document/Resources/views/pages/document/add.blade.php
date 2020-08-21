@extends('document::layouts.master')

@section('css')
<link rel="stylesheet" href="{{ asset('/css/document/document/style.css') }}" type="text/css">
@endsection

@section('title','ERP-Danh sách tài liệu')

@section('content-page')
    
    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/document/document/index">Danh sách tài liệu</a></li>
            <li class="active">Thêm tài liệu</li>
        </ul>


        <div class="main-header">
            <h2>Thêm tài liệu</h2>
            <em>Các trường có dấu * là bắt buộc phải nhập</em>
        </div>
        <input id="progress_key" name="PHP_SESSION_UPLOAD_PROGRESS" type="hidden"
            value="5f1878d39ff2b">
        <form method="post" name="documentIndex" class="col-md-12" enctype="multipart/form-data"
            id="documentIndex" action="{{ route('post.document.document.store') }}">
            @csrf
            <div class="form-horizontal">
                <div class="col-md-6 ">
                    <fieldset>
                        <legend>Thông tin tài liệu </legend>
                        <div class="form-group"><label class="col-md-4 control-label required">Công
                                ty: <span class="required">*</span> </label>
                            <div class="col-md-8">
                                <select name="companyId" id="companyId" class="form-control" required>
                                    <option value="">- Công ty -</option>
                                    @include('document::pages.document.include._inc_recursiveInput',[
                                        'data' => $companies,
                                        'parentId' => null,
                                        'note' => '--'
                                    ]) 
                                </select>
                            </div>
                        </div>
                        <div class="form-group"><label class="col-md-4 control-label">Phòng
                                ban:</label>
                            <div class="col-md-8">
                                <select name="departmentId" id="departmentId"
                                    class="form-control">
                                    <option value="">- Phòng ban -</option>
                                    <option value="1270">Kinh doanh Nhanh.vn</option>
                                    <option value="950">-- Nhanh.vn Hà Nội</option>
                                    <option value="1072">-- -- Nhanh HN - KD1_LanNT</option>
                                    <option value="1133">-- -- Nhanh HN - KD6_LâmVN</option>
                                    <option value="1157">-- -- Nhanh HN - KD7_ĐiệpNH</option>
                                    <option value="1248">-- -- Nhanh HN - KD11_NganLTT</option>
                                    <option value="1269">-- -- CTV Kinh doanh</option>
                                    <option value="1317">-- -- Nhanh HN - Phòng KD5_AnhNX</option>
                                    <option value="1284">-- -- -- Nhanh HN - KD16_TungNH</option>
                                    <option value="1285">-- -- -- Nhanh HN - ThanhTV_Phát triển đối
                                        tác</option>
                                    <option value="1318">-- -- Nhanh HN - Phòng KD2_TùngNT</option>
                                    <option value="1319">-- -- Nhanh HN - Phòng KD3_HuyPV</option>
                                    <option value="1320">-- -- Nhanh HN - Phòng KD4_TrườngVV
                                    </option>
                                    <option value="1241">-- -- -- Nhanh HN - KD10_ThanhPT</option>
                                    <option value="1263">-- -- -- Nhanh HN - KD8_CôngND</option>
                                    <option value="1313">-- -- -- Nhanh HN - KD17_TùngNT</option>
                                    <option value="1292">-- Nhanh Nghệ An</option>
                                    <option value="1439">-- Phòng đại lý</option>
                                    <option value="1440">-- -- HN - Đại lý - KD5_AnhNX</option>
                                    <option value="1445">-- -- HN - Đại lý - KD18_ThanhNT</option>
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
                                    <option value="1147">-- Chăm sóc khách hàng - UyênTL</option>
                                    <option value="1209">-- Support văn phòng</option>
                                    <option value="1387">-- Phòng nhân sự - Nhanh.vn</option>
                                    <option value="1459">Khối sale dịch vụ mkt</option>
                                    <option value="845">-- Marketing</option>
                                    <option value="1386">-- Sale Marketing</option>
                                    <option value="1419">-- Ecomcare</option>
                                    <option value="1457">-- Phòng dịch vụ SEO GG MAPS</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group"><label class="col-md-4 control-label required">Danh
                                mục: <span class="required">*</span> </label>
                            <div class="col-md-8">
                                <select name="categoryId" id="categoryId"
                                    class="form-control" required>
                                    <option value="">- Danh mục tài liệu -</option>
                                    @include('document::pages.document.include._inc_recursiveInput',[
                                        'data' => $categories,
                                        'parentId' => null,
                                        'note' => '--'
                                    ])
                                </select>
                            </div>
                        </div>
                        <div class="form-group"><label class="col-md-4 control-label required">Tên :
                                <span class="required">*</span> </label>
                            <div class="col-md-8"><input type="text" name="name" maxlength="255"
                                    id="name" class="form-control" value="" required></div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-md-6 ">
                    <fieldset>
                        <legend>Đính kèm</legend>
                        <div class="form-group"><label class="col-md-4 control-label">File
                                upload:</label>
                            <div class="col-md-8"><input type="file" name="fileUpload[]"
                                    multiple="multiple" id="fileUpload"></div>
                        </div>
                    </fieldset>
                </div><input type="hidden" name="randomString" id="randomString" value="d43rixmDbk">
                <div style="clear:both"></div>
                <div class="col-md-12">
                    <div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Nội dung :</label>
                            <div class="col-md-10">
                                <textarea name="content" id="editor">

                                </textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="clear:both"></div>
                <div class="col-md-12">
                    <div>
                        <div class="form-group"><label class="col-md-2 control-label">Sau khi lưu dữ
                                liệu:</label>
                            <div class="col-md-10"><label class="radio radio-inline"><input
                                        checked="checked" type="radio"
                                        value="/document/document/view" name="afterSubmit">Hiện chi
                                    tiết tài liệu</label><label class="radio radio-inline"><input
                                        type="radio" value="continue"
                                        name="afterSubmit">Tiếp tục nhập</label><label
                                    class="radio radio-inline"><input type="radio"
                                        value="show" name="afterSubmit">Hiện
                                    danh sách loại tài liệu</label></div>
                        </div>
                    </div>
                </div>
                <div style="clear:both"></div>
                <div class="col-md-6">
                    <div>
                        <div class="form-group"><label class="col-md-4 control-label"></label>
                            <div class="col-md-8"><input name="submit" type="submit"
                                    id="btnSaveCrmContact" class="btn btn-primary"
                                    style="position:relative;z-index:10" value="Lưu"></div>
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" name="author" value="{{ Auth::user()->id }}">
        </form>
        <div id="alertSave"></div>
        <style>
            #alertSave {
                position: fixed;
                bottom: 20px;
                left: 20px;
                background: rgba(0, 0, 0, 0.7);
                z-index: 500;
                padding: 2px 11px;
                color: #eee;
                font-size: 13px;
                display: none;
                bottom: 20px;
            }

            #documentIndex .col-md-6:nth-last-child(1) {
                left: 24%;
                position: absolute;
                width: 75px;
                display: inline-block;
                padding-left: 0px;
            }

            #documentIndex .col-md-6:nth-last-child(2) {
                position: absolute;
                left: 0px;
            }

            .form-horizontal {
                clear: both;
                padding-bottom: 60px;
            }

            #attachFiles {
                clear: both;
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
    <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'editor' );
    </script>
    <script type="text/javascript" src="{{ asset('/js/document/document/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/document/document/getfirebaseconfig') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('/js/document/document/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/document/document/app.js') }}"></script>
    
    

@endsection