@extends('Layout.master4')

@section('css')
    <link rel="stylesheet" href="{{ asset('asset/css/accounting/report/style.css') }}">
@endsection

@section('title', 'ERP-Báo cáo theo khoản mục thu chi')

@section('content-page')

    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li class="active">Báo cáo theo khoản mục thu chi</li>
        </ul>
        <div class="filterContainer">
            <form method="GET" name="crmReportEmployeesFilter" class="form-inline lolify"
                role="form" id="crmReportEmployeesFilter">
                <div class="col-md-10 lolify-default">

                    <div class="form-group">
                        <input type="text" name="daterangepicker" placeholder="Tháng"
                            data-date-format="MM/YYYY" id="daterangepicker"
                            class="form-control hasDatepicker" value="07/2020"> </div>
                    <div class="form-group">
                        <select name="companyId" id="companyId" class="form-control">
                            <option value="">- Công ty giao dịch -</option>
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
                            <option value="402">--Công ty TNHH Nguồn Nhân Lực Elite Việt Nam
                            </option>
                        </select> </div>
                    <div class="form-group">
                        <select name="accountId" style="min-width:250px" id="accountId"
                            class="form-control select2-hidden-accessible" tabindex="-1"
                            aria-hidden="true">
                            <option value="">- Quỹ -</option>
                            <option value="321">Tiền chuyển khoản</option>
                            <option value="880" selected="selected">-- Khối KD độc lập (CK)</option>
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
                            dir="ltr" style="width: 250px;"><span class="selection"><span
                                    class="select2-selection select2-selection--single"
                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                    tabindex="0" aria-labelledby="select2-accountId-container"><span
                                        class="select2-selection__rendered"
                                        id="select2-accountId-container"
                                        title="-- Khối KD độc lập (CK)">-- Khối KD độc lập
                                        (CK)</span><span class="select2-selection__arrow"
                                        role="presentation"><b
                                            role="presentation"></b></span></span></span><span
                                class="dropdown-wrapper" aria-hidden="true"></span></span> </div>
                    <div class="form-group">
                        <input name="submit" type="submit" id="btnFilterCrmContact"
                            class="form-control btn btn-primary" value="Lọc"> </div>

                </div>
                <div class="col-md-2 lolify-control">
                    <div class="btn-group pull-right lolify-features" data-toggle="tooltip"
                        data-placement="top" title="" data-original-title="Chức năng, thao tác"
                        aria-describedby="tooltip198839">
                        <button class="btn dropdown-toggle" type="button" aria-haspopup="true"
                            aria-expanded="false" data-toggle="dropdown">
                            <span class="fa fa-cog"></span> <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a
                                    href="https://erp.nhanh.vn/accounting/report/expensecategory?daterangepicker=07%2F2020&amp;companyId=10&amp;accountId=880&amp;submit=L%E1%BB%8Dc&amp;format=excel"><i
                                        class="fa fa-download fa-lg"></i> Xuất excel</a></li>
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
                        <select name="contractStatus" id="contractStatus" class="form-control">
                            <option value="">-- Loại phiếu --</option>
                            <option value="1">Phiếu thu hợp đồng</option>
                            <option value="-1">Phiếu thu chi ngoài hợp đồng</option>
                        </select> </div>

                </div>
            </form>
            <div class="clearfix"></div>
            <div class="lolify-left-menu" style="display: none;">
            </div>
        </div>
        <div class="alert alert-info">Bạn đang xem thông tin quỹ <b class="text-danger">Tiền chuyển
                khoản &gt; Khối KD độc lập (CK)</b>
            <br> Tồn đầu kỳ: <b>297,438,021</b>
            <br> Tổng thu trong kỳ: <b>60,737,000</b>
            <br> Tổng chi trong kỳ: <b>90,960,480</b>
        </div>
        <div class="dgContainer">
            <div style="display: none; width: 1556px;" class="stickyHeader">
                <table class="table table-bordered" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr class="even">
                            <th rowspan="2" style="width: 438px;">Ngày</th>
                            <th rowspan="2" style="width: 277px;">Quỹ (trước giao dịch)</th>
                            <th rowspan="2" style="width: 252px;">Quỹ (sau giao dịch)</th>
                            <th colspan="3" style="width: 588px;">Chi tiết giao dịch</th>
                        </tr>
                        <tr>
                            <th style="width: 260px;">Khoản mục</th>
                            <th style="width: 164px;">Thu</th>
                            <th style="width: 164px;">Chi</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div style="clear: both;"></div><br>
            </div>
            <table id="dgCrmReportExpenseCategory" class="table table-bordered">
                <thead>
                    <tr class="even">
                        <th rowspan="2">Ngày</th>
                        <th rowspan="2">Quỹ (trước giao dịch)</th>
                        <th rowspan="2">Quỹ (sau giao dịch)</th>
                        <th colspan="3">Chi tiết giao dịch</th>
                    </tr>
                    <tr>
                        <th>Khoản mục</th>
                        <th>Thu</th>
                        <th>Chi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="even">
                        <td rowspan="">01</td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                    </tr>
                    <tr>
                        <td rowspan="">02</td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                    </tr>
                    <tr class="even">
                        <td rowspan="">03</td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                    </tr>
                    <tr class="warning">
                        <td rowspan="">04</td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                    </tr>
                    <tr class="success even">
                        <td rowspan="">05</td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                    </tr>
                    <tr trid="7" class="trid-7">
                        <td rowspan="2">06</td>
                        <td rowspan="2">297,438,021</td>
                        <td rowspan="2">297,638,021</td>
                    </tr>
                    <tr trid="7" class="trid-7 even">
                        <td>Thu hợp đồng</td>
                        <td class="colNumber"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/transaction?companyId=10&amp;applyDaterange=06%2F07%2F2020%20-%2006%2F07%2F2020&amp;accountingTransactionId=880&amp;type=3">200,000</a>
                        </td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr trid="9" class="trid-9">
                        <td rowspan="2">07</td>
                        <td rowspan="2">297,638,021</td>
                        <td rowspan="2">300,338,021</td>
                    </tr>
                    <tr trid="9" class="trid-9 even">
                        <td>Thu hợp đồng</td>
                        <td class="colNumber"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/transaction?companyId=10&amp;applyDaterange=07%2F07%2F2020%20-%2007%2F07%2F2020&amp;accountingTransactionId=880&amp;type=3">2,700,000</a>
                        </td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr trid="11" class="trid-11">
                        <td rowspan="2">08</td>
                        <td rowspan="2">300,338,021</td>
                        <td rowspan="2">275,613,421</td>
                    </tr>
                    <tr trid="11" class="trid-11 even">
                        <td>Chi thuê văn phòng</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction?applyDateRange=08%2F07%2F2020%20-%2008%2F07%2F2020&amp;0=type&amp;accountId=880&amp;type=4">24,724,600</a>
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="">09</td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                    </tr>
                    <tr trid="14" class="trid-14 even">
                        <td rowspan="2">10</td>
                        <td rowspan="2">275,613,421</td>
                        <td rowspan="2">228,687,421</td>
                    </tr>
                    <tr trid="14" class="trid-14">
                        <td>Chi lương</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction?applyDateRange=10%2F07%2F2020%20-%2010%2F07%2F2020&amp;0=type&amp;accountId=880&amp;type=4">46,926,000</a>
                        </td>
                    </tr>
                    <tr class="warning even">
                        <td rowspan="">11</td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                    </tr>
                    <tr class="success">
                        <td rowspan="">12</td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                    </tr>
                    <tr trid="18" class="trid-18 even">
                        <td rowspan="2">13</td>
                        <td rowspan="2">228,687,421</td>
                        <td rowspan="2">245,187,421</td>
                    </tr>
                    <tr trid="18" class="trid-18">
                        <td>Thu hợp đồng</td>
                        <td class="colNumber"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/transaction?companyId=10&amp;applyDaterange=13%2F07%2F2020%20-%2013%2F07%2F2020&amp;accountingTransactionId=880&amp;type=3">16,500,000</a>
                        </td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr trid="20" class="trid-20 even">
                        <td rowspan="2">14</td>
                        <td rowspan="2">245,187,421</td>
                        <td rowspan="2">253,107,421</td>
                    </tr>
                    <tr trid="20" class="trid-20">
                        <td>Thu hợp đồng</td>
                        <td class="colNumber"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/transaction?companyId=10&amp;applyDaterange=14%2F07%2F2020%20-%2014%2F07%2F2020&amp;accountingTransactionId=880&amp;type=3">7,920,000</a>
                        </td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr trid="22" class="trid-22 even">
                        <td rowspan="2">15</td>
                        <td rowspan="2">253,107,421</td>
                        <td rowspan="2">254,347,421</td>
                    </tr>
                    <tr trid="22" class="trid-22">
                        <td>Thu hợp đồng</td>
                        <td class="colNumber"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/transaction?companyId=10&amp;applyDaterange=15%2F07%2F2020%20-%2015%2F07%2F2020&amp;accountingTransactionId=880&amp;type=3">1,240,000</a>
                        </td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr trid="24" class="trid-24 even">
                        <td rowspan="3">16</td>
                        <td rowspan="3">254,347,421</td>
                        <td rowspan="3">242,162,541</td>
                    </tr>
                    <tr trid="24" class="trid-24">
                        <td>Thu hợp đồng</td>
                        <td class="colNumber"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/transaction?companyId=10&amp;applyDaterange=16%2F07%2F2020%20-%2016%2F07%2F2020&amp;accountingTransactionId=880&amp;type=3">7,125,000</a>
                        </td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr trid="24" class="trid-24 even">
                        <td>Chi bảo hiểm</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/accounting/transaction?applyDateRange=16%2F07%2F2020%20-%2016%2F07%2F2020&amp;0=type&amp;accountId=880&amp;type=4">19,309,880</a>
                        </td>
                    </tr>
                    <tr trid="27" class="trid-27">
                        <td rowspan="2">17</td>
                        <td rowspan="2">242,162,541</td>
                        <td rowspan="2">248,762,541</td>
                    </tr>
                    <tr trid="27" class="trid-27 even">
                        <td>Thu hợp đồng</td>
                        <td class="colNumber"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/transaction?companyId=10&amp;applyDaterange=17%2F07%2F2020%20-%2017%2F07%2F2020&amp;accountingTransactionId=880&amp;type=3">6,600,000</a>
                        </td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr class="warning">
                        <td rowspan="">18</td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                    </tr>
                    <tr class="success even">
                        <td rowspan="">19</td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                    </tr>
                    <tr>
                        <td rowspan="">20</td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                    </tr>
                    <tr trid="32" class="trid-32 even">
                        <td rowspan="2">21</td>
                        <td rowspan="2">248,762,541</td>
                        <td rowspan="2">252,722,541</td>
                    </tr>
                    <tr trid="32" class="trid-32">
                        <td>Thu hợp đồng</td>
                        <td class="colNumber"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/transaction?companyId=10&amp;applyDaterange=21%2F07%2F2020%20-%2021%2F07%2F2020&amp;accountingTransactionId=880&amp;type=3">3,960,000</a>
                        </td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr trid="34" class="trid-34 even">
                        <td rowspan="2">22</td>
                        <td rowspan="2">252,722,541</td>
                        <td rowspan="2">256,682,541</td>
                    </tr>
                    <tr trid="34" class="trid-34">
                        <td>Thu hợp đồng</td>
                        <td class="colNumber"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/transaction?companyId=10&amp;applyDaterange=22%2F07%2F2020%20-%2022%2F07%2F2020&amp;accountingTransactionId=880&amp;type=3">3,960,000</a>
                        </td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr class="even">
                        <td rowspan="">23</td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                    </tr>
                    <tr trid="37" class="trid-37">
                        <td rowspan="2">24</td>
                        <td rowspan="2">256,682,541</td>
                        <td rowspan="2">260,682,541</td>
                    </tr>
                    <tr trid="37" class="trid-37 even">
                        <td>Thu hợp đồng</td>
                        <td class="colNumber"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/transaction?companyId=10&amp;applyDaterange=24%2F07%2F2020%20-%2024%2F07%2F2020&amp;accountingTransactionId=880&amp;type=3">4,000,000</a>
                        </td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr class="warning">
                        <td rowspan="">25</td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                    </tr>
                    <tr class="success even">
                        <td rowspan="">26</td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                    </tr>
                    <tr>
                        <td rowspan="">27</td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                    </tr>
                    <tr class="even">
                        <td rowspan="">28</td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                    </tr>
                    <tr>
                        <td rowspan="">29</td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                    </tr>
                    <tr class="even">
                        <td rowspan="">30</td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                        <td rowspan=""></td>
                    </tr>
                    <tr trid="45" class="trid-45">
                        <td rowspan="2">31</td>
                        <td rowspan="2">260,682,541</td>
                        <td rowspan="2">267,214,541</td>
                    </tr>
                    <tr trid="45" class="trid-45 even">
                        <td>Thu hợp đồng</td>
                        <td class="colNumber"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/transaction?companyId=10&amp;applyDaterange=31%2F07%2F2020%20-%2031%2F07%2F2020&amp;accountingTransactionId=880&amp;type=3">6,532,000</a>
                        </td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr>
                        <td><b>Tổng Quỹ (Còn lại sau giảm trừ)</b></td>
                        <td colspan="5"><b>267,214,541</b></td>
                    </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
            </div>
        </div>
        <style>
            .table .rowSat {
                background-color: #FAFAFA;
            }

            .table .rowSun {
                background-color: #F0F0F0;
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


@endsection
