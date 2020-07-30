@extends('Layout.master')

@section('title','ERP-Danh hợp đồng hết hạn')

@section('css')
    <link href=".{{ asset('asset/css/contract/bootstrap-multiselect.css') }}" media="screen" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="{{ asset('asset/css/contract/style.css') }}" type="text/css">
@endsection

@section('content-page')
    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/crm/contract/index">Danh sách hợp đồng</a></li>
            <li class="active">Thêm hợp đồng</li>
        </ul>
        <div class="main-header">
            <h2>Thêm hợp đồng</h2>
            <em>Các trường có dấu * là bắt buộc phải nhập</em>
        </div>
        <form id="crmContract" enctype="multipart/form-data" name="crmContract" method="post"
            action="https://erp.nhanh.vn/crm/contract/add">
            <div class="form-horizontal">
                <fieldset>

                    <div class="col-md-12">
                        <legend>
                            <i class="fa fa-user fontsize-85"></i> Bên khách
                        </legend>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label">
                                    Tìm kiếm khách hàng
                                </label>
                                <div class="col-md-8">
                                    <div class="input-group autocomplete-with-noresult"
                                        data-toggle="tooltip"
                                        title="Nhập vào &#39;số điện thoại&#39;, &#39;email&#39;, &#39;CMND&#39; hoặc &#39;mã số thuế&#39; để lấy thông tin khách hàng trong hệ thống">
                                        <span class="input-group-addon"><i
                                                class="fa fa-search"></i></span>
                                        <input type="text" name="leadName" id="leadName"
                                            class="form-control ui-autocomplete-input" value=""
                                            autocomplete="off">
                                        <div class="empty-message" style="display: none;">No result
                                            found</div>
                                    </div>
                                    <div class="autocomplete-with-noresult">
                                    </div>
                                    <input type="hidden" name="leadId" id="leadId" value=""> <input
                                        type="hidden" name="accountId" id="accountId" value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label required">
                                    Tên khách hàng: <span class="required">*</span>
                                </label>
                                <div class="col-md-8">
                                    <input type="text" name="customerName" id="customerName"
                                        class="inputRequired form-control" value=""> </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label required">
                                    Loại khách hàng: <span class="required">*</span>
                                </label>
                                <div class="col-md-8">
                                    <select name="customerType" id="customerType"
                                        class="inputRequired form-control">
                                        <option value="">- Loại khách hàng</option>
                                        <option value="1">Công ty</option>
                                        <option value="2">Cá nhân</option>
                                    </select> </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label required">
                                    Số điện thoại: <span class="required">*</span>
                                </label>
                                <div class="col-md-8">
                                    <input type="text" name="customerMobile" id="customerMobile"
                                        class="inputRequired form-control" value="">
                                    <div class="description text-muted fontsize-85">Mỗi số điện
                                        thoại cách nhau bởi dấu " - "</div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label required">
                                    Địa chỉ: <span class="required">*</span>
                                </label>
                                <div class="col-md-8">
                                    <input type="text" name="customerAddress" id="customerAddress"
                                        class="inputRequired form-control" value=""> </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">
                                    Email:
                                </label>
                                <div class="col-md-8">
                                    <input type="text" name="customerEmail" id="customerEmail"
                                        class="form-control" value="">
                                    <div class="description text-muted fontsize-85">Mỗi email cách
                                        nhau bởi dấu " - "</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Website:</label>
                                <div class="col-md-8">
                                    <input type="text" name="customerWebsite" id="customerWebsite"
                                        class="form-control" value=""> </div>
                            </div>
                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label class="col-md-4 control-label required">
                                    CMND: <span class="required">*</span>
                                </label>
                                <div class="col-md-8">
                                    <input type="text" name="customerIdentification"
                                        id="customerIdentification" class="form-control" value="">
                                    <div class="clearfix"></div>
                                    <div class="description text-muted fontsize-85">CMND là bắt buộc
                                        đối với loại khách hàng cá nhân</div>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">
                                </label>
                                <div class="col-md-8">
                                    <div class="col-md-6 row">
                                        <input type="text" name="customerIdentificationPlace"
                                            placeholder="Nơi cấp" id="customerIdentificationPlace"
                                            class="form-control" value=""> </div>
                                    <div class="col-md-6 row pull-right">
                                        <input type="text" name="customerIdentificationDate"
                                            placeholder="Ngày cấp" id="customerIdentificationDate"
                                            class="form-control" value=""> </div>
                                    <div class="clearfix"></div>
                                    <div class="clearfix"></div>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label required">
                                    Mã số thuế: <span class="required">*</span>
                                </label>
                                <div class="col-md-8">
                                    <input type="text" name="customerTaxcode" id="customerTaxcode"
                                        class="form-control" value="">
                                    <div class="description text-muted fontsize-85">Mã số thuế là
                                        bắt buộc đối với loại khách hàng doanh nghiệp</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">
                                    Link Facebook:
                                </label>
                                <div class="col-md-8">
                                    <input type="text" name="facebook" id="facebook"
                                        class="form-control" value="">
                                    <div class="description text-muted fontsize-85">Link face của
                                        gian hàng hoặc khách hàng (không bắt buộc)</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 clearfix" style="margin-bottom: 15px;">
                            <a id="toggleCustomerAdditionalData" class="text-info"><i
                                    class="currentControle">(+)</i> Thông tin thêm</a>
                        </div>

                        <div id="customerAdditionalData" class="hide">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Email đăng ký
                                        Nhanh.vn:</label>
                                    <div class="col-md-8">
                                        <input type="text" name="customerNhanhEmail"
                                            id="customerNhanhEmail" class="form-control" value="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">NhanhStoreId:</label>
                                    <div class="col-md-8">
                                        <input type="text" name="customerNhanhStoreId"
                                            id="customerNhanhStoreId" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">NhanhStoreName:</label>
                                    <div class="col-md-8">
                                        <input type="text" name="customerNhanhStoreName"
                                            id="customerNhanhStoreName" class="form-control"
                                            value=""> </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Fax:</label>
                                    <div class="col-md-8">
                                        <input type="text" name="customerFax" id="customerFax"
                                            class="form-control" value=""> </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Người đại diện
                                        (NĐD):</label>
                                    <div class="col-md-8">
                                        <input type="text" name="customerRepresentatorName"
                                            id="customerRepresentatorName" class="form-control"
                                            value=""> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Chức vụ NĐD:</label>
                                    <div class="col-md-8">
                                        <input type="text" name="customerRepresentatorTitle"
                                            id="customerRepresentatorTitle" class="form-control"
                                            value=""> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Email NĐD:</label>
                                    <div class="col-md-8">
                                        <input type="text" name="customerRepresentatorEmail"
                                            id="customerRepresentatorEmail" class="form-control"
                                            value=""> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Đt NĐD:</label>
                                    <div class="col-md-8">
                                        <input type="text" name="customerRepresentatorMobile"
                                            id="customerRepresentatorMobile" class="form-control"
                                            value=""> </div>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="col-md-12">
                        <legend><i class="fa fa-square fontsize-85"></i> Thông tin Hợp đồng</legend>

                        <div class="col-md-6">
                            <input type="hidden" name="companyId" id="companyId" value="391">
                            <div class="form-group">
                                <label class="col-md-4 control-label required">
                                    Ngành hàng:
                                    <!-- <span class="required">*</span> -->
                                </label>
                                <div class="col-md-8">
                                    <select name="industryId" id="industryId"
                                        class="inputRequired form-control">
                                        <option value="">- Ngành nghề -</option>
                                        <option value="1">Thời trang, phụ kiện</option>
                                        <option value="2">Mỹ phẩm</option>
                                        <option value="3">Điện tử, Điện máy</option>
                                        <option value="4">Sách, văn phòng, quà tặng</option>
                                        <option value="5">Dịch vụ, giải trí, du lịch</option>
                                        <option value="6">Đồ dùng sinh hoạt</option>
                                        <option value="8">Sức khỏe, sắc đẹp</option>
                                        <option value="10">Điện thoại, Viễn thông</option>
                                        <option value="11">Máy tính, Linh kiện</option>
                                        <option value="13">Thực phẩm, đồ uống, hàng tiêu dùng
                                        </option>
                                        <option value="16">Nội thất, ngoại thất</option>
                                        <option value="18">Thể thao</option>
                                        <option value="19">Máy ảnh, máy quay</option>
                                        <option value="20">Ô tô, xe máy, xe đạp</option>
                                        <option value="21">Công nghiệp - xây dựng</option>
                                        <option value="24">Bất động sản</option>
                                        <option value="25">Hoạt động cấp tín dụng khác</option>
                                        <option value="26">Hoạt động tư vấn đầu tư</option>
                                        <option value="27">Hoạt động liên quan đến tài chính tín
                                            dụng</option>
                                        <option value="28">Hoạt động kinh doanh khác</option>
                                    </select> </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label required">
                                    Ngày kí: <span class="required">*</span>
                                </label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i
                                                class="fa fa-calendar"></i></span>
                                        <input type="text" name="signedDate"
                                            class="datepicker inputRequired form-control"
                                            id="signedDate" value="24/07/2020"> </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label required">
                                    Ngày bắt đầu: <span class="required">*</span>
                                </label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i
                                                class="fa fa-calendar"></i></span>
                                        <input type="text" name="startDate"
                                            class="datepicker inputRequired form-control"
                                            id="startDate" value=""> </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">
                                    Ngày kết thúc: </label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i
                                                class="fa fa-calendar"></i></span>
                                        <input type="text" value="" id="endDate"
                                            class="datepicker form-control" name="endDate"
                                            disabled="">
                                    </div>
                                    <div class="description text-muted fontsize-85"><i>Chưa tính
                                            thời gian tặng thêm hạn sử dụng</i></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">
                                    Ngày hết hạn: </label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i
                                                class="fa fa-calendar"></i></span>
                                        <input type="text" value="" id="expiredDate"
                                            class="datepicker form-control" name="expiredDate"
                                            disabled="">
                                    </div>
                                    <div class="description text-muted fontsize-85"><i>Đã tính thời
                                            gian tặng thêm hạn sử dụng</i></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label required">
                                    Loại HĐ: <span class="required">*</span>
                                </label>
                                <div class="col-md-8">
                                    <select name="serviceType" id="serviceType"
                                        class="inputRequired form-control">
                                        <option value="">- Loại HĐ -</option>
                                        <option value="1" selected="selected">HĐ dịch vụ</option>
                                        <option value="3">HĐ đặt cọc</option>
                                        <option value="4">HĐ phụ lục</option>
                                        <option value="5">HĐ đại lý</option>
                                        <option value="6">HĐ Hợp tác</option>
                                        <option value="7">HĐ Marketing</option>
                                        <option value="8">HĐ Cộng tác viên</option>
                                        <option value="9">HĐ Phần cứng</option>
                                        <option value="10">HĐ vận chuyển</option>
                                    </select> </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label required">
                                    Hình thức kí: <span class="required">*</span>
                                </label>
                                <div class="col-md-8">
                                    <select name="type" id="type" class="form-control">
                                        <option value="">- Hình thức kí -</option>
                                        <option value="1" selected="selected">Kí mới</option>
                                        <option value="2">Tái kí</option>
                                        <option value="3">Mở rộng</option>
                                        <option value="4">Bán chéo</option>
                                    </select> </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label required">
                                    Gian hàng: <span class="required">*</span>
                                </label>
                                <div class="col-md-8">
                                    <select name="companyServiceId" id="companyServiceId"
                                        class="form-control" disabled="">
                                        <option value="">- Gian hàng -</option>
                                    </select>
                                    <div class="description text-muted fontsize-85">Bắt buộc đối với
                                        hợp đồng tái ký GHĐB!</div>
                                </div>
                            </div>


                        </div>
                    </div>


                    <div class="col-md-12">
                        <legend><i class="fa fa-square fontsize-85"></i> Giá trị hợp đồng <span
                                class="color-red">*</span>
                        </legend>
                        <div class="col-md-12">
                            <div class="alert alert-info">
                                <b>Lưu ý: </b>Do chính sách mỗi công ty cung cấp là khác nhau, nên
                                sản phẩm của các công ty cung cấp khác nhau cần được tách thành các
                                hợp đồng khác nhau.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label">
                                    Cty cung cấp sản phẩm </label>
                                <div class="col-md-8">
                                    <select name="supplyCompanyId" id="supplyCompanyId"
                                        class="form-control">
                                        <option value="">- Cty cung cấp sản phẩm -</option>
                                        <option value="391">123job.vn</option>
                                    </select> </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label">
                                    Sản phẩm: </label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <select name="productId" id="productId"
                                            class="form-control select2-hidden-accessible"
                                            tabindex="-1" aria-hidden="true">
                                            <option value="">-- Sản phẩm --</option>
                                            <optgroup label="123job.vn">
                                                <option value="584">123job - Gói mở hồ sơ ứng viên
                                                </option>
                                            </optgroup>
                                        </select><span
                                            class="select2 select2-container select2-container--default select2-container--below"
                                            dir="ltr" style="width: 421px;"><span
                                                class="selection"><span
                                                    class="select2-selection select2-selection--single"
                                                    role="combobox" aria-haspopup="true"
                                                    aria-expanded="false" tabindex="0"
                                                    aria-labelledby="select2-productId-container"><span
                                                        class="select2-selection__rendered"
                                                        id="select2-productId-container"
                                                        title="-- Sản phẩm --">-- Sản phẩm
                                                        --</span><span
                                                        class="select2-selection__arrow"
                                                        role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper"
                                                aria-hidden="true"></span></span> <span
                                            class="input-group-addon"><i
                                                class="fa fa-plus"></i></span>
                                    </div>
                                    <i class="fontsize-85 text-muted">Chọn các dịch vụ, sản phẩm
                                        trong hợp đồng</i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <input type="hidden" name="products" id="products" value="">
                            <div id="productList">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Sản phẩm, dịch vụ</th>
                                            <th>Số lượng <span class="color-red">*</span></th>
                                            <th>Số tháng <span class="color-red">*</span></th>
                                            <th>Giá <span class="color-red">*</span></th>
                                            <th>VAT (%)</th>
                                            <th colspan="2">Giảm giá (VND)</th>
                                            <th>Tặng hạn sử dụng (Tháng)</th>
                                            <th>Giá trị</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td class="colNb" colspan="8"><b>Tổng</b></td>
                                            <td class="colNb"><span disabled=""
                                                    class="form-control totalValue disabled">0</span>
                                            </td>
                                            <td class=""></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-12">
                        <legend>
                            <i class="fa fa-square fontsize-85"></i> Doanh số <span
                                class="color-red">*</span>
                        </legend>
                        <div class="col-md-12">
                            <div class="alert alert-info">
                                <b>Lưu ý: </b><br>
                                - Doanh số được tính theo từng nhân viên với từng sản phẩm.<br>
                                - Để được tính là bán được sản phẩm nào (liên quan đến tính chỉ tiêu
                                sản phẩm) bạn phải tích vào ô tính chỉ tiêu sản phẩm.<br>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label">
                                    Nhân viên: </label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <input type="text"
                                            class="form-control ui-autocomplete-input"
                                            id="employeeName" autocomplete="off"> <span
                                            class="input-group-addon"><i
                                                class="fa fa-plus"></i></span>
                                    </div>
                                    <i class="fontsize-85 text-muted">Chọn các nhân viên bạn muốn
                                        chia doanh số</i>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <input type="hidden" name="commissions" id="commissions" value="">
                            <div id="commissionList">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Nhân viên</th>
                                            <th>Sản phẩm, dịch vụ <span class="color-red">*</span>
                                            </th>
                                            <th>Chỉ tiêu cho sp</th>
                                            <th>% doanh số <span class="color-red">*</span></th>
                                            <th>Thành tiền</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <legend><i class="fa fa-square fontsize-85"></i> Ghi chú &amp; đính kèm
                        </legend>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label">
                                    File đính kèm: </label>
                                <div class="col-md-8">
                                    <input type="file" name="fileUpload[]" multiple="multiple"
                                        id="fileUpload"> </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="col-md-3 control-label">
                                    Ghi chú: </label>
                                <div class="col-md-9">
                                    <textarea name="description" class="basicEditor" rows="10"
                                        id="description"
                                        style="visibility: hidden; display: none;"></textarea>
                                    <div id="cke_description"
                                        class="cke_1 cke cke_reset cke_chrome cke_editor_description cke_ltr cke_browser_webkit"
                                        dir="ltr" lang="vi" role="application"
                                        aria-labelledby="cke_description_arialbl"><span
                                            id="cke_description_arialbl" class="cke_voice_label">Bộ
                                            soạn thảo văn bản có định dạng, description</span>
                                        <div class="cke_inner cke_reset" role="presentation"><span
                                                id="cke_1_top" class="cke_top cke_reset_all"
                                                role="presentation"
                                                style="height: auto; user-select: none;"><span
                                                    id="cke_9" class="cke_voice_label">Thanh công
                                                    cụ</span><span id="cke_1_toolbox"
                                                    class="cke_toolbox" role="group"
                                                    aria-labelledby="cke_9"
                                                    onmousedown="return false;"><span id="cke_11"
                                                        class="cke_toolbar" role="toolbar"><span
                                                            class="cke_toolbar_start"></span><span
                                                            id="cke_10"
                                                            class="cke_combo cke_combo__fontsize  cke_combo_off"
                                                            role="presentation"><span
                                                                id="cke_10_label"
                                                                class="cke_combo_label">Cỡ
                                                                chữ</span><a
                                                                class="cke_combo_button"
                                                                hidefocus="true" title="Cỡ chữ"
                                                                tabindex="-1" "="" href="
                                                                javascript:void(&#39;Cỡ chữ&#39;)"
                                                                role="button"
                                                                aria-labelledby="cke_10_label"
                                                                aria-haspopup="true"
                                                                onkeydown="return CKEDITOR.tools.callFunction(3,event,this);"
                                                                onfocus="return CKEDITOR.tools.callFunction(4,event);"
                                                                onclick="CKEDITOR.tools.callFunction(2,this);return false;"><span
                                                                    id="cke_10_text"
                                                                    class="cke_combo_text cke_combo_inlinelabel">Cỡ
                                                                    chữ</span><span
                                                                    class="cke_combo_open"><span
                                                                        class="cke_combo_arrow"></span></span></a></span><span
                                                            class="cke_toolgroup"
                                                            role="presentation"><a id="cke_12"
                                                                class="cke_button cke_button__textcolor cke_button_off "
                                                                href="javascript:void(&#39;Màu chữ&#39;)"
                                                                title="Màu chữ" tabindex="-1"
                                                                hidefocus="true" role="button"
                                                                aria-labelledby="cke_12_label"
                                                                aria-haspopup="true"
                                                                onkeydown="return CKEDITOR.tools.callFunction(5,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(6,event);"
                                                                onclick="CKEDITOR.tools.callFunction(7,this);return false;"><span
                                                                    class="cke_button_icon cke_button__textcolor_icon"
                                                                    style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -408px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_12_label"
                                                                    class="cke_button_label cke_button__textcolor_label"
                                                                    aria-hidden="false">Màu
                                                                    chữ</span><span
                                                                    class="cke_button_arrow"></span></a><a
                                                                id="cke_13"
                                                                class="cke_button cke_button__bgcolor cke_button_off "
                                                                href="javascript:void(&#39;Màu nền&#39;)"
                                                                title="Màu nền" tabindex="-1"
                                                                hidefocus="true" role="button"
                                                                aria-labelledby="cke_13_label"
                                                                aria-haspopup="true"
                                                                onkeydown="return CKEDITOR.tools.callFunction(8,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(9,event);"
                                                                onclick="CKEDITOR.tools.callFunction(10,this);return false;"><span
                                                                    class="cke_button_icon cke_button__bgcolor_icon"
                                                                    style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -384px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_13_label"
                                                                    class="cke_button_label cke_button__bgcolor_label"
                                                                    aria-hidden="false">Màu
                                                                    nền</span><span
                                                                    class="cke_button_arrow"></span></a><a
                                                                id="cke_14"
                                                                class="cke_button cke_button__bold  cke_button_off"
                                                                href="javascript:void(&#39;Đậm&#39;)"
                                                                title="Đậm" tabindex="-1"
                                                                hidefocus="true" role="button"
                                                                aria-labelledby="cke_14_label"
                                                                aria-haspopup="false"
                                                                onkeydown="return CKEDITOR.tools.callFunction(11,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(12,event);"
                                                                onclick="CKEDITOR.tools.callFunction(13,this);return false;"><span
                                                                    class="cke_button_icon cke_button__bold_icon"
                                                                    style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -24px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_14_label"
                                                                    class="cke_button_label cke_button__bold_label"
                                                                    aria-hidden="false">Đậm</span></a><a
                                                                id="cke_15"
                                                                class="cke_button cke_button__italic  cke_button_off"
                                                                href="javascript:void(&#39;Nghiêng&#39;)"
                                                                title="Nghiêng" tabindex="-1"
                                                                hidefocus="true" role="button"
                                                                aria-labelledby="cke_15_label"
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
                                                                title="Gạch chân" tabindex="-1"
                                                                hidefocus="true" role="button"
                                                                aria-labelledby="cke_16_label"
                                                                aria-haspopup="false"
                                                                onkeydown="return CKEDITOR.tools.callFunction(17,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(18,event);"
                                                                onclick="CKEDITOR.tools.callFunction(19,this);return false;"><span
                                                                    class="cke_button_icon cke_button__underline_icon"
                                                                    style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -144px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_16_label"
                                                                    class="cke_button_label cke_button__underline_label"
                                                                    aria-hidden="false">Gạch
                                                                    chân</span></a><a id="cke_17"
                                                                class="cke_button cke_button__link  cke_button_off"
                                                                href="javascript:void(&#39;Chèn/Sửa liên kết&#39;)"
                                                                title="Chèn/Sửa liên kết"
                                                                tabindex="-1" hidefocus="true"
                                                                role="button"
                                                                aria-labelledby="cke_17_label"
                                                                aria-haspopup="false"
                                                                onkeydown="return CKEDITOR.tools.callFunction(20,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(21,event);"
                                                                onclick="CKEDITOR.tools.callFunction(22,this);return false;"><span
                                                                    class="cke_button_icon cke_button__link_icon"
                                                                    style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -1248px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_17_label"
                                                                    class="cke_button_label cke_button__link_label"
                                                                    aria-hidden="false">Chèn/Sửa
                                                                    liên kết</span></a><a
                                                                id="cke_18"
                                                                class="cke_button cke_button__unlink cke_button_disabled "
                                                                href="javascript:void(&#39;Xoá liên kết&#39;)"
                                                                title="Xoá liên kết" tabindex="-1"
                                                                hidefocus="true" role="button"
                                                                aria-labelledby="cke_18_label"
                                                                aria-haspopup="false"
                                                                aria-disabled="true"
                                                                onkeydown="return CKEDITOR.tools.callFunction(23,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(24,event);"
                                                                onclick="CKEDITOR.tools.callFunction(25,this);return false;"><span
                                                                    class="cke_button_icon cke_button__unlink_icon"
                                                                    style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -1272px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_18_label"
                                                                    class="cke_button_label cke_button__unlink_label"
                                                                    aria-hidden="false">Xoá liên
                                                                    kết</span></a><a id="cke_19"
                                                                class="cke_button cke_button__removeformat  cke_button_off"
                                                                href="javascript:void(&#39;Xoá định dạng&#39;)"
                                                                title="Xoá định dạng" tabindex="-1"
                                                                hidefocus="true" role="button"
                                                                aria-labelledby="cke_19_label"
                                                                aria-haspopup="false"
                                                                onkeydown="return CKEDITOR.tools.callFunction(26,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(27,event);"
                                                                onclick="CKEDITOR.tools.callFunction(28,this);return false;"><span
                                                                    class="cke_button_icon cke_button__removeformat_icon"
                                                                    style="background-image:url(https://erp.nhanh.vn/tool/ckeditor/plugins/icons.png?t=E7KD);background-position:0 -1680px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_19_label"
                                                                    class="cke_button_label cke_button__removeformat_label"
                                                                    aria-hidden="false">Xoá định
                                                                    dạng</span></a><a id="cke_20"
                                                                class="cke_button cke_button__maximize  cke_button_off"
                                                                href="javascript:void(&#39;Phóng to tối đa&#39;)"
                                                                title="Phóng to tối đa"
                                                                tabindex="-1" hidefocus="true"
                                                                role="button"
                                                                aria-labelledby="cke_20_label"
                                                                aria-haspopup="false"
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
                                                role="presentation" style="height: 186px;"><span
                                                    id="cke_24" class="cke_voice_label">Nhấn ALT + 0
                                                    để được giúp đỡ</span><iframe
                                                    src="./ERP-Thêm hợp đồng_files/saved_resource.html"
                                                    frameborder="0"
                                                    class="cke_wysiwyg_frame cke_reset"
                                                    style="width: 100%; height: 100%;"
                                                    title="Bộ soạn thảo văn bản có định dạng, description"
                                                    aria-describedby="cke_24" tabindex="0"
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
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-8">
                                    <a class="btn btn-primary" id="btnSave"><i
                                            class="fa fa-floppy-o"></i>
                                        Lưu</a>
                                </div>
                            </div>
                        </div>
                    </div>


                </fieldset>
            </div>
        </form>

        <table id="productTemplate" style="display: none;">
            <tbody>
                <tr>
                    <td><span class="productName" disabled=""></span> <input type="hidden"
                            class="productId" value="1"></td>
                    <td class="colNb"><input class="form-control quantity  formNb small" value="1">
                    </td>
                    <td class="colNb"><input class="form-control months  formNb small" value="1">
                    </td>
                    <td class="colNb"><input class="form-control price  formNb"></td>
                    <td class="colNb"><input class="form-control vat  formNb small"></td>
                    <td class="colNb"><input class="form-control discount  formNb"
                            placeholder="VND"></td>
                    <td class="colNb"><span class="discountPercent text-muted">0%</span></td>
                    <td class="colNb"><input class="form-control bonusMonth  formNb small"></td>
                    <td class="colNb"><span class="form-control totalProductValue disabled"
                            disabled=""></span></td>
                    <td><a class="fa fa-times remove-item"></a></td>
                </tr>
            </tbody>
        </table>

        <table id="commissionTemplate" style="display: none;">
            <tbody>
                <tr>
                    <td><span class="form-control employeeName" disabled=""></span> <input
                            type="hidden" class="employeeId" value="1"></td>
                    <td><select class="form-control productId">

                        </select></td>
                    <td class="col-align-center">
                        <input type="checkbox" class="countTarget" value="1" data-toggle="tooltip"
                            title="Tính chỉ tiêu sản phẩm cho nhân viên">
                    </td>
                    <td><input type="text" class="form-control formNb commissionPercent"
                            disabled=""></td>
                    <td><span class="form-control commissionMoney" disabled=""></span></td>

                    <td><a class="fa fa-times remove-item"></a></td>
                </tr>

            </tbody>
        </table>

        <table id="paymentTemplate" style="display: none;">
            <tbody>
                <tr>
                    <td><input type="text" class="form-control paymentDescription"></td>
                    <td><select class="form-control paymentType" style="max-width: 120px;">
                            <option value="">- Hình thức thanh toán -</option>
                            <option value="1">Tiền mặt</option>
                            <option value="2">Chuyển khoản</option>
                        </select></td>
                    <td><input type="text" class="form-control formNb paymentAmount"></td>
                    <td><span class="form-control formNb paymentPercent" disabled=""></span></td>
                    <td><a class="fa fa-times remove-item"></a></td>
                </tr>
            </tbody>
        </table>

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

        <div class="modal fade" id="updateLeadModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Cập nhật thông tin!</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-warning">Hợp đồng bắt buộc thông tin phải có thông
                            tin <b>CMND</b>! </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Cập nhật CMND:</label>
                            <div class="col-md-8">
                                <input type="text" class="identification form-control"
                                    id="identification">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="save-update-lead" type="button"
                            class="btn btn-primary">Lưu</button>
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <div class="modal fade" id="updateAccountModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Cập nhật thông tin Khách hàng!</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-warning">Hợp đồng bắt buộc khách hàng có thông tin
                            <b>MÃ SỐ THUẾ</b>! </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Cập nhật CMND:</label>
                            <div class="col-md-8">
                                <input type="text" class="tax-code form-control" id="tax-code">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="save-update-account" type="button"
                            class="btn btn-primary">Lưu</button>
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
                    <div class="modal-body">

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
        <!-- /.modal -->

        <div class="modal fade" id="addServiceModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Thêm nhanh Gian hàng</h4>
                    </div>
                    <div class="modal-body">
                        <form action="https://erp.nhanh.vn/crm/customer/addquick" method="post"
                            id="customerAddquickForm">
                            <div class="form-horizontal">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label col-md-3">Công ty cung cấp:<span
                                                class="color-red">*</span></label>
                                        <div class="col-md-8">
                                            <select class="form-control customer-companyId"
                                                name="type">
                                                <option value="">- Công ty cung cấp gian hàng -
                                                </option>
                                                <option value="1">Nhanh.vn</option>
                                                <option value="2">Công ty cổ phần Vật Giá Việt Nam
                                                </option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label col-md-3">Tên khách hàng:<span
                                                class="color-red">*</span></label>
                                        <div class="col-md-8">

                                            <div class="input-group autocomplete-with-noresult"
                                                data-toggle="tooltip"
                                                title="Nhập vào &#39;số điện thoại&#39;, &#39;email&#39;, &#39;CMND&#39; hoặc &#39;mã số thuế&#39; để lấy thông tin khách hàng trong hệ thống">
                                                <span class="input-group-addon"><i
                                                        class="fa fa-search"></i></span>
                                                <input type="text" id="customer-name"
                                                    class="form-control customer-name">
                                                <div class="empty-message" style="display: none;">No
                                                    result found</div>
                                            </div>
                                            <div class="autocomplete-with-noresult">
                                                <div class="text-muted fontsize-85">Nhập vào 'số
                                                    điện thoại', 'email', 'CMND' hoặc 'mã số thuế'
                                                    để lấy thông tin khách hàng trong hệ thống. Nếu
                                                    lấy thông tin khách hàng từ hợp đồng này, <a
                                                        href="https://erp.nhanh.vn/crm/contract/add#"
                                                        class="quickAddInfor"><b>Nhấn vào
                                                            đây</b></a></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label col-md-3">Số điệnt
                                                thoại:</label>
                                            <div class="col-md-8">
                                                <input type="text" disabled=""
                                                    class="form-control customer-phone">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label col-md-3">Địa chỉ:</label>
                                            <div class="col-md-8">
                                                <input type="text" disabled=""
                                                    class="form-control customer-address">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label col-md-3">Tên Gian
                                                hàng:</label>
                                            <div class="col-md-8">
                                                <input type="text"
                                                    class="form-control customer-servicePrivateName">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label col-md-3">ID Gian hàng:</label>
                                            <div class="col-md-8">
                                                <input type="text"
                                                    class="form-control customer-servicePrivateId">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label col-md-3">Đường dẫn
                                                (Link):</label>
                                            <div class="col-md-8">
                                                <input type="text"
                                                    class="form-control customer-serviceLink">
                                            </div>
                                        </div>

                                    </div>
                                    <input type="hidden" class="form-control customer-leadId">
                                    <input type="hidden" class="form-control customer-accountId">
                                </div>
                                <div class="clearfix"></div>

                            </div>
                        </form>
                        <div class="modal-footer">
                            <button type="button"
                                class="btn btn-primary btnSaveService">Lưu</button>
                            <button type="button" class="btn btn-default"
                                data-dismiss="modal">Đóng</button>
                        </div>
                    </div>
                </div>
            </div>

            <style>
                #customerAddquickForm {
                    position: relative;
                }

                .ui-autocomplete {
                    z-index: 2000;
                }

                .add-service {
                    cursor: pointer;
                }

                .table th {
                    text-align: left;
                }

                .formNb {
                    max-width: 120px;
                    ;
                    text-align: right;
                }

                .formNb.small {
                    max-width: 50px;
                    ;
                }

                .color-red {
                    color: red;
                }

                .error {
                    border-color: red;
                    color: red;
                }

                .warning {
                    border-color: #8a6d3b;
                    color: #8a6d3b;
                }

                .success {
                    border-color: green;
                    color: green;
                }

                .autocomplete-with-noresult {
                    position: relative;
                }

                .autocomplete-with-noresult .empty-message {
                    background: white none repeat scroll 0 0;
                    border: 1px solid #ddd;
                    border-radius: 3px;
                    bottom: -35px;
                    display: none;
                    padding: 7px;
                    position: absolute;
                    text-align: center;
                    width: 100%;
                    z-index: 10;
                    left: 0;
                }

                .table span.discountPercent {
                    line-height: 27px;
                }
            </style>
            <script>
                var MSG_NOPRODUCT = 'Bạn chưa nhập các sản phẩm, dịch vụ trong hợp đồng';
                var MSG_NOCOMMISSTION = 'Bạn chưa nhập người thụ hưởng doanh số';
                var TYPE_RENEW = '2';
            </script>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        var usrCnf = {
            language: 'vi'
        };
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/contract/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/contract/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/contract/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/contract/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/contract/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/contract/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/contract/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/contract/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/contract/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/contract/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/contract/productexpired.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/contract/bootstrap-multiselect.js') }}"></script>

@endsection
    