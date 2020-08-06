@extends('Layout.master')

@section('title','Danh sách thông tin nguồn công ty cung cấp')

@section('css')
	<link rel="stylesheet" href="{{ asset('asset/css/crm/customer/style.css') }}" type="text/css">
@endsection

@section('content-page')
    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/crm/lead/index">Danh sách thông tin nguồn công ty cung
                    cấp</a></li>
        </ul>
        <div id="page-crm-contact">
            <div class="filterContainer">
                <form method="GET" name="crmContactFilter" class="form-inline lolify" role="form"
                    id="crmContactFilter">
                    <div class="col-md-10 lolify-default">

                        <input type="hidden" name="companyId" id="companyId" class="form-control"
                            value="319"> <input type="hidden" name="assignedToId" id="assignedToId"
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
                            data-toggle="tooltip" data-placement="top" title=""
                            data-original-title="bộ lọc nâng cao">
                            <span class="fa fa-th"></span>
                        </button>
                    </div>
                    <div class="col-md-12 lolify-extend" style="">
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
                                <option value="20">L0 - Cần xử lý</option>
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
                    <li class="active ">
                        <a href="https://erp.nhanh.vn/crm/customer/companysource">
                            <i class="fa fa-list"></i> Tất cả
                        </a>
                    </li>
                    <li class=""><a
                            href="https://erp.nhanh.vn/crm/customer/companysource?saleStage=20">L0 -
                            Cần xử lý<span style="margin:0 2px;" class="badge stage20"
                                data-toggle="tooltip" data-title="Số lượng khách">1</span></a></li>
                    <li class=""><a
                            href="https://erp.nhanh.vn/crm/customer/companysource?saleStage=23">L2A
                            - Có nhu cầu<span style="margin:0 2px;" class="badge stage23"
                                data-toggle="tooltip" data-title="Số lượng khách"></span></a></li>
                    <li class=""><a
                            href="https://erp.nhanh.vn/crm/customer/companysource?saleStage=25">L3 -
                            Đã hẹn<span style="margin:0 2px;" class="badge stage25"
                                data-toggle="tooltip" data-title="Số lượng khách"></span></a></li>
                    <li class=""><a
                            href="https://erp.nhanh.vn/crm/customer/companysource?saleStage=26">L4 -
                            Đã gặp<span style="margin:0 2px;" class="badge stage26"
                                data-toggle="tooltip" data-title="Số lượng khách"></span></a></li>
                    <li class=""><a
                            href="https://erp.nhanh.vn/crm/customer/companysource?saleStage=27">L5A1
                            - Dùng thử<span style="margin:0 2px;" class="badge stage27"
                                data-toggle="tooltip" data-title="Số lượng khách"></span></a></li>
                    <li class=""><a
                            href="https://erp.nhanh.vn/crm/customer/companysource?saleStage=28">L5A2
                            - Có yêu cầu<span style="margin:0 2px;" class="badge stage28"
                                data-toggle="tooltip" data-title="Số lượng khách"></span></a></li>
                    <li class=""><a
                            href="https://erp.nhanh.vn/crm/customer/companysource?saleStage=29">L6A
                            - Ký hợp đồng<span style="margin:0 2px;" class="badge stage29"
                                data-toggle="tooltip" data-title="Số lượng khách">1</span></a></li>
                    <li class=""><a
                            href="https://erp.nhanh.vn/crm/customer/companysource?saleStage=31">L7A
                            - Đã triển khai<span style="margin:0 2px;" class="badge stage31"
                                data-toggle="tooltip" data-title="Số lượng khách"></span></a></li>
                </ul>
            </div>
            <div class="btn-group lolify-features" data-toggle="tooltip" data-placement="top"
                title="Xuất excel" style="margin-left: 5px">
                <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                    aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
                    <span class="fa fa-book" style="margin-right:5px"></span>Xuất Excel <span
                        class="caret"></span>
                </button>
                <ul class="dropdown-menu"></ul>
            </div>
            <div class="dgContainer">
                <div style="width: 1556px; display: none;" class="stickyHeader">
                    <table class="table table-bordered" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr class="even">
                                <th class="colCheckbox" style="width: 36px;"><input type="checkbox"
                                        class="cb" id=""></th>
                                <th style="width: 79px;">ID</th>
                                <th style="width: 71px;">Tác vụ</th>
                                <th style="width: 325px;">Thông tin</th>
                                <th style="width: 258px;">Người phụ trách</th>
                                <th style="width: 786px;">Thông tin thêm</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-6 dgButtons"></div>
                    <div class="col-md-6 paginatorItem">
                        <div class="paginator"><span class="labelPages">1 - 30 / 19,554</span><span
                                class="disabled fa fa-step-backward"></span><span
                                class="disabled fa fa-backward"></span><a class="fa fa-forward"
                                href="https://erp.nhanh.vn/crm/customer/companysource?page=2"
                                title="Trang sau"></a> <a class="fa fa-step-forward"
                                href="https://erp.nhanh.vn/crm/customer/companysource?page=652"
                                title="Trang cuối"></a></div>
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
                        <tr class="">
                            <td class="colCheckbox"><input data-id="410073" class="cb leadCb"
                                    type="checkbox"></td>
                            <td class="colControls"><a data-toggle="tooltip"
                                    data-original-title="Ngày tạo:2020-07-30 17:15:28"
                                    href="https://erp.nhanh.vn/crm/lead/view?id=410073">410073</a>
                            </td>
                            <td class="colControls">
                                <div class="dropdown">
                                    <a data-toggle="dropdown"
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="fa fa-plus-circle icon"></a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addmeeting?leadId=410073">
                                                <i class="fa fa-users"></i> Thêm cuộc gặp
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addphonecall?leadId=410073">
                                                <i class="fa fa-phone"></i> Thêm cuộc gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addcalendar?leadId=410073">
                                                <i class="fa fa-calendar"></i> Đặt lịch
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addrequestphonecall?leadId=410073">
                                                <i class="fa fa-phone-square"></i> Yêu cầu gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/contract/add?leadId=410073">
                                                <i class="fa fa-book"></i> Tạo hợp đồng
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/requirement/add?leadId=410073">
                                                <i class="fa fa-cog"></i> Thêm yêu cầu
                                            </a>
                                        </li>
                                        <li>
                                            <a class="editDescription" data-leadid="410073"
                                                data-description="Starter Hoa, quà tặng Quận Bình Thạnh Hồ Chí Minh"
                                                href="javascript:;">
                                                <i class="fa fa-edit"></i> Sửa ghi chú
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div><a class="fa fa-users assignLead"
                                        title="Quản lí người phụ trách" data-id="410073"></a></div>
                                <div><a class="fa fa-heart selfAssign"
                                        title="Nhận chăm sóc thông tin" data-id="410073"></a></div>
                                <span data-id="410073" data-toggle="tooltip"
                                    data-title="Cập nhật Level khách hàng" style="cursor:pointer"
                                    class="updateOpportunityStatus icon fa fa-refresh text-success"></span>
                            </td>
                            <td>
                                <div class="item-block"><a
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="label btn-default crm-type">Thông tin</a></div>
                                <div class="line-break"></div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-arrow-right"></i></div>
                                    <div class="item-infor">Cá nhân</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor"><a
                                            href="https://erp.nhanh.vn/crm/lead/view?id=410073">Thiên
                                            Hương Phát</a></div>
                                </div>
                                <div class="opportunityStatus410073"></div>
                                <div class="item-block">
                                    <b>Nguồn: </b>Data bàn giao - Không có mã</div>
                                <div class="item-block">
                                    <b>Tham chiếu: </b></div>
                            </td>
                            <td class="col-assignedTo">
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Nhóm KD3_NgânTK"><i
                                        class="fa fa-flag-o"></i> Trần Thị Ngọc Quyền</div>
                                <div title="Người tạo">
                                    <i class="fa fa-github-alt" data-toggle="tooltip"
                                        data-original-title="Ngày tạo: 2020-07-30 17:15:28 "></i>
                                    Nguyễn Thị Thu Hằng</div>
                            </td>
                            <td>
                                <ul class="td-history">
                                    <li class="last"><a class="text-info"
                                            href="https://erp.nhanh.vn/crm/activity/history?leadId=410073">Xem
                                            chi tiết 2 hành động</a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="colCheckbox"><input data-id="165126" class="cb leadCb"
                                    type="checkbox"></td>
                            <td class="colControls"><a data-toggle="tooltip"
                                    data-original-title="Ngày tạo:2017-03-20 07:57:07"
                                    href="https://erp.nhanh.vn/crm/account/view?id=9946">165126</a>
                            </td>
                            <td class="colControls">
                                <div class="dropdown">
                                    <a data-toggle="dropdown"
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="fa fa-plus-circle icon"></a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addmeeting?accountId=9946">
                                                <i class="fa fa-users"></i> Thêm cuộc gặp
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addphonecall?accountId=9946">
                                                <i class="fa fa-phone"></i> Thêm cuộc gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addcalendar?accountId=9946">
                                                <i class="fa fa-calendar"></i> Đặt lịch
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addrequestphonecall?accountId=9946">
                                                <i class="fa fa-phone-square"></i> Yêu cầu gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/contract/add?accountId=9946">
                                                <i class="fa fa-book"></i> Tạo hợp đồng
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/adddeploy?accountId=9946">
                                                <i class="fa fa-cogs"></i> Thêm triển khai
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/requirement/add?accountId=9946">
                                                <i class="fa fa-cog"></i> Thêm yêu cầu
                                            </a>
                                        </li>
                                        <li>
                                            <a class="editDescription" data-leadid="165126"
                                                data-description="" href="javascript:;">
                                                <i class="fa fa-edit"></i> Sửa ghi chú
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div><a class="fa fa-users assignLead"
                                        title="Quản lí người phụ trách" data-id="165126"></a></div>
                                <div><a class="fa fa-heart selfAssign"
                                        title="Nhận chăm sóc thông tin" data-id="165126"></a></div>
                                <span data-id="165126" data-toggle="tooltip"
                                    data-title="Cập nhật Level khách hàng" style="cursor:pointer"
                                    class="updateOpportunityStatus icon fa fa-refresh text-success"></span>
                            </td>
                            <td>
                                <div class="item-block"><a
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="label btn-info crm-type">Khách hàng</a></div>
                                <div class="line-break"></div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-arrow-right"></i></div>
                                    <div class="item-infor">Cá nhân</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor"><a
                                            href="https://erp.nhanh.vn/crm/account/view?id=9946">Nguyễn
                                            Ly</a></div>
                                </div>
                                <div class="opportunityStatus165126"></div>
                                <div class="item-block">
                                    <b>Nguồn: </b>Data bàn giao - Không có mã</div>
                                <div class="item-block">
                                    <b>Tham chiếu: </b></div>
                            </td>
                            <td class="col-assignedTo">
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Phòng KD1_NgânHTM"><i
                                        class="fa fa-flag-o"></i> Trương Hoàng Việt</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Nhóm KD5_LiêmNT"><i
                                        class="fa fa-flag-o"></i> Nguyễn Thị Hiếu</div>
                                <div data-toggle="tooltip" title=""
                                    data-original-title="Vật giá - Hồ Chí Minh | Nhanh HCM - Nhóm KD5_LiêmNT">
                                    <i class="fa fa-flag-o"></i> Trần Thị Kim Oanh</div>
                                <div title="Người tạo">
                                    <i class="fa fa-github-alt" data-toggle="tooltip"
                                        data-original-title="Ngày tạo: 2017-03-20 07:57:07 "></i>
                                    Lại Thị Thúy Ngần</div>
                            </td>
                            <td>
                                <p style="font-style: italic;" data-toggle="tooltip"
                                    data-title="hợp đồng công ty Nhanh.vn">- Số hợp đồng:3</p>
                                <p style="font-style: italic;"> - Doanh thu tạo: <b>8.400.000</b>
                                </p>
                                <p style="font-style: italic;"> - Đã thanh toán: <b
                                        class="text-success">7.200.000</b></p>
                                <p style="font-style: italic;"> - Ngày tạo hợp đồng đầu tiên:
                                    <b>20/03/2017</b></p>
                                <p style="font-style: italic;"> - Thời gian chốt: <b>0 ngày</b></p>
                                <p style="font-style: italic;"> - Sản phẩm: <br><b
                                        class="text-success">+ Gói Premium - QLBH<br>+ Gói Ecom</b>
                                </p>
                                <ul class="td-history">
                                    <li class="last"><a class="text-info"
                                            href="https://erp.nhanh.vn/crm/activity/history?accountId=9946">Xem
                                            chi tiết 35 hành động</a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr class="">
                            <td class="colCheckbox"><input data-id="246731" class="cb leadCb"
                                    type="checkbox"></td>
                            <td class="colControls"><a data-toggle="tooltip"
                                    data-original-title="Ngày tạo:2018-04-11 17:24:56"
                                    href="https://erp.nhanh.vn/crm/account/view?id=16611">246731</a>
                            </td>
                            <td class="colControls">
                                <div class="dropdown">
                                    <a data-toggle="dropdown"
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="fa fa-plus-circle icon"></a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addmeeting?accountId=16611">
                                                <i class="fa fa-users"></i> Thêm cuộc gặp
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addphonecall?accountId=16611">
                                                <i class="fa fa-phone"></i> Thêm cuộc gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addcalendar?accountId=16611">
                                                <i class="fa fa-calendar"></i> Đặt lịch
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addrequestphonecall?accountId=16611">
                                                <i class="fa fa-phone-square"></i> Yêu cầu gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/contract/add?accountId=16611">
                                                <i class="fa fa-book"></i> Tạo hợp đồng
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/adddeploy?accountId=16611">
                                                <i class="fa fa-cogs"></i> Thêm triển khai
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/requirement/add?accountId=16611">
                                                <i class="fa fa-cog"></i> Thêm yêu cầu
                                            </a>
                                        </li>
                                        <li>
                                            <a class="editDescription" data-leadid="246731"
                                                data-description="" href="javascript:;">
                                                <i class="fa fa-edit"></i> Sửa ghi chú
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div><a class="fa fa-users assignLead"
                                        title="Quản lí người phụ trách" data-id="246731"></a></div>
                                <div><a class="fa fa-heart selfAssign"
                                        title="Nhận chăm sóc thông tin" data-id="246731"></a></div>
                                <span data-id="246731" data-toggle="tooltip"
                                    data-title="Cập nhật Level khách hàng" style="cursor:pointer"
                                    class="updateOpportunityStatus icon fa fa-refresh text-success"></span>
                            </td>
                            <td>
                                <div class="item-block"><a
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="label btn-info crm-type">Khách hàng</a></div>
                                <div class="line-break"></div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-arrow-right"></i></div>
                                    <div class="item-infor">Cá nhân</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor"><a
                                            href="https://erp.nhanh.vn/crm/account/view?id=16611">Lens
                                            Shop</a></div>
                                </div>
                                <div class="opportunityStatus246731"></div>
                                <div class="item-block">
                                    <b>Nguồn: </b>Data bàn giao - Không có mã</div>
                                <div class="item-block">
                                    <b>Tham chiếu: </b></div>
                            </td>
                            <td class="col-assignedTo">
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Nhóm KD7_TâmNT"><i
                                        class="fa fa-flag-o"></i> NGUYỄN HUỲNH TRUNG</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Phòng KD 01"><i
                                        class="fa fa-flag-o"></i> Trịnh Thị Phương Nhi</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhóm Telesale"><i
                                        class="fa fa-flag-o"></i> Võ Thị Oanh Nhi</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhóm Telesale"><i
                                        class="fa fa-flag-o"></i> Bùi Thị Mỹ Nhiên</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Nhóm KD9_ThưNTA"><i
                                        class="fa fa-flag-o"></i> Trần Anh Tuấn</div>
                                <div title="Người tạo">
                                    <i class="fa fa-github-alt" data-toggle="tooltip"
                                        data-original-title="Ngày tạo: 2018-04-11 17:24:56 "></i>
                                    Nguyễn Thị Hiền</div>
                            </td>
                            <td>
                                <p style="font-style: italic;"> - Doanh thu tạo: <b>26.710.000</b>
                                </p>
                                <p style="font-style: italic;"> - Đã thanh toán: <b
                                        class="text-success">25.810.000</b></p>
                                <p style="font-style: italic;"> - Ngày tạo hợp đồng đầu tiên:
                                    <b>28/02/2019</b></p>
                                <p style="font-style: italic;"> - Thời gian chốt: <b>17 ngày</b></p>
                                <ul class="td-history">
                                    <li class="last"><a class="text-info"
                                            href="https://erp.nhanh.vn/crm/activity/history?accountId=16611">Xem
                                            chi tiết 137 hành động</a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="colCheckbox"><input data-id="403941" class="cb leadCb"
                                    type="checkbox"></td>
                            <td class="colControls"><a data-toggle="tooltip"
                                    data-original-title="Ngày tạo:2020-07-03 10:52:33"
                                    href="https://erp.nhanh.vn/crm/lead/view?id=403941">403941</a>
                            </td>
                            <td class="colControls">
                                <div class="dropdown">
                                    <a data-toggle="dropdown"
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="fa fa-plus-circle icon"></a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addmeeting?leadId=403941">
                                                <i class="fa fa-users"></i> Thêm cuộc gặp
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addphonecall?leadId=403941">
                                                <i class="fa fa-phone"></i> Thêm cuộc gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addcalendar?leadId=403941">
                                                <i class="fa fa-calendar"></i> Đặt lịch
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addrequestphonecall?leadId=403941">
                                                <i class="fa fa-phone-square"></i> Yêu cầu gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/contract/add?leadId=403941">
                                                <i class="fa fa-book"></i> Tạo hợp đồng
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/requirement/add?leadId=403941">
                                                <i class="fa fa-cog"></i> Thêm yêu cầu
                                            </a>
                                        </li>
                                        <li>
                                            <a class="editDescription" data-leadid="403941"
                                                data-description="https://www.facebook.com/fiona.le.18"
                                                href="javascript:;">
                                                <i class="fa fa-edit"></i> Sửa ghi chú
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div><a class="fa fa-users assignLead"
                                        title="Quản lí người phụ trách" data-id="403941"></a></div>
                                <div><a class="fa fa-heart selfAssign"
                                        title="Nhận chăm sóc thông tin" data-id="403941"></a></div>
                                <span data-id="403941" data-toggle="tooltip"
                                    data-title="Cập nhật Level khách hàng" style="cursor:pointer"
                                    class="updateOpportunityStatus icon fa fa-refresh text-success"></span>
                            </td>
                            <td>
                                <div class="item-block"><a
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="label btn-default crm-type">Thông tin</a></div>
                                <div class="line-break"></div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-arrow-right"></i></div>
                                    <div class="item-infor">Cá nhân</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor"><a
                                            href="https://erp.nhanh.vn/crm/lead/view?id=403941">Thanh
                                            Huong</a></div>
                                </div>
                                <div class="opportunityStatus403941"></div>
                                <div class="item-block">
                                    <b>Nguồn: </b>Data bàn giao - SĐT quét từ QC</div>
                                <div class="item-block">
                                    <b>Tham chiếu: </b></div>
                            </td>
                            <td class="col-assignedTo">
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Nhóm KD5_LiêmNT"><i
                                        class="fa fa-flag-o"></i> Nguyễn Thanh Liêm</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Nhóm KD5_LiêmNT"><i
                                        class="fa fa-flag-o"></i> Trần Thị Yến Phương</div>
                                <div title="Người tạo">
                                    <i class="fa fa-github-alt" data-toggle="tooltip"
                                        data-original-title="Ngày tạo: 2020-07-03 10:52:33 "></i> Lê
                                    Hải Anh</div>
                            </td>
                            <td>
                                <ul class="td-history">
                                    <li class="last"><a class="text-info"
                                            href="https://erp.nhanh.vn/crm/activity/history?leadId=403941">Xem
                                            chi tiết 4 hành động</a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="colCheckbox"><input data-id="310965" class="cb leadCb"
                                    type="checkbox"></td>
                            <td class="colControls"><a data-toggle="tooltip"
                                    data-original-title="Ngày tạo:2019-04-16 09:39:18"
                                    href="https://erp.nhanh.vn/crm/account/view?id=17748">310965</a>
                            </td>
                            <td class="colControls">
                                <div class="dropdown">
                                    <a data-toggle="dropdown"
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="fa fa-plus-circle icon"></a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addmeeting?accountId=17748">
                                                <i class="fa fa-users"></i> Thêm cuộc gặp
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addphonecall?accountId=17748">
                                                <i class="fa fa-phone"></i> Thêm cuộc gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addcalendar?accountId=17748">
                                                <i class="fa fa-calendar"></i> Đặt lịch
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addrequestphonecall?accountId=17748">
                                                <i class="fa fa-phone-square"></i> Yêu cầu gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/contract/add?accountId=17748">
                                                <i class="fa fa-book"></i> Tạo hợp đồng
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/adddeploy?accountId=17748">
                                                <i class="fa fa-cogs"></i> Thêm triển khai
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/requirement/add?accountId=17748">
                                                <i class="fa fa-cog"></i> Thêm yêu cầu
                                            </a>
                                        </li>
                                        <li>
                                            <a class="editDescription" data-leadid="310965"
                                                data-description="quan tâm web" href="javascript:;">
                                                <i class="fa fa-edit"></i> Sửa ghi chú
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div><a class="fa fa-users assignLead"
                                        title="Quản lí người phụ trách" data-id="310965"></a></div>
                                <div><a class="fa fa-heart selfAssign"
                                        title="Nhận chăm sóc thông tin" data-id="310965"></a></div>
                                <span data-id="310965" data-toggle="tooltip"
                                    data-title="Cập nhật Level khách hàng" style="cursor:pointer"
                                    class="updateOpportunityStatus icon fa fa-refresh text-success"></span>
                            </td>
                            <td>
                                <div class="item-block"><a
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="label btn-info crm-type">Khách hàng</a></div>
                                <div class="line-break"></div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-arrow-right"></i></div>
                                    <div class="item-infor">Cá nhân</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor"><a
                                            href="https://erp.nhanh.vn/crm/account/view?id=17748">c
                                            Linh</a></div>
                                </div>
                                <div class="opportunityStatus310965"></div>
                                <div class="item-block">
                                    <b>Nguồn: </b>Data bàn giao- Hotline</div>
                                <div class="item-block">
                                    <b>Tham chiếu: </b></div>
                            </td>
                            <td class="col-assignedTo">
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Phòng KD1_NgânHTM"><i
                                        class="fa fa-flag-o"></i> Đỗ Thị Ngọc Hân</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | NHANH HCM- PhúcN"><i
                                        class="fa fa-flag-o"></i> Nguyễn Phúc</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Nhóm KD3_NgânTK"><i
                                        class="fa fa-flag-o"></i> Huỳnh Diễm Thy</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Phòng KD1_NgânHTM"><i
                                        class="fa fa-cogs"></i> Đỗ Thị Ngọc Hân</div>
                                <div title="Người tạo">
                                    <i class="fa fa-github-alt" data-toggle="tooltip"
                                        data-original-title="Ngày tạo: 2019-04-16 09:39:18 "></i>
                                    Nguyễn Thị Hiền</div>
                            </td>
                            <td>
                                <p style="font-style: italic;" data-toggle="tooltip"
                                    data-title="hợp đồng công ty Nhanh.vn">- Số hợp đồng:6</p>
                                <p style="font-style: italic;"> - Doanh thu tạo: <b>19.600.000</b>
                                </p>
                                <p style="font-style: italic;"> - Đã thanh toán: <b
                                        class="text-success">19.600.000</b></p>
                                <p style="font-style: italic;"> - Ngày tạo hợp đồng đầu tiên:
                                    <b>22/04/2019</b></p>
                                <p style="font-style: italic;"> - Thời gian chốt: <b>6 ngày</b></p>
                                <p style="font-style: italic;"> - Sản phẩm: <br><b
                                        class="text-success">+ Gói thiết kế thêm tính năng cho
                                        website<br>+ Gói Website dài hạn<br>+ Thiết kế thêm tính
                                        năng cho website: bảo mật https cho website<br>+ Dịch vụ vận
                                        chuyển<br>+ Gói thêm tính năng mới</b></p>
                                <ul class="td-history">
                                    <li class="last"><a class="text-info"
                                            href="https://erp.nhanh.vn/crm/activity/history?accountId=17748">Xem
                                            chi tiết 52 hành động</a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="colCheckbox"><input data-id="409832" class="cb leadCb"
                                    type="checkbox"></td>
                            <td class="colControls"><a data-toggle="tooltip"
                                    data-original-title="Ngày tạo:2020-07-30 10:25:17"
                                    href="https://erp.nhanh.vn/crm/lead/view?id=409832">409832</a>
                            </td>
                            <td class="colControls">
                                <div class="dropdown">
                                    <a data-toggle="dropdown"
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="fa fa-plus-circle icon"></a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addmeeting?leadId=409832">
                                                <i class="fa fa-users"></i> Thêm cuộc gặp
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addphonecall?leadId=409832">
                                                <i class="fa fa-phone"></i> Thêm cuộc gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addcalendar?leadId=409832">
                                                <i class="fa fa-calendar"></i> Đặt lịch
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addrequestphonecall?leadId=409832">
                                                <i class="fa fa-phone-square"></i> Yêu cầu gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/contract/add?leadId=409832">
                                                <i class="fa fa-book"></i> Tạo hợp đồng
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/requirement/add?leadId=409832">
                                                <i class="fa fa-cog"></i> Thêm yêu cầu
                                            </a>
                                        </li>
                                        <li>
                                            <a class="editDescription" data-leadid="409832"
                                                data-description="Hongthu1133@gmail.com BAIVIET afiliate2 Starter Thời trang Huyện Bình Tân Vĩnh Long có nhu cầu quan tâm"
                                                href="javascript:;">
                                                <i class="fa fa-edit"></i> Sửa ghi chú
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div><a class="fa fa-users assignLead"
                                        title="Quản lí người phụ trách" data-id="409832"></a></div>
                                <div><a class="fa fa-heart selfAssign"
                                        title="Nhận chăm sóc thông tin" data-id="409832"></a></div>
                                <span data-id="409832" data-toggle="tooltip"
                                    data-title="Cập nhật Level khách hàng" style="cursor:pointer"
                                    class="updateOpportunityStatus icon fa fa-refresh text-success"></span>
                            </td>
                            <td>
                                <div class="item-block"><a
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="label btn-default crm-type">Thông tin</a></div>
                                <div class="line-break"></div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-arrow-right"></i></div>
                                    <div class="item-infor">Cá nhân</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor"><a
                                            href="https://erp.nhanh.vn/crm/lead/view?id=409832">Hồng
                                            Thu</a></div>
                                </div>
                                <div class="opportunityStatus409832"></div>
                                <div class="item-block">
                                    <b>Nguồn: </b>Data bàn giao - SEO</div>
                                <div class="item-block">
                                    <b>Tham chiếu: </b></div>
                            </td>
                            <td class="col-assignedTo">
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Nhóm KD5_LiêmNT"><i
                                        class="fa fa-flag-o"></i> Nguyễn Thị Hiếu</div>
                                <div title="Người tạo">
                                    <i class="fa fa-github-alt" data-toggle="tooltip"
                                        data-original-title="Ngày tạo: 2020-07-30 10:25:17 "></i>
                                    PHAN THỊ THU THẢO</div>
                            </td>
                            <td>
                                <ul class="td-history">
                                    <li class="last"><a class="text-info"
                                            href="https://erp.nhanh.vn/crm/activity/history?leadId=409832">Xem
                                            chi tiết 6 hành động</a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="colCheckbox"><input data-id="401529" class="cb leadCb"
                                    type="checkbox"></td>
                            <td class="colControls"><a data-toggle="tooltip"
                                    data-original-title="Ngày tạo:2020-06-23 10:07:07"
                                    href="https://erp.nhanh.vn/crm/lead/view?id=401529">401529</a>
                            </td>
                            <td class="colControls">
                                <div class="dropdown">
                                    <a data-toggle="dropdown"
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="fa fa-plus-circle icon"></a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addmeeting?leadId=401529">
                                                <i class="fa fa-users"></i> Thêm cuộc gặp
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addphonecall?leadId=401529">
                                                <i class="fa fa-phone"></i> Thêm cuộc gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addcalendar?leadId=401529">
                                                <i class="fa fa-calendar"></i> Đặt lịch
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addrequestphonecall?leadId=401529">
                                                <i class="fa fa-phone-square"></i> Yêu cầu gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/contract/add?leadId=401529">
                                                <i class="fa fa-book"></i> Tạo hợp đồng
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/requirement/add?leadId=401529">
                                                <i class="fa fa-cog"></i> Thêm yêu cầu
                                            </a>
                                        </li>
                                        <li>
                                            <a class="editDescription" data-leadid="401529"
                                                data-description="Thời trang lethanhtien.dienphuphat@gmail.com Thành phố Thủ Dầu Một Bình Dương Starter"
                                                href="javascript:;">
                                                <i class="fa fa-edit"></i> Sửa ghi chú
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div><a class="fa fa-users assignLead"
                                        title="Quản lí người phụ trách" data-id="401529"></a></div>
                                <div><a class="fa fa-heart selfAssign"
                                        title="Nhận chăm sóc thông tin" data-id="401529"></a></div>
                                <span data-id="401529" data-toggle="tooltip"
                                    data-title="Cập nhật Level khách hàng" style="cursor:pointer"
                                    class="updateOpportunityStatus icon fa fa-refresh text-success"></span>
                            </td>
                            <td>
                                <div class="item-block"><a
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="label btn-default crm-type">Thông tin</a></div>
                                <div class="line-break"></div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-arrow-right"></i></div>
                                    <div class="item-infor">Cá nhân</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor"><a
                                            href="https://erp.nhanh.vn/crm/lead/view?id=401529">Tiến
                                            Store</a></div>
                                </div>
                                <div class="opportunityStatus401529"></div>
                                <div class="item-block">
                                    <b>Nguồn: </b>Data bàn giao - Không có mã</div>
                                <div class="item-block">
                                    <b>Tham chiếu: </b></div>
                            </td>
                            <td class="col-assignedTo">
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Phòng KD8_LâmNV"><i
                                        class="fa fa-flag-o"></i> Nguyễn Phương Mai</div>
                                <div title="Người tạo">
                                    <i class="fa fa-github-alt" data-toggle="tooltip"
                                        data-original-title="Ngày tạo: 2020-06-23 10:07:07 "></i>
                                    Nguyễn Thị Thu Hằng</div>
                            </td>
                            <td>
                                <ul class="td-history">
                                    <li class="last"><a class="text-info"
                                            href="https://erp.nhanh.vn/crm/activity/history?leadId=401529">Xem
                                            chi tiết 4 hành động</a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="colCheckbox"><input data-id="410225" class="cb leadCb"
                                    type="checkbox"></td>
                            <td class="colControls"><a data-toggle="tooltip"
                                    data-original-title="Ngày tạo:2020-07-31 14:47:49"
                                    href="https://erp.nhanh.vn/crm/lead/view?id=410225">410225</a>
                            </td>
                            <td class="colControls">
                                <div class="dropdown">
                                    <a data-toggle="dropdown"
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="fa fa-plus-circle icon"></a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addmeeting?leadId=410225">
                                                <i class="fa fa-users"></i> Thêm cuộc gặp
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addphonecall?leadId=410225">
                                                <i class="fa fa-phone"></i> Thêm cuộc gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addcalendar?leadId=410225">
                                                <i class="fa fa-calendar"></i> Đặt lịch
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addrequestphonecall?leadId=410225">
                                                <i class="fa fa-phone-square"></i> Yêu cầu gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/contract/add?leadId=410225">
                                                <i class="fa fa-book"></i> Tạo hợp đồng
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/requirement/add?leadId=410225">
                                                <i class="fa fa-cog"></i> Thêm yêu cầu
                                            </a>
                                        </li>
                                        <li>
                                            <a class="editDescription" data-leadid="410225"
                                                data-description="quangmy0107@gmail.com BAIVIET afiliate2 Starter Thời trang Quận 3 Hồ Chí Minh Quan tâm website" href="javascript:;">
                                                <i class="fa fa-edit"></i> Sửa ghi chú
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div><a class="fa fa-users assignLead"
                                        title="Quản lí người phụ trách" data-id="410225"></a></div>
                                <div><a class="fa fa-heart selfAssign"
                                        title="Nhận chăm sóc thông tin" data-id="410225"></a></div>
                                <span data-id="410225" data-toggle="tooltip"
                                    data-title="Cập nhật Level khách hàng" style="cursor:pointer"
                                    class="updateOpportunityStatus icon fa fa-refresh text-success"></span>
                            </td>
                            <td>
                                <div class="item-block"><a
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="label btn-default crm-type">Thông tin</a></div>
                                <div class="line-break"></div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-arrow-right"></i></div>
                                    <div class="item-infor">Cá nhân</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor"><a
                                            href="https://erp.nhanh.vn/crm/lead/view?id=410225">Baobei
                                            Fashion Shop</a></div>
                                </div>
                                <div class="opportunityStatus410225"></div>
                                <div class="item-block">
                                    <b>Nguồn: </b>Data bàn giao - SEO</div>
                                <div class="item-block">
                                    <b>Tham chiếu: </b></div>
                            </td>
                            <td class="col-assignedTo">
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Nhóm KD5_LiêmNT"><i
                                        class="fa fa-flag-o"></i> Nguyễn Thị Hiếu</div>
                                <div title="Người tạo">
                                    <i class="fa fa-github-alt" data-toggle="tooltip"
                                        data-original-title="Ngày tạo: 2020-07-31 14:47:49 "></i>
                                    PHAN THỊ THU THẢO</div>
                            </td>
                            <td>
                                <ul class="td-history">
                                    <li class="last"><a class="text-info"
                                            href="https://erp.nhanh.vn/crm/activity/history?leadId=410225">Xem
                                            chi tiết 2 hành động</a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="colCheckbox"><input data-id="263185" class="cb leadCb"
                                    type="checkbox"></td>
                            <td class="colControls"><a data-toggle="tooltip"
                                    data-original-title="Ngày tạo:2018-07-26 09:36:44"
                                    href="https://erp.nhanh.vn/crm/lead/view?id=263185">263185</a>
                            </td>
                            <td class="colControls">
                                <div class="dropdown">
                                    <a data-toggle="dropdown"
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="fa fa-plus-circle icon"></a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addmeeting?leadId=263185">
                                                <i class="fa fa-users"></i> Thêm cuộc gặp
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addphonecall?leadId=263185">
                                                <i class="fa fa-phone"></i> Thêm cuộc gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addcalendar?leadId=263185">
                                                <i class="fa fa-calendar"></i> Đặt lịch
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addrequestphonecall?leadId=263185">
                                                <i class="fa fa-phone-square"></i> Yêu cầu gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/contract/add?leadId=263185">
                                                <i class="fa fa-book"></i> Tạo hợp đồng
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/requirement/add?leadId=263185">
                                                <i class="fa fa-cog"></i> Thêm yêu cầu
                                            </a>
                                        </li>
                                        <li>
                                            <a class="editDescription" data-leadid="263185"
                                                data-description="Mỹ phẩm nguyenthicamtien0000@gmail.com Quận Gò Vấp Hồ Chí Minh Starter"
                                                href="javascript:;">
                                                <i class="fa fa-edit"></i> Sửa ghi chú
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div><a class="fa fa-users assignLead"
                                        title="Quản lí người phụ trách" data-id="263185"></a></div>
                                <div><a class="fa fa-heart selfAssign"
                                        title="Nhận chăm sóc thông tin" data-id="263185"></a></div>
                                <span data-id="263185" data-toggle="tooltip"
                                    data-title="Cập nhật Level khách hàng" style="cursor:pointer"
                                    class="updateOpportunityStatus icon fa fa-refresh text-success"></span>
                            </td>
                            <td>
                                <div class="item-block"><a
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="label btn-default crm-type">Thông tin</a></div>
                                <div class="line-break"></div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-arrow-right"></i></div>
                                    <div class="item-infor">Cá nhân</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor"><a
                                            href="https://erp.nhanh.vn/crm/lead/view?id=263185">Shop
                                            tiên tiên trùm sỉ lẻ</a></div>
                                </div>
                                <div class="opportunityStatus263185"></div>
                                <div class="item-block">
                                    <b>Nguồn: </b></div>
                                <div class="item-block">
                                    <b>Tham chiếu: </b></div>
                            </td>
                            <td class="col-assignedTo">
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Nhóm KD3_NgânTK"><i
                                        class="fa fa-flag-o"></i> Trần Kim Ngân</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Nhóm KD3_NgânTK"><i
                                        class="fa fa-flag-o"></i> Bùi Thị Bích Thuận</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Parttime - NgânTK"><i
                                        class="fa fa-flag-o"></i> Lý Bảo Dung</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Nhóm KD3_NgânTK"><i
                                        class="fa fa-flag-o"></i> Phạm Thị Chi</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Nhóm KD3_NgânTK"><i
                                        class="fa fa-flag-o"></i> Võ Thị Thu Sương</div>
                                <div title="Người tạo">
                                    <i class="fa fa-github-alt" data-toggle="tooltip"
                                        data-original-title="Ngày tạo: 2018-07-26 09:36:44 "></i>
                                    PHAN THỊ THU THẢO</div>
                            </td>
                            <td>
                                <ul class="td-history">
                                    <li class="last"><a class="text-info"
                                            href="https://erp.nhanh.vn/crm/activity/history?leadId=263185">Xem
                                            chi tiết 18 hành động</a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="colCheckbox"><input data-id="405988" class="cb leadCb"
                                    type="checkbox"></td>
                            <td class="colControls"><a data-toggle="tooltip"
                                    data-original-title="Ngày tạo:2020-07-11 10:35:09"
                                    href="https://erp.nhanh.vn/crm/lead/view?id=405988">405988</a>
                            </td>
                            <td class="colControls">
                                <div class="dropdown">
                                    <a data-toggle="dropdown"
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="fa fa-plus-circle icon"></a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addmeeting?leadId=405988">
                                                <i class="fa fa-users"></i> Thêm cuộc gặp
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addphonecall?leadId=405988">
                                                <i class="fa fa-phone"></i> Thêm cuộc gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addcalendar?leadId=405988">
                                                <i class="fa fa-calendar"></i> Đặt lịch
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addrequestphonecall?leadId=405988">
                                                <i class="fa fa-phone-square"></i> Yêu cầu gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/contract/add?leadId=405988">
                                                <i class="fa fa-book"></i> Tạo hợp đồng
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/requirement/add?leadId=405988">
                                                <i class="fa fa-cog"></i> Thêm yêu cầu
                                            </a>
                                        </li>
                                        <li>
                                            <a class="editDescription" data-leadid="405988"
                                                data-description="Mttplehoang232@gmail.com Huyện Vĩnh Cửu Đồng Nai Premium"
                                                href="javascript:;">
                                                <i class="fa fa-edit"></i> Sửa ghi chú
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div><a class="fa fa-users assignLead"
                                        title="Quản lí người phụ trách" data-id="405988"></a></div>
                                <div><a class="fa fa-heart selfAssign"
                                        title="Nhận chăm sóc thông tin" data-id="405988"></a></div>
                                <span data-id="405988" data-toggle="tooltip"
                                    data-title="Cập nhật Level khách hàng" style="cursor:pointer"
                                    class="updateOpportunityStatus icon fa fa-refresh text-success"></span>
                            </td>
                            <td>
                                <div class="item-block"><a
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="label btn-default crm-type">Thông tin</a></div>
                                <div class="line-break"></div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-arrow-right"></i></div>
                                    <div class="item-infor">Cá nhân</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor"><a
                                            href="https://erp.nhanh.vn/crm/lead/view?id=405988">Phương
                                            Anh</a></div>
                                </div>
                                <div class="opportunityStatus405988"></div>
                                <div class="item-block">
                                    <b>Nguồn: </b>Data bàn giao - Không có mã</div>
                                <div class="item-block">
                                    <b>Tham chiếu: </b></div>
                            </td>
                            <td class="col-assignedTo">
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Nhóm KD5_LiêmNT"><i
                                        class="fa fa-flag-o"></i> Nguyễn Thanh Liêm</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Nhóm KD5_LiêmNT"><i
                                        class="fa fa-flag-o"></i> Trần Thị Yến Phương</div>
                                <div title="Người tạo">
                                    <i class="fa fa-github-alt" data-toggle="tooltip"
                                        data-original-title="Ngày tạo: 2020-07-11 10:35:09 "></i>
                                    PHAN THỊ THU THẢO</div>
                            </td>
                            <td>
                                <ul class="td-history">
                                    <li class="last"><a class="text-info"
                                            href="https://erp.nhanh.vn/crm/activity/history?leadId=405988">Xem
                                            chi tiết 5 hành động</a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="colCheckbox"><input data-id="322050" class="cb leadCb"
                                    type="checkbox"></td>
                            <td class="colControls"><a data-toggle="tooltip"
                                    data-original-title="Ngày tạo:2019-05-28 10:23:32"
                                    href="https://erp.nhanh.vn/crm/lead/view?id=322050">322050</a>
                            </td>
                            <td class="colControls">
                                <div class="dropdown">
                                    <a data-toggle="dropdown"
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="fa fa-plus-circle icon"></a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addmeeting?leadId=322050">
                                                <i class="fa fa-users"></i> Thêm cuộc gặp
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addphonecall?leadId=322050">
                                                <i class="fa fa-phone"></i> Thêm cuộc gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addcalendar?leadId=322050">
                                                <i class="fa fa-calendar"></i> Đặt lịch
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addrequestphonecall?leadId=322050">
                                                <i class="fa fa-phone-square"></i> Yêu cầu gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/contract/add?leadId=322050">
                                                <i class="fa fa-book"></i> Tạo hợp đồng
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/requirement/add?leadId=322050">
                                                <i class="fa fa-cog"></i> Thêm yêu cầu
                                            </a>
                                        </li>
                                        <li>
                                            <a class="editDescription" data-leadid="322050"
                                                data-description="Tạp hóa, siêu thị mini maihhvi@gmail.com Thành phố Thủ Dầu Một Bình Dương Starter"
                                                href="javascript:;">
                                                <i class="fa fa-edit"></i> Sửa ghi chú
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div><a class="fa fa-users assignLead"
                                        title="Quản lí người phụ trách" data-id="322050"></a></div>
                                <div><a class="fa fa-heart selfAssign"
                                        title="Nhận chăm sóc thông tin" data-id="322050"></a></div>
                                <span data-id="322050" data-toggle="tooltip"
                                    data-title="Cập nhật Level khách hàng" style="cursor:pointer"
                                    class="updateOpportunityStatus icon fa fa-refresh text-success"></span>
                            </td>
                            <td>
                                <div class="item-block"><a
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="label btn-default crm-type">Thông tin</a></div>
                                <div class="line-break"></div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-arrow-right"></i></div>
                                    <div class="item-infor">Cá nhân</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor"><a
                                            href="https://erp.nhanh.vn/crm/lead/view?id=322050">Ko.or</a>
                                    </div>
                                </div>
                                <div class="opportunityStatus322050"></div>
                                <div class="item-block">
                                    <b>Nguồn: </b>Data bàn giao - Không có mã</div>
                                <div class="item-block">
                                    <b>Tham chiếu: </b></div>
                            </td>
                            <td class="col-assignedTo">
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Nhóm KD3_NgânTK"><i
                                        class="fa fa-flag-o"></i> Trần Kim Ngân</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Parttime - NgânTK"><i
                                        class="fa fa-flag-o"></i> Lý Bảo Dung</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Nhóm KD3_NgânTK"><i
                                        class="fa fa-flag-o"></i> Võ Thị Thu Sương</div>
                                <div title="Người tạo">
                                    <i class="fa fa-github-alt" data-toggle="tooltip"
                                        data-original-title="Ngày tạo: 2019-05-28 10:23:32 "></i>
                                    PHAN THỊ THU THẢO</div>
                            </td>
                            <td>
                                <ul class="td-history">
                                    <li class="last"><a class="text-info"
                                            href="https://erp.nhanh.vn/crm/activity/history?leadId=322050">Xem
                                            chi tiết 14 hành động</a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="colCheckbox"><input data-id="374608" class="cb leadCb"
                                    type="checkbox"></td>
                            <td class="colControls"><a data-toggle="tooltip"
                                    data-original-title="Ngày tạo:2020-02-19 15:46:05"
                                    href="https://erp.nhanh.vn/crm/account/view?id=20581">374608</a>
                            </td>
                            <td class="colControls">
                                <div class="dropdown">
                                    <a data-toggle="dropdown"
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="fa fa-plus-circle icon"></a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addmeeting?accountId=20581">
                                                <i class="fa fa-users"></i> Thêm cuộc gặp
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addphonecall?accountId=20581">
                                                <i class="fa fa-phone"></i> Thêm cuộc gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addcalendar?accountId=20581">
                                                <i class="fa fa-calendar"></i> Đặt lịch
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addrequestphonecall?accountId=20581">
                                                <i class="fa fa-phone-square"></i> Yêu cầu gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/contract/add?accountId=20581">
                                                <i class="fa fa-book"></i> Tạo hợp đồng
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/adddeploy?accountId=20581">
                                                <i class="fa fa-cogs"></i> Thêm triển khai
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/requirement/add?accountId=20581">
                                                <i class="fa fa-cog"></i> Thêm yêu cầu
                                            </a>
                                        </li>
                                        <li>
                                            <a class="editDescription" data-leadid="374608"
                                                data-description="Khách chuẩn bị bán on, liên hệ tư vấn gói cs fanpage"
                                                href="javascript:;">
                                                <i class="fa fa-edit"></i> Sửa ghi chú
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div><a class="fa fa-users assignLead"
                                        title="Quản lí người phụ trách" data-id="374608"></a></div>
                                <div><a class="fa fa-heart selfAssign"
                                        title="Nhận chăm sóc thông tin" data-id="374608"></a></div>
                                <span data-id="374608" data-toggle="tooltip"
                                    data-title="Cập nhật Level khách hàng" style="cursor:pointer"
                                    class="updateOpportunityStatus icon fa fa-refresh text-success"></span>
                            </td>
                            <td>
                                <div class="item-block"><a
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="label btn-info crm-type">Khách hàng</a></div>
                                <div class="line-break"></div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-arrow-right"></i></div>
                                    <div class="item-infor">Cá nhân</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor"><a
                                            href="https://erp.nhanh.vn/crm/account/view?id=20581">Anh
                                            Tường</a></div>
                                </div>
                                <div class="opportunityStatus374608"></div>
                                <div class="item-block">
                                    <b>Nguồn: </b>Data bàn giao - Không có mã</div>
                                <div class="item-block">
                                    <b>Tham chiếu: </b></div>
                            </td>
                            <td class="col-assignedTo">
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Marketing"><i
                                        class="fa fa-flag-o"></i> Hồ Ngọc Nam</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Phòng KD8_LâmNV"><i
                                        class="fa fa-flag-o"></i> Nguyễn Khánh Trung</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Phòng KD8_LâmNV"><i
                                        class="fa fa-flag-o"></i> Nguyễn Phương Mai</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Phòng KD8_LâmNV"><i
                                        class="fa fa-cogs"></i> Nguyễn Phương Mai</div>
                                <div title="Người tạo">
                                    <i class="fa fa-github-alt" data-toggle="tooltip"
                                        data-original-title="Ngày tạo: 2020-02-19 15:46:05 "></i>
                                    PHAN THỊ THU THẢO</div>
                            </td>
                            <td>
                                <p style="font-style: italic;" data-toggle="tooltip"
                                    data-title="hợp đồng công ty Nhanh.vn">- Số hợp đồng:3</p>
                                <p style="font-style: italic;"> - Doanh thu tạo: <b>24.900.000</b>
                                </p>
                                <p style="font-style: italic;"> - Đã thanh toán: <b
                                        class="text-success">24.900.000</b></p>
                                <p style="font-style: italic;"> - Ngày tạo hợp đồng đầu tiên:
                                    <b>24/02/2020</b></p>
                                <p style="font-style: italic;"> - Thời gian chốt: <b>5 ngày</b></p>
                                <p style="font-style: italic;"> - Sản phẩm: <br><b
                                        class="text-success">+ Chăm sóc fanpage - Gói VIP 1<br>+ Gói
                                        Website dài hạn<br>+ Thiết kế thêm tính năng cho website:
                                        bảo mật https cho website</b></p>
                                <ul class="td-history">
                                    <li class="last"><a class="text-info"
                                            href="https://erp.nhanh.vn/crm/activity/history?accountId=20581">Xem
                                            chi tiết 44 hành động</a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="colCheckbox"><input data-id="321747" class="cb leadCb"
                                    type="checkbox"></td>
                            <td class="colControls"><a data-toggle="tooltip"
                                    data-original-title="Ngày tạo:2019-05-27 10:38:10"
                                    href="https://erp.nhanh.vn/crm/lead/view?id=321747">321747</a>
                            </td>
                            <td class="colControls">
                                <div class="dropdown">
                                    <a data-toggle="dropdown"
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="fa fa-plus-circle icon"></a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addmeeting?leadId=321747">
                                                <i class="fa fa-users"></i> Thêm cuộc gặp
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addphonecall?leadId=321747">
                                                <i class="fa fa-phone"></i> Thêm cuộc gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addcalendar?leadId=321747">
                                                <i class="fa fa-calendar"></i> Đặt lịch
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addrequestphonecall?leadId=321747">
                                                <i class="fa fa-phone-square"></i> Yêu cầu gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/contract/add?leadId=321747">
                                                <i class="fa fa-book"></i> Tạo hợp đồng
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/requirement/add?leadId=321747">
                                                <i class="fa fa-cog"></i> Thêm yêu cầu
                                            </a>
                                        </li>
                                        <li>
                                            <a class="editDescription" data-leadid="321747"
                                                data-description="Mỹ phẩm huathanhdiem1988@gmail.com Quận Bình Tân Hồ Chí Minh Starter"
                                                href="javascript:;">
                                                <i class="fa fa-edit"></i> Sửa ghi chú
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div><a class="fa fa-users assignLead"
                                        title="Quản lí người phụ trách" data-id="321747"></a></div>
                                <div><a class="fa fa-heart selfAssign"
                                        title="Nhận chăm sóc thông tin" data-id="321747"></a></div>
                                <span data-id="321747" data-toggle="tooltip"
                                    data-title="Cập nhật Level khách hàng" style="cursor:pointer"
                                    class="updateOpportunityStatus icon fa fa-refresh text-success"></span>
                            </td>
                            <td>
                                <div class="item-block"><a
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="label btn-default crm-type">Thông tin</a></div>
                                <div class="line-break"></div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-arrow-right"></i></div>
                                    <div class="item-infor">Cá nhân</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor"><a
                                            href="https://erp.nhanh.vn/crm/lead/view?id=321747">Cà
                                            rốt</a></div>
                                </div>
                                <div class="opportunityStatus321747"></div>
                                <div class="item-block">
                                    <b>Nguồn: </b>Data bàn giao - Không có mã</div>
                                <div class="item-block">
                                    <b>Tham chiếu: </b></div>
                            </td>
                            <td class="col-assignedTo">
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Nhóm KD3_NgânTK"><i
                                        class="fa fa-flag-o"></i> Trần Kim Ngân</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Parttime - NgânTK"><i
                                        class="fa fa-flag-o"></i> Lý Bảo Dung</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Nhóm KD3_NgânTK"><i
                                        class="fa fa-flag-o"></i> Võ Thị Thu Sương</div>
                                <div title="Người tạo">
                                    <i class="fa fa-github-alt" data-toggle="tooltip"
                                        data-original-title="Ngày tạo: 2019-05-27 10:38:10 "></i>
                                    PHAN THỊ THU THẢO</div>
                            </td>
                            <td>
                                <ul class="td-history">
                                    <li class="last"><a class="text-info"
                                            href="https://erp.nhanh.vn/crm/activity/history?leadId=321747">Xem
                                            chi tiết 12 hành động</a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="colCheckbox"><input data-id="199326" class="cb leadCb"
                                    type="checkbox"></td>
                            <td class="colControls"><a data-toggle="tooltip"
                                    data-original-title="Ngày tạo:2017-07-25 11:16:06"
                                    href="https://erp.nhanh.vn/crm/lead/view?id=199326">199326</a>
                            </td>
                            <td class="colControls">
                                <div class="dropdown">
                                    <a data-toggle="dropdown"
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="fa fa-plus-circle icon"></a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addmeeting?leadId=199326">
                                                <i class="fa fa-users"></i> Thêm cuộc gặp
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addphonecall?leadId=199326">
                                                <i class="fa fa-phone"></i> Thêm cuộc gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addcalendar?leadId=199326">
                                                <i class="fa fa-calendar"></i> Đặt lịch
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addrequestphonecall?leadId=199326">
                                                <i class="fa fa-phone-square"></i> Yêu cầu gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/contract/add?leadId=199326">
                                                <i class="fa fa-book"></i> Tạo hợp đồng
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/requirement/add?leadId=199326">
                                                <i class="fa fa-cog"></i> Thêm yêu cầu
                                            </a>
                                        </li>
                                        <li>
                                            <a class="editDescription" data-leadid="199326"
                                                data-description="Quan tâm PMBH, kd nội thất ở Bình Dương"
                                                href="javascript:;">
                                                <i class="fa fa-edit"></i> Sửa ghi chú
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div><a class="fa fa-users assignLead"
                                        title="Quản lí người phụ trách" data-id="199326"></a></div>
                                <div><a class="fa fa-heart selfAssign"
                                        title="Nhận chăm sóc thông tin" data-id="199326"></a></div>
                                <span data-id="199326" data-toggle="tooltip"
                                    data-title="Cập nhật Level khách hàng" style="cursor:pointer"
                                    class="updateOpportunityStatus icon fa fa-refresh text-success"></span>
                            </td>
                            <td>
                                <div class="item-block"><a
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="label btn-default crm-type">Thông tin</a></div>
                                <div class="line-break"></div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-building-o"></i></div>
                                    <div class="item-infor">Công ty</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor"><a
                                            href="https://erp.nhanh.vn/crm/lead/view?id=199326">Tô
                                            Tấn Sĩ</a></div>
                                </div>
                                <div class="opportunityStatus199326"></div>
                                <div class="item-block">
                                    <b>Nguồn: </b>Data bàn giao - Được giới thiệu</div>
                                <div class="item-block">
                                    <b>Tham chiếu: </b></div>
                            </td>
                            <td class="col-assignedTo">
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhóm KD 7"><i
                                        class="fa fa-flag-o"></i> Đỗ Hoàng Phúc</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Phòng KD1_NgânHTM"><i
                                        class="fa fa-flag-o"></i> Lê Ngọc Khánh</div>
                                <div title="Người tạo">
                                    <i class="fa fa-github-alt" data-toggle="tooltip"
                                        data-original-title="Ngày tạo: 2017-07-25 11:16:06 "></i> Đỗ
                                    Hoàng Phúc</div>
                            </td>
                            <td>
                                <p style="font-style: italic;"> - Doanh thu tạo: <b>7.920.000</b>
                                </p>
                                <p style="font-style: italic;"> - Ngày tạo hợp đồng đầu tiên:
                                    <b>25/07/2017</b></p>
                                <p style="font-style: italic;"> - Thời gian chốt: <b>0 ngày</b></p>
                                <ul class="td-history">
                                    <li class="last"><a class="text-info"
                                            href="https://erp.nhanh.vn/crm/activity/history?leadId=199326">Xem
                                            chi tiết 7 hành động</a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="colCheckbox"><input data-id="410228" class="cb leadCb"
                                    type="checkbox"></td>
                            <td class="colControls"><a data-toggle="tooltip"
                                    data-original-title="Ngày tạo:2020-07-31 14:47:53"
                                    href="https://erp.nhanh.vn/crm/lead/view?id=410228">410228</a>
                            </td>
                            <td class="colControls">
                                <div class="dropdown">
                                    <a data-toggle="dropdown"
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="fa fa-plus-circle icon"></a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addmeeting?leadId=410228">
                                                <i class="fa fa-users"></i> Thêm cuộc gặp
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addphonecall?leadId=410228">
                                                <i class="fa fa-phone"></i> Thêm cuộc gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addcalendar?leadId=410228">
                                                <i class="fa fa-calendar"></i> Đặt lịch
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addrequestphonecall?leadId=410228">
                                                <i class="fa fa-phone-square"></i> Yêu cầu gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/contract/add?leadId=410228">
                                                <i class="fa fa-book"></i> Tạo hợp đồng
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/requirement/add?leadId=410228">
                                                <i class="fa fa-cog"></i> Thêm yêu cầu
                                            </a>
                                        </li>
                                        <li>
                                            <a class="editDescription" data-leadid="410228"
                                                data-description="hoangvusp@gmail.com SHIPPINGVõ Anh Tuấn Starter Điện thoại, điện máy Huyện Đức Linh Bình Thuận cskh chưa gọi đc, kd liên hệ lại"
                                                href="javascript:;">
                                                <i class="fa fa-edit"></i> Sửa ghi chú
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div><a class="fa fa-users assignLead"
                                        title="Quản lí người phụ trách" data-id="410228"></a></div>
                                <div><a class="fa fa-heart selfAssign"
                                        title="Nhận chăm sóc thông tin" data-id="410228"></a></div>
                                <span data-id="410228" data-toggle="tooltip"
                                    data-title="Cập nhật Level khách hàng" style="cursor:pointer"
                                    class="updateOpportunityStatus icon fa fa-refresh text-success"></span>
                            </td>
                            <td>
                                <div class="item-block"><a
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="label btn-default crm-type">Thông tin</a></div>
                                <div class="line-break"></div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-arrow-right"></i></div>
                                    <div class="item-infor">Cá nhân</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor"><a
                                            href="https://erp.nhanh.vn/crm/lead/view?id=410228">Hoàng
                                            Vũ PC</a></div>
                                </div>
                                <div class="opportunityStatus410228"></div>
                                <div class="item-block">
                                    <b>Nguồn: </b>Data bàn giao - Không có mã</div>
                                <div class="item-block">
                                    <b>Tham chiếu: </b></div>
                            </td>
                            <td class="col-assignedTo">
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Nhóm KD3_NgânTK"><i
                                        class="fa fa-flag-o"></i> Trần Kim Ngân</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Nhóm KD3_NgânTK"><i
                                        class="fa fa-flag-o"></i> Võ Thị Thu Sương</div>
                                <div title="Người tạo">
                                    <i class="fa fa-github-alt" data-toggle="tooltip"
                                        data-original-title="Ngày tạo: 2020-07-31 14:47:53 "></i>
                                    PHAN THỊ THU THẢO</div>
                            </td>
                            <td>
                                <ul class="td-history">
                                    <li class="last"><a class="text-info"
                                            href="https://erp.nhanh.vn/crm/activity/history?leadId=410228">Xem
                                            chi tiết 4 hành động</a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="colCheckbox"><input data-id="380470" class="cb leadCb"
                                    type="checkbox"></td>
                            <td class="colControls"><a data-toggle="tooltip"
                                    data-original-title="Ngày tạo:2020-03-23 15:17:08"
                                    href="https://erp.nhanh.vn/crm/lead/view?id=380470">380470</a>
                            </td>
                            <td class="colControls">
                                <div class="dropdown">
                                    <a data-toggle="dropdown"
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="fa fa-plus-circle icon"></a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addmeeting?leadId=380470">
                                                <i class="fa fa-users"></i> Thêm cuộc gặp
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addphonecall?leadId=380470">
                                                <i class="fa fa-phone"></i> Thêm cuộc gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addcalendar?leadId=380470">
                                                <i class="fa fa-calendar"></i> Đặt lịch
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addrequestphonecall?leadId=380470">
                                                <i class="fa fa-phone-square"></i> Yêu cầu gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/contract/add?leadId=380470">
                                                <i class="fa fa-book"></i> Tạo hợp đồng
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/requirement/add?leadId=380470">
                                                <i class="fa fa-cog"></i> Thêm yêu cầu
                                            </a>
                                        </li>
                                        <li>
                                            <a class="editDescription" data-leadid="380470"
                                                data-description="quan tâm pmbh kinh doanh dầu tràm"
                                                href="javascript:;">
                                                <i class="fa fa-edit"></i> Sửa ghi chú
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div><a class="fa fa-users assignLead"
                                        title="Quản lí người phụ trách" data-id="380470"></a></div>
                                <div><a class="fa fa-heart selfAssign"
                                        title="Nhận chăm sóc thông tin" data-id="380470"></a></div>
                                <span data-id="380470" data-toggle="tooltip"
                                    data-title="Cập nhật Level khách hàng" style="cursor:pointer"
                                    class="updateOpportunityStatus icon fa fa-refresh text-success"></span>
                            </td>
                            <td>
                                <div class="item-block"><a
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="label btn-default crm-type">Thông tin</a></div>
                                <div class="line-break"></div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-arrow-right"></i></div>
                                    <div class="item-infor">Cá nhân</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor"><a
                                            href="https://erp.nhanh.vn/crm/lead/view?id=380470">chị
                                            Linh</a></div>
                                </div>
                                <div class="opportunityStatus380470"></div>
                                <div class="item-block">
                                    <b>Nguồn: </b>Data bàn giao - FB ADS</div>
                                <div class="item-block">
                                    <b>Tham chiếu: </b></div>
                            </td>
                            <td class="col-assignedTo">
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Nhóm KD5_LiêmNT"><i
                                        class="fa fa-flag-o"></i> Trần Thị Yến Phương</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Sale Marketing"><i
                                        class="fa fa-flag-o"></i> Nguyễn Thị Phương Thảo</div>
                                <div title="Người tạo">
                                    <i class="fa fa-github-alt" data-toggle="tooltip"
                                        data-original-title="Ngày tạo: 2020-03-23 15:17:08 "></i> Lê
                                    Hải Anh</div>
                            </td>
                            <td>
                                <ul class="td-history">
                                    <li class="last"><a class="text-info"
                                            href="https://erp.nhanh.vn/crm/activity/history?leadId=380470">Xem
                                            chi tiết 4 hành động</a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="colCheckbox"><input data-id="397417" class="cb leadCb"
                                    type="checkbox"></td>
                            <td class="colControls"><a data-toggle="tooltip"
                                    data-original-title="Ngày tạo:2020-06-04 17:07:01"
                                    href="https://erp.nhanh.vn/crm/lead/view?id=397417">397417</a>
                            </td>
                            <td class="colControls">
                                <div class="dropdown">
                                    <a data-toggle="dropdown"
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="fa fa-plus-circle icon"></a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addmeeting?leadId=397417">
                                                <i class="fa fa-users"></i> Thêm cuộc gặp
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addphonecall?leadId=397417">
                                                <i class="fa fa-phone"></i> Thêm cuộc gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addcalendar?leadId=397417">
                                                <i class="fa fa-calendar"></i> Đặt lịch
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addrequestphonecall?leadId=397417">
                                                <i class="fa fa-phone-square"></i> Yêu cầu gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/contract/add?leadId=397417">
                                                <i class="fa fa-book"></i> Tạo hợp đồng
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/requirement/add?leadId=397417">
                                                <i class="fa fa-cog"></i> Thêm yêu cầu
                                            </a>
                                        </li>
                                        <li>
                                            <a class="editDescription" data-leadid="397417"
                                                data-description="Mình đang có nhu cầu đổi từ Kiotviet qua, cần tìm hiểu một số tính năng bên Nhanh Bảo sale gửi tin nhắn vào zalo 0973392977 Để trao đổi nhé"
                                                href="javascript:;">
                                                <i class="fa fa-edit"></i> Sửa ghi chú
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div><a class="fa fa-users assignLead"
                                        title="Quản lí người phụ trách" data-id="397417"></a></div>
                                <div><a class="fa fa-heart selfAssign"
                                        title="Nhận chăm sóc thông tin" data-id="397417"></a></div>
                                <span data-id="397417" data-toggle="tooltip"
                                    data-title="Cập nhật Level khách hàng" style="cursor:pointer"
                                    class="updateOpportunityStatus icon fa fa-refresh text-success"></span>
                            </td>
                            <td>
                                <div class="item-block"><a
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="label btn-default crm-type">Thông tin</a></div>
                                <div class="line-break"></div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-arrow-right"></i></div>
                                    <div class="item-infor">Cá nhân</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor"><a
                                            href="https://erp.nhanh.vn/crm/lead/view?id=397417">Harris
                                            Nguyen</a></div>
                                </div>
                                <div class="opportunityStatus397417"></div>
                                <div class="item-block">
                                    <b>Nguồn: </b>Data bàn giao- Hotline</div>
                                <div class="item-block">
                                    <b>Tham chiếu: </b></div>
                            </td>
                            <td class="col-assignedTo">
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Phòng KD8_LâmNV"><i
                                        class="fa fa-flag-o"></i> Hồ Tấn Hải</div>
                                <div title="Người tạo">
                                    <i class="fa fa-github-alt" data-toggle="tooltip"
                                        data-original-title="Ngày tạo: 2020-06-04 17:07:01 "></i>
                                    PHAN THỊ THU THẢO</div>
                            </td>
                            <td>
                                <ul class="td-history">
                                    <li class="last"><a class="text-info"
                                            href="https://erp.nhanh.vn/crm/activity/history?leadId=397417">Xem
                                            chi tiết 32 hành động</a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="colCheckbox"><input data-id="326276" class="cb leadCb"
                                    type="checkbox"></td>
                            <td class="colControls"><a data-toggle="tooltip"
                                    data-original-title="Ngày tạo:2019-06-16 10:01:10"
                                    href="https://erp.nhanh.vn/crm/account/view?id=18246">326276</a>
                            </td>
                            <td class="colControls">
                                <div class="dropdown">
                                    <a data-toggle="dropdown"
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="fa fa-plus-circle icon"></a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addmeeting?accountId=18246">
                                                <i class="fa fa-users"></i> Thêm cuộc gặp
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addphonecall?accountId=18246">
                                                <i class="fa fa-phone"></i> Thêm cuộc gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addcalendar?accountId=18246">
                                                <i class="fa fa-calendar"></i> Đặt lịch
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addrequestphonecall?accountId=18246">
                                                <i class="fa fa-phone-square"></i> Yêu cầu gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/contract/add?accountId=18246">
                                                <i class="fa fa-book"></i> Tạo hợp đồng
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/adddeploy?accountId=18246">
                                                <i class="fa fa-cogs"></i> Thêm triển khai
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/requirement/add?accountId=18246">
                                                <i class="fa fa-cog"></i> Thêm yêu cầu
                                            </a>
                                        </li>
                                        <li>
                                            <a class="editDescription" data-leadid="326276"
                                                data-description="quan tâm phần mềm bán hàng , nguồn fanpage"
                                                href="javascript:;">
                                                <i class="fa fa-edit"></i> Sửa ghi chú
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div><a class="fa fa-users assignLead"
                                        title="Quản lí người phụ trách" data-id="326276"></a></div>
                                <div><a class="fa fa-heart selfAssign"
                                        title="Nhận chăm sóc thông tin" data-id="326276"></a></div>
                                <span data-id="326276" data-toggle="tooltip"
                                    data-title="Cập nhật Level khách hàng" style="cursor:pointer"
                                    class="updateOpportunityStatus icon fa fa-refresh text-success"></span>
                            </td>
                            <td>
                                <div class="item-block"><a
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="label btn-info crm-type">Khách hàng</a></div>
                                <div class="line-break"></div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-arrow-right"></i></div>
                                    <div class="item-infor">Cá nhân</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor"><a
                                            href="https://erp.nhanh.vn/crm/account/view?id=18246">Tạ
                                            Quốc Trung</a></div>
                                </div>
                                <div class="opportunityStatus326276"></div>
                                <div class="item-block">
                                    <b>Nguồn: </b>Data bàn giao - SEO</div>
                                <div class="item-block">
                                    <b>Tham chiếu: </b></div>
                            </td>
                            <td class="col-assignedTo">
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Phòng KD8_LâmNV"><i
                                        class="fa fa-flag-o"></i> Đỗ Ngọc Phương Linh</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Phòng KD8_LâmNV"><i
                                        class="fa fa-flag-o"></i> Hồ Tấn Hải</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Phòng KD8_LâmNV"><i
                                        class="fa fa-cogs"></i> Hồ Tấn Hải</div>
                                <div title="Người tạo">
                                    <i class="fa fa-github-alt" data-toggle="tooltip"
                                        data-original-title="Ngày tạo: 2019-06-16 10:01:10 "></i>
                                    Nguyễn Thị Hiền</div>
                            </td>
                            <td>
                                <p style="font-style: italic;" data-toggle="tooltip"
                                    data-title="hợp đồng công ty Nhanh.vn">- Số hợp đồng:1</p>
                                <p style="font-style: italic;"> - Doanh thu tạo: <b>12.000.000</b>
                                </p>
                                <p style="font-style: italic;"> - Đã thanh toán: <b
                                        class="text-success">12.000.000</b></p>
                                <p style="font-style: italic;"> - Ngày tạo hợp đồng đầu tiên:
                                    <b>20/06/2019</b></p>
                                <p style="font-style: italic;"> - Thời gian chốt: <b>4 ngày</b></p>
                                <p style="font-style: italic;"> - Sản phẩm: <br><b
                                        class="text-success">+ Gói Premium - QLBH<br>+ Gói Phần mềm
                                        quản lý fanpage<br>+ Gói phần mềm tích hợp API sàn TMĐT</b>
                                </p>
                                <ul class="td-history">
                                    <li class="last"><a class="text-info"
                                            href="https://erp.nhanh.vn/crm/activity/history?accountId=18246">Xem
                                            chi tiết 25 hành động</a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="colCheckbox"><input data-id="410130" class="cb leadCb"
                                    type="checkbox"></td>
                            <td class="colControls"><a data-toggle="tooltip"
                                    data-original-title="Ngày tạo:2020-07-31 10:20:18"
                                    href="https://erp.nhanh.vn/crm/lead/view?id=410130">410130</a>
                            </td>
                            <td class="colControls">
                                <div class="dropdown">
                                    <a data-toggle="dropdown"
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="fa fa-plus-circle icon"></a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addmeeting?leadId=410130">
                                                <i class="fa fa-users"></i> Thêm cuộc gặp
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addphonecall?leadId=410130">
                                                <i class="fa fa-phone"></i> Thêm cuộc gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addcalendar?leadId=410130">
                                                <i class="fa fa-calendar"></i> Đặt lịch
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addrequestphonecall?leadId=410130">
                                                <i class="fa fa-phone-square"></i> Yêu cầu gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/contract/add?leadId=410130">
                                                <i class="fa fa-book"></i> Tạo hợp đồng
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/requirement/add?leadId=410130">
                                                <i class="fa fa-cog"></i> Thêm yêu cầu
                                            </a>
                                        </li>
                                        <li>
                                            <a class="editDescription" data-leadid="410130"
                                                data-description="QLBH Trần Đức Kiên Starter Điện thoại, điện máy Huyện Long Thành Đồng Nai quan tâm pmbh"
                                                href="javascript:;">
                                                <i class="fa fa-edit"></i> Sửa ghi chú
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div><a class="fa fa-users assignLead"
                                        title="Quản lí người phụ trách" data-id="410130"></a></div>
                                <div><a class="fa fa-heart selfAssign"
                                        title="Nhận chăm sóc thông tin" data-id="410130"></a></div>
                                <span data-id="410130" data-toggle="tooltip"
                                    data-title="Cập nhật Level khách hàng" style="cursor:pointer"
                                    class="updateOpportunityStatus icon fa fa-refresh text-success"></span>
                            </td>
                            <td>
                                <div class="item-block"><a
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="label btn-default crm-type">Thông tin</a></div>
                                <div class="line-break"></div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-arrow-right"></i></div>
                                    <div class="item-infor">Cá nhân</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor"><a
                                            href="https://erp.nhanh.vn/crm/lead/view?id=410130">Shop
                                            Phụ Kiện Giang Mi</a></div>
                                </div>
                                <div class="opportunityStatus410130"></div>
                                <div class="item-block">
                                    <b>Nguồn: </b>Data bàn giao - Không có mã</div>
                                <div class="item-block">
                                    <b>Tham chiếu: </b></div>
                            </td>
                            <td class="col-assignedTo">
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Nhóm KD4_ThịnhNQG"><i
                                        class="fa fa-flag-o"></i> Nguyễn Quốc Gia Thịnh</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Nhóm KD4_ThịnhNQG"><i
                                        class="fa fa-flag-o"></i> Bùi Gia Bảo</div>
                                <div title="Người tạo">
                                    <i class="fa fa-github-alt" data-toggle="tooltip"
                                        data-original-title="Ngày tạo: 2020-07-31 10:20:18 "></i>
                                    Nguyễn Thị Thu Hằng</div>
                            </td>
                            <td>
                                <ul class="td-history">
                                    <li class="last"><a class="text-info"
                                            href="https://erp.nhanh.vn/crm/activity/history?leadId=410130">Xem
                                            chi tiết 2 hành động</a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="colCheckbox"><input data-id="32063" class="cb leadCb"
                                    type="checkbox"></td>
                            <td class="colControls"><a data-toggle="tooltip"
                                    data-original-title="Ngày tạo:2015-05-07 14:43:11"
                                    href="https://erp.nhanh.vn/crm/account/view?id=21507">32063</a>
                            </td>
                            <td class="colControls">
                                <div class="dropdown">
                                    <a data-toggle="dropdown"
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="fa fa-plus-circle icon"></a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addmeeting?accountId=21507">
                                                <i class="fa fa-users"></i> Thêm cuộc gặp
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addphonecall?accountId=21507">
                                                <i class="fa fa-phone"></i> Thêm cuộc gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addcalendar?accountId=21507">
                                                <i class="fa fa-calendar"></i> Đặt lịch
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addrequestphonecall?accountId=21507">
                                                <i class="fa fa-phone-square"></i> Yêu cầu gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/contract/add?accountId=21507">
                                                <i class="fa fa-book"></i> Tạo hợp đồng
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/adddeploy?accountId=21507">
                                                <i class="fa fa-cogs"></i> Thêm triển khai
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/requirement/add?accountId=21507">
                                                <i class="fa fa-cog"></i> Thêm yêu cầu
                                            </a>
                                        </li>
                                        <li>
                                            <a class="editDescription" data-leadid="32063"
                                                data-description="KH này đã kí HĐ."
                                                href="javascript:;">
                                                <i class="fa fa-edit"></i> Sửa ghi chú
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div><a class="fa fa-users assignLead"
                                        title="Quản lí người phụ trách" data-id="32063"></a></div>
                                <div><a class="fa fa-heart selfAssign"
                                        title="Nhận chăm sóc thông tin" data-id="32063"></a></div>
                                <span data-id="32063" data-toggle="tooltip"
                                    data-title="Cập nhật Level khách hàng" style="cursor:pointer"
                                    class="updateOpportunityStatus icon fa fa-refresh text-success"></span>
                            </td>
                            <td>
                                <div class="item-block"><a
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="label btn-info crm-type">Khách hàng</a></div>
                                <div class="line-break"></div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-arrow-right"></i></div>
                                    <div class="item-infor">Cá nhân</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor"><a
                                            href="https://erp.nhanh.vn/crm/account/view?id=21507">shop
                                            giày da cao cấp AtTom</a></div>
                                </div>
                                <div class="opportunityStatus32063"></div>
                                <div class="item-block">
                                    <b>Nguồn: </b>Data bàn giao- Hotline</div>
                                <div class="item-block">
                                    <b>Tham chiếu: </b>https://www.facebook.com/GiayDaAttom/</div>
                            </td>
                            <td class="col-assignedTo">
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Đa dịch vụ VNP - KD2 (LâmVN)"><i
                                        class="fa fa-flag-o"></i> Nguyễn Khương Duy</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhóm KD 24"><i
                                        class="fa fa-flag-o"></i> Nguyễn Công Tuấn</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Phòng KD1_NgânHTM"><i
                                        class="fa fa-flag-o"></i> Nguyễn Thị Tươi</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Phòng KD1_NgânHTM"><i
                                        class="fa fa-flag-o"></i> Phạm Thị Phương Thúy</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Dự án kinh doanh Wesave"><i
                                        class="fa fa-flag-o"></i> Cao Thị Cẩm Thi</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Sale Marketing"><i
                                        class="fa fa-flag-o"></i> Trần Minh Thu</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Phòng KD8_LâmNV"><i
                                        class="fa fa-flag-o"></i> Nguyễn Khánh Trung</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Phòng KD8_LâmNV"><i
                                        class="fa fa-flag-o"></i> Hồ Tấn Hải</div>
                                <div title="Người tạo">
                                    <i class="fa fa-github-alt" data-toggle="tooltip"
                                        data-original-title="Ngày tạo: 2015-05-07 14:43:11 "></i>
                                    Ngô Trần Thanh Hương</div>
                            </td>
                            <td>
                                <p style="font-style: italic;" data-toggle="tooltip"
                                    data-title="hợp đồng công ty Nhanh.vn">- Số hợp đồng:2</p>
                                <p style="font-style: italic;"> - Doanh thu tạo: <b>15.600.000</b>
                                </p>
                                <p style="font-style: italic;"> - Đã thanh toán: <b
                                        class="text-success">15.600.000</b></p>
                                <p style="font-style: italic;"> - Ngày tạo hợp đồng đầu tiên:
                                    <b>11/06/2020</b></p>
                                <p style="font-style: italic;"> - Thời gian chốt: <b>4 ngày</b></p>
                                <p style="font-style: italic;"> - Sản phẩm: <br><b
                                        class="text-success">+ Gói Premium - QLBH<br>+ Gói phí
                                        tích hợp API<br>+ Gói Combo 5 gian hàng<br>+ Gói Phần mềm
                                        quản lý fanpage<br>+ Gói Kho tổng (chỉ xuất nhập kho, không
                                        bán hàng)</b></p>
                                <ul class="td-history">
                                    <li class="last"><a class="text-info"
                                            href="https://erp.nhanh.vn/crm/activity/history?accountId=21507">Xem
                                            chi tiết 48 hành động</a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="colCheckbox"><input data-id="343677" class="cb leadCb"
                                    type="checkbox"></td>
                            <td class="colControls"><a data-toggle="tooltip"
                                    data-original-title="Ngày tạo:2019-08-22 16:57:46"
                                    href="https://erp.nhanh.vn/crm/account/view?id=19098">343677</a>
                            </td>
                            <td class="colControls">
                                <div class="dropdown">
                                    <a data-toggle="dropdown"
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="fa fa-plus-circle icon"></a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addmeeting?accountId=19098">
                                                <i class="fa fa-users"></i> Thêm cuộc gặp
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addphonecall?accountId=19098">
                                                <i class="fa fa-phone"></i> Thêm cuộc gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addcalendar?accountId=19098">
                                                <i class="fa fa-calendar"></i> Đặt lịch
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addrequestphonecall?accountId=19098">
                                                <i class="fa fa-phone-square"></i> Yêu cầu gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/contract/add?accountId=19098">
                                                <i class="fa fa-book"></i> Tạo hợp đồng
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/adddeploy?accountId=19098">
                                                <i class="fa fa-cogs"></i> Thêm triển khai
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/requirement/add?accountId=19098">
                                                <i class="fa fa-cog"></i> Thêm yêu cầu
                                            </a>
                                        </li>
                                        <li>
                                            <a class="editDescription" data-leadid="343677"
                                                data-description="quan tâm dùng thử vpage"
                                                href="javascript:;">
                                                <i class="fa fa-edit"></i> Sửa ghi chú
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div><a class="fa fa-users assignLead"
                                        title="Quản lí người phụ trách" data-id="343677"></a></div>
                                <div><a class="fa fa-heart selfAssign"
                                        title="Nhận chăm sóc thông tin" data-id="343677"></a></div>
                                <span data-id="343677" data-toggle="tooltip"
                                    data-title="Cập nhật Level khách hàng" style="cursor:pointer"
                                    class="updateOpportunityStatus icon fa fa-refresh text-success"></span>
                            </td>
                            <td>
                                <div class="item-block"><a
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="label btn-info crm-type">Khách hàng</a></div>
                                <div class="line-break"></div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-arrow-right"></i></div>
                                    <div class="item-infor">Cá nhân</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor"><a
                                            href="https://erp.nhanh.vn/crm/account/view?id=19098">Thảo
                                            Lê</a></div>
                                </div>
                                <div class="opportunityStatus343677"></div>
                                <div class="item-block">
                                    <b>Nguồn: </b>Data bàn giao- Hotline</div>
                                <div class="item-block">
                                    <b>Tham chiếu: </b></div>
                            </td>
                            <td class="col-assignedTo">
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Nhóm KD5_LiêmNT"><i
                                        class="fa fa-flag-o"></i> Trần Thị Yến Phương</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Partime - LâmNV"><i
                                        class="fa fa-flag-o"></i> Trương Thị Luyến</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Phòng KD8_LâmNV"><i
                                        class="fa fa-flag-o"></i> Hồ Tấn Hải</div>
                                <div title="Người tạo">
                                    <i class="fa fa-github-alt" data-toggle="tooltip"
                                        data-original-title="Ngày tạo: 2019-08-22 16:57:46 "></i>
                                    Nguyễn Thị Hiền</div>
                            </td>
                            <td>
                                <p style="font-style: italic;" data-toggle="tooltip"
                                    data-title="hợp đồng công ty Nhanh.vn">- Số hợp đồng:6</p>
                                <p style="font-style: italic;"> - Doanh thu tạo: <b>3.600.000</b>
                                </p>
                                <p style="font-style: italic;"> - Đã thanh toán: <b
                                        class="text-success">3.600.000</b></p>
                                <p style="font-style: italic;"> - Ngày tạo hợp đồng đầu tiên:
                                    <b>29/08/2019</b></p>
                                <p style="font-style: italic;"> - Thời gian chốt: <b>7 ngày</b></p>
                                <p style="font-style: italic;"> - Sản phẩm: <br><b
                                        class="text-success">+ Gói Phần mềm quản lý fanpage</b></p>
                                <ul class="td-history">
                                    <li class="last"><a class="text-info"
                                            href="https://erp.nhanh.vn/crm/activity/history?accountId=19098">Xem
                                            chi tiết 37 hành động</a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="colCheckbox"><input data-id="409830" class="cb leadCb"
                                    type="checkbox"></td>
                            <td class="colControls"><a data-toggle="tooltip"
                                    data-original-title="Ngày tạo:2020-07-30 10:25:14"
                                    href="https://erp.nhanh.vn/crm/lead/view?id=409830">409830</a>
                            </td>
                            <td class="colControls">
                                <div class="dropdown">
                                    <a data-toggle="dropdown"
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="fa fa-plus-circle icon"></a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addmeeting?leadId=409830">
                                                <i class="fa fa-users"></i> Thêm cuộc gặp
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addphonecall?leadId=409830">
                                                <i class="fa fa-phone"></i> Thêm cuộc gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addcalendar?leadId=409830">
                                                <i class="fa fa-calendar"></i> Đặt lịch
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addrequestphonecall?leadId=409830">
                                                <i class="fa fa-phone-square"></i> Yêu cầu gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/contract/add?leadId=409830">
                                                <i class="fa fa-book"></i> Tạo hợp đồng
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/requirement/add?leadId=409830">
                                                <i class="fa fa-cog"></i> Thêm yêu cầu
                                            </a>
                                        </li>
                                        <li>
                                            <a class="editDescription" data-leadid="409830"
                                                data-description="Basic 1 (đơn hàng online) Quận 9 Hồ Chí Minh lh lại tư vấn PM"
                                                href="javascript:;">
                                                <i class="fa fa-edit"></i> Sửa ghi chú
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div><a class="fa fa-users assignLead"
                                        title="Quản lí người phụ trách" data-id="409830"></a></div>
                                <div><a class="fa fa-heart selfAssign"
                                        title="Nhận chăm sóc thông tin" data-id="409830"></a></div>
                                <span data-id="409830" data-toggle="tooltip"
                                    data-title="Cập nhật Level khách hàng" style="cursor:pointer"
                                    class="updateOpportunityStatus icon fa fa-refresh text-success"></span>
                            </td>
                            <td>
                                <div class="item-block"><a
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="label btn-default crm-type">Thông tin</a></div>
                                <div class="line-break"></div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-arrow-right"></i></div>
                                    <div class="item-infor">Cá nhân</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor"><a
                                            href="https://erp.nhanh.vn/crm/lead/view?id=409830">FASHION-Đẳng
                                            Cấp Quý Ông Thời Thượng</a></div>
                                </div>
                                <div class="opportunityStatus409830"></div>
                            </td>
                            <td class="col-assignedTo">
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Nhóm KD4_ThịnhNQG"><i
                                        class="fa fa-flag-o"></i> Nguyễn Quốc Gia Thịnh</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Nhóm KD4_ThịnhNQG"><i
                                        class="fa fa-flag-o"></i> Lê Trung Nghĩa</div>
                                <div title="Người tạo">
                                    <i class="fa fa-github-alt" data-toggle="tooltip"
                                        data-original-title="Ngày tạo: 2020-07-30 10:25:14 "></i>
                                    PHAN THỊ THU THẢO</div>
                            </td>
                            <td>
                                <ul class="td-history">
                                    <li class="last"><a class="text-info"
                                            href="https://erp.nhanh.vn/crm/activity/history?leadId=409830">Xem
                                            chi tiết 2 hành động</a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="colCheckbox"><input data-id="410302" class="cb leadCb"
                                    type="checkbox"></td>
                            <td class="colControls"><a data-toggle="tooltip"
                                    data-original-title="Ngày tạo:2020-07-31 16:07:34"
                                    href="https://erp.nhanh.vn/crm/lead/view?id=410302">410302</a>
                            </td>
                            <td class="colControls">
                                <div class="dropdown">
                                    <a data-toggle="dropdown"
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="fa fa-plus-circle icon"></a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addmeeting?leadId=410302">
                                                <i class="fa fa-users"></i> Thêm cuộc gặp
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addphonecall?leadId=410302">
                                                <i class="fa fa-phone"></i> Thêm cuộc gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addcalendar?leadId=410302">
                                                <i class="fa fa-calendar"></i> Đặt lịch
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addrequestphonecall?leadId=410302">
                                                <i class="fa fa-phone-square"></i> Yêu cầu gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/contract/add?leadId=410302">
                                                <i class="fa fa-book"></i> Tạo hợp đồng
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/requirement/add?leadId=410302">
                                                <i class="fa fa-cog"></i> Thêm yêu cầu
                                            </a>
                                        </li>
                                        <li>
                                            <a class="editDescription" data-leadid="410302"
                                                data-description="PMQLBH SEO Nhanh 2018 Starter Ngành hàng khác Huyện Hóc Môn Hồ Chí Minh, khách quan tâm pmbh và vận chuyển"
                                                href="javascript:;">
                                                <i class="fa fa-edit"></i> Sửa ghi chú
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div><a class="fa fa-users assignLead"
                                        title="Quản lí người phụ trách" data-id="410302"></a></div>
                                <div><a class="fa fa-heart selfAssign"
                                        title="Nhận chăm sóc thông tin" data-id="410302"></a></div>
                                <span data-id="410302" data-toggle="tooltip"
                                    data-title="Cập nhật Level khách hàng" style="cursor:pointer"
                                    class="updateOpportunityStatus icon fa fa-refresh text-success"></span>
                            </td>
                            <td>
                                <div class="item-block"><a
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="label btn-default crm-type">Thông tin</a></div>
                                <div class="line-break"></div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-arrow-right"></i></div>
                                    <div class="item-infor">Cá nhân</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor"><a
                                            href="https://erp.nhanh.vn/crm/lead/view?id=410302">cá
                                            cảnh Trung Tín</a></div>
                                </div>
                                <div class="opportunityStatus410302"></div>
                                <div class="item-block">
                                    <b>Nguồn: </b>Data bàn giao - SEO</div>
                                <div class="item-block">
                                    <b>Tham chiếu: </b></div>
                            </td>
                            <td class="col-assignedTo">
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Phòng KD1_NgânHTM"><i
                                        class="fa fa-flag-o"></i> Lê Ngọc Khánh</div>
                                <div title="Người tạo">
                                    <i class="fa fa-github-alt" data-toggle="tooltip"
                                        data-original-title="Ngày tạo: 2020-07-31 16:07:34 "></i> Lê
                                    Hải Anh</div>
                            </td>
                            <td>
                                <ul class="td-history">
                                    <li class="last"><a class="text-info"
                                            href="https://erp.nhanh.vn/crm/activity/history?leadId=410302">Xem
                                            chi tiết 1 hành động</a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="colCheckbox"><input data-id="403074" class="cb leadCb"
                                    type="checkbox"></td>
                            <td class="colControls"><a data-toggle="tooltip"
                                    data-original-title="Ngày tạo:2020-06-30 10:58:01"
                                    href="https://erp.nhanh.vn/crm/lead/view?id=403074">403074</a>
                            </td>
                            <td class="colControls">
                                <div class="dropdown">
                                    <a data-toggle="dropdown"
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="fa fa-plus-circle icon"></a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addmeeting?leadId=403074">
                                                <i class="fa fa-users"></i> Thêm cuộc gặp
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addphonecall?leadId=403074">
                                                <i class="fa fa-phone"></i> Thêm cuộc gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addcalendar?leadId=403074">
                                                <i class="fa fa-calendar"></i> Đặt lịch
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addrequestphonecall?leadId=403074">
                                                <i class="fa fa-phone-square"></i> Yêu cầu gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/contract/add?leadId=403074">
                                                <i class="fa fa-book"></i> Tạo hợp đồng
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/requirement/add?leadId=403074">
                                                <i class="fa fa-cog"></i> Thêm yêu cầu
                                            </a>
                                        </li>
                                        <li>
                                            <a class="editDescription" data-leadid="403074"
                                                data-description="Thời trang Phungthietco31031999@gmail.com Huyện Nhà Bè Hồ Chí Minh Starter"
                                                href="javascript:;">
                                                <i class="fa fa-edit"></i> Sửa ghi chú
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div><a class="fa fa-users assignLead"
                                        title="Quản lí người phụ trách" data-id="403074"></a></div>
                                <div><a class="fa fa-heart selfAssign"
                                        title="Nhận chăm sóc thông tin" data-id="403074"></a></div>
                                <span data-id="403074" data-toggle="tooltip"
                                    data-title="Cập nhật Level khách hàng" style="cursor:pointer"
                                    class="updateOpportunityStatus icon fa fa-refresh text-success"></span>
                            </td>
                            <td>
                                <div class="item-block"><a
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="label btn-default crm-type">Thông tin</a></div>
                                <div class="line-break"></div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-arrow-right"></i></div>
                                    <div class="item-infor">Cá nhân</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor"><a
                                            href="https://erp.nhanh.vn/crm/lead/view?id=403074">Tuyết
                                            Châu House</a></div>
                                </div>
                                <div class="opportunityStatus403074"></div>
                                <div class="item-block">
                                    <b>Nguồn: </b>Data bàn giao - FB ADS</div>
                                <div class="item-block">
                                    <b>Tham chiếu: </b></div>
                            </td>
                            <td class="col-assignedTo">
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Nhóm KD9_ThưNTA"><i
                                        class="fa fa-flag-o"></i> Nguyễn Thị Anh Thư</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Nhóm KD9_ThưNTA"><i
                                        class="fa fa-flag-o"></i> Nguyễn Thị Như Huệ</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Sale Marketing"><i
                                        class="fa fa-flag-o"></i> Nguyễn Thị Mỹ Phụng</div>
                                <div title="Người tạo">
                                    <i class="fa fa-github-alt" data-toggle="tooltip"
                                        data-original-title="Ngày tạo: 2020-06-30 10:58:01 "></i>
                                    Nguyễn Thị Thu Hằng</div>
                            </td>
                            <td>
                                <ul class="td-history">
                                    <li class="last"><a class="text-info"
                                            href="https://erp.nhanh.vn/crm/activity/history?leadId=403074">Xem
                                            chi tiết 9 hành động</a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="colCheckbox"><input data-id="357050" class="cb leadCb"
                                    type="checkbox"></td>
                            <td class="colControls"><a data-toggle="tooltip"
                                    data-original-title="Ngày tạo:2019-10-17 10:54:58"
                                    href="https://erp.nhanh.vn/crm/lead/view?id=357050">357050</a>
                            </td>
                            <td class="colControls">
                                <div class="dropdown">
                                    <a data-toggle="dropdown"
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="fa fa-plus-circle icon"></a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addmeeting?leadId=357050">
                                                <i class="fa fa-users"></i> Thêm cuộc gặp
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addphonecall?leadId=357050">
                                                <i class="fa fa-phone"></i> Thêm cuộc gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addcalendar?leadId=357050">
                                                <i class="fa fa-calendar"></i> Đặt lịch
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addrequestphonecall?leadId=357050">
                                                <i class="fa fa-phone-square"></i> Yêu cầu gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/contract/add?leadId=357050">
                                                <i class="fa fa-book"></i> Tạo hợp đồng
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/requirement/add?leadId=357050">
                                                <i class="fa fa-cog"></i> Thêm yêu cầu
                                            </a>
                                        </li>
                                        <li>
                                            <a class="editDescription" data-leadid="357050"
                                                data-description="" href="javascript:;">
                                                <i class="fa fa-edit"></i> Sửa ghi chú
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div><a class="fa fa-users assignLead"
                                        title="Quản lí người phụ trách" data-id="357050"></a></div>
                                <div><a class="fa fa-heart selfAssign"
                                        title="Nhận chăm sóc thông tin" data-id="357050"></a></div>
                                <span data-id="357050" data-toggle="tooltip"
                                    data-title="Cập nhật Level khách hàng" style="cursor:pointer"
                                    class="updateOpportunityStatus icon fa fa-refresh text-success"></span>
                            </td>
                            <td>
                                <div class="item-block"><a
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="label btn-default crm-type">Thông tin</a></div>
                                <div class="line-break"></div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-arrow-right"></i></div>
                                    <div class="item-infor">Cá nhân</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor"><a
                                            href="https://erp.nhanh.vn/crm/lead/view?id=357050">Bui
                                            Anh Tien</a></div>
                                </div>
                                <div class="opportunityStatus357050"></div>
                                <div class="item-block">
                                    <b>Nguồn: </b>Data bàn giao - Email marketing</div>
                                <div class="item-block">
                                    <b>Tham chiếu: </b></div>
                            </td>
                            <td class="col-assignedTo">
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Phòng KD8_LâmNV"><i
                                        class="fa fa-flag-o"></i> Nguyễn Phương Mai</div>
                                <div title="Người tạo">
                                    <i class="fa fa-github-alt" data-toggle="tooltip"
                                        data-original-title="Ngày tạo: 2019-10-17 10:54:58 "></i> Ma
                                    Thị Phương Thảo</div>
                            </td>
                            <td>
                                <ul class="td-history">
                                    <li class="last"><a class="text-info"
                                            href="https://erp.nhanh.vn/crm/activity/history?leadId=357050">Xem
                                            chi tiết 3 hành động</a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="colCheckbox"><input data-id="228721" class="cb leadCb"
                                    type="checkbox"></td>
                            <td class="colControls"><a data-toggle="tooltip"
                                    data-original-title="Ngày tạo:2017-11-25 11:51:28"
                                    href="https://erp.nhanh.vn/crm/account/view?id=16869">228721</a>
                            </td>
                            <td class="colControls">
                                <div class="dropdown">
                                    <a data-toggle="dropdown"
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="fa fa-plus-circle icon"></a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addmeeting?accountId=16869">
                                                <i class="fa fa-users"></i> Thêm cuộc gặp
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addphonecall?accountId=16869">
                                                <i class="fa fa-phone"></i> Thêm cuộc gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addcalendar?accountId=16869">
                                                <i class="fa fa-calendar"></i> Đặt lịch
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addrequestphonecall?accountId=16869">
                                                <i class="fa fa-phone-square"></i> Yêu cầu gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/contract/add?accountId=16869">
                                                <i class="fa fa-book"></i> Tạo hợp đồng
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/adddeploy?accountId=16869">
                                                <i class="fa fa-cogs"></i> Thêm triển khai
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/requirement/add?accountId=16869">
                                                <i class="fa fa-cog"></i> Thêm yêu cầu
                                            </a>
                                        </li>
                                        <li>
                                            <a class="editDescription" data-leadid="228721"
                                                data-description="" href="javascript:;">
                                                <i class="fa fa-edit"></i> Sửa ghi chú
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div><a class="fa fa-users assignLead"
                                        title="Quản lí người phụ trách" data-id="228721"></a></div>
                                <div><a class="fa fa-heart selfAssign"
                                        title="Nhận chăm sóc thông tin" data-id="228721"></a></div>
                                <span data-id="228721" data-toggle="tooltip"
                                    data-title="Cập nhật Level khách hàng" style="cursor:pointer"
                                    class="updateOpportunityStatus icon fa fa-refresh text-success"></span>
                            </td>
                            <td>
                                <div class="item-block"><a
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="label btn-info crm-type">Khách hàng</a></div>
                                <div class="line-break"></div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-arrow-right"></i></div>
                                    <div class="item-infor">Cá nhân</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor"><a
                                            href="https://erp.nhanh.vn/crm/account/view?id=16869">Crescent
                                            Moon</a></div>
                                </div>
                                <div class="opportunityStatus228721"></div>
                                <div class="item-block">
                                    <b>Nguồn: </b>Data bàn giao - SĐT quét từ QC</div>
                                <div class="item-block">
                                    <b>Tham chiếu: </b></div>
                            </td>
                            <td class="col-assignedTo">
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Phòng KD8_LâmNV"><i
                                        class="fa fa-flag-o"></i> Nguyễn Viết Lâm</div>
                                <div title="Người tạo">
                                    <i class="fa fa-github-alt" data-toggle="tooltip"
                                        data-original-title="Ngày tạo: 2017-11-25 11:51:28 "></i>
                                    Phùng Hoàng Ngân</div>
                            </td>
                            <td>
                                <p style="font-style: italic;" data-toggle="tooltip"
                                    data-title="hợp đồng công ty Nhanh.vn">- Số hợp đồng:6</p>
                                <p style="font-style: italic;"> - Doanh thu tạo: <b>9.600.000</b>
                                </p>
                                <p style="font-style: italic;"> - Đã thanh toán: <b
                                        class="text-success">9.600.000</b></p>
                                <p style="font-style: italic;"> - Ngày tạo hợp đồng đầu tiên:
                                    <b>24/03/2019</b></p>
                                <p style="font-style: italic;"> - Thời gian chốt: <b>29 ngày</b></p>
                                <p style="font-style: italic;"> - Sản phẩm: <br><b
                                        class="text-success">+ Gói Starter - QLBH<br>+ Gói Phần mềm
                                        quản lý fanpage<br>+ Dịch vụ vận chuyển</b></p>
                                <ul class="td-history">
                                    <li class="last"><a class="text-info"
                                            href="https://erp.nhanh.vn/crm/activity/history?accountId=16869">Xem
                                            chi tiết 10 hành động</a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="colCheckbox"><input data-id="190544" class="cb leadCb"
                                    type="checkbox"></td>
                            <td class="colControls"><a data-toggle="tooltip"
                                    data-original-title="Ngày tạo:2017-06-27 11:13:27"
                                    href="https://erp.nhanh.vn/crm/account/view?id=21512">190544</a>
                            </td>
                            <td class="colControls">
                                <div class="dropdown">
                                    <a data-toggle="dropdown"
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="fa fa-plus-circle icon"></a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addmeeting?accountId=21512">
                                                <i class="fa fa-users"></i> Thêm cuộc gặp
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addphonecall?accountId=21512">
                                                <i class="fa fa-phone"></i> Thêm cuộc gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addcalendar?accountId=21512">
                                                <i class="fa fa-calendar"></i> Đặt lịch
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addrequestphonecall?accountId=21512">
                                                <i class="fa fa-phone-square"></i> Yêu cầu gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/contract/add?accountId=21512">
                                                <i class="fa fa-book"></i> Tạo hợp đồng
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/adddeploy?accountId=21512">
                                                <i class="fa fa-cogs"></i> Thêm triển khai
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/requirement/add?accountId=21512">
                                                <i class="fa fa-cog"></i> Thêm yêu cầu
                                            </a>
                                        </li>
                                        <li>
                                            <a class="editDescription" data-leadid="190544"
                                                data-description="" href="javascript:;">
                                                <i class="fa fa-edit"></i> Sửa ghi chú
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div><a class="fa fa-users assignLead"
                                        title="Quản lí người phụ trách" data-id="190544"></a></div>
                                <div><a class="fa fa-heart selfAssign"
                                        title="Nhận chăm sóc thông tin" data-id="190544"></a></div>
                                <span data-id="190544" data-toggle="tooltip"
                                    data-title="Cập nhật Level khách hàng" style="cursor:pointer"
                                    class="updateOpportunityStatus icon fa fa-refresh text-success"></span>
                            </td>
                            <td>
                                <div class="item-block"><a
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="label btn-info crm-type">Khách hàng</a></div>
                                <div class="line-break"></div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-arrow-right"></i></div>
                                    <div class="item-infor">Cá nhân</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor"><a
                                            href="https://erp.nhanh.vn/crm/account/view?id=21512">denim
                                            shop</a></div>
                                </div>
                                <div class="opportunityStatus190544"></div>
                                <div class="item-block">
                                    <b>Nguồn: </b>Seeding/ Inbox/ Spam</div>
                                <div class="item-block">
                                    <b>Tham chiếu: </b></div>
                            </td>
                            <td class="col-assignedTo">
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | NHANH HCM - Nhóm KD2_NgầnLTT"><i
                                        class="fa fa-flag-o"></i> Trần Trọng Thành Nhân</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Phòng KD8_LâmNV"><i
                                        class="fa fa-flag-o"></i> Nguyễn Thế Hiển</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Nhóm KD3_NgânTK"><i
                                        class="fa fa-flag-o"></i> Võ Thị Thanh Hằng</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Partime - LâmNV"><i
                                        class="fa fa-flag-o"></i> Trương Thị Luyến</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Phòng KD8_LâmNV"><i
                                        class="fa fa-flag-o"></i> Hồ Tấn Hải</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Phòng KD1_NgânHTM"><i
                                        class="fa fa-flag-o"></i> Lê Ngọc Khánh</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Phòng KD1_NgânHTM"><i
                                        class="fa fa-flag-o"></i> Đỗ Thị Ngọc Hân</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Nhóm KD9_ThưNTA"><i
                                        class="fa fa-flag-o"></i> Huỳnh Ngọc Hải</div>
                                <div title="Người tạo">
                                    <i class="fa fa-github-alt" data-toggle="tooltip"
                                        data-original-title="Ngày tạo: 2017-06-27 11:13:27 "></i>
                                    Trần Trọng Thành Nhân</div>
                            </td>
                            <td>
                                <p style="font-style: italic;" data-toggle="tooltip"
                                    data-title="hợp đồng công ty Nhanh.vn">- Số hợp đồng:3</p>
                                <p style="font-style: italic;"> - Doanh thu tạo: <b>7.750.000</b>
                                </p>
                                <p style="font-style: italic;"> - Đã thanh toán: <b
                                        class="text-success">7.750.000</b></p>
                                <p style="font-style: italic;"> - Ngày tạo hợp đồng đầu tiên:
                                    <b>18/06/2020</b></p>
                                <p style="font-style: italic;"> - Thời gian chốt: <b>21 ngày</b></p>
                                <p style="font-style: italic;"> - Sản phẩm: <br><b
                                        class="text-success">+ Gói Starter - QLBH<br>+ Gói Website
                                        cơ bản<br>+ Thiết kế thêm tính năng cho website: bảo mật
                                        https cho website<br>+ Gói Tạo mới Maps<br>+ Gói phí nâng
                                        cấp gói phần mềm</b></p>
                                <ul class="td-history">
                                    <li class="last"><a class="text-info"
                                            href="https://erp.nhanh.vn/crm/activity/history?accountId=21512">Xem
                                            chi tiết 38 hành động</a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="colCheckbox"><input data-id="199594" class="cb leadCb"
                                    type="checkbox"></td>
                            <td class="colControls"><a data-toggle="tooltip"
                                    data-original-title="Ngày tạo:2017-07-26 10:24:46"
                                    href="https://erp.nhanh.vn/crm/lead/view?id=199594">199594</a>
                            </td>
                            <td class="colControls">
                                <div class="dropdown">
                                    <a data-toggle="dropdown"
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="fa fa-plus-circle icon"></a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addmeeting?leadId=199594">
                                                <i class="fa fa-users"></i> Thêm cuộc gặp
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addphonecall?leadId=199594">
                                                <i class="fa fa-phone"></i> Thêm cuộc gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addcalendar?leadId=199594">
                                                <i class="fa fa-calendar"></i> Đặt lịch
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addrequestphonecall?leadId=199594">
                                                <i class="fa fa-phone-square"></i> Yêu cầu gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/contract/add?leadId=199594">
                                                <i class="fa fa-book"></i> Tạo hợp đồng
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/requirement/add?leadId=199594">
                                                <i class="fa fa-cog"></i> Thêm yêu cầu
                                            </a>
                                        </li>
                                        <li>
                                            <a class="editDescription" data-leadid="199594"
                                                data-description="" href="javascript:;">
                                                <i class="fa fa-edit"></i> Sửa ghi chú
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div><a class="fa fa-users assignLead"
                                        title="Quản lí người phụ trách" data-id="199594"></a></div>
                                <div><a class="fa fa-heart selfAssign"
                                        title="Nhận chăm sóc thông tin" data-id="199594"></a></div>
                                <span data-id="199594" data-toggle="tooltip"
                                    data-title="Cập nhật Level khách hàng" style="cursor:pointer"
                                    class="updateOpportunityStatus icon fa fa-refresh text-success"></span>
                            </td>
                            <td>
                                <div class="item-block"><a
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="label btn-default crm-type">Thông tin</a></div>
                                <div class="line-break"></div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-arrow-right"></i></div>
                                    <div class="item-infor">Cá nhân</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor"><a
                                            href="https://erp.nhanh.vn/crm/lead/view?id=199594">Hoàng
                                            Thư</a></div>
                                </div>
                                <div class="opportunityStatus199594"></div>
                                <div class="item-block">
                                    <b>Nguồn: </b>Data bàn giao - SEO</div>
                                <div class="item-block">
                                    <b>Tham chiếu: </b>CRM</div>
                            </td>
                            <td class="col-assignedTo">
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Nhóm KD3_NgânTK"><i
                                        class="fa fa-flag-o"></i> Phạm Thị Chi</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Nhóm KD3_NgânTK"><i
                                        class="fa fa-flag-o"></i> Huỳnh Diễm Thy</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Nhóm KD3_NgânTK"><i
                                        class="fa fa-flag-o"></i> Võ Thị Thu Sương</div>
                                <div title="Người tạo">
                                    <i class="fa fa-github-alt" data-toggle="tooltip"
                                        data-original-title="Ngày tạo: 2017-07-26 10:24:46 "></i>
                                    Trần Lệ Uyên</div>
                            </td>
                            <td>
                                <ul class="td-history">
                                    <li class="last"><a class="text-info"
                                            href="https://erp.nhanh.vn/crm/activity/history?leadId=199594">Xem
                                            chi tiết 18 hành động</a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="colCheckbox"><input data-id="280169" class="cb leadCb"
                                    type="checkbox"></td>
                            <td class="colControls"><a data-toggle="tooltip"
                                    data-original-title="Ngày tạo:2018-10-11 09:24:24"
                                    href="https://erp.nhanh.vn/crm/lead/view?id=280169">280169</a>
                            </td>
                            <td class="colControls">
                                <div class="dropdown">
                                    <a data-toggle="dropdown"
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="fa fa-plus-circle icon"></a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addmeeting?leadId=280169">
                                                <i class="fa fa-users"></i> Thêm cuộc gặp
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addphonecall?leadId=280169">
                                                <i class="fa fa-phone"></i> Thêm cuộc gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addcalendar?leadId=280169">
                                                <i class="fa fa-calendar"></i> Đặt lịch
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addrequestphonecall?leadId=280169">
                                                <i class="fa fa-phone-square"></i> Yêu cầu gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/contract/add?leadId=280169">
                                                <i class="fa fa-book"></i> Tạo hợp đồng
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/requirement/add?leadId=280169">
                                                <i class="fa fa-cog"></i> Thêm yêu cầu
                                            </a>
                                        </li>
                                        <li>
                                            <a class="editDescription" data-leadid="280169"
                                                data-description="Thời trang minh.dinh@idcomgroup.vn Quận 10 Hồ Chí Minh Starter"
                                                href="javascript:;">
                                                <i class="fa fa-edit"></i> Sửa ghi chú
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div><a class="fa fa-users assignLead"
                                        title="Quản lí người phụ trách" data-id="280169"></a></div>
                                <div><a class="fa fa-heart selfAssign"
                                        title="Nhận chăm sóc thông tin" data-id="280169"></a></div>
                                <span data-id="280169" data-toggle="tooltip"
                                    data-title="Cập nhật Level khách hàng" style="cursor:pointer"
                                    class="updateOpportunityStatus icon fa fa-refresh text-success"></span>
                            </td>
                            <td>
                                <div class="item-block"><a
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="label btn-default crm-type">Thông tin</a></div>
                                <div class="line-break"></div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-arrow-right"></i></div>
                                    <div class="item-infor">Cá nhân</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor"><a
                                            href="https://erp.nhanh.vn/crm/lead/view?id=280169">YoungDo</a>
                                    </div>
                                </div>
                                <div class="opportunityStatus280169"></div>
                                <div class="item-block">
                                    <b>Nguồn: </b>Data bàn giao - SEO</div>
                                <div class="item-block">
                                    <b>Tham chiếu: </b></div>
                            </td>
                            <td class="col-assignedTo">
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Nhóm KD3_NgânTK"><i
                                        class="fa fa-flag-o"></i> Trần Kim Ngân</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Nhóm KD3_NgânTK"><i
                                        class="fa fa-flag-o"></i> Bùi Thị Bích Thuận</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Nhóm KD3_NgânTK"><i
                                        class="fa fa-flag-o"></i> Phạm Hùng Phát</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Nhóm KD3_NgânTK"><i
                                        class="fa fa-flag-o"></i> Huỳnh Diễm Thy</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Parttime - NgânTK"><i
                                        class="fa fa-flag-o"></i> Lý Bảo Dung</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Nhóm KD3_NgânTK"><i
                                        class="fa fa-flag-o"></i> Võ Thị Thu Sương</div>
                                <div title="Người tạo">
                                    <i class="fa fa-github-alt" data-toggle="tooltip"
                                        data-original-title="Ngày tạo: 2018-10-11 09:24:24 "></i>
                                    PHAN THỊ THU THẢO</div>
                            </td>
                            <td>
                                <ul class="td-history">
                                    <li class="last"><a class="text-info"
                                            href="https://erp.nhanh.vn/crm/activity/history?leadId=280169">Xem
                                            chi tiết 33 hành động</a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="colCheckbox"><input data-id="273496" class="cb leadCb"
                                    type="checkbox"></td>
                            <td class="colControls"><a data-toggle="tooltip"
                                    data-original-title="Ngày tạo:2018-09-07 09:50:09"
                                    href="https://erp.nhanh.vn/crm/lead/view?id=273496">273496</a>
                            </td>
                            <td class="colControls">
                                <div class="dropdown">
                                    <a data-toggle="dropdown"
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="fa fa-plus-circle icon"></a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addmeeting?leadId=273496">
                                                <i class="fa fa-users"></i> Thêm cuộc gặp
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addphonecall?leadId=273496">
                                                <i class="fa fa-phone"></i> Thêm cuộc gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addcalendar?leadId=273496">
                                                <i class="fa fa-calendar"></i> Đặt lịch
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addrequestphonecall?leadId=273496">
                                                <i class="fa fa-phone-square"></i> Yêu cầu gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/contract/add?leadId=273496">
                                                <i class="fa fa-book"></i> Tạo hợp đồng
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/requirement/add?leadId=273496">
                                                <i class="fa fa-cog"></i> Thêm yêu cầu
                                            </a>
                                        </li>
                                        <li>
                                            <a class="editDescription" data-leadid="273496"
                                                data-description="https://www.facebook.com/447987475408044/posts/964815080391945 "
                                                ❗❗❗4="" nỖi="" #Ám_Ảnh="" chỦ="" shop="" nÀo=""
                                                cŨng="" gẶp="" phẢi="" vỚi="" "" ĐƠn="" vỊ="" vẬn=""
                                                chuyỂn""="" (tiẾt="" kiỆm="" 20.000="" phÍ=""
                                                chuyỂn)""="" href="javascript:;">
                                                <i class="fa fa-edit"></i> Sửa ghi chú
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div><a class="fa fa-users assignLead"
                                        title="Quản lí người phụ trách" data-id="273496"></a></div>
                                <div><a class="fa fa-heart selfAssign"
                                        title="Nhận chăm sóc thông tin" data-id="273496"></a></div>
                                <span data-id="273496" data-toggle="tooltip"
                                    data-title="Cập nhật Level khách hàng" style="cursor:pointer"
                                    class="updateOpportunityStatus icon fa fa-refresh text-success"></span>
                            </td>
                            <td>
                                <div class="item-block"><a
                                        href="https://erp.nhanh.vn/crm/customer/companysource#"
                                        class="label btn-default crm-type">Thông tin</a></div>
                                <div class="line-break"></div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-arrow-right"></i></div>
                                    <div class="item-infor">Cá nhân</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor"><a
                                            href="https://erp.nhanh.vn/crm/lead/view?id=273496">Hue
                                            Pham</a></div>
                                </div>
                                <div class="opportunityStatus273496"></div>
                                <div class="item-block">
                                    <b>Nguồn: </b></div>
                                <div class="item-block">
                                    <b>Tham chiếu: </b></div>
                            </td>
                            <td class="col-assignedTo">
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | NHANH HCM- PhúcN"><i
                                        class="fa fa-flag-o"></i> Nguyễn Phúc</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - SEO GG MAPS"><i
                                        class="fa fa-flag-o"></i> Nguyễn Thanh Ngân</div>
                                <div data-toggle="tooltip"
                                    title="Vật giá - Hồ Chí Minh | Nhanh HCM - Sale Marketing"><i
                                        class="fa fa-flag-o"></i> Võ Việt Quốc Đại</div>
                                <div title="Người tạo">
                                    <i class="fa fa-github-alt" data-toggle="tooltip"
                                        data-original-title="Ngày tạo: 2018-09-07 09:50:09 "></i>
                                    PHAN THỊ THU THẢO</div>
                            </td>
                            <td>
                                <ul class="td-history">
                                    <li class="last"><a class="text-info"
                                            href="https://erp.nhanh.vn/crm/activity/history?leadId=273496">Xem
                                            chi tiết 7 hành động</a></li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-md-6 dgButtons"></div>
                    <div class="col-md-6 paginatorItem">
                        <div class="paginator"><span class="labelPages">1 - 30 / 19,554</span><span
                                class="disabled fa fa-step-backward"></span><span
                                class="disabled fa fa-backward"></span><a class="fa fa-forward"
                                href="https://erp.nhanh.vn/crm/customer/companysource?page=2"
                                title="Trang sau"></a> <a class="fa fa-step-forward"
                                href="https://erp.nhanh.vn/crm/customer/companysource?page=652"
                                title="Trang cuối"></a></div>
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
    