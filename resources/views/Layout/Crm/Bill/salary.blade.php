@extends('Layout.master')

@section('title','ERP-Doanh số triển khai và vận chuyển')

@section('css')
    <link rel="stylesheet" href="{{ asset('asset/css/crm/bill/style.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('asset/css/crm/bill/bootstrap-multiselect.css') }}" type="text/css">
@endsection


@section('content-page')
    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/crm/bill/salary">Danh sách doanh số triển khai &amp;
                    vận chuyển nhân viên</a></li>
        </ul>
        <div class="filterContainer">
            <form method="GET" name="crmBillFilter" class="form-inline lolify" role="form"
                id="crmBillFilter">
                <div class="col-md-10 lolify-default">

                    <input type="hidden" name="companyId" id="companyId" class="form-control"
                        value="319">
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
                        <input type="text" name="id" maxlength="20" placeholder="ID" id="id"
                            class="form-control" value=""> </div>
                    <div class="form-group">
                        <input type="text" name="contractId" maxlength="20"
                            placeholder="ID hợp đồng" id="contractId" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <select name="type" id="type" class="form-control">
                            <option value="">- Loại doanh số -</option>
                            <option value="3">Doanh số vận chuyển</option>
                            <option value="4">Doanh số triển khai</option>
                        </select> </div>
                    <div class="form-group">
                        <input type="text" name="storeNameNhanh" maxlength="225"
                            placeholder="Tên DN Nhanh" id="storeNameNhanh" class="form-control"
                            value=""> </div>
                    <div class="form-group">
                        <input type="text" name="storeIdNhanh" maxlength="225"
                            placeholder="ID DN Nhanh" id="storeIdNhanh" class="form-control"
                            value=""> </div>
                    <div class="form-group">
                        <input type="text" name="applyDate" maxlength="11"
                            placeholder="Ngày tính doanh số" class="form-control date-range-picker"
                            id="applyDate" value=""> </div>
                    <div class="form-group">
                        <select name="status" id="status" class="form-control">
                            <option value="">- Trạng thái -</option>
                            <option value="1">Mới</option>
                            <option value="2">Đã xác nhận</option>
                        </select> </div>
                    <input type="hidden" name="stampedById" id="stampedById" class="form-control"
                        value="">
                    <div class="form-group">
                        <input type="text" name="createdByName" maxlength="225"
                            placeholder="Nhân viên hưởng doanh số" id="createdByName"
                            class="form-control ui-autocomplete-input" value="" autocomplete="off">
                    </div>
                    <input type="hidden" name="createdById" id="createdById" class="form-control"
                        value="">
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
                            <li><a href="https://erp.nhanh.vn/crm/bill/salary#" id="exportExcel"><i
                                        class="fa fa-file-excel-o"></i> Xuất excel trang hiện
                                    tại</a></li>
                            <li><a id="exportAll"><i class="fa fa-file-excel-o"></i> Xuất excel toàn
                                    bộ</a></li>
                        </ul>
                    </div>


                    <button class="btn  pull-right lolify-showextend" type="button"
                        data-toggle="tooltip" data-placement="top" title=""
                        data-original-title="bộ lọc nâng cao">
                        <span class="fa fa-th"></span>
                    </button>
                </div>
                <div class="col-md-12 lolify-extend" style="display: block;">
                    <div class="form-group">
                        <input type="text" name="stampedByName" maxlength="225"
                            placeholder="Người xác nhận" id="stampedByName"
                            class="form-control ui-autocomplete-input" value="" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input type="text" name="stampedDateTimeDaterange" maxlength="11"
                            placeholder="Thời gian xác nhận" class="form-control date-range-picker"
                            id="stampedDateTimeDaterange" value=""> </div>
                    <div class="form-group">
                        <input type="text" name="createdDaterange" maxlength="11"
                            placeholder="Ngày tạo" class="form-control date-range-picker"
                            id="createdDaterange" value=""> </div>

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
                            <th style="width: 76px;">ID hợp đồng</th>
                            <th style="width: 121px;">ID Doanh nghiệp(HĐ)</th>
                            <th style="width: 176px;">Tên Doanh nghiệp(HĐ)</th>
                            <th style="width: 141px;">Tên nhân viên</th>
                            <th style="width: 488px;">Phòng ban</th>
                            <th style="width: 129px;">Loại Doanh số</th>
                            <th style="width: 115px;">Ngày tính Doanh số</th>
                            <th style="width: 71px;">Giá trị</th>
                            <th style="width: 126px;">Ghi chú</th>
                            <th style="width: 80px;">Trạng thái</th>
                            <th style="width: 32px;"><i class="fa fa-cogs"></i></th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div class="col-md-6 paginatorItem">
                    <div class="paginator"><span class="labelPages">1 - 100 / 1,063</span><span
                            class="disabled fa fa-step-backward"></span><span
                            class="disabled fa fa-backward"></span><a class="fa fa-forward"
                            href="https://erp.nhanh.vn/crm/bill/salary?page=2"
                            title="Trang sau"></a> <a class="fa fa-step-forward"
                            href="https://erp.nhanh.vn/crm/bill/salary?page=11"
                            title="Trang cuối"></a></div>
                </div>
                <div style="clear: both;"></div><br>
            </div>
            <table id="dgBill" class="table table-bordered">
                <thead>
                    <tr class="even">
                        <th>ID hợp đồng</th>
                        <th>ID Doanh nghiệp(HĐ)</th>
                        <th>Tên Doanh nghiệp(HĐ)</th>
                        <th>Tên nhân viên</th>
                        <th>Phòng ban</th>
                        <th>Loại Doanh số</th>
                        <th>Ngày tính Doanh số</th>
                        <th>Giá trị</th>
                        <th>Ghi chú</th>
                        <th>Trạng thái</th>
                        <th><i class="fa fa-cogs"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=59904">59904</a>
                        </td>
                        <td class="col-align-center">72947</td>
                        <td class="col-align-center">3M Store</td>
                        <td>Trần Thị Yến Phương</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm KD5_LiêmNT
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">25/07/2020</td>
                        <td class="colNb"><b>12.375</b></td>
                        <td class="col-align-left">đến ngày 24/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40568" class="label label-success " data-original-title=""
                                title="">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=60122">60122</a>
                        </td>
                        <td class="col-align-center">68474</td>
                        <td class="col-align-center">alphabuy.vn</td>
                        <td>Trần Thị Ngọc Quyền</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm KD3_NgânTK
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">25/07/2020</td>
                        <td class="colNb"><b>4.500</b></td>
                        <td class="col-align-left">đến ngày 24/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40567" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=60345">60345</a>
                        </td>
                        <td class="col-align-center">73869</td>
                        <td class="col-align-center">LitiBaby</td>
                        <td>Nguyễn Viết Lâm</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Phòng KD8_LâmNV
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">25/07/2020</td>
                        <td class="colNb"><b>24.750</b></td>
                        <td class="col-align-left">đến ngày 24/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40562" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even h">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=60372">60372</a>
                        </td>
                        <td class="col-align-center">72624</td>
                        <td class="col-align-center">Xanh Bất Tận</td>
                        <td>Nguyễn Thị Anh Thư</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Phòng
                            KD1_NgânHTM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm
                            KD9_ThưNTA</td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">25/07/2020</td>
                        <td class="colNb"><b>750</b></td>
                        <td class="col-align-left">đến ngày 24/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40561" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=60457">60457</a>
                        </td>
                        <td class="col-align-center">74990</td>
                        <td class="col-align-center">Shop em bé</td>
                        <td>Trần Minh Thu</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Sale Marketing
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">25/07/2020</td>
                        <td class="colNb"><b>182.250</b></td>
                        <td class="col-align-left">đến ngày 24/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40559" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=61159">61159</a>
                        </td>
                        <td class="col-align-center">47955</td>
                        <td class="col-align-center">ENPI</td>
                        <td>Nguyễn Thị Anh Thư</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Phòng
                            KD1_NgânHTM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm
                            KD9_ThưNTA</td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">25/07/2020</td>
                        <td class="colNb"><b>15.000</b></td>
                        <td class="col-align-left">đến ngày 24/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40538" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=61220">61220</a>
                        </td>
                        <td class="col-align-center">42237</td>
                        <td class="col-align-center">DIY VietNam</td>
                        <td>Lê Quốc Duy</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Sale Marketing
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">25/07/2020</td>
                        <td class="colNb"><b>2.250</b></td>
                        <td class="col-align-left">đến ngày 24/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40537" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=61293">61293</a>
                        </td>
                        <td class="col-align-center">74551</td>
                        <td class="col-align-center">LA Boutique</td>
                        <td>Phan Ngọc Ý Linh</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Phòng
                            KD1_NgânHTM</td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">25/07/2020</td>
                        <td class="colNb"><b>162.750</b></td>
                        <td class="col-align-left">đến ngày 24/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40536" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=61369">61369</a>
                        </td>
                        <td class="col-align-center">75894</td>
                        <td class="col-align-center">FOXSHOP</td>
                        <td>Huỳnh Ngọc Hải</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Phòng
                            KD1_NgânHTM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm
                            KD9_ThưNTA</td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">25/07/2020</td>
                        <td class="colNb"><b>24.375</b></td>
                        <td class="col-align-left">đến ngày 24/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40532" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=61369">61369</a>
                        </td>
                        <td class="col-align-center">75894</td>
                        <td class="col-align-center">FOXSHOP</td>
                        <td>Nguyễn Thị Anh Thư</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Phòng
                            KD1_NgânHTM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm
                            KD9_ThưNTA</td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">25/07/2020</td>
                        <td class="colNb"><b>24.375</b></td>
                        <td class="col-align-left">đến ngày 24/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40531" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=61463">61463</a>
                        </td>
                        <td class="col-align-center">67425</td>
                        <td class="col-align-center">Phạm Ngọc Tích</td>
                        <td>Trần Thị Ngọc Quyền</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm KD3_NgânTK
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">25/07/2020</td>
                        <td class="colNb"><b>12.750</b></td>
                        <td class="col-align-left">đến ngày 24/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40529" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=61602">61602</a>
                        </td>
                        <td class="col-align-center">73425</td>
                        <td class="col-align-center">MKonline</td>
                        <td>Huỳnh Diễm Thy</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm KD3_NgânTK
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">25/07/2020</td>
                        <td class="colNb"><b>23.250</b></td>
                        <td class="col-align-left">đến ngày 24/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40524" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=61616">61616</a>
                        </td>
                        <td class="col-align-center">70057</td>
                        <td class="col-align-center">SUZY SHOP</td>
                        <td>Đỗ Thị Ngọc Hân</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Phòng
                            KD1_NgânHTM</td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">25/07/2020</td>
                        <td class="colNb"><b>9.750</b></td>
                        <td class="col-align-left">đến ngày 24/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40522" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=61949">61949</a>
                        </td>
                        <td class="col-align-center">78018</td>
                        <td class="col-align-center">DEAR MAN</td>
                        <td>Nguyễn Quốc Gia Thịnh</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm KD5_LiêmNT
                            <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm KD4_ThịnhNQG</td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">25/07/2020</td>
                        <td class="colNb"><b>11.250</b></td>
                        <td class="col-align-left">đến ngày 24/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40517" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=62095">62095</a>
                        </td>
                        <td class="col-align-center">73037</td>
                        <td class="col-align-center">Tuk Tuk Shop</td>
                        <td>Trần Thị Ngọc Quyền</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm KD3_NgânTK
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">25/07/2020</td>
                        <td class="colNb"><b>750</b></td>
                        <td class="col-align-left">đến ngày 24/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40514" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=62618">62618</a>
                        </td>
                        <td class="col-align-center">72439</td>
                        <td class="col-align-center">LIONRAINCOAT</td>
                        <td>Nguyễn Thị Anh Thư</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Phòng
                            KD1_NgânHTM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm
                            KD9_ThưNTA</td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">25/07/2020</td>
                        <td class="colNb"><b>750</b></td>
                        <td class="col-align-left">đến ngày 24/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40508" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63283">63283</a>
                        </td>
                        <td class="col-align-center">80560</td>
                        <td class="col-align-center">ĐẠI HÀN VIỆT</td>
                        <td>Nguyễn Thị Hiếu</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm KD5_LiêmNT
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">25/07/2020</td>
                        <td class="colNb"><b>750</b></td>
                        <td class="col-align-left">đến ngày 24/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40492" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=59630">59630</a>
                        </td>
                        <td class="col-align-center">2260</td>
                        <td class="col-align-center">Venice Store</td>
                        <td>Nguyễn Viết Lâm</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Phòng KD8_LâmNV
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">18/07/2020</td>
                        <td class="colNb"><b>26.250</b></td>
                        <td class="col-align-left">đến 17/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40333" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=59904">59904</a>
                        </td>
                        <td class="col-align-center">72947</td>
                        <td class="col-align-center">3M Store</td>
                        <td>Trần Thị Yến Phương</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm KD5_LiêmNT
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">18/07/2020</td>
                        <td class="colNb"><b>13.125</b></td>
                        <td class="col-align-left">đến 17/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40328" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=60122">60122</a>
                        </td>
                        <td class="col-align-center">68474</td>
                        <td class="col-align-center">alphabuy.vn</td>
                        <td>Trần Thị Ngọc Quyền</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm KD3_NgânTK
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">18/07/2020</td>
                        <td class="colNb"><b>10.500</b></td>
                        <td class="col-align-left">đến 17/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40324" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=60139">60139</a>
                        </td>
                        <td class="col-align-center">71717</td>
                        <td class="col-align-center">Linh kiện 3m HCM</td>
                        <td>Huỳnh Diễm Thy</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm KD3_NgânTK
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">18/07/2020</td>
                        <td class="colNb"><b>1.500</b></td>
                        <td class="col-align-left">đến 17/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40322" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=60345">60345</a>
                        </td>
                        <td class="col-align-center">73869</td>
                        <td class="col-align-center">LitiBaby</td>
                        <td>Nguyễn Viết Lâm</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Phòng KD8_LâmNV
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">18/07/2020</td>
                        <td class="colNb"><b>26.250</b></td>
                        <td class="col-align-left">đến 17/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40318" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=60372">60372</a>
                        </td>
                        <td class="col-align-center">72624</td>
                        <td class="col-align-center">Xanh Bất Tận</td>
                        <td>Nguyễn Thị Anh Thư</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Phòng
                            KD1_NgânHTM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm
                            KD9_ThưNTA</td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">18/07/2020</td>
                        <td class="colNb"><b>1.500</b></td>
                        <td class="col-align-left">đến 17/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40317" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=60457">60457</a>
                        </td>
                        <td class="col-align-center">74990</td>
                        <td class="col-align-center">Shop em bé</td>
                        <td>Trần Minh Thu</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Sale Marketing
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">18/07/2020</td>
                        <td class="colNb"><b>181.500</b></td>
                        <td class="col-align-left">đến 17/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40315" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=61055">61055</a>
                        </td>
                        <td class="col-align-center">76392</td>
                        <td class="col-align-center">Thời trang BIG SIZE Tú Mỡ</td>
                        <td>Trần Kim Ngân</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm KD3_NgânTK
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">18/07/2020</td>
                        <td class="colNb"><b>1.500</b></td>
                        <td class="col-align-left">đến 17/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40295" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=61159">61159</a>
                        </td>
                        <td class="col-align-center">47955</td>
                        <td class="col-align-center">ENPI</td>
                        <td>Nguyễn Thị Anh Thư</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Phòng
                            KD1_NgânHTM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm
                            KD9_ThưNTA</td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">18/07/2020</td>
                        <td class="colNb"><b>16.500</b></td>
                        <td class="col-align-left">đến 17/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40291" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=61220">61220</a>
                        </td>
                        <td class="col-align-center">42237</td>
                        <td class="col-align-center">DIY VietNam</td>
                        <td>Lê Quốc Duy</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Sale Marketing
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">18/07/2020</td>
                        <td class="colNb"><b>1.500</b></td>
                        <td class="col-align-left">đến 17/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40290" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=61293">61293</a>
                        </td>
                        <td class="col-align-center">74551</td>
                        <td class="col-align-center">LA Boutique</td>
                        <td>Phan Ngọc Ý Linh</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Phòng
                            KD1_NgânHTM</td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">18/07/2020</td>
                        <td class="colNb"><b>105.750</b></td>
                        <td class="col-align-left">đến 17/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40289" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=61369">61369</a>
                        </td>
                        <td class="col-align-center">75894</td>
                        <td class="col-align-center">FOXSHOP</td>
                        <td>Huỳnh Ngọc Hải</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Phòng
                            KD1_NgânHTM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm
                            KD9_ThưNTA</td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">18/07/2020</td>
                        <td class="colNb"><b>31.500</b></td>
                        <td class="col-align-left">đến 17/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40285" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=61369">61369</a>
                        </td>
                        <td class="col-align-center">75894</td>
                        <td class="col-align-center">FOXSHOP</td>
                        <td>Nguyễn Thị Anh Thư</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Phòng
                            KD1_NgânHTM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm
                            KD9_ThưNTA</td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">18/07/2020</td>
                        <td class="colNb"><b>31.500</b></td>
                        <td class="col-align-left">đến 17/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40284" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=61463">61463</a>
                        </td>
                        <td class="col-align-center">67425</td>
                        <td class="col-align-center">Phạm Ngọc Tích</td>
                        <td>Trần Thị Ngọc Quyền</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm KD3_NgânTK
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">18/07/2020</td>
                        <td class="colNb"><b>6.000</b></td>
                        <td class="col-align-left">đến 17/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40282" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=61602">61602</a>
                        </td>
                        <td class="col-align-center">73425</td>
                        <td class="col-align-center">MKonline</td>
                        <td>Huỳnh Diễm Thy</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm KD3_NgânTK
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">18/07/2020</td>
                        <td class="colNb"><b>29.250</b></td>
                        <td class="col-align-left">đến 17/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40278" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=61616">61616</a>
                        </td>
                        <td class="col-align-center">70057</td>
                        <td class="col-align-center">SUZY SHOP</td>
                        <td>Đỗ Thị Ngọc Hân</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Phòng
                            KD1_NgânHTM</td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">18/07/2020</td>
                        <td class="colNb"><b>6.000</b></td>
                        <td class="col-align-left">đến 17/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40276" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=61949">61949</a>
                        </td>
                        <td class="col-align-center">78018</td>
                        <td class="col-align-center">DEAR MAN</td>
                        <td>Nguyễn Quốc Gia Thịnh</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm KD5_LiêmNT
                            <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm KD4_ThịnhNQG</td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">18/07/2020</td>
                        <td class="colNb"><b>7.500</b></td>
                        <td class="col-align-left">đến 17/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40271" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=62618">62618</a>
                        </td>
                        <td class="col-align-center">72439</td>
                        <td class="col-align-center">LIONRAINCOAT</td>
                        <td>Nguyễn Thị Anh Thư</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Phòng
                            KD1_NgânHTM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm
                            KD9_ThưNTA</td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">18/07/2020</td>
                        <td class="colNb"><b>3.750</b></td>
                        <td class="col-align-left">đến 17/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40261" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=62669">62669</a>
                        </td>
                        <td class="col-align-center">79574</td>
                        <td class="col-align-center">Tree House Beauty Cosmetics</td>
                        <td>Nguyễn Thị Như Huệ</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Phòng
                            KD1_NgânHTM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm
                            KD9_ThưNTA</td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">18/07/2020</td>
                        <td class="colNb"><b>1.500</b></td>
                        <td class="col-align-left">đến 17/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40259" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=59532">59532</a>
                        </td>
                        <td class="col-align-center">64247</td>
                        <td class="col-align-center">UKMartvn</td>
                        <td>Lê Quốc Duy</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Sale Marketing
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">11/07/2020</td>
                        <td class="colNb"><b>1.500</b></td>
                        <td class="col-align-left">Đến ngày 10/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40184" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=59542">59542</a>
                        </td>
                        <td class="col-align-center">69029</td>
                        <td class="col-align-center">Săn Hàng Sỉ</td>
                        <td>Huỳnh Diễm Thy</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm KD3_NgânTK
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">11/07/2020</td>
                        <td class="colNb"><b>750</b></td>
                        <td class="col-align-left">Đến ngày 10/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40183" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=59630">59630</a>
                        </td>
                        <td class="col-align-center">2260</td>
                        <td class="col-align-center">Venice Store</td>
                        <td>Nguyễn Viết Lâm</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Phòng KD8_LâmNV
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">11/07/2020</td>
                        <td class="colNb"><b>30.750</b></td>
                        <td class="col-align-left">Đến ngày 10/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40181" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=59904">59904</a>
                        </td>
                        <td class="col-align-center">72947</td>
                        <td class="col-align-center">3M Store</td>
                        <td>Trần Thị Yến Phương</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm KD5_LiêmNT
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">11/07/2020</td>
                        <td class="colNb"><b>16.875</b></td>
                        <td class="col-align-left">Đến ngày 10/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40171" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=60122">60122</a>
                        </td>
                        <td class="col-align-center">68474</td>
                        <td class="col-align-center">alphabuy.vn</td>
                        <td>Trần Thị Ngọc Quyền</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm KD3_NgânTK
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">11/07/2020</td>
                        <td class="colNb"><b>3.750</b></td>
                        <td class="col-align-left">Đến ngày 10/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40169" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=60139">60139</a>
                        </td>
                        <td class="col-align-center">71717</td>
                        <td class="col-align-center">Linh kiện 3m HCM</td>
                        <td>Huỳnh Diễm Thy</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm KD3_NgânTK
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">11/07/2020</td>
                        <td class="colNb"><b>750</b></td>
                        <td class="col-align-left">Đến ngày 10/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40167" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=60300">60300</a>
                        </td>
                        <td class="col-align-center">44270</td>
                        <td class="col-align-center">RIN SHOPPE</td>
                        <td>Hồ Tấn Hải</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Phòng KD8_LâmNV
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">11/07/2020</td>
                        <td class="colNb"><b>1.500</b></td>
                        <td class="col-align-left">Đến ngày 10/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40164" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=60345">60345</a>
                        </td>
                        <td class="col-align-center">73869</td>
                        <td class="col-align-center">LitiBaby</td>
                        <td>Nguyễn Viết Lâm</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Phòng KD8_LâmNV
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">11/07/2020</td>
                        <td class="colNb"><b>28.500</b></td>
                        <td class="col-align-left">Đến ngày 10/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40161" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=60372">60372</a>
                        </td>
                        <td class="col-align-center">72624</td>
                        <td class="col-align-center">Xanh Bất Tận</td>
                        <td>Nguyễn Thị Anh Thư</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Phòng
                            KD1_NgânHTM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm
                            KD9_ThưNTA</td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">11/07/2020</td>
                        <td class="colNb"><b>2.250</b></td>
                        <td class="col-align-left">Đến ngày 10/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40160" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=60457">60457</a>
                        </td>
                        <td class="col-align-center">74990</td>
                        <td class="col-align-center">Shop em bé</td>
                        <td>Trần Minh Thu</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Sale Marketing
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">11/07/2020</td>
                        <td class="colNb"><b>137.250</b></td>
                        <td class="col-align-left">Đến ngày 10/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40158" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=61159">61159</a>
                        </td>
                        <td class="col-align-center">47955</td>
                        <td class="col-align-center">ENPI</td>
                        <td>Nguyễn Thị Anh Thư</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Phòng
                            KD1_NgânHTM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm
                            KD9_ThưNTA</td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">11/07/2020</td>
                        <td class="colNb"><b>9.000</b></td>
                        <td class="col-align-left">Đến ngày 10/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40134" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=61220">61220</a>
                        </td>
                        <td class="col-align-center">42237</td>
                        <td class="col-align-center">DIY VietNam</td>
                        <td>Lê Quốc Duy</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Sale Marketing
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">11/07/2020</td>
                        <td class="colNb"><b>3.000</b></td>
                        <td class="col-align-left">Đến ngày 10/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40133" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=61293">61293</a>
                        </td>
                        <td class="col-align-center">74551</td>
                        <td class="col-align-center">LA Boutique</td>
                        <td>Phan Ngọc Ý Linh</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Phòng
                            KD1_NgânHTM</td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">11/07/2020</td>
                        <td class="colNb"><b>109.500</b></td>
                        <td class="col-align-left">Đến ngày 10/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40132" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=61369">61369</a>
                        </td>
                        <td class="col-align-center">75894</td>
                        <td class="col-align-center">FOXSHOP</td>
                        <td>Huỳnh Ngọc Hải</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Phòng
                            KD1_NgânHTM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm
                            KD9_ThưNTA</td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">11/07/2020</td>
                        <td class="colNb"><b>38.250</b></td>
                        <td class="col-align-left">Đến ngày 10/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40128" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=61369">61369</a>
                        </td>
                        <td class="col-align-center">75894</td>
                        <td class="col-align-center">FOXSHOP</td>
                        <td>Nguyễn Thị Anh Thư</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Phòng
                            KD1_NgânHTM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm
                            KD9_ThưNTA</td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">11/07/2020</td>
                        <td class="colNb"><b>38.250</b></td>
                        <td class="col-align-left">Đến ngày 10/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40127" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=61463">61463</a>
                        </td>
                        <td class="col-align-center">67425</td>
                        <td class="col-align-center">Phạm Ngọc Tích</td>
                        <td>Trần Thị Ngọc Quyền</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm KD3_NgânTK
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">11/07/2020</td>
                        <td class="colNb"><b>4.125</b></td>
                        <td class="col-align-left">Đến ngày 10/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40124" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=61602">61602</a>
                        </td>
                        <td class="col-align-center">73425</td>
                        <td class="col-align-center">MKonline</td>
                        <td>Huỳnh Diễm Thy</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm KD3_NgânTK
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">11/07/2020</td>
                        <td class="colNb"><b>28.500</b></td>
                        <td class="col-align-left">Đến ngày 10/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40119" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=61616">61616</a>
                        </td>
                        <td class="col-align-center">70057</td>
                        <td class="col-align-center">SUZY SHOP</td>
                        <td>Đỗ Thị Ngọc Hân</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Phòng
                            KD1_NgânHTM</td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">11/07/2020</td>
                        <td class="colNb"><b>15.000</b></td>
                        <td class="col-align-left">Đến ngày 10/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40117" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=61949">61949</a>
                        </td>
                        <td class="col-align-center">78018</td>
                        <td class="col-align-center">DEAR MAN</td>
                        <td>Nguyễn Quốc Gia Thịnh</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm KD5_LiêmNT
                            <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm KD4_ThịnhNQG</td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">11/07/2020</td>
                        <td class="colNb"><b>5.250</b></td>
                        <td class="col-align-left">Đến ngày 10/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40111" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=62095">62095</a>
                        </td>
                        <td class="col-align-center">73037</td>
                        <td class="col-align-center">Tuk Tuk Shop</td>
                        <td>Trần Thị Ngọc Quyền</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm KD3_NgânTK
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">11/07/2020</td>
                        <td class="colNb"><b>750</b></td>
                        <td class="col-align-left">Đến ngày 10/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40107" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=62618">62618</a>
                        </td>
                        <td class="col-align-center">72439</td>
                        <td class="col-align-center">LIONRAINCOAT</td>
                        <td>Nguyễn Thị Anh Thư</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Phòng
                            KD1_NgânHTM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm
                            KD9_ThưNTA</td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">11/07/2020</td>
                        <td class="colNb"><b>1.500</b></td>
                        <td class="col-align-left">Đến ngày 10/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40100" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=62669">62669</a>
                        </td>
                        <td class="col-align-center">79574</td>
                        <td class="col-align-center">Tree House Beauty Cosmetics</td>
                        <td>Nguyễn Thị Như Huệ</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Phòng
                            KD1_NgânHTM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm
                            KD9_ThưNTA</td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">11/07/2020</td>
                        <td class="colNb"><b>2.250</b></td>
                        <td class="col-align-left">Đến ngày 10/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40099" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=59532">59532</a>
                        </td>
                        <td class="col-align-center">64247</td>
                        <td class="col-align-center">UKMartvn</td>
                        <td>Lê Quốc Duy</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Sale Marketing
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">04/07/2020</td>
                        <td class="colNb"><b>750</b></td>
                        <td class="col-align-left">Đến ngày 03/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40066" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=59542">59542</a>
                        </td>
                        <td class="col-align-center">69029</td>
                        <td class="col-align-center">Săn Hàng Sỉ</td>
                        <td>Huỳnh Diễm Thy</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm KD3_NgânTK
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">04/07/2020</td>
                        <td class="colNb"><b>1.500</b></td>
                        <td class="col-align-left">Đến ngày 03/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40065" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=59630">59630</a>
                        </td>
                        <td class="col-align-center">2260</td>
                        <td class="col-align-center">Venice Store</td>
                        <td>Nguyễn Viết Lâm</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Phòng KD8_LâmNV
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">04/07/2020</td>
                        <td class="colNb"><b>13.500</b></td>
                        <td class="col-align-left">Đến ngày 03/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40063" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=59724">59724</a>
                        </td>
                        <td class="col-align-center">73363</td>
                        <td class="col-align-center">Trương Thị Mỹ Điểm</td>
                        <td>Phan Ngọc Ý Linh</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Phòng
                            KD1_NgânHTM</td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">04/07/2020</td>
                        <td class="colNb"><b>750</b></td>
                        <td class="col-align-left">Đến ngày 03/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40061" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=59904">59904</a>
                        </td>
                        <td class="col-align-center">72947</td>
                        <td class="col-align-center">3M Store</td>
                        <td>Trần Thị Yến Phương</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm KD5_LiêmNT
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">04/07/2020</td>
                        <td class="colNb"><b>3.375</b></td>
                        <td class="col-align-left">Đến ngày 03/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40055" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=60065">60065</a>
                        </td>
                        <td class="col-align-center">69885</td>
                        <td class="col-align-center">MỐT NHẤT</td>
                        <td>Đỗ Thị Ngọc Hân</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Phòng
                            KD1_NgânHTM</td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">04/07/2020</td>
                        <td class="colNb"><b>750</b></td>
                        <td class="col-align-left">Đến ngày 03/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40054" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=60122">60122</a>
                        </td>
                        <td class="col-align-center">68474</td>
                        <td class="col-align-center">alphabuy.vn</td>
                        <td>Trần Thị Ngọc Quyền</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm KD3_NgânTK
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">04/07/2020</td>
                        <td class="colNb"><b>3.750</b></td>
                        <td class="col-align-left">Đến ngày 03/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40051" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=60139">60139</a>
                        </td>
                        <td class="col-align-center">71717</td>
                        <td class="col-align-center">Linh kiện 3m HCM</td>
                        <td>Huỳnh Diễm Thy</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm KD3_NgânTK
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">04/07/2020</td>
                        <td class="colNb"><b>750</b></td>
                        <td class="col-align-left">Đến ngày 03/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40049" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=60345">60345</a>
                        </td>
                        <td class="col-align-center">73869</td>
                        <td class="col-align-center">LitiBaby</td>
                        <td>Nguyễn Viết Lâm</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Phòng KD8_LâmNV
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">04/07/2020</td>
                        <td class="colNb"><b>10.500</b></td>
                        <td class="col-align-left">Đến ngày 03/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40045" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=60372">60372</a>
                        </td>
                        <td class="col-align-center">72624</td>
                        <td class="col-align-center">Xanh Bất Tận</td>
                        <td>Nguyễn Thị Anh Thư</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Phòng
                            KD1_NgânHTM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm
                            KD9_ThưNTA</td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">04/07/2020</td>
                        <td class="colNb"><b>1.500</b></td>
                        <td class="col-align-left">Đến ngày 03/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40044" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=60457">60457</a>
                        </td>
                        <td class="col-align-center">74990</td>
                        <td class="col-align-center">Shop em bé</td>
                        <td>Trần Minh Thu</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Sale Marketing
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">04/07/2020</td>
                        <td class="colNb"><b>84.000</b></td>
                        <td class="col-align-left">Đến ngày 03/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40042" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=61159">61159</a>
                        </td>
                        <td class="col-align-center">47955</td>
                        <td class="col-align-center">ENPI</td>
                        <td>Nguyễn Thị Anh Thư</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Phòng
                            KD1_NgânHTM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm
                            KD9_ThưNTA</td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">04/07/2020</td>
                        <td class="colNb"><b>9.000</b></td>
                        <td class="col-align-left">Đến ngày 03/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40024" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=61220">61220</a>
                        </td>
                        <td class="col-align-center">42237</td>
                        <td class="col-align-center">DIY VietNam</td>
                        <td>Lê Quốc Duy</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Sale Marketing
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">04/07/2020</td>
                        <td class="colNb"><b>1.500</b></td>
                        <td class="col-align-left">Đến ngày 03/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40023" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=61293">61293</a>
                        </td>
                        <td class="col-align-center">74551</td>
                        <td class="col-align-center">LA Boutique</td>
                        <td>Phan Ngọc Ý Linh</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Phòng
                            KD1_NgânHTM</td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">04/07/2020</td>
                        <td class="colNb"><b>39.750</b></td>
                        <td class="col-align-left">Đến ngày 03/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40022" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=61369">61369</a>
                        </td>
                        <td class="col-align-center">75894</td>
                        <td class="col-align-center">FOXSHOP</td>
                        <td>Huỳnh Ngọc Hải</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Phòng
                            KD1_NgânHTM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm
                            KD9_ThưNTA</td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">04/07/2020</td>
                        <td class="colNb"><b>9.375</b></td>
                        <td class="col-align-left">Đến ngày 03/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40018" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=61369">61369</a>
                        </td>
                        <td class="col-align-center">75894</td>
                        <td class="col-align-center">FOXSHOP</td>
                        <td>Nguyễn Thị Anh Thư</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Phòng
                            KD1_NgânHTM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm
                            KD9_ThưNTA</td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">04/07/2020</td>
                        <td class="colNb"><b>9.375</b></td>
                        <td class="col-align-left">Đến ngày 03/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40017" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=61463">61463</a>
                        </td>
                        <td class="col-align-center">67425</td>
                        <td class="col-align-center">Phạm Ngọc Tích</td>
                        <td>Trần Thị Ngọc Quyền</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm KD3_NgânTK
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">04/07/2020</td>
                        <td class="colNb"><b>1.500</b></td>
                        <td class="col-align-left">Đến ngày 03/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40014" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=61602">61602</a>
                        </td>
                        <td class="col-align-center">73425</td>
                        <td class="col-align-center">MKonline</td>
                        <td>Huỳnh Diễm Thy</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm KD3_NgânTK
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">04/07/2020</td>
                        <td class="colNb"><b>6.750</b></td>
                        <td class="col-align-left">Đến ngày 03/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40009" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=61616">61616</a>
                        </td>
                        <td class="col-align-center">70057</td>
                        <td class="col-align-center">SUZY SHOP</td>
                        <td>Đỗ Thị Ngọc Hân</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Phòng
                            KD1_NgânHTM</td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">04/07/2020</td>
                        <td class="colNb"><b>12.750</b></td>
                        <td class="col-align-left">Đến ngày 03/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40008" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=61949">61949</a>
                        </td>
                        <td class="col-align-center">78018</td>
                        <td class="col-align-center">DEAR MAN</td>
                        <td>Nguyễn Quốc Gia Thịnh</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm KD5_LiêmNT
                            <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm KD4_ThịnhNQG</td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">04/07/2020</td>
                        <td class="colNb"><b>750</b></td>
                        <td class="col-align-left">Đến ngày 03/07/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="40003" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=59904">59904</a>
                        </td>
                        <td class="col-align-center">72947</td>
                        <td class="col-align-center">3M Store</td>
                        <td>Trần Thị Yến Phương</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm KD5_LiêmNT
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">30/06/2020</td>
                        <td class="colNb"><b>7.125</b></td>
                        <td class="col-align-left">Đến ngày 30/06/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="39887" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=60065">60065</a>
                        </td>
                        <td class="col-align-center">69885</td>
                        <td class="col-align-center">MỐT NHẤT</td>
                        <td>Đỗ Thị Ngọc Hân</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Phòng
                            KD1_NgânHTM</td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">30/06/2020</td>
                        <td class="colNb"><b>2.250</b></td>
                        <td class="col-align-left">Đến ngày 30/06/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="39886" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=60122">60122</a>
                        </td>
                        <td class="col-align-center">68474</td>
                        <td class="col-align-center">alphabuy.vn</td>
                        <td>Trần Thị Ngọc Quyền</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm KD3_NgânTK
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">30/06/2020</td>
                        <td class="colNb"><b>4.500</b></td>
                        <td class="col-align-left">Đến ngày 30/06/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="39884" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=60139">60139</a>
                        </td>
                        <td class="col-align-center">71717</td>
                        <td class="col-align-center">Linh kiện 3m HCM</td>
                        <td>Huỳnh Diễm Thy</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm KD3_NgânTK
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">30/06/2020</td>
                        <td class="colNb"><b>2.250</b></td>
                        <td class="col-align-left">Đến ngày 30/06/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="39882" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=60300">60300</a>
                        </td>
                        <td class="col-align-center">44270</td>
                        <td class="col-align-center">RIN SHOPPE</td>
                        <td>Hồ Tấn Hải</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Phòng KD8_LâmNV
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">30/06/2020</td>
                        <td class="colNb"><b>3.750</b></td>
                        <td class="col-align-left">Đến ngày 30/06/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="39879" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=60345">60345</a>
                        </td>
                        <td class="col-align-center">73869</td>
                        <td class="col-align-center">LitiBaby</td>
                        <td>Nguyễn Viết Lâm</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Phòng KD8_LâmNV
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">30/06/2020</td>
                        <td class="colNb"><b>20.250</b></td>
                        <td class="col-align-left">Đến ngày 30/06/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="39875" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=60457">60457</a>
                        </td>
                        <td class="col-align-center">74990</td>
                        <td class="col-align-center">Shop em bé</td>
                        <td>Trần Minh Thu</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Sale Marketing
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">30/06/2020</td>
                        <td class="colNb"><b>82.500</b></td>
                        <td class="col-align-left">Đến ngày 30/06/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="39872" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=61293">61293</a>
                        </td>
                        <td class="col-align-center">74551</td>
                        <td class="col-align-center">LA Boutique</td>
                        <td>Phan Ngọc Ý Linh</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Phòng
                            KD1_NgânHTM</td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">30/06/2020</td>
                        <td class="colNb"><b>77.250</b></td>
                        <td class="col-align-left">Đến ngày 30/06/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="39845" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=61463">61463</a>
                        </td>
                        <td class="col-align-center">67425</td>
                        <td class="col-align-center">Phạm Ngọc Tích</td>
                        <td>Trần Thị Ngọc Quyền</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm KD3_NgânTK
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">30/06/2020</td>
                        <td class="colNb"><b>3.750</b></td>
                        <td class="col-align-left">Đến ngày 30/06/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="39836" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=61602">61602</a>
                        </td>
                        <td class="col-align-center">73425</td>
                        <td class="col-align-center">MKonline</td>
                        <td>Huỳnh Diễm Thy</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm KD3_NgânTK
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">30/06/2020</td>
                        <td class="colNb"><b>3.000</b></td>
                        <td class="col-align-left">Đến ngày 30/06/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="39831" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=61616">61616</a>
                        </td>
                        <td class="col-align-center">70057</td>
                        <td class="col-align-center">SUZY SHOP</td>
                        <td>Đỗ Thị Ngọc Hân</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Phòng
                            KD1_NgânHTM</td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">30/06/2020</td>
                        <td class="colNb"><b>9.750</b></td>
                        <td class="col-align-left">Đến ngày 30/06/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="39830" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=62095">62095</a>
                        </td>
                        <td class="col-align-center">73037</td>
                        <td class="col-align-center">Tuk Tuk Shop</td>
                        <td>Trần Thị Ngọc Quyền</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm KD3_NgânTK
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">30/06/2020</td>
                        <td class="colNb"><b>1.500</b></td>
                        <td class="col-align-left">Đến ngày 30/06/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="39821" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=59382">59382</a>
                        </td>
                        <td class="col-align-center">71084</td>
                        <td class="col-align-center">Học Piano Vui</td>
                        <td>Huỳnh Diễm Thy</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm KD3_NgânTK
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">27/06/2020</td>
                        <td class="colNb"><b>8.250</b></td>
                        <td class="col-align-left">Đến ngày 26/06/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="39729" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=59904">59904</a>
                        </td>
                        <td class="col-align-center">72947</td>
                        <td class="col-align-center">3M Store</td>
                        <td>Trần Thị Yến Phương</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm KD5_LiêmNT
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">27/06/2020</td>
                        <td class="colNb"><b>16.125</b></td>
                        <td class="col-align-left">Đến ngày 26/06/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="39713" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=60065">60065</a>
                        </td>
                        <td class="col-align-center">69885</td>
                        <td class="col-align-center">MỐT NHẤT</td>
                        <td>Đỗ Thị Ngọc Hân</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Phòng
                            KD1_NgânHTM</td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">27/06/2020</td>
                        <td class="colNb"><b>4.500</b></td>
                        <td class="col-align-left">Đến ngày 26/06/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="39710" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=60122">60122</a>
                        </td>
                        <td class="col-align-center">68474</td>
                        <td class="col-align-center">alphabuy.vn</td>
                        <td>Trần Thị Ngọc Quyền</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm KD3_NgânTK
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">27/06/2020</td>
                        <td class="colNb"><b>7.500</b></td>
                        <td class="col-align-left">Đến ngày 26/06/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="39707" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=60139">60139</a>
                        </td>
                        <td class="col-align-center">71717</td>
                        <td class="col-align-center">Linh kiện 3m HCM</td>
                        <td>Huỳnh Diễm Thy</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Nhóm KD3_NgânTK
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">27/06/2020</td>
                        <td class="colNb"><b>1.500</b></td>
                        <td class="col-align-left">Đến ngày 26/06/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="39705" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=60300">60300</a>
                        </td>
                        <td class="col-align-center">44270</td>
                        <td class="col-align-center">RIN SHOPPE</td>
                        <td>Hồ Tấn Hải</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Phòng KD8_LâmNV
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">27/06/2020</td>
                        <td class="colNb"><b>7.500</b></td>
                        <td class="col-align-left">Đến ngày 26/06/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="39702" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=60345">60345</a>
                        </td>
                        <td class="col-align-center">73869</td>
                        <td class="col-align-center">LitiBaby</td>
                        <td>Nguyễn Viết Lâm</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Phòng KD8_LâmNV
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">27/06/2020</td>
                        <td class="colNb"><b>16.500</b></td>
                        <td class="col-align-left">Đến ngày 26/06/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="39698" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=60457">60457</a>
                        </td>
                        <td class="col-align-center">74990</td>
                        <td class="col-align-center">Shop em bé</td>
                        <td>Trần Minh Thu</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Sale Marketing
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">27/06/2020</td>
                        <td class="colNb"><b>164.250</b></td>
                        <td class="col-align-left">Đến ngày 26/06/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="39693" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=61220">61220</a>
                        </td>
                        <td class="col-align-center">42237</td>
                        <td class="col-align-center">DIY VietNam</td>
                        <td>Lê Quốc Duy</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Sale Marketing
                        </td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">27/06/2020</td>
                        <td class="colNb"><b>2.250</b></td>
                        <td class="col-align-left">Đến ngày 26/06/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="39663" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a target="_blank"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=61293">61293</a>
                        </td>
                        <td class="col-align-center">74551</td>
                        <td class="col-align-center">LA Boutique</td>
                        <td>Phan Ngọc Ý Linh</td>
                        <td>Nhanh HCM <i class="fa fa-caret-right"></i> Nhanh HCM - Phòng
                            KD1_NgânHTM</td>
                        <td class="col-align-center"><span class="text-info">Doanh số vận
                                chuyển</span></td>
                        <td class="col-align-center">27/06/2020</td>
                        <td class="colNb"><b>139.500</b></td>
                        <td class="col-align-left">Đến ngày 26/06/2020</td>
                        <td class="col-align-center"><span data-toggle="tooltip"
                                data-title="7399 - Nguyễn Thị Việt Trinh" style="cursor:pointer;"
                                data-id="39662" class="label label-success ">Đã xác nhận</span></td>
                        <td class="colControls" style="text-align: center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="7"><b>Tổng</b></td>
                        <td class="colNb"><b>2.292.375</b></td>
                        <td colspan="3"></td>
                    </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div class="col-md-6 paginatorItem">
                    <div class="paginator"><span class="labelPages">1 - 100 / 1,063</span><span
                            class="disabled fa fa-step-backward"></span><span
                            class="disabled fa fa-backward"></span><a class="fa fa-forward"
                            href="https://erp.nhanh.vn/crm/bill/salary?page=2"
                            title="Trang sau"></a> <a class="fa fa-step-forward"
                            href="https://erp.nhanh.vn/crm/bill/salary?page=11"
                            title="Trang cuối"></a></div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="errorModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Lỗi</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default"
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
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Xác nhận</h4>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" class="referId" value="">
                        <div class="alert alert-warning">
                            Bạn muốn xóa doanh số này không? </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary accept">Có</button>
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Không</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="changeStatusModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Xác nhận đổi trạng thái</h4>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" class="referId" value="">
                        <div class="alert alert-warning">
                            Bạn chắc chắn đổi trạng thái doanh số này? </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary saveChangeStatus">Có</button>
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Không</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="updateNhanhStoreIdModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Update doanh nghiệp Nhanh trên hợp đồng <span
                                class="showContractId"></span></h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-horizontal inputArea">
                            <div class="form-group">
                                <label class="col-md-4 control-label required">NhanhStoreId</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control nhanhStoreId" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label
                                    class="col-md-4 control-label required">NhanhStoreName</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control nhanhStoreName" value="">
                                </div>
                            </div>
                        </div>
                        <div class="form-horizontal loadingArea"
                            style="text-align: center; font-size: 3em; display: none;">
                            <i class="fa fa-refresh"></i>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" class="contractId-txt">
                        <button type="button" class="btn btn-warning saveNhanhStore"
                            data-saving-text="Saving...">Lưu</button>
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Hủy</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="alertModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Thông báo!</h4>
                    </div>
                    <div class="modal-body">

                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-default reload"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <script>
            var STATUS_PAID = '1';
            var STATUS_OWN = '2';
        </script>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        var usrCnf = {
            language: 'vi'
        };
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/bill/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/bill/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/bill/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/bill/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/bill/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/bill/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/bill/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/bill/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/bill/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/bill/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/bill/saved_resource(2)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/bill/saved_resource(3)') }}"></script>
@endsection