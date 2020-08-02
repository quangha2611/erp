@extends('Layout.master1')

@section('css')
    <link href="{{ asset('asset/css/crm/report/bootstrap-multiselect.css') }}" media="screen" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/css/crm/report/style.css') }}" type="text/css">
@endsection

@section('title','ERP-Báo cáo hợp đồng mới')

@section('content-page')

    <div class="tab-content">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li class="active">Báo cáo hợp đồng mới</li>
        </ul>
        <div class="filterContainer">
            <form method="GET" name="crmReportVGNewCustomerFilterFilter" class="form-inline"
                role="form" id="crmReportVGNewCustomerFilterFilter">
                <div class="form-group"><input type="text" name="daterangepicker"
                        class="form-control date-range-picker" id="daterangepicker"
                        value="01/07/2020 - 24/07/2020"></div>
                <div class="form-group"><select name="companyId" id="companyId"
                        class="form-control">
                        <option value="">- Công ty -</option>
                        <option value="10" selected="selected">VNP group</option>
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
                    </select></div>
                <div class="form-group"><select name="supplyCompanyId" id="supplyCompanyId"
                        class="form-control">
                        <option value="">- Cty cung cấp sp -</option>
                        <option value="1">Nhanh.vn</option>
                        <option value="10">VNP group</option>
                        <option value="2" selected="selected">---Công ty cổ phần Vật Giá Việt
                            Nam</option>
                        <option value="315">------Vật giá - Hà Nội</option>
                        <option value="391">------123job.vn</option>
                        <option value="14">---Easycare.vn</option>
                        <option value="321">---Công ty cổ phần TMDT Bảo Kim</option>
                        <option value="384">---Công ty cổ phần WeHelp</option>
                    </select></div>
                <div class="form-group"><select name="departmentId" id="departmentId"
                        class="form-control">
                        <option value="">- Phòng ban -</option>
                        <option value="388">Giám đốc</option>
                        <option value="940">Kế toán</option>
                        <option value="943">Nhân sự</option>
                        <option value="1043">Trợ Lý</option>
                        <option value="1055">Kiểm soát nội bộ</option>
                        <option value="1112">YPP</option>
                        <option value="1123">BNC Group</option>
                        <option value="1145">Quà trực tuyến</option>
                        <option value="1204">Công ty TNHH Nguồn Nhân Lực Elite Việt Nam</option>
                        <option value="1205">-- Tuyển dụng ngoại bộ</option>
                        <option value="1206">-- Đào tạo ngoại bộ Westart</option>
                        <option value="1272">Dự Án Westay</option>
                    </select></div>
                <div class="form-group"><input name="submit" type="submit"
                        id="btnFilterCrmContact" class="form-control btn btn-primary"
                        value="Lọc"></div>
            </form>
        </div>
        <div class="dgContainer">
            <div style="display: none; width: 1874px;" class="stickyHeader">
                <table class="table table-bordered" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr class="even">
                            <th style="width: 60px;">STT</th>
                            <th style="width: 274px;">Tên nhân viên</th>
                            <th style="width: 84px;">Mã NV</th>
                            <th style="width: 109px;">Số khách</th>
                            <th style="width: 82px;">Số HD</th>
                            <th style="width: 144px;">Giá trị</th>
                            <th style="width: 145px;">Tổng thu</th>
                            <th style="width: 145px;">Doanh số</th>
                            <th style="width: 136px;">GHĐB (mới)</th>
                            <th style="width: 150px;">GHĐB (tái ký)</th>
                            <th style="width: 91px;">Banner</th>
                            <th style="width: 101px;">Nạp tiền</th>
                            <th style="width: 86px;">Tin vip</th>
                            <th style="width: 98px;">Siêu vip</th>
                            <th style="width: 145px;">Siêu vip dính</th>
                            <th style="width: 23px;"></th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div style="clear: both;"></div><br>
            </div>
            <table id="dgCrmReportCommission" class="table table-bordered">
                <thead>
                    <tr class="even">
                        <th>STT</th>
                        <th>Tên nhân viên</th>
                        <th>Mã NV</th>
                        <th>Số khách</th>
                        <th>Số HD</th>
                        <th>Giá trị</th>
                        <th>Tổng thu</th>
                        <th>Doanh số</th>
                        <th>GHĐB (mới)</th>
                        <th>GHĐB (tái ký)</th>
                        <th>Banner</th>
                        <th>Nạp tiền</th>
                        <th>Tin vip</th>
                        <th>Siêu vip</th>
                        <th>Siêu vip dính</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="info">
                        <td class="" colspan="3"><b>Tổng</b></td>
                        <td class="col-align-right">32</td>
                        <td class="col-align-right">32</td>
                        <td class="col-align-right">129.596.000</td>
                        <td class="col-align-right">126.386.000</td>
                        <td class="col-align-right">126.386.000</td>
                        <td class="col-align-right">7</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-right">1</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=937&amp;applyDateRange=01%2F07%2F2020%20-%2024%2F07%2F2020">Phạm
                                Văn Phú</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=937&amp;applyDateRange=01%2F07%2F2020%20-%2024%2F07%2F2020">1308</a>
                        </td>
                        <td class="col-align-right">1</td>
                        <td class="col-align-right">1</td>
                        <td class="col-align-right">31.460.000</td>
                        <td class="col-align-right">31.460.000</td>
                        <td class="col-align-right">28.820.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                    </tr>
                    <tr>
                        <td class="col-align-right">2</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10982&amp;applyDateRange=01%2F07%2F2020%20-%2024%2F07%2F2020">Nguyễn
                                Thị Phương Loan</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10982&amp;applyDateRange=01%2F07%2F2020%20-%2024%2F07%2F2020">9752</a>
                        </td>
                        <td class="col-align-right">7</td>
                        <td class="col-align-right">7</td>
                        <td class="col-align-right">18.040.000</td>
                        <td class="col-align-right">18.040.000</td>
                        <td class="col-align-right">18.040.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-right">3</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=951&amp;applyDateRange=01%2F07%2F2020%20-%2024%2F07%2F2020">Nguyễn
                                Hoàng Long</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=951&amp;applyDateRange=01%2F07%2F2020%20-%2024%2F07%2F2020">1601</a>
                        </td>
                        <td class="col-align-right">1</td>
                        <td class="col-align-right">1</td>
                        <td class="col-align-right">15.840.000</td>
                        <td class="col-align-right">14.840.000</td>
                        <td class="col-align-right">14.840.000</td>
                        <td class="col-align-right">1</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                    </tr>
                    <tr>
                        <td class="col-align-right">4</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11082&amp;applyDateRange=01%2F07%2F2020%20-%2024%2F07%2F2020">Nguyễn
                                Thanh Vân</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11082&amp;applyDateRange=01%2F07%2F2020%20-%2024%2F07%2F2020">9935</a>
                        </td>
                        <td class="col-align-right">9</td>
                        <td class="col-align-right">9</td>
                        <td class="col-align-right">11.994.000</td>
                        <td class="col-align-right">11.994.000</td>
                        <td class="col-align-right">11.994.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-right">5</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1257&amp;applyDateRange=01%2F07%2F2020%20-%2024%2F07%2F2020">Phan
                                Vũ Như Quỳnh</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1257&amp;applyDateRange=01%2F07%2F2020%20-%2024%2F07%2F2020">1412</a>
                        </td>
                        <td class="col-align-right">2</td>
                        <td class="col-align-right">2</td>
                        <td class="col-align-right">11.880.000</td>
                        <td class="col-align-right">11.880.000</td>
                        <td class="col-align-right">11.880.000</td>
                        <td class="col-align-right">2</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                    </tr>
                    <tr>
                        <td class="col-align-right">6</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7790&amp;applyDateRange=01%2F07%2F2020%20-%2024%2F07%2F2020">Nguyễn
                                Duy Hưng</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7790&amp;applyDateRange=01%2F07%2F2020%20-%2024%2F07%2F2020">6846</a>
                        </td>
                        <td class="col-align-right">2</td>
                        <td class="col-align-right">2</td>
                        <td class="col-align-right">11.880.000</td>
                        <td class="col-align-right">11.880.000</td>
                        <td class="col-align-right">11.880.000</td>
                        <td class="col-align-right">2</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-right">7</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=954&amp;applyDateRange=01%2F07%2F2020%20-%2024%2F07%2F2020">Nguyễn
                                Thiện Tâm</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=954&amp;applyDateRange=01%2F07%2F2020%20-%2024%2F07%2F2020">1602</a>
                        </td>
                        <td class="col-align-right">2</td>
                        <td class="col-align-right">2</td>
                        <td class="col-align-right">8.800.000</td>
                        <td class="col-align-right">8.800.000</td>
                        <td class="col-align-right">8.800.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                    </tr>
                    <tr>
                        <td class="col-align-right">8</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1493&amp;applyDateRange=01%2F07%2F2020%20-%2024%2F07%2F2020">Phan
                                Quỳnh Hương</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1493&amp;applyDateRange=01%2F07%2F2020%20-%2024%2F07%2F2020">0189</a>
                        </td>
                        <td class="col-align-right">1</td>
                        <td class="col-align-right">1</td>
                        <td class="col-align-right">7.920.000</td>
                        <td class="col-align-right">7.920.000</td>
                        <td class="col-align-right">7.920.000</td>
                        <td class="col-align-right">1</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-right">9</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=2021&amp;applyDateRange=01%2F07%2F2020%20-%2024%2F07%2F2020">Nguyễn
                                Thị Quỳnh Vân</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=2021&amp;applyDateRange=01%2F07%2F2020%20-%2024%2F07%2F2020">0745</a>
                        </td>
                        <td class="col-align-right">2</td>
                        <td class="col-align-right">2</td>
                        <td class="col-align-right">4.460.000</td>
                        <td class="col-align-right">4.460.000</td>
                        <td class="col-align-right">4.460.000</td>
                        <td class="col-align-right">1</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                    </tr>
                    <tr>
                        <td class="col-align-right">10</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10356&amp;applyDateRange=01%2F07%2F2020%20-%2024%2F07%2F2020">Vũ
                                Duy Hoàng</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10356&amp;applyDateRange=01%2F07%2F2020%20-%2024%2F07%2F2020">9190</a>
                        </td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right">2.640.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-right">11</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9812&amp;applyDateRange=01%2F07%2F2020%20-%2024%2F07%2F2020">Nguyễn
                                Thị Ngọc Trầm</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9812&amp;applyDateRange=01%2F07%2F2020%20-%2024%2F07%2F2020">8673</a>
                        </td>
                        <td class="col-align-right">1</td>
                        <td class="col-align-right">1</td>
                        <td class="col-align-right">3.960.000</td>
                        <td class="col-align-right">2.000.000</td>
                        <td class="col-align-right">2.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                    </tr>
                    <tr>
                        <td class="col-align-right">12</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7691&amp;applyDateRange=01%2F07%2F2020%20-%2024%2F07%2F2020">Nguyễn
                                Văn Hưng</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7691&amp;applyDateRange=01%2F07%2F2020%20-%2024%2F07%2F2020">6749</a>
                        </td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right">1.595.000</td>
                        <td class="col-align-right">1.595.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-right">13</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11288&amp;applyDateRange=01%2F07%2F2020%20-%2024%2F07%2F2020">Vũ
                                Thị Quỳnh Trang</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11288&amp;applyDateRange=01%2F07%2F2020%20-%2024%2F07%2F2020">10123</a>
                        </td>
                        <td class="col-align-right">1</td>
                        <td class="col-align-right">1</td>
                        <td class="col-align-right">867.000</td>
                        <td class="col-align-right">867.000</td>
                        <td class="col-align-right">867.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                    </tr>
                    <tr>
                        <td class="col-align-right">14</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=2097&amp;applyDateRange=01%2F07%2F2020%20-%2024%2F07%2F2020">Tạ
                                Thị Thùy</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=2097&amp;applyDateRange=01%2F07%2F2020%20-%2024%2F07%2F2020">0826</a>
                        </td>
                        <td class="col-align-right">1</td>
                        <td class="col-align-right">1</td>
                        <td class="col-align-right">400.000</td>
                        <td class="col-align-right">400.000</td>
                        <td class="col-align-right">400.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-right">15</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11189&amp;applyDateRange=01%2F07%2F2020%20-%2024%2F07%2F2020">Ngọ
                                Văn Tình</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11189&amp;applyDateRange=01%2F07%2F2020%20-%2024%2F07%2F2020">10039</a>
                        </td>
                        <td class="col-align-right">1</td>
                        <td class="col-align-right">1</td>
                        <td class="col-align-right">500.000</td>
                        <td class="col-align-right">250.000</td>
                        <td class="col-align-right">250.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                    </tr>
                    <tr>
                        <td class="col-align-right">16</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11021&amp;applyDateRange=01%2F07%2F2020%20-%2024%2F07%2F2020">Đỗ
                                Thị Thanh Nhàn</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11021&amp;applyDateRange=01%2F07%2F2020%20-%2024%2F07%2F2020">9791</a>
                        </td>
                        <td class="col-align-right">1</td>
                        <td class="col-align-right">1</td>
                        <td class="col-align-right">1.595.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                    </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
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
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/statusproduct.js') }}"></script>
@endsection