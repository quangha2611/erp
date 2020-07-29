@extends('Layout.master')

@section('title','ERP-Danh sách khách hàng')

@section('css')
    <link rel="stylesheet" href="{{ asset('asset/css/customer/style.css') }}" type="text/css">
@endsection

@section('content-page')
    
    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/crm/account/index">Danh sách khách hàng</a></li>
        </ul>
        <div id="page-crm-contact">
            <div class="filterContainer">
                <form method="GET" name="crmAccountFilter" class="form-inline" role="form"
                    id="crmAccountFilter"><input type="hidden" name="companyId" id="companyId"
                        class="form-control" value="391">
                    <div class="form-group"><select name="supplyCompanyId" id="supplyCompanyId"
                            class="form-control">
                            <option value="">- Cty cung cấp sp -</option>
                            <option value="1">Nhanh.vn</option>
                            <option value="10">VNP group</option>
                            <option value="2">---Công ty cổ phần Vật Giá Việt Nam</option>
                            <option value="315">------Vật giá - Hà Nội</option>
                            <option value="391">------123job.vn</option>
                            <option value="14">---Easycare.vn</option>
                            <option value="321">---Công ty cổ phần TMDT Bảo Kim</option>
                            <option value="384">---Công ty cổ phần WeHelp</option>
                        </select></div>
                    <div class="form-group"><input type="text" name="id" maxlength="255"
                            placeholder="ID" id="id" class="form-control" value=""></div>
                    <div class="form-group"><input type="text" name="name" maxlength="255"
                            placeholder="Họ tên" id="name" class="form-control" value=""></div>
                    <div class="form-group"><input type="text" name="contractValue" maxlength="255"
                            placeholder="Giá trị" id="contractValue" class="form-control" value="">
                    </div> <input type="hidden" name="contract_type" id="contract_type"
                        class="form-control" value="">
                    <div class="form-group"><input type="text" name="mobile" maxlength="11"
                            placeholder="Mobile" id="mobile" class="form-control" value=""></div>
                    <div class="form-group"><select name="status" id="status" class="form-control">
                            <option value="">- Trạng thái -</option>
                            <option value="-1">Chưa có trạng thái</option>
                            <option value="1">Chưa sử dụng</option>
                            <option value="2">Đang triển khai</option>
                            <option value="3">Cần hỗ trợ, tư vấn</option>
                            <option value="4">Đang sử dụng</option>
                            <option value="5">Ngừng sử dụng</option>
                            <option value="6">Dùng thử</option>
                        </select></div>
                    <div class="form-group"><select name="assignType" id="assignType"
                            class="form-control">
                            <option value="">- phụ trách -</option>
                            <option value="4">Không có người phụ trách</option>
                            <option value="5">Không có nhân viên kỹ thuật</option>
                            <option value="1">Nhân viên kinh doanh</option>
                            <option value="2">Nhân viên chăm sóc</option>
                            <option value="3">Nhân viên hỗ trợ</option>
                        </select></div> <input type="hidden" name="assignedToId" id="assignedToId"
                        class="form-control" value="">
                    <div class="form-group"><input type="text" name="assignedToIdSuggest"
                            class="form-control erp-form-userIdSuggest ui-autocomplete-input"
                            data-lookup="assignedToId" placeholder="Người phụ trách"
                            id="assignedToIdSuggest" value="" autocomplete="off"></div>
                    <div class="form-group"><select name="cityId" id="cityId" class="form-control">
                            <option value="">- Thành phố -</option>
                            <option value="2">Hà Nội</option>
                            <option value="3">Hồ Chí Minh</option>
                            <option value="4">An Giang</option>
                            <option value="5">Bà Rịa - Vũng Tàu</option>
                            <option value="6">Bắc Ninh</option>
                            <option value="7">Bắc Giang</option>
                            <option value="8">Bình Dương</option>
                            <option value="9">Bình Định</option>
                            <option value="10">Bình Phước</option>
                            <option value="11">Bình Thuận</option>
                            <option value="13">Bến Tre</option>
                            <option value="14">Bắc Cạn</option>
                            <option value="15">Cần Thơ</option>
                            <option value="17">Khánh Hòa</option>
                            <option value="19">Thừa Thiên Huế</option>
                            <option value="20">Lào Cai</option>
                            <option value="21">Quảng Ninh</option>
                            <option value="22">Đồng Nai</option>
                            <option value="23">Nam Định</option>
                            <option value="24">Cà Mau</option>
                            <option value="25">Cao Bằng</option>
                            <option value="26">Gia Lai</option>
                            <option value="27">Hà Giang</option>
                            <option value="28">Hà Nam</option>
                            <option value="30">Hà Tĩnh</option>
                            <option value="31">Hải Dương</option>
                            <option value="32">Hải Phòng</option>
                            <option value="33">Hoà Bình</option>
                            <option value="34">Hưng Yên</option>
                            <option value="35">Kiên Giang</option>
                            <option value="36">Kon Tum</option>
                            <option value="37">Lai Châu</option>
                            <option value="38">Lâm Đồng</option>
                            <option value="39">Lạng Sơn</option>
                            <option value="40">Long An</option>
                            <option value="41">Nghệ An</option>
                            <option value="42">Ninh Bình</option>
                            <option value="43">Ninh Thuận</option>
                            <option value="44">Phú Thọ</option>
                            <option value="45">Phú Yên</option>
                            <option value="46">Quảng Bình</option>
                            <option value="47">Quảng Nam</option>
                            <option value="48">Quảng Ngãi</option>
                            <option value="49">Quảng Trị</option>
                            <option value="50">Sóc Trăng</option>
                            <option value="51">Sơn La</option>
                            <option value="52">Tây Ninh</option>
                            <option value="53">Thái Bình</option>
                            <option value="54">Thái Nguyên</option>
                            <option value="55">Thanh Hoá</option>
                            <option value="56">Tiền Giang</option>
                            <option value="57">Trà Vinh</option>
                            <option value="58">Tuyên Quang</option>
                            <option value="59">Vĩnh Long</option>
                            <option value="60">Vĩnh Phúc</option>
                            <option value="61">Yên Bái</option>
                            <option value="62">Đắc Lắc</option>
                            <option value="64">Đồng Tháp</option>
                            <option value="65">Đà Nẵng</option>
                            <option value="66">Buôn Mê Thuột</option>
                            <option value="67">Đắc Nông</option>
                            <option value="68">Hậu Giang</option>
                            <option value="70">Bạc Liêu</option>
                            <option value="71">Điện Biên</option>
                        </select></div>
                    <div class="form-group"><select name="districtId" id="districtId"
                            class="form-control">
                            <option value="">- Quận huyện -</option>
                        </select></div>
                    <div class="form-group"><select name="numberOfEmployees" id="numberOfEmployees"
                            class="form-control">
                            <option value="">- Số nhân viên -</option>
                            <option value="1">Dưới 10</option>
                            <option value="2">10-50</option>
                            <option value="3">50-100</option>
                            <option value="4">100-200</option>
                            <option value="5">200-500</option>
                            <option value="6">Trên 500</option>
                        </select></div>
                    <div class="form-group"><input type="text" name="numberOfBranchs" maxlength="11"
                            placeholder="Số chi nhánh" id="numberOfBranchs" class="form-control"
                            value=""></div>
                    <div class="form-group"><select name="haveContract" id="haveContract"
                            class="form-control">
                            <option value="">- Hợp đồng -</option>
                            <option value="1">Có</option>
                            <option value="2">Không</option>
                        </select></div>
                    <div class="form-group"><select name="paidStatus" id="paidStatus"
                            class="form-control">
                            <option value="">- TT thanh toán -</option>
                            <option value="1">Đã thanh toán</option>
                            <option value="2">Thanh toán 1 phần</option>
                            <option value="3">Chưa thanh toán</option>
                        </select></div>
                    <div class="form-group"><input type="text" name="storeNhanh" maxlength="11"
                            placeholder="Id hoặc tên gian hàng Nhanh" style="min-width: 200px;"
                            id="storeNhanh" class="form-control" value=""></div>
                    <div class="form-group"><select name="hardnhanhStoreId" id="hardnhanhStoreId"
                            class="form-control">
                            <option value="">- Gian hàng trên Nhanh -</option>
                            <option value="1">Có</option>
                            <option value="-1">Không</option>
                        </select></div>
                    <div class="form-group"><input type="text" name="daterangepicker"
                            class="form-control date-range-picker"
                            placeholder="Ngày cập nhật trạng thái" id="daterangepicker" value="">
                    </div>
                    <div class="form-group"><select name="expriedContract" id="expriedContract"
                            class="form-control">
                            <option value="">- Hạn hợp đồng -</option>
                            <option value="1">Đã hết hạn</option>
                            <option value="-1">Chưa hết hạn</option>
                        </select></div>
                    <div class="form-group"><select name="emailStatus" id="emailStatus"
                            class="form-control">
                            <option value="">- Trạng thái Email-</option>
                            <option value="-1">Chưa có email</option>
                            <option value="1">Đã có email</option>
                        </select></div>
                    <div class="form-group"><input type="text" name="applyTransactionDateRange"
                            maxlength="225" placeholder="Ngày duyệt phiếu thu"
                            class="form-control date-range-picker" id="applyTransactionDateRange"
                            value=""></div>
                    <div class="form-group"><input type="text" name="lastCareDaterangepicker"
                            class="form-control date-range-picker"
                            placeholder="Ngày chăm sóc cuối cùng" id="lastCareDaterangepicker"
                            value=""></div>
                    <div class="form-group"><select name="saleStage" id="saleStage"
                            class="form-control">
                            <option value="">- Level Khách hàng -</option>
                            <option value="20">L0 - Cần xử lý</option>
                            <option value="22">L1B - Thông tin sai</option>
                            <option value="23">L2A - Có nhu cầu</option>
                            <option value="24">L2B1 - Không có nhu cầu</option>
                            <option value="34">L2B2 - Đã dùng PM khác</option>
                            <option value="25">L3A - Đã hẹn</option>
                            <option value="26">L4A - Đã gặp</option>
                            <option value="27">L5A1 - Dùng thử</option>
                            <option value="28">L5A2 - Có yêu cầu</option>
                            <option value="29">L6A - Đã ký hợp đồng</option>
                            <option value="30">L6B1 - Từ chối, giá đắt</option>
                            <option value="35">L6B2 - PM không phù hợp</option>
                            <option value="36">L6B3 - Không phản hồi</option>
                            <option value="31">L7A - Đã triển khai</option>
                            <option value="32">L8A - Đã bán chéo</option>
                            <option value="33">L9A - Đã tái ký</option>
                            <option value="37">L9B1 - Ngừng kinh doanh</option>
                            <option value="38">L9B2 - Dùng PM khác</option>
                        </select></div>
                    <div class="form-group"><input name="submit" type="submit"
                            id="btnFilterCrmContact" class="form-control btn btn-primary"
                            value="Lọc"></div>
                </form>
            </div>

            <!-- Show table -->


            <div class="dgContainer widget-content table-responsive">
                <div class="col-md-6">
                    &nbsp;<a id="exportExcel" href="https://erp.nhanh.vn/crm/account/managestatus#"
                        class="btn btn-primary btn-sm"><i class="fa fa-download fa-lg "></i> Xuất
                        Excel</a>&nbsp;<a id="exportAll"
                        href="https://erp.nhanh.vn/crm/account/managestatus#"
                        class="btn btn-primary btn-sm"><i class="fa fa-download fa-lg "></i> Xuất
                        Excel All</a>&nbsp;<a
                        href="https://erp.nhanh.vn/system/tool/updateaccountstatus"
                        class="btn btn-success btn-sm">Cập nhật tự động trạng thái khách hàng</a>
                </div>
                <div style="float:right;" class="col-md-6 paginatorItem">
                    <div class="paginator"><span class="labelPages">1 - 1 / 1</span></div>
                </div>
                <div style="clear: both;"></div>
            </div>
            <table id="productTable" cellspacing="0" cellpadding="0" class="table table-bordered">
                <thead>
                    <tr class="even">
                        <th>ID</th>
                        <th>khách hàng</th>
                        <th style="min-width: 130px">Giá trị hợp đồng</th>
                        <th>Nhân viên kinh doanh</th>
                        <th>Nhân viên kỹ thuật</th>
                        <th style="max-width: 75px">Hạn sử dụng lâu nhất</th>
                        <th>Chưa sử dụng</th>
                        <th>Đang triển khai</th>
                        <th>Cần hỗ trợ, tư vấn</th>
                        <th>Đang sử dụng</th>
                        <th>Ngừng sử dụng</th>
                        <th>Dùng thử</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>21810</td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=21810"><span
                                    style="color:green !important;"><i class="fa fa-user"></i> CÔNG
                                    TY TNHH AUCO - </span></a>
                            <span data-id="21810" data-toggle="tooltip"
                                data-title="Cập nhật doanh nghiệp trên Nhanh" style="cursor:pointer"
                                class="updateNhanhStoreId icon fa fa-refresh text-success"
                                data-original-title="" title=""></span> <br><span
                                class="label label-info">Dùng thử</span>
                            <div>
                                <p style="padding-top: 3px;">
                                    <i style="margin-right: 5px;" class="fa fa-play"></i></p>
                                <p>
                                    ID: <span style="color: red"></span>
                                </p>
                            </div>
                        </td>

                        <td style="text-align: right; min-width: 130px">
                            <div class="col-value">
                                <div class="valueLabel" style="display: inline;">Tổng:</div>
                                <div class="value text-primary" style="display: inline;">1.595.000
                                </div>
                            </div>
                            <div class="col-value">
                                <div class="valueLabel" style="display: inline;">Đã trả:</div>
                                <div class="value text-success" style="display: inline;">1.595.000
                                </div>
                            </div>
                        </td>

                        <td>
                            Đỗ Thị Thanh Nhàn </td>

                        <td>
                            Nguyễn Văn Hưng<p><a data-id="405449"
                                    href="https://erp.nhanh.vn/crm/account/managestatus#"
                                    class="fa fa-plus-circle icon text-danger assign-support"></a>
                            </p>
                        </td>
                        <td style="max-width: 75px">
                            08/08/2020 </td>
                        <td style="width:20px;">
                            <input class="status" data-accountid="21810" data-id="1" type="radio"
                                name="status_21810">
                        </td>
                        <td style="width:20px;">
                            <input class="status" data-accountid="21810" data-id="2" type="radio"
                                name="status_21810">
                        </td>
                        <td style="width:20px;">
                            <input class="status" data-accountid="21810" data-id="3" type="radio"
                                name="status_21810">
                        </td>
                        <td style="width:20px;">
                            <input class="status" data-accountid="21810" data-id="4" type="radio"
                                name="status_21810">
                        </td>
                        <td style="width:20px;">
                            <input class="status" data-accountid="21810" data-id="5" type="radio"
                                name="status_21810">
                        </td>
                        <td style="width:20px;">
                            <input class="status" checked="checked" data-accountid="21810"
                                data-id="6" type="radio" name="status_21810">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="assignModal" talertmodalabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span><span class="sr-only">Close</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Danh sách bàn giao</h4>
                    </div>
                    <div class="modal-body" data-backdrop="false">
                        <div class="formAssignt">

                            <div class="col-md-12">
                                <fieldset>
                                    <legend>Hỗ trợ kỹ thuật</legend>
                                    <div class="bootstrap-tagsinput" id="supportAssign">
                                        <input size="60" type="text"
                                            class="userAssignSuggest ui-autocomplete-input"
                                            placeholder="" autocomplete="off">
                                    </div>

                                </fieldset>
                            </div>
                            <div style="clear: both;"></div>
                        </div>

                        <ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content"
                            id="ui-id-2" tabindex="0" style="display: none;"></ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary saveMultiple"
                            style="display: none;" data-loading-text="loading...">Lưu</button>
                        <button type="button" class="btn btn-primary save"
                            data-loading-text="loading...">Lưu</button>
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="updateStatusModal" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span><span class="sr-only">Close</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Cập nhật nhanh trạng thái</h4>
                    </div>
                    <div class="modal-body" data-backdrop="false">
                        <div class="alert alert-warning">
                            <b>Lưu ý</b> : Danh sách ID khách hàng được ngăn cách nhau bằng
                            dấu ' , '.<br> <b>Ví Dụ </b>: 1234, 2345, 4567....
                        </div>
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label class="form-label col-md-3">Trạng thái:</label>
                                <div class="col-md-8">
                                    <select class="form-control" id="status-update">
                                        <option value="1">Chưa sử dụng</option>
                                        <option value="2">Đang triển khai</option>
                                        <option value="3">Cần hỗ trợ, tư vấn</option>
                                        <option value="4">Đang sử dụng</option>
                                        <option value="5">Ngừng sử dụng</option>
                                        <option value="6">Dùng thử</option>
                                    </select> </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label col-md-3">ID khách hàng:</label>
                                <div class="col-md-8">
                                    <textarea style="min-height: 100px;" class="form-control"
                                        id="accountIds"></textarea>
                                </div>

                            </div>

                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success save-status">Cập nhật</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="closeModel" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">×</button>
                        <h4 class="modal-title">Thông báo</h4>
                    </div>
                    <div class="modal-body"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default reload"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="updateNhanhStoreIdModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Update doanh nghiệp trên nhanh</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-horizontal inputArea">
                            <input type="hidden" class="form-control leadId" value=""> <input
                                type="hidden" class="form-control accountId" value="">
                            <div class="form-group">
                                <label class="col-md-4 control-label required">NhanhStoreId</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control nhanhStoreId" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label
                                    class="col-md-4 control-label required">NhanhStoreName</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control nhanhStoreName" value="">
                                </div>
                            </div>
                        </div>
                        <div class="form-horizontal loadingArea"
                            style="text-align: center; font-size: 3em; display: none;">
                            <i class="fa fa-refresh"></i>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning save"
                            data-saving-text="Saving...">Lưu</button>
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Hủy</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="errorModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Lỗi</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger alert-dismissable">

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .userStatus {
                color: green;
            }

            .green {
                color: green;
            }

            #assignModal .bootstrap-tagsinput {
                width: 100%;
            }

            .modal .loading {
                font-size: 2em;
                display: block;
                margin: auto;
                width: 30px;
                height: 30px;
                text-align: center;
                padding: 0;
            }

            .bootstrap-tagsinput .label {
                display: inline-block;
            }

            i.description {
                font-size: 0.8em;
            }

            .dropdown-menu>li>a {
                text-align: left;
            }

            .item-block {
                width: 196px;
                padding: 0;
                border: none;
            }

            .item-icon {
                width: 16px;
                display: inline-block;
                vertical-align: top;
            }

            .item-infor {
                width: 180px;
                display: inline-block;
            }

            .line-break {
                width: 100%;
                border-bottom: 1px dashed gray;
                margin: auto;
                margin-top: 3px;
                margin-bottom: 3px;
            }

            .td-history {
                margin: 0;
                padding: 0;
                min-width: 440px;
            }

            .col-assignedTo>div {
                min-width: 110px;
                margin: 5px 0;
            }

            .td-history li {
                margin: 5px;
                border-bottom: 1px dashed gray;
                padding: 0;
                list-style: none;
            }

            .td-history li.last {
                border-bottom: none;
            }

            .td-history .head-activity {
                font-size: 1.1em;
                font-weight: bold;
            }

            .td-history .infor-activity {
                padding-left: 20px;
            }

            .colControls .dropdown-menu {
                top: 0;
                left: 20px;
            }
        </style>
        <script>
            var noLeadSelectdMsg = 'Bạn phải chọn thông tin để bàn giao';
            var leadUserTypeSale = '1';
            var leadUserTypeTeleSale = '2';
            var leadUserTypeSupport = '3';
            var discardLeadMsg = 'Bạn không muốn chăm sóc khách hàng này nữa?';
        </script>
    </div>

@endsection

@section('js')

    <script type="text/javascript">
        var usrCnf = {
            language: 'vi'
        };
    </script>
    <script type="text/javascript" src="{{ asset('/asset/js/customer/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/customer/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/customer/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/customer/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/customer/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/customer/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/customer/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/customer/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/customer/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('/asset/js/customer/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/customer/saved_resource(2)') }}"></script>

@endsection