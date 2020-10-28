@extends('crm::layouts.master1')

@section('css')
    <link href="{{ asset('css/crm/report/bootstrap-multiselect.css') }}" media="screen" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/crm/report/style.css') }}" type="text/css">
@endsection

@section('title','ERP-Báo cáo doanh thu theo địa điểm')

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
                        </tr>
                    </thead>
                    <tbody>
                    @php
                        $totalQuantityOfCustomer = 0;
                        $totalQuantityOfPhoneCall = 0;
                        $totalQuantityOfCalendar = 0;
                        $totalQuantityOfContract = 0;
                        $totalQuantityContractWasChecked = 0;
                        $totalValueFromContract = 0;
                        $totalValueFromContractWasChecked = 0;
                        $totalSignNew = 0;
                        $totalSignExtend = 0;
                        $totalSignCross = 0;
                        $totalSignAgain = 0;
                    @endphp
                    @foreach($reports as $key => $report)
                        @php
                            $totalQuantityOfCustomer += $report['quantityOfCustomer'];
                            $totalQuantityOfPhoneCall += $report['quantityOfPhoneCall'];
                            $totalQuantityOfCalendar += $report['quantityOfCalendar'];
                            $totalQuantityOfCustomer += $report['quantityOfCustomer'];
                            $totalQuantityOfContract += $report['quantityOfContract'];
                            $totalQuantityContractWasChecked += $report['quantityContractWasChecked'];
                            $totalValueFromContract += $report['valueFromContract'];
                            $totalValueFromContractWasChecked += $report['valueFromContractWasChecked'];
                            $totalSignNew += $report['signNew'];
                            $totalSignExtend += $report['signExtend'];
                            $totalSignCross += $report['signCross'];
                            $totalSignAgain += $report['signAgain'];
                        @endphp
                        <tr class="even">
                        <td>1</td>
                        <td>
                            <a href="">3152</a>
                        </td>
                        <td>
                            <a href="">{{ $key }}</a>
                        </td>
                        <td>
                            <p style="color:green;">Phòng Ban</p>
                        </td>
                        <td class="colNumber">
                            <a href="">{{ $report['quantityOfCustomer'] }}</a>
                        </td>
                        <td class="colNumber">
                            <a href="">{{ $report['quantityOfPhoneCall'] }}</a>
                        </td>
                        <td class="colNumber">
                            <a href="">{{ $report['quantityOfCalendar'] }}</a>
                        </td>
                        <td class="colNumber">
                            {{ round($report['quantityOfCalendar'] / $report['quantityOfPhoneCall'] * 100)."%" }}
                        </td>
                        <td class="colNumber"></td>
                        <td class="colNumber">
                            <a href=""></a>
                        </td>
                        <td class="colNumber">
                            <a href="">{{ $report['quantityOfCustomer'] }}</a>
                        </td>
                        <td class="colNumber">
                            <a href="">{{ $report['quantityOfContract'] }}</a>
                        </td>
                        <td class="colNumber">
                            <a href="">{{ $report['quantityContractWasChecked'] }}</a>
                        </td>
                        <td class="colNumber">
                            <a href="">{{ number_format($report['valueFromContract']) }}</a>
                        </td>
                        <td class="colNumber">
                            <a href="">{{ number_format($report['valueFromContractWasChecked']) }}</a>
                        </td>
                        <td class="colNumber">
                            <a href=""></a>
                        </td>
                        <td class="colNumber">{{ number_format($report['signNew']) }}</td>
                        <td class="colNumber">
                            <a href="">{{ number_format($report['signExtend']) }}</a>
                        </td>
                        <td class="colNumber">{{ number_format($report['signCross']) }}</td>
                        <td class="colNumber">
                            <a href="">{{ number_format($report['signAgain']) }}</a>
                        </td>
                    </tr>
                    @endforeach
                    <tr class="rowSum even">
                        <td colspan="4"><b>Tổng</b></td>
                        <td class="colNumber">{{ number_format($totalQuantityOfCustomer) }}</td>
                        <td class="colNumber">{{ number_format($totalQuantityOfPhoneCall) }}</td>
                        <td class="colNumber">{{ number_format($totalQuantityOfCalendar) }}</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">{{ number_format($totalQuantityOfCustomer) }}</td>
                        <td class="colNumber">{{ number_format($totalQuantityOfContract) }}</td>
                        <td class="colNumber">{{ number_format($totalQuantityContractWasChecked) }}</td>
                        <td class="colNumber">{{ number_format($totalValueFromContract) }}</td>
                        <td class="colNumber">{{ number_format($totalValueFromContractWasChecked) }}</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">{{ number_format($totalSignNew) }}</td>
                        <td class="colNumber">{{ number_format($totalSignExtend) }}</td>
                        <td class="colNumber">{{ number_format($totalSignCross) }}</td>
                        <td class="colNumber">{{ number_format($totalSignAgain) }}</td>
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
    <script type="text/javascript" src="{{ asset('js/crm/report/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/report/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/report/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/report/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/report/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/report/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/report/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/report/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/report/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('js/crm/report/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/report/bootstrap-multiselect.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/report/saved_resource(1)') }}"></script>
@endsection