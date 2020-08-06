@extends('Layout.master1')

@section('css')
    <link href="{{ asset('asset/css/crm/report/bootstrap-multiselect.css') }}" media="screen" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/css/crm/report/style.css') }}" type="text/css">
@endsection

@section('title','ERP-Báo cáo dịch vụ khách hàng')

@section('content-page')

    <div class="tab-content">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li class="active">Báo cáo dịch vụ khách hàng</li>
        </ul>
        <div class="filterContainer">
            <form method="GET" name="crmReportEmployeesFilter" class="form-inline lolify"
                role="form" id="crmReportEmployeesFilter">
                <div class="col-md-10 lolify-default">

                    <div class="form-group">
                        <input type="text" name="daterangepicker"
                            class="form-control date-range-picker" id="daterangepicker"
                            value="01/07/2020 - 31/07/2020"> </div>
                    <input type="hidden" name="companyId" id="companyId"
                        class="form-control select2-hidden-accessible" value="319" tabindex="-1"
                        aria-hidden="true"><span
                        class="select2 select2-container select2-container--default select2-container--below"
                        dir="ltr" style="width: auto;"><span class="selection"><span
                                class="select2-selection select2-selection--single"
                                role="combobox" aria-haspopup="true" aria-expanded="false"
                                tabindex="0" aria-labelledby="select2-companyId-container"><span
                                    class="select2-selection__rendered"
                                    id="select2-companyId-container"><span
                                        class="select2-selection__placeholder">Công
                                        ty</span></span><span class="select2-selection__arrow"
                                    role="presentation"><b
                                        role="presentation"></b></span></span></span><span
                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                    <div class="form-group">
                        <select name="departmentId" id="departmentId"
                            class="form-control select2-hidden-accessible" tabindex="-1"
                            aria-hidden="true">
                            <option value="">- Phòng ban -</option>
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
                            <option value="1443">-- -- Phòng KD Bảo Kim &amp;amp; Wesave
                            </option>
                            <option value="1444">-- -- Phòng KD Wesave</option>
                            <option value="667">-- Bộ phận quản trị thông tin</option>
                            <option value="668">-- -- Nhập liệu</option>
                            <option value="669">-- -- -- Công nghiệp - HCM</option>
                            <option value="670">-- -- -- PCN - HCM</option>
                            <option value="682">-- Bộ phận thiết kế gian hàng HCM</option>
                            <option value="683">-- -- Phòng thiết kế gian hàng</option>
                            <option value="1446">-- Bảo Kim &amp;amp; Wesave HCM</option>
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
                        </select><span
                            class="select2 select2-container select2-container--default select2-container--below select2-container--focus"
                            dir="ltr" style="width: 150px;"><span class="selection"><span
                                    class="select2-selection select2-selection--single"
                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                    tabindex="0"
                                    aria-labelledby="select2-departmentId-container"><span
                                        class="select2-selection__rendered"
                                        id="select2-departmentId-container"><span
                                            class="select2-selection__placeholder">Phòng ban
                                            hưởng doanh số</span></span><span
                                        class="select2-selection__arrow" role="presentation"><b
                                            role="presentation"></b></span></span></span><span
                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                    </div>
                    <div class="form-group">
                        <input type="text" name="q" placeholder="Tên hoặc mã nhân sự" id="q"
                            class="form-control" value=""> </div>
                    <div class="form-group">
                        <select name="type" id="type" class="form-control">
                            <option value="">- Loại -</option>
                            <option value="1">Nhân viên kinh doanh</option>
                            <option value="2">Nhân viên chăm sóc</option>
                            <option value="3" selected="selected">Nhân viên hỗ trợ</option>
                        </select> </div>
                    <div class="form-group">
                        <select name="showWorkingStatus" id="showWorkingStatus"
                            class="form-control">
                            <option value="">- Trạng thái nhân sự -</option>
                            <option value="1" selected="selected">Đang làm việc</option>
                            <option value="2">Đã nghỉ việc</option>
                            <option value="3">Tất cả</option>
                        </select> </div>
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
                            <li><a id="exportAll"><i class="fa fa-download fa-lg"></i> Xuất
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
                            <th style="width: 68px;">STT</th>
                            <th style="width: 95px;">Mã NV</th>
                            <th style="width: 311px;">Nhân viên</th>
                            <th style="width: 692px;">Phòng ban</th>
                            <th style="width: 215px;">Số tháng làm việc</th>
                            <th style="width: 202px;">Số KH chăm sóc</th>
                            <th style="width: 137px;">Số SP mới</th>
                            <th style="width: 153px;">Số SP tái ký</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div style="clear: both;"></div><br>
            </div>
            <table id="dgCrmReportService" class="table table-bordered">
                <thead>
                    <tr class="even">
                        <th>STT</th>
                        <th>Mã NV</th>
                        <th>Nhân viên</th>
                        <th>Phòng ban</th>
                        <th>Số tháng làm việc</th>
                        <th>Số KH chăm sóc</th>
                        <th>Số SP mới</th>
                        <th>Số SP tái ký</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td>1</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8925&amp;assignType=">10159</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8925&amp;assignType=">Lê
                                Thị Trang</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=1476">Nhanh
                                HCM - Ecome Care HCM | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=1&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=10159">3</a>
                        </td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr class="even">
                        <td>2</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8919&amp;assignType=">10153</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8919&amp;assignType=">Nguyễn
                                Hải Linh</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=1476">Nhanh
                                HCM - Ecome Care HCM | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=1&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=10153">1</a>
                        </td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr class="">
                        <td>3</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8918&amp;assignType=">10152</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8918&amp;assignType=">Hoàng
                                Thị Ái Nhãn</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=1476">Nhanh
                                HCM - Ecome Care HCM | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=1&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=10152">4</a>
                        </td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr class="even">
                        <td>4</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8903&amp;assignType=">10136</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8903&amp;assignType=">Võ
                                Thị Thu Sương</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=1158">Nhanh
                                HCM - Nhóm KD3_NgânTK | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=1&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=10136">2</a>
                        </td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr class="h">
                        <td>5</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8902&amp;assignType=">10135</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8902&amp;assignType=">Nguyễn
                                Thị Phương Thảo</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=1468">Nhanh
                                HCM - Sale Marketing | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=1&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=10135">4</a>
                        </td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr class="even">
                        <td>6</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8894&amp;assignType=">10127</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8894&amp;assignType=">Lê
                                Trung Nghĩa</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=1376">Nhanh
                                HCM - Nhóm KD4_ThịnhNQG | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">1</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=1&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=10127">2</a>
                        </td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8877&amp;assignType=">10111</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8877&amp;assignType=">Võ
                                Việt Quốc Đại</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=1468">Nhanh
                                HCM - Sale Marketing | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">1</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=1&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=10111">3</a>
                        </td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr class="even">
                        <td>8</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8874&amp;assignType=">10108</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8874&amp;assignType=">Lê
                                Tấn Anh Trung</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=1468">Nhanh
                                HCM - Sale Marketing | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">1</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=1&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=10108">5</a>
                        </td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8872&amp;assignType=">10106</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8872&amp;assignType=">Hồ
                                Thị Thanh Mai</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=1467">Nhanh
                                HCM - SEO GG MAPS | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">1</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=1&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=10106">7</a>
                        </td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr class="even">
                        <td>10</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8862&amp;assignType=">10097</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8862&amp;assignType=">Nguyễn
                                Thị Mỹ Phụng</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=1468">Nhanh
                                HCM - Sale Marketing | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">1</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=1&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=10097">1</a>
                        </td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8847&amp;assignType=">10092</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8847&amp;assignType=">Cao
                                Thị Thu Hằng</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=1468">Nhanh
                                HCM - Sale Marketing | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=1&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=10092">5</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=2&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=10092">2</a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td>12</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8839&amp;assignType=">10085</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8839&amp;assignType=">Nguyễn
                                Huỳnh Anh Thư</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=1468">Nhanh
                                HCM - Sale Marketing | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">1</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=1&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=10085">4</a>
                        </td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8832&amp;assignType=">10078</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8832&amp;assignType=">Lê
                                Tạ Tú Uyên</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=1467">Nhanh
                                HCM - SEO GG MAPS | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">1</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=1&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=10078">11</a>
                        </td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr class="even">
                        <td>14</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8830&amp;assignType=">10076</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8830&amp;assignType=">Trịnh
                                Xuân Tài</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=1468">Nhanh
                                HCM - Sale Marketing | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=1&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=10076">7</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=2&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=10076">3</a>
                        </td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8826&amp;assignType=">10073</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8826&amp;assignType=">Bùi
                                Gia Bảo</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=1376">Nhanh
                                HCM - Nhóm KD4_ThịnhNQG | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">2</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=1&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=10073">9</a>
                        </td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr class="even">
                        <td>16</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8821&amp;assignType=">10066</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8821&amp;assignType=">Nguyễn
                                Phúc Duy Khang</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=1126">Nhanh
                                HCM - Phòng KD1_NgânHTM | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">3</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=1&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=10066">1</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=2&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=10066">1</a>
                        </td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8812&amp;assignType=">10058</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8812&amp;assignType=">Nguyễn
                                Phương Mai</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=1155">Nhanh
                                HCM - Phòng KD8_LâmNV | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">2</td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8812&amp;assignType=">1</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=1&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=10058">2</a>
                        </td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr class="even">
                        <td>18</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8792&amp;assignType=">10039</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8792&amp;assignType=">Ngọ
                                Văn Tình</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=656">Phòng
                                KD 8 | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">14</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=1&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=10039">2</a>
                        </td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8791&amp;assignType=">10038</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8791&amp;assignType=">Cao
                                Thị Mỹ Duyên</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=656">Phòng
                                KD 8 | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">2</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr class="even">
                        <td>20</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8790&amp;assignType=">10037</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8790&amp;assignType=">Võ
                                Thị Lệ Thu</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=641">Phòng
                                KD 01 | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">2</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr>
                        <td>21</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8772&amp;assignType=">10020</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8772&amp;assignType=">Hoàng
                                Lân</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=1254">Nhanh
                                HCM - Nhóm KD5_LiêmNT | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">4</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=1&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=10020">2</a>
                        </td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr class="even">
                        <td>22</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8770&amp;assignType=">10018</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8770&amp;assignType=">Trần
                                Thị Kim Oanh</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=1254">Nhanh
                                HCM - Nhóm KD5_LiêmNT | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">4</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=1&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=10018">4</a>
                        </td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr>
                        <td>23</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8735&amp;assignType=">9982</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8735&amp;assignType=">Nguyễn
                                Thị Kiều Mỹ</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=1308">Nhanh
                                HCM - Nhóm KD9_ThưNTA | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">4</td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8735&amp;assignType=">1</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=1&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=9982">8</a>
                        </td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr class="even">
                        <td>24</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8694&amp;assignType=">9942</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8694&amp;assignType=">Huỳnh
                                Ngọc Hải</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=1308">Nhanh
                                HCM - Nhóm KD9_ThưNTA | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">6</td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8694&amp;assignType=">1</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=1&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=9942">52</a>
                        </td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr>
                        <td>25</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8654&amp;assignType=">9906</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8654&amp;assignType=">Nguyễn
                                Viết Lâm</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=1155">Nhanh
                                HCM - Phòng KD8_LâmNV | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8654&amp;assignType=">1</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=1&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=9906">11</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=2&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=9906">5</a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td>26</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8655&amp;assignType=">9900</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8655&amp;assignType=">Lê
                                Thị Nam</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=1468">Nhanh
                                HCM - Sale Marketing | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">8</td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8655&amp;assignType=">2</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=1&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=9900">9</a>
                        </td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr>
                        <td>27</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8434&amp;assignType=">9604</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8434&amp;assignType=">Nguyễn
                                Thanh Ngân</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=1467">Nhanh
                                HCM - SEO GG MAPS | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">11</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=1&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=9604">7</a>
                        </td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr class="even">
                        <td>28</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8417&amp;assignType=">9585</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8417&amp;assignType=">Lê
                                Ngọc Khánh</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=1126">Nhanh
                                HCM - Phòng KD1_NgânHTM | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">12</td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8417&amp;assignType=">1</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=1&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=9585">13</a>
                        </td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr>
                        <td>29</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8387&amp;assignType=">9556</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8387&amp;assignType=">Trần
                                Minh Thu</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=1468">Nhanh
                                HCM - Sale Marketing | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">12</td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8387&amp;assignType=">2</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=1&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=9556">1</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=2&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=9556">1</a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td>30</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8371&amp;assignType=">9540</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8371&amp;assignType=">Nguyễn
                                Thị Hiếu</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=1254">Nhanh
                                HCM - Nhóm KD5_LiêmNT | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">12</td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8371&amp;assignType=">1</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=1&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=9540">7</a>
                        </td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr>
                        <td>31</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8342&amp;assignType=">9516</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8342&amp;assignType=">Nguyễn
                                Thị Như Huệ</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=1308">Nhanh
                                HCM - Nhóm KD9_ThưNTA | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">1</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=1&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=9516">3</a>
                        </td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr class="even">
                        <td>32</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8292&amp;assignType=">9474</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8292&amp;assignType=">Trương
                                Thị Tường Vi</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=1371">CSonline-Telesale
                                | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">12</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=1&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=9474">1</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=2&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=9474">2</a>
                        </td>
                    </tr>
                    <tr>
                        <td>33</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8188&amp;assignType=">9384</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8188&amp;assignType=">Phan
                                Ngọc Ý Linh</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=1126">Nhanh
                                HCM - Phòng KD1_NgânHTM | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">15</td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8188&amp;assignType=">1</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=1&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=9384">5</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=2&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=9384">1</a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td>34</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8096&amp;assignType=">9294</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=8096&amp;assignType=">Thái
                                Chí Toàn</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=1032">Phòng
                                KD10 | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">15</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=1&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=9294">2</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=2&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=9294">5</a>
                        </td>
                    </tr>
                    <tr>
                        <td>35</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=7980&amp;assignType=">9215</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=7980&amp;assignType=">Trần
                                Thị Yến Phương</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=1254">Nhanh
                                HCM - Nhóm KD5_LiêmNT | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">16</td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=7980&amp;assignType=">3</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=1&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=9215">4</a>
                        </td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr class="even">
                        <td>36</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=7957&amp;assignType=">9190</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=7957&amp;assignType=">Vũ
                                Duy Hoàng</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=1032">Phòng
                                KD10 | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">16</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=1&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=9190">11</a>
                        </td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr>
                        <td>37</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=7818&amp;assignType=">9047</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=7818&amp;assignType=">Đỗ
                                Thị Ngọc Hân</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=1126">Nhanh
                                HCM - Phòng KD1_NgânHTM | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">20</td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=7818&amp;assignType=">1</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=1&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=9047">18</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=2&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=9047">2</a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td>38</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=7785&amp;assignType=">9015</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=7785&amp;assignType=">Huỳnh
                                Diễm Thy</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=1158">Nhanh
                                HCM - Nhóm KD3_NgânTK | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">20</td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=7785&amp;assignType=">4</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=1&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=9015">11</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=2&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=9015">2</a>
                        </td>
                    </tr>
                    <tr>
                        <td>39</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=7753&amp;assignType=">8981</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=7753&amp;assignType=">Trần
                                Thị Ngọc Quyền</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=1158">Nhanh
                                HCM - Nhóm KD3_NgânTK | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">20</td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=7753&amp;assignType=">3</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=1&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=8981">19</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=2&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=8981">4</a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td>40</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=7680&amp;assignType=">8922</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=7680&amp;assignType=">Hồ
                                Tấn Hải</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=1155">Nhanh
                                HCM - Phòng KD8_LâmNV | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">22</td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=7680&amp;assignType=">6</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=1&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=8922">5</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=2&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=8922">1</a>
                        </td>
                    </tr>
                    <tr>
                        <td>41</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=7435&amp;assignType=">8673</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=7435&amp;assignType=">Nguyễn
                                Thị Ngọc Trầm</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=1032">Phòng
                                KD10 | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">25</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=1&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=8673">3</a>
                        </td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr class="even">
                        <td>42</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=7277&amp;assignType=">8520</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=7277&amp;assignType=">Nguyễn
                                Quốc Gia Thịnh</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=1376">Nhanh
                                HCM - Nhóm KD4_ThịnhNQG | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">26</td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=7277&amp;assignType=">1</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=1&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=8520">19</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=2&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=8520">1</a>
                        </td>
                    </tr>
                    <tr>
                        <td>43</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=7144&amp;assignType=">8402</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=7144&amp;assignType=">Nguyễn
                                Thị Anh Thư</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=1308">Nhanh
                                HCM - Nhóm KD9_ThưNTA | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">28</td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=7144&amp;assignType=">2</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=1&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=8402">18</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=2&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=8402">2</a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td>44</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=7114&amp;assignType=">8375</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=7114&amp;assignType=">Trịnh
                                Thị Phương Nhi</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=641">Phòng
                                KD 01 | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">28</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=1&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=8375">3</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=2&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=8375">2</a>
                        </td>
                    </tr>
                    <tr>
                        <td>45</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=7111&amp;assignType=">8372</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=7111&amp;assignType=">Lê
                                Quốc Duy</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=1468">Nhanh
                                HCM - Sale Marketing | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">28</td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=7111&amp;assignType=">1</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=1&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=8372">12</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=2&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=8372">3</a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td>46</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=6090&amp;assignType=">7471</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=6090&amp;assignType=">Trần
                                Kim Ngân</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=1158">Nhanh
                                HCM - Nhóm KD3_NgânTK | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">37</td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=6090&amp;assignType=">2</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=1&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=7471">9</a>
                        </td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr>
                        <td>47</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=6050&amp;assignType=">7431</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=6050&amp;assignType=">Nguyễn
                                Thanh Liêm</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=1254">Nhanh
                                HCM - Nhóm KD5_LiêmNT | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">37</td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=6050&amp;assignType=">3</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=1&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=7431">7</a>
                        </td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr class="even">
                        <td>48</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=5460&amp;assignType=">6846</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=5460&amp;assignType=">Nguyễn
                                Duy Hưng</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=1032">Phòng
                                KD10 | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">45</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=1&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=6846">7</a>
                        </td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr>
                        <td>49</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=939&amp;assignType=">4926</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=939&amp;assignType=">Phan
                                Thành Quang</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=642">Nhóm
                                KD 24 | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">60</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=1&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=4926">1</a>
                        </td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr class="even">
                        <td>50</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=799&amp;assignType=">4062</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=799&amp;assignType=">Hứa
                                Thị Mai Ngân</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=1126">Nhanh
                                HCM - Phòng KD1_NgânHTM | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">70</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=1&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=4062">13</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=2&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=4062">3</a>
                        </td>
                    </tr>
                    <tr>
                        <td>51</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=1002&amp;assignType=">3996</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=1002&amp;assignType=">Trần
                                Văn Anh Vũ</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=1442">Phòng
                                KD ĐDV | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">71</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=1&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=3996">3</a>
                        </td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr class="even">
                        <td>52</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=1004&amp;assignType=">2497</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=1004&amp;assignType=">Đỗ
                                Văn Thảo</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=656">Phòng
                                KD 8 | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">85</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=1&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=2497">6</a>
                        </td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr>
                        <td>53</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=676&amp;assignType=">1602</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=676&amp;assignType=">Nguyễn
                                Thiện Tâm</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=1443">Phòng
                                KD Bảo Kim &amp; Wesave | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">99</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=1&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=1602">4</a>
                        </td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr class="even">
                        <td>54</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=673&amp;assignType=">1601</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=673&amp;assignType=">Nguyễn
                                Hoàng Long</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=1032">Phòng
                                KD10 | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">99</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=1&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=1601">6</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=2&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=1601">3</a>
                        </td>
                    </tr>
                    <tr>
                        <td>55</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=972&amp;assignType=">1412</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/account/index?lastCareDaterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;assignedToId=972&amp;assignType=">Phan
                                Vũ Như Quỳnh</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/service?departmentId=641">Phòng
                                KD 01 | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">117</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=1&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=1412">11</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/employeeproduct?type=2&amp;daterangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;q=1412">3</a>
                        </td>
                    </tr>
                    <tr class="taskStt3 even">
                        <td colspan="5"><b>Tổng</b></td>
                        <td class="colNumber"><b>37</b></td>
                        <td class="colNumber"><b>388</b></td>
                        <td class="colNumber"><b>46</b></td>
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
                    <li><b>Lưu ý: </b> Danh sách này chỉ hiển thị những nhân viên có phát sinh
                        hành động tự bàn giao khách hoặc được bàn giao khách cho mình</li>
                    <li>
                        <p>- Số sản phẩm mới hoặc tái ký sẽ không tính những sản phẩm sau :
                            <b>gói shipping, gói phần mềm quản lí fanpage, phí chỉnh sửa phần
                                mềm, phí chỉnh sửa website</b></p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="modal fade" id="loadingModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div style="font-size: 3em; text-align: center;">
                            <i class="fa fa-spin fa-cog"></i>
                        </div>
                    </div>
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
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/saved_resource(2)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/saved_resource(3)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/service.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/bootstrap-multiselect.js') }}"></script>
@endsection