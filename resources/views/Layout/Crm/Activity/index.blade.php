@extends('Layout.master')

@section('title','ERP-Lich su cham soc')

@section('css')
	<link rel="stylesheet" href="{{ asset('asset/css/crm/activity/style.css') }}" type="text/css">
@endsection


@section('content-page')
    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/crm/lead/index">Danh sách thông tin</a></li>
            <li class="active">Lịch sử chăm sóc</li>
        </ul>
        <div id="page-crm-contact">
            <div class="filterContainer">
                <form method="GET" name="crmContactFilter" class="form-inline" role="form"
                    id="crmContactFilter"><input type="hidden" name="companyId" id="companyId"
                        class="form-control" value="391">
                    <div class="form-group"><select name="departmentId" id="departmentId"
                            class="form-control">
                            <option value="">- Phòng ban -</option>
                            <option value="1437">123Job</option>
                            <option value="1475">Kinh doanh 123Job</option>
                        </select></div>
                    <div class="form-group"><input type="text" name="id" placeholder="ID"
                            maxlength="15" id="id" class="form-control" value=""></div>
                    <div class="form-group"><input type="text" name="leadId"
                            placeholder="ID thông tin" maxlength="15" id="leadId"
                            class="form-control" value=""></div>
                    <div class="form-group"><input type="text" name="accountId"
                            placeholder="ID khách hàng" maxlength="15" id="accountId"
                            class="form-control" value=""></div>
                    <div class="form-group"><input type="text" name="accountInfor"
                            placeholder="Thông tin khách hàng"
                            title="Nhập vào tên, email, sdt hoặc website của khách hàng"
                            maxlength="15" id="accountInfor" class="form-control" value=""></div>
                    <input type="hidden" name="createdById" id="createdById" class="form-control"
                        value="">
                    <div class="form-group"><input type="text" name="createdByName"
                            placeholder="Nhân viên" maxlength="225" id="createdByName"
                            class="form-control ui-autocomplete-input" value="" autocomplete="off">
                    </div>
                    <div class="form-group"><input type="text" name="daterangepicker"
                            class="form-control date-range-picker" placeholder="Thời gian"
                            id="daterangepicker" value=""></div>
                    <div class="form-group"><input type="text" name="content" placeholder="Ghi chú"
                            maxlength="15" id="content" class="form-control" value=""></div>
                    <div class="form-group"><select name="type" id="type" class="form-control">
                            <option value="">- Hành động -</option>
                            <option value="1">Gặp mặt</option>
                            <option value="2">Gọi điện</option>
                            <option value="3">Công việc</option>
                            <option value="4">Triển khai</option>
                            <option value="5">Đặt lịch</option>
                            <option value="6">Yêu cầu gọi điện</option>
                            <option value="7">Bàn giao</option>
                            <option value="8">Nhận chăm sóc</option>
                            <option value="9">Tạo hợp đồng</option>
                            <option value="10">Tạo thanh toán</option>
                            <option value="11">Giải phóng</option>
                            <option value="12">Bỏ quyền chăm sóc</option>
                            <option value="13">Hệ thống tự giải phóng</option>
                            <option value="14">Tạo thành khách hàng</option>
                            <option value="33">Gửi Email</option>
                            <option value="34">Gửi tin nhắn SMS</option>
                            <option value="31">Đến gặp</option>
                            <option value="32">Gọi điện</option>
                            <option value="35">Thu tiền</option>
                            <option value="36">Hoàn duyệt phiếu thu</option>
                            <option value="99">Thao tác Khác</option>
                            <option value="37">Sửa gian hàng </option>
                            <option value="15">Thêm hợp đồng</option>
                            <option value="16">Thêm phiếu thu</option>
                            <option value="17">Chuyển thành cơ hội</option>
                            <option value="19">Sửa thông tin</option>
                            <option value="20">Đăng kí dùng thử</option>
                            <option value="21">Khách hàng yêu cầu tính năng</option>
                            <option value="22">Sửa khách hàng</option>
                            <option value="23">Sửa hợp đồng</option>
                            <option value="24">Sửa thanh toán</option>
                            <option value="25">Duyệt hợp đồng</option>
                            <option value="26">Hủy hợp đồng</option>
                            <option value="30">Hoàn duyệt hợp đồng</option>
                            <option value="27">Duyệt phiếu thu</option>
                            <option value="28">Hủy phiếu thu</option>
                            <option value="29">Thêm yêu cầu thực hiện dịch vụ</option>
                            <option value="38">Thêm nhận xét</option>
                            <option value="39">Khảo sát trước gặp</option>
                            <option value="40">Khảo sát sau gặp</option>
                            <option value="41">Ý kiến khách hàng</option>
                            <option value="42">Khảo sát khách hàng</option>
                            <option value="43">Cập nhật Level khách hàng</option>
                        </select></div>
                    <div class="form-group"><select name="result" id="result" class="form-control">
                            <option value="">- Kết quả -</option>
                            <option value="1">Khách từ chối</option>
                            <option value="2">Khách suy nghĩ - hẹn gặp sau</option>
                            <option value="3">Khách suy nghĩ - hẹn gọi lại sau</option>
                            <option value="7">Khách có yêu cầu riêng cần trao đổi thêm</option>
                            <option value="6">Thành công - chốt hợp đồng</option>
                            <option value="200">Khác</option>
                        </select></div>
                    <div class="form-group"><select name="reasonId" id="reasonId"
                            class="form-control">
                            <option value="">- Lý do từ chối -</option>
                            <option value="12">Khách chưa có nhu cầu</option>
                            <option value="11">Gọi nhầm số</option>
                            <option value="10">Bị tác động sau khi quyết định - đắn đo về giá
                            </option>
                            <option value="9">Có IT khó chốt</option>
                            <option value="8">Kho giao diện xấu</option>
                            <option value="7">Cần module Kế toán</option>
                            <option value="6">Không hỗ trợ marketing, SEO - Nhân viên thiếu kiến
                                thức marketing</option>
                            <option value="5">Không tin là bán online được</option>
                            <option value="4">Bảo mật ko tin tưởng</option>
                            <option value="3">Chờ bản Offline</option>
                            <option value="2">Khách muốn mua đứt (không muốn trả phí hàng tháng)
                            </option>
                            <option value="1">Giá đắt</option>
                        </select></div>
                    <div class="form-group"><input name="submit" type="submit"
                            id="btnFilterCrmContact" class="form-control btn btn-primary"
                            value="Lọc"></div>
                </form>
            </div>
        </div>
        <div class="widget widget-table">
            <div class="widget-header">
                <h3><i class="fa fa-table"></i> Lịch sử chăm sóc</h3>
            </div>
            <div class="dgContainer widget-content table-responsive">
                <div style="display: none; width: 1534px;" class="stickyHeader">
                    <table class="table table-bordered" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr class="even">
                                <th style="width: 233px;">Khách hàng</th>
                                <th style="width: 231px;">Hành động</th>
                                <th style="width: 515px;">Kết quả</th>
                                <th style="width: 380px;">Nội dung</th>
                                <th style="width: 145px;">Ngày tạo</th>
                                <th style="width: 29px;"><i class="fa fa-edit icon"></i></th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-6 dgButtons"></div>
                    <div class="col-md-6 paginatorItem">
                        <div class="paginator"><span class="labelPages">1 - 28 / 28</span></div>
                    </div>
                    <div style="clear: both;"></div><br>
                </div>
                <table id="dgActivity" class="table table-bordered">
                    <thead>
                        <tr class="even">
                            <th>Khách hàng</th>
                            <th>Hành động</th>
                            <th>Kết quả</th>
                            <th>Nội dung</th>
                            <th>Ngày tạo</th>
                            <th><i class="fa fa-edit icon"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor">CÔNG TY TNHH AUCO</div>
                                </div>
                            </td>
                            <td>
                                <div class="colType">
                                    <div class="actType btn-default"><i class="fa "></i> Thêm nhận
                                        xét</div>
                                    <div class="actStatus btn-success" title="Thành công"><i
                                            class="fa fa-check"></i></div>
                                </div>
                            </td>
                            <td>
                                <div class="colResult"></div>
                            </td>
                            <td>
                                <div class="colResult">
                                    <div class="actResult"><b>Tiêu đề:
                                        </b><label>---</label><br><b>Kết quả:
                                        </b><label>---</label><br><b>Lịch:
                                        </b><label>---</label><br>
                                        <div class="line-break"></div><b>Ghi chú:
                                        </b><label>Tốt<b>Người bị tác động: </b>Nguyễn Văn
                                            Hưng<br></label>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div>07:43 PM - 20/07/2020<div class="line-break"></div>
                                    <div class="text-success" title="hungnv5">Nguyễn Văn Hưng</div>
                                </div>
                            </td>
                            <td class="colControls"><a class="fa fa-edit icon"
                                    href="https://erp.nhanh.vn/crm/activity/edit?id=3055288"></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor">CÔNG TY TNHH AUCO</div>
                                </div>
                            </td>
                            <td>
                                <div class="colType">
                                    <div class="actType btn-default"><i class="fa "></i> Thêm nhận
                                        xét</div>
                                    <div class="actStatus btn-success" title="Thành công"><i
                                            class="fa fa-check"></i></div>
                                </div>
                            </td>
                            <td>
                                <div class="colResult"></div>
                            </td>
                            <td>
                                <div class="colResult">
                                    <div class="actResult"><b>Tiêu đề:
                                        </b><label>---</label><br><b>Kết quả:
                                        </b><label>---</label><br><b>Lịch:
                                        </b><label>---</label><br>
                                        <div class="line-break"></div><b>Ghi chú:
                                        </b><label>Good<b>Người bị tác động: </b>Nguyễn Văn
                                            Hưng<br></label>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div>07:43 PM - 20/07/2020<div class="line-break"></div>
                                    <div class="text-success" title="hungnv5">Nguyễn Văn Hưng</div>
                                </div>
                            </td>
                            <td class="colControls"><a class="fa fa-edit icon"
                                    href="https://erp.nhanh.vn/crm/activity/edit?id=3055287"></a>
                            </td>
                        </tr>
                        <tr class="">
                            <td>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor">CÔNG TY TNHH AUCO</div>
                                </div>
                            </td>
                            <td>
                                <div class="colType">
                                    <div class="actType btn-default"><i class="fa "></i> Duyệt phiếu
                                        thu</div>
                                    <div class="actStatus btn-success" title="Thành công"><i
                                            class="fa fa-check"></i></div>
                                </div>
                            </td>
                            <td>
                                <div class="colResult"></div>
                            </td>
                            <td>
                                <div class="colResult">
                                    <div class="actResult"><b>Tiêu đề: </b><label>Duyệt phiếu thu
                                            76350</label><br><b>Kết quả:
                                        </b><label>---</label><br><b>Lịch:
                                        </b><label>---</label><br>
                                        <div class="line-break"></div><b>Ghi chú:
                                        </b><label>---</label><br>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div>03:17 PM - 15/07/2020<div class="line-break"></div>
                                    <div class="text-success" title="dobichthuy">Đỗ Thị Bích Thủy
                                    </div>
                                </div>
                            </td>
                            <td class="colControls"><a class="fa fa-edit icon"
                                    href="https://erp.nhanh.vn/crm/activity/edit?id=3050019"></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor">CÔNG TY TNHH AUCO</div>
                                </div>
                            </td>
                            <td>
                                <div class="colType">
                                    <div class="actType btn-default"><i class="fa "></i> Tạo thành
                                        khách hàng</div>
                                    <div class="actStatus btn-success" title="Thành công"><i
                                            class="fa fa-check"></i></div>
                                </div>
                            </td>
                            <td>
                                <div class="colResult"></div>
                            </td>
                            <td>
                                <div class="colResult">
                                    <div class="actResult"><b>Tiêu đề: </b><label>Tạo thành khách
                                            hàng khi phiếu thu 90215 được duyệt</label><br><b>Kết
                                            quả: </b><label>---</label><br><b>Lịch:
                                        </b><label>---</label><br>
                                        <div class="line-break"></div><b>Ghi chú: </b><a
                                            class="showContent" data-id="3050018">Xem chi
                                            tiết</a><br>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div>03:17 PM - 15/07/2020<div class="line-break"></div>
                                    <div class="text-success" title="dobichthuy">Đỗ Thị Bích Thủy
                                    </div>
                                </div>
                            </td>
                            <td class="colControls"><a class="fa fa-edit icon"
                                    href="https://erp.nhanh.vn/crm/activity/edit?id=3050018"></a>
                            </td>
                        </tr>
                        <tr class="">
                            <td>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor">CÔNG TY TNHH AUCO</div>
                                </div>
                            </td>
                            <td>
                                <div class="colType">
                                    <div class="actType btn-default"><i class="fa "></i> Sửa thanh
                                        toán</div>
                                    <div class="actStatus btn-success" title="Thành công"><i
                                            class="fa fa-check"></i></div>
                                </div>
                            </td>
                            <td>
                                <div class="colResult"></div>
                            </td>
                            <td>
                                <div class="colResult">
                                    <div class="actResult"><b>Tiêu đề: </b><label>Sửa phiếu thu
                                            76350</label><br><b>Kết quả:
                                        </b><label>---</label><br><b>Lịch:
                                        </b><label>---</label><br>
                                        <div class="line-break"></div><b>Ghi chú: </b><a
                                            class="showContent" data-id="3049748">Xem chi
                                            tiết</a><br>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div>01:57 PM - 15/07/2020<div class="line-break"></div>
                                    <div class="text-success" title="hungnv5">Nguyễn Văn Hưng</div>
                                </div>
                            </td>
                            <td class="colControls"><a class="fa fa-edit icon"
                                    href="https://erp.nhanh.vn/crm/activity/edit?id=3049748"></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor">CÔNG TY TNHH AUCO</div>
                                </div>
                            </td>
                            <td>
                                <div class="colType">
                                    <div class="actType btn-default"><i class="fa fa-money"></i> Tạo
                                        thanh toán</div>
                                    <div class="actStatus btn-success" title="Thành công"><i
                                            class="fa fa-check"></i></div>
                                </div>
                            </td>
                            <td>
                                <div class="colResult"></div>
                            </td>
                            <td>
                                <div class="colResult">
                                    <div class="actResult"><b>Tiêu đề: </b><label>Thêm phiếu thu
                                            76350</label><br><b>Kết quả:
                                        </b><label>---</label><br><b>Lịch:
                                        </b><label>---</label><br>
                                        <div class="line-break"></div><b>Ghi chú: </b><a
                                            class="showContent" data-id="3049679">Xem chi
                                            tiết</a><br>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div>01:19 PM - 15/07/2020<div class="line-break"></div>
                                    <div class="text-success" title="hungnv5">Nguyễn Văn Hưng</div>
                                </div>
                            </td>
                            <td class="colControls"><a class="fa fa-edit icon"
                                    href="https://erp.nhanh.vn/crm/activity/edit?id=3049679"></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor">CÔNG TY TNHH AUCO</div>
                                </div>
                            </td>
                            <td>
                                <div class="colType">
                                    <div class="actType btn-default"><i class="fa "></i> Duyệt hợp
                                        đồng</div>
                                    <div class="actStatus btn-success" title="Thành công"><i
                                            class="fa fa-check"></i></div>
                                </div>
                            </td>
                            <td>
                                <div class="colResult"></div>
                            </td>
                            <td>
                                <div class="colResult">
                                    <div class="actResult"><b>Tiêu đề: </b><label>Duyệt hợp đồng
                                            62733</label><br><b>Kết quả:
                                        </b><label>---</label><br><b>Lịch:
                                        </b><label>---</label><br>
                                        <div class="line-break"></div><b>Ghi chú:
                                        </b><label>---</label><br>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div>12:07 PM - 15/07/2020<div class="line-break"></div>
                                    <div class="text-success" title="thaoltp5">Lê Thị Phương Thảo
                                    </div>
                                </div>
                            </td>
                            <td class="colControls"><a class="fa fa-edit icon"
                                    href="https://erp.nhanh.vn/crm/activity/edit?id=3049669"></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor">CÔNG TY TNHH AUCO</div>
                                </div>
                            </td>
                            <td>
                                <div class="colType">
                                    <div class="actType btn-default"><i class="fa "></i> Sửa hợp
                                        đồng</div>
                                    <div class="actStatus btn-success" title="Thành công"><i
                                            class="fa fa-check"></i></div>
                                </div>
                            </td>
                            <td>
                                <div class="colResult"></div>
                            </td>
                            <td>
                                <div class="colResult">
                                    <div class="actResult"><b>Tiêu đề: </b><label>Sửa hợp đồng
                                            62733</label><br><b>Kết quả:
                                        </b><label>---</label><br><b>Lịch:
                                        </b><label>---</label><br>
                                        <div class="line-break"></div><b>Ghi chú: </b><a
                                            class="showContent" data-id="3049632">Xem chi
                                            tiết</a><br>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div>11:50 AM - 15/07/2020<div class="line-break"></div>
                                    <div class="text-success" title="nhandtt">Đỗ Thị Thanh Nhàn
                                    </div>
                                </div>
                            </td>
                            <td class="colControls"><a class="fa fa-edit icon"
                                    href="https://erp.nhanh.vn/crm/activity/edit?id=3049632"></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor">CÔNG TY TNHH AUCO</div>
                                </div>
                            </td>
                            <td>
                                <div class="colType">
                                    <div class="actType btn-default"><i class="fa "></i> Sửa hợp
                                        đồng</div>
                                    <div class="actStatus btn-success" title="Thành công"><i
                                            class="fa fa-check"></i></div>
                                </div>
                            </td>
                            <td>
                                <div class="colResult"></div>
                            </td>
                            <td>
                                <div class="colResult">
                                    <div class="actResult"><b>Tiêu đề: </b><label>Sửa hợp đồng
                                            62733</label><br><b>Kết quả:
                                        </b><label>---</label><br><b>Lịch:
                                        </b><label>---</label><br>
                                        <div class="line-break"></div><b>Ghi chú: </b><a
                                            class="showContent" data-id="3049468">Xem chi
                                            tiết</a><br>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div>11:09 AM - 15/07/2020<div class="line-break"></div>
                                    <div class="text-success" title="nhandtt">Đỗ Thị Thanh Nhàn
                                    </div>
                                </div>
                            </td>
                            <td class="colControls"><a class="fa fa-edit icon"
                                    href="https://erp.nhanh.vn/crm/activity/edit?id=3049468"></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor">CÔNG TY TNHH AUCO</div>
                                </div>
                            </td>
                            <td>
                                <div class="colType">
                                    <div class="actType btn-default"><i class="fa "></i> Sửa hợp
                                        đồng</div>
                                    <div class="actStatus btn-success" title="Thành công"><i
                                            class="fa fa-check"></i></div>
                                </div>
                            </td>
                            <td>
                                <div class="colResult"></div>
                            </td>
                            <td>
                                <div class="colResult">
                                    <div class="actResult"><b>Tiêu đề: </b><label>Sửa hợp đồng
                                            62733</label><br><b>Kết quả:
                                        </b><label>---</label><br><b>Lịch:
                                        </b><label>---</label><br>
                                        <div class="line-break"></div><b>Ghi chú: </b><a
                                            class="showContent" data-id="3049445">Xem chi
                                            tiết</a><br>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div>11:05 AM - 15/07/2020<div class="line-break"></div>
                                    <div class="text-success" title="nhandtt">Đỗ Thị Thanh Nhàn
                                    </div>
                                </div>
                            </td>
                            <td class="colControls"><a class="fa fa-edit icon"
                                    href="https://erp.nhanh.vn/crm/activity/edit?id=3049445"></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor">Nguyễn Thị Hoa</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-phone"></i></div>
                                    <div class="item-infor">0987352141</div>
                                </div>
                            </td>
                            <td>
                                <div class="colType">
                                    <div class="actType btn-default"><i class="fa fa-chain"></i> Bàn
                                        giao</div>
                                    <div class="actStatus btn-success" title="Thành công"><i
                                            class="fa fa-check"></i></div>
                                </div>
                            </td>
                            <td>
                                <div class="colResult"></div>
                            </td>
                            <td>
                                <div class="colResult">
                                    <div class="actResult"><b>Tiêu đề:
                                        </b><label>---</label><br><b>Kết quả:
                                        </b><label>---</label><br><b>Lịch:
                                        </b><label>---</label><br>
                                        <div class="line-break"></div><b>Ghi chú:
                                        </b><label>---</label><br><b>Người bị tác động: </b>Nguyễn
                                        Văn Hưng<br>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div>11:31 AM - 14/07/2020<div class="line-break"></div>
                                    <div class="text-success" title="hungnv5">Nguyễn Văn Hưng</div>
                                </div>
                            </td>
                            <td class="colControls"><a class="fa fa-edit icon"
                                    href="https://erp.nhanh.vn/crm/activity/edit?id=3047927"></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor">Nguyễn Thị Hoa</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-phone"></i></div>
                                    <div class="item-infor">0987352141</div>
                                </div>
                            </td>
                            <td>
                                <div class="colType">
                                    <div class="actType btn-default"><i class="fa "></i> Cập nhật
                                        Level khách hàng</div>
                                    <div class="actStatus btn-success" title="Thành công"><i
                                            class="fa fa-check"></i></div>
                                </div>
                            </td>
                            <td>
                                <div class="colResult"></div>
                            </td>
                            <td>
                                <div class="colResult">
                                    <div class="actResult"><b>Tiêu đề:
                                        </b><label>---</label><br><b>Kết quả:
                                        </b><label>---</label><br><b>Lịch:
                                        </b><label>---</label><br>
                                        <div class="line-break"></div><b>Ghi chú: </b><label>Cập
                                            nhật trạng thái <b>L1B - Thông tin sai</b></label>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div>11:31 AM - 14/07/2020<div class="line-break"></div>
                                    <div class="text-success" title="hungnv5">Nguyễn Văn Hưng</div>
                                </div>
                            </td>
                            <td class="colControls"><a class="fa fa-edit icon"
                                    href="https://erp.nhanh.vn/crm/activity/edit?id=3047926"></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor">Nguyễn Thị Hoa</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-phone"></i></div>
                                    <div class="item-infor">0987352141</div>
                                </div>
                            </td>
                            <td>
                                <div class="colType">
                                    <div class="actType btn-default"><i class="fa fa-chain"></i> Bàn
                                        giao</div>
                                    <div class="actStatus btn-success" title="Thành công"><i
                                            class="fa fa-check"></i></div>
                                </div>
                            </td>
                            <td>
                                <div class="colResult"></div>
                            </td>
                            <td>
                                <div class="colResult">
                                    <div class="actResult"><b>Tiêu đề: </b><label>Nhận chăm sóc khi
                                            tạo thông tin</label><br><b>Kết quả:
                                        </b><label>---</label><br><b>Lịch:
                                        </b><label>---</label><br>
                                        <div class="line-break"></div><b>Ghi chú:
                                        </b><label>---</label><br><b>Người bị tác động: </b>Đỗ Thị
                                        Thanh Nhàn<br>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div>10:19 AM - 14/07/2020<div class="line-break"></div>
                                    <div class="text-success" title="nhandtt">Đỗ Thị Thanh Nhàn
                                    </div>
                                </div>
                            </td>
                            <td class="colControls"><a class="fa fa-edit icon"
                                    href="https://erp.nhanh.vn/crm/activity/edit?id=3047707"></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor">Ứng Đình Hướng</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-globe"></i></div>
                                    <div class="item-infor">123job.vn</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-phone"></i></div>
                                    <div class="item-infor">0333383633</div>
                                </div>
                            </td>
                            <td>
                                <div class="colType">
                                    <div class="actType btn-default"><i
                                            class="fa fa-phone-square"></i> Yêu cầu gọi điện</div>
                                    <div class="actStatus btn-success" title="Thành công"><i
                                            class="fa fa-check"></i></div>
                                </div>
                            </td>
                            <td>
                                <div class="colResult">
                                    <div class="line-break"></div>
                                    <div class="actResult"><b class="text-primary"><i
                                                class="fa fa-calendar"></i> Tạo lịch: </b>10:10 AM -
                                        14/07 <i class="fa fa-arrow-right"></i> 11:59 PM - 14/07 -
                                        Yêu cầu gọi cho khách<div class="actResult"><b
                                                class="text-primary"><i
                                                    class="fa fa-github-alt"></i> Thành viên:
                                            </b><span class="text-success " title="nhandtt">Đỗ Thị
                                                Thanh Nhàn</span></div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="colResult">
                                    <div class="actResult"><b>Tiêu đề: </b><label>Yêu cầu gọi cho
                                            khách</label><br><b>Kết quả: </b><label>---</label><br>
                                        <div class="actResult"><b>Lịch: </b><label>10:10 AM -
                                                14/07</label> <i class="fa fa-arrow-right"></i>
                                            11:59 PM - 14/07<div class="actResult"><b> Giao cho:
                                                </b><label><span class="text-success "
                                                        title="nhandtt">Đỗ Thị Thanh
                                                        Nhàn</span></label></div>
                                            <div class="line-break"></div><b>Ghi chú:
                                            </b><label>---</label><br>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div>10:10 AM - 14/07/2020<div class="line-break"></div>
                                    <div class="text-success" title="hungnv5">Nguyễn Văn Hưng</div>
                                </div>
                            </td>
                            <td class="colControls"><a class="fa fa-edit icon"
                                    href="https://erp.nhanh.vn/crm/activity/edit?id=3047677"></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor">Ứng Đình Hướng</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-globe"></i></div>
                                    <div class="item-infor">123job.vn</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-phone"></i></div>
                                    <div class="item-infor">0333383633</div>
                                </div>
                            </td>
                            <td>
                                <div class="colType">
                                    <div class="actType btn-default"><i
                                            class="fa fa-phone-square"></i> Yêu cầu gọi điện</div>
                                    <div class="actStatus btn-success" title="Thành công"><i
                                            class="fa fa-check"></i></div>
                                </div>
                            </td>
                            <td>
                                <div class="colResult">
                                    <div class="line-break"></div>
                                    <div class="actResult"><b class="text-primary"><i
                                                class="fa fa-calendar"></i> Tạo lịch: </b>10:32 PM -
                                        13/07 <i class="fa fa-arrow-right"></i> 11:59 PM - 14/07 -
                                        Yêu cầu gọi cho thông tin vừa nhập<div class="actResult"><b
                                                class="text-primary"><i
                                                    class="fa fa-github-alt"></i> Thành viên:
                                            </b><span class="text-success " title="huongud">Ứng Đình
                                                Hướng</span></div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="colResult">
                                    <div class="actResult"><b>Tiêu đề: </b><label>Yêu cầu gọi cho
                                            thông tin vừa nhập</label><br><b>Kết quả:
                                        </b><label>---</label><br>
                                        <div class="actResult"><b>Lịch: </b><label>10:32 PM -
                                                13/07</label> <i class="fa fa-arrow-right"></i>
                                            11:59 PM - 14/07<div class="actResult"><b> Giao cho:
                                                </b><label><span class="text-success "
                                                        title="huongud">Ứng Đình
                                                        Hướng</span></label></div>
                                            <div class="line-break"></div><b>Ghi chú:
                                            </b><label>---</label><br>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div>10:32 PM - 13/07/2020<div class="line-break"></div>
                                    <div class="text-success" title="hungnv5">Nguyễn Văn Hưng</div>
                                </div>
                            </td>
                            <td class="colControls"><a class="fa fa-edit icon"
                                    href="https://erp.nhanh.vn/crm/activity/edit?id=3047437"></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor">Ứng Đình Hướng</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-globe"></i></div>
                                    <div class="item-infor">123job.vn</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-phone"></i></div>
                                    <div class="item-infor">0333383633</div>
                                </div>
                            </td>
                            <td>
                                <div class="colType">
                                    <div class="actType btn-default"><i class="fa fa-chain"></i> Bàn
                                        giao</div>
                                    <div class="actStatus btn-success" title="Thành công"><i
                                            class="fa fa-check"></i></div>
                                </div>
                            </td>
                            <td>
                                <div class="colResult"></div>
                            </td>
                            <td>
                                <div class="colResult">
                                    <div class="actResult"><b>Tiêu đề: </b><label>Nhận chăm sóc khi
                                            tạo thông tin</label><br><b>Kết quả:
                                        </b><label>---</label><br><b>Lịch:
                                        </b><label>---</label><br>
                                        <div class="line-break"></div><b>Ghi chú:
                                        </b><label>---</label><br><b>Người bị tác động: </b>Nguyễn
                                        Văn Hưng<br>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div>10:32 PM - 13/07/2020<div class="line-break"></div>
                                    <div class="text-success" title="hungnv5">Nguyễn Văn Hưng</div>
                                </div>
                            </td>
                            <td class="colControls"><a class="fa fa-edit icon"
                                    href="https://erp.nhanh.vn/crm/activity/edit?id=3047436"></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor">Nguyễn Văn Hưng</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-globe"></i></div>
                                    <div class="item-infor">123job.vn</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-phone"></i></div>
                                    <div class="item-infor">0333383632</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-envelope-o"></i></div>
                                    <div class="item-infor">hungnv@vatgia.com</div>
                                </div>
                            </td>
                            <td>
                                <div class="colType">
                                    <div class="actType btn-default"><i
                                            class="fa fa-phone-square"></i> Yêu cầu gọi điện</div>
                                    <div class="actStatus btn-success" title="Thành công"><i
                                            class="fa fa-check"></i></div>
                                </div>
                            </td>
                            <td>
                                <div class="colResult">
                                    <div class="line-break"></div>
                                    <div class="actResult"><b class="text-primary"><i
                                                class="fa fa-calendar"></i> Tạo lịch: </b>02:16 PM -
                                        13/07 <i class="fa fa-arrow-right"></i> 11:59 PM - 14/07 -
                                        Yêu cầu gọi cho khách<div class="actResult"><b
                                                class="text-primary"><i
                                                    class="fa fa-github-alt"></i> Thành viên:
                                            </b><span class="text-success " title="nhandtt">Đỗ Thị
                                                Thanh Nhàn</span></div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="colResult">
                                    <div class="actResult"><b>Tiêu đề: </b><label>Yêu cầu gọi cho
                                            khách</label><br><b>Kết quả: </b><label>---</label><br>
                                        <div class="actResult"><b>Lịch: </b><label>02:16 PM -
                                                13/07</label> <i class="fa fa-arrow-right"></i>
                                            11:59 PM - 14/07<div class="actResult"><b> Giao cho:
                                                </b><label><span class="text-success "
                                                        title="nhandtt">Đỗ Thị Thanh
                                                        Nhàn</span></label></div>
                                            <div class="line-break"></div><b>Ghi chú:
                                            </b><label>---</label><br>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div>02:16 PM - 13/07/2020<div class="line-break"></div>
                                    <div class="text-success" title="hungnv5">Nguyễn Văn Hưng</div>
                                </div>
                            </td>
                            <td class="colControls"><a class="fa fa-edit icon"
                                    href="https://erp.nhanh.vn/crm/activity/edit?id=3046554"></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor">Nguyễn Văn Hưng</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-globe"></i></div>
                                    <div class="item-infor">123job.vn</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-phone"></i></div>
                                    <div class="item-infor">0333383630</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-envelope-o"></i></div>
                                    <div class="item-infor">hungitc.hubt@gmail.com</div>
                                </div>
                            </td>
                            <td>
                                <div class="colType">
                                    <div class="actType btn-default"><i class="fa fa-calendar"></i>
                                        Đặt lịch</div>
                                    <div class="actStatus btn-success" title="Thành công"><i
                                            class="fa fa-check"></i></div>
                                </div>
                            </td>
                            <td>
                                <div class="colResult">
                                    <div class="line-break"></div>
                                    <div class="actResult"><b class="text-primary"><i
                                                class="fa fa-calendar"></i> Tạo lịch: </b>04:00 PM -
                                        07/07 <i class="fa fa-arrow-right"></i> 05:00 PM - 07/07 -
                                        Tư vấn dịch vụ<div class="actResult"><b
                                                class="text-primary"><i
                                                    class="fa fa-github-alt"></i> Thành viên:
                                            </b><span class="text-success " title="hungnv5">Nguyễn
                                                Văn Hưng</span></div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="colResult">
                                    <div class="actResult"><b>Tiêu đề:
                                        </b><label>---</label><br><b>Kết quả:
                                        </b><label>---</label><br>
                                        <div class="actResult"><b>Lịch: </b><label>04:00 PM -
                                                07/07</label> <i class="fa fa-arrow-right"></i>
                                            05:00 PM - 07/07<div class="actResult"><b> Giao cho:
                                                </b><label><span class="text-success "
                                                        title="hungnv5">Nguyễn Văn
                                                        Hưng</span></label></div>
                                            <div class="line-break"></div><b>Ghi chú:
                                            </b><label>---</label><br>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div>02:10 PM - 13/07/2020<div class="line-break"></div>
                                    <div class="text-success" title="hungnv5">Nguyễn Văn Hưng</div>
                                </div>
                            </td>
                            <td class="colControls"><a class="fa fa-edit icon"
                                    href="https://erp.nhanh.vn/crm/activity/edit?id=3046522"></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor">Nguyễn Văn Hưng</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-globe"></i></div>
                                    <div class="item-infor">123job.vn</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-phone"></i></div>
                                    <div class="item-infor">0333383632</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-envelope-o"></i></div>
                                    <div class="item-infor">hungnv@vatgia.com</div>
                                </div>
                            </td>
                            <td>
                                <div class="colType">
                                    <div class="actType btn-default"><i class="fa "></i> Khảo sát
                                        trước gặp</div>
                                    <div class="actStatus btn-success" title="Thành công"><i
                                            class="fa fa-check"></i></div>
                                </div>
                            </td>
                            <td>
                                <div class="colResult">
                                    <div style="margin-top: 5px;"></div>
                                    <div class="actResult text-primary"><b>Thành công - chốt hợp
                                            đồng</b></div>
                                </div>
                            </td>
                            <td>
                                <div class="colResult">
                                    <div class="actResult"><b>Tiêu đề:
                                        </b><label>---</label><br><b>Kết quả: </b><label class="">
                                            Thành công - chốt hợp đồng</label><b>Lịch:
                                        </b><label>---</label><br>
                                        <div class="line-break"></div><b>Ghi chú: </b><label>Khảo
                                            sát trước gặp</label>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div>07:40 AM - 11/07/2020<div class="line-break"></div>
                                    <div class="text-success" title="hungnv5">Nguyễn Văn Hưng</div>
                                </div>
                            </td>
                            <td class="colControls"><a class="fa fa-edit icon"
                                    href="https://erp.nhanh.vn/crm/activity/edit?id=3045043"></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor">Nguyễn Văn Hưng</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-globe"></i></div>
                                    <div class="item-infor">123job.vn</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-phone"></i></div>
                                    <div class="item-infor">0333383632</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-envelope-o"></i></div>
                                    <div class="item-infor">hungnv@vatgia.com</div>
                                </div>
                            </td>
                            <td>
                                <div class="colType">
                                    <div class="actType btn-default"><i class="fa "></i> Khảo sát
                                        sau gặp</div>
                                    <div class="actStatus btn-success" title="Thành công"><i
                                            class="fa fa-check"></i></div>
                                </div>
                            </td>
                            <td>
                                <div class="colResult">
                                    <div style="margin-top: 5px;"></div>
                                    <div class="actResult text-primary"><b>Thành công - chốt hợp
                                            đồng</b></div>
                                </div>
                            </td>
                            <td>
                                <div class="colResult">
                                    <div class="actResult"><b>Tiêu đề:
                                        </b><label>---</label><br><b>Kết quả: </b><label class="">
                                            Thành công - chốt hợp đồng</label><b>Lịch:
                                        </b><label>---</label><br>
                                        <div class="line-break"></div><b>Ghi chú: </b><label>Khảo
                                            sát sau gặp</label>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div>09:50 PM - 10/07/2020<div class="line-break"></div>
                                    <div class="text-success" title="hungnv5">Nguyễn Văn Hưng</div>
                                </div>
                            </td>
                            <td class="colControls"><a class="fa fa-edit icon"
                                    href="https://erp.nhanh.vn/crm/activity/edit?id=3044970"></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor">Nguyễn Văn Hưng</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-globe"></i></div>
                                    <div class="item-infor">123job.vn</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-phone"></i></div>
                                    <div class="item-infor">0333383632</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-envelope-o"></i></div>
                                    <div class="item-infor">hungnv@vatgia.com</div>
                                </div>
                            </td>
                            <td>
                                <div class="colType">
                                    <div class="actType btn-default"><i
                                            class="fa fa-phone-square"></i> Yêu cầu gọi điện</div>
                                    <div class="actStatus btn-success" title="Thành công"><i
                                            class="fa fa-check"></i></div>
                                </div>
                            </td>
                            <td>
                                <div class="colResult">
                                    <div class="line-break"></div>
                                    <div class="actResult"><b class="text-primary"><i
                                                class="fa fa-calendar"></i> Tạo lịch: </b>09:32 PM -
                                        10/07 <i class="fa fa-arrow-right"></i> 11:59 PM - 10/07 -
                                        Yêu cầu gọi cho thông tin vừa nhập</div>
                                </div>
                            </td>
                            <td>
                                <div class="colResult">
                                    <div class="actResult"><b>Tiêu đề: </b><label>Yêu cầu gọi cho
                                            thông tin vừa nhập</label><br><b>Kết quả:
                                        </b><label>---</label><br>
                                        <div class="actResult"><b>Lịch: </b><label>09:32 PM -
                                                10/07</label> <i class="fa fa-arrow-right"></i>
                                            11:59 PM - 10/07<div class="line-break"></div><b>Ghi
                                                chú: </b><label>---</label><br></div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div>09:32 PM - 10/07/2020<div class="line-break"></div>
                                    <div class="text-success" title="hungnv5">Nguyễn Văn Hưng</div>
                                </div>
                            </td>
                            <td class="colControls"><a class="fa fa-edit icon"
                                    href="https://erp.nhanh.vn/crm/activity/edit?id=3044960"></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor">Nguyễn Văn Hưng</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-globe"></i></div>
                                    <div class="item-infor">123job.vn</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-phone"></i></div>
                                    <div class="item-infor">0333383632</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-envelope-o"></i></div>
                                    <div class="item-infor">hungnv@vatgia.com</div>
                                </div>
                            </td>
                            <td>
                                <div class="colType">
                                    <div class="actType btn-default"><i class="fa fa-chain"></i> Bàn
                                        giao</div>
                                    <div class="actStatus btn-success" title="Thành công"><i
                                            class="fa fa-check"></i></div>
                                </div>
                            </td>
                            <td>
                                <div class="colResult"></div>
                            </td>
                            <td>
                                <div class="colResult">
                                    <div class="actResult"><b>Tiêu đề: </b><label>Nhận chăm sóc khi
                                            tạo thông tin</label><br><b>Kết quả:
                                        </b><label>---</label><br><b>Lịch:
                                        </b><label>---</label><br>
                                        <div class="line-break"></div><b>Ghi chú:
                                        </b><label>---</label><br><b>Người bị tác động: </b>Nguyễn
                                        Văn Hưng<br>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div>09:32 PM - 10/07/2020<div class="line-break"></div>
                                    <div class="text-success" title="hungnv5">Nguyễn Văn Hưng</div>
                                </div>
                            </td>
                            <td class="colControls"><a class="fa fa-edit icon"
                                    href="https://erp.nhanh.vn/crm/activity/edit?id=3044959"></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor">Nguyễn Văn Hưng</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-globe"></i></div>
                                    <div class="item-infor">123job.vn</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-phone"></i></div>
                                    <div class="item-infor">0333383630</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-envelope-o"></i></div>
                                    <div class="item-infor">hungitc.hubt@gmail.com</div>
                                </div>
                            </td>
                            <td>
                                <div class="colType">
                                    <div class="actType btn-default"><i class="fa fa-chain"></i> Bàn
                                        giao</div>
                                    <div class="actStatus btn-success" title="Thành công"><i
                                            class="fa fa-check"></i></div>
                                </div>
                            </td>
                            <td>
                                <div class="colResult"></div>
                            </td>
                            <td>
                                <div class="colResult">
                                    <div class="actResult"><b>Tiêu đề: </b><label>Nhận chăm sóc khi
                                            tạo thông tin</label><br><b>Kết quả:
                                        </b><label>---</label><br><b>Lịch:
                                        </b><label>---</label><br>
                                        <div class="line-break"></div><b>Ghi chú:
                                        </b><label>---</label><br><b>Người bị tác động: </b>Nguyễn
                                        Văn Hưng<br>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div>09:16 PM - 10/07/2020<div class="line-break"></div>
                                    <div class="text-success" title="hungnv5">Nguyễn Văn Hưng</div>
                                </div>
                            </td>
                            <td class="colControls"><a class="fa fa-edit icon"
                                    href="https://erp.nhanh.vn/crm/activity/edit?id=3044958"></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor">CÔNG TY TNHH AUCO</div>
                                </div>
                            </td>
                            <td>
                                <div class="colType">
                                    <div class="actType btn-default"><i class="fa "></i> Sửa hợp
                                        đồng</div>
                                    <div class="actStatus btn-success" title="Thành công"><i
                                            class="fa fa-check"></i></div>
                                </div>
                            </td>
                            <td>
                                <div class="colResult"></div>
                            </td>
                            <td>
                                <div class="colResult">
                                    <div class="actResult"><b>Tiêu đề: </b><label>Sửa hợp đồng
                                            62733</label><br><b>Kết quả:
                                        </b><label>---</label><br><b>Lịch:
                                        </b><label>---</label><br>
                                        <div class="line-break"></div><b>Ghi chú: </b><a
                                            class="showContent" data-id="3044253">Xem chi
                                            tiết</a><br>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div>01:54 PM - 10/07/2020<div class="line-break"></div>
                                    <div class="text-success" title="nhandtt">Đỗ Thị Thanh Nhàn
                                    </div>
                                </div>
                            </td>
                            <td class="colControls"><a class="fa fa-edit icon"
                                    href="https://erp.nhanh.vn/crm/activity/edit?id=3044253"></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor">CÔNG TY TNHH AUCO</div>
                                </div>
                            </td>
                            <td>
                                <div class="colType">
                                    <div class="actType btn-default"><i class="fa "></i> Sửa hợp
                                        đồng</div>
                                    <div class="actStatus btn-success" title="Thành công"><i
                                            class="fa fa-check"></i></div>
                                </div>
                            </td>
                            <td>
                                <div class="colResult"></div>
                            </td>
                            <td>
                                <div class="colResult">
                                    <div class="actResult"><b>Tiêu đề: </b><label>Sửa hợp đồng
                                            62733</label><br><b>Kết quả:
                                        </b><label>---</label><br><b>Lịch:
                                        </b><label>---</label><br>
                                        <div class="line-break"></div><b>Ghi chú: </b><a
                                            class="showContent" data-id="3044251">Xem chi
                                            tiết</a><br>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div>01:54 PM - 10/07/2020<div class="line-break"></div>
                                    <div class="text-success" title="nhandtt">Đỗ Thị Thanh Nhàn
                                    </div>
                                </div>
                            </td>
                            <td class="colControls"><a class="fa fa-edit icon"
                                    href="https://erp.nhanh.vn/crm/activity/edit?id=3044251"></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor">CÔNG TY TNHH AUCO</div>
                                </div>
                            </td>
                            <td>
                                <div class="colType">
                                    <div class="actType btn-default"><i class="fa fa-book"></i> Tạo
                                        hợp đồng</div>
                                    <div class="actStatus btn-success" title="Thành công"><i
                                            class="fa fa-check"></i></div>
                                </div>
                            </td>
                            <td>
                                <div class="colResult"></div>
                            </td>
                            <td>
                                <div class="colResult">
                                    <div class="actResult"><b>Tiêu đề: </b><label>Tạo mới hợp đồng
                                            62733</label><br><b>Kết quả:
                                        </b><label>---</label><br><b>Lịch:
                                        </b><label>---</label><br>
                                        <div class="line-break"></div><b>Ghi chú: </b><a
                                            class="showContent" data-id="3043408">Xem chi
                                            tiết</a><br>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div>09:25 AM - 10/07/2020<div class="line-break"></div>
                                    <div class="text-success" title="nhandtt">Đỗ Thị Thanh Nhàn
                                    </div>
                                </div>
                            </td>
                            <td class="colControls"><a class="fa fa-edit icon"
                                    href="https://erp.nhanh.vn/crm/activity/edit?id=3043408"></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor">CÔNG TY TNHH AUCO</div>
                                </div>
                            </td>
                            <td>
                                <div class="colType">
                                    <div class="actType btn-default"><i class="fa fa-chain"></i> Bàn
                                        giao</div>
                                    <div class="actStatus btn-success" title="Thành công"><i
                                            class="fa fa-check"></i></div>
                                </div>
                            </td>
                            <td>
                                <div class="colResult"></div>
                            </td>
                            <td>
                                <div class="colResult">
                                    <div class="actResult"><b>Tiêu đề: </b><label>Nhận chăm sóc khi
                                            tạo hợp đồng 62733</label><br><b>Kết quả:
                                        </b><label>---</label><br><b>Lịch:
                                        </b><label>---</label><br>
                                        <div class="line-break"></div><b>Ghi chú:
                                        </b><label>---</label><br><b>Người bị tác động: </b>Nguyễn
                                        Văn Hưng<br>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div>09:25 AM - 10/07/2020<div class="line-break"></div>
                                    <div class="text-success" title="nhandtt">Đỗ Thị Thanh Nhàn
                                    </div>
                                </div>
                            </td>
                            <td class="colControls"><a class="fa fa-edit icon"
                                    href="https://erp.nhanh.vn/crm/activity/edit?id=3043407"></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor">CÔNG TY TNHH AUCO</div>
                                </div>
                            </td>
                            <td>
                                <div class="colType">
                                    <div class="actType btn-default"><i class="fa fa-chain"></i> Bàn
                                        giao</div>
                                    <div class="actStatus btn-success" title="Thành công"><i
                                            class="fa fa-check"></i></div>
                                </div>
                            </td>
                            <td>
                                <div class="colResult"></div>
                            </td>
                            <td>
                                <div class="colResult">
                                    <div class="actResult"><b>Tiêu đề: </b><label>Nhận chăm sóc khi
                                            tạo thông tin</label><br><b>Kết quả:
                                        </b><label>---</label><br><b>Lịch:
                                        </b><label>---</label><br>
                                        <div class="line-break"></div><b>Ghi chú:
                                        </b><label>---</label><br><b>Người bị tác động: </b>Đỗ Thị
                                        Thanh Nhàn<br>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div>10:46 AM - 09/07/2020<div class="line-break"></div>
                                    <div class="text-success" title="nhandtt">Đỗ Thị Thanh Nhàn
                                    </div>
                                </div>
                            </td>
                            <td class="colControls"><a class="fa fa-edit icon"
                                    href="https://erp.nhanh.vn/crm/activity/edit?id=3042012"></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-md-6 dgButtons"></div>
                    <div class="col-md-6 paginatorItem">
                        <div class="paginator"><span class="labelPages">1 - 28 / 28</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="errorDialog" style="display: none;" title="Lỗi"></div>
    <div class="modal fade" id="showContentModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default"
                        data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <script>
        var lbAccept = 'Đồng ý';
        var lbCancel = 'Hủy';
        var lbClose = 'Đóng';
    </script>
    <style>
        .td-note {
            max-width: 170px;
        }

        .item-block {
            width: 220px;
            padding: 0;
            border: none;
        }

        .item-icon {
            width: 16px;
            display: inline-block;
            vertical-align: top;
        }

        .item-infor {
            width: 200px;
            display: inline-block;
        }

        .line-break {
            width: 100%;
            border-bottom: 1px dashed #eee;
            margin: auto;
            margin-top: 3px;
            margin-bottom: 3px;
        }

        .colType {
            min-width: 170px;
        }

        .colResult {
            min-width: 250px;
        }

        .actType {
            min-width: 120px;
            display: inline-block;
            padding: 5px 10px;
        }

        .actType i {
            font-size: 1.2em;
            margin-right: 5px;
        }

        .actStatus {
            display: inline-block;
            text-align: center;
            padding: 5px 10px;
        }
    </style>
    </div>
    </div>
    </div>
    </div>
    <div id="announcementModel" class="modal fade">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
    <h4 class="modal-title">Thông báo</h4>
    </div>
    <div class="modal-body">
    <div>
    </div>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-default close-announcementModel"
        data-dismiss="modal">Đóng</button>
    </div>
    </div>
    </div>
    </div>
    <div class="nn-dialog" id="nn-dialog">
    <div class="nn-body">
    <div class="nn-container-link">
    <div class="nn-icon">
    <i class="fa fa-bell"></i>
    </div>
    <div class="nn-content">
    <div class="nn-content-title"></div>
    <div class="nn-content-body"></div>
    <div class="nn-content-description text-muted">

    </div>
    </div>
    </div>
    <div class="nn-control">
    <a class="fa fa-times text-muted nn-dislog-close"></a>
    </div>
    </div>
    </div>
    <div class="daterangepicker dropdown-menu opensright">
    <div class="calendar first right">
    <div class="calendar-date">
    <table class="table-condensed">
    <thead>
        <tr>
            <th></th>
            <th colspan="5" class="month"><select class="monthselect">
                    <option value="6" selected="selected">Jul</option>
                    <option value="7">Aug</option>
                    <option value="8">Sep</option>
                    <option value="9">Oct</option>
                    <option value="10">Nov</option>
                    <option value="11">Dec</option>
                </select><select class="yearselect">
                    <option value="2020" selected="selected">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                </select></th>
            <th class="next available"><i
                    class="fa fa-arrow-right icon icon-arrow-right glyphicon glyphicon-arrow-right"></i>
            </th>
        </tr>
        <tr>
            <th>Su</th>
            <th>Mo</th>
            <th>Tu</th>
            <th>We</th>
            <th>Th</th>
            <th>Fr</th>
            <th>Sa</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="off disabled" data-title="r0c0">28</td>
            <td class="off disabled" data-title="r0c1">29</td>
            <td class="off disabled" data-title="r0c2">30</td>
            <td class="off disabled" data-title="r0c3">1</td>
            <td class="off disabled" data-title="r0c4">2</td>
            <td class="off disabled" data-title="r0c5">3</td>
            <td class="off disabled" data-title="r0c6">4</td>
        </tr>
        <tr>
            <td class="off disabled" data-title="r1c0">5</td>
            <td class="off disabled" data-title="r1c1">6</td>
            <td class="off disabled" data-title="r1c2">7</td>
            <td class="off disabled" data-title="r1c3">8</td>
            <td class="off disabled" data-title="r1c4">9</td>
            <td class="off disabled" data-title="r1c5">10</td>
            <td class="off disabled" data-title="r1c6">11</td>
        </tr>
        <tr>
            <td class="off disabled" data-title="r2c0">12</td>
            <td class="off disabled" data-title="r2c1">13</td>
            <td class="off disabled" data-title="r2c2">14</td>
            <td class="off disabled" data-title="r2c3">15</td>
            <td class="off disabled" data-title="r2c4">16</td>
            <td class="off disabled" data-title="r2c5">17</td>
            <td class="off disabled" data-title="r2c6">18</td>
        </tr>
        <tr>
            <td class="off disabled" data-title="r3c0">19</td>
            <td class="off disabled" data-title="r3c1">20</td>
            <td class="off disabled" data-title="r3c2">21</td>
            <td class="off disabled" data-title="r3c3">22</td>
            <td class="off disabled" data-title="r3c4">23</td>
            <td class="available active start-date end-date" data-title="r3c5">24</td>
            <td class="available" data-title="r3c6">25</td>
        </tr>
        <tr>
            <td class="available" data-title="r4c0">26</td>
            <td class="available" data-title="r4c1">27</td>
            <td class="available" data-title="r4c2">28</td>
            <td class="available" data-title="r4c3">29</td>
            <td class="available" data-title="r4c4">30</td>
            <td class="available" data-title="r4c5">31</td>
            <td class="available off" data-title="r4c6">1</td>
        </tr>
        <tr>
            <td class="available off" data-title="r5c0">2</td>
            <td class="available off" data-title="r5c1">3</td>
            <td class="available off" data-title="r5c2">4</td>
            <td class="available off" data-title="r5c3">5</td>
            <td class="available off" data-title="r5c4">6</td>
            <td class="available off" data-title="r5c5">7</td>
            <td class="available off" data-title="r5c6">8</td>
        </tr>
    </tbody>
    </table>
    </div>
    </div>
    <div class="calendar second left">
    <div class="calendar-date">
    <table class="table-condensed">
    <thead>
        <tr>
            <th class="prev available"><i
                    class="fa fa-arrow-left icon icon-arrow-left glyphicon glyphicon-arrow-left"></i>
            </th>
            <th colspan="5" class="month"><select class="monthselect">
                    <option value="0">Jan</option>
                    <option value="1">Feb</option>
                    <option value="2">Mar</option>
                    <option value="3">Apr</option>
                    <option value="4">May</option>
                    <option value="5">Jun</option>
                    <option value="6" selected="selected">Jul</option>
                    <option value="7">Aug</option>
                    <option value="8">Sep</option>
                    <option value="9">Oct</option>
                    <option value="10">Nov</option>
                    <option value="11">Dec</option>
                </select><select class="yearselect">
                    <option value="1970">1970</option>
                    <option value="1971">1971</option>
                    <option value="1972">1972</option>
                    <option value="1973">1973</option>
                    <option value="1974">1974</option>
                    <option value="1975">1975</option>
                    <option value="1976">1976</option>
                    <option value="1977">1977</option>
                    <option value="1978">1978</option>
                    <option value="1979">1979</option>
                    <option value="1980">1980</option>
                    <option value="1981">1981</option>
                    <option value="1982">1982</option>
                    <option value="1983">1983</option>
                    <option value="1984">1984</option>
                    <option value="1985">1985</option>
                    <option value="1986">1986</option>
                    <option value="1987">1987</option>
                    <option value="1988">1988</option>
                    <option value="1989">1989</option>
                    <option value="1990">1990</option>
                    <option value="1991">1991</option>
                    <option value="1992">1992</option>
                    <option value="1993">1993</option>
                    <option value="1994">1994</option>
                    <option value="1995">1995</option>
                    <option value="1996">1996</option>
                    <option value="1997">1997</option>
                    <option value="1998">1998</option>
                    <option value="1999">1999</option>
                    <option value="2000">2000</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>
                    <option value="2003">2003</option>
                    <option value="2004">2004</option>
                    <option value="2005">2005</option>
                    <option value="2006">2006</option>
                    <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2009">2009</option>
                    <option value="2010">2010</option>
                    <option value="2011">2011</option>
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020" selected="selected">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                </select></th>
            <th class="next available"><i
                    class="fa fa-arrow-right icon icon-arrow-right glyphicon glyphicon-arrow-right"></i>
            </th>
        </tr>
        <tr>
            <th>Su</th>
            <th>Mo</th>
            <th>Tu</th>
            <th>We</th>
            <th>Th</th>
            <th>Fr</th>
            <th>Sa</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="available off" data-title="r0c0">28</td>
            <td class="available off" data-title="r0c1">29</td>
            <td class="available off" data-title="r0c2">30</td>
            <td class="available" data-title="r0c3">1</td>
            <td class="available" data-title="r0c4">2</td>
            <td class="available" data-title="r0c5">3</td>
            <td class="available" data-title="r0c6">4</td>
        </tr>
        <tr>
            <td class="available" data-title="r1c0">5</td>
            <td class="available" data-title="r1c1">6</td>
            <td class="available" data-title="r1c2">7</td>
            <td class="available" data-title="r1c3">8</td>
            <td class="available" data-title="r1c4">9</td>
            <td class="available" data-title="r1c5">10</td>
            <td class="available" data-title="r1c6">11</td>
        </tr>
        <tr>
            <td class="available" data-title="r2c0">12</td>
            <td class="available" data-title="r2c1">13</td>
            <td class="available" data-title="r2c2">14</td>
            <td class="available" data-title="r2c3">15</td>
            <td class="available" data-title="r2c4">16</td>
            <td class="available" data-title="r2c5">17</td>
            <td class="available" data-title="r2c6">18</td>
        </tr>
        <tr>
            <td class="available" data-title="r3c0">19</td>
            <td class="available" data-title="r3c1">20</td>
            <td class="available" data-title="r3c2">21</td>
            <td class="available" data-title="r3c3">22</td>
            <td class="available" data-title="r3c4">23</td>
            <td class="available active start-date end-date" data-title="r3c5">24</td>
            <td class="available" data-title="r3c6">25</td>
        </tr>
        <tr>
            <td class="available" data-title="r4c0">26</td>
            <td class="available" data-title="r4c1">27</td>
            <td class="available" data-title="r4c2">28</td>
            <td class="available" data-title="r4c3">29</td>
            <td class="available" data-title="r4c4">30</td>
            <td class="available" data-title="r4c5">31</td>
            <td class="available off" data-title="r4c6">1</td>
        </tr>
        <tr>
            <td class="available off" data-title="r5c0">2</td>
            <td class="available off" data-title="r5c1">3</td>
            <td class="available off" data-title="r5c2">4</td>
            <td class="available off" data-title="r5c3">5</td>
            <td class="available off" data-title="r5c4">6</td>
            <td class="available off" data-title="r5c5">7</td>
            <td class="available off" data-title="r5c6">8</td>
        </tr>
    </tbody>
    </table>
    </div>
    </div>
    <div class="ranges">
    <ul>
    <li class="active">Today</li>
    <li>Yesterday</li>
    <li>Last 7 Days</li>
    <li>Last 30 Days</li>
    <li>This Month</li>
    <li>Last Month</li>
    <li>Custom Range</li>
    </ul>
    <div class="range_inputs">
    <div class="daterangepicker_start_input"><label for="daterangepicker_start">From</label><input
        class="input-mini" type="text" name="daterangepicker_start" value=""></div>
    <div class="daterangepicker_end_input"><label for="daterangepicker_end">To</label><input
        class="input-mini" type="text" name="daterangepicker_end" value=""></div><button
    class="applyBtn btn btn-small btn-sm btn-success">Apply</button>&nbsp;<button
    class="cancelBtn btn btn-small btn-sm btn-default">Cancel</button>
    </div>
    </div>
    </div>
    </div>
    <footer class="footer">
    <div>
    <div class="col-md-6">
    <a style="color: white;"
    href="https://erp.nhanh.vn/work/task/report?token=08d270e03d114b1d6b9a38943bda79b2">
    <i class="fa fa-bug fa-lg"></i> Báo lỗi | <i class="fa fa-lightbulb-o fa-lg"></i> Cải tiến hệ thống
    ERP</a>
    </div>
    <div class="col-md-6"> © Nhanh.vn</div>
    <div style="clear: both;"></div>
    </div>


    <div class="colorpicker dropdown-menu colorpicker-hidden">
    <div class="colorpicker-saturation" style="background-color: rgb(0, 41, 255);">
    <i style="top: 19.2157px; left: 59.7087px;"><b></b></i>
    </div>
    <div class="colorpicker-hue">
    <i style="top: 36.0434px;"></i>
    </div>
    <div class="colorpicker-alpha" style="background-color: rgb(83, 103, 206);">
    <i style="top: 0px;"></i>
    </div>
    <div class="colorpicker-color" style="background-color: rgb(83, 103, 206);">
    <div style="background-color: rgb(83, 103, 206);"></div>
    </div>
    </div>
    <div class="colorpicker dropdown-menu colorpicker-hidden colorpicker-with-alpha">
    <div class="colorpicker-saturation" style="background-color: rgb(203, 255, 0);">
    <i style="top: 11.7647px; left: 94.6667px;"><b></b></i>
    </div>
    <div class="colorpicker-hue">
    <i style="top: 79.9687px;"></i>
    </div>
    <div class="colorpicker-alpha" style="background-color: rgb(181, 225, 12);">
    <i style="top: 51px;"></i>
    </div>
    <div class="colorpicker-color" style="background-color: rgba(181, 225, 12, 0.49);">
    <div style="background-color: rgba(181, 225, 12, 0.49);"></div>
    </div>
    </div>
    <div class="colorpicker dropdown-menu colorpicker-hidden" style="top: 2163.92px; left: 1093.85px;">
    <div class="colorpicker-saturation" style="background-color: rgb(0, 229, 255);">
    <i style="top: 33.3333px; left: 100px;"><b></b></i>
    </div>
    <div class="colorpicker-hue">
    <i style="top: 48.3333px;"></i>
    </div>
    <div class="colorpicker-alpha" style="background-color: rgb(0, 152, 170);">
    <i style="top: 0px;"></i>
    </div>
    <div class="colorpicker-color" style="background-color: rgb(0, 152, 170);">
    <div style="background-color: rgb(0, 152, 170);"></div>
    </div>
    </div>
    <span class="simplecolorpicker picker fontawesome" style=""><span tabindex="0" role="button" data-selected=""
    data-color="#ac725e" style="background-color: #ac725e;" title="#ac725e" class="color"></span><span
    tabindex="0" role="button" data-color="#d06b64" style="background-color: #d06b64;" title="#d06b64"
    class="color"></span><span tabindex="0" role="button" data-color="#f83a22"
    style="background-color: #f83a22;" title="#f83a22" class="color"></span><span tabindex="0" role="button"
    data-color="#fa573c" style="background-color: #fa573c;" title="#fa573c" class="color"></span><span
    tabindex="0" role="button" data-color="#ff7537" style="background-color: #ff7537;" title="#ff7537"
    class="color"></span><span tabindex="0" role="button" data-color="#ffad46"
    style="background-color: #ffad46;" title="#ffad46" class="color"></span><span tabindex="0" role="button"
    data-color="#42d692" style="background-color: #42d692;" title="#42d692" class="color"></span><span
    tabindex="0" role="button" data-color="#16a765" style="background-color: #16a765;" title="#16a765"
    class="color"></span><span tabindex="0" role="button" data-color="#7bd148"
    style="background-color: #7bd148;" title="#7bd148" class="color"></span><span tabindex="0" role="button"
    data-color="#b3dc6c" style="background-color: #b3dc6c;" title="#b3dc6c" class="color"></span><span
    tabindex="0" role="button" data-color="#fbe983" style="background-color: #fbe983;" title="#fbe983"
    class="color"></span><span tabindex="0" role="button" data-color="#fad165"
    style="background-color: #fad165;" title="#fad165" class="color"></span><span tabindex="0" role="button"
    data-color="#92e1c0" style="background-color: #92e1c0;" title="#92e1c0" class="color"></span><span
    tabindex="0" role="button" data-color="#9fe1e7" style="background-color: #9fe1e7;" title="#9fe1e7"
    class="color"></span><span tabindex="0" role="button" data-color="#9fc6e7"
    style="background-color: #9fc6e7;" title="#9fc6e7" class="color"></span><span tabindex="0" role="button"
    data-color="#4986e7" style="background-color: #4986e7;" title="#4986e7" class="color"></span><span
    tabindex="0" role="button" data-color="#9a9cff" style="background-color: #9a9cff;" title="#9a9cff"
    class="color"></span><span tabindex="0" role="button" data-color="#b99aff"
    style="background-color: #b99aff;" title="#b99aff" class="color"></span><span tabindex="0" role="button"
    data-color="#c2c2c2" style="background-color: #c2c2c2;" title="#c2c2c2" class="color"></span><span
    tabindex="0" role="button" data-color="#cabdbf" style="background-color: #cabdbf;" title="#cabdbf"
    class="color"></span><span tabindex="0" role="button" data-color="#cca6ac"
    style="background-color: #cca6ac;" title="#cca6ac" class="color"></span><span tabindex="0" role="button"
    data-color="#f691b2" style="background-color: #f691b2;" title="#f691b2" class="color"></span></span>
    <div class="daterangepicker dropdown-menu opensright" style="top: 1683.78px; left: 814.583px; right: auto;">
    <div class="calendar right" style="display: block;">
    <div class="calendar-date">
    <table class="table-condensed">
    <thead>
        <tr>
            <th></th>
            <th style="width: auto" colspan="5">Aug 2014</th>
            <th class="next available"><i
                    class="icon-arrow-right glyphicon glyphicon-arrow-right"></i></th>
        </tr>
        <tr>
            <th>Su</th>
            <th>Mo</th>
            <th>Tu</th>
            <th>We</th>
            <th>Th</th>
            <th>Fr</th>
            <th>Sa</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td data-title="r0c0" class="off disabled">27</td>
            <td data-title="r0c1" class="off disabled">28</td>
            <td data-title="r0c2" class="off disabled">29</td>
            <td data-title="r0c3" class="off disabled">30</td>
            <td data-title="r0c4" class="off disabled">31</td>
            <td data-title="r0c5" class="off disabled">1</td>
            <td data-title="r0c6" class="off disabled">2</td>
        </tr>
        <tr>
            <td data-title="r1c0" class="off disabled">3</td>
            <td data-title="r1c1" class="off disabled">4</td>
            <td data-title="r1c2" class="available active start-date end-date">5</td>
            <td data-title="r1c3" class="available">6</td>
            <td data-title="r1c4" class="available">7</td>
            <td data-title="r1c5" class="available">8</td>
            <td data-title="r1c6" class="available">9</td>
        </tr>
        <tr>
            <td data-title="r2c0" class="available">10</td>
            <td data-title="r2c1" class="available">11</td>
            <td data-title="r2c2" class="available">12</td>
            <td data-title="r2c3" class="available">13</td>
            <td data-title="r2c4" class="available">14</td>
            <td data-title="r2c5" class="available">15</td>
            <td data-title="r2c6" class="available">16</td>
        </tr>
        <tr>
            <td data-title="r3c0" class="available">17</td>
            <td data-title="r3c1" class="available">18</td>
            <td data-title="r3c2" class="available">19</td>
            <td data-title="r3c3" class="available">20</td>
            <td data-title="r3c4" class="available">21</td>
            <td data-title="r3c5" class="available">22</td>
            <td data-title="r3c6" class="available">23</td>
        </tr>
        <tr>
            <td data-title="r4c0" class="available">24</td>
            <td data-title="r4c1" class="available">25</td>
            <td data-title="r4c2" class="available">26</td>
            <td data-title="r4c3" class="available">27</td>
            <td data-title="r4c4" class="available">28</td>
            <td data-title="r4c5" class="available">29</td>
            <td data-title="r4c6" class="available">30</td>
        </tr>
        <tr>
            <td data-title="r5c0" class="available">31</td>
            <td data-title="r5c1" class="available off">1</td>
            <td data-title="r5c2" class="available off">2</td>
            <td data-title="r5c3" class="available off">3</td>
            <td data-title="r5c4" class="available off">4</td>
            <td data-title="r5c5" class="available off">5</td>
            <td data-title="r5c6" class="available off">6</td>
        </tr>
    </tbody>
    </table>
    </div>
    <div class="calendar-time">
    <select class="hourselect">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option selected="selected" value="12">12</option>
    </select> : <select class="minuteselect">
    <option selected="selected" value="0">00</option>
    <option value="10">10</option>
    <option value="20">20</option>
    <option value="30">30</option>
    <option value="40">40</option>
    <option value="50">50</option>
    </select> <select class="ampmselect">
    <option selected="selected" value="AM">AM</option>
    <option value="PM">PM</option>
    </select>
    </div>
    </div>
    <div class="calendar left" style="display: block;">
    <div class="calendar-date">
    <table class="table-condensed">
    <thead>
        <tr>
            <th class="prev available"><i
                    class="icon-arrow-left glyphicon glyphicon-arrow-left"></i></th>
            <th style="width: auto" colspan="5">Aug 2014</th>
            <th class="next available"><i
                    class="icon-arrow-right glyphicon glyphicon-arrow-right"></i></th>
        </tr>
        <tr>
            <th>Su</th>
            <th>Mo</th>
            <th>Tu</th>
            <th>We</th>
            <th>Th</th>
            <th>Fr</th>
            <th>Sa</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td data-title="r0c0" class="available off">27</td>
            <td data-title="r0c1" class="available off">28</td>
            <td data-title="r0c2" class="available off">29</td>
            <td data-title="r0c3" class="available off">30</td>
            <td data-title="r0c4" class="available off">31</td>
            <td data-title="r0c5" class="available">1</td>
            <td data-title="r0c6" class="available">2</td>
        </tr>
        <tr>
            <td data-title="r1c0" class="available">3</td>
            <td data-title="r1c1" class="available">4</td>
            <td data-title="r1c2" class="available active start-date end-date">5</td>
            <td data-title="r1c3" class="available">6</td>
            <td data-title="r1c4" class="available">7</td>
            <td data-title="r1c5" class="available">8</td>
            <td data-title="r1c6" class="available">9</td>
        </tr>
        <tr>
            <td data-title="r2c0" class="available">10</td>
            <td data-title="r2c1" class="available">11</td>
            <td data-title="r2c2" class="available">12</td>
            <td data-title="r2c3" class="available">13</td>
            <td data-title="r2c4" class="available">14</td>
            <td data-title="r2c5" class="available">15</td>
            <td data-title="r2c6" class="available">16</td>
        </tr>
        <tr>
            <td data-title="r3c0" class="available">17</td>
            <td data-title="r3c1" class="available">18</td>
            <td data-title="r3c2" class="available">19</td>
            <td data-title="r3c3" class="available">20</td>
            <td data-title="r3c4" class="available">21</td>
            <td data-title="r3c5" class="available">22</td>
            <td data-title="r3c6" class="available">23</td>
        </tr>
        <tr>
            <td data-title="r4c0" class="available">24</td>
            <td data-title="r4c1" class="available">25</td>
            <td data-title="r4c2" class="available">26</td>
            <td data-title="r4c3" class="available">27</td>
            <td data-title="r4c4" class="available">28</td>
            <td data-title="r4c5" class="available">29</td>
            <td data-title="r4c6" class="available">30</td>
        </tr>
        <tr>
            <td data-title="r5c0" class="available">31</td>
            <td data-title="r5c1" class="available off">1</td>
            <td data-title="r5c2" class="available off">2</td>
            <td data-title="r5c3" class="available off">3</td>
            <td data-title="r5c4" class="available off">4</td>
            <td data-title="r5c5" class="available off">5</td>
            <td data-title="r5c6" class="available off">6</td>
        </tr>
    </tbody>
    </table>
    </div>
    <div class="calendar-time">
    <select class="hourselect">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option selected="selected" value="12">12</option>
    </select> : <select class="minuteselect">
    <option selected="selected" value="0">00</option>
    <option value="10">10</option>
    <option value="20">20</option>
    <option value="30">30</option>
    <option value="40">40</option>
    <option value="50">50</option>
    </select> <select class="ampmselect">
    <option selected="selected" value="AM">AM</option>
    <option value="PM">PM</option>
    </select>
    </div>
    </div>
    <div class="ranges">
    <div class="range_inputs">
    <div style="float: left" class="daterangepicker_start_input">
    <label for="daterangepicker_start">From</label><input type="text" disabled="disabled" value=""
        name="daterangepicker_start" class="input-mini">
    </div>
    <div style="float: left; padding-left: 11px" class="daterangepicker_end_input">
    <label for="daterangepicker_end">To</label><input type="text" disabled="disabled" value=""
        name="daterangepicker_end" class="input-mini">
    </div>
    <button class="btn-success applyBtn btn btn-small">Apply</button>
    &nbsp;
    <button class="btn-default cancelBtn btn btn-small">Cancel</button>
    </div>
    </div>
    </div>
    <div class="daterangepicker dropdown-menu opensleft">
    <div class="calendar left">
    <div class="calendar-date">
    <table class="table-condensed">
    <thead>
        <tr>
            <th></th>
            <th class="prev available"><i
                    class="icon-arrow-left glyphicon glyphicon-arrow-left"></i></th>
            <th style="width: auto" colspan="5"><select class="monthselect">
                    <option value="0">January</option>
                    <option value="1">February</option>
                    <option value="2">March</option>
                    <option value="3">April</option>
                    <option value="4">May</option>
                    <option value="5">June</option>
                    <option selected="selected" value="6">July</option>
                    <option value="7">August</option>
                    <option value="8">September</option>
                    <option value="9">October</option>
                    <option value="10">November</option>
                    <option value="11">December</option>
                </select><select class="yearselect">
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                    <option selected="selected" value="2014">2014</option>
                </select></th>
            <th class="next available"><i
                    class="icon-arrow-right glyphicon glyphicon-arrow-right"></i></th>
        </tr>
        <tr>
            <th class="week">W</th>
            <th>Mo</th>
            <th>Tu</th>
            <th>We</th>
            <th>Th</th>
            <th>Fr</th>
            <th>Sa</th>
            <th>Su</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="week">27</td>
            <td data-title="r0c0" class="available off">30</td>
            <td data-title="r0c1" class="available">1</td>
            <td data-title="r0c2" class="available">2</td>
            <td data-title="r0c3" class="available">3</td>
            <td data-title="r0c4" class="available">4</td>
            <td data-title="r0c5" class="available">5</td>
            <td data-title="r0c6" class="available">6</td>
        </tr>
        <tr>
            <td class="week">28</td>
            <td data-title="r1c0" class="available active start-date">7</td>
            <td data-title="r1c1" class="available in-range">8</td>
            <td data-title="r1c2" class="available in-range">9</td>
            <td data-title="r1c3" class="available in-range">10</td>
            <td data-title="r1c4" class="available in-range">11</td>
            <td data-title="r1c5" class="available in-range">12</td>
            <td data-title="r1c6" class="available in-range">13</td>
        </tr>
        <tr>
            <td class="week">29</td>
            <td data-title="r2c0" class="available in-range">14</td>
            <td data-title="r2c1" class="available in-range">15</td>
            <td data-title="r2c2" class="available in-range">16</td>
            <td data-title="r2c3" class="available in-range">17</td>
            <td data-title="r2c4" class="available in-range">18</td>
            <td data-title="r2c5" class="available in-range">19</td>
            <td data-title="r2c6" class="available in-range">20</td>
        </tr>
        <tr>
            <td class="week">30</td>
            <td data-title="r3c0" class="available in-range">21</td>
            <td data-title="r3c1" class="available in-range">22</td>
            <td data-title="r3c2" class="available in-range">23</td>
            <td data-title="r3c3" class="available in-range">24</td>
            <td data-title="r3c4" class="available in-range">25</td>
            <td data-title="r3c5" class="available in-range">26</td>
            <td data-title="r3c6" class="available in-range">27</td>
        </tr>
        <tr>
            <td class="week">31</td>
            <td data-title="r4c0" class="available in-range">28</td>
            <td data-title="r4c1" class="available in-range">29</td>
            <td data-title="r4c2" class="available in-range">30</td>
            <td data-title="r4c3" class="available in-range">31</td>
            <td data-title="r4c4" class="available off in-range">1</td>
            <td data-title="r4c5" class="available off in-range">2</td>
            <td data-title="r4c6" class="available off in-range">3</td>
        </tr>
        <tr>
            <td class="week">32</td>
            <td data-title="r5c0" class="available off in-range">4</td>
            <td data-title="r5c1" class="available off in-range end-date">5</td>
            <td data-title="r5c2" class="available off">6</td>
            <td data-title="r5c3" class="available off">7</td>
            <td data-title="r5c4" class="available off">8</td>
            <td data-title="r5c5" class="available off">9</td>
            <td data-title="r5c6" class="available off">10</td>
        </tr>
    </tbody>
    </table>
    </div>
    </div>
    <div class="calendar right">
    <div class="calendar-date">
    <table class="table-condensed">
    <thead>
        <tr>
            <th></th>
            <th class="prev available"><i
                    class="icon-arrow-left glyphicon glyphicon-arrow-left"></i></th>
            <th style="width: auto" colspan="5"><select class="monthselect">
                    <option value="0">January</option>
                    <option value="1">February</option>
                    <option value="2">March</option>
                    <option value="3">April</option>
                    <option value="4">May</option>
                    <option value="5">June</option>
                    <option value="6">July</option>
                    <option selected="selected" value="7">August</option>
                    <option value="8">September</option>
                    <option value="9">October</option>
                    <option value="10">November</option>
                    <option value="11">December</option>
                </select><select class="yearselect">
                    <option selected="selected" value="2014">2014</option>
                </select></th>
            <th class="next available"><i
                    class="icon-arrow-right glyphicon glyphicon-arrow-right"></i></th>
        </tr>
        <tr>
            <th class="week">W</th>
            <th>Mo</th>
            <th>Tu</th>
            <th>We</th>
            <th>Th</th>
            <th>Fr</th>
            <th>Sa</th>
            <th>Su</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="week">31</td>
            <td data-title="r0c0" class="available off in-range">28</td>
            <td data-title="r0c1" class="available off in-range">29</td>
            <td data-title="r0c2" class="available off in-range">30</td>
            <td data-title="r0c3" class="available off in-range">31</td>
            <td data-title="r0c4" class="available in-range">1</td>
            <td data-title="r0c5" class="available in-range">2</td>
            <td data-title="r0c6" class="available in-range">3</td>
        </tr>
        <tr>
            <td class="week">32</td>
            <td data-title="r1c0" class="available in-range">4</td>
            <td data-title="r1c1" class="available active end-date">5</td>
            <td data-title="r1c2" class="available">6</td>
            <td data-title="r1c3" class="available">7</td>
            <td data-title="r1c4" class="available">8</td>
            <td data-title="r1c5" class="available">9</td>
            <td data-title="r1c6" class="available">10</td>
        </tr>
        <tr>
            <td class="week">33</td>
            <td data-title="r2c0" class="available">11</td>
            <td data-title="r2c1" class="available">12</td>
            <td data-title="r2c2" class="available">13</td>
            <td data-title="r2c3" class="available">14</td>
            <td data-title="r2c4" class="available">15</td>
            <td data-title="r2c5" class="available">16</td>
            <td data-title="r2c6" class="available">17</td>
        </tr>
        <tr>
            <td class="week">34</td>
            <td data-title="r3c0" class="available">18</td>
            <td data-title="r3c1" class="available">19</td>
            <td data-title="r3c2" class="available">20</td>
            <td data-title="r3c3" class="available">21</td>
            <td data-title="r3c4" class="available">22</td>
            <td data-title="r3c5" class="available">23</td>
            <td data-title="r3c6" class="available">24</td>
        </tr>
        <tr>
            <td class="week">35</td>
            <td data-title="r4c0" class="available">25</td>
            <td data-title="r4c1" class="available">26</td>
            <td data-title="r4c2" class="available">27</td>
            <td data-title="r4c3" class="available">28</td>
            <td data-title="r4c4" class="available">29</td>
            <td data-title="r4c5" class="available">30</td>
            <td data-title="r4c6" class="available">31</td>
        </tr>
        <tr>
            <td class="week">36</td>
            <td data-title="r5c0" class="available off">1</td>
            <td data-title="r5c1" class="available off">2</td>
            <td data-title="r5c2" class="available off">3</td>
            <td data-title="r5c3" class="available off">4</td>
            <td data-title="r5c4" class="available off">5</td>
            <td data-title="r5c5" class="available off">6</td>
            <td data-title="r5c6" class="available off">7</td>
        </tr>
    </tbody>
    </table>
    </div>
    </div>
    <div class="ranges">
    <ul>
    <li>Today</li>
    <li>Yesterday</li>
    <li>Last 7 Days</li>
    <li class="active">Last 30 Days</li>
    <li>This Month</li>
    <li>Last Month</li>
    <li>Custom Range</li>
    </ul>
    <div class="range_inputs">
    <div style="float: left" class="daterangepicker_start_input">
    <label for="daterangepicker_start">From</label><input type="text" disabled="disabled" value=""
        name="daterangepicker_start" class="input-mini">
    </div>
    <div style="float: left; padding-left: 11px" class="daterangepicker_end_input">
    <label for="daterangepicker_end">To</label><input type="text" disabled="disabled" value=""
        name="daterangepicker_end" class="input-mini">
    </div>
    <button class="btn-small btn-primary applyBtn btn btn-default">Submit</button>
    &nbsp;
    <button class="btn-small cancelBtn btn btn-default">Cancel</button>
    </div>
    </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        var usrCnf = {
            language: 'vi'
        };
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/activity/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/activity/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/activity/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/activity/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/activity/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/activity/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/activity/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/activity/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/activity/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/activity/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/activity/indexvg.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/activity/saved_resource(2)') }}"></script>
@endsection