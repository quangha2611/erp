@extends('Layout.master')

@section('title','ERP-Lịch sử chăm sóc')

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
                    <div class="form-group"><input type="text" name="keyword"
                            placeholder="Thông tin khách hàng" id="keyword" class="form-control"
                            value=""></div>
                    <div class="form-group"><input type="text" name="id" placeholder="ID" id="id"
                            class="form-control" value=""></div>
                    <div class="form-group"><select name="type" id="type" class="form-control">
                            <option value="">- Loại -</option>
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
                    <div class="form-group"><select name="status" id="status" class="form-control">
                            <option value="">- Trạng thái -</option>
                            <option value="1">Thành công</option>
                            <option value="2">Thất bại</option>
                        </select></div>
                    <div class="form-group"><input type="text" name="createdByName"
                            placeholder="Người tạo" id="createdByName"
                            class="form-control ui-autocomplete-input" value="" autocomplete="off">
                    </div> <input type="hidden" name="createdById" id="createdById"
                        class="form-control" value="">
                    <div class="form-group"><input type="text" name="relatedUserName"
                            placeholder="Người nhận bàn giao" id="relatedUserName"
                            class="form-control ui-autocomplete-input" value="" autocomplete="off">
                    </div> <input type="hidden" name="relatedUserId" id="relatedUserId"
                        class="form-control" value="">
                    <div class="form-group"><input type="text" name="createdDateRange"
                            class="form-control date-range-picker" placeholder="Ngày tạo"
                            id="createdDateRange" value=""></div>
                    <div class="form-group"><select name="source" id="source" class="form-control">
                            <option value="">- Nguồn thông tin -</option>
                            <option value="-1">Chưa cập nhật nguồn</option>
                            <option value="1">Data bàn giao - FB ADS</option>
                            <option value="26">Data bàn giao - Fanpage</option>
                            <option value="25">Data bàn giao - Google Ads</option>
                            <option value="22">Data bàn giao - SEO</option>
                            <option value="19">Data bàn giao- Hotline</option>
                            <option value="8">Data bàn giao - Không có mã</option>
                            <option value="11">Data bàn giao - Email marketing</option>
                            <option value="21">Data bàn giao - SĐT quét từ QC</option>
                            <option value="3">Data bàn giao - Được giới thiệu</option>
                            <option value="12">Hội thảo, sự kiện, đi thị trường</option>
                            <option value="13">Khách tự liên hệ kinh doanh</option>
                            <option value="15">Kinh doanh được giới thiệu</option>
                            <option value="17">TeleSale</option>
                            <option value="24">Seeding/ Inbox/ Spam</option>
                            <option value="100">Khác</option>
                        </select></div>
                    <div class="form-group"><select name="hasServiceId" id="hasServiceId"
                            class="form-control">
                            <option value=" ">- Trạng thái gian hàng -</option>
                            <option value="1">Có gian hàng</option>
                            <option value="-1">Chưa có gian hàng</option>
                        </select></div>
                    <div class="form-group"><select name="leadUserType" id="leadUserType"
                            class="form-control">
                            <option value="">- Loại chăm sóc -</option>
                            <option value="1">Nhân viên kinh doanh</option>
                            <option value="2">Nhân viên chăm sóc</option>
                            <option value="3">Nhân viên hỗ trợ</option>
                        </select></div>
                    <div class="form-group"><input name="submit" type="submit"
                            id="btnFilterCrmContact" class="form-control btn btn-primary"
                            value="Lọc"></div>
                </form>
            </div>
            <div class="btn-group lolify-features" data-toggle="tooltip" data-placement="top"
                title="" style="margin-left: 5px" data-original-title="Xuất excel">

                <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                    aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
                    <span class="fa fa-book">Xuất Excel</span> <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <a href="https://erp.nhanh.vn/crm/activity/indexvg#" id="exportExcel"><i
                                class="fa fa-book"></i> Xuất excel trang hiện tại</a>
                    </li>
                    <li>
                        <a href="https://erp.nhanh.vn/crm/activity/indexvg#" id="exportAll"><i
                                class="fa fa-book"></i> Xuất excel toàn bộ các trang</a>
                    </li>
                </ul>
            </div>
            <div class="dgContainer">
                <div style="display: none; width: 1556px;" class="stickyHeader">
                    <table class="table table-bordered" cellspacing="0" cellpadding="0"></table>
                </div>
                <div class="row">
                    <div class="col-md-6 dgButtons"></div>
                    <div class="col-md-6 paginatorItem">
                        <div class="paginator"><span class="labelPages">1 - 25 / 25</span></div>
                    </div>
                    <div style="clear: both;"></div><br>
                </div>
                <table id="dgActivityHistory" class="table table">
                    <tbody>
                        <tr class="even">
                            <td><i class="fa fa-chain"></i></td>
                            <td>
                                <p><a href="https://erp.nhanh.vn/crm/activity/indexvg#"
                                        class="text-primary">Đỗ Thị Thanh Nhàn</a></p>
                                <p class="text-muted fontsize-85">10:46 09/07</p>
                            </td>
                            <td>
                                <p>Bàn giao <a href="https://erp.nhanh.vn/crm/account/view?id=21810"
                                        class="text-primary">CÔNG TY TNHH AUCO</a></p>
                            </td>
                            <td>
                                <p><b>Người dùng: </b><a
                                        href="https://erp.nhanh.vn/crm/activity/indexvg#"
                                        class="text-primary">Đỗ Thị Thanh Nhàn</a></p>
                                <p class="fontsize-90"><i class="fa fa-quote-left"></i> <b><i>Nhận
                                            chăm sóc khi tạo thông tin</i></b><br> <i
                                        class="fa fa-quote-right"></i></p>
                            </td>
                            <td class="col-align-right"></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-chain"></i></td>
                            <td>
                                <p><a href="https://erp.nhanh.vn/crm/activity/indexvg#"
                                        class="text-primary">Đỗ Thị Thanh Nhàn</a></p>
                                <p class="text-muted fontsize-85">09:25 10/07</p>
                            </td>
                            <td>
                                <p>Bàn giao <a href="https://erp.nhanh.vn/crm/account/view?id=21810"
                                        class="text-primary">CÔNG TY TNHH AUCO</a></p>
                            </td>
                            <td>
                                <p><b>Người dùng: </b><a
                                        href="https://erp.nhanh.vn/crm/activity/indexvg#"
                                        class="text-primary">Nguyễn Văn Hưng</a></p>
                                <p class="fontsize-90"><i class="fa fa-quote-left"></i> <b><i>Nhận
                                            chăm sóc khi tạo hợp đồng 62733</i></b><br> <i
                                        class="fa fa-quote-right"></i></p>
                            </td>
                            <td class="col-align-right"></td>
                        </tr>
                        <tr class="even">
                            <td><i class="fa fa-book"></i></td>
                            <td>
                                <p><a href="https://erp.nhanh.vn/crm/activity/indexvg#"
                                        class="text-primary">Đỗ Thị Thanh Nhàn</a></p>
                                <p class="text-muted fontsize-85">09:25 10/07</p>
                            </td>
                            <td>
                                <p>Tạo hợp đồng <a
                                        href="https://erp.nhanh.vn/crm/account/view?id=21810"
                                        class="text-primary">CÔNG TY TNHH AUCO</a></p>
                            </td>
                            <td>
                                <p class="fontsize-90"><i class="fa fa-quote-left"></i> <b><i>Tạo
                                            mới hợp đồng 62733</i></b><br> <i
                                        class="fa fa-quote-right"></i></p>
                            </td>
                            <td class="col-align-right"></td>
                        </tr>
                        <tr>
                            <td><i class="fa "></i></td>
                            <td>
                                <p><a href="https://erp.nhanh.vn/crm/activity/indexvg#"
                                        class="text-primary">Đỗ Thị Thanh Nhàn</a></p>
                                <p class="text-muted fontsize-85">13:54 10/07</p>
                            </td>
                            <td>
                                <p>Sửa hợp đồng <a
                                        href="https://erp.nhanh.vn/crm/account/view?id=21810"
                                        class="text-primary">CÔNG TY TNHH AUCO</a></p>
                            </td>
                            <td>
                                <p class="fontsize-90"><i class="fa fa-quote-left"></i> <b><i>Sửa
                                            hợp đồng 62733</i></b><br> <i
                                        class="fa fa-quote-right"></i></p>
                            </td>
                            <td class="col-align-right"></td>
                        </tr>
                        <tr class="even">
                            <td><i class="fa "></i></td>
                            <td>
                                <p><a href="https://erp.nhanh.vn/crm/activity/indexvg#"
                                        class="text-primary">Đỗ Thị Thanh Nhàn</a></p>
                                <p class="text-muted fontsize-85">13:54 10/07</p>
                            </td>
                            <td>
                                <p>Sửa hợp đồng <a
                                        href="https://erp.nhanh.vn/crm/account/view?id=21810"
                                        class="text-primary">CÔNG TY TNHH AUCO</a></p>
                            </td>
                            <td>
                                <p class="fontsize-90"><i class="fa fa-quote-left"></i> <b><i>Sửa
                                            hợp đồng 62733</i></b><br> <i
                                        class="fa fa-quote-right"></i></p>
                            </td>
                            <td class="col-align-right"></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-chain"></i></td>
                            <td>
                                <p><a href="https://erp.nhanh.vn/crm/activity/indexvg#"
                                        class="text-primary">Nguyễn Văn Hưng</a></p>
                                <p class="text-muted fontsize-85">21:16 10/07</p>
                            </td>
                            <td>
                                <p>Bàn giao <a href="https://erp.nhanh.vn/crm/lead/view?id=405963"
                                        class="text-primary">Công ty cổ phần Vnp Group</a></p>
                            </td>
                            <td>
                                <p><b>Người dùng: </b><a
                                        href="https://erp.nhanh.vn/crm/activity/indexvg#"
                                        class="text-primary">Nguyễn Văn Hưng</a></p>
                                <p class="fontsize-90"><i class="fa fa-quote-left"></i> <b><i>Nhận
                                            chăm sóc khi tạo thông tin</i></b><br> <i
                                        class="fa fa-quote-right"></i></p>
                            </td>
                            <td class="col-align-right"></td>
                        </tr>
                        <tr class="even">
                            <td><i class="fa fa-chain"></i></td>
                            <td>
                                <p><a href="https://erp.nhanh.vn/crm/activity/indexvg#"
                                        class="text-primary">Nguyễn Văn Hưng</a></p>
                                <p class="text-muted fontsize-85">21:32 10/07</p>
                            </td>
                            <td>
                                <p>Bàn giao <a href="https://erp.nhanh.vn/crm/lead/view?id=405964"
                                        class="text-primary">Công ty cổ phần Vnp Group</a></p>
                            </td>
                            <td>
                                <p><b>Người dùng: </b><a
                                        href="https://erp.nhanh.vn/crm/activity/indexvg#"
                                        class="text-primary">Nguyễn Văn Hưng</a></p>
                                <p class="fontsize-90"><i class="fa fa-quote-left"></i> <b><i>Nhận
                                            chăm sóc khi tạo thông tin</i></b><br> <i
                                        class="fa fa-quote-right"></i></p>
                            </td>
                            <td class="col-align-right"></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-phone-square"></i></td>
                            <td>
                                <p><a href="https://erp.nhanh.vn/crm/activity/indexvg#"
                                        class="text-primary">Nguyễn Văn Hưng</a></p>
                                <p class="text-muted fontsize-85">21:32 10/07</p>
                            </td>
                            <td>
                                <p>Yêu cầu gọi điện <a
                                        href="https://erp.nhanh.vn/crm/lead/view?id=405964"
                                        class="text-primary">Công ty cổ phần Vnp Group</a></p>
                                <p><b>Địa chỉ gặp: </b></p>
                                <p><b>Ghi chú: </b></p>
                            </td>
                            <td>
                                <p><b>Đặt lịch: </b><a
                                        href="https://erp.nhanh.vn/crm/activity/indexvg#"
                                        class="text-primary">21:32 10/07</a></p>
                                <p class="fontsize-90"><i class="fa fa-quote-left"></i> <b><i>Yêu
                                            cầu gọi cho thông tin vừa nhập</i></b><br> <i
                                        class="fa fa-quote-right"></i></p>
                            </td>
                            <td class="col-align-right"></td>
                        </tr>
                        <tr class="even">
                            <td><i class="fa "></i></td>
                            <td>
                                <p><a href="https://erp.nhanh.vn/crm/activity/indexvg#"
                                        class="text-primary">Nguyễn Văn Hưng</a></p>
                                <p class="text-muted fontsize-85">21:50 10/07</p>
                            </td>
                            <td>
                                <p>Khảo sát sau gặp <a
                                        href="https://erp.nhanh.vn/crm/lead/view?id=405964"
                                        class="text-primary">Công ty cổ phần Vnp Group</a></p>
                            </td>
                            <td>
                                <p><b>Kết quả: </b>Thành công</p>
                                <p class="fontsize-90"><i class="fa fa-quote-left"></i> Khảo sát sau
                                    gặp <i class="fa fa-quote-right"></i></p>
                            </td>
                            <td class="col-align-right"></td>
                        </tr>
                        <tr>
                            <td><i class="fa "></i></td>
                            <td>
                                <p><a href="https://erp.nhanh.vn/crm/activity/indexvg#"
                                        class="text-primary">Nguyễn Văn Hưng</a></p>
                                <p class="text-muted fontsize-85">07:40 11/07</p>
                            </td>
                            <td>
                                <p>Khảo sát trước gặp <a
                                        href="https://erp.nhanh.vn/crm/lead/view?id=405964"
                                        class="text-primary">Công ty cổ phần Vnp Group</a></p>
                            </td>
                            <td>
                                <p><b>Kết quả: </b>Thành công</p>
                                <p class="fontsize-90"><i class="fa fa-quote-left"></i> Khảo sát
                                    trước gặp <i class="fa fa-quote-right"></i></p>
                            </td>
                            <td class="col-align-right"></td>
                        </tr>
                        <tr class="even">
                            <td><i class="fa fa-calendar"></i></td>
                            <td>
                                <p><a href="https://erp.nhanh.vn/crm/activity/indexvg#"
                                        class="text-primary">Nguyễn Văn Hưng</a></p>
                                <p class="text-muted fontsize-85">14:10 13/07</p>
                            </td>
                            <td>
                                <p>Đặt lịch <a href="https://erp.nhanh.vn/crm/lead/view?id=405963"
                                        class="text-primary">Công ty cổ phần Vnp Group</a></p>
                                <p><b>Địa chỉ gặp: </b></p>
                                <p><b>Thành viên: </b>Nguyễn Văn Hưng</p>
                                <p><b>Ghi chú: </b></p>
                            </td>
                            <td>
                                <p><b>Đặt lịch: </b><a
                                        href="https://erp.nhanh.vn/crm/activity/indexvg#"
                                        class="text-primary">16:00 07/07</a></p>
                            </td>
                            <td class="col-align-right"><a
                                    href="https://erp.nhanh.vn/crm/activity/update?id=3046522"
                                    class="fa fa-edit"></a></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-phone-square"></i></td>
                            <td>
                                <p><a href="https://erp.nhanh.vn/crm/activity/indexvg#"
                                        class="text-primary">Nguyễn Văn Hưng</a></p>
                                <p class="text-muted fontsize-85">14:16 13/07</p>
                            </td>
                            <td>
                                <p>Yêu cầu gọi điện <a
                                        href="https://erp.nhanh.vn/crm/lead/view?id=405964"
                                        class="text-primary">Công ty cổ phần Vnp Group</a></p>
                                <p><b>Địa chỉ gặp: </b></p>
                                <p><b>Thành viên: </b>Đỗ Thị Thanh Nhàn</p>
                                <p><b>Ghi chú: </b></p>
                            </td>
                            <td>
                                <p><b>Đặt lịch: </b><a
                                        href="https://erp.nhanh.vn/crm/activity/indexvg#"
                                        class="text-primary">14:16 13/07</a></p>
                                <p class="fontsize-90"><i class="fa fa-quote-left"></i> <b><i>Yêu
                                            cầu gọi cho khách</i></b><br> <i
                                        class="fa fa-quote-right"></i></p>
                            </td>
                            <td class="col-align-right"></td>
                        </tr>
                        <tr class="even">
                            <td><i class="fa fa-chain"></i></td>
                            <td>
                                <p><a href="https://erp.nhanh.vn/crm/activity/indexvg#"
                                        class="text-primary">Nguyễn Văn Hưng</a></p>
                                <p class="text-muted fontsize-85">22:32 13/07</p>
                            </td>
                            <td>
                                <p>Bàn giao <a href="https://erp.nhanh.vn/crm/lead/view?id=406317"
                                        class="text-primary">Công ty cổ phần Vnp Group</a></p>
                            </td>
                            <td>
                                <p><b>Người dùng: </b><a
                                        href="https://erp.nhanh.vn/crm/activity/indexvg#"
                                        class="text-primary">Nguyễn Văn Hưng</a></p>
                                <p class="fontsize-90"><i class="fa fa-quote-left"></i> <b><i>Nhận
                                            chăm sóc khi tạo thông tin</i></b><br> <i
                                        class="fa fa-quote-right"></i></p>
                            </td>
                            <td class="col-align-right"></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-phone-square"></i></td>
                            <td>
                                <p><a href="https://erp.nhanh.vn/crm/activity/indexvg#"
                                        class="text-primary">Nguyễn Văn Hưng</a></p>
                                <p class="text-muted fontsize-85">22:32 13/07</p>
                            </td>
                            <td>
                                <p>Yêu cầu gọi điện <a
                                        href="https://erp.nhanh.vn/crm/lead/view?id=406317"
                                        class="text-primary">Công ty cổ phần Vnp Group</a></p>
                                <p><b>Địa chỉ gặp: </b></p>
                                <p><b>Thành viên: </b>Ứng Đình Hướng</p>
                                <p><b>Ghi chú: </b></p>
                            </td>
                            <td>
                                <p><b>Đặt lịch: </b><a
                                        href="https://erp.nhanh.vn/crm/activity/indexvg#"
                                        class="text-primary">22:32 13/07</a></p>
                                <p class="fontsize-90"><i class="fa fa-quote-left"></i> <b><i>Yêu
                                            cầu gọi cho thông tin vừa nhập</i></b><br> <i
                                        class="fa fa-quote-right"></i></p>
                            </td>
                            <td class="col-align-right"></td>
                        </tr>
                        <tr class="even">
                            <td><i class="fa fa-phone-square"></i></td>
                            <td>
                                <p><a href="https://erp.nhanh.vn/crm/activity/indexvg#"
                                        class="text-primary">Nguyễn Văn Hưng</a></p>
                                <p class="text-muted fontsize-85">10:10 14/07</p>
                            </td>
                            <td>
                                <p>Yêu cầu gọi điện <a
                                        href="https://erp.nhanh.vn/crm/lead/view?id=406317"
                                        class="text-primary">Công ty cổ phần Vnp Group</a></p>
                                <p><b>Địa chỉ gặp: </b></p>
                                <p><b>Thành viên: </b>Đỗ Thị Thanh Nhàn</p>
                                <p><b>Ghi chú: </b></p>
                            </td>
                            <td>
                                <p><b>Đặt lịch: </b><a
                                        href="https://erp.nhanh.vn/crm/activity/indexvg#"
                                        class="text-primary">10:10 14/07</a></p>
                                <p class="fontsize-90"><i class="fa fa-quote-left"></i> <b><i>Yêu
                                            cầu gọi cho khách</i></b><br> <i
                                        class="fa fa-quote-right"></i></p>
                            </td>
                            <td class="col-align-right"></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-chain"></i></td>
                            <td>
                                <p><a href="https://erp.nhanh.vn/crm/activity/indexvg#"
                                        class="text-primary">Đỗ Thị Thanh Nhàn</a></p>
                                <p class="text-muted fontsize-85">10:19 14/07</p>
                            </td>
                            <td>
                                <p>Bàn giao <a href="https://erp.nhanh.vn/crm/lead/view?id=406392"
                                        class="text-primary">Nguyễn Thị Hoa</a></p>
                            </td>
                            <td>
                                <p><b>Người dùng: </b><a
                                        href="https://erp.nhanh.vn/crm/activity/indexvg#"
                                        class="text-primary">Đỗ Thị Thanh Nhàn</a></p>
                                <p class="fontsize-90"><i class="fa fa-quote-left"></i> <b><i>Nhận
                                            chăm sóc khi tạo thông tin</i></b><br> <i
                                        class="fa fa-quote-right"></i></p>
                            </td>
                            <td class="col-align-right"></td>
                        </tr>
                        <tr class="even">
                            <td><i class="fa "></i></td>
                            <td>
                                <p><a href="https://erp.nhanh.vn/crm/activity/indexvg#"
                                        class="text-primary">Nguyễn Văn Hưng</a></p>
                                <p class="text-muted fontsize-85">11:31 14/07</p>
                            </td>
                            <td>
                                <p>Cập nhật Level khách hàng <a
                                        href="https://erp.nhanh.vn/crm/lead/view?id=406392"
                                        class="text-primary">Nguyễn Thị Hoa</a></p>
                            </td>
                            <td>
                                <p class="fontsize-90"><i class="fa fa-quote-left"></i> Cập nhật
                                    trạng thái <b>L1B - Thông tin sai</b> <i
                                        class="fa fa-quote-right"></i></p>
                            </td>
                            <td class="col-align-right"></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-chain"></i></td>
                            <td>
                                <p><a href="https://erp.nhanh.vn/crm/activity/indexvg#"
                                        class="text-primary">Nguyễn Văn Hưng</a></p>
                                <p class="text-muted fontsize-85">11:31 14/07</p>
                            </td>
                            <td>
                                <p>Bàn giao <a href="https://erp.nhanh.vn/crm/lead/view?id=406392"
                                        class="text-primary">Nguyễn Thị Hoa</a></p>
                            </td>
                            <td>
                                <p><b>Người dùng: </b><a
                                        href="https://erp.nhanh.vn/crm/activity/indexvg#"
                                        class="text-primary">Nguyễn Văn Hưng</a></p>
                            </td>
                            <td class="col-align-right"></td>
                        </tr>
                        <tr class="even">
                            <td><i class="fa "></i></td>
                            <td>
                                <p><a href="https://erp.nhanh.vn/crm/activity/indexvg#"
                                        class="text-primary">Đỗ Thị Thanh Nhàn</a></p>
                                <p class="text-muted fontsize-85">11:05 15/07</p>
                            </td>
                            <td>
                                <p>Sửa hợp đồng <a
                                        href="https://erp.nhanh.vn/crm/account/view?id=21810"
                                        class="text-primary">CÔNG TY TNHH AUCO</a></p>
                            </td>
                            <td>
                                <p class="fontsize-90"><i class="fa fa-quote-left"></i> <b><i>Sửa
                                            hợp đồng 62733</i></b><br> <i
                                        class="fa fa-quote-right"></i></p>
                            </td>
                            <td class="col-align-right"></td>
                        </tr>
                        <tr>
                            <td><i class="fa "></i></td>
                            <td>
                                <p><a href="https://erp.nhanh.vn/crm/activity/indexvg#"
                                        class="text-primary">Đỗ Thị Thanh Nhàn</a></p>
                                <p class="text-muted fontsize-85">11:09 15/07</p>
                            </td>
                            <td>
                                <p>Sửa hợp đồng <a
                                        href="https://erp.nhanh.vn/crm/account/view?id=21810"
                                        class="text-primary">CÔNG TY TNHH AUCO</a></p>
                            </td>
                            <td>
                                <p class="fontsize-90"><i class="fa fa-quote-left"></i> <b><i>Sửa
                                            hợp đồng 62733</i></b><br> <i
                                        class="fa fa-quote-right"></i></p>
                            </td>
                            <td class="col-align-right"></td>
                        </tr>
                        <tr class="even">
                            <td><i class="fa "></i></td>
                            <td>
                                <p><a href="https://erp.nhanh.vn/crm/activity/indexvg#"
                                        class="text-primary">Đỗ Thị Thanh Nhàn</a></p>
                                <p class="text-muted fontsize-85">11:50 15/07</p>
                            </td>
                            <td>
                                <p>Sửa hợp đồng <a
                                        href="https://erp.nhanh.vn/crm/account/view?id=21810"
                                        class="text-primary">CÔNG TY TNHH AUCO</a></p>
                            </td>
                            <td>
                                <p class="fontsize-90"><i class="fa fa-quote-left"></i> <b><i>Sửa
                                            hợp đồng 62733</i></b><br> <i
                                        class="fa fa-quote-right"></i></p>
                            </td>
                            <td class="col-align-right"></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-money"></i></td>
                            <td>
                                <p><a href="https://erp.nhanh.vn/crm/activity/indexvg#"
                                        class="text-primary">Nguyễn Văn Hưng</a></p>
                                <p class="text-muted fontsize-85">13:19 15/07</p>
                            </td>
                            <td>
                                <p>Tạo thanh toán <a
                                        href="https://erp.nhanh.vn/crm/account/view?id=21810"
                                        class="text-primary">CÔNG TY TNHH AUCO</a></p>
                            </td>
                            <td>
                                <p class="fontsize-90"><i class="fa fa-quote-left"></i> <b><i>Thêm
                                            phiếu thu 76350</i></b><br> <i
                                        class="fa fa-quote-right"></i></p>
                            </td>
                            <td class="col-align-right"></td>
                        </tr>
                        <tr class="even">
                            <td><i class="fa "></i></td>
                            <td>
                                <p><a href="https://erp.nhanh.vn/crm/activity/indexvg#"
                                        class="text-primary">Nguyễn Văn Hưng</a></p>
                                <p class="text-muted fontsize-85">13:57 15/07</p>
                            </td>
                            <td>
                                <p>Sửa thanh toán <a
                                        href="https://erp.nhanh.vn/crm/account/view?id=21810"
                                        class="text-primary">CÔNG TY TNHH AUCO</a></p>
                            </td>
                            <td>
                                <p class="fontsize-90"><i class="fa fa-quote-left"></i> <b><i>Sửa
                                            phiếu thu 76350</i></b><br> <i
                                        class="fa fa-quote-right"></i></p>
                            </td>
                            <td class="col-align-right"></td>
                        </tr>
                        <tr>
                            <td><i class="fa "></i></td>
                            <td>
                                <p><a href="https://erp.nhanh.vn/crm/activity/indexvg#"
                                        class="text-primary">Nguyễn Văn Hưng</a></p>
                                <p class="text-muted fontsize-85">19:43 20/07</p>
                            </td>
                            <td>
                                <p>Thêm nhận xét <a
                                        href="https://erp.nhanh.vn/crm/account/view?id=21810"
                                        class="text-primary">CÔNG TY TNHH AUCO</a></p>
                            </td>
                            <td>
                                <p><b>Người dùng: </b><a
                                        href="https://erp.nhanh.vn/crm/activity/indexvg#"
                                        class="text-primary">Nguyễn Văn Hưng</a></p>
                                <p class="fontsize-90"><i class="fa fa-quote-left"></i> Good <i
                                        class="fa fa-quote-right"></i></p>
                            </td>
                            <td class="col-align-right"></td>
                        </tr>
                        <tr class="even">
                            <td><i class="fa "></i></td>
                            <td>
                                <p><a href="https://erp.nhanh.vn/crm/activity/indexvg#"
                                        class="text-primary">Nguyễn Văn Hưng</a></p>
                                <p class="text-muted fontsize-85">19:43 20/07</p>
                            </td>
                            <td>
                                <p>Thêm nhận xét <a
                                        href="https://erp.nhanh.vn/crm/account/view?id=21810"
                                        class="text-primary">CÔNG TY TNHH AUCO</a></p>
                            </td>
                            <td>
                                <p><b>Người dùng: </b><a
                                        href="https://erp.nhanh.vn/crm/activity/indexvg#"
                                        class="text-primary">Nguyễn Văn Hưng</a></p>
                                <p class="fontsize-90"><i class="fa fa-quote-left"></i> Tốt <i
                                        class="fa fa-quote-right"></i></p>
                            </td>
                            <td class="col-align-right"></td>
                        </tr>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-md-6 dgButtons"></div>
                    <div class="col-md-6 paginatorItem">
                        <div class="paginator"><span class="labelPages">1 - 25 / 25</span></div>
                    </div>
                </div>
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
    