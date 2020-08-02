@extends('Layout.master')

@section('title','Danh sách thông tin')

@section('css')
	<link rel="stylesheet" href="{{ asset('asset/css/crm/customer/style.css') }}" type="text/css">
@endsection

@section('content-page')
    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/crm/lead/index">Danh sách thông tin</a></li>
        </ul>
        <div id="page-crm-contact">
            <div class="filterContainer">
                <form method="GET" name="crmContactFilter" class="form-inline lolify" role="form"
                    id="crmContactFilter">
                    <div class="col-md-10 lolify-default">

                        <input type="hidden" name="companyId" id="companyId" class="form-control"
                            value="391"> <input type="hidden" name="assignedToId" id="assignedToId"
                            class="form-control" value=""> <input type="hidden"
                            name="isSourceCompany" id="isSourceCompany" class="form-control"
                            value="">
                        <div class="form-group">
                            <input type="text" name="q" maxlength="255"
                                placeholder="Từ khóa (tên, website, số điện thoại, email, mã số thuế, CMND)"
                                style="width:430px" id="q" class="form-control" value=""> </div>
                        <input type="hidden" name="createdById" id="createdById"
                            class="form-control" value=""> <input type="hidden" name="userId"
                            id="userId" class="form-control" value="">
                        <div class="form-group">
                            <input name="submit" type="submit" id="btnFilterCrmContact"
                                class="form-control btn btn-primary" value="Lọc"> </div>

                    </div>
                    <div class="col-md-2 lolify-control">


                        <button class="btn  pull-right lolify-showextend" type="button"
                            data-toggle="tooltip" data-placement="top" title="bộ lọc nâng cao">
                            <span class="fa fa-th"></span>
                        </button>
                    </div>
                    <div class="col-md-12 lolify-extend" style="display: none;">
                        <div class="form-group">
                            <select name="crm_type" id="crm_type" class="form-control">
                                <option value="">- Loại -</option>
                                <option value="lead">Thông tin</option>
                                <option value="opportunity">Cơ hội</option>
                                <option value="account">Khách hàng</option>
                                <option value="contact">Liên hệ</option>
                            </select> </div>
                        <div class="form-group">
                            <input type="text" name="id" maxlength="15" placeholder="ID Thông tin"
                                id="id" class="form-control" value=""> </div>
                        <div class="form-group">
                            <input type="text" name="accountId" maxlength="15"
                                placeholder="ID khách hàng" id="accountId" class="form-control"
                                value=""> </div>
                        <div class="form-group">
                            <input type="text" name="address" maxlength="255" placeholder="Địa chỉ"
                                id="address" class="form-control" value=""> </div>
                        <div class="form-group">
                            <select name="cityId" id="cityId" class="form-control">
                                <option value="">- Thành phố -</option>
                                <option value="2">Hà Nội</option>
                                <option value="3">Hồ Chí Minh</option>
                                <option value="4">An Giang</option>
                                <option value="5">Bà Rịa - Vũng Tàu</option>
                                <option value="6">Bắc Ninh</option>
                                <option value="7">Bắc Giang</option>
                                <option value="8">Bình Dương</option>
                                <option value="9">Bình Định</option>
                                <option value="10">Bình Phước</option>
                                <option value="11">Bình Thuận</option>
                                <option value="13">Bến Tre</option>
                                <option value="14">Bắc Cạn</option>
                                <option value="15">Cần Thơ</option>
                                <option value="17">Khánh Hòa</option>
                                <option value="19">Thừa Thiên Huế</option>
                                <option value="20">Lào Cai</option>
                                <option value="21">Quảng Ninh</option>
                                <option value="22">Đồng Nai</option>
                                <option value="23">Nam Định</option>
                                <option value="24">Cà Mau</option>
                                <option value="25">Cao Bằng</option>
                                <option value="26">Gia Lai</option>
                                <option value="27">Hà Giang</option>
                                <option value="28">Hà Nam</option>
                                <option value="30">Hà Tĩnh</option>
                                <option value="31">Hải Dương</option>
                                <option value="32">Hải Phòng</option>
                                <option value="33">Hoà Bình</option>
                                <option value="34">Hưng Yên</option>
                                <option value="35">Kiên Giang</option>
                                <option value="36">Kon Tum</option>
                                <option value="37">Lai Châu</option>
                                <option value="38">Lâm Đồng</option>
                                <option value="39">Lạng Sơn</option>
                                <option value="40">Long An</option>
                                <option value="41">Nghệ An</option>
                                <option value="42">Ninh Bình</option>
                                <option value="43">Ninh Thuận</option>
                                <option value="44">Phú Thọ</option>
                                <option value="45">Phú Yên</option>
                                <option value="46">Quảng Bình</option>
                                <option value="47">Quảng Nam</option>
                                <option value="48">Quảng Ngãi</option>
                                <option value="49">Quảng Trị</option>
                                <option value="50">Sóc Trăng</option>
                                <option value="51">Sơn La</option>
                                <option value="52">Tây Ninh</option>
                                <option value="53">Thái Bình</option>
                                <option value="54">Thái Nguyên</option>
                                <option value="55">Thanh Hoá</option>
                                <option value="56">Tiền Giang</option>
                                <option value="57">Trà Vinh</option>
                                <option value="58">Tuyên Quang</option>
                                <option value="59">Vĩnh Long</option>
                                <option value="60">Vĩnh Phúc</option>
                                <option value="61">Yên Bái</option>
                                <option value="62">Đắc Lắc</option>
                                <option value="64">Đồng Tháp</option>
                                <option value="65">Đà Nẵng</option>
                                <option value="66">Buôn Mê Thuột</option>
                                <option value="67">Đắc Nông</option>
                                <option value="68">Hậu Giang</option>
                                <option value="70">Bạc Liêu</option>
                                <option value="71">Điện Biên</option>
                            </select> </div>
                        <div class="form-group">
                            <input type="text" name="assignToName" maxlength="255"
                                placeholder="Người phụ trách" id="assignToName"
                                class="form-control ui-autocomplete-input" value=""
                                autocomplete="off"> </div>
                        <div class="form-group">
                            <input type="text" name="mobile" maxlength="11" placeholder="Mobile"
                                id="mobile" class="form-control" value=""> </div>
                        <div class="form-group">
                            <input type="text" name="email" maxlength="255" placeholder="Email"
                                id="email" class="form-control" value=""> </div>
                        <div class="form-group">
                            <select name="source" id="source" class="form-control">
                                <option value="">- Nguồn -</option>
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
                            </select> </div>
                        <div class="form-group">
                            <input type="text" name="sourceReference" maxlength="255"
                                placeholder="Chi tiết nguồn" id="sourceReference"
                                class="form-control" value=""> </div>
                        <div class="form-group">
                            <input type="text" name="rangeCreatedDate" placeholder="Ngày tạo"
                                class="form-control date-range-picker" id="rangeCreatedDate"
                                value=""> </div>
                        <div class="form-group">
                            <input type="text" name="rangeLastActivityDate"
                                placeholder="Ngày chăm sóc cuối cùng"
                                class="form-control date-range-picker" id="rangeLastActivityDate"
                                value=""> </div>
                        <div class="form-group">
                            <input type="text" name="notCareRangeActivityDate"
                                placeholder="Ngày không chăm sóc"
                                class="form-control date-range-picker" id="notCareRangeActivityDate"
                                value=""> </div>
                        <div class="form-group">
                            <input type="text" name="createdByName" maxlength="255"
                                placeholder="Người tạo" id="createdByName"
                                class="form-control ui-autocomplete-input" value=""
                                autocomplete="off"> </div>
                        <div class="form-group">
                            <select name="campaignId" id="campaignId" class="form-control">
                                <option value="">- Chiến dịch -</option>
                            </select> </div>
                        <div class="form-group">
                            <select name="emailStatus" id="emailStatus" class="form-control">
                                <option value="">- Trạng thái Email-</option>
                                <option value="-1">Chưa có email</option>
                                <option value="1">Đã có email</option>
                            </select> </div>
                        <div class="form-group">
                            <select name="saleStage" id="saleStage" class="form-control">
                                <option value="">- Level Khách hàng -</option>
                                <option value="20" selected="selected">L0 - Cần xử lý</option>
                                <option value="22">L1B - Thông tin sai</option>
                                <option value="23">L2A - Có nhu cầu</option>
                                <option value="24">L2B1 - Không có nhu cầu</option>
                                <option value="34">L2B2 - Đã dùng PM khác</option>
                                <option value="25">L3A - Đã hẹn</option>
                                <option value="26">L4A - Đã gặp</option>
                                <option value="27">L5A1 - Dùng thử</option>
                                <option value="28">L5A2 - Có yêu cầu</option>
                                <option value="29">L6A - Đã ký hợp đồng</option>
                                <option value="30">L6B1 - Từ chối, giá đắt</option>
                                <option value="35">L6B2 - PM không phù hợp</option>
                                <option value="36">L6B3 - Không phản hồi</option>
                                <option value="31">L7A - Đã triển khai</option>
                                <option value="32">L8A - Đã bán chéo</option>
                                <option value="33">L9A - Đã tái ký</option>
                                <option value="37">L9B1 - Ngừng kinh doanh</option>
                                <option value="38">L9B2 - Dùng PM khác</option>
                            </select> </div>

                    </div>
                </form>
                <div class="clearfix"></div>
                <div class="lolify-left-menu" style="display: none;">
                </div>
            </div>
            <div class="page-overview" style="margin: 20px 0px;">
                <ul class="nav nav-tabs">
                    <li class=" ">
                        <a href="{{ route('customerIndex') }}">
                            <i class="fa fa-list"></i> Tất cả
                        </a>
                    </li>
                    <li class="active"><a
                            href="{{ route('customerIndexL0') }}">L0 - Cần xử
                            lý<span style="margin:0 2px;" class="badge stage20"
                                data-toggle="tooltip" data-title="Số lượng khách">3</span></a></li>
                    <li class=""><a href="{{ route('customerIndexL2A') }}">L2A
                            - Có nhu cầu<span style="margin:0 2px;" class="badge stage23"
                                data-toggle="tooltip" data-title="Số lượng khách"></span></a></li>
                    <li class=""><a href="{{ route('customerIndexL3') }}">L3 -
                            Đã hẹn<span style="margin:0 2px;" class="badge stage25"
                                data-toggle="tooltip" data-title="Số lượng khách"></span></a></li>
                    <li class=""><a href="{{ route('customerIndexL4') }}">L4 -
                            Đã gặp<span style="margin:0 2px;" class="badge stage26"
                                data-toggle="tooltip" data-title="Số lượng khách"></span></a></li>
                    <li class=""><a href="{{ route('customerIndexL5A1') }}">L5A1
                            - Dùng thử<span style="margin:0 2px;" class="badge stage27"
                                data-toggle="tooltip" data-title="Số lượng khách"></span></a></li>
                    <li class=""><a href="{{ route('customerIndexL5A2') }}">L5A2
                            - Có yêu cầu<span style="margin:0 2px;" class="badge stage28"
                                data-toggle="tooltip" data-title="Số lượng khách"></span></a></li>
                    <li class=""><a href="{{ route('customerIndexL6A') }}">L6A
                            - Ký hợp đồng<span style="margin:0 2px;" class="badge stage29"
                                data-toggle="tooltip" data-title="Số lượng khách">1</span></a></li>
                    <li class=""><a href="{{ route('customerIndexL7A') }}">L7A
                            - Đã triển khai<span style="margin:0 2px;" class="badge stage31"
                                data-toggle="tooltip" data-title="Số lượng khách"></span></a></li>
                </ul>
            </div>



            <div class="btn-group lolify-features" data-toggle="tooltip" data-placement="top"
                title="Xuất excel">
                <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                    aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
                    <span class="fa fa-book" style="margin-right:5px"></span>Xuất Excel <span
                        class="caret"></span>
                </button>
                <ul class="dropdown-menu"></ul>
            </div>
            <div class="btn-group lolify-features" data-toggle="tooltip" data-placement="top"
                title="Hành động" style="margin-left: 5px">
                <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                    aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
                    <span class="fa fa-cogs" style="margin-right:5px"></span>Hành động <span
                        class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="javascript:;" id="updateLevelCustomerBtn"><i
                                class="fa fa-refresh"></i> Cập nhật level khách hàng</a></li>
                </ul>
            </div><a style="margin-left:5px;float:right;"
                href="https://erp.nhanh.vn/crm/customer/companysource"><i
                    class="fa fa-hand-o-right"></i> Xem thông tin nguồn công ty cung cấp</a>
            <div class="dgContainer">
                <div style="display: none; width: 1556px;" class="stickyHeader">
                    <table class="table table-bordered" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr class="even">
                                <th class="colCheckbox" style="width: 37px;"><input type="checkbox"
                                        class="cb" id=""></th>
                                <th style="width: 82px;">ID</th>
                                <th style="width: 73px;">Tác vụ</th>
                                <th style="width: 338px;">Thông tin</th>
                                <th style="width: 207px;">Người phụ trách</th>
                                <th style="width: 818px;">Thông tin thêm</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-6 dgButtons"></div>
                    <div class="col-md-6 paginatorItem">
                        <div class="paginator"><span class="labelPages">1 - 3 / 3</span></div>
                    </div>
                    <div style="clear: both;"></div><br>
                </div>
                <table id="dgCrmLead" class="table table-bordered">
                    <thead>
                        <tr class="even">
                            <th class="colCheckbox"><input type="checkbox" class="cb"
                                    id="cbCheckAll"></th>
                            <th>ID</th>
                            <th>Tác vụ</th>
                            <th>Thông tin</th>
                            <th>Người phụ trách</th>
                            <th>Thông tin thêm</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="colCheckbox"><input data-id="406317" class="cb leadCb"
                                    type="checkbox"></td>
                            <td class="colControls"><a data-toggle="tooltip"
                                    data-original-title="Ngày tạo:2020-07-13 22:32:53"
                                    href="https://erp.nhanh.vn/crm/lead/view?id=406317">406317</a>
                            </td>
                            <td class="colControls">
                                <div class="dropdown">
                                    <a data-toggle="dropdown"
                                        href="https://erp.nhanh.vn/crm/customer/index?saleStage=20#"
                                        class="fa fa-plus-circle icon"></a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addmeeting?leadId=406317">
                                                <i class="fa fa-users"></i> Thêm cuộc gặp
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
                                                href="https://erp.nhanh.vn/crm/contract/add?leadId=406317">
                                                <i class="fa fa-book"></i> Tạo hợp đồng
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/requirement/add?leadId=406317">
                                                <i class="fa fa-cog"></i> Thêm yêu cầu
                                            </a>
                                        </li>
                                        <li>
                                            <a class="editDescription" data-leadid="406317"
                                                data-description="" href="javascript:;">
                                                <i class="fa fa-edit"></i> Sửa ghi chú
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div><a class="fa fa-users assignLead"
                                        title="Quản lí người phụ trách" data-id="406317"></a></div>
                                <div><a class="fa  fa-thumb-tack discard" title="Hủy chăm sóc"
                                        data-id="406317"></a></div><span data-id="406317"
                                    data-toggle="tooltip" data-title="Cập nhật Level khách hàng"
                                    style="cursor:pointer"
                                    class="updateOpportunityStatus icon fa fa-refresh text-success"></span>
                            </td>
                            <td>
                                <div class="item-block"><a
                                        href="https://erp.nhanh.vn/crm/customer/index?saleStage=20#"
                                        class="label btn-default crm-type">Thông tin</a></div>
                                <div class="line-break"></div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-building-o"></i></div>
                                    <div class="item-infor">Công ty</div>
                                </div>
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
                                <div data-toggle="tooltip" data-title="Cấp độ khách hàng"
                                    class="opportunityStatus406317">
                                    <div class="item-block">
                                        <div class="item-icon"><i
                                                class="fa fa-level-up text-info"></i></div>
                                        <div class="item-infor"><span class="text text-info">L0 -
                                                Cần xử lý <i style="cursor:pointer;"
                                                    data-status="20" data-leadid="406317"
                                                    class="fa fa-times text-danger removeOpportunityStatus"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-block">
                                    <b>Nguồn: </b>Data bàn giao - Fanpage</div>
                                <div class="item-block">
                                    <b>Tham chiếu: </b>Khach comment tren he thong</div>
                            </td>
                            <td class="col-assignedTo">
                                <div data-toggle="tooltip" title="123job.vn | 123Job"><i
                                        class="fa fa-flag-o"></i> Nguyễn Văn Hưng</div>
                                <div data-toggle="tooltip" title="123job.vn | 123Job"><i
                                        class="fa fa-headphones"></i> Ứng Đình Hướng</div>
                                <div title="Người tạo">
                                    <i class="fa fa-github-alt" data-toggle="tooltip"
                                        data-original-title="Ngày tạo: 2020-07-13 22:32:53 "></i>
                                    Nguyễn Văn Hưng</div>
                            </td>
                            <td>
                                <ul class="td-history">
                                    <li class="last"><a class="text-info"
                                            href="https://erp.nhanh.vn/crm/activity/history?leadId=406317">Xem
                                            chi tiết 3 hành động</a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="colCheckbox"><input data-id="405964" class="cb leadCb"
                                    type="checkbox"></td>
                            <td class="colControls"><a data-toggle="tooltip"
                                    data-original-title="Ngày tạo:2020-07-10 21:32:31"
                                    href="https://erp.nhanh.vn/crm/lead/view?id=405964">405964</a>
                            </td>
                            <td class="colControls">
                                <div class="dropdown">
                                    <a data-toggle="dropdown"
                                        href="https://erp.nhanh.vn/crm/customer/index?saleStage=20#"
                                        class="fa fa-plus-circle icon"></a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addmeeting?leadId=405964">
                                                <i class="fa fa-users"></i> Thêm cuộc gặp
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
                                                href="https://erp.nhanh.vn/crm/contract/add?leadId=405964">
                                                <i class="fa fa-book"></i> Tạo hợp đồng
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/requirement/add?leadId=405964">
                                                <i class="fa fa-cog"></i> Thêm yêu cầu
                                            </a>
                                        </li>
                                        <li>
                                            <a class="editDescription" data-leadid="405964"
                                                data-description="" href="javascript:;">
                                                <i class="fa fa-edit"></i> Sửa ghi chú
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div><a class="fa fa-users assignLead"
                                        title="Quản lí người phụ trách" data-id="405964"></a></div>
                                <div><a class="fa  fa-thumb-tack discard" title="Hủy chăm sóc"
                                        data-id="405964"></a></div><span data-id="405964"
                                    data-toggle="tooltip" data-title="Cập nhật Level khách hàng"
                                    style="cursor:pointer"
                                    class="updateOpportunityStatus icon fa fa-refresh text-success"></span>
                            </td>
                            <td>
                                <div class="item-block"><a
                                        href="https://erp.nhanh.vn/crm/customer/index?saleStage=20#"
                                        class="label btn-default crm-type">Thông tin</a></div>
                                <div class="line-break"></div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-building-o"></i></div>
                                    <div class="item-infor">Công ty</div>
                                </div>
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
                                <div data-toggle="tooltip" data-title="Cấp độ khách hàng"
                                    class="opportunityStatus405964">
                                    <div class="item-block">
                                        <div class="item-icon"><i
                                                class="fa fa-level-up text-info"></i></div>
                                        <div class="item-infor"><span class="text text-info">L0 -
                                                Cần xử lý <i style="cursor:pointer;"
                                                    data-status="20" data-leadid="405964"
                                                    class="fa fa-times text-danger removeOpportunityStatus"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-block">
                                    <b>Nguồn: </b>Data bàn giao - Fanpage</div>
                                <div class="item-block">
                                    <b>Tham chiếu: </b>Inbox fanpage</div>
                            </td>
                            <td class="col-assignedTo">
                                <div data-toggle="tooltip" title="123job.vn | 123Job"><i
                                        class="fa fa-flag-o"></i> Nguyễn Văn Hưng</div>
                                <div data-toggle="tooltip" title="123job.vn | 123Job"><i
                                        class="fa fa-headphones"></i> Nguyễn Văn Hưng</div>
                                <div title="Người tạo">
                                    <i class="fa fa-github-alt" data-toggle="tooltip"
                                        data-original-title="Ngày tạo: 2020-07-10 21:32:31 "></i>
                                    Nguyễn Văn Hưng</div>
                            </td>
                            <td>
                                <ul class="td-history">
                                    <li class="last"><a class="text-info"
                                            href="https://erp.nhanh.vn/crm/activity/history?leadId=405964">Xem
                                            chi tiết 5 hành động</a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="colCheckbox"><input data-id="405963" class="cb leadCb"
                                    type="checkbox"></td>
                            <td class="colControls"><a data-toggle="tooltip"
                                    data-original-title="Ngày tạo:2020-07-10 21:16:23"
                                    href="https://erp.nhanh.vn/crm/lead/view?id=405963">405963</a>
                            </td>
                            <td class="colControls">
                                <div class="dropdown">
                                    <a data-toggle="dropdown"
                                        href="https://erp.nhanh.vn/crm/customer/index?saleStage=20#"
                                        class="fa fa-plus-circle icon"></a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addmeeting?leadId=405963">
                                                <i class="fa fa-users"></i> Thêm cuộc gặp
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
                                                href="https://erp.nhanh.vn/crm/contract/add?leadId=405963">
                                                <i class="fa fa-book"></i> Tạo hợp đồng
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/requirement/add?leadId=405963">
                                                <i class="fa fa-cog"></i> Thêm yêu cầu
                                            </a>
                                        </li>
                                        <li>
                                            <a class="editDescription" data-leadid="405963"
                                                data-description="" href="javascript:;">
                                                <i class="fa fa-edit"></i> Sửa ghi chú
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div><a class="fa fa-users assignLead"
                                        title="Quản lí người phụ trách" data-id="405963"></a></div>
                                <div><a class="fa  fa-thumb-tack discard" title="Hủy chăm sóc"
                                        data-id="405963"></a></div><span data-id="405963"
                                    data-toggle="tooltip" data-title="Cập nhật Level khách hàng"
                                    style="cursor:pointer"
                                    class="updateOpportunityStatus icon fa fa-refresh text-success"></span>
                            </td>
                            <td>
                                <div class="item-block"><a
                                        href="https://erp.nhanh.vn/crm/customer/index?saleStage=20#"
                                        class="label btn-default crm-type">Thông tin</a></div>
                                <div class="line-break"></div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-building-o"></i></div>
                                    <div class="item-infor">Công ty</div>
                                </div>
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
                                <div data-toggle="tooltip" data-title="Cấp độ khách hàng"
                                    class="opportunityStatus405963">
                                    <div class="item-block">
                                        <div class="item-icon"><i
                                                class="fa fa-level-up text-info"></i></div>
                                        <div class="item-infor"><span class="text text-info">L0 -
                                                Cần xử lý <i style="cursor:pointer;"
                                                    data-status="20" data-leadid="405963"
                                                    class="fa fa-times text-danger removeOpportunityStatus"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-block">
                                    <b>Nguồn: </b>Seeding/ Inbox/ Spam</div>
                                <div class="item-block">
                                    <b>Tham chiếu: </b>Inbox fanpage</div>
                            </td>
                            <td class="col-assignedTo">
                                <div data-toggle="tooltip" title="123job.vn | 123Job"><i
                                        class="fa fa-flag-o"></i> Nguyễn Văn Hưng</div>
                                <div title="Người tạo">
                                    <i class="fa fa-github-alt" data-toggle="tooltip"
                                        data-original-title="Ngày tạo: 2020-07-10 21:16:23 "></i>
                                    Nguyễn Văn Hưng</div>
                            </td>
                            <td>
                                <ul class="td-history">
                                    <li class="last"><a class="text-info"
                                            href="https://erp.nhanh.vn/crm/activity/history?leadId=405963">Xem
                                            chi tiết 2 hành động</a></li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-md-6 dgButtons"></div>
                    <div class="col-md-6 paginatorItem">
                        <div class="paginator"><span class="labelPages">1 - 3 / 3</span></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="errorModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Lỗi</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger alert-dismissable">

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Xác nhận</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-warning alert-dismissable">

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning save"
                            data-saving-text="Saving...">Có</button>
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Không</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="confirmFreeModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Xác nhận giải phóng</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-warning alert-dismissable">
                            Bạn muốn thả nổi các thông tin này ?
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning save"
                            data-saving-text="Saving...">Có</button>
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Không</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="selfAssignModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Nhận chăm sóc</h4>
                    </div>
                    <div class="modal-body">
                        <div>
                            <div class="col-md-2"><label>Vị trí: </label></div>
                            <div class="col-md-9">
                                <select class="lead_user_type form-control">
                                    <option value="1">Nhân viên kinh doanh</option>
                                    <option value="2">Nhân viên chăm sóc</option>
                                    <option value="3">Nhân viên hỗ trợ</option>
                                </select>
                            </div>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary save"
                            data-saving-text="saving...">Lưu</button>
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="updateOpportunityModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Cập nhật Level khách hàng</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-horizontal">
                            <div class="col-md-12">
                                <div class="levelCustomerArea">
                                    <div class="clearfix"></div>
                                    <div class="col-md-2"><b>LEVEL 0</b></div>
                                    <div class="col-md-5">
                                        <label><input type="radio" name="levelSaleStage"
                                                class="levelSaleStageRadio" style="margin:0px 5px;"
                                                value="20">L0 - Cần xử lý</label>
                                    </div>

                                    <div class="clearfix"></div>
                                    <hr>
                                    <div class="col-md-2"><b>LEVEL 1</b></div>
                                    <div class="col-md-5"></div>
                                    <div class="col-md-5">
                                        <label class="text-danger"><input type="radio"
                                                name="levelSaleStage" class="levelSaleStageRadio"
                                                style="margin:0px 5px;" value="22">L1B - Thông tin
                                            sai</label>
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr>
                                    <div class="col-md-2"><b>LEVEL 2</b></div>
                                    <div class="col-md-5">
                                        <label><input type="radio" name="levelSaleStage"
                                                class="levelSaleStageRadio" style="margin:0px 5px;"
                                                value="23">L2A - Có nhu cầu</label>
                                    </div>
                                    <div class="col-md-5">
                                        <label class="text-danger"><input type="radio"
                                                name="levelSaleStage" class="levelSaleStageRadio"
                                                style="margin:0px 5px;" value="24">L2B1 - Không có
                                            nhu cầu</label>
                                    </div>
                                    <div class="col-md-2"></div>
                                    <div class="col-md-5"></div>
                                    <div class="col-md-5">
                                        <label class="text-danger"><input type="radio"
                                                name="levelSaleStage" class="levelSaleStageRadio"
                                                style="margin:0px 5px;" value="34">L2B2 - Đã dùng PM
                                            khác</label>
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr>
                                    <div class="col-md-2"><b>LEVEL 3</b></div>
                                    <div class="col-md-5">
                                        <label><input type="radio" name="levelSaleStage"
                                                class="levelSaleStageRadio" style="margin:0px 5px;"
                                                value="25">L3A - Đã hẹn</label>
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr>
                                    <div class="col-md-2"><b>LEVEL 4</b></div>
                                    <div class="col-md-5">
                                        <label><input type="radio" name="levelSaleStage"
                                                class="levelSaleStageRadio" style="margin:0px 5px;"
                                                value="26">L4A - Đã gặp</label>
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr>
                                    <div class="col-md-2"><b>LEVEL 5</b></div>
                                    <div class="col-md-5">
                                        <label><input type="radio" name="levelSaleStage"
                                                class="levelSaleStageRadio" style="margin:0px 5px;"
                                                value="27">L5A1 - Dùng thử</label>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-2"></div>
                                    <div class="col-md-5">
                                        <label><input type="radio" name="levelSaleStage"
                                                class="levelSaleStageRadio" style="margin:0px 5px;"
                                                value="28">L5A2 - Có yêu cầu</label>
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr>
                                    <div class="col-md-2"><b>LEVEL 6</b></div>
                                    <div class="col-md-5">
                                        <label><input type="radio" name="levelSaleStage"
                                                class="levelSaleStageRadio" style="margin:0px 5px;"
                                                value="29">L6A - Đã ký HĐ</label>
                                    </div>
                                    <div class="col-md-5">
                                        <label class="text-danger"><input type="radio"
                                                name="levelSaleStage" class="levelSaleStageRadio"
                                                style="margin:0px 5px;" value="30">L6B1 - Từ chối,
                                            giá đắt</label>
                                    </div>
                                    <div class="col-md-2"></div>
                                    <div class="col-md-5"></div>
                                    <div class="col-md-5">
                                        <label class="text-danger"><input type="radio"
                                                name="levelSaleStage" class="levelSaleStageRadio"
                                                style="margin:0px 5px;" value="35">L6B2 - PM không
                                            phù hợp</label>
                                    </div>
                                    <div class="col-md-2"></div>
                                    <div class="col-md-5"></div>
                                    <div class="col-md-5">
                                        <label class="text-danger"><input type="radio"
                                                name="levelSaleStage" class="levelSaleStageRadio"
                                                style="margin:0px 5px;" value="36">L6B3 - Không phản
                                            hồi</label>
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr>
                                    <div class="col-md-2"><b>LEVEL 7</b></div>
                                    <div class="col-md-5">
                                        <label><input type="radio" name="levelSaleStage"
                                                class="levelSaleStageRadio" style="margin:0px 5px;"
                                                value="31">L7A - Đã triển khai</label>
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr>
                                    <div class="col-md-2"><b>LEVEL 8</b></div>
                                    <div class="col-md-5">
                                        <label><input type="radio" name="levelSaleStage"
                                                class="levelSaleStageRadio" style="margin:0px 5px;"
                                                value="32">L8A - Đã bán chéo</label>
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr>
                                    <div class="col-md-2"><b>LEVEL 9</b></div>
                                    <div class="col-md-5">
                                        <label><input type="radio" name="levelSaleStage"
                                                class="levelSaleStageRadio" style="margin:0px 5px;"
                                                value="33">L9A - Đã tái ký</label>
                                    </div>
                                    <div class="col-md-5">
                                        <label class="text-danger"><input type="radio"
                                                name="levelSaleStage" class="levelSaleStageRadio"
                                                style="margin:0px 5px;" value="37">L9B1 - Ngừng kinh
                                            doanh</label>
                                    </div>
                                    <div class="col-md-2"></div>
                                    <div class="col-md-5"></div>
                                    <div class="col-md-5">
                                        <label class="text-danger"><input type="radio"
                                                name="levelSaleStage" class="levelSaleStageRadio"
                                                style="margin:0px 5px;" value="38">L9B2 - Dùng PM
                                            khác</label>
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div style="border: none;" class="modal-footer">
                        <button type="button" class="btn btn-info save-update-opportunity"
                            data-saving-text="saving...">Cập nhật</button>
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="updateMultiOpportunityModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Cập nhật Level khách hàng</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-horizontal">
                            <div class="col-md-12">
                                <div class="levelCustomerArea">
                                    <div class="clearfix"></div>
                                    <div class="col-md-2"><b>LEVEL 0</b></div>
                                    <div class="col-md-5">
                                        <label><input type="radio" name="levelSaleStage"
                                                class="levelSaleStageRadio" style="margin:0px 5px;"
                                                value="20">L0 - Cần xử lý</label>
                                    </div>

                                    <div class="clearfix"></div>
                                    <hr>
                                    <div class="col-md-2"><b>LEVEL 1</b></div>
                                    <div class="col-md-5"></div>
                                    <div class="col-md-5">
                                        <label class="text-danger"><input type="radio"
                                                name="levelSaleStage" class="levelSaleStageRadio"
                                                style="margin:0px 5px;" value="22">L1B - Thông tin
                                            sai</label>
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr>
                                    <div class="col-md-2"><b>LEVEL 2</b></div>
                                    <div class="col-md-5">
                                        <label><input type="radio" name="levelSaleStage"
                                                class="levelSaleStageRadio" style="margin:0px 5px;"
                                                value="23">L2A - Có nhu cầu</label>
                                    </div>
                                    <div class="col-md-5">
                                        <label class="text-danger"><input type="radio"
                                                name="levelSaleStage" class="levelSaleStageRadio"
                                                style="margin:0px 5px;" value="24">L2B1 - Không có
                                            nhu cầu</label>
                                    </div>
                                    <div class="col-md-2"></div>
                                    <div class="col-md-5"></div>
                                    <div class="col-md-5">
                                        <label class="text-danger"><input type="radio"
                                                name="levelSaleStage" class="levelSaleStageRadio"
                                                style="margin:0px 5px;" value="34">L2B2 - Đã dùng PM
                                            khác</label>
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr>
                                    <div class="col-md-2"><b>LEVEL 3</b></div>
                                    <div class="col-md-5">
                                        <label><input type="radio" name="levelSaleStage"
                                                class="levelSaleStageRadio" style="margin:0px 5px;"
                                                value="25">L3A - Đã hẹn</label>
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr>
                                    <div class="col-md-2"><b>LEVEL 4</b></div>
                                    <div class="col-md-5">
                                        <label><input type="radio" name="levelSaleStage"
                                                class="levelSaleStageRadio" style="margin:0px 5px;"
                                                value="26">L4A - Đã gặp</label>
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr>
                                    <div class="col-md-2"><b>LEVEL 5</b></div>
                                    <div class="col-md-5">
                                        <label><input type="radio" name="levelSaleStage"
                                                class="levelSaleStageRadio" style="margin:0px 5px;"
                                                value="27">L5A1 - Dùng thử</label>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-2"></div>
                                    <div class="col-md-5">
                                        <label><input type="radio" name="levelSaleStage"
                                                class="levelSaleStageRadio" style="margin:0px 5px;"
                                                value="28">L5A2 - Có yêu cầu</label>
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr>
                                    <div class="col-md-2"><b>LEVEL 6</b></div>
                                    <div class="col-md-5">
                                        <label><input type="radio" name="levelSaleStage"
                                                class="levelSaleStageRadio" style="margin:0px 5px;"
                                                value="29">L6A - Đã ký HĐ</label>
                                    </div>
                                    <div class="col-md-5">
                                        <label class="text-danger"><input type="radio"
                                                name="levelSaleStage" class="levelSaleStageRadio"
                                                style="margin:0px 5px;" value="30">L6B1 - Từ chối,
                                            giá đắt</label>
                                    </div>
                                    <div class="col-md-2"></div>
                                    <div class="col-md-5"></div>
                                    <div class="col-md-5">
                                        <label class="text-danger"><input type="radio"
                                                name="levelSaleStage" class="levelSaleStageRadio"
                                                style="margin:0px 5px;" value="35">L6B2 - PM không
                                            phù hợp</label>
                                    </div>
                                    <div class="col-md-2"></div>
                                    <div class="col-md-5"></div>
                                    <div class="col-md-5">
                                        <label class="text-danger"><input type="radio"
                                                name="levelSaleStage" class="levelSaleStageRadio"
                                                style="margin:0px 5px;" value="36">L6B3 - Không phản
                                            hồi</label>
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr>
                                    <div class="col-md-2"><b>LEVEL 7</b></div>
                                    <div class="col-md-5">
                                        <label><input type="radio" name="levelSaleStage"
                                                class="levelSaleStageRadio" style="margin:0px 5px;"
                                                value="31">L7A - Đã triển khai</label>
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr>
                                    <div class="col-md-2"><b>LEVEL 8</b></div>
                                    <div class="col-md-5">
                                        <label><input type="radio" name="levelSaleStage"
                                                class="levelSaleStageRadio" style="margin:0px 5px;"
                                                value="32">L8A - Đã bán chéo</label>
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr>
                                    <div class="col-md-2"><b>LEVEL 9</b></div>
                                    <div class="col-md-5">
                                        <label><input type="radio" name="levelSaleStage"
                                                class="levelSaleStageRadio" style="margin:0px 5px;"
                                                value="33">L9A - Đã tái ký</label>
                                    </div>
                                    <div class="col-md-5">
                                        <label class="text-danger"><input type="radio"
                                                name="levelSaleStage" class="levelSaleStageRadio"
                                                style="margin:0px 5px;" value="37">L9B1 - Ngừng kinh
                                            doanh</label>
                                    </div>
                                    <div class="col-md-2"></div>
                                    <div class="col-md-5"></div>
                                    <div class="col-md-5">
                                        <label class="text-danger"><input type="radio"
                                                name="levelSaleStage" class="levelSaleStageRadio"
                                                style="margin:0px 5px;" value="38">L9B2 - Dùng PM
                                            khác</label>
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div style="border: none;" class="modal-footer">
                        <input type="hidden" id="leadIds" value="">
                        <button type="button" class="btn btn-info save-multi-update-opportunity"
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

        <!-- Modal -->
        <div class="modal fade" id="assignModal" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span><span class="sr-only">Close</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Danh sách bàn giao</h4>
                    </div>
                    <div class="modal-body" data-backdrop="false">
                        <div class="loading fa fa-repeat fa-spin"></div>
                        <div class="formAssignt">
                            <div class="col-md-4">
                                <fieldset>
                                    <legend>Kinh doanh</legend>
                                    <div class="bootstrap-tagsinput" id="saleAssign">
                                        <input size="1" type="text"
                                            class="userAssignSuggest ui-autocomplete-input"
                                            placeholder="" autocomplete="off">

                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-md-4">
                                <fieldset>
                                    <legend>Telesale</legend>
                                    <div class="bootstrap-tagsinput" id="telesaleAssign">
                                        <input size="1" type="text"
                                            class="userAssignSuggest ui-autocomplete-input"
                                            placeholder="" autocomplete="off">
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-md-4">
                                <fieldset>
                                    <legend>Support</legend>
                                    <div class="bootstrap-tagsinput" id="supportAssign">
                                        <input size="1" type="text"
                                            class="userAssignSuggest ui-autocomplete-input"
                                            placeholder="" autocomplete="off">

                                    </div>

                                </fieldset>
                            </div>
                            <div style="clear: both;"></div>
                        </div>

                        <ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content"
                            id="ui-id-1" tabindex="0" style="display: none;"></ul>
                        <ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content"
                            id="ui-id-2" tabindex="0" style="display: none;"></ul>
                        <ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content"
                            id="ui-id-3" tabindex="0" style="display: none;"></ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary saveMultiple"
                            style="display:none;" data-loading-text="loading...">Lưu</button>
                        <button type="button" class="btn btn-primary save"
                            data-loading-text="loading...">Lưu</button>
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="updateDescription" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">×</button>
                        <h4 class="modal-title">Cập nhật thông tin ghi chú</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 form-horizontal">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <textarea placeholder="Ghi chú" class="form-control"
                                            style="min-height: 90px;"
                                            id="description-txt"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <input type="hidden" id="leadIdDescription">
                        <button type="button"
                            class="btn btn-success editDescriptionBtn">Lưu</button>
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>
        <style>
            #updateOpportunityModal hr {
                margin-top: 10px;
                margin-bottom: 10px;
            }

            #assignModal .modal-dialog {
                width: 900px;
            }

            #assignModal .bootstrap-tagsinput {
                width: 100%;
            }

            .modal .loading {
                font-size: 2em;
                display: block;
                margin: auto;
                width: 30px;
                height: 30px;
                text-align: center;
                padding: 0;
            }

            i.description {
                font-size: 0.8em;
            }

            .crm-type {
                width: 100%;
                display: block;
                margin-bottom: 5px;
                text-align: left;
                font-size: 0.9em;
                font-weight: bold;
            }

            .dropdown-menu>li>a {
                text-align: left;
            }

            .item-block {
                width: 220px;
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

            .icon-block {
                width: 16px;
                display: inline-block;
            }

            .td-history {
                margin: 0;
                padding: 0;
                min-width: 550px;
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
                font-weight: bold;
            }

            .td-history .infor-activity {
                padding-left: 20px;
            }

            .col-assignedTo>div {
                min-width: 130px;
                margin: 5px 0;
            }

            .editing {
                background: #FAF6E8;
            }

            .bootstrap-tagsinput .label {
                display: inline-block;
            }

            .colControls .dropdown-menu {
                top: 0;
                left: 23px;
            }

            .page-overview .btn {
                border-right: 1px solid #888;
                font-family: "arial";
            }

            .page-overview .btn:last-child {
                border-right: none;
            }

            .page-overview .taskStt8 {
                background: #eee;
            }
        </style>
        <script>
            var lbAccept = 'Đồng ý';
            var lbAssign = 'Bàn giao';
            var lbFreeLeads = 'Thả nổi';
            var lbCancel = 'Hủy';
            var lbYes = 'Có';
            var lbNo = 'Không';
            var noLeadSelectdMsg = 'Bạn phải chọn thông tin để bàn giao';
            var selfAssignMsg = 'Bạn muốn nhận phụ trách thông tin này';
            var leadUserTypeSale = '1';
            var leadUserTypeTeleSale = '2';
            var leadUserTypeSupport = '3';
            var discardLeadMsg = 'Bạn không muốn chăm sóc khách hàng này nữa?';
        </script>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        var usrCnf = {
            language: 'vi'
        };
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/customer/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/customer/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/customer/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/customer/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/customer/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/customer/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/customer/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/customer/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/customer/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/customer/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/customer/saved_resource(2)') }}"></script>
@endsection
    