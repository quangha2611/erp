@extends('Layout.master')

@section('title','ERP-Đặt Lịch')

@section('css')
    <link rel="stylesheet" href="{{ asset('asset/css/crm/opportunity/style.css') }}" type="text/css">
@endsection

@section('content-page')
<div class="col-md-10 content-wrapper">
    <ul class="breadcrumb">
        <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
        <li><a href="https://erp.nhanh.vn/crm/opportunity/index">Danh sách cơ hội</a></li>
    </ul>
    <div id="page-crm-contact">
        <div class="filterContainer">
            <form method="GET" name="crmOpportunityFilter" class="form-inline" role="form"
                id="crmOpportunityFilter">
                <div class="form-group main-text-search"><input type="text" name="keyword"
                        maxlength="255" placeholder="Từ khóa(Tên, SDT, emal, website)"
                        id="keyword" class="form-control" value=""></div>
                <div class="form-group"><select name="companyId" id="companyId"
                        class="form-control">
                        <option value="391" selected="selected">123job.vn</option>
                    </select></div>
                <div class="form-group"><select name="salesStage" id="salesStage"
                        class="form-control">
                        <option value="">- Trạng thái -</option>
                        <option value="11">Có lịch hẹn</option>
                        <option value="14">Cần xử lý</option>
                        <option value="15">LEAD</option>
                        <option value="9">Thành công</option>
                        <option value="16">Đang suy nghĩ</option>
                        <option value="10">Từ chối</option>
                    </select></div>
                <div class="form-group"><select name="source" id="source" class="form-control">
                        <option value="">- Nguồn thông tin -</option>
                        <option value="-1">Chưa cập nhật nguồn</option>
                        <option value="1">Data bàn giao - FB ADS</option>
                        <option value="26">Data bàn giao - Fanpage</option>
                        <option value="25">Data bàn giao - Google Ads</option>
                        <option value="22">Data bàn giao - SEO</option>
                        <option value="19">Data bàn giao- Hotline</option>
                        <option value="8">Data bàn giao - Không có mã</option>
                        <option value="11">Data bàn giao - Email marketing</option>
                        <option value="21">Data bàn giao - SĐT quét từ QC</option>
                        <option value="3">Data bàn giao - Được giới thiệu</option>
                        <option value="12">Hội thảo, sự kiện, đi thị trường</option>
                        <option value="13">Khách tự liên hệ kinh doanh</option>
                        <option value="15">Kinh doanh được giới thiệu</option>
                        <option value="17">TeleSale</option>
                        <option value="24">Seeding/ Inbox/ Spam</option>
                        <option value="100">Khác</option>
                    </select></div>
                <div class="form-group"><input type="text" name="creatByDate"
                        class="form-control date-range-picker" placeholder="Ngày tạo"
                        id="creatByDate" value=""></div>
                <div class="form-group"><input type="text" name="careDateRange"
                        class="form-control date-range-picker" placeholder="Ngày chăm sóc"
                        id="careDateRange" value=""></div>
                <div class="form-group"><input name="submit" type="submit"
                        id="btnFilterCrmContact" class="form-control btn btn-primary"
                        value="Lọc"></div>
            </form>
        </div>
        <div class="dgContainer">
            <div style="display: none; width: 1556px;" class="stickyHeader">
                <table class="table table-bordered" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr class="even">
                            <th style="width: 85px;">ID</th>
                            <th title="Thêm tác vụ" style="width: 40px;"><i
                                    class="fa fa-plus-circle color-red icon"></i></th>
                            <th style="width: 342px;">Cơ hội</th>
                            <th style="width: 214px;">Phụ trách</th>
                            <th style="width: 103px;">Trạng thái</th>
                            <th style="width: 543px;">Lịch sử chăm sóc</th>
                            <th style="width: 189px;">Người tạo</th>
                            <th style="width: 39px;"><i class="fa fa-cogs"></i></th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div class="col-md-6 paginatorItem">
                    <div class="paginator"><span class="labelPages">1 - 15 / 15</span></div>
                </div>
                <div style="clear: both;"></div><br>
            </div>
            <table id="dgCrmOpportunity" class="table table-bordered">
                <thead>
                    <tr class="even">
                        <th>ID</th>
                        <th title="Thêm tác vụ"><i class="fa fa-plus-circle color-red icon"></i>
                        </th>
                        <th>Cơ hội</th>
                        <th>Phụ trách</th>
                        <th>Trạng thái</th>
                        <th>Lịch sử chăm sóc</th>
                        <th>Người tạo</th>
                        <th><i class="fa fa-cogs"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="h">
                        <td class=""><a
                                href="https://erp.nhanh.vn/crm/account/view?id=21810">405449</a>
                        </td>
                        <td class="colControls">
                            <div class="dropdown">
                                <a data-toggle="dropdown"
                                    href="https://erp.nhanh.vn/crm/opportunity/index#"
                                    class="fa fa-plus-circle icon"></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addmeeting?accountId=21810">
                                            <i class="fa fa-users"></i> Thêm cuộc hẹn
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addphonecall?accountId=21810">
                                            <i class="fa fa-phone"></i> Thêm cuộc gọi
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addcalendar?accountId=21810">
                                            <i class="fa fa-calendar"></i> Đặt lịch
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addrequestphonecall?accountId=21810">
                                            <i class="fa fa-phone-square"></i> Yêu cầu gọi
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/requirement/add?accountId=21810">
                                            <i class="fa fa-cog"></i> Thêm yêu cầu
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                        <td class="">
                            <div class="item-block">
                                <div class="item-icon"><i class="fa fa-user"></i></div>
                                <div class="item-infor"><a
                                        href="https://erp.nhanh.vn/crm/account/view?id=21810">CÔNG
                                        TY TNHH AUCO</a></div>
                            </div>
                            <div class="line-break"></div>
                        </td>
                        <td class="">
                            <div title="Kinh doanh"><i class="fa fa-flag-o"></i> <span
                                    data-toggle="tooltip" data-title="123Job"
                                    data-original-title="" title="">Đỗ Thị Thanh Nhàn</span>
                            </div>
                            <div title="Kinh doanh"><i class="fa fa-flag-o"></i> <span
                                    data-toggle="tooltip" data-title="123Job"
                                    data-original-title="" title="">Nguyễn Văn Hưng</span></div>
                        </td>
                        <td class=""><a class="btn salesStage-btn367503 btn-warning btn-xs"
                                idref="367503" stage="29"></a></td>
                        <td class="">
                            <ul class="td-history">
                                <li data-id="3055288">
                                    <div class="head-activity text-primary">20/07/2020 19:43:46
                                        - Nguyễn Văn Hưng</div>
                                    <div class="infor-activity"><span class=""><b>Thêm nhận
                                                xét</b></span></div>
                                </li>
                                <li data-id="3055287">
                                    <div class="head-activity text-primary">20/07/2020 19:43:41
                                        - Nguyễn Văn Hưng</div>
                                    <div class="infor-activity"><span class=""><b>Thêm nhận
                                                xét</b></span></div>
                                </li>
                                <li data-id="3050019">
                                    <div class="head-activity text-primary">15/07/2020 15:17:38
                                        - Đỗ Thị Bích Thủy</div>
                                    <div class="infor-activity"><span class=""><b>Duyệt phiếu
                                                thu</b></span></div>
                                </li>
                            </ul>
                        </td>
                        <td class=""><span data-toggle="tooltip"
                                data-title="15/07/2020 15:17:37" class="text-success"
                                data-original-title="" title="">Đỗ Thị Thanh Nhàn</span></td>
                        <td class="colControls"></td>
                    </tr>
                    <tr class="even">
                        <td class=""><a
                                href="https://erp.nhanh.vn/crm/account/view?id=21810">405449</a>
                        </td>
                        <td class="colControls">
                            <div class="dropdown">
                                <a data-toggle="dropdown"
                                    href="https://erp.nhanh.vn/crm/opportunity/index#"
                                    class="fa fa-plus-circle icon"></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addmeeting?accountId=21810">
                                            <i class="fa fa-users"></i> Thêm cuộc hẹn
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addphonecall?accountId=21810">
                                            <i class="fa fa-phone"></i> Thêm cuộc gọi
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addcalendar?accountId=21810">
                                            <i class="fa fa-calendar"></i> Đặt lịch
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addrequestphonecall?accountId=21810">
                                            <i class="fa fa-phone-square"></i> Yêu cầu gọi
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/requirement/add?accountId=21810">
                                            <i class="fa fa-cog"></i> Thêm yêu cầu
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                        <td class="">
                            <div class="item-block">
                                <div class="item-icon"><i class="fa fa-user"></i></div>
                                <div class="item-infor"><a
                                        href="https://erp.nhanh.vn/crm/account/view?id=21810">CÔNG
                                        TY TNHH AUCO</a></div>
                            </div>
                            <div class="line-break"></div>
                        </td>
                        <td class="">
                            <div title="Kinh doanh"><i class="fa fa-flag-o"></i> <span
                                    data-toggle="tooltip" data-title="123Job">Đỗ Thị Thanh
                                    Nhàn</span></div>
                            <div title="Kinh doanh"><i class="fa fa-flag-o"></i> <span
                                    data-toggle="tooltip" data-title="123Job">Nguyễn Văn
                                    Hưng</span></div>
                        </td>
                        <td class=""><a class="btn salesStage-btn367503 btn-warning btn-xs"
                                idref="367503" stage="29"></a></td>
                        <td class="">
                            <ul class="td-history">
                                <li data-id="3055288">
                                    <div class="head-activity text-primary">20/07/2020 19:43:46
                                        - Nguyễn Văn Hưng</div>
                                    <div class="infor-activity"><span class=""><b>Thêm nhận
                                                xét</b></span></div>
                                </li>
                                <li data-id="3055287">
                                    <div class="head-activity text-primary">20/07/2020 19:43:41
                                        - Nguyễn Văn Hưng</div>
                                    <div class="infor-activity"><span class=""><b>Thêm nhận
                                                xét</b></span></div>
                                </li>
                                <li data-id="3050019">
                                    <div class="head-activity text-primary">15/07/2020 15:17:38
                                        - Đỗ Thị Bích Thủy</div>
                                    <div class="infor-activity"><span class=""><b>Duyệt phiếu
                                                thu</b></span></div>
                                </li>
                            </ul>
                        </td>
                        <td class=""><span data-toggle="tooltip"
                                data-title="15/07/2020 15:17:37" class="text-success">Đỗ Thị
                                Thanh Nhàn</span></td>
                        <td class="colControls"></td>
                    </tr>
                    <tr class="">
                        <td class=""><a
                                href="https://erp.nhanh.vn/crm/account/view?id=21810">405449</a>
                        </td>
                        <td class="colControls">
                            <div class="dropdown">
                                <a data-toggle="dropdown"
                                    href="https://erp.nhanh.vn/crm/opportunity/index#"
                                    class="fa fa-plus-circle icon"></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addmeeting?accountId=21810">
                                            <i class="fa fa-users"></i> Thêm cuộc hẹn
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addphonecall?accountId=21810">
                                            <i class="fa fa-phone"></i> Thêm cuộc gọi
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addcalendar?accountId=21810">
                                            <i class="fa fa-calendar"></i> Đặt lịch
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addrequestphonecall?accountId=21810">
                                            <i class="fa fa-phone-square"></i> Yêu cầu gọi
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/requirement/add?accountId=21810">
                                            <i class="fa fa-cog"></i> Thêm yêu cầu
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                        <td class="">
                            <div class="item-block">
                                <div class="item-icon"><i class="fa fa-user"></i></div>
                                <div class="item-infor"><a
                                        href="https://erp.nhanh.vn/crm/account/view?id=21810">CÔNG
                                        TY TNHH AUCO</a></div>
                            </div>
                            <div class="line-break"></div>
                        </td>
                        <td class="">
                            <div title="Kinh doanh"><i class="fa fa-flag-o"></i> <span
                                    data-toggle="tooltip" data-title="123Job">Đỗ Thị Thanh
                                    Nhàn</span></div>
                            <div title="Kinh doanh"><i class="fa fa-flag-o"></i> <span
                                    data-toggle="tooltip" data-title="123Job">Nguyễn Văn
                                    Hưng</span></div>
                        </td>
                        <td class=""><a class="btn salesStage-btn369733 btn-warning btn-xs"
                                idref="369733" stage="29"></a></td>
                        <td class="">
                            <ul class="td-history">
                                <li data-id="3055288">
                                    <div class="head-activity text-primary">20/07/2020 19:43:46
                                        - Nguyễn Văn Hưng</div>
                                    <div class="infor-activity"><span class=""><b>Thêm nhận
                                                xét</b></span></div>
                                </li>
                                <li data-id="3055287">
                                    <div class="head-activity text-primary">20/07/2020 19:43:41
                                        - Nguyễn Văn Hưng</div>
                                    <div class="infor-activity"><span class=""><b>Thêm nhận
                                                xét</b></span></div>
                                </li>
                                <li data-id="3050019">
                                    <div class="head-activity text-primary">15/07/2020 15:17:38
                                        - Đỗ Thị Bích Thủy</div>
                                    <div class="infor-activity"><span class=""><b>Duyệt phiếu
                                                thu</b></span></div>
                                </li>
                            </ul>
                        </td>
                        <td class=""><span data-toggle="tooltip"
                                data-title="15/07/2020 15:17:37" class="text-success">Nguyễn Văn
                                Hưng</span></td>
                        <td class="colControls"><span style="cursor:pointer;" data-id="369733"
                                data-toggle="tooltip" data-title="Cập nhật trạng thái"
                                class="fa fa-refresh text-danger updateSalesStage"></span></td>
                    </tr>
                    <tr class="even">
                        <td class=""><a
                                href="https://erp.nhanh.vn/crm/account/view?id=21810">405449</a>
                        </td>
                        <td class="colControls">
                            <div class="dropdown">
                                <a data-toggle="dropdown"
                                    href="https://erp.nhanh.vn/crm/opportunity/index#"
                                    class="fa fa-plus-circle icon"></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addmeeting?accountId=21810">
                                            <i class="fa fa-users"></i> Thêm cuộc hẹn
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addphonecall?accountId=21810">
                                            <i class="fa fa-phone"></i> Thêm cuộc gọi
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addcalendar?accountId=21810">
                                            <i class="fa fa-calendar"></i> Đặt lịch
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addrequestphonecall?accountId=21810">
                                            <i class="fa fa-phone-square"></i> Yêu cầu gọi
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/requirement/add?accountId=21810">
                                            <i class="fa fa-cog"></i> Thêm yêu cầu
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                        <td class="">
                            <div class="item-block">
                                <div class="item-icon"><i class="fa fa-user"></i></div>
                                <div class="item-infor"><a
                                        href="https://erp.nhanh.vn/crm/account/view?id=21810">CÔNG
                                        TY TNHH AUCO</a></div>
                            </div>
                            <div class="line-break"></div>
                        </td>
                        <td class="">
                            <div title="Kinh doanh"><i class="fa fa-flag-o"></i> <span
                                    data-toggle="tooltip" data-title="123Job">Đỗ Thị Thanh
                                    Nhàn</span></div>
                            <div title="Kinh doanh"><i class="fa fa-flag-o"></i> <span
                                    data-toggle="tooltip" data-title="123Job">Nguyễn Văn
                                    Hưng</span></div>
                        </td>
                        <td class=""><a class="btn salesStage-btn369733 btn-warning btn-xs"
                                idref="369733" stage="29"></a></td>
                        <td class="">
                            <ul class="td-history">
                                <li data-id="3055288">
                                    <div class="head-activity text-primary">20/07/2020 19:43:46
                                        - Nguyễn Văn Hưng</div>
                                    <div class="infor-activity"><span class=""><b>Thêm nhận
                                                xét</b></span></div>
                                </li>
                                <li data-id="3055287">
                                    <div class="head-activity text-primary">20/07/2020 19:43:41
                                        - Nguyễn Văn Hưng</div>
                                    <div class="infor-activity"><span class=""><b>Thêm nhận
                                                xét</b></span></div>
                                </li>
                                <li data-id="3050019">
                                    <div class="head-activity text-primary">15/07/2020 15:17:38
                                        - Đỗ Thị Bích Thủy</div>
                                    <div class="infor-activity"><span class=""><b>Duyệt phiếu
                                                thu</b></span></div>
                                </li>
                            </ul>
                        </td>
                        <td class=""><span data-toggle="tooltip"
                                data-title="15/07/2020 15:17:37" class="text-success">Nguyễn Văn
                                Hưng</span></td>
                        <td class="colControls"><span style="cursor:pointer;" data-id="369733"
                                data-toggle="tooltip" data-title="Cập nhật trạng thái"
                                class="fa fa-refresh text-danger updateSalesStage"></span></td>
                    </tr>
                    <tr class="">
                        <td class=""><a
                                href="https://erp.nhanh.vn/crm/lead/view?id=406392">406392</a>
                        </td>
                        <td class="colControls">
                            <div class="dropdown">
                                <a data-toggle="dropdown"
                                    href="https://erp.nhanh.vn/crm/opportunity/index#"
                                    class="fa fa-plus-circle icon"></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addmeeting?leadId=406392">
                                            <i class="fa fa-users"></i> Thêm cuộc hẹn
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addphonecall?leadId=406392">
                                            <i class="fa fa-phone"></i> Thêm cuộc gọi
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addcalendar?leadId=406392">
                                            <i class="fa fa-calendar"></i> Đặt lịch
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addrequestphonecall?leadId=406392">
                                            <i class="fa fa-phone-square"></i> Yêu cầu gọi
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/requirement/add?leadId=406392">
                                            <i class="fa fa-cog"></i> Thêm yêu cầu
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                        <td class="">
                            <div class="item-block">
                                <div class="item-icon"><i class="fa fa-user"></i></div>
                                <div class="item-infor"><a
                                        href="https://erp.nhanh.vn/crm/lead/view?id=406392">Nguyễn
                                        Thị Hoa</a></div>
                            </div>
                            <div class="line-break"></div>
                        </td>
                        <td class="">
                            <div title="Kinh doanh"><i class="fa fa-flag-o"></i> <span
                                    data-toggle="tooltip" data-title="123Job">Đỗ Thị Thanh
                                    Nhàn</span></div>
                            <div title="Kinh doanh"><i class="fa fa-flag-o"></i> <span
                                    data-toggle="tooltip" data-title="123Job">Nguyễn Văn
                                    Hưng</span></div>
                        </td>
                        <td class=""><a class="btn salesStage-btn369160 btn-warning btn-xs"
                                idref="369160" stage="22"></a></td>
                        <td class="">
                            <ul class="td-history">
                                <li data-id="3047927">
                                    <div class="head-activity text-primary">14/07/2020 11:31:03
                                        - Nguyễn Văn Hưng</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-hand-o-right"></i> Bàn giao
                                                cho: </b>Nguyễn Văn Hưng</span></div>
                                </li>
                                <li data-id="3047926">
                                    <div class="head-activity text-primary">14/07/2020 11:31:03
                                        - Nguyễn Văn Hưng</div>
                                    <div class="infor-activity"><span class=""><b>Cập nhật Level
                                                khách hàng</b></span></div>
                                </li>
                                <li data-id="3047707">
                                    <div class="head-activity text-primary">14/07/2020 10:19:17
                                        - Đỗ Thị Thanh Nhàn</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-hand-o-right"></i> Bàn giao
                                                cho: </b>Đỗ Thị Thanh Nhàn</span></div>
                                </li>
                            </ul>
                        </td>
                        <td class=""><span data-toggle="tooltip"
                                data-title="14/07/2020 11:31:03" class="text-success">Nguyễn Văn
                                Hưng</span></td>
                        <td class="colControls"><span style="cursor:pointer;" data-id="369160"
                                data-toggle="tooltip" data-title="Cập nhật trạng thái"
                                class="fa fa-refresh text-danger updateSalesStage"></span></td>
                    </tr>
                    <tr class="even">
                        <td class=""><a
                                href="https://erp.nhanh.vn/crm/lead/view?id=406392">406392</a>
                        </td>
                        <td class="colControls">
                            <div class="dropdown">
                                <a data-toggle="dropdown"
                                    href="https://erp.nhanh.vn/crm/opportunity/index#"
                                    class="fa fa-plus-circle icon"></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addmeeting?leadId=406392">
                                            <i class="fa fa-users"></i> Thêm cuộc hẹn
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addphonecall?leadId=406392">
                                            <i class="fa fa-phone"></i> Thêm cuộc gọi
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addcalendar?leadId=406392">
                                            <i class="fa fa-calendar"></i> Đặt lịch
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addrequestphonecall?leadId=406392">
                                            <i class="fa fa-phone-square"></i> Yêu cầu gọi
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/requirement/add?leadId=406392">
                                            <i class="fa fa-cog"></i> Thêm yêu cầu
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                        <td class="">
                            <div class="item-block">
                                <div class="item-icon"><i class="fa fa-user"></i></div>
                                <div class="item-infor"><a
                                        href="https://erp.nhanh.vn/crm/lead/view?id=406392">Nguyễn
                                        Thị Hoa</a></div>
                            </div>
                            <div class="line-break"></div>
                        </td>
                        <td class="">
                            <div title="Kinh doanh"><i class="fa fa-flag-o"></i> <span
                                    data-toggle="tooltip" data-title="123Job">Đỗ Thị Thanh
                                    Nhàn</span></div>
                            <div title="Kinh doanh"><i class="fa fa-flag-o"></i> <span
                                    data-toggle="tooltip" data-title="123Job">Nguyễn Văn
                                    Hưng</span></div>
                        </td>
                        <td class=""><a class="btn salesStage-btn369160 btn-warning btn-xs"
                                idref="369160" stage="22"></a></td>
                        <td class="">
                            <ul class="td-history">
                                <li data-id="3047927">
                                    <div class="head-activity text-primary">14/07/2020 11:31:03
                                        - Nguyễn Văn Hưng</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-hand-o-right"></i> Bàn giao
                                                cho: </b>Nguyễn Văn Hưng</span></div>
                                </li>
                                <li data-id="3047926">
                                    <div class="head-activity text-primary">14/07/2020 11:31:03
                                        - Nguyễn Văn Hưng</div>
                                    <div class="infor-activity"><span class=""><b>Cập nhật Level
                                                khách hàng</b></span></div>
                                </li>
                                <li data-id="3047707">
                                    <div class="head-activity text-primary">14/07/2020 10:19:17
                                        - Đỗ Thị Thanh Nhàn</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-hand-o-right"></i> Bàn giao
                                                cho: </b>Đỗ Thị Thanh Nhàn</span></div>
                                </li>
                            </ul>
                        </td>
                        <td class=""><span data-toggle="tooltip"
                                data-title="14/07/2020 11:31:03" class="text-success">Nguyễn Văn
                                Hưng</span></td>
                        <td class="colControls"><span style="cursor:pointer;" data-id="369160"
                                data-toggle="tooltip" data-title="Cập nhật trạng thái"
                                class="fa fa-refresh text-danger updateSalesStage"></span></td>
                    </tr>
                    <tr>
                        <td class=""><a
                                href="https://erp.nhanh.vn/crm/lead/view?id=406392">406392</a>
                        </td>
                        <td class="colControls">
                            <div class="dropdown">
                                <a data-toggle="dropdown"
                                    href="https://erp.nhanh.vn/crm/opportunity/index#"
                                    class="fa fa-plus-circle icon"></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addmeeting?leadId=406392">
                                            <i class="fa fa-users"></i> Thêm cuộc hẹn
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addphonecall?leadId=406392">
                                            <i class="fa fa-phone"></i> Thêm cuộc gọi
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addcalendar?leadId=406392">
                                            <i class="fa fa-calendar"></i> Đặt lịch
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addrequestphonecall?leadId=406392">
                                            <i class="fa fa-phone-square"></i> Yêu cầu gọi
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/requirement/add?leadId=406392">
                                            <i class="fa fa-cog"></i> Thêm yêu cầu
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                        <td class="">
                            <div class="item-block">
                                <div class="item-icon"><i class="fa fa-user"></i></div>
                                <div class="item-infor"><a
                                        href="https://erp.nhanh.vn/crm/lead/view?id=406392">Nguyễn
                                        Thị Hoa</a></div>
                            </div>
                            <div class="line-break"></div>
                        </td>
                        <td class="">
                            <div title="Kinh doanh"><i class="fa fa-flag-o"></i> <span
                                    data-toggle="tooltip" data-title="123Job">Đỗ Thị Thanh
                                    Nhàn</span></div>
                            <div title="Kinh doanh"><i class="fa fa-flag-o"></i> <span
                                    data-toggle="tooltip" data-title="123Job">Nguyễn Văn
                                    Hưng</span></div>
                        </td>
                        <td class=""><a class="btn salesStage-btn369094 btn-warning btn-xs"
                                idref="369094" stage="20"></a></td>
                        <td class="">
                            <ul class="td-history">
                                <li data-id="3047927">
                                    <div class="head-activity text-primary">14/07/2020 11:31:03
                                        - Nguyễn Văn Hưng</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-hand-o-right"></i> Bàn giao
                                                cho: </b>Nguyễn Văn Hưng</span></div>
                                </li>
                                <li data-id="3047926">
                                    <div class="head-activity text-primary">14/07/2020 11:31:03
                                        - Nguyễn Văn Hưng</div>
                                    <div class="infor-activity"><span class=""><b>Cập nhật Level
                                                khách hàng</b></span></div>
                                </li>
                                <li data-id="3047707">
                                    <div class="head-activity text-primary">14/07/2020 10:19:17
                                        - Đỗ Thị Thanh Nhàn</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-hand-o-right"></i> Bàn giao
                                                cho: </b>Đỗ Thị Thanh Nhàn</span></div>
                                </li>
                            </ul>
                        </td>
                        <td class=""><span data-toggle="tooltip"
                                data-title="14/07/2020 10:19:17" class="text-success">Đỗ Thị
                                Thanh Nhàn</span></td>
                        <td class="colControls"></td>
                    </tr>
                    <tr class="even">
                        <td class=""><a
                                href="https://erp.nhanh.vn/crm/lead/view?id=406392">406392</a>
                        </td>
                        <td class="colControls">
                            <div class="dropdown">
                                <a data-toggle="dropdown"
                                    href="https://erp.nhanh.vn/crm/opportunity/index#"
                                    class="fa fa-plus-circle icon"></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addmeeting?leadId=406392">
                                            <i class="fa fa-users"></i> Thêm cuộc hẹn
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addphonecall?leadId=406392">
                                            <i class="fa fa-phone"></i> Thêm cuộc gọi
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addcalendar?leadId=406392">
                                            <i class="fa fa-calendar"></i> Đặt lịch
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addrequestphonecall?leadId=406392">
                                            <i class="fa fa-phone-square"></i> Yêu cầu gọi
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/requirement/add?leadId=406392">
                                            <i class="fa fa-cog"></i> Thêm yêu cầu
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                        <td class="">
                            <div class="item-block">
                                <div class="item-icon"><i class="fa fa-user"></i></div>
                                <div class="item-infor"><a
                                        href="https://erp.nhanh.vn/crm/lead/view?id=406392">Nguyễn
                                        Thị Hoa</a></div>
                            </div>
                            <div class="line-break"></div>
                        </td>
                        <td class="">
                            <div title="Kinh doanh"><i class="fa fa-flag-o"></i> <span
                                    data-toggle="tooltip" data-title="123Job">Đỗ Thị Thanh
                                    Nhàn</span></div>
                            <div title="Kinh doanh"><i class="fa fa-flag-o"></i> <span
                                    data-toggle="tooltip" data-title="123Job">Nguyễn Văn
                                    Hưng</span></div>
                        </td>
                        <td class=""><a class="btn salesStage-btn369094 btn-warning btn-xs"
                                idref="369094" stage="20"></a></td>
                        <td class="">
                            <ul class="td-history">
                                <li data-id="3047927">
                                    <div class="head-activity text-primary">14/07/2020 11:31:03
                                        - Nguyễn Văn Hưng</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-hand-o-right"></i> Bàn giao
                                                cho: </b>Nguyễn Văn Hưng</span></div>
                                </li>
                                <li data-id="3047926">
                                    <div class="head-activity text-primary">14/07/2020 11:31:03
                                        - Nguyễn Văn Hưng</div>
                                    <div class="infor-activity"><span class=""><b>Cập nhật Level
                                                khách hàng</b></span></div>
                                </li>
                                <li data-id="3047707">
                                    <div class="head-activity text-primary">14/07/2020 10:19:17
                                        - Đỗ Thị Thanh Nhàn</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-hand-o-right"></i> Bàn giao
                                                cho: </b>Đỗ Thị Thanh Nhàn</span></div>
                                </li>
                            </ul>
                        </td>
                        <td class=""><span data-toggle="tooltip"
                                data-title="14/07/2020 10:19:17" class="text-success">Đỗ Thị
                                Thanh Nhàn</span></td>
                        <td class="colControls"></td>
                    </tr>
                    <tr>
                        <td class=""><a
                                href="https://erp.nhanh.vn/crm/lead/view?id=406317">406317</a>
                        </td>
                        <td class="colControls">
                            <div class="dropdown">
                                <a data-toggle="dropdown"
                                    href="https://erp.nhanh.vn/crm/opportunity/index#"
                                    class="fa fa-plus-circle icon"></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addmeeting?leadId=406317">
                                            <i class="fa fa-users"></i> Thêm cuộc hẹn
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addphonecall?leadId=406317">
                                            <i class="fa fa-phone"></i> Thêm cuộc gọi
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addcalendar?leadId=406317">
                                            <i class="fa fa-calendar"></i> Đặt lịch
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addrequestphonecall?leadId=406317">
                                            <i class="fa fa-phone-square"></i> Yêu cầu gọi
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/requirement/add?leadId=406317">
                                            <i class="fa fa-cog"></i> Thêm yêu cầu
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                        <td class="">
                            <div class="item-block">
                                <div class="item-icon"><i class="fa fa-user"></i></div>
                                <div class="item-infor"><a
                                        href="https://erp.nhanh.vn/crm/lead/view?id=406317">Công
                                        ty cổ phần Vnp Group</a></div>
                            </div>
                            <div class="item-block">
                                <div class="item-icon"><i class="fa fa-globe"></i></div>
                                <div class="item-infor">123job.vn</div>
                            </div>
                            <div data-toggle="tooltip" data-title="Nguồn thông tin"
                                class="item-block">
                                <div class="item-icon"><i class="fa fa-hand-o-right"></i></div>
                                <div class="item-infor"><b>Data bàn giao - Fanpage</b></div>
                            </div>
                            <div class="line-break"></div>
                        </td>
                        <td class="">
                            <div title="Kinh doanh"><i class="fa fa-flag-o"></i> <span
                                    data-toggle="tooltip" data-title="123Job">Nguyễn Văn
                                    Hưng</span></div>
                            <div title="chăm sóc khách hàng"><i class="fa fa-headphones"></i>
                                <span data-toggle="tooltip" data-title="123Job">Ứng Đình
                                    Hướng</span></div>
                        </td>
                        <td class=""><a class="btn salesStage-btn369050 btn-warning btn-xs"
                                idref="369050" stage="20"></a></td>
                        <td class="">
                            <ul class="td-history">
                                <li data-id="3047677">
                                    <div class="head-activity text-primary">14/07/2020 10:10:24
                                        - Nguyễn Văn Hưng</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-microphone"></i> Yêu cầu gọi
                                                điện</b></span></div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-clock-o"></i> Thời gian:
                                            </b></span><span><i>10:10</i> - 14/07/2020 <i
                                                class="fa fa-arrow-right"></i> <i>23:59</i> -
                                            14/07/2020</span></div>
                                </li>
                                <li data-id="3047437">
                                    <div class="head-activity text-primary">13/07/2020 22:32:53
                                        - Nguyễn Văn Hưng</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-microphone"></i> Yêu cầu gọi
                                                điện</b></span></div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-clock-o"></i> Thời gian:
                                            </b></span><span><i>22:32</i> - 13/07/2020 <i
                                                class="fa fa-arrow-right"></i> <i>23:59</i> -
                                            14/07/2020</span></div>
                                </li>
                                <li data-id="3047436">
                                    <div class="head-activity text-primary">13/07/2020 22:32:53
                                        - Nguyễn Văn Hưng</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-hand-o-right"></i> Bàn giao
                                                cho: </b>Nguyễn Văn Hưng</span></div>
                                </li>
                            </ul>
                        </td>
                        <td class=""><span data-toggle="tooltip"
                                data-title="13/07/2020 22:32:53" class="text-success">Nguyễn Văn
                                Hưng</span></td>
                        <td class="colControls"><span style="cursor:pointer;" data-id="369050"
                                data-toggle="tooltip" data-title="Cập nhật trạng thái"
                                class="fa fa-refresh text-danger updateSalesStage"></span></td>
                    </tr>
                    <tr class="even">
                        <td class=""><a
                                href="https://erp.nhanh.vn/crm/lead/view?id=406317">406317</a>
                        </td>
                        <td class="colControls">
                            <div class="dropdown">
                                <a data-toggle="dropdown"
                                    href="https://erp.nhanh.vn/crm/opportunity/index#"
                                    class="fa fa-plus-circle icon"></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addmeeting?leadId=406317">
                                            <i class="fa fa-users"></i> Thêm cuộc hẹn
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addphonecall?leadId=406317">
                                            <i class="fa fa-phone"></i> Thêm cuộc gọi
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addcalendar?leadId=406317">
                                            <i class="fa fa-calendar"></i> Đặt lịch
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addrequestphonecall?leadId=406317">
                                            <i class="fa fa-phone-square"></i> Yêu cầu gọi
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/requirement/add?leadId=406317">
                                            <i class="fa fa-cog"></i> Thêm yêu cầu
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                        <td class="">
                            <div class="item-block">
                                <div class="item-icon"><i class="fa fa-user"></i></div>
                                <div class="item-infor"><a
                                        href="https://erp.nhanh.vn/crm/lead/view?id=406317">Công
                                        ty cổ phần Vnp Group</a></div>
                            </div>
                            <div class="item-block">
                                <div class="item-icon"><i class="fa fa-globe"></i></div>
                                <div class="item-infor">123job.vn</div>
                            </div>
                            <div data-toggle="tooltip" data-title="Nguồn thông tin"
                                class="item-block">
                                <div class="item-icon"><i class="fa fa-hand-o-right"></i></div>
                                <div class="item-infor"><b>Data bàn giao - Fanpage</b></div>
                            </div>
                            <div class="line-break"></div>
                        </td>
                        <td class="">
                            <div title="Kinh doanh"><i class="fa fa-flag-o"></i> <span
                                    data-toggle="tooltip" data-title="123Job">Nguyễn Văn
                                    Hưng</span></div>
                            <div title="chăm sóc khách hàng"><i class="fa fa-headphones"></i>
                                <span data-toggle="tooltip" data-title="123Job">Ứng Đình
                                    Hướng</span></div>
                        </td>
                        <td class=""><a class="btn salesStage-btn369050 btn-warning btn-xs"
                                idref="369050" stage="20"></a></td>
                        <td class="">
                            <ul class="td-history">
                                <li data-id="3047677">
                                    <div class="head-activity text-primary">14/07/2020 10:10:24
                                        - Nguyễn Văn Hưng</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-microphone"></i> Yêu cầu gọi
                                                điện</b></span></div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-clock-o"></i> Thời gian:
                                            </b></span><span><i>10:10</i> - 14/07/2020 <i
                                                class="fa fa-arrow-right"></i> <i>23:59</i> -
                                            14/07/2020</span></div>
                                </li>
                                <li data-id="3047437">
                                    <div class="head-activity text-primary">13/07/2020 22:32:53
                                        - Nguyễn Văn Hưng</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-microphone"></i> Yêu cầu gọi
                                                điện</b></span></div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-clock-o"></i> Thời gian:
                                            </b></span><span><i>22:32</i> - 13/07/2020 <i
                                                class="fa fa-arrow-right"></i> <i>23:59</i> -
                                            14/07/2020</span></div>
                                </li>
                                <li data-id="3047436">
                                    <div class="head-activity text-primary">13/07/2020 22:32:53
                                        - Nguyễn Văn Hưng</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-hand-o-right"></i> Bàn giao
                                                cho: </b>Nguyễn Văn Hưng</span></div>
                                </li>
                            </ul>
                        </td>
                        <td class=""><span data-toggle="tooltip"
                                data-title="13/07/2020 22:32:53" class="text-success">Nguyễn Văn
                                Hưng</span></td>
                        <td class="colControls"><span style="cursor:pointer;" data-id="369050"
                                data-toggle="tooltip" data-title="Cập nhật trạng thái"
                                class="fa fa-refresh text-danger updateSalesStage"></span></td>
                    </tr>
                    <tr>
                        <td class=""><a
                                href="https://erp.nhanh.vn/crm/lead/view?id=406317">406317</a>
                        </td>
                        <td class="colControls">
                            <div class="dropdown">
                                <a data-toggle="dropdown"
                                    href="https://erp.nhanh.vn/crm/opportunity/index#"
                                    class="fa fa-plus-circle icon"></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addmeeting?leadId=406317">
                                            <i class="fa fa-users"></i> Thêm cuộc hẹn
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addphonecall?leadId=406317">
                                            <i class="fa fa-phone"></i> Thêm cuộc gọi
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addcalendar?leadId=406317">
                                            <i class="fa fa-calendar"></i> Đặt lịch
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addrequestphonecall?leadId=406317">
                                            <i class="fa fa-phone-square"></i> Yêu cầu gọi
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/requirement/add?leadId=406317">
                                            <i class="fa fa-cog"></i> Thêm yêu cầu
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                        <td class="">
                            <div class="item-block">
                                <div class="item-icon"><i class="fa fa-user"></i></div>
                                <div class="item-infor"><a
                                        href="https://erp.nhanh.vn/crm/lead/view?id=406317">Công
                                        ty cổ phần Vnp Group</a></div>
                            </div>
                            <div class="item-block">
                                <div class="item-icon"><i class="fa fa-globe"></i></div>
                                <div class="item-infor">123job.vn</div>
                            </div>
                            <div data-toggle="tooltip" data-title="Nguồn thông tin"
                                class="item-block">
                                <div class="item-icon"><i class="fa fa-hand-o-right"></i></div>
                                <div class="item-infor"><b>Data bàn giao - Fanpage</b></div>
                            </div>
                            <div class="line-break"></div>
                        </td>
                        <td class="">
                            <div title="Kinh doanh"><i class="fa fa-flag-o"></i> <span
                                    data-toggle="tooltip" data-title="123Job">Nguyễn Văn
                                    Hưng</span></div>
                            <div title="chăm sóc khách hàng"><i class="fa fa-headphones"></i>
                                <span data-toggle="tooltip" data-title="123Job">Ứng Đình
                                    Hướng</span></div>
                        </td>
                        <td class=""><a class="btn salesStage-btn369050 btn-warning btn-xs"
                                idref="369050" stage="20"></a></td>
                        <td class="">
                            <ul class="td-history">
                                <li data-id="3047677">
                                    <div class="head-activity text-primary">14/07/2020 10:10:24
                                        - Nguyễn Văn Hưng</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-microphone"></i> Yêu cầu gọi
                                                điện</b></span></div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-clock-o"></i> Thời gian:
                                            </b></span><span><i>10:10</i> - 14/07/2020 <i
                                                class="fa fa-arrow-right"></i> <i>23:59</i> -
                                            14/07/2020</span></div>
                                </li>
                                <li data-id="3047437">
                                    <div class="head-activity text-primary">13/07/2020 22:32:53
                                        - Nguyễn Văn Hưng</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-microphone"></i> Yêu cầu gọi
                                                điện</b></span></div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-clock-o"></i> Thời gian:
                                            </b></span><span><i>22:32</i> - 13/07/2020 <i
                                                class="fa fa-arrow-right"></i> <i>23:59</i> -
                                            14/07/2020</span></div>
                                </li>
                                <li data-id="3047436">
                                    <div class="head-activity text-primary">13/07/2020 22:32:53
                                        - Nguyễn Văn Hưng</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-hand-o-right"></i> Bàn giao
                                                cho: </b>Nguyễn Văn Hưng</span></div>
                                </li>
                            </ul>
                        </td>
                        <td class=""><span data-toggle="tooltip"
                                data-title="13/07/2020 22:32:53" class="text-success">Nguyễn Văn
                                Hưng</span></td>
                        <td class="colControls"><span style="cursor:pointer;" data-id="369050"
                                data-toggle="tooltip" data-title="Cập nhật trạng thái"
                                class="fa fa-refresh text-danger updateSalesStage"></span></td>
                    </tr>
                    <tr class="even">
                        <td class=""><a
                                href="https://erp.nhanh.vn/crm/lead/view?id=405964">405964</a>
                        </td>
                        <td class="colControls">
                            <div class="dropdown">
                                <a data-toggle="dropdown"
                                    href="https://erp.nhanh.vn/crm/opportunity/index#"
                                    class="fa fa-plus-circle icon"></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addmeeting?leadId=405964">
                                            <i class="fa fa-users"></i> Thêm cuộc hẹn
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addphonecall?leadId=405964">
                                            <i class="fa fa-phone"></i> Thêm cuộc gọi
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addcalendar?leadId=405964">
                                            <i class="fa fa-calendar"></i> Đặt lịch
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addrequestphonecall?leadId=405964">
                                            <i class="fa fa-phone-square"></i> Yêu cầu gọi
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/requirement/add?leadId=405964">
                                            <i class="fa fa-cog"></i> Thêm yêu cầu
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                        <td class="">
                            <div class="item-block">
                                <div class="item-icon"><i class="fa fa-user"></i></div>
                                <div class="item-infor"><a
                                        href="https://erp.nhanh.vn/crm/lead/view?id=405964">Công
                                        ty cổ phần Vnp Group</a></div>
                            </div>
                            <div class="item-block">
                                <div class="item-icon"><i class="fa fa-globe"></i></div>
                                <div class="item-infor">123job.vn</div>
                            </div>
                            <div data-toggle="tooltip" data-title="Nguồn thông tin"
                                class="item-block">
                                <div class="item-icon"><i class="fa fa-hand-o-right"></i></div>
                                <div class="item-infor"><b>Data bàn giao - Fanpage</b></div>
                            </div>
                            <div class="line-break"></div>
                            <div class="item-block">
                                <div class="item-icon"><i class="fa fa-envelope-o"></i></div>
                                <div class="item-infor">hungnv@vatgia.com</div>
                            </div>
                        </td>
                        <td class="">
                            <div title="Kinh doanh"><i class="fa fa-flag-o"></i> <span
                                    data-toggle="tooltip" data-title="123Job">Nguyễn Văn
                                    Hưng</span></div>
                            <div title="chăm sóc khách hàng"><i class="fa fa-headphones"></i>
                                <span data-toggle="tooltip" data-title="123Job">Nguyễn Văn
                                    Hưng</span></div>
                        </td>
                        <td class=""><a class="btn salesStage-btn368388 btn-warning btn-xs"
                                idref="368388" stage="20"></a></td>
                        <td class="">
                            <ul class="td-history">
                                <li data-id="3046554">
                                    <div class="head-activity text-primary">13/07/2020 14:16:09
                                        - Nguyễn Văn Hưng</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-microphone"></i> Yêu cầu gọi
                                                điện</b></span></div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-clock-o"></i> Thời gian:
                                            </b></span><span><i>14:16</i> - 13/07/2020 <i
                                                class="fa fa-arrow-right"></i> <i>23:59</i> -
                                            14/07/2020</span></div>
                                </li>
                                <li data-id="3045043">
                                    <div class="head-activity text-primary">11/07/2020 07:40:38
                                        - Nguyễn Văn Hưng</div>
                                    <div class="infor-activity"><span class=""><b>Khảo sát trước
                                                gặp</b></span></div>
                                </li>
                                <li data-id="3044970">
                                    <div class="head-activity text-primary">10/07/2020 21:50:18
                                        - Nguyễn Văn Hưng</div>
                                    <div class="infor-activity"><span class=""><b>Khảo sát sau
                                                gặp</b></span></div>
                                </li>
                            </ul>
                        </td>
                        <td class=""><span data-toggle="tooltip"
                                data-title="10/07/2020 21:32:31" class="text-success">Nguyễn Văn
                                Hưng</span></td>
                        <td class="colControls"><span style="cursor:pointer;" data-id="368388"
                                data-toggle="tooltip" data-title="Cập nhật trạng thái"
                                class="fa fa-refresh text-danger updateSalesStage"></span></td>
                    </tr>
                    <tr>
                        <td class=""><a
                                href="https://erp.nhanh.vn/crm/lead/view?id=405964">405964</a>
                        </td>
                        <td class="colControls">
                            <div class="dropdown">
                                <a data-toggle="dropdown"
                                    href="https://erp.nhanh.vn/crm/opportunity/index#"
                                    class="fa fa-plus-circle icon"></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addmeeting?leadId=405964">
                                            <i class="fa fa-users"></i> Thêm cuộc hẹn
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addphonecall?leadId=405964">
                                            <i class="fa fa-phone"></i> Thêm cuộc gọi
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addcalendar?leadId=405964">
                                            <i class="fa fa-calendar"></i> Đặt lịch
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addrequestphonecall?leadId=405964">
                                            <i class="fa fa-phone-square"></i> Yêu cầu gọi
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/requirement/add?leadId=405964">
                                            <i class="fa fa-cog"></i> Thêm yêu cầu
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                        <td class="">
                            <div class="item-block">
                                <div class="item-icon"><i class="fa fa-user"></i></div>
                                <div class="item-infor"><a
                                        href="https://erp.nhanh.vn/crm/lead/view?id=405964">Công
                                        ty cổ phần Vnp Group</a></div>
                            </div>
                            <div class="item-block">
                                <div class="item-icon"><i class="fa fa-globe"></i></div>
                                <div class="item-infor">123job.vn</div>
                            </div>
                            <div data-toggle="tooltip" data-title="Nguồn thông tin"
                                class="item-block">
                                <div class="item-icon"><i class="fa fa-hand-o-right"></i></div>
                                <div class="item-infor"><b>Data bàn giao - Fanpage</b></div>
                            </div>
                            <div class="line-break"></div>
                            <div class="item-block">
                                <div class="item-icon"><i class="fa fa-envelope-o"></i></div>
                                <div class="item-infor">hungnv@vatgia.com</div>
                            </div>
                        </td>
                        <td class="">
                            <div title="Kinh doanh"><i class="fa fa-flag-o"></i> <span
                                    data-toggle="tooltip" data-title="123Job">Nguyễn Văn
                                    Hưng</span></div>
                            <div title="chăm sóc khách hàng"><i class="fa fa-headphones"></i>
                                <span data-toggle="tooltip" data-title="123Job">Nguyễn Văn
                                    Hưng</span></div>
                        </td>
                        <td class=""><a class="btn salesStage-btn368388 btn-warning btn-xs"
                                idref="368388" stage="20"></a></td>
                        <td class="">
                            <ul class="td-history">
                                <li data-id="3046554">
                                    <div class="head-activity text-primary">13/07/2020 14:16:09
                                        - Nguyễn Văn Hưng</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-microphone"></i> Yêu cầu gọi
                                                điện</b></span></div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-clock-o"></i> Thời gian:
                                            </b></span><span><i>14:16</i> - 13/07/2020 <i
                                                class="fa fa-arrow-right"></i> <i>23:59</i> -
                                            14/07/2020</span></div>
                                </li>
                                <li data-id="3045043">
                                    <div class="head-activity text-primary">11/07/2020 07:40:38
                                        - Nguyễn Văn Hưng</div>
                                    <div class="infor-activity"><span class=""><b>Khảo sát trước
                                                gặp</b></span></div>
                                </li>
                                <li data-id="3044970">
                                    <div class="head-activity text-primary">10/07/2020 21:50:18
                                        - Nguyễn Văn Hưng</div>
                                    <div class="infor-activity"><span class=""><b>Khảo sát sau
                                                gặp</b></span></div>
                                </li>
                            </ul>
                        </td>
                        <td class=""><span data-toggle="tooltip"
                                data-title="10/07/2020 21:32:31" class="text-success">Nguyễn Văn
                                Hưng</span></td>
                        <td class="colControls"><span style="cursor:pointer;" data-id="368388"
                                data-toggle="tooltip" data-title="Cập nhật trạng thái"
                                class="fa fa-refresh text-danger updateSalesStage"></span></td>
                    </tr>
                    <tr class="even">
                        <td class=""><a
                                href="https://erp.nhanh.vn/crm/lead/view?id=405964">405964</a>
                        </td>
                        <td class="colControls">
                            <div class="dropdown">
                                <a data-toggle="dropdown"
                                    href="https://erp.nhanh.vn/crm/opportunity/index#"
                                    class="fa fa-plus-circle icon"></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addmeeting?leadId=405964">
                                            <i class="fa fa-users"></i> Thêm cuộc hẹn
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addphonecall?leadId=405964">
                                            <i class="fa fa-phone"></i> Thêm cuộc gọi
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addcalendar?leadId=405964">
                                            <i class="fa fa-calendar"></i> Đặt lịch
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addrequestphonecall?leadId=405964">
                                            <i class="fa fa-phone-square"></i> Yêu cầu gọi
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/requirement/add?leadId=405964">
                                            <i class="fa fa-cog"></i> Thêm yêu cầu
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                        <td class="">
                            <div class="item-block">
                                <div class="item-icon"><i class="fa fa-user"></i></div>
                                <div class="item-infor"><a
                                        href="https://erp.nhanh.vn/crm/lead/view?id=405964">Công
                                        ty cổ phần Vnp Group</a></div>
                            </div>
                            <div class="item-block">
                                <div class="item-icon"><i class="fa fa-globe"></i></div>
                                <div class="item-infor">123job.vn</div>
                            </div>
                            <div data-toggle="tooltip" data-title="Nguồn thông tin"
                                class="item-block">
                                <div class="item-icon"><i class="fa fa-hand-o-right"></i></div>
                                <div class="item-infor"><b>Data bàn giao - Fanpage</b></div>
                            </div>
                            <div class="line-break"></div>
                            <div class="item-block">
                                <div class="item-icon"><i class="fa fa-envelope-o"></i></div>
                                <div class="item-infor">hungnv@vatgia.com</div>
                            </div>
                        </td>
                        <td class="">
                            <div title="Kinh doanh"><i class="fa fa-flag-o"></i> <span
                                    data-toggle="tooltip" data-title="123Job">Nguyễn Văn
                                    Hưng</span></div>
                            <div title="chăm sóc khách hàng"><i class="fa fa-headphones"></i>
                                <span data-toggle="tooltip" data-title="123Job">Nguyễn Văn
                                    Hưng</span></div>
                        </td>
                        <td class=""><a class="btn salesStage-btn368388 btn-warning btn-xs"
                                idref="368388" stage="20"></a></td>
                        <td class="">
                            <ul class="td-history">
                                <li data-id="3046554">
                                    <div class="head-activity text-primary">13/07/2020 14:16:09
                                        - Nguyễn Văn Hưng</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-microphone"></i> Yêu cầu gọi
                                                điện</b></span></div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-clock-o"></i> Thời gian:
                                            </b></span><span><i>14:16</i> - 13/07/2020 <i
                                                class="fa fa-arrow-right"></i> <i>23:59</i> -
                                            14/07/2020</span></div>
                                </li>
                                <li data-id="3045043">
                                    <div class="head-activity text-primary">11/07/2020 07:40:38
                                        - Nguyễn Văn Hưng</div>
                                    <div class="infor-activity"><span class=""><b>Khảo sát trước
                                                gặp</b></span></div>
                                </li>
                                <li data-id="3044970">
                                    <div class="head-activity text-primary">10/07/2020 21:50:18
                                        - Nguyễn Văn Hưng</div>
                                    <div class="infor-activity"><span class=""><b>Khảo sát sau
                                                gặp</b></span></div>
                                </li>
                            </ul>
                        </td>
                        <td class=""><span data-toggle="tooltip"
                                data-title="10/07/2020 21:32:31" class="text-success">Nguyễn Văn
                                Hưng</span></td>
                        <td class="colControls"><span style="cursor:pointer;" data-id="368388"
                                data-toggle="tooltip" data-title="Cập nhật trạng thái"
                                class="fa fa-refresh text-danger updateSalesStage"></span></td>
                    </tr>
                    <tr>
                        <td class=""><a
                                href="https://erp.nhanh.vn/crm/lead/view?id=405963">405963</a>
                        </td>
                        <td class="colControls">
                            <div class="dropdown">
                                <a data-toggle="dropdown"
                                    href="https://erp.nhanh.vn/crm/opportunity/index#"
                                    class="fa fa-plus-circle icon"></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addmeeting?leadId=405963">
                                            <i class="fa fa-users"></i> Thêm cuộc hẹn
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addphonecall?leadId=405963">
                                            <i class="fa fa-phone"></i> Thêm cuộc gọi
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addcalendar?leadId=405963">
                                            <i class="fa fa-calendar"></i> Đặt lịch
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/activity/addrequestphonecall?leadId=405963">
                                            <i class="fa fa-phone-square"></i> Yêu cầu gọi
                                        </a>
                                    </li>
                                    <li>
                                        <a class=""
                                            href="https://erp.nhanh.vn/crm/requirement/add?leadId=405963">
                                            <i class="fa fa-cog"></i> Thêm yêu cầu
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                        <td class="">
                            <div class="item-block">
                                <div class="item-icon"><i class="fa fa-user"></i></div>
                                <div class="item-infor"><a
                                        href="https://erp.nhanh.vn/crm/lead/view?id=405963">Công
                                        ty cổ phần Vnp Group</a></div>
                            </div>
                            <div class="item-block">
                                <div class="item-icon"><i class="fa fa-globe"></i></div>
                                <div class="item-infor">123job.vn</div>
                            </div>
                            <div data-toggle="tooltip" data-title="Nguồn thông tin"
                                class="item-block">
                                <div class="item-icon"><i class="fa fa-hand-o-right"></i></div>
                                <div class="item-infor"><b>Seeding/ Inbox/ Spam</b></div>
                            </div>
                            <div class="line-break"></div>
                            <div class="item-block">
                                <div class="item-icon"><i class="fa fa-envelope-o"></i></div>
                                <div class="item-infor">hungitc.hubt@gmail.com</div>
                            </div>
                        </td>
                        <td class="">
                            <div title="Kinh doanh"><i class="fa fa-flag-o"></i> <span
                                    data-toggle="tooltip" data-title="123Job">Nguyễn Văn
                                    Hưng</span></div>
                        </td>
                        <td class=""><a class="btn salesStage-btn368387 btn-warning btn-xs"
                                idref="368387" stage="20"></a></td>
                        <td class="">
                            <ul class="td-history">
                                <li data-id="3046522">
                                    <div class="head-activity text-primary">13/07/2020 14:10:49
                                        - Nguyễn Văn Hưng</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-calendar"></i> Đặt lịch:
                                            </b></span><span>Tư vấn dịch vụ</span></div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-clock-o"></i> Thời gian:
                                            </b></span><span><i>16:00</i> - 07/07/2020 <i
                                                class="fa fa-arrow-right"></i> <i>17:00</i> -
                                            07/07/2020</span></div>
                                </li>
                                <li data-id="3044958">
                                    <div class="head-activity text-primary">10/07/2020 21:16:23
                                        - Nguyễn Văn Hưng</div>
                                    <div class="infor-activity"><span class=""><b><i
                                                    class="fa fa-hand-o-right"></i> Bàn giao
                                                cho: </b>Nguyễn Văn Hưng</span></div>
                                </li>
                            </ul>
                        </td>
                        <td class=""><span data-toggle="tooltip"
                                data-title="10/07/2020 21:16:23" class="text-success">Nguyễn Văn
                                Hưng</span></td>
                        <td class="colControls"><span style="cursor:pointer;" data-id="368387"
                                data-toggle="tooltip" data-title="Cập nhật trạng thái"
                                class="fa fa-refresh text-danger updateSalesStage"></span></td>
                    </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div class="col-md-6 paginatorItem">
                    <div class="paginator"><span class="labelPages">1 - 15 / 15</span></div>
                </div>
            </div>
        </div>
    </div>
    <div id="changeStageDialog" style="display: none;" title="Thay đổi trạng thái">
        <div class="form-group">
            <label class="col-md-4 control-label">Cơ hội: </label>
            <div class="col-md-8 opportunityId">
            </div>
            <div style="clear: both;"></div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label">Giai đoạn: </label>
            <div class="col-md-8 ">
                <select class="form-control saleStage">
                    <option value="">- Giai đoạn -</option>
                    <option value="1">1 - Khảo sát</option>
                    <option value="2">2 - Đánh giá chất lượng cơ hội</option>
                    <option value="3">3 - Phân tích nhu cầu của khách hàng</option>
                    <option value="4">4 - Dự kiến giá trị sản phẩm</option>
                    <option value="5">5 - Xác định quy trình ra quyết định</option>
                    <option value="6">6 - Phân tích cảm nhận về sản phẩm của khách hàng</option>
                    <option value="7">7 - Định giá</option>
                    <option value="8">8 - Review</option>
                </select>
            </div>
            <div style="clear: both;"></div>
        </div>

        <div class="form-group">
            <i class="stageDescription"></i>
        </div>
    </div>
    <div id="errorDialog" style="display: none;" title="Lỗi"></div>
    <div class="modal fade" id="updateOpportunityModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Cập nhật trạng thái thông tin</h4>
                </div>
                <div class="modal-body">
                    <div>
                        <div class="col-md-3"><label>Trạng thái: </label></div>
                        <div class="col-md-9">
                            <select id="opportunity_SalesStage"
                                class="opportunity_SalesStage form-control">
                                <option value="11">Có lịch hẹn</option>
                                <option value="16">Đang suy nghĩ</option>
                                <option value="14">Cần xử lý</option>
                                <option value="15">LEAD</option>
                                <option value="10">Từ chối</option>
                                <option value="9">Thành công</option>
                            </select>
                        </div>
                        <div style="clear: both;"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info save-update-opportunity"
                        data-saving-text="saving...">Cập nhật</button>
                    <button type="button" class="btn btn-default"
                        data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>

    <div id="alertModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"
                        aria-hidden="true">×</button>
                    <h4 class="modal-title">Thông báo</h4>
                </div>
                <div class="modal-body"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default reload"
                        data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        var stageDescriptions = JSON.parse(
            '{"1":"B\u01b0\u1edbc \u0111\u1ea7u ti\u00ean, x\u00e1c \u0111\u1ecbnh r\u1eb1ng th\u00f4ng tin li\u00ean h\u1ec7 n\u00e0y l\u00e0 1 c\u01a1 h\u1ed9i m\u1edbi cho c\u00f4ng ty","2":"B\u01b0\u1edbc \u0111\u00e1nh gi\u00e1 kh\u00e1ch h\u00e0ng c\u00f3 th\u1eadt s\u1ef1 quan t\u00e2m \u0111\u1ebfn s\u1ea3n ph\u1ea9m\/d\u1ecbch v\u1ee5 c\u1ee7a c\u00f4ng ty hay kh\u00f4ng. C\u01a1 h\u1ed9i n\u00e0y c\u00f3 th\u1eadt s\u1ef1 t\u1ed3n t\u1ea1i hay kh\u00f4ng","3":"Ph\u00e2n t\u00edch c\u00e1c nhu c\u1ea7u v\u00e0 v\u1ea5n \u0111\u1ec1 kh\u00e1ch h\u00e0ng \u0111ang g\u1eb7p ph\u1ea3i","4":"Mapping c\u00e1c y\u00eau c\u1ea7u, v\u1ea5n \u0111\u1ec1 c\u1ee7a kh\u00e1ch h\u00e0ng v\u1edbi nh\u1eefng s\u1ea3n ph\u1ea9m, d\u1ecbch v\u1ee5 m\u00e0 c\u00f4ng ty c\u00f3 th\u1ec3 cung c\u1ea5p, c\u0169ng nh\u01b0 nh\u1eefng gi\u00e1 tr\u1ecb, l\u1ee3i \u00edch kh\u00e1ch h\u00e0ng c\u00f3 th\u1ec3 \u0111\u1ea1t \u0111\u01b0\u1ee3c khi s\u1eed d\u1ee5ng s\u1ea3n ph\u1ea9m\/d\u1ecbch v\u1ee5 c\u1ee7a c\u00f4ng ty","5":"T\u00ecm hi\u1ec3u, x\u00e1c \u0111\u1ecbnh r\u1eb1ng vi\u1ec7c kh\u00e1ch h\u00e0ng mu\u1ed1n s\u1eed d\u1ee5ng d\u1ecbch v\u1ee5 c\u1ee7a ch\u00fang ta c\u1ea7n th\u00f4ng qua ai, ph\u00f2ng ban n\u00e0o, quy tr\u00ecnh n\u00e0o. T\u1eeb \u0111\u00f3 x\u00e1c \u0111\u1ecbnh ng\u01b0\u1eddi m\u00e0 ta c\u1ea7n l\u00e0m vi\u1ec7c l\u00e0 ai v\u00e0 theo quy tr\u00ecnh nh\u01b0 th\u1ebf n\u00e0o","6":"Ph\u00e2n t\u00edch, \u0111\u00e1nh gi\u00e1 c\u1ea3m nh\u1eadn c\u1ee7a kh\u00e1ch h\u00e0ng v\u1ec1 l\u1ee3i \u00edch khi s\u1eed d\u1ee5ng s\u1ea3n ph\u1ea9m d\u1ecbch v\u1ee5 c\u1ee7a ta. T\u1eeb \u0111\u00e2y ta c\u00f3 th\u1ec3 \u0111\u01b0a ra 1 b\u1ea3ng gi\u00e1 m\u00e0 kh\u00e1ch h\u00e0ng c\u1ea3m th\u1ea5y r\u1eb1ng h\u1ee3p l\u00ed","7":"T\u1ed5ng h\u1ee3p l\u1ea1i c\u00e1c th\u00f4ng tin \u0111\u1ec3 \u0111\u01b0a ra 1 b\u1ea3ng gi\u00e1 ph\u00f9 h\u1ee3p v\u1edbi kh\u00e1ch h\u00e0ng","8":"C\u00f9ng kh\u00e1ch h\u00e0ng review l\u1ea1i v\u1ec1 g\u00f3i s\u1ea3n ph\u1ea9m\/d\u1ecbch v\u1ee5 c\u0169ng nh\u01b0 b\u1ea3ng gi\u00e1 m\u00e0 ch\u00fang ta s\u1ebd cung c\u1ea5p","9":"X\u00e1c nh\u1eadn r\u1eb1ng c\u01a1 h\u1ed9i n\u00e0y \u0111\u00e3 th\u00e0nh c\u00f4ng","10":"X\u00e1c nh\u1eadn r\u1eb1ng c\u01a1 h\u1ed9i n\u00e0y \u0111\u00e3 th\u1ea5t b\u1ea1i"}'
            );
        var lbAccept = 'Đồng ý';
        var lbCancel = 'Hủy';
        var lbClose = 'Đóng';
    </script>
    <style>
        .dropdown-menu>li>a {
            text-align: left;
        }

        .item-block {
            width: 216px;
            padding: 0;
            border: none;
        }

        .item-icon {
            width: 16px;
            display: inline-block;
            vertical-align: top;
        }

        .item-infor {
            width: 200px;
            display: inline-block;
        }

        .line-break {
            width: 100%;
            border-bottom: 1px dashed gray;
            margin: auto;
            margin-top: 3px;
            margin-bottom: 3px;
        }

        .td-history {
            margin: 0;
            padding: 0;
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

        .colControls .dropdown-menu {
            top: 0;
            left: 23px;
        }

        .form-inline .main-text-search {
            width: 30%;
        }

        .form-inline .main-text-search input[type="text"] {
            max-width: none;
            width: 100%;
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
    <script type="text/javascript" src="{{ asset('asset/js/crm/opportunity/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/opportunity/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/opportunity/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/opportunity/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/opportunity/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/opportunity/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/opportunity/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/opportunity/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/opportunity/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/opportunity/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/opportunity/addcalendar.js') }}"></script>
@endsection