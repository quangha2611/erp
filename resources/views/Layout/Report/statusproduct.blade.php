@extends('Layout.master1')

@section('css')
    <link href="{{ asset('asset/css/report/bootstrap-multiselect.css') }}" media="screen" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/css/report/style.css') }}" type="text/css">
@endsection

@section('title','ERP-Báo cáo trạng thái khách hàng theo sản phẩm')

@section('content-page')

    <div class="tab-content">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li class="active">Báo cáo trạng thái khách hàng theo sản phẩm</li>
        </ul>
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
                    <input type="hidden" name="typefollow" id="typefollow" class="form-control"
                        value="">
                    <div class="form-group">
                        <input name="submit" type="submit" id="btnFilterCrmContact"
                            class="form-control btn btn-primary" value="Lọc"> </div>

                </div>
                <div class="col-md-2 lolify-control">
                    <div class="btn-group pull-right lolify-features open" data-toggle="tooltip"
                        data-placement="top" title="" data-original-title="Chức năng, thao tác"
                        aria-describedby="tooltip189168">
                        <button class="btn dropdown-toggle" type="button" aria-haspopup="true"
                            aria-expanded="false" data-toggle="dropdown">
                            <span class="fa fa-cog"></span> <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a id="exportExcel"><i class="fa fa-file-excel-o"></i> Xuất
                                    excel</a></li>
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
                            <th rowspan="2" style="width: 832px;">Sản phẩm</th>
                            <th style="width: 172px;">Chưa sử dụng</th>
                            <th style="width: 179px;">Đang triển khai</th>
                            <th style="width: 211px;">Cần hỗ trợ, tư vấn</th>
                            <th style="width: 170px;">Đang sử dụng</th>
                            <th style="width: 187px;">Ngừng sử dụng</th>
                            <th style="width: 122px;">Dùng thử</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div style="clear: both;"></div><br>
            </div>
            <table id="dgCrmReportStatusProduct" class="table table-bordered">
                <thead>
                    <tr class="even">
                        <th rowspan="2">Sản phẩm</th>
                        <th>Chưa sử dụng</th>
                        <th>Đang triển khai</th>
                        <th>Cần hỗ trợ, tư vấn</th>
                        <th>Đang sử dụng</th>
                        <th>Ngừng sử dụng</th>
                        <th>Dùng thử</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="h">
                        <td>Gói Pro - QLBH</td>
                        <td>200</td>
                        <td></td>
                        <td>1</td>
                        <td>640</td>
                        <td>518</td>
                        <td>10</td>
                    </tr>
                    <tr class="even">
                        <td>Phí duy trì Website</td>
                        <td>85</td>
                        <td></td>
                        <td></td>
                        <td>162</td>
                        <td>527</td>
                        <td>5</td>
                    </tr>
                    <tr class="">
                        <td>Gói Business - QLBH</td>
                        <td>41</td>
                        <td></td>
                        <td></td>
                        <td>103</td>
                        <td>198</td>
                        <td>9</td>
                    </tr>
                    <tr class="even">
                        <td>Gói Ultimate - QLBH</td>
                        <td>11</td>
                        <td></td>
                        <td></td>
                        <td>22</td>
                        <td>57</td>
                        <td>5</td>
                    </tr>
                    <tr class="">
                        <td>Phí khởi tạo website có sẵn</td>
                        <td>40</td>
                        <td></td>
                        <td></td>
                        <td>83</td>
                        <td>285</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói thiết kế website theo yêu cầu</td>
                        <td>46</td>
                        <td>1</td>
                        <td></td>
                        <td>166</td>
                        <td>85</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>Thiết kế website theo yêu cầu Responsive</td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td>7</td>
                        <td>6</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói Basic - QLBH</td>
                        <td>26</td>
                        <td></td>
                        <td></td>
                        <td>55</td>
                        <td>373</td>
                        <td>8</td>
                    </tr>
                    <tr>
                        <td>Dịch vụ vận chuyển</td>
                        <td>185</td>
                        <td>1</td>
                        <td></td>
                        <td>638</td>
                        <td>119</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gian hàng Cucre.vn</td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td>2</td>
                        <td>14</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói Wedding - QLBH</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>8</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Dịch vụ Myad</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>8</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Tiền đặt cọc lên sàn Cực Rẻ</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>3</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói phần mềm theo yêu cầu</td>
                        <td>161</td>
                        <td></td>
                        <td></td>
                        <td>623</td>
                        <td>82</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Phí chỉnh sửa Website</td>
                        <td>93</td>
                        <td></td>
                        <td></td>
                        <td>243</td>
                        <td>124</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Facebook Ad</td>
                        <td>2</td>
                        <td></td>
                        <td></td>
                        <td>4</td>
                        <td>3</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Google Ad</td>
                        <td>19</td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>SMS Quảng Cáo</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>SMS Brand Name</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Email Marketing</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Adnetwork</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Vchat</td>
                        <td>58</td>
                        <td>2</td>
                        <td></td>
                        <td>63</td>
                        <td>51</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Smart Target</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Boss Auto Up</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Tiền đặt cọc SMS marketing</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Phần mềm quản lý doanh nghiệp ERP</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>13</td>
                        <td>2</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gian hàng Vatgia.com</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>3</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Tiền đặt cọc lên sàn Vatgia.com</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>5</td>
                        <td>3</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Marketing</td>
                        <td>20</td>
                        <td></td>
                        <td>1</td>
                        <td>32</td>
                        <td>60</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Dịch vụ khác</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>GHĐB Phát sinh</td>
                        <td>7</td>
                        <td></td>
                        <td></td>
                        <td>4</td>
                        <td>5</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>GHĐB Ngoại tỉnh</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Tin vip</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Siêu vip dính</td>
                        <td></td>
                        <td>1</td>
                        <td></td>
                        <td>1</td>
                        <td>1</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Siêu vip</td>
                        <td>9</td>
                        <td></td>
                        <td>5</td>
                        <td></td>
                        <td>10</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Banner</td>
                        <td>1</td>
                        <td>1</td>
                        <td></td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Seo Popup</td>
                        <td>4</td>
                        <td>1</td>
                        <td>2</td>
                        <td>4</td>
                        <td>12</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Nạp tiền Ad by Vatgia</td>
                        <td>4</td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td>13</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Nạp tiền</td>
                        <td>376</td>
                        <td>48</td>
                        <td>27</td>
                        <td>86</td>
                        <td>390</td>
                        <td>4</td>
                    </tr>
                    <tr class="even">
                        <td>GHĐB (tái ký)</td>
                        <td>284</td>
                        <td>10</td>
                        <td>12</td>
                        <td>136</td>
                        <td>245</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>GHĐB (mới)</td>
                        <td>149</td>
                        <td>32</td>
                        <td>2</td>
                        <td>66</td>
                        <td>114</td>
                        <td>2</td>
                    </tr>
                    <tr class="even">
                        <td>Dịch vụ Myad</td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>BNC</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gian hàng phát sinh</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói thêm tính năng mới</td>
                        <td>42</td>
                        <td>1</td>
                        <td></td>
                        <td>274</td>
                        <td>36</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gian hàng Premium</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gian hàng thu CPA</td>
                        <td>2</td>
                        <td></td>
                        <td></td>
                        <td>3</td>
                        <td>2</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Phí chỉnh sửa phần mềm</td>
                        <td>8</td>
                        <td></td>
                        <td></td>
                        <td>25</td>
                        <td>1</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Thu phí CPA + 2%</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>SEO Popup (tái ký)</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Banner (tái ký)</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Nạp tiền (tái ký)</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Tin vip (tái ký)</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Siêu vip dính (tái ký)</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Siêu vip (tái ký)</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói Shipping - QLBH</td>
                        <td>100</td>
                        <td></td>
                        <td>1</td>
                        <td>150</td>
                        <td>142</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói Starter - QLBH</td>
                        <td>804</td>
                        <td>2</td>
                        <td>1</td>
                        <td>2182</td>
                        <td>541</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói Premium - QLBH</td>
                        <td>442</td>
                        <td>1</td>
                        <td></td>
                        <td>1643</td>
                        <td>250</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Gói Enterprise - QLBH</td>
                        <td>19</td>
                        <td></td>
                        <td></td>
                        <td>172</td>
                        <td>22</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Dịch vụ trả theo tháng</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Dịch vụ trả theo thời gian</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói phí tích hợp API</td>
                        <td>26</td>
                        <td></td>
                        <td></td>
                        <td>156</td>
                        <td>22</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>GHĐB (Mới - 500/3 tháng)</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>GHĐB Ngoại tỉnh (tái ký)</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói Website cơ bản</td>
                        <td>162</td>
                        <td>1</td>
                        <td></td>
                        <td>440</td>
                        <td>160</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói Website tối ưu</td>
                        <td>244</td>
                        <td></td>
                        <td></td>
                        <td>529</td>
                        <td>61</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói Website tiết kiệm</td>
                        <td>11</td>
                        <td></td>
                        <td></td>
                        <td>35</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói Website dài hạn</td>
                        <td>13</td>
                        <td></td>
                        <td></td>
                        <td>28</td>
                        <td>3</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Deal VG</td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Nạp tiền tài khoản chính</td>
                        <td>5</td>
                        <td></td>
                        <td></td>
                        <td>3</td>
                        <td>24</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói website theo yêu cầu</td>
                        <td>12</td>
                        <td></td>
                        <td></td>
                        <td>26</td>
                        <td>4</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Phần mềm QL bán thuốc</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Vpage</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói Traffic</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Zopzep - Quản lý nhà hàng</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Zopzep - Marketing</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Fanpage</td>
                        <td>19</td>
                        <td></td>
                        <td></td>
                        <td>14</td>
                        <td>15</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Nạp tiền dự án</td>
                        <td>15</td>
                        <td></td>
                        <td></td>
                        <td>8</td>
                        <td>28</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Fanpage VG</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Dịch vụ Viết bài</td>
                        <td>4</td>
                        <td></td>
                        <td></td>
                        <td>2</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Seo Banner</td>
                        <td>17</td>
                        <td>1</td>
                        <td></td>
                        <td>4</td>
                        <td>6</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td>892</td>
                        <td>2</td>
                        <td></td>
                        <td>1535</td>
                        <td>1365</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói Premium Website</td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td>17</td>
                        <td>2</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Khóa học FB Marketing</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Lipo (gói thường)</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Lipo (gói nâng cao)</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Lipo (gói cao cấp)</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói phần mềm tích hợp API sàn TMĐT</td>
                        <td>109</td>
                        <td></td>
                        <td></td>
                        <td>451</td>
                        <td>54</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói Basic 1 - QLBH - online</td>
                        <td>255</td>
                        <td>1</td>
                        <td></td>
                        <td>391</td>
                        <td>213</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói Basic 2 - QLBH - offline</td>
                        <td>150</td>
                        <td></td>
                        <td></td>
                        <td>273</td>
                        <td>84</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Máy in hóa đơn XP58</td>
                        <td>25</td>
                        <td></td>
                        <td></td>
                        <td>51</td>
                        <td>16</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Máy in Xprinter XP Q200RSU</td>
                        <td>18</td>
                        <td></td>
                        <td></td>
                        <td>37</td>
                        <td>6</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Máy in mã vạch Xprinter XP 350B</td>
                        <td>43</td>
                        <td></td>
                        <td></td>
                        <td>87</td>
                        <td>16</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Đầu đọc mã vạch</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Giấy in bill K58</td>
                        <td>17</td>
                        <td></td>
                        <td></td>
                        <td>49</td>
                        <td>14</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Giấy in bill K80</td>
                        <td>44</td>
                        <td></td>
                        <td></td>
                        <td>109</td>
                        <td>19</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Decal nhiệt in mã vạch 2 tem 35*22 ( cuộn )</td>
                        <td>52</td>
                        <td></td>
                        <td></td>
                        <td>140</td>
                        <td>19</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Ngăn kéo đựng tiền ZQ410F</td>
                        <td>4</td>
                        <td></td>
                        <td></td>
                        <td>9</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Máy quét mã vạch ZL-2200</td>
                        <td>4</td>
                        <td></td>
                        <td></td>
                        <td>8</td>
                        <td>3</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Đầu Đọc Mã Vạch CT980B</td>
                        <td>9</td>
                        <td></td>
                        <td></td>
                        <td>31</td>
                        <td>4</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Thiết kế thêm tính năng cho website: bảo mật https cho website</td>
                        <td>85</td>
                        <td>1</td>
                        <td></td>
                        <td>541</td>
                        <td>36</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Máy đọc mã vạch YJ3300</td>
                        <td>15</td>
                        <td></td>
                        <td></td>
                        <td>21</td>
                        <td>3</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Chân đế</td>
                        <td>3</td>
                        <td></td>
                        <td></td>
                        <td>11</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Cho thuê phòng</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Dịch vụ trang trí phòng</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Máy in hóa đơn XP-N200H</td>
                        <td>22</td>
                        <td></td>
                        <td></td>
                        <td>49</td>
                        <td>7</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>wePOS (basic)</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>wePOS (starter)</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>wePOS (advanced)</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>wePOS (premium)</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>wePOS (diamond)</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói phí chuyển đổi dữ liệu website</td>
                        <td>3</td>
                        <td></td>
                        <td></td>
                        <td>13</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói phí nâng cấp gói phần mềm</td>
                        <td>38</td>
                        <td></td>
                        <td></td>
                        <td>183</td>
                        <td>11</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Chăm sóc fanpage - Gói cơ bản</td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td>3</td>
                        <td>2</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Chăm sóc fanpage - Gói chuyên nghiệp</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>2</td>
                        <td>10</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Chăm sóc fanpage - Gói VIP</td>
                        <td>4</td>
                        <td></td>
                        <td></td>
                        <td>7</td>
                        <td>8</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Chăm sóc fanpage - Gói content</td>
                        <td>11</td>
                        <td></td>
                        <td></td>
                        <td>18</td>
                        <td>53</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Máy quét mã vạch Honeywell HH360</td>
                        <td>26</td>
                        <td></td>
                        <td></td>
                        <td>76</td>
                        <td>13</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Decal nhiệt in mã vạch 3 tem 35*22 (cuộn)</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>3</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Máy in mã vạch Honeywell PC42D</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>2</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói TMDT toàn diện 1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói TMDT toàn diện 2</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Thiết bị phần cứng</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Máy quét mã vạch Honeywell HF600</td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Máy đọc mã vạch Honeywell Dolphin60s</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Tên miền</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Quản trị Fanpage Basic - WeSave</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td>17</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Quản trị Fanpage Standard - WeSave</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Quản trị Fanpage Business - WeSave</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói chụp ảnh menu</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói chụp ảnh đồ ăn căn bản</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói chụp ảnh không gian</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>2</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói quay video kèm dựng</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Máy quét mã vạch YJ5900</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Phí bản quyền</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói SHIPPING dài hạn - QLBH</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>2</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói Phần mềm quản lý fanpage dài hạn</td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td>7</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói BASIC 1 dài hạn - QLBH</td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td>3</td>
                        <td>1</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói BASIC 2 dài hạn - QLBH</td>
                        <td>10</td>
                        <td></td>
                        <td></td>
                        <td>10</td>
                        <td>2</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói STARTER dài hạn - QLBH</td>
                        <td>3</td>
                        <td></td>
                        <td></td>
                        <td>31</td>
                        <td>2</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói PREMIUM dài hạn - QLBH</td>
                        <td>2</td>
                        <td></td>
                        <td></td>
                        <td>22</td>
                        <td>2</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói ENTERPRISE dài hạn - QLBH</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>2</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Quảng cáo Facebook dạng Tổng hợp ảnh Gói Căn Bản</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td>3</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Quảng cáo Facebook dạng Tổng hợp ảnh Gói Thương Gia</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Quảng cáo Facebook dạng Độc quyền ảnh Gói Căn Bản</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Quảng cáo Facebook dạng Độc quyền ảnh Gói Thương Gia</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Quảng cáo Facebook dạng Video Gói Căn Bản</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Quảng cáo Facebook dạng Video Gói Thương Gia</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói Chụp ảnh sản phẩm I</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>3</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói Chụp ảnh sản phẩm II</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói Quay video</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói Thiết kế Menu dạng truyền thống</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói Thiết kế Menu dạng hiện đại</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói Sản xuất video qua ảnh</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói Quản trị Instagram</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói Quảng cáo Facebook dạng ảnh Kênh cộng đồng</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói Quảng cáo Facebook dạng video Kênh cộng đồng</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Máy in mã vạch HPRT LPQ80</td>
                        <td>6</td>
                        <td></td>
                        <td></td>
                        <td>24</td>
                        <td>3</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Hoàn cước vận chuyển 1 triệu</td>
                        <td>10</td>
                        <td></td>
                        <td></td>
                        <td>17</td>
                        <td>3</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Hoàn cước vận chuyển 3 triệu</td>
                        <td>31</td>
                        <td></td>
                        <td></td>
                        <td>58</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Hoàn cước vận chuyển 5 triệu</td>
                        <td>14</td>
                        <td></td>
                        <td></td>
                        <td>55</td>
                        <td>2</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Hoàn cước vận chuyển 10 triệu</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>8</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói thiết kế thêm tính năng cho website</td>
                        <td>22</td>
                        <td></td>
                        <td></td>
                        <td>231</td>
                        <td>13</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Free Vpage và Vận chuyển</td>
                        <td>2</td>
                        <td></td>
                        <td></td>
                        <td>4</td>
                        <td>2</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Free Phí chỉnh sửa website</td>
                        <td>3</td>
                        <td></td>
                        <td></td>
                        <td>19</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Vchat gói Cơ bản</td>
                        <td>9</td>
                        <td></td>
                        <td></td>
                        <td>16</td>
                        <td>5</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Vchat gói Chuyên nghiệp</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Máy quét mã vạch có dây Hugo 1607</td>
                        <td>3</td>
                        <td></td>
                        <td></td>
                        <td>2</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Wemarry - Quản trị fanpage - Gói Basic</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Wemarry - Dịch vụ facebook ads</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Wemarry - Dịch vụ quảng cáo khác - Gói chụp ảnh sản phẩm 01</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Wemarry - Quản trị fanpage - Gói Standard</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Wemarry - Quản trị fanpage - Gói Business</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Wemarry - Dịch vụ quảng cáo khác - Gói chụp ảnh sản phẩm 02</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Wemarry - Gói chụp ảnh không gian</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Wemarry - Gói quay phim</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Hoàn cước vận chuyển 2 triệu</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>3</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Hoàn cước vận chuyển 15 triệu</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Hoàn cước vận chuyển 30 triệu</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Mini Combo - WeSave</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Big Combo - WeSave</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Extra Combo - WeSave</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói Free - QLBH</td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td>3</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Hoàn cước vận chuyển</td>
                        <td>5</td>
                        <td></td>
                        <td></td>
                        <td>23</td>
                        <td>11</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Combo V399</td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>4</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Máy in hoá đơn Xprinter V320L</td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td>8</td>
                        <td>2</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Hoàn cước vận chuyển 700.000đ</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Bizshare - Gói chăm sóc fanpage - Nội dung</td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Bizshare - Chạy quảng cáo</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Bizshare - Xây dựng nội dung trên Website và Fanpage</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Bizshare - Chạy chiến dịch quảng cáo trên Facebook Ads và Google
                            Adword</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Wemarry - Quản trị fanpage - Gói business</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Hoàn cước vận chuyển 12 triệu</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>4</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói Omni Starter</td>
                        <td>10</td>
                        <td></td>
                        <td></td>
                        <td>65</td>
                        <td>6</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói Omni Premium</td>
                        <td>6</td>
                        <td></td>
                        <td></td>
                        <td>54</td>
                        <td>8</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói Omni Enterprise</td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td>6</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói Combo 5 gian hàng/Page</td>
                        <td>8</td>
                        <td></td>
                        <td></td>
                        <td>18</td>
                        <td>18</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói Combo 10 gian hàng/ Page</td>
                        <td>4</td>
                        <td></td>
                        <td></td>
                        <td>10</td>
                        <td>9</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói phần mềm tích hợp API 1 sàn TMĐT (không giới hạn gian hàng)</td>
                        <td>9</td>
                        <td></td>
                        <td></td>
                        <td>66</td>
                        <td>11</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói Kho tổng (chỉ xuất nhập kho, không bán hàng)</td>
                        <td>14</td>
                        <td></td>
                        <td></td>
                        <td>160</td>
                        <td>5</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói Combo 5 cửa hàng Basic</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói Combo 10 cửa hàng Basic</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói Combo 20 cửa hàng Basic</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói Combo 5 cửa hàng Starter</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói Combo 10 cửa hàng Starter</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói Combo 20 cửa hàng Starter</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói Combo 5 cửa hàng Premium</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>2</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói Combo 10 cửa hàng Premium</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói Combo 20 cửa hàng Premium</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói Combo 5 cửa hàng Enterprise</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>2</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói Combo 10 cửa hàng Enterprise</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói Combo 20 cửa hàng Enterprise</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Hoàn cước vận chuyển 2.400.000đ</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>3</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Hoàn cước vận chuyển 3.600.000đ</td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td>8</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Hoàn cước vận chuyển 1.200.000đ</td>
                        <td>5</td>
                        <td></td>
                        <td></td>
                        <td>13</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Wehelp</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>2</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Bizshare - Gói quảng cáo Media</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Hoàn cước vận chuyển 6 triệu</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói Combo 3 fanpage</td>
                        <td>5</td>
                        <td></td>
                        <td></td>
                        <td>14</td>
                        <td>59</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Máy in HPRT POS80FE</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>5</td>
                        <td>5</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Hoàn cước vận chuyển 500.000đ</td>
                        <td>3</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>6</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Hoàn cước vận chuyển 1500000đ</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói Website khởi nghiệp</td>
                        <td>9</td>
                        <td></td>
                        <td></td>
                        <td>31</td>
                        <td>3</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói phần mềm tích hợp API sàn TMĐT dài hạn</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>2</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói API 1 sàn TMĐT dài hạn (Không giới hạn gian hàng)</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói Kho tổng dài hạn (chỉ xuất nhập kho, không bán hàng)</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>4</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói Omni Starter dài hạn</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói Omni Premium dài hạn</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói Omni Enterprise dài hạn</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói Combo 5 fanpage</td>
                        <td>8</td>
                        <td></td>
                        <td></td>
                        <td>12</td>
                        <td>10</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói Combo 5 gian hàng</td>
                        <td>2</td>
                        <td></td>
                        <td></td>
                        <td>63</td>
                        <td>9</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói Combo 5 cửa hàng Basic dài hạn</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói Combo 10 cửa hàng Basic dài hạn</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói Combo 20 cửa hàng Basic dài hạn</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói Combo 5 cửa hàng Starter dài hạn</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói Combo 10 cửa hàng Starter dài hạn</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói Combo 20 cửa hàng Starter dài hạn</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói Combo 5 cửa hàng Premium dài hạn</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói Combo 10 cửa hàng Premium dài hạn</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói Combo 20 cửa hàng Premium dài hạn</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói Combo 5 cửa hàng Enterprise dài hạn</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói Combo 10 cửa hàng Enterprise dài hạn</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói Combo 20 cửa hàng Enterprise dài hạn</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Chạy quảng cáo zalo</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói phát triển website</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>CRM Starter - weSave</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>CRM Premium - weSave</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Wemarry - thiết kế website</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Wemarry - dịch vụ GA</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói combo 3 gian hàng</td>
                        <td>2</td>
                        <td></td>
                        <td></td>
                        <td>16</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>BizShare - Dịch vụ SEO tổng thể</td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói môi giới</td>
                        <td>2</td>
                        <td></td>
                        <td></td>
                        <td>2</td>
                        <td>2</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Đầu đọc mã vạch không dây CHITENG CT980B</td>
                        <td>2</td>
                        <td></td>
                        <td></td>
                        <td>8</td>
                        <td>2</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Máy in hóa đơn Xprinter XP-58IIH</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>5</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Máy quét Datamax</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>5</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói Website khởi nghiệp dài hạn</td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td>6</td>
                        <td>1</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói Quảng Cáo Fanpage</td>
                        <td>2</td>
                        <td></td>
                        <td></td>
                        <td>18</td>
                        <td>15</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Tư vấn và tối ưu quy trình Marketing Insight</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>3</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Ngăn kéo đựng tiền JJ330 (Nhỏ)</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>2</td>
                        <td>1</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>CRM Chatbot - WeSave</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Bizshare - Dịch vụ quản lý ngân sách chạy quảng cáo</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Bizshare - Chăm sóc website, nội dung</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Bizshare - Xây dựng landing page bán hàng</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Bizshare - Tối ưu kênh bán hàng sàn TMĐT Shopee</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Wemarry - Dịch vụ SEO</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>wePOS - Phần cứng</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Máy in hóa đơn HPRT TP80BE</td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td>8</td>
                        <td>2</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Bizshare - Gói chăm sóc fanpage Facebook và Instagram</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói Premium Website dài hạn</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói Combo 10 gian hàng</td>
                        <td>3</td>
                        <td></td>
                        <td></td>
                        <td>17</td>
                        <td>1</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói Combo 10 fanpage</td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td>10</td>
                        <td>1</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói phần mềm theo yêu cầu dài hạn</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói phí tích hợp API dài hạn</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>2</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói dịch vụ chăm sóc website</td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td>31</td>
                        <td>5</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói dịch vụ nhập liệu website</td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td>21</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>BizShare - Thiết kế ấn phẩm truyền thông</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Phần mềm quản lý fanpage chốt sale – Gói 1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>2</td>
                        <td>4</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Phần mềm quản lý fanpage chốt sale – Gói 2</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Phần mềm quản lý fanpage chốt sale – Gói 3</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói dịch vụ nhập liệu sàn TMĐT</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>4</td>
                        <td>2</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói Ecomcare Shopee</td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td>17</td>
                        <td>9</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Cổng thanh toán</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Dịch vụ hỗ trợ Thu hộ</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Dịch vụ hỗ trợ Chi hộ</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Xác thực tài khoản</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói Ecomcare Lazada</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>2</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói Ecom</td>
                        <td>16</td>
                        <td>1</td>
                        <td></td>
                        <td>347</td>
                        <td>18</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói Ecom dài hạn</td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói Ecom (không giới hạn gian hàng/1 sàn TMĐT)</td>
                        <td>3</td>
                        <td></td>
                        <td></td>
                        <td>50</td>
                        <td>7</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói Ecom dài hạn (không giới hạn gian hàng/1 sàn TMĐT)</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Chăm sóc fanpage - Gói VIP 1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>9</td>
                        <td>26</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Chăm sóc fanpage - Gói VIP 2</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>2</td>
                        <td>3</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Chăm sóc fanpage - Gói VIP 3</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>4</td>
                        <td>2</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>9Houz - DV Content</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>9Houz - DV Banner</td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>9Houz - DV Seo Banner</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Bizshare - Thiết kế landing page</td>
                        <td>2</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói Thiết kế Website P</td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td>18</td>
                        <td>8</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Bizshare - Thiết kế website</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Bizshare - Thiết kế Brochure</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Bizshare - Thiết kế Logo</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Máy in mã vạch 380B</td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td>10</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Máy Đọc Mã Vạch ChipPOS</td>
                        <td>2</td>
                        <td></td>
                        <td></td>
                        <td>9</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Máy in hóa đơn K80 Xprinter n 160ii</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói Combo 5 gian hàng dài hạn</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói Thiết kế Website W</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>16</td>
                        <td>1</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Bizshare - Quảng cáo Facebook và Instagram</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Bizshare - Định hướng tư vấn truyền thông và tư vấn chiến lược</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Bizshare - Gói Quản trị kênh Thương mại điện tử</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói Thiết kế Website E</td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td>10</td>
                        <td>2</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>SEO lead</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Giấy tờ Công ty</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>10</td>
                        <td>3</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Facebook Ads</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói Ecom full sàn TMĐT</td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td>33</td>
                        <td>1</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói Ecom full sàn TMĐT dài hạn</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Máy in hóa đơn A160</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>2</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Két đựng tiền SC - 335A</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>4</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Dịch vụ trên ứng dụng Panama</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói phí nâng cấp gói phần mềm dài hạn</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói Tạo mới Maps</td>
                        <td>3</td>
                        <td></td>
                        <td></td>
                        <td>12</td>
                        <td>2</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói Xác minh Maps</td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td>10</td>
                        <td>5</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói Chăm sóc Maps</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói SEO Traffic 1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>2</td>
                        <td>1</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói SEO Traffic 2</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói SEO Traffic 3</td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Máy in hóa đơn XP-V320N</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>6</td>
                        <td>1</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói Chạy Quảng Cáo Instagram</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói Hỗ trợ quảng cáo Shopee</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>BA - Phát triển phần mềm</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói Ecom COVID Free</td>
                        <td>2</td>
                        <td></td>
                        <td></td>
                        <td>33</td>
                        <td>1</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói WEB COVID Free</td>
                        <td>2</td>
                        <td></td>
                        <td></td>
                        <td>51</td>
                        <td>2</td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>POS</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>WEB</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>ECOM</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>VPAGE</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>OMNI</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>MAP</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>ECOMCARE</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>SEO</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>FB</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>PC</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>DVPM</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>DVMKT</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Lệ phí đăng ký tên miền VN</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>3</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Phí duy trì tên miền VN</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>3</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Phí dịch vụ TK quản trị tên miền VN</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>3</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Phí khởi tạo tên miền quốc tế</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Phí đăng ký tên miền quốc tế</td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td>2</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Phí duy trì tên miền quốc tế</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Vchat gói nâng cao</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói SEO CƠ BẢN</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>11</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói SEO TỐI ƯU</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>4</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Máy đếm cầm tay</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>2</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>SMS Brandname</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>2</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Vchat gói Forum</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Giấy in mã vạch 2 tem</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>3</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói khởi tạo và Decor gian hàng</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>DV GTGT</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>SMS</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>DV TÊN MIỀN</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói chăm sóc gian hàng chuyên nghiệp</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>123job - Gói mở hồ sơ ứng viên</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Máy in tem nhiệt N41</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói chăm sóc website seo cơ bản</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói chăm sóc website seo tối ưu</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>3</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Gói Hỗ trợ và định hướng content seo</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gói Tool quét data facebook</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="even">
                        <td>Máy quét mã vạch Antech 1266i</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><b>Tổng</b></td>
                        <td><b class="text-danger">5870</b></td>
                        <td><b class="text-danger">108</b></td>
                        <td><b class="text-danger">52</b></td>
                        <td><b class="text-danger">14943</b></td>
                        <td><b class="text-danger">6957</b></td>
                        <td><b class="text-danger">53</b></td>
                    </tr>
                    <tr class="even">
                        <td><b>Tổng cộng</b></td>
                        <td colspan="6"><b>27983</b></td>
                    </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
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
    <script type="text/javascript" src="{{ asset('asset/js/report/saved_resource(2)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/report/department.js') }}"></script>
@endsection