@extends('Layout.master4')

@section('css')
    <link rel="stylesheet" href="{{ asset('asset/css/accounting/report/style.css') }}">
@endsection

@section('title', 'ERP-Báo cáo theo người tạo')

@section('content-page')

    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/accounting"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/accounting/report/transactionbyapprovedbyid">Danh sách
                    thu chi kế toán theo người duyệt</a></li>
        </ul>
        <div class="filterContainer">
            <form method="GET" name="transactionFilter" class="form-inline lolify" role="form"
                id="transactionFilter">
                <div class="col-md-10 lolify-default">

                    <div class="form-group">
                        <input type="text" name="applyDate" class="form-control date-range-picker"
                            id="applyDate" value="01/07/2020 - 31/07/2020"> </div>
                    <div class="form-group">
                        <input type="text" name="q" maxlength="255" placeholder="Tên hoặc mã code"
                            id="q" class="form-control" value=""> </div>
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
                            <option value="402">--Công ty TNHH Nguồn Nhân Lực Elite Việt Nam
                            </option>
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
                        <select name="type" id="type" class="form-control">
                            <option value="">- Loại phiếu -</option>
                            <option value="3">Phiếu thu</option>
                            <option value="4">Phiếu chi</option>
                        </select> </div>
                    <div class="form-group">
                        <input name="submit" type="submit" id="btnFilterCompanyContact"
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
                            <li><a id="exportAll"
                                    href="https://erp.nhanh.vn/accounting/report/transactionbyapprovedbyid#"><i
                                        class="fa fa-file-excel-o"></i> Xuất toàn bộ</a></li>
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
                        <select name="accountId" style="min-width:200px" id="accountId"
                            class="form-control select2-hidden-accessible" tabindex="-1"
                            aria-hidden="true">
                            <option value="">- Quỹ -</option>
                            <option value="321">Tiền chuyển khoản</option>
                            <option value="880">-- Khối KD độc lập (CK)</option>
                            <option value="878">-- Welove (Chuyển khoản)</option>
                            <option value="876">-- Nhanh HCM(Phần cứng)</option>
                            <option value="874">-- Nhanh HN(Phần cứng)</option>
                            <option value="872">-- Bizshare HCM</option>
                            <option value="870">-- WeHelp</option>
                            <option value="868">-- 9houz (HCM)</option>
                            <option value="866">-- Nhanh Đà Nẵng(CK)</option>
                            <option value="864">-- Nhanh HN 2019 (Chuyển khoản)</option>
                            <option value="856">-- Nhanh HCM 2019 (Chuyển khoản)</option>
                            <option value="854">-- 9houz</option>
                            <option value="815">-- KyNguyenSo</option>
                            <option value="813">-- Bizshare</option>
                            <option value="810">-- Wesave Hồ Chí Minh</option>
                            <option value="809">-- Vchat</option>
                            <option value="807">-- WeMarry</option>
                            <option value="804">-- IKI</option>
                            <option value="783">-- WeSave Hà Nội</option>
                            <option value="775">-- Vật Giá Đà Nẵng</option>
                            <option value="773">-- Elite</option>
                            <option value="770">-- Doanh thu phần cứng</option>
                            <option value="319">-- Vận chuyển Nhanh</option>
                            <option value="318">-- Doanh thu VC Nhanh</option>
                            <option value="309">-- Nhanh HCM</option>
                            <option value="308">-- Nhanh HN</option>
                            <option value="305">-- Cty cổ phần Vật Giá VN</option>
                            <option value="307">-- -- Vật Giá HCM</option>
                            <option value="306">-- -- Vật Giá HN</option>
                            <option value="320">Tiền mặt</option>
                            <option value="879">-- Khối KD độc lập (TM)</option>
                            <option value="877">-- Welove (Tiền mặt)</option>
                            <option value="875">-- Nhanh HCM(Phần cứng)</option>
                            <option value="873">-- Nhanh HN(Phần cứng)</option>
                            <option value="871">-- Bizshare HCM</option>
                            <option value="869">-- WeHelp</option>
                            <option value="867">-- 9houz (HCM)</option>
                            <option value="865">-- Nhanh Đà Nẵng (TM)</option>
                            <option value="863">-- Nhanh HN 2019 (Tiền mặt)</option>
                            <option value="855">-- Nhanh HCM 2019 (Tiền mặt)</option>
                            <option value="853">-- 9houz</option>
                            <option value="814">-- KyNguyenSo</option>
                            <option value="812">-- Bizshare</option>
                            <option value="811">-- Wesave Hồ Chí Minh</option>
                            <option value="808">-- Vchat</option>
                            <option value="806">-- WeMarry</option>
                            <option value="803">-- IKI</option>
                            <option value="799">-- Amall</option>
                            <option value="798">-- 123Study</option>
                            <option value="784">-- WeSave Hà Nội</option>
                            <option value="777">-- WeStay</option>
                            <option value="774">-- Vật giá Đà Nẵng</option>
                            <option value="772">-- Elite</option>
                            <option value="771">-- Doanh thu phần cứng</option>
                            <option value="304">-- Nhanh HCM</option>
                            <option value="303">-- Nhanh HN</option>
                            <option value="300">-- Cty cổ phần Vật Giá VN</option>
                            <option value="302">-- -- Vật Giá HCM</option>
                            <option value="301">-- -- Vật Giá HN</option>
                            <option value="542">-- -- -- Quỹ Maketing(VG Hà Nội)</option>
                        </select><span class="select2 select2-container select2-container--default"
                            dir="ltr" style="width: auto;"><span class="selection"><span
                                    class="select2-selection select2-selection--single"
                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                    tabindex="0" aria-labelledby="select2-accountId-container"><span
                                        class="select2-selection__rendered"
                                        id="select2-accountId-container" title="- Quỹ -">- Quỹ
                                        -</span><span class="select2-selection__arrow"
                                        role="presentation"><b
                                            role="presentation"></b></span></span></span><span
                                class="dropdown-wrapper" aria-hidden="true"></span></span> </div>
                    <div class="form-group">
                        <select name="expenseCategoryId" style="min-width:200px"
                            id="expenseCategoryId" class="form-control select2-hidden-accessible"
                            tabindex="-1" aria-hidden="true">
                            <option value="">- Khoản mục -</option>
                            <option value="28">Thu khác</option>
                            <option value="149">Chi khác</option>
                            <option value="147">Thuê văn phòng chi nhánh Đà Nẵng</option>
                            <option value="151">Chi tiền điện</option>
                            <option value="150">Chi tiền mặt</option>
                            <option value="148">Chi tiền internet</option>
                        </select><span
                            class="select2 select2-container select2-container--default select2-container--below select2-container--focus"
                            dir="ltr" style="width: auto;"><span class="selection"><span
                                    class="select2-selection select2-selection--single"
                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                    tabindex="0"
                                    aria-labelledby="select2-expenseCategoryId-container"><span
                                        class="select2-selection__rendered"
                                        id="select2-expenseCategoryId-container"
                                        title="- Khoản mục -">- Khoản mục -</span><span
                                        class="select2-selection__arrow" role="presentation"><b
                                            role="presentation"></b></span></span></span><span
                                class="dropdown-wrapper" aria-hidden="true"></span></span> </div>

                </div>
            </form>
            <div class="clearfix"></div>
            <div class="lolify-left-menu" style="display: none;">
            </div>
        </div>
        <div class="dgContainer">
            <div style="display: none; width: 1569px;" class="stickyHeader">
                <table class="table table-bordered" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr class="even">
                            <th style="width: 91px;">Mã code</th>
                            <th style="width: 220px;">Tên nhân viên</th>
                            <th style="width: 210px;">Công ty</th>
                            <th style="width: 350px;">Phòng ban</th>
                            <th style="width: 186px;">Số lượng phiếu thu</th>
                            <th style="width: 158px;">Giá trị thu</th>
                            <th style="width: 184px;">Số lượng phiếu chi</th>
                            <th style="width: 169px;">Giá trị chi</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div style="clear: both;"></div><br>
            </div>
            <table id="dgTransaction" class="table table-bordered">
                <thead>
                    <tr class="even">
                        <th>Mã code</th>
                        <th>Tên nhân viên</th>
                        <th>Công ty</th>
                        <th>Phòng ban</th>
                        <th>Số lượng phiếu thu</th>
                        <th>Giá trị thu</th>
                        <th>Số lượng phiếu chi</th>
                        <th>Giá trị chi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td>1308</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?approvedById=659&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Phạm
                                Văn Phú</a></td>
                        <td>Vật giá - Hồ Chí Minh</td>
                        <td>Phòng giám đốc</td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?approvedById=659&amp;type=3&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">1</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?approvedById=659&amp;type=3&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">2.100.000</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?approvedById=659&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">13</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?approvedById=659&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">106.467.630</a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td>0019</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?approvedById=404&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Đỗ
                                Thị Bích Thủy</a></td>
                        <td>VNP group</td>
                        <td>Kế toán</td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?approvedById=404&amp;type=3&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">8</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?approvedById=404&amp;type=3&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">327.621.504</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?approvedById=404&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">6</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?approvedById=404&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">29.100.000</a>
                        </td>
                    </tr>
                    <tr class="">
                        <td>1241</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?approvedById=17&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Đoàn
                                Thị Minh Hương</a></td>
                        <td>Nhanh.vn</td>
                        <td>Chăm sóc đơn hàng - HươngĐTM</td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?approvedById=17&amp;type=3&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">121</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?approvedById=17&amp;type=3&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">95.610.057.924</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?approvedById=17&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">27</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?approvedById=17&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">97.025.694.574</a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td>0585</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?approvedById=6&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Nguyễn
                                Quỳnh Dương</a></td>
                        <td>Nhanh.vn</td>
                        <td>Giám đốc dự án</td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?approvedById=6&amp;type=3&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">1</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?approvedById=6&amp;type=3&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">1.630.000</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?approvedById=6&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">40</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?approvedById=6&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">3.548.586.140</a>
                        </td>
                    </tr>
                    <tr class="">
                        <td>4827</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?approvedById=878&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Trần
                                Hoàng Nhung</a></td>
                        <td>Nhanh.vn</td>
                        <td>Phòng nhân sự - Nhanh.vn</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?approvedById=878&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">15</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?approvedById=878&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">102.724.914</a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td>0001</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?approvedById=160&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Nguyễn
                                Ngọc Điệp</a></td>
                        <td>VNP group</td>
                        <td>Giám đốc</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?approvedById=160&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">4</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?approvedById=160&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">542.431.396</a>
                        </td>
                    </tr>
                    <tr>
                        <td>4062</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?approvedById=799&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Hứa
                                Thị Mai Ngân</a></td>
                        <td>Vật giá - Hồ Chí Minh</td>
                        <td>Nhanh HCM - Phòng KD1_NgânHTM</td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?approvedById=799&amp;type=3&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">1</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?approvedById=799&amp;type=3&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">330.000</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?approvedById=799&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">43</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?approvedById=799&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">520.806.581</a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td>8505</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?approvedById=7262&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Lê
                                Trung Đức</a></td>
                        <td>Nhanh.vn</td>
                        <td>Giám đốc dự án</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?approvedById=7262&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">11</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?approvedById=7262&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">38.463.000</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1375</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?approvedById=672&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Bùi
                                Thanh Thịnh</a></td>
                        <td>Vật giá - Hồ Chí Minh</td>
                        <td>O1 Marketplaces</td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?approvedById=672&amp;type=3&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">2</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?approvedById=672&amp;type=3&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">16.901.000</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?approvedById=672&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">15</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?approvedById=672&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">199.719.193</a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td>9655</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?approvedById=8491&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Lê
                                Quỳnh Anh</a></td>
                        <td>Nhanh.vn</td>
                        <td>Phòng kế toán</td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?approvedById=8491&amp;type=3&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">2</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?approvedById=8491&amp;type=3&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">31.059.000</a>
                        </td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr>
                        <td>0061</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?approvedById=646&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Nguyễn
                                Thị Huyền</a></td>
                        <td>Nhanh.vn</td>
                        <td>Phòng kế toán</td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?approvedById=646&amp;type=3&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">1</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?approvedById=646&amp;type=3&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">32.128.417</a>
                        </td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr class="rowEnd even">
                        <td colspan="4"><b>Tổng</b></td>
                        <td class="colNumber"> <b>137</b></td>
                        <td class="colNumber"> <b class="red">96.021.827.845</b></td>
                        <td class="colNumber" colspan="1"><b>174</b></td>
                        <td class="colNumber" colspan="1"><b class="red">102.113.993.428</b></td>
                    </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
            </div>
        </div>
        <style>
            #dgTransaction i.date {
                font-size: 0.85em;
            }

            b.red {
                color: #ff0000;
            }

            .rowEnd {
                background: #f1f1f1;
            }
        </style>
    </div>

@endsection


@section('js')

    <script type="text/javascript">
        var usrCnf = {
            language: 'vi'
        };

    </script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/report/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/report/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/report/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/report/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/report/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/report/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/report/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/report/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/report/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/report/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/report/saved_resource(2)') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/report/saved_resource(3)') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/report/index.js') }}"></script>


@endsection
