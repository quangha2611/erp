@extends('Layout.master1')

@section('css')
    <link href="{{ asset('asset/css/crm/report/bootstrap-multiselect.css') }}" media="screen" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/css/crm/report/style.css') }}" type="text/css">
@endsection

@section('title','ERP-Báo cáo theo phòng ban')

@section('content-page')

                    <div class="tab-content">
                        <style>
                            ul.parsley-error-list {
                                display: none;
                            }
                        </style>
                        <ul class="breadcrumb">
                            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
                            <li class="active">Báo cáo theo phòng ban</li>
                        </ul>
                        <div class="filterContainer">
                            <form method="GET" name="crmReportDepartmentFilter" class="form-inline lolify"
                                role="form" id="crmReportDepartmentFilter">
                                <div class="col-md-10 lolify-default">

                                    <div class="form-group">
                                        <input type="text" name="daterangepicker"
                                            class="form-control date-range-picker" id="daterangepicker"
                                            value="01/07/2020 - 31/07/2020"> </div>
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
                                            <option value="1" selected="selected">----Nhanh.vn</option>
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
                                        <select name="hasRevanue" id="hasRevanue" class="form-control">
                                            <option value="1" selected="selected"> Có doanh số </option>
                                            <option value="2">Không có doanh số</option>
                                            <option value="-1"> Tất cả</option>
                                        </select> </div>
                                    <div class="form-group">
                                        <input name="submit" type="submit" id="btnFilterCrmContact"
                                            class="form-control btn btn-primary" value="Lọc"> </div>

                                </div>
                                <div class="col-md-2 lolify-control">
                                    <div class="btn-group pull-right lolify-features" data-toggle="tooltip"
                                        data-placement="top" title="Chức năng, thao tác">
                                        <button class="btn dropdown-toggle" type="button" aria-haspopup="true"
                                            aria-expanded="false" data-toggle="dropdown">
                                            <span class="fa fa-cog"></span> <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="https://erp.nhanh.vn/crm/report/department?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=1&amp;hasRevanue=1&amp;submit=L%E1%BB%8Dc#"
                                                    id="exportExcel"><i class="fa fa-download fa-lg"></i> Xuất
                                                    excel</a></li>
                                        </ul>
                                    </div>


                                </div>
                            </form>
                            <div class="clearfix"></div>
                            <div class="lolify-left-menu" style="display: none;">
                            </div>
                        </div>
                        <div class="dgContainer">
                            <div style="display: none; width: 1874px;" class="stickyHeader">
                                <table class="table table-bordered" cellspacing="0" cellpadding="0">
                                    <thead>
                                        <tr class="even">
                                            <th rowspan="2" style="width: 42px;">STT</th>
                                            <th rowspan="2" width="15%" style="width: 280px;">Phòng ban</th>
                                            <th rowspan="2" style="width: 93px;"><a
                                                    href="https://erp.nhanh.vn/crm/report/department?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=1&amp;hasRevanue=1&amp;submit=L%E1%BB%8Dc&amp;sort=employeeNumber&amp;dir=asc"><i
                                                        class="fa fa-sort"></i> Nhân viên</a></th>
                                            <th rowspan="2" style="width: 54px;"><a
                                                    href="https://erp.nhanh.vn/crm/report/department?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=1&amp;hasRevanue=1&amp;submit=L%E1%BB%8Dc&amp;sort=lead&amp;dir=asc"><i
                                                        class="fa fa-sort"></i> Tìm</a></th>
                                            <th rowspan="2" style="width: 54px;"><a
                                                    href="https://erp.nhanh.vn/crm/report/department?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=1&amp;hasRevanue=1&amp;submit=L%E1%BB%8Dc&amp;sort=call&amp;dir=asc"><i
                                                        class="fa fa-sort"></i> Gọi</a></th>
                                            <th rowspan="2" style="width: 54px;"><a
                                                    href="https://erp.nhanh.vn/crm/report/department?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=1&amp;hasRevanue=1&amp;submit=L%E1%BB%8Dc&amp;sort=meeting&amp;dir=asc"><i
                                                        class="fa fa-sort"></i> Gặp</a></th>
                                            <th rowspan="2" style="width: 89px;"><a
                                                    href="https://erp.nhanh.vn/crm/report/department?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=1&amp;hasRevanue=1&amp;submit=L%E1%BB%8Dc&amp;sort=call-lead&amp;dir=asc"><i
                                                        class="fa fa-sort"></i> Gọi/Tìm</a></th>
                                            <th rowspan="2" style="width: 81px;"><a
                                                    href="https://erp.nhanh.vn/crm/report/department?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=1&amp;hasRevanue=1&amp;submit=L%E1%BB%8Dc&amp;sort=meeting-call&amp;dir=asc"><i
                                                        class="fa fa-sort"></i> Gặp/Gọi</a></th>
                                            <th rowspan="2" style="width: 125px;"><a
                                                    href="https://erp.nhanh.vn/crm/report/department?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=1&amp;hasRevanue=1&amp;submit=L%E1%BB%8Dc&amp;sort=contract-meeting&amp;dir=asc"><i
                                                        class="fa fa-sort"></i> Hợp Đồng/Gặp</a></th>
                                            <th rowspan="2" style="width: 92px;"><a
                                                    href="https://erp.nhanh.vn/crm/report/department?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=1&amp;hasRevanue=1&amp;submit=L%E1%BB%8Dc&amp;sort=deploy&amp;dir=asc"><i
                                                        class="fa fa-sort"></i> Triển khai</a></th>
                                            <th rowspan="2" style="width: 54px;"><a
                                                    href="https://erp.nhanh.vn/crm/report/department?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=1&amp;hasRevanue=1&amp;submit=L%E1%BB%8Dc&amp;sort=calendar&amp;dir=asc"><i
                                                        class="fa fa-sort"></i> Hẹn</a></th>
                                            <th colspan="8" style="width: 855px;">Hợp đồng</th>
                                        </tr>
                                        <tr>
                                            <th style="width: 90px;"><a
                                                    href="https://erp.nhanh.vn/crm/report/department?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=1&amp;hasRevanue=1&amp;submit=L%E1%BB%8Dc&amp;sort=contractTotal&amp;dir=asc"><i
                                                        class="fa fa-sort"></i> Số lượng</a></th>
                                            <th style="width: 115px;"><a
                                                    href="https://erp.nhanh.vn/crm/report/department?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=1&amp;hasRevanue=1&amp;submit=L%E1%BB%8Dc&amp;sort=contractValue&amp;dir=asc"><i
                                                        class="fa fa-sort"></i> Giá trị</a></th>
                                            <th style="width: 114px;"><a
                                                    href="https://erp.nhanh.vn/crm/report/department?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=1&amp;hasRevanue=1&amp;submit=L%E1%BB%8Dc&amp;sort=contractTransaction&amp;dir=asc"><i
                                                        class="fa fa-sort"></i> Đã thu</a></th>
                                            <th style="width: 122px;"><a
                                                    href="https://erp.nhanh.vn/crm/report/department?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=1&amp;hasRevanue=1&amp;submit=L%E1%BB%8Dc&amp;sort=contractPayment&amp;dir=asc"><i
                                                        class="fa fa-sort"></i> Tính doanh số</a></th>
                                            <th style="width: 102px;"><a
                                                    href="https://erp.nhanh.vn/crm/report/department?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=1&amp;hasRevanue=1&amp;submit=L%E1%BB%8Dc&amp;sort=contractPaymentNew&amp;dir=asc"><i
                                                        class="fa fa-sort"></i> Mới</a></th>
                                            <th style="width: 102px;"><a
                                                    href="https://erp.nhanh.vn/crm/report/department?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=1&amp;hasRevanue=1&amp;submit=L%E1%BB%8Dc&amp;sort=contractPaymentReNew&amp;dir=asc"><i
                                                        class="fa fa-sort"></i> Tái ký</a></th>
                                            <th style="width: 102px;"><a
                                                    href="https://erp.nhanh.vn/crm/report/department?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=1&amp;hasRevanue=1&amp;submit=L%E1%BB%8Dc&amp;sort=contractPaymentExtend&amp;dir=asc"><i
                                                        class="fa fa-sort"></i> Mở rộng</a></th>
                                            <th style="width: 108px;"><a
                                                    href="https://erp.nhanh.vn/crm/report/department?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=1&amp;hasRevanue=1&amp;submit=L%E1%BB%8Dc&amp;sort=contractAvg&amp;dir=asc"><i
                                                        class="fa fa-sort"></i> Trung bình</a></th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-6 dgButtons"></div>
                                <div style="clear: both;"></div><br>
                            </div>
                            <table id="dgCrmReportDepartment" class="table table-bordered">
                                <thead>
                                    <tr class="even">
                                        <th rowspan="2">STT</th>
                                        <th rowspan="2" width="15%">Phòng ban</th>
                                        <th rowspan="2"><a
                                                href="https://erp.nhanh.vn/crm/report/department?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=1&amp;hasRevanue=1&amp;submit=L%E1%BB%8Dc&amp;sort=employeeNumber&amp;dir=asc"><i
                                                    class="fa fa-sort"></i> Nhân viên</a></th>
                                        <th rowspan="2"><a
                                                href="https://erp.nhanh.vn/crm/report/department?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=1&amp;hasRevanue=1&amp;submit=L%E1%BB%8Dc&amp;sort=lead&amp;dir=asc"><i
                                                    class="fa fa-sort"></i> Tìm</a></th>
                                        <th rowspan="2"><a
                                                href="https://erp.nhanh.vn/crm/report/department?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=1&amp;hasRevanue=1&amp;submit=L%E1%BB%8Dc&amp;sort=call&amp;dir=asc"><i
                                                    class="fa fa-sort"></i> Gọi</a></th>
                                        <th rowspan="2"><a
                                                href="https://erp.nhanh.vn/crm/report/department?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=1&amp;hasRevanue=1&amp;submit=L%E1%BB%8Dc&amp;sort=meeting&amp;dir=asc"><i
                                                    class="fa fa-sort"></i> Gặp</a></th>
                                        <th rowspan="2"><a
                                                href="https://erp.nhanh.vn/crm/report/department?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=1&amp;hasRevanue=1&amp;submit=L%E1%BB%8Dc&amp;sort=call-lead&amp;dir=asc"><i
                                                    class="fa fa-sort"></i> Gọi/Tìm</a></th>
                                        <th rowspan="2"><a
                                                href="https://erp.nhanh.vn/crm/report/department?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=1&amp;hasRevanue=1&amp;submit=L%E1%BB%8Dc&amp;sort=meeting-call&amp;dir=asc"><i
                                                    class="fa fa-sort"></i> Gặp/Gọi</a></th>
                                        <th rowspan="2"><a
                                                href="https://erp.nhanh.vn/crm/report/department?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=1&amp;hasRevanue=1&amp;submit=L%E1%BB%8Dc&amp;sort=contract-meeting&amp;dir=asc"><i
                                                    class="fa fa-sort"></i> Hợp Đồng/Gặp</a></th>
                                        <th rowspan="2"><a
                                                href="https://erp.nhanh.vn/crm/report/department?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=1&amp;hasRevanue=1&amp;submit=L%E1%BB%8Dc&amp;sort=deploy&amp;dir=asc"><i
                                                    class="fa fa-sort"></i> Triển khai</a></th>
                                        <th rowspan="2"><a
                                                href="https://erp.nhanh.vn/crm/report/department?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=1&amp;hasRevanue=1&amp;submit=L%E1%BB%8Dc&amp;sort=calendar&amp;dir=asc"><i
                                                    class="fa fa-sort"></i> Hẹn</a></th>
                                        <th colspan="8">Hợp đồng</th>
                                    </tr>
                                    <tr>
                                        <th><a
                                                href="https://erp.nhanh.vn/crm/report/department?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=1&amp;hasRevanue=1&amp;submit=L%E1%BB%8Dc&amp;sort=contractTotal&amp;dir=asc"><i
                                                    class="fa fa-sort"></i> Số lượng</a></th>
                                        <th><a
                                                href="https://erp.nhanh.vn/crm/report/department?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=1&amp;hasRevanue=1&amp;submit=L%E1%BB%8Dc&amp;sort=contractValue&amp;dir=asc"><i
                                                    class="fa fa-sort"></i> Giá trị</a></th>
                                        <th><a
                                                href="https://erp.nhanh.vn/crm/report/department?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=1&amp;hasRevanue=1&amp;submit=L%E1%BB%8Dc&amp;sort=contractTransaction&amp;dir=asc"><i
                                                    class="fa fa-sort"></i> Đã thu</a></th>
                                        <th><a
                                                href="https://erp.nhanh.vn/crm/report/department?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=1&amp;hasRevanue=1&amp;submit=L%E1%BB%8Dc&amp;sort=contractPayment&amp;dir=asc"><i
                                                    class="fa fa-sort"></i> Tính doanh số</a></th>
                                        <th><a
                                                href="https://erp.nhanh.vn/crm/report/department?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=1&amp;hasRevanue=1&amp;submit=L%E1%BB%8Dc&amp;sort=contractPaymentNew&amp;dir=asc"><i
                                                    class="fa fa-sort"></i> Mới</a></th>
                                        <th><a
                                                href="https://erp.nhanh.vn/crm/report/department?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=1&amp;hasRevanue=1&amp;submit=L%E1%BB%8Dc&amp;sort=contractPaymentReNew&amp;dir=asc"><i
                                                    class="fa fa-sort"></i> Tái ký</a></th>
                                        <th><a
                                                href="https://erp.nhanh.vn/crm/report/department?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=1&amp;hasRevanue=1&amp;submit=L%E1%BB%8Dc&amp;sort=contractPaymentExtend&amp;dir=asc"><i
                                                    class="fa fa-sort"></i> Mở rộng</a></th>
                                        <th><a
                                                href="https://erp.nhanh.vn/crm/report/department?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=1&amp;hasRevanue=1&amp;submit=L%E1%BB%8Dc&amp;sort=contractAvg&amp;dir=asc"><i
                                                    class="fa fa-sort"></i> Trung bình</a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="rowSum even">
                                        <td style="text-align:center;s">[0]</td>
                                        <td style="text-align:center;s">[1]</td>
                                        <td style="text-align:center;s">[2]</td>
                                        <td style="text-align:center;s">[3]</td>
                                        <td style="text-align:center;s">[4]</td>
                                        <td style="text-align:center;s">[5]</td>
                                        <td style="text-align:center;s">[6]</td>
                                        <td style="text-align:center;s">[7]</td>
                                        <td style="text-align:center;s">[8]</td>
                                        <td style="text-align:center;s">[9]</td>
                                        <td style="text-align:center;s">[10]</td>
                                        <td style="text-align:center;s">[11]</td>
                                        <td style="text-align:center;s">[12]</td>
                                        <td style="text-align:center;s">[13]</td>
                                        <td style="text-align:center;s">[14]</td>
                                        <td style="text-align:center;s">[15]</td>
                                        <td style="text-align:center;s">[16]</td>
                                        <td style="text-align:center;s">[17]</td>
                                        <td style="text-align:center;">[18] = [14 / 2]</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Nhanh HN - Phòng KD2_TùngNT</td>
                                        <td>13</td>
                                        <td class="colNumber">219</td>
                                        <td class="colNumber">970</td>
                                        <td class="colNumber">124</td>
                                        <td class="colNumber">442,92%</td>
                                        <td class="colNumber">12,78%</td>
                                        <td class="colNumber">62,9%</td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber">117</td>
                                        <td class="colNumber">78</td>
                                        <td class="colNumber"><a target="_blank"
                                                href="https://erp.nhanh.vn/crm/contract/transaction?departmentId=1318&amp;applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020">371.410.000</a>
                                        </td>
                                        <td class="colNumber"><a target="_blank"
                                                href="https://erp.nhanh.vn/crm/contract/transaction?departmentId=1318&amp;applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020">319.350.000</a>
                                        </td>
                                        <td class="colNumber">235.652.500</td>
                                        <td class="colNumber">107.348.500</td>
                                        <td class="colNumber">45.660.000</td>
                                        <td class="colNumber">82.644.000</td>
                                        <td class="colNumber">18.127.115</td>
                                    </tr>
                                    <tr class="even">
                                        <td>2</td>
                                        <td>Nhanh HN - Phòng KD5_AnhNX</td>
                                        <td>9</td>
                                        <td class="colNumber">196</td>
                                        <td class="colNumber">676</td>
                                        <td class="colNumber">52</td>
                                        <td class="colNumber">344,9%</td>
                                        <td class="colNumber">7,69%</td>
                                        <td class="colNumber">121,15%</td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber">57</td>
                                        <td class="colNumber">63</td>
                                        <td class="colNumber"><a target="_blank"
                                                href="https://erp.nhanh.vn/crm/contract/transaction?departmentId=1317&amp;applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020">278.740.000</a>
                                        </td>
                                        <td class="colNumber"><a target="_blank"
                                                href="https://erp.nhanh.vn/crm/contract/transaction?departmentId=1317&amp;applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020">195.440.000</a>
                                        </td>
                                        <td class="colNumber">149.941.500</td>
                                        <td class="colNumber">81.657.500</td>
                                        <td class="colNumber">38.044.000</td>
                                        <td class="colNumber">30.240.000</td>
                                        <td class="colNumber">16.660.167</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Sale Marketing</td>
                                        <td>9</td>
                                        <td class="colNumber">405</td>
                                        <td class="colNumber">456</td>
                                        <td class="colNumber">12</td>
                                        <td class="colNumber">112,59%</td>
                                        <td class="colNumber">2,63%</td>
                                        <td class="colNumber">175%</td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber">21</td>
                                        <td class="colNumber"><a target="_blank"
                                                href="https://erp.nhanh.vn/crm/contract/transaction?departmentId=1386&amp;applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020">165.800.000</a>
                                        </td>
                                        <td class="colNumber"><a target="_blank"
                                                href="https://erp.nhanh.vn/crm/contract/transaction?departmentId=1386&amp;applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020">93.750.000</a>
                                        </td>
                                        <td class="colNumber">62.652.500</td>
                                        <td class="colNumber">51.868.500</td>
                                        <td class="colNumber">10.484.000</td>
                                        <td class="colNumber">300.000</td>
                                        <td class="colNumber">6.961.389</td>
                                    </tr>
                                    <tr class="even">
                                        <td>4</td>
                                        <td>Nhanh HN - Phòng KD3_HuyPV</td>
                                        <td>5</td>
                                        <td class="colNumber">37</td>
                                        <td class="colNumber">103</td>
                                        <td class="colNumber">9</td>
                                        <td class="colNumber">278,38%</td>
                                        <td class="colNumber">8,74%</td>
                                        <td class="colNumber">422,22%</td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber">5</td>
                                        <td class="colNumber">38</td>
                                        <td class="colNumber"><a target="_blank"
                                                href="https://erp.nhanh.vn/crm/contract/transaction?departmentId=1319&amp;applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020">151.762.400</a>
                                        </td>
                                        <td class="colNumber"><a target="_blank"
                                                href="https://erp.nhanh.vn/crm/contract/transaction?departmentId=1319&amp;applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020">84.562.400</a>
                                        </td>
                                        <td class="colNumber">64.547.056</td>
                                        <td class="colNumber">45.482.056</td>
                                        <td class="colNumber">9.450.000</td>
                                        <td class="colNumber">9.615.000</td>
                                        <td class="colNumber">12.909.411</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Nhanh HN - KD16_TungNH</td>
                                        <td>5</td>
                                        <td class="colNumber">112</td>
                                        <td class="colNumber">314</td>
                                        <td class="colNumber">36</td>
                                        <td class="colNumber">280,36%</td>
                                        <td class="colNumber">11,46%</td>
                                        <td class="colNumber">80,56%</td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber">14</td>
                                        <td class="colNumber">29</td>
                                        <td class="colNumber"><a target="_blank"
                                                href="https://erp.nhanh.vn/crm/contract/transaction?departmentId=1284&amp;applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020">135.870.000</a>
                                        </td>
                                        <td class="colNumber"><a target="_blank"
                                                href="https://erp.nhanh.vn/crm/contract/transaction?departmentId=1284&amp;applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020">109.120.000</a>
                                        </td>
                                        <td class="colNumber">81.300.000</td>
                                        <td class="colNumber">51.218.500</td>
                                        <td class="colNumber">20.720.000</td>
                                        <td class="colNumber">9.361.500</td>
                                        <td class="colNumber">16.260.000</td>
                                    </tr>
                                    <tr class="even">
                                        <td>6</td>
                                        <td>Nhanh HN - Phòng KD4_TrườngVV</td>
                                        <td>6</td>
                                        <td class="colNumber">94</td>
                                        <td class="colNumber">194</td>
                                        <td class="colNumber">56</td>
                                        <td class="colNumber">206,38%</td>
                                        <td class="colNumber">28,87%</td>
                                        <td class="colNumber">75%</td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber">25</td>
                                        <td class="colNumber">42</td>
                                        <td class="colNumber"><a target="_blank"
                                                href="https://erp.nhanh.vn/crm/contract/transaction?departmentId=1320&amp;applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020">130.825.000</a>
                                        </td>
                                        <td class="colNumber"><a target="_blank"
                                                href="https://erp.nhanh.vn/crm/contract/transaction?departmentId=1320&amp;applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020">157.865.000</a>
                                        </td>
                                        <td class="colNumber">117.782.450</td>
                                        <td class="colNumber">89.182.450</td>
                                        <td class="colNumber">22.780.000</td>
                                        <td class="colNumber">5.820.000</td>
                                        <td class="colNumber">19.630.408</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Nhanh HN - KD11_NganLTT</td>
                                        <td>5</td>
                                        <td class="colNumber">118</td>
                                        <td class="colNumber">295</td>
                                        <td class="colNumber">41</td>
                                        <td class="colNumber">250%</td>
                                        <td class="colNumber">13,9%</td>
                                        <td class="colNumber">65,85%</td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber">8</td>
                                        <td class="colNumber">27</td>
                                        <td class="colNumber"><a target="_blank"
                                                href="https://erp.nhanh.vn/crm/contract/transaction?departmentId=1248&amp;applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020">113.286.000</a>
                                        </td>
                                        <td class="colNumber"><a target="_blank"
                                                href="https://erp.nhanh.vn/crm/contract/transaction?departmentId=1248&amp;applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020">71.736.000</a>
                                        </td>
                                        <td class="colNumber">49.603.120</td>
                                        <td class="colNumber">46.573.120</td>
                                        <td class="colNumber">750.000</td>
                                        <td class="colNumber">2.280.000</td>
                                        <td class="colNumber">9.920.624</td>
                                    </tr>
                                    <tr class="even">
                                        <td>8</td>
                                        <td>Phòng dịch vụ SEO GG MAPS</td>
                                        <td>9</td>
                                        <td class="colNumber">34</td>
                                        <td class="colNumber">10</td>
                                        <td class="colNumber">7</td>
                                        <td class="colNumber">29,41%</td>
                                        <td class="colNumber">70%</td>
                                        <td class="colNumber">828,57%</td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber">1</td>
                                        <td class="colNumber">58</td>
                                        <td class="colNumber"><a target="_blank"
                                                href="https://erp.nhanh.vn/crm/contract/transaction?departmentId=1457&amp;applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020">100.985.900</a>
                                        </td>
                                        <td class="colNumber"><a target="_blank"
                                                href="https://erp.nhanh.vn/crm/contract/transaction?departmentId=1457&amp;applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020">85.535.000</a>
                                        </td>
                                        <td class="colNumber">78.059.350</td>
                                        <td class="colNumber">58.216.350</td>
                                        <td class="colNumber">4.428.000</td>
                                        <td class="colNumber">15.415.000</td>
                                        <td class="colNumber">8.673.261</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Nhanh HN - KD6_LâmVN</td>
                                        <td>1</td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber">1</td>
                                        <td class="colNumber">7</td>
                                        <td class="colNumber"><a target="_blank"
                                                href="https://erp.nhanh.vn/crm/contract/transaction?departmentId=1133&amp;applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020">92.850.000</a>
                                        </td>
                                        <td class="colNumber"><a target="_blank"
                                                href="https://erp.nhanh.vn/crm/contract/transaction?departmentId=1133&amp;applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020">13.650.000</a>
                                        </td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                    </tr>
                                    <tr class="even">
                                        <td>10</td>
                                        <td>Nhanh HN - KD17_TùngNT</td>
                                        <td>5</td>
                                        <td class="colNumber">14</td>
                                        <td class="colNumber">204</td>
                                        <td class="colNumber">39</td>
                                        <td class="colNumber">1.457,14%</td>
                                        <td class="colNumber">19,12%</td>
                                        <td class="colNumber">41,03%</td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber">17</td>
                                        <td class="colNumber">16</td>
                                        <td class="colNumber"><a target="_blank"
                                                href="https://erp.nhanh.vn/crm/contract/transaction?departmentId=1313&amp;applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020">65.800.000</a>
                                        </td>
                                        <td class="colNumber"><a target="_blank"
                                                href="https://erp.nhanh.vn/crm/contract/transaction?departmentId=1313&amp;applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020">65.110.000</a>
                                        </td>
                                        <td class="colNumber">43.039.700</td>
                                        <td class="colNumber">25.731.700</td>
                                        <td class="colNumber">6.900.000</td>
                                        <td class="colNumber">10.408.000</td>
                                        <td class="colNumber">8.607.940</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Marketing</td>
                                        <td>12</td>
                                        <td class="colNumber">16</td>
                                        <td class="colNumber">4</td>
                                        <td class="colNumber">23</td>
                                        <td class="colNumber">25%</td>
                                        <td class="colNumber">575%</td>
                                        <td class="colNumber">34,78%</td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber">8</td>
                                        <td class="colNumber"><a target="_blank"
                                                href="https://erp.nhanh.vn/crm/contract/transaction?departmentId=845&amp;applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020">62.950.000</a>
                                        </td>
                                        <td class="colNumber"><a target="_blank"
                                                href="https://erp.nhanh.vn/crm/contract/transaction?departmentId=845&amp;applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020">24.000.000</a>
                                        </td>
                                        <td class="colNumber">11.662.000</td>
                                        <td class="colNumber">11.662.000</td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber">971.833</td>
                                    </tr>
                                    <tr class="even">
                                        <td>12</td>
                                        <td>Nhanh HN - KD8_CôngND</td>
                                        <td>6</td>
                                        <td class="colNumber">27</td>
                                        <td class="colNumber">149</td>
                                        <td class="colNumber">31</td>
                                        <td class="colNumber">551,85%</td>
                                        <td class="colNumber">20,81%</td>
                                        <td class="colNumber">58,06%</td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber">13</td>
                                        <td class="colNumber">18</td>
                                        <td class="colNumber"><a target="_blank"
                                                href="https://erp.nhanh.vn/crm/contract/transaction?departmentId=1263&amp;applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020">52.940.000</a>
                                        </td>
                                        <td class="colNumber"><a target="_blank"
                                                href="https://erp.nhanh.vn/crm/contract/transaction?departmentId=1263&amp;applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020">35.750.000</a>
                                        </td>
                                        <td class="colNumber">26.829.500</td>
                                        <td class="colNumber">17.529.500</td>
                                        <td class="colNumber">7.950.000</td>
                                        <td class="colNumber">1.350.000</td>
                                        <td class="colNumber">4.471.583</td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>Nhanh HN - KD7_ĐiệpNH</td>
                                        <td>2</td>
                                        <td class="colNumber">1</td>
                                        <td class="colNumber">2</td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber">200%</td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber">1</td>
                                        <td class="colNumber">11</td>
                                        <td class="colNumber"><a target="_blank"
                                                href="https://erp.nhanh.vn/crm/contract/transaction?departmentId=1157&amp;applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020">52.710.000</a>
                                        </td>
                                        <td class="colNumber"><a target="_blank"
                                                href="https://erp.nhanh.vn/crm/contract/transaction?departmentId=1157&amp;applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020">22.710.000</a>
                                        </td>
                                        <td class="colNumber">19.902.000</td>
                                        <td class="colNumber">6.150.000</td>
                                        <td class="colNumber">4.650.000</td>
                                        <td class="colNumber">9.102.000</td>
                                        <td class="colNumber">9.951.000</td>
                                    </tr>
                                    <tr class="even">
                                        <td>14</td>
                                        <td>Ecomcare</td>
                                        <td>10</td>
                                        <td class="colNumber">90</td>
                                        <td class="colNumber">156</td>
                                        <td class="colNumber">10</td>
                                        <td class="colNumber">173,33%</td>
                                        <td class="colNumber">6,41%</td>
                                        <td class="colNumber">90%</td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber">1</td>
                                        <td class="colNumber">9</td>
                                        <td class="colNumber"><a target="_blank"
                                                href="https://erp.nhanh.vn/crm/contract/transaction?departmentId=1419&amp;applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020">49.600.000</a>
                                        </td>
                                        <td class="colNumber"><a target="_blank"
                                                href="https://erp.nhanh.vn/crm/contract/transaction?departmentId=1419&amp;applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020">30.150.000</a>
                                        </td>
                                        <td class="colNumber">20.682.500</td>
                                        <td class="colNumber">20.682.500</td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber">2.068.250</td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>Nhanh HN - ThanhTV_Phát triển đối tác</td>
                                        <td>3</td>
                                        <td class="colNumber">89</td>
                                        <td class="colNumber">42</td>
                                        <td class="colNumber">7</td>
                                        <td class="colNumber">47,19%</td>
                                        <td class="colNumber">16,67%</td>
                                        <td class="colNumber">242,86%</td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber">1</td>
                                        <td class="colNumber">17</td>
                                        <td class="colNumber"><a target="_blank"
                                                href="https://erp.nhanh.vn/crm/contract/transaction?departmentId=1285&amp;applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020">46.465.000</a>
                                        </td>
                                        <td class="colNumber"><a target="_blank"
                                                href="https://erp.nhanh.vn/crm/contract/transaction?departmentId=1285&amp;applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020">48.865.000</a>
                                        </td>
                                        <td class="colNumber">33.443.353</td>
                                        <td class="colNumber">24.138.353</td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber">9.305.000</td>
                                        <td class="colNumber">11.147.784</td>
                                    </tr>
                                    <tr class="even">
                                        <td>16</td>
                                        <td>Nhanh HN - KD10_ThanhPT</td>
                                        <td>5</td>
                                        <td class="colNumber">159</td>
                                        <td class="colNumber">444</td>
                                        <td class="colNumber">40</td>
                                        <td class="colNumber">279,25%</td>
                                        <td class="colNumber">9,01%</td>
                                        <td class="colNumber">37,5%</td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber">27</td>
                                        <td class="colNumber">15</td>
                                        <td class="colNumber"><a target="_blank"
                                                href="https://erp.nhanh.vn/crm/contract/transaction?departmentId=1241&amp;applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020">28.490.000</a>
                                        </td>
                                        <td class="colNumber"><a target="_blank"
                                                href="https://erp.nhanh.vn/crm/contract/transaction?departmentId=1241&amp;applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020">26.230.000</a>
                                        </td>
                                        <td class="colNumber">25.311.200</td>
                                        <td class="colNumber">15.246.200</td>
                                        <td class="colNumber">6.780.000</td>
                                        <td class="colNumber">3.285.000</td>
                                        <td class="colNumber">5.062.240</td>
                                    </tr>
                                    <tr>
                                        <td>17</td>
                                        <td>Nhanh HN - KD19 - PhoDG</td>
                                        <td></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber">8</td>
                                        <td class="colNumber"><a target="_blank"
                                                href="https://erp.nhanh.vn/crm/contract/transaction?departmentId=1381&amp;applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020">22.650.000</a>
                                        </td>
                                        <td class="colNumber"><a target="_blank"
                                                href="https://erp.nhanh.vn/crm/contract/transaction?departmentId=1381&amp;applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020">21.500.000</a>
                                        </td>
                                        <td class="colNumber">17.659.500</td>
                                        <td class="colNumber">8.940.000</td>
                                        <td class="colNumber">750.000</td>
                                        <td class="colNumber">7.969.500</td>
                                        <td class="colNumber"></td>
                                    </tr>
                                    <tr class="even">
                                        <td>18</td>
                                        <td>Phòng Dịch Vụ Khách Hàng</td>
                                        <td>8</td>
                                        <td class="colNumber">7</td>
                                        <td class="colNumber">198</td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber">2.828,57%</td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber">27</td>
                                        <td class="colNumber"><a target="_blank"
                                                href="https://erp.nhanh.vn/crm/contract/transaction?departmentId=1282&amp;applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020">21.840.000</a>
                                        </td>
                                        <td class="colNumber"><a target="_blank"
                                                href="https://erp.nhanh.vn/crm/contract/transaction?departmentId=1282&amp;applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020">22.140.000</a>
                                        </td>
                                        <td class="colNumber">24.150.568</td>
                                        <td class="colNumber">5.487.568</td>
                                        <td class="colNumber">8.625.000</td>
                                        <td class="colNumber">10.038.000</td>
                                        <td class="colNumber">3.018.821</td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td>Chăm sóc khách hàng - UyênTL</td>
                                        <td>4</td>
                                        <td class="colNumber">1.092</td>
                                        <td class="colNumber">22</td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber">2,01%</td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber">2</td>
                                        <td class="colNumber">36</td>
                                        <td class="colNumber"><a target="_blank"
                                                href="https://erp.nhanh.vn/crm/contract/transaction?departmentId=1147&amp;applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020">21.000.000</a>
                                        </td>
                                        <td class="colNumber"><a target="_blank"
                                                href="https://erp.nhanh.vn/crm/contract/transaction?departmentId=1147&amp;applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020">27.600.000</a>
                                        </td>
                                        <td class="colNumber">12.810.000</td>
                                        <td class="colNumber">4.575.000</td>
                                        <td class="colNumber">5.325.000</td>
                                        <td class="colNumber">2.910.000</td>
                                        <td class="colNumber">3.202.500</td>
                                    </tr>
                                    <tr class="even">
                                        <td>20</td>
                                        <td>Phòng nhân sự - Nhanh.vn</td>
                                        <td>6</td>
                                        <td class="colNumber">2</td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber">5</td>
                                        <td class="colNumber"><a target="_blank"
                                                href="https://erp.nhanh.vn/crm/contract/transaction?departmentId=1387&amp;applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020">14.400.000</a>
                                        </td>
                                        <td class="colNumber"><a target="_blank"
                                                href="https://erp.nhanh.vn/crm/contract/transaction?departmentId=1387&amp;applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020">14.400.000</a>
                                        </td>
                                        <td class="colNumber">3.960.000</td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber">3.600.000</td>
                                        <td class="colNumber">360.000</td>
                                        <td class="colNumber">660.000</td>
                                    </tr>
                                    <tr>
                                        <td>21</td>
                                        <td>Nhanh HN - KD1_LanNT</td>
                                        <td>1</td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber">3</td>
                                        <td class="colNumber"><a target="_blank"
                                                href="https://erp.nhanh.vn/crm/contract/transaction?departmentId=1072&amp;applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020">12.300.000</a>
                                        </td>
                                        <td class="colNumber"><a target="_blank"
                                                href="https://erp.nhanh.vn/crm/contract/transaction?departmentId=1072&amp;applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020">5.100.000</a>
                                        </td>
                                        <td class="colNumber">8.295.000</td>
                                        <td class="colNumber">4.020.000</td>
                                        <td class="colNumber">1.875.000</td>
                                        <td class="colNumber">2.400.000</td>
                                        <td class="colNumber">8.295.000</td>
                                    </tr>
                                    <tr class="even">
                                        <td>22</td>
                                        <td>Chăm sóc đơn hàng - HươngĐTM</td>
                                        <td>11</td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber">8</td>
                                        <td class="colNumber"><a target="_blank"
                                                href="https://erp.nhanh.vn/crm/contract/transaction?departmentId=843&amp;applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020">10.900.000</a>
                                        </td>
                                        <td class="colNumber"><a target="_blank"
                                                href="https://erp.nhanh.vn/crm/contract/transaction?departmentId=843&amp;applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020">10.900.000</a>
                                        </td>
                                        <td class="colNumber">10.315.000</td>
                                        <td class="colNumber">600.000</td>
                                        <td class="colNumber">3.795.000</td>
                                        <td class="colNumber">5.920.000</td>
                                        <td class="colNumber">937.727</td>
                                    </tr>
                                    <tr>
                                        <td>23</td>
                                        <td>Giám đốc dự án</td>
                                        <td>2</td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber">1</td>
                                        <td class="colNumber"><a target="_blank"
                                                href="https://erp.nhanh.vn/crm/contract/transaction?departmentId=840&amp;applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020">7.800.000</a>
                                        </td>
                                        <td class="colNumber"><a target="_blank"
                                                href="https://erp.nhanh.vn/crm/contract/transaction?departmentId=840&amp;applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020">10.800.000</a>
                                        </td>
                                        <td class="colNumber">7.170.000</td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber">1.320.000</td>
                                        <td class="colNumber">5.850.000</td>
                                        <td class="colNumber">3.585.000</td>
                                    </tr>
                                    <tr class="even">
                                        <td>24</td>
                                        <td>Support văn phòng</td>
                                        <td>1</td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber">1</td>
                                        <td class="colNumber"><a target="_blank"
                                                href="https://erp.nhanh.vn/crm/contract/transaction?departmentId=1209&amp;applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.400.000</a>
                                        </td>
                                        <td class="colNumber"><a target="_blank"
                                                href="https://erp.nhanh.vn/crm/contract/transaction?departmentId=1209&amp;applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.400.000</a>
                                        </td>
                                        <td class="colNumber">5.475.000</td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber">5.475.000</td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber">5.475.000</td>
                                    </tr>
                                    <tr>
                                        <td>25</td>
                                        <td>Nhanh.vn Hà Nội</td>
                                        <td></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber">1</td>
                                        <td class="colNumber"><a target="_blank"
                                                href="https://erp.nhanh.vn/crm/contract/transaction?departmentId=950&amp;applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.100.000</a>
                                        </td>
                                        <td class="colNumber"><a target="_blank"
                                                href="https://erp.nhanh.vn/crm/contract/transaction?departmentId=950&amp;applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.100.000</a>
                                        </td>
                                        <td class="colNumber">1.001.000</td>
                                        <td class="colNumber">1.001.000</td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                    </tr>
                                    <tr class="even">
                                        <td>26</td>
                                        <td>Phòng IT</td>
                                        <td>4</td>
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
                                        <td class="colNumber">79.230.400</td>
                                        <td class="colNumber">72.613.400</td>
                                        <td class="colNumber">270.000</td>
                                        <td class="colNumber">6.347.000</td>
                                        <td class="colNumber">19.807.600</td>
                                    </tr>
                                    <tr>
                                        <td>27</td>
                                        <td>Tester</td>
                                        <td>2</td>
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
                                                href="https://erp.nhanh.vn/crm/contract/transaction?departmentId=849&amp;applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020">12.000.000</a>
                                        </td>
                                        <td class="colNumber">6.000.000</td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber">6.000.000</td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber">3.000.000</td>
                                    </tr>
                                    <tr class="even">
                                        <td>28</td>
                                        <td>Đại lý công ty</td>
                                        <td>20</td>
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
                                        <td class="colNumber">9.840.000</td>
                                        <td class="colNumber">9.840.000</td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber">492.000</td>
                                    </tr>
                                    <tr>
                                        <td>29</td>
                                        <td>IT ERP</td>
                                        <td>3</td>
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
                                        <td class="colNumber">3.150.000</td>
                                        <td class="colNumber">3.150.000</td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber">1.050.000</td>
                                    </tr>
                                    <tr class="rowSum even">
                                        <td colspan="2"><b>Tổng</b></td>
                                        <td class="colNumber">167</td>
                                        <td class="colNumber">2.712</td>
                                        <td class="colNumber">4.239</td>
                                        <td class="colNumber">487</td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber"></td>
                                        <td class="colNumber">290</td>
                                        <td class="colNumber">547</td>
                                        <td class="colNumber">2.014.874.300</td>
                                        <td class="colNumber">1.511.763.400</td>
                                        <td class="colNumber">1.209.465.197</td>
                                        <td class="colNumber">762.914.197</td>
                                        <td class="colNumber">215.631.000</td>
                                        <td class="colNumber">230.920.000</td>
                                        <td class="colNumber">7.242.307</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-md-6 dgButtons"></div>
                            </div>
                        </div>
                        <style>
                            ul.multiselect-container>li>a label.checkbox {
                                padding: 0 !important;
                            }
                        </style>
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
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/department.js') }}"></script>
@endsection