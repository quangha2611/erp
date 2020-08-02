@extends('Layout.master1')

@section('css')
    <link href="{{ asset('asset/css/crm/report/bootstrap-multiselect.css') }}" media="screen" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/css/crm/report/style.css') }}" type="text/css">
@endsection

@section('title','ERP-Báo cáo đến gặp của nhân viên theo từng mục đích gặp')

@section('content-page')

    <div class="tab-content">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li class="active">Báo cáo đến gặp của nhân viên theo từng mục đích gặp</li>
        </ul>
        <div class="filterContainer">
            <form method="GET" name="crmReportMettingVgFilter" class="form-inline lolify"
                role="form" id="crmReportMettingVgFilter">
                <div class="col-md-10 lolify-default">

                    <div class="form-group">
                        <input type="text" name="daterangepicker"
                            class="form-control date-range-picker" id="daterangepicker"
                            value="24/07/2008 - 31/07/2020"> </div>
                    <div class="form-group">
                        <select name="companyId" id="companyId"
                            class="form-control select2-hidden-accessible" tabindex="-1"
                            aria-hidden="true">
                            <option value="">- Công ty nhân viên -</option>
                            <option value="10">VNP group</option>
                            <option value="2">--Công ty cổ phần Vật Giá Việt Nam</option>
                            <option value="315" selected="selected">----Vật giá - Hà Nội
                            </option>
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
                        </select><span
                            class="select2 select2-container select2-container--default"
                            dir="ltr" style="width: 150px;"><span class="selection"><span
                                    class="select2-selection select2-selection--single"
                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                    tabindex="0"
                                    aria-labelledby="select2-companyId-container"><span
                                        class="select2-selection__rendered"
                                        id="select2-companyId-container"
                                        title="----Vật giá - Hà Nội">----Vật giá - Hà
                                        Nội</span><span class="select2-selection__arrow"
                                        role="presentation"><b
                                            role="presentation"></b></span></span></span><span
                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                    </div>
                    <div class="form-group">
                        <select name="departmentId" id="departmentId"
                            class="form-control select2-hidden-accessible" tabindex="-1"
                            aria-hidden="true">
                            <option value="">- Phòng ban NV -</option>
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
                        </select><span
                            class="select2 select2-container select2-container--default"
                            dir="ltr" style="width: 150px;"><span class="selection"><span
                                    class="select2-selection select2-selection--single"
                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                    tabindex="0"
                                    aria-labelledby="select2-departmentId-container"><span
                                        class="select2-selection__rendered"
                                        id="select2-departmentId-container"><span
                                            class="select2-selection__placeholder">Phòng ban của
                                            nhân viên</span></span><span
                                        class="select2-selection__arrow" role="presentation"><b
                                            role="presentation"></b></span></span></span><span
                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                    </div>
                    <div class="form-group">
                        <input type="text" name="q" placeholder="Tên hoặc mã nhân sự" id="q"
                            class="form-control" value=""> </div>
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
        <div class="dgContainer">
            <div style="display: none; width: 1874px;" class="stickyHeader">
                <table class="table table-bordered" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr class="even">
                            <th rowspan="2" style="width: 59px;">STT</th>
                            <th rowspan="2" style="width: 80px;">Mã NV</th>
                            <th rowspan="2" style="width: 250px;">Nhân viên</th>
                            <th rowspan="2" style="width: 470px;">Công ty | Phòng ban</th>
                            <th colspan="4" style="width: 944px;">Mục đích đến gặp</th>
                            <th rowspan="2" style="width: 70px;">Tổng</th>
                        </tr>
                        <tr>
                            <th style="width: 203px;">Giải thích tính năng</th>
                            <th style="width: 260px;">Giới thiệu chính sách mới</th>
                            <th style="width: 279px;">Báo cáo hiệu quả gian hàng</th>
                            <th style="width: 202px;">Không có mục đích</th>
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
                        <th rowspan="2">STT</th>
                        <th rowspan="2">Mã NV</th>
                        <th rowspan="2">Nhân viên</th>
                        <th rowspan="2">Công ty | Phòng ban</th>
                        <th colspan="4">Mục đích đến gặp</th>
                        <th rowspan="2">Tổng</th>
                    </tr>
                    <tr>
                        <th>Giải thích tính năng</th>
                        <th>Giới thiệu chính sách mới</th>
                        <th>Báo cáo hiệu quả gian hàng</th>
                        <th>Không có mục đích</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="even">
                        <td class="col-align-center">1</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1096&amp;type=31">0189</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1096&amp;type=31">Phan
                                Quỳnh Hương</a></td>
                        <td>Vật giá - Hà Nội <b>|</b> Phòng CSGH</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1096&amp;type=31&amp;reasonType=1">23</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1096&amp;type=31&amp;reasonType=2">36</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1096&amp;type=31&amp;reasonType=3">338</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1096&amp;type=31&amp;reasonType=12">674</a>
                        </td>
                        <td class="col-align-center">1071</td>
                    </tr>
                    <tr>
                        <td class="col-align-center">2</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=3455&amp;type=31">0108</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=3455&amp;type=31">Phạm
                                Thu Hà</a></td>
                        <td>Vật giá - Hà Nội <b>|</b> Nhóm CSGH 3</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=3455&amp;type=31&amp;reasonType=12">482</a>
                        </td>
                        <td class="col-align-center">482</td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center">3</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=4531&amp;type=31">5916</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=4531&amp;type=31">Đoàn
                                Minh Nghĩa</a></td>
                        <td>Vật giá - Hà Nội <b>|</b> Nhóm CSGH 3</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=4531&amp;type=31&amp;reasonType=1">19</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=4531&amp;type=31&amp;reasonType=2">2</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=4531&amp;type=31&amp;reasonType=3">109</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=4531&amp;type=31&amp;reasonType=12">547</a>
                        </td>
                        <td class="col-align-center">677</td>
                    </tr>
                    <tr>
                        <td class="col-align-center">4</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=561&amp;type=31">4556</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=561&amp;type=31">Ngô
                                Trần Thanh Hương</a></td>
                        <td>Vật giá - Hà Nội <b>|</b> Nhóm CSGH 3</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=561&amp;type=31&amp;reasonType=12">147</a>
                        </td>
                        <td class="col-align-center">147</td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center">5</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=3314&amp;type=31">4915</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=3314&amp;type=31">Trịnh
                                Tùng Lâm</a></td>
                        <td>Vật giá - Hà Nội <b>|</b> Nhóm CSGH 11</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=3314&amp;type=31&amp;reasonType=12">470</a>
                        </td>
                        <td class="col-align-center">470</td>
                    </tr>
                    <tr>
                        <td class="col-align-center">6</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=2075&amp;type=31">2769</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=2075&amp;type=31">Nguyễn
                                Văn Đăng</a></td>
                        <td>Vật giá - Hà Nội <b>|</b> Nhóm CSGH 10</td>
                        <td></td>
                        <td></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=2075&amp;type=31&amp;reasonType=3">3</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=2075&amp;type=31&amp;reasonType=12">610</a>
                        </td>
                        <td class="col-align-center">613</td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center">7</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1412&amp;type=31">1259</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1412&amp;type=31">Ngô
                                Thị Lan</a></td>
                        <td>Vật giá - Hà Nội <b>|</b> Nhóm CSGH 1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1412&amp;type=31&amp;reasonType=12">484</a>
                        </td>
                        <td class="col-align-center">484</td>
                    </tr>
                    <tr>
                        <td class="col-align-center">8</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1118&amp;type=31">0304</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1118&amp;type=31">Nguyễn
                                Thanh Tùng</a></td>
                        <td>Vật giá - Hà Nội <b>|</b> Nhóm CSGH 1</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1118&amp;type=31&amp;reasonType=1">94</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1118&amp;type=31&amp;reasonType=2">19</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1118&amp;type=31&amp;reasonType=3">10</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1118&amp;type=31&amp;reasonType=12">463</a>
                        </td>
                        <td class="col-align-center">586</td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center">9</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1110&amp;type=31">0251</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1110&amp;type=31">Phạm
                                Thị Hiền</a></td>
                        <td>Vật giá - Hà Nội <b>|</b> Phòng CSGH</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1110&amp;type=31&amp;reasonType=1">331</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1110&amp;type=31&amp;reasonType=2">40</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1110&amp;type=31&amp;reasonType=3">109</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1110&amp;type=31&amp;reasonType=12">933</a>
                        </td>
                        <td class="col-align-center">1413</td>
                    </tr>
                    <tr>
                        <td class="col-align-center">10</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1926&amp;type=31">2558</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1926&amp;type=31">Nguyễn
                                Minh Thắng</a></td>
                        <td>Vật giá - Hà Nội <b>|</b> Phòng CSGH</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1926&amp;type=31&amp;reasonType=1">246</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1926&amp;type=31&amp;reasonType=2">3</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1926&amp;type=31&amp;reasonType=3">41</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1926&amp;type=31&amp;reasonType=12">655</a>
                        </td>
                        <td class="col-align-center">945</td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center">11</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1882&amp;type=31">2488</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1882&amp;type=31">Phạm
                                Thu Phương</a></td>
                        <td>Vật giá - Hà Nội <b>|</b> Phòng CSGH</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1882&amp;type=31&amp;reasonType=1">239</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1882&amp;type=31&amp;reasonType=2">77</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1882&amp;type=31&amp;reasonType=3">59</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1882&amp;type=31&amp;reasonType=12">696</a>
                        </td>
                        <td class="col-align-center">1071</td>
                    </tr>
                    <tr>
                        <td class="col-align-center">12</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1070&amp;type=31">0080</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1070&amp;type=31">Nguyễn
                                Thị Lan</a></td>
                        <td>Vật giá - Hà Nội <b>|</b> Nhóm CSGH 11</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1070&amp;type=31&amp;reasonType=12">236</a>
                        </td>
                        <td class="col-align-center">236</td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center">13</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1648&amp;type=31">1948</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1648&amp;type=31">Lê
                                Quang Phương</a></td>
                        <td>Vật giá - Hà Nội <b>|</b> Nhóm CSGH 1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1648&amp;type=31&amp;reasonType=12">2</a>
                        </td>
                        <td class="col-align-center">2</td>
                    </tr>
                    <tr>
                        <td class="col-align-center">14</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1059&amp;type=31">0048</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1059&amp;type=31">Ngô
                                Thị Hồng Hoa</a></td>
                        <td>Vật giá - Hà Nội <b>|</b> Phòng CSGH</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1059&amp;type=31&amp;reasonType=1">285</a>
                        </td>
                        <td></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1059&amp;type=31&amp;reasonType=3">19</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1059&amp;type=31&amp;reasonType=12">739</a>
                        </td>
                        <td class="col-align-center">1043</td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center">15</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1153&amp;type=31">0455</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1153&amp;type=31">Nguyễn
                                Văn Hòa</a></td>
                        <td>Vật giá - Hà Nội <b>|</b> Phòng CSGH</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1153&amp;type=31&amp;reasonType=1">325</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1153&amp;type=31&amp;reasonType=2">28</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1153&amp;type=31&amp;reasonType=3">12</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1153&amp;type=31&amp;reasonType=12">501</a>
                        </td>
                        <td class="col-align-center">866</td>
                    </tr>
                    <tr>
                        <td class="col-align-center">16</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=2749&amp;type=31">3684</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=2749&amp;type=31">Nguyễn
                                Mạnh Hùng</a></td>
                        <td>Vật giá - Hà Nội <b>|</b> Nhóm CSGH 10</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=2749&amp;type=31&amp;reasonType=12">445</a>
                        </td>
                        <td class="col-align-center">445</td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center">17</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=3150&amp;type=31">4612</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=3150&amp;type=31">Nguyễn
                                Thu Nga</a></td>
                        <td>Vật giá - Hà Nội <b>|</b> Nhóm CSGH 12</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=3150&amp;type=31&amp;reasonType=12">195</a>
                        </td>
                        <td class="col-align-center">195</td>
                    </tr>
                    <tr>
                        <td class="col-align-center">18</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1160&amp;type=31">0469</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1160&amp;type=31">Phạm
                                Anh Tuấn</a></td>
                        <td>Vật giá - Hà Nội <b>|</b> Phòng CSGH</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1160&amp;type=31&amp;reasonType=1">19</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1160&amp;type=31&amp;reasonType=2">17</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1160&amp;type=31&amp;reasonType=3">6</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1160&amp;type=31&amp;reasonType=12">159</a>
                        </td>
                        <td class="col-align-center">201</td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center">19</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=3254&amp;type=31">4820</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=3254&amp;type=31">Trần
                                Thị Huyền Nhung</a></td>
                        <td>Vật giá - Hà Nội <b>|</b> Nhóm CSGH 12</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=3254&amp;type=31&amp;reasonType=12">47</a>
                        </td>
                        <td class="col-align-center">47</td>
                    </tr>
                    <tr>
                        <td class="col-align-center">20</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1072&amp;type=31">0084</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1072&amp;type=31">Trần
                                Thúy Lan</a></td>
                        <td>Vật giá - Hà Nội <b>|</b> Phòng KD 7</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1072&amp;type=31&amp;reasonType=1">18</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1072&amp;type=31&amp;reasonType=2">9</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1072&amp;type=31&amp;reasonType=3">135</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1072&amp;type=31&amp;reasonType=12">447</a>
                        </td>
                        <td class="col-align-center">609</td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center">21</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1048&amp;type=31">0028</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1048&amp;type=31">Bùi
                                Văn Đăng</a></td>
                        <td>Vật giá - Hà Nội <b>|</b> Phòng KD 2</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1048&amp;type=31&amp;reasonType=12">1</a>
                        </td>
                        <td class="col-align-center">1</td>
                    </tr>
                    <tr>
                        <td class="col-align-center">22</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5300&amp;type=31">6659</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5300&amp;type=31">Tạ
                                Thị Thùy Dung</a></td>
                        <td>Vật giá - Hà Nội <b>|</b> Nhóm CSGH 1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5300&amp;type=31&amp;reasonType=12">126</a>
                        </td>
                        <td class="col-align-center">126</td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center">23</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5331&amp;type=31">6689</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5331&amp;type=31">Thái
                                Thu Hà</a></td>
                        <td>Vật giá - Hà Nội <b>|</b> Nhóm CSGH 1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5331&amp;type=31&amp;reasonType=12">176</a>
                        </td>
                        <td class="col-align-center">176</td>
                    </tr>
                    <tr>
                        <td class="col-align-center">24</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1147&amp;type=31">0445</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1147&amp;type=31">Đinh
                                Thị Thu Hương</a></td>
                        <td>Vật giá - Hà Nội <b>|</b> Phòng KD 4.1</td>
                        <td></td>
                        <td></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1147&amp;type=31&amp;reasonType=3">1</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1147&amp;type=31&amp;reasonType=12">2</a>
                        </td>
                        <td class="col-align-center">3</td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center">25</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1080&amp;type=31">0126</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1080&amp;type=31">Nguyễn
                                Chí Công</a></td>
                        <td>Vật giá - Hà Nội <b>|</b> Phòng KD 4.2</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1080&amp;type=31&amp;reasonType=12">2</a>
                        </td>
                        <td class="col-align-center">2</td>
                    </tr>
                    <tr>
                        <td class="col-align-center">26</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5482&amp;type=31">6864</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5482&amp;type=31">Đoàn
                                Huyền Trang</a></td>
                        <td>Vật giá - Hà Nội <b>|</b> Nhóm CSGH 10</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5482&amp;type=31&amp;reasonType=12">115</a>
                        </td>
                        <td class="col-align-center">115</td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center">27</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5579&amp;type=31">6979</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5579&amp;type=31">Đỗ
                                Hoàng Linh</a></td>
                        <td>Vật giá - Hà Nội <b>|</b> Nhóm CSGH 1</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5579&amp;type=31&amp;reasonType=1">20</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5579&amp;type=31&amp;reasonType=2">3</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5579&amp;type=31&amp;reasonType=3">65</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5579&amp;type=31&amp;reasonType=12">17</a>
                        </td>
                        <td class="col-align-center">105</td>
                    </tr>
                    <tr>
                        <td class="col-align-center">28</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5631&amp;type=31">7032</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5631&amp;type=31">Nguyễn
                                Thị Ngọc Trang</a></td>
                        <td>Vật giá - Hà Nội <b>|</b> Phòng chăm sóc gian hàng 3</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5631&amp;type=31&amp;reasonType=12">16</a>
                        </td>
                        <td class="col-align-center">16</td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center">29</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5629&amp;type=31">7030</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5629&amp;type=31">Trần
                                Thị Bích Phương</a></td>
                        <td>Vật giá - Hà Nội <b>|</b> Nhóm CSGH 10</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5629&amp;type=31&amp;reasonType=1">9</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5629&amp;type=31&amp;reasonType=2">2</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5629&amp;type=31&amp;reasonType=3">2</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5629&amp;type=31&amp;reasonType=12">11</a>
                        </td>
                        <td class="col-align-center">24</td>
                    </tr>
                    <tr>
                        <td class="col-align-center">30</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5630&amp;type=31">7031</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5630&amp;type=31">Lê
                                Thị Ngọc Ánh</a></td>
                        <td>Vật giá - Hà Nội <b>|</b> Nhóm CSGH 3</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5630&amp;type=31&amp;reasonType=1">36</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5630&amp;type=31&amp;reasonType=2">3</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5630&amp;type=31&amp;reasonType=3">96</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5630&amp;type=31&amp;reasonType=12">13</a>
                        </td>
                        <td class="col-align-center">148</td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center">31</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5641&amp;type=31">6707</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5641&amp;type=31">Ngô
                                Thị Hướng</a></td>
                        <td>Vật giá - Hà Nội <b>|</b> Nhóm CSGH 1</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5641&amp;type=31&amp;reasonType=1">106</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5641&amp;type=31&amp;reasonType=2">7</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5641&amp;type=31&amp;reasonType=3">8</a>
                        </td>
                        <td></td>
                        <td class="col-align-center">121</td>
                    </tr>
                    <tr>
                        <td class="col-align-center">32</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5873&amp;type=31">7264</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5873&amp;type=31">Lê
                                Thùy Dung</a></td>
                        <td>Vật giá - Hà Nội <b>|</b> Nhóm CSGH 3</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5873&amp;type=31&amp;reasonType=1">30</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5873&amp;type=31&amp;reasonType=2">4</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5873&amp;type=31&amp;reasonType=3">22</a>
                        </td>
                        <td></td>
                        <td class="col-align-center">56</td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center">33</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5878&amp;type=31">7269</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5878&amp;type=31">Trần
                                Thảo Ly</a></td>
                        <td>Vật giá - Hà Nội <b>|</b> Nhóm CSGH 1</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5878&amp;type=31&amp;reasonType=1">49</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5878&amp;type=31&amp;reasonType=2">11</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5878&amp;type=31&amp;reasonType=3">9</a>
                        </td>
                        <td></td>
                        <td class="col-align-center">69</td>
                    </tr>
                    <tr>
                        <td class="col-align-center">34</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5892&amp;type=31">7283</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5892&amp;type=31">Nguyễn
                                Thanh Tùng</a></td>
                        <td>Vật giá - Hà Nội <b>|</b> Nhóm CSGH 3</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5892&amp;type=31&amp;reasonType=1">41</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5892&amp;type=31&amp;reasonType=2">7</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5892&amp;type=31&amp;reasonType=3">15</a>
                        </td>
                        <td></td>
                        <td class="col-align-center">63</td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center">35</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5891&amp;type=31">7282</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5891&amp;type=31">Nguyễn
                                Văn Dương</a></td>
                        <td>Vật giá - Hà Nội <b>|</b> Nhóm CSGH 3</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5891&amp;type=31&amp;reasonType=1">38</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5891&amp;type=31&amp;reasonType=2">10</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5891&amp;type=31&amp;reasonType=3">14</a>
                        </td>
                        <td></td>
                        <td class="col-align-center">62</td>
                    </tr>
                    <tr>
                        <td class="col-align-center">36</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1064&amp;type=31">0058</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1064&amp;type=31">Nguyễn
                                Thu Trang</a></td>
                        <td>Vật giá - Hà Nội <b>|</b> Nhóm KD5</td>
                        <td></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1064&amp;type=31&amp;reasonType=2">4</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1064&amp;type=31&amp;reasonType=3">1</a>
                        </td>
                        <td></td>
                        <td class="col-align-center">5</td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center">37</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5670&amp;type=31">7070</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5670&amp;type=31">Trần
                                Thị Linh Chi</a></td>
                        <td>Vật giá - Hà Nội <b>|</b> Phòng KD 6</td>
                        <td></td>
                        <td></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5670&amp;type=31&amp;reasonType=3">1</a>
                        </td>
                        <td></td>
                        <td class="col-align-center">1</td>
                    </tr>
                    <tr>
                        <td class="col-align-center">38</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5640&amp;type=31">7041</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5640&amp;type=31">Dương
                                Thị Quyên</a></td>
                        <td>Vật giá - Hà Nội <b>|</b> Nhóm KD 6.1</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5640&amp;type=31&amp;reasonType=1">2</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5640&amp;type=31&amp;reasonType=2">3</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5640&amp;type=31&amp;reasonType=3">4</a>
                        </td>
                        <td></td>
                        <td class="col-align-center">9</td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center">39</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1260&amp;type=31">0857</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1260&amp;type=31">Trần
                                Phương Chi</a></td>
                        <td>Vật giá - Hà Nội <b>|</b> Nhóm KD 7.2</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1260&amp;type=31&amp;reasonType=1">2</a>
                        </td>
                        <td></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1260&amp;type=31&amp;reasonType=3">6</a>
                        </td>
                        <td></td>
                        <td class="col-align-center">8</td>
                    </tr>
                    <tr>
                        <td class="col-align-center">40</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5993&amp;type=31">7374</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5993&amp;type=31">Trần
                                Khánh Toàn</a></td>
                        <td>Vật giá - Hà Nội <b>|</b> Nhóm CSGH 1</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5993&amp;type=31&amp;reasonType=1">26</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5993&amp;type=31&amp;reasonType=2">10</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5993&amp;type=31&amp;reasonType=3">9</a>
                        </td>
                        <td></td>
                        <td class="col-align-center">45</td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center">41</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5997&amp;type=31">7378</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5997&amp;type=31">Phạm
                                Thùy Dương</a></td>
                        <td>Vật giá - Hà Nội <b>|</b> Nhóm CSGH 1</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5997&amp;type=31&amp;reasonType=1">24</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5997&amp;type=31&amp;reasonType=2">2</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5997&amp;type=31&amp;reasonType=3">8</a>
                        </td>
                        <td></td>
                        <td class="col-align-center">34</td>
                    </tr>
                    <tr>
                        <td class="col-align-center">42</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5909&amp;type=31">7300</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5909&amp;type=31">Nguyễn
                                Duy Khánh</a></td>
                        <td>Vật giá - Hà Nội <b>|</b> Nhóm KD 7.2</td>
                        <td></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5909&amp;type=31&amp;reasonType=2">1</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=5909&amp;type=31&amp;reasonType=3">1</a>
                        </td>
                        <td></td>
                        <td class="col-align-center">2</td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center">43</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1152&amp;type=31">0452</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1152&amp;type=31">Phạm
                                Thị Thu Hằng</a></td>
                        <td>Vật giá - Hà Nội <b>|</b> Phòng KD 6</td>
                        <td></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=1152&amp;type=31&amp;reasonType=2">1</a>
                        </td>
                        <td></td>
                        <td></td>
                        <td class="col-align-center">1</td>
                    </tr>
                    <tr>
                        <td class="col-align-center">44</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=3429&amp;type=31">4981</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=3429&amp;type=31">Đào
                                Việt Hà</a></td>
                        <td>Vật giá - Hà Nội <b>|</b> Nhóm KD 6.1</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=3429&amp;type=31&amp;reasonType=1">2</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=24%2F07%2F2008%20-%2031%2F07%2F2020&amp;userId=3429&amp;type=31&amp;reasonType=2">1</a>
                        </td>
                        <td></td>
                        <td></td>
                        <td class="col-align-center">3</td>
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
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/carevg.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/saved_resource(3)') }}"></script>
@endsection