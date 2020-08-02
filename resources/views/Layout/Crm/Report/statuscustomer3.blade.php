@extends('Layout.master1')

@section('css')
    <link href="{{ asset('asset/css/crm/report/bootstrap-multiselect.css') }}" media="screen" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/css/crm/report/style.css') }}" type="text/css">
@endsection

@section('title','ERP-Báo cáo theo nguồn khách hàng')

@section('content-page')

    <div class="tab-content">

        <ul class="breadcrumb">
            <li class="active">Báo cáo theo trạng thái khách hàng</li>
        </ul>
        <div id="page-crm-contact-add">
            <style>
                .nopadding {
                    padding-left: 0px !important;
                    padding-right: 0px !important
                }
            </style>
            <div class="main-header">
                <ul class="nav nav-tabs" style="margin-top: 30px;">
                    <li class=""><a
                            href="{{ route('reportStatuscustomer') }}"><i
                                class="fa fa-user"></i>&nbsp;Theo nhân viên kĩ thuật</a></li>
                    <li class=""><a
                            href="{{ route('reportStatuscustomer2') }}"><i
                                class="fa fa-envelope"></i>&nbsp;Quy mô số cửa hàng</a></li>
                    <li class="active"><a
                            href="{{ route('reportStatuscustomer3') }}"><i
                                class="fa fa-building"></i>&nbsp;Giá trị hợp đồng</a></li>
                </ul>
            </div>
            <div class="filterContainer">
                <form method="GET" name="crmReportEmployeesFilter" class="form-inline lolify"
                    role="form" id="crmReportEmployeesFilter">
                    <div class="col-md-10 lolify-default">

                        <div class="form-group">
                            <select name="companyId" id="companyId" class="form-control">
                                <option value="">- Công ty -</option>
                                <option value="10">VNP group</option>
                                <option value="2">---Công ty cổ phần Vật Giá Việt Nam</option>
                                <option value="315">------Vật giá - Hà Nội</option>
                                <option value="319">------Vật giá - Hồ Chí Minh</option>
                                <option value="365">------Vật giá - Hải Phòng</option>
                                <option value="387">------WeSave</option>
                                <option value="389">------123doc.org</option>
                                <option value="390">------Cunghocvui.com</option>
                                <option value="391">------123job.vn</option>
                                <option value="392">------9houz.com</option>
                                <option value="393">------123dok.com</option>
                                <option value="321">---Công ty cổ phần TMDT Bảo Kim</option>
                                <option value="322">------Bảo Kim - Hà Nội</option>
                                <option value="323">------Bảo Kim - Hồ Chí Minh</option>
                                <option value="324">---Công ty cổ phần Nhanh.vn</option>
                                <option value="1">------Nhanh.vn</option>
                                <option value="366">------Nhanh.vn Đà Nẵng</option>
                                <option value="395">------Nhanh.vn HCM</option>
                                <option value="379">---Westay</option>
                                <option value="384">---Công ty cổ phần WeHelp</option>
                                <option value="398">---WeLove</option>
                            </select> </div>
                        <div class="form-group">
                            <select name="departmentId" id="departmentId" class="form-control">
                                <option value="">- Phòng ban NV -</option>
                            </select> </div>
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Tên sản phẩm" id="name"
                                class="form-control" value=""> </div>
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
                            <select name="districtId" id="districtId" class="form-control">
                                <option value="">- Quận huyện -</option>
                                <option value="1">Quận Hoàng Mai</option>
                                <option value="2">Quận Ba Đình</option>
                                <option value="3">Quận Long Biên</option>
                                <option value="4">Quận Cầu Giấy</option>
                                <option value="5">Quận Đống Đa</option>
                                <option value="6">Quận Hai Bà Trưng</option>
                                <option value="7">Quận Hoàn Kiếm</option>
                                <option value="8">Quận Tây Hồ</option>
                                <option value="9">Quận Thanh Xuân</option>
                                <option value="10">Huyện Ba Vì</option>
                                <option value="11">Huyện Chương Mỹ</option>
                                <option value="12">Huyện Đan Phượng</option>
                                <option value="15">Huyện Gia Lâm</option>
                                <option value="16">Huyện Hoài Đức</option>
                                <option value="17">Huyện Mê Linh</option>
                                <option value="18">Huyện Mỹ Đức</option>
                                <option value="19">Huyện Phú Xuyên</option>
                                <option value="20">Huyện Phúc Thọ</option>
                                <option value="21">Huyện Quốc Oai</option>
                                <option value="22">Huyện Sóc Sơn</option>
                                <option value="23">Huyện Thạch Thất</option>
                                <option value="24">Huyện Thanh Oai</option>
                                <option value="25">Huyện Thanh Trì</option>
                                <option value="26">Huyện Thường Tín</option>
                                <option value="27">Huyện Từ Liêm</option>
                                <option value="28">Huyện Ứng Hòa</option>
                                <option value="63">Quận Hà Đông</option>
                                <option value="555">Huyện Đông Anh</option>
                                <option value="697">Thị xã Sơn Tây</option>
                            </select> </div>
                        <input type="hidden" name="typefollow" id="typefollow"
                            class="form-control" value="3">
                        <div class="form-group">
                            <input name="submit" type="submit" id="btnFilterCrmContact"
                                class="form-control btn btn-primary" value="Lọc"> </div>

                    </div>
                    <div class="col-md-2 lolify-control">
                        <div class="btn-group pull-right lolify-features" data-toggle="tooltip"
                            data-placement="top" title=""
                            data-original-title="Chức năng, thao tác">
                            <button class="btn dropdown-toggle" type="button"
                                aria-haspopup="true" aria-expanded="false"
                                data-toggle="dropdown">
                                <span class="fa fa-cog"></span> <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a cl=""
                                        href="https://erp.nhanh.vn/crm/report/statuscustomer?typefollow=3#"
                                        id="exportExcel"><i class="fa fa-download fa-lg"></i>
                                        Xuất excel</a></li>
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
                            <input type="text" name="daterangepicker"
                                class="form-control date-range-picker"
                                placeholder="Thời gian duyệt hợp đồng" id="daterangepicker"
                                value=""> </div>
                        <div class="form-group">
                            <input type="text" name="rangeValue" placeholder="Khoảng giá"
                                id="rangeValue" class="form-control" value="10000000"> </div>

                    </div>
                </form>
                <div class="clearfix"></div>
                <div class="lolify-left-menu" style="display: none;">
                </div>
            </div>
            <div class="dgContainer">
                <div style="display: none; width: 1874px;" class="stickyHeader">
                    <table class="table table-bordered" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr class="even">
                                <th rowspan="2" style="width: 61px;">STT</th>
                                <th rowspan="2" style="width: 292px;">Giá trị hợp đồng</th>
                                <th rowspan="2" style="width: 279px;"><a
                                        href="https://erp.nhanh.vn/crm/report/statuscustomer?typefollow=3&amp;sort=nostatus&amp;dir=DESC"><i
                                            class="fa fa-sort"></i> Chưa cập nhật trạng thái</a>
                                </th>
                                <th rowspan="2" style="width: 179px;"><a
                                        href="https://erp.nhanh.vn/crm/report/statuscustomer?typefollow=3&amp;sort=1&amp;dir=DESC"><i
                                            class="fa fa-sort"></i> Chưa sử dụng</a></th>
                                <th rowspan="2" style="width: 186px;"><a
                                        href="https://erp.nhanh.vn/crm/report/statuscustomer?typefollow=3&amp;sort=2&amp;dir=DESC"><i
                                            class="fa fa-sort"></i> Đang triển khai</a></th>
                                <th rowspan="2" style="width: 215px;"><a
                                        href="https://erp.nhanh.vn/crm/report/statuscustomer?typefollow=3&amp;sort=3&amp;dir=DESC"><i
                                            class="fa fa-sort"></i> Cần hỗ trợ, tư vấn</a></th>
                                <th rowspan="2" style="width: 177px;"><a
                                        href="https://erp.nhanh.vn/crm/report/statuscustomer?typefollow=3&amp;sort=4&amp;dir=DESC"><i
                                            class="fa fa-sort"></i> Đang sử dụng</a></th>
                                <th rowspan="2" style="width: 193px;"><a
                                        href="https://erp.nhanh.vn/crm/report/statuscustomer?typefollow=3&amp;sort=5&amp;dir=DESC"><i
                                            class="fa fa-sort"></i> Ngừng sử dụng</a></th>
                                <th rowspan="2" style="width: 131px;"><a
                                        href="https://erp.nhanh.vn/crm/report/statuscustomer?typefollow=3&amp;sort=6&amp;dir=DESC"><i
                                            class="fa fa-sort"></i> Dùng thử</a></th>
                                <th rowspan="2" style="width: 73px;">Tổng</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-6 dgButtons"></div>
                    <div class="col-md-6 paginatorItem">
                        <div class="paginator"><span class="labelPages">1 - 20 / 58</span><span
                                class="disabled fa fa-step-backward"></span><span
                                class="disabled fa fa-backward"></span><a class="fa fa-forward"
                                href="https://erp.nhanh.vn/crm/report/statuscustomer?typefollow=3&amp;page=2"
                                title="Trang sau"></a> <a class="fa fa-step-forward"
                                href="https://erp.nhanh.vn/crm/report/statuscustomer?typefollow=3&amp;page=3"
                                title="Trang cuối"></a></div>
                    </div>
                    <div style="clear: both;"></div><br>
                </div>
                <table id="dgCrmReportCommission" class="table table-bordered">
                    <thead>
                        <tr class="even">
                            <th rowspan="2">STT</th>
                            <th rowspan="2">Giá trị hợp đồng</th>
                            <th rowspan="2"><a
                                    href="https://erp.nhanh.vn/crm/report/statuscustomer?typefollow=3&amp;sort=nostatus&amp;dir=DESC"><i
                                        class="fa fa-sort"></i> Chưa cập nhật trạng thái</a>
                            </th>
                            <th rowspan="2"><a
                                    href="https://erp.nhanh.vn/crm/report/statuscustomer?typefollow=3&amp;sort=1&amp;dir=DESC"><i
                                        class="fa fa-sort"></i> Chưa sử dụng</a></th>
                            <th rowspan="2"><a
                                    href="https://erp.nhanh.vn/crm/report/statuscustomer?typefollow=3&amp;sort=2&amp;dir=DESC"><i
                                        class="fa fa-sort"></i> Đang triển khai</a></th>
                            <th rowspan="2"><a
                                    href="https://erp.nhanh.vn/crm/report/statuscustomer?typefollow=3&amp;sort=3&amp;dir=DESC"><i
                                        class="fa fa-sort"></i> Cần hỗ trợ, tư vấn</a></th>
                            <th rowspan="2"><a
                                    href="https://erp.nhanh.vn/crm/report/statuscustomer?typefollow=3&amp;sort=4&amp;dir=DESC"><i
                                        class="fa fa-sort"></i> Đang sử dụng</a></th>
                            <th rowspan="2"><a
                                    href="https://erp.nhanh.vn/crm/report/statuscustomer?typefollow=3&amp;sort=5&amp;dir=DESC"><i
                                        class="fa fa-sort"></i> Ngừng sử dụng</a></th>
                            <th rowspan="2"><a
                                    href="https://erp.nhanh.vn/crm/report/statuscustomer?typefollow=3&amp;sort=6&amp;dir=DESC"><i
                                        class="fa fa-sort"></i> Dùng thử</a></th>
                            <th rowspan="2">Tổng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td>1</td>
                            <td>0 - 10.000.000</td>
                            <td></td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-null&amp;assignType=3&amp;cityId=&amp;districtId=">10127</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-1&amp;assignType=3&amp;cityId=&amp;districtId=">1086</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-2&amp;assignType=3&amp;cityId=&amp;districtId=">5</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-3&amp;assignType=3&amp;cityId=&amp;districtId=">3</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-4&amp;assignType=3&amp;cityId=&amp;districtId=">1184</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-5&amp;assignType=3&amp;cityId=&amp;districtId=">2713</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-6&amp;assignType=3&amp;cityId=&amp;districtId=">9</a>
                            </td>
                            <td>15127</td>
                        </tr>
                        <tr class="even">
                            <td>2</td>
                            <td>10.000.000 - 20.000.000</td>
                            <td></td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-null&amp;assignType=3&amp;cityId=&amp;districtId=">1742</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-1&amp;assignType=3&amp;cityId=&amp;districtId=">340</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-2&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-3&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-4&amp;assignType=3&amp;cityId=&amp;districtId=">678</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-5&amp;assignType=3&amp;cityId=&amp;districtId=">221</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-6&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td>2984</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>20.000.000 - 30.000.000</td>
                            <td></td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-null&amp;assignType=3&amp;cityId=&amp;districtId=">580</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-1&amp;assignType=3&amp;cityId=&amp;districtId=">96</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-2&amp;assignType=3&amp;cityId=&amp;districtId=">2</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-3&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-4&amp;assignType=3&amp;cityId=&amp;districtId=">318</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-5&amp;assignType=3&amp;cityId=&amp;districtId=">57</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-6&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td>1055</td>
                        </tr>
                        <tr class="even">
                            <td>4</td>
                            <td>30.000.000 - 40.000.000</td>
                            <td></td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-null&amp;assignType=3&amp;cityId=&amp;districtId=">372</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-1&amp;assignType=3&amp;cityId=&amp;districtId=">40</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-2&amp;assignType=3&amp;cityId=&amp;districtId=">2</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-3&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-4&amp;assignType=3&amp;cityId=&amp;districtId=">177</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-5&amp;assignType=3&amp;cityId=&amp;districtId=">32</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-6&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>623</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>40.000.000 - 50.000.000</td>
                            <td></td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-null&amp;assignType=3&amp;cityId=&amp;districtId=">190</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-1&amp;assignType=3&amp;cityId=&amp;districtId=">17</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-2&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-3&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-4&amp;assignType=3&amp;cityId=&amp;districtId=">86</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-5&amp;assignType=3&amp;cityId=&amp;districtId=">18</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-6&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>311</td>
                        </tr>
                        <tr class="even">
                            <td>6</td>
                            <td>50.000.000 - 60.000.000</td>
                            <td></td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-null&amp;assignType=3&amp;cityId=&amp;districtId=">128</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-1&amp;assignType=3&amp;cityId=&amp;districtId=">13</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-2&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-3&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-4&amp;assignType=3&amp;cityId=&amp;districtId=">44</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-5&amp;assignType=3&amp;cityId=&amp;districtId=">2</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-6&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>189</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>70.000.000 - 80.000.000</td>
                            <td></td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-null&amp;assignType=3&amp;cityId=&amp;districtId=">45</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-1&amp;assignType=3&amp;cityId=&amp;districtId=">3</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-2&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-3&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-4&amp;assignType=3&amp;cityId=&amp;districtId=">25</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-5&amp;assignType=3&amp;cityId=&amp;districtId=">4</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-6&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>77</td>
                        </tr>
                        <tr class="even">
                            <td>8</td>
                            <td>80.000.000 - 90.000.000</td>
                            <td></td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-null&amp;assignType=3&amp;cityId=&amp;districtId=">31</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-1&amp;assignType=3&amp;cityId=&amp;districtId=">6</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-2&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-3&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-4&amp;assignType=3&amp;cityId=&amp;districtId=">24</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-5&amp;assignType=3&amp;cityId=&amp;districtId=">2</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-6&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>63</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>90.000.000 - 100.000.000</td>
                            <td></td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-null&amp;assignType=3&amp;cityId=&amp;districtId=">27</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-1&amp;assignType=3&amp;cityId=&amp;districtId=">5</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-2&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-3&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-4&amp;assignType=3&amp;cityId=&amp;districtId=">19</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-5&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-6&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>51</td>
                        </tr>
                        <tr class="even">
                            <td>10</td>
                            <td>100.000.000 - 110.000.000</td>
                            <td></td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-null&amp;assignType=3&amp;cityId=&amp;districtId=">20</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-1&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-2&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-3&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-4&amp;assignType=3&amp;cityId=&amp;districtId=">22</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-5&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-6&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>44</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>110.000.000 - 120.000.000</td>
                            <td></td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-null&amp;assignType=3&amp;cityId=&amp;districtId=">20</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-1&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-2&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-3&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-4&amp;assignType=3&amp;cityId=&amp;districtId=">15</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-5&amp;assignType=3&amp;cityId=&amp;districtId=">3</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-6&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>38</td>
                        </tr>
                        <tr class="even">
                            <td>12</td>
                            <td>140.000.000 - 150.000.000</td>
                            <td></td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-null&amp;assignType=3&amp;cityId=&amp;districtId=">7</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-1&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-2&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-3&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-4&amp;assignType=3&amp;cityId=&amp;districtId=">9</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-5&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-6&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>17</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>150.000.000 - 160.000.000</td>
                            <td></td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-null&amp;assignType=3&amp;cityId=&amp;districtId=">5</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-1&amp;assignType=3&amp;cityId=&amp;districtId=">2</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-2&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-3&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-4&amp;assignType=3&amp;cityId=&amp;districtId=">7</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-5&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-6&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>14</td>
                        </tr>
                        <tr class="even">
                            <td>14</td>
                            <td>170.000.000 - 180.000.000</td>
                            <td></td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-null&amp;assignType=3&amp;cityId=&amp;districtId=">7</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-1&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-2&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-3&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-4&amp;assignType=3&amp;cityId=&amp;districtId=">5</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-5&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-6&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>12</td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td>190.000.000 - 200.000.000</td>
                            <td></td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-null&amp;assignType=3&amp;cityId=&amp;districtId=">4</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-1&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-2&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-3&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-4&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-5&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-6&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>5</td>
                        </tr>
                        <tr class="even">
                            <td>16</td>
                            <td>210.000.000 - 220.000.000</td>
                            <td></td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-null&amp;assignType=3&amp;cityId=&amp;districtId=">3</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-1&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-2&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-3&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-4&amp;assignType=3&amp;cityId=&amp;districtId=">4</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-5&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-6&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>8</td>
                        </tr>
                        <tr>
                            <td>17</td>
                            <td>300.000.000 - 310.000.000</td>
                            <td></td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-null&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-1&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-2&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-3&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-4&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-5&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-6&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>2</td>
                        </tr>
                        <tr class="even">
                            <td>18</td>
                            <td>310.000.000 - 320.000.000</td>
                            <td></td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-null&amp;assignType=3&amp;cityId=&amp;districtId=">2</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-1&amp;assignType=3&amp;cityId=&amp;districtId=">3</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-2&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-3&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-4&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-5&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-6&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>6</td>
                        </tr>
                        <tr>
                            <td>19</td>
                            <td>710.000.000 - 720.000.000</td>
                            <td></td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-null&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-1&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-2&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-3&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-4&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-5&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-6&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>1</td>
                        </tr>
                        <tr class="even">
                            <td>20</td>
                            <td>Demo</td>
                            <td></td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-null&amp;assignType=3&amp;cityId=&amp;districtId=">162</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-1&amp;assignType=3&amp;cityId=&amp;districtId=">3</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-2&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-3&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-4&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-5&amp;assignType=3&amp;cityId=&amp;districtId=">249</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=status-6&amp;assignType=3&amp;cityId=&amp;districtId=">26</a>
                            </td>
                            <td>441</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Tổng</td>
                            <td>13473</td>
                            <td>1617</td>
                            <td>12</td>
                            <td>6</td>
                            <td>2619</td>
                            <td>3304</td>
                            <td>37</td>
                            <td>21068</td>
                        </tr>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-md-6 dgButtons"></div>
                    <div class="col-md-6 paginatorItem">
                        <div class="paginator"><span class="labelPages">1 - 20 / 58</span><span
                                class="disabled fa fa-step-backward"></span><span
                                class="disabled fa fa-backward"></span><a class="fa fa-forward"
                                href="https://erp.nhanh.vn/crm/report/statuscustomer?typefollow=3&amp;page=2"
                                title="Trang sau"></a> <a class="fa fa-step-forward"
                                href="https://erp.nhanh.vn/crm/report/statuscustomer?typefollow=3&amp;page=3"
                                title="Trang cuối"></a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Dialog bootstrap -->
        <div id="myModal" class="modal fade">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">×</button>
                        <h4 class="modal-title">Thông báo</h4>
                    </div>
                    <div class="modal-body"></div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>
        <!-- <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap-multiselect.css"> -->
    </div>
</div>
            
@endsection

@section('js')
    <script type="text/javascript">
        var usrCnf = {
            language: 'vi'
        };
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/bootstrap-multiselect.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/saved_resource(2)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/saved_resource(3)') }}"></script>
@endsection