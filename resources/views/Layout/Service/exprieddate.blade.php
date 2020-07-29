@extends('Layout.master')

@section('title','ERP-Danh Sách Gian Hàng')

@section('css')
    <link rel="stylesheet" href="{{ asset('asset/css/service/style.css') }}" type="text/css">  
@endsection

@section('content-page')
    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/crm/service/index">Danh sách gian hàng</a></li>
        </ul>
        <div class="filterContainer">
            <form method="GET" name="crmServiceFilter" class="form-inline" role="form"
                id="crmServiceFilter"><input type="hidden" name="daterangepicker"
                    class="form-control date-range-picker" id="daterangepicker" value="">
                <div class="form-group"><select name="companyId" id="companyId"
                        class="form-control">
                        <option value="">- Công ty -</option>
                        <option value="2">Công ty cổ phần Vật Giá Việt Nam</option>
                        <option value="1">Nhanh.vn</option>
                    </select></div>
                <div class="form-group"><input type="text" name="id" maxlength="10" placeholder="ID"
                        id="id" class="form-control" value=""></div>
                <div class="form-group"><input type="text" name="leadName" maxlength="255"
                        placeholder="Tên khách hàng" id="leadName" class="form-control" value="">
                </div>
                <div class="form-group"><input type="text" name="privateName" maxlength="255"
                        placeholder="Tên Gian Hàng" id="privateName" class="form-control" value="">
                </div> <input type="hidden" name="leadId" id="leadId" class="form-control"
                    value=""><input type="hidden" name="accountId" id="accountId"
                    class="form-control" value=""><input type="hidden" name="notMeetMonth"
                    id="notMeetMonth" class="form-control" value=""><input type="hidden"
                    name="nextExpired" id="nextExpired" class="form-control" value=""><input
                    type="hidden" name="notCareMonth" id="notCareMonth" class="form-control"
                    value="">
                <div class="form-group"><input type="text" name="createdDaterangepicker"
                        class="form-control date-range-picker" placeholder="Thời gian Tạo"
                        id="createdDaterangepicker" value=""></div>
                <div class="form-group"><input name="submit" type="submit" id="btnFilterCrmContact"
                        class="form-control btn btn-primary" value="Lọc"></div>
            </form>
        </div>
        <div class="dgContainer">
            <div style="display: none; width: 1556px;" class="stickyHeader">
                <table class="table table-bordered" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr class="even">
                            <th style="width: 84px;">STT</th>
                            <th style="width: 98px;">ID</th>
                            <th style="width: 444px;">Gian hàng</th>
                            <th style="width: 206px;">Ngày bắt đầu</th>
                            <th style="width: 214px;">Ngày kết thúc</th>
                            <th style="width: 394px;">Người tạo | Phụ trách</th>
                            <th style="width: 116px;">Số HĐ</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div class="col-md-6 paginatorItem">
                    <div class="paginator"><span class="labelPages">1 - 30 / 7,463</span><span
                            class="disabled fa fa-step-backward"></span><span
                            class="disabled fa fa-backward"></span><a class="fa fa-forward"
                            href="https://erp.nhanh.vn/crm/service/exprieddate?page=2"
                            title="Trang sau"></a> <a class="fa fa-step-forward"
                            href="https://erp.nhanh.vn/crm/service/exprieddate?page=249"
                            title="Trang cuối"></a></div>
                </div>
                <div style="clear: both;"></div><br>
            </div>
            <table id="dgContract" class="table table-hover">
                <thead>
                    <tr class="even">
                        <th>STT</th>
                        <th>ID</th>
                        <th>Gian hàng</th>
                        <th>Ngày bắt đầu</th>
                        <th>Ngày kết thúc</th>
                        <th>Người tạo | Phụ trách</th>
                        <th>Số HĐ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="h">
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8306">1</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8306">8306</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8306">vietthaidecal</a>
                        </td>
                        <td style="height:100px;" class="col-align-center">24/03/2020</td>
                        <td style="height:100px;" class="col-align-center">24/05/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=972"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Phan Vũ Như
                                Quỳnh</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8292"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Trương
                                Thị Tường Vi</a></td>
                        <td class="col-align-center">1</td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8305">2</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8305">8305</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8305">banghephucuonghung</a>
                        </td>
                        <td style="height:100px;" class="col-align-center">20/03/2020</td>
                        <td style="height:100px;" class="col-align-center">20/06/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=1002"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Trần Văn Anh
                                Vũ</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8292"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Trương
                                Thị Tường Vi</a></td>
                        <td class="col-align-center">1</td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8303">3</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8303">8303</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8303">dogophamgia</a>
                        </td>
                        <td style="height:100px;" class="col-align-center">18/03/2020</td>
                        <td style="height:100px;" class="col-align-center">18/07/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=7957"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Vũ Duy
                                Hoàng</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8292"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Trương
                                Thị Tường Vi</a></td>
                        <td class="col-align-center">1</td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8302">4</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8302">8302</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8302">mazdagovapvn</a>
                        </td>
                        <td style="height:100px;" class="col-align-center">18/03/2020</td>
                        <td style="height:100px;" class="col-align-center">18/07/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=7435"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Nguyễn Thị Ngọc
                                Trầm</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8292"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Trương
                                Thị Tường Vi</a></td>
                        <td class="col-align-center">1</td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8299">5</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8299">8299</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8299">SUNTEK</a></td>
                        <td style="height:100px;" class="col-align-center">13/03/2020</td>
                        <td style="height:100px;" class="col-align-center">14/07/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=1002"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Trần Văn Anh
                                Vũ</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8292"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Trương
                                Thị Tường Vi</a></td>
                        <td class="col-align-center">1</td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8297">6</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8297">8297</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8297">dogonoithatannhien</a>
                        </td>
                        <td style="height:100px;" class="col-align-center">09/03/2020</td>
                        <td style="height:100px;" class="col-align-center">09/07/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=1249"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Tạ Thị
                                Thùy</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=6797"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Lê Thùy
                                Linh</a></td>
                        <td class="col-align-center">1</td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8293">7</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8293">8293</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8293">thienngan99</a>
                        </td>
                        <td style="height:100px;" class="col-align-center">28/02/2020</td>
                        <td style="height:100px;" class="col-align-center">28/06/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=939"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Phan Thành
                                Quang</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8292"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Trương
                                Thị Tường Vi</a></td>
                        <td class="col-align-center">1</td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8291">8</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8291">8291</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8291">dogohuytuyen</a>
                        </td>
                        <td style="height:100px;" class="col-align-center">27/02/2020</td>
                        <td style="height:100px;" class="col-align-center">27/06/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=1224"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Nguyễn Thị Quỳnh
                                Vân</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=6797"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Lê Thùy
                                Linh</a></td>
                        <td class="col-align-center">1</td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8278">9</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8278">8278</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8278">StoreThietbi</a>
                        </td>
                        <td style="height:100px;" class="col-align-center">31/12/2019</td>
                        <td style="height:100px;" class="col-align-center">01/07/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8096"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Thái Chí
                                Toàn</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8292"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Trương
                                Thị Tường Vi</a></td>
                        <td class="col-align-center">1</td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8275">10</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8275">8275</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8275">noithatgoducnguyen</a>
                        </td>
                        <td style="height:100px;" class="col-align-center">30/12/2019</td>
                        <td style="height:100px;" class="col-align-center">30/04/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=7957"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Vũ Duy
                                Hoàng</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8292"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Trương
                                Thị Tường Vi</a></td>
                        <td class="col-align-center"></td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8274">11</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8274">8274</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8274">anhkhoashopbim</a>
                        </td>
                        <td style="height:100px;" class="col-align-center">27/12/2019</td>
                        <td style="height:100px;" class="col-align-center">27/03/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=7435"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Nguyễn Thị Ngọc
                                Trầm</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8292"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Trương
                                Thị Tường Vi</a></td>
                        <td class="col-align-center">1</td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8273">12</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8273">8273</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8273">noithatnicefur</a>
                        </td>
                        <td style="height:100px;" class="col-align-center">27/12/2019</td>
                        <td style="height:100px;" class="col-align-center">27/06/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8353"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Trần Thị Kim
                                Liên</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8292"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Trương
                                Thị Tường Vi</a></td>
                        <td class="col-align-center">1</td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8271">13</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8271">8271</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8271">maydonggoi_maythucpham</a>
                        </td>
                        <td style="height:100px;" class="col-align-center">17/12/2019</td>
                        <td style="height:100px;" class="col-align-center">20/05/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=1249"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Tạ Thị
                                Thùy</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=1249"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Tạ Thị
                                Thùy</a></td>
                        <td class="col-align-center">1</td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8270">14</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8270">8270</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8270">maihuynhthienphatvn</a>
                        </td>
                        <td style="height:100px;" class="col-align-center">13/12/2019</td>
                        <td style="height:100px;" class="col-align-center">13/07/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=7435"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Nguyễn Thị Ngọc
                                Trầm</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8292"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Trương
                                Thị Tường Vi</a></td>
                        <td class="col-align-center">1</td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8269">15</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8269">8269</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8269">ATI0901</a>
                        </td>
                        <td style="height:100px;" class="col-align-center">13/12/2019</td>
                        <td style="height:100px;" class="col-align-center">13/04/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=7492"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Lê Cát Mộng
                                Linh</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8292"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Trương
                                Thị Tường Vi</a></td>
                        <td class="col-align-center">1</td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8268">16</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8268">8268</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8268">noithathoanthien</a>
                        </td>
                        <td style="height:100px;" class="col-align-center">11/12/2019</td>
                        <td style="height:100px;" class="col-align-center">11/06/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=7435"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Nguyễn Thị Ngọc
                                Trầm</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8292"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Trương
                                Thị Tường Vi</a></td>
                        <td class="col-align-center">1</td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8266">17</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8266">8266</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8266">BASmachinery</a>
                        </td>
                        <td style="height:100px;" class="col-align-center">06/12/2019</td>
                        <td style="height:100px;" class="col-align-center">06/06/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=7435"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Nguyễn Thị Ngọc
                                Trầm</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8292"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Trương
                                Thị Tường Vi</a></td>
                        <td class="col-align-center">1</td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8264">18</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8264">8264</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8264">inoxhoanggia</a>
                        </td>
                        <td style="height:100px;" class="col-align-center">06/12/2019</td>
                        <td style="height:100px;" class="col-align-center">06/06/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=1002"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Trần Văn Anh
                                Vũ</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8292"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Trương
                                Thị Tường Vi</a></td>
                        <td class="col-align-center">1</td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8263">19</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8263">8263</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8263">thietbiytehangdauvietnam</a>
                        </td>
                        <td style="height:100px;" class="col-align-center">05/12/2019</td>
                        <td style="height:100px;" class="col-align-center">05/03/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=1093"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Vũ Thị Phương
                                Anh</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=4405"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Phạm
                                Thị Giang</a></td>
                        <td class="col-align-center">1</td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8261">20</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8261">8261</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8261">noithatthuyduong</a>
                        </td>
                        <td style="height:100px;" class="col-align-center">02/12/2019</td>
                        <td style="height:100px;" class="col-align-center">02/03/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=1093"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Vũ Thị Phương
                                Anh</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=4405"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Phạm
                                Thị Giang</a></td>
                        <td class="col-align-center">1</td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8259">21</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8259">8259</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8259">thegioinhua86</a>
                        </td>
                        <td style="height:100px;" class="col-align-center">29/11/2019</td>
                        <td style="height:100px;" class="col-align-center">15/04/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=1002"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Trần Văn Anh
                                Vũ</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8292"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Trương
                                Thị Tường Vi</a></td>
                        <td class="col-align-center"></td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8258">22</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8258">8258</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8258">banghecafeminhkhoi</a>
                        </td>
                        <td style="height:100px;" class="col-align-center">28/11/2019</td>
                        <td style="height:100px;" class="col-align-center">28/02/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8266"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Trần Thị Cẩm
                                Mỹ</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8292"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Trương
                                Thị Tường Vi</a></td>
                        <td class="col-align-center">1</td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8255">23</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8255">8255</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8255">tancuongtech</a>
                        </td>
                        <td style="height:100px;" class="col-align-center">26/11/2019</td>
                        <td style="height:100px;" class="col-align-center">26/03/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=1224"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Nguyễn Thị Quỳnh
                                Vân</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=4405"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Phạm
                                Thị Giang</a></td>
                        <td class="col-align-center">1</td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8254">24</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8254">8254</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8254">tuikhinhapkhau</a>
                        </td>
                        <td style="height:100px;" class="col-align-center">25/11/2019</td>
                        <td style="height:100px;" class="col-align-center">25/02/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=1004"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Đỗ Văn
                                Thảo</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8292"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Trương
                                Thị Tường Vi</a></td>
                        <td class="col-align-center">1</td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8253">25</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8253">8253</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8253">TPPack</a></td>
                        <td style="height:100px;" class="col-align-center">25/11/2019</td>
                        <td style="height:100px;" class="col-align-center">25/05/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=1002"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Trần Văn Anh
                                Vũ</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8292"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Trương
                                Thị Tường Vi</a></td>
                        <td class="col-align-center">1</td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8252">26</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8252">8252</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8252">ANTHAIVIETNAM</a>
                        </td>
                        <td style="height:100px;" class="col-align-center">22/11/2019</td>
                        <td style="height:100px;" class="col-align-center">22/05/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=1152"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Phạm Thị Thu
                                Hằng</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=4405"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Phạm
                                Thị Giang</a></td>
                        <td class="col-align-center"></td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8251">27</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8251">8251</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8251">BANGHENGUYEN</a>
                        </td>
                        <td style="height:100px;" class="col-align-center">22/11/2019</td>
                        <td style="height:100px;" class="col-align-center">22/02/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=7492"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Lê Cát Mộng
                                Linh</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8292"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Trương
                                Thị Tường Vi</a></td>
                        <td class="col-align-center">1</td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8249">28</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8249">8249</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8249">bangghim</a>
                        </td>
                        <td style="height:100px;" class="col-align-center">22/11/2019</td>
                        <td style="height:100px;" class="col-align-center">22/05/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=7957"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Vũ Duy
                                Hoàng</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8292"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Trương
                                Thị Tường Vi</a></td>
                        <td class="col-align-center">1</td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8248">29</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8248">8248</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8248">hoachat12346</a>
                        </td>
                        <td style="height:100px;" class="col-align-center">21/11/2019</td>
                        <td style="height:100px;" class="col-align-center">21/05/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=7435"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Nguyễn Thị Ngọc
                                Trầm</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8292"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Trương
                                Thị Tường Vi</a></td>
                        <td class="col-align-center">1</td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8247">30</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8247">8247</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8247">NOITHATLAVACO</a>
                        </td>
                        <td style="height:100px;" class="col-align-center">15/11/2019</td>
                        <td style="height:100px;" class="col-align-center">15/05/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=5758"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Nguyễn Hữu
                                Lưu</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8292"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Trương
                                Thị Tường Vi</a></td>
                        <td class="col-align-center">1</td>
                    </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div class="col-md-6 paginatorItem">
                    <div class="paginator"><span class="labelPages">1 - 30 / 7,463</span><span
                            class="disabled fa fa-step-backward"></span><span
                            class="disabled fa fa-backward"></span><a class="fa fa-forward"
                            href="https://erp.nhanh.vn/crm/service/exprieddate?page=2"
                            title="Trang sau"></a> <a class="fa fa-step-forward"
                            href="https://erp.nhanh.vn/crm/service/exprieddate?page=249"
                            title="Trang cuối"></a></div>
                </div>
            </div>
        </div>
        <div id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">×</button>
                        <h4 class="modal-title">Thông báo</h4>
                    </div>
                    <div class="modal-body"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary confirm">Xác nhận</button>
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
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
        <style>
            /* table tr td{
    text-align:center;
    } */

            .td-history {
                margin: 0;
                padding: 0;
                min-width: 570px;
            }

            .td-history li {
                margin: 5px;
                border-bottom: 1px dashed gray;
                padding: 0;
                list-style: none;
            }

            .td-history li.last {
                border-bottom: none;
            }

            .td-history .head-activity {
                font-size: 1.1em;
                font-weight: bold;
            }

            .td-history .infor-activity {
                padding-left: 20px;
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
    <script type="text/javascript" src="{{ asset('asset/js/service/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/service/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/service/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/service/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/service/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/service/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/service/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/service/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/service/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/service/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/service/saved_resource(2)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/service/saved_resource(3)') }}"></script>
@endsection