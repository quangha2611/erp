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

@section('title','ERP-Báo cáo KPI chăm sóc theo nhân viên')

@section('content-page')
    <div class="tab-content">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li class="active">Báo cáo KPI chăm sóc theo nhân viên</li>
        </ul>
        <div class="filterContainer">
            <form method="GET" name="crmReportCareKPIFilter" class="form-inline lolify"
                role="form" id="crmReportCareKPIFilter">
                <div class="col-md-10 lolify-default">

                    <div class="form-group">
                        <input type="text" name="daterangepicker"
                            class="form-control date-range-picker" id="daterangepicker"
                            value="01/07/2020 - 31/07/2020"> </div>
                    <div class="form-group">
                        <select name="groupId" id="groupId" class="form-control">
                            <option value="">- Đợt chỉ tiêu -</option>
                            <option value="113">Chỉ tiêu VNP HCM 07-2020</option>
                            <option value="112">CHỈ TIÊU VNP (Bạch Mã) THÁNG 07/2020</option>
                            <option value="111">CHỈ TIÊU SALE NHANH THÁNG 07.2020</option>
                            <option value="110">Chỉ tiêu VNP HCM 06-2020</option>
                            <option value="109">CHỈ TIÊU Vật giá HCM 02( anh Thịnh) Tháng
                                06/2020</option>
                            <option value="108">CHỈ TIÊU SALE NHANH THÁNG 06.2020</option>
                            <option value="107">Chỉ Tiêu VNP HCM 05.2020</option>
                            <option value="106">CHỈ TIÊU SALE NHANH THÁNG 05.2020</option>
                            <option value="105">Chỉ Tiêu VNP HCM 04/2020</option>
                            <option value="104">CHỈ TIÊU NHANH THÁNG 04/2020</option>
                            <option value="103">CHỈ TIÊU SALE NHANH THÁNG 03/2020</option>
                            <option value="102">Chỉ Tiêu VNP HCM 03/2020</option>
                            <option value="101">Chỉ Tiêu VNP HCM 02/2020</option>
                            <option value="100">CHỈ TIÊU SALE NHANH THÁNG 02/2020</option>
                            <option value="99">CHỈ TIÊU SALE NHANH THÁNG 01/2020</option>
                            <option value="98">Chỉ tiêu Vật Giá HCM 01/2020</option>
                            <option value="97">Chỉ Tiêu Vật Giá HCM 12/2019</option>
                            <option value="96">CHỈ TIÊU NHANH THÁNG 12/2019</option>
                            <option value="95">Chỉ Tiêu Vật Giá HCM 11/2019</option>
                            <option value="94">CHỈ TIÊU NHANH THÁNG 11/2019</option>
                        </select> </div>
                    <input type="hidden" name="companyId" id="companyId" class="form-control"
                        value="319"> <input type="hidden" name="userId" id="userId"
                        class="form-control" value="">
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
                            <li><a href="https://erp.nhanh.vn/crm/report/carekpi#"
                                    id="exportExcel"><i class="fa fa-download fa-lg"></i> Xuất
                                    excel</a></li>
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
                        <select name="departmentId" id="departmentId" class="form-control">
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
                        <select name="locked" id="locked" class="form-control">
                            <option value="">- Trạng thái tài khoản -</option>
                            <option value="1">khóa</option>
                            <option value="-1">đang hoạt động</option>
                        </select> </div>
                    <div class="form-group">
                        <select name="hasValue" id="hasValue" class="form-control">
                            <option value="">- Doanh số -</option>
                            <option value="1">Có doanh số</option>
                            <option value="-1">không có doanh số</option>
                        </select> </div>
                    <div class="form-group">
                        <select name="show" id="show" class="form-control">
                            <option value="">- Hiện danh sách -</option>
                            <option value="1">Nhân viên có doanh số</option>
                            <option value="2">Tất cả</option>
                        </select> </div>
                    <div class="form-group">
                        <select name="showWorkingStatus" id="showWorkingStatus"
                            class="form-control">
                            <option value="">- Trạng thái nhân sự -</option>
                            <option value="1" selected="selected">Đang làm việc</option>
                            <option value="2">Tất cả</option>
                        </select> </div>
                    <div class="form-group">
                        <select name="showWorkingDate" id="showWorkingDate"
                            class="form-control">
                            <option value="">- Trạng thái làm việc -</option>
                            <option value="1">Trên 3 tháng</option>
                            <option value="-1">Dưới 3 tháng</option>
                        </select> </div>
                    <div class="form-group">
                        <input type="text" name="employeeName" placeholder="Nhân viên"
                            id="employeeName" class="form-control ui-autocomplete-input"
                            value="" autocomplete="off"> </div>
                    <div class="form-group">
                        <select name="status" id="status" class="form-control">
                            <option value="">- Trạng thái hành động -</option>
                            <option value="1">Thành công</option>
                            <option value="2">Thất bại</option>
                        </select> </div>

                </div>
            </form>
            <div class="clearfix"></div>
            <div class="lolify-left-menu" style="display: none;">
            </div>
        </div>
        <div class="dgEmployee" style=" overflow: auto;">
            <div class="dgContainer">
                <div style="width: 1874px; display: none;" class="stickyHeader">
                    <table class="table table-bordered" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr class="even">
                                <th style="width: 47px;">STT</th>
                                <th style="width: 65px;">Mã NV</th>
                                <th style="width: 215px;">Nhân viên</th>
                                <th style="width: 301px;">Phòng ban</th>
                                <th style="width: 114px;">thời gian làm</th>
                                <th style="width: 60px;"><a
                                        href="https://erp.nhanh.vn/crm/report/carekpi?sort=call&amp;dir=asc"><i
                                            class="fa fa-sort"></i> Gọi</a></th>
                                <th style="width: 60px;"><a
                                        href="https://erp.nhanh.vn/crm/report/carekpi?sort=meeting&amp;dir=asc"><i
                                            class="fa fa-sort"></i> Gặp</a></th>
                                <th style="width: 118px;"><a
                                        href="https://erp.nhanh.vn/crm/report/carekpi?sort=calendar&amp;dir=asc"><i
                                            class="fa fa-sort"></i> Đặt lịch hẹn</a></th>
                                <th style="width: 158px;"><a
                                        href="https://erp.nhanh.vn/crm/report/carekpi?sort=contract&amp;dir=asc"><i
                                            class="fa fa-sort"></i> Số HĐ đã thu tiền</a></th>
                                <th style="width: 113px;">Doanh số</th>
                                <th style="width: 77px;">Đăng ký</th>
                                <th style="width: 160px;">Doanh số / Đăng ký</th>
                                <th style="width: 229px;">Tính KPI</th>
                                <th style="width: 156px;">KPI trung bình</th>
                            </tr>
                            <tr>
                                <th style="width: 47px;">[1]</th>
                                <th style="width: 65px;">[2]</th>
                                <th style="width: 215px;">[3]</th>
                                <th style="width: 301px;">[4]</th>
                                <th style="width: 114px;">[5]</th>
                                <th style="width: 60px;">[6]</th>
                                <th style="width: 60px;">[7]</th>
                                <th style="width: 118px;">[8]</th>
                                <th style="width: 158px;">[9]</th>
                                <th style="width: 113px;">[10]</th>
                                <th style="width: 77px;">[11]</th>
                                <th style="width: 160px;">[12]</th>
                                <th style="width: 229px;">[13 = 6*1 + 7*10 + 8*5 + 9*20 ]</th>
                                <th style="width: 156px;">[14 = 13 / 26 Ngày ]</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-6 dgButtons"></div>
                    <div style="clear: both;"></div><br>
                </div>
                <table id="dgCrmReportCareKPI" class="table table-bordered">
                    <thead>
                        <tr class="even">
                            <th>STT</th>
                            <th>Mã NV</th>
                            <th>Nhân viên</th>
                            <th>Phòng ban</th>
                            <th>thời gian làm</th>
                            <th><a
                                    href="https://erp.nhanh.vn/crm/report/carekpi?sort=call&amp;dir=asc"><i
                                        class="fa fa-sort"></i> Gọi</a></th>
                            <th><a
                                    href="https://erp.nhanh.vn/crm/report/carekpi?sort=meeting&amp;dir=asc"><i
                                        class="fa fa-sort"></i> Gặp</a></th>
                            <th><a
                                    href="https://erp.nhanh.vn/crm/report/carekpi?sort=calendar&amp;dir=asc"><i
                                        class="fa fa-sort"></i> Đặt lịch hẹn</a></th>
                            <th><a
                                    href="https://erp.nhanh.vn/crm/report/carekpi?sort=contract&amp;dir=asc"><i
                                        class="fa fa-sort"></i> Số HĐ đã thu tiền</a></th>
                            <th>Doanh số</th>
                            <th>Đăng ký</th>
                            <th>Doanh số / Đăng ký</th>
                            <th>Tính KPI</th>
                            <th>KPI trung bình</th>
                        </tr>
                        <tr class="">
                            <th>[1]</th>
                            <th>[2]</th>
                            <th>[3]</th>
                            <th>[4]</th>
                            <th>[5]</th>
                            <th>[6]</th>
                            <th>[7]</th>
                            <th>[8]</th>
                            <th>[9]</th>
                            <th>[10]</th>
                            <th>[11]</th>
                            <th>[12]</th>
                            <th>[13 = 6*1 + 7*10 + 8*5 + 9*20 ]</th>
                            <th>[14 = 13 / 26 Ngày ]</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="even">
                            <td>1</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10070&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8922</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10070&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Hồ
                                    Tấn Hải</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Phòng KD8_LâmNV</p>
                            </td>
                            <td>22</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7680&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">106</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7680&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">23</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7680&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">9</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=10070">6</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10070&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">16.696.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">501</td>
                            <td class="colNumber">19,27</td>
                        </tr>
                        <tr class="">
                            <td>2</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10145&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8981</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10145&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                    Thị Ngọc Quyền</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Nhóm KD3_NgânTK</p>
                            </td>
                            <td>20</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7753&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">299</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7753&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">14</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7753&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">13</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=10145">11</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10145&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">53.172.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">724</td>
                            <td class="colNumber">27,85</td>
                        </tr>
                        <tr class="even">
                            <td>3</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10381&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9215</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10381&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                    Thị Yến Phương</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Nhóm KD5_LiêmNT</p>
                            </td>
                            <td>16</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7980&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">196</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7980&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">13</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7980&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=10381">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10381&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5.606.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">421</td>
                            <td class="colNumber">16,19</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10212&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9047</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10212&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Đỗ
                                    Thị Ngọc Hân</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Phòng KD1_NgânHTM</p>
                            </td>
                            <td>20</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7818&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">47</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7818&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">11</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7818&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">8</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=10212">14</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10212&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">40.572.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">477</td>
                            <td class="colNumber">18,35</td>
                        </tr>
                        <tr class="even">
                            <td>5</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9646&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8520</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9646&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Quốc Gia Thịnh</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Nhóm KD4_ThịnhNQG</p>
                            </td>
                            <td>26</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7277&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">241</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7277&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">11</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7277&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">13</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=9646">12</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9646&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">45.358.500</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">656</td>
                            <td class="colNumber">25,23</td>
                        </tr>
                        <tr class="">
                            <td>6</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10593&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9384</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10593&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phan
                                    Ngọc Ý Linh</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Phòng KD1_NgânHTM</p>
                            </td>
                            <td>15</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8188&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">176</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8188&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">9</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8188&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=10593">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10593&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">15.716.500</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">381</td>
                            <td class="colNumber">14,65</td>
                        </tr>
                        <tr class="even">
                            <td>7</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11130&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9982</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11130&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Thị Kiều Mỹ</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Nhóm KD9_ThưNTA</p>
                            </td>
                            <td>4</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8735&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">101</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8735&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">9</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8735&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11130">7</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11130&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">20.097.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">346</td>
                            <td class="colNumber">13,31</td>
                        </tr>
                        <tr class="">
                            <td>8</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8387&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7431</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8387&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Thanh Liêm</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Nhóm KD5_LiêmNT</p>
                            </td>
                            <td>37</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=6050&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">22</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=6050&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">9</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=6050&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=8387">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8387&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">18.490.500</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">227</td>
                            <td class="colNumber">8,73</td>
                        </tr>
                        <tr class="even">
                            <td>9</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10769&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9540</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10769&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Thị Hiếu</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Nhóm KD5_LiêmNT</p>
                            </td>
                            <td>12</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8371&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">173</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8371&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">8</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8371&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">7</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=10769">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10769&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">29.160.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">388</td>
                            <td class="colNumber">14,92</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11048&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9900</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11048&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lê
                                    Thị Nam</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Sale Marketing</p>
                            </td>
                            <td>8</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8655&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">322</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8655&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">8</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8655&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">14</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11048">7</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11048&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">19.052.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">612</td>
                            <td class="colNumber">23,54</td>
                        </tr>
                        <tr class="even">
                            <td>11</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11224&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10073</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11224&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Bùi
                                    Gia Bảo</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Nhóm KD4_ThịnhNQG</p>
                            </td>
                            <td>2</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8826&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">221</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8826&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">7</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8826&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11224">6</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11224&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10.125.500</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">431</td>
                            <td class="colNumber">16,58</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11218&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10066</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11218&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Phúc Duy Khang</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Phòng KD1_NgânHTM</p>
                            </td>
                            <td>3</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8821&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">308</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8821&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">7</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8821&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11218">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11218&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4.728.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">453</td>
                            <td class="colNumber">17,42</td>
                        </tr>
                        <tr class="even">
                            <td>13</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11167&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10018</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11167&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                    Thị Kim Oanh</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Nhóm KD5_LiêmNT</p>
                            </td>
                            <td>4</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8770&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">406</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8770&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">6</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8770&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11167">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11167&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7.080.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">561</td>
                            <td class="colNumber">21,58</td>
                        </tr>
                        <tr class="">
                            <td>14</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10180&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9015</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10180&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Huỳnh
                                    Diễm Thy</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Nhóm KD3_NgânTK</p>
                            </td>
                            <td>20</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7785&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">124</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7785&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">6</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7785&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=10180">8</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10180&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">25.882.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">359</td>
                            <td class="colNumber">13,81</td>
                        </tr>
                        <tr class="even">
                            <td>15</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9478&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8372</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9478&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lê
                                    Quốc Duy</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Sale Marketing</p>
                            </td>
                            <td>28</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7111&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">84</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7111&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">6</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=9478">12</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9478&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">19.400.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">384</td>
                            <td class="colNumber">14,77</td>
                        </tr>
                        <tr>
                            <td>16</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11229&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10076</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11229&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trịnh
                                    Xuân Tài</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Sale Marketing</p>
                            </td>
                            <td></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8830&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">93</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8830&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">6</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8830&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11229">11</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11229&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">25.260.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">378</td>
                            <td class="colNumber">14,54</td>
                        </tr>
                        <tr class="even">
                            <td>17</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11089&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9942</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11089&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Huỳnh
                                    Ngọc Hải</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Nhóm KD9_ThưNTA</p>
                            </td>
                            <td>6</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8694&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">14</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8694&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8694&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11089">37</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11089&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">20.451.847</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">819</td>
                            <td class="colNumber">31,5</td>
                        </tr>
                        <tr>
                            <td>18</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11239&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10085</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11239&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Huỳnh Anh Thư</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Sale Marketing</p>
                            </td>
                            <td>1</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8839&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">331</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8839&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8839&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">13</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11239">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11239&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10.510.500</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">526</td>
                            <td class="colNumber">20,23</td>
                        </tr>
                        <tr class="even">
                            <td>19</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11247&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10092</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11247&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Cao
                                    Thị Thu Hằng</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Sale Marketing</p>
                            </td>
                            <td></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8847&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8847&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8847&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11247">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11247&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8.559.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">151</td>
                            <td class="colNumber">5,81</td>
                        </tr>
                        <tr>
                            <td>20</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10814&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9585</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10814&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lê
                                    Ngọc Khánh</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Phòng KD1_NgânHTM</p>
                            </td>
                            <td>12</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8417&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">143</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8417&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8417&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=10814">9</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10814&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">21.826.500</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">378</td>
                            <td class="colNumber">14,54</td>
                        </tr>
                        <tr class="even">
                            <td>21</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11273&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10108</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11273&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lê
                                    Tấn Anh Trung</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Sale Marketing</p>
                            </td>
                            <td>1</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8874&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">145</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8874&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">3</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11273">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11273&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">14.201.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">275</td>
                            <td class="colNumber">10,58</td>
                        </tr>
                        <tr>
                            <td>22</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10833&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9604</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10833&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Thanh Ngân</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - SEO GG MAPS</p>
                            </td>
                            <td>11</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8434&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">22</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8434&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8434&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=10833">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10833&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">15.004.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">127</td>
                            <td class="colNumber">4,88</td>
                        </tr>
                        <tr class="even">
                            <td>23</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9510&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8402</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9510&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Thị Anh Thư</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Nhóm KD9_ThưNTA</p>
                            </td>
                            <td>28</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7144&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">13</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7144&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=7144&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=9510">17</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9510&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">54.418.550</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">388</td>
                            <td class="colNumber">14,92</td>
                        </tr>
                        <tr>
                            <td>24</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11231&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10078</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11231&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lê
                                    Tạ Tú Uyên</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - SEO GG MAPS</p>
                            </td>
                            <td>1</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8832&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">36</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8832&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">2</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11231">8</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11231&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">11.990.660</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">216</td>
                            <td class="colNumber">8,31</td>
                        </tr>
                        <tr class="even">
                            <td>25</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8427&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7471</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8427&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                    Kim Ngân</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Nhóm KD3_NgânTK</p>
                            </td>
                            <td>37</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=6090&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">36</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=6090&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=6090&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=8427">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8427&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">37.680.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">166</td>
                            <td class="colNumber">6,38</td>
                        </tr>
                        <tr>
                            <td>26</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11318&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10153</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11318&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Hải Linh</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Ecome Care HCM</p>
                            </td>
                            <td>0</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8919&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">67</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8919&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8919&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11318">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11318&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">500.500</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">117</td>
                            <td class="colNumber">4,5</td>
                        </tr>
                        <tr class="even">
                            <td>27</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11301&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10136</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11301&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Võ
                                    Thị Thu Sương</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Nhóm KD3_NgânTK</p>
                            </td>
                            <td>0</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8903&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">373</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8903&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8903&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11301">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11301&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5.076.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">473</td>
                            <td class="colNumber">18,19</td>
                        </tr>
                        <tr>
                            <td>28</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11262&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10097</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11262&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Thị Mỹ Phụng</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Sale Marketing</p>
                            </td>
                            <td>1</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8862&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">531</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8862&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11262">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11262&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4.604.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">581</td>
                            <td class="colNumber">22,35</td>
                        </tr>
                        <tr class="even">
                            <td>29</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11209&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10058</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11209&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Phương Mai</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Phòng KD8_LâmNV</p>
                            </td>
                            <td>2</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8812&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">450</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8812&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8812&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11209">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11209&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">500.500</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">505</td>
                            <td class="colNumber">19,42</td>
                        </tr>
                        <tr>
                            <td>30</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10785&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9556</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10785&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                    Minh Thu</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Sale Marketing</p>
                            </td>
                            <td>12</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8387&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">19</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8387&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=1">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8387&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">6</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=10785">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10785&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4.200.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">99</td>
                            <td class="colNumber">3,81</td>
                        </tr>
                        <tr class="even">
                            <td>31</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11189&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10039</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11189&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Ngọ
                                    Văn Tình</a></td>
                            <td>
                                <p style="color:green;">Phòng KD 8</p>
                            </td>
                            <td>14</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11189">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11189&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">415.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">40</td>
                            <td class="colNumber">1,54</td>
                        </tr>
                        <tr>
                            <td>32</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11188&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10038</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11188&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Cao
                                    Thị Mỹ Duyên</a></td>
                            <td>
                                <p style="color:green;">Phòng KD 8</p>
                            </td>
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
                        </tr>
                        <tr class="even">
                            <td>33</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10745&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9516</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10745&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Thị Như Huệ</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Nhóm KD9_ThưNTA</p>
                            </td>
                            <td>1</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8342&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">289</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8342&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=10745">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10745&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5.240.500</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">354</td>
                            <td class="colNumber">13,62</td>
                        </tr>
                        <tr>
                            <td>34</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10696&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9474</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10696&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trương
                                    Thị Tường Vi</a></td>
                            <td>
                                <p style="color:green;">CSonline-Telesale</p>
                            </td>
                            <td>12</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=10696">3</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">60</td>
                            <td class="colNumber">2,31</td>
                        </tr>
                        <tr class="even">
                            <td>35</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11187&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10037</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11187&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Võ
                                    Thị Lệ Thu</a></td>
                            <td>
                                <p style="color:green;">Phòng KD 01</p>
                            </td>
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
                        </tr>
                        <tr>
                            <td>36</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10500&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9294</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10500&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Thái
                                    Chí Toàn</a></td>
                            <td>
                                <p style="color:green;">Phòng KD10</p>
                            </td>
                            <td>15</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=10500">7</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10500&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">30.860.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">140</td>
                            <td class="colNumber">5,38</td>
                        </tr>
                        <tr class="even">
                            <td>37</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11169&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10020</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11169&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Hoàng
                                    Lân</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Nhóm KD5_LiêmNT</p>
                            </td>
                            <td>4</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8772&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">96</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8772&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11169">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11169&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2.700.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">121</td>
                            <td class="colNumber">4,65</td>
                        </tr>
                        <tr>
                            <td>38</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10356&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9190</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10356&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Vũ
                                    Duy Hoàng</a></td>
                            <td>
                                <p style="color:green;">Phòng KD10</p>
                            </td>
                            <td>16</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=10356">11</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10356&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">15.310.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">220</td>
                            <td class="colNumber">8,46</td>
                        </tr>
                        <tr class="even">
                            <td>39</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11292&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10127</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11292&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lê
                                    Trung Nghĩa</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Nhóm KD4_ThịnhNQG</p>
                            </td>
                            <td>1</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8894&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">329</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11292">2</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11292&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1.501.500</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">369</td>
                            <td class="colNumber">14,19</td>
                        </tr>
                        <tr>
                            <td>40</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11276&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10111</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11276&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Võ
                                    Việt Quốc Đại</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Sale Marketing</p>
                            </td>
                            <td>1</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8877&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">541</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11276">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11276&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10.098.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">601</td>
                            <td class="colNumber">23,12</td>
                        </tr>
                        <tr class="even">
                            <td>41</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11317&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10152</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11317&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Hoàng
                                    Thị Ái Nhãn</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Ecome Care HCM</p>
                            </td>
                            <td>0</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8918&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">30</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8918&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11317">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11317&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">11.502.500</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">95</td>
                            <td class="colNumber">3,65</td>
                        </tr>
                        <tr>
                            <td>42</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11064&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9917</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11064&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Văn
                                    Thị Cẩm Hà</a></td>
                            <td>
                                <p style="color:green;">Phòng KD 01</p>
                            </td>
                            <td>5</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11064">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">20</td>
                            <td class="colNumber">0,77</td>
                        </tr>
                        <tr class="even">
                            <td>43</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9879&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8740</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9879&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Thái
                                    Phạm Mỹ Linh</a></td>
                            <td>
                                <p style="color:green;">NHANH.VN HCM</p>
                            </td>
                            <td>24</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>44</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9812&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8673</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9812&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Thị Ngọc Trầm</a></td>
                            <td>
                                <p style="color:green;">Phòng KD10</p>
                            </td>
                            <td>25</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=9812">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9812&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6.600.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">60</td>
                            <td class="colNumber">2,31</td>
                        </tr>
                        <tr class="even">
                            <td>45</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11063&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9916</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11063&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Tạ
                                    Thị Thùy Linh</a></td>
                            <td>
                                <p style="color:green;">Tuyển dụng</p>
                            </td>
                            <td>5</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>46</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11271&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10106</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11271&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Hồ
                                    Thị Thanh Mai</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - SEO GG MAPS</p>
                            </td>
                            <td>1</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8872&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11271">6</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11271&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10.172.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">121</td>
                            <td class="colNumber">4,65</td>
                        </tr>
                        <tr class="even">
                            <td>47</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9481&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8375</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9481&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trịnh
                                    Thị Phương Nhi</a></td>
                            <td>
                                <p style="color:green;">Phòng KD 01</p>
                            </td>
                            <td>28</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=9481">5</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9481&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">18.224.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">100</td>
                            <td class="colNumber">3,85</td>
                        </tr>
                        <tr>
                            <td>48</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11047&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9906</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11047&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Viết Lâm</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Phòng KD8_LâmNV</p>
                            </td>
                            <td></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8654&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8654&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=5">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11047">16</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11047&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">40.387.500</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">326</td>
                            <td class="colNumber">12,54</td>
                        </tr>
                        <tr class="even">
                            <td>49</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9207&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8140</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9207&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lê
                                    Quỳnh Thủy Tiên</a></td>
                            <td>
                                <p style="color:green;">Kế toán</p>
                            </td>
                            <td>30</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr>
                            <td>50</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11324&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10159</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11324&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lê
                                    Thị Trang</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Ecome Care HCM</p>
                            </td>
                            <td>0</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8925&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">40</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11324">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11324&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3.465.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">60</td>
                            <td class="colNumber">2,31</td>
                        </tr>
                        <tr class="even">
                            <td>51</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11300&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10135</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11300&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Thị Phương Thảo</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Sale Marketing</p>
                            </td>
                            <td>0</td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/activity/indexvg?createdById=8902&amp;createdDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;type=2&amp;status=">102</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=11300">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11300&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">13.512.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">182</td>
                            <td class="colNumber">7</td>
                        </tr>
                        <tr>
                            <td>52</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7790&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6846</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7790&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Duy Hưng</a></td>
                            <td>
                                <p style="color:green;">Phòng KD10</p>
                            </td>
                            <td>45</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=7790">7</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7790&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">14.500.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">140</td>
                            <td class="colNumber">5,38</td>
                        </tr>
                        <tr class="even">
                            <td>53</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7389&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6448</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7389&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Hồ
                                    Phạm Ngọc Tiên</a></td>
                            <td>
                                <p style="color:green;">Sàn Vật Giá HCM</p>
                            </td>
                            <td>50</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=7389">1</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">20</td>
                            <td class="colNumber">0,77</td>
                        </tr>
                        <tr>
                            <td>54</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=4785&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3996</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=4785&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                    Văn Anh Vũ</a></td>
                            <td>
                                <p style="color:green;">Phòng KD ĐDV</p>
                            </td>
                            <td>71</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=4785">3</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=4785&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">14.850.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">60</td>
                            <td class="colNumber">2,31</td>
                        </tr>
                        <tr class="even">
                            <td>55</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1289&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2497</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1289&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Đỗ
                                    Văn Thảo</a></td>
                            <td>
                                <p style="color:green;">Phòng KD 8</p>
                            </td>
                            <td>85</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=1289">6</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1289&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">29.400.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">120</td>
                            <td class="colNumber">4,62</td>
                        </tr>
                        <tr>
                            <td>56</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1257&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1412</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1257&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phan
                                    Vũ Như Quỳnh</a></td>
                            <td>
                                <p style="color:green;">Phòng KD 01</p>
                            </td>
                            <td>117</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=1257">13</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1257&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">50.025.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">260</td>
                            <td class="colNumber">10</td>
                        </tr>
                        <tr class="even">
                            <td>57</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1223&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4926</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1223&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phan
                                    Thành Quang</a></td>
                            <td>
                                <p style="color:green;">Nhóm KD 24</p>
                            </td>
                            <td>60</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=1223">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1223&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3.960.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">20</td>
                            <td class="colNumber">0,77</td>
                        </tr>
                        <tr>
                            <td>58</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1084&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2833</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1084&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lưu
                                    Thị Ngọc Bích</a></td>
                            <td>
                                <p style="color:green;">Kế toán</p>
                            </td>
                            <td>82</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>59</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1075&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4062</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1075&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Hứa
                                    Thị Mai Ngân</a></td>
                            <td>
                                <p style="color:green;">Nhanh HCM - Phòng KD1_NgânHTM</p>
                            </td>
                            <td>70</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=1075">13</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1075&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">47.230.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">260</td>
                            <td class="colNumber">10</td>
                        </tr>
                        <tr>
                            <td>60</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=954&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1602</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=954&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Thiện Tâm</a></td>
                            <td>
                                <p style="color:green;">Phòng KD Bảo Kim &amp; Wesave</p>
                            </td>
                            <td>99</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=954">4</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=954&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">14.588.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">80</td>
                            <td class="colNumber">3,08</td>
                        </tr>
                        <tr class="even">
                            <td>61</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=951&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1601</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=951&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Hoàng Long</a></td>
                            <td>
                                <p style="color:green;">Phòng KD10</p>
                            </td>
                            <td>99</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=951">9</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=951&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">50.154.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">180</td>
                            <td class="colNumber">6,92</td>
                        </tr>
                        <tr>
                            <td>62</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=950&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1375</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=950&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Bùi
                                    Thanh Thịnh</a></td>
                            <td>
                                <p style="color:green;">O1 Marketplaces</p>
                            </td>
                            <td>121</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="even">
                            <td>63</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=937&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1308</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=937&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phạm
                                    Văn Phú</a></td>
                            <td>
                                <p style="color:green;">Phòng giám đốc</p>
                            </td>
                            <td>162</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/contract/index?applyTransactionDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;commissionEmployeeId=937">1</a>
                            </td>
                            <td class="colNumber"><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=937&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">28.820.000</a>
                            </td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">20</td>
                            <td class="colNumber">0,77</td>
                        </tr>
                        <tr class="rowSum">
                            <td colspan="5"><b>Tổng</b></td>
                            <td class="colNumber">6.529</td>
                            <td class="colNumber">188</td>
                            <td class="colNumber">132</td>
                            <td class="colNumber">354</td>
                            <td class="colNumber">989.434.057</td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber">16.149</td>
                            <td class="colNumber"></td>
                        </tr>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-md-6 dgButtons"></div>
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
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/carekpi.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/bootstrap-multiselect.js') }}"></script>
@endsection