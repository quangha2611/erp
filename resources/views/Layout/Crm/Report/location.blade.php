@extends('Layout.master1')

@section('css')
    <link href="{{ asset('asset/css/crm/report/bootstrap-multiselect.css') }}" media="screen" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/css/crm/report/style.css') }}" type="text/css">
@endsection

@section('title','ERP-Báo cáo theo địa điểm')

@section('content-page')


        <div class="tab-content">
            <script type="text/javascript" src="./ERP-Báo cáo theo địa điểm_files/jsapi"></script>
            <style>
                .pieLabelBackground {
                    background-color: transparent !important
                }

                .legendColorBox {
                    display: block;
                }

                #flot-placeholder-reason tbody {
                    width: 190px;
                    display: block;
                }

                #flot-placeholder-reason tbody .legendLabel {
                    padding-bottom: 5px;
                    padding-left: 2px;
                }
            </style>
            <ul class="breadcrumb">
                <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
                <li class="active">Báo cáo doanh thu theo địa điểm</li>
            </ul>
            <div class="filterContainer">
                <form method="GET" name="crmReportProductFilter" class="form-inline" role="form"
                    id="crmReportProductFilter">
                    <div class="form-group"><input type="text" name="daterangepicker"
                            placeholder="Thời gian" class="form-control date-range-picker"
                            id="daterangepicker" value="01/07/2020 - 31/07/2020"></div>
                    <div class="form-group"><select name="companyId" id="companyId"
                            class="form-control">
                            <option value="">- Công ty -</option>
                            <option value="10">VNP group</option>
                            <option value="2">---Công ty cổ phần Vật Giá Việt Nam</option>
                            <option value="315">------Vật giá - Hà Nội</option>
                            <option value="319">------Vật giá - Hồ Chí Minh</option>
                            <option value="365">------Vật giá - Hải Phòng</option>
                            <option value="387">------WeSave</option>
                            <option value="389">------123doc.org</option>
                            <option value="390">------Cunghocvui.com</option>
                            <option value="391">------123job.vn</option>
                            <option value="392">------9houz.com</option>
                            <option value="393">------123dok.com</option>
                            <option value="321">---Công ty cổ phần TMDT Bảo Kim</option>
                            <option value="322">------Bảo Kim - Hà Nội</option>
                            <option value="323">------Bảo Kim - Hồ Chí Minh</option>
                            <option value="324">---Công ty cổ phần Nhanh.vn</option>
                            <option value="1" selected="selected">------Nhanh.vn</option>
                            <option value="366">------Nhanh.vn Đà Nẵng</option>
                            <option value="395">------Nhanh.vn HCM</option>
                            <option value="379">---Westay</option>
                            <option value="384">---Công ty cổ phần WeHelp</option>
                            <option value="398">---WeLove</option>
                        </select></div>
                    <div class="form-group"><select name="departmentId" id="departmentId"
                            class="form-control">
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
                        </select></div>
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
                    <div class="form-group"><input name="submit" type="submit"
                            id="btnFilterCrmContact" class="form-control btn btn-primary"
                            value="Lọc"></div>
                </form>
            </div>
            <div id="page-crm-contact">
                <div class="row">
                    <div class="col-md-12">
                        <div class="widget">
                            <div class="widget-header">
                                <h3><i class="fa fa-bar-chart-o"></i> Biểu đồ: Thống kê doanh thu
                                    theo địa điểm</h3>
                            </div>
                            <div class="widget-content col-md-12">
                                <div class="col-md-6">
                                    <div id="amount-chart"></div>
                                </div>
                                <div class="col-md-6" style="padding-top: 35px">
                                    <table cellspacing="0" cellpadding="0"
                                        class="table table-bordered amount-table">
                                        <thead>
                                            <tr class="even">
                                                <th>Thành phố</th>
                                                <th>Doanh thu</th>
                                                <th>Tỷ lệ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="">
                                                <td>Hà Nội</td>
                                                <td style="text-align: right">1.389.003.400</td>
                                                <td style="text-align: right">90.69%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Phú Thọ</td>
                                                <td style="text-align: right">2.400.000</td>
                                                <td style="text-align: right">0.16%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Bắc Ninh</td>
                                                <td style="text-align: right">18.070.000</td>
                                                <td style="text-align: right">1.18%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Hồ Chí Minh</td>
                                                <td style="text-align: right">51.700.000</td>
                                                <td style="text-align: right">3.38%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Bà Rịa - Vũng Tàu</td>
                                                <td style="text-align: right">2.050.000</td>
                                                <td style="text-align: right">0.13%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Hải Dương</td>
                                                <td style="text-align: right">12.675.000</td>
                                                <td style="text-align: right">0.83%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Hải Phòng</td>
                                                <td style="text-align: right">13.150.000</td>
                                                <td style="text-align: right">0.86%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Nghệ An</td>
                                                <td style="text-align: right">4.400.000</td>
                                                <td style="text-align: right">0.29%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Vĩnh Phúc</td>
                                                <td style="text-align: right">5.190.000</td>
                                                <td style="text-align: right">0.34%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Thái Bình</td>
                                                <td style="text-align: right">5.750.000</td>
                                                <td style="text-align: right">0.38%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Quảng Ninh</td>
                                                <td style="text-align: right">4.950.000</td>
                                                <td style="text-align: right">0.32%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Hưng Yên</td>
                                                <td style="text-align: right">550.000</td>
                                                <td style="text-align: right">0.04%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Kiên Giang</td>
                                                <td style="text-align: right">1.100.000</td>
                                                <td style="text-align: right">0.07%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Nam Định</td>
                                                <td style="text-align: right">4.600.000</td>
                                                <td style="text-align: right">0.3%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Gia Lai</td>
                                                <td style="text-align: right">1.100.000</td>
                                                <td style="text-align: right">0.07%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Hà Giang</td>
                                                <td style="text-align: right">550.000</td>
                                                <td style="text-align: right">0.04%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Ninh Bình</td>
                                                <td style="text-align: right">550.000</td>
                                                <td style="text-align: right">0.04%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Đồng Nai</td>
                                                <td style="text-align: right">1.100.000</td>
                                                <td style="text-align: right">0.07%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Bình Dương</td>
                                                <td style="text-align: right">1.100.000</td>
                                                <td style="text-align: right">0.07%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Thanh Hoá</td>
                                                <td style="text-align: right">825.000</td>
                                                <td style="text-align: right">0.05%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Đà Nẵng</td>
                                                <td style="text-align: right">6.400.000</td>
                                                <td style="text-align: right">0.42%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Bắc Giang</td>
                                                <td style="text-align: right">300.000</td>
                                                <td style="text-align: right">0.02%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Hà Nam</td>
                                                <td style="text-align: right">300.000</td>
                                                <td style="text-align: right">0.02%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Hoà Bình</td>
                                                <td style="text-align: right">550.000</td>
                                                <td style="text-align: right">0.04%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Lâm Đồng</td>
                                                <td style="text-align: right">1.200.000</td>
                                                <td style="text-align: right">0.08%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Phú Yên</td>
                                                <td style="text-align: right">300.000</td>
                                                <td style="text-align: right">0.02%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Bình Định</td>
                                                <td style="text-align: right">1.100.000</td>
                                                <td style="text-align: right">0.07%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>An Giang</td>
                                                <td style="text-align: right">550.000</td>
                                                <td style="text-align: right">0.04%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td><strong>Tổng</strong></td>
                                                <td style="text-align: right">
                                                    <strong>1.531.513.400</strong></td>
                                                <td style="text-align: right"><strong>100%</strong>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="widget">
                            <div class="widget-header">
                                <h3><i class="fa fa-bar-chart-o"></i> Biểu đồ: Thống kê số lượng hợp
                                    đồng theo địa điểm</h3>
                            </div>
                            <div class="widget-content col-md-12">
                                <div class="col-md-6">
                                    <div id="contract-chart"></div>
                                </div>
                                <div class="col-md-6" style="padding-top: 35px">
                                    <table cellspacing="0" cellpadding="0"
                                        class="table table-bordered contract-table">
                                        <thead>
                                            <tr class="even">
                                                <th>Thành phố</th>
                                                <th>Số lượng hợp đồng</th>
                                                <th>Tỷ lệ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="">
                                                <td>Hà Nội</td>
                                                <td style="text-align: right">381</td>
                                                <td style="text-align: right">79.71%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Phú Thọ</td>
                                                <td style="text-align: right">2</td>
                                                <td style="text-align: right">0.42%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Bắc Ninh</td>
                                                <td style="text-align: right">15</td>
                                                <td style="text-align: right">3.14%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Hồ Chí Minh</td>
                                                <td style="text-align: right">28</td>
                                                <td style="text-align: right">5.86%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Bà Rịa - Vũng Tàu</td>
                                                <td style="text-align: right">3</td>
                                                <td style="text-align: right">0.63%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Hải Dương</td>
                                                <td style="text-align: right">4</td>
                                                <td style="text-align: right">0.84%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Hải Phòng</td>
                                                <td style="text-align: right">7</td>
                                                <td style="text-align: right">1.46%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Nghệ An</td>
                                                <td style="text-align: right">3</td>
                                                <td style="text-align: right">0.63%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Vĩnh Phúc</td>
                                                <td style="text-align: right">6</td>
                                                <td style="text-align: right">1.26%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Thái Bình</td>
                                                <td style="text-align: right">3</td>
                                                <td style="text-align: right">0.63%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Quảng Ninh</td>
                                                <td style="text-align: right">3</td>
                                                <td style="text-align: right">0.63%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Hưng Yên</td>
                                                <td style="text-align: right">1</td>
                                                <td style="text-align: right">0.21%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Kiên Giang</td>
                                                <td style="text-align: right">2</td>
                                                <td style="text-align: right">0.42%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Nam Định</td>
                                                <td style="text-align: right">2</td>
                                                <td style="text-align: right">0.42%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Gia Lai</td>
                                                <td style="text-align: right">3</td>
                                                <td style="text-align: right">0.63%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Hà Giang</td>
                                                <td style="text-align: right">1</td>
                                                <td style="text-align: right">0.21%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Ninh Bình</td>
                                                <td style="text-align: right">1</td>
                                                <td style="text-align: right">0.21%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Đồng Nai</td>
                                                <td style="text-align: right">1</td>
                                                <td style="text-align: right">0.21%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Bình Dương</td>
                                                <td style="text-align: right">1</td>
                                                <td style="text-align: right">0.21%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Thanh Hoá</td>
                                                <td style="text-align: right">2</td>
                                                <td style="text-align: right">0.42%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Đà Nẵng</td>
                                                <td style="text-align: right">1</td>
                                                <td style="text-align: right">0.21%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Bắc Giang</td>
                                                <td style="text-align: right">1</td>
                                                <td style="text-align: right">0.21%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Hà Nam</td>
                                                <td style="text-align: right">1</td>
                                                <td style="text-align: right">0.21%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Hoà Bình</td>
                                                <td style="text-align: right">1</td>
                                                <td style="text-align: right">0.21%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Lâm Đồng</td>
                                                <td style="text-align: right">1</td>
                                                <td style="text-align: right">0.21%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Phú Yên</td>
                                                <td style="text-align: right">1</td>
                                                <td style="text-align: right">0.21%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Bình Định</td>
                                                <td style="text-align: right">2</td>
                                                <td style="text-align: right">0.42%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>An Giang</td>
                                                <td style="text-align: right">1</td>
                                                <td style="text-align: right">0.21%
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td><strong>Tổng</strong></td>
                                                <td style="text-align: right"><strong>478</strong>
                                                </td>
                                                <td style="text-align: right"><strong>100%</strong>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <script type="text/javascript">
                var data = [{
                    "label": "H\u00e0 N\u1ed9i",
                    "data1": "1389003400",
                    "data2": "381"
                }, {
                    "label": "Ph\u00fa Th\u1ecd",
                    "data1": "2400000",
                    "data2": "2"
                }, {
                    "label": "B\u1eafc Ninh",
                    "data1": "18070000",
                    "data2": "15"
                }, {
                    "label": "H\u1ed3 Ch\u00ed Minh",
                    "data1": "51700000",
                    "data2": "28"
                }, {
                    "label": "B\u00e0 R\u1ecba - V\u0169ng T\u00e0u",
                    "data1": "2050000",
                    "data2": "3"
                }, {
                    "label": "H\u1ea3i D\u01b0\u01a1ng",
                    "data1": "12675000",
                    "data2": "4"
                }, {
                    "label": "H\u1ea3i Ph\u00f2ng",
                    "data1": "13150000",
                    "data2": "7"
                }, {
                    "label": "Ngh\u1ec7 An",
                    "data1": "4400000",
                    "data2": "3"
                }, {
                    "label": "V\u0129nh Ph\u00fac",
                    "data1": "5190000",
                    "data2": "6"
                }, {
                    "label": "Th\u00e1i B\u00ecnh",
                    "data1": "5750000",
                    "data2": "3"
                }, {
                    "label": "Qu\u1ea3ng Ninh",
                    "data1": "4950000",
                    "data2": "3"
                }, {
                    "label": "H\u01b0ng Y\u00ean",
                    "data1": "550000",
                    "data2": "1"
                }, {
                    "label": "Ki\u00ean Giang",
                    "data1": "1100000",
                    "data2": "2"
                }, {
                    "label": "Nam \u0110\u1ecbnh",
                    "data1": "4600000",
                    "data2": "2"
                }, {
                    "label": "Gia Lai",
                    "data1": "1100000",
                    "data2": "3"
                }, {
                    "label": "H\u00e0 Giang",
                    "data1": "550000",
                    "data2": "1"
                }, {
                    "label": "Ninh B\u00ecnh",
                    "data1": "550000",
                    "data2": "1"
                }, {
                    "label": "\u0110\u1ed3ng Nai",
                    "data1": "1100000",
                    "data2": "1"
                }, {
                    "label": "B\u00ecnh D\u01b0\u01a1ng",
                    "data1": "1100000",
                    "data2": "1"
                }, {
                    "label": "Thanh Ho\u00e1",
                    "data1": "825000",
                    "data2": "2"
                }, {
                    "label": "\u0110\u00e0 N\u1eb5ng",
                    "data1": "6400000",
                    "data2": "1"
                }, {
                    "label": "B\u1eafc Giang",
                    "data1": "300000",
                    "data2": "1"
                }, {
                    "label": "H\u00e0 Nam",
                    "data1": "300000",
                    "data2": "1"
                }, {
                    "label": "Ho\u00e0 B\u00ecnh",
                    "data1": "550000",
                    "data2": "1"
                }, {
                    "label": "L\u00e2m \u0110\u1ed3ng",
                    "data1": "1200000",
                    "data2": "1"
                }, {
                    "label": "Ph\u00fa Y\u00ean",
                    "data1": "300000",
                    "data2": "1"
                }, {
                    "label": "B\u00ecnh \u0110\u1ecbnh",
                    "data1": "1100000",
                    "data2": "2"
                }, {
                    "label": "An Giang",
                    "data1": "550000",
                    "data2": "1"
                }];
            </script>
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
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/jquery.flot.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/jquery.flot.pie.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/jquery.flot.categories.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/location.js') }}"></script>
@endsection