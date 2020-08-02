@extends('Layout.master1')

@section('css')
    <link href="{{ asset('asset/css/crm/report/bootstrap-multiselect.css') }}" media="screen" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/css/crm/report/style.css') }}" type="text/css">
@endsection

@section('title','ERP-Báo cáo theo nguồn khách hàng')

@section('content-page')
    <div class="tab-content">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li class="active">Báo cáo theo nguồn khách hàng</li>
        </ul>
        <div class="filterContainer">
            <form method="GET" name="crmReportEmployeesFilter" class="form-inline lolify"
                role="form" id="crmReportEmployeesFilter">
                <div class="col-md-10 lolify-default">

                    <div class="form-group">
                        <input type="text" name="daterangepicker"
                            class="form-control date-range-picker" id="daterangepicker"
                            value="01/07/2020 - 31/07/2020"> </div>
                    <div class="form-group">
                        <select name="companyId" id="companyId" class="form-control">
                            <option value="">- Công ty nhân viên -</option>
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
                        <select name="departmentId" id="departmentId" class="form-control">
                            <option value="">- Phòng ban -</option>
                        </select> </div>
                    <div class="form-group">
                        <input type="text" name="createdByName" maxlength="255"
                            placeholder="Nhân viên" id="createdByName"
                            class="form-control ui-autocomplete-input" value=""
                            autocomplete="off"> </div>
                    <input type="hidden" name="createdById" id="createdById"
                        class="form-control" value="">
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
        </div><a id="exportExcel" href="https://erp.nhanh.vn/crm/report/sourceaccount#"><button
                class="btn btn-primary btn-sm "><i class="fa fa-download fa-lg"></i>Xuất
                excel</button></a>
        <div class="dgContainer">
            <div style="display: none; width: 1874px;" class="stickyHeader">
                <table class="table table-bordered" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr class="even">
                            <th style="width: 229px;">STT</th>
                            <th style="width: 343px;">Tên Nguồn</th>
                            <th style="width: 171px;">Nhận chăm sóc</th>
                            <th style="width: 212px;">Số Khách hàng mới</th>
                            <th style="width: 376px;">CVR (Số KH mới/ Số nhận chăm sóc)</th>
                            <th style="width: 194px;">Số Hợp đồng mới</th>
                            <th style="width: 180px;">Giá trị hợp đồng</th>
                            <th style="width: 168px;">Đã trả </th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div style="clear: both;"></div><br>
            </div>
            <table id="dgCrmReportTarget" class="table table-bordered">
                <thead>
                    <tr class="even">
                        <th>STT</th>
                        <th>Tên Nguồn</th>
                        <th>Nhận chăm sóc</th>
                        <th>Số Khách hàng mới</th>
                        <th>CVR (Số KH mới/ Số nhận chăm sóc)</th>
                        <th>Số Hợp đồng mới</th>
                        <th>Giá trị hợp đồng</th>
                        <th>Đã trả </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td class="col-align-right">1</td>
                        <td class="">Data bàn giao - FB ADS</td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/activity/indexvg?createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7&amp;relatedUserId=&amp;source=1&amp;companyId=">77</a>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;departmentId=&amp;source=1&amp;status=1&amp;companyId=&amp;createdById=&amp;statusPay=4">8</a>
                        </td>
                        <td class="col-align-right">10%</td>
                        <td class="col-align-right" style="box-shadow: 0 0 0 1px #fff inset; background-image: -webkit-linear-gradient(0deg, #FDD25C 2%, #ffffff 2%);"><a target="_blank" href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;departmentId=&amp;source=1&amp;status=1&amp;companyId=&amp;createdById=&amp;statusPay=4">10<span
                                    class="text-info"> (2%)</span>.</a></td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;source=1&amp;status=1&amp;departmentId=&amp;companyId=&amp;statusPay=4&amp;createdById=">52.280.000</a>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;source=1&amp;status=3&amp;companyId=&amp;createdById=">52.280.000</a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-right">2</td>
                        <td class="">Data bàn giao - Fanpage</td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/activity/indexvg?createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7&amp;relatedUserId=&amp;source=26&amp;companyId=">84</a>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;departmentId=&amp;source=26&amp;status=1&amp;companyId=&amp;createdById=&amp;statusPay=4">27</a>
                        </td>
                        <td class="col-align-right">32%</td>
                        <td class="col-align-right" style="box-shadow: 0 0 0 1px #fff inset; background-image: -webkit-linear-gradient(0deg, #FDD25C 5%, #ffffff 5%);"><a target="_blank" href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;departmentId=&amp;source=26&amp;status=1&amp;companyId=&amp;createdById=&amp;statusPay=4">30<span
                                    class="text-info"> (5%)</span>.</a></td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;source=26&amp;status=1&amp;departmentId=&amp;companyId=&amp;statusPay=4&amp;createdById=">122.060.000</a>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;source=26&amp;status=3&amp;companyId=&amp;createdById=">87.560.000</a>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="col-align-right">3</td>
                        <td class="">Data bàn giao - Google Ads</td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/activity/indexvg?createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7&amp;relatedUserId=&amp;source=25&amp;companyId=">31</a>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;departmentId=&amp;source=25&amp;status=1&amp;companyId=&amp;createdById=&amp;statusPay=4">2</a>
                        </td>
                        <td class="col-align-right">6%</td>
                        <td class="col-align-right" style=""><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;departmentId=&amp;source=25&amp;status=1&amp;companyId=&amp;createdById=&amp;statusPay=4">2<span
                                    class="text-info"> (0%)</span>.</a></td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;source=25&amp;status=1&amp;departmentId=&amp;companyId=&amp;statusPay=4&amp;createdById=">7.000.000</a>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;source=25&amp;status=3&amp;companyId=&amp;createdById=">7.000.000</a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-right">4</td>
                        <td class="">Data bàn giao - SEO</td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/activity/indexvg?createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7&amp;relatedUserId=&amp;source=22&amp;companyId=">518</a>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;departmentId=&amp;source=22&amp;status=1&amp;companyId=&amp;createdById=&amp;statusPay=4">17</a>
                        </td>
                        <td class="col-align-right">3%</td>
                        <td class="col-align-right" style="box-shadow: 0 0 0 1px #fff inset; background-image: -webkit-linear-gradient(0deg, #FDD25C 3%, #ffffff 3%);"><a target="_blank" href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;departmentId=&amp;source=22&amp;status=1&amp;companyId=&amp;createdById=&amp;statusPay=4">17<span
                                    class="text-info"> (3%)</span>.</a></td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;source=22&amp;status=1&amp;departmentId=&amp;companyId=&amp;statusPay=4&amp;createdById=">75.030.000</a>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;source=22&amp;status=3&amp;companyId=&amp;createdById=">59.830.000</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-align-right">5</td>
                        <td class="">Data bàn giao- Hotline</td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/activity/indexvg?createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7&amp;relatedUserId=&amp;source=19&amp;companyId=">159</a>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;departmentId=&amp;source=19&amp;status=1&amp;companyId=&amp;createdById=&amp;statusPay=4">64</a>
                        </td>
                        <td class="col-align-right">40%</td>
                        <td class="col-align-right" style="box-shadow: 0 0 0 1px #fff inset; background-image: -webkit-linear-gradient(0deg, #FDD25C 11%, #ffffff 11%);"><a target="_blank" href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;departmentId=&amp;source=19&amp;status=1&amp;companyId=&amp;createdById=&amp;statusPay=4">69<span
                                    class="text-info"> (11%)</span>.</a></td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;source=19&amp;status=1&amp;departmentId=&amp;companyId=&amp;statusPay=4&amp;createdById=">242.796.000</a>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;source=19&amp;status=3&amp;companyId=&amp;createdById=">209.796.000</a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-right">6</td>
                        <td class="">Data bàn giao - Không có mã</td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/activity/indexvg?createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7&amp;relatedUserId=&amp;source=8&amp;companyId=">729</a>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;departmentId=&amp;source=8&amp;status=1&amp;companyId=&amp;createdById=&amp;statusPay=4">73</a>
                        </td>
                        <td class="col-align-right">10%</td>
                        <td class="col-align-right" style="box-shadow: 0 0 0 1px #fff inset; background-image: -webkit-linear-gradient(0deg, #FDD25C 13%, #ffffff 13%);"><a target="_blank" href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;departmentId=&amp;source=8&amp;status=1&amp;companyId=&amp;createdById=&amp;statusPay=4">86<span
                                    class="text-info"> (13%)</span>.</a></td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;source=8&amp;status=1&amp;departmentId=&amp;companyId=&amp;statusPay=4&amp;createdById=">299.359.000</a>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;source=8&amp;status=3&amp;companyId=&amp;createdById=">268.339.000</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-align-right">7</td>
                        <td class="">Data bàn giao - Email marketing</td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/activity/indexvg?createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7&amp;relatedUserId=&amp;source=11&amp;companyId=">14</a>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;departmentId=&amp;source=11&amp;status=1&amp;companyId=&amp;createdById=&amp;statusPay=4">6</a>
                        </td>
                        <td class="col-align-right">43%</td>
                        <td class="col-align-right" style="box-shadow: 0 0 0 1px #fff inset; background-image: -webkit-linear-gradient(0deg, #FDD25C 1%, #ffffff 1%);"><a target="_blank" href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;departmentId=&amp;source=11&amp;status=1&amp;companyId=&amp;createdById=&amp;statusPay=4">7<span
                                    class="text-info"> (1%)</span>.</a></td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;source=11&amp;status=1&amp;departmentId=&amp;companyId=&amp;statusPay=4&amp;createdById=">36.867.000</a>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;source=11&amp;status=3&amp;companyId=&amp;createdById=">36.867.000</a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-right">8</td>
                        <td class="">Data bàn giao - SĐT quét từ QC</td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/activity/indexvg?createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7&amp;relatedUserId=&amp;source=21&amp;companyId=">93</a>
                        </td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right">0%</td>
                        <td class="col-align-right" style=""></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                    </tr>
                    <tr>
                        <td class="col-align-right">9</td>
                        <td class="">Data bàn giao - Được giới thiệu</td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/activity/indexvg?createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7&amp;relatedUserId=&amp;source=3&amp;companyId=">47</a>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;departmentId=&amp;source=3&amp;status=1&amp;companyId=&amp;createdById=&amp;statusPay=4">16</a>
                        </td>
                        <td class="col-align-right">34%</td>
                        <td class="col-align-right" style="box-shadow: 0 0 0 1px #fff inset; background-image: -webkit-linear-gradient(0deg, #FDD25C 3%, #ffffff 3%);"><a target="_blank" href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;departmentId=&amp;source=3&amp;status=1&amp;companyId=&amp;createdById=&amp;statusPay=4">17<span
                                    class="text-info"> (3%)</span>.</a></td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;source=3&amp;status=1&amp;departmentId=&amp;companyId=&amp;statusPay=4&amp;createdById=">97.350.000</a>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;source=3&amp;status=3&amp;companyId=&amp;createdById=">93.150.000</a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-right">10</td>
                        <td class="">Hội thảo, sự kiện, đi thị trường</td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/activity/indexvg?createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7&amp;relatedUserId=&amp;source=12&amp;companyId=">79</a>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;departmentId=&amp;source=12&amp;status=1&amp;companyId=&amp;createdById=&amp;statusPay=4">11</a>
                        </td>
                        <td class="col-align-right">14%</td>
                        <td class="col-align-right" style="box-shadow: 0 0 0 1px #fff inset; background-image: -webkit-linear-gradient(0deg, #FDD25C 2%, #ffffff 2%);"><a target="_blank" href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;departmentId=&amp;source=12&amp;status=1&amp;companyId=&amp;createdById=&amp;statusPay=4">11<span
                                    class="text-info"> (2%)</span>.</a></td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;source=12&amp;status=1&amp;departmentId=&amp;companyId=&amp;statusPay=4&amp;createdById=">92.450.000</a>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;source=12&amp;status=3&amp;companyId=&amp;createdById=">90.250.000</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-align-right">11</td>
                        <td class="">Khách tự liên hệ kinh doanh</td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/activity/indexvg?createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7&amp;relatedUserId=&amp;source=13&amp;companyId=">91</a>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;departmentId=&amp;source=13&amp;status=1&amp;companyId=&amp;createdById=&amp;statusPay=4">52</a>
                        </td>
                        <td class="col-align-right">57%</td>
                        <td class="col-align-right" style="box-shadow: 0 0 0 1px #fff inset; background-image: -webkit-linear-gradient(0deg, #FDD25C 9%, #ffffff 9%);"><a target="_blank" href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;departmentId=&amp;source=13&amp;status=1&amp;companyId=&amp;createdById=&amp;statusPay=4">56<span
                                    class="text-info"> (9%)</span>.</a></td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;source=13&amp;status=1&amp;departmentId=&amp;companyId=&amp;statusPay=4&amp;createdById=">224.317.800</a>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;source=13&amp;status=3&amp;companyId=&amp;createdById=">194.317.800</a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-right">12</td>
                        <td class="">Kinh doanh được giới thiệu</td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/activity/indexvg?createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7&amp;relatedUserId=&amp;source=15&amp;companyId=">110</a>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;departmentId=&amp;source=15&amp;status=1&amp;companyId=&amp;createdById=&amp;statusPay=4">55</a>
                        </td>
                        <td class="col-align-right">50%</td>
                        <td class="col-align-right" style="box-shadow: 0 0 0 1px #fff inset; background-image: -webkit-linear-gradient(0deg, #FDD25C 9%, #ffffff 9%);"><a target="_blank" href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;departmentId=&amp;source=15&amp;status=1&amp;companyId=&amp;createdById=&amp;statusPay=4">59<span
                                    class="text-info"> (9%)</span>.</a></td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;source=15&amp;status=1&amp;departmentId=&amp;companyId=&amp;statusPay=4&amp;createdById=">200.774.000</a>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;source=15&amp;status=3&amp;companyId=&amp;createdById=">186.374.000</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-align-right">13</td>
                        <td class="">TeleSale</td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/activity/indexvg?createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7&amp;relatedUserId=&amp;source=17&amp;companyId=">1473</a>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;departmentId=&amp;source=17&amp;status=1&amp;companyId=&amp;createdById=&amp;statusPay=4">90</a>
                        </td>
                        <td class="col-align-right">6%</td>
                        <td class="col-align-right" style="box-shadow: 0 0 0 1px #fff inset; background-image: -webkit-linear-gradient(0deg, #FDD25C 15%, #ffffff 15%);"><a target="_blank" href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;departmentId=&amp;source=17&amp;status=1&amp;companyId=&amp;createdById=&amp;statusPay=4">98<span
                                    class="text-info"> (15%)</span>.</a></td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;source=17&amp;status=1&amp;departmentId=&amp;companyId=&amp;statusPay=4&amp;createdById=">386.853.900</a>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;source=17&amp;status=3&amp;companyId=&amp;createdById=">295.333.900</a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-right">14</td>
                    <td class="">Seeding/ Inbox/ Spam</td>
                    <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/activity/indexvg?createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7&amp;relatedUserId=&amp;source=24&amp;companyId=">283</a>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;departmentId=&amp;source=24&amp;status=1&amp;companyId=&amp;createdById=&amp;statusPay=4">61</a>
                        </td>
                        <td class="col-align-right">22%</td>
                        <td class="col-align-right" style="box-shadow: 0 0 0 1px #fff inset; background-image: -webkit-linear-gradient(0deg, #FDD25C 12%, #ffffff 12%);"><a target="_blank" href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;departmentId=&amp;source=24&amp;status=1&amp;companyId=&amp;createdById=&amp;statusPay=4">78<span
                                    class="text-info"> (12%)</span>.</a></td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;source=24&amp;status=1&amp;departmentId=&amp;companyId=&amp;statusPay=4&amp;createdById=">199.480.000</a>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;source=24&amp;status=3&amp;companyId=&amp;createdById=">163.280.000</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-align-right">15</td>
                        <td class="">Khác</td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/activity/indexvg?createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7&amp;relatedUserId=&amp;source=100&amp;companyId=">147</a>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;departmentId=&amp;source=100&amp;status=1&amp;companyId=&amp;createdById=&amp;statusPay=4">24</a>
                        </td>
                        <td class="col-align-right">16%</td>
                        <td class="col-align-right" style="box-shadow: 0 0 0 1px #fff inset; background-image: -webkit-linear-gradient(0deg, #FDD25C 4%, #ffffff 4%);"><a target="_blank" href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;departmentId=&amp;source=100&amp;status=1&amp;companyId=&amp;createdById=&amp;statusPay=4">27<span
                                    class="text-info"> (4%)</span>.</a></td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;source=100&amp;status=1&amp;departmentId=&amp;companyId=&amp;statusPay=4&amp;createdById=">127.715.400</a>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;source=100&amp;status=3&amp;companyId=&amp;createdById=">123.115.400</a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-right">16</td>
                        <td class="">Chưa cập nhật nguồn</td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/activity/indexvg?createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7&amp;source=-1&amp;companyId=&amp;createdById=">4447</a>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;departmentId=&amp;source=-1&amp;status=1&amp;companyId=&amp;statusPay=4&amp;createdById=">63</a>
                        </td>
                        <td class="col-align-right">1%</td>
                        <td class="col-align-right" style="box-shadow: 0 0 0 1px #fff inset; background-image: -webkit-linear-gradient(0deg, #FDD25C 11%, #ffffff 11%);"><a target="_blank" href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;departmentId=&amp;source=-1&amp;status=1&amp;companyId=&amp;statusPay=4&amp;createdById=">72<span
                                    class="text-info"> (11%)</span>.</a></td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;approvedDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;source=-1&amp;status=1&amp;departmentId=&amp;companyId=&amp;statusPay=4&amp;createdById=">338.402.002</a>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/transaction?applyDaterange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;source=-1&amp;status=3&amp;companyId=&amp;createdById=">313.806.000</a>
                        </td>
                    </tr>
                    <tr class="rowSum">
                        <td><b>Tổng Data bàn giao</b></td>
                        <td></td>
                        <td class="col-align-right">1637</td>
                        <td class="col-align-right">184</td>
                        <td class="col-align-right">11%</td>
                        <td class="col-align-right">206</td>
                        <td class="col-align-right"><b>803.682.000</b></td>
                        <td class="col-align-right"><b>720.262.000</b></td>
                    </tr>
                    <tr class="rowSum even">
                        <td><b>Tổng</b></td>
                        <td></td>
                        <td class="col-align-right">8382</td>
                        <td class="col-align-right">575</td>
                        <td class="col-align-right">7%</td>
                        <td class="col-align-right">645</td>
                        <td class="col-align-right"><b>2.502.735.102</b></td>
                        <td class="col-align-right"><b>2.181.299.100</b></td>
                    </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
            </div>
        </div>
        <div class="clearfix"></div>
        <hr>
        <div class="page-description">
            <div class="col-md-1" style="text-align: center;">
                <i class="fa fa-lightbulb-o fontsize-150"></i>
            </div>
            <div class="col-md-11">
                <ul>
                    <li>Báo cáo này lọc theo tên nhân viên và phòng ban tạo hợp đồng</li>
                </ul>
            </div>
        </div>
        <style>
            #exportExcell {
                color: #fff;
                background-color: #3276b1;
                border-color: #285e8e;
                text-decoration: none;
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
@endsection