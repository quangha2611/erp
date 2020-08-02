@extends('Layout.master1')

@section('css')
    <link href="{{ asset('asset/css/crm/report/bootstrap-multiselect.css') }}" media="screen" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/css/crm/report/style.css') }}" type="text/css">
@endsection

@section('title','ERP-Báo cáo theo phòng ban')

@section('content-page')

    <div class="tab-content">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li class="active">Báo cáo theo nhân viên</li>
        </ul>
        <div class="filterContainer">
            <form method="GET" name="crmReportEmployeesFilter" class="form-inline lolify"
                role="form" id="crmReportEmployeesFilter">
                <div class="col-md-10 lolify-default">

                    <div class="form-group">
                        <input type="text" name="daterangepicker"
                            class="form-control date-range-picker" id="daterangepicker"
                            value="01/07/2020 - 31/07/2020"> </div>
                    <input type="hidden" name="userId" id="userId" class="form-control"
                        value="">
                    <div class="form-group">
                        <input name="submit" type="submit" id="btnFilterCrmContact"
                            class="form-control btn btn-primary" value="Lọc"> </div>

                </div>
                <div class="col-md-2 lolify-control">
                    <div class="btn-group pull-right lolify-features" data-toggle="tooltip"
                        data-placement="top" title="" data-original-title="Chức năng, thao tác">
                        <button class="btn dropdown-toggle" type="button" aria-haspopup="true"
                            aria-expanded="false" data-toggle="dropdown">
                            <span class="fa fa-cog"></span> <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="https://erp.nhanh.vn/crm/report/employee#"
                                    id="exportExcel"><i class="fa fa-download fa-lg"></i> Xuất
                                    excel</a></li>
                        </ul>
                    </div>


                    <button class="btn  pull-right lolify-showextend" type="button"
                        data-toggle="tooltip" data-placement="top" title=""
                        data-original-title="bộ lọc nâng cao">
                        <span class="fa fa-th"></span>
                    </button>
                </div>
                <div class="col-md-12 lolify-extend" style="">
                    <div class="form-group">
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
                    <div class="form-group">
                        <select name="supplyCompanyId" id="supplyCompanyId"
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
                        </select> </div>
                    <div class="form-group">
                        <select name="departmentId" id="departmentId" class="form-control">
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
                            <option value="1285">-- -- -- Nhanh HN - ThanhTV_Phát triển đối tác
                            </option>
                            <option value="1318">-- -- Nhanh HN - Phòng KD2_TùngNT</option>
                            <option value="1319">-- -- Nhanh HN - Phòng KD3_HuyPV</option>
                            <option value="1320">-- -- Nhanh HN - Phòng KD4_TrườngVV</option>
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
                        </select> </div>
                    <div class="form-group">
                        <select name="extractDepartmentIds[]" multiple="multiple"
                            class="form-control multiselect" id="extractDepartmentIds"
                            style="display: none;">
                            <option value="">- Loại bỏ Phòng ban -</option>
                        </select>
                        <div class="btn-group"><button type="button"
                                class="multiselect dropdown-toggle btn btn-default"
                                data-toggle="dropdown" title="Loại trừ phòng ban">Loại trừ phòng
                                ban <b class="caret"></b></button>
                            <ul class="multiselect-container dropdown-menu">
                                <li class="multiselect-item filter" value="0">
                                    <div class="input-group"><span class="input-group-addon"><i
                                                class="glyphicon glyphicon-search"></i></span><input
                                            class="form-control multiselect-search" type="text"
                                            placeholder="Search"></div>
                                </li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value=""> - Loại bỏ Phòng ban
                                            -</label></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="form-group">
                        <select name="locked" id="locked" class="form-control">
                            <option value="">- Trạng thái tài khoản -</option>
                            <option value="1">khóa</option>
                            <option value="-1">đang hoạt động</option>
                        </select> </div>
                    <div class="form-group">
                        <select name="hasValue" id="hasValue" class="form-control">
                            <option value="">- Doanh số -</option>
                            <option value="1">Có doanh số</option>
                            <option value="-1">không có doanh số</option>
                        </select> </div>
                    <div class="form-group">
                        <select name="show" id="show" class="form-control">
                            <option value="">- Hiện danh sách -</option>
                            <option value="1">Nhân viên có doanh số</option>
                            <option value="2">Tất cả</option>
                        </select> </div>
                    <div class="form-group">
                        <select name="showWorkingStatus" id="showWorkingStatus"
                            class="form-control">
                            <option value="">- Trạng thái nhân sự -</option>
                            <option value="1" selected="selected">Đang làm việc</option>
                            <option value="2">Tất cả</option>
                        </select> </div>
                    <div class="form-group">
                        <select name="showWorkingDate" id="showWorkingDate"
                            class="form-control">
                            <option value="">- Trạng thái làm việc -</option>
                            <option value="1">Trên 3 tháng</option>
                            <option value="-1">Dưới 3 tháng</option>
                        </select> </div>
                    <div class="form-group">
                        <input type="text" name="employeeName" placeholder="Nhân viên"
                            id="employeeName" class="form-control ui-autocomplete-input"
                            value="" autocomplete="off"> </div>
                    <div class="form-group">
                        <select name="serviceType" id="serviceType" class="form-control">
                            <option value="">- Loại HĐ -</option>
                            <option value="1">HĐ dịch vụ</option>
                            <option value="3">HĐ đặt cọc</option>
                            <option value="4">HĐ phụ lục</option>
                            <option value="5">HĐ đại lý</option>
                            <option value="6">HĐ Hợp tác</option>
                            <option value="7">HĐ Marketing</option>
                            <option value="8">HĐ Cộng tác viên</option>
                            <option value="9">HĐ Phần cứng</option>
                            <option value="10">HĐ vận chuyển</option>
                        </select> </div>
                    <div class="form-group">
                        <select name="phonecallStatus" id="phonecallStatus"
                            class="form-control">
                            <option value="">- Trạng thái gọi -</option>
                            <option value="1">Gọi được</option>
                            <option value="-1">Không gọi được</option>
                        </select> </div>

                </div>
            </form>
            <div class="clearfix"></div>
            <div class="lolify-left-menu" style="display: none;">
            </div>
        </div>
        <div class="dgEmployee" style=" overflow: auto;">
            <div class="dgContainer">
                <div style="display: none; width: 1874px;" class="stickyHeader">
                    <table class="table table-bordered" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr class="even">
                                <th rowspan="2" style="width: 36px;">STT</th>
                                <th rowspan="2" style="width: 50px;">Mã NV</th>
                                <th rowspan="2" style="width: 130px;">Nhân viên</th>
                                <th rowspan="2" style="width: 177px;">Phòng ban</th>
                                <th rowspan="2" style="width: 63px;">thời gian làm</th>
                                <th rowspan="2" style="width: 55px;"><a
                                        href="https://erp.nhanh.vn/crm/report/employee?sort=lead&amp;dir=asc"><i
                                            class="fa fa-sort"></i> Tìm mới</a></th>
                                <th rowspan="2" style="width: 56px;"><a
                                        href="https://erp.nhanh.vn/crm/report/employee?sort=assign&amp;dir=asc"><i
                                            class="fa fa-sort"></i> Nhận CS</a></th>
                                <th rowspan="2" style="width: 46px;"><a
                                        href="https://erp.nhanh.vn/crm/report/employee?sort=call&amp;dir=asc"><i
                                            class="fa fa-sort"></i> Gọi</a></th>
                                <th rowspan="2" style="width: 38px;"><a
                                        href="https://erp.nhanh.vn/crm/report/employee?sort=meeting&amp;dir=asc"><i
                                            class="fa fa-sort"></i> Gặp</a></th>
                                <th rowspan="2" style="width: 65px;"><a
                                        href="https://erp.nhanh.vn/crm/report/employee?sort=call-meeting&amp;dir=asc"><i
                                            class="fa fa-sort"></i> Gặp/Gọi</a></th>
                                <th rowspan="2" style="width: 58px;"><a
                                        href="https://erp.nhanh.vn/crm/report/employee?sort=deploy&amp;dir=asc"><i
                                            class="fa fa-sort"></i> Triển khai</a></th>
                                <th rowspan="2" style="width: 64px;"><a
                                        href="https://erp.nhanh.vn/crm/report/employee?sort=calendar&amp;dir=asc"><i
                                            class="fa fa-sort"></i> Đặt lịch hẹn</a></th>
                                <th rowspan="2" style="width: 78px;"><a
                                        href="https://erp.nhanh.vn/crm/report/employee?sort=customer&amp;dir=asc"><i
                                            class="fa fa-sort"></i> Số khách hàng</a></th>
                                <th colspan="11" style="width: 957px;">Hợp đồng</th>
                            </tr>
                            <tr>
                                <th style="width: 59px;"><a
                                        href="https://erp.nhanh.vn/crm/report/employee?sort=contractTotal&amp;dir=asc"><i
                                            class="fa fa-sort"></i> Số lượng </a></th>
                                <th style="width: 85px;"><a
                                        href="https://erp.nhanh.vn/crm/report/employee?sort=contractPaymentTotal&amp;dir=asc"><i
                                            class="fa fa-sort"></i> SL Đã thanh toán </a></th>
                                <th style="width: 97px;"><a
                                        href="https://erp.nhanh.vn/crm/report/employee?sort=totalValue&amp;dir=asc"><i
                                            class="fa fa-sort"></i> Giá trị</a></th>
                                <th style="width: 96px;"><a
                                        href="https://erp.nhanh.vn/crm/report/employee?sort=totalAmount&amp;dir=asc"><i
                                            class="fa fa-sort"></i> Đã thu từ HĐ</a></th>
                                <th style="width: 97px;"><a
                                        href="https://erp.nhanh.vn/crm/report/employee?sort=totalPayment&amp;dir=asc"><i
                                            class="fa fa-sort"></i> Đã thu từ NV</a></th>
                                <th style="width: 97px;"><a
                                        href="https://erp.nhanh.vn/crm/report/employee?sort=realValue&amp;dir=asc"><i
                                            class="fa fa-sort"></i> Tính doanh số</a></th>
                                <th style="width: 97px;"><a
                                        href="https://erp.nhanh.vn/crm/report/employee?sort=realValueNew&amp;dir=asc"><i
                                            class="fa fa-sort"></i> Mới</a></th>
                                <th style="width: 86px;"><a
                                        href="https://erp.nhanh.vn/crm/report/employee?sort=realValueExtend&amp;dir=asc"><i
                                            class="fa fa-sort"></i> Mở rộng</a></th>
                                <th style="width: 86px;"><a
                                        href="https://erp.nhanh.vn/crm/report/employee?sort=realValueDiagonal&amp;dir=asc"><i
                                            class="fa fa-sort"></i> Bán chéo</a></th>
                                <th style="width: 86px;"><a
                                        href="https://erp.nhanh.vn/crm/report/employee?sort=realValueReNew&amp;dir=asc"><i
                                            class="fa fa-sort"></i> Tái ký</a></th>
                                <th style="width: 71px;"><a
                                        href="https://erp.nhanh.vn/crm/report/employee?sort=totalBillCarrierValue&amp;dir=asc"><i
                                            class="fa fa-sort"></i> Vận chuyển</a></th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-6 dgButtons"></div>
                    <div style="clear: both;"></div><br>
                </div>
                <table id="dgCrmReportEmployee" class="table table-bordered">
                    <thead>
                        <tr class="even">
                            <th rowspan="2">STT</th>
                            <th rowspan="2">Mã NV</th>
                            <th rowspan="2">Nhân viên</th>
                            <th rowspan="2">Phòng ban</th>
                            <th rowspan="2">thời gian làm</th>
                            <th rowspan="2"><a
                                    href="https://erp.nhanh.vn/crm/report/employee?sort=lead&amp;dir=asc"><i
                                        class="fa fa-sort"></i> Tìm mới</a></th>
                            <th rowspan="2"><a
                                    href="https://erp.nhanh.vn/crm/report/employee?sort=assign&amp;dir=asc"><i
                                        class="fa fa-sort"></i> Nhận CS</a></th>
                            <th rowspan="2"><a
                                    href="https://erp.nhanh.vn/crm/report/employee?sort=call&amp;dir=asc"><i
                                        class="fa fa-sort"></i> Gọi</a></th>
                            <th rowspan="2"><a
                                    href="https://erp.nhanh.vn/crm/report/employee?sort=meeting&amp;dir=asc"><i
                                        class="fa fa-sort"></i> Gặp</a></th>
                            <th rowspan="2"><a
                                    href="https://erp.nhanh.vn/crm/report/employee?sort=call-meeting&amp;dir=asc"><i
                                        class="fa fa-sort"></i> Gặp/Gọi</a></th>
                            <th rowspan="2"><a
                                    href="https://erp.nhanh.vn/crm/report/employee?sort=deploy&amp;dir=asc"><i
                                        class="fa fa-sort"></i> Triển khai</a></th>
                            <th rowspan="2"><a
                                    href="https://erp.nhanh.vn/crm/report/employee?sort=calendar&amp;dir=asc"><i
                                        class="fa fa-sort"></i> Đặt lịch hẹn</a></th>
                            <th rowspan="2"><a
                                    href="https://erp.nhanh.vn/crm/report/employee?sort=customer&amp;dir=asc"><i
                                        class="fa fa-sort"></i> Số khách hàng</a></th>
                            <th colspan="11">Hợp đồng</th>
                        </tr>
                        <tr class="">
                            <th><a
                                    href="https://erp.nhanh.vn/crm/report/employee?sort=contractTotal&amp;dir=asc"><i
                                        class="fa fa-sort"></i> Số lượng </a></th>
                            <th><a
                                    href="https://erp.nhanh.vn/crm/report/employee?sort=contractPaymentTotal&amp;dir=asc"><i
                                        class="fa fa-sort"></i> SL Đã thanh toán </a></th>
                            <th><a
                                    href="https://erp.nhanh.vn/crm/report/employee?sort=totalValue&amp;dir=asc"><i
                                        class="fa fa-sort"></i> Giá trị</a></th>
                            <th><a
                                    href="https://erp.nhanh.vn/crm/report/employee?sort=totalAmount&amp;dir=asc"><i
                                        class="fa fa-sort"></i> Đã thu từ HĐ</a></th>
                            <th><a
                                    href="https://erp.nhanh.vn/crm/report/employee?sort=totalPayment&amp;dir=asc"><i
                                        class="fa fa-sort"></i> Đã thu từ NV</a></th>
                            <th><a
                                    href="https://erp.nhanh.vn/crm/report/employee?sort=realValue&amp;dir=asc"><i
                                        class="fa fa-sort"></i> Tính doanh số</a></th>
                            <th><a
                                    href="https://erp.nhanh.vn/crm/report/employee?sort=realValueNew&amp;dir=asc"><i
                                        class="fa fa-sort"></i> Mới</a></th>
                            <th><a
                                    href="https://erp.nhanh.vn/crm/report/employee?sort=realValueExtend&amp;dir=asc"><i
                                        class="fa fa-sort"></i> Mở rộng</a></th>
                            <th><a
                                    href="https://erp.nhanh.vn/crm/report/employee?sort=realValueDiagonal&amp;dir=asc"><i
                                        class="fa fa-sort"></i> Bán chéo</a></th>
                            <th><a
                                    href="https://erp.nhanh.vn/crm/report/employee?sort=realValueReNew&amp;dir=asc"><i
                                        class="fa fa-sort"></i> Tái ký</a></th>
                            <th><a
                                    href="https://erp.nhanh.vn/crm/report/employee?sort=totalBillCarrierValue&amp;dir=asc"><i
                                        class="fa fa-sort"></i> Vận chuyển</a></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="even">
                            <td>1</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=349&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3152</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=349&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Thanh Tùng</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - Phòng KD2_TùngNT</p>
                            </td>
                            <td>80</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=86&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=86&amp;relatedUserId=86&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=86&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">3</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=86&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">14</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=86&amp;status=1">7</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=86&amp;status=1">7</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=349">8</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=86&amp;status=1">63.360.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=86&amp;status=1">63.360.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=86&amp;status=3">83.280.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=349&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">40.530.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=349&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">15.390.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=349&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">25.140.000</a>
                            </td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=86&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">1.559.250</a>
                            </td>
                        </tr>
                        <tr class="">
                            <td>2</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10653&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9442</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10653&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Tiến Đạt</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - Phòng KD2_TùngNT</p>
                            </td>
                            <td>12</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8250&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">10</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8250&amp;relatedUserId=8250&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">19</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8250&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">49</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8250&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">13</a>
                            </td>
                            <td class="colNumber">26,53%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8250&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">11</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8250&amp;status=1">14</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8250&amp;status=1">13</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=10653">15</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8250&amp;status=1">82.950.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8250&amp;status=1">50.550.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8250&amp;status=3">77.950.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10653&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">60.740.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10653&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">48.320.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10653&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.520.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10653&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6.000.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10653&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3.900.000</a>
                            </td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=8250&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">1.016.250</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td>3</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1493&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">0189</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1493&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phan
                                    Quỳnh Hương</a></td>
                            <td>
                                <p style="color:green;">Phòng CSGH</p>
                            </td>
                            <td>127</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=1096&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=1096&amp;relatedUserId=1096&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=1096&amp;status=1">6</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=1096&amp;status=1">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=1493">8</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=1096&amp;status=1">57.706.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=1096&amp;status=1">57.706.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=1096&amp;status=3">69.586.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1493&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">61.858.400</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1493&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">40.866.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1493&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.390.400</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1493&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">19.602.000</a>
                            </td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8427&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7471</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8427&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                    Kim Ngân</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Nhóm KD3_NgânTK</p>
                            </td>
                            <td>37</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=6090&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=6090&amp;relatedUserId=6090&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=6090&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">25</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=6090&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">2</a>
                            </td>
                            <td class="colNumber">8%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=6090&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6090&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6090&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=8427">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6090&amp;status=1">4.200.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6090&amp;status=1">4.200.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6090&amp;status=3">67.560.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8427&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">37.680.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8427&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">32.580.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8427&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3.300.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8427&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.200.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8427&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">600.000</a>
                            </td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=6090&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">1.500</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td>5</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8509&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7553</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8509&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Thị Hiền</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - KD16_TungNH</p>
                            </td>
                            <td>36</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=6172&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">21</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=6172&amp;relatedUserId=6172&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">30</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=6172&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">64</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=6172&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">7</a>
                            </td>
                            <td class="colNumber">10,94%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=6172&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6172&amp;status=1">15</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6172&amp;status=1">19</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=8509">20</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6172&amp;status=1">66.570.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6172&amp;status=1">66.570.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6172&amp;status=3">67.170.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8509&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">50.241.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8509&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">28.100.500</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8509&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">17.325.500</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8509&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.140.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8509&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3.675.000</a>
                            </td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=6172&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">339.750</a>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9503&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8396</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9503&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Anh Tuấn</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - Phòng KD5_AnhNX</p>
                            </td>
                            <td>27</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=7137&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7137&amp;relatedUserId=7137&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7137&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">44</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7137&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">7</a>
                            </td>
                            <td class="colNumber">15,91%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7137&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7137&amp;status=1">14</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7137&amp;status=1">17</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=9503">20</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7137&amp;status=1">67.800.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7137&amp;status=1">61.800.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7137&amp;status=3">61.200.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9503&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">57.150.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9503&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">34.056.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9503&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9.294.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9503&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.800.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9503&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">12.000.000</a>
                            </td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=7137&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">119.625</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td>7</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10571&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9362</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10571&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Khánh Vinh</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - Phòng KD4_TrườngVV</p>
                            </td>
                            <td>14</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8166&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">7</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8166&amp;relatedUserId=8166&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">15</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8166&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">12</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8166&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">10</a>
                            </td>
                            <td class="colNumber">83,33%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8166&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8166&amp;status=1">13</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8166&amp;status=1">14</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=10571">12</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8166&amp;status=1">38.300.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8166&amp;status=1">24.700.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8166&amp;status=3">60.980.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10571&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">53.348.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10571&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">50.598.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10571&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.200.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10571&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.550.000</a>
                            </td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10145&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8981</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10145&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                    Thị Ngọc Quyền</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Nhóm KD3_NgânTK</p>
                            </td>
                            <td>20</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=7753&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">21</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7753&amp;relatedUserId=7753&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">289</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7753&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">277</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7753&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">11</a>
                            </td>
                            <td class="colNumber">3,97%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7753&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">9</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7753&amp;status=1">8</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7753&amp;status=1">11</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=10145">9</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7753&amp;status=1">101.560.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7753&amp;status=1">101.560.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7753&amp;status=3">56.800.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10145&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">44.348.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10145&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">37.748.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10145&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">600.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10145&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6.000.000</a>
                            </td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=7753&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">30.375</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td>9</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10098&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8949</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10098&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Hoàng
                                    Tiến Cường</a></td>
                            <td>
                                <p style="color:green;">Dự án Wehelp</p>
                            </td>
                            <td>21</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=7708&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7708&amp;relatedUserId=7708&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">2</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7708&amp;status=1">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7708&amp;status=1">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=10098">6</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7708&amp;status=1">42.240.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7708&amp;status=1">42.240.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7708&amp;status=3">55.440.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10098&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">55.440.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10098&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">55.440.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10746&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9517</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10746&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Hoàng Giang</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - KD11_NganLTT</p>
                            </td>
                            <td>12</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8343&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8343&amp;relatedUserId=8343&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">9</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8343&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">26</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8343&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">7</a>
                            </td>
                            <td class="colNumber">26,92%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8343&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8343&amp;status=1">6</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8343&amp;status=1">8</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=10746">8</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8343&amp;status=1">70.206.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8343&amp;status=1">52.806.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8343&amp;status=3">52.806.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10746&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">19.016.040</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10746&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">16.016.040</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10746&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3.000.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=8343&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">112.500</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td>11</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10701&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9479</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10701&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lê
                                    Thúy Quỳnh</a></td>
                            <td>
                                <p style="color:green;">Sale Marketing</p>
                            </td>
                            <td>13</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8298&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8298&amp;relatedUserId=8298&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">13</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8298&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">6</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8298&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">7</a>
                            </td>
                            <td class="colNumber">116,67%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8298&amp;status=1">6</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8298&amp;status=1">8</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=10701">11</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8298&amp;status=1">88.400.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8298&amp;status=1">50.550.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8298&amp;status=3">52.750.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10701&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">38.498.500</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10701&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">35.698.500</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10701&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">300.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10701&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.500.000</a>
                            </td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=359&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">0671</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=359&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Vũ
                                    Văn Trường</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - Phòng KD4_TrườngVV</p>
                            </td>
                            <td>70</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=137&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=137&amp;relatedUserId=137&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">12</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=137&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">17</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=137&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">5</a>
                            </td>
                            <td class="colNumber">29,41%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=137&amp;status=1">9</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=137&amp;status=1">10</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=359">13</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=137&amp;status=1">38.625.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=137&amp;status=1">31.425.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=137&amp;status=3">51.585.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=359&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">36.683.450</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=359&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">11.362.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=359&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.710.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=359&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7.536.450</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=359&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">16.075.000</a>
                            </td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>13</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8171&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7226</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8171&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Đức Kiên</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - Phòng KD2_TùngNT</p>
                            </td>
                            <td>39</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=5836&amp;relatedUserId=5836&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=5836&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">50</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=5836&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">14</a>
                            </td>
                            <td class="colNumber">28%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=5836&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">11</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=5836&amp;status=1">6</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=5836&amp;status=1">13</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=8171">7</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=5836&amp;status=1">108.060.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=5836&amp;status=1">49.080.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=5836&amp;status=3">46.080.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8171&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">40.335.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8171&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.595.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8171&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">29.640.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8171&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5.700.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8171&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.400.000</a>
                            </td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=5836&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">352.500</a>
                            </td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1075&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4062</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1075&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Hứa
                                    Thị Mai Ngân</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Phòng KD1_NgânHTM</p>
                            </td>
                            <td>69</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=799&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=799&amp;relatedUserId=799&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=799&amp;status=1">7</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=799&amp;status=1">9</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=1075">8</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=799&amp;status=1">51.600.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=799&amp;status=1">45.600.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=799&amp;status=3">45.600.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1075&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">40.080.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1075&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">14.520.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1075&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8.825.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1075&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">14.335.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1075&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.400.000</a>
                            </td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>15</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11047&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9906</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11047&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Viết Lâm</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Phòng KD8_LâmNV</p>
                            </td>
                            <td></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8654&amp;relatedUserId=8654&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8654&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8654&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8654&amp;status=1">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8654&amp;status=1">6</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11047">11</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8654&amp;status=1">8.800.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8654&amp;status=1">8.800.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8654&amp;status=3">44.800.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11047&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">53.437.500</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11047&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">30.000.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11047&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">12.337.500</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11047&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6.600.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11047&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4.500.000</a>
                            </td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=8654&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">135.750</a>
                            </td>
                        </tr>
                        <tr>
                            <td>16</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9521&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8413</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9521&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                    Văn Thành</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - ThanhTV_Phát triển đối tác
                                </p>
                            </td>
                            <td>27</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=7155&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7155&amp;relatedUserId=7155&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">9</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7155&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">7</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7155&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">2</a>
                            </td>
                            <td class="colNumber">28,57%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7155&amp;status=1">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7155&amp;status=1">6</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=9521">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7155&amp;status=1">35.400.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7155&amp;status=1">35.400.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7155&amp;status=3">40.000.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9521&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">17.716.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9521&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10.420.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9521&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7.296.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>17</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10265&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9100</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10265&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Vũ
                                    Thị Hoa</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - Phòng KD3_HuyPV</p>
                            </td>
                            <td>18</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=7870&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">32</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7870&amp;relatedUserId=7870&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">56</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7870&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">80</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7870&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">4</a>
                            </td>
                            <td class="colNumber">5%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7870&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7870&amp;status=1">9</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7870&amp;status=1">11</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=10265">9</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7870&amp;status=1">38.928.400</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7870&amp;status=1">33.428.400</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7870&amp;status=3">39.428.400</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10265&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">27.419.976</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10265&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">19.220.976</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10265&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6.159.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10265&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.040.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=7870&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">146.250</a>
                            </td>
                        </tr>
                        <tr>
                            <td>18</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9646&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8520</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9646&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Quốc Gia Thịnh</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Nhóm KD4_ThịnhNQG</p>
                            </td>
                            <td>26</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=7277&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">190</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7277&amp;relatedUserId=7277&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">213</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7277&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">237</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7277&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">8</a>
                            </td>
                            <td class="colNumber">3,38%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7277&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">10</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7277&amp;status=1">6</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7277&amp;status=1">12</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=9646">10</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7277&amp;status=1">69.301.800</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7277&amp;status=1">38.231.800</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7277&amp;status=3">38.231.800</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9646&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">24.958.500</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9646&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">15.427.500</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9646&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4.225.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9646&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">506.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9646&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4.800.000</a>
                            </td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=7277&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">13.500</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td>19</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8453&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7497</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8453&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Ngô
                                    Hữu Tình</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - Phòng KD2_TùngNT</p>
                            </td>
                            <td>37</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=6115&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">11</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=6115&amp;relatedUserId=6115&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">24</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=6115&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">30</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=6115&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">15</a>
                            </td>
                            <td class="colNumber">50%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=6115&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">15</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6115&amp;status=1">9</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6115&amp;status=1">10</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=8453">11</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6115&amp;status=1">29.400.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6115&amp;status=1">29.400.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6115&amp;status=3">37.800.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8453&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">21.444.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8453&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7.200.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8453&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">12.144.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8453&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.100.000</a>
                            </td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=6115&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">744.750</a>
                            </td>
                        </tr>
                        <tr>
                            <td>20</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11229&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10076</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11229&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trịnh
                                    Xuân Tài</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Sale Marketing</p>
                            </td>
                            <td></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8830&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">68</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8830&amp;relatedUserId=8830&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">99</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8830&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">84</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8830&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">3</a>
                            </td>
                            <td class="colNumber">3,57%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8830&amp;status=1">9</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8830&amp;status=1">8</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11229">9</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8830&amp;status=1">62.900.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8830&amp;status=1">34.500.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8830&amp;status=3">33.400.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11229&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">18.737.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11229&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">16.460.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11229&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.277.000</a>
                            </td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>21</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10879&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9650</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10879&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Dương
                                    Thị Thu</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - Phòng KD2_TùngNT</p>
                            </td>
                            <td>10</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8485&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8485&amp;relatedUserId=8485&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">18</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8485&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">54</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8485&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">6</a>
                            </td>
                            <td class="colNumber">11,11%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8485&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">10</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8485&amp;status=1">6</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8485&amp;status=1">7</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=10879">7</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8485&amp;status=1">34.050.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8485&amp;status=1">29.250.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8485&amp;status=3">33.150.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10879&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">21.975.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10879&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.100.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10879&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">16.950.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10879&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.400.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10879&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">525.000</a>
                            </td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>22</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11132&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9984</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11132&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Văn Long</a></td>
                            <td>
                                <p style="color:green;">Phòng dịch vụ SEO GG MAPS</p>
                            </td>
                            <td>4</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8737&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8737&amp;relatedUserId=8737&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">6</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8737&amp;status=1">8</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8737&amp;status=1">17</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11132">20</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8737&amp;status=1">30.785.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8737&amp;status=1">30.235.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8737&amp;status=3">32.985.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11132&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">30.758.850</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11132&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">23.600.850</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11132&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7.158.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>23</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8893&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7923</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8893&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Đạt Trung</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - Phòng KD4_TrườngVV</p>
                            </td>
                            <td>33</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=6552&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=6552&amp;relatedUserId=6552&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">11</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=6552&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">20</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=6552&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">8</a>
                            </td>
                            <td class="colNumber">40%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6552&amp;status=1">8</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6552&amp;status=1">10</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=8893">11</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6552&amp;status=1">26.500.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6552&amp;status=1">25.500.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6552&amp;status=3">32.700.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8893&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">14.945.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8893&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.680.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8893&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4.110.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8893&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3.000.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8893&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5.155.000</a>
                            </td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=6552&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">84.000</a>
                            </td>
                        </tr>
                        <tr>
                            <td>24</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=937&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1308</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=937&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phạm
                                    Văn Phú</a></td>
                            <td>
                                <p style="color:green;">Phòng giám đốc</p>
                            </td>
                            <td>162</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=659&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=659&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=937">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=659&amp;status=1">31.460.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=659&amp;status=1">31.460.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=659&amp;status=3">31.460.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=937&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">28.820.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=937&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">28.820.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>25</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8175&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7230</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8175&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Hữu Tùng</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - KD16_TungNH</p>
                            </td>
                            <td>39</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=5840&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=5840&amp;relatedUserId=5840&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">2</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=5840&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">3</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=5840&amp;status=1">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=5840&amp;status=1">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=8175">6</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=5840&amp;status=1">17.500.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=5840&amp;status=1">17.500.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=5840&amp;status=3">31.300.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8175&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">11.245.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8175&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">300.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8175&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10.945.000</a>
                            </td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=5840&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">184.500</a>
                            </td>
                        </tr>
                        <tr>
                            <td>26</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8779&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7813</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8779&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Ngô
                                    Tiến Tùng</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - KD17_TùngNT</p>
                            </td>
                            <td>34</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=6440&amp;relatedUserId=6440&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=6440&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">7</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=6440&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">3</a>
                            </td>
                            <td class="colNumber">42,86%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6440&amp;status=1">8</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6440&amp;status=1">9</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=8779">9</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6440&amp;status=1">33.900.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6440&amp;status=1">29.700.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6440&amp;status=3">29.700.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8779&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">17.360.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8779&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6.300.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8779&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6.760.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8779&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">700.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8779&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3.600.000</a>
                            </td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=6440&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">103.500</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td>27</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9225&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8158</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9225&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Huyền Trang</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - Phòng KD5_AnhNX</p>
                            </td>
                            <td>30</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=6863&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=6863&amp;relatedUserId=6863&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=6863&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">24</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=6863&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">9</a>
                            </td>
                            <td class="colNumber">37,5%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=6863&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">10</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6863&amp;status=1">6</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6863&amp;status=1">8</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=9225">6</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6863&amp;status=1">32.730.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6863&amp;status=1">32.730.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6863&amp;status=3">28.530.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9225&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">16.710.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9225&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">12.630.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9225&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">480.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9225&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3.600.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=6863&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">203.625</a>
                            </td>
                        </tr>
                        <tr>
                            <td>28</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11082&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9935</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11082&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Thanh Vân</a></td>
                            <td>
                                <p style="color:green;">Vchat</p>
                            </td>
                            <td>5</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8687&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">8</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8687&amp;relatedUserId=8687&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">10</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8687&amp;status=1">16</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8687&amp;status=1">16</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11082">16</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8687&amp;status=1">28.402.002</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8687&amp;status=1">28.402.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8687&amp;status=3">28.402.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11082&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">18.504.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11082&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">14.786.100</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11082&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3.717.900</a>
                            </td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>29</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9915&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8773</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9915&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lê
                                    Quang Hùng</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - KD8_CôngND</p>
                            </td>
                            <td>23</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=7529&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7529&amp;relatedUserId=7529&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7529&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7529&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">5</a>
                            </td>
                            <td class="colNumber">250%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7529&amp;status=1">8</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7529&amp;status=1">9</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=9915">9</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7529&amp;status=1">28.340.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7529&amp;status=1">28.340.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7529&amp;status=3">28.340.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9915&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">22.298.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9915&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">16.028.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9915&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">900.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9915&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5.370.000</a>
                            </td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=7529&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">228.750</a>
                            </td>
                        </tr>
                        <tr>
                            <td>30</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10212&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9047</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10212&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Đỗ
                                    Thị Ngọc Hân</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Phòng KD1_NgânHTM</p>
                            </td>
                            <td>19</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=7818&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7818&amp;relatedUserId=7818&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7818&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">34</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7818&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">7</a>
                            </td>
                            <td class="colNumber">20,59%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7818&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7818&amp;status=1">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7818&amp;status=1">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=10212">6</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7818&amp;status=1">28.500.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7818&amp;status=1">28.500.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7818&amp;status=3">27.300.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10212&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">23.250.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10212&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">17.580.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10212&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5.670.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=7818&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">34.500</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td>31</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1289&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2497</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1289&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Đỗ
                                    Văn Thảo</a></td>
                            <td>
                                <p style="color:green;">Phòng KD 8</p>
                            </td>
                            <td>85</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=1004&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=1004&amp;relatedUserId=1004&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">2</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=1004&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=1004&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=1289">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=1004&amp;status=1">37.620.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=1004&amp;status=1">9.900.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=1004&amp;status=3">26.400.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1289&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">26.400.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1289&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">26.400.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>32</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=715&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4375</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=715&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Xuân Anh</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - Phòng KD5_AnhNX</p>
                            </td>
                            <td>65</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=447&amp;relatedUserId=447&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=447&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=447&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=447&amp;status=1">7</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=447&amp;status=1">12</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=715">9</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=447&amp;status=1">68.250.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=447&amp;status=1">23.850.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=447&amp;status=3">26.250.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=715&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">14.826.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=715&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5.046.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=715&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9.780.000</a>
                            </td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>33</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=4760&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3963</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=4760&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phạm
                                    Phương Thanh</a></td>
                            <td>
                                <p style="color:green;">Vchat</p>
                            </td>
                            <td>50</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=2895&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=2895&amp;relatedUserId=2895&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">10</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=2895&amp;status=1">7</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=2895&amp;status=1">10</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=4760">12</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=2895&amp;status=1">27.804.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=2895&amp;status=1">17.832.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=2895&amp;status=3">24.588.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=4760&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">17.274.400</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=4760&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.222.900</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=4760&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">16.051.500</a>
                            </td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>34</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10877&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9648</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10877&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lê
                                    Thị Ly Ly</a></td>
                            <td>
                                <p style="color:green;">Marketing</p>
                            </td>
                            <td>10</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8483&amp;relatedUserId=8483&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8483&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8483&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">2</a>
                            </td>
                            <td class="colNumber">100%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8483&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8483&amp;status=1">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=10877">9</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8483&amp;status=1">34.900.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8483&amp;status=1">8.500.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8483&amp;status=3">24.000.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10877&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">11.662.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10877&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10.672.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10877&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">990.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>35</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=364&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4396</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=364&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Diệu Linh</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - Phòng KD5_AnhNX</p>
                            </td>
                            <td>67</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=147&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">25</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=147&amp;relatedUserId=147&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">53</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=147&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">166</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=147&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">4</a>
                            </td>
                            <td class="colNumber">2,41%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=147&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=147&amp;status=1">6</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=147&amp;status=1">7</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=364">7</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=147&amp;status=1">34.730.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=147&amp;status=1">34.730.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=147&amp;status=3">22.730.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=364&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">19.200.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=364&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">15.600.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=364&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">360.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=364&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3.240.000</a>
                            </td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=147&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">375</a>
                            </td>
                        </tr>
                        <tr>
                            <td>36</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=5442&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4822</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=5442&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Hữu Điệp</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - KD7_ĐiệpNH</p>
                            </td>
                            <td>61</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=906&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=906&amp;relatedUserId=906&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=906&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">2</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=906&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=906&amp;status=1">8</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=906&amp;status=1">11</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=5442">12</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=906&amp;status=1">52.710.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=906&amp;status=1">29.910.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=906&amp;status=3">22.710.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=5442&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">19.902.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=5442&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3.900.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=5442&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9.102.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=5442&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.250.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=5442&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4.650.000</a>
                            </td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>37</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11174&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10025</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11174&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Đào
                                    Thị Hồng Nhung</a></td>
                            <td>
                                <p style="color:green;">Phòng dịch vụ SEO GG MAPS</p>
                            </td>
                            <td>2</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8777&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">10</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8777&amp;relatedUserId=8777&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">16</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8777&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8777&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">2</a>
                            </td>
                            <td class="colNumber">200%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8777&amp;status=1">17</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8777&amp;status=1">21</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11174">20</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8777&amp;status=1">27.700.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8777&amp;status=1">20.850.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8777&amp;status=3">22.500.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11174&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">18.940.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11174&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10.683.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11174&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8.257.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>38</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=2097&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">0826</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=2097&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Tạ
                                    Thị Thùy</a></td>
                            <td>
                                <p style="color:green;">Phòng KD 4</p>
                            </td>
                            <td>99</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=1249&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=1249&amp;relatedUserId=1249&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">2</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=1249&amp;status=1">7</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=1249&amp;status=1">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=2097">9</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=1249&amp;status=1">11.775.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=1249&amp;status=1">11.774.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=1249&amp;status=3">21.038.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=2097&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">22.325.600</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=2097&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10.574.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=2097&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.653.600</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=2097&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10.098.000</a>
                            </td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>39</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11092&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9945</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11092&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Đỗ
                                    Quang Trung</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - KD16_TungNH</p>
                            </td>
                            <td>5</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8697&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8697&amp;relatedUserId=8697&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8697&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">28</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8697&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">9</a>
                            </td>
                            <td class="colNumber">32,14%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8697&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8697&amp;status=1">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8697&amp;status=1">6</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11092">8</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8697&amp;status=1">44.950.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8697&amp;status=1">34.150.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8697&amp;status=3">20.650.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11092&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">29.381.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11092&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">15.065.500</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11092&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5.500</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11092&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7.560.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11092&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6.750.000</a>
                            </td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=8697&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">17.250</a>
                            </td>
                        </tr>
                        <tr>
                            <td>40</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9510&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8402</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9510&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Thị Anh Thư</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Nhóm KD9_ThưNTA</p>
                            </td>
                            <td>27</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=7144&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7144&amp;relatedUserId=7144&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">8</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7144&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">9</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7144&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">1</a>
                            </td>
                            <td class="colNumber">11,11%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7144&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7144&amp;status=1">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7144&amp;status=1">6</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=9510">6</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7144&amp;status=1">28.860.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7144&amp;status=1">24.300.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7144&amp;status=3">20.650.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9510&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">22.809.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9510&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">15.009.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9510&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7.800.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=7144&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">124.125</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td>41</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9630&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8504</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9630&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Thành Trung</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - Phòng KD3_HuyPV</p>
                            </td>
                            <td>26</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=7261&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7261&amp;relatedUserId=7261&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">2</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7261&amp;status=1">7</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7261&amp;status=1">6</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=9630">10</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7261&amp;status=1">11.434.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7261&amp;status=1">11.434.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7261&amp;status=3">20.634.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9630&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">11.450.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9630&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.610.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9630&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.440.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9630&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4.400.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9630&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3.000.000</a>
                            </td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=7261&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">142.875</a>
                            </td>
                        </tr>
                        <tr>
                            <td>42</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10500&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9294</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10500&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Thái
                                    Chí Toàn</a></td>
                            <td>
                                <p style="color:green;">Phòng KD10</p>
                            </td>
                            <td>15</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8096&amp;relatedUserId=8096&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">2</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8096&amp;status=1">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8096&amp;status=1">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=10500">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8096&amp;status=1">20.300.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8096&amp;status=1">20.300.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8096&amp;status=3">20.300.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10500&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">20.300.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10500&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">500.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10500&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">19.800.000</a>
                            </td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>43</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9756&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8618</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9756&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Hoàng
                                    Thùy Linh</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - Phòng KD5_AnhNX</p>
                            </td>
                            <td>25</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=7379&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7379&amp;relatedUserId=7379&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7379&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">18</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7379&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">7</a>
                            </td>
                            <td class="colNumber">38,89%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7379&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">9</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7379&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7379&amp;status=1">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=9756">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7379&amp;status=1">19.500.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7379&amp;status=1">18.000.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7379&amp;status=3">19.440.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9756&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">13.680.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9756&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.680.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9756&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6.000.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9756&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6.000.000</a>
                            </td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=7379&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">1.500</a>
                            </td>
                        </tr>
                        <tr>
                            <td>44</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10982&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9752</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10982&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Thị Phương Loan</a></td>
                            <td>
                                <p style="color:green;">Vchat</p>
                            </td>
                            <td>8</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8587&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8587&amp;relatedUserId=8587&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">4</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8587&amp;status=1">8</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8587&amp;status=1">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=10982">8</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8587&amp;status=1">13.708.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8587&amp;status=1">13.708.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8587&amp;status=3">18.889.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10982&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">18.294.700</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10982&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">18.294.700</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>45</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11273&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10108</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11273&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lê
                                    Tấn Anh Trung</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Sale Marketing</p>
                            </td>
                            <td>1</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8874&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">103</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8874&amp;relatedUserId=8874&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">126</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8874&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">129</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8874&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">2</a>
                            </td>
                            <td class="colNumber">1,55%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8874&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8874&amp;status=1">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11273">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8874&amp;status=1">13.200.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8874&amp;status=1">13.200.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8874&amp;status=3">18.700.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11273&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">14.201.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11273&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">14.201.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>46</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10769&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9540</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10769&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Thị Hiếu</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Nhóm KD5_LiêmNT</p>
                            </td>
                            <td>12</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8371&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8371&amp;relatedUserId=8371&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">11</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8371&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">119</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8371&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">5</a>
                            </td>
                            <td class="colNumber">4,2%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8371&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8371&amp;status=1">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8371&amp;status=1">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=10769">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8371&amp;status=1">22.200.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8371&amp;status=1">22.200.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8371&amp;status=3">18.600.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10769&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">17.880.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10769&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">17.880.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>47</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9181&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8117</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9181&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Sơn Hà</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - Phòng KD5_AnhNX</p>
                            </td>
                            <td>31</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=6819&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=6819&amp;relatedUserId=6819&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=6819&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">9</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=6819&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6819&amp;status=1">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6819&amp;status=1">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=9181">7</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6819&amp;status=1">20.600.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6819&amp;status=1">18.600.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6819&amp;status=3">18.600.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9181&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">13.799.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9181&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.375.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9181&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5.400.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9181&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7.024.000</a>
                            </td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=6819&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">159.750</a>
                            </td>
                        </tr>
                        <tr>
                            <td>48</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11130&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9982</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11130&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Thị Kiều Mỹ</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Nhóm KD9_ThưNTA</p>
                            </td>
                            <td>4</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8735&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8735&amp;relatedUserId=8735&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8735&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">94</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8735&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">7</a>
                            </td>
                            <td class="colNumber">7,45%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8735&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8735&amp;status=1">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8735&amp;status=1">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11130">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8735&amp;status=1">29.050.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8735&amp;status=1">18.050.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8735&amp;status=3">18.050.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11130&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">14.997.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11130&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6.392.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11130&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8.605.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>49</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=304&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2965</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=304&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Viết Lâm</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - KD6_LâmVN</p>
                            </td>
                            <td>82</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=14&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=14&amp;status=1">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=14&amp;status=1">7</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=304">10</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=14&amp;status=1">92.850.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=14&amp;status=1">92.850.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=14&amp;status=3">17.250.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>50</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10303&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9138</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10303&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Chu
                                    Văn Thảo</a></td>
                            <td>
                                <p style="color:green;">Phòng dịch vụ SEO GG MAPS</p>
                            </td>
                            <td>17</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=7906&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7906&amp;relatedUserId=7906&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7906&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">6</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7906&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7906&amp;status=1">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7906&amp;status=1">6</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=10303">109</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7906&amp;status=1">22.900.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7906&amp;status=1">9.950.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7906&amp;status=3">17.100.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10303&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">15.600.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10303&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">12.690.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10303&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.910.000</a>
                            </td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>51</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11089&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9942</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11089&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Huỳnh
                                    Ngọc Hải</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Nhóm KD9_ThưNTA</p>
                            </td>
                            <td>6</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8694&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8694&amp;relatedUserId=8694&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8694&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">10</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8694&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">4</a>
                            </td>
                            <td class="colNumber">40%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8694&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8694&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8694&amp;status=1">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11089">25</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8694&amp;status=1">16.470.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8694&amp;status=1">16.470.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8694&amp;status=3">17.020.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11089&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7.225.847</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11089&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7.225.847</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=8694&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">79.125</a>
                            </td>
                        </tr>
                        <tr>
                            <td>52</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9281&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8214</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9281&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trương
                                    Mạnh Tùng</a></td>
                            <td>
                                <p style="color:green;">Ecomcare</p>
                            </td>
                            <td>13</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=6919&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=6919&amp;relatedUserId=6919&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">2</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=6919&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6919&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6919&amp;status=1">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=9281">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6919&amp;status=1">17.000.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6919&amp;status=1">17.000.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6919&amp;status=3">17.000.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>53</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10070&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8922</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10070&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Hồ
                                    Tấn Hải</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Phòng KD8_LâmNV</p>
                            </td>
                            <td>22</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=7680&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">13</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7680&amp;relatedUserId=7680&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">31</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7680&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">71</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7680&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">18</a>
                            </td>
                            <td class="colNumber">25,35%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7680&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">9</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7680&amp;status=1">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7680&amp;status=1">6</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=10070">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7680&amp;status=1">22.000.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7680&amp;status=1">16.000.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7680&amp;status=3">16.000.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10070&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">14.296.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10070&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.880.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10070&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10.000.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10070&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.416.000</a>
                            </td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=7680&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">1.500</a>
                            </td>
                        </tr>
                        <tr>
                            <td>54</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10833&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9604</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10833&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Thanh Ngân</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - SEO GG MAPS</p>
                            </td>
                            <td>11</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8434&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">15</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8434&amp;relatedUserId=8434&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">16</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8434&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">21</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8434&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">2</a>
                            </td>
                            <td class="colNumber">9,52%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8434&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8434&amp;status=1">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8434&amp;status=1">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=10833">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8434&amp;status=1">17.600.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8434&amp;status=1">15.400.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8434&amp;status=3">15.400.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10833&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">15.004.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10833&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">15.004.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>55</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=951&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1601</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=951&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Hoàng Long</a></td>
                            <td>
                                <p style="color:green;">Phòng KD10</p>
                            </td>
                            <td>99</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=673&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=673&amp;relatedUserId=673&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">2</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=673&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=673&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=951">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=673&amp;status=1">16.040.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=673&amp;status=1">15.040.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=673&amp;status=3">15.040.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=951&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">15.040.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=951&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">15.040.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>56</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10319&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9154</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10319&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Ngô
                                    Trí Cường</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - KD17_TùngNT</p>
                            </td>
                            <td>17</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=7922&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7922&amp;relatedUserId=7922&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7922&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">38</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7922&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">7</a>
                            </td>
                            <td class="colNumber">18,42%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7922&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7922&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=10319">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7922&amp;status=1">14.800.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7922&amp;status=1">14.800.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7922&amp;status=3">14.800.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10319&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7.400.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10319&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4.100.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10319&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3.300.000</a>
                            </td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=7922&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">1.500</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td>57</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8000&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7068</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8000&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phạm
                                    Thị Thanh</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - KD10_ThanhPT</p>
                            </td>
                            <td>41</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=5668&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=5668&amp;relatedUserId=5668&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=5668&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">6</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=5668&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">8</a>
                            </td>
                            <td class="colNumber">133,33%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=5668&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=5668&amp;status=1">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=5668&amp;status=1">9</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=8000">6</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=5668&amp;status=1">22.270.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=5668&amp;status=1">14.710.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=5668&amp;status=3">14.710.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8000&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8.945.500</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8000&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">500.500</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8000&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.665.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8000&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6.780.000</a>
                            </td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=5668&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">7.875</a>
                            </td>
                        </tr>
                        <tr>
                            <td>58</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1160&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4827</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1160&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                    Hoàng Nhung</a></td>
                            <td>
                                <p style="color:green;">Phòng nhân sự - Nhanh.vn</p>
                            </td>
                            <td>61</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=878&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=878&amp;relatedUserId=878&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=878&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=878&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=1160">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=878&amp;status=1">14.400.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=878&amp;status=1">14.400.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=878&amp;status=3">14.400.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1160&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3.960.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1160&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">360.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1160&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3.600.000</a>
                            </td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>59</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1746&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">0452</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1746&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phạm
                                    Thị Thu Hằng</a></td>
                            <td>
                                <p style="color:green;">Phòng KD 6</p>
                            </td>
                            <td>111</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=1152&amp;relatedUserId=1152&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=1152&amp;status=1">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=1152&amp;status=1">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=1746">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=1152&amp;status=1">13.970.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=1152&amp;status=1">13.970.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=1152&amp;status=3">13.970.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1746&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">16.544.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1746&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">13.970.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1746&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.574.000</a>
                            </td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>60</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10564&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9356</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10564&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Cao
                                    Anh Cường</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - Phòng KD2_TùngNT</p>
                            </td>
                            <td>15</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8159&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8159&amp;relatedUserId=8159&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">9</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8159&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">27</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8159&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">18</a>
                            </td>
                            <td class="colNumber">66,67%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8159&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">10</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8159&amp;status=1">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8159&amp;status=1">10</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=10564">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8159&amp;status=1">27.840.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8159&amp;status=1">13.890.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8159&amp;status=3">13.890.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10564&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9.215.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10564&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5.420.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10564&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3.795.000</a>
                            </td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=8159&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">9.000</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td>61</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10180&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9015</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10180&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Huỳnh
                                    Diễm Thy</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Nhóm KD3_NgânTK</p>
                            </td>
                            <td>19</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=7785&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">12</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7785&amp;relatedUserId=7785&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">28</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7785&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">91</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7785&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">5</a>
                            </td>
                            <td class="colNumber">5,49%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7785&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7785&amp;status=1">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7785&amp;status=1">7</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=10180">8</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7785&amp;status=1">24.556.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7785&amp;status=1">20.200.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7785&amp;status=3">13.600.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10180&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">25.882.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10180&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">18.982.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10180&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3.300.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10180&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.200.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10180&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.400.000</a>
                            </td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=7785&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">69.750</a>
                            </td>
                        </tr>
                        <tr>
                            <td>62</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10354&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9188</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10354&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Bích Diệp</a></td>
                            <td>
                                <p style="color:green;">Phòng Dịch Vụ Khách Hàng</p>
                            </td>
                            <td>16</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=7955&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7955&amp;relatedUserId=7955&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7955&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">21</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7955&amp;status=1">15</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7955&amp;status=1">9</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=10354">17</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7955&amp;status=1">4.800.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7955&amp;status=1">4.800.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7955&amp;status=3">13.200.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10354&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8.670.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10354&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">810.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10354&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5.010.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10354&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.850.000</a>
                            </td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>63</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11246&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10091</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11246&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phạm
                                    Quang Minh</a></td>
                            <td>
                                <p style="color:green;">Sale Marketing</p>
                            </td>
                            <td>1</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8846&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">157</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8846&amp;relatedUserId=8846&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">177</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8846&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">169</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8846&amp;status=1">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8846&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11246">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8846&amp;status=1">8.800.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8846&amp;status=1">8.800.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8846&amp;status=3">13.200.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11246&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">12.012.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11246&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">12.012.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>64</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11110&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9962</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11110&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Đoàn
                                    Thị Hà</a></td>
                            <td>
                                <p style="color:green;">Sale Marketing</p>
                            </td>
                            <td>4</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8715&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">148</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8715&amp;relatedUserId=8715&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">201</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8715&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">160</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8715&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">1</a>
                            </td>
                            <td class="colNumber">0,63%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8715&amp;status=1">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8715&amp;status=1">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11110">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8715&amp;status=1">12.800.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8715&amp;status=1">12.800.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8715&amp;status=3">12.800.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11110&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5.960.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11110&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5.960.000</a>
                            </td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>65</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1257&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1412</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1257&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phan
                                    Vũ Như Quỳnh</a></td>
                            <td>
                                <p style="color:green;">Phòng KD 01</p>
                            </td>
                            <td>117</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=972&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=972&amp;relatedUserId=972&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">3</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=972&amp;status=1">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=972&amp;status=1">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=1257">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=972&amp;status=1">12.080.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=972&amp;status=1">12.080.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=972&amp;status=3">12.580.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1257&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">12.580.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1257&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">12.580.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>66</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7790&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6846</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7790&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Duy Hưng</a></td>
                            <td>
                                <p style="color:green;">Phòng KD10</p>
                            </td>
                            <td>45</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=5460&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=5460&amp;relatedUserId=5460&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">3</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=5460&amp;status=1">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=5460&amp;status=1">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=7790">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=5460&amp;status=1">4.360.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=5460&amp;status=1">4.360.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=5460&amp;status=3">12.280.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7790&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">12.280.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7790&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">12.280.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>67</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1159&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4754</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1159&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lại
                                    Thị Thúy Ngần</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - KD11_NganLTT</p>
                            </td>
                            <td>61</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=877&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=877&amp;relatedUserId=877&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=877&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">119</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=877&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">10</a>
                            </td>
                            <td class="colNumber">8,4%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=877&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=877&amp;status=1">6</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=877&amp;status=1">8</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=1159">8</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=877&amp;status=1">10.900.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=877&amp;status=1">10.900.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=877&amp;status=3">12.100.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1159&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9.820.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1159&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4.540.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1159&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.280.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1159&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.400.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1159&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">600.000</a>
                            </td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=877&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">279.000</a>
                            </td>
                        </tr>
                        <tr>
                            <td>68</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=430&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4120</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=430&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Thị Vân Anh</a></td>
                            <td>
                                <p style="color:green;">Tester</p>
                            </td>
                            <td>69</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=430">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=61&amp;status=3">12.000.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=430&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6.000.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=430&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6.000.000</a>
                            </td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>69</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=369&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4221</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=369&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phạm
                                    Viết Huy</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - Phòng KD3_HuyPV</p>
                            </td>
                            <td>67</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=142&amp;status=1">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=142&amp;status=1">15</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=369">6</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=142&amp;status=1">93.000.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=142&amp;status=1">11.900.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=142&amp;status=3">11.900.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=369&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9.150.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=369&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.500.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=369&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.400.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=369&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5.250.000</a>
                            </td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=142&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">165.375</a>
                            </td>
                        </tr>
                        <tr>
                            <td>70</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9481&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8375</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9481&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trịnh
                                    Thị Phương Nhi</a></td>
                            <td>
                                <p style="color:green;">Phòng KD 01</p>
                            </td>
                            <td>28</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7114&amp;relatedUserId=7114&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7114&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7114&amp;status=1">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=9481">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7114&amp;status=1">16.280.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7114&amp;status=1">11.880.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7114&amp;status=3">11.880.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9481&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">11.880.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9481&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3.960.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9481&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7.920.000</a>
                            </td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>71</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11048&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9900</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11048&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lê
                                    Thị Nam</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Sale Marketing</p>
                            </td>
                            <td>8</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8655&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">78</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8655&amp;relatedUserId=8655&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">144</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8655&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">201</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8655&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">5</a>
                            </td>
                            <td class="colNumber">2,49%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8655&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">10</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8655&amp;status=1">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8655&amp;status=1">6</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11048">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8655&amp;status=1">31.678.900</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8655&amp;status=1">11.878.900</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8655&amp;status=3">11.878.900</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11048&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10.648.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11048&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10.648.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>72</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11122&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9974</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11122&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phạm
                                    Thị Nguyệt</a></td>
                            <td>
                                <p style="color:green;">Sale Marketing</p>
                            </td>
                            <td>4</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8727&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">98</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8727&amp;relatedUserId=8727&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">116</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8727&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">120</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8727&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">1</a>
                            </td>
                            <td class="colNumber">0,83%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8727&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8727&amp;status=1">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11122">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8727&amp;status=1">36.000.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8727&amp;status=1">18.000.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8727&amp;status=3">11.000.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11122&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6.182.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11122&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4.158.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11122&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.024.000</a>
                            </td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>73</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=341&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1241</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=341&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Đoàn
                                    Thị Minh Hương</a></td>
                            <td>
                                <p style="color:green;">Chăm sóc đơn hàng - HươngĐTM</p>
                            </td>
                            <td>100</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=17&amp;status=1">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=17&amp;status=1">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=341">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=17&amp;status=1">10.900.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=17&amp;status=1">10.900.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=17&amp;status=3">10.900.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=341&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8.920.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=341&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5.920.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=341&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">600.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=341&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.400.000</a>
                            </td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>74</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9631&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8505</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9631&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lê
                                    Trung Đức</a></td>
                            <td>
                                <p style="color:green;">Giám đốc dự án</p>
                            </td>
                            <td>26</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7262&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7262&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=9631">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7262&amp;status=1">7.800.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7262&amp;status=1">7.800.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7262&amp;status=3">10.800.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9631&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7.170.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9631&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5.850.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9631&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.320.000</a>
                            </td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>75</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10593&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9384</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10593&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phan
                                    Ngọc Ý Linh</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Phòng KD1_NgânHTM</p>
                            </td>
                            <td>15</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8188&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8188&amp;relatedUserId=8188&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8188&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">138</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8188&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">8</a>
                            </td>
                            <td class="colNumber">5,8%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8188&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8188&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8188&amp;status=1">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=10593">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8188&amp;status=1">10.750.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8188&amp;status=1">10.750.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8188&amp;status=3">10.750.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10593&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9.116.500</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10593&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9.116.500</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=8188&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">255.750</a>
                            </td>
                        </tr>
                        <tr>
                            <td>76</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8489&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7533</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8489&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Diệu Linh</a></td>
                            <td>
                                <p style="color:green;">Phòng Dịch Vụ Khách Hàng</p>
                            </td>
                            <td>37</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=6152&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=6152&amp;relatedUserId=6152&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=6152&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">3</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6152&amp;status=1">14</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6152&amp;status=1">14</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=8489">19</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6152&amp;status=1">10.350.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6152&amp;status=1">10.350.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6152&amp;status=3">10.650.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8489&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">12.255.568</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8489&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4.677.568</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8489&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5.028.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8489&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.550.000</a>
                            </td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=6152&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">246.000</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td>77</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9478&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8372</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9478&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lê
                                    Quốc Duy</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Sale Marketing</p>
                            </td>
                            <td>28</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=7111&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">80</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7111&amp;relatedUserId=7111&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">130</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7111&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">80</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7111&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">6</a>
                            </td>
                            <td class="colNumber">7,5%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7111&amp;status=1">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7111&amp;status=1">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=9478">6</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7111&amp;status=1">12.670.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7111&amp;status=1">10.470.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7111&amp;status=3">10.470.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9478&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6.650.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9478&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5.385.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9478&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.265.000</a>
                            </td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=7111&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">8.250</a>
                            </td>
                        </tr>
                        <tr>
                            <td>78</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10919&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9689</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10919&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                    Hữu Chiến</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - KD17_TùngNT</p>
                            </td>
                            <td>9</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8525&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8525&amp;relatedUserId=8525&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">19</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8525&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">39</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8525&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">10</a>
                            </td>
                            <td class="colNumber">25,64%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8525&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">9</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8525&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8525&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=10919">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8525&amp;status=1">6.850.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8525&amp;status=1">6.850.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8525&amp;status=3">10.360.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10919&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4.539.700</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10919&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.649.700</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10919&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.890.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=8525&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">750</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td>79</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10850&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9621</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10850&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lâm
                                    Viết Hùng</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - KD17_TùngNT</p>
                            </td>
                            <td>10</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8454&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">6</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8454&amp;relatedUserId=8454&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">29</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8454&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">60</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8454&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">10</a>
                            </td>
                            <td class="colNumber">16,67%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8454&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8454&amp;status=1">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=10850">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8454&amp;status=1">10.250.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8454&amp;status=1">10.250.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8454&amp;status=3">10.250.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10850&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">13.740.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10850&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9.392.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10850&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3.648.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10850&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">700.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=8454&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">30.750</a>
                            </td>
                        </tr>
                        <tr>
                            <td>80</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9702&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8570</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9702&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">PHAN
                                    THỊ THU THẢO</a></td>
                            <td>
                                <p style="color:green;">Chăm sóc khách hàng - UyênTL</p>
                            </td>
                            <td>26</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=7333&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">374</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7333&amp;relatedUserId=7333&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">376</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7333&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">5</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7333&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7333&amp;status=1">12</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7333&amp;status=1">13</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=9702">13</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7333&amp;status=1">9.900.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7333&amp;status=1">9.900.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7333&amp;status=3">9.900.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9702&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5.430.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9702&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.205.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9702&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">900.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9702&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.325.000</a>
                            </td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>81</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11239&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10085</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11239&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Huỳnh Anh Thư</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Sale Marketing</p>
                            </td>
                            <td>1</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8839&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">182</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8839&amp;relatedUserId=8839&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">226</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8839&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">219</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8839&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">3</a>
                            </td>
                            <td class="colNumber">1,37%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8839&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">8</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8839&amp;status=1">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8839&amp;status=1">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11239">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8839&amp;status=1">9.350.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8839&amp;status=1">9.350.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8839&amp;status=3">9.350.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11239&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8.508.500</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11239&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8.508.500</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>82</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11295&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10130</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11295&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                    Quang Nhật</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - Phòng KD4_TrườngVV</p>
                            </td>
                            <td>0</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8897&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8897&amp;relatedUserId=8897&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">7</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8897&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8897&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">1</a>
                            </td>
                            <td class="colNumber">25%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8897&amp;status=1">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8897&amp;status=1">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11295">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8897&amp;status=1">24.100.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8897&amp;status=1">15.900.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8897&amp;status=3">9.300.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11295&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7.317.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11295&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7.317.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>83</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11260&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10095</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11260&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Danh Công</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - Phòng KD2_TùngNT</p>
                            </td>
                            <td>1</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8860&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">17</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8860&amp;relatedUserId=8860&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">30</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8860&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">58</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8860&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">14</a>
                            </td>
                            <td class="colNumber">24,14%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8860&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">12</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8860&amp;status=1">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8860&amp;status=1">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11260">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8860&amp;status=1">9.250.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8860&amp;status=1">9.250.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8860&amp;status=3">9.250.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11260&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7.007.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11260&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7.007.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>84</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11231&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10078</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11231&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lê
                                    Tạ Tú Uyên</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - SEO GG MAPS</p>
                            </td>
                            <td>1</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8832&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">33</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8832&amp;relatedUserId=8832&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">39</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8832&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">36</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8832&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">2</a>
                            </td>
                            <td class="colNumber">5,56%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8832&amp;status=1">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8832&amp;status=1">6</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11231">6</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8832&amp;status=1">16.126.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8832&amp;status=1">11.726.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8832&amp;status=3">8.976.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11231&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10.989.660</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11231&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8.827.500</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11231&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.162.160</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>85</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10356&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9190</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10356&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Vũ
                                    Duy Hoàng</a></td>
                            <td>
                                <p style="color:green;">Phòng KD10</p>
                            </td>
                            <td>16</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7957&amp;relatedUserId=7957&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">7</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7957&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7957&amp;status=1">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=10356">6</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7957&amp;status=1">8.870.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7957&amp;status=1">8.870.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7957&amp;status=3">8.870.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10356&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">11.510.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10356&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">11.510.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>86</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10381&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9215</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10381&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                    Thị Yến Phương</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Nhóm KD5_LiêmNT</p>
                            </td>
                            <td>16</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=7980&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">16</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7980&amp;relatedUserId=7980&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">44</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7980&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">122</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7980&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">7</a>
                            </td>
                            <td class="colNumber">5,74%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7980&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7980&amp;status=1">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7980&amp;status=1">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=10381">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7980&amp;status=1">8.800.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7980&amp;status=1">8.800.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7980&amp;status=3">8.800.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10381&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5.606.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10381&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4.500.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10381&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">506.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10381&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">600.000</a>
                            </td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=7980&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">33.375</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td>87</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=954&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1602</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=954&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Thiện Tâm</a></td>
                            <td>
                                <p style="color:green;">Phòng KD Bảo Kim &amp; Wesave</p>
                            </td>
                            <td>99</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=676&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=676&amp;relatedUserId=676&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">2</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=676&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=676&amp;status=1">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=954">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=676&amp;status=1">18.700.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=676&amp;status=1">8.800.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=676&amp;status=3">8.800.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=954&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8.800.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=954&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8.800.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>88</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11284&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10119</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11284&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                    Thị Thu Trang</a></td>
                            <td>
                                <p style="color:green;">Ecomcare</p>
                            </td>
                            <td>0</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8885&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">29</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8885&amp;relatedUserId=8885&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">82</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8885&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">34</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8885&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">3</a>
                            </td>
                            <td class="colNumber">8,82%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8885&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8885&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11284">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8885&amp;status=1">8.250.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8885&amp;status=1">8.250.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8885&amp;status=3">8.800.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11284&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7.265.500</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11284&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7.265.500</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>89</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8236&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7291</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8236&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phạm
                                    Thị Thủy</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - Phòng KD3_HuyPV</p>
                            </td>
                            <td>38</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=5900&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=5900&amp;relatedUserId=5900&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=5900&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">18</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=5900&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">1</a>
                            </td>
                            <td class="colNumber">5,56%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=5900&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=5900&amp;status=1">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=5900&amp;status=1">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=8236">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=5900&amp;status=1">4.200.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=5900&amp;status=1">4.200.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=5900&amp;status=3">8.400.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8236&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7.116.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8236&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5.400.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8236&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">516.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8236&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.200.000</a>
                            </td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=5900&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">61.500</a>
                            </td>
                        </tr>
                        <tr>
                            <td>90</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10737&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9508</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10737&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Thị Mai Hoa</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - Phòng KD5_AnhNX</p>
                            </td>
                            <td>13</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8334&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">159</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8334&amp;relatedUserId=8334&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">331</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8334&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">341</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8334&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">1</a>
                            </td>
                            <td class="colNumber">0,29%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8334&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8334&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8334&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=10737">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8334&amp;status=1">17.570.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8334&amp;status=1">9.170.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8334&amp;status=3">8.400.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10737&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4.200.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10737&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4.200.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=8334&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">2.250</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td>91</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11090&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9943</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11090&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Vũ
                                    Thị Minh Hằng</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - KD16_TungNH</p>
                            </td>
                            <td>5</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8695&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">10</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8695&amp;relatedUserId=8695&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">21</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8695&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">32</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8695&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">12</a>
                            </td>
                            <td class="colNumber">37,5%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8695&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8695&amp;status=1">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8695&amp;status=1">6</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11090">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8695&amp;status=1">24.750.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8695&amp;status=1">7.950.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8695&amp;status=3">7.950.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11090&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5.492.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11090&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5.392.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11090&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">100.000</a>
                            </td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=8695&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">3.000</a>
                            </td>
                        </tr>
                        <tr>
                            <td>92</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7861&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6917</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7861&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Đức Công</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - KD8_CôngND</p>
                            </td>
                            <td>44</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=5532&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">15</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=5532&amp;relatedUserId=5532&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">178</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=5532&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">73</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=5532&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">2</a>
                            </td>
                            <td class="colNumber">2,74%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=5532&amp;status=1">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=5532&amp;status=1">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=7861">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=5532&amp;status=1">7.110.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=5532&amp;status=1">6.810.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=5532&amp;status=3">7.410.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7861&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3.530.500</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7861&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">500.500</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7861&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">450.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7861&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.580.000</a>
                            </td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=5532&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">1.500</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td>93</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10054&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8906</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10054&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Hoàng
                                    Minh Thảo</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - Phòng KD5_AnhNX</p>
                            </td>
                            <td>21</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=7664&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7664&amp;relatedUserId=7664&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">19</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7664&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">40</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7664&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">8</a>
                            </td>
                            <td class="colNumber">20%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7664&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">14</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7664&amp;status=1">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7664&amp;status=1">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=10054">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7664&amp;status=1">10.960.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7664&amp;status=1">10.960.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7664&amp;status=3">7.290.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10054&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3.500.500</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10054&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">500.500</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10054&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3.000.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=7664&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">48.750</a>
                            </td>
                        </tr>
                        <tr>
                            <td>94</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11232&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10079</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11232&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Hoàng
                                    Huyền Trang</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - ThanhTV_Phát triển đối tác
                                </p>
                            </td>
                            <td>1</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8833&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">71</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8833&amp;relatedUserId=8833&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">86</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8833&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">15</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8833&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">1</a>
                            </td>
                            <td class="colNumber">6,67%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8833&amp;status=1">7</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8833&amp;status=1">8</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11232">9</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8833&amp;status=1">9.415.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8833&amp;status=1">7.215.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8833&amp;status=3">7.215.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11232&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7.861.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11232&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6.352.500</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11232&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.508.500</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>95</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8743&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7779</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8743&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                    Thị Hương</a></td>
                            <td>
                                <p style="color:green;">Kinh doanh</p>
                            </td>
                            <td>34</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6403&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6403&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=8743">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6403&amp;status=1">7.200.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6403&amp;status=1">7.200.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6403&amp;status=3">7.200.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8743&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5.040.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8743&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5.040.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>96</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10015&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8871</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10015&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phạm
                                    Quốc Tuấn</a></td>
                            <td>
                                <p style="color:green;">Phòng dịch vụ SEO GG MAPS</p>
                            </td>
                            <td>22</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=7626&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7626&amp;relatedUserId=7626&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7626&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7626&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">3</a>
                            </td>
                            <td class="colNumber">150%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7626&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7626&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=10015">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7626&amp;status=1">6.600.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7626&amp;status=1">6.600.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7626&amp;status=3">6.600.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10015&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4.521.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10015&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3.003.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10015&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.518.000</a>
                            </td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>97</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1479&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">0174</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1479&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Vũ
                                    Thị Phương Anh</a></td>
                            <td>
                                <p style="color:green;">Phòng KD 7</p>
                            </td>
                            <td>127</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=1093&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=1093&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=1479">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=1093&amp;status=1">2.544.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=1093&amp;status=1">2.544.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=1093&amp;status=3">6.504.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1479&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7.422.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1479&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.908.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1479&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.544.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1479&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.970.000</a>
                            </td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>98</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1357&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">0048</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1357&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Ngô
                                    Thị Hồng Hoa</a></td>
                            <td>
                                <p style="color:green;">Phòng CSGH</p>
                            </td>
                            <td>136</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=1059&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=1059&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=1357">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=1059&amp;status=1">2.544.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=1059&amp;status=1">2.544.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=1059&amp;status=3">6.504.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1357&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.626.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1357&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">636.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1357&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">990.000</a>
                            </td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>99</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11261&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10096</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11261&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lê
                                    Thị Tuyết</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - Phòng KD2_TùngNT</p>
                            </td>
                            <td>1</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8861&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">15</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8861&amp;relatedUserId=8861&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">24</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8861&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">34</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8861&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">21</a>
                            </td>
                            <td class="colNumber">61,76%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8861&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">6</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8861&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8861&amp;status=1">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11261">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8861&amp;status=1">9.800.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8861&amp;status=1">7.050.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8861&amp;status=3">6.500.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11261&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5.250.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11261&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5.250.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>100</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11167&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10018</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11167&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                    Thị Kim Oanh</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Nhóm KD5_LiêmNT</p>
                            </td>
                            <td>4</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8770&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">106</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8770&amp;relatedUserId=8770&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">173</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8770&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">258</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8770&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">3</a>
                            </td>
                            <td class="colNumber">1,16%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8770&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8770&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8770&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11167">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8770&amp;status=1">6.000.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8770&amp;status=1">6.000.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8770&amp;status=3">6.000.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11167&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3.720.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11167&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3.720.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>101</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11144&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9995</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11144&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Thị Thu Hằng</a></td>
                            <td>
                                <p style="color:green;">Chăm sóc khách hàng - UyênTL</p>
                            </td>
                            <td>4</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8748&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">554</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8748&amp;relatedUserId=8748&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">556</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8748&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">15</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8748&amp;status=1">14</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8748&amp;status=1">16</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11144">14</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8748&amp;status=1">7.500.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8748&amp;status=1">6.000.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8748&amp;status=3">6.000.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11144&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.800.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11144&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.800.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>102</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11200&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10049</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11200&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Vũ
                                    Tiến Tài</a></td>
                            <td>
                                <p style="color:green;">Phòng Dịch Vụ Khách Hàng</p>
                            </td>
                            <td>1</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8803&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">23</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8803&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8803&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11200">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8803&amp;status=1">6.000.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8803&amp;status=1">6.000.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8803&amp;status=3">6.000.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11200&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3.000.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11200&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3.000.000</a>
                            </td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>103</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=331&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2659</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=331&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Thanh Lan</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - KD1_LanNT</p>
                            </td>
                            <td>52</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=21&amp;status=1">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=21&amp;status=1">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=331">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=21&amp;status=1">12.300.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=21&amp;status=1">12.300.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=21&amp;status=3">5.100.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=331&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8.295.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=331&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4.020.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=331&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.400.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=331&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.875.000</a>
                            </td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>104</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11262&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10097</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11262&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Thị Mỹ Phụng</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Sale Marketing</p>
                            </td>
                            <td>1</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8862&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">215</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8862&amp;relatedUserId=8862&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">355</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8862&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">385</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8862&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">1</a>
                            </td>
                            <td class="colNumber">0,26%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8862&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8862&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11262">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8862&amp;status=1">5.000.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8862&amp;status=1">5.000.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8862&amp;status=3">5.000.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11262&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4.604.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11262&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4.604.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>105</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=4785&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3996</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=4785&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                    Văn Anh Vũ</a></td>
                            <td>
                                <p style="color:green;">Phòng KD ĐDV</p>
                            </td>
                            <td>71</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=1002&amp;relatedUserId=1002&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">2</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=1002&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=1002&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=4785">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=1002&amp;status=1">4.950.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=1002&amp;status=1">4.950.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=1002&amp;status=3">4.950.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=4785&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4.950.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=4785&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4.950.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>106</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11176&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10027</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11176&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Quang Nghĩa</a></td>
                            <td>
                                <p style="color:green;">Phòng dịch vụ SEO GG MAPS</p>
                            </td>
                            <td>2</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8779&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">13</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8779&amp;relatedUserId=8779&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">16</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8779&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8779&amp;status=1">7</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8779&amp;status=1">8</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11176">7</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8779&amp;status=1">11.350.900</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8779&amp;status=1">4.950.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8779&amp;status=3">4.950.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11176&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4.504.500</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11176&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4.504.500</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>107</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11173&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10024</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11173&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Thị Lan</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - KD10_ThanhPT</p>
                            </td>
                            <td>4</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8776&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">45</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8776&amp;relatedUserId=8776&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">74</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8776&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">88</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8776&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">13</a>
                            </td>
                            <td class="colNumber">14,77%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8776&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">6</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8776&amp;status=1">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8776&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11173">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8776&amp;status=1">3.850.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8776&amp;status=1">3.850.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8776&amp;status=3">4.950.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11173&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3.919.500</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11173&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.501.500</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11173&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">900.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11173&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.518.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>108</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10347&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9181</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10347&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lưu
                                    Thị Hiền</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - KD10_ThanhPT</p>
                            </td>
                            <td>16</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=7948&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">10</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7948&amp;relatedUserId=7948&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">16</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7948&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">81</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7948&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">8</a>
                            </td>
                            <td class="colNumber">9,88%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7948&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">6</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7948&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7948&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=10347">6</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7948&amp;status=1">720.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7948&amp;status=1">720.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7948&amp;status=3">4.920.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10347&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9.459.700</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10347&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5.849.700</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10347&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">720.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10347&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.890.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=7948&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">2.250</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td>109</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=2021&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">0745</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=2021&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Thị Quỳnh Vân</a></td>
                            <td>
                                <p style="color:green;">Phòng KD 9</p>
                            </td>
                            <td>90</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=1224&amp;relatedUserId=1224&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">9</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=1224&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=1224&amp;status=1">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=2021">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=1224&amp;status=1">10.964.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=1224&amp;status=1">4.460.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=1224&amp;status=3">4.460.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=2021&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4.960.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=2021&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4.460.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=2021&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">500.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>110</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11300&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10135</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11300&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Thị Phương Thảo</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Sale Marketing</p>
                            </td>
                            <td>0</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8902&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">43</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8902&amp;relatedUserId=8902&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">59</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8902&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">50</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8902&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8902&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11300">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8902&amp;status=1">4.400.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8902&amp;status=1">4.400.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8902&amp;status=3">4.400.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11300&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6.006.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11300&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6.006.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>111</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10870&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9641</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10870&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Đỗ
                                    Thị Thu Hà</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - Phòng KD2_TùngNT</p>
                            </td>
                            <td>10</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8476&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8476&amp;relatedUserId=8476&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">16</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8476&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">305</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8476&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">6</a>
                            </td>
                            <td class="colNumber">1,97%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8476&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">7</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8476&amp;status=1">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8476&amp;status=1">6</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=10870">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8476&amp;status=1">4.400.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8476&amp;status=1">4.400.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8476&amp;status=3">4.400.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10870&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.445.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10870&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.845.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10870&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">600.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=8476&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">127.875</a>
                            </td>
                        </tr>
                        <tr>
                            <td>112</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11283&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10118</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11283&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Văn Sơn</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - Phòng KD4_TrườngVV</p>
                            </td>
                            <td>1</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8884&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">78</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8884&amp;relatedUserId=8884&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">113</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8884&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">127</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8884&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">32</a>
                            </td>
                            <td class="colNumber">25,2%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8884&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">22</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8884&amp;status=1">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8884&amp;status=1">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11283">6</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8884&amp;status=1">4.400.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8884&amp;status=1">4.400.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8884&amp;status=3">4.400.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11283&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5.489.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11283&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5.489.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>113</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11247&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10092</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11247&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Cao
                                    Thị Thu Hằng</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Sale Marketing</p>
                            </td>
                            <td></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8847&amp;relatedUserId=8847&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8847&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8847&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">3</a>
                            </td>
                            <td class="colNumber">300%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8847&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">2</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11247">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8847&amp;status=3">4.400.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11247&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4.004.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11247&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4.004.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>114</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11015&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9785</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11015&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Hồ
                                    Thị Lan Anh</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - Phòng KD2_TùngNT</p>
                            </td>
                            <td>6</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8621&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">83</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8621&amp;relatedUserId=8621&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">111</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8621&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">171</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8621&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">14</a>
                            </td>
                            <td class="colNumber">8,19%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8621&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">20</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8621&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11015">7</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8621&amp;status=3">4.200.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11015&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">21.360.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11015&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8.160.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11015&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5.400.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11015&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7.800.000</a>
                            </td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=8621&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">1.500</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td>115</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9221&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8154</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9221&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Trung Quân</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - Phòng KD3_HuyPV</p>
                            </td>
                            <td>30</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=6858&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=6858&amp;relatedUserId=6858&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=6858&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=6858&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">4</a>
                            </td>
                            <td class="colNumber">80%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=6858&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6858&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6858&amp;status=1">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=9221">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6858&amp;status=1">4.200.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6858&amp;status=1">4.200.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6858&amp;status=3">4.200.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9221&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9.411.080</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9221&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8.511.080</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9221&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">900.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>116</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8490&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7534</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8490&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trịnh
                                    Xuân Tài</a></td>
                            <td>
                                <p style="color:green;">Sale Marketing</p>
                            </td>
                            <td>8</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6153&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=8490">2</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6153&amp;status=3">4.000.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>117</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=2126&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">0857</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=2126&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                    Phương Chi</a></td>
                            <td>
                                <p style="color:green;">Nhóm KD 7.2</p>
                            </td>
                            <td>99</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=1260&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=1260&amp;relatedUserId=1260&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">3</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=1260&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=1260&amp;status=1">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=2126">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=1260&amp;status=1">11.980.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=1260&amp;status=1">3.960.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=1260&amp;status=3">3.960.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=2126&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3.960.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=2126&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3.960.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>118</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1739&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">0445</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1739&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Đinh
                                    Thị Thu Hương</a></td>
                            <td>
                                <p style="color:green;">Phòng KD 4.1</p>
                            </td>
                            <td>111</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=1147&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=1739">2</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=1147&amp;status=3">3.960.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1739&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8.712.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1739&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8.712.000</a>
                            </td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>119</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10814&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9585</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10814&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lê
                                    Ngọc Khánh</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Phòng KD1_NgânHTM</p>
                            </td>
                            <td>12</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8417&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">12</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8417&amp;relatedUserId=8417&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">21</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8417&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">105</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8417&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">2</a>
                            </td>
                            <td class="colNumber">1,9%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8417&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8417&amp;status=1">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8417&amp;status=1">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=10814">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8417&amp;status=1">28.550.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8417&amp;status=1">20.150.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8417&amp;status=3">3.950.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10814&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">13.490.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10814&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8.670.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10814&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4.820.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>120</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10753&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9524</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10753&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Quang Huy</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - KD11_NganLTT</p>
                            </td>
                            <td>12</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8350&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">7</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8350&amp;relatedUserId=8350&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">45</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8350&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">66</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8350&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">8</a>
                            </td>
                            <td class="colNumber">12,12%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8350&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8350&amp;status=1">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8350&amp;status=1">7</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=10753">6</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8350&amp;status=1">28.630.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8350&amp;status=1">7.430.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8350&amp;status=3">3.830.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10753&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9.451.080</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10753&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9.301.080</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10753&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">150.000</a>
                            </td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=8350&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">651.000</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td>121</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10785&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9556</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10785&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                    Minh Thu</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Sale Marketing</p>
                            </td>
                            <td>12</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8387&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8387&amp;relatedUserId=8387&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8387&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">19</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8387&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">1</a>
                            </td>
                            <td class="colNumber">5,26%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8387&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">6</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=10785">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8387&amp;status=3">3.600.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10785&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.800.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10785&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.800.000</a>
                            </td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=8387&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">402.750</a>
                            </td>
                        </tr>
                        <tr>
                            <td>122</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11131&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9983</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11131&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Vũ
                                    Thị Việt Trinh</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - KD16_TungNH</p>
                            </td>
                            <td>5</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8736&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">76</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8736&amp;relatedUserId=8736&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">149</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8736&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">190</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8736&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">5</a>
                            </td>
                            <td class="colNumber">2,63%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8736&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">9</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8736&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8736&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11131">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8736&amp;status=1">3.550.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8736&amp;status=1">3.550.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8736&amp;status=3">3.550.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11131&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.600.500</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11131&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.600.500</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=8736&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">68.250</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td>123</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11140&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9991</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11140&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Thị Kim Thoa</a></td>
                            <td>
                                <p style="color:green;">Kinh doanh</p>
                            </td>
                            <td>4</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8744&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">430</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8744&amp;relatedUserId=8744&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">434</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8744&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">517</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8744&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">1</a>
                            </td>
                            <td class="colNumber">0,19%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8744&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8744&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11140">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8744&amp;status=1">3.300.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8744&amp;status=1">3.300.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8744&amp;status=3">3.300.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11140&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.227.500</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11140&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.227.500</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>124</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10994&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9764</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10994&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lê
                                    Hải Anh</a></td>
                            <td>
                                <p style="color:green;">Chăm sóc khách hàng - UyênTL</p>
                            </td>
                            <td>7</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8598&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">164</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8598&amp;relatedUserId=8598&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">164</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8598&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">2</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8598&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8598&amp;status=1">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8598&amp;status=1">7</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=10994">6</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8598&amp;status=1">3.600.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8598&amp;status=1">3.300.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8598&amp;status=3">3.300.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10994&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.580.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10994&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">570.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10994&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.010.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>125</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10831&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9602</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10831&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Hoàng
                                    Văn Phúc</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - Phòng KD5_AnhNX</p>
                            </td>
                            <td>10</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8432&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8432&amp;relatedUserId=8432&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">8</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8432&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">33</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8432&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">16</a>
                            </td>
                            <td class="colNumber">48,48%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8432&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">16</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8432&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8432&amp;status=1">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=10831">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8432&amp;status=1">6.600.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8432&amp;status=1">6.600.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8432&amp;status=3">3.000.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10831&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6.876.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10831&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3.456.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10831&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.020.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10831&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.400.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=8432&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">11.625</a>
                            </td>
                        </tr>
                        <tr>
                            <td>126</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11138&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9990</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11138&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Hoàng Long</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - KD11_NganLTT</p>
                            </td>
                            <td>4</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8743&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">103</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8743&amp;relatedUserId=8743&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">139</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8743&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">84</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8743&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">16</a>
                            </td>
                            <td class="colNumber">19,05%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8743&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8743&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8743&amp;status=1">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11138">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8743&amp;status=1">3.550.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8743&amp;status=1">3.000.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8743&amp;status=3">3.000.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11138&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">11.316.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11138&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">11.316.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>127</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11224&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10073</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11224&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Bùi
                                    Gia Bảo</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Nhóm KD4_ThịnhNQG</p>
                            </td>
                            <td>2</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8826&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">81</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8826&amp;relatedUserId=8826&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">224</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8826&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">213</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8826&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">6</a>
                            </td>
                            <td class="colNumber">2,82%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8826&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8826&amp;status=1">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8826&amp;status=1">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11224">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8826&amp;status=1">8.250.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8826&amp;status=1">2.750.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8826&amp;status=3">2.750.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11224&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5.472.500</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11224&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5.472.500</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>128</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11245&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10090</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11245&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phạm
                                    Ngọc Tiến</a></td>
                            <td>
                                <p style="color:green;">Ecomcare</p>
                            </td>
                            <td>1</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8845&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">11</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8845&amp;relatedUserId=8845&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">35</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8845&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">30</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8845&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">5</a>
                            </td>
                            <td class="colNumber">16,67%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8845&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8845&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8845&amp;status=1">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11245">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8845&amp;status=1">22.550.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8845&amp;status=1">3.100.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8845&amp;status=3">2.550.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11245&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4.292.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11245&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4.292.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>129</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=469&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">0646</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=469&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">hồ
                                    ngọc huy</a></td>
                            <td>
                                <p style="color:green;">Support văn phòng</p>
                            </td>
                            <td>91</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=18&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=18&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=469">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=18&amp;status=1">2.400.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=18&amp;status=1">2.400.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=18&amp;status=3">2.400.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=469&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5.475.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=469&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5.475.000</a>
                            </td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>130</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9812&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8673</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9812&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Thị Ngọc Trầm</a></td>
                            <td>
                                <p style="color:green;">Phòng KD10</p>
                            </td>
                            <td>24</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=7435&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7435&amp;relatedUserId=7435&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">2</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7435&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7435&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=9812">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7435&amp;status=1">4.160.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7435&amp;status=1">2.200.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7435&amp;status=3">2.200.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9812&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.200.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9812&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.200.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>131</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11276&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10111</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11276&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Võ
                                    Việt Quốc Đại</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Sale Marketing</p>
                            </td>
                            <td>1</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8877&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">251</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8877&amp;relatedUserId=8877&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">358</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8877&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">396</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11276">2</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8877&amp;status=3">2.200.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11276&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4.092.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11276&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4.092.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>132</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11271&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10106</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11271&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Hồ
                                    Thị Thanh Mai</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - SEO GG MAPS</p>
                            </td>
                            <td>1</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8872&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">38</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8872&amp;relatedUserId=8872&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">39</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8872&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8872&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8872&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11271">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8872&amp;status=1">3.850.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8872&amp;status=1">2.050.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8872&amp;status=3">2.050.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11271&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.366.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11271&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.366.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>133</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11265&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10100</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11265&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Ngọc Ánh</a></td>
                            <td>
                                <p style="color:green;">Ecomcare</p>
                            </td>
                            <td>1</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8865&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">34</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8865&amp;relatedUserId=8865&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">108</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8865&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">68</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8865&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">1</a>
                            </td>
                            <td class="colNumber">1,47%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8865&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8865&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11265">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8865&amp;status=1">1.800.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8865&amp;status=1">1.800.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8865&amp;status=3">1.800.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11265&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7.750.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11265&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7.750.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>134</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11236&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10082</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11236&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Dương
                                    Thị Hoa</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - ThanhTV_Phát triển đối tác
                                </p>
                            </td>
                            <td>1</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8836&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">13</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8836&amp;relatedUserId=8836&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">14</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8836&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">20</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8836&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">4</a>
                            </td>
                            <td class="colNumber">20%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8836&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8836&amp;status=1">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8836&amp;status=1">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11236">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8836&amp;status=1">1.650.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8836&amp;status=1">1.650.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8836&amp;status=3">1.650.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11236&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7.866.353</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11236&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7.365.853</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11236&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">500.500</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>135</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11135&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9987</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11135&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phan
                                    Lương Thị Kim Phương</a></td>
                            <td>
                                <p style="color:green;">Kinh doanh</p>
                            </td>
                            <td>4</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8740&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">44</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8740&amp;relatedUserId=8740&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">71</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8740&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">498</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8740&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">1</a>
                            </td>
                            <td class="colNumber">0,2%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8740&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8740&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11135">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8740&amp;status=1">1.650.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8740&amp;status=1">1.650.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8740&amp;status=3">1.650.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11135&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.227.500</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11135&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.227.500</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>136</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7691&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6749</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7691&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Văn Hưng</a></td>
                            <td>
                                <p style="color:green;">123Job</p>
                            </td>
                            <td>46</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=5374&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=5374&amp;relatedUserId=5374&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=5374&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">2</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=5374&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">3</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=7691">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=5374&amp;status=3">1.595.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7691&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.595.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7691&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.595.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>137</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11303&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10138</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11303&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Thị Như Quỳnh</a></td>
                            <td>
                                <p style="color:green;">Phòng dịch vụ SEO GG MAPS</p>
                            </td>
                            <td>0</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8905&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8905&amp;relatedUserId=8905&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">3</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8905&amp;status=1">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8905&amp;status=1">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11303">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8905&amp;status=1">1.650.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8905&amp;status=1">1.400.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8905&amp;status=3">1.400.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11303&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.275.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11303&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.275.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>138</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11280&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10115</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11280&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                    Thị Soan</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - Phòng KD2_TùngNT</p>
                            </td>
                            <td>1</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8881&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">67</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8881&amp;relatedUserId=8881&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">195</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8881&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">188</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8881&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">3</a>
                            </td>
                            <td class="colNumber">1,6%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8881&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8881&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8881&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11280">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8881&amp;status=1">1.200.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8881&amp;status=1">1.200.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8881&amp;status=3">1.200.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11280&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3.440.500</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11280&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3.440.500</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>139</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11166&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10017</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11166&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Dương
                                    Thị Thanh Tú</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - KD10_ThanhPT</p>
                            </td>
                            <td>4</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8769&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">98</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8769&amp;relatedUserId=8769&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">170</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8769&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">230</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8769&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">9</a>
                            </td>
                            <td class="colNumber">3,91%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8769&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8769&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8769&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11166">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8769&amp;status=1">1.100.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8769&amp;status=1">1.100.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8769&amp;status=3">1.100.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11166&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.486.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11166&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.001.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11166&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.485.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=8769&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">6.750</a>
                            </td>
                        </tr>
                        <tr>
                            <td>140</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11292&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10127</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11292&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lê
                                    Trung Nghĩa</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Nhóm KD4_ThịnhNQG</p>
                            </td>
                            <td>1</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8894&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">29</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8894&amp;relatedUserId=8894&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">171</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8894&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">155</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8894&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8894&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11292">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8894&amp;status=1">1.100.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8894&amp;status=1">1.100.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8894&amp;status=3">1.100.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11292&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.501.500</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11292&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.501.500</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>141</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8387&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7431</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8387&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Thanh Liêm</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Nhóm KD5_LiêmNT</p>
                            </td>
                            <td>37</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=6050&amp;relatedUserId=6050&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=6050&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">14</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=6050&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">6</a>
                            </td>
                            <td class="colNumber">42,86%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=6050&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6050&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6050&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=8387">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6050&amp;status=1">1.000.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6050&amp;status=1">1.000.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=6050&amp;status=3">1.000.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8387&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">950.500</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8387&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">950.500</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>142</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11288&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10123</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11288&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Vũ
                                    Thị Quỳnh Trang</a></td>
                            <td>
                                <p style="color:green;">Vchat</p>
                            </td>
                            <td>0</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8890&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8890&amp;relatedUserId=8890&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8890&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8890&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11288">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8890&amp;status=1">867.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8890&amp;status=1">867.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8890&amp;status=3">867.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11288&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">867.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11288&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">867.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>143</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10776&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9547</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10776&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Ma
                                    Thị Phương Thảo</a></td>
                            <td>
                                <p style="color:green;">Phòng Dịch Vụ Khách Hàng</p>
                            </td>
                            <td>11</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8378&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8378&amp;relatedUserId=8378&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8378&amp;status=1">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8378&amp;status=1">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=10776">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8378&amp;status=1">690.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8378&amp;status=1">690.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8378&amp;status=3">690.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10776&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">225.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10776&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">225.000</a>
                            </td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>144</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11299&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10134</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11299&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Vũ
                                    Quang Chung</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - Phòng KD2_TùngNT</p>
                            </td>
                            <td>0</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8901&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8901&amp;relatedUserId=8901&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8901&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8901&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8901&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11299">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8901&amp;status=1">550.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8901&amp;status=1">550.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8901&amp;status=3">550.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11299&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.911.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11299&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.911.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>145</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11209&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10058</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11209&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Phương Mai</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Phòng KD8_LâmNV</p>
                            </td>
                            <td>2</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8812&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">103</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8812&amp;relatedUserId=8812&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">307</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8812&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">279</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8812&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">1</a>
                            </td>
                            <td class="colNumber">0,36%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8812&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8812&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8812&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11209">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8812&amp;status=1">550.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8812&amp;status=1">550.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8812&amp;status=3">550.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11209&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">500.500</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11209&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">500.500</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>146</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11120&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9972</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11120&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Hoài Nam</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - KD10_ThanhPT</p>
                            </td>
                            <td>5</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8725&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8725&amp;relatedUserId=8725&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8725&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">39</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8725&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">2</a>
                            </td>
                            <td class="colNumber">5,13%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8725&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">11</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8725&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8725&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11120">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8725&amp;status=1">550.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8725&amp;status=1">550.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8725&amp;status=3">550.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11120&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">500.500</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11120&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">500.500</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>147</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9523&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8415</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9523&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Hồng Anh</a></td>
                            <td>
                                <p style="color:green;">CTV KD Đà Nẵng</p>
                            </td>
                            <td>27</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=7157&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7157&amp;relatedUserId=7157&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7157&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7157&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">21</a>
                            </td>
                            <td class="colNumber">420%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7157&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7157&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=9523">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7157&amp;status=1">450.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7157&amp;status=1">450.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7157&amp;status=3">450.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9523&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.385.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9523&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.160.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9523&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">225.000</a>
                            </td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>148</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11189&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10039</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11189&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Ngọ
                                    Văn Tình</a></td>
                            <td>
                                <p style="color:green;">Phòng KD 8</p>
                            </td>
                            <td>14</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8792&amp;relatedUserId=8792&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">4</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8792&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8792&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11189">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8792&amp;status=1">200.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8792&amp;status=1">165.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8792&amp;status=3">415.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11189&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">415.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11189&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">415.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>149</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11218&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10066</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11218&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Phúc Duy Khang</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Phòng KD1_NgânHTM</p>
                            </td>
                            <td>3</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8821&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">78</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8821&amp;relatedUserId=8821&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">143</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8821&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">209</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8821&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">6</a>
                            </td>
                            <td class="colNumber">2,87%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8821&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8821&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8821&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11218">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8821&amp;status=1">300.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8821&amp;status=1">300.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8821&amp;status=3">300.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11218&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">240.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11218&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">240.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>150</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11301&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10136</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11301&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Võ
                                    Thị Thu Sương</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Nhóm KD3_NgânTK</p>
                            </td>
                            <td>0</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8903&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">9</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8903&amp;relatedUserId=8903&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">216</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8903&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">173</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8903&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">1</a>
                            </td>
                            <td class="colNumber">0,58%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8903&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8903&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8903&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11301">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8903&amp;status=1">300.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8903&amp;status=1">300.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8903&amp;status=3">300.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11301&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4.476.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11301&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4.476.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>151</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10993&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9763</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10993&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lê
                                    Thị Phương Thảo</a></td>
                            <td>
                                <p style="color:green;">Tư pháp</p>
                            </td>
                            <td>7</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>152</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10337&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">0006</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10337&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Data
                                    bàn giao</a></td>
                            <td>
                                <p style="color:green;">Phòng IT</p>
                            </td>
                            <td>17</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=10337">68</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10337&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">75.307.800</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10337&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">69.631.800</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10337&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4.356.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10337&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.320.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>153</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11279&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10114</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11279&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Minh Hải</a></td>
                            <td>
                                <p style="color:green;">Đại lý công ty</p>
                            </td>
                            <td></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11279">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11279&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">900.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11279&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">900.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>154</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10951&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9722</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10951&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Chu
                                    Thị Phương</a></td>
                            <td>
                                <p style="color:green;">Ecomcare</p>
                            </td>
                            <td>8</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8556&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">14</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8556&amp;relatedUserId=8556&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">29</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8556&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">24</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>155</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11291&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10126</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11291&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Đặng
                                    Anh Tuấn</a></td>
                            <td>
                                <p style="color:green;">Đại lý công ty</p>
                            </td>
                            <td></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11291">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11291&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.800.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11291&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.800.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>156</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10885&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9655</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10885&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lê
                                    Quỳnh Anh</a></td>
                            <td>
                                <p style="color:green;">Phòng kế toán</p>
                            </td>
                            <td>10</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8491&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>157</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8355&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7399</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8355&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Thị Việt Trinh</a></td>
                            <td>
                                <p style="color:green;">Chăm sóc đơn hàng - HươngĐTM</p>
                            </td>
                            <td>37</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>158</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11201&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10050</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11201&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Đức Hiếu</a></td>
                            <td>
                                <p style="color:green;">Phòng Dịch Vụ Khách Hàng</p>
                            </td>
                            <td>1</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8804&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">28</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>159</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11275&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10110</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11275&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Thị Minh Hạnh</a></td>
                            <td>
                                <p style="color:green;">Marketing</p>
                            </td>
                            <td>0</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8876&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8876&amp;relatedUserId=8876&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8876&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8876&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">10</a>
                            </td>
                            <td class="colNumber">500%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>160</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11199&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10048</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11199&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phạm
                                    Thùy Dương</a></td>
                            <td>
                                <p style="color:green;">Phòng Dịch Vụ Khách Hàng</p>
                            </td>
                            <td>1</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8802&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">55</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>161</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11198&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10047</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11198&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phạm
                                    Thị Hồng Nhung</a></td>
                            <td>
                                <p style="color:green;">Phòng Dịch Vụ Khách Hàng</p>
                            </td>
                            <td>1</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8801&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">36</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>162</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7967&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7035</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7967&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                    Lệ Uyên</a></td>
                            <td>
                                <p style="color:green;">Chăm sóc khách hàng - UyênTL</p>
                            </td>
                            <td>42</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=7967">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7967&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3.000.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7967&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3.000.000</a>
                            </td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>163</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7941&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7009</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7941&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Thị Tú Anh</a></td>
                            <td>
                                <p style="color:green;">Chăm sóc đơn hàng - HươngĐTM</p>
                            </td>
                            <td>43</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>164</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11197&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10046</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11197&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phạm
                                    Nguyên Tùng</a></td>
                            <td>
                                <p style="color:green;">Phòng Dịch Vụ Khách Hàng</p>
                            </td>
                            <td>1</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8800&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">32</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>165</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10050&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8902</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10050&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Tạ
                                    Thị Hoa</a></td>
                            <td>
                                <p style="color:green;">Trợ lý</p>
                            </td>
                            <td>21</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7660&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>166</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11290&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10125</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11290&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Đoàn
                                    Thị Khánh Huyền</a></td>
                            <td>
                                <p style="color:green;">Vchat</p>
                            </td>
                            <td>0</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8892&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8892&amp;relatedUserId=8892&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8892&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8892&amp;status=1">1.416.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>167</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7389&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6448</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7389&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Hồ
                                    Phạm Ngọc Tiên</a></td>
                            <td>
                                <p style="color:green;">Sàn Vật Giá HCM</p>
                            </td>
                            <td>50</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=7389">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>168</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=6681&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5095</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=6681&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phạm
                                    Thị Giang</a></td>
                            <td>
                                <p style="color:green;">Phòng chăm sóc khách hàng - Online</p>
                            </td>
                            <td>59</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=6681">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=6681&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">792.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=6681&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">792.000</a>
                            </td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>169</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9987&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8844</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9987&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Đỗ
                                    Thanh Tùng</a></td>
                            <td>
                                <p style="color:green;">Ecomcare</p>
                            </td>
                            <td>22</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7599&amp;relatedUserId=7599&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">2</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=9987">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9987&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.375.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9987&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.375.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>170</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=5233&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4553</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=5233&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phạm
                                    Thị Hồng Linh</a></td>
                            <td>
                                <p style="color:green;">Phòng chăm sóc khách hàng - Online</p>
                            </td>
                            <td>64</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>171</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=4901&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4130</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=4901&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Đỗ
                                    Xuân Trường</a></td>
                            <td>
                                <p style="color:green;">Marketing</p>
                            </td>
                            <td>49</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=3097&amp;relatedUserId=3097&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">2</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=3097&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=3097&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=3097&amp;status=1">6.600.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=3097&amp;status=1">2.000.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>172</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=4869&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4092</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=4869&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lê
                                    Thị Mến</a></td>
                            <td>
                                <p style="color:green;">Phòng chăm sóc khách hàng - Online</p>
                            </td>
                            <td>69</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>173</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9962&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8820</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9962&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Đào
                                    Ngọc Ánh</a></td>
                            <td>
                                <p style="color:green;">Phòng chăm sóc khách hàng - Online</p>
                            </td>
                            <td>22</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>174</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11121&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9973</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11121&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Hoàng
                                    Tuấn Anh</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - KD8_CôngND</p>
                            </td>
                            <td>5</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8726&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8726&amp;relatedUserId=8726&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">13</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8726&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">65</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8726&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">23</a>
                            </td>
                            <td class="colNumber">35,38%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8726&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">11</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=8726&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">750</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td>175</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=4535&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3681</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=4535&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Nhật Linh</a></td>
                            <td>
                                <p style="color:green;">Rao vặt - THDV</p>
                            </td>
                            <td>75</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>176</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9879&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8740</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9879&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Thái
                                    Phạm Mỹ Linh</a></td>
                            <td>
                                <p style="color:green;">NHANH.VN HCM</p>
                            </td>
                            <td>24</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=7501&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7501&amp;relatedUserId=7501&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>177</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9836&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8697</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9836&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Thị Hương</a></td>
                            <td>
                                <p style="color:green;">Phòng kế toán</p>
                            </td>
                            <td>24</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7458&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>178</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11188&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10038</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11188&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Cao
                                    Thị Mỹ Duyên</a></td>
                            <td>
                                <p style="color:green;">Phòng KD 8</p>
                            </td>
                            <td>2</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8791&amp;relatedUserId=8791&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">2</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>179</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11117&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9969</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11117&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Ecomcare
                                    Nhanhvn</a></td>
                            <td>
                                <p style="color:green;">Ecomcare</p>
                            </td>
                            <td></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11117">11</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>180</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9730&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8592</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9730&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phạm
                                    Kim Yến</a></td>
                            <td>
                                <p style="color:green;">Chăm sóc đơn hàng - HươngĐTM</p>
                            </td>
                            <td>25</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=9730">2</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9730&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.395.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9730&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.395.000</a>
                            </td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>181</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1522&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">0218</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1522&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Dương
                                    Thị Mười</a></td>
                            <td>
                                <p style="color:green;">Tư pháp</p>
                            </td>
                            <td>124</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>182</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11187&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10037</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11187&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Võ
                                    Thị Lệ Thu</a></td>
                            <td>
                                <p style="color:green;">Phòng KD 01</p>
                            </td>
                            <td>2</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8790&amp;relatedUserId=8790&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>183</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11184&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10035</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11184&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Tuấn Vũ</a></td>
                            <td>
                                <p style="color:green;">Phòng dịch vụ SEO GG MAPS</p>
                            </td>
                            <td>2</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8787&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8787&amp;relatedUserId=8787&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">3</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8787&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">2</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8787&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11184">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11184&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">550.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11184&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">550.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>184</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9640&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8514</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9640&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Cao
                                    Thị Thu Hằng</a></td>
                            <td>
                                <p style="color:green;">Sale Marketing</p>
                            </td>
                            <td>26</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=7271&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7271&amp;relatedUserId=7271&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7271&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7271&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">3</a>
                            </td>
                            <td class="colNumber">300%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7271&amp;status=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7271&amp;status=1">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=9640">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7271&amp;status=1">19.800.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=7271&amp;status=1">13.200.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>185</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1331&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">0019</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1331&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Đỗ
                                    Thị Bích Thủy</a></td>
                            <td>
                                <p style="color:green;">Kế toán</p>
                            </td>
                            <td>153</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>186</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11310&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10145</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11310&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                    Minh Tâm</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - KD8_CôngND</p>
                            </td>
                            <td>0</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8911&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">6</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8911&amp;relatedUserId=8911&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">8</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8911&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">5</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11310">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11310&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.001.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11310&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.001.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>187</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10745&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9516</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10745&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Thị Như Huệ</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Nhóm KD9_ThưNTA</p>
                            </td>
                            <td>1</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8342&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">56</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8342&amp;relatedUserId=8342&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">177</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8342&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">249</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8342&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8342&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=8342&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">3.750</a>
                            </td>
                        </tr>
                        <tr>
                            <td>188</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1223&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4926</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1223&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phan
                                    Thành Quang</a></td>
                            <td>
                                <p style="color:green;">Nhóm KD 24</p>
                            </td>
                            <td>60</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=939&amp;relatedUserId=939&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">5</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=939&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=939&amp;status=1">3.960.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>189</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11305&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10140</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11305&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Huỳnh
                                    Thị Hằng</a></td>
                            <td>
                                <p style="color:green;">Đại lý công ty</p>
                            </td>
                            <td></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11305">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11305&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5.760.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11305&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5.760.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>190</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11315&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10150</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11315&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Hữu Lộc</a></td>
                            <td>
                                <p style="color:green;">Phòng dịch vụ SEO GG MAPS</p>
                            </td>
                            <td>0</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11315">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11315&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">910.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11315&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">910.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>191</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1084&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2833</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1084&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lưu
                                    Thị Ngọc Bích</a></td>
                            <td>
                                <p style="color:green;">Kế toán</p>
                            </td>
                            <td>81</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>192</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10696&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9474</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10696&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trương
                                    Thị Tường Vi</a></td>
                            <td>
                                <p style="color:green;">CSonline-Telesale</p>
                            </td>
                            <td>12</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=10696">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>193</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11072&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9925</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11072&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Bằng Vân</a></td>
                            <td>
                                <p style="color:green;">Phòng nhân sự - Nhanh.vn</p>
                            </td>
                            <td>5</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8678&amp;relatedUserId=8678&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8678&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>194</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11067&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9920</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11067&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Vũ
                                    Thị Anh Thư</a></td>
                            <td>
                                <p style="color:green;">Phòng nhân sự - Nhanh.vn</p>
                            </td>
                            <td>5</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8674&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8674&amp;relatedUserId=8674&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8674&amp;status=1">3</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>195</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=950&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1375</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=950&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Bùi
                                    Thanh Thịnh</a></td>
                            <td>
                                <p style="color:green;">O1 Marketplaces</p>
                            </td>
                            <td>121</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>196</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11063&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9916</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11063&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Tạ
                                    Thị Thùy Linh</a></td>
                            <td>
                                <p style="color:green;">Tuyển dụng</p>
                            </td>
                            <td>5</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>197</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=923&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">0061</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=923&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Thị Huyền</a></td>
                            <td>
                                <p style="color:green;">Phòng kế toán</p>
                            </td>
                            <td>133</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>198</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=837&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4557</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=837&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                    Thúy Nga</a></td>
                            <td>
                                <p style="color:green;">Chăm sóc đơn hàng - HươngĐTM</p>
                            </td>
                            <td>63</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=562&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>199</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=805&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">0630</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=805&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Thị Uyên</a></td>
                            <td>
                                <p style="color:green;">Phòng chăm sóc khách hàng - Online</p>
                            </td>
                            <td>104</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=805">3</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=805&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.782.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=805&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.782.000</a>
                            </td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>200</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=764&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4519</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=764&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">trần
                                    thị Ánh tuyết</a></td>
                            <td>
                                <p style="color:green;">Chăm sóc đơn hàng - HươngĐTM</p>
                            </td>
                            <td>64</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=494&amp;status=1">3</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>201</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=720&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">0310</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=720&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lưu
                                    Bảo Hoa</a></td>
                            <td>
                                <p style="color:green;">Giám đốc</p>
                            </td>
                            <td>119</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>202</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11169&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10020</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11169&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Hoàng
                                    Lân</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Nhóm KD5_LiêmNT</p>
                            </td>
                            <td>4</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8772&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">23</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8772&amp;relatedUserId=8772&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">97</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8772&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">96</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8772&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11169">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11169&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.700.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11169&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.700.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>203</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10553&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9345</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10553&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Dương
                                    Minh Hiếu</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - KD8_CôngND</p>
                            </td>
                            <td>14</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8148&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8148&amp;relatedUserId=8148&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8148&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8148&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">1</a>
                            </td>
                            <td class="colNumber">25%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8148&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8148&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8148&amp;status=1">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=10553">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8148&amp;status=1">17.490.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8148&amp;status=1">13.230.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/bill/salary?createdById=8148&amp;applyDate=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;status=2&amp;type=3">8.250</a>
                            </td>
                        </tr>
                        <tr>
                            <td>204</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11281&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10116</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11281&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Đồng
                                    Thị Nga</a></td>
                            <td>
                                <p style="color:green;">Marketing</p>
                            </td>
                            <td>0</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8882&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">11</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8882&amp;relatedUserId=8882&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">15</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8882&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">11</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8882&amp;status=1">3</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8882&amp;status=1">21.450.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>205</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9207&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8140</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9207&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lê
                                    Quỳnh Thủy Tiên</a></td>
                            <td>
                                <p style="color:green;">Kế toán</p>
                            </td>
                            <td>30</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>206</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10390&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9224</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10390&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Thị Bích Thảo</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - KD17_TùngNT</p>
                            </td>
                            <td>15</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=7989&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7989&amp;relatedUserId=7989&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">17</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7989&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">60</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7989&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">9</a>
                            </td>
                            <td class="colNumber">15%</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7989&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">8</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>207</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9156&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8102</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9156&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lê
                                    Thùy Linh</a></td>
                            <td>
                                <p style="color:green;">Phòng chăm sóc khách hàng - Online</p>
                            </td>
                            <td>31</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>208</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9132&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8094</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9132&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Thanh Tâm</a></td>
                            <td>
                                <p style="color:green;">Phòng chăm sóc khách hàng - Online</p>
                            </td>
                            <td>31</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>209</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11021&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9791</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11021&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Đỗ
                                    Thị Thanh Nhàn</a></td>
                            <td>
                                <p style="color:green;">123Job</p>
                            </td>
                            <td>6</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8627&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8627&amp;relatedUserId=8627&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">2</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8627&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8627&amp;status=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11021">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8627&amp;status=1">1.595.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8627&amp;status=1">1.595.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>210</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11312&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10147</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11312&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Ngọc Ánh</a></td>
                            <td>
                                <p style="color:green;">Nhanh HN - Phòng KD4_TrườngVV</p>
                            </td>
                            <td>0</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?createdById=8913&amp;rangeCreatedDate=01%2F07%2F2020%20-%2031%2F07%2F2020">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8913&amp;relatedUserId=8913&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7">16</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8913&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">14</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11312">2</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11312&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.001.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11312&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.001.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>211</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11148&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9999</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11148&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Viết Tuấn</a></td>
                            <td>
                                <p style="color:green;">Đại lý công ty</p>
                            </td>
                            <td></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11148">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11148&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.380.000</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11148&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.380.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>212</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=2&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">0585</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=2&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">nguyễn
                                    quỳnh dương</a></td>
                            <td>
                                <p style="color:green;">Giám đốc dự án</p>
                            </td>
                            <td>106</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="rowSum even">
                            <td colspan="5"><b>Tổng</b></td>
                            <td class="colNumber">5.096</td>
                            <td class="colNumber">8.496</td>
                            <td class="colNumber">9.862</td>
                            <td class="colNumber">646</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">389</td>
                            <td class="colNumber">615</td>
                            <td class="colNumber">784</td>
                            <td class="colNumber">1.064</td>
                            <td class="colNumber">3.081.692.002</td>
                            <td class="colNumber">2.308.117.100</td>
                            <td class="colNumber">2.491.338.100</td>
                            <td class="colNumber">2.093.632.204</td>
                            <td class="colNumber">1.346.460.694</td>
                            <td class="colNumber">282.536.660</td>
                            <td class="colNumber">125.981.450</td>
                            <td class="colNumber">338.653.400</td>
                            <td class="colNumber">8.446.500</td>
                        </tr>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-md-6 dgButtons"></div>
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
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/bootstrap-multiselect.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/saved_resource(2)') }}"></script>
@endsection