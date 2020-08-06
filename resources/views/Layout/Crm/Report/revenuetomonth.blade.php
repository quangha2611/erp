@extends('Layout.master1')

@section('css')
    <link href="{{ asset('asset/css/crm/report/bootstrap-multiselect.css') }}" media="screen" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/css/crm/report/style.css') }}" type="text/css">
    <style>
		.cke {
			visibility: hidden;
		}
	</style>
@endsection

@section('title','ERP-Báo cáo doanh số từng tháng cho NVKD')

@section('content-page')


    <div class="tab-content">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li class="active">Báo cáo doanh số từng tháng cho NVKD</li>
        </ul>
        <div class="filterContainer">
            <form method="GET" name="crmReportEmployeeBillFilter" class="form-inline lolify"
                role="form" id="crmReportEmployeeBillFilter">
                <div class="col-md-10 lolify-default">

                    <div class="form-group">
                        <select name="fromMonth" id="fromMonth" class="form-control">
                            <option value="">- Từ tháng -</option>
                            <option value="1" selected="selected">Tháng 1</option>
                            <option value="2">Tháng 2</option>
                            <option value="3">Tháng 3</option>
                            <option value="4">Tháng 4</option>
                            <option value="5">Tháng 5</option>
                            <option value="6">Tháng 6</option>
                            <option value="7">Tháng 7</option>
                            <option value="8">Tháng 8</option>
                            <option value="9">Tháng 9</option>
                            <option value="10">Tháng 10</option>
                            <option value="11">Tháng 11</option>
                            <option value="12">Tháng 12</option>
                        </select> </div>
                    <div class="form-group">
                        <select name="toMonth" id="toMonth" class="form-control">
                            <option value="">- Đến tháng -</option>
                            <option value="1">Tháng 1</option>
                            <option value="2">Tháng 2</option>
                            <option value="3">Tháng 3</option>
                            <option value="4">Tháng 4</option>
                            <option value="5">Tháng 5</option>
                            <option value="6">Tháng 6</option>
                            <option value="7">Tháng 7</option>
                            <option value="8">Tháng 8</option>
                            <option value="9">Tháng 9</option>
                            <option value="10">Tháng 10</option>
                            <option value="11">Tháng 11</option>
                            <option value="12" selected="selected">Tháng 12</option>
                        </select> </div>
                    <div class="form-group">
                        <select name="toYear" id="toYear" class="form-control">
                            <option value="">- Năm -</option>
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019" selected="selected">2019</option>
                            <option value="2020">2020</option>
                        </select> </div>
                    <input type="hidden" name="companyId" id="companyId" class="form-control"
                        value="319">
                    <div class="form-group">
                        <select name="departmentId" id="departmentId" class="form-control">
                            <option value="">- Phòng ban NV -</option>
                            <option value="628">00 CEO Office</option>
                            <option value="629">-- Phòng giám đốc</option>
                            <option value="630">-- -- Trợ lý</option>
                            <option value="631">-- -- Quản lý chung</option>
                            <option value="657">-- -- Dự án kinh doanh Wesave</option>
                            <option value="1304">-- -- -- Thiết kế</option>
                            <option value="1064">-- VNPU</option>
                            <option value="632">F5 Finance &amp; Accounting</option>
                            <option value="633">-- Bộ phận Tài chính - Kế toán</option>
                            <option value="634">-- -- Phòng tài chính - kế toán</option>
                            <option value="635">-- -- -- Kế toán</option>
                            <option value="636">F6 Human Resources</option>
                            <option value="637">-- Bộ phận Hành chính nhân sự HCM</option>
                            <option value="638">-- -- Phòng Hành chính - Nhân sự</option>
                            <option value="688">-- -- PR - Nội bộ</option>
                            <option value="1063">-- -- Tuyển dụng</option>
                            <option value="639">O1 Marketplaces</option>
                            <option value="640">-- Sàn Vật Giá HCM</option>
                            <option value="641">-- -- Phòng KD 01</option>
                            <option value="642">-- -- -- Nhóm KD 24</option>
                            <option value="645">-- -- -- Nhóm KD 7</option>
                            <option value="646">-- -- -- Nhóm KD 01.3</option>
                            <option value="648">-- -- Phòng KD 3</option>
                            <option value="1060">-- -- -- Nhóm Nhanh p3</option>
                            <option value="656">-- -- Phòng KD 8</option>
                            <option value="660">-- -- -- Nhóm KD 8.6</option>
                            <option value="661">-- -- -- Nhóm KD 8.1</option>
                            <option value="1116">-- -- -- Nhóm KD 23</option>
                            <option value="1239">-- -- -- Nhóm KD 8.7 _Nhi</option>
                            <option value="659">-- -- -- -- Nhóm KD 8.4_Uyên</option>
                            <option value="665">-- -- KINH DOANH TD</option>
                            <option value="1307">-- -- -- Nhóm KDTD 13</option>
                            <option value="1032">-- -- Phòng KD10</option>
                            <option value="1371">-- -- CSonline-Telesale</option>
                            <option value="679">-- -- -- Nhóm CS online</option>
                            <option value="1372">-- -- -- Nhóm Telesale</option>
                            <option value="1442">-- -- Phòng KD ĐDV</option>
                            <option value="1443">-- -- Phòng KD Bảo Kim &amp; Wesave</option>
                            <option value="1444">-- -- Phòng KD Wesave</option>
                            <option value="667">-- Bộ phận quản trị thông tin</option>
                            <option value="668">-- -- Nhập liệu</option>
                            <option value="669">-- -- -- Công nghiệp - HCM</option>
                            <option value="670">-- -- -- PCN - HCM</option>
                            <option value="682">-- Bộ phận thiết kế gian hàng HCM</option>
                            <option value="683">-- -- Phòng thiết kế gian hàng</option>
                            <option value="1446">-- Bảo Kim &amp; Wesave HCM</option>
                            <option value="1447">-- 9Houz HCM</option>
                            <option value="1448">-- Wesave HCM</option>
                            <option value="1449">-- Wehelp HCM</option>
                            <option value="675">Nhóm 9</option>
                            <option value="676">Nhóm 2</option>
                            <option value="684">F1 Marketing</option>
                            <option value="685">-- Bộ phận Marketing</option>
                            <option value="686">-- -- Phòng marketing</option>
                            <option value="687">-- -- -- Media</option>
                            <option value="1075">-- -- -- Nhóm Marketing - 01</option>
                            <option value="1076">-- -- -- Nhóm Marketing - 02</option>
                            <option value="1028">IT-Kỹ thuật</option>
                            <option value="1454">Nhanh HCM</option>
                            <option value="1126">-- Nhanh HCM - Phòng KD1_NgânHTM</option>
                            <option value="1308">-- -- Nhanh HCM - Nhóm KD9_ThưNTA</option>
                            <option value="1467">-- -- -- Nhanh HCM - SEO GG MAPS</option>
                            <option value="1155">-- Nhanh HCM - Phòng KD8_LâmNV</option>
                            <option value="1476">-- -- Nhanh HCM - Ecome Care HCM</option>
                            <option value="1158">-- Nhanh HCM - Nhóm KD3_NgânTK</option>
                            <option value="1254">-- Nhanh HCM - Nhóm KD5_LiêmNT</option>
                            <option value="1376">-- -- Nhanh HCM - Nhóm KD4_ThịnhNQG</option>
                            <option value="1299">-- Nhanh HCM - Cộng tác viên</option>
                            <option value="1301">-- Nhanh HCM - Tuyển dụng</option>
                            <option value="1456">-- Nhanh HCM - Kế toán</option>
                            <option value="1468">-- Nhanh HCM - Sale Marketing</option>
                        </select> </div>
                    <div class="form-group">
                        <input type="text" name="q" placeholder="Tên hoặc mã nhân sự" id="q"
                            class="form-control" value=""> </div>
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
                            <option value="402">---Công ty TNHH Nguồn Nhân Lực Elite Việt Nam
                            </option>
                        </select> </div>
                    <div class="form-group">
                        <select name="type" id="type" class="form-control">
                            <option value="">- Hình thức ký -</option>
                            <option value="1">Ký mới</option>
                            <option value="2">Tái ký</option>
                            <option value="3">Mở rộng</option>
                        </select> </div>
                    <div class="form-group">
                        <input name="submit" type="submit" id="btnFilterCrmContact"
                            class="form-control btn btn-primary" value="Lọc"> </div>

                </div>
                <div class="col-md-2 lolify-control">


                </div>
            </form>
            <div class="clearfix"></div>
            <div class="lolify-left-menu" style="display: none;">
            </div>
        </div><a style="float: right;" id="exportExcel"
            href="https://erp.nhanh.vn/crm/report/revenuetomonth?fromMonth=1&amp;toMonth=12&amp;toYear=2019&amp;companyId=319&amp;submit=L%E1%BB%8Dc#"><button
                class="btn btn-primary btn-sm "><i class="fa fa-download fa-lg"></i>Xuất
                excel</button></a>
        <div class="tab-content col-md-12">
            <div class="dgContainer">
                <div style="width: 1874px; display: none;" class="stickyHeader">
                    <table class="table table-bordered" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr class="even">
                                <th style="width: 38px;">STT</th>
                                <th style="width: 179px;">Tên nhân viên</th>
                                <th style="width: 253px;">Phòng ban</th>
                                <th style="width: 148px;">Công ty</th>
                                <th style="width: 93px;">Số tháng làm</th>
                                <th style="width: 92px;">01/2019</th>
                                <th style="width: 92px;">02/2019</th>
                                <th style="width: 93px;">03/2019</th>
                                <th style="width: 93px;">04/2019</th>
                                <th style="width: 104px;">05/2019</th>
                                <th style="width: 105px;">06/2019</th>
                                <th style="width: 105px;">07/2019</th>
                                <th style="width: 105px;">08/2019</th>
                                <th style="width: 93px;">09/2019</th>
                                <th style="width: 93px;">10/2019</th>
                                <th style="width: 93px;">11/2019</th>
                                <th style="width: 94px;">12/2019</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-6 dgButtons"></div>
                    <div style="clear: both;"></div><br>
                </div>
                <table id="dgCrmReportBill" class="table table-bordered">
                    <thead>
                        <tr class="even">
                            <th>STT</th>
                            <th>Tên nhân viên</th>
                            <th>Phòng ban</th>
                            <th>Công ty</th>
                            <th>Số tháng làm</th>
                            <th>01/2019</th>
                            <th>02/2019</th>
                            <th>03/2019</th>
                            <th>04/2019</th>
                            <th>05/2019</th>
                            <th>06/2019</th>
                            <th>07/2019</th>
                            <th>08/2019</th>
                            <th>09/2019</th>
                            <th>10/2019</th>
                            <th>11/2019</th>
                            <th>12/2019</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td class="col-align-center">1</td>
                            <td>Nguyễn Thị Anh Thư</td>
                            <td>Nhanh HCM - Nhóm KD9_ThưNTA</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>28</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9510&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">19.680.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9510&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">35.725.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9510&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type=">48.612.080</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9510&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type=">29.063.121</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9510&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">48.300.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9510&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">41.330.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9510&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">92.000.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9510&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">43.270.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9510&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">24.780.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9510&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type=">23.298.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9510&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type=">30.269.999</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9510&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type=">37.687.500</a>
                            </td>
                        </tr>
                        <tr class="even h">
                            <td class="col-align-center">2</td>
                            <td>Hứa Thị Mai Ngân</td>
                            <td>Nhanh HCM - Phòng KD1_NgânHTM</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>70</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1075&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">72.404.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1075&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">48.530.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1075&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type=">30.240.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1075&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type=">45.378.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1075&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">38.160.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1075&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">69.403.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1075&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">63.935.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1075&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">71.438.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1075&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">32.100.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1075&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type=">87.119.200</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1075&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type=">27.510.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1075&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type=">39.171.000</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">3</td>
                            <td>Nguyễn Hoàng Long</td>
                            <td>Phòng KD10</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>99</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=951&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">2.358.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=951&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">30.360.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=951&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type=">66.185.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=951&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type=">67.520.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=951&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">71.720.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=951&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">70.391.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=951&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">69.780.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=951&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">74.202.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=951&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">60.400.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=951&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type=">67.930.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=951&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type=">61.500.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=951&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type=">70.664.000</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">4</td>
                            <td>Trương Thị Luyến</td>
                            <td>Nhanh HCM - Partime - LâmNV</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>23</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9991&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">11.400.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9991&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">12.024.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9991&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type=">3.840.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9991&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type=">6.000.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9991&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">11.610.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9991&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">20.740.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9991&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">32.170.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9991&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">34.904.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9991&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">29.972.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9991&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type=">11.250.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9991&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9991&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type=">3.990.000</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">5</td>
                            <td>Hồ Phạm Ngọc Tiên</td>
                            <td>Sàn Vật Giá HCM</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>50</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7389&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">22.562.500</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7389&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">22.610.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7389&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type=">26.884.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7389&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7389&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7389&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7389&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7389&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7389&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7389&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7389&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7389&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">6</td>
                            <td>Nguyễn Duy Hưng</td>
                            <td>Phòng KD10</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>45</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7790&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">16.898.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7790&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">18.538.050</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7790&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type=">24.981.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7790&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type=">23.936.200</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7790&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">32.159.400</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7790&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">31.444.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7790&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">30.820.550</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7790&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">7.945.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7790&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">43.590.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7790&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type=">41.289.750</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7790&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type=">36.728.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7790&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type=">18.135.000</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">7</td>
                            <td>Nguyễn Thị Thùy Vân</td>
                            <td>Nhóm KD 7</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>38</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8266&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">11.400.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8266&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">4.980.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8266&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8266&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8266&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8266&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8266&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8266&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8266&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8266&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8266&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8266&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">8</td>
                            <td>Lò Ái Nhi</td>
                            <td>Nhóm KD 8.7 _Nhi</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>81</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1298&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">15.894.050</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1298&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">27.809.700</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1298&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type=">35.220.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1298&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type=">39.145.800</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1298&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">47.002.500</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1298&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">45.963.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1298&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">76.839.400</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1298&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">7.518.400</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1298&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1298&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1298&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1298&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">9</td>
                            <td>Trần Thị Hương</td>
                            <td>Dự án kinh doanh Wesave</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>20</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10111&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">6.600.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10111&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">6.875.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10111&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type=">3.750.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10111&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type=">8.250.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10111&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">55.718.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10111&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10111&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10111&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10111&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10111&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10111&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10111&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">10</td>
                            <td>Nguyễn Linh Vỹ</td>
                            <td>Phòng KD 01</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>37</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8472&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">9.900.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8472&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">20.028.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8472&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type=">30.660.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8472&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type=">30.700.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8472&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">41.116.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8472&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">44.918.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8472&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">36.276.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8472&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">36.698.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8472&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">2.394.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8472&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8472&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8472&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">11</td>
                            <td>Nguyễn Công Khải</td>
                            <td>Phòng KD 3</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>38</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8271&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">9.169.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8271&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">15.169.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8271&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8271&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8271&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8271&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8271&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8271&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8271&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8271&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8271&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8271&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">12</td>
                            <td>Chung Nhật Khánh</td>
                            <td>NHANH HCM - Nhóm KD6_MạnhNH</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>20</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10155&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">1.440.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10155&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10155&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10155&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10155&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10155&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10155&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10155&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10155&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10155&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10155&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10155&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">13</td>
                            <td>Nguyễn Phi Thắng</td>
                            <td>Nhanh HCM - Nhóm KD4_ThắngNP</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>38</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8391&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">44.200.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8391&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">36.870.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8391&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type=">17.703.375</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8391&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type=">21.505.250</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8391&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">28.940.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8391&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">21.358.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8391&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">44.400.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8391&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">32.504.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8391&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">11.520.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8391&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type=">22.356.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8391&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type=">30.543.750</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8391&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type=">7.600.000</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">14</td>
                            <td>Nguyễn Phúc</td>
                            <td>NHANH HCM- PhúcN</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>31</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9121&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">6.000.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9121&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">1.050.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9121&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9121&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type=">3.600.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9121&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">9.050.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9121&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">11.080.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9121&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9121&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9121&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9121&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9121&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9121&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">15</td>
                            <td>Vũ Văn Đại</td>
                            <td>NHANH HCM - Nhóm KD1_NgânHTM</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>28</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9511&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">5.580.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9511&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">36.600.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9511&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type=">39.183.375</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9511&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9511&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9511&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9511&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9511&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9511&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9511&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9511&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9511&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">16</td>
                            <td>Nguyễn Thế Hiển</td>
                            <td>Nhanh HCM - Phòng KD8_LâmNV</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>22</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10037&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">4.860.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10037&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">14.952.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10037&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10037&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type=">2.400.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10037&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">900.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10037&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">29.580.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10037&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10037&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10037&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10037&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10037&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10037&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">17</td>
                            <td>Nguyễn Thanh Liêm</td>
                            <td>Nhanh HCM - Nhóm KD5_LiêmNT</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>37</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8387&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">28.035.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8387&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">24.090.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8387&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type=">7.770.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8387&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type=">6.912.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8387&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">9.222.857</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8387&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">18.706.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8387&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">52.800.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8387&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">37.050.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8387&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">8.560.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8387&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type=">20.520.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8387&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type=">15.500.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8387&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type=">8.892.000</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">18</td>
                            <td>Lý Ngọc Nhã Bình</td>
                            <td>Dự án kinh doanh Wesave</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>20</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10119&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">8.010.500</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10119&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">10.673.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10119&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type=">18.462.500</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10119&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type=">2.400.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10119&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">7.150.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10119&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10119&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10119&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10119&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10119&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10119&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10119&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">19</td>
                            <td>Lê Thị Cẩm Giang</td>
                            <td>Trợ lý</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>34</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8672&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">1.980.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8672&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">1.980.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8672&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8672&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8672&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8672&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8672&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8672&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8672&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8672&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8672&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8672&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">20</td>
                            <td>Nguyễn Mai Ngọc Huyền</td>
                            <td>NHANH HCM - Nhóm KD2_NgầnLTT</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>32</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9002&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">5.950.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9002&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9002&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9002&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9002&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9002&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9002&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9002&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9002&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9002&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9002&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9002&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">21</td>
                            <td>Đỗ Văn Thảo</td>
                            <td>Phòng KD 8</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>85</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1289&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">22.530.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1289&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">2.772.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1289&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type=">58.126.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1289&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type=">82.124.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1289&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">73.352.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1289&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">75.236.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1289&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">71.030.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1289&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">50.092.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1289&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">57.778.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1289&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type=">50.289.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1289&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type=">57.892.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1289&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type=">34.553.000</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">22</td>
                            <td>Hồ Thị Trúc Nhi</td>
                            <td>Phòng KD 3</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>27</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9543&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">200.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9543&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9543&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9543&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9543&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9543&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9543&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9543&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9543&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9543&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9543&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9543&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">23</td>
                            <td>Trần Kim Ngân</td>
                            <td>Nhanh HCM - Nhóm KD3_NgânTK</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>37</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8427&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">18.804.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8427&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">23.282.500</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8427&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type=">30.770.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8427&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type=">17.740.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8427&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">38.500.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8427&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">11.040.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8427&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">13.660.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8427&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">25.910.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8427&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">6.352.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8427&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type=">9.000.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8427&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type=">12.310.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8427&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type=">45.724.000</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">24</td>
                            <td>Nguyễn Thị Ái Nhi</td>
                            <td>Dự án kinh doanh Wesave</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>19</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10245&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">3.275.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10245&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10245&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type=">9.000.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10245&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10245&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10245&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10245&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10245&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10245&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10245&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10245&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10245&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">25</td>
                            <td>Lâm Quỳnh Như</td>
                            <td>Dự án kinh doanh Wesave</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>19</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10236&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">15.687.500</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10236&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">10.862.500</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10236&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type=">23.615.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10236&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type=">44.565.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10236&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">43.438.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10236&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">4.400.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10236&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10236&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10236&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10236&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10236&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10236&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">26</td>
                            <td>Trần Văn Anh Vũ</td>
                            <td>Phòng KD ĐDV</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>71</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=4785&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">5.500.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=4785&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">35.096.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=4785&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type=">27.700.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=4785&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type=">57.702.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=4785&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">53.366.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=4785&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">50.298.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=4785&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">23.760.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=4785&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">52.560.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=4785&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">70.292.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=4785&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type=">60.140.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=4785&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type=">35.840.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=4785&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type=">26.854.000</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">27</td>
                            <td>Nguyễn Hoàng Mạnh</td>
                            <td>NHANH HCM - Nhóm KD6_MạnhNH</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>33</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8821&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">21.816.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8821&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">24.720.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8821&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type=">24.000.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8821&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type=">23.901.500</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8821&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">3.648.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8821&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">17.550.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8821&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">20.145.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8821&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">37.176.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8821&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">8.100.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8821&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8821&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8821&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">28</td>
                            <td>Nguyễn Thị Ngọc Trầm</td>
                            <td>Phòng KD10</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>25</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9812&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">4.000.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9812&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">8.130.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9812&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type=">18.880.200</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9812&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type=">21.040.200</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9812&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">22.040.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9812&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">25.092.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9812&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">21.680.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9812&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">17.030.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9812&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">30.390.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9812&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type=">29.740.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9812&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type=">13.580.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9812&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type=">23.708.000</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">29</td>
                            <td>Nguyễn Thị Vân Anh</td>
                            <td>Nhanh HCM - Nhóm KD5_LiêmNT</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>25</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9776&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">2.100.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9776&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">2.880.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9776&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type=">11.770.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9776&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type=">1.255.375</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9776&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">7.217.143</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9776&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">6.120.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9776&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9776&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9776&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9776&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9776&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9776&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">30</td>
                            <td>Trần Thị Bích Huyền</td>
                            <td>Nhanh HCM - Partime - LâmNV</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>20</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10199&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">3.360.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10199&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">9.360.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10199&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10199&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type=">1.920.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10199&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">3.900.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10199&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">22.640.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10199&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">5.600.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10199&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">8.336.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10199&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">3.600.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10199&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10199&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type=">1.000.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10199&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">31</td>
                            <td>Nguyễn Quốc Gia Thịnh</td>
                            <td>Nhanh HCM - Nhóm KD4_ThịnhNQG</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>26</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9646&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">2.220.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9646&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">1.920.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9646&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type=">13.540.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9646&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type=">12.710.265</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9646&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">89.884.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9646&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">30.504.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9646&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">6.000.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9646&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">50.822.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9646&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">12.265.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9646&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type=">3.605.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9646&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type=">40.951.500</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9646&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type=">67.120.000</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">32</td>
                            <td>Huỳnh Công Tân</td>
                            <td>Nhanh HCM - Phòng KD8_LâmNV</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>33</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8858&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">11.350.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8858&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">32.670.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8858&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type=">18.650.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8858&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type=">13.170.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8858&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">3.092.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8858&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">4.220.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8858&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8858&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">26.350.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8858&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8858&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8858&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8858&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">33</td>
                            <td>Trần Thị Tú Uyên</td>
                            <td>Nhóm KD 8.7 _Nhi</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>83</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=3735&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">16.250.700</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=3735&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">22.983.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=3735&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type=">38.844.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=3735&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type=">39.116.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=3735&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">39.064.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=3735&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">39.600.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=3735&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">41.796.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=3735&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">26.554.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=3735&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=3735&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=3735&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=3735&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">34</td>
                            <td>Nguyễn Hùng Sơn</td>
                            <td>Sàn Vật Giá HCM</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>118</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=961&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">5.949.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=961&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">13.354.200</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=961&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=961&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=961&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=961&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=961&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=961&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=961&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=961&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=961&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=961&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">35</td>
                            <td>Nông Thị Hoa</td>
                            <td>KINH DOANH TD</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>109</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=2740&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">2.316.600</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=2740&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">21.032.500</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=2740&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type=">5.148.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=2740&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type=">50.150.800</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=2740&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">31.078.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=2740&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">31.050.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=2740&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">8.160.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=2740&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">4.316.600</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=2740&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">8.920.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=2740&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type=">23.484.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=2740&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type=">7.728.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=2740&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type=">34.680.000</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">36</td>
                            <td>Phan Thành Quang</td>
                            <td>Nhóm KD 24</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>60</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1223&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">5.187.600</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1223&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">35.012.250</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1223&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type=">50.040.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1223&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type=">20.988.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1223&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">23.340.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1223&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">40.224.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1223&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">40.254.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1223&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1223&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">35.308.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1223&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type=">40.220.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1223&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type=">31.060.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1223&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type=">2.674.000</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">37</td>
                            <td>Nguyễn Thái Hà</td>
                            <td>Dự án kinh doanh Wesave</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>19</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10244&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">5.000.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10244&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">6.125.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10244&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type=">2.160.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10244&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type=">3.000.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10244&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10244&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10244&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10244&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10244&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10244&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10244&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10244&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">38</td>
                            <td>Nguyễn Thị Ngọc</td>
                            <td>KINH DOANH TD</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>20</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10092&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">350.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10092&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10092&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10092&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10092&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10092&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10092&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10092&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10092&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10092&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10092&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10092&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">39</td>
                            <td>Lê Mộng Cát Linh</td>
                            <td>Phòng KD ĐDV</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>24</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9869&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">287.800</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9869&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">10.891.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9869&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type=">10.120.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9869&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type=">13.180.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9869&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">15.438.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9869&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">17.080.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9869&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">25.489.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9869&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">5.260.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9869&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">9.370.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9869&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type=">25.300.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9869&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type=">19.060.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9869&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type=">10.920.000</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">40</td>
                            <td>Lê Thảo Quỳnh Dương</td>
                            <td>Phòng KD Bảo Kim &amp; Wesave</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>37</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8378&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">2.500.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8378&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">12.525.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8378&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type=">33.228.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8378&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type=">42.490.200</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8378&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">50.702.600</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8378&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">65.768.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8378&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">57.616.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8378&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">38.823.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8378&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">14.669.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8378&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type=">28.049.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8378&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type=">36.619.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8378&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type=">1.200.000</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">41</td>
                            <td>Nguyễn Văn Trường</td>
                            <td>Nhanh HCM - Cộng tác viên</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>18</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10270&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">2.400.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10270&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10270&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10270&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10270&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10270&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10270&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10270&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10270&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10270&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10270&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10270&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">42</td>
                            <td>Lê Quốc Duy</td>
                            <td>Nhanh HCM - Sale Marketing</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>28</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9478&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">3.870.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9478&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">15.472.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9478&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type=">19.824.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9478&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type=">17.726.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9478&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">34.380.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9478&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">15.624.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9478&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">9.600.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9478&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">15.100.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9478&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">16.580.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9478&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type=">10.380.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9478&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type=">20.280.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9478&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type=">37.110.000</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">43</td>
                            <td>Đỗ Thị Ngọc Hân</td>
                            <td>Nhanh HCM - Phòng KD1_NgânHTM</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>20</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10212&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">3.030.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10212&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">3.600.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10212&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type=">10.924.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10212&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type=">10.910.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10212&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">17.485.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10212&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">42.990.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10212&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">18.004.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10212&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">8.520.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10212&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">11.087.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10212&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type=">7.780.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10212&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type=">12.093.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10212&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type=">15.909.999</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">44</td>
                            <td>Nguyễn Thiện Tâm</td>
                            <td>Phòng KD Bảo Kim &amp; Wesave</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>99</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=954&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">3.400.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=954&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">36.800.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=954&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type=">31.107.500</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=954&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type=">12.832.500</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=954&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">22.250.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=954&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">16.450.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=954&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">42.808.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=954&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">31.394.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=954&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">22.400.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=954&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type=">3.140.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=954&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type=">8.600.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=954&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type=">26.284.000</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">45</td>
                            <td>Hồ Tấn Hải</td>
                            <td>Nhanh HCM - Phòng KD8_LâmNV</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>22</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10070&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">8.750.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10070&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">2.400.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10070&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type=">1.800.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10070&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type=">6.066.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10070&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">18.000.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10070&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">29.110.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10070&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">21.178.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10070&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">36.834.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10070&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">9.150.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10070&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type=">31.000.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10070&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type=">27.638.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10070&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type=">30.240.000</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">46</td>
                            <td>Lê Thành Đạt</td>
                            <td>Nhanh HCM - Cộng tác viên</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>20</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10121&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">2.376.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10121&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">3.168.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10121&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type=">3.360.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10121&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10121&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10121&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10121&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10121&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10121&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10121&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10121&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10121&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">47</td>
                            <td>Đỗ Ngọc Phương Linh</td>
                            <td>Nhanh HCM - Phòng KD8_LâmNV</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>22</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10049&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">2.448.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10049&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10049&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10049&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10049&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">11.260.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10049&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">31.440.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10049&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10049&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">8.976.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10049&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10049&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10049&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10049&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">48</td>
                            <td>Phạm Huy Anh</td>
                            <td>Nhanh HCM - Cộng tác viên</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>20</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10198&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">2.376.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10198&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">37.301.563</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10198&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10198&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10198&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10198&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10198&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10198&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10198&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10198&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10198&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10198&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">49</td>
                            <td>Vương Tú Hồng</td>
                            <td>Dự án kinh doanh Wesave</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>19</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10248&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">4.137.500</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10248&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">6.137.500</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10248&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type=">5.650.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10248&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type=">2.750.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10248&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10248&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10248&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10248&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10248&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10248&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10248&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10248&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">50</td>
                            <td>Phan Vũ Như Quỳnh</td>
                            <td>Phòng KD 01</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>117</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1257&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">7.173.550</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1257&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">40.957.300</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1257&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type=">52.610.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1257&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type=">71.780.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1257&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">73.576.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1257&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">53.011.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1257&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">54.018.050</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1257&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">55.933.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1257&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">50.608.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1257&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type=">50.632.250</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1257&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type=">55.697.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1257&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type=">62.568.000</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">51</td>
                            <td>Trần Thị Ngọc Quyền</td>
                            <td>Nhanh HCM - Nhóm KD3_NgânTK</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>20</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10145&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">4.200.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10145&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">15.840.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10145&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type=">8.700.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10145&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type=">16.800.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10145&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">13.130.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10145&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">9.910.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10145&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">11.136.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10145&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">8.570.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10145&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">12.040.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10145&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type=">11.280.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10145&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type=">9.768.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10145&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type=">27.048.400</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">52</td>
                            <td>Lại Văn Hùng</td>
                            <td>Nhóm Nhanh p3</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>26</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9644&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">3.600.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9644&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9644&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9644&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9644&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9644&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9644&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9644&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9644&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9644&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9644&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9644&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">53</td>
                            <td>Phạm Hùng Phát</td>
                            <td>Nhanh HCM - Nhóm KD3_NgânTK</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>22</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10044&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">600.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10044&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10044&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10044&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10044&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10044&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10044&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10044&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10044&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10044&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10044&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10044&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">54</td>
                            <td>Huỳnh Diễm Thy</td>
                            <td>Nhanh HCM - Nhóm KD3_NgânTK</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>20</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10180&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type=">600.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10180&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">4.320.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10180&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type=">10.452.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10180&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type=">4.776.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10180&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">17.260.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10180&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">5.460.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10180&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">6.840.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10180&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">5.360.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10180&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">8.600.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10180&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10180&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type=">7.314.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10180&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type=">15.260.000</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">55</td>
                            <td>Ngô Thanh Hoàng</td>
                            <td>Dự án kinh doanh Wesave</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>18</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10249&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10249&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">1.375.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10249&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type=">2.160.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10249&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10249&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10249&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10249&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10249&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10249&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10249&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10249&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10249&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">56</td>
                            <td>Hà Thu Uyên</td>
                            <td>Dự án kinh doanh Wesave</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>18</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10251&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10251&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">1.375.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10251&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10251&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10251&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10251&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10251&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10251&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10251&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10251&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10251&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10251&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">57</td>
                            <td>Nguyễn Thị Thu Thảo</td>
                            <td>Nhanh HCM - Cộng tác viên</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>21</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10067&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10067&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">2.400.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10067&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type=">6.960.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10067&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10067&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">2.400.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10067&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">5.100.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10067&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10067&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10067&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10067&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10067&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10067&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">58</td>
                            <td>Nguyễn Đức Anh</td>
                            <td>Dự án kinh doanh Wesave</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>18</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10250&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10250&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">6.162.500</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10250&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type=">6.162.500</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10250&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10250&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10250&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10250&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10250&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10250&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10250&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10250&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10250&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">59</td>
                            <td>Đỗ Hoàng Minh</td>
                            <td>Nhanh HCM - Nhóm KD7_TâmNT</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>17</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10300&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10300&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">5.580.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10300&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type=">6.260.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10300&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type=">1.202.500</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10300&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">6.780.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10300&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">240.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10300&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10300&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10300&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10300&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10300&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10300&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">60</td>
                            <td>Nguyễn Thu Trang</td>
                            <td>Dự án kinh doanh Wesave</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>18</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10268&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10268&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">2.750.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10268&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type=">1.800.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10268&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10268&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10268&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10268&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10268&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10268&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10268&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10268&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10268&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">61</td>
                            <td>Trịnh Thị Phương Nhi</td>
                            <td>Phòng KD 01</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>28</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9481&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9481&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">16.180.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9481&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type=">22.004.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9481&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type=">8.920.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9481&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">43.296.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9481&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">28.720.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9481&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">27.904.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9481&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">7.497.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9481&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">21.168.850</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9481&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type=">19.860.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9481&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type=">14.780.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9481&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type=">22.937.700</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">62</td>
                            <td>Bùi Thanh Thịnh</td>
                            <td>O1 Marketplaces</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>121</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=950&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=950&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">11.484.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=950&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type=">3.960.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=950&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=950&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=950&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=950&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=950&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=950&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=950&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=950&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=950&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">63</td>
                            <td>Trần Văn Thắng</td>
                            <td>Nhanh HCM - Phòng KD1_NgânHTM</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>17</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10320&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10320&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type=">1.200.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10320&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type=">6.830.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10320&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10320&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10320&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10320&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10320&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10320&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10320&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10320&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10320&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">64</td>
                            <td>Nguyễn Trương Mỹ Duyên</td>
                            <td>Nhanh HCM - Nhóm KD4_ThắngNP</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>16</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10352&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10352&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10352&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type=">3.000.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10352&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type=">5.155.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10352&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">15.500.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10352&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">9.404.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10352&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10352&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10352&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10352&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10352&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10352&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">65</td>
                            <td>Đỗ Hoàng Yến</td>
                            <td>Nhóm KD 23</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>17</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10301&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10301&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10301&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type=">12.320.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10301&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type=">13.480.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10301&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">15.942.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10301&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">17.625.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10301&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">2.400.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10301&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10301&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10301&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10301&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10301&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">66</td>
                            <td>Đào Thị Ngân</td>
                            <td>Sàn Vật Giá HCM</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>142</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=948&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=948&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=948&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type=">22.423.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=948&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type=">1.500.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=948&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">22.812.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=948&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">11.484.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=948&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=948&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">5.940.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=948&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">3.300.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=948&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type=">2.376.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=948&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type=">8.180.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=948&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">67</td>
                            <td>Nguyễn Thị Thúy Quỳnh</td>
                            <td>Nhóm KD 8.7 _Nhi</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>17</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10331&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10331&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10331&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type=">8.860.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10331&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type=">500.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10331&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10331&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10331&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10331&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10331&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10331&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10331&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10331&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">68</td>
                            <td>Hồ Thảo Vân</td>
                            <td>Nhóm CS online</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>18</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10253&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10253&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10253&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type=">1.960.800</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10253&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10253&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10253&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10253&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10253&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10253&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10253&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10253&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10253&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">69</td>
                            <td>Võ Quỳnh Như</td>
                            <td>Phòng KD10</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>18</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10307&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10307&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10307&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type=">11.880.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10307&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type=">11.880.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10307&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">15.840.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10307&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">17.940.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10307&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">6.053.600</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10307&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10307&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10307&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10307&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10307&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">70</td>
                            <td>Trần Thị Yến Phương</td>
                            <td>Nhanh HCM - Nhóm KD5_LiêmNT</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>16</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10381&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10381&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10381&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type=">5.725.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10381&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type=">15.163.475</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10381&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">6.330.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10381&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">6.600.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10381&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">5.640.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10381&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">18.192.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10381&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">18.780.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10381&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type=">15.060.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10381&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type=">12.840.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10381&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type=">14.616.000</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">71</td>
                            <td>Phạm Nhật Phát</td>
                            <td>Phòng KD 8</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>16</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10357&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10357&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10357&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10357&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type=">4.160.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10357&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10357&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10357&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10357&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10357&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10357&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10357&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10357&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">72</td>
                            <td>Vũ Duy Hoàng</td>
                            <td>Phòng KD10</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>16</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10356&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10356&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10356&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10356&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type=">3.960.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10356&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">9.290.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10356&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">12.410.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10356&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">16.880.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10356&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">11.420.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10356&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">3.300.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10356&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type=">20.410.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10356&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type=">12.480.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10356&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type=">11.030.000</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">73</td>
                            <td>Lê Nguyễn Thúy An</td>
                            <td>Nhanh HCM - Parttime - ThắngNP</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>15</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10460&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10460&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10460&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10460&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type=">3.011.920</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10460&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">2.270.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10460&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">1.200.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10460&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10460&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10460&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10460&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10460&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10460&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">74</td>
                            <td>Đỗ Thị Bích Vân</td>
                            <td>Phòng KD 3</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>16</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10367&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10367&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10367&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10367&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type=">1.800.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10367&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10367&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10367&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10367&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10367&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10367&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10367&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10367&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">75</td>
                            <td>Đặng Thái Hòa</td>
                            <td>Dự án kinh doanh Wesave</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>17</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10355&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10355&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10355&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10355&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type=">2.750.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10355&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10355&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10355&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10355&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10355&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10355&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10355&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10355&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">76</td>
                            <td>Lý Bảo Dung</td>
                            <td>Nhanh HCM - Parttime - NgânTK</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>16</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10410&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10410&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10410&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10410&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type=">4.200.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10410&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">3.840.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10410&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">2.611.200</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10410&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10410&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10410&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10410&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10410&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10410&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">77</td>
                            <td>Huỳnh Tú Uyên</td>
                            <td>Nhanh HCM - Parttime - ThưNTA</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>15</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10497&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10497&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10497&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10497&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type=">2.000.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10497&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10497&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10497&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10497&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10497&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10497&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10497&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10497&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">78</td>
                            <td>Trịnh Ngọc Hiền</td>
                            <td>Nhanh HCM - Nhóm KD9_ThưNTA</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>16</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10505&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10505&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10505&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10505&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type=">960.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10505&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">14.400.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10505&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">12.040.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10505&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">16.950.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10505&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">1.920.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10505&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">2.220.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10505&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type=">14.886.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10505&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10505&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">79</td>
                            <td>Trần Thị Mai Linh</td>
                            <td>Nhanh HCM - Nhóm KD9_ThưNTA</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>15</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10525&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10525&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10525&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10525&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10525&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">9.000.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10525&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">11.546.400</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10525&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">19.920.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10525&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">15.208.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10525&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">3.600.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10525&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type=">9.816.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10525&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10525&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">80</td>
                            <td>Võ Văn Ngọc Phú</td>
                            <td>Nhanh HCM - Nhóm KD4_ThắngNP</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>15</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10530&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10530&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10530&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10530&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10530&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">3.600.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10530&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10530&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">9.000.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10530&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">4.080.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10530&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">19.200.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10530&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10530&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10530&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">81</td>
                            <td>Nguyễn Thị Kim Ngân</td>
                            <td>Nhanh HCM - Partime - MạnhNH</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>15</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10502&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10502&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10502&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10502&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10502&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">2.250.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10502&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10502&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10502&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10502&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10502&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10502&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10502&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">82</td>
                            <td>Nguyễn Thị Thanh Trúc</td>
                            <td>Nhanh HCM - Parttime - ThắngNP</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>15</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10529&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10529&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10529&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10529&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10529&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">2.700.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10529&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10529&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10529&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10529&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10529&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10529&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10529&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">83</td>
                            <td>Võ Thị Thanh Hằng</td>
                            <td>Nhanh HCM - Nhóm KD3_NgânTK</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>15</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10521&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10521&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10521&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10521&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10521&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">4.200.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10521&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">600.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10521&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">5.220.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10521&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">13.800.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10521&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">3.240.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10521&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10521&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10521&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">84</td>
                            <td>Vũ Văn Diện</td>
                            <td>Dự án kinh doanh Wesave</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>15</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10487&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10487&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10487&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10487&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10487&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">2.750.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10487&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10487&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10487&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10487&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10487&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10487&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10487&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">85</td>
                            <td>Trần Thị Trà Mi</td>
                            <td>Nhanh HCM - Partime - NganHTM</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>15</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10528&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10528&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10528&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10528&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10528&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">6.075.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10528&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">3.096.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10528&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10528&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10528&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10528&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10528&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10528&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">86</td>
                            <td>Nguyễn Trần Mai</td>
                            <td>Nhanh HCM - Phòng KD1_NgânHTM</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>15</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10569&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10569&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10569&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10569&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10569&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">600.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10569&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">1.650.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10569&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10569&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10569&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10569&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10569&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10569&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">87</td>
                            <td>Thái Chí Toàn</td>
                            <td>Phòng KD10</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>15</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10500&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10500&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10500&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10500&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10500&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">1.530.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10500&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">24.814.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10500&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">13.360.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10500&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">4.360.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10500&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">17.740.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10500&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type=">17.155.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10500&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type=">32.665.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10500&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type=">29.270.000</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">88</td>
                            <td>Trần Thị Cẩm Tiên</td>
                            <td>Nhanh HCM - Partime - TâmNT</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>15</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10523&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10523&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10523&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10523&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10523&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">2.640.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10523&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10523&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10523&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10523&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10523&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10523&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10523&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">89</td>
                            <td>Lương Bội Ngọc</td>
                            <td>Phòng KD 01</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>14</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10514&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10514&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10514&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10514&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10514&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">5.267.500</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10514&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10514&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10514&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10514&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10514&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10514&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10514&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">90</td>
                            <td>Phan Ngọc Ý Linh</td>
                            <td>Nhanh HCM - Phòng KD1_NgânHTM</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>15</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10593&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10593&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10593&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10593&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10593&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">2.400.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10593&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">2.100.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10593&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">5.460.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10593&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">15.060.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10593&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">15.710.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10593&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type=">50.688.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10593&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type=">20.100.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10593&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type=">25.290.000</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">91</td>
                            <td>Nguyễn Thị Thảo Vân</td>
                            <td>Nhanh HCM - Nhóm KD9_ThưNTA</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>15</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10546&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10546&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10546&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10546&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10546&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type=">4.200.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10546&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">3.100.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10546&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">16.000.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10546&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">19.200.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10546&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10546&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10546&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10546&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">92</td>
                            <td>Đào Lê Trường Sơn</td>
                            <td>Nhanh HCM - Parttime - NgânTK</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>15</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10524&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10524&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10524&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10524&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10524&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10524&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">2.400.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10524&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">1.200.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10524&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10524&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10524&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10524&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10524&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">93</td>
                            <td>Từ Đức Vĩ</td>
                            <td>Nhóm KD 8.7 _Nhi</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>13</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10599&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10599&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10599&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10599&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10599&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10599&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">12.980.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10599&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">7.150.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10599&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10599&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10599&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10599&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10599&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">94</td>
                            <td>Nguyễn Thị Tố Quyên</td>
                            <td>NHANH HCM- PhúcN</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>14</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10587&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10587&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10587&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10587&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10587&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10587&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">13.750.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10587&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">600.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10587&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">1.260.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10587&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10587&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10587&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10587&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">95</td>
                            <td>Trương Hoàng Việt</td>
                            <td>Nhanh HCM - Phòng KD1_NgânHTM</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>13</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10639&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10639&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10639&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10639&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10639&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10639&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">300.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10639&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">5.016.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10639&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">1.260.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10639&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">19.200.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10639&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10639&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10639&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type=">1.800.000</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">96</td>
                            <td>Nguyễn Phúc Vĩnh Bảo</td>
                            <td>Nhanh HCM - Partime - PhúcN</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>14</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10606&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10606&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10606&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10606&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10606&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10606&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type=">3.000.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10606&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">1.800.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10606&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10606&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10606&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10606&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10606&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">97</td>
                            <td>Trần Sơn Nam</td>
                            <td>Phòng KD 8</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>13</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10615&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10615&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10615&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10615&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10615&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10615&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10615&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">11.160.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10615&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">4.290.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10615&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">15.730.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10615&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10615&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type=">16.840.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10615&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type=">9.920.000</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">98</td>
                            <td>Nguyễn Thị Kiều My</td>
                            <td>Nhanh HCM - Parttime - ThưNTA</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>13</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10695&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10695&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10695&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10695&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10695&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10695&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10695&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">3.750.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10695&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10695&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10695&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10695&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10695&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">99</td>
                            <td>Nguyễn Hữu Mạnh Linh</td>
                            <td>Nhanh HCM - Parttime - ThắngNP</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>13</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10714&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10714&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10714&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10714&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10714&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10714&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10714&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">600.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10714&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10714&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10714&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10714&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10714&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">100</td>
                            <td>Trương Thị Tường Vi</td>
                            <td>CSonline-Telesale</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>12</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10696&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10696&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10696&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10696&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10696&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10696&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10696&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">9.060.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10696&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10696&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">4.860.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10696&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type=">1.050.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10696&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10696&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">101</td>
                            <td>Nguyễn Minh Toàn</td>
                            <td>Phòng KD 8</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>46</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7754&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7754&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7754&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7754&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7754&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7754&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7754&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">8.970.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7754&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">2.850.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7754&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">12.580.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7754&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7754&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7754&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">102</td>
                            <td>Nguyễn Thị Bảo Ngọc</td>
                            <td>Phòng KD10</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>13</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10621&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10621&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10621&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10621&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10621&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10621&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10621&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">550.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10621&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">500.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10621&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">500.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10621&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10621&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10621&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">103</td>
                            <td>Trương Chí Toàn</td>
                            <td>Phòng KD10</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>13</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10628&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10628&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10628&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10628&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10628&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10628&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10628&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">500.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10628&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">1.340.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10628&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">520.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10628&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type=">1.950.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10628&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type=">15.840.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10628&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">104</td>
                            <td>Trần Thị Cẩm Mỹ</td>
                            <td>Phòng KD 8</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>13</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10669&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10669&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10669&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10669&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10669&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10669&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10669&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">4.860.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10669&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">6.710.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10669&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">10.671.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10669&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type=">9.746.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10669&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type=">14.400.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10669&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type=">32.005.000</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">105</td>
                            <td>Huỳnh Ngọc Bảo Khanh</td>
                            <td>Phòng KD 8</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>13</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10668&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10668&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10668&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10668&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10668&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10668&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10668&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">4.835.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10668&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">9.320.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10668&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">5.960.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10668&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type=">12.589.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10668&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type=">17.784.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10668&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type=">18.340.000</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">106</td>
                            <td>Nguyễn Thị Như Huệ</td>
                            <td>Nhanh HCM - Nhóm KD9_ThưNTA</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>1</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10745&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10745&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10745&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10745&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10745&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10745&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10745&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">8.040.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10745&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10745&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">1.920.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10745&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10745&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10745&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">107</td>
                            <td>Trần Anh Tuấn</td>
                            <td>Nhanh HCM - Nhóm KD9_ThưNTA</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>13</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10750&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10750&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10750&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10750&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10750&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10750&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10750&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">3.330.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10750&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">3.600.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10750&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">1.920.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10750&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type=">4.560.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10750&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type=">3.239.999</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10750&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type=">4.560.000</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">108</td>
                            <td>Huỳnh Thảo</td>
                            <td>Nhanh HCM - Nhóm KD7_TâmNT</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>12</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10770&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10770&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10770&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10770&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10770&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10770&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10770&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">3.900.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10770&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">9.360.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10770&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10770&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type=">4.560.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10770&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type=">600.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10770&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type=">15.354.000</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">109</td>
                            <td>Nguyễn Thị Hiếu</td>
                            <td>Nhanh HCM - Nhóm KD5_LiêmNT</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>12</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10769&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10769&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10769&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10769&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10769&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10769&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10769&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type=">4.860.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10769&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">10.200.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10769&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">18.480.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10769&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type=">15.435.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10769&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type=">8.460.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10769&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type=">20.460.000</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">110</td>
                            <td>Phạm Thị Chi</td>
                            <td>Nhanh HCM - Nhóm KD3_NgânTK</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>13</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10772&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10772&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10772&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10772&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10772&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10772&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10772&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10772&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">3.900.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10772&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">1.944.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10772&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type=">600.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10772&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type=">3.150.001</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10772&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">111</td>
                            <td>Trần Minh Thu</td>
                            <td>Nhanh HCM - Sale Marketing</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>12</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10785&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10785&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10785&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10785&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10785&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10785&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10785&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10785&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">10.862.400</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10785&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">2.832.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10785&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type=">21.560.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10785&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type=">15.031.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10785&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type=">20.390.000</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">112</td>
                            <td>Võ Thị Thảo Nguyên</td>
                            <td>Nhanh HCM - Phòng KD1_NgânHTM</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>12</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10781&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10781&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10781&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10781&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10781&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10781&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10781&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10781&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">12.480.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10781&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">600.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10781&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10781&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10781&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">113</td>
                            <td>Nguyễn Hữu Lưu</td>
                            <td>Phòng KD 8</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>41</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8087&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8087&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8087&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8087&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8087&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8087&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8087&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8087&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">11.100.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8087&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">11.240.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8087&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type=">1.100.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8087&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8087&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">114</td>
                            <td>Trần Thị Kim Liên</td>
                            <td>Nhóm KD 24</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>12</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10756&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10756&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10756&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10756&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10756&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10756&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10756&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10756&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">7.920.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10756&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10756&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type=">7.954.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10756&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type=">7.704.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10756&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">115</td>
                            <td>Đặng Minh Nhựt</td>
                            <td>Nhanh HCM - Phòng KD8_LâmNV</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>12</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10795&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10795&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10795&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10795&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10795&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10795&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10795&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10795&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">2.160.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10795&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">572.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10795&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10795&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10795&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">116</td>
                            <td>Nguyễn Thị Cẩm Ngọc</td>
                            <td>Nhanh HCM - Nhóm KD4_ThắngNP</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>11</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10809&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10809&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10809&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10809&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10809&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10809&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10809&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10809&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">5.460.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10809&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">2.280.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10809&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10809&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10809&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">117</td>
                            <td>Lê Thị Hồng</td>
                            <td>Nhanh HCM - Phòng KD1_NgânHTM</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>12</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10811&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10811&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10811&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10811&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10811&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10811&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10811&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10811&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">6.000.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10811&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">5.712.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10811&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type=">300.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10811&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10811&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">118</td>
                            <td>Phạm Hoàng Xuân Linh</td>
                            <td>Nhanh HCM - Phòng KD8_LâmNV</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>11</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10812&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10812&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10812&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10812&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10812&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10812&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10812&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10812&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">10.120.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10812&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">600.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10812&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type=">4.880.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10812&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type=">26.228.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10812&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type=">23.520.000</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">119</td>
                            <td>Lê Ngọc Khánh</td>
                            <td>Nhanh HCM - Phòng KD1_NgânHTM</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>12</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10814&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10814&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10814&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10814&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10814&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10814&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10814&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10814&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">3.760.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10814&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">3.168.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10814&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type=">3.600.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10814&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type=">5.640.001</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10814&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type=">7.619.999</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">120</td>
                            <td>Lý Thị Thảo Quyên</td>
                            <td>Nhanh HCM - Phòng KD8_LâmNV</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>12</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10816&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10816&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10816&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10816&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10816&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10816&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10816&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10816&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">2.400.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10816&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">6.300.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10816&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type=">10.200.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10816&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10816&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">121</td>
                            <td>Huỳnh Thị Như Quỳnh</td>
                            <td>Nhanh HCM - Phòng KD8_LâmNV</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>12</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10817&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10817&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10817&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10817&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10817&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10817&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10817&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10817&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">5.100.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10817&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10817&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type=">12.064.510</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10817&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10817&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">122</td>
                            <td>Nguyễn Khánh Trung</td>
                            <td>Nhanh HCM - Phòng KD8_LâmNV</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>12</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10825&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10825&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10825&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10825&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10825&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10825&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10825&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10825&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">1.200.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10825&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">1.200.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10825&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type=">6.300.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10825&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type=">3.000.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10825&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type=">8.640.000</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">123</td>
                            <td>Hồ Ngọc Nam</td>
                            <td>Nhanh HCM - Marketing</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>12</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10826&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10826&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10826&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10826&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10826&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10826&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10826&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10826&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">6.000.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10826&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10826&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type=">5.147.490</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10826&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type=">3.300.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10826&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type=">9.900.000</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">124</td>
                            <td>Phạm Thị Bích Phượng</td>
                            <td>Nhanh HCM - Tuyển dụng</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>13</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10625&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10625&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10625&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10625&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10625&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10625&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10625&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10625&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">2.321.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10625&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">3.212.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10625&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10625&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10625&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">125</td>
                            <td>Hứa Gia Lợi</td>
                            <td>Nhanh HCM - Tuyển dụng</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>14</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10584&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10584&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10584&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10584&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10584&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10584&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10584&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10584&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">1.870.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10584&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">4.136.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10584&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type=">3.784.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10584&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type=">2.640.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10584&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type=">6.600.000</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">126</td>
                            <td>Ngô Anh Đức</td>
                            <td>Nhanh HCM - Nhóm KD3_NgânTK</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>11</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10832&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10832&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10832&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10832&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10832&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10832&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10832&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10832&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">759.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10832&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">10.329.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10832&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type=">2.220.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10832&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10832&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">127</td>
                            <td>Nguyễn Thanh Ngân</td>
                            <td>Nhanh HCM - SEO GG MAPS</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>11</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10833&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10833&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10833&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10833&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10833&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10833&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10833&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10833&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type=">10.080.000</a>
                            </td>
                            <td class="col-align-right taskStt5"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10833&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">8.127.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10833&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10833&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type=">4.942.500</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10833&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type=">5.445.000</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">128</td>
                            <td>Lương Phi Anh</td>
                            <td>Nhóm KD 24</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>11</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10808&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10808&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10808&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10808&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10808&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10808&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10808&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10808&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10808&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type=">9.966.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10808&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10808&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10808&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">129</td>
                            <td>Huỳnh Chí Đạt</td>
                            <td>Nhanh HCM - Cộng tác viên</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>10</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9328&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9328&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9328&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9328&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9328&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9328&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9328&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9328&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9328&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9328&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type=">1.012.000</a>
                            </td>
                            <td class="col-align-right taskStt7"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9328&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type=">5.400.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9328&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type=">5.400.000</a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">130</td>
                            <td>Mai Thế Hạnh</td>
                            <td>Phòng KD10</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>11</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10824&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10824&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10824&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10824&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10824&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10824&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10824&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10824&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10824&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10824&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type=">1.850.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10824&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10824&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-align-center">131</td>
                            <td>Nguyễn Huỳnh Anh Hoa</td>
                            <td>Kế toán</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>34</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8775&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8775&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8775&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8775&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8775&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8775&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8775&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8775&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8775&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8775&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type=">5.976.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8775&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8775&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="col-align-center">132</td>
                            <td>Thân Đức Thuận</td>
                            <td>Phòng KD 8</td>
                            <td>Vật giá - Hồ Chí Minh</td>
                            <td>8</td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10912&amp;applyDateRange=01%2F01%2F2019%20-%2031%2F01%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10912&amp;applyDateRange=01%2F02%2F2019%20-%2028%2F02%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10912&amp;applyDateRange=01%2F03%2F2019%20-%2031%2F03%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10912&amp;applyDateRange=01%2F04%2F2019%20-%2030%2F04%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10912&amp;applyDateRange=01%2F05%2F2019%20-%2031%2F05%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10912&amp;applyDateRange=01%2F06%2F2019%20-%2030%2F06%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10912&amp;applyDateRange=01%2F07%2F2019%20-%2031%2F07%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10912&amp;applyDateRange=01%2F08%2F2019%20-%2031%2F08%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10912&amp;applyDateRange=01%2F09%2F2019%20-%2030%2F09%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10912&amp;applyDateRange=01%2F10%2F2019%20-%2031%2F10%2F2019&amp;type="></a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10912&amp;applyDateRange=01%2F11%2F2019%20-%2030%2F11%2F2019&amp;type=">11.880.000</a>
                            </td>
                            <td class="col-align-right "><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10912&amp;applyDateRange=01%2F12%2F2019%20-%2031%2F12%2F2019&amp;type="></a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5"><b>Tổng</b></td>
                            <td class="col-align-right colNumber"><b>501.966.300</b></td>
                            <td class="col-align-right colNumber"><b>856.982.563</b></td>
                            <td class="col-align-right colNumber"><b>995.815.330</b></td>
                            <td class="col-align-right colNumber"><b>956.147.106</b></td>
                            <td class="col-align-right colNumber"><b>1.312.362.000</b></td>
                            <td class="col-align-right colNumber"><b>1.254.440.600</b></td>
                            <td class="col-align-right colNumber"><b>1.222.763.600</b></td>
                            <td class="col-align-right colNumber"><b>1.130.305.400</b></td>
                            <td class="col-align-right colNumber"><b>873.642.850</b></td>
                            <td class="col-align-right colNumber"><b>946.491.200</b></td>
                            <td class="col-align-right colNumber"><b>866.606.750</b></td>
                            <td class="col-align-right colNumber"><b>941.090.598</b></td>
                        </tr>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-md-6 dgButtons"></div>
                </div>
            </div>
        </div>

        <style>
            #exportExcel {
                color: #fff;
                background-color: #3276b1;
                border-color: #285e8e;
                text-decoration: none
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
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/saved_resource(2)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/saved_resource(3)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/saved_resource(4)') }}"></script>
@endsection