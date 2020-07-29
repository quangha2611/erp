@extends('Layout.master')

@section('title','ERP-Danh Sách Gian Hàng')

@section('css')
    <link rel="stylesheet" href="{{ asset('asset/css/service/style.css') }}" type="text/css">  
@endsection

@section('content-page')
    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/crm/service/index">Danh sách gian hàng sắp hết hạn</a>
            </li>
        </ul>
        <div class="filterContainer">
            <form method="GET" name="crmServiceFilter" class="form-inline lolify" role="form"
                id="crmServiceFilter">
                <div class="col-md-10 lolify-default">

                    <div class="form-group">
                        <input type="text" name="daterangepicker"
                            class="form-control date-range-picker" id="daterangepicker"
                            value="01/07/2020 - 31/07/2020"> </div>
                    <div class="form-group">
                        <select name="companyId" id="companyId" class="form-control">
                            <option value="">- Công ty -</option>
                            <option value="2">Công ty cổ phần Vật Giá Việt Nam</option>
                            <option value="1">Nhanh.vn</option>
                        </select> </div>
                    <div class="form-group">
                        <input type="text" name="id" maxlength="10" placeholder="ID" id="id"
                            class="form-control" value=""> </div>
                    <div class="form-group">
                        <input type="text" name="leadName" maxlength="255"
                            placeholder="Tên khách hàng" id="leadName"
                            class="form-control ui-autocomplete-input" value="" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input type="text" name="privateName" maxlength="255"
                            placeholder="Tên Gian Hàng" id="privateName" class="form-control"
                            value=""> </div>
                    <input type="hidden" name="leadId" id="leadId" class="form-control" value="">
                    <input type="hidden" name="accountId" id="accountId" class="form-control"
                        value="">
                    <div class="form-group">
                        <input type="text" name="userName" maxlength="255"
                            placeholder="Nhân viên chăm sóc" id="userName"
                            class="form-control ui-autocomplete-input" value="" autocomplete="off">
                    </div>
                    <input type="hidden" name="userId" id="userId" class="form-control" value="">
                    <input type="hidden" name="notMeetMonth" id="notMeetMonth" class="form-control"
                        value=""> <input type="hidden" name="nextExpired" id="nextExpired"
                        class="form-control" value=""> <input type="hidden" name="notCareMonth"
                        id="notCareMonth" class="form-control" value="">
                    <div class="form-group">
                        <input type="text" name="fromDaterangepicker"
                            class="form-control date-range-picker" placeholder="Ngày bắt đầu"
                            id="fromDaterangepicker" value=""> </div>
                    <div class="form-group">
                        <input type="text" name="endDaterangepicker"
                            class="form-control date-range-picker" placeholder="Ngày hết hạn"
                            id="endDaterangepicker" value=""> </div>
                    <div class="form-group">
                        <input type="text" name="historyTimeDaterangepicker"
                            class="form-control date-range-picker" placeholder="Thời gian chăm sóc"
                            id="historyTimeDaterangepicker" value=""> </div>
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
                            <li><a href="https://erp.nhanh.vn/crm/service/expried#"
                                    id="exportExcel"><i class="fa fa-file-excel-o"></i> Xuất trang
                                    hiện tại</a></li>
                            <li><a id="exportAll"><i class="fa fa-file-excel-o"></i> Xuất Toàn
                                    bộ</a></li>
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
                        <input type="text" name="createdDaterangepicker"
                            class="form-control date-range-picker" placeholder="Thời gian Tạo"
                            id="createdDaterangepicker" value=""> </div>
                    <div class="form-group">
                        <input type="text" name="notCareDaterangepicker"
                            class="form-control date-range-picker"
                            placeholder="Thời gian không chăm sóc" id="notCareDaterangepicker"
                            value=""> </div>
                    <div class="form-group">
                        <input type="text" name="notMeetDaterangepicker"
                            class="form-control date-range-picker"
                            placeholder="Thời gian không đến gặp" id="notMeetDaterangepicker"
                            value=""> </div>
                    <div class="form-group">
                        <input type="text" name="beforeCreatedDate"
                            placeholder="Thời gian tạo trước ngày ..."
                            class="form-control datepicker" id="beforeCreatedDate" value=""> </div>
                    <div class="form-group">
                        <input type="text" name="beforeHandOverDate"
                            placeholder="Bàn giao trước ngày ..." class="form-control datepicker"
                            id="beforeHandOverDate" value=""> </div>
                    <div class="form-group">
                        <select name="expriedStatus" id="expriedStatus" class="form-control">
                            <option value="">- Hạn Gian hàng-</option>
                            <option value="1">GH còn hạn</option>
                            <option value="-1">Tất cả</option>
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
                            <th style="width: 82px;">STT</th>
                            <th style="width: 96px;">ID</th>
                            <th style="width: 460px;">Gian hàng</th>
                            <th style="width: 202px;">Ngày bắt đầu</th>
                            <th style="width: 209px;">Ngày kết thúc</th>
                            <th style="width: 393px;">Người tạo | Phụ trách</th>
                            <th style="width: 114px;">Số HĐ</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div class="col-md-6 paginatorItem">
                    <div class="paginator"><span class="labelPages">1 - 30 / 48</span><span
                            class="disabled fa fa-step-backward"></span><span
                            class="disabled fa fa-backward"></span><a class="fa fa-forward"
                            href="https://erp.nhanh.vn/crm/service/expried?page=2"
                            title="Trang sau"></a> <a class="fa fa-step-forward"
                            href="https://erp.nhanh.vn/crm/service/expried?page=2"
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
                    <tr class="">
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8307">1</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8307">8307</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8307">dienmaygiahung</a>
                        </td>
                        <td style="height:100px;" class="col-align-center">25/03/2020</td>
                        <td style="height:100px;" class="col-align-center">25/07/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=7114"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Trịnh Thị Phương
                                Nhi</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8292"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Trương
                                Thị Tường Vi</a><br>
                            <div title="25/03/2020 15:09:54">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2020-03-25 15:09:54 "></i> Nguyễn
                                Nhật Linh</div>
                        </td>
                        <td class="col-align-center">1</td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8303">2</a></td>
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
                                Thị Tường Vi</a><br>
                            <div title="18/03/2020 15:26:30">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2020-03-18 15:26:30 "></i> Nguyễn
                                Nhật Linh</div>
                        </td>
                        <td class="col-align-center">1</td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8302">3</a></td>
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
                                Thị Tường Vi</a><br>
                            <div title="18/03/2020 15:25:47">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2020-03-18 15:25:47 "></i> Đào
                                Ngọc Ánh</div>
                        </td>
                        <td class="col-align-center">1</td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8299">4</a></td>
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
                                Thị Tường Vi</a><br>
                            <div title="13/03/2020 10:39:06">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2020-03-13 10:39:06 "></i> Nguyễn
                                Nhật Linh</div>
                        </td>
                        <td class="col-align-center">1</td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8297">5</a></td>
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
                                Linh</a><br>
                            <div title="09/03/2020 14:31:14">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2020-03-09 14:31:14 "></i> Đào
                                Ngọc Ánh</div>
                        </td>
                        <td class="col-align-center">1</td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8278">6</a></td>
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
                                Thị Tường Vi</a><br>
                            <div title="31/12/2019 10:13:47">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2019-12-31 10:13:47 "></i> Phạm
                                Thị Hồng Linh</div>
                        </td>
                        <td class="col-align-center">1</td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8277">7</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8277">8277</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8277">Edu2Review</a>
                        </td>
                        <td style="height:100px;" class="col-align-center">30/12/2019</td>
                        <td style="height:100px;" class="col-align-center">30/07/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=673"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Nguyễn Hoàng
                                Long</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8292"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Trương
                                Thị Tường Vi</a><br>
                            <div title="30/12/2019 16:43:39">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2019-12-30 16:43:39 "></i> Phạm
                                Thị Hồng Linh</div>
                        </td>
                        <td class="col-align-center">1</td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8270">8</a></td>
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
                                Thị Tường Vi</a><br>
                            <div title="13/12/2019 14:50:15">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2019-12-13 14:50:15 "></i> Nguyễn
                                Nhật Linh</div>
                        </td>
                        <td class="col-align-center">1</td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8245">9</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8245">8245</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8245">quocbaoQL50</a>
                        </td>
                        <td style="height:100px;" class="col-align-center">17/03/2020</td>
                        <td style="height:100px;" class="col-align-center">19/07/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=7957"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Vũ Duy
                                Hoàng</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8292"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Trương
                                Thị Tường Vi</a><br>
                            <div title="12/11/2019 14:18:24">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2019-11-12 14:18:24 "></i> Phạm
                                Thị Hồng Linh</div>
                        </td>
                        <td class="col-align-center">1</td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8174">10</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8174">8174</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8174">thegioidienthoaico</a>
                        </td>
                        <td style="height:100px;" class="col-align-center">27/03/2020</td>
                        <td style="height:100px;" class="col-align-center">27/07/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=1002"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Trần Văn Anh
                                Vũ</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8292"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Trương
                                Thị Tường Vi</a><br>
                            <div title="26/08/2019 11:04:34">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2019-08-26 11:04:34 "></i> Phạm
                                Thị Hồng Linh</div>
                        </td>
                        <td class="col-align-center">5</td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8149">11</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8149">8149</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8149">noithatdaithanhmb</a>
                        </td>
                        <td style="height:100px;" class="col-align-center">25/07/2019</td>
                        <td style="height:100px;" class="col-align-center">25/07/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=673"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Nguyễn Hoàng
                                Long</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8292"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Trương
                                Thị Tường Vi</a><br>
                            <div title="25/07/2019 16:49:53">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2019-07-25 16:49:53 "></i> Phạm
                                Thị Hồng Linh</div>
                        </td>
                        <td class="col-align-center">1</td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8141">12</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8141">8141</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8141">ancovietnam</a>
                        </td>
                        <td style="height:100px;" class="col-align-center">19/07/2019</td>
                        <td style="height:100px;" class="col-align-center">19/07/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=1260"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Trần Phương
                                Chi</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=4405"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Phạm
                                Thị Giang</a><br>
                            <div title="19/07/2019 11:13:28">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2019-07-19 11:13:28 "></i> Phạm
                                Thị Hồng Linh</div>
                        </td>
                        <td class="col-align-center">1</td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8128">13</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8128">8128</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8128">SINHHOCNAMSAIGON</a>
                        </td>
                        <td style="height:100px;" class="col-align-center">27/12/2019</td>
                        <td style="height:100px;" class="col-align-center">04/07/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=7435"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Nguyễn Thị Ngọc
                                Trầm</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8292"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Trương
                                Thị Tường Vi</a><br>
                            <div title="04/07/2019 15:11:23">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2019-07-04 15:11:23 "></i> Phạm
                                Thị Hồng Linh</div>
                        </td>
                        <td class="col-align-center">2</td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8123">14</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8123">8123</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8123">NoiThatNhapKhauGreenFurni</a>
                        </td>
                        <td style="height:100px;" class="col-align-center">01/07/2019</td>
                        <td style="height:100px;" class="col-align-center">01/07/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=7435"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Nguyễn Thị Ngọc
                                Trầm</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8292"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Trương
                                Thị Tường Vi</a><br>
                            <div title="01/07/2019 11:01:53">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2019-07-01 11:01:53 "></i> Phạm
                                Thị Hồng Linh</div>
                        </td>
                        <td class="col-align-center">1</td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8109">15</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8109">8109</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8109">hoachatchemgroup</a>
                        </td>
                        <td style="height:100px;" class="col-align-center">05/12/2019</td>
                        <td style="height:100px;" class="col-align-center">13/07/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=1004"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Đỗ Văn
                                Thảo</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8292"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Trương
                                Thị Tường Vi</a><br>
                            <div title="13/06/2019 12:03:02">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2019-06-13 12:03:02 "></i> Phạm
                                Thị Hồng Linh</div>
                        </td>
                        <td class="col-align-center">3</td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8018">16</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8018">8018</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8018">mayepmiaDaiPhu</a>
                        </td>
                        <td style="height:100px;" class="col-align-center">24/12/2019</td>
                        <td style="height:100px;" class="col-align-center">24/07/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=1002"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Trần Văn Anh
                                Vũ</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8292"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Trương
                                Thị Tường Vi</a><br>
                            <div title="25/03/2019 13:55:39">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2019-03-25 13:55:39 "></i> Phạm
                                Thị Hồng Linh</div>
                        </td>
                        <td class="col-align-center">3</td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=7772">17</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=7772">7772</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=7772">maythucpham24h</a>
                        </td>
                        <td style="height:100px;" class="col-align-center">09/09/2019</td>
                        <td style="height:100px;" class="col-align-center">06/07/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=1096"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Phan Quỳnh
                                Hương</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=1096"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Phan
                                Quỳnh Hương</a><br>
                            <div title="02/08/2018 12:08:15">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2018-08-02 12:08:15 "></i> Phạm
                                Thị Hồng Linh</div>
                        </td>
                        <td class="col-align-center">3</td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=7567">18</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=7567">7567</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=7567">BCKKIENHUNG</a>
                        </td>
                        <td style="height:100px;" class="col-align-center">27/12/2019</td>
                        <td style="height:100px;" class="col-align-center">27/07/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=1224"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Nguyễn Thị Quỳnh
                                Vân</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=6787"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Nguyễn
                                Thanh Tâm</a><br>
                            <div title="18/04/2018 13:08:18">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2018-04-18 13:08:18 "></i> Phan
                                Thị Thùy Linh</div>
                        </td>
                        <td class="col-align-center">1</td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=7543">19</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=7543">7543</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=7543">banghephuongdong</a>
                        </td>
                        <td style="height:100px;" class="col-align-center">16/03/2020</td>
                        <td style="height:100px;" class="col-align-center">16/07/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=7435"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Nguyễn Thị Ngọc
                                Trầm</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8292"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Trương
                                Thị Tường Vi</a><br>
                            <div title="06/04/2018 15:31:32">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2018-04-06 15:31:32 "></i> Phan
                                Thị Thùy Linh</div>
                        </td>
                        <td class="col-align-center">8</td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=7210">20</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=7210">7210</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=7210">dogosieuquan</a>
                        </td>
                        <td style="height:100px;" class="col-align-center">18/04/2019</td>
                        <td style="height:100px;" class="col-align-center">01/07/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=1249"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Tạ Thị
                                Thùy</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=6787"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Nguyễn
                                Thanh Tâm</a><br>
                            <div title="23/11/2017 13:28:17">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2017-11-23 13:28:17 "></i> Nguyễn
                                Thị Mỹ Phượng</div>
                        </td>
                        <td class="col-align-center">3</td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=6614">21</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=6614">6614</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=6614">cokhituanviet</a>
                        </td>
                        <td style="height:100px;" class="col-align-center">05/12/2019</td>
                        <td style="height:100px;" class="col-align-center">05/07/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=1249"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Tạ Thị
                                Thùy</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=4405"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Phạm
                                Thị Giang</a><br>
                            <div title="21/08/2017 09:07:15">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2017-08-21 09:07:15 "></i> Nguyễn
                                Thị Mỹ Phượng</div>
                        </td>
                        <td class="col-align-center">8</td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=5906">22</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=5906">5906</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=5906">thietbidientanminh</a>
                        </td>
                        <td style="height:100px;" class="col-align-center">17/12/2019</td>
                        <td style="height:100px;" class="col-align-center">17/07/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=1224"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Nguyễn Thị Quỳnh
                                Vân</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=1110"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Phạm
                                Thị Hiền</a><br>
                            <div title="24/04/2017 10:13:48">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2017-04-24 10:13:48 "></i> Nguyễn
                                Thị Mỹ Phượng</div>
                        </td>
                        <td class="col-align-center">8</td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=4048">23</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=4048">4048</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=4048">phongchaychuachayab</a>
                        </td>
                        <td style="height:100px;" class="col-align-center">19/06/2019</td>
                        <td style="height:100px;" class="col-align-center">19/07/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=972"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Phan Vũ Như
                                Quỳnh</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8292"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Trương
                                Thị Tường Vi</a><br>
                            <div title="18/05/2016 10:54:22">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2016-05-18 10:54:22 "></i> Nguyễn
                                Thị Mỹ Phượng</div>
                        </td>
                        <td class="col-align-center">4</td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=4030">24</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=4030">4030</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=4030">GULL</a></td>
                        <td style="height:100px;" class="col-align-center">06/12/2019</td>
                        <td style="height:100px;" class="col-align-center">06/07/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=7957"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Vũ Duy
                                Hoàng</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8292"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Trương
                                Thị Tường Vi</a><br>
                            <div title="16/05/2016 23:39:42">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2016-05-16 23:39:42 "></i> Nguyễn
                                Thị Mỹ Phượng</div>
                        </td>
                        <td class="col-align-center">5</td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=3064">25</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=3064">3064</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=3064">vienthinh</a>
                        </td>
                        <td style="height:100px;" class="col-align-center">24/07/2019</td>
                        <td style="height:100px;" class="col-align-center">24/07/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=972"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Phan Vũ Như
                                Quỳnh</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8292"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Trương
                                Thị Tường Vi</a><br>
                            <div title="15/02/2016 11:23:10">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2016-02-15 11:23:10 "></i> Nguyễn
                                Thị Mỹ Phượng</div>
                        </td>
                        <td class="col-align-center">13</td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=3032">26</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=3032">3032</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=3032">vanthangphat</a>
                        </td>
                        <td style="height:100px;" class="col-align-center">11/07/2019</td>
                        <td style="height:100px;" class="col-align-center">11/07/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=1004"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Đỗ Văn
                                Thảo</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=5089"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Hồ Phạm Ngọc
                                Tiên</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8292"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Trương
                                Thị Tường Vi</a><br>
                            <div title="28/01/2016 23:10:47">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2016-01-28 23:10:47 "></i> Nguyễn
                                Lê Hào</div>
                        </td>
                        <td class="col-align-center">6</td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=2904">27</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=2904">2904</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=2904">noithatcaocapvanxuan</a>
                        </td>
                        <td style="height:100px;" class="col-align-center">14/02/2020</td>
                        <td style="height:100px;" class="col-align-center">16/07/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=673"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Nguyễn Hoàng
                                Long</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8292"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Trương
                                Thị Tường Vi</a><br>
                            <div title="15/02/2016 15:35:43">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2016-02-15 15:35:43 "></i> Nguyễn
                                Thị Mỹ Phượng</div>
                        </td>
                        <td class="col-align-center">13</td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=2765">28</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=2765">2765</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=2765">giadungquangsang</a>
                        </td>
                        <td style="height:100px;" class="col-align-center">18/07/2019</td>
                        <td style="height:100px;" class="col-align-center">20/07/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=3429"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Đào Việt
                                Hà</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=1096"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Phan
                                Quỳnh Hương</a><br>
                            <div title="27/01/2016 08:57:44">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2016-01-27 08:57:44 "></i> Nguyễn
                                Văn Hòa</div>
                        </td>
                        <td class="col-align-center">9</td>
                    </tr>
                    <tr>
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=2762">29</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=2762">2762</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=2762">xnk_thienphat</a>
                        </td>
                        <td style="height:100px;" class="col-align-center">10/07/2019</td>
                        <td style="height:100px;" class="col-align-center">10/07/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=972"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Phan Vũ Như
                                Quỳnh</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8292"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Trương
                                Thị Tường Vi</a><br>
                            <div title="27/01/2016 08:29:53">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2016-01-27 08:29:53 "></i> Nguyễn
                                Thị Mỹ Phượng</div>
                        </td>
                        <td class="col-align-center">4</td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center"><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=2749">30</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=2749">2749</a></td>
                        <td style="height:100px;font-weight: bold;" class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=2749">THANHMAISTORE</a>
                        </td>
                        <td style="height:100px;" class="col-align-center">04/07/2019</td>
                        <td style="height:100px;" class="col-align-center">04/07/2020</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=972"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Phan Vũ Như
                                Quỳnh</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8292"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Trương
                                Thị Tường Vi</a><br>
                            <div title="17/02/2016 14:52:29">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2016-02-17 14:52:29 "></i> Nguyễn
                                Thị Mỹ Phượng</div>
                        </td>
                        <td class="col-align-center">10</td>
                    </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div class="col-md-6 paginatorItem">
                    <div class="paginator"><span class="labelPages">1 - 30 / 48</span><span
                            class="disabled fa fa-step-backward"></span><span
                            class="disabled fa fa-backward"></span><a class="fa fa-forward"
                            href="https://erp.nhanh.vn/crm/service/expried?page=2"
                            title="Trang sau"></a> <a class="fa fa-step-forward"
                            href="https://erp.nhanh.vn/crm/service/expried?page=2"
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
    <script type="text/javascript" src="{{ asset('asset/js/customer/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/customer/saved_resource(2)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/customer/saved_resource(3)') }}"></script>
@endsection