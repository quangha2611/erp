@extends('crm::layouts.master')

@section('title','ERP-Thêm mẫu in')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/crm/contract/style.css') }}" type="text/css">
    <script type="text/javascript" src="{{ asset('js/crm/contract/config.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/crm/contract/editor.css') }}">
    <script type="text/javascript" src="{{ asset('js/crm/contract/vi.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/contract/styles.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/contract/plugin.js') }}"></script>
@endsection

@section('content-page')

    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/document/contract/template">Danh sách mẫu hợp đồng</a>
            </li>
            <li class="active">Thêm hợp đồng mẫu</li>
        </ul>

        <div class="main-header">
            <h2>Thêm hợp đồng mẫu</h2>
            <em><b>Mẫu keyword: </b><a target="_blank"
                    href="https://erp.nhanh.vn/home/media/download?type=9&amp;f=keyword.docx">Keyword.docx</a>
            </em>
        </div>
        <form id="contractTemplate" enctype="multipart/form-data" name="template"
            method="post" action="{{ route('post.crm.contract.storeTemplate') }}">
            @csrf
            <div class="form-horizontal">
                <div class="col-md-6">
                    <fieldset style="margin-bottom: 10px;">
                        <div class="form-group">
                            <label class="col-md-4 control-label required">Công ty:<span
                                    class="required">*</span> </label>
                            <div class="col-md-8">
                                <select name="company_id" id="companyId" class="form-control" required>
                                    <option value="">- Công ty -</option>
                                    @include('crm::pages.contract.include._inc_recursiveInput',[
                                        'data' => $companies,
                                        'parentId' => NULL,
                                        'note' => '--'
                                    ])
                                </select> 
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label required">Tiêu đề:<span
                                    class="required">*</span> </label>
                            <div class="col-md-8">
                                <input type="text" name="name" minlength="4" maxlength="255" id="name"
                                    class="form-control" required> </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label required">File upload:<span
                                    class="required">*</span> </label>
                            <div class="col-md-8">
                                <input type="file" name="fileUpload" id="fileUpload" required> </div>
                        </div>
                    </fieldset>
                </div>
                <div style="clear: both"></div>

                <div class="col-md-12">
                    <fieldset>
                        <legend>Nội dung</legend>
                        <div class="form-group">
                            <div class="col-md-12">
                                <textarea name="description" 
                                    style="height: 450px; width:100%"></textarea>
                            </div>
                        </div>
                    </fieldset>
                </div>
                <div style="clear: both"></div>
                <div class="col-md-12">
                    <div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Sau khi lưu dữ liệu:</label>
                            <div class="col-md-10">
                                <label class="radio radio-inline"><input type="radio"
                                        value="continue" name="afterSubmit">Tiếp
                                    tục nhập mẫu hợp đồng</label><label
                                    class="radio radio-inline"><input checked="checked" type="radio"
                                        value="show" name="afterSubmit">Hiện danh
                                    sách mẫu hợp đồng</label> </div>
                        </div>
                    </div>
                </div>
                <div style="clear: both"></div>
                <div class="col-md-6">
                    <div>
                        <div class="form-group">
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-8">
                                <button class="btn btn-primary" type="submit">Lưu</button>
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" name="contract_type_id" value="{{ rand(1,10) }}">
        </form>

        <!-- Modal -->
        <div class="modal fade" id="keywordModal" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Danh sách từ khóa</h4>
                    </div>
                    <div class="modal-body clearfix">
                        <div class="col-md-12">

                            <fieldset>
                                <legend class="text-primary">Hợp đồng</legend>
                                <label class="col-md-6">
                                    <input type="checkbox" class="keyword" data-key="__NGAY_KY__">
                                    &nbsp;<b>__NGAY_KY__: </b>Ngày ký hợp đồng </label>
                                <label class="col-md-6">
                                    <input type="checkbox" class="keyword"
                                        data-key="__NGAY_BAT_DAU__">
                                    &nbsp;<b>__NGAY_BAT_DAU__: </b>Ngày bắt đầu </label>
                                <label class="col-md-6">
                                    <input type="checkbox" class="keyword"
                                        data-key="__NGAY_KET_THUC__">
                                    &nbsp;<b>__NGAY_KET_THUC__: </b>Ngày kết thúc </label>
                                <label class="col-md-6">
                                    <input type="checkbox" class="keyword" data-key="__NGAY_TAO__">
                                    &nbsp;<b>__NGAY_TAO__: </b>Ngày tạo hợp đồng </label>
                                <label class="col-md-6">
                                    <input type="checkbox" class="keyword"
                                        data-key="__SO_HOP_DONG__">
                                    &nbsp;<b>__SO_HOP_DONG__: </b>Hợp đồng số.. </label>
                                <label class="col-md-6">
                                    <input type="checkbox" class="keyword"
                                        data-key="__EMAIL_NGUOI_TAO__">
                                    &nbsp;<b>__EMAIL_NGUOI_TAO__: </b>Email người tạo </label>
                                <label class="col-md-6">
                                    <input type="checkbox" class="keyword"
                                        data-key="__DT_NGUOI_TAO__">
                                    &nbsp;<b>__DT_NGUOI_TAO__: </b>Điện thoại người tạo </label>
                                <label class="col-md-6">
                                    <input type="checkbox" class="keyword"
                                        data-key="__TEN_NGUOI_TAO__">
                                    &nbsp;<b>__TEN_NGUOI_TAO__: </b>Người tạo </label>
                                <label class="col-md-6">
                                    <input type="checkbox" class="keyword"
                                        data-key="__MA_HOP_DONG__">
                                    &nbsp;<b>__MA_HOP_DONG__: </b>Mã hợp đồng </label>


                                <legend class="text-primary">Bên A</legend>
                                <label class="col-md-6">
                                    <input type="checkbox" class="keyword"
                                        data-key="__BEN_A__NSD_LĐ__">
                                    &nbsp;<b>__BEN_A__NSD_LĐ__: </b>Bên A </label>

                                <legend class="text-primary">Bên B</legend>
                                <label class="col-md-6">
                                    <input type="checkbox" class="keyword"
                                        data-key="__DAI_DIEN_BEN_B__">
                                    &nbsp;<b>__DAI_DIEN_BEN_B__: </b>Đại diện bên B </label>
                                <label class="col-md-6">
                                    <input type="checkbox" class="keyword"
                                        data-key="__PHU_TRACH_BEN_B__">
                                    &nbsp;<b>__PHU_TRACH_BEN_B__: </b>__PHU_TRACH_BEN_B__ </label>
                                <label class="col-md-6">
                                    <input type="checkbox" class="keyword"
                                        data-key="__CHUC_DANH_BEN_B__">
                                    &nbsp;<b>__CHUC_DANH_BEN_B__: </b>Chức danh bên B </label>
                                <label class="col-md-6">
                                    <input type="checkbox" class="keyword"
                                        data-key="__CHUC_VU_BEN_B___">
                                    &nbsp;<b>__CHUC_VU_BEN_B___: </b>Chức vụ (Đại diện bên B)
                                </label>
                                <label class="col-md-6">
                                    <input type="checkbox" class="keyword"
                                        data-key="__DIA_CHI_THUONG_TRU_BEN_B__">
                                    &nbsp;<b>__DIA_CHI_THUONG_TRU_BEN_B__: </b>Địa chỉ (Đại diện bên
                                    B) </label>
                                <label class="col-md-6">
                                    <input type="checkbox" class="keyword"
                                        data-key="__NGUYEN_QUAN_BEN_B__">
                                    &nbsp;<b>__NGUYEN_QUAN_BEN_B__: </b>Nguyên quán (Đại diện bên B)
                                </label>
                                <label class="col-md-6">
                                    <input type="checkbox" class="keyword"
                                        data-key="__CMND_BEN_B__">
                                    &nbsp;<b>__CMND_BEN_B__: </b>Chứng minh thư nhân dân </label>
                                <label class="col-md-6">
                                    <input type="checkbox" class="keyword"
                                        data-key="__EMAIL_BEN_B__">
                                    &nbsp;<b>__EMAIL_BEN_B__: </b>Email bên B </label>
                                <label class="col-md-6">
                                    <input type="checkbox" class="keyword" data-key="__DT_BEN_B__">
                                    &nbsp;<b>__DT_BEN_B__: </b>Điện thoại bên B </label>
                                <label class="col-md-6">
                                    <input type="checkbox" class="keyword" data-key="__NGAY_CAP__">
                                    &nbsp;<b>__NGAY_CAP__: </b>Ngày cấp CMND </label>
                                <label class="col-md-6">
                                    <input type="checkbox" class="keyword" data-key="__NOI_CAP__">
                                    &nbsp;<b>__NOI_CAP__: </b>Nơi cấp cấp CMND </label>
                                <label class="col-md-6">
                                    <input type="checkbox" class="keyword"
                                        data-key="__NGAY_SINH_B__">
                                    &nbsp;<b>__NGAY_SINH_B__: </b>Ngày sinh </label>
                                <label class="col-md-6">
                                    <input type="checkbox" class="keyword"
                                        data-key="__NOI_SINH_B__">
                                    &nbsp;<b>__NOI_SINH_B__: </b>Nơi sinh </label>
                                <label class="col-md-6">
                                    <input type="checkbox" class="keyword"
                                        data-key="__SO_TK_NGAN_HANG_BEN_B__">
                                    &nbsp;<b>__SO_TK_NGAN_HANG_BEN_B__: </b>Số tài khoản ngân hàng
                                </label>
                            </fieldset>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary use-keyword">Sử dụng</button>
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Đóng</button>

                    </div>
                </div>
            </div>
        </div>
        <style>
            #keywordModal .modal-dialog {
                width: 800px;
            }

            #keywordModal .modal-dialog .modal-body {
                max-height: 400px;
                overflow-y: scroll;
            }

            #keywordModal .modal-body>div.keyword-box {
                margin-bottom: 10px;
            }

            #keywordModal .modal-body>div.keyword-box>input[type="checkbox"] {
                margin-right: 5px;
                display: inline-block;
                vertical-align: top;
            }

            #keywordModal .modal-body>div.keyword-box>label {
                display: inline-block;
                width: 90%;
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
    <script type="text/javascript" src="{{ asset('js/crm/contract/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/contract/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/contract/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/contract/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/contract/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/contract/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/contract/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/contract/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/contract/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('js/crm/contract/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/contract/addtemplate.js') }}"></script>
@endsection