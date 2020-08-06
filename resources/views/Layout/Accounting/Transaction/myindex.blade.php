@extends('Layout.master4')

@section('css')
    <link rel="stylesheet" href="{{ asset('asset/css/accounting/transaction/style.css') }}" type="text/css">
@endsection

@section('title', 'ERP-Danh sách phiếu yêu cầu thu chi')

@section('content-page')

    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/accounting"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/accounting/account/myindex">Phiếu thu chi của tôi</a>
            </li>
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
                        </select><span class="select2 select2-container select2-container--default"
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
                        data-placement="top" title="Chức năng, thao tác">
                        <button class="btn dropdown-toggle" type="button" aria-haspopup="true"
                            aria-expanded="false" data-toggle="dropdown">
                            <span class="fa fa-cog"></span> <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a id="exportPage" href="https://erp.nhanh.vn/accounting#"><i
                                        class="fa fa-file-excel-o"></i> Xuất 1 trang hiện tại</a>
                            </li>
                            <li><a id="exportAll" href="https://erp.nhanh.vn/accounting#"><i
                                        class="fa fa-file-excel-o"></i> Xuất toàn bộ</a></li>
                        </ul>
                    </div>


                    <button class="btn  pull-right lolify-showextend" type="button"
                        data-toggle="tooltip" data-placement="top" title="bộ lọc nâng cao">
                        <span class="fa fa-th"></span>
                    </button>
                </div>
                <div class="col-md-12 lolify-extend" style="display: none;">
                    <div class="form-group">
                        <select name="expenseCategoryId" style="min-width:200px"
                            id="expenseCategoryId" class="form-control select2-hidden-accessible"
                            tabindex="-1" aria-hidden="true">
                            <option value="">- Danh mục thu chi -</option>
                            <option value="149">Chi khác</option>
                            <option value="28">Thu khác</option>
                        </select><span class="select2 select2-container select2-container--default"
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
                            <th style="width: 195px;">Cty yêu cầu</th>
                            <th style="width: 107px;">Ngày hạch toán</th>
                            <th style="width: 76px;">Loại phiếu</th>
                            <th style="width: 177px;">Khoản mục</th>
                            <th style="width: 193px;">Quỹ</th>
                            <th style="width: 103px;">Giá trị</th>
                            <th style="width: 101px;">Trạng thái</th>
                            <th style="width: 171px;">Người tạo</th>
                            <th style="width: 353px;">Diễn giải</th>
                            <th style="width: 28px;"><i class="fa fa-edit"></i> </th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div class="col-md-6 paginatorItem">
                    <div class="paginator"><span class="labelPages">1 - 30 / 11,545</span><span
                            class="disabled fa fa-step-backward"></span><span
                            class="disabled fa fa-backward"></span><a class="fa fa-forward"
                            href="https://erp.nhanh.vn/accounting?page=2" title="Trang sau"></a> <a
                            class="fa fa-step-forward"
                            href="https://erp.nhanh.vn/accounting?page=385" title="Trang cuối"></a>
                    </div>
                </div>
                <div style="clear: both;"></div><br>
            </div>
            <table cellspacing="0" cellpadding="0" id="dgMyIndex" class="table table table-hover">
                <thead>
                    <tr class="even h">
                        <th>ID</th>
                        <th>Cty yêu cầu</th>
                        <th>Ngày hạch toán</th>
                        <th>Loại phiếu</th>
                        <th>Khoản mục</th>
                        <th>Quỹ</th>
                        <th>Giá trị</th>
                        <th>Trạng thái</th>
                        <th>Người tạo</th>
                        <th>Diễn giải</th>
                        <th><i class="fa fa-edit"></i> </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76741">76741</a>
                        </td>
                        <td>
                            <div>Nhanh.vn</div>
                            <div class="fontsize-85 text-muted"></div>
                        </td>
                        <td>23/07/2020</td>
                        <td>Phiếu chi<br></td>
                        <td>1112 - Chi khác</td>
                        <td>
                            <div>Vận chuyển Nhanh</div>
                        </td>
                        <td class="col-align-right">1.452.373.822</td>
                        <td data-toggle="tooltip" data-placement="top"
                            data-original-title="Đoàn Thị Minh Hương&lt;br /&gt;23/07/2020 16:37:42">
                            <div class="text-success"><b>Đã hạch toán</b><br><span
                                    class="fontsize-85"> </span></div>
                        </td>
                        <td>
                            <div>trần thị Ánh tuyết</div>
                            <div class="fontsize-85 text-muted">23/07/2020 16:36:44</div>
                        </td>
                        <td>THANH TOÁN PVC CHO J&amp;T THÁNG 6.2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76741"
                                class="fa fa-eye" title="Xem chi tiết" data-toggle="tooltip"></a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76740">76740</a>
                        </td>
                        <td>
                            <div>Nhanh.vn</div>
                            <div class="fontsize-85 text-muted"></div>
                        </td>
                        <td>23/07/2020</td>
                        <td>Phiếu chi<br></td>
                        <td>1112 - Chi khác</td>
                        <td>
                            <div>Vận chuyển Nhanh</div>
                        </td>
                        <td class="col-align-right">2.937.732.657</td>
                        <td data-toggle="tooltip" data-placement="top" data-original-title="">
                            <div><b>Mới</b></div>
                        </td>
                        <td>
                            <div>trần thị Ánh tuyết</div>
                            <div class="fontsize-85 text-muted">23/07/2020 16:36:14</div>
                        </td>
                        <td>THANH TOÁN COD CHO DN NHANH NGÀY 23.07</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/accounting/transaction/editreq?id=76740"
                                class="fa fa-edit" title="Sửa" data-toggle="tooltip"></a><br><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76740"
                                class="fa fa-eye" title="Xem chi tiết" data-toggle="tooltip"></a>
                        </td>
                    </tr>
                    <tr>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76739">76739</a>
                        </td>
                        <td>
                            <div>Nhanh.vn</div>
                            <div class="fontsize-85 text-muted">Chăm sóc đơn hàng - HươngĐTM</div>
                        </td>
                        <td>23/07/2020</td>
                        <td>Phiếu thu<br></td>
                        <td>Thu khác</td>
                        <td>
                            <div>Vận chuyển Nhanh</div>
                        </td>
                        <td class="col-align-right">21.003.590</td>
                        <td data-toggle="tooltip" data-placement="top"
                            data-original-title="Đoàn Thị Minh Hương&lt;br /&gt;23/07/2020 16:37:33">
                            <div class="text-success"><b>Đã hạch toán</b><br><span
                                    class="fontsize-85"> </span></div>
                        </td>
                        <td>
                            <div>trần thị Ánh tuyết</div>
                            <div class="fontsize-85 text-muted">23/07/2020 16:35:05</div>
                        </td>
                        <td>GHN ĐỀN BÙ 11.07 - 17.07</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76739"
                                class="fa fa-eye" title="Xem chi tiết" data-toggle="tooltip"></a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76738">76738</a>
                        </td>
                        <td>
                            <div>Nhanh.vn</div>
                            <div class="fontsize-85 text-muted">Chăm sóc đơn hàng - HươngĐTM</div>
                        </td>
                        <td>23/07/2020</td>
                        <td>Phiếu thu<br></td>
                        <td>Thu khác</td>
                        <td>
                            <div>Vận chuyển Nhanh</div>
                        </td>
                        <td class="col-align-right">412.815.800</td>
                        <td data-toggle="tooltip" data-placement="top" data-original-title="">
                            <div><b>Mới</b></div>
                        </td>
                        <td>
                            <div>trần thị Ánh tuyết</div>
                            <div class="fontsize-85 text-muted">23/07/2020 16:34:36</div>
                        </td>
                        <td>THU COD VIETTEL 23.07</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/accounting/transaction/editreq?id=76738"
                                class="fa fa-edit" title="Sửa" data-toggle="tooltip"></a><br><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76738"
                                class="fa fa-eye" title="Xem chi tiết" data-toggle="tooltip"></a>
                        </td>
                    </tr>
                    <tr class="">
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76737">76737</a>
                        </td>
                        <td>
                            <div>Nhanh.vn</div>
                            <div class="fontsize-85 text-muted">Chăm sóc đơn hàng - HươngĐTM</div>
                        </td>
                        <td>23/07/2020</td>
                        <td>Phiếu thu<br></td>
                        <td>Thu khác</td>
                        <td>
                            <div>Vận chuyển Nhanh</div>
                        </td>
                        <td class="col-align-right">128.220.801</td>
                        <td data-toggle="tooltip" data-placement="top" data-original-title="">
                            <div><b>Mới</b></div>
                        </td>
                        <td>
                            <div>trần thị Ánh tuyết</div>
                            <div class="fontsize-85 text-muted">23/07/2020 16:34:02</div>
                        </td>
                        <td>THU COD ECOTRANS 23.07</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/accounting/transaction/editreq?id=76737"
                                class="fa fa-edit" title="Sửa" data-toggle="tooltip"></a><br><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76737"
                                class="fa fa-eye" title="Xem chi tiết" data-toggle="tooltip"></a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76736">76736</a>
                        </td>
                        <td>
                            <div>Nhanh.vn</div>
                            <div class="fontsize-85 text-muted">Chăm sóc đơn hàng - HươngĐTM</div>
                        </td>
                        <td>23/07/2020</td>
                        <td>Phiếu thu<br></td>
                        <td>Thu khác</td>
                        <td>
                            <div>Vận chuyển Nhanh</div>
                        </td>
                        <td class="col-align-right">2.038.086.094</td>
                        <td data-toggle="tooltip" data-placement="top" data-original-title="">
                            <div><b>Mới</b></div>
                        </td>
                        <td>
                            <div>trần thị Ánh tuyết</div>
                            <div class="fontsize-85 text-muted">23/07/2020 16:33:30</div>
                        </td>
                        <td>THU COD GHN 23.07</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/accounting/transaction/editreq?id=76736"
                                class="fa fa-edit" title="Sửa" data-toggle="tooltip"></a><br><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76736"
                                class="fa fa-eye" title="Xem chi tiết" data-toggle="tooltip"></a>
                        </td>
                    </tr>
                    <tr class="">
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76735">76735</a>
                        </td>
                        <td>
                            <div>Nhanh.vn</div>
                            <div class="fontsize-85 text-muted">Chăm sóc đơn hàng - HươngĐTM</div>
                        </td>
                        <td>23/07/2020</td>
                        <td>Phiếu thu<br></td>
                        <td>Thu khác</td>
                        <td>
                            <div>Vận chuyển Nhanh</div>
                        </td>
                        <td class="col-align-right">239.685.000</td>
                        <td data-toggle="tooltip" data-placement="top"
                            data-original-title="Đoàn Thị Minh Hương&lt;br /&gt;23/07/2020 16:36:41">
                            <div class="text-success"><b>Đã hạch toán</b><br><span
                                    class="fontsize-85"> </span></div>
                        </td>
                        <td>
                            <div>trần thị Ánh tuyết</div>
                            <div class="fontsize-85 text-muted">23/07/2020 16:32:45</div>
                        </td>
                        <td>THU COD VNPOST 23.07</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76735"
                                class="fa fa-eye" title="Xem chi tiết" data-toggle="tooltip"></a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76734">76734</a>
                        </td>
                        <td>
                            <div>Nhanh.vn</div>
                            <div class="fontsize-85 text-muted">Chăm sóc đơn hàng - HươngĐTM</div>
                        </td>
                        <td>23/07/2020</td>
                        <td>Phiếu thu<br></td>
                        <td>Thu khác</td>
                        <td>
                            <div>Vận chuyển Nhanh</div>
                        </td>
                        <td class="col-align-right">426.029.972</td>
                        <td data-toggle="tooltip" data-placement="top"
                            data-original-title="Đoàn Thị Minh Hương&lt;br /&gt;23/07/2020 16:35:39">
                            <div class="text-success"><b>Đã hạch toán</b><br><span
                                    class="fontsize-85"> </span></div>
                        </td>
                        <td>
                            <div>trần thị Ánh tuyết</div>
                            <div class="fontsize-85 text-muted">23/07/2020 16:32:14</div>
                        </td>
                        <td>THU COD J&amp;T 23.07</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76734"
                                class="fa fa-eye" title="Xem chi tiết" data-toggle="tooltip"></a>
                        </td>
                    </tr>
                    <tr class="">
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76717">76717</a>
                        </td>
                        <td>
                            <div>Vật giá - Hồ Chí Minh</div>
                            <div class="fontsize-85 text-muted"></div>
                        </td>
                        <td>23/07/2020</td>
                        <td>Phiếu thu<br></td>
                        <td>Thu khác</td>
                        <td>
                            <div>Vật giá sàn HCM</div>
                        </td>
                        <td class="col-align-right">1.080.000</td>
                        <td data-toggle="tooltip" data-placement="top"
                            data-original-title="Bùi Thanh Thịnh&lt;br /&gt;23/07/2020 13:15:10">
                            <div class="text-success"><b>Đã hạch toán</b><br><span
                                    class="fontsize-85"> </span></div>
                        </td>
                        <td>
                            <div>Lê Quỳnh Thủy Tiên</div>
                            <div class="fontsize-85 text-muted">23/07/2020 13:06:36</div>
                        </td>
                        <td>Thu tiền các khoản trích phạt tháng 06.2020 về Qũy ...</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76717"
                                class="fa fa-eye" title="Xem chi tiết" data-toggle="tooltip"></a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76716">76716</a>
                        </td>
                        <td>
                            <div>Vật giá - Hồ Chí Minh</div>
                            <div class="fontsize-85 text-muted"></div>
                        </td>
                        <td>23/07/2020</td>
                        <td>Phiếu chi<br></td>
                        <td>1112 - Chi khác</td>
                        <td>
                            <div>Khối KD độc lập (TM)</div>
                        </td>
                        <td class="col-align-right">1.080.000</td>
                        <td data-toggle="tooltip" data-placement="top"
                            data-original-title="Bùi Thanh Thịnh&lt;br /&gt;23/07/2020 13:15:01">
                            <div class="text-success"><b>Đã hạch toán</b><br><span
                                    class="fontsize-85"> </span></div>
                        </td>
                        <td>
                            <div>Lê Quỳnh Thủy Tiên</div>
                            <div class="fontsize-85 text-muted">23/07/2020 13:05:37</div>
                        </td>
                        <td>Trích tiền phạt tháng 06.2020 về Qũy VG Sàn HCM.</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76716"
                                class="fa fa-eye" title="Xem chi tiết" data-toggle="tooltip"></a>
                        </td>
                    </tr>
                    <tr class="">
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76711">76711</a>
                        </td>
                        <td>
                            <div>Nhanh.vn</div>
                            <div class="fontsize-85 text-muted">Phòng Dịch Vụ Khách Hàng</div>
                        </td>
                        <td>23/07/2020</td>
                        <td>Phiếu chi<br></td>
                        <td>1112 - Chi khác</td>
                        <td>
                            <div>Nhanh HN 2019 (Tiền mặt)</div>
                        </td>
                        <td class="col-align-right">4.880.000</td>
                        <td data-toggle="tooltip" data-placement="top"
                            data-original-title="Lê Trung Đức&lt;br /&gt;23/07/2020 11:42:08">
                            <div class="text-success"><b>Đã hạch toán</b><br><span
                                    class="fontsize-85"> </span></div>
                        </td>
                        <td>
                            <div>Phạm Nguyên Tùng</div>
                            <div class="fontsize-85 text-muted">23/07/2020 11:40:51</div>
                        </td>
                        <td>Nhập PC ngày 23/07/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76711"
                                class="fa fa-eye" title="Xem chi tiết" data-toggle="tooltip"></a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76692">76692</a>
                        </td>
                        <td>
                            <div>Nhanh.vn</div>
                            <div class="fontsize-85 text-muted"></div>
                        </td>
                        <td>22/07/2020</td>
                        <td>Phiếu chi<br></td>
                        <td>1112 - Chi khác</td>
                        <td>
                            <div>Vận chuyển Nhanh</div>
                        </td>
                        <td class="col-align-right">4.259.349.687</td>
                        <td data-toggle="tooltip" data-placement="top" data-original-title="">
                            <div><b>Mới</b></div>
                        </td>
                        <td>
                            <div>trần thị Ánh tuyết</div>
                            <div class="fontsize-85 text-muted">22/07/2020 16:54:41</div>
                        </td>
                        <td>THANH TOÁN COD CHO DN NHANH NGÀY 22.07</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/accounting/transaction/editreq?id=76692"
                                class="fa fa-edit" title="Sửa" data-toggle="tooltip"></a><br><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76692"
                                class="fa fa-eye" title="Xem chi tiết" data-toggle="tooltip"></a>
                        </td>
                    </tr>
                    <tr class="">
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76690">76690</a>
                        </td>
                        <td>
                            <div>Nhanh.vn</div>
                            <div class="fontsize-85 text-muted">Chăm sóc đơn hàng - HươngĐTM</div>
                        </td>
                        <td>22/07/2020</td>
                        <td>Phiếu thu<br></td>
                        <td>Thu khác</td>
                        <td>
                            <div>Vận chuyển Nhanh</div>
                        </td>
                        <td class="col-align-right">341.350.916</td>
                        <td data-toggle="tooltip" data-placement="top"
                            data-original-title="Đoàn Thị Minh Hương&lt;br /&gt;23/07/2020 16:35:57">
                            <div class="text-success"><b>Đã hạch toán</b><br><span
                                    class="fontsize-85"> </span></div>
                        </td>
                        <td>
                            <div>trần thị Ánh tuyết</div>
                            <div class="fontsize-85 text-muted">22/07/2020 16:54:14</div>
                        </td>
                        <td>THU COD VIETTEL 22.07</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76690"
                                class="fa fa-eye" title="Xem chi tiết" data-toggle="tooltip"></a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76689">76689</a>
                        </td>
                        <td>
                            <div>Nhanh.vn</div>
                            <div class="fontsize-85 text-muted">Chăm sóc đơn hàng - HươngĐTM</div>
                        </td>
                        <td>22/07/2020</td>
                        <td>Phiếu thu<br></td>
                        <td>Thu khác</td>
                        <td>
                            <div>Vận chuyển Nhanh</div>
                        </td>
                        <td class="col-align-right">179.741.595</td>
                        <td data-toggle="tooltip" data-placement="top" data-original-title="">
                            <div><b>Mới</b></div>
                        </td>
                        <td>
                            <div>trần thị Ánh tuyết</div>
                            <div class="fontsize-85 text-muted">22/07/2020 16:53:48</div>
                        </td>
                        <td>THU COD ECOTRANS 22.07</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/accounting/transaction/editreq?id=76689"
                                class="fa fa-edit" title="Sửa" data-toggle="tooltip"></a><br><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76689"
                                class="fa fa-eye" title="Xem chi tiết" data-toggle="tooltip"></a>
                        </td>
                    </tr>
                    <tr>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76688">76688</a>
                        </td>
                        <td>
                            <div>Nhanh.vn</div>
                            <div class="fontsize-85 text-muted">Chăm sóc đơn hàng - HươngĐTM</div>
                        </td>
                        <td>22/07/2020</td>
                        <td>Phiếu thu<br></td>
                        <td>Thu khác</td>
                        <td>
                            <div>Vận chuyển Nhanh</div>
                        </td>
                        <td class="col-align-right">1.853.001.541</td>
                        <td data-toggle="tooltip" data-placement="top"
                            data-original-title="Đoàn Thị Minh Hương&lt;br /&gt;23/07/2020 16:35:16">
                            <div class="text-success"><b>Đã hạch toán</b><br><span
                                    class="fontsize-85"> </span></div>
                        </td>
                        <td>
                            <div>trần thị Ánh tuyết</div>
                            <div class="fontsize-85 text-muted">22/07/2020 16:53:19</div>
                        </td>
                        <td>THU COD GHN 22.07</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76688"
                                class="fa fa-eye" title="Xem chi tiết" data-toggle="tooltip"></a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76687">76687</a>
                        </td>
                        <td>
                            <div>Nhanh.vn</div>
                            <div class="fontsize-85 text-muted">Chăm sóc đơn hàng - HươngĐTM</div>
                        </td>
                        <td>22/07/2020</td>
                        <td>Phiếu thu<br></td>
                        <td>Thu khác</td>
                        <td>
                            <div>Vận chuyển Nhanh</div>
                        </td>
                        <td class="col-align-right">195.506.700</td>
                        <td data-toggle="tooltip" data-placement="top"
                            data-original-title="Đoàn Thị Minh Hương&lt;br /&gt;23/07/2020 16:33:30">
                            <div class="text-success"><b>Đã hạch toán</b><br><span
                                    class="fontsize-85"> </span></div>
                        </td>
                        <td>
                            <div>trần thị Ánh tuyết</div>
                            <div class="fontsize-85 text-muted">22/07/2020 16:52:52</div>
                        </td>
                        <td>THU COD VNPOST 22.07</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76687"
                                class="fa fa-eye" title="Xem chi tiết" data-toggle="tooltip"></a>
                        </td>
                    </tr>
                    <tr>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76686">76686</a>
                        </td>
                        <td>
                            <div>Nhanh.vn</div>
                            <div class="fontsize-85 text-muted">Chăm sóc đơn hàng - HươngĐTM</div>
                        </td>
                        <td>22/07/2020</td>
                        <td>Phiếu thu<br></td>
                        <td>Thu khác</td>
                        <td>
                            <div>Vận chuyển Nhanh</div>
                        </td>
                        <td class="col-align-right">569.643.838</td>
                        <td data-toggle="tooltip" data-placement="top"
                            data-original-title="Đoàn Thị Minh Hương&lt;br /&gt;23/07/2020 16:33:10">
                            <div class="text-success"><b>Đã hạch toán</b><br><span
                                    class="fontsize-85"> </span></div>
                        </td>
                        <td>
                            <div>trần thị Ánh tuyết</div>
                            <div class="fontsize-85 text-muted">22/07/2020 16:52:28</div>
                        </td>
                        <td>THU COD J&amp;T 22.07</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76686"
                                class="fa fa-eye" title="Xem chi tiết" data-toggle="tooltip"></a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76672">76672</a>
                        </td>
                        <td>
                            <div>Vật giá - Hồ Chí Minh</div>
                            <div class="fontsize-85 text-muted">Nhanh HCM - Tuyển dụng</div>
                        </td>
                        <td>22/07/2020</td>
                        <td>Phiếu chi<br></td>
                        <td>1112 - Chi khác</td>
                        <td>
                            <div>Nhanh HCM 2019 (Tiền mặt)</div>
                        </td>
                        <td class="col-align-right">4.378.000</td>
                        <td data-toggle="tooltip" data-placement="top"
                            data-original-title="Hứa Thị Mai Ngân&lt;br /&gt;23/07/2020 15:43:38">
                            <div class="text-success"><b>Đã hạch toán</b><br><span
                                    class="fontsize-85"> </span></div>
                        </td>
                        <td>
                            <div>Phạm Thị Bích Phượng</div>
                            <div class="fontsize-85 text-muted">22/07/2020 15:13:28</div>
                        </td>
                        <td>Thanh toán tiền thuê địa điểm tổ chức workshop 21/07</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76672"
                                class="fa fa-eye" title="Xem chi tiết" data-toggle="tooltip"></a>
                        </td>
                    </tr>
                    <tr>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76670">76670</a>
                        </td>
                        <td>
                            <div>Vật giá - Hồ Chí Minh</div>
                            <div class="fontsize-85 text-muted">Nhanh HCM - Sale Marketing</div>
                        </td>
                        <td>22/07/2020</td>
                        <td>Phiếu chi<br></td>
                        <td>0006 - Chi Khác</td>
                        <td>
                            <div>Nhanh HN 2019 (Tiền mặt)</div>
                        </td>
                        <td class="col-align-right">3.000.000</td>
                        <td data-toggle="tooltip" data-placement="top"
                            data-original-title="nguyễn quỳnh dương&lt;br /&gt;22/07/2020 16:09:14">
                            <div class="text-success"><b>Đã hạch toán</b><br><span
                                    class="fontsize-85"> </span></div>
                        </td>
                        <td>
                            <div>Trịnh Xuân Tài</div>
                            <div class="fontsize-85 text-muted">22/07/2020 14:18:57</div>
                        </td>
                        <td>Phụ cấp tiền nhà tháng 7</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76670"
                                class="fa fa-eye" title="Xem chi tiết" data-toggle="tooltip"></a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76668">76668</a>
                        </td>
                        <td>
                            <div>Vật giá - Hồ Chí Minh</div>
                            <div class="fontsize-85 text-muted">Phòng Hành chính - Nhân sự</div>
                        </td>
                        <td>22/07/2020</td>
                        <td>Phiếu chi<br></td>
                        <td>0211 - Mua tài sản công ty</td>
                        <td>
                            <div>Khối KD độc lập (TM)</div>
                        </td>
                        <td class="col-align-right">132.000</td>
                        <td data-toggle="tooltip" data-placement="top" data-original-title="">
                            <div><b>Mới</b></div>
                        </td>
                        <td>
                            <div>Nguyễn Thị Minh Ánh</div>
                            <div class="fontsize-85 text-muted">22/07/2020 13:49:22</div>
                        </td>
                        <td>Thanh toán VPP tháng 07/2020. Số hóa đơn 0000716</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/accounting/transaction/editreq?id=76668"
                                class="fa fa-edit" title="Sửa" data-toggle="tooltip"></a><br><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76668"
                                class="fa fa-eye" title="Xem chi tiết" data-toggle="tooltip"></a>
                        </td>
                    </tr>
                    <tr>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76659">76659</a>
                        </td>
                        <td>
                            <div>Vật giá - Hồ Chí Minh</div>
                            <div class="fontsize-85 text-muted">Nhanh HCM - Tuyển dụng</div>
                        </td>
                        <td>22/07/2020</td>
                        <td>Phiếu chi<br></td>
                        <td>0012 - Chi VPP</td>
                        <td>
                            <div>Nhanh HCM 2019 (Tiền mặt)</div>
                        </td>
                        <td class="col-align-right">676.000</td>
                        <td data-toggle="tooltip" data-placement="top"
                            data-original-title="Hứa Thị Mai Ngân&lt;br /&gt;22/07/2020 13:49:55">
                            <div class="text-success"><b>Đã hạch toán</b><br><span
                                    class="fontsize-85"> </span></div>
                        </td>
                        <td>
                            <div>Nguyễn Thị Thanh Tuyền</div>
                            <div class="fontsize-85 text-muted">22/07/2020 10:24:33</div>
                        </td>
                        <td>Chi VPP Tháng 7/2020 số HĐ 0000694</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76659"
                                class="fa fa-eye" title="Xem chi tiết" data-toggle="tooltip"></a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76652">76652</a>
                        </td>
                        <td>
                            <div>Nhanh.vn</div>
                            <div class="fontsize-85 text-muted">Phòng nhân sự - Nhanh.vn</div>
                        </td>
                        <td>22/07/2020</td>
                        <td>Phiếu chi<br></td>
                        <td>1112 - Chi khác</td>
                        <td>
                            <div>Nhanh HN 2019 (Tiền mặt)</div>
                        </td>
                        <td class="col-align-right">4.284.950</td>
                        <td data-toggle="tooltip" data-placement="top"
                            data-original-title="nguyễn quỳnh dương&lt;br /&gt;22/07/2020 09:31:03">
                            <div class="text-success"><b>Đã hạch toán</b><br><span
                                    class="fontsize-85"> </span></div>
                        </td>
                        <td>
                            <div>Trần Hoàng Nhung</div>
                            <div class="fontsize-85 text-muted">22/07/2020 09:30:16</div>
                        </td>
                        <td>Hoàn thuế cho đối tượng thử việc tháng 06.2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76652"
                                class="fa fa-eye" title="Xem chi tiết" data-toggle="tooltip"></a>
                        </td>
                    </tr>
                    <tr>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76645">76645</a>
                        </td>
                        <td>
                            <div>Nhanh.vn</div>
                            <div class="fontsize-85 text-muted"></div>
                        </td>
                        <td>21/07/2020</td>
                        <td>Phiếu chi<br></td>
                        <td>1112 - Chi khác</td>
                        <td>
                            <div>Vận chuyển Nhanh</div>
                        </td>
                        <td class="col-align-right">870.439.452</td>
                        <td data-toggle="tooltip" data-placement="top"
                            data-original-title="Đoàn Thị Minh Hương&lt;br /&gt;22/07/2020 11:06:49">
                            <div class="text-success"><b>Đã hạch toán</b><br><span
                                    class="fontsize-85"> </span></div>
                        </td>
                        <td>
                            <div>trần thị Ánh tuyết</div>
                            <div class="fontsize-85 text-muted">21/07/2020 16:50:53</div>
                        </td>
                        <td>THANH TOÁN PVC CHO VIETTEL THÁNG 6.2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76645"
                                class="fa fa-eye" title="Xem chi tiết" data-toggle="tooltip"></a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76644">76644</a>
                        </td>
                        <td>
                            <div>Nhanh.vn</div>
                            <div class="fontsize-85 text-muted"></div>
                        </td>
                        <td>21/07/2020</td>
                        <td>Phiếu chi<br></td>
                        <td>1112 - Chi khác</td>
                        <td>
                            <div>Vận chuyển Nhanh</div>
                        </td>
                        <td class="col-align-right">158.863.500</td>
                        <td data-toggle="tooltip" data-placement="top"
                            data-original-title="Đoàn Thị Minh Hương&lt;br /&gt;22/07/2020 11:07:20">
                            <div class="text-success"><b>Đã hạch toán</b><br><span
                                    class="fontsize-85"> </span></div>
                        </td>
                        <td>
                            <div>trần thị Ánh tuyết</div>
                            <div class="fontsize-85 text-muted">21/07/2020 16:50:14</div>
                        </td>
                        <td>THANH TOÁN PVC CHO ECOTRANS THÁNG 6.2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76644"
                                class="fa fa-eye" title="Xem chi tiết" data-toggle="tooltip"></a>
                        </td>
                    </tr>
                    <tr>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76643">76643</a>
                        </td>
                        <td>
                            <div>Nhanh.vn</div>
                            <div class="fontsize-85 text-muted"></div>
                        </td>
                        <td>21/07/2020</td>
                        <td>Phiếu chi<br></td>
                        <td>1112 - Chi khác</td>
                        <td>
                            <div>Vận chuyển Nhanh</div>
                        </td>
                        <td class="col-align-right">6.740.814.408</td>
                        <td data-toggle="tooltip" data-placement="top"
                            data-original-title="Đoàn Thị Minh Hương&lt;br /&gt;22/07/2020 11:01:58">
                            <div class="text-success"><b>Đã hạch toán</b><br><span
                                    class="fontsize-85"> </span></div>
                        </td>
                        <td>
                            <div>trần thị Ánh tuyết</div>
                            <div class="fontsize-85 text-muted">21/07/2020 16:49:26</div>
                        </td>
                        <td>THANH TOÁN COD CHO DN NHANH NGÀY 21.07</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76643"
                                class="fa fa-eye" title="Xem chi tiết" data-toggle="tooltip"></a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76642">76642</a>
                        </td>
                        <td>
                            <div>Nhanh.vn</div>
                            <div class="fontsize-85 text-muted">Chăm sóc đơn hàng - HươngĐTM</div>
                        </td>
                        <td>21/07/2020</td>
                        <td>Phiếu thu<br></td>
                        <td>Thu khác</td>
                        <td>
                            <div>Vận chuyển Nhanh</div>
                        </td>
                        <td class="col-align-right">460.653.334</td>
                        <td data-toggle="tooltip" data-placement="top"
                            data-original-title="Đoàn Thị Minh Hương&lt;br /&gt;23/07/2020 16:36:19">
                            <div class="text-success"><b>Đã hạch toán</b><br><span
                                    class="fontsize-85"> </span></div>
                        </td>
                        <td>
                            <div>trần thị Ánh tuyết</div>
                            <div class="fontsize-85 text-muted">21/07/2020 16:48:06</div>
                        </td>
                        <td>THU COD VIETTEL 21.07</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76642"
                                class="fa fa-eye" title="Xem chi tiết" data-toggle="tooltip"></a>
                        </td>
                    </tr>
                    <tr>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76641">76641</a>
                        </td>
                        <td>
                            <div>Nhanh.vn</div>
                            <div class="fontsize-85 text-muted">Chăm sóc đơn hàng - HươngĐTM</div>
                        </td>
                        <td>21/07/2020</td>
                        <td>Phiếu thu<br></td>
                        <td>Thu khác</td>
                        <td>
                            <div>Vận chuyển Nhanh</div>
                        </td>
                        <td class="col-align-right">177.891.799</td>
                        <td data-toggle="tooltip" data-placement="top"
                            data-original-title="Đoàn Thị Minh Hương&lt;br /&gt;23/07/2020 16:34:37">
                            <div class="text-success"><b>Đã hạch toán</b><br><span
                                    class="fontsize-85"> </span></div>
                        </td>
                        <td>
                            <div>trần thị Ánh tuyết</div>
                            <div class="fontsize-85 text-muted">21/07/2020 16:47:41</div>
                        </td>
                        <td>THU COD ECOTRANS 21.07</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76641"
                                class="fa fa-eye" title="Xem chi tiết" data-toggle="tooltip"></a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76640">76640</a>
                        </td>
                        <td>
                            <div>Nhanh.vn</div>
                            <div class="fontsize-85 text-muted">Chăm sóc đơn hàng - HươngĐTM</div>
                        </td>
                        <td>21/07/2020</td>
                        <td>Phiếu thu<br></td>
                        <td>Thu khác</td>
                        <td>
                            <div>Vận chuyển Nhanh</div>
                        </td>
                        <td class="col-align-right">2.741.880.179</td>
                        <td data-toggle="tooltip" data-placement="top"
                            data-original-title="Đoàn Thị Minh Hương&lt;br /&gt;22/07/2020 11:01:19">
                            <div class="text-success"><b>Đã hạch toán</b><br><span
                                    class="fontsize-85"> </span></div>
                        </td>
                        <td>
                            <div>trần thị Ánh tuyết</div>
                            <div class="fontsize-85 text-muted">21/07/2020 16:47:10</div>
                        </td>
                        <td>THU COD GHN 21.07</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76640"
                                class="fa fa-eye" title="Xem chi tiết" data-toggle="tooltip"></a>
                        </td>
                    </tr>
                    <tr>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76639">76639</a>
                        </td>
                        <td>
                            <div>Nhanh.vn</div>
                            <div class="fontsize-85 text-muted">Chăm sóc đơn hàng - HươngĐTM</div>
                        </td>
                        <td>21/07/2020</td>
                        <td>Phiếu thu<br></td>
                        <td>Thu khác</td>
                        <td>
                            <div>Vận chuyển Nhanh</div>
                        </td>
                        <td class="col-align-right">358.854.399</td>
                        <td data-toggle="tooltip" data-placement="top"
                            data-original-title="Đoàn Thị Minh Hương&lt;br /&gt;22/07/2020 10:59:21">
                            <div class="text-success"><b>Đã hạch toán</b><br><span
                                    class="fontsize-85"> </span></div>
                        </td>
                        <td>
                            <div>trần thị Ánh tuyết</div>
                            <div class="fontsize-85 text-muted">21/07/2020 16:46:41</div>
                        </td>
                        <td>THU COD VNPOST 21.07</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76639"
                                class="fa fa-eye" title="Xem chi tiết" data-toggle="tooltip"></a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76638">76638</a>
                        </td>
                        <td>
                            <div>Nhanh.vn</div>
                            <div class="fontsize-85 text-muted">Chăm sóc đơn hàng - HươngĐTM</div>
                        </td>
                        <td>21/07/2020</td>
                        <td>Phiếu thu<br></td>
                        <td>Thu khác</td>
                        <td>
                            <div>Vận chuyển Nhanh</div>
                        </td>
                        <td class="col-align-right">609.053.880</td>
                        <td data-toggle="tooltip" data-placement="top"
                            data-original-title="Đoàn Thị Minh Hương&lt;br /&gt;22/07/2020 10:59:02">
                            <div class="text-success"><b>Đã hạch toán</b><br><span
                                    class="fontsize-85"> </span></div>
                        </td>
                        <td>
                            <div>trần thị Ánh tuyết</div>
                            <div class="fontsize-85 text-muted">21/07/2020 16:46:02</div>
                        </td>
                        <td>THU COD J&amp;T 21.07</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/accounting/transaction/view?id=76638"
                                class="fa fa-eye" title="Xem chi tiết" data-toggle="tooltip"></a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div class="col-md-6 paginatorItem">
                    <div class="paginator"><span class="labelPages">1 - 30 / 11,545</span><span
                            class="disabled fa fa-step-backward"></span><span
                            class="disabled fa fa-backward"></span><a class="fa fa-forward"
                            href="https://erp.nhanh.vn/accounting?page=2" title="Trang sau"></a> <a
                            class="fa fa-step-forward"
                            href="https://erp.nhanh.vn/accounting?page=385" title="Trang cuối"></a>
                    </div>
                </div>
            </div>
        </div>
        <style>
            #dgTransaction i.date {
                font-size: 0.85em;
            }
        </style>
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
	<script type="text/javascript" src="{{ asset('/asset/js/accounting/transaction/index.js') }}"></script>
    

@endsection
