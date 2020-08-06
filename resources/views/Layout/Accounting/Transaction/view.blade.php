@extends('Layout.master4')

@section('css')
    <link rel="stylesheet" href="{{ asset('asset/css/accounting/transaction/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/accounting/transaction/editor.css') }}">
	<link href="{{ asset('asset/css/accounting/transaction/dropzone.css') }}" media="screen" rel="stylesheet" type="text/css">
    
@endsection

@section('title', 'ERP-CHi tiết phiếu thu chi')

@section('content-page')

    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li class="active">Chi tiết Phiếu chi</li>
        </ul>
        <div class="form-horizontal">

            <div style="float: right;" class="fast-link col-md-12">
            </div>
            <div class="clearfix"></div>

            <div class="col-md-12">
                <fieldset>
                    <div class="col-md-12 title text-success">
                        <span><i class="fa fa-arrow-circle-right"></i></span>Phiếu chi<span
                            id="confirm-group" style="float: right;">
                            <b class="text-success">Đã hạch toán</b> </span>
                    </div>
                    <div class="group-content">
                        <div class="col-md-6">
                            <ul>
                                <li><label>Mã phiếu:</label>
                                    <div class="col-ele">
                                        <span class="text-warning">76741</span>
                                    </div>
                                </li>
                                <li><label>Ngày hạch toán:</label>
                                    <div class="col-ele">
                                        <i class="fa fa-calendar"></i> 23/07/2020 </div>
                                </li>
                                <li><label>Trạng thái:</label>
                                    <div class="col-ele">
                                        <b>Đã hạch toán</b>
                                    </div>
                                </li>

                                <li><label>File đính kèm:</label>
                                    <div class="col-ele">
                                        <i class="icon fa fa-times text-danger"></i> </div>
                                </li>

                                <li><label>Số tiền:</label>
                                    <div class="col-ele">
                                        <b>1.452.373.822 <a
                                                class="fa fa-files-o fa-lg copyToClipBoard"
                                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76741#"
                                                data-value="1452373822" title="copy"
                                                data-toggle="tooltip"></a></b>
                                    </div>
                                </li>
                                <li><label>Link đối soát:</label>
                                    <div class="col-ele">

                                    </div>
                                </li>

                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li><label>Công ty:</label>
                                    <div class="col-ele">
                                        Nhanh.vn </div>
                                </li>
                                <li><label>Loại:</label>
                                    <div class="col-ele">
                                        <b class="text-info">Phiếu chi</b>
                                    </div>
                                </li>
                                <li><label>Qũy:</label>
                                    <div class="col-ele">
                                        <b>Tiền chuyển khoản <i class="fa fa-caret-right"></i> Vận
                                            chuyển Nhanh</b> </div>
                                </li>

                                <li><label>Khoản mục:</label>
                                    <div class="col-ele">
                                        <span class="text-warning">Chi khác</span>
                                    </div>
                                </li>
                                <li><label>Hoàn trả tạm ứng:</label>
                                    <div class="col-ele">
                                        <div>
                                            <label>
                                                <input name="updatepaystatus" id="updatepaystatus"
                                                    value="0" type="checkbox">
                                                Đã hoàn trả
                                            </label> <span> <br> (Tích chọn nếu đã hoàn trả tạm ứng)
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <label>Mô tả:</label>
                                    <div class="col-ele">
                                        <span>THANH TOÁN PVC CHO J&amp;T THÁNG 6.2020</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </fieldset>


            </div>


            <div class="col-md-12">
                <div class="col-md-12 title ">
                    <span><i class="fa fa-check"></i></span>Thông tin chi tiết
                </div>
                <div class="group-content">
                    <table class="table table-hover ">
                        <thead>

                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>THANH TOÁN PVC CHO J&amp;T THÁNG 6.2020</td>
                                <td class="col-align-right">1,452,373,822</td>
                                <td> <a class="fa fa-files-o fa-lg copyToClipBoard"
                                        data-value="1452373822" title="copy"
                                        data-toggle="tooltip"></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-md-12">
                <div class="col-md-12 title ">
                    <span><i class="fa fa-check"></i></span>Thông tin người tạo
                </div>
                <div class="group-content">
                    <div class="col-md-6">
                        <ul>
                            <li><label>Tên nhân viên:</label>
                                <div class="col-ele">
                                    Trần Thị Ánh Tuyết </div>
                            </li>
                            <li><label>Phòng ban:</label>
                                <div class="col-ele">
                                    Chăm sóc đơn hàng - HươngĐTM </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul>

                            <li><label>Vị trí:</label>
                                <div class="col-ele">
                                    Kế toán </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="col-md-12 title ">
                    <span><i class="fa fa-check"></i></span>Thông tin người duyệt </div>
                <div class="group-content">
                    <div class="col-md-6">
                        <ul>
                            <li><label>Tên NV:</label>
                                <div class="col-ele">
                                    Đoàn Thị Minh Hương </div>
                            </li>
                            <li><label>Phòng ban:</label>
                                <div class="col-ele">
                                    Chăm sóc đơn hàng - HươngĐTM </div>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-6">
                        <ul>
                            <li><label>Ngày :</label>
                                <div class="col-ele">
                                    23/07/2020 16:37:42 </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-md-12">
                <div class="col-md-12 title ">
                    <span><i class="fa fa-check"></i></span>Thông tin kế toán xác nhận
                </div>
                <div class="group-content">
                    <div class="col-md-6">
                        <ul>
                            <li><label>Tên người xác nhận:</label>
                                <div class="col-ele">
                                    Đoàn Thị Minh Hương </div>
                            </li>
                            <li><label>Phòng ban:</label>
                                <div class="col-ele">
                                    Chăm sóc đơn hàng - HươngĐTM </div>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-6">
                        <ul>
                            <li><label>Ngày xác nhận:</label>
                                <div class="col-ele">
                                    23/07/2020 16:37:42 </div>
                            </li>
                            <li><label>Trạng thái:</label>
                                <div class="col-ele">
                                    <b>Đã xác nhận</b>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>




        </div>
        <div class="col-md-12">
            <div class="col-md-12 title ">
                <span><i class="fa fa-check"></i></span>Bình luận
            </div>

            <div class="col-md-9" id="commentArea">
            </div>
            <div class="col-md-9" id="addCommentArea">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <textarea rows="8" cols="" class="basicEditor" id="commentInput"
                        style="visibility: hidden; display: none;"></textarea>
                    <div id="cke_commentInput"
                        class="cke_1 cke cke_reset cke_chrome cke_editor_commentInput cke_ltr cke_browser_webkit"
                        dir="ltr" lang="vi" role="application"
                        aria-labelledby="cke_commentInput_arialbl"><span
                            id="cke_commentInput_arialbl" class="cke_voice_label">Bộ soạn thảo văn
                            bản có định dạng, commentInput</span>
                        <div class="cke_inner cke_reset" role="presentation"><span id="cke_1_top"
                                class="cke_top cke_reset_all" role="presentation"
                                style="height: auto; user-select: none;"><span id="cke_9"
                                    class="cke_voice_label">Thanh công cụ</span><span
                                    id="cke_1_toolbox" class="cke_toolbox" role="group"
                                    aria-labelledby="cke_9" onmousedown="return false;"><span
                                        id="cke_11" class="cke_toolbar" role="toolbar"><span
                                            class="cke_toolbar_start"></span><span id="cke_10"
                                            class="cke_combo cke_combo__fontsize  cke_combo_off"
                                            role="presentation"><span id="cke_10_label"
                                                class="cke_combo_label">Cỡ chữ</span><a
                                                class="cke_combo_button" hidefocus="true"
                                                title="Cỡ chữ" tabindex="-1" "="" href="
                                                javascript:void(&#39;Cỡ chữ&#39;)" role="button"
                                                aria-labelledby="cke_10_label" aria-haspopup="true"
                                                onkeydown="return CKEDITOR.tools.callFunction(3,event,this);"
                                                onfocus="return CKEDITOR.tools.callFunction(4,event);"
                                                onclick="CKEDITOR.tools.callFunction(2,this);return false;"><span
                                                    id="cke_10_text"
                                                    class="cke_combo_text cke_combo_inlinelabel">Cỡ
                                                    chữ</span><span class="cke_combo_open"><span
                                                        class="cke_combo_arrow"></span></span></a></span><span
                                            class="cke_toolgroup" role="presentation"><a id="cke_12"
                                                class="cke_button cke_button__textcolor cke_button_off "
                                                href="javascript:void(&#39;Màu chữ&#39;)"
                                                title="Màu chữ" tabindex="-1" hidefocus="true"
                                                role="button" aria-labelledby="cke_12_label"
                                                aria-haspopup="true"
                                                onkeydown="return CKEDITOR.tools.callFunction(5,event);"
                                                onfocus="return CKEDITOR.tools.callFunction(6,event);"
                                                onclick="CKEDITOR.tools.callFunction(7,this);return false;"><span
                                                    class="cke_button_icon cke_button__textcolor_icon"
                                                    style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -408px;background-size:auto;">&nbsp;</span><span
                                                    id="cke_12_label"
                                                    class="cke_button_label cke_button__textcolor_label"
                                                    aria-hidden="false">Màu chữ</span><span
                                                    class="cke_button_arrow"></span></a><a
                                                id="cke_13"
                                                class="cke_button cke_button__bgcolor cke_button_off "
                                                href="javascript:void(&#39;Màu nền&#39;)"
                                                title="Màu nền" tabindex="-1" hidefocus="true"
                                                role="button" aria-labelledby="cke_13_label"
                                                aria-haspopup="true"
                                                onkeydown="return CKEDITOR.tools.callFunction(8,event);"
                                                onfocus="return CKEDITOR.tools.callFunction(9,event);"
                                                onclick="CKEDITOR.tools.callFunction(10,this);return false;"><span
                                                    class="cke_button_icon cke_button__bgcolor_icon"
                                                    style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -384px;background-size:auto;">&nbsp;</span><span
                                                    id="cke_13_label"
                                                    class="cke_button_label cke_button__bgcolor_label"
                                                    aria-hidden="false">Màu nền</span><span
                                                    class="cke_button_arrow"></span></a><a
                                                id="cke_14"
                                                class="cke_button cke_button__bold  cke_button_off"
                                                href="javascript:void(&#39;Đậm&#39;)" title="Đậm"
                                                tabindex="-1" hidefocus="true" role="button"
                                                aria-labelledby="cke_14_label" aria-haspopup="false"
                                                onkeydown="return CKEDITOR.tools.callFunction(11,event);"
                                                onfocus="return CKEDITOR.tools.callFunction(12,event);"
                                                onclick="CKEDITOR.tools.callFunction(13,this);return false;"><span
                                                    class="cke_button_icon cke_button__bold_icon"
                                                    style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -24px;background-size:auto;">&nbsp;</span><span
                                                    id="cke_14_label"
                                                    class="cke_button_label cke_button__bold_label"
                                                    aria-hidden="false">Đậm</span></a><a id="cke_15"
                                                class="cke_button cke_button__italic  cke_button_off"
                                                href="javascript:void(&#39;Nghiêng&#39;)"
                                                title="Nghiêng" tabindex="-1" hidefocus="true"
                                                role="button" aria-labelledby="cke_15_label"
                                                aria-haspopup="false"
                                                onkeydown="return CKEDITOR.tools.callFunction(14,event);"
                                                onfocus="return CKEDITOR.tools.callFunction(15,event);"
                                                onclick="CKEDITOR.tools.callFunction(16,this);return false;"><span
                                                    class="cke_button_icon cke_button__italic_icon"
                                                    style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -48px;background-size:auto;">&nbsp;</span><span
                                                    id="cke_15_label"
                                                    class="cke_button_label cke_button__italic_label"
                                                    aria-hidden="false">Nghiêng</span></a><a
                                                id="cke_16"
                                                class="cke_button cke_button__underline  cke_button_off"
                                                href="javascript:void(&#39;Gạch chân&#39;)"
                                                title="Gạch chân" tabindex="-1" hidefocus="true"
                                                role="button" aria-labelledby="cke_16_label"
                                                aria-haspopup="false"
                                                onkeydown="return CKEDITOR.tools.callFunction(17,event);"
                                                onfocus="return CKEDITOR.tools.callFunction(18,event);"
                                                onclick="CKEDITOR.tools.callFunction(19,this);return false;"><span
                                                    class="cke_button_icon cke_button__underline_icon"
                                                    style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -144px;background-size:auto;">&nbsp;</span><span
                                                    id="cke_16_label"
                                                    class="cke_button_label cke_button__underline_label"
                                                    aria-hidden="false">Gạch chân</span></a><a
                                                id="cke_17"
                                                class="cke_button cke_button__link  cke_button_off"
                                                href="javascript:void(&#39;Chèn/Sửa liên kết&#39;)"
                                                title="Chèn/Sửa liên kết" tabindex="-1"
                                                hidefocus="true" role="button"
                                                aria-labelledby="cke_17_label" aria-haspopup="false"
                                                onkeydown="return CKEDITOR.tools.callFunction(20,event);"
                                                onfocus="return CKEDITOR.tools.callFunction(21,event);"
                                                onclick="CKEDITOR.tools.callFunction(22,this);return false;"><span
                                                    class="cke_button_icon cke_button__link_icon"
                                                    style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -1248px;background-size:auto;">&nbsp;</span><span
                                                    id="cke_17_label"
                                                    class="cke_button_label cke_button__link_label"
                                                    aria-hidden="false">Chèn/Sửa liên
                                                    kết</span></a><a id="cke_18"
                                                class="cke_button cke_button__unlink cke_button_disabled "
                                                href="javascript:void(&#39;Xoá liên kết&#39;)"
                                                title="Xoá liên kết" tabindex="-1" hidefocus="true"
                                                role="button" aria-labelledby="cke_18_label"
                                                aria-haspopup="false" aria-disabled="true"
                                                onkeydown="return CKEDITOR.tools.callFunction(23,event);"
                                                onfocus="return CKEDITOR.tools.callFunction(24,event);"
                                                onclick="CKEDITOR.tools.callFunction(25,this);return false;"><span
                                                    class="cke_button_icon cke_button__unlink_icon"
                                                    style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -1272px;background-size:auto;">&nbsp;</span><span
                                                    id="cke_18_label"
                                                    class="cke_button_label cke_button__unlink_label"
                                                    aria-hidden="false">Xoá liên kết</span></a><a
                                                id="cke_19"
                                                class="cke_button cke_button__removeformat  cke_button_off"
                                                href="javascript:void(&#39;Xoá định dạng&#39;)"
                                                title="Xoá định dạng" tabindex="-1" hidefocus="true"
                                                role="button" aria-labelledby="cke_19_label"
                                                aria-haspopup="false"
                                                onkeydown="return CKEDITOR.tools.callFunction(26,event);"
                                                onfocus="return CKEDITOR.tools.callFunction(27,event);"
                                                onclick="CKEDITOR.tools.callFunction(28,this);return false;"><span
                                                    class="cke_button_icon cke_button__removeformat_icon"
                                                    style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -1680px;background-size:auto;">&nbsp;</span><span
                                                    id="cke_19_label"
                                                    class="cke_button_label cke_button__removeformat_label"
                                                    aria-hidden="false">Xoá định dạng</span></a><a
                                                id="cke_20"
                                                class="cke_button cke_button__maximize  cke_button_off"
                                                href="javascript:void(&#39;Phóng to tối đa&#39;)"
                                                title="Phóng to tối đa" tabindex="-1"
                                                hidefocus="true" role="button"
                                                aria-labelledby="cke_20_label" aria-haspopup="false"
                                                onkeydown="return CKEDITOR.tools.callFunction(29,event);"
                                                onfocus="return CKEDITOR.tools.callFunction(30,event);"
                                                onclick="CKEDITOR.tools.callFunction(31,this);return false;"><span
                                                    class="cke_button_icon cke_button__maximize_icon"
                                                    style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -1392px;background-size:auto;">&nbsp;</span><span
                                                    id="cke_20_label"
                                                    class="cke_button_label cke_button__maximize_label"
                                                    aria-hidden="false">Phóng to tối
                                                    đa</span></a></span><span
                                            class="cke_toolbar_end"></span></span></span></span>
                            <div id="cke_1_contents" class="cke_contents cke_reset"
                                role="presentation" style="height: 150px;"><span id="cke_24"
                                    class="cke_voice_label">Nhấn ALT + 0 để được giúp
                                    đỡ</span><iframe
                                    src="./ERP-Chi tiết phiếu thu chi_files/saved_resource.html"
                                    frameborder="0" class="cke_wysiwyg_frame cke_reset"
                                    style="width: 100%; height: 100%;"
                                    title="Bộ soạn thảo văn bản có định dạng, commentInput"
                                    aria-describedby="cke_24" tabindex="0"
                                    allowtransparency="true"></iframe></div><span id="cke_1_bottom"
                                class="cke_bottom cke_reset_all" role="presentation"
                                style="user-select: none;"><span id="cke_1_resizer"
                                    class="cke_resizer cke_resizer_vertical cke_resizer_ltr"
                                    title="Kéo rê để thay đổi kích cỡ"
                                    onmousedown="CKEDITOR.tools.callFunction(0, event)">◢</span><span
                                    id="cke_1_path_label" class="cke_voice_label">Nhãn thành
                                    phần</span><span id="cke_1_path" class="cke_path" role="group"
                                    aria-labelledby="cke_1_path_label"><span
                                        class="cke_path_empty">&nbsp;</span></span></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-10" style="padding-top: 10px;">
                    <a class="btn btn-primary" id="addComment">Thêm bình luận</a>
                </div>
            </div>
            <style>
                .user-avatar img {
                    width: 90%;
                    height: 90%;
                }

                .comment {
                    margin-bottom: 12px;
                }

                .comment .avatar-box {
                    padding: 0px;
                }

                .comment .user-info {
                    padding-left: 0px;
                }

                .comment .user-avatar {
                    padding: 0px;
                    text-align: center;
                    border: 1px solid #ccc;
                    height: 60px;
                    display: block;
                    font-size: 3em;
                    overflow: hidden;
                }

                .comment .user-avatar image {
                    width: 100%;
                    height: 100%;
                }

                .comment .content-box {
                    min-height: 80px;
                    border: 1px solid #ccc;
                    position: relative;
                }

                .comment .content-box .left-outline {
                    background: none repeat scroll 0 0 #fff;
                    border-bottom: 1px solid #d8d8d8;
                    border-left: 1px solid #d8d8d8;
                    height: 12px;
                    left: -7px;
                    position: absolute;
                    top: 12px;
                    transform: rotate(45deg);
                    width: 12px;
                }

                .comment .content-box .content {
                    padding: 5px;
                }

                .tableContract tbody tr td {
                    border: none !important;
                }

                .comment .content-box .action {
                    position: absolute;
                    right: 5px;
                    top: 0;
                }
            </style>
        </div>


        <div class="modal fade" id="showContentModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <div class="modal fade" id="approveTransactionModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Xác nhận duyệt phiếu</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-info">Bạn có muốn duyệt phiếu này không?</div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary approve-btn">Xác nhận</button>
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <div class="modal fade" id="inapproveTransactionModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Xác nhận hủy phiếu</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-info">Bạn có muốn hủy phiếu này?</div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary delete-btn">Xác nhận</button>
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <div class="modal fade" id="acceptTransactionModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">
                            <i class="fa fa-hand-o-right"></i> Kế toán xác nhận
                        </h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-info">Bạn có muốn xác nhận không?</div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary accept-btn">Xác nhận</button>
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <div class="modal fade" id="reApproveTransactionModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">
                            <i class="fa fa-hand-o-right"></i> Xác nhận hoàn duyệt
                        </h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-info">Bạn có muốn hoàn duyệt phiếu không?</div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary reApprove-btn">Xác
                            nhận</button>
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <div class="modal fade" id="updateStatusTransactionModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">
                            <i class="fa fa-hand-o-right"></i> Xác nhận thay đổi trạng thái
                        </h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-info">Bạn muốn cập nhật trạng thái về trạng thái
                            <b>chưa hạch toán(chưa thu hoặc chi tiền, mới chỉ duyệt)</b> ? </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button"
                            class="btn btn-primary updateStatusTransaction-btn">Xác nhận</button>
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <div class="modal fade" id="alertModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Thông báo!</h4>
                    </div>
                    <div class="modal-body"></div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-default reload"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- Dialog bootstrap -->
        <div id="preview" class="modal fade">
            <div class="modal-dialog modal-lg"
                style="width: 100%; height:0px; margin:0px; padding-top:5px;">
                <div class="modal-content" style="width: 100%;">
                    <div class="modal-header"><button type="button" class="close"
                            data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Xem trước</h4>
                    </div>
                    <div class="modal-body"></div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="errorModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Lỗi</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <style>
            table tr:first-child td {
                border-top: none;
            }

            span#confirm-group {
                font-size: 13px;
                font-weight: normal;
            }

            .title {
                background-color: #eee;
                padding: 8px 15px;
                margin-bottom: 15px;
                color: rgb(171, 28, 30);
                font-weight: bold;
            }

            ul li .btn {
                margin-top: -10px;
            }

            .btn-default {
                color: #333;
                background-color: #fff;
                border-color: #ccc;
                margin-left: 5px;
            }

            span i {
                margin-right: 5px;
            }

            span i.description {
                font-size: 13px;
                text-align: center;
                margin-left: 10px;
                font-style: normal;
            }

            .group-content ul {
                margin: 0;
                padding: 0;
            }

            .group-content li {
                list-style: none;
                margin: 10px 0 0 0;
                border-bottom: 1px solid rgba(184, 171, 171, .11);
            }

            .group-content label {
                display: inline-block;
                width: 37%;
                font-weight: normal;
                text-align: left;
                padding: 0 5px;
                vertical-align: top;
            }

            .group-content .col-ele {
                display: inline-block;
                width: 60%;
                text-align: left;
                padding: 0 5px;
            }

            .view-group:hover {
                background: #FFFEE8;
            }

            .line-break {
                border-bottom: 1px dashed #eee;
                margin: 3px auto;
                width: 100%;
            }

            .clear {
                clear: both;
            }
        </style>
        <script>
            var transactionId = '76741';
        </script>
    </div>

@endsection


@section('js')

    <script type="text/javascript" src="{{ asset('asset/js/accounting/transaction/config.js') }}"></script>
	<script type="text/javascript" src="{{ asset('asset/js/accounting/transaction/vi.js') }}"></script>
	<script type="text/javascript" src="{{ asset('asset/js/accounting/transaction/styles.js') }}"></script>
	<script type="text/javascript" src="{{ asset('asset/js/accounting/transaction/plugin.js') }}"></script>

    <script type="text/javascript">
        var usrCnf = {
            language: 'vi'
        };

    </script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/transaction/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/transaction/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/transaction/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/transaction/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/transaction/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/transaction/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/transaction/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/transaction/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/transaction/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/transaction/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/transaction/saved_resource(2)') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/transaction/dropzone.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/accounting/transaction/previewOfficeMS.js') }}"></script>

@endsection
