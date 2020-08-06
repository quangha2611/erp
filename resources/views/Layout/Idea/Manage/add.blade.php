@extends('Layout.master5')

@section('css')
    <link rel="stylesheet" href="{{ asset('asset/css/idea/manage/style.css') }}" type="text/css">
	<link rel="stylesheet" type="text/css" href="{{ asset('asset/css/idea/manage/editor.css') }}">
@endsection

@section('title','ERP-Thêm cải tiến')

@section('content-page')
    
    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/idea"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/idea/manage">Danh sách cải tiến</a></li>
            <li class="active">Thêm cải tiến</li>
        </ul>
        <div id="page-idea-add">

            <div class="main-header">
                <h2>Thêm cải tiến</h2>
                <em>Các trường có dấu * là bắt buộc phải nhập</em>
            </div>
            <form method="post" name="ideaIndex" enctype="multipart/form-data" id="ideaIndex">
                <div class="form-horizontal">
                    <div class="col-md-6 ">
                        <fieldset>
                            <div class="form-group"><label
                                    class="col-md-4 control-label required">Tên cải tiến: <span
                                        class="required">*</span> </label>
                                <div class="col-md-8"><input type="text" name="name" maxlength="255"
                                        id="name" class="form-control" value=""></div>
                            </div>
                            <div class="form-group"><label class="col-md-4 control-label">Góp ý
                                    cho:</label>
                                <div class="col-md-8"><select name="handlingCompanyId"
                                        id="handlingCompanyId" class="form-control">
                                        <option value="">-- Công ty --</option>
                                        <option value="10" selected="selected">VNP group</option>
                                        <option value="2">-- Công ty cổ phần Vật Giá Việt Nam
                                        </option>
                                        <option value="315">-- -- Vật giá - Hà Nội</option>
                                        <option value="319">-- -- Vật giá - Hồ Chí Minh</option>
                                        <option value="365">-- -- Vật giá - Hải Phòng</option>
                                        <option value="387">-- -- WeSave</option>
                                        <option value="389">-- -- 123doc.org</option>
                                        <option value="390">-- -- Cunghocvui.com</option>
                                        <option value="391">-- -- 123job.vn</option>
                                        <option value="392">-- -- 9houz.com</option>
                                        <option value="393">-- -- 123dok.com</option>
                                        <option value="321">-- Công ty cổ phần TMDT Bảo Kim</option>
                                        <option value="322">-- -- Bảo Kim - Hà Nội</option>
                                        <option value="323">-- -- Bảo Kim - Hồ Chí Minh</option>
                                        <option value="324">-- Công ty cổ phần Nhanh.vn</option>
                                        <option value="1">-- -- Nhanh.vn</option>
                                        <option value="366">-- -- Nhanh.vn Đà Nẵng</option>
                                        <option value="395">-- -- Nhanh.vn HCM</option>
                                        <option value="379">-- Westay</option>
                                        <option value="384">-- Công ty cổ phần WeHelp</option>
                                        <option value="398">-- WeLove</option>
                                    </select></div>
                            </div>
                            <div class="form-group"><label class="col-md-4 control-label"></label>
                                <div class="col-md-8"><select name="handlingDeparmentId"
                                        id="handlingDeparmentId" class="form-control">
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
                                    </select>
                                    <ul class="parsley-description-list">
                                        <li>Chọn phòng ban sẽ đánh giá và thực hiện cải tiến.<br>
                                            VD: Góp ý đặt cơm chọn HCNS, Góp ý hệ thống ERP chọn
                                            Phòng IT Nhanh.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="form-group"><label class="col-md-4 control-label">Danh
                                    mục:</label>
                                <div class="col-md-8"><select name="categoryId" id="categoryId"
                                        class="form-control">
                                        <option value="">- Chọn danh mục cải tiến -</option>
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
                            <div class="form-group"><label class="col-md-4 control-label">Đã được áp
                                    dụng?</label>
                                <div class="col-md-8"><select name="applicable" id="applicable"
                                        class="form-control">
                                        <option value="1">Chưa được áp dụng</option>
                                        <option value="2">Đã được áp dụng</option>
                                    </select></div>
                            </div>
                            <div class="form-group"><label class="col-md-4 control-label">File
                                    upload:</label>
                                <div class="col-md-8"><input type="file" name="fileUpload[]"
                                        multiple="multiple" id="fileUpload"></div>
                            </div>
                        </fieldset>
                    </div>
                    <div style="clear:both"></div>
                    <div class="col-md-12">
                        <div>
                            <div class="form-group"><label class="col-md-2 control-label">Vấn đề
                                    hiện tại:</label>
                                <div class="col-md-10"><textarea name="problem"
                                        class="form-control "
                                        style="width: 100%; height: 200px; visibility: hidden; display: none;"
                                        id="problem"></textarea>
                                    <div id="cke_problem"
                                        class="cke_1 cke cke_reset cke_chrome cke_editor_problem cke_ltr cke_browser_webkit"
                                        dir="ltr" lang="vi" role="application"
                                        aria-labelledby="cke_problem_arialbl"><span
                                            id="cke_problem_arialbl" class="cke_voice_label">Bộ soạn
                                            thảo văn bản có định dạng, problem</span>
                                        <div class="cke_inner cke_reset" role="presentation"><span
                                                id="cke_1_top" class="cke_top cke_reset_all"
                                                role="presentation"
                                                style="height: auto; user-select: none;"><span
                                                    id="cke_17" class="cke_voice_label">Thanh công
                                                    cụ</span><span id="cke_1_toolbox"
                                                    class="cke_toolbox" role="group"
                                                    aria-labelledby="cke_17"
                                                    onmousedown="return false;"><span id="cke_19"
                                                        class="cke_toolbar" role="toolbar"><span
                                                            class="cke_toolbar_start"></span><span
                                                            id="cke_18"
                                                            class="cke_combo cke_combo__fontsize  cke_combo_off"
                                                            role="presentation"><span
                                                                id="cke_18_label"
                                                                class="cke_combo_label">Cỡ
                                                                chữ</span><a
                                                                class="cke_combo_button"
                                                                hidefocus="true" title="Cỡ chữ"
                                                                tabindex="-1" "="" href="
                                                                javascript:void(&#39;Cỡ chữ&#39;)"
                                                                role="button"
                                                                aria-labelledby="cke_18_label"
                                                                aria-haspopup="true"
                                                                onkeydown="return CKEDITOR.tools.callFunction(3,event,this);"
                                                                onfocus="return CKEDITOR.tools.callFunction(4,event);"
                                                                onclick="CKEDITOR.tools.callFunction(2,this);return false;"><span
                                                                    id="cke_18_text"
                                                                    class="cke_combo_text cke_combo_inlinelabel">Cỡ
                                                                    chữ</span><span
                                                                    class="cke_combo_open"><span
                                                                        class="cke_combo_arrow"></span></span></a></span><span
                                                            class="cke_toolgroup"
                                                            role="presentation"><a id="cke_20"
                                                                class="cke_button cke_button__textcolor cke_button_off "
                                                                href="javascript:void(&#39;Màu chữ&#39;)"
                                                                title="Màu chữ" tabindex="-1"
                                                                hidefocus="true" role="button"
                                                                aria-labelledby="cke_20_label"
                                                                aria-haspopup="true"
                                                                onkeydown="return CKEDITOR.tools.callFunction(5,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(6,event);"
                                                                onclick="CKEDITOR.tools.callFunction(7,this);return false;"><span
                                                                    class="cke_button_icon cke_button__textcolor_icon"
                                                                    style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -408px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_20_label"
                                                                    class="cke_button_label cke_button__textcolor_label"
                                                                    aria-hidden="false">Màu
                                                                    chữ</span><span
                                                                    class="cke_button_arrow"></span></a><a
                                                                id="cke_21"
                                                                class="cke_button cke_button__bgcolor cke_button_off "
                                                                href="javascript:void(&#39;Màu nền&#39;)"
                                                                title="Màu nền" tabindex="-1"
                                                                hidefocus="true" role="button"
                                                                aria-labelledby="cke_21_label"
                                                                aria-haspopup="true"
                                                                onkeydown="return CKEDITOR.tools.callFunction(8,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(9,event);"
                                                                onclick="CKEDITOR.tools.callFunction(10,this);return false;"><span
                                                                    class="cke_button_icon cke_button__bgcolor_icon"
                                                                    style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -384px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_21_label"
                                                                    class="cke_button_label cke_button__bgcolor_label"
                                                                    aria-hidden="false">Màu
                                                                    nền</span><span
                                                                    class="cke_button_arrow"></span></a><a
                                                                id="cke_22"
                                                                class="cke_button cke_button__bold  cke_button_off"
                                                                href="javascript:void(&#39;Đậm&#39;)"
                                                                title="Đậm" tabindex="-1"
                                                                hidefocus="true" role="button"
                                                                aria-labelledby="cke_22_label"
                                                                aria-haspopup="false"
                                                                onkeydown="return CKEDITOR.tools.callFunction(11,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(12,event);"
                                                                onclick="CKEDITOR.tools.callFunction(13,this);return false;"><span
                                                                    class="cke_button_icon cke_button__bold_icon"
                                                                    style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -24px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_22_label"
                                                                    class="cke_button_label cke_button__bold_label"
                                                                    aria-hidden="false">Đậm</span></a><a
                                                                id="cke_23"
                                                                class="cke_button cke_button__italic  cke_button_off"
                                                                href="javascript:void(&#39;Nghiêng&#39;)"
                                                                title="Nghiêng" tabindex="-1"
                                                                hidefocus="true" role="button"
                                                                aria-labelledby="cke_23_label"
                                                                aria-haspopup="false"
                                                                onkeydown="return CKEDITOR.tools.callFunction(14,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(15,event);"
                                                                onclick="CKEDITOR.tools.callFunction(16,this);return false;"><span
                                                                    class="cke_button_icon cke_button__italic_icon"
                                                                    style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -48px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_23_label"
                                                                    class="cke_button_label cke_button__italic_label"
                                                                    aria-hidden="false">Nghiêng</span></a><a
                                                                id="cke_24"
                                                                class="cke_button cke_button__underline  cke_button_off"
                                                                href="javascript:void(&#39;Gạch chân&#39;)"
                                                                title="Gạch chân" tabindex="-1"
                                                                hidefocus="true" role="button"
                                                                aria-labelledby="cke_24_label"
                                                                aria-haspopup="false"
                                                                onkeydown="return CKEDITOR.tools.callFunction(17,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(18,event);"
                                                                onclick="CKEDITOR.tools.callFunction(19,this);return false;"><span
                                                                    class="cke_button_icon cke_button__underline_icon"
                                                                    style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -144px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_24_label"
                                                                    class="cke_button_label cke_button__underline_label"
                                                                    aria-hidden="false">Gạch
                                                                    chân</span></a><a id="cke_25"
                                                                class="cke_button cke_button__link  cke_button_off"
                                                                href="javascript:void(&#39;Chèn/Sửa liên kết&#39;)"
                                                                title="Chèn/Sửa liên kết"
                                                                tabindex="-1" hidefocus="true"
                                                                role="button"
                                                                aria-labelledby="cke_25_label"
                                                                aria-haspopup="false"
                                                                onkeydown="return CKEDITOR.tools.callFunction(20,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(21,event);"
                                                                onclick="CKEDITOR.tools.callFunction(22,this);return false;"><span
                                                                    class="cke_button_icon cke_button__link_icon"
                                                                    style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -1248px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_25_label"
                                                                    class="cke_button_label cke_button__link_label"
                                                                    aria-hidden="false">Chèn/Sửa
                                                                    liên kết</span></a><a
                                                                id="cke_26"
                                                                class="cke_button cke_button__unlink cke_button_disabled "
                                                                href="javascript:void(&#39;Xoá liên kết&#39;)"
                                                                title="Xoá liên kết" tabindex="-1"
                                                                hidefocus="true" role="button"
                                                                aria-labelledby="cke_26_label"
                                                                aria-haspopup="false"
                                                                aria-disabled="true"
                                                                onkeydown="return CKEDITOR.tools.callFunction(23,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(24,event);"
                                                                onclick="CKEDITOR.tools.callFunction(25,this);return false;"><span
                                                                    class="cke_button_icon cke_button__unlink_icon"
                                                                    style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -1272px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_26_label"
                                                                    class="cke_button_label cke_button__unlink_label"
                                                                    aria-hidden="false">Xoá liên
                                                                    kết</span></a><a id="cke_27"
                                                                class="cke_button cke_button__removeformat  cke_button_off"
                                                                href="javascript:void(&#39;Xoá định dạng&#39;)"
                                                                title="Xoá định dạng" tabindex="-1"
                                                                hidefocus="true" role="button"
                                                                aria-labelledby="cke_27_label"
                                                                aria-haspopup="false"
                                                                onkeydown="return CKEDITOR.tools.callFunction(26,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(27,event);"
                                                                onclick="CKEDITOR.tools.callFunction(28,this);return false;"><span
                                                                    class="cke_button_icon cke_button__removeformat_icon"
                                                                    style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -1680px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_27_label"
                                                                    class="cke_button_label cke_button__removeformat_label"
                                                                    aria-hidden="false">Xoá định
                                                                    dạng</span></a><a id="cke_28"
                                                                class="cke_button cke_button__maximize  cke_button_off"
                                                                href="javascript:void(&#39;Phóng to tối đa&#39;)"
                                                                title="Phóng to tối đa"
                                                                tabindex="-1" hidefocus="true"
                                                                role="button"
                                                                aria-labelledby="cke_28_label"
                                                                aria-haspopup="false"
                                                                onkeydown="return CKEDITOR.tools.callFunction(29,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(30,event);"
                                                                onclick="CKEDITOR.tools.callFunction(31,this);return false;"><span
                                                                    class="cke_button_icon cke_button__maximize_icon"
                                                                    style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -1392px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_28_label"
                                                                    class="cke_button_label cke_button__maximize_label"
                                                                    aria-hidden="false">Phóng to tối
                                                                    đa</span></a><a id="cke_29"
                                                                class="cke_button cke_button__image  cke_button_off"
                                                                href="javascript:void(&#39;Hình ảnh&#39;)"
                                                                title="Hình ảnh" tabindex="-1"
                                                                hidefocus="true" role="button"
                                                                aria-labelledby="cke_29_label"
                                                                aria-haspopup="false"
                                                                onkeydown="return CKEDITOR.tools.callFunction(32,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(33,event);"
                                                                onclick="CKEDITOR.tools.callFunction(34,this);return false;"><span
                                                                    class="cke_button_icon cke_button__image_icon"
                                                                    style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -936px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_29_label"
                                                                    class="cke_button_label cke_button__image_label"
                                                                    aria-hidden="false">Hình
                                                                    ảnh</span></a></span><span
                                                            class="cke_toolbar_end"></span></span></span></span>
                                            <div id="cke_1_contents" class="cke_contents cke_reset"
                                                role="presentation" style="height: 200px;"><span
                                                    id="cke_33" class="cke_voice_label">Nhấn ALT + 0
                                                    để được giúp đỡ</span><iframe
                                                    src="./ERP- Thêm cải tiến_files/saved_resource.html"
                                                    frameborder="0"
                                                    class="cke_wysiwyg_frame cke_reset"
                                                    style="width: 100%; height: 100%;"
                                                    title="Bộ soạn thảo văn bản có định dạng, problem"
                                                    aria-describedby="cke_33" tabindex="0"
                                                    allowtransparency="true"></iframe></div><span
                                                id="cke_1_bottom" class="cke_bottom cke_reset_all"
                                                role="presentation" style="user-select: none;"><span
                                                    id="cke_1_resizer"
                                                    class="cke_resizer cke_resizer_vertical cke_resizer_ltr"
                                                    title="Kéo rê để thay đổi kích cỡ"
                                                    onmousedown="CKEDITOR.tools.callFunction(0, event)">◢</span><span
                                                    id="cke_1_path_label"
                                                    class="cke_voice_label">Nhãn thành
                                                    phần</span><span id="cke_1_path"
                                                    class="cke_path" role="group"
                                                    aria-labelledby="cke_1_path_label"><span
                                                        class="cke_path_empty">&nbsp;</span></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="clear:both"></div>
                    <div class="col-md-12">
                        <div>
                            <div class="form-group"><label class="col-md-2 control-label">Giải pháp
                                    xử lý:</label>
                                <div class="col-md-10"><textarea name="solution"
                                        class="form-control "
                                        style="width: 100%; height: 200px; visibility: hidden; display: none;"
                                        id="solution"></textarea>
                                    <div id="cke_solution"
                                        class="cke_2 cke cke_reset cke_chrome cke_editor_solution cke_ltr cke_browser_webkit"
                                        dir="ltr" lang="vi" role="application"
                                        aria-labelledby="cke_solution_arialbl"><span
                                            id="cke_solution_arialbl" class="cke_voice_label">Bộ
                                            soạn thảo văn bản có định dạng, solution</span>
                                        <div class="cke_inner cke_reset" role="presentation"><span
                                                id="cke_2_top" class="cke_top cke_reset_all"
                                                role="presentation"
                                                style="height: auto; user-select: none;"><span
                                                    id="cke_43" class="cke_voice_label">Thanh công
                                                    cụ</span><span id="cke_2_toolbox"
                                                    class="cke_toolbox" role="group"
                                                    aria-labelledby="cke_43"
                                                    onmousedown="return false;"><span id="cke_45"
                                                        class="cke_toolbar" role="toolbar"><span
                                                            class="cke_toolbar_start"></span><span
                                                            id="cke_44"
                                                            class="cke_combo cke_combo__fontsize  cke_combo_off"
                                                            role="presentation"><span
                                                                id="cke_44_label"
                                                                class="cke_combo_label">Cỡ
                                                                chữ</span><a
                                                                class="cke_combo_button"
                                                                hidefocus="true" title="Cỡ chữ"
                                                                tabindex="-1" "="" href="
                                                                javascript:void(&#39;Cỡ chữ&#39;)"
                                                                role="button"
                                                                aria-labelledby="cke_44_label"
                                                                aria-haspopup="true"
                                                                onkeydown="return CKEDITOR.tools.callFunction(41,event,this);"
                                                                onfocus="return CKEDITOR.tools.callFunction(42,event);"
                                                                onclick="CKEDITOR.tools.callFunction(40,this);return false;"><span
                                                                    id="cke_44_text"
                                                                    class="cke_combo_text cke_combo_inlinelabel">Cỡ
                                                                    chữ</span><span
                                                                    class="cke_combo_open"><span
                                                                        class="cke_combo_arrow"></span></span></a></span><span
                                                            class="cke_toolgroup"
                                                            role="presentation"><a id="cke_46"
                                                                class="cke_button cke_button__textcolor cke_button_off "
                                                                href="javascript:void(&#39;Màu chữ&#39;)"
                                                                title="Màu chữ" tabindex="-1"
                                                                hidefocus="true" role="button"
                                                                aria-labelledby="cke_46_label"
                                                                aria-haspopup="true"
                                                                onkeydown="return CKEDITOR.tools.callFunction(43,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(44,event);"
                                                                onclick="CKEDITOR.tools.callFunction(45,this);return false;"><span
                                                                    class="cke_button_icon cke_button__textcolor_icon"
                                                                    style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -408px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_46_label"
                                                                    class="cke_button_label cke_button__textcolor_label"
                                                                    aria-hidden="false">Màu
                                                                    chữ</span><span
                                                                    class="cke_button_arrow"></span></a><a
                                                                id="cke_47"
                                                                class="cke_button cke_button__bgcolor cke_button_off "
                                                                href="javascript:void(&#39;Màu nền&#39;)"
                                                                title="Màu nền" tabindex="-1"
                                                                hidefocus="true" role="button"
                                                                aria-labelledby="cke_47_label"
                                                                aria-haspopup="true"
                                                                onkeydown="return CKEDITOR.tools.callFunction(46,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(47,event);"
                                                                onclick="CKEDITOR.tools.callFunction(48,this);return false;"><span
                                                                    class="cke_button_icon cke_button__bgcolor_icon"
                                                                    style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -384px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_47_label"
                                                                    class="cke_button_label cke_button__bgcolor_label"
                                                                    aria-hidden="false">Màu
                                                                    nền</span><span
                                                                    class="cke_button_arrow"></span></a><a
                                                                id="cke_48"
                                                                class="cke_button cke_button__bold  cke_button_off"
                                                                href="javascript:void(&#39;Đậm&#39;)"
                                                                title="Đậm" tabindex="-1"
                                                                hidefocus="true" role="button"
                                                                aria-labelledby="cke_48_label"
                                                                aria-haspopup="false"
                                                                onkeydown="return CKEDITOR.tools.callFunction(49,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(50,event);"
                                                                onclick="CKEDITOR.tools.callFunction(51,this);return false;"><span
                                                                    class="cke_button_icon cke_button__bold_icon"
                                                                    style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -24px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_48_label"
                                                                    class="cke_button_label cke_button__bold_label"
                                                                    aria-hidden="false">Đậm</span></a><a
                                                                id="cke_49"
                                                                class="cke_button cke_button__italic  cke_button_off"
                                                                href="javascript:void(&#39;Nghiêng&#39;)"
                                                                title="Nghiêng" tabindex="-1"
                                                                hidefocus="true" role="button"
                                                                aria-labelledby="cke_49_label"
                                                                aria-haspopup="false"
                                                                onkeydown="return CKEDITOR.tools.callFunction(52,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(53,event);"
                                                                onclick="CKEDITOR.tools.callFunction(54,this);return false;"><span
                                                                    class="cke_button_icon cke_button__italic_icon"
                                                                    style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -48px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_49_label"
                                                                    class="cke_button_label cke_button__italic_label"
                                                                    aria-hidden="false">Nghiêng</span></a><a
                                                                id="cke_50"
                                                                class="cke_button cke_button__underline  cke_button_off"
                                                                href="javascript:void(&#39;Gạch chân&#39;)"
                                                                title="Gạch chân" tabindex="-1"
                                                                hidefocus="true" role="button"
                                                                aria-labelledby="cke_50_label"
                                                                aria-haspopup="false"
                                                                onkeydown="return CKEDITOR.tools.callFunction(55,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(56,event);"
                                                                onclick="CKEDITOR.tools.callFunction(57,this);return false;"><span
                                                                    class="cke_button_icon cke_button__underline_icon"
                                                                    style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -144px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_50_label"
                                                                    class="cke_button_label cke_button__underline_label"
                                                                    aria-hidden="false">Gạch
                                                                    chân</span></a><a id="cke_51"
                                                                class="cke_button cke_button__link  cke_button_off"
                                                                href="javascript:void(&#39;Chèn/Sửa liên kết&#39;)"
                                                                title="Chèn/Sửa liên kết"
                                                                tabindex="-1" hidefocus="true"
                                                                role="button"
                                                                aria-labelledby="cke_51_label"
                                                                aria-haspopup="false"
                                                                onkeydown="return CKEDITOR.tools.callFunction(58,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(59,event);"
                                                                onclick="CKEDITOR.tools.callFunction(60,this);return false;"><span
                                                                    class="cke_button_icon cke_button__link_icon"
                                                                    style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -1248px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_51_label"
                                                                    class="cke_button_label cke_button__link_label"
                                                                    aria-hidden="false">Chèn/Sửa
                                                                    liên kết</span></a><a
                                                                id="cke_52"
                                                                class="cke_button cke_button__unlink cke_button_disabled "
                                                                href="javascript:void(&#39;Xoá liên kết&#39;)"
                                                                title="Xoá liên kết" tabindex="-1"
                                                                hidefocus="true" role="button"
                                                                aria-labelledby="cke_52_label"
                                                                aria-haspopup="false"
                                                                aria-disabled="true"
                                                                onkeydown="return CKEDITOR.tools.callFunction(61,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(62,event);"
                                                                onclick="CKEDITOR.tools.callFunction(63,this);return false;"><span
                                                                    class="cke_button_icon cke_button__unlink_icon"
                                                                    style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -1272px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_52_label"
                                                                    class="cke_button_label cke_button__unlink_label"
                                                                    aria-hidden="false">Xoá liên
                                                                    kết</span></a><a id="cke_53"
                                                                class="cke_button cke_button__removeformat  cke_button_off"
                                                                href="javascript:void(&#39;Xoá định dạng&#39;)"
                                                                title="Xoá định dạng" tabindex="-1"
                                                                hidefocus="true" role="button"
                                                                aria-labelledby="cke_53_label"
                                                                aria-haspopup="false"
                                                                onkeydown="return CKEDITOR.tools.callFunction(64,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(65,event);"
                                                                onclick="CKEDITOR.tools.callFunction(66,this);return false;"><span
                                                                    class="cke_button_icon cke_button__removeformat_icon"
                                                                    style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -1680px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_53_label"
                                                                    class="cke_button_label cke_button__removeformat_label"
                                                                    aria-hidden="false">Xoá định
                                                                    dạng</span></a><a id="cke_54"
                                                                class="cke_button cke_button__maximize  cke_button_off"
                                                                href="javascript:void(&#39;Phóng to tối đa&#39;)"
                                                                title="Phóng to tối đa"
                                                                tabindex="-1" hidefocus="true"
                                                                role="button"
                                                                aria-labelledby="cke_54_label"
                                                                aria-haspopup="false"
                                                                onkeydown="return CKEDITOR.tools.callFunction(67,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(68,event);"
                                                                onclick="CKEDITOR.tools.callFunction(69,this);return false;"><span
                                                                    class="cke_button_icon cke_button__maximize_icon"
                                                                    style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -1392px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_54_label"
                                                                    class="cke_button_label cke_button__maximize_label"
                                                                    aria-hidden="false">Phóng to tối
                                                                    đa</span></a><a id="cke_55"
                                                                class="cke_button cke_button__image  cke_button_off"
                                                                href="javascript:void(&#39;Hình ảnh&#39;)"
                                                                title="Hình ảnh" tabindex="-1"
                                                                hidefocus="true" role="button"
                                                                aria-labelledby="cke_55_label"
                                                                aria-haspopup="false"
                                                                onkeydown="return CKEDITOR.tools.callFunction(70,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(71,event);"
                                                                onclick="CKEDITOR.tools.callFunction(72,this);return false;"><span
                                                                    class="cke_button_icon cke_button__image_icon"
                                                                    style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -936px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_55_label"
                                                                    class="cke_button_label cke_button__image_label"
                                                                    aria-hidden="false">Hình
                                                                    ảnh</span></a></span><span
                                                            class="cke_toolbar_end"></span></span></span></span>
                                            <div id="cke_2_contents" class="cke_contents cke_reset"
                                                role="presentation" style="height: 200px;"><span
                                                    id="cke_59" class="cke_voice_label">Nhấn ALT + 0
                                                    để được giúp đỡ</span><iframe
                                                    src="./ERP- Thêm cải tiến_files/saved_resource(3).html"
                                                    frameborder="0"
                                                    class="cke_wysiwyg_frame cke_reset"
                                                    style="width: 100%; height: 100%;"
                                                    title="Bộ soạn thảo văn bản có định dạng, solution"
                                                    aria-describedby="cke_59" tabindex="0"
                                                    allowtransparency="true"></iframe></div><span
                                                id="cke_2_bottom" class="cke_bottom cke_reset_all"
                                                role="presentation" style="user-select: none;"><span
                                                    id="cke_2_resizer"
                                                    class="cke_resizer cke_resizer_vertical cke_resizer_ltr"
                                                    title="Kéo rê để thay đổi kích cỡ"
                                                    onmousedown="CKEDITOR.tools.callFunction(38, event)">◢</span><span
                                                    id="cke_2_path_label"
                                                    class="cke_voice_label">Nhãn thành
                                                    phần</span><span id="cke_2_path"
                                                    class="cke_path" role="group"
                                                    aria-labelledby="cke_2_path_label"><span
                                                        class="cke_path_empty">&nbsp;</span></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="clear:both"></div>
                    <div class="col-md-12">
                        <div>
                            <div class="form-group"><label class="col-md-2 control-label">Hiệu quả
                                    của cải tiến:</label>
                                <div class="col-md-10"><textarea name="effective"
                                        class="form-control "
                                        style="width: 100%; height: 200px; visibility: hidden; display: none;"
                                        id="effective"></textarea>
                                    <div id="cke_effective"
                                        class="cke_3 cke cke_reset cke_chrome cke_editor_effective cke_ltr cke_browser_webkit"
                                        dir="ltr" lang="vi" role="application"
                                        aria-labelledby="cke_effective_arialbl"><span
                                            id="cke_effective_arialbl" class="cke_voice_label">Bộ
                                            soạn thảo văn bản có định dạng, effective</span>
                                        <div class="cke_inner cke_reset" role="presentation"><span
                                                id="cke_3_top" class="cke_top cke_reset_all"
                                                role="presentation"
                                                style="height: auto; user-select: none;"><span
                                                    id="cke_68" class="cke_voice_label">Thanh công
                                                    cụ</span><span id="cke_3_toolbox"
                                                    class="cke_toolbox" role="group"
                                                    aria-labelledby="cke_68"
                                                    onmousedown="return false;"><span id="cke_70"
                                                        class="cke_toolbar" role="toolbar"><span
                                                            class="cke_toolbar_start"></span><span
                                                            id="cke_69"
                                                            class="cke_combo cke_combo__fontsize  cke_combo_off"
                                                            role="presentation"><span
                                                                id="cke_69_label"
                                                                class="cke_combo_label">Cỡ
                                                                chữ</span><a
                                                                class="cke_combo_button"
                                                                hidefocus="true" title="Cỡ chữ"
                                                                tabindex="-1" "="" href="
                                                                javascript:void(&#39;Cỡ chữ&#39;)"
                                                                role="button"
                                                                aria-labelledby="cke_69_label"
                                                                aria-haspopup="true"
                                                                onkeydown="return CKEDITOR.tools.callFunction(79,event,this);"
                                                                onfocus="return CKEDITOR.tools.callFunction(80,event);"
                                                                onclick="CKEDITOR.tools.callFunction(78,this);return false;"><span
                                                                    id="cke_69_text"
                                                                    class="cke_combo_text cke_combo_inlinelabel">Cỡ
                                                                    chữ</span><span
                                                                    class="cke_combo_open"><span
                                                                        class="cke_combo_arrow"></span></span></a></span><span
                                                            class="cke_toolgroup"
                                                            role="presentation"><a id="cke_71"
                                                                class="cke_button cke_button__textcolor cke_button_off "
                                                                href="javascript:void(&#39;Màu chữ&#39;)"
                                                                title="Màu chữ" tabindex="-1"
                                                                hidefocus="true" role="button"
                                                                aria-labelledby="cke_71_label"
                                                                aria-haspopup="true"
                                                                onkeydown="return CKEDITOR.tools.callFunction(81,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(82,event);"
                                                                onclick="CKEDITOR.tools.callFunction(83,this);return false;"><span
                                                                    class="cke_button_icon cke_button__textcolor_icon"
                                                                    style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -408px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_71_label"
                                                                    class="cke_button_label cke_button__textcolor_label"
                                                                    aria-hidden="false">Màu
                                                                    chữ</span><span
                                                                    class="cke_button_arrow"></span></a><a
                                                                id="cke_72"
                                                                class="cke_button cke_button__bgcolor cke_button_off "
                                                                href="javascript:void(&#39;Màu nền&#39;)"
                                                                title="Màu nền" tabindex="-1"
                                                                hidefocus="true" role="button"
                                                                aria-labelledby="cke_72_label"
                                                                aria-haspopup="true"
                                                                onkeydown="return CKEDITOR.tools.callFunction(84,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(85,event);"
                                                                onclick="CKEDITOR.tools.callFunction(86,this);return false;"><span
                                                                    class="cke_button_icon cke_button__bgcolor_icon"
                                                                    style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -384px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_72_label"
                                                                    class="cke_button_label cke_button__bgcolor_label"
                                                                    aria-hidden="false">Màu
                                                                    nền</span><span
                                                                    class="cke_button_arrow"></span></a><a
                                                                id="cke_73"
                                                                class="cke_button cke_button__bold  cke_button_off"
                                                                href="javascript:void(&#39;Đậm&#39;)"
                                                                title="Đậm" tabindex="-1"
                                                                hidefocus="true" role="button"
                                                                aria-labelledby="cke_73_label"
                                                                aria-haspopup="false"
                                                                onkeydown="return CKEDITOR.tools.callFunction(87,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(88,event);"
                                                                onclick="CKEDITOR.tools.callFunction(89,this);return false;"><span
                                                                    class="cke_button_icon cke_button__bold_icon"
                                                                    style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -24px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_73_label"
                                                                    class="cke_button_label cke_button__bold_label"
                                                                    aria-hidden="false">Đậm</span></a><a
                                                                id="cke_74"
                                                                class="cke_button cke_button__italic  cke_button_off"
                                                                href="javascript:void(&#39;Nghiêng&#39;)"
                                                                title="Nghiêng" tabindex="-1"
                                                                hidefocus="true" role="button"
                                                                aria-labelledby="cke_74_label"
                                                                aria-haspopup="false"
                                                                onkeydown="return CKEDITOR.tools.callFunction(90,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(91,event);"
                                                                onclick="CKEDITOR.tools.callFunction(92,this);return false;"><span
                                                                    class="cke_button_icon cke_button__italic_icon"
                                                                    style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -48px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_74_label"
                                                                    class="cke_button_label cke_button__italic_label"
                                                                    aria-hidden="false">Nghiêng</span></a><a
                                                                id="cke_75"
                                                                class="cke_button cke_button__underline  cke_button_off"
                                                                href="javascript:void(&#39;Gạch chân&#39;)"
                                                                title="Gạch chân" tabindex="-1"
                                                                hidefocus="true" role="button"
                                                                aria-labelledby="cke_75_label"
                                                                aria-haspopup="false"
                                                                onkeydown="return CKEDITOR.tools.callFunction(93,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(94,event);"
                                                                onclick="CKEDITOR.tools.callFunction(95,this);return false;"><span
                                                                    class="cke_button_icon cke_button__underline_icon"
                                                                    style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -144px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_75_label"
                                                                    class="cke_button_label cke_button__underline_label"
                                                                    aria-hidden="false">Gạch
                                                                    chân</span></a><a id="cke_76"
                                                                class="cke_button cke_button__link  cke_button_off"
                                                                href="javascript:void(&#39;Chèn/Sửa liên kết&#39;)"
                                                                title="Chèn/Sửa liên kết"
                                                                tabindex="-1" hidefocus="true"
                                                                role="button"
                                                                aria-labelledby="cke_76_label"
                                                                aria-haspopup="false"
                                                                onkeydown="return CKEDITOR.tools.callFunction(96,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(97,event);"
                                                                onclick="CKEDITOR.tools.callFunction(98,this);return false;"><span
                                                                    class="cke_button_icon cke_button__link_icon"
                                                                    style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -1248px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_76_label"
                                                                    class="cke_button_label cke_button__link_label"
                                                                    aria-hidden="false">Chèn/Sửa
                                                                    liên kết</span></a><a
                                                                id="cke_77"
                                                                class="cke_button cke_button__unlink cke_button_disabled "
                                                                href="javascript:void(&#39;Xoá liên kết&#39;)"
                                                                title="Xoá liên kết" tabindex="-1"
                                                                hidefocus="true" role="button"
                                                                aria-labelledby="cke_77_label"
                                                                aria-haspopup="false"
                                                                aria-disabled="true"
                                                                onkeydown="return CKEDITOR.tools.callFunction(99,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(100,event);"
                                                                onclick="CKEDITOR.tools.callFunction(101,this);return false;"><span
                                                                    class="cke_button_icon cke_button__unlink_icon"
                                                                    style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -1272px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_77_label"
                                                                    class="cke_button_label cke_button__unlink_label"
                                                                    aria-hidden="false">Xoá liên
                                                                    kết</span></a><a id="cke_78"
                                                                class="cke_button cke_button__removeformat  cke_button_off"
                                                                href="javascript:void(&#39;Xoá định dạng&#39;)"
                                                                title="Xoá định dạng" tabindex="-1"
                                                                hidefocus="true" role="button"
                                                                aria-labelledby="cke_78_label"
                                                                aria-haspopup="false"
                                                                onkeydown="return CKEDITOR.tools.callFunction(102,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(103,event);"
                                                                onclick="CKEDITOR.tools.callFunction(104,this);return false;"><span
                                                                    class="cke_button_icon cke_button__removeformat_icon"
                                                                    style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -1680px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_78_label"
                                                                    class="cke_button_label cke_button__removeformat_label"
                                                                    aria-hidden="false">Xoá định
                                                                    dạng</span></a><a id="cke_79"
                                                                class="cke_button cke_button__maximize  cke_button_off"
                                                                href="javascript:void(&#39;Phóng to tối đa&#39;)"
                                                                title="Phóng to tối đa"
                                                                tabindex="-1" hidefocus="true"
                                                                role="button"
                                                                aria-labelledby="cke_79_label"
                                                                aria-haspopup="false"
                                                                onkeydown="return CKEDITOR.tools.callFunction(105,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(106,event);"
                                                                onclick="CKEDITOR.tools.callFunction(107,this);return false;"><span
                                                                    class="cke_button_icon cke_button__maximize_icon"
                                                                    style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -1392px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_79_label"
                                                                    class="cke_button_label cke_button__maximize_label"
                                                                    aria-hidden="false">Phóng to tối
                                                                    đa</span></a><a id="cke_80"
                                                                class="cke_button cke_button__image  cke_button_off"
                                                                href="javascript:void(&#39;Hình ảnh&#39;)"
                                                                title="Hình ảnh" tabindex="-1"
                                                                hidefocus="true" role="button"
                                                                aria-labelledby="cke_80_label"
                                                                aria-haspopup="false"
                                                                onkeydown="return CKEDITOR.tools.callFunction(108,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(109,event);"
                                                                onclick="CKEDITOR.tools.callFunction(110,this);return false;"><span
                                                                    class="cke_button_icon cke_button__image_icon"
                                                                    style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -936px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_80_label"
                                                                    class="cke_button_label cke_button__image_label"
                                                                    aria-hidden="false">Hình
                                                                    ảnh</span></a></span><span
                                                            class="cke_toolbar_end"></span></span></span></span>
                                            <div id="cke_3_contents" class="cke_contents cke_reset"
                                                role="presentation" style="height: 200px;"><span
                                                    id="cke_84" class="cke_voice_label">Nhấn ALT + 0
                                                    để được giúp đỡ</span><iframe
                                                    src="./ERP- Thêm cải tiến_files/saved_resource(4).html"
                                                    frameborder="0"
                                                    class="cke_wysiwyg_frame cke_reset"
                                                    style="width: 100%; height: 100%;"
                                                    title="Bộ soạn thảo văn bản có định dạng, effective"
                                                    aria-describedby="cke_84" tabindex="0"
                                                    allowtransparency="true"></iframe></div><span
                                                id="cke_3_bottom" class="cke_bottom cke_reset_all"
                                                role="presentation" style="user-select: none;"><span
                                                    id="cke_3_resizer"
                                                    class="cke_resizer cke_resizer_vertical cke_resizer_ltr"
                                                    title="Kéo rê để thay đổi kích cỡ"
                                                    onmousedown="CKEDITOR.tools.callFunction(76, event)">◢</span><span
                                                    id="cke_3_path_label"
                                                    class="cke_voice_label">Nhãn thành
                                                    phần</span><span id="cke_3_path"
                                                    class="cke_path" role="group"
                                                    aria-labelledby="cke_3_path_label"><span
                                                        class="cke_path_empty">&nbsp;</span></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="clear:both"></div>
                    <div class="col-md-12">
                        <div>
                            <div class="form-group"><label class="col-md-2 control-label">Sau khi
                                    lưu dữ liệu:</label>
                                <div class="col-md-10"><label class="radio radio-inline"><input
                                            checked="checked" type="radio" value="1"
                                            name="afterSubmit">Xem cải tiến vừa tạo</label><label
                                        class="radio radio-inline"><input type="radio"
                                            value="/idea/manage/add" name="afterSubmit">Tiếp tục
                                        nhập</label><label class="radio radio-inline"><input
                                            type="radio" value="/idea/manage/index"
                                            name="afterSubmit">Hiện danh sách cải tiến</label></div>
                            </div>
                        </div>
                    </div>
                    <div style="clear:both"></div>
                    <div class="col-md-6">
                        <div>
                            <div class="form-group"><label class="col-md-4 control-label"></label>
                                <div class="col-md-8"><input name="submit" type="submit"
                                        id="btnSaveIdea" class="btn btn-primary" value="Lưu"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <script type="text/javascript">
            var pageVariables = {
                'ideaId': ''
            };
        </script>
    </div>

@endsection


@section('js')

    <script type="text/javascript" src="{{ asset('asset/js/idea/manage/config.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/idea/manage/vi.js') }}"></script>
	<script type="text/javascript" src="{{ asset('asset/js/idea/manage/styles.js') }}"></script>
	<script type="text/javascript" src="{{ asset('asset/js/idea/manage/plugin.js') }}"></script>

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
	<script type="text/javascript" src="{{ asset('/asset/js/idea/manage/saved_resource(2)') }}"></script>
    

@endsection