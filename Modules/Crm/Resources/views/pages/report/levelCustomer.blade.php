@extends('crm::layouts.master1')

@section('css')
    <link href="{{ asset('css/crm/report/bootstrap-multiselect.css') }}" media="screen" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/crm/report/style.css') }}" type="text/css">
@endsection

@section('title','ERP-Báo cáo theo trạng thái khách hàng')

@section('content-page')

    <div class="tab-content">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li class="active">Báo cáo khách hàng theo nhân viên</li>
        </ul>
        <div class="filterContainer">
            <form method="GET" name="crmReportMettingVgFilter" class="form-inline lolify"
                  role="form" id="crmReportMettingVgFilter">
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
                            <option value="">- Phòng ban NV -</option>
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
                        <input type="text" name="q" placeholder="Tên hoặc mã nhân sự" id="q"
                               class="form-control" value=""> </div>
                    <div class="form-group">
                        <select name="source" id="source" class="form-control">
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
                        </select> </div>
                    <div class="form-group">
                        <select name="leadType" id="leadType" class="form-control">
                            <option value="">- Nguồn công ty cung cấp -</option>
                            <option value="1">Có</option>
                            <option value="-1">Không</option>
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
        </div>
        <ul class="nav nav-tabs">
            <li class="active">
                <a data-toggle="tab"
                   href="{{ route('reportAccounttoemployeeHome') }}">
                    Số lượng theo nhân viên
                </a>
            </li>
            <li>
                <a data-toggle="tab"
                   href="{{ route('reportAccounttoemployeeDepartment') }}">Số lượng
                    theo phòng ban</a>
            </li>
            <li>
                <a data-toggle="tab"
                   href="{{ route('reportAccounttoemployeePercent') }}">Tỷ lệ</a>
            </li>

        </ul>
        <div class="tab-content col-md-12">
            <div id="home" class="tab-pane fade in active"><a style="float: right;"
                                                              id="exportExcel"
                                                              href="https://erp.nhanh.vn/crm/report/accounttoemployee#"><button
                            class="btn btn-primary btn-sm "><i class="fa fa-download fa-lg"></i>Xuất
                        excel</button></a>
                <div class="dgContainer">
                    <table id="dgCrmReportTarget" class="table table-bordered">
                        <thead>
                        <tr class="even">
                            <th>STT</th>
                            <th>Mã NV</th>
                            <th>Nhân viên</th>
                            <th>Phòng ban</th>
                            <th>Số KH chăm sóc</th>
                            @foreach ($customerLevels as $level)
                                <th>{{ "$level->code - $level->name" }}</th>
                                @php
                                    $totalCustomerLevels[$level->name] = 0;
                                @endphp
                            @endforeach
                            <th>Tổng trạng thái</th>
                            <th>Giá trị hợp đồng</th>
                            <th>Đã trả </th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $totalAllCustomer = 0;
                            $totalAllValueContract = 0;
                            $totalAllValueContractWasChecked = 0;
                        @endphp
                        @foreach ($reports as $key => $report)
                            @php
                                $totalAllCustomer += $report['quantityOfCustomer'];
                                $totalAllValueContract += $report['valueFromContract'];
                                $totalAllValueContractWasChecked += $report['valueFromContractWasChecked'];
                            @endphp
                            <tr class="">
                            <td class="col-align-right">1</td>
                            <td><a
                                        href="https://erp.nhanh.vn/crm/report/accounttoemployee?employeeId=10879">9650</a>
                            </td>
                            <td><a
                                        href="https://erp.nhanh.vn/crm/report/accounttoemployee?employeeId=10879">{{ $key }}</a></td>
                            <td><a
                                        href="https://erp.nhanh.vn/crm/report/accounttoemployee?employeeDepartmentId=1318">Phòng ban</a></td>
                            <td class="col-align-right"><a targer="_blank"
                                                           href="https://erp.nhanh.vn/crm/activity/indexvg?createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=7&amp;relatedUserId=8485&amp;source=&amp;leadType=">{{ $report['quantityOfCustomer'] }}</a>
                            </td>
                            @foreach ($report['levels'] as $keylevel => $level)
                                <td class="col-align-right"><a target="_blank"
                                                               href="https://erp.nhanh.vn/crm/report/accounttoemployeedetail?applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;salesStage=20&amp;userId=8485&amp;source=&amp;leadType=">{{ $level }}</a>
                                </td>
                                    @php
                                        $totalCustomerLevels[$keylevel] += $level;
                                    @endphp
                            @endforeach
                            <td class="col-align-right taskStt1 "><b>{{ $report['quantityOfCustomer'] }}</b></td>
                            <td class="col-align-right"><a target="_blank"
                                                           href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8485&amp;status=1&amp;statusPay=4&amp;source=">{{ number_format($report['valueFromContract']) }}</a>
                            </td>
                            <td class="col-align-right"><a
                                        href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;createdById=8485&amp;status=1&amp;statusPay=4&amp;source=">{{ number_format($report['valueFromContractWasChecked']) }}</a>
                            </td>
                        </tr>
                        @endforeach
                        <tr class="rowSum">
                            <td><b>Tổng</b></td>
                            <td colspan="3"></td>
                            <td class="col-align-right"><b>{{ $totalAllCustomer }}</b></td>
                            @foreach($totalCustomerLevels as $key => $totalLevel)
                                <td class="col-align-right">{{ $totalLevel }}</td>
                            @endforeach
                            <td class="col-align-right">{{ $totalAllCustomer }}</td>
                            <td class="col-align-right">{{ number_format($totalAllValueContract) }}</td>
                            <td class="col-align-right"><b>{{ number_format($totalAllValueContractWasChecked) }}</b></td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-md-6 dgButtons"></div>
                    </div>
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
    <script type="text/javascript" src="{{ asset('js/crm/report/saved_resource(2)') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/report/saved_resource(3)') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/report/saved_resource(4)') }}"></script>
@endsection