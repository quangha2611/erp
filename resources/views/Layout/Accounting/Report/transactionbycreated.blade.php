@extends('Layout.master4')

@section('css')
    <link rel="stylesheet" href="{{ asset('asset/css/accounting/report/style.css') }}">
@endsection

@section('title', 'ERP-Báo cáo theo người tạo')

@section('content-page')

    <div class="col-md-10 content-wrapper">

        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/accounting"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/accounting/account/index">Danh sách thu chi kế toán
                    theo người tạo</a></li>
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
                            <option value="516">Phòng chăm sóc khách hàng - Online</option>
                            <option value="520">IT</option>
                            <option value="522">-- IT-Vật Giá</option>
                            <option value="1295">-- -- IT - Anh Toản</option>
                            <option value="1296">-- -- IT - Anh Tuấn</option>
                            <option value="523">-- IT-Sever</option>
                            <option value="532">Tài chính</option>
                            <option value="535">-- Tài chính - Kế toán</option>
                            <option value="548">-- Tư pháp</option>
                            <option value="538">Nhân sự</option>
                            <option value="539">-- HCNS</option>
                            <option value="541">-- Tuyển Dụng</option>
                            <option value="544">-- Đào tạo</option>
                            <option value="606">-- PR nội bộ</option>
                            <option value="613">Pub.vn</option>
                            <option value="619">123doc</option>
                            <option value="1048">Vchat</option>
                            <option value="1094">BA</option>
                            <option value="1106">Sales</option>
                            <option value="550">-- Sale Sàn</option>
                            <option value="551">-- -- Phòng KD 2</option>
                            <option value="560">-- -- Phòng KD 4</option>
                            <option value="1265">-- -- -- Phòng KD 4.1</option>
                            <option value="1266">-- -- -- Phòng KD 4.2</option>
                            <option value="1267">-- -- -- Phòng KD 4.3</option>
                            <option value="561">-- -- Phòng KD 6</option>
                            <option value="1162">-- -- -- Nhóm KD 6.1</option>
                            <option value="567">-- -- Phòng KD 9</option>
                            <option value="570">-- -- -- Nhóm KD 9.1</option>
                            <option value="1122">-- -- Phòng KD 10</option>
                            <option value="1134">-- -- Phòng KD 5</option>
                            <option value="1146">-- -- Phòng KD 7</option>
                            <option value="552">-- -- -- Nhóm KD 7.2</option>
                            <option value="572">-- -- -- Nhóm KD 7.1</option>
                            <option value="591">-- Phòng CSGH</option>
                            <option value="1111">Wesave</option>
                            <option value="1166">Nhập liệu - CSKH</option>
                            <option value="1167">Hỏi đáp - CSKH</option>
                            <option value="1303">So Sánh Nhà</option>
                            <option value="1305">Content Marketing</option>
                            <option value="1306">Dự án</option>
                            <option value="1290">-- Bizshare</option>
                            <option value="1426">Dự án VNP Software</option>
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
                                    href="https://erp.nhanh.vn/accounting/report/transactionbycreated#"><i
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
                            <option value="769">-- Elite</option>
                            <option value="768">-- WeSave</option>
                            <option value="304">-- Nhanh HCM</option>
                            <option value="303">-- Nhanh HN</option>
                            <option value="300">-- Cty cổ phần Vật Giá VN</option>
                            <option value="302">-- -- Vật Giá HCM</option>
                            <option value="301">-- -- Vật Giá HN</option>
                            <option value="542">-- -- -- Quỹ Maketing(VG Hà Nội)</option>
                        </select><span
                            class="select2 select2-container select2-container--default select2-container--below"
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
                            <option value="25">Xin mua tài sản</option>
                            <option value="27">Khoản giữ lại MKT</option>
                            <option value="44">Chi khác</option>
                            <option value="28">Thu khác</option>
                            <option value="149">Chi khác</option>
                        </select><span
                            class="select2 select2-container select2-container--default select2-container--below"
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
            <div style="display: none; width: 1556px;" class="stickyHeader">
                <table class="table table-bordered" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr class="even">
                            <th style="width: 87px;">Mã code</th>
                            <th style="width: 261px;">Tên nhân viên</th>
                            <th style="width: 201px;">Công ty</th>
                            <th style="width: 336px;">Phòng ban</th>
                            <th style="width: 178px;">Số lượng phiếu thu</th>
                            <th style="width: 152px;">Giá trị thu</th>
                            <th style="width: 178px;">Số lượng phiếu chi</th>
                            <th style="width: 162px;">Giá trị chi</th>
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
                        <td>9992</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=8745&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Nguyễn
                                Minh Bảo Tất Thành</a></td>
                        <td>Vật giá - Hồ Chí Minh</td>
                        <td>Nhanh HCM - Tuyển dụng</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr class="even">
                        <td>1308</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=659&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Phạm
                                Văn Phú</a></td>
                        <td>Vật giá - Hồ Chí Minh</td>
                        <td>Phòng giám đốc</td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=659&amp;type=3&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">1</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=659&amp;type=3&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">2.100.000</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=659&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">11</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=659&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">106.025.630</a>
                        </td>
                    </tr>
                    <tr class="">
                        <td>8187</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=6893&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Phùng
                                Thị Thu Phương</a></td>
                        <td>Vật giá - Hà Nội</td>
                        <td>Tài chính - Kế toán</td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=6893&amp;type=3&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">3</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=6893&amp;type=3&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">301.660.000</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=6893&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">3</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=6893&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">11.500.000</a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td>9190</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=7957&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Vũ
                                Duy Hoàng</a></td>
                        <td>Vật giá - Hồ Chí Minh</td>
                        <td>Phòng KD10</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=7957&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">1</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=7957&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">196.000</a>
                        </td>
                    </tr>
                    <tr class="h">
                        <td>4519</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=494&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Trần
                                Thị Ánh Tuyết</a></td>
                        <td>Nhanh.vn</td>
                        <td>Chăm sóc đơn hàng - HươngĐTM</td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=494&amp;type=3&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">121</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=494&amp;type=3&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">95.610.057.924</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=494&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">27</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=494&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">97.025.694.574</a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td>9138</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=7906&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Chu
                                Văn Thảo</a></td>
                        <td>Nhanh.vn</td>
                        <td>Phòng dịch vụ SEO GG MAPS</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=7906&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">4</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=7906&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">55.257.000</a>
                        </td>
                    </tr>
                    <tr>
                        <td>8902</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=7660&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Tạ
                                Thị Hoa</a></td>
                        <td>Nhanh.vn</td>
                        <td>Trợ lý</td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=7660&amp;type=3&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">1</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=7660&amp;type=3&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">1.630.000</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=7660&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">15</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=7660&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">210.783.314</a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td>9925</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=8678&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Nguyễn
                                Bằng Vân</a></td>
                        <td>Nhanh.vn</td>
                        <td>Phòng nhân sự - Nhanh.vn</td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=8678&amp;type=3&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">1</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=8678&amp;type=3&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">213.000</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=8678&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">9</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=8678&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">8.746.000</a>
                        </td>
                    </tr>
                    <tr>
                        <td>0553</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=1172&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Trịnh
                                Anh Tuấn</a></td>
                        <td>Vật giá - Hà Nội</td>
                        <td>Pub.vn</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=1172&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">3</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=1172&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">499.531.396</a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td>9047</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=7818&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Đỗ
                                Thị Ngọc Hân</a></td>
                        <td>Vật giá - Hồ Chí Minh</td>
                        <td>Nhanh HCM - Phòng KD1_NgânHTM</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=7818&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">1</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=7818&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">1.500.000</a>
                        </td>
                    </tr>
                    <tr>
                        <td>7068</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=5668&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Phạm
                                Thị Thanh</a></td>
                        <td>Nhanh.vn</td>
                        <td>Nhanh HN - KD10_ThanhPT</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=5668&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">1</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=5668&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">840.000</a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td>9912</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=8665&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Bùi
                                Thị Thùy Trang</a></td>
                        <td>Vật giá - Hồ Chí Minh</td>
                        <td>Nhanh HCM - Tuyển dụng</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=8665&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">18</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=8665&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">16.661.704</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2965</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=14&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Nguyễn
                                Viết Lâm</a></td>
                        <td>Nhanh.vn</td>
                        <td>Nhanh HN - KD6_LâmVN</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=14&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">1</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=14&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">5.000.000</a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td>9655</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=8491&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Lê
                                Quỳnh Anh</a></td>
                        <td>Nhanh.vn</td>
                        <td>Phòng kế toán</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=8491&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">9</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=8491&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">1.556.823.300</a>
                        </td>
                    </tr>
                    <tr>
                        <td>9547</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=8378&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Ma
                                Thị Phương Thảo</a></td>
                        <td>Nhanh.vn</td>
                        <td>Phòng Dịch Vụ Khách Hàng</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=8378&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">4</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=8378&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">20.156.000</a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td>8592</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=7355&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Phạm
                                Kim Yến</a></td>
                        <td>Nhanh.vn</td>
                        <td>Chăm sóc đơn hàng - HươngĐTM</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=7355&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">1</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=7355&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">6.000.000</a>
                        </td>
                    </tr>
                    <tr>
                        <td>8570</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=7333&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Phan
                                Thị Thu Thảo</a></td>
                        <td>Nhanh.vn</td>
                        <td>Chăm sóc khách hàng - UyênTL</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=7333&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">1</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=7333&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">300.000</a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td>9416</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=8220&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Phạm
                                Thị Bích Phượng</a></td>
                        <td>Vật giá - Hồ Chí Minh</td>
                        <td>Nhanh HCM - Tuyển dụng</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=8220&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">7</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=8220&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">101.407.888</a>
                        </td>
                    </tr>
                    <tr>
                        <td>9411</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=8214&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Nguyễn
                                Thị Minh Ánh</a></td>
                        <td>Vật giá - Hồ Chí Minh</td>
                        <td>Phòng Hành chính - Nhân sự</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=8214&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">8</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=8214&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">45.591.036</a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td>7533</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=6152&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Nguyễn
                                Diệu Linh</a></td>
                        <td>Nhanh.vn</td>
                        <td>Phòng Dịch Vụ Khách Hàng</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=6152&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">1</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=6152&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">1.980.000</a>
                        </td>
                    </tr>
                    <tr>
                        <td>9967</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=8720&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Bùi
                                Thị Ngân</a></td>
                        <td>Vật giá - Hồ Chí Minh</td>
                        <td>Nhanh HCM - Kế toán</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=8720&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">2</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=8720&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">310.906.000</a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td>4827</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=878&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Trần
                                Hoàng Nhung</a></td>
                        <td>Nhanh.vn</td>
                        <td>Phòng nhân sự - Nhanh.vn</td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=878&amp;type=3&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">2</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=878&amp;type=3&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">62.974.417</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=878&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">7</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=878&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">259.484.702</a>
                        </td>
                    </tr>
                    <tr>
                        <td>8140</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=6843&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Lê
                                Quỳnh Thủy Tiên</a></td>
                        <td>Vật giá - Hồ Chí Minh</td>
                        <td>Kế toán</td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=6843&amp;type=3&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">2</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=6843&amp;type=3&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">16.901.000</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=6843&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">9</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=6843&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">168.460.146</a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td>0061</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=646&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Nguyễn
                                Thị Huyền</a></td>
                        <td>Nhanh.vn</td>
                        <td>Phòng kế toán</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=646&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">2</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=646&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">153.691.779</a>
                        </td>
                    </tr>
                    <tr>
                        <td>8186</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=6892&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Nguyễn
                                Thị Hồng Vân</a></td>
                        <td>Vật giá - Hà Nội</td>
                        <td>Tài chính - Kế toán</td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=6892&amp;type=3&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">5</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=6892&amp;type=3&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">25.961.504</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=6892&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">3</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=6892&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">17.600.000</a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td>10046</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=8800&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Phạm
                                Nguyên Tùng</a></td>
                        <td>Nhanh.vn</td>
                        <td>Phòng Dịch Vụ Khách Hàng</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=8800&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">6</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=8800&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">17.363.000</a>
                        </td>
                    </tr>
                    <tr>
                        <td>9791</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=8627&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Đỗ
                                Thị Thanh Nhàn</a></td>
                        <td>123job.vn</td>
                        <td>123Job</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr class="even">
                        <td>7811</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=6435&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Nguyễn
                                Huỳnh Anh Hoa</a></td>
                        <td>Vật giá - Hồ Chí Minh</td>
                        <td>Kế toán</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=6435&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">1</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=6435&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">246.000</a>
                        </td>
                    </tr>
                    <tr>
                        <td>9900</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=8655&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Lê
                                Thị Nam</a></td>
                        <td>Vật giá - Hồ Chí Minh</td>
                        <td>Nhanh HCM - Sale Marketing</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=8655&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">1</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=8655&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">450.000</a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td>8981</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=7753&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Trần
                                Thị Ngọc Quyền</a></td>
                        <td>Vật giá - Hồ Chí Minh</td>
                        <td>Nhanh HCM - Nhóm KD3_NgânTK</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=7753&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">1</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=7753&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">12.160.000</a>
                        </td>
                    </tr>
                    <tr>
                        <td>9976</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=8729&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Vũ
                                Thị Vân Anh</a></td>
                        <td>Nhanh.vn</td>
                        <td>Phòng nhân sự - Nhanh.vn</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=8729&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">1</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=8729&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">250.000</a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td>7431</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=6050&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Nguyễn
                                Thanh Liêm</a></td>
                        <td>Vật giá - Hồ Chí Minh</td>
                        <td>Nhanh HCM - Nhóm KD5_LiêmNT</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=6050&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">1</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=6050&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">8.206.000</a>
                        </td>
                    </tr>
                    <tr>
                        <td>10128</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=8895&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Trần
                                Lệ Xuân</a></td>
                        <td>Vật giá - Hồ Chí Minh</td>
                        <td>Nhanh HCM - Tuyển dụng</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=8895&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">1</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=8895&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">13.240.000</a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td>10146</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=8912&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Nguyễn
                                Thị Thanh Tuyền</a></td>
                        <td>Vật giá - Hồ Chí Minh</td>
                        <td>Nhanh HCM - Tuyển dụng</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=8912&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">3</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=8912&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">2.114.000</a>
                        </td>
                    </tr>
                    <tr>
                        <td>10076</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=8830&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Trịnh
                                Xuân Tài</a></td>
                        <td>Vật giá - Hồ Chí Minh</td>
                        <td>Nhanh HCM - Sale Marketing</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=8830&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">1</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=8830&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">3.000.000</a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td>7471</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=6090&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Trần
                                Kim Ngân</a></td>
                        <td>Vật giá - Hồ Chí Minh</td>
                        <td>Nhanh HCM - Nhóm KD3_NgânTK</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=6090&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">2</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=6090&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">22.850.000</a>
                        </td>
                    </tr>
                    <tr>
                        <td>8158</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=6863&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Nguyễn
                                Huyền Trang</a></td>
                        <td>Nhanh.vn</td>
                        <td>Nhanh HN - Phòng KD5_AnhNX</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=6863&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">1</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=6863&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">5.940.000</a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td>9942</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=8694&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Huỳnh
                                Ngọc Hải</a></td>
                        <td>Vật giá - Hồ Chí Minh</td>
                        <td>Nhanh HCM - Nhóm KD9_ThưNTA</td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=8694&amp;type=3&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">1</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=8694&amp;type=3&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">330.000</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=8694&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">3</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=8694&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">13.979.000</a>
                        </td>
                    </tr>
                    <tr>
                        <td>8697</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=7458&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Nguyễn
                                Thị Hương</a></td>
                        <td>Nhanh.vn</td>
                        <td>Phòng kế toán</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=7458&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">2</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=7458&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">1.384.958.959</a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td>0009</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=1038&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Đặng
                                Quốc Dũng</a></td>
                        <td>Vật giá - Hà Nội</td>
                        <td>IT-Sever</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=1038&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">1</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=1038&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">42.900.000</a>
                        </td>
                    </tr>
                    <tr>
                        <td>8844</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=7599&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Đỗ
                                Thanh Tùng</a></td>
                        <td>Nhanh.vn</td>
                        <td>Ecomcare</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=7599&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">1</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=7599&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">2.200.000</a>
                        </td>
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


@endsection
