@extends('Layout.master')

@section('title','ERP-Danh hợp đồng hết hạn')

@section('css')
    <link href=".{{ asset('asset/css/crm/contract/bootstrap-multiselect.css') }}" media="screen" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="{{ asset('asset/css/crm/contract/style.css') }}" type="text/css">
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
        <form id="contractTemplate" enctype="multipart/form-data" name="contractTemplate"
            method="post" action="https://erp.nhanh.vn/crm/contract/addtemplate">
            <div class="form-horizontal">
                <div class="col-md-6">
                    <fieldset style="margin-bottom: 10px;">
                        <div class="form-group">
                            <label class="col-md-4 control-label required">Công ty:<span
                                    class="required">*</span> </label>
                            <div class="col-md-8">
                                <select name="companyId" id="companyId" class="form-control">
                                    <option value="">- Công ty -</option>
                                    <option value="10">VNP group</option>
                                    <option value="2">--Công ty cổ phần Vật Giá Việt Nam</option>
                                    <option value="315">----Vật giá - Hà Nội</option>
                                    <option value="319">----Vật giá - Hồ Chí Minh</option>
                                    <option value="365">----Vật giá - Hải Phòng</option>
                                    <option value="387">----WeSave</option>
                                    <option value="389">----123doc.org</option>
                                    <option value="390">----Cunghocvui.com</option>
                                    <option value="391">----123job.vn</option>
                                    <option value="392">----9houz.com</option>
                                    <option value="393">----123dok.com</option>
                                    <option value="321">--Công ty cổ phần TMDT Bảo Kim</option>
                                    <option value="322">----Bảo Kim - Hà Nội</option>
                                    <option value="323">----Bảo Kim - Hồ Chí Minh</option>
                                    <option value="324">--Công ty cổ phần Nhanh.vn</option>
                                    <option value="1">----Nhanh.vn</option>
                                    <option value="366">----Nhanh.vn Đà Nẵng</option>
                                    <option value="395">----Nhanh.vn HCM</option>
                                    <option value="379">--Westay</option>
                                    <option value="384">--Công ty cổ phần WeHelp</option>
                                    <option value="398">--WeLove</option>
                                </select> </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label required">Tiêu đề:<span
                                    class="required">*</span> </label>
                            <div class="col-md-8">
                                <input type="text" name="name" maxlength="255" id="name"
                                    class="form-control" value=""> </div>
                        </div>
                        <!-- <div class="form-group">
    <label class="col-md-4 control-label">Từ khóa: </label>
    <div class="col-md-8">
    <a class="add-keyword btn btn-info btn-sm"><i class="fa fa-search"></i> Chọn từ khóa</a>
    </div>
    </div>  -->
                        <div class="form-group">
                            <label class="col-md-4 control-label required">File upload:<span
                                    class="required">*</span> </label>
                            <div class="col-md-8">
                                <input type="file" name="fileUpload" id="fileUpload"> </div>
                        </div>
                    </fieldset>
                </div>
                <div style="clear: both"></div>

                <div class="col-md-12">
                    <fieldset>
                        <legend>Nội dung</legend>
                        <div class="form-group">
                            <div class="col-md-12">
                                <textarea name="content" class="fullEditor"
                                    style="height: 450px; visibility: hidden; display: none;"
                                    id="content"></textarea>
                                <div id="cke_content"
                                    class="cke_1 cke cke_reset cke_chrome cke_editor_content cke_ltr cke_browser_webkit"
                                    dir="ltr" lang="vi" role="application"
                                    aria-labelledby="cke_content_arialbl"><span
                                        id="cke_content_arialbl" class="cke_voice_label">Bộ soạn
                                        thảo văn bản có định dạng, content</span>
                                    <div class="cke_inner cke_reset" role="presentation"><span
                                            id="cke_1_top" class="cke_top cke_reset_all"
                                            role="presentation"
                                            style="height: auto; user-select: none;"><span
                                                id="cke_9" class="cke_voice_label">Thanh công
                                                cụ</span><span id="cke_1_toolbox"
                                                class="cke_toolbox" role="group"
                                                aria-labelledby="cke_9"
                                                onmousedown="return false;"><span id="cke_14"
                                                    class="cke_toolbar"
                                                    aria-labelledby="cke_14_label"
                                                    role="toolbar"><span id="cke_14_label"
                                                        class="cke_voice_label">Tài liệu</span><span
                                                        class="cke_toolbar_start"></span><span
                                                        class="cke_toolgroup" role="presentation"><a
                                                            id="cke_15"
                                                            class="cke_button cke_button__source  cke_button_off"
                                                            href="javascript:void(&#39;Mã HTML&#39;)"
                                                            title="Mã HTML" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_15_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(2,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(3,event);"
                                                            onclick="CKEDITOR.tools.callFunction(4,this);return false;"><span
                                                                class="cke_button_icon cke_button__source_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -1824px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_15_label"
                                                                class="cke_button_label cke_button__source_label"
                                                                aria-hidden="false">Mã
                                                                HTML</span></a><span
                                                            class="cke_toolbar_separator"
                                                            role="separator"></span><a id="cke_16"
                                                            class="cke_button cke_button__save  cke_button_off"
                                                            href="javascript:void(&#39;Lưu&#39;)"
                                                            title="Lưu" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_16_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(5,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(6,event);"
                                                            onclick="CKEDITOR.tools.callFunction(7,this);return false;"><span
                                                                class="cke_button_icon cke_button__save_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -1704px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_16_label"
                                                                class="cke_button_label cke_button__save_label"
                                                                aria-hidden="false">Lưu</span></a><a
                                                            id="cke_17"
                                                            class="cke_button cke_button__newpage  cke_button_off"
                                                            href="javascript:void(&#39;Trang mới&#39;)"
                                                            title="Trang mới" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_17_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(8,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(9,event);"
                                                            onclick="CKEDITOR.tools.callFunction(10,this);return false;"><span
                                                                class="cke_button_icon cke_button__newpage_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -1440px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_17_label"
                                                                class="cke_button_label cke_button__newpage_label"
                                                                aria-hidden="false">Trang
                                                                mới</span></a><a id="cke_18"
                                                            class="cke_button cke_button__preview  cke_button_off"
                                                            href="javascript:void(&#39;Xem trước&#39;)"
                                                            title="Xem trước" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_18_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(11,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(12,event);"
                                                            onclick="CKEDITOR.tools.callFunction(13,this);return false;"><span
                                                                class="cke_button_icon cke_button__preview_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -1632px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_18_label"
                                                                class="cke_button_label cke_button__preview_label"
                                                                aria-hidden="false">Xem
                                                                trước</span></a><a id="cke_19"
                                                            class="cke_button cke_button__print  cke_button_off"
                                                            href="javascript:void(&#39;In&#39;)"
                                                            title="In" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_19_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(14,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(15,event);"
                                                            onclick="CKEDITOR.tools.callFunction(16,this);return false;"><span
                                                                class="cke_button_icon cke_button__print_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -1656px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_19_label"
                                                                class="cke_button_label cke_button__print_label"
                                                                aria-hidden="false">In</span></a><span
                                                            class="cke_toolbar_separator"
                                                            role="separator"></span><a id="cke_20"
                                                            class="cke_button cke_button__templates  cke_button_off"
                                                            href="javascript:void(&#39;Mẫu dựng sẵn&#39;)"
                                                            title="Mẫu dựng sẵn" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_20_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(17,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(18,event);"
                                                            onclick="CKEDITOR.tools.callFunction(19,this);return false;"><span
                                                                class="cke_button_icon cke_button__templates_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -456px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_20_label"
                                                                class="cke_button_label cke_button__templates_label"
                                                                aria-hidden="false">Mẫu dựng
                                                                sẵn</span></a></span><span
                                                        class="cke_toolbar_end"></span></span><span
                                                    id="cke_21" class="cke_toolbar"
                                                    aria-labelledby="cke_21_label"
                                                    role="toolbar"><span id="cke_21_label"
                                                        class="cke_voice_label">Clipboard/Undo</span><span
                                                        class="cke_toolbar_start"></span><span
                                                        class="cke_toolgroup" role="presentation"><a
                                                            id="cke_22"
                                                            class="cke_button cke_button__cut cke_button_disabled "
                                                            href="javascript:void(&#39;Cắt&#39;)"
                                                            title="Cắt" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_22_label"
                                                            aria-haspopup="false"
                                                            aria-disabled="true"
                                                            onkeydown="return CKEDITOR.tools.callFunction(20,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(21,event);"
                                                            onclick="CKEDITOR.tools.callFunction(22,this);return false;"><span
                                                                class="cke_button_icon cke_button__cut_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -312px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_22_label"
                                                                class="cke_button_label cke_button__cut_label"
                                                                aria-hidden="false">Cắt</span></a><a
                                                            id="cke_23"
                                                            class="cke_button cke_button__copy cke_button_disabled "
                                                            href="javascript:void(&#39;Sao chép&#39;)"
                                                            title="Sao chép" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_23_label"
                                                            aria-haspopup="false"
                                                            aria-disabled="true"
                                                            onkeydown="return CKEDITOR.tools.callFunction(23,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(24,event);"
                                                            onclick="CKEDITOR.tools.callFunction(25,this);return false;"><span
                                                                class="cke_button_icon cke_button__copy_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -264px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_23_label"
                                                                class="cke_button_label cke_button__copy_label"
                                                                aria-hidden="false">Sao
                                                                chép</span></a><a id="cke_24"
                                                            class="cke_button cke_button__paste  cke_button_off"
                                                            href="javascript:void(&#39;Dán&#39;)"
                                                            title="Dán" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_24_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(26,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(27,event);"
                                                            onclick="CKEDITOR.tools.callFunction(28,this);return false;"><span
                                                                class="cke_button_icon cke_button__paste_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -360px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_24_label"
                                                                class="cke_button_label cke_button__paste_label"
                                                                aria-hidden="false">Dán</span></a><a
                                                            id="cke_25"
                                                            class="cke_button cke_button__pastetext  cke_button_off"
                                                            href="javascript:void(&#39;Dán theo định dạng văn bản thuần&#39;)"
                                                            title="Dán theo định dạng văn bản thuần"
                                                            tabindex="-1" hidefocus="true"
                                                            role="button"
                                                            aria-labelledby="cke_25_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(29,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(30,event);"
                                                            onclick="CKEDITOR.tools.callFunction(31,this);return false;"><span
                                                                class="cke_button_icon cke_button__pastetext_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -1536px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_25_label"
                                                                class="cke_button_label cke_button__pastetext_label"
                                                                aria-hidden="false">Dán theo định
                                                                dạng văn bản thuần</span></a><a
                                                            id="cke_26"
                                                            class="cke_button cke_button__pastefromword  cke_button_off"
                                                            href="javascript:void(&#39;Dán với định dạng Word&#39;)"
                                                            title="Dán với định dạng Word"
                                                            tabindex="-1" hidefocus="true"
                                                            role="button"
                                                            aria-labelledby="cke_26_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(32,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(33,event);"
                                                            onclick="CKEDITOR.tools.callFunction(34,this);return false;"><span
                                                                class="cke_button_icon cke_button__pastefromword_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -1584px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_26_label"
                                                                class="cke_button_label cke_button__pastefromword_label"
                                                                aria-hidden="false">Dán với định
                                                                dạng Word</span></a><span
                                                            class="cke_toolbar_separator"
                                                            role="separator"></span><a id="cke_27"
                                                            class="cke_button cke_button__undo cke_button_disabled "
                                                            href="javascript:void(&#39;Khôi phục thao tác&#39;)"
                                                            title="Khôi phục thao tác" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_27_label"
                                                            aria-haspopup="false"
                                                            aria-disabled="true"
                                                            onkeydown="return CKEDITOR.tools.callFunction(35,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(36,event);"
                                                            onclick="CKEDITOR.tools.callFunction(37,this);return false;"><span
                                                                class="cke_button_icon cke_button__undo_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -1992px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_27_label"
                                                                class="cke_button_label cke_button__undo_label"
                                                                aria-hidden="false">Khôi phục thao
                                                                tác</span></a><a id="cke_28"
                                                            class="cke_button cke_button__redo cke_button_disabled "
                                                            href="javascript:void(&#39;Làm lại thao tác&#39;)"
                                                            title="Làm lại thao tác" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_28_label"
                                                            aria-haspopup="false"
                                                            aria-disabled="true"
                                                            onkeydown="return CKEDITOR.tools.callFunction(38,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(39,event);"
                                                            onclick="CKEDITOR.tools.callFunction(40,this);return false;"><span
                                                                class="cke_button_icon cke_button__redo_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -1944px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_28_label"
                                                                class="cke_button_label cke_button__redo_label"
                                                                aria-hidden="false">Làm lại thao
                                                                tác</span></a></span><span
                                                        class="cke_toolbar_end"></span></span><span
                                                    id="cke_29" class="cke_toolbar"
                                                    aria-labelledby="cke_29_label"
                                                    role="toolbar"><span id="cke_29_label"
                                                        class="cke_voice_label">Chỉnh
                                                        sửa</span><span
                                                        class="cke_toolbar_start"></span><span
                                                        class="cke_toolgroup" role="presentation"><a
                                                            id="cke_30"
                                                            class="cke_button cke_button__find  cke_button_off"
                                                            href="javascript:void(&#39;Tìm kiếm&#39;)"
                                                            title="Tìm kiếm" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_30_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(41,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(42,event);"
                                                            onclick="CKEDITOR.tools.callFunction(43,this);return false;"><span
                                                                class="cke_button_icon cke_button__find_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -528px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_30_label"
                                                                class="cke_button_label cke_button__find_label"
                                                                aria-hidden="false">Tìm
                                                                kiếm</span></a><a id="cke_31"
                                                            class="cke_button cke_button__replace  cke_button_off"
                                                            href="javascript:void(&#39;Thay thế&#39;)"
                                                            title="Thay thế" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_31_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(44,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(45,event);"
                                                            onclick="CKEDITOR.tools.callFunction(46,this);return false;"><span
                                                                class="cke_button_icon cke_button__replace_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -552px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_31_label"
                                                                class="cke_button_label cke_button__replace_label"
                                                                aria-hidden="false">Thay
                                                                thế</span></a><span
                                                            class="cke_toolbar_separator"
                                                            role="separator"></span><a id="cke_32"
                                                            class="cke_button cke_button__selectall  cke_button_off"
                                                            href="javascript:void(&#39;Chọn tất cả&#39;)"
                                                            title="Chọn tất cả" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_32_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(47,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(48,event);"
                                                            onclick="CKEDITOR.tools.callFunction(49,this);return false;"><span
                                                                class="cke_button_icon cke_button__selectall_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -1728px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_32_label"
                                                                class="cke_button_label cke_button__selectall_label"
                                                                aria-hidden="false">Chọn tất
                                                                cả</span></a><span
                                                            class="cke_toolbar_separator"
                                                            role="separator"></span><a id="cke_33"
                                                            class="cke_button cke_button__scayt cke_button_off "
                                                            href="javascript:void(&#39;&#39;)"
                                                            title="" tabindex="-1" hidefocus="true"
                                                            role="button"
                                                            aria-labelledby="cke_33_label"
                                                            aria-haspopup="true"
                                                            onkeydown="return CKEDITOR.tools.callFunction(50,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(51,event);"
                                                            onclick="CKEDITOR.tools.callFunction(52,this);return false;"><span
                                                                class="cke_button_icon cke_button__scayt_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -1872px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_33_label"
                                                                class="cke_button_label cke_button__scayt_label"
                                                                aria-hidden="false"></span><span
                                                                class="cke_button_arrow"></span></a></span><span
                                                        class="cke_toolbar_end"></span></span><span
                                                    id="cke_34" class="cke_toolbar"
                                                    aria-labelledby="cke_34_label"
                                                    role="toolbar"><span id="cke_34_label"
                                                        class="cke_voice_label">Bảng
                                                        biểu</span><span
                                                        class="cke_toolbar_start"></span><span
                                                        class="cke_toolgroup" role="presentation"><a
                                                            id="cke_35"
                                                            class="cke_button cke_button__form  cke_button_off"
                                                            href="javascript:void(&#39;Biểu mẫu&#39;)"
                                                            title="Biểu mẫu" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_35_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(53,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(54,event);"
                                                            onclick="CKEDITOR.tools.callFunction(55,this);return false;"><span
                                                                class="cke_button_icon cke_button__form_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -648px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_35_label"
                                                                class="cke_button_label cke_button__form_label"
                                                                aria-hidden="false">Biểu
                                                                mẫu</span></a><a id="cke_36"
                                                            class="cke_button cke_button__checkbox  cke_button_off"
                                                            href="javascript:void(&#39;Nút kiểm&#39;)"
                                                            title="Nút kiểm" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_36_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(56,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(57,event);"
                                                            onclick="CKEDITOR.tools.callFunction(58,this);return false;"><span
                                                                class="cke_button_icon cke_button__checkbox_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -624px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_36_label"
                                                                class="cke_button_label cke_button__checkbox_label"
                                                                aria-hidden="false">Nút
                                                                kiểm</span></a><a id="cke_37"
                                                            class="cke_button cke_button__radio  cke_button_off"
                                                            href="javascript:void(&#39;Nút chọn&#39;)"
                                                            title="Nút chọn" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_37_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(59,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(60,event);"
                                                            onclick="CKEDITOR.tools.callFunction(61,this);return false;"><span
                                                                class="cke_button_icon cke_button__radio_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -720px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_37_label"
                                                                class="cke_button_label cke_button__radio_label"
                                                                aria-hidden="false">Nút
                                                                chọn</span></a><a id="cke_38"
                                                            class="cke_button cke_button__textfield  cke_button_off"
                                                            href="javascript:void(&#39;Trường văn bản&#39;)"
                                                            title="Trường văn bản" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_38_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(62,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(63,event);"
                                                            onclick="CKEDITOR.tools.callFunction(64,this);return false;"><span
                                                                class="cke_button_icon cke_button__textfield_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -864px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_38_label"
                                                                class="cke_button_label cke_button__textfield_label"
                                                                aria-hidden="false">Trường văn
                                                                bản</span></a><a id="cke_39"
                                                            class="cke_button cke_button__textarea  cke_button_off"
                                                            href="javascript:void(&#39;Vùng văn bản&#39;)"
                                                            title="Vùng văn bản" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_39_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(65,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(66,event);"
                                                            onclick="CKEDITOR.tools.callFunction(67,this);return false;"><span
                                                                class="cke_button_icon cke_button__textarea_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -816px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_39_label"
                                                                class="cke_button_label cke_button__textarea_label"
                                                                aria-hidden="false">Vùng văn
                                                                bản</span></a><a id="cke_40"
                                                            class="cke_button cke_button__select  cke_button_off"
                                                            href="javascript:void(&#39;Ô chọn&#39;)"
                                                            title="Ô chọn" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_40_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(68,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(69,event);"
                                                            onclick="CKEDITOR.tools.callFunction(70,this);return false;"><span
                                                                class="cke_button_icon cke_button__select_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -768px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_40_label"
                                                                class="cke_button_label cke_button__select_label"
                                                                aria-hidden="false">Ô
                                                                chọn</span></a><a id="cke_41"
                                                            class="cke_button cke_button__button  cke_button_off"
                                                            href="javascript:void(&#39;Nút&#39;)"
                                                            title="Nút" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_41_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(71,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(72,event);"
                                                            onclick="CKEDITOR.tools.callFunction(73,this);return false;"><span
                                                                class="cke_button_icon cke_button__button_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -600px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_41_label"
                                                                class="cke_button_label cke_button__button_label"
                                                                aria-hidden="false">Nút</span></a><a
                                                            id="cke_42"
                                                            class="cke_button cke_button__imagebutton  cke_button_off"
                                                            href="javascript:void(&#39;Nút hình ảnh&#39;)"
                                                            title="Nút hình ảnh" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_42_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(74,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(75,event);"
                                                            onclick="CKEDITOR.tools.callFunction(76,this);return false;"><span
                                                                class="cke_button_icon cke_button__imagebutton_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -696px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_42_label"
                                                                class="cke_button_label cke_button__imagebutton_label"
                                                                aria-hidden="false">Nút hình
                                                                ảnh</span></a><a id="cke_43"
                                                            class="cke_button cke_button__hiddenfield  cke_button_off"
                                                            href="javascript:void(&#39;Trường ẩn&#39;)"
                                                            title="Trường ẩn" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_43_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(77,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(78,event);"
                                                            onclick="CKEDITOR.tools.callFunction(79,this);return false;"><span
                                                                class="cke_button_icon cke_button__hiddenfield_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -672px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_43_label"
                                                                class="cke_button_label cke_button__hiddenfield_label"
                                                                aria-hidden="false">Trường
                                                                ẩn</span></a></span><span
                                                        class="cke_toolbar_end"></span></span><span
                                                    class="cke_toolbar_break"></span><span
                                                    id="cke_44" class="cke_toolbar"
                                                    aria-labelledby="cke_44_label"
                                                    role="toolbar"><span id="cke_44_label"
                                                        class="cke_voice_label">Kiểu cơ
                                                        bản</span><span
                                                        class="cke_toolbar_start"></span><span
                                                        class="cke_toolgroup" role="presentation"><a
                                                            id="cke_45"
                                                            class="cke_button cke_button__bold  cke_button_off"
                                                            href="javascript:void(&#39;Đậm&#39;)"
                                                            title="Đậm" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_45_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(80,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(81,event);"
                                                            onclick="CKEDITOR.tools.callFunction(82,this);return false;"><span
                                                                class="cke_button_icon cke_button__bold_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -24px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_45_label"
                                                                class="cke_button_label cke_button__bold_label"
                                                                aria-hidden="false">Đậm</span></a><a
                                                            id="cke_46"
                                                            class="cke_button cke_button__italic  cke_button_off"
                                                            href="javascript:void(&#39;Nghiêng&#39;)"
                                                            title="Nghiêng" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_46_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(83,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(84,event);"
                                                            onclick="CKEDITOR.tools.callFunction(85,this);return false;"><span
                                                                class="cke_button_icon cke_button__italic_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -48px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_46_label"
                                                                class="cke_button_label cke_button__italic_label"
                                                                aria-hidden="false">Nghiêng</span></a><a
                                                            id="cke_47"
                                                            class="cke_button cke_button__underline  cke_button_off"
                                                            href="javascript:void(&#39;Gạch chân&#39;)"
                                                            title="Gạch chân" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_47_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(86,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(87,event);"
                                                            onclick="CKEDITOR.tools.callFunction(88,this);return false;"><span
                                                                class="cke_button_icon cke_button__underline_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -144px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_47_label"
                                                                class="cke_button_label cke_button__underline_label"
                                                                aria-hidden="false">Gạch
                                                                chân</span></a><a id="cke_48"
                                                            class="cke_button cke_button__strike  cke_button_off"
                                                            href="javascript:void(&#39;Gạch xuyên ngang&#39;)"
                                                            title="Gạch xuyên ngang" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_48_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(89,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(90,event);"
                                                            onclick="CKEDITOR.tools.callFunction(91,this);return false;"><span
                                                                class="cke_button_icon cke_button__strike_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -72px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_48_label"
                                                                class="cke_button_label cke_button__strike_label"
                                                                aria-hidden="false">Gạch xuyên
                                                                ngang</span></a><a id="cke_49"
                                                            class="cke_button cke_button__subscript  cke_button_off"
                                                            href="javascript:void(&#39;Chỉ số dưới&#39;)"
                                                            title="Chỉ số dưới" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_49_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(92,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(93,event);"
                                                            onclick="CKEDITOR.tools.callFunction(94,this);return false;"><span
                                                                class="cke_button_icon cke_button__subscript_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -96px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_49_label"
                                                                class="cke_button_label cke_button__subscript_label"
                                                                aria-hidden="false">Chỉ số
                                                                dưới</span></a><a id="cke_50"
                                                            class="cke_button cke_button__superscript  cke_button_off"
                                                            href="javascript:void(&#39;Chỉ số trên&#39;)"
                                                            title="Chỉ số trên" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_50_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(95,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(96,event);"
                                                            onclick="CKEDITOR.tools.callFunction(97,this);return false;"><span
                                                                class="cke_button_icon cke_button__superscript_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -120px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_50_label"
                                                                class="cke_button_label cke_button__superscript_label"
                                                                aria-hidden="false">Chỉ số
                                                                trên</span></a><span
                                                            class="cke_toolbar_separator"
                                                            role="separator"></span><a id="cke_51"
                                                            class="cke_button cke_button__removeformat  cke_button_off"
                                                            href="javascript:void(&#39;Xoá định dạng&#39;)"
                                                            title="Xoá định dạng" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_51_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(98,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(99,event);"
                                                            onclick="CKEDITOR.tools.callFunction(100,this);return false;"><span
                                                                class="cke_button_icon cke_button__removeformat_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -1680px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_51_label"
                                                                class="cke_button_label cke_button__removeformat_label"
                                                                aria-hidden="false">Xoá định
                                                                dạng</span></a></span><span
                                                        class="cke_toolbar_end"></span></span><span
                                                    id="cke_52" class="cke_toolbar"
                                                    aria-labelledby="cke_52_label"
                                                    role="toolbar"><span id="cke_52_label"
                                                        class="cke_voice_label">Đoạn</span><span
                                                        class="cke_toolbar_start"></span><span
                                                        class="cke_toolgroup" role="presentation"><a
                                                            id="cke_53"
                                                            class="cke_button cke_button__numberedlist  cke_button_off"
                                                            href="javascript:void(&#39;Chèn/Xoá Danh sách có thứ tự&#39;)"
                                                            title="Chèn/Xoá Danh sách có thứ tự"
                                                            tabindex="-1" hidefocus="true"
                                                            role="button"
                                                            aria-labelledby="cke_53_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(101,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(102,event);"
                                                            onclick="CKEDITOR.tools.callFunction(103,this);return false;"><span
                                                                class="cke_button_icon cke_button__numberedlist_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -1368px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_53_label"
                                                                class="cke_button_label cke_button__numberedlist_label"
                                                                aria-hidden="false">Chèn/Xoá Danh
                                                                sách có thứ tự</span></a><a
                                                            id="cke_54"
                                                            class="cke_button cke_button__bulletedlist  cke_button_off"
                                                            href="javascript:void(&#39;Chèn/Xoá Danh sách không thứ tự&#39;)"
                                                            title="Chèn/Xoá Danh sách không thứ tự"
                                                            tabindex="-1" hidefocus="true"
                                                            role="button"
                                                            aria-labelledby="cke_54_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(104,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(105,event);"
                                                            onclick="CKEDITOR.tools.callFunction(106,this);return false;"><span
                                                                class="cke_button_icon cke_button__bulletedlist_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -1320px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_54_label"
                                                                class="cke_button_label cke_button__bulletedlist_label"
                                                                aria-hidden="false">Chèn/Xoá Danh
                                                                sách không thứ tự</span></a><span
                                                            class="cke_toolbar_separator"
                                                            role="separator"></span><a id="cke_55"
                                                            class="cke_button cke_button__outdent cke_button_disabled "
                                                            href="javascript:void(&#39;Dịch ra ngoài&#39;)"
                                                            title="Dịch ra ngoài" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_55_label"
                                                            aria-haspopup="false"
                                                            aria-disabled="true"
                                                            onkeydown="return CKEDITOR.tools.callFunction(107,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(108,event);"
                                                            onclick="CKEDITOR.tools.callFunction(109,this);return false;"><span
                                                                class="cke_button_icon cke_button__outdent_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -1032px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_55_label"
                                                                class="cke_button_label cke_button__outdent_label"
                                                                aria-hidden="false">Dịch ra
                                                                ngoài</span></a><a id="cke_56"
                                                            class="cke_button cke_button__indent  cke_button_off"
                                                            href="javascript:void(&#39;Dịch vào trong&#39;)"
                                                            title="Dịch vào trong" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_56_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(110,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(111,event);"
                                                            onclick="CKEDITOR.tools.callFunction(112,this);return false;"><span
                                                                class="cke_button_icon cke_button__indent_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -984px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_56_label"
                                                                class="cke_button_label cke_button__indent_label"
                                                                aria-hidden="false">Dịch vào
                                                                trong</span></a><span
                                                            class="cke_toolbar_separator"
                                                            role="separator"></span><a id="cke_57"
                                                            class="cke_button cke_button__blockquote  cke_button_off"
                                                            href="javascript:void(&#39;Khối trích dẫn&#39;)"
                                                            title="Khối trích dẫn" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_57_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(113,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(114,event);"
                                                            onclick="CKEDITOR.tools.callFunction(115,this);return false;"><span
                                                                class="cke_button_icon cke_button__blockquote_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -216px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_57_label"
                                                                class="cke_button_label cke_button__blockquote_label"
                                                                aria-hidden="false">Khối trích
                                                                dẫn</span></a><a id="cke_58"
                                                            class="cke_button cke_button__creatediv  cke_button_off"
                                                            href="javascript:void(&#39;Tạo khối các thành phần&#39;)"
                                                            title="Tạo khối các thành phần"
                                                            tabindex="-1" hidefocus="true"
                                                            role="button"
                                                            aria-labelledby="cke_58_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(116,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(117,event);"
                                                            onclick="CKEDITOR.tools.callFunction(118,this);return false;"><span
                                                                class="cke_button_icon cke_button__creatediv_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -480px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_58_label"
                                                                class="cke_button_label cke_button__creatediv_label"
                                                                aria-hidden="false">Tạo khối các
                                                                thành phần</span></a><span
                                                            class="cke_toolbar_separator"
                                                            role="separator"></span><a id="cke_59"
                                                            class="cke_button cke_button__justifyleft  cke_button_off"
                                                            href="javascript:void(&#39;Canh trái&#39;)"
                                                            title="Canh trái" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_59_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(119,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(120,event);"
                                                            onclick="CKEDITOR.tools.callFunction(121,this);return false;"><span
                                                                class="cke_button_icon cke_button__justifyleft_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -1128px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_59_label"
                                                                class="cke_button_label cke_button__justifyleft_label"
                                                                aria-hidden="false">Canh
                                                                trái</span></a><a id="cke_60"
                                                            class="cke_button cke_button__justifycenter  cke_button_off"
                                                            href="javascript:void(&#39;Canh giữa&#39;)"
                                                            title="Canh giữa" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_60_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(122,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(123,event);"
                                                            onclick="CKEDITOR.tools.callFunction(124,this);return false;"><span
                                                                class="cke_button_icon cke_button__justifycenter_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -1104px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_60_label"
                                                                class="cke_button_label cke_button__justifycenter_label"
                                                                aria-hidden="false">Canh
                                                                giữa</span></a><a id="cke_61"
                                                            class="cke_button cke_button__justifyright  cke_button_off"
                                                            href="javascript:void(&#39;Canh phải&#39;)"
                                                            title="Canh phải" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_61_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(125,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(126,event);"
                                                            onclick="CKEDITOR.tools.callFunction(127,this);return false;"><span
                                                                class="cke_button_icon cke_button__justifyright_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -1152px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_61_label"
                                                                class="cke_button_label cke_button__justifyright_label"
                                                                aria-hidden="false">Canh
                                                                phải</span></a><a id="cke_62"
                                                            class="cke_button cke_button__justifyblock  cke_button_off"
                                                            href="javascript:void(&#39;Canh đều&#39;)"
                                                            title="Canh đều" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_62_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(128,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(129,event);"
                                                            onclick="CKEDITOR.tools.callFunction(130,this);return false;"><span
                                                                class="cke_button_icon cke_button__justifyblock_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -1080px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_62_label"
                                                                class="cke_button_label cke_button__justifyblock_label"
                                                                aria-hidden="false">Canh
                                                                đều</span></a><span
                                                            class="cke_toolbar_separator"
                                                            role="separator"></span><a id="cke_63"
                                                            class="cke_button cke_button__bidiltr  cke_button_off"
                                                            href="javascript:void(&#39;Văn bản hướng từ trái sang phải&#39;)"
                                                            title="Văn bản hướng từ trái sang phải"
                                                            tabindex="-1" hidefocus="true"
                                                            role="button"
                                                            aria-labelledby="cke_63_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(131,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(132,event);"
                                                            onclick="CKEDITOR.tools.callFunction(133,this);return false;"><span
                                                                class="cke_button_icon cke_button__bidiltr_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -168px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_63_label"
                                                                class="cke_button_label cke_button__bidiltr_label"
                                                                aria-hidden="false">Văn bản hướng từ
                                                                trái sang phải</span></a><a
                                                            id="cke_64"
                                                            class="cke_button cke_button__bidirtl  cke_button_off"
                                                            href="javascript:void(&#39;Văn bản hướng từ phải sang trái&#39;)"
                                                            title="Văn bản hướng từ phải sang trái"
                                                            tabindex="-1" hidefocus="true"
                                                            role="button"
                                                            aria-labelledby="cke_64_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(134,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(135,event);"
                                                            onclick="CKEDITOR.tools.callFunction(136,this);return false;"><span
                                                                class="cke_button_icon cke_button__bidirtl_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -192px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_64_label"
                                                                class="cke_button_label cke_button__bidirtl_label"
                                                                aria-hidden="false">Văn bản hướng từ
                                                                phải sang trái</span></a><a
                                                            id="cke_65"
                                                            class="cke_button cke_button__language  cke_button_off"
                                                            href="javascript:void(&#39;Thiết lập ngôn ngữ&#39;)"
                                                            title="Thiết lập ngôn ngữ" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_65_label"
                                                            aria-haspopup="true"
                                                            onkeydown="return CKEDITOR.tools.callFunction(137,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(138,event);"
                                                            onclick="CKEDITOR.tools.callFunction(139,this);return false;"><span
                                                                class="cke_button_icon cke_button__language_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -1176px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_65_label"
                                                                class="cke_button_label cke_button__language_label"
                                                                aria-hidden="false">Thiết lập ngôn
                                                                ngữ</span><span
                                                                class="cke_button_arrow"></span></a></span><span
                                                        class="cke_toolbar_end"></span></span><span
                                                    id="cke_66" class="cke_toolbar"
                                                    aria-labelledby="cke_66_label"
                                                    role="toolbar"><span id="cke_66_label"
                                                        class="cke_voice_label">Liên kết</span><span
                                                        class="cke_toolbar_start"></span><span
                                                        class="cke_toolgroup" role="presentation"><a
                                                            id="cke_67"
                                                            class="cke_button cke_button__link  cke_button_off"
                                                            href="javascript:void(&#39;Chèn/Sửa liên kết&#39;)"
                                                            title="Chèn/Sửa liên kết" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_67_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(140,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(141,event);"
                                                            onclick="CKEDITOR.tools.callFunction(142,this);return false;"><span
                                                                class="cke_button_icon cke_button__link_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -1248px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_67_label"
                                                                class="cke_button_label cke_button__link_label"
                                                                aria-hidden="false">Chèn/Sửa liên
                                                                kết</span></a><a id="cke_68"
                                                            class="cke_button cke_button__unlink cke_button_disabled "
                                                            href="javascript:void(&#39;Xoá liên kết&#39;)"
                                                            title="Xoá liên kết" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_68_label"
                                                            aria-haspopup="false"
                                                            aria-disabled="true"
                                                            onkeydown="return CKEDITOR.tools.callFunction(143,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(144,event);"
                                                            onclick="CKEDITOR.tools.callFunction(145,this);return false;"><span
                                                                class="cke_button_icon cke_button__unlink_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -1272px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_68_label"
                                                                class="cke_button_label cke_button__unlink_label"
                                                                aria-hidden="false">Xoá liên
                                                                kết</span></a><a id="cke_69"
                                                            class="cke_button cke_button__anchor  cke_button_off"
                                                            href="javascript:void(&#39;Chèn/Sửa điểm neo&#39;)"
                                                            title="Chèn/Sửa điểm neo" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_69_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(146,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(147,event);"
                                                            onclick="CKEDITOR.tools.callFunction(148,this);return false;"><span
                                                                class="cke_button_icon cke_button__anchor_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -1224px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_69_label"
                                                                class="cke_button_label cke_button__anchor_label"
                                                                aria-hidden="false">Chèn/Sửa điểm
                                                                neo</span></a></span><span
                                                        class="cke_toolbar_end"></span></span><span
                                                    id="cke_70" class="cke_toolbar"
                                                    aria-labelledby="cke_70_label"
                                                    role="toolbar"><span id="cke_70_label"
                                                        class="cke_voice_label">Chèn</span><span
                                                        class="cke_toolbar_start"></span><span
                                                        class="cke_toolgroup" role="presentation"><a
                                                            id="cke_71"
                                                            class="cke_button cke_button__image  cke_button_off"
                                                            href="javascript:void(&#39;Hình ảnh&#39;)"
                                                            title="Hình ảnh" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_71_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(149,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(150,event);"
                                                            onclick="CKEDITOR.tools.callFunction(151,this);return false;"><span
                                                                class="cke_button_icon cke_button__image_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -936px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_71_label"
                                                                class="cke_button_label cke_button__image_label"
                                                                aria-hidden="false">Hình
                                                                ảnh</span></a><a id="cke_72"
                                                            class="cke_button cke_button__flash  cke_button_off"
                                                            href="javascript:void(&#39;Flash&#39;)"
                                                            title="Flash" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_72_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(152,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(153,event);"
                                                            onclick="CKEDITOR.tools.callFunction(154,this);return false;"><span
                                                                class="cke_button_icon cke_button__flash_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -576px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_72_label"
                                                                class="cke_button_label cke_button__flash_label"
                                                                aria-hidden="false">Flash</span></a><a
                                                            id="cke_73"
                                                            class="cke_button cke_button__table  cke_button_off"
                                                            href="javascript:void(&#39;Bảng&#39;)"
                                                            title="Bảng" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_73_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(155,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(156,event);"
                                                            onclick="CKEDITOR.tools.callFunction(157,this);return false;"><span
                                                                class="cke_button_icon cke_button__table_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -1896px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_73_label"
                                                                class="cke_button_label cke_button__table_label"
                                                                aria-hidden="false">Bảng</span></a><a
                                                            id="cke_74"
                                                            class="cke_button cke_button__horizontalrule  cke_button_off"
                                                            href="javascript:void(&#39;Chèn đường phân cách ngang&#39;)"
                                                            title="Chèn đường phân cách ngang"
                                                            tabindex="-1" hidefocus="true"
                                                            role="button"
                                                            aria-labelledby="cke_74_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(158,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(159,event);"
                                                            onclick="CKEDITOR.tools.callFunction(160,this);return false;"><span
                                                                class="cke_button_icon cke_button__horizontalrule_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -888px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_74_label"
                                                                class="cke_button_label cke_button__horizontalrule_label"
                                                                aria-hidden="false">Chèn đường phân
                                                                cách ngang</span></a><a id="cke_75"
                                                            class="cke_button cke_button__smiley  cke_button_off"
                                                            href="javascript:void(&#39;Hình biểu lộ cảm xúc (mặt cười)&#39;)"
                                                            title="Hình biểu lộ cảm xúc (mặt cười)"
                                                            tabindex="-1" hidefocus="true"
                                                            role="button"
                                                            aria-labelledby="cke_75_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(161,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(162,event);"
                                                            onclick="CKEDITOR.tools.callFunction(163,this);return false;"><span
                                                                class="cke_button_icon cke_button__smiley_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -1056px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_75_label"
                                                                class="cke_button_label cke_button__smiley_label"
                                                                aria-hidden="false">Hình biểu lộ cảm
                                                                xúc (mặt cười)</span></a><a
                                                            id="cke_76"
                                                            class="cke_button cke_button__specialchar  cke_button_off"
                                                            href="javascript:void(&#39;Chèn ký tự đặc biệt&#39;)"
                                                            title="Chèn ký tự đặc biệt"
                                                            tabindex="-1" hidefocus="true"
                                                            role="button"
                                                            aria-labelledby="cke_76_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(164,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(165,event);"
                                                            onclick="CKEDITOR.tools.callFunction(166,this);return false;"><span
                                                                class="cke_button_icon cke_button__specialchar_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -1848px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_76_label"
                                                                class="cke_button_label cke_button__specialchar_label"
                                                                aria-hidden="false">Chèn ký tự đặc
                                                                biệt</span></a><a id="cke_77"
                                                            class="cke_button cke_button__pagebreak  cke_button_off"
                                                            href="javascript:void(&#39;Chèn ngắt trang&#39;)"
                                                            title="Chèn ngắt trang" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_77_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(167,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(168,event);"
                                                            onclick="CKEDITOR.tools.callFunction(169,this);return false;"><span
                                                                class="cke_button_icon cke_button__pagebreak_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -1488px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_77_label"
                                                                class="cke_button_label cke_button__pagebreak_label"
                                                                aria-hidden="false">Chèn ngắt
                                                                trang</span></a><a id="cke_78"
                                                            class="cke_button cke_button__iframe  cke_button_off"
                                                            href="javascript:void(&#39;Iframe&#39;)"
                                                            title="Iframe" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_78_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(170,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(171,event);"
                                                            onclick="CKEDITOR.tools.callFunction(172,this);return false;"><span
                                                                class="cke_button_icon cke_button__iframe_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -912px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_78_label"
                                                                class="cke_button_label cke_button__iframe_label"
                                                                aria-hidden="false">Iframe</span></a></span><span
                                                        class="cke_toolbar_end"></span></span><span
                                                    class="cke_toolbar_break"></span><span
                                                    id="cke_79" class="cke_toolbar"
                                                    aria-labelledby="cke_79_label"
                                                    role="toolbar"><span id="cke_79_label"
                                                        class="cke_voice_label">Kiểu</span><span
                                                        class="cke_toolbar_start"></span><span
                                                        id="cke_10"
                                                        class="cke_combo cke_combo__styles  cke_combo_off"
                                                        role="presentation"><span id="cke_10_label"
                                                            class="cke_combo_label">Kiểu</span><a
                                                            class="cke_combo_button"
                                                            hidefocus="true"
                                                            title="Phong cách định dạng"
                                                            tabindex="-1" "="" href="
                                                            javascript:void(&#39;Phong cách định
                                                            dạng&#39;)" role="button"
                                                            aria-labelledby="cke_10_label"
                                                            aria-haspopup="true"
                                                            onkeydown="return CKEDITOR.tools.callFunction(174,event,this);"
                                                            onfocus="return CKEDITOR.tools.callFunction(175,event);"
                                                            onclick="CKEDITOR.tools.callFunction(173,this);return false;"><span
                                                                id="cke_10_text"
                                                                class="cke_combo_text cke_combo_inlinelabel">Kiểu</span><span
                                                                class="cke_combo_open"><span
                                                                    class="cke_combo_arrow"></span></span></a></span><span
                                                        id="cke_11"
                                                        class="cke_combo cke_combo__format  cke_combo_off"
                                                        role="presentation"><span id="cke_11_label"
                                                            class="cke_combo_label">Định
                                                            dạng</span><a class="cke_combo_button"
                                                            hidefocus="true" title="Định dạng"
                                                            tabindex="-1" "="" href="
                                                            javascript:void(&#39;Định dạng&#39;)"
                                                            role="button"
                                                            aria-labelledby="cke_11_label"
                                                            aria-haspopup="true"
                                                            onkeydown="return CKEDITOR.tools.callFunction(177,event,this);"
                                                            onfocus="return CKEDITOR.tools.callFunction(178,event);"
                                                            onclick="CKEDITOR.tools.callFunction(176,this);return false;"><span
                                                                id="cke_11_text"
                                                                class="cke_combo_text cke_combo_inlinelabel">Định
                                                                dạng</span><span
                                                                class="cke_combo_open"><span
                                                                    class="cke_combo_arrow"></span></span></a></span><span
                                                        id="cke_12"
                                                        class="cke_combo cke_combo__font  cke_combo_off"
                                                        role="presentation"><span id="cke_12_label"
                                                            class="cke_combo_label">Phông</span><a
                                                            class="cke_combo_button"
                                                            hidefocus="true" title="Phông"
                                                            tabindex="-1" "="" href="
                                                            javascript:void(&#39;Phông&#39;)"
                                                            role="button"
                                                            aria-labelledby="cke_12_label"
                                                            aria-haspopup="true"
                                                            onkeydown="return CKEDITOR.tools.callFunction(180,event,this);"
                                                            onfocus="return CKEDITOR.tools.callFunction(181,event);"
                                                            onclick="CKEDITOR.tools.callFunction(179,this);return false;"><span
                                                                id="cke_12_text"
                                                                class="cke_combo_text cke_combo_inlinelabel">Phông</span><span
                                                                class="cke_combo_open"><span
                                                                    class="cke_combo_arrow"></span></span></a></span><span
                                                        id="cke_13"
                                                        class="cke_combo cke_combo__fontsize  cke_combo_off"
                                                        role="presentation"><span id="cke_13_label"
                                                            class="cke_combo_label">Cỡ chữ</span><a
                                                            class="cke_combo_button"
                                                            hidefocus="true" title="Cỡ chữ"
                                                            tabindex="-1" "="" href="
                                                            javascript:void(&#39;Cỡ chữ&#39;)"
                                                            role="button"
                                                            aria-labelledby="cke_13_label"
                                                            aria-haspopup="true"
                                                            onkeydown="return CKEDITOR.tools.callFunction(183,event,this);"
                                                            onfocus="return CKEDITOR.tools.callFunction(184,event);"
                                                            onclick="CKEDITOR.tools.callFunction(182,this);return false;"><span
                                                                id="cke_13_text"
                                                                class="cke_combo_text cke_combo_inlinelabel">Cỡ
                                                                chữ</span><span
                                                                class="cke_combo_open"><span
                                                                    class="cke_combo_arrow"></span></span></a></span><span
                                                        class="cke_toolbar_end"></span></span><span
                                                    id="cke_80" class="cke_toolbar"
                                                    aria-labelledby="cke_80_label"
                                                    role="toolbar"><span id="cke_80_label"
                                                        class="cke_voice_label">Màu sắc</span><span
                                                        class="cke_toolbar_start"></span><span
                                                        class="cke_toolgroup" role="presentation"><a
                                                            id="cke_81"
                                                            class="cke_button cke_button__textcolor cke_button_off "
                                                            href="javascript:void(&#39;Màu chữ&#39;)"
                                                            title="Màu chữ" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_81_label"
                                                            aria-haspopup="true"
                                                            onkeydown="return CKEDITOR.tools.callFunction(185,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(186,event);"
                                                            onclick="CKEDITOR.tools.callFunction(187,this);return false;"><span
                                                                class="cke_button_icon cke_button__textcolor_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -408px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_81_label"
                                                                class="cke_button_label cke_button__textcolor_label"
                                                                aria-hidden="false">Màu
                                                                chữ</span><span
                                                                class="cke_button_arrow"></span></a><a
                                                            id="cke_82"
                                                            class="cke_button cke_button__bgcolor cke_button_off "
                                                            href="javascript:void(&#39;Màu nền&#39;)"
                                                            title="Màu nền" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_82_label"
                                                            aria-haspopup="true"
                                                            onkeydown="return CKEDITOR.tools.callFunction(188,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(189,event);"
                                                            onclick="CKEDITOR.tools.callFunction(190,this);return false;"><span
                                                                class="cke_button_icon cke_button__bgcolor_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -384px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_82_label"
                                                                class="cke_button_label cke_button__bgcolor_label"
                                                                aria-hidden="false">Màu
                                                                nền</span><span
                                                                class="cke_button_arrow"></span></a></span><span
                                                        class="cke_toolbar_end"></span></span><span
                                                    id="cke_83" class="cke_toolbar"
                                                    aria-labelledby="cke_83_label"
                                                    role="toolbar"><span id="cke_83_label"
                                                        class="cke_voice_label">Công cụ</span><span
                                                        class="cke_toolbar_start"></span><span
                                                        class="cke_toolgroup" role="presentation"><a
                                                            id="cke_84"
                                                            class="cke_button cke_button__maximize  cke_button_off"
                                                            href="javascript:void(&#39;Phóng to tối đa&#39;)"
                                                            title="Phóng to tối đa" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_84_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(191,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(192,event);"
                                                            onclick="CKEDITOR.tools.callFunction(193,this);return false;"><span
                                                                class="cke_button_icon cke_button__maximize_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -1392px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_84_label"
                                                                class="cke_button_label cke_button__maximize_label"
                                                                aria-hidden="false">Phóng to tối
                                                                đa</span></a><a id="cke_85"
                                                            class="cke_button cke_button__showblocks  cke_button_off"
                                                            href="javascript:void(&#39;Hiển thị các khối&#39;)"
                                                            title="Hiển thị các khối" tabindex="-1"
                                                            hidefocus="true" role="button"
                                                            aria-labelledby="cke_85_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(194,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(195,event);"
                                                            onclick="CKEDITOR.tools.callFunction(196,this);return false;"><span
                                                                class="cke_button_icon cke_button__showblocks_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -1776px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_85_label"
                                                                class="cke_button_label cke_button__showblocks_label"
                                                                aria-hidden="false">Hiển thị các
                                                                khối</span></a></span><span
                                                        class="cke_toolbar_end"></span></span><span
                                                    id="cke_86" class="cke_toolbar"
                                                    aria-labelledby="cke_86_label"
                                                    role="toolbar"><span id="cke_86_label"
                                                        class="cke_voice_label">about</span><span
                                                        class="cke_toolbar_start"></span><span
                                                        class="cke_toolgroup" role="presentation"><a
                                                            id="cke_87"
                                                            class="cke_button cke_button__about  cke_button_off"
                                                            href="javascript:void(&#39;Thông tin về CKEditor&#39;)"
                                                            title="Thông tin về CKEditor"
                                                            tabindex="-1" hidefocus="true"
                                                            role="button"
                                                            aria-labelledby="cke_87_label"
                                                            aria-haspopup="false"
                                                            onkeydown="return CKEDITOR.tools.callFunction(197,event);"
                                                            onfocus="return CKEDITOR.tools.callFunction(198,event);"
                                                            onclick="CKEDITOR.tools.callFunction(199,this);return false;"><span
                                                                class="cke_button_icon cke_button__about_icon"
                                                                style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 0px;background-size:auto;">&nbsp;</span><span
                                                                id="cke_87_label"
                                                                class="cke_button_label cke_button__about_label"
                                                                aria-hidden="false">Thông tin về
                                                                CKEditor</span></a></span><span
                                                        class="cke_toolbar_end"></span></span></span></span>
                                        <div id="cke_1_contents" class="cke_contents cke_reset"
                                            role="presentation" style="height: 450px;"><span
                                                id="cke_91" class="cke_voice_label">Nhấn ALT + 0 để
                                                được giúp đỡ</span><iframe
                                                src="./ERP-Thêm hợp đồng mẫu_files/saved_resource.html"
                                                frameborder="0" class="cke_wysiwyg_frame cke_reset"
                                                style="width: 100%; height: 100%;"
                                                title="Bộ soạn thảo văn bản có định dạng, content"
                                                aria-describedby="cke_91" tabindex="0"
                                                allowtransparency="true"></iframe></div><span
                                            id="cke_1_bottom" class="cke_bottom cke_reset_all"
                                            role="presentation" style="user-select: none;"><span
                                                id="cke_1_resizer"
                                                class="cke_resizer cke_resizer_vertical cke_resizer_ltr"
                                                title="Kéo rê để thay đổi kích cỡ"
                                                onmousedown="CKEDITOR.tools.callFunction(0, event)">◢</span><span
                                                id="cke_1_path_label" class="cke_voice_label">Nhãn
                                                thành phần</span><span id="cke_1_path"
                                                class="cke_path" role="group"
                                                aria-labelledby="cke_1_path_label"><span
                                                    class="cke_path_empty">&nbsp;</span></span></span>
                                    </div>
                                </div>
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
                                        value="/crm/contract/addtemplate" name="afterSubmit">Tiếp
                                    tục nhập mẫu hợp đồng</label><label
                                    class="radio radio-inline"><input checked="checked" type="radio"
                                        value="/crm/contract/template" name="afterSubmit">Hiện danh
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
                                <a class="btn btn-primary" id="btnSubmit"><i
                                        class="fa  fa-floppy-o"></i> Lưu</a>
                                <input type="hidden" name="preview" id="preview" value=""> </div>
                        </div>
                    </div>
                </div>
            </div>
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
    <script type="text/javascript" src="{{ asset('asset/js/crm/contract/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/contract/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/contract/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/contract/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/contract/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/contract/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/contract/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/contract/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/contract/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/contract/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/contract/productexpired.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/contract/bootstrap-multiselect.js') }}"></script>

@endsection
    