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
            <form method="GET" name="crmServiceFilter" class="form-inline lolify" role="form"
                id="crmServiceFilter">
                <div class="col-md-10 lolify-default">

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
                    <input type="hidden" name="createdById" id="createdById" class="form-control"
                        value="">
                    <div class="form-group">
                        <input name="submit" type="submit" id="btnFilterCrmContact"
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
                            <li><a href="https://erp.nhanh.vn/crm/service/index?page=2#"
                                    id="exportExcel"><i class="fa fa-file-excel-o"></i> Xuất trang
                                    hiện tại</a></li>
                            <li><a id="exportAll"><i class="fa fa-file-excel-o"></i> Xuất Toàn
                                    bộ</a></li>
                        </ul>
                    </div>

                    <div class="btn-group pull-right lolify-bookmark" data-toggle="tooltip"
                        data-placement="top" title="Đường dẫn nhanh">
                        <button class="btn  dropdown-toggle" data-toggle="dropdown" type="button"
                            aria-haspopup="true" aria-expanded="true">
                            <span class="fa fa-bookmark"></span> <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a
                                    href="https://erp.nhanh.vn/crm/service/index?quickLinkIndex=0&amp;nextExpired=1"><i
                                        class="fa fa-list"></i> GH sắp hết hạn </a></li>
                        </ul>
                    </div>

                    <button class="btn  pull-right lolify-showextend" type="button"
                        data-toggle="tooltip" data-placement="top" title="bộ lọc nâng cao">
                        <span class="fa fa-th"></span>
                    </button>
                </div>
                <div class="col-md-12 lolify-extend" style="display: none;">
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
                    <div class="form-group">
                        <input type="text" name="createdByName" maxlength="225"
                            placeholder="Người tạo" id="createdByName"
                            class="form-control ui-autocomplete-input" value="" autocomplete="off">
                    </div>

                </div>
            </form>
            <div class="clearfix"></div>
            <div class="lolify-left-menu" style="display: none;">
                <ul class="main-menu">
                    <li class=""><a class="js-sub-menu-toggle"> <i class="fa fa-bookmark"></i> <span
                                class="text">Đường dẫn nhanh</span>
                            <i class="toggle-icon fa fa-angle-right"></i>
                        </a>
                        <ul class="sub-menu ">
                            <li class=""><a
                                    href="https://erp.nhanh.vn/crm/service/index?quickLinkIndex=0&amp;nextExpired=1"
                                    class=""><i class="fa fa-list"></i> GH sắp hết hạn </a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
        <div class="dgContainer">
            <div style="width: 1556px; display: none;" class="stickyHeader">
                <table class="table table-bordered" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr class="even">
                            <th style="width: 49px;">STT</th>
                            <th style="width: 58px;">ID</th>
                            <th style="width: 275px;">Gian hàng</th>
                            <th style="width: 233px;">Người tạo | Phụ trách</th>
                            <th style="width: 68px;">Số HĐ</th>
                            <th style="width: 828px;">Lịch sử chăm sóc</th>
                            <th class="col-align-left" title="Thao tác" style="width: 45px;"><i
                                    class="fa fa-cogs icon"></i></th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 dgButtons"><a
                        href="https://erp.nhanh.vn/crm/service/index?expriedStatus=1&amp;page=2"
                        class="btn btn-success">Chỉ hiển thị GH còn hạn</a></div>
                <div class="col-md-6 paginatorItem">
                    <div class="paginator"><span class="labelPages">31 - 60 / 8,255</span><a
                            class="fa fa-step-backward"
                            href="https://erp.nhanh.vn/crm/service/index?page=1"
                            title="Trang đầu"></a> <a class="fa fa-backward"
                            href="https://erp.nhanh.vn/crm/service/index?page=1"
                            title="Trang trước"></a> <a class="fa fa-forward"
                            href="https://erp.nhanh.vn/crm/service/index?page=3"
                            title="Trang sau"></a> <a class="fa fa-step-forward"
                            href="https://erp.nhanh.vn/crm/service/index?page=276"
                            title="Trang cuối"></a></div>
                </div>
                <div style="clear: both;"></div><br>
            </div>
            <table id="dgContract" class="table table-hover">
                <thead>
                    <tr class="even h">
                        <th>STT</th>
                        <th>ID</th>
                        <th>Gian hàng</th>
                        <th>Người tạo | Phụ trách</th>
                        <th>Số HĐ</th>
                        <th>Lịch sử chăm sóc</th>
                        <th class="col-align-left" title="Thao tác"><i class="fa fa-cogs icon"></i>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8316">1</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8316">8316</a></td>
                        <td style="height:100px;"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8316"><b>hungphatdienco</b></a><br><span
                                data-toggle="tooltip" data-title="Ngày bắt đầu" class="text-info"
                                data-original-title="" title=""><i class="fa fa-calendar"></i>
                                23/04/2020</span><br><span data-toggle="tooltip"
                                data-title="Ngày kết thúc" class="text-danger"><i
                                    class="fa fa-minus-circle text-danger"></i> 23/12/2020</span>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/service/index?userId=5460"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Nguyễn Duy
                                Hưng</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=5460"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Nguyễn
                                Duy Hưng</a><br>
                            <div title="23/04/2020 08:48:21">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2020-04-23 08:48:21 "></i> Nguyễn
                                Nhật Linh</div>
                        </td>
                        <td></td>
                        <td class="">
                            <ul class="td-history">
                                <li>
                                    <div class="head-activity text-primary">28/05/2020 15:35:38 -
                                        Đào Ngọc Ánh</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-hand-o-right"></i> Bàn giao cho:
                                            </b>Nguyễn Duy Hưng</span></div>
                                </li>
                                <li>
                                    <div class="head-activity text-primary">28/05/2020 10:05:09 -
                                        Đào Ngọc Ánh</div>
                                    <div class="infor-activity"><span class=""><b>Sửa gian hàng
                                            </b></span></div>
                                </li>
                                <li>
                                    <div class="head-activity text-primary">04/05/2020 15:56:11 -
                                        Nguyễn Nhật Linh</div>
                                    <div class="infor-activity"><span class=""><b>Sửa gian hàng
                                            </b></span></div>
                                </li>
                                <li class="last"><a class="text-info"
                                        href="https://erp.nhanh.vn/crm/service/history?id=8316">Xem
                                        chi tiết 4 hành động</a></li>
                            </ul>
                        </td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/service/edit?id=8316">Sửa</a>
                                    </li>
                                    <li><a href="https://erp.nhanh.vn/crm/service/index?page=2#"
                                            class="del_Item" data-id="8316">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8315">2</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8315">8315</a></td>
                        <td style="height:100px;"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8315"><b>langmodagiare</b></a><br><span
                                data-toggle="tooltip" data-title="Ngày bắt đầu" class="text-info"
                                data-original-title="" title=""><i class="fa fa-calendar"></i>
                                22/04/2020</span><br><span data-toggle="tooltip"
                                data-title="Ngày kết thúc" class="text-danger"
                                data-original-title="" title=""><i
                                    class="fa fa-minus-circle text-danger"></i> 22/12/2020</span>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/service/index?userId=1093"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Vũ Thị Phương
                                Anh</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=4405"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Phạm
                                Thị Giang</a><br>
                            <div title="22/04/2020 09:03:41">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2020-04-22 09:03:41 "></i> Đào
                                Ngọc Ánh</div>
                        </td>
                        <td>1</td>
                        <td class="">
                            <ul class="td-history">
                                <li>
                                    <div class="head-activity text-primary">20/07/2020 16:06:58 -
                                        Phạm Thị Giang</div>
                                    <div class="infor-activity"><span class=""><b>Thao tác
                                                Khác</b></span></div>
                                </li>
                                <li>
                                    <div class="head-activity text-primary">14/07/2020 15:11:31 -
                                        Phạm Thị Giang</div>
                                    <div class="infor-activity"><span class=""><b>Thao tác
                                                Khác</b></span></div>
                                </li>
                                <li>
                                    <div class="head-activity text-primary">16/06/2020 16:36:21 -
                                        Phạm Thị Giang</div>
                                    <div class="infor-activity"><span class=""><b>Thao tác
                                                Khác</b></span></div>
                                </li>
                                <li class="last"><a class="text-info"
                                        href="https://erp.nhanh.vn/crm/service/history?id=8315">Xem
                                        chi tiết 8 hành động</a></li>
                            </ul>
                        </td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/service/edit?id=8315">Sửa</a>
                                    </li>
                                    <li><a href="https://erp.nhanh.vn/crm/service/index?page=2#"
                                            class="del_Item" data-id="8315">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8314">3</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8314">8314</a></td>
                        <td style="height:100px;"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8314"><b>mayinhoadontemnhan</b></a><br><span
                                data-toggle="tooltip" data-title="Ngày bắt đầu" class="text-info"
                                data-original-title="" title=""><i class="fa fa-calendar"></i>
                                17/04/2020</span><br><span data-toggle="tooltip"
                                data-title="Ngày kết thúc" class="text-danger"
                                data-original-title="" title=""><i
                                    class="fa fa-minus-circle text-danger"></i> 17/08/2020</span>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/service/index?userId=8096"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Thái Chí
                                Toàn</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8292"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Trương
                                Thị Tường Vi</a><br>
                            <div title="17/04/2020 11:01:07">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2020-04-17 11:01:07 "></i> Nguyễn
                                Nhật Linh</div>
                        </td>
                        <td>1</td>
                        <td class="">
                            <ul class="td-history">
                                <li>
                                    <div class="head-activity text-primary">12/05/2020 08:23:28 -
                                        Đào Ngọc Ánh</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-ban"></i> Bỏ quyền chăm sóc của:
                                            </b>Trần Thị Cẩm Mỹ</span></div>
                                </li>
                                <li>
                                    <div class="head-activity text-primary">12/05/2020 08:23:28 -
                                        Đào Ngọc Ánh</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-hand-o-right"></i> Bàn giao cho:
                                            </b>Thái Chí Toàn</span></div>
                                </li>
                                <li>
                                    <div class="head-activity text-primary">17/04/2020 11:10:55 -
                                        Nguyễn Nhật Linh</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-hand-o-right"></i> Bàn giao cho:
                                            </b>Trương Thị Tường Vi</span></div>
                                </li>
                                <li class="last"><a class="text-info"
                                        href="https://erp.nhanh.vn/crm/service/history?id=8314">Xem
                                        chi tiết 3 hành động</a></li>
                            </ul>
                        </td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/service/edit?id=8314">Sửa</a>
                                    </li>
                                    <li><a href="https://erp.nhanh.vn/crm/service/index?page=2#"
                                            class="del_Item" data-id="8314">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8313">4</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8313">8313</a></td>
                        <td style="height:100px;"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8313"><b>aothunday</b></a><br><span
                                data-toggle="tooltip" data-title="Ngày bắt đầu" class="text-info"><i
                                    class="fa fa-calendar"></i> 17/04/2020</span><br><span
                                data-toggle="tooltip" data-title="Ngày kết thúc"
                                class="text-danger"><i class="fa fa-minus-circle text-danger"></i>
                                17/04/2021</span></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/index?userId=5460"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Nguyễn Duy
                                Hưng</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8292"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Trương
                                Thị Tường Vi</a><br>
                            <div title="17/04/2020 10:10:27">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2020-04-17 10:10:27 "></i> Nguyễn
                                Nhật Linh</div>
                        </td>
                        <td></td>
                        <td class="">
                            <ul class="td-history">
                                <li>
                                    <div class="head-activity text-primary">28/04/2020 17:29:37 -
                                        Nguyễn Nhật Linh</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-hand-o-right"></i> Bàn giao cho:
                                            </b>Trương Thị Tường Vi</span></div>
                                </li>
                                <li>
                                    <div class="head-activity text-primary">28/04/2020 16:39:25 -
                                        Đào Ngọc Ánh</div>
                                    <div class="infor-activity"><span class=""><b>Sửa gian hàng
                                            </b></span></div>
                                </li>
                                <li>
                                    <div class="head-activity text-primary">17/04/2020 10:10:41 -
                                        Nguyễn Nhật Linh</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-hand-o-right"></i> Bàn giao cho:
                                            </b>Nguyễn Duy Hưng</span></div>
                                </li>
                                <li class="last"><a class="text-info"
                                        href="https://erp.nhanh.vn/crm/service/history?id=8313">Xem
                                        chi tiết 3 hành động</a></li>
                            </ul>
                        </td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/service/edit?id=8313">Sửa</a>
                                    </li>
                                    <li><a href="https://erp.nhanh.vn/crm/service/index?page=2#"
                                            class="del_Item" data-id="8313">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8312">5</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8312">8312</a></td>
                        <td style="height:100px;"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8312"><b>sofahaanh</b></a><br><span
                                data-toggle="tooltip" data-title="Ngày bắt đầu" class="text-info"
                                data-original-title="" title=""><i class="fa fa-calendar"></i>
                                13/04/2020</span><br><span data-toggle="tooltip"
                                data-title="Ngày kết thúc" class="text-danger"
                                data-original-title="" title=""><i
                                    class="fa fa-minus-circle text-danger"></i> 13/10/2020</span>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/service/index?userId=7435"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Nguyễn Thị Ngọc
                                Trầm</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8292"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Trương
                                Thị Tường Vi</a><br>
                            <div title="13/04/2020 09:37:58">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2020-04-13 09:37:58 "></i> Nguyễn
                                Nhật Linh</div>
                        </td>
                        <td>1</td>
                        <td class="">
                            <ul class="td-history">
                                <li>
                                    <div class="head-activity text-primary">13/04/2020 10:08:44 -
                                        Nguyễn Nhật Linh</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-hand-o-right"></i> Bàn giao cho:
                                            </b>Trương Thị Tường Vi</span></div>
                                </li>
                                <li class="last"><a class="text-info"
                                        href="https://erp.nhanh.vn/crm/service/history?id=8312">Xem
                                        chi tiết 1 hành động</a></li>
                            </ul>
                        </td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/service/edit?id=8312">Sửa</a>
                                    </li>
                                    <li><a href="https://erp.nhanh.vn/crm/service/index?page=2#"
                                            class="del_Item" data-id="8312">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8311">6</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8311">8311</a></td>
                        <td style="height:100px;"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8311"><b>hyundai_kinhbac</b></a><br><span
                                data-toggle="tooltip" data-title="Ngày bắt đầu" class="text-info"
                                data-original-title="" title=""><i class="fa fa-calendar"></i>
                                09/04/2020</span><br><span data-toggle="tooltip"
                                data-title="Ngày kết thúc" class="text-danger"><i
                                    class="fa fa-minus-circle text-danger"></i> 09/11/2020</span>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/service/index?userId=1093"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Vũ Thị Phương
                                Anh</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=6797"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Lê Thùy
                                Linh</a><br>
                            <div title="09/04/2020 08:55:58">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2020-04-09 08:55:58 "></i> Nguyễn
                                Nhật Linh</div>
                        </td>
                        <td>1</td>
                        <td class="">
                            <ul class="td-history">
                                <li>
                                    <div class="head-activity text-primary">01/07/2020 14:57:00 - Lê
                                        Thùy Linh</div>
                                    <div class="infor-activity"><span class=""><b>Thao tác
                                                Khác</b></span></div>
                                </li>
                                <li>
                                    <div class="head-activity text-primary">02/06/2020 16:42:15 - Lê
                                        Thùy Linh</div>
                                    <div class="infor-activity"><span class=""><b>Thao tác
                                                Khác</b></span></div>
                                </li>
                                <li>
                                    <div class="head-activity text-primary">22/05/2020 14:55:26 - Lê
                                        Thùy Linh</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-phone"></i> Gọi điện</b></span> -
                                        <b class="text-success">Thành công</b></div>
                                </li>
                                <li class="last"><a class="text-info"
                                        href="https://erp.nhanh.vn/crm/service/history?id=8311">Xem
                                        chi tiết 8 hành động</a></li>
                            </ul>
                        </td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/service/edit?id=8311">Sửa</a>
                                    </li>
                                    <li><a href="https://erp.nhanh.vn/crm/service/index?page=2#"
                                            class="del_Item" data-id="8311">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8310">7</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8310">8310</a></td>
                        <td style="height:100px;"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8310"><b>vinut</b></a><br><span
                                data-toggle="tooltip" data-title="Ngày bắt đầu" class="text-info"
                                data-original-title="" title=""><i class="fa fa-calendar"></i>
                                08/04/2020</span><br><span data-toggle="tooltip"
                                data-title="Ngày kết thúc" class="text-danger"
                                data-original-title="" title=""><i
                                    class="fa fa-minus-circle text-danger"></i> 08/08/2020</span>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/service/index?userId=1260"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Trần Phương
                                Chi</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=6797"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Lê Thùy
                                Linh</a><br>
                            <div title="08/04/2020 10:43:37">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2020-04-08 10:43:37 "></i> Nguyễn
                                Nhật Linh</div>
                        </td>
                        <td>1</td>
                        <td class="">
                            <ul class="td-history">
                                <li>
                                    <div class="head-activity text-primary">01/07/2020 15:27:30 - Lê
                                        Thùy Linh</div>
                                    <div class="infor-activity"><span class=""><b>Thao tác
                                                Khác</b></span></div>
                                </li>
                                <li>
                                    <div class="head-activity text-primary">02/06/2020 16:30:33 - Lê
                                        Thùy Linh</div>
                                    <div class="infor-activity"><span class=""><b>Thao tác
                                                Khác</b></span></div>
                                </li>
                                <li>
                                    <div class="head-activity text-primary">22/05/2020 10:09:50 - Lê
                                        Thùy Linh</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-phone"></i> Gọi điện</b></span> -
                                        <b class="text-success">Thành công</b></div>
                                </li>
                                <li class="last"><a class="text-info"
                                        href="https://erp.nhanh.vn/crm/service/history?id=8310">Xem
                                        chi tiết 9 hành động</a></li>
                            </ul>
                        </td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/service/edit?id=8310">Sửa</a>
                                    </li>
                                    <li><a href="https://erp.nhanh.vn/crm/service/index?page=2#"
                                            class="del_Item" data-id="8310">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8309">8</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8309">8309</a></td>
                        <td style="height:100px;"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8309"><b>venamti</b></a><br><span
                                data-toggle="tooltip" data-title="Ngày bắt đầu" class="text-info"
                                data-original-title="" title=""><i class="fa fa-calendar"></i>
                                06/04/2020</span><br><span data-toggle="tooltip"
                                data-title="Ngày kết thúc" class="text-danger"
                                data-original-title="" title=""><i
                                    class="fa fa-minus-circle text-danger"></i> 06/04/2021</span>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/service/index?userId=7435"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Nguyễn Thị Ngọc
                                Trầm</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8292"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Trương
                                Thị Tường Vi</a><br>
                            <div title="06/04/2020 10:57:57">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2020-04-06 10:57:57 "></i> Nguyễn
                                Nhật Linh</div>
                        </td>
                        <td>1</td>
                        <td class="">
                            <ul class="td-history">
                                <li>
                                    <div class="head-activity text-primary">07/04/2020 09:00:49 -
                                        Nguyễn Nhật Linh</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-hand-o-right"></i> Bàn giao cho:
                                            </b>Trương Thị Tường Vi</span></div>
                                </li>
                                <li class="last"><a class="text-info"
                                        href="https://erp.nhanh.vn/crm/service/history?id=8309">Xem
                                        chi tiết 1 hành động</a></li>
                            </ul>
                        </td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/service/edit?id=8309">Sửa</a>
                                    </li>
                                    <li><a href="https://erp.nhanh.vn/crm/service/index?page=2#"
                                            class="del_Item" data-id="8309">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8308">9</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8308">8308</a></td>
                        <td style="height:100px;"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8308"><b>mayxaydungvietnhat</b></a><br><span
                                data-toggle="tooltip" data-title="Ngày bắt đầu" class="text-info"><i
                                    class="fa fa-calendar"></i> 26/03/2020</span><br><span
                                data-toggle="tooltip" data-title="Ngày kết thúc"
                                class="text-danger"><i class="fa fa-minus-circle text-danger"></i>
                                26/09/2020</span></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/index?userId=5758"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Nguyễn Hữu
                                Lưu</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8292"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Trương
                                Thị Tường Vi</a><br>
                            <div title="26/03/2020 16:57:41">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2020-03-26 16:57:41 "></i> Nguyễn
                                Nhật Linh</div>
                        </td>
                        <td>1</td>
                        <td class="">
                            <ul class="td-history">
                                <li>
                                    <div class="head-activity text-primary">27/03/2020 14:09:36 -
                                        Đào Ngọc Ánh</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-hand-o-right"></i> Bàn giao cho:
                                            </b>Trương Thị Tường Vi</span></div>
                                </li>
                                <li class="last"><a class="text-info"
                                        href="https://erp.nhanh.vn/crm/service/history?id=8308">Xem
                                        chi tiết 1 hành động</a></li>
                            </ul>
                        </td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/service/edit?id=8308">Sửa</a>
                                    </li>
                                    <li><a href="https://erp.nhanh.vn/crm/service/index?page=2#"
                                            class="del_Item" data-id="8308">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8307">10</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8307">8307</a></td>
                        <td style="height:100px;"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8307"><b>dienmaygiahung</b></a><br><span
                                data-toggle="tooltip" data-title="Ngày bắt đầu" class="text-info"><i
                                    class="fa fa-calendar"></i> 25/03/2020</span><br><span
                                data-toggle="tooltip" data-title="Ngày kết thúc"
                                class="text-danger"><i class="fa fa-minus-circle text-danger"></i>
                                25/07/2020</span></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/index?userId=7114"
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
                        <td>1</td>
                        <td class="">
                            <ul class="td-history">
                                <li>
                                    <div class="head-activity text-primary">26/03/2020 08:53:25 -
                                        Đào Ngọc Ánh</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-hand-o-right"></i> Bàn giao cho:
                                            </b>Trương Thị Tường Vi</span></div>
                                </li>
                                <li class="last"><a class="text-info"
                                        href="https://erp.nhanh.vn/crm/service/history?id=8307">Xem
                                        chi tiết 1 hành động</a></li>
                            </ul>
                        </td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/service/edit?id=8307">Sửa</a>
                                    </li>
                                    <li><a href="https://erp.nhanh.vn/crm/service/index?page=2#"
                                            class="del_Item" data-id="8307">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8306">11</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8306">8306</a></td>
                        <td style="height:100px;"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8306"><b>vietthaidecal</b></a><br><span
                                data-toggle="tooltip" data-title="Ngày bắt đầu" class="text-info"><i
                                    class="fa fa-calendar"></i> 24/03/2020</span><br><span
                                data-toggle="tooltip" data-title="Ngày kết thúc"
                                class="text-danger"><i class="fa fa-minus-circle text-danger"></i>
                                24/05/2020</span></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/index?userId=972"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Phan Vũ Như
                                Quỳnh</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8292"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Trương
                                Thị Tường Vi</a><br>
                            <div title="24/03/2020 14:33:28">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2020-03-24 14:33:28 "></i> Nguyễn
                                Nhật Linh</div>
                        </td>
                        <td>1</td>
                        <td class="">
                            <ul class="td-history">
                                <li>
                                    <div class="head-activity text-primary">28/05/2020 11:42:27 -
                                        Đào Khôi Nguyên</div>
                                    <div class="infor-activity"><span class=""><b>Thao tác
                                                Khác</b></span></div>
                                </li>
                                <li>
                                    <div class="head-activity text-primary">24/03/2020 15:23:38 -
                                        Nguyễn Nhật Linh</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-hand-o-right"></i> Bàn giao cho:
                                            </b>Trương Thị Tường Vi</span></div>
                                </li>
                                <li class="last"><a class="text-info"
                                        href="https://erp.nhanh.vn/crm/service/history?id=8306">Xem
                                        chi tiết 2 hành động</a></li>
                            </ul>
                        </td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/service/edit?id=8306">Sửa</a>
                                    </li>
                                    <li><a href="https://erp.nhanh.vn/crm/service/index?page=2#"
                                            class="del_Item" data-id="8306">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8305">12</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8305">8305</a></td>
                        <td style="height:100px;"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8305"><b>banghephucuonghung</b></a><br><span
                                data-toggle="tooltip" data-title="Ngày bắt đầu" class="text-info"><i
                                    class="fa fa-calendar"></i> 20/03/2020</span><br><span
                                data-toggle="tooltip" data-title="Ngày kết thúc"
                                class="text-danger"><i class="fa fa-minus-circle text-danger"></i>
                                20/06/2020</span></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/index?userId=1002"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Trần Văn Anh
                                Vũ</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8292"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Trương
                                Thị Tường Vi</a><br>
                            <div title="20/03/2020 10:36:00">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2020-03-20 10:36:00 "></i> Đào
                                Ngọc Ánh</div>
                        </td>
                        <td>1</td>
                        <td class="">
                            <ul class="td-history">
                                <li>
                                    <div class="head-activity text-primary">23/03/2020 08:12:17 -
                                        Đào Ngọc Ánh</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-hand-o-right"></i> Bàn giao cho:
                                            </b>Trương Thị Tường Vi</span></div>
                                </li>
                                <li class="last"><a class="text-info"
                                        href="https://erp.nhanh.vn/crm/service/history?id=8305">Xem
                                        chi tiết 1 hành động</a></li>
                            </ul>
                        </td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/service/edit?id=8305">Sửa</a>
                                    </li>
                                    <li><a href="https://erp.nhanh.vn/crm/service/index?page=2#"
                                            class="del_Item" data-id="8305">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8304">13</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8304">8304</a></td>
                        <td style="height:100px;"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8304"><b>pccchoangnhathung</b></a><br><span
                                data-toggle="tooltip" data-title="Ngày bắt đầu" class="text-info"><i
                                    class="fa fa-calendar"></i> 19/03/2020</span><br><span
                                data-toggle="tooltip" data-title="Ngày kết thúc"
                                class="text-danger"><i class="fa fa-minus-circle text-danger"></i>
                                19/10/2020</span></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/index?userId=939"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Phan Thành
                                Quang</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8292"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Trương
                                Thị Tường Vi</a><br>
                            <div title="19/03/2020 11:13:31">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2020-03-19 11:13:31 "></i> Nguyễn
                                Nhật Linh</div>
                        </td>
                        <td></td>
                        <td class="">
                            <ul class="td-history">
                                <li>
                                    <div class="head-activity text-primary">23/03/2020 13:50:00 -
                                        Nguyễn Nhật Linh</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-hand-o-right"></i> Bàn giao cho:
                                            </b>Trương Thị Tường Vi</span></div>
                                </li>
                                <li>
                                    <div class="head-activity text-primary">23/03/2020 11:19:32 -
                                        Nguyễn Nhật Linh</div>
                                    <div class="infor-activity"><span class=""><b>Sửa gian hàng
                                            </b></span></div>
                                </li>
                                <li>
                                    <div class="head-activity text-primary">19/03/2020 11:13:59 -
                                        Nguyễn Nhật Linh</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-hand-o-right"></i> Bàn giao cho:
                                            </b>Phan Thành Quang</span></div>
                                </li>
                                <li class="last"><a class="text-info"
                                        href="https://erp.nhanh.vn/crm/service/history?id=8304">Xem
                                        chi tiết 4 hành động</a></li>
                            </ul>
                        </td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/service/edit?id=8304">Sửa</a>
                                    </li>
                                    <li><a href="https://erp.nhanh.vn/crm/service/index?page=2#"
                                            class="del_Item" data-id="8304">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8303">14</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8303">8303</a></td>
                        <td style="height:100px;"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8303"><b>dogophamgia</b></a><br><span
                                data-toggle="tooltip" data-title="Ngày bắt đầu" class="text-info"><i
                                    class="fa fa-calendar"></i> 18/03/2020</span><br><span
                                data-toggle="tooltip" data-title="Ngày kết thúc"
                                class="text-danger"><i class="fa fa-minus-circle text-danger"></i>
                                18/07/2020</span></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/index?userId=7957"
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
                        <td>1</td>
                        <td class="">
                            <ul class="td-history">
                                <li>
                                    <div class="head-activity text-primary">19/03/2020 08:50:47 -
                                        Nguyễn Nhật Linh</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-hand-o-right"></i> Bàn giao cho:
                                            </b>Trương Thị Tường Vi</span></div>
                                </li>
                                <li class="last"><a class="text-info"
                                        href="https://erp.nhanh.vn/crm/service/history?id=8303">Xem
                                        chi tiết 1 hành động</a></li>
                            </ul>
                        </td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/service/edit?id=8303">Sửa</a>
                                    </li>
                                    <li><a href="https://erp.nhanh.vn/crm/service/index?page=2#"
                                            class="del_Item" data-id="8303">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8302">15</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8302">8302</a></td>
                        <td style="height:100px;"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8302"><b>mazdagovapvn</b></a><br><span
                                data-toggle="tooltip" data-title="Ngày bắt đầu" class="text-info"><i
                                    class="fa fa-calendar"></i> 18/03/2020</span><br><span
                                data-toggle="tooltip" data-title="Ngày kết thúc"
                                class="text-danger"><i class="fa fa-minus-circle text-danger"></i>
                                18/07/2020</span></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/index?userId=7435"
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
                        <td>1</td>
                        <td class="">
                            <ul class="td-history">
                                <li>
                                    <div class="head-activity text-primary">18/03/2020 17:19:30 -
                                        Đào Ngọc Ánh</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-hand-o-right"></i> Bàn giao cho:
                                            </b>Trương Thị Tường Vi</span></div>
                                </li>
                                <li class="last"><a class="text-info"
                                        href="https://erp.nhanh.vn/crm/service/history?id=8302">Xem
                                        chi tiết 1 hành động</a></li>
                            </ul>
                        </td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/service/edit?id=8302">Sửa</a>
                                    </li>
                                    <li><a href="https://erp.nhanh.vn/crm/service/index?page=2#"
                                            class="del_Item" data-id="8302">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8301">16</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8301">8301</a></td>
                        <td style="height:100px;"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8301"><b>admobile</b></a><br><span
                                data-toggle="tooltip" data-title="Ngày bắt đầu" class="text-info"><i
                                    class="fa fa-calendar"></i> 16/03/2020</span><br><span
                                data-toggle="tooltip" data-title="Ngày kết thúc"
                                class="text-danger"><i class="fa fa-minus-circle text-danger"></i>
                                16/11/2020</span></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/index?userId=1059"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Ngô Thị Hồng
                                Hoa</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=1059"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Ngô Thị
                                Hồng Hoa</a><br>
                            <div title="16/03/2020 16:34:12">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2020-03-16 16:34:12 "></i> Đào
                                Ngọc Ánh</div>
                        </td>
                        <td>1</td>
                        <td class="">
                            <ul class="td-history">
                                <li>
                                    <div class="head-activity text-primary">22/06/2020 15:13:41 -
                                        Ngô Thị Hồng Hoa</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-phone"></i> Gọi điện</b></span> -
                                        <b class="text-success">Thành công</b></div>
                                </li>
                                <li>
                                    <div class="head-activity text-primary">29/05/2020 16:25:34 -
                                        Ngô Thị Hồng Hoa</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-phone"></i> Gọi điện</b></span> -
                                        <b class="text-success">Thành công</b></div>
                                </li>
                                <li>
                                    <div class="head-activity text-primary">28/04/2020 15:42:22 -
                                        Ngô Thị Hồng Hoa</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-phone"></i> Gọi điện</b></span> -
                                        <b class="text-success">Thành công</b></div>
                                </li>
                                <li class="last"><a class="text-info"
                                        href="https://erp.nhanh.vn/crm/service/history?id=8301">Xem
                                        chi tiết 9 hành động</a></li>
                            </ul>
                        </td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/service/edit?id=8301">Sửa</a>
                                    </li>
                                    <li><a href="https://erp.nhanh.vn/crm/service/index?page=2#"
                                            class="del_Item" data-id="8301">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8300">17</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8300">8300</a></td>
                        <td style="height:100px;"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8300"><b>dienmaybinhnguyen</b></a><br><span
                                data-toggle="tooltip" data-title="Ngày bắt đầu" class="text-info"><i
                                    class="fa fa-calendar"></i> 16/03/2020</span><br><span
                                data-toggle="tooltip" data-title="Ngày kết thúc"
                                class="text-danger"><i class="fa fa-minus-circle text-danger"></i>
                                16/10/2020</span></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/index?userId=1147"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Đinh Thị Thu
                                Hương</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=4405"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Phạm
                                Thị Giang</a><br>
                            <div title="16/03/2020 09:32:44">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2020-03-16 09:32:44 "></i> Nguyễn
                                Nhật Linh</div>
                        </td>
                        <td></td>
                        <td class="">
                            <ul class="td-history">
                                <li>
                                    <div class="head-activity text-primary">21/07/2020 14:39:18 -
                                        Phạm Thị Giang</div>
                                    <div class="infor-activity"><span class=""><b>Thao tác
                                                Khác</b></span></div>
                                </li>
                                <li>
                                    <div class="head-activity text-primary">23/06/2020 10:16:19 -
                                        Phạm Thị Giang</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-phone"></i> Gọi điện</b></span> -
                                        <b class="text-success">Thành công</b></div>
                                </li>
                                <li>
                                    <div class="head-activity text-primary">26/05/2020 15:37:31 -
                                        Phạm Thị Giang</div>
                                    <div class="infor-activity"><span class=""><b>Thao tác
                                                Khác</b></span></div>
                                </li>
                                <li class="last"><a class="text-info"
                                        href="https://erp.nhanh.vn/crm/service/history?id=8300">Xem
                                        chi tiết 7 hành động</a></li>
                            </ul>
                        </td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/service/edit?id=8300">Sửa</a>
                                    </li>
                                    <li><a href="https://erp.nhanh.vn/crm/service/index?page=2#"
                                            class="del_Item" data-id="8300">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8299">18</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8299">8299</a></td>
                        <td style="height:100px;"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8299"><b>SUNTEK</b></a><br><span
                                data-toggle="tooltip" data-title="Ngày bắt đầu" class="text-info"><i
                                    class="fa fa-calendar"></i> 13/03/2020</span><br><span
                                data-toggle="tooltip" data-title="Ngày kết thúc"
                                class="text-danger"><i class="fa fa-minus-circle text-danger"></i>
                                14/07/2020</span></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/index?userId=1002"
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
                        <td>1</td>
                        <td class="">
                            <ul class="td-history">
                                <li>
                                    <div class="head-activity text-primary">03/06/2020 12:35:44 -
                                        Nguyễn Nhật Linh</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-ban"></i> Bỏ quyền chăm sóc của:
                                            </b>Lê Cát Mộng Linh</span></div>
                                </li>
                                <li>
                                    <div class="head-activity text-primary">03/06/2020 12:35:44 -
                                        Nguyễn Nhật Linh</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-hand-o-right"></i> Bàn giao cho:
                                            </b>Trần Văn Anh Vũ</span></div>
                                </li>
                                <li>
                                    <div class="head-activity text-primary">18/03/2020 15:07:13 -
                                        Đào Ngọc Ánh</div>
                                    <div class="infor-activity"><span class=""><b>Sửa gian hàng
                                            </b></span></div>
                                </li>
                                <li class="last"><a class="text-info"
                                        href="https://erp.nhanh.vn/crm/service/history?id=8299">Xem
                                        chi tiết 5 hành động</a></li>
                            </ul>
                        </td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/service/edit?id=8299">Sửa</a>
                                    </li>
                                    <li><a href="https://erp.nhanh.vn/crm/service/index?page=2#"
                                            class="del_Item" data-id="8299">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8298">19</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8298">8298</a></td>
                        <td style="height:100px;"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8298"><b>TruongLocOto</b></a><br><span
                                data-toggle="tooltip" data-title="Ngày bắt đầu" class="text-info"><i
                                    class="fa fa-calendar"></i> 10/03/2020</span><br><span
                                data-toggle="tooltip" data-title="Ngày kết thúc"
                                class="text-danger"><i class="fa fa-minus-circle text-danger"></i>
                                10/04/2021</span></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/index?userId=673"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Nguyễn Hoàng
                                Long</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8292"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Trương
                                Thị Tường Vi</a><br>
                            <div title="10/03/2020 17:49:26">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2020-03-10 17:49:26 "></i> Nguyễn
                                Nhật Linh</div>
                        </td>
                        <td>1</td>
                        <td class="">
                            <ul class="td-history">
                                <li>
                                    <div class="head-activity text-primary">12/03/2020 09:00:58 -
                                        Nguyễn Nhật Linh</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-hand-o-right"></i> Bàn giao cho:
                                            </b>Trương Thị Tường Vi</span></div>
                                </li>
                                <li class="last"><a class="text-info"
                                        href="https://erp.nhanh.vn/crm/service/history?id=8298">Xem
                                        chi tiết 1 hành động</a></li>
                            </ul>
                        </td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/service/edit?id=8298">Sửa</a>
                                    </li>
                                    <li><a href="https://erp.nhanh.vn/crm/service/index?page=2#"
                                            class="del_Item" data-id="8298">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8297">20</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8297">8297</a></td>
                        <td style="height:100px;"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8297"><b>dogonoithatannhien</b></a><br><span
                                data-toggle="tooltip" data-title="Ngày bắt đầu" class="text-info"><i
                                    class="fa fa-calendar"></i> 09/03/2020</span><br><span
                                data-toggle="tooltip" data-title="Ngày kết thúc"
                                class="text-danger"><i class="fa fa-minus-circle text-danger"></i>
                                09/07/2020</span></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/index?userId=1249"
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
                        <td>1</td>
                        <td class="">
                            <ul class="td-history">
                                <li>
                                    <div class="head-activity text-primary">23/06/2020 15:13:49 - Lê
                                        Thùy Linh</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-phone"></i> Gọi điện</b></span> -
                                        <b class="text-success">Thành công</b></div>
                                </li>
                                <li>
                                    <div class="head-activity text-primary">02/06/2020 16:29:19 - Lê
                                        Thùy Linh</div>
                                    <div class="infor-activity"><span class=""><b>Thao tác
                                                Khác</b></span></div>
                                </li>
                                <li>
                                    <div class="head-activity text-primary">22/05/2020 15:08:18 - Lê
                                        Thùy Linh</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-phone"></i> Gọi điện</b></span> -
                                        <b class="text-success">Thành công</b></div>
                                </li>
                                <li class="last"><a class="text-info"
                                        href="https://erp.nhanh.vn/crm/service/history?id=8297">Xem
                                        chi tiết 11 hành động</a></li>
                            </ul>
                        </td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/service/edit?id=8297">Sửa</a>
                                    </li>
                                    <li><a href="https://erp.nhanh.vn/crm/service/index?page=2#"
                                            class="del_Item" data-id="8297">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8296">21</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8296">8296</a></td>
                        <td style="height:100px;"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8296"><b>bhldbaongoc</b></a><br><span
                                data-toggle="tooltip" data-title="Ngày bắt đầu" class="text-info"><i
                                    class="fa fa-calendar"></i> 09/03/2020</span><br><span
                                data-toggle="tooltip" data-title="Ngày kết thúc"
                                class="text-danger"><i class="fa fa-minus-circle text-danger"></i>
                                09/10/2020</span></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/index?userId=1224"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Nguyễn Thị Quỳnh
                                Vân</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=4405"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Phạm
                                Thị Giang</a><br>
                            <div title="09/03/2020 10:46:50">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2020-03-09 10:46:50 "></i> Nguyễn
                                Nhật Linh</div>
                        </td>
                        <td></td>
                        <td class="">
                            <ul class="td-history">
                                <li>
                                    <div class="head-activity text-primary">07/07/2020 15:10:06 -
                                        Phạm Thị Giang</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-phone"></i> Gọi điện</b></span> -
                                        <b class="text-success">Thành công</b></div>
                                </li>
                                <li>
                                    <div class="head-activity text-primary">09/06/2020 14:35:02 -
                                        Phạm Thị Giang</div>
                                    <div class="infor-activity"><span class=""><b>Thao tác
                                                Khác</b></span></div>
                                </li>
                                <li>
                                    <div class="head-activity text-primary">03/06/2020 09:08:05 -
                                        Phạm Thị Giang</div>
                                    <div class="infor-activity"><span class=""><b>Thao tác
                                                Khác</b></span></div>
                                </li>
                                <li class="last"><a class="text-info"
                                        href="https://erp.nhanh.vn/crm/service/history?id=8296">Xem
                                        chi tiết 9 hành động</a></li>
                            </ul>
                        </td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/service/edit?id=8296">Sửa</a>
                                    </li>
                                    <li><a href="https://erp.nhanh.vn/crm/service/index?page=2#"
                                            class="del_Item" data-id="8296">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8295">22</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8295">8295</a></td>
                        <td style="height:100px;"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8295"><b>REDRIVERTOURS</b></a><br><span
                                data-toggle="tooltip" data-title="Ngày bắt đầu" class="text-info"><i
                                    class="fa fa-calendar"></i> 04/03/2020</span><br><span
                                data-toggle="tooltip" data-title="Ngày kết thúc"
                                class="text-danger"><i class="fa fa-minus-circle text-danger"></i>
                                04/03/2021</span></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/index?userId=1224"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Nguyễn Thị Quỳnh
                                Vân</a><br>
                            <div title="04/03/2020 10:33:34">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2020-03-04 10:33:34 "></i> Phạm
                                Thị Hồng Linh</div>
                        </td>
                        <td>1</td>
                        <td class=""></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/service/edit?id=8295">Sửa</a>
                                    </li>
                                    <li><a href="https://erp.nhanh.vn/crm/service/index?page=2#"
                                            class="del_Item" data-id="8295">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8294">23</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8294">8294</a></td>
                        <td style="height:100px;"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8294"><b>Thietbiyteso4hoangdaothanh</b></a><br><span
                                data-toggle="tooltip" data-title="Ngày bắt đầu" class="text-info"><i
                                    class="fa fa-calendar"></i> 02/03/2020</span><br><span
                                data-toggle="tooltip" data-title="Ngày kết thúc"
                                class="text-danger"><i class="fa fa-minus-circle text-danger"></i>
                                02/10/2020</span></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/index?userId=1152"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Phạm Thị Thu
                                Hằng</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=1096"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Phan
                                Quỳnh Hương</a><br>
                            <div title="02/03/2020 15:37:01">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2020-03-02 15:37:01 "></i> Phạm
                                Thị Hồng Linh</div>
                        </td>
                        <td>1</td>
                        <td class="">
                            <ul class="td-history">
                                <li>
                                    <div class="head-activity text-primary">29/05/2020 16:35:30 -
                                        Phan Quỳnh Hương</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-phone"></i> Gọi điện</b></span> -
                                        <b class="text-success">Thành công</b></div>
                                </li>
                                <li>
                                    <div class="head-activity text-primary">01/04/2020 12:55:01 -
                                        Phan Quỳnh Hương</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-users"></i> Đến gặp</b></span> - <b
                                            class="text-success">Thành công!</b></div>
                                </li>
                                <li>
                                    <div class="head-activity text-primary">01/04/2020 12:53:56 -
                                        Phan Quỳnh Hương</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-phone"></i> Gọi điện</b></span> -
                                        <b class="text-success">Thành công</b></div>
                                </li>
                                <li class="last"><a class="text-info"
                                        href="https://erp.nhanh.vn/crm/service/history?id=8294">Xem
                                        chi tiết 4 hành động</a></li>
                            </ul>
                        </td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/service/edit?id=8294">Sửa</a>
                                    </li>
                                    <li><a href="https://erp.nhanh.vn/crm/service/index?page=2#"
                                            class="del_Item" data-id="8294">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8293">24</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8293">8293</a></td>
                        <td style="height:100px;"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8293"><b>thienngan99</b></a><br><span
                                data-toggle="tooltip" data-title="Ngày bắt đầu" class="text-info"><i
                                    class="fa fa-calendar"></i> 28/02/2020</span><br><span
                                data-toggle="tooltip" data-title="Ngày kết thúc"
                                class="text-danger"><i class="fa fa-minus-circle text-danger"></i>
                                28/06/2020</span></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/index?userId=939"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Phan Thành
                                Quang</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8292"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Trương
                                Thị Tường Vi</a><br>
                            <div title="28/02/2020 13:44:49">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2020-02-28 13:44:49 "></i> Nguyễn
                                Nhật Linh</div>
                        </td>
                        <td>1</td>
                        <td class="">
                            <ul class="td-history">
                                <li>
                                    <div class="head-activity text-primary">28/02/2020 13:52:44 -
                                        Nguyễn Nhật Linh</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-hand-o-right"></i> Bàn giao cho:
                                            </b>Trương Thị Tường Vi</span></div>
                                </li>
                                <li class="last"><a class="text-info"
                                        href="https://erp.nhanh.vn/crm/service/history?id=8293">Xem
                                        chi tiết 1 hành động</a></li>
                            </ul>
                        </td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/service/edit?id=8293">Sửa</a>
                                    </li>
                                    <li><a href="https://erp.nhanh.vn/crm/service/index?page=2#"
                                            class="del_Item" data-id="8293">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8292">25</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8292">8292</a></td>
                        <td style="height:100px;"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8292"><b>VattuSunco</b></a><br><span
                                data-toggle="tooltip" data-title="Ngày bắt đầu" class="text-info"><i
                                    class="fa fa-calendar"></i> 27/02/2020</span><br><span
                                data-toggle="tooltip" data-title="Ngày kết thúc"
                                class="text-danger"><i class="fa fa-minus-circle text-danger"></i>
                                27/09/2020</span></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/index?userId=1152"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Phạm Thị Thu
                                Hằng</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=4405"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Phạm
                                Thị Giang</a><br>
                            <div title="27/02/2020 11:49:33">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2020-02-27 11:49:33 "></i> Nguyễn
                                Nhật Linh</div>
                        </td>
                        <td>1</td>
                        <td class="">
                            <ul class="td-history">
                                <li>
                                    <div class="head-activity text-primary">14/07/2020 15:22:59 -
                                        Phạm Thị Giang</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-phone"></i> Gọi điện</b></span> -
                                        <b class="text-danger">Thất bại</b></div>
                                </li>
                                <li>
                                    <div class="head-activity text-primary">16/06/2020 15:25:45 -
                                        Phạm Thị Giang</div>
                                    <div class="infor-activity"><span class=""><b>Thao tác
                                                Khác</b></span></div>
                                </li>
                                <li>
                                    <div class="head-activity text-primary">12/05/2020 14:32:01 -
                                        Phạm Thị Giang</div>
                                    <div class="infor-activity"><span class=""><b>Thao tác
                                                Khác</b></span></div>
                                </li>
                                <li class="last"><a class="text-info"
                                        href="https://erp.nhanh.vn/crm/service/history?id=8292">Xem
                                        chi tiết 10 hành động</a></li>
                            </ul>
                        </td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/service/edit?id=8292">Sửa</a>
                                    </li>
                                    <li><a href="https://erp.nhanh.vn/crm/service/index?page=2#"
                                            class="del_Item" data-id="8292">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8291">26</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8291">8291</a></td>
                        <td style="height:100px;"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8291"><b>dogohuytuyen</b></a><br><span
                                data-toggle="tooltip" data-title="Ngày bắt đầu" class="text-info"><i
                                    class="fa fa-calendar"></i> 27/02/2020</span><br><span
                                data-toggle="tooltip" data-title="Ngày kết thúc"
                                class="text-danger"><i class="fa fa-minus-circle text-danger"></i>
                                27/06/2020</span></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/index?userId=1224"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Nguyễn Thị Quỳnh
                                Vân</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=6797"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Lê Thùy
                                Linh</a><br>
                            <div title="27/02/2020 10:59:21">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2020-02-27 10:59:21 "></i> Nguyễn
                                Nhật Linh</div>
                        </td>
                        <td>1</td>
                        <td class="">
                            <ul class="td-history">
                                <li>
                                    <div class="head-activity text-primary">12/06/2020 10:55:09 - Lê
                                        Thùy Linh</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-phone"></i> Gọi điện</b></span> -
                                        <b class="text-success">Thành công</b></div>
                                </li>
                                <li>
                                    <div class="head-activity text-primary">08/06/2020 16:59:47 - Lê
                                        Thùy Linh</div>
                                    <div class="infor-activity"><span class=""><b>Thao tác
                                                Khác</b></span></div>
                                </li>
                                <li>
                                    <div class="head-activity text-primary">22/05/2020 10:08:10 - Lê
                                        Thùy Linh</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-phone"></i> Gọi điện</b></span> -
                                        <b class="text-success">Thành công</b></div>
                                </li>
                                <li class="last"><a class="text-info"
                                        href="https://erp.nhanh.vn/crm/service/history?id=8291">Xem
                                        chi tiết 10 hành động</a></li>
                            </ul>
                        </td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/service/edit?id=8291">Sửa</a>
                                    </li>
                                    <li><a href="https://erp.nhanh.vn/crm/service/index?page=2#"
                                            class="del_Item" data-id="8291">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8290">27</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8290">8290</a></td>
                        <td style="height:100px;"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8290"><b>noithatdungtrang</b></a><br><span
                                data-toggle="tooltip" data-title="Ngày bắt đầu" class="text-info"><i
                                    class="fa fa-calendar"></i> 25/06/2020</span><br><span
                                data-toggle="tooltip" data-title="Ngày kết thúc"
                                class="text-danger"><i class="fa fa-minus-circle text-danger"></i>
                                27/09/2020</span></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/index?userId=1224"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Nguyễn Thị Quỳnh
                                Vân</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=6797"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Lê Thùy
                                Linh</a><br>
                            <div title="27/02/2020 10:38:42">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2020-02-27 10:38:42 "></i> Nguyễn
                                Nhật Linh</div>
                        </td>
                        <td>2</td>
                        <td class="">
                            <ul class="td-history">
                                <li>
                                    <div class="head-activity text-primary">21/07/2020 16:36:21 - Lê
                                        Thùy Linh</div>
                                    <div class="infor-activity"><span class=""><b>Thao tác
                                                Khác</b></span></div>
                                </li>
                                <li>
                                    <div class="head-activity text-primary">25/06/2020 14:39:48 -
                                        Nguyễn Nhật Linh</div>
                                    <div class="infor-activity"><span class=""><b>Sửa gian hàng
                                            </b></span></div>
                                </li>
                                <li>
                                    <div class="head-activity text-primary">12/06/2020 10:55:48 - Lê
                                        Thùy Linh</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-phone"></i> Gọi điện</b></span> -
                                        <b class="text-success">Thành công</b></div>
                                </li>
                                <li class="last"><a class="text-info"
                                        href="https://erp.nhanh.vn/crm/service/history?id=8290">Xem
                                        chi tiết 13 hành động</a></li>
                            </ul>
                        </td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/service/edit?id=8290">Sửa</a>
                                    </li>
                                    <li><a href="https://erp.nhanh.vn/crm/service/index?page=2#"
                                            class="del_Item" data-id="8290">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8289">28</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8289">8289</a></td>
                        <td style="height:100px;"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8289"><b>Cuahang_ThanhPhat</b></a><br><span
                                data-toggle="tooltip" data-title="Ngày bắt đầu" class="text-info"><i
                                    class="fa fa-calendar"></i> 20/02/2020</span><br><span
                                data-toggle="tooltip" data-title="Ngày kết thúc"
                                class="text-danger"><i class="fa fa-minus-circle text-danger"></i>
                                20/09/2020</span></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/index?userId=1002"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Trần Văn Anh
                                Vũ</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8292"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Trương
                                Thị Tường Vi</a><br>
                            <div title="20/02/2020 15:22:14">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2020-02-20 15:22:14 "></i> Phạm
                                Thị Hồng Linh</div>
                        </td>
                        <td>1</td>
                        <td class="">
                            <ul class="td-history">
                                <li>
                                    <div class="head-activity text-primary">03/06/2020 12:36:57 -
                                        Nguyễn Nhật Linh</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-ban"></i> Bỏ quyền chăm sóc của:
                                            </b>Lê Cát Mộng Linh</span></div>
                                </li>
                                <li>
                                    <div class="head-activity text-primary">03/06/2020 12:36:57 -
                                        Nguyễn Nhật Linh</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-hand-o-right"></i> Bàn giao cho:
                                            </b>Trần Văn Anh Vũ</span></div>
                                </li>
                                <li>
                                    <div class="head-activity text-primary">20/02/2020 17:03:55 -
                                        Phạm Thị Hồng Linh</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-hand-o-right"></i> Bàn giao cho:
                                            </b>Trương Thị Tường Vi</span></div>
                                </li>
                                <li class="last"><a class="text-info"
                                        href="https://erp.nhanh.vn/crm/service/history?id=8289">Xem
                                        chi tiết 5 hành động</a></li>
                            </ul>
                        </td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/service/edit?id=8289">Sửa</a>
                                    </li>
                                    <li><a href="https://erp.nhanh.vn/crm/service/index?page=2#"
                                            class="del_Item" data-id="8289">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8288">29</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8288">8288</a></td>
                        <td style="height:100px;"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8288"><b>maycongngheobd</b></a><br><span
                                data-toggle="tooltip" data-title="Ngày bắt đầu" class="text-info"><i
                                    class="fa fa-calendar"></i> 19/02/2020</span><br><span
                                data-toggle="tooltip" data-title="Ngày kết thúc"
                                class="text-danger"><i class="fa fa-minus-circle text-danger"></i>
                                19/09/2020</span></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/index?userId=1002"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Trần Văn Anh
                                Vũ</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8292"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Trương
                                Thị Tường Vi</a><br>
                            <div title="19/02/2020 09:24:56">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2020-02-19 09:24:56 "></i> Phạm
                                Thị Hồng Linh</div>
                        </td>
                        <td>1</td>
                        <td class="">
                            <ul class="td-history">
                                <li>
                                    <div class="head-activity text-primary">03/06/2020 12:37:55 -
                                        Nguyễn Nhật Linh</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-ban"></i> Bỏ quyền chăm sóc của:
                                            </b>Lê Cát Mộng Linh</span></div>
                                </li>
                                <li>
                                    <div class="head-activity text-primary">03/06/2020 12:37:55 -
                                        Nguyễn Nhật Linh</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-hand-o-right"></i> Bàn giao cho:
                                            </b>Trần Văn Anh Vũ</span></div>
                                </li>
                                <li>
                                    <div class="head-activity text-primary">19/02/2020 09:39:20 -
                                        Phạm Thị Hồng Linh</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-hand-o-right"></i> Bàn giao cho:
                                            </b>Trương Thị Tường Vi</span></div>
                                </li>
                                <li class="last"><a class="text-info"
                                        href="https://erp.nhanh.vn/crm/service/history?id=8288">Xem
                                        chi tiết 3 hành động</a></li>
                            </ul>
                        </td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/service/edit?id=8288">Sửa</a>
                                    </li>
                                    <li><a href="https://erp.nhanh.vn/crm/service/index?page=2#"
                                            class="del_Item" data-id="8288">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/service/view?id=8287">30</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/view?id=8287">8287</a></td>
                        <td style="height:100px;"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=8287"><b>TNHHVietDuc</b></a><br><span
                                data-toggle="tooltip" data-title="Ngày bắt đầu" class="text-info"><i
                                    class="fa fa-calendar"></i> 14/02/2020</span><br><span
                                data-toggle="tooltip" data-title="Ngày kết thúc"
                                class="text-danger"><i class="fa fa-minus-circle text-danger"></i>
                                14/09/2020</span></td>
                        <td><a href="https://erp.nhanh.vn/crm/service/index?userId=5758"
                                title="Kinh doanh"><i class="fa fa-flag-o"></i> Nguyễn Hữu
                                Lưu</a><br><a
                                href="https://erp.nhanh.vn/crm/service/index?userId=8292"
                                title="chăm sóc khách hàng"><i class="fa fa-headphones"></i> Trương
                                Thị Tường Vi</a><br>
                            <div title="14/02/2020 08:33:33">
                                <i class="fa fa-github-alt" data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2020-02-14 08:33:33 "></i> Nguyễn
                                Nhật Linh</div>
                        </td>
                        <td>1</td>
                        <td class="">
                            <ul class="td-history">
                                <li>
                                    <div class="head-activity text-primary">14/02/2020 08:43:53 -
                                        Nguyễn Nhật Linh</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-hand-o-right"></i> Bàn giao cho:
                                            </b>Trương Thị Tường Vi</span></div>
                                </li>
                                <li class="last"><a class="text-info"
                                        href="https://erp.nhanh.vn/crm/service/history?id=8287">Xem
                                        chi tiết 1 hành động</a></li>
                            </ul>
                        </td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/service/edit?id=8287">Sửa</a>
                                    </li>
                                    <li><a href="https://erp.nhanh.vn/crm/service/index?page=2#"
                                            class="del_Item" data-id="8287">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div class="col-md-6 paginatorItem">
                    <div class="paginator"><span class="labelPages">31 - 60 / 8,255</span><a
                            class="fa fa-step-backward"
                            href="https://erp.nhanh.vn/crm/service/index?page=1"
                            title="Trang đầu"></a> <a class="fa fa-backward"
                            href="https://erp.nhanh.vn/crm/service/index?page=1"
                            title="Trang trước"></a> <a class="fa fa-forward"
                            href="https://erp.nhanh.vn/crm/service/index?page=3"
                            title="Trang sau"></a> <a class="fa fa-step-forward"
                            href="https://erp.nhanh.vn/crm/service/index?page=276"
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
    
