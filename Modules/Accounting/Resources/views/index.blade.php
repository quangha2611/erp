@extends('Layout.master4')

@section('css')
    <link rel="stylesheet" href="{{ asset('asset/css/accounting/transaction/style.css') }}" type="text/css">
@endsection

@section('title', 'ERP-Danh sách phiếu thu chi')

@section('content-page')

    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/accounting"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/accounting/account/index">Danh sách phiếu yêu cầu thu
                    chi</a></li>
        </ul>
        <div class="filterContainer">
            <form method="GET" name="transactionFilter" class="form-inline lolify" role="form"
                id="transactionFilter">
                <div class="col-md-10 lolify-default">

                    <div class="form-group">
                        <input type="text" name="id" placeholder="ID" id="id" class="form-control"
                            value=""> </div>
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
                        <select name="accountId" style="min-width:230px" id="accountId"
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
                        </select><span
                            class="select2 select2-container select2-container--default select2-container--below"
                            dir="ltr" style="width: 230px;"><span class="selection"><span
                                    class="select2-selection select2-selection--single"
                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                    tabindex="0" aria-labelledby="select2-accountId-container"><span
                                        class="select2-selection__rendered"
                                        id="select2-accountId-container" title="- Quỹ -">- Quỹ
                                        -</span><span class="select2-selection__arrow"
                                        role="presentation"><b
                                            role="presentation"></b></span></span></span><span
                                class="dropdown-wrapper" aria-hidden="true"></span></span> </div>
                    <input type="hidden" name="createdById" id="createdById" class="form-control"
                        value=""> <input type="hidden" name="approvedById" id="approvedById"
                        class="form-control" value=""> <input type="hidden" name="statusActive"
                        id="statusActive" class="form-control" value="">
                    <div class="form-group">
                        <input type="text" name="description" placeholder="Ghi chú" id="description"
                            class="form-control" value=""> </div>
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
                            <li><a id="exportPage"
                                    href="https://erp.nhanh.vn/accounting/transaction#"><i
                                        class="fa fa-file-excel-o"></i> Xuất 1 trang hiện tại</a>
                            </li>
                            <li><a id="exportAll"
                                    href="https://erp.nhanh.vn/accounting/transaction#"><i
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
                        <select name="expenseCategoryId" style="min-width:200px"
                            id="expenseCategoryId" class="form-control select2-hidden-accessible"
                            tabindex="-1" aria-hidden="true">
                            <option value="">- Danh mục thu chi -</option>
                            <option value="28">Thu khác</option>
                            <option value="149">Chi khác</option>
                            <option value="147">Thuê văn phòng chi nhánh Đà Nẵng</option>
                            <option value="151">Chi tiền điện</option>
                            <option value="150">Chi tiền mặt</option>
                            <option value="148">Chi tiền internet</option>
                        </select><span
                            class="select2 select2-container select2-container--default select2-container--below"
                            dir="ltr" style="width: auto;"><span class="selection"><span
                                    class="select2-selection select2-selection--single"
                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                    tabindex="0"
                                    aria-labelledby="select2-expenseCategoryId-container"><span
                                        class="select2-selection__rendered"
                                        id="select2-expenseCategoryId-container"
                                        title="- Danh mục thu chi -">- Danh mục thu chi
                                        -</span><span class="select2-selection__arrow"
                                        role="presentation"><b
                                            role="presentation"></b></span></span></span><span
                                class="dropdown-wrapper" aria-hidden="true"></span></span> </div>
                    <div class="form-group">
                        <select name="type" id="type" class="form-control">
                            <option value="">- Loại phiếu -</option>
                            <option value="1">Báo nợ (Rút tiền)</option>
                            <option value="2">Báo có (Nộp tiền)</option>
                            <option value="3">Phiếu thu</option>
                            <option value="4">Phiếu chi</option>
                        </select> </div>
                    <div class="form-group">
                        <select name="status" id="status" class="form-control">
                            <option value="">- Trạng thái -</option>
                            <option value="1">Mới</option>
                            <option value="2">Đã duyệt</option>
                            <option value="3">Đã hạch toán</option>
                            <option value="4">Đã xác nhận</option>
                            <option value="5">Hủy</option>
                        </select> </div>
                    <div class="form-group">
                        <input type="text" name="applyDateRange" placeholder="Ngày hạch toán"
                            class="form-control date-range-picker" id="applyDateRange" value="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="approvedDateRange" placeholder="Ngày duyệt"
                            class="form-control date-range-picker" id="approvedDateRange" value="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="createdByName" placeholder="Người tạo"
                            id="createdByName" class="form-control ui-autocomplete-input" value=""
                            autocomplete="off"> </div>
                    <div class="form-group">
                        <input type="text" name="approvedByName" placeholder="Người duyệt"
                            id="approvedByName" class="form-control ui-autocomplete-input" value=""
                            autocomplete="off"> </div>
                    <div class="form-group">
                        <select name="payStatus" id="payStatus" class="form-control">
                            <option value="">- Hoàn thu phiếu chi -</option>
                            <option value="1">Đã hoàn thu</option>
                            <option value="2">Chưa hoàn thu</option>
                        </select> </div>

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
                            <th style="width: 52px;">ID</th>
                            <th style="width: 145px;">Công ty</th>
                            <th style="width: 106px;">Ngày hạch toán</th>
                            <th style="width: 77px;">Loại phiếu</th>
                            <th style="width: 214px;">Quỹ</th>
                            <th style="width: 102px;">Giá trị</th>
                            <th style="width: 168px;">Người tạo</th>
                            <th style="width: 150px;">Duyệt</th>
                            <th style="width: 100px;">Trạng thái</th>
                            <th style="width: 410px;">Diễn giải</th>
                            <th style="width: 31px;"><i class="fa fa-edit icon"></i></th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div class="col-md-6 paginatorItem">
                    <div class="paginator"><span class="labelPages">1 - 30 / 11,631</span><span
                            class="disabled fa fa-step-backward"></span><span
                            class="disabled fa fa-backward"></span><a class="fa fa-forward"
                            href="https://erp.nhanh.vn/accounting/transaction?page=2"
                            title="Trang sau"></a> <a class="fa fa-step-forward"
                            href="https://erp.nhanh.vn/accounting/transaction?page=388"
                            title="Trang cuối"></a></div>
                </div>
                <div style="clear: both;"></div><br>
            </div>
            <table id="dgTransaction" class="table table-bordered">
                <thead>
                    <tr class="even h">
                        <th>ID</th>
                        <th>Công ty</th>
                        <th>Ngày hạch toán</th>
                        <th>Loại phiếu</th>
                        <th>Quỹ</th>
                        <th>Giá trị</th>
                        <th>Người tạo</th>
                        <th>Duyệt</th>
                        <th>Trạng thái</th>
                        <th>Diễn giải</th>
                        <th><i class="fa fa-edit icon"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=77160">77160</a>
                        </td>
                        <td>Vật giá - Hồ Chí Minh</td>
                        <td>31/07/2020</td>
                        <td><b class="text-info">Phiếu thu</b><br></td>
                        <td class="colControls">
                            <div>Nhanh HCM 2019 (Tiền mặt)</div>
                        </td>
                        <td class="colNumber">330.000</td>
                        <td>
                            <div>Huỳnh Ngọc Hải</div>
                            <div><i class="date">31/07/2020 15:58:48</i></div>
                        </td>
                        <td class="colControls">
                            <div class="text-success">Hứa Thị Mai Ngân</div>
                            <div class="text-success"><i class="date">31/07/2020 16:00:28</i></div>
                        </td>
                        <td class="colControls"><b data-toggle="tooltip" title=""
                                data-original-title="Đã hạch toán">Đã hạch toán</b></td>
                        <td>tiền thừa mua CPU máy vi tính</td>
                        <td class="colControls"></td>
                    </tr>
                    <tr class="even">
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=77157">77157</a>
                        </td>
                        <td>Nhanh.vn</td>
                        <td>31/07/2020</td>
                        <td><b class="text-danger">Phiếu chi</b><br></td>
                        <td class="colControls">
                            <div>Nhanh HN 2019 (Tiền mặt)</div>
                        </td>
                        <td class="colNumber">6.930.000</td>
                        <td>
                            <div>Tạ Thị Hoa</div>
                            <div><i class="date">31/07/2020 15:17:44</i></div>
                        </td>
                        <td class="colControls">
                            <div class="text-success">nguyễn quỳnh dương</div>
                            <div class="text-success"><i class="date">31/07/2020 15:22:41</i></div>
                        </td>
                        <td class="colControls"><b data-toggle="tooltip" title="Đã hạch toán">Đã
                                hạch toán</b></td>
                        <td>Chi phí hội thảo Kho 08/07</td>
                        <td class="colControls"></td>
                    </tr>
                    <tr>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=77156">77156</a>
                        </td>
                        <td>Nhanh.vn</td>
                        <td>31/07/2020</td>
                        <td><b class="text-danger">Phiếu chi</b><br></td>
                        <td class="colControls">
                            <div>Nhanh Đà Nẵng(CK)</div>
                        </td>
                        <td class="colNumber">2.570.779</td>
                        <td>
                            <div>Nguyễn Thị Huyền</div>
                            <div><i class="date">31/07/2020 15:17:21</i></div>
                        </td>
                        <td class="colControls">
                            <div class="text-success">nguyễn quỳnh dương</div>
                            <div class="text-success"><i class="date">31/07/2020 15:25:14</i></div>
                        </td>
                        <td class="colControls"><b data-toggle="tooltip" title="Đã hạch toán">Đã
                                hạch toán</b></td>
                        <td>Thuế VAT quý 2.20 ( 2 374 477)
                            Thuế TNCN quý ...</td>
                        <td class="colControls"></td>
                    </tr>
                    <tr class="even">
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=77152">77152</a>
                        </td>
                        <td>Nhanh.vn</td>
                        <td>31/07/2020</td>
                        <td><b class="text-danger">Phiếu chi</b><br></td>
                        <td class="colControls">
                            <div>Vận chuyển Nhanh</div>
                        </td>
                        <td class="colNumber">3.052.698.642</td>
                        <td>
                            <div>trần thị Ánh tuyết</div>
                            <div><i class="date">31/07/2020 14:57:01</i></div>
                        </td>
                        <td class="colControls"><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=77152">Duyệt</a>
                        </td>
                        <td class="colControls"><b>Chưa duyệt</b></td>
                        <td>THANH TOÁN COD CHO DN NHANH NGÀY 31.07</td>
                        <td class="colControls"><a class="fa fa-edit icon"
                                href="https://erp.nhanh.vn/accounting/transaction/editreq?id=77152"></a>
                        </td>
                    </tr>
                    <tr>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=77151">77151</a>
                        </td>
                        <td>Nhanh.vn</td>
                        <td>31/07/2020</td>
                        <td><b class="text-info">Phiếu thu</b><br></td>
                        <td class="colControls">
                            <div>Vận chuyển Nhanh</div>
                        </td>
                        <td class="colNumber">308.681.850</td>
                        <td>
                            <div>trần thị Ánh tuyết</div>
                            <div><i class="date">31/07/2020 14:56:18</i></div>
                        </td>
                        <td class="colControls"><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=77151">Duyệt</a>
                        </td>
                        <td class="colControls"><b>Chưa duyệt</b></td>
                        <td>THU COD VIETTEL 31.07</td>
                        <td class="colControls"><a class="fa fa-edit icon"
                                href="https://erp.nhanh.vn/accounting/transaction/editreq?id=77151"></a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=77150">77150</a>
                        </td>
                        <td>Nhanh.vn</td>
                        <td>31/07/2020</td>
                        <td><b class="text-info">Phiếu thu</b><br></td>
                        <td class="colControls">
                            <div>Vận chuyển Nhanh</div>
                        </td>
                        <td class="colNumber">170.470.025</td>
                        <td>
                            <div>trần thị Ánh tuyết</div>
                            <div><i class="date">31/07/2020 14:55:48</i></div>
                        </td>
                        <td class="colControls"><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=77150">Duyệt</a>
                        </td>
                        <td class="colControls"><b>Chưa duyệt</b></td>
                        <td>THU COD ECOTRANS 31.07</td>
                        <td class="colControls"><a class="fa fa-edit icon"
                                href="https://erp.nhanh.vn/accounting/transaction/editreq?id=77150"></a>
                        </td>
                    </tr>
                    <tr>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=77149">77149</a>
                        </td>
                        <td>Nhanh.vn</td>
                        <td>31/07/2020</td>
                        <td><b class="text-info">Phiếu thu</b><br></td>
                        <td class="colControls">
                            <div>Vận chuyển Nhanh</div>
                        </td>
                        <td class="colNumber">1.973.445.223</td>
                        <td>
                            <div>trần thị Ánh tuyết</div>
                            <div><i class="date">31/07/2020 14:55:24</i></div>
                        </td>
                        <td class="colControls"><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=77149">Duyệt</a>
                        </td>
                        <td class="colControls"><b>Chưa duyệt</b></td>
                        <td>THU COD GHN 31.07</td>
                        <td class="colControls"><a class="fa fa-edit icon"
                                href="https://erp.nhanh.vn/accounting/transaction/editreq?id=77149"></a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=77148">77148</a>
                        </td>
                        <td>Nhanh.vn</td>
                        <td>31/07/2020</td>
                        <td><b class="text-info">Phiếu thu</b><br></td>
                        <td class="colControls">
                            <div>Vận chuyển Nhanh</div>
                        </td>
                        <td class="colNumber">216.286.387</td>
                        <td>
                            <div>trần thị Ánh tuyết</div>
                            <div><i class="date">31/07/2020 14:54:48</i></div>
                        </td>
                        <td class="colControls"><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=77148">Duyệt</a>
                        </td>
                        <td class="colControls"><b>Chưa duyệt</b></td>
                        <td>THU COD VNPOST 31.07</td>
                        <td class="colControls"><a class="fa fa-edit icon"
                                href="https://erp.nhanh.vn/accounting/transaction/editreq?id=77148"></a>
                        </td>
                    </tr>
                    <tr>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=77147">77147</a>
                        </td>
                        <td>Nhanh.vn</td>
                        <td>31/07/2020</td>
                        <td><b class="text-info">Phiếu thu</b><br></td>
                        <td class="colControls">
                            <div>Vận chuyển Nhanh</div>
                        </td>
                        <td class="colNumber">540.629.159</td>
                        <td>
                            <div>trần thị Ánh tuyết</div>
                            <div><i class="date">31/07/2020 14:54:18</i></div>
                        </td>
                        <td class="colControls"><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=77147">Duyệt</a>
                        </td>
                        <td class="colControls"><b>Chưa duyệt</b></td>
                        <td>THU COD J&amp;T 31.07</td>
                        <td class="colControls"><a class="fa fa-edit icon"
                                href="https://erp.nhanh.vn/accounting/transaction/editreq?id=77147"></a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=77130">77130</a>
                        </td>
                        <td>Nhanh.vn</td>
                        <td>31/07/2020</td>
                        <td><b class="text-danger">Phiếu chi</b><br></td>
                        <td class="colControls">
                            <div>Nhanh HN 2019 (Chuyển khoản)</div>
                        </td>
                        <td class="colNumber">3.698.000</td>
                        <td>
                            <div>Phạm Nguyên Tùng</div>
                            <div><i class="date">31/07/2020 13:29:30</i></div>
                        </td>
                        <td class="colControls">
                            <div class="text-success">Lê Trung Đức</div>
                            <div class="text-success"><i class="date">31/07/2020 16:00:31</i></div>
                        </td>
                        <td class="colControls"><b data-toggle="tooltip" title="Đã hạch toán">Đã
                                hạch toán</b></td>
                        <td>Khách mua phần cứng không lấy VAT nhưng chuyển khoản ...</td>
                        <td class="colControls"></td>
                    </tr>
                    <tr>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=77116">77116</a>
                        </td>
                        <td>Nhanh.vn</td>
                        <td>31/07/2020</td>
                        <td><b class="text-danger">Phiếu chi</b><br></td>
                        <td class="colControls">
                            <div>Nhanh HN 2019 (Chuyển khoản)</div>
                        </td>
                        <td class="colNumber">1.374.758.959</td>
                        <td>
                            <div>Nguyễn Thị Hương</div>
                            <div><i class="date">31/07/2020 10:41:31</i></div>
                        </td>
                        <td class="colControls">
                            <div class="text-success">nguyễn quỳnh dương</div>
                            <div class="text-success"><i class="date">31/07/2020 15:11:58</i></div>
                        </td>
                        <td class="colControls"><b data-toggle="tooltip" title="Đã hạch toán">Đã
                                hạch toán</b></td>
                        <td>Chuyển tiền trả về TK Techcombank COD từ ngày 01/07/2020 ...</td>
                        <td class="colControls"></td>
                    </tr>
                    <tr class="even">
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=77115">77115</a>
                        </td>
                        <td>Vật giá - Hồ Chí Minh</td>
                        <td>31/07/2020</td>
                        <td><b class="text-info">Phiếu thu</b><br></td>
                        <td class="colControls">
                            <div>Khối KD độc lập (TM)</div>
                        </td>
                        <td class="colNumber">15.821.000</td>
                        <td>
                            <div>Lê Quỳnh Thủy Tiên</div>
                            <div><i class="date">31/07/2020 10:37:33</i></div>
                        </td>
                        <td class="colControls">
                            <div class="text-success">Bùi Thanh Thịnh</div>
                            <div class="text-success"><i class="date">31/07/2020 10:42:29</i></div>
                        </td>
                        <td class="colControls"><b data-toggle="tooltip" title="Đã hạch toán">Đã
                                hạch toán</b></td>
                        <td>Thu tiền từ quỹ WeSave HCM và Bizshare HCM.</td>
                        <td class="colControls"></td>
                    </tr>
                    <tr>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=77114">77114</a>
                        </td>
                        <td>Vật giá - Hồ Chí Minh</td>
                        <td>31/07/2020</td>
                        <td><b class="text-danger">Phiếu chi</b><br></td>
                        <td class="colControls">
                            <div>Bizshare HCM</div>
                        </td>
                        <td class="colNumber">1.089.000</td>
                        <td>
                            <div>Lê Quỳnh Thủy Tiên</div>
                            <div><i class="date">31/07/2020 10:35:36</i></div>
                        </td>
                        <td class="colControls">
                            <div class="text-success">Bùi Thanh Thịnh</div>
                            <div class="text-success"><i class="date">31/07/2020 10:41:54</i></div>
                        </td>
                        <td class="colControls"><b data-toggle="tooltip" title="Đã hạch toán">Đã
                                hạch toán</b></td>
                        <td>Chuyển tiền từ quỹ Bizshare HCM về quỹ Khối KD ...</td>
                        <td class="colControls"></td>
                    </tr>
                    <tr class="even">
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=77113">77113</a>
                        </td>
                        <td>Vật giá - Hồ Chí Minh</td>
                        <td>31/07/2020</td>
                        <td><b class="text-danger">Phiếu chi</b><br></td>
                        <td class="colControls">
                            <div>Wesave Hồ Chí Minh</div>
                        </td>
                        <td class="colNumber">14.732.000</td>
                        <td>
                            <div>Lê Quỳnh Thủy Tiên</div>
                            <div><i class="date">31/07/2020 10:32:59</i></div>
                        </td>
                        <td class="colControls">
                            <div class="text-success">Bùi Thanh Thịnh</div>
                            <div class="text-success"><i class="date">31/07/2020 10:42:14</i></div>
                        </td>
                        <td class="colControls"><b data-toggle="tooltip" title="Đã hạch toán">Đã
                                hạch toán</b></td>
                        <td>Chuyển tiền từ quỹ WeSave_WePos HCM về quỹ Khối KD ...</td>
                        <td class="colControls"></td>
                    </tr>
                    <tr>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=77105">77105</a>
                        </td>
                        <td>Nhanh.vn</td>
                        <td>31/07/2020</td>
                        <td><b class="text-danger">Phiếu chi</b><br></td>
                        <td class="colControls">
                            <div>Nhanh HN 2019 (Chuyển khoản)</div>
                        </td>
                        <td class="colNumber">72.055.000</td>
                        <td>
                            <div>Lê Quỳnh Anh</div>
                            <div><i class="date">31/07/2020 09:50:00</i></div>
                        </td>
                        <td class="colControls">
                            <div class="text-success">nguyễn quỳnh dương</div>
                            <div class="text-success"><i class="date">31/07/2020 11:02:27</i></div>
                        </td>
                        <td class="colControls"><b data-toggle="tooltip" title="Đã hạch toán">Đã
                                hạch toán</b></td>
                        <td>Nộp thuế TNCN quý 2.20</td>
                        <td class="colControls"></td>
                    </tr>
                    <tr class="even">
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=77103">77103</a>
                        </td>
                        <td>Nhanh.vn</td>
                        <td>31/07/2020</td>
                        <td><b class="text-danger">Phiếu chi</b><br></td>
                        <td class="colControls">
                            <div>Nhanh HN 2019 (Chuyển khoản)</div>
                        </td>
                        <td class="colNumber">137.635.000</td>
                        <td>
                            <div>Lê Quỳnh Anh</div>
                            <div><i class="date">31/07/2020 09:41:57</i></div>
                        </td>
                        <td class="colControls">
                            <div class="text-success">nguyễn quỳnh dương</div>
                            <div class="text-success"><i class="date">31/07/2020 11:05:28</i></div>
                        </td>
                        <td class="colControls"><b data-toggle="tooltip" title="Đã hạch toán">Đã
                                hạch toán</b></td>
                        <td>Nộp thuế VAT quý 2.20</td>
                        <td class="colControls"></td>
                    </tr>
                    <tr>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=77100">77100</a>
                        </td>
                        <td>Vật giá - Hồ Chí Minh</td>
                        <td>31/07/2020</td>
                        <td><b class="text-danger">Phiếu chi</b><br></td>
                        <td class="colControls">
                            <div>Nhanh HCM 2019 (Tiền mặt)</div>
                        </td>
                        <td class="colNumber">2.200.000</td>
                        <td>
                            <div>Huỳnh Ngọc Hải</div>
                            <div><i class="date">31/07/2020 09:27:09</i></div>
                        </td>
                        <td class="colControls">
                            <div class="text-success">Hứa Thị Mai Ngân</div>
                            <div class="text-success"><i class="date">31/07/2020 10:11:43</i></div>
                        </td>
                        <td class="colControls"><b data-toggle="tooltip" title="Đã hạch toán">Đã
                                hạch toán</b></td>
                        <td>Chi tiền mua màn hình máy vi tính</td>
                        <td class="colControls"></td>
                    </tr>
                    <tr class="even">
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=77088">77088</a>
                        </td>
                        <td>Vật giá - Hồ Chí Minh</td>
                        <td>30/07/2020</td>
                        <td><b class="text-danger">Phiếu chi</b><br></td>
                        <td class="colControls">
                            <div>Nhanh HCM 2019 (Tiền mặt)</div>
                        </td>
                        <td class="colNumber">1.334.000</td>
                        <td>
                            <div>Nguyễn Thị Thanh Tuyền</div>
                            <div><i class="date">30/07/2020 15:49:16</i></div>
                        </td>
                        <td class="colControls">
                            <div class="text-success">Hứa Thị Mai Ngân</div>
                            <div class="text-success"><i class="date">30/07/2020 16:30:10</i></div>
                        </td>
                        <td class="colControls"><b data-toggle="tooltip" title="Đã hạch toán">Đã
                                hạch toán</b></td>
                        <td>Chi tiền nước uống cho 51 nhân viên</td>
                        <td class="colControls"></td>
                    </tr>
                    <tr>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=77084">77084</a>
                        </td>
                        <td>Nhanh.vn</td>
                        <td>30/07/2020</td>
                        <td><b class="text-danger">Phiếu chi</b><br></td>
                        <td class="colControls">
                            <div>Vận chuyển Nhanh</div>
                        </td>
                        <td class="colNumber">2.854.126.031</td>
                        <td>
                            <div>trần thị Ánh tuyết</div>
                            <div><i class="date">30/07/2020 15:35:36</i></div>
                        </td>
                        <td class="colControls">
                            <div class="text-success">Đoàn Thị Minh Hương</div>
                            <div class="text-success"><i class="date">31/07/2020 14:07:59</i></div>
                        </td>
                        <td class="colControls"><b data-toggle="tooltip" title="Đã hạch toán">Đã
                                hạch toán</b></td>
                        <td>THANH TOÁN COD CHO DN NHANH NGÀY 30.07</td>
                        <td class="colControls"></td>
                    </tr>
                    <tr class="even">
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=77083">77083</a>
                        </td>
                        <td>Nhanh.vn</td>
                        <td>30/07/2020</td>
                        <td><b class="text-info">Phiếu thu</b><br></td>
                        <td class="colControls">
                            <div>Vận chuyển Nhanh</div>
                        </td>
                        <td class="colNumber">12.453.196</td>
                        <td>
                            <div>trần thị Ánh tuyết</div>
                            <div><i class="date">30/07/2020 15:34:40</i></div>
                        </td>
                        <td class="colControls">
                            <div class="text-success">Đoàn Thị Minh Hương</div>
                            <div class="text-success"><i class="date">31/07/2020 11:56:50</i></div>
                        </td>
                        <td class="colControls"><b data-toggle="tooltip" title="Đã hạch toán">Đã
                                hạch toán</b></td>
                        <td>GHN ĐỀN BÙ 18.07 - 24.07</td>
                        <td class="colControls"></td>
                    </tr>
                    <tr>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=77082">77082</a>
                        </td>
                        <td>Nhanh.vn</td>
                        <td>30/07/2020</td>
                        <td><b class="text-info">Phiếu thu</b><br></td>
                        <td class="colControls">
                            <div>Vận chuyển Nhanh</div>
                        </td>
                        <td class="colNumber">347.759.400</td>
                        <td>
                            <div>trần thị Ánh tuyết</div>
                            <div><i class="date">30/07/2020 15:34:05</i></div>
                        </td>
                        <td class="colControls"><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=77082">Duyệt</a>
                        </td>
                        <td class="colControls"><b>Chưa duyệt</b></td>
                        <td>THU COD VIETTEL 30.07</td>
                        <td class="colControls"><a class="fa fa-edit icon"
                                href="https://erp.nhanh.vn/accounting/transaction/editreq?id=77082"></a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=77081">77081</a>
                        </td>
                        <td>Nhanh.vn</td>
                        <td>30/07/2020</td>
                        <td><b class="text-info">Phiếu thu</b><br></td>
                        <td class="colControls">
                            <div>Vận chuyển Nhanh</div>
                        </td>
                        <td class="colNumber">124.916.100</td>
                        <td>
                            <div>trần thị Ánh tuyết</div>
                            <div><i class="date">30/07/2020 15:33:08</i></div>
                        </td>
                        <td class="colControls">
                            <div class="text-success">Đoàn Thị Minh Hương</div>
                            <div class="text-success"><i class="date">31/07/2020 11:55:56</i></div>
                        </td>
                        <td class="colControls"><b data-toggle="tooltip" title="Đã hạch toán">Đã
                                hạch toán</b></td>
                        <td>THU COD ECOTRANS 30.07</td>
                        <td class="colControls"></td>
                    </tr>
                    <tr>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=77080">77080</a>
                        </td>
                        <td>Nhanh.vn</td>
                        <td>30/07/2020</td>
                        <td><b class="text-info">Phiếu thu</b><br></td>
                        <td class="colControls">
                            <div>Vận chuyển Nhanh</div>
                        </td>
                        <td class="colNumber">1.927.992.339</td>
                        <td>
                            <div>trần thị Ánh tuyết</div>
                            <div><i class="date">30/07/2020 15:32:35</i></div>
                        </td>
                        <td class="colControls">
                            <div class="text-success">Đoàn Thị Minh Hương</div>
                            <div class="text-success"><i class="date">31/07/2020 11:59:17</i></div>
                        </td>
                        <td class="colControls"><b data-toggle="tooltip" title="Đã hạch toán">Đã
                                hạch toán</b></td>
                        <td>THU COD GHN 30.07</td>
                        <td class="colControls"></td>
                    </tr>
                    <tr class="even">
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=77079">77079</a>
                        </td>
                        <td>Nhanh.vn</td>
                        <td>30/07/2020</td>
                        <td><b class="text-info">Phiếu thu</b><br></td>
                        <td class="colControls">
                            <div>Vận chuyển Nhanh</div>
                        </td>
                        <td class="colNumber">243.202.600</td>
                        <td>
                            <div>trần thị Ánh tuyết</div>
                            <div><i class="date">30/07/2020 15:32:04</i></div>
                        </td>
                        <td class="colControls">
                            <div class="text-success">Đoàn Thị Minh Hương</div>
                            <div class="text-success"><i class="date">31/07/2020 11:58:00</i></div>
                        </td>
                        <td class="colControls"><b data-toggle="tooltip" title="Đã hạch toán">Đã
                                hạch toán</b></td>
                        <td>THU COD VNPOST 30.07</td>
                        <td class="colControls"></td>
                    </tr>
                    <tr>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=77078">77078</a>
                        </td>
                        <td>Nhanh.vn</td>
                        <td>30/07/2020</td>
                        <td><b class="text-info">Phiếu thu</b><br></td>
                        <td class="colControls">
                            <div>Vận chuyển Nhanh</div>
                        </td>
                        <td class="colNumber">501.424.527</td>
                        <td>
                            <div>trần thị Ánh tuyết</div>
                            <div><i class="date">30/07/2020 15:31:30</i></div>
                        </td>
                        <td class="colControls">
                            <div class="text-success">Đoàn Thị Minh Hương</div>
                            <div class="text-success"><i class="date">31/07/2020 11:55:37</i></div>
                        </td>
                        <td class="colControls"><b data-toggle="tooltip" title="Đã hạch toán">Đã
                                hạch toán</b></td>
                        <td>THU COD J&amp;T 30.07</td>
                        <td class="colControls"></td>
                    </tr>
                    <tr class="even">
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=77068">77068</a>
                        </td>
                        <td>Vật giá - Hồ Chí Minh</td>
                        <td>30/07/2020</td>
                        <td><b class="text-danger">Phiếu chi</b><br></td>
                        <td class="colControls">
                            <div>Nhanh HCM 2019 (Tiền mặt)</div>
                        </td>
                        <td class="colNumber">9.779.000</td>
                        <td>
                            <div>Huỳnh Ngọc Hải</div>
                            <div><i class="date">30/07/2020 13:46:20</i></div>
                        </td>
                        <td class="colControls">
                            <div class="text-success">Hứa Thị Mai Ngân</div>
                            <div class="text-success"><i class="date">30/07/2020 13:51:44</i></div>
                        </td>
                        <td class="colControls"><b data-toggle="tooltip" title="Đã hạch toán">Đã
                                hạch toán</b></td>
                        <td>Mua CPU máy tính chạy tool seo maps</td>
                        <td class="colControls"></td>
                    </tr>
                    <tr>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=77049">77049</a>
                        </td>
                        <td>Vật giá - Hà Nội</td>
                        <td>30/07/2020</td>
                        <td><b class="text-danger">Phiếu chi</b><br></td>
                        <td class="colControls">
                            <div>Vật Giá HN</div>
                        </td>
                        <td class="colNumber">345.431.396</td>
                        <td>
                            <div>Trịnh Anh Tuấn</div>
                            <div><i class="date">30/07/2020 10:00:40</i></div>
                        </td>
                        <td class="colControls">
                            <div class="text-success">Nguyễn Ngọc Điệp</div>
                            <div class="text-success"><i class="date">30/07/2020 10:02:48</i></div>
                        </td>
                        <td class="colControls"><b data-toggle="tooltip" title="Đã hạch toán">Đã
                                hạch toán</b></td>
                        <td>P 40% = 321,331,532
                            IT 5% của 60% của VG = ...</td>
                        <td class="colControls"></td>
                    </tr>
                    <tr class="even">
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=77034">77034</a>
                        </td>
                        <td>Vật giá - Hồ Chí Minh</td>
                        <td>29/07/2020</td>
                        <td><b class="text-danger">Phiếu chi</b><br></td>
                        <td class="colControls">
                            <div>Vật Giá HCM</div>
                        </td>
                        <td class="colNumber">2.902.000</td>
                        <td>
                            <div>Phạm Văn Phú</div>
                            <div><i class="date">29/07/2020 16:16:25</i></div>
                        </td>
                        <td class="colControls">
                            <div class="text-success">Phạm Văn Phú</div>
                            <div class="text-success"><i class="date">29/07/2020 16:16:34</i></div>
                        </td>
                        <td class="colControls"><b data-toggle="tooltip" title="Đã hạch toán">Đã
                                hạch toán</b></td>
                        <td>Chi bảo 1 nhân viên và 4 người báo trễ</td>
                        <td class="colControls"></td>
                    </tr>
                    <tr>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=77033">77033</a>
                        </td>
                        <td>Nhanh.vn</td>
                        <td>29/07/2020</td>
                        <td><b class="text-danger">Phiếu chi</b><br></td>
                        <td class="colControls">
                            <div>Vận chuyển Nhanh</div>
                        </td>
                        <td class="colNumber">3.787.176.308</td>
                        <td>
                            <div>trần thị Ánh tuyết</div>
                            <div><i class="date">29/07/2020 16:06:49</i></div>
                        </td>
                        <td class="colControls">
                            <div class="text-success">Đoàn Thị Minh Hương</div>
                            <div class="text-success"><i class="date">30/07/2020 11:20:50</i></div>
                        </td>
                        <td class="colControls"><b data-toggle="tooltip" title="Đã hạch toán">Đã
                                hạch toán</b></td>
                        <td>THANH TOÁN COD CHO DN NHANH NGÀY 29.07</td>
                        <td class="colControls"></td>
                    </tr>
                    <tr class="even">
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=77032">77032</a>
                        </td>
                        <td>Nhanh.vn</td>
                        <td>29/07/2020</td>
                        <td><b class="text-info">Phiếu thu</b><br></td>
                        <td class="colControls">
                            <div>Vận chuyển Nhanh</div>
                        </td>
                        <td class="colNumber">323.267.550</td>
                        <td>
                            <div>trần thị Ánh tuyết</div>
                            <div><i class="date">29/07/2020 16:05:44</i></div>
                        </td>
                        <td class="colControls">
                            <div class="text-success">Đoàn Thị Minh Hương</div>
                            <div class="text-success"><i class="date">31/07/2020 11:57:39</i></div>
                        </td>
                        <td class="colControls"><b data-toggle="tooltip" title="Đã hạch toán">Đã
                                hạch toán</b></td>
                        <td>THU COD VIETTEL 29.07</td>
                        <td class="colControls"></td>
                    </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div class="col-md-6 paginatorItem">
                    <div class="paginator"><span class="labelPages">1 - 30 / 11,631</span><span
                            class="disabled fa fa-step-backward"></span><span
                            class="disabled fa fa-backward"></span><a class="fa fa-forward"
                            href="https://erp.nhanh.vn/accounting/transaction?page=2"
                            title="Trang sau"></a> <a class="fa fa-step-forward"
                            href="https://erp.nhanh.vn/accounting/transaction?page=388"
                            title="Trang cuối"></a></div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Hủy phiếu thu chi</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-warning">
                            Bạn muốn hủy phiếu thu này không?
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" value="" id="transactionId">
                        <button type="button" class="btn btn-primary deleteItem">Có</button>
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Không</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <div id="alertModal" class="modal fade">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">×</button>
                        <h4 class="modal-title">Thông báo</h4>
                    </div>
                    <div class="modal-body">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default reload"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
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

        <style>
            #dgTransaction i.date {
                font-size: 0.85em;
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
	<script type="text/javascript" src="{{ asset('/asset/js/accounting/transaction/saved_resource') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/accounting/transaction/firebase-app.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/accounting/transaction/firebase-messaging.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/accounting/transaction/firebase-firestore.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/accounting/transaction/firebase-auth.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/accounting/transaction/getfirebaseconfig') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/accounting/transaction/notification.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/accounting/transaction/notification.reducer.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/accounting/transaction/ckeditor.js') }}"></script>
	<script type="text/javascript">
		CKEDITOR.env.isCompatible = true;
	</script>
	<script type="text/javascript" src="{{ asset('/asset/js/accounting/transaction/saved_resource(1)') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/accounting/transaction/saved_resource(2)') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/accounting/transaction/saved_resource(3)') }}"></script>
    

@endsection
@extends('accounting::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('accounting.name') !!}
    </p>
@endsection
