@extends('Layout.master1')

@section('css')
    <link href="{{ asset('asset/css/report/bootstrap-multiselect.css') }}" media="screen" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/css/report/style.css') }}" type="text/css">
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
                    <li class="active"><a
                            href="{{ route('reportStatuscustomer') }}"><i
                                class="fa fa-user"></i>&nbsp;Theo nhân viên kĩ thuật</a></li>
                    <li class=""><a
                            href="{{ route('reportStatuscustomer2') }}"><i
                                class="fa fa-envelope"></i>&nbsp;Quy mô số cửa hàng</a></li>
                    <li class=""><a
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
                            </select> </div>
                        <input type="hidden" name="typefollow" id="typefollow"
                            class="form-control" value="1">
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
                                        href="https://erp.nhanh.vn/crm/report/statuscustomer#"
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

                    </div>
                </form>
                <div class="clearfix"></div>
                <div class="lolify-left-menu" style="display: none;">
                </div>
            </div>
            <div class="dgContainer">
                <div style="width: 1874px; display: none;" class="stickyHeader">
                    <table class="table table-bordered" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr class="even">
                                <th rowspan="2" style="width: 60px;">STT</th>
                                <th rowspan="2" style="width: 261px;">Nhân viên hỗ trợ kỹ thuật
                                </th>
                                <th style="width: 148px;">Mã nhân viên</th>
                                <th rowspan="2" style="width: 273px;"><a
                                        href="https://erp.nhanh.vn/crm/report/statuscustomer?sort=nostatus&amp;dir=DESC"><i
                                            class="fa fa-sort"></i> Chưa cập nhật trạng thái</a>
                                </th>
                                <th rowspan="2" style="width: 175px;"><a
                                        href="https://erp.nhanh.vn/crm/report/statuscustomer?sort=1&amp;dir=DESC"><i
                                            class="fa fa-sort"></i> Chưa sử dụng</a></th>
                                <th rowspan="2" style="width: 182px;"><a
                                        href="https://erp.nhanh.vn/crm/report/statuscustomer?sort=2&amp;dir=DESC"><i
                                            class="fa fa-sort"></i> Đang triển khai</a></th>
                                <th rowspan="2" style="width: 211px;"><a
                                        href="https://erp.nhanh.vn/crm/report/statuscustomer?sort=3&amp;dir=DESC"><i
                                            class="fa fa-sort"></i> Cần hỗ trợ, tư vấn</a></th>
                                <th rowspan="2" style="width: 174px;"><a
                                        href="https://erp.nhanh.vn/crm/report/statuscustomer?sort=4&amp;dir=DESC"><i
                                            class="fa fa-sort"></i> Đang sử dụng</a></th>
                                <th rowspan="2" style="width: 189px;"><a
                                        href="https://erp.nhanh.vn/crm/report/statuscustomer?sort=5&amp;dir=DESC"><i
                                            class="fa fa-sort"></i> Ngừng sử dụng</a></th>
                                <th rowspan="2" style="width: 128px;"><a
                                        href="https://erp.nhanh.vn/crm/report/statuscustomer?sort=6&amp;dir=DESC"><i
                                            class="fa fa-sort"></i> Dùng thử</a></th>
                                <th rowspan="2" style="width: 72px;">Tổng</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-6 dgButtons"></div>
                    <div style="clear: both;"></div><br>
                </div>
                <table id="dgCrmReportCommission" class="table table-bordered">
                    <thead>
                        <tr class="even">
                            <th rowspan="2">STT</th>
                            <th rowspan="2">Nhân viên hỗ trợ kỹ thuật</th>
                            <th>Mã nhân viên</th>
                            <th rowspan="2"><a
                                    href="https://erp.nhanh.vn/crm/report/statuscustomer?sort=nostatus&amp;dir=DESC"><i
                                        class="fa fa-sort"></i> Chưa cập nhật trạng thái</a>
                            </th>
                            <th rowspan="2"><a
                                    href="https://erp.nhanh.vn/crm/report/statuscustomer?sort=1&amp;dir=DESC"><i
                                        class="fa fa-sort"></i> Chưa sử dụng</a></th>
                            <th rowspan="2"><a
                                    href="https://erp.nhanh.vn/crm/report/statuscustomer?sort=2&amp;dir=DESC"><i
                                        class="fa fa-sort"></i> Đang triển khai</a></th>
                            <th rowspan="2"><a
                                    href="https://erp.nhanh.vn/crm/report/statuscustomer?sort=3&amp;dir=DESC"><i
                                        class="fa fa-sort"></i> Cần hỗ trợ, tư vấn</a></th>
                            <th rowspan="2"><a
                                    href="https://erp.nhanh.vn/crm/report/statuscustomer?sort=4&amp;dir=DESC"><i
                                        class="fa fa-sort"></i> Đang sử dụng</a></th>
                            <th rowspan="2"><a
                                    href="https://erp.nhanh.vn/crm/report/statuscustomer?sort=5&amp;dir=DESC"><i
                                        class="fa fa-sort"></i> Ngừng sử dụng</a></th>
                            <th rowspan="2"><a
                                    href="https://erp.nhanh.vn/crm/report/statuscustomer?sort=6&amp;dir=DESC"><i
                                        class="fa fa-sort"></i> Dùng thử</a></th>
                            <th rowspan="2">Tổng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td>1</td>
                            <td>Hồ Ngọc Huy</td>
                            <td>0646</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=18&amp;assignType=3&amp;cityId=&amp;districtId=">7</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=18&amp;assignType=3&amp;cityId=&amp;districtId=">30</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=18&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=18&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=18&amp;assignType=3&amp;cityId=&amp;districtId=">35</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=18&amp;assignType=3&amp;cityId=&amp;districtId=">179</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=18&amp;assignType=3&amp;cityId=&amp;districtId=">3</a>
                            </td>
                            <td>254</td>
                        </tr>
                        <tr class="even">
                            <td>2</td>
                            <td>Vũ Văn Trường</td>
                            <td>0671</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=137&amp;assignType=3&amp;cityId=&amp;districtId=">14</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=137&amp;assignType=3&amp;cityId=&amp;districtId=">73</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=137&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=137&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=137&amp;assignType=3&amp;cityId=&amp;districtId=">105</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=137&amp;assignType=3&amp;cityId=&amp;districtId=">69</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=137&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>261</td>
                        </tr>
                        <tr class="">
                            <td>3</td>
                            <td>Hứa Thị Mai Ngân</td>
                            <td>4062</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=799&amp;assignType=3&amp;cityId=&amp;districtId=">6</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=799&amp;assignType=3&amp;cityId=&amp;districtId=">52</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=799&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=799&amp;assignType=3&amp;cityId=&amp;districtId=">2</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=799&amp;assignType=3&amp;cityId=&amp;districtId=">77</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=799&amp;assignType=3&amp;cityId=&amp;districtId=">222</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=799&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>359</td>
                        </tr>
                        <tr class="even">
                            <td>4</td>
                            <td>Nguyễn Xuân Anh</td>
                            <td>4375</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=447&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=447&amp;assignType=3&amp;cityId=&amp;districtId=">63</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=447&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=447&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=447&amp;assignType=3&amp;cityId=&amp;districtId=">72</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=447&amp;assignType=3&amp;cityId=&amp;districtId=">29</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=447&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>165</td>
                        </tr>
                        <tr class="">
                            <td>5</td>
                            <td>Nguyễn Thanh Tùng</td>
                            <td>3152</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=86&amp;assignType=3&amp;cityId=&amp;districtId=">2</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=86&amp;assignType=3&amp;cityId=&amp;districtId=">48</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=86&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=86&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=86&amp;assignType=3&amp;cityId=&amp;districtId=">85</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=86&amp;assignType=3&amp;cityId=&amp;districtId=">182</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=86&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>317</td>
                        </tr>
                        <tr class="even">
                            <td>6</td>
                            <td>Đoàn Thị Minh Hương</td>
                            <td>1241</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=17&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=17&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=17&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=17&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=17&amp;assignType=3&amp;cityId=&amp;districtId=">8</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=17&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=17&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>9</td>
                        </tr>
                        <tr class="">
                            <td>7</td>
                            <td>Nguyễn Hữu Điệp</td>
                            <td>4822</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=906&amp;assignType=3&amp;cityId=&amp;districtId=">30</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=906&amp;assignType=3&amp;cityId=&amp;districtId=">70</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=906&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=906&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=906&amp;assignType=3&amp;cityId=&amp;districtId=">105</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=906&amp;assignType=3&amp;cityId=&amp;districtId=">76</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=906&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>281</td>
                        </tr>
                        <tr class="even">
                            <td>8</td>
                            <td>Nguyễn Viết Lâm</td>
                            <td>2965</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=14&amp;assignType=3&amp;cityId=&amp;districtId=">4</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=14&amp;assignType=3&amp;cityId=&amp;districtId=">41</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=14&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=14&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=14&amp;assignType=3&amp;cityId=&amp;districtId=">85</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=14&amp;assignType=3&amp;cityId=&amp;districtId=">42</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=14&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>172</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Phạm Viết Huy</td>
                            <td>4221</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=142&amp;assignType=3&amp;cityId=&amp;districtId=">3</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=142&amp;assignType=3&amp;cityId=&amp;districtId=">33</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=142&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=142&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=142&amp;assignType=3&amp;cityId=&amp;districtId=">69</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=142&amp;assignType=3&amp;cityId=&amp;districtId=">59</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=142&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>164</td>
                        </tr>
                        <tr class="even">
                            <td>10</td>
                            <td>Trần Lệ Uyên</td>
                            <td>7035</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=5634&amp;assignType=3&amp;cityId=&amp;districtId=">2</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=5634&amp;assignType=3&amp;cityId=&amp;districtId=">5</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=5634&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=5634&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=5634&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=5634&amp;assignType=3&amp;cityId=&amp;districtId=">29</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=5634&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>37</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>Phạm Thị Thanh</td>
                            <td>7068</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=5668&amp;assignType=3&amp;cityId=&amp;districtId=">8</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=5668&amp;assignType=3&amp;cityId=&amp;districtId=">16</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=5668&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=5668&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=5668&amp;assignType=3&amp;cityId=&amp;districtId=">55</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=5668&amp;assignType=3&amp;cityId=&amp;districtId=">32</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=5668&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>111</td>
                        </tr>
                        <tr class="even">
                            <td>12</td>
                            <td>Nguyễn Đức Kiên</td>
                            <td>7226</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=5836&amp;assignType=3&amp;cityId=&amp;districtId=">2</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=5836&amp;assignType=3&amp;cityId=&amp;districtId=">44</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=5836&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=5836&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=5836&amp;assignType=3&amp;cityId=&amp;districtId=">82</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=5836&amp;assignType=3&amp;cityId=&amp;districtId=">27</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=5836&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>155</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>Nguyễn Diệu Linh</td>
                            <td>4396</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=147&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=147&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=147&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=147&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=147&amp;assignType=3&amp;cityId=&amp;districtId=">8</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=147&amp;assignType=3&amp;cityId=&amp;districtId=">6</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=147&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>14</td>
                        </tr>
                        <tr class="even">
                            <td>14</td>
                            <td>Ngô Hữu Tình</td>
                            <td>7497</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=6115&amp;assignType=3&amp;cityId=&amp;districtId=">11</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=6115&amp;assignType=3&amp;cityId=&amp;districtId=">74</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=6115&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=6115&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=6115&amp;assignType=3&amp;cityId=&amp;districtId=">105</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=6115&amp;assignType=3&amp;cityId=&amp;districtId=">56</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=6115&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>246</td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td>Nguyễn Hữu Tùng</td>
                            <td>7230</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=5840&amp;assignType=3&amp;cityId=&amp;districtId=">3</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=5840&amp;assignType=3&amp;cityId=&amp;districtId=">27</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=5840&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=5840&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=5840&amp;assignType=3&amp;cityId=&amp;districtId=">45</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=5840&amp;assignType=3&amp;cityId=&amp;districtId=">19</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=5840&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>94</td>
                        </tr>
                        <tr class="even">
                            <td>16</td>
                            <td>Phạm Thị Thủy</td>
                            <td>7291</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=5900&amp;assignType=3&amp;cityId=&amp;districtId=">2</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=5900&amp;assignType=3&amp;cityId=&amp;districtId=">6</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=5900&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=5900&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=5900&amp;assignType=3&amp;cityId=&amp;districtId=">15</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=5900&amp;assignType=3&amp;cityId=&amp;districtId=">8</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=5900&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>31</td>
                        </tr>
                        <tr>
                            <td>17</td>
                            <td>Nguyễn Đức Công</td>
                            <td>6917</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=5532&amp;assignType=3&amp;cityId=&amp;districtId=">4</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=5532&amp;assignType=3&amp;cityId=&amp;districtId=">26</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=5532&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=5532&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=5532&amp;assignType=3&amp;cityId=&amp;districtId=">46</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=5532&amp;assignType=3&amp;cityId=&amp;districtId=">37</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=5532&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>113</td>
                        </tr>
                        <tr class="even">
                            <td>18</td>
                            <td>Nguyễn Thanh Liêm</td>
                            <td>7431</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=6050&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=6050&amp;assignType=3&amp;cityId=&amp;districtId=">9</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=6050&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=6050&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=6050&amp;assignType=3&amp;cityId=&amp;districtId=">28</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=6050&amp;assignType=3&amp;cityId=&amp;districtId=">22</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=6050&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>60</td>
                        </tr>
                        <tr>
                            <td>19</td>
                            <td>Nguyễn Thanh Lan</td>
                            <td>2659</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=21&amp;assignType=3&amp;cityId=&amp;districtId=">12</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=21&amp;assignType=3&amp;cityId=&amp;districtId=">23</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=21&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=21&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=21&amp;assignType=3&amp;cityId=&amp;districtId=">40</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=21&amp;assignType=3&amp;cityId=&amp;districtId=">24</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=21&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>99</td>
                        </tr>
                        <tr class="even">
                            <td>20</td>
                            <td>Trần Kim Ngân</td>
                            <td>7471</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=6090&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=6090&amp;assignType=3&amp;cityId=&amp;districtId=">32</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=6090&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=6090&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=6090&amp;assignType=3&amp;cityId=&amp;districtId=">46</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=6090&amp;assignType=3&amp;cityId=&amp;districtId=">21</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=6090&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>100</td>
                        </tr>
                        <tr>
                            <td>21</td>
                            <td>Đỗ Xuân Trường</td>
                            <td>4130</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=3097&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=3097&amp;assignType=3&amp;cityId=&amp;districtId=">3</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=3097&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=3097&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=3097&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=3097&amp;assignType=3&amp;cityId=&amp;districtId=">3</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=3097&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>7</td>
                        </tr>
                        <tr class="even">
                            <td>22</td>
                            <td>Lại Thị Thúy Ngần</td>
                            <td>4754</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=877&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=877&amp;assignType=3&amp;cityId=&amp;districtId=">17</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=877&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=877&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=877&amp;assignType=3&amp;cityId=&amp;districtId=">37</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=877&amp;assignType=3&amp;cityId=&amp;districtId=">21</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=877&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>76</td>
                        </tr>
                        <tr>
                            <td>23</td>
                            <td>Trần Thúy Nga</td>
                            <td>4557</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=562&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=562&amp;assignType=3&amp;cityId=&amp;districtId=">5</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=562&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=562&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=562&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=562&amp;assignType=3&amp;cityId=&amp;districtId=">4</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=562&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>10</td>
                        </tr>
                        <tr class="even">
                            <td>24</td>
                            <td>Nguyễn Thiện Tâm</td>
                            <td>1602</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=676&amp;assignType=3&amp;cityId=&amp;districtId=">3</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=676&amp;assignType=3&amp;cityId=&amp;districtId=">7</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=676&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=676&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=676&amp;assignType=3&amp;cityId=&amp;districtId=">2</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=676&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=676&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>12</td>
                        </tr>
                        <tr>
                            <td>25</td>
                            <td>Hồ Phạm Ngọc Tiên</td>
                            <td>6448</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=5089&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=5089&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=5089&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=5089&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=5089&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=5089&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=5089&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>1</td>
                        </tr>
                        <tr class="even">
                            <td>26</td>
                            <td>Ngô Tiến Tùng</td>
                            <td>7813</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=6440&amp;assignType=3&amp;cityId=&amp;districtId=">6</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=6440&amp;assignType=3&amp;cityId=&amp;districtId=">44</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=6440&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=6440&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=6440&amp;assignType=3&amp;cityId=&amp;districtId=">90</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=6440&amp;assignType=3&amp;cityId=&amp;districtId=">25</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=6440&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>165</td>
                        </tr>
                        <tr>
                            <td>27</td>
                            <td>Nguyễn Sơn Hà</td>
                            <td>8117</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=6819&amp;assignType=3&amp;cityId=&amp;districtId=">8</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=6819&amp;assignType=3&amp;cityId=&amp;districtId=">25</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=6819&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=6819&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=6819&amp;assignType=3&amp;cityId=&amp;districtId=">76</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=6819&amp;assignType=3&amp;cityId=&amp;districtId=">18</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=6819&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>127</td>
                        </tr>
                        <tr class="even">
                            <td>28</td>
                            <td>Nguyễn Huyền Trang</td>
                            <td>8158</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=6863&amp;assignType=3&amp;cityId=&amp;districtId=">3</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=6863&amp;assignType=3&amp;cityId=&amp;districtId=">26</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=6863&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=6863&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=6863&amp;assignType=3&amp;cityId=&amp;districtId=">48</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=6863&amp;assignType=3&amp;cityId=&amp;districtId=">14</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=6863&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>91</td>
                        </tr>
                        <tr>
                            <td>29</td>
                            <td>Nguyễn Trung Quân</td>
                            <td>8154</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=6858&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=6858&amp;assignType=3&amp;cityId=&amp;districtId=">10</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=6858&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=6858&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=6858&amp;assignType=3&amp;cityId=&amp;districtId=">28</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=6858&amp;assignType=3&amp;cityId=&amp;districtId=">7</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=6858&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>46</td>
                        </tr>
                        <tr class="even">
                            <td>30</td>
                            <td>Trần Văn Thành</td>
                            <td>8413</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=7155&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=7155&amp;assignType=3&amp;cityId=&amp;districtId=">17</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=7155&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=7155&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=7155&amp;assignType=3&amp;cityId=&amp;districtId=">33</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=7155&amp;assignType=3&amp;cityId=&amp;districtId=">17</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=7155&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>68</td>
                        </tr>
                        <tr>
                            <td>31</td>
                            <td>Nguyễn Diệu Linh</td>
                            <td>7533</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=6152&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=6152&amp;assignType=3&amp;cityId=&amp;districtId=">13</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=6152&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=6152&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=6152&amp;assignType=3&amp;cityId=&amp;districtId=">9</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=6152&amp;assignType=3&amp;cityId=&amp;districtId=">3</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=6152&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>26</td>
                        </tr>
                        <tr class="even">
                            <td>32</td>
                            <td>Đỗ Văn Thảo</td>
                            <td>2497</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=1004&amp;assignType=3&amp;cityId=&amp;districtId=">12</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=1004&amp;assignType=3&amp;cityId=&amp;districtId=">3</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=1004&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=1004&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=1004&amp;assignType=3&amp;cityId=&amp;districtId=">2</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=1004&amp;assignType=3&amp;cityId=&amp;districtId=">6</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=1004&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>23</td>
                        </tr>
                        <tr>
                            <td>33</td>
                            <td>Nguyễn Anh Tuấn</td>
                            <td>8396</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=7137&amp;assignType=3&amp;cityId=&amp;districtId=">7</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=7137&amp;assignType=3&amp;cityId=&amp;districtId=">13</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=7137&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=7137&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=7137&amp;assignType=3&amp;cityId=&amp;districtId=">90</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=7137&amp;assignType=3&amp;cityId=&amp;districtId=">9</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=7137&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>119</td>
                        </tr>
                        <tr class="even">
                            <td>34</td>
                            <td>Trần Thị Hương</td>
                            <td>7779</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=6403&amp;assignType=3&amp;cityId=&amp;districtId=">3</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=6403&amp;assignType=3&amp;cityId=&amp;districtId=">6</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=6403&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=6403&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=6403&amp;assignType=3&amp;cityId=&amp;districtId=">32</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=6403&amp;assignType=3&amp;cityId=&amp;districtId=">6</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=6403&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>47</td>
                        </tr>
                        <tr>
                            <td>35</td>
                            <td>Nguyễn Thị Vân Anh</td>
                            <td>4120</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=61&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=61&amp;assignType=3&amp;cityId=&amp;districtId=">4</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=61&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=61&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=61&amp;assignType=3&amp;cityId=&amp;districtId=">9</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=61&amp;assignType=3&amp;cityId=&amp;districtId=">23</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=61&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>36</td>
                        </tr>
                        <tr class="even">
                            <td>36</td>
                            <td>Nguyễn Hồng Anh</td>
                            <td>8415</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=7157&amp;assignType=3&amp;cityId=&amp;districtId=">4</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=7157&amp;assignType=3&amp;cityId=&amp;districtId=">12</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=7157&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=7157&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=7157&amp;assignType=3&amp;cityId=&amp;districtId=">27</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=7157&amp;assignType=3&amp;cityId=&amp;districtId=">7</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=7157&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>50</td>
                        </tr>
                        <tr>
                            <td>37</td>
                            <td>Lê Quốc Duy</td>
                            <td>8372</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=7111&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=7111&amp;assignType=3&amp;cityId=&amp;districtId=">11</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=7111&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=7111&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=7111&amp;assignType=3&amp;cityId=&amp;districtId=">44</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=7111&amp;assignType=3&amp;cityId=&amp;districtId=">25</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=7111&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>80</td>
                        </tr>
                        <tr class="even">
                            <td>38</td>
                            <td>Nguyễn Thành Trung</td>
                            <td>8504</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=7261&amp;assignType=3&amp;cityId=&amp;districtId=">11</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=7261&amp;assignType=3&amp;cityId=&amp;districtId=">19</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=7261&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=7261&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=7261&amp;assignType=3&amp;cityId=&amp;districtId=">42</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=7261&amp;assignType=3&amp;cityId=&amp;districtId=">8</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=7261&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>80</td>
                        </tr>
                        <tr>
                            <td>39</td>
                            <td>Trần Hoàng Nhung</td>
                            <td>4827</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=878&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=878&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=878&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=878&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=878&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=878&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=878&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>1</td>
                        </tr>
                        <tr class="even">
                            <td>40</td>
                            <td>Lê Trung Đức</td>
                            <td>8505</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=7262&amp;assignType=3&amp;cityId=&amp;districtId=">2</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=7262&amp;assignType=3&amp;cityId=&amp;districtId=">23</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=7262&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=7262&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=7262&amp;assignType=3&amp;cityId=&amp;districtId=">23</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=7262&amp;assignType=3&amp;cityId=&amp;districtId=">12</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=7262&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>60</td>
                        </tr>
                        <tr>
                            <td>41</td>
                            <td>Nguyễn Thị Hiền</td>
                            <td>7553</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=6172&amp;assignType=3&amp;cityId=&amp;districtId=">7</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=6172&amp;assignType=3&amp;cityId=&amp;districtId=">10</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=6172&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=6172&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=6172&amp;assignType=3&amp;cityId=&amp;districtId=">36</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=6172&amp;assignType=3&amp;cityId=&amp;districtId=">8</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=6172&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>61</td>
                        </tr>
                        <tr class="even">
                            <td>42</td>
                            <td>Phan Thị Thu Thảo</td>
                            <td>8570</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=7333&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=7333&amp;assignType=3&amp;cityId=&amp;districtId=">3</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=7333&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=7333&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=7333&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=7333&amp;assignType=3&amp;cityId=&amp;districtId=">4</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=7333&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>7</td>
                        </tr>
                        <tr>
                            <td>43</td>
                            <td>Hoàng Thùy Linh</td>
                            <td>8618</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=7379&amp;assignType=3&amp;cityId=&amp;districtId=">3</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=7379&amp;assignType=3&amp;cityId=&amp;districtId=">8</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=7379&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=7379&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=7379&amp;assignType=3&amp;cityId=&amp;districtId=">33</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=7379&amp;assignType=3&amp;cityId=&amp;districtId=">6</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=7379&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>50</td>
                        </tr>
                        <tr class="even">
                            <td>44</td>
                            <td>Phạm Quốc Tuấn</td>
                            <td>8871</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=7626&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=7626&amp;assignType=3&amp;cityId=&amp;districtId=">8</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=7626&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=7626&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=7626&amp;assignType=3&amp;cityId=&amp;districtId=">15</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=7626&amp;assignType=3&amp;cityId=&amp;districtId=">3</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=7626&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>26</td>
                        </tr>
                        <tr>
                            <td>45</td>
                            <td>Hồ Tấn Hải</td>
                            <td>8922</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=7680&amp;assignType=3&amp;cityId=&amp;districtId=">16</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=7680&amp;assignType=3&amp;cityId=&amp;districtId=">5</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=7680&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=7680&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=7680&amp;assignType=3&amp;cityId=&amp;districtId=">25</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=7680&amp;assignType=3&amp;cityId=&amp;districtId=">7</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=7680&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>53</td>
                        </tr>
                        <tr class="even">
                            <td>46</td>
                            <td>Hoàng Minh Thảo</td>
                            <td>8906</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=7664&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=7664&amp;assignType=3&amp;cityId=&amp;districtId=">14</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=7664&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=7664&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=7664&amp;assignType=3&amp;cityId=&amp;districtId=">18</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=7664&amp;assignType=3&amp;cityId=&amp;districtId=">7</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=7664&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>40</td>
                        </tr>
                        <tr>
                            <td>47</td>
                            <td>Đỗ Thanh Tùng</td>
                            <td>8844</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=7599&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=7599&amp;assignType=3&amp;cityId=&amp;districtId=">6</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=7599&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=7599&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=7599&amp;assignType=3&amp;cityId=&amp;districtId=">10</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=7599&amp;assignType=3&amp;cityId=&amp;districtId=">2</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=7599&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>19</td>
                        </tr>
                        <tr class="even">
                            <td>48</td>
                            <td>Lê Quang Hùng</td>
                            <td>8773</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=7529&amp;assignType=3&amp;cityId=&amp;districtId=">13</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=7529&amp;assignType=3&amp;cityId=&amp;districtId=">48</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=7529&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=7529&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=7529&amp;assignType=3&amp;cityId=&amp;districtId=">60</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=7529&amp;assignType=3&amp;cityId=&amp;districtId=">26</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=7529&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>147</td>
                        </tr>
                        <tr>
                            <td>49</td>
                            <td>Đỗ Thị Ngọc Hân</td>
                            <td>9047</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=7818&amp;assignType=3&amp;cityId=&amp;districtId=">6</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=7818&amp;assignType=3&amp;cityId=&amp;districtId=">15</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=7818&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=7818&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=7818&amp;assignType=3&amp;cityId=&amp;districtId=">24</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=7818&amp;assignType=3&amp;cityId=&amp;districtId=">8</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=7818&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>53</td>
                        </tr>
                        <tr class="even">
                            <td>50</td>
                            <td>Trần Thị Ngọc Quyền</td>
                            <td>8981</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=7753&amp;assignType=3&amp;cityId=&amp;districtId=">11</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=7753&amp;assignType=3&amp;cityId=&amp;districtId=">7</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=7753&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=7753&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=7753&amp;assignType=3&amp;cityId=&amp;districtId=">37</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=7753&amp;assignType=3&amp;cityId=&amp;districtId=">3</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=7753&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>58</td>
                        </tr>
                        <tr>
                            <td>51</td>
                            <td>Nguyễn Thùy Dung</td>
                            <td>8739</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=7500&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=7500&amp;assignType=3&amp;cityId=&amp;districtId=">2</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=7500&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=7500&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=7500&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=7500&amp;assignType=3&amp;cityId=&amp;districtId=">6</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=7500&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>10</td>
                        </tr>
                        <tr class="even">
                            <td>52</td>
                            <td>Nguyễn Đạt Trung</td>
                            <td>7923</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=6552&amp;assignType=3&amp;cityId=&amp;districtId=">17</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=6552&amp;assignType=3&amp;cityId=&amp;districtId=">14</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=6552&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=6552&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=6552&amp;assignType=3&amp;cityId=&amp;districtId=">34</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=6552&amp;assignType=3&amp;cityId=&amp;districtId=">8</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=6552&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>73</td>
                        </tr>
                        <tr>
                            <td>53</td>
                            <td>Huỳnh Diễm Thy</td>
                            <td>9015</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=7785&amp;assignType=3&amp;cityId=&amp;districtId=">6</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=7785&amp;assignType=3&amp;cityId=&amp;districtId=">5</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=7785&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=7785&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=7785&amp;assignType=3&amp;cityId=&amp;districtId=">19</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=7785&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=7785&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>31</td>
                        </tr>
                        <tr class="even">
                            <td>54</td>
                            <td>Chu Văn Thảo</td>
                            <td>9138</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=7906&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=7906&amp;assignType=3&amp;cityId=&amp;districtId=">11</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=7906&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=7906&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=7906&amp;assignType=3&amp;cityId=&amp;districtId=">13</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=7906&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=7906&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>26</td>
                        </tr>
                        <tr>
                            <td>55</td>
                            <td>Vũ Thị Hoa</td>
                            <td>9100</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=7870&amp;assignType=3&amp;cityId=&amp;districtId=">5</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=7870&amp;assignType=3&amp;cityId=&amp;districtId=">7</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=7870&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=7870&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=7870&amp;assignType=3&amp;cityId=&amp;districtId=">31</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=7870&amp;assignType=3&amp;cityId=&amp;districtId=">3</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=7870&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>46</td>
                        </tr>
                        <tr class="even">
                            <td>56</td>
                            <td>Nguyễn Thị Anh Thư</td>
                            <td>8402</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=7144&amp;assignType=3&amp;cityId=&amp;districtId=">2</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=7144&amp;assignType=3&amp;cityId=&amp;districtId=">10</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=7144&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=7144&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=7144&amp;assignType=3&amp;cityId=&amp;districtId=">27</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=7144&amp;assignType=3&amp;cityId=&amp;districtId=">8</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=7144&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>47</td>
                        </tr>
                        <tr>
                            <td>57</td>
                            <td>Cao Thị Thu Hằng</td>
                            <td>8514</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=7271&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=7271&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=7271&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=7271&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=7271&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=7271&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=7271&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>1</td>
                        </tr>
                        <tr class="even">
                            <td>58</td>
                            <td>Nguyễn Thị Ngọc My</td>
                            <td>8898</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=7656&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=7656&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=7656&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=7656&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=7656&amp;assignType=3&amp;cityId=&amp;districtId=">4</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=7656&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=7656&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>6</td>
                        </tr>
                        <tr>
                            <td>59</td>
                            <td>Nguyễn Quốc Gia Thịnh</td>
                            <td>8520</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=7277&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=7277&amp;assignType=3&amp;cityId=&amp;districtId=">3</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=7277&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=7277&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=7277&amp;assignType=3&amp;cityId=&amp;districtId=">10</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=7277&amp;assignType=3&amp;cityId=&amp;districtId=">3</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=7277&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>17</td>
                        </tr>
                        <tr class="even">
                            <td>60</td>
                            <td>Phạm Kim Yến</td>
                            <td>8592</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=7355&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=7355&amp;assignType=3&amp;cityId=&amp;districtId=">4</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=7355&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=7355&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=7355&amp;assignType=3&amp;cityId=&amp;districtId=">2</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=7355&amp;assignType=3&amp;cityId=&amp;districtId=">3</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=7355&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>9</td>
                        </tr>
                        <tr>
                            <td>61</td>
                            <td>Ngô Trí Cường</td>
                            <td>9154</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=7922&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=7922&amp;assignType=3&amp;cityId=&amp;districtId=">3</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=7922&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=7922&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=7922&amp;assignType=3&amp;cityId=&amp;districtId=">12</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=7922&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=7922&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>17</td>
                        </tr>
                        <tr class="even">
                            <td>62</td>
                            <td>Lại Thị Thu Hiền</td>
                            <td>8604</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=7367&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=7367&amp;assignType=3&amp;cityId=&amp;districtId=">2</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=7367&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=7367&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=7367&amp;assignType=3&amp;cityId=&amp;districtId=">2</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=7367&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=7367&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>63</td>
                            <td>Trần Thị Yến Phương</td>
                            <td>9215</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=7980&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=7980&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=7980&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=7980&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=7980&amp;assignType=3&amp;cityId=&amp;districtId=">8</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=7980&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=7980&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>9</td>
                        </tr>
                        <tr class="even">
                            <td>64</td>
                            <td>Cao Anh Cường</td>
                            <td>9356</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=8159&amp;assignType=3&amp;cityId=&amp;districtId=">5</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=8159&amp;assignType=3&amp;cityId=&amp;districtId=">9</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=8159&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=8159&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=8159&amp;assignType=3&amp;cityId=&amp;districtId=">28</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=8159&amp;assignType=3&amp;cityId=&amp;districtId=">9</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=8159&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>51</td>
                        </tr>
                        <tr>
                            <td>65</td>
                            <td>Lưu Thị Hiền</td>
                            <td>9181</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=7948&amp;assignType=3&amp;cityId=&amp;districtId=">2</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=7948&amp;assignType=3&amp;cityId=&amp;districtId=">6</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=7948&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=7948&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=7948&amp;assignType=3&amp;cityId=&amp;districtId=">9</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=7948&amp;assignType=3&amp;cityId=&amp;districtId=">4</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=7948&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>21</td>
                        </tr>
                        <tr class="even">
                            <td>66</td>
                            <td>Nguyễn Khánh Vinh</td>
                            <td>9362</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=8166&amp;assignType=3&amp;cityId=&amp;districtId=">3</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=8166&amp;assignType=3&amp;cityId=&amp;districtId=">6</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=8166&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=8166&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=8166&amp;assignType=3&amp;cityId=&amp;districtId=">35</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=8166&amp;assignType=3&amp;cityId=&amp;districtId=">5</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=8166&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>50</td>
                        </tr>
                        <tr>
                            <td>67</td>
                            <td>Phan Ngọc Ý Linh</td>
                            <td>9384</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=8188&amp;assignType=3&amp;cityId=&amp;districtId=">2</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=8188&amp;assignType=3&amp;cityId=&amp;districtId=">15</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=8188&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=8188&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=8188&amp;assignType=3&amp;cityId=&amp;districtId=">24</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=8188&amp;assignType=3&amp;cityId=&amp;districtId=">11</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=8188&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>52</td>
                        </tr>
                        <tr class="even">
                            <td>68</td>
                            <td>Nguyễn Thị Thu Uyên</td>
                            <td>8647</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=7409&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=7409&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=7409&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=7409&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=7409&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=7409&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=7409&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>69</td>
                            <td>Nguyễn Thị Bích Thảo</td>
                            <td>9224</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=7989&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=7989&amp;assignType=3&amp;cityId=&amp;districtId=">5</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=7989&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=7989&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=7989&amp;assignType=3&amp;cityId=&amp;districtId=">16</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=7989&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=7989&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>23</td>
                        </tr>
                        <tr class="even">
                            <td>70</td>
                            <td>Nguyễn Tiến Đạt</td>
                            <td>9442</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=8250&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=8250&amp;assignType=3&amp;cityId=&amp;districtId=">8</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=8250&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=8250&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=8250&amp;assignType=3&amp;cityId=&amp;districtId=">58</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=8250&amp;assignType=3&amp;cityId=&amp;districtId=">5</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=8250&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>71</td>
                        </tr>
                        <tr>
                            <td>71</td>
                            <td>Nguyễn Hoàng Giang</td>
                            <td>9517</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=8343&amp;assignType=3&amp;cityId=&amp;districtId=">4</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=8343&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=8343&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=8343&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=8343&amp;assignType=3&amp;cityId=&amp;districtId=">25</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=8343&amp;assignType=3&amp;cityId=&amp;districtId=">4</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=8343&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>34</td>
                        </tr>
                        <tr class="even">
                            <td>72</td>
                            <td>Nguyễn Thị Hiếu</td>
                            <td>9540</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=8371&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=8371&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=8371&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=8371&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=8371&amp;assignType=3&amp;cityId=&amp;districtId=">10</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=8371&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=8371&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>12</td>
                        </tr>
                        <tr>
                            <td>73</td>
                            <td>Nguyễn Quang Huy</td>
                            <td>9524</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=8350&amp;assignType=3&amp;cityId=&amp;districtId=">2</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=8350&amp;assignType=3&amp;cityId=&amp;districtId=">2</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=8350&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=8350&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=8350&amp;assignType=3&amp;cityId=&amp;districtId=">18</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=8350&amp;assignType=3&amp;cityId=&amp;districtId=">5</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=8350&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>27</td>
                        </tr>
                        <tr class="even">
                            <td>74</td>
                            <td>Trần Minh Thu</td>
                            <td>9556</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=8387&amp;assignType=3&amp;cityId=&amp;districtId=">5</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=8387&amp;assignType=3&amp;cityId=&amp;districtId=">8</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=8387&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=8387&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=8387&amp;assignType=3&amp;cityId=&amp;districtId=">23</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=8387&amp;assignType=3&amp;cityId=&amp;districtId=">2</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=8387&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>38</td>
                        </tr>
                        <tr>
                            <td>75</td>
                            <td>Nguyễn Thị Mai Hoa</td>
                            <td>9508</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=8334&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=8334&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=8334&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=8334&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=8334&amp;assignType=3&amp;cityId=&amp;districtId=">6</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=8334&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=8334&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>7</td>
                        </tr>
                        <tr class="even">
                            <td>76</td>
                            <td>Dương Thị Thu</td>
                            <td>9650</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=8485&amp;assignType=3&amp;cityId=&amp;districtId=">3</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=8485&amp;assignType=3&amp;cityId=&amp;districtId=">6</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=8485&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=8485&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=8485&amp;assignType=3&amp;cityId=&amp;districtId=">20</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=8485&amp;assignType=3&amp;cityId=&amp;districtId=">3</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=8485&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>32</td>
                        </tr>
                        <tr>
                            <td>77</td>
                            <td>Lê Ngọc Khánh</td>
                            <td>9585</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=8417&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=8417&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=8417&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=8417&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=8417&amp;assignType=3&amp;cityId=&amp;districtId=">9</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=8417&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=8417&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>10</td>
                        </tr>
                        <tr class="even">
                            <td>78</td>
                            <td>Lâm Viết Hùng</td>
                            <td>9621</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=8454&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=8454&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=8454&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=8454&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=8454&amp;assignType=3&amp;cityId=&amp;districtId=">4</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=8454&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=8454&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>6</td>
                        </tr>
                        <tr>
                            <td>79</td>
                            <td>Hồ Thị Lan Anh</td>
                            <td>9785</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=8621&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=8621&amp;assignType=3&amp;cityId=&amp;districtId=">3</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=8621&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=8621&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=8621&amp;assignType=3&amp;cityId=&amp;districtId=">11</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=8621&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=8621&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>15</td>
                        </tr>
                        <tr class="even">
                            <td>80</td>
                            <td>Đỗ Thị Thu Hà</td>
                            <td>9641</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=8476&amp;assignType=3&amp;cityId=&amp;districtId=">2</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=8476&amp;assignType=3&amp;cityId=&amp;districtId=">4</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=8476&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=8476&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=8476&amp;assignType=3&amp;cityId=&amp;districtId=">4</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=8476&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=8476&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>11</td>
                        </tr>
                        <tr>
                            <td>81</td>
                            <td>Nguyễn Thanh Ngân</td>
                            <td>9604</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=8434&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=8434&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=8434&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=8434&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=8434&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=8434&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=8434&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>2</td>
                        </tr>
                        <tr class="even">
                            <td>82</td>
                            <td>Huỳnh Ngọc Hải</td>
                            <td>9942</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=8694&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=8694&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=8694&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=8694&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=8694&amp;assignType=3&amp;cityId=&amp;districtId=">5</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=8694&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=8694&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>83</td>
                            <td>Lê Thị Nam</td>
                            <td>9900</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=8655&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=8655&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=8655&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=8655&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=8655&amp;assignType=3&amp;cityId=&amp;districtId=">9</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=8655&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=8655&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>11</td>
                        </tr>
                        <tr class="even">
                            <td>84</td>
                            <td>Nguyễn Thị Kiều Mỹ</td>
                            <td>9982</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=8735&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=8735&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=8735&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=8735&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=8735&amp;assignType=3&amp;cityId=&amp;districtId=">2</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=8735&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=8735&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>85</td>
                            <td>Trần Hữu Chiến</td>
                            <td>9689</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=8525&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=8525&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=8525&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=8525&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=8525&amp;assignType=3&amp;cityId=&amp;districtId=">3</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=8525&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=8525&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>4</td>
                        </tr>
                        <tr class="even">
                            <td>86</td>
                            <td>Hoàng Văn Phúc</td>
                            <td>9602</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=8432&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=8432&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=8432&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=8432&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=8432&amp;assignType=3&amp;cityId=&amp;districtId=">4</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=8432&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=8432&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>87</td>
                            <td>Nguyễn Viết Lâm</td>
                            <td>9906</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=8654&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=8654&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=8654&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=8654&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=8654&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=8654&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=8654&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>1</td>
                        </tr>
                        <tr class="even">
                            <td>88</td>
                            <td>Vũ Thị Minh Hằng</td>
                            <td>9943</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=8695&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=8695&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=8695&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=8695&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=8695&amp;assignType=3&amp;cityId=&amp;districtId=">3</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=8695&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=8695&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>89</td>
                            <td>Nguyễn Hoàng Long</td>
                            <td>9990</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=8743&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=8743&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=8743&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=8743&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=8743&amp;assignType=3&amp;cityId=&amp;districtId=">4</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=8743&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=8743&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>4</td>
                        </tr>
                        <tr class="even">
                            <td>90</td>
                            <td>Dương Minh Hiếu</td>
                            <td>9345</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=8148&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=8148&amp;assignType=3&amp;cityId=&amp;districtId=">2</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=8148&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=8148&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=8148&amp;assignType=3&amp;cityId=&amp;districtId=">3</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=8148&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=8148&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>6</td>
                        </tr>
                        <tr>
                            <td>91</td>
                            <td>Dương Thị Thanh Tú</td>
                            <td>10017</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=8769&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=8769&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=8769&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=8769&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=8769&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=8769&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=8769&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>1</td>
                        </tr>
                        <tr class="even">
                            <td>92</td>
                            <td>Hoàng Tuấn Anh</td>
                            <td>9973</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=8726&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=8726&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=8726&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=8726&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=8726&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=8726&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=8726&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>93</td>
                            <td>Nguyễn Phương Mai</td>
                            <td>10058</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=8812&amp;assignType=3&amp;cityId=&amp;districtId=">3</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=8812&amp;assignType=3&amp;cityId=&amp;districtId=">2</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=8812&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=8812&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=8812&amp;assignType=3&amp;cityId=&amp;districtId=">2</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=8812&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=8812&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>8</td>
                        </tr>
                        <tr class="even">
                            <td>94</td>
                            <td>Vũ Thị Việt Trinh</td>
                            <td>9983</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=8736&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=8736&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=8736&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=8736&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=8736&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=8736&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=8736&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>95</td>
                            <td>Đỗ Quang Trung</td>
                            <td>9945</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=8697&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=8697&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=8697&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=8697&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=8697&amp;assignType=3&amp;cityId=&amp;districtId=">3</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=8697&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=8697&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>3</td>
                        </tr>
                        <tr class="even">
                            <td>96</td>
                            <td>Vũ Tiến Tài</td>
                            <td>10049</td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=-1&amp;assignedToId=8803&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=1&amp;assignedToId=8803&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=2&amp;assignedToId=8803&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=3&amp;assignedToId=8803&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=4&amp;assignedToId=8803&amp;assignType=3&amp;cityId=&amp;districtId=">1</a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=5&amp;assignedToId=8803&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td><a target="_blank"
                                    href="https://erp.nhanh.vn/crm/account/index?status=6&amp;assignedToId=8803&amp;assignType=3&amp;cityId=&amp;districtId="></a>
                            </td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Tổng</td>
                            <td>303</td>
                            <td>1198</td>
                            <td>3</td>
                            <td>3</td>
                            <td>2472</td>
                            <td>1515</td>
                            <td>3</td>
                            <td>5497</td>
                        </tr>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-md-6 dgButtons"></div>
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
    <script type="text/javascript" src="{{ asset('asset/js/report/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/report/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/report/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/report/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/report/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/report/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/report/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/report/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/report/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/report/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/report/bootstrap-multiselect.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/report/saved_resource(2)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/report/saved_resource(3)') }}"></script>
@endsection