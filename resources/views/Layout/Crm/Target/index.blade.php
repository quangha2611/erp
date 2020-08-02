@extends('Layout.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('asset/css/crm/target/style.css') }}" type="text/css">
@endsection

@section('title','ERP-Danh sách khách hàng')

@section('content-page')
			
    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li class="active">Danh sách đăng kí chỉ tiêu</li>
        </ul>


        <div class="filterContainer">
            <form method="GET" name="productIndexFilter" class="form-inline lolify" role="form"
                id="productIndexFilter">
                <div class="col-md-10 lolify-default">

                    <div class="form-group">
                        <select name="groupId" id="groupId" class="form-control">
                            <option value="">- Đợt chỉ tiêu -</option>
                            <option value="113">Chỉ tiêu VNP HCM 07-2020</option>
                            <option value="112">CHỈ TIÊU VNP (Bạch Mã) THÁNG 07/2020</option>
                            <option value="111">CHỈ TIÊU SALE NHANH THÁNG 07.2020</option>
                            <option value="110">Chỉ tiêu VNP HCM 06-2020</option>
                            <option value="109">CHỈ TIÊU Vật giá HCM 02( anh Thịnh) Tháng 06/2020
                            </option>
                            <option value="108">CHỈ TIÊU SALE NHANH THÁNG 06.2020</option>
                            <option value="107">Chỉ Tiêu VNP HCM 05.2020</option>
                            <option value="106">CHỈ TIÊU SALE NHANH THÁNG 05.2020</option>
                            <option value="105">Chỉ Tiêu VNP HCM 04/2020</option>
                            <option value="104">CHỈ TIÊU NHANH THÁNG 04/2020</option>
                            <option value="103">CHỈ TIÊU SALE NHANH THÁNG 03/2020</option>
                            <option value="102">Chỉ Tiêu VNP HCM 03/2020</option>
                            <option value="101">Chỉ Tiêu VNP HCM 02/2020</option>
                            <option value="100">CHỈ TIÊU SALE NHANH THÁNG 02/2020</option>
                            <option value="99">CHỈ TIÊU SALE NHANH THÁNG 01/2020</option>
                            <option value="98">Chỉ tiêu Vật Giá HCM 01/2020</option>
                            <option value="97">Chỉ Tiêu Vật Giá HCM 12/2019</option>
                            <option value="96">CHỈ TIÊU NHANH THÁNG 12/2019</option>
                            <option value="95">Chỉ Tiêu Vật Giá HCM 11/2019</option>
                            <option value="94">CHỈ TIÊU NHANH THÁNG 11/2019</option>
                            <option value="93">Chỉ Tiêu Vật Giá HCM 10/2019</option>
                            <option value="92">CHỈ TIÊU NHANH THÁNG 10/2019</option>
                            <option value="91">Chỉ tiêu Vật Giá Hà Nội 10/2019</option>
                            <option value="90">Chỉ Tiêu Vật Giá HCM 09/2019</option>
                            <option value="89">CHỈ TIÊU NHANH THÁNG 09/2019</option>
                            <option value="88">Chỉ tiêu Vật Giá Hà Nội 9/2019</option>
                            <option value="87">Chỉ tiêu Vật Giá Hà Nội 8/2019</option>
                            <option value="86">Chỉ Tiêu Vật Giá HCM 08/2019</option>
                            <option value="85">CHỈ TIÊU NHANH THÁNG 08/2019</option>
                            <option value="84">CHỈ TIÊU NHANH THÁNG 07/2019</option>
                            <option value="83">Chỉ Tiêu Vật Giá HCM 07/2019</option>
                            <option value="82">CHỈ TIÊU VẬT GIÁ 06/2019</option>
                            <option value="81">Chỉ Tiêu Vật Giá HCM 06/2019</option>
                            <option value="80">CHỈ TIÊU NHANH THÁNG 06/2019</option>
                            <option value="79">Chỉ tiêu VNP Group tháng 05/2019</option>
                            <option value="78">CHỈ TIÊU NHANH THÁNG 05/2019</option>
                            <option value="77">CHỈ TIÊU VNP THÁNG 04/2019</option>
                            <option value="76">CHỈ TIÊU NHANH THÁNG 04/2019</option>
                            <option value="75">CHỈ TIÊU VNP THÁNG 03/2019</option>
                            <option value="74">CHỈ TIÊU VNP THÁNG 03/2019</option>
                            <option value="73">CHỈ TIÊU NHANH THÁNG 03/2019</option>
                            <option value="72">CHỈ TIÊU VNP THÁNG 02/2019</option>
                            <option value="71">CHỈ TIÊU NHANH THÁNG 02/2019</option>
                            <option value="70">CHỈ TIÊU VNP THÁNG 01/2019</option>
                            <option value="69">CHỈ TIÊU NHANH THÁNG 01/2019</option>
                            <option value="68">CHỈ TIÊU VNP THÁNG 12/2018</option>
                            <option value="67">CHỈ TIÊU NHANH.VN THÁNG 12/2018</option>
                            <option value="66">CHỈ TIÊU VNP THÁNG 11/2018</option>
                            <option value="65">CHỈ TIÊU NHANH.VN THÁNG 11/2018</option>
                            <option value="64">CHỈ TIÊU VNP THÁNG 10/2018</option>
                            <option value="63">CHỈ TIÊU NHANH THÁNG 10/2018</option>
                            <option value="62">Chỉ tiêu VNP tháng 9/2018</option>
                            <option value="61">CHỈ TIÊU NHANH THÁNG 09/2018</option>
                            <option value="60">Chỉ tiêu VNP tháng 8/2018</option>
                            <option value="59">CHỈ TIÊU NHANH THÁNG 8/2018</option>
                            <option value="58">Chỉ tiêu VNP tháng 7/2018</option>
                            <option value="57">CHỈ TIÊU NHANH THÁNG 07/2018</option>
                            <option value="55">Chỉ tiêu VNP tháng 6/2018</option>
                            <option value="54">CHỈ TIÊU NHANH THÁNG 6/2018</option>
                            <option value="53">Chỉ tiêu VNP tháng 5/2018</option>
                            <option value="52">CHỈ TIÊU NHANH THÁNG 5/2018</option>
                            <option value="51">Chỉ tiêu VNP tháng 4/2018</option>
                            <option value="50">CHỈ TIÊU NHANH THÁNG 4/2018</option>
                            <option value="49">CHỈ TIÊU NHANH THÁNG 3/2018</option>
                            <option value="48">Chỉ tiêu VNP tháng 3/2018</option>
                            <option value="47">Chỉ tiêu VNP tháng 2/2018</option>
                            <option value="46">ĐĂNG KÍ CHỈ TIÊU NHANH.VN THÁNG 02/2018</option>
                            <option value="45">Chỉ tiêu VNP tháng 1/2018</option>
                            <option value="44">Chỉ tiêu Nhanh Tháng 1/2018</option>
                            <option value="43">Chỉ tiêu VNP tháng 12/2017</option>
                            <option value="42">CHỈ TIÊU NHANH.VN THÁNG 12</option>
                            <option value="41">Chỉ tiêu Nhanh.vn tháng 11</option>
                            <option value="40">Chỉ tiêu VNP tháng 11/2017</option>
                            <option value="39">ĐĂNG KÍ CHỈ TIÊU NHANH.VN THÁNG 10</option>
                            <option value="38">Chỉ tiêu VNP tháng 10/2017</option>
                            <option value="37">Chỉ tiêu VNP tháng 9/2017</option>
                            <option value="36">NHANH.VN - ĐĂNG KÍ CHỈ TIÊU THÁNG 9/2017</option>
                            <option value="35">Chỉ tiêu VNP tháng 8/2017</option>
                            <option value="34">NHANH.VN - ĐĂNG KÍ CHỈ TIÊU THÁNG 8/2017</option>
                            <option value="33">Chỉ tiêu VNP tháng 7/2017</option>
                            <option value="32">CHỈ TIÊU THÁNG 7/2017- NHANH.VN</option>
                            <option value="31">Chỉ tiêu tháng 6/2017 - NHANH.VN</option>
                            <option value="29">Chỉ tiêu VNP tháng 6/2017</option>
                            <option value="28">Chỉ tiêu VNP tháng 5/2017</option>
                            <option value="27">NHANH.VN - CHỈ TIÊU THÁNG 5/2017</option>
                            <option value="26">Chỉ tiêu VNP tháng 4/2017</option>
                            <option value="25">NHANH.VN - THÁNG 4/2017</option>
                            <option value="24">Chỉ tiêu VNP tháng 3/2017</option>
                            <option value="23">Chỉ tiêu VNP tháng 2/2017</option>
                            <option value="22">Chỉ tiêu VNP tháng 1/2017</option>
                            <option value="21">Chỉ tiêu VNP tháng 12/2016</option>
                            <option value="20">Chỉ tiêu VNP tháng 11/2016</option>
                            <option value="19">Chỉ tiêu VNP tháng 10/2016</option>
                            <option value="18">Chỉ tiêu VNP tháng 9/2016</option>
                            <option value="17">Chỉ tiêu VNP tháng 8/2016</option>
                            <option value="16">Chỉ tiêu VNP tháng 7/2016</option>
                            <option value="15">Chỉ tiêu VNP tháng 6/2016</option>
                            <option value="14">Chỉ tiêu VNP tháng 5/2016</option>
                            <option value="13">Chỉ tiêu VNP tháng 4/2016</option>
                            <option value="12">Chỉ tiêu VNP tháng 3/2016</option>
                            <option value="11">Chỉ tiêu VNP tháng 2/2016</option>
                            <option value="10"> Chỉ tiêu VNP tháng 1/2016</option>
                            <option value="9">Chỉ tiêu VNP tháng 12/2015</option>
                            <option value="8">Chỉ tiêu VNP tháng 11/2015</option>
                            <option value="7">Chỉ tiêu VNP tháng 10/2015</option>
                            <option value="6">Chỉ tiêu khối Đa DV tháng 9/2015 (Chị Nguyên)</option>
                            <option value="5">Chỉ tiêu khối Đa DV tháng 9/2015 (a Bình)</option>
                            <option value="1">Chỉ tiêu Vật Giá tháng 9/2015 </option>
                        </select> </div>
                    <div class="form-group">
                        <select name="headquartersCityId" id="headquartersCityId"
                            class="form-control">
                            <option value="">- Thành Phố -</option>
                            <option value="2">TP Hà Nội</option>
                            <option value="3">TP Hồ Chí Minh</option>
                        </select> </div>
                    <input type="hidden" name="employeeId" id="employeeId" class="form-control"
                        value="">
                    <div class="form-group">
                        <input name="submit" type="submit" id="btnFilterProductContact"
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
                            <li><a href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"
                                    class="exportExcel"><i class="fa fa-file-excel-o"></i> Xuất
                                    excel trang hiện tại</a></li>
                        </ul>
                    </div>

                    <div class="btn-group pull-right lolify-bookmark" data-toggle="tooltip"
                        data-placement="top" title="" data-original-title="Đường dẫn nhanh">
                        <button class="btn  dropdown-toggle" data-toggle="dropdown" type="button"
                            aria-haspopup="true" aria-expanded="true">
                            <span class="fa fa-bookmark"></span> <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a
                                    href="https://erp.nhanh.vn/crm/target/index?quickLinkIndex=0&amp;headquartersCityId=2&amp;submit=L%E1%BB%8Dc&amp;format=excel"><i
                                        class="fa fa-tag"></i> TP Hà Nội</a></li>
                            <li><a
                                    href="https://erp.nhanh.vn/crm/target/index?quickLinkIndex=1&amp;headquartersCityId=3&amp;submit=L%E1%BB%8Dc&amp;format=excel"><i
                                        class="fa fa-tag"></i> TP Hồ Chí Minh</a></li>
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
                        <input type="text" name="id" maxlength="255" placeholder="ID" id="id"
                            class="form-control" value=""> </div>
                    <div class="form-group">
                        <select name="companyId" id="companyId" class="form-control">
                            <option value="">- Công ty -</option>
                            <option value="10">VNP group</option>
                            <option value="2">--Công ty cổ phần Vật Giá Việt Nam</option>
                            <option value="315">----Vật giá - Hà Nội</option>
                            <option value="319">----Vật giá - Hồ Chí Minh</option>
                            <option value="365">----Vật giá - Hải Phòng</option>
                            <option value="387">----WeSave</option>
                            <option value="389">----123doc.org</option>
                            <option value="390">----Cunghocvui.com</option>
                            <option value="391">----123job.vn</option>
                            <option value="392">----9houz.com</option>
                            <option value="393">----123dok.com</option>
                            <option value="321">--Công ty cổ phần TMDT Bảo Kim</option>
                            <option value="322">----Bảo Kim - Hà Nội</option>
                            <option value="323">----Bảo Kim - Hồ Chí Minh</option>
                            <option value="324">--Công ty cổ phần Nhanh.vn</option>
                            <option value="1">----Nhanh.vn</option>
                            <option value="366">----Nhanh.vn Đà Nẵng</option>
                            <option value="395">----Nhanh.vn HCM</option>
                            <option value="379">--Westay</option>
                            <option value="384">--Công ty cổ phần WeHelp</option>
                            <option value="398">--WeLove</option>
                        </select> </div>
                    <div class="form-group">
                        <select name="departmentId" id="departmentId" class="form-control">
                            <option value="">- Phòng ban -</option>
                            <option value="1270">Kinh doanh Nhanh.vn</option>
                            <option value="950">-- Nhanh.vn Hà Nội</option>
                            <option value="1072">-- -- Nhanh HN - KD1_LanNT</option>
                            <option value="1133">-- -- Nhanh HN - KD6_LâmVN</option>
                            <option value="1157">-- -- Nhanh HN - KD7_ĐiệpNH</option>
                            <option value="1248">-- -- Nhanh HN - KD11_NganLTT</option>
                            <option value="1269">-- -- CTV Kinh doanh</option>
                            <option value="1317">-- -- Nhanh HN - Phòng KD5_AnhNX</option>
                            <option value="1284">-- -- -- Nhanh HN - KD16_TungNH</option>
                            <option value="1285">-- -- -- Nhanh HN - ThanhTV_Phát triển đối tác
                            </option>
                            <option value="1318">-- -- Nhanh HN - Phòng KD2_TùngNT</option>
                            <option value="1319">-- -- Nhanh HN - Phòng KD3_HuyPV</option>
                            <option value="1320">-- -- Nhanh HN - Phòng KD4_TrườngVV</option>
                            <option value="1241">-- -- -- Nhanh HN - KD10_ThanhPT</option>
                            <option value="1263">-- -- -- Nhanh HN - KD8_CôngND</option>
                            <option value="1313">-- -- -- Nhanh HN - KD17_TùngNT</option>
                            <option value="1292">-- Nhanh Nghệ An</option>
                            <option value="1439">-- Phòng đại lý</option>
                            <option value="1440">-- -- HN - Đại lý - KD5_AnhNX</option>
                            <option value="1445">-- -- HN - Đại lý - KD18_ThanhNT</option>
                            <option value="1452">-- -- Đại lý công ty</option>
                            <option value="1453">Khối văn phòng</option>
                            <option value="300">-- Phòng IT</option>
                            <option value="452">-- -- IT admin</option>
                            <option value="453">-- -- IT ERP</option>
                            <option value="454">-- -- IT giao diện</option>
                            <option value="849">-- -- Tester</option>
                            <option value="313">-- Phòng kế toán</option>
                            <option value="840">-- Giám đốc dự án</option>
                            <option value="829">-- -- Trợ lý</option>
                            <option value="1282">-- -- Phòng Dịch Vụ Khách Hàng</option>
                            <option value="843">-- Chăm sóc đơn hàng - HươngĐTM</option>
                            <option value="1147">-- Chăm sóc khách hàng - UyênTL</option>
                            <option value="1209">-- Support văn phòng</option>
                            <option value="1387">-- Phòng nhân sự - Nhanh.vn</option>
                            <option value="1459">Khối sale dịch vụ mkt</option>
                            <option value="845">-- Marketing</option>
                            <option value="1386">-- Sale Marketing</option>
                            <option value="1419">-- Ecomcare</option>
                            <option value="1457">-- Phòng dịch vụ SEO GG MAPS</option>
                        </select> </div>
                    <div class="form-group">
                        <select name="status" id="status" class="form-control">
                            <option value="">- Trạng thái -</option>
                            <option value="-1">Chưa duyệt</option>
                            <option value="1">Đã duyệt</option>
                        </select> </div>
                    <div class="form-group">
                        <input type="text" name="employeeName" placeholder="Nhân viên"
                            id="employeeName" class="form-control ui-autocomplete-input" value=""
                            autocomplete="off"> </div>

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
                                    href="https://erp.nhanh.vn/crm/target/index?quickLinkIndex=0&amp;headquartersCityId=2&amp;submit=L%E1%BB%8Dc&amp;format=excel"
                                    class=""><i class="fa fa-tag"></i> TP Hà Nội</a></li>
                            <li class=""><a
                                    href="https://erp.nhanh.vn/crm/target/index?quickLinkIndex=1&amp;headquartersCityId=3&amp;submit=L%E1%BB%8Dc&amp;format=excel"
                                    class=""><i class="fa fa-tag"></i> TP Hồ Chí Minh</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
        <div class="dgContainer">
            <div style="display: none; width: 1556px;" class="stickyHeader">
                <table class="table table-bordered" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr class="even">
                            <th class="colCheckbox" style="width: 25px;"><input type="checkbox"
                                    class="cb" id=""></th>
                            <th style="width: 35px;">STT</th>
                            <th class="col-align-left" style="width: 239px;">Đợt chỉ tiêu</th>
                            <th class="col-align-left" style="width: 49px;">Mã NV</th>
                            <th class="col-align-left" style="width: 150px;">Tên nhân viên</th>
                            <th class="col-align-left" style="width: 334px;">Công ty | phòng ban
                            </th>
                            <th class="col-align-right" style="width: 96px;">Số tiền</th>
                            <th class="col-align-right" style="width: 72px;">GHDB (Mới)</th>
                            <th class="col-align-right" style="width: 83px;">GHDB (Tái ký)</th>
                            <th class="col-align-right" style="width: 50px;">Đặt lịch</th>
                            <th class="col-align-right" style="width: 32px;">Gọi</th>
                            <th class="col-align-right" style="width: 35px;">Gặp</th>
                            <th class="col-align-left" style="width: 96px;">Người duyệt</th>
                            <th style="width: 108px;">Ngày duyệt</th>
                            <th style="width: 109px;">Ngày đăng kí</th>
                            <th class="colControls" title="Thao tác" style="width: 31px;"><i
                                    class="fa fa-cogs icon"></i></th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div class="col-md-6 paginatorItem">
                    <div class="paginator"><span class="labelPages">1 - 100 / 8,319</span><span
                            class="disabled fa fa-step-backward"></span><span
                            class="disabled fa fa-backward"></span><a class="fa fa-forward"
                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc&amp;page=2"
                            title="Trang sau"></a> <a class="fa fa-step-forward"
                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc&amp;page=84"
                            title="Trang cuối"></a></div>
                </div>
                <div style="clear: both;"></div><br>
            </div>
            <table id="dgTarget" class="table table table-hover">
                <thead>
                    <tr class="even">
                        <th class="colCheckbox"><input type="checkbox" class="cb" id="cbCheckAll">
                        </th>
                        <th>STT</th>
                        <th class="col-align-left">Đợt chỉ tiêu</th>
                        <th class="col-align-left">Mã NV</th>
                        <th class="col-align-left">Tên nhân viên</th>
                        <th class="col-align-left">Công ty | phòng ban</th>
                        <th class="col-align-right">Số tiền</th>
                        <th class="col-align-right">GHDB (Mới)</th>
                        <th class="col-align-right">GHDB (Tái ký)</th>
                        <th class="col-align-right">Đặt lịch</th>
                        <th class="col-align-right">Gọi</th>
                        <th class="col-align-right">Gặp</th>
                        <th class="col-align-left">Người duyệt</th>
                        <th>Ngày duyệt</th>
                        <th>Ngày đăng kí</th>
                        <th class="colControls" title="Thao tác"><i class="fa fa-cogs icon"></i>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="taskStt3">
                        <td colspan="6"><b>Tổng</b></td>
                        <td class="colNumber">2.228.900.000</td>
                        <td class="colNumber">20</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input data-id="11821" class="cb check-target"
                                type="checkbox"></td>
                        <td>1</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>10147</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11821">Nguyễn
                                Ngọc Ánh</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1320">Nhanh
                                HN - Phòng KD4_TrườngVV</a></td>
                        <td class="col-align-right">5.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">21/07/2020 14:01:16</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{ route('targetEdit') }}"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11821" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="colCheckbox"><input data-id="11820" class="cb check-target"
                                type="checkbox"></td>
                        <td>2</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>10145</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11820">Trần
                                Minh Tâm</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1263">Nhanh
                                HN - KD8_CôngND</a></td>
                        <td class="col-align-right">5.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">20/07/2020 11:37:41</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{ route('targetEdit') }}"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11820" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input data-id="11819" class="cb check-target"
                                type="checkbox"></td>
                        <td>3</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>10134</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11819">Vũ
                                Quang Chung</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1318">Nhanh
                                HN - Phòng KD2_TùngNT</a></td>
                        <td class="col-align-right">5.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">17/07/2020 13:41:36</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{ route('targetEdit') }}"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11819" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="colCheckbox"><input data-id="11818" class="cb check-target"
                                type="checkbox"></td>
                        <td>4</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>10138</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11818">Nguyễn
                                Thị Như Quỳnh</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1457">Phòng
                                dịch vụ SEO GG MAPS</a></td>
                        <td class="col-align-right">5.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">16/07/2020 17:23:47</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{ route('targetEdit') }}"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11818" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input data-id="11817" class="cb check-target"
                                type="checkbox"></td>
                        <td>5</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>10136</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11817">Võ
                                Thị Thu Sương</a></td>
                        <td>Vật giá - Hồ Chí Minh | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=319&amp;departmentId=1158">Nhanh
                                HCM - Nhóm KD3_NgânTK</a></td>
                        <td class="col-align-right">5.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">16/07/2020 11:02:02</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{ route('targetEdit') }}"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11817" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input data-id="11816" class="cb check-target"
                                type="checkbox"></td>
                        <td>6</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>10135</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11816">Nguyễn
                                Thị Phương Thảo</a></td>
                        <td>Vật giá - Hồ Chí Minh | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=319&amp;departmentId=1468">Nhanh
                                HCM - Sale Marketing</a></td>
                        <td class="col-align-right">5.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">16/07/2020 11:01:16</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{ route('targetEdit') }}"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11816" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input data-id="11815" class="cb check-target"
                                type="checkbox"></td>
                        <td>7</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>10127</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11815">Lê
                                Trung Nghĩa</a></td>
                        <td>Vật giá - Hồ Chí Minh | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=319&amp;departmentId=1376">Nhanh
                                HCM - Nhóm KD4_ThịnhNQG</a></td>
                        <td class="col-align-right">5.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">15/07/2020 11:34:04</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{ route('targetEdit') }}"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11815" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input data-id="11814" class="cb check-target"
                                type="checkbox"></td>
                        <td>8</td>
                        <td>CHỈ TIÊU VNP (Bạch Mã) THÁNG 07/2020</td>
                        <td>8375</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11814">Trịnh
                                Thị Phương Nhi</a></td>
                        <td>Vật giá - Hồ Chí Minh | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=319&amp;departmentId=641">Phòng
                                KD 01</a></td>
                        <td class="col-align-right">36.300.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td>Bùi Thanh Thịnh</td>
                        <td class="col-align-center fontsize-90">15/07/2020 10:05:05</td>
                        <td class="col-align-center fontsize-90">15/07/2020 10:03:50</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input data-id="11813" class="cb check-target"
                                type="checkbox"></td>
                        <td>9</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>10130</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11813">Trần
                                Quang Nhật</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1320">Nhanh
                                HN - Phòng KD4_TrườngVV</a></td>
                        <td class="col-align-right">5.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">14/07/2020 15:47:10</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{ route('targetEdit') }}"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11813" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input data-id="11812" class="cb check-target"
                                type="checkbox"></td>
                        <td>10</td>
                        <td>CHỈ TIÊU VNP (Bạch Mã) THÁNG 07/2020</td>
                        <td>1412</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11812">Phan
                                Vũ Như Quỳnh</a></td>
                        <td>Vật giá - Hồ Chí Minh | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=319&amp;departmentId=641">Phòng
                                KD 01</a></td>
                        <td class="col-align-right">55.000.000</td>
                        <td class="col-align-right">3</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td>Bùi Thanh Thịnh</td>
                        <td class="col-align-center fontsize-90">15/07/2020 10:05:05</td>
                        <td class="col-align-center fontsize-90">14/07/2020 14:53:13</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input data-id="11811" class="cb check-target"
                                type="checkbox"></td>
                        <td>11</td>
                        <td>CHỈ TIÊU VNP (Bạch Mã) THÁNG 07/2020</td>
                        <td>4926</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11811">Phan
                                Thành Quang</a></td>
                        <td>Vật giá - Hồ Chí Minh | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=319&amp;departmentId=642">Nhóm
                                KD 24</a></td>
                        <td class="col-align-right">44.000.000</td>
                        <td class="col-align-right">3</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td>Bùi Thanh Thịnh</td>
                        <td class="col-align-center fontsize-90">15/07/2020 10:05:05</td>
                        <td class="col-align-center fontsize-90">13/07/2020 15:03:23</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input data-id="11810" class="cb check-target"
                                type="checkbox"></td>
                        <td>12</td>
                        <td>Chỉ tiêu VNP HCM 07-2020</td>
                        <td>9294</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11810">Thái
                                Chí Toàn</a></td>
                        <td>Vật giá - Hồ Chí Minh | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=319&amp;departmentId=1032">Phòng
                                KD10</a></td>
                        <td class="col-align-right">30.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">10/07/2020 09:44:13</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{ route('targetEdit') }}"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11810" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input data-id="11808" class="cb check-target"
                                type="checkbox"></td>
                        <td>13</td>
                        <td>Chỉ tiêu VNP HCM 07-2020</td>
                        <td>9190</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11808">Vũ
                                Duy Hoàng</a></td>
                        <td>Vật giá - Hồ Chí Minh | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=319&amp;departmentId=1032">Phòng
                                KD10</a></td>
                        <td class="col-align-right">28.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">09/07/2020 11:58:53</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{ route('targetEdit') }}"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11808" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input data-id="11807" class="cb check-target"
                                type="checkbox"></td>
                        <td>14</td>
                        <td>Chỉ tiêu VNP HCM 07-2020</td>
                        <td>8673</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11807">Nguyễn
                                Thị Ngọc Trầm</a></td>
                        <td>Vật giá - Hồ Chí Minh | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=319&amp;departmentId=1032">Phòng
                                KD10</a></td>
                        <td class="col-align-right">34.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">09/07/2020 11:56:02</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{ route('targetEdit') }}"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11807" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input data-id="11806" class="cb check-target"
                                type="checkbox"></td>
                        <td>15</td>
                        <td>Chỉ tiêu VNP HCM 07-2020</td>
                        <td>6846</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11806">Nguyễn
                                Duy Hưng</a></td>
                        <td>Vật giá - Hồ Chí Minh | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=319&amp;departmentId=1032">Phòng
                                KD10</a></td>
                        <td class="col-align-right">40.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">09/07/2020 11:00:15</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{ route('targetEdit') }}"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11806" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input data-id="11805" class="cb check-target"
                                type="checkbox"></td>
                        <td>16</td>
                        <td>Chỉ tiêu VNP HCM 07-2020</td>
                        <td>1601</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11805">Nguyễn
                                Hoàng Long</a></td>
                        <td>Vật giá - Hồ Chí Minh | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=319&amp;departmentId=1032">Phòng
                                KD10</a></td>
                        <td class="col-align-right">50.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">09/07/2020 10:59:53</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{ route('targetEdit') }}"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11805" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input data-id="11804" class="cb check-target"
                                type="checkbox"></td>
                        <td>17</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>10118</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11804">Nguyễn
                                Văn Sơn</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1320">Nhanh
                                HN - Phòng KD4_TrườngVV</a></td>
                        <td class="col-align-right">5.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">07/07/2020 11:22:17</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{ route('targetEdit') }}"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11804" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input data-id="11802" class="cb check-target"
                                type="checkbox"></td>
                        <td>18</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>9983</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11802">Vũ
                                Thị Việt Trinh</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1284">Nhanh
                                HN - KD16_TungNH</a></td>
                        <td class="col-align-right">15.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">07/07/2020 09:05:07</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{ route('targetEdit') }}"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11802" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input data-id="11801" class="cb check-target"
                                type="checkbox"></td>
                        <td>19</td>
                        <td>CHỈ TIÊU VNP (Bạch Mã) THÁNG 07/2020</td>
                        <td>10038</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11801">Cao
                                Thị Mỹ Duyên</a></td>
                        <td>Vật giá - Hồ Chí Minh | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=319&amp;departmentId=656">Phòng
                                KD 8</a></td>
                        <td class="col-align-right">13.200.000</td>
                        <td class="col-align-right">3</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td>Bùi Thanh Thịnh</td>
                        <td class="col-align-center fontsize-90">15/07/2020 10:05:05</td>
                        <td class="col-align-center fontsize-90">06/07/2020 10:59:41</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input data-id="11800" class="cb check-target"
                                type="checkbox"></td>
                        <td>20</td>
                        <td>CHỈ TIÊU VNP (Bạch Mã) THÁNG 07/2020</td>
                        <td>10037</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11800">Võ
                                Thị Lệ Thu</a></td>
                        <td>Vật giá - Hồ Chí Minh | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=319&amp;departmentId=641">Phòng
                                KD 01</a></td>
                        <td class="col-align-right">13.200.000</td>
                        <td class="col-align-right">3</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td>Bùi Thanh Thịnh</td>
                        <td class="col-align-center fontsize-90">15/07/2020 10:05:05</td>
                        <td class="col-align-center fontsize-90">06/07/2020 10:59:37</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input data-id="11799" class="cb check-target"
                                type="checkbox"></td>
                        <td>21</td>
                        <td>CHỈ TIÊU VNP (Bạch Mã) THÁNG 07/2020</td>
                        <td>3996</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11799">Trần
                                Văn Anh Vũ</a></td>
                        <td>Vật giá - Hồ Chí Minh | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=319&amp;departmentId=1442">Phòng
                                KD ĐDV</a></td>
                        <td class="col-align-right">44.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td>Bùi Thanh Thịnh</td>
                        <td class="col-align-center fontsize-90">15/07/2020 10:05:05</td>
                        <td class="col-align-center fontsize-90">06/07/2020 10:54:39</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input data-id="11798" class="cb check-target"
                                type="checkbox"></td>
                        <td>22</td>
                        <td>CHỈ TIÊU VNP (Bạch Mã) THÁNG 07/2020</td>
                        <td>1602</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11798">Nguyễn
                                Thiện Tâm</a></td>
                        <td>Vật giá - Hồ Chí Minh | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=319&amp;departmentId=1443">Phòng
                                KD Bảo Kim &amp; Wesave</a></td>
                        <td class="col-align-right">33.000.000</td>
                        <td class="col-align-right">5</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td>Bùi Thanh Thịnh</td>
                        <td class="col-align-center fontsize-90">15/07/2020 10:05:06</td>
                        <td class="col-align-center fontsize-90">06/07/2020 10:48:47</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input data-id="11797" class="cb check-target"
                                type="checkbox"></td>
                        <td>23</td>
                        <td>CHỈ TIÊU VNP (Bạch Mã) THÁNG 07/2020</td>
                        <td>10039</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11797">Ngọ
                                Văn Tình</a></td>
                        <td>Vật giá - Hồ Chí Minh | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=319&amp;departmentId=656">Phòng
                                KD 8</a></td>
                        <td class="col-align-right">13.200.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td>Bùi Thanh Thịnh</td>
                        <td class="col-align-center fontsize-90">15/07/2020 10:05:06</td>
                        <td class="col-align-center fontsize-90">06/07/2020 10:40:50</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input data-id="11796" class="cb check-target"
                                type="checkbox"></td>
                        <td>24</td>
                        <td>CHỈ TIÊU VNP (Bạch Mã) THÁNG 07/2020</td>
                        <td>2497</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11796">Đỗ
                                Văn Thảo</a></td>
                        <td>Vật giá - Hồ Chí Minh | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=319&amp;departmentId=656">Phòng
                                KD 8</a></td>
                        <td class="col-align-right">55.000.000</td>
                        <td class="col-align-right">3</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td>Bùi Thanh Thịnh</td>
                        <td class="col-align-center fontsize-90">15/07/2020 10:05:06</td>
                        <td class="col-align-center fontsize-90">06/07/2020 10:38:08</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input data-id="11795" class="cb check-target"
                                type="checkbox"></td>
                        <td>25</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 06.2020</td>
                        <td>10115</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11795">Trần
                                Thị Soan</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1318">Nhanh
                                HN - Phòng KD2_TùngNT</a></td>
                        <td class="col-align-right">5.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">04/07/2020 09:35:59</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{ route('targetEdit') }}"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11795" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input data-id="11794" class="cb check-target"
                                type="checkbox"></td>
                        <td>26</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>0671</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11794">Vũ
                                Văn Trường</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1320">Nhanh
                                HN - Phòng KD4_TrườngVV</a></td>
                        <td class="col-align-right">35.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:19:03</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{ route('targetEdit') }}"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11794" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input data-id="11793" class="cb check-target"
                                type="checkbox"></td>
                        <td>27</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>10116</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11793">Đồng
                                Thị Nga</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=845">Marketing</a>
                        </td>
                        <td class="col-align-right">5.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:38</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{ route('targetEdit') }}"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11793" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input data-id="11792" class="cb check-target"
                                type="checkbox"></td>
                        <td>28</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>10110</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11792">Nguyễn
                                Thị Minh Hạnh</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=845">Marketing</a>
                        </td>
                        <td class="col-align-right">5.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:38</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{ route('targetEdit') }}"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11792" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input data-id="11791" class="cb check-target"
                                type="checkbox"></td>
                        <td>29</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>10111</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11791">Võ
                                Việt Quốc Đại</a></td>
                        <td>Vật giá - Hồ Chí Minh | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=319&amp;departmentId=1468">Nhanh
                                HCM - Sale Marketing</a></td>
                        <td class="col-align-right">10.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:38</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{ route('targetEdit') }}"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11791" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input data-id="11790" class="cb check-target"
                                type="checkbox"></td>
                        <td>30</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>10108</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11790">Lê
                                Tấn Anh Trung</a></td>
                        <td>Vật giá - Hồ Chí Minh | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=319&amp;departmentId=1468">Nhanh
                                HCM - Sale Marketing</a></td>
                        <td class="col-align-right">10.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:38</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{ route('targetEdit') }}"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11790" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input data-id="11789" class="cb check-target"
                                type="checkbox"></td>
                        <td>31</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>10097</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11789">Nguyễn
                                Thị Mỹ Phụng</a></td>
                        <td>Vật giá - Hồ Chí Minh | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=319&amp;departmentId=1468">Nhanh
                                HCM - Sale Marketing</a></td>
                        <td class="col-align-right">10.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:38</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{ route('targetEdit') }}"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11789" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input data-id="11788" class="cb check-target"
                                type="checkbox"></td>
                        <td>32</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>10085</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11788">Nguyễn
                                Huỳnh Anh Thư</a></td>
                        <td>Vật giá - Hồ Chí Minh | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=319&amp;departmentId=1468">Nhanh
                                HCM - Sale Marketing</a></td>
                        <td class="col-align-right">10.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:38</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{ route('targetEdit') }}"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11788" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input data-id="11787" class="cb check-target"
                                type="checkbox"></td>
                        <td>33</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>9604</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11787">Nguyễn
                                Thanh Ngân</a></td>
                        <td>Vật giá - Hồ Chí Minh | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=319&amp;departmentId=1467">Nhanh
                                HCM - SEO GG MAPS</a></td>
                        <td class="col-align-right">10.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:38</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{ route('targetEdit') }}"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11787" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input data-id="11786" class="cb check-target"
                                type="checkbox"></td>
                        <td>34</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>10106</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11786">Hồ
                                Thị Thanh Mai</a></td>
                        <td>Vật giá - Hồ Chí Minh | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=319&amp;departmentId=1467">Nhanh
                                HCM - SEO GG MAPS</a></td>
                        <td class="col-align-right">10.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:38</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{ route('targetEdit') }}"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11786" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input data-id="11785" class="cb check-target"
                                type="checkbox"></td>
                        <td>35</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>10078</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11785">Lê
                                Tạ Tú Uyên</a></td>
                        <td>Vật giá - Hồ Chí Minh | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=319&amp;departmentId=1467">Nhanh
                                HCM - SEO GG MAPS</a></td>
                        <td class="col-align-right">10.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:37</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{ route('targetEdit') }}"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11785" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input data-id="11784" class="cb check-target"
                                type="checkbox"></td>
                        <td>36</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>10119</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11784">Trần
                                Thị Thu Trang</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1419">Ecomcare</a>
                        </td>
                        <td class="col-align-right">5.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:37</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{ route('targetEdit') }}"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11784" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input data-id="11783" class="cb check-target"
                                type="checkbox"></td>
                        <td>37</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>10090</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11783">Phạm
                                Ngọc Tiến</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1419">Ecomcare</a>
                        </td>
                        <td class="col-align-right">5.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:37</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{ route('targetEdit') }}"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11783" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input data-id="11782" class="cb check-target"
                                type="checkbox"></td>
                        <td>38</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>10100</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11782">Nguyễn
                                Ngọc Ánh</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1419">Ecomcare</a>
                        </td>
                        <td class="col-align-right">5.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:37</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{ route('targetEdit') }}"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11782" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input data-id="11781" class="cb check-target"
                                type="checkbox"></td>
                        <td>39</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>10091</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11781">Phạm
                                Quang Minh</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1386">Sale
                                Marketing</a></td>
                        <td class="col-align-right">5.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:37</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{ route('targetEdit') }}"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11781" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input data-id="11780" class="cb check-target"
                                type="checkbox"></td>
                        <td>40</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>9962</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11780">Đoàn
                                Thị Hà</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1386">Sale
                                Marketing</a></td>
                        <td class="col-align-right">18.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:37</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11780"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11780" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input data-id="11779" class="cb check-target"
                                type="checkbox"></td>
                        <td>41</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>9974</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11779">Phạm
                                Thị Nguyệt</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1386">Sale
                                Marketing</a></td>
                        <td class="col-align-right">18.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:37</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11779"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11779" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input data-id="11778" class="cb check-target"
                                type="checkbox"></td>
                        <td>42</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>7534</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11778">Trịnh
                                Xuân Tài</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1386">Sale
                                Marketing</a></td>
                        <td class="col-align-right">24.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:37</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11778"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11778" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input data-id="11777" class="cb check-target"
                                type="checkbox"></td>
                        <td>43</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>9479</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11777">Lê
                                Thúy Quỳnh</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1386">Sale
                                Marketing</a></td>
                        <td class="col-align-right">30.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:37</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11777"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11777" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input data-id="11776" class="cb check-target"
                                type="checkbox"></td>
                        <td>44</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>8514</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11776">Cao
                                Thị Thu Hằng</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1386">Sale
                                Marketing</a></td>
                        <td class="col-align-right">20.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:37</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11776"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11776" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input data-id="11775" class="cb check-target"
                                type="checkbox"></td>
                        <td>45</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>10035</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11775">Nguyễn
                                Tuấn Vũ</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1457">Phòng
                                dịch vụ SEO GG MAPS</a></td>
                        <td class="col-align-right">15.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:37</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11775"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11775" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input data-id="11774" class="cb check-target"
                                type="checkbox"></td>
                        <td>46</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>10027</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11774">Nguyễn
                                Quang Nghĩa</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1457">Phòng
                                dịch vụ SEO GG MAPS</a></td>
                        <td class="col-align-right">15.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:37</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11774"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11774" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input data-id="11773" class="cb check-target"
                                type="checkbox"></td>
                        <td>47</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>9138</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11773">Chu
                                Văn Thảo</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1457">Phòng
                                dịch vụ SEO GG MAPS</a></td>
                        <td class="col-align-right">20.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:37</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11773"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11773" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input data-id="11772" class="cb check-target"
                                type="checkbox"></td>
                        <td>48</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>9984</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11772">Nguyễn
                                Văn Long</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1457">Phòng
                                dịch vụ SEO GG MAPS</a></td>
                        <td class="col-align-right">15.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:37</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11772"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11772" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input data-id="11771" class="cb check-target"
                                type="checkbox"></td>
                        <td>49</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>10025</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11771">Đào
                                Thị Hồng Nhung</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1457">Phòng
                                dịch vụ SEO GG MAPS</a></td>
                        <td class="col-align-right">15.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:37</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11771"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11771" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input data-id="11769" class="cb check-target"
                                type="checkbox"></td>
                        <td>50</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>7553</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11769">Nguyễn
                                Thị Hiền</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1284">Nhanh
                                HN - KD16_TungNH</a></td>
                        <td class="col-align-right">27.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:37</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11769"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11769" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input data-id="11768" class="cb check-target"
                                type="checkbox"></td>
                        <td>51</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>2659</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11768">Nguyễn
                                Thanh Lan</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1072">Nhanh
                                HN - KD1_LanNT</a></td>
                        <td class="col-align-right">35.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:37</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11768"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11768" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input data-id="11767" class="cb check-target"
                                type="checkbox"></td>
                        <td>52</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>7068</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11767">Phạm
                                Thị Thanh</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1241">Nhanh
                                HN - KD10_ThanhPT</a></td>
                        <td class="col-align-right">35.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:37</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11767"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11767" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input data-id="11766" class="cb check-target"
                                type="checkbox"></td>
                        <td>53</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>9181</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11766">Lưu
                                Thị Hiền</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1241">Nhanh
                                HN - KD10_ThanhPT</a></td>
                        <td class="col-align-right">30.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:36</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11766"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11766" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input data-id="11764" class="cb check-target"
                                type="checkbox"></td>
                        <td>54</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>10017</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11764">Dương
                                Thị Thanh Tú</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1241">Nhanh
                                HN - KD10_ThanhPT</a></td>
                        <td class="col-align-right">10.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:36</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11764"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11764" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input data-id="11763" class="cb check-target"
                                type="checkbox"></td>
                        <td>55</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>4754</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11763">Lại
                                Thị Thúy Ngần</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1248">Nhanh
                                HN - KD11_NganLTT</a></td>
                        <td class="col-align-right">35.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:36</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11763"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11763" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input data-id="11762" class="cb check-target"
                                type="checkbox"></td>
                        <td>56</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>9517</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11762">Nguyễn
                                Hoàng Giang</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1248">Nhanh
                                HN - KD11_NganLTT</a></td>
                        <td class="col-align-right">27.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:36</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11762"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11762" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input data-id="11761" class="cb check-target"
                                type="checkbox"></td>
                        <td>57</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>9990</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11761">Nguyễn
                                Hoàng Long</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1248">Nhanh
                                HN - KD11_NganLTT</a></td>
                        <td class="col-align-right">18.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:36</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11761"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11761" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input data-id="11760" class="cb check-target"
                                type="checkbox"></td>
                        <td>58</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>9524</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11760">Nguyễn
                                Quang Huy</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1248">Nhanh
                                HN - KD11_NganLTT</a></td>
                        <td class="col-align-right">27.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:36</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11760"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11760" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input data-id="11759" class="cb check-target"
                                type="checkbox"></td>
                        <td>59</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>9945</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11759">Đỗ
                                Quang Trung</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1284">Nhanh
                                HN - KD16_TungNH</a></td>
                        <td class="col-align-right">18.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:36</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11759"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11759" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input data-id="11758" class="cb check-target"
                                type="checkbox"></td>
                        <td>60</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>9943</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11758">Vũ
                                Thị Minh Hằng</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1284">Nhanh
                                HN - KD16_TungNH</a></td>
                        <td class="col-align-right">18.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:36</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11758"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11758" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input data-id="11757" class="cb check-target"
                                type="checkbox"></td>
                        <td>61</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>7230</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11757">Nguyễn
                                Hữu Tùng</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1284">Nhanh
                                HN - KD16_TungNH</a></td>
                        <td class="col-align-right">35.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:36</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11757"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11757" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input data-id="11756" class="cb check-target"
                                type="checkbox"></td>
                        <td>62</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>7813</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11756">Ngô
                                Tiến Tùng</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1313">Nhanh
                                HN - KD17_TùngNT</a></td>
                        <td class="col-align-right">35.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:36</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11756"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11756" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input data-id="11755" class="cb check-target"
                                type="checkbox"></td>
                        <td>63</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>9154</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11755">Ngô
                                Trí Cường</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1313">Nhanh
                                HN - KD17_TùngNT</a></td>
                        <td class="col-align-right">30.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:36</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11755"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11755" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input data-id="11754" class="cb check-target"
                                type="checkbox"></td>
                        <td>64</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>9224</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11754">Nguyễn
                                Thị Bích Thảo</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1313">Nhanh
                                HN - KD17_TùngNT</a></td>
                        <td class="col-align-right">30.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:36</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11754"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11754" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input data-id="11753" class="cb check-target"
                                type="checkbox"></td>
                        <td>65</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>9621</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11753">Lâm
                                Viết Hùng</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1313">Nhanh
                                HN - KD17_TùngNT</a></td>
                        <td class="col-align-right">27.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:36</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11753"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11753" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input data-id="11752" class="cb check-target"
                                type="checkbox"></td>
                        <td>66</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>9689</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11752">Trần
                                Hữu Chiến</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1313">Nhanh
                                HN - KD17_TùngNT</a></td>
                        <td class="col-align-right">24.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:36</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11752"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11752" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input data-id="11751" class="cb check-target"
                                type="checkbox"></td>
                        <td>67</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>3152</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11751">Nguyễn
                                Thanh Tùng</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1318">Nhanh
                                HN - Phòng KD2_TùngNT</a></td>
                        <td class="col-align-right">35.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:36</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11751"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11751" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input data-id="11749" class="cb check-target"
                                type="checkbox"></td>
                        <td>68</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>7226</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11749">Nguyễn
                                Đức Kiên</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1318">Nhanh
                                HN - Phòng KD2_TùngNT</a></td>
                        <td class="col-align-right">35.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:36</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11749"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11749" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input data-id="11748" class="cb check-target"
                                type="checkbox"></td>
                        <td>69</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>7497</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11748">Ngô
                                Hữu Tình</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1318">Nhanh
                                HN - Phòng KD2_TùngNT</a></td>
                        <td class="col-align-right">17.500.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:36</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11748"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11748" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input data-id="11747" class="cb check-target"
                                type="checkbox"></td>
                        <td>70</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>9356</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11747">Cao
                                Anh Cường</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1318">Nhanh
                                HN - Phòng KD2_TùngNT</a></td>
                        <td class="col-align-right">30.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:36</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11747"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11747" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input data-id="11746" class="cb check-target"
                                type="checkbox"></td>
                        <td>71</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>9442</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11746">Nguyễn
                                Tiến Đạt</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1318">Nhanh
                                HN - Phòng KD2_TùngNT</a></td>
                        <td class="col-align-right">30.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:36</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11746"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11746" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input data-id="11745" class="cb check-target"
                                type="checkbox"></td>
                        <td>72</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>9650</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11745">Dương
                                Thị Thu</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1318">Nhanh
                                HN - Phòng KD2_TùngNT</a></td>
                        <td class="col-align-right">27.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:36</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11745"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11745" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input data-id="11744" class="cb check-target"
                                type="checkbox"></td>
                        <td>73</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>9641</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11744">Đỗ
                                Thị Thu Hà</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1318">Nhanh
                                HN - Phòng KD2_TùngNT</a></td>
                        <td class="col-align-right">27.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:36</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11744"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11744" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input data-id="11743" class="cb check-target"
                                type="checkbox"></td>
                        <td>74</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>9785</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11743">Hồ
                                Thị Lan Anh</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1318">Nhanh
                                HN - Phòng KD2_TùngNT</a></td>
                        <td class="col-align-right">21.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:36</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11743"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11743" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input data-id="11742" class="cb check-target"
                                type="checkbox"></td>
                        <td>75</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>10096</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11742">Lê
                                Thị Tuyết</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1318">Nhanh
                                HN - Phòng KD2_TùngNT</a></td>
                        <td class="col-align-right">5.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:36</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11742"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11742" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input data-id="11741" class="cb check-target"
                                type="checkbox"></td>
                        <td>76</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>10095</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11741">Nguyễn
                                Danh Công</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1318">Nhanh
                                HN - Phòng KD2_TùngNT</a></td>
                        <td class="col-align-right">5.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:35</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11741"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11741" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input data-id="11739" class="cb check-target"
                                type="checkbox"></td>
                        <td>77</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>10115</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11739">Trần
                                Thị Soan</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1318">Nhanh
                                HN - Phòng KD2_TùngNT</a></td>
                        <td class="col-align-right">5.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:35</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11739"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11739" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input data-id="11738" class="cb check-target"
                                type="checkbox"></td>
                        <td>78</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>4221</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11738">Phạm
                                Viết Huy</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1319">Nhanh
                                HN - Phòng KD3_HuyPV</a></td>
                        <td class="col-align-right">35.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:35</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11738"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11738" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input data-id="11737" class="cb check-target"
                                type="checkbox"></td>
                        <td>79</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>7291</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11737">Phạm
                                Thị Thủy</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1319">Nhanh
                                HN - Phòng KD3_HuyPV</a></td>
                        <td class="col-align-right">35.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:35</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11737"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11737" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input data-id="11736" class="cb check-target"
                                type="checkbox"></td>
                        <td>80</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>8154</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11736">Nguyễn
                                Trung Quân</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1319">Nhanh
                                HN - Phòng KD3_HuyPV</a></td>
                        <td class="col-align-right">35.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:35</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11736"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11736" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input data-id="11735" class="cb check-target"
                                type="checkbox"></td>
                        <td>81</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>8504</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11735">Nguyễn
                                Thành Trung</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1319">Nhanh
                                HN - Phòng KD3_HuyPV</a></td>
                        <td class="col-align-right">17.500.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:35</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11735"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11735" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input data-id="11734" class="cb check-target"
                                type="checkbox"></td>
                        <td>82</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>9100</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11734">Vũ
                                Thị Hoa</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1319">Nhanh
                                HN - Phòng KD3_HuyPV</a></td>
                        <td class="col-align-right">35.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:35</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11734"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11734" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input data-id="11733" class="cb check-target"
                                type="checkbox"></td>
                        <td>83</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>7923</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11733">Nguyễn
                                Đạt Trung</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1320">Nhanh
                                HN - Phòng KD4_TrườngVV</a></td>
                        <td class="col-align-right">17.500.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:35</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11733"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11733" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input data-id="11732" class="cb check-target"
                                type="checkbox"></td>
                        <td>84</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>9362</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11732">Nguyễn
                                Khánh Vinh</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1320">Nhanh
                                HN - Phòng KD4_TrườngVV</a></td>
                        <td class="col-align-right">30.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:35</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11732"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11732" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input data-id="11731" class="cb check-target"
                                type="checkbox"></td>
                        <td>85</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>4396</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11731">Nguyễn
                                Diệu Linh</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1317">Nhanh
                                HN - Phòng KD5_AnhNX</a></td>
                        <td class="col-align-right">35.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:35</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11731"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11731" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input data-id="11730" class="cb check-target"
                                type="checkbox"></td>
                        <td>86</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>8906</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11730">Hoàng
                                Minh Thảo</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1317">Nhanh
                                HN - Phòng KD5_AnhNX</a></td>
                        <td class="col-align-right">35.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:35</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11730"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11730" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input data-id="11729" class="cb check-target"
                                type="checkbox"></td>
                        <td>87</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>4375</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11729">Nguyễn
                                Xuân Anh</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1317">Nhanh
                                HN - Phòng KD5_AnhNX</a></td>
                        <td class="col-align-right">35.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:35</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11729"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11729" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input data-id="11728" class="cb check-target"
                                type="checkbox"></td>
                        <td>88</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>8117</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11728">Nguyễn
                                Sơn Hà</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1317">Nhanh
                                HN - Phòng KD5_AnhNX</a></td>
                        <td class="col-align-right">17.500.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:35</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11728"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11728" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input data-id="11727" class="cb check-target"
                                type="checkbox"></td>
                        <td>89</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>8158</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11727">Nguyễn
                                Huyền Trang</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1317">Nhanh
                                HN - Phòng KD5_AnhNX</a></td>
                        <td class="col-align-right">35.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:35</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11727"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11727" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input data-id="11726" class="cb check-target"
                                type="checkbox"></td>
                        <td>90</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>8396</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11726">Nguyễn
                                Anh Tuấn</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1317">Nhanh
                                HN - Phòng KD5_AnhNX</a></td>
                        <td class="col-align-right">35.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:35</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11726"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11726" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input data-id="11725" class="cb check-target"
                                type="checkbox"></td>
                        <td>91</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>8618</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11725">Hoàng
                                Thùy Linh</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1317">Nhanh
                                HN - Phòng KD5_AnhNX</a></td>
                        <td class="col-align-right">17.500.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:35</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11725"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11725" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input data-id="11724" class="cb check-target"
                                type="checkbox"></td>
                        <td>92</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>9508</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11724">Nguyễn
                                Thị Mai Hoa</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1317">Nhanh
                                HN - Phòng KD5_AnhNX</a></td>
                        <td class="col-align-right">27.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:35</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11724"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11724" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input data-id="11723" class="cb check-target"
                                type="checkbox"></td>
                        <td>93</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>9602</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11723">Hoàng
                                Văn Phúc</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1317">Nhanh
                                HN - Phòng KD5_AnhNX</a></td>
                        <td class="col-align-right">24.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:35</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11723"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11723" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input data-id="11722" class="cb check-target"
                                type="checkbox"></td>
                        <td>94</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>9996</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11722">Vũ
                                Hương Lan</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1157">Nhanh
                                HN - KD7_ĐiệpNH</a></td>
                        <td class="col-align-right">18.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:35</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11722"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11722" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input data-id="11721" class="cb check-target"
                                type="checkbox"></td>
                        <td>95</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>4822</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11721">Nguyễn
                                Hữu Điệp</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1157">Nhanh
                                HN - KD7_ĐiệpNH</a></td>
                        <td class="col-align-right">35.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:35</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11721"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11721" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input data-id="11720" class="cb check-target"
                                type="checkbox"></td>
                        <td>96</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>9973</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11720">Hoàng
                                Tuấn Anh</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1263">Nhanh
                                HN - KD8_CôngND</a></td>
                        <td class="col-align-right">15.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:35</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11720"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11720" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input data-id="11719" class="cb check-target"
                                type="checkbox"></td>
                        <td>97</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>6917</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11719">Nguyễn
                                Đức Công</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1263">Nhanh
                                HN - KD8_CôngND</a></td>
                        <td class="col-align-right">35.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:35</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11719"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11719" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input data-id="11718" class="cb check-target"
                                type="checkbox"></td>
                        <td>98</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>8773</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11718">Lê
                                Quang Hùng</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1263">Nhanh
                                HN - KD8_CôngND</a></td>
                        <td class="col-align-right">17.500.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:35</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11718"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11718" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input data-id="11717" class="cb check-target"
                                type="checkbox"></td>
                        <td>99</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>9345</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11717">Dương
                                Minh Hiếu</a></td>
                        <td>Nhanh.vn | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=1&amp;departmentId=1263">Nhanh
                                HN - KD8_CôngND</a></td>
                        <td class="col-align-right">30.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:35</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11717"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11717" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input data-id="11716" class="cb check-target"
                                type="checkbox"></td>
                        <td>100</td>
                        <td>CHỈ TIÊU SALE NHANH THÁNG 07.2020</td>
                        <td>9047</td>
                        <td><a href="https://erp.nhanh.vn/crm/target/personaltarget?targetId=11716">Đỗ
                                Thị Ngọc Hân</a></td>
                        <td>Vật giá - Hồ Chí Minh | <a
                                href="https://erp.nhanh.vn/crm/target/index?companyId=319&amp;departmentId=1126">Nhanh
                                HCM - Phòng KD1_NgânHTM</a></td>
                        <td class="col-align-right">35.000.000</td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td class="col-align-right"></td>
                        <td></td>
                        <td class="col-align-center fontsize-90"></td>
                        <td class="col-align-center fontsize-90">02/07/2020 17:18:35</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/target/edit?id=11716"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            chỉ tiêu</a></li>
                                    <li><a data-id="11716" class="deleteTarget"
                                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc#"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:7px"></i>Xóa chỉ tiêu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="taskStt3  even">
                        <td colspan="6"><b>Tổng</b></td>
                        <td class="colNumber">2.228.900.000</td>
                        <td class="colNumber">20</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                    </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div class="col-md-6 paginatorItem">
                    <div class="paginator"><span class="labelPages">1 - 100 / 8,319</span><span
                            class="disabled fa fa-step-backward"></span><span
                            class="disabled fa fa-backward"></span><a class="fa fa-forward"
                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc&amp;page=2"
                            title="Trang sau"></a> <a class="fa fa-step-forward"
                            href="https://erp.nhanh.vn/crm/target/index?submit=L%E1%BB%8Dc&amp;page=84"
                            title="Trang cuối"></a></div>
                </div>
            </div>
        </div>
        <!-- Dialog bootstrap -->
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

        <!-- Dialog bootstrap -->
        <div id="myApproveModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">×</button>
                        <h4 class="modal-title">Xác nhận duyệt chỉ tiêu</h4>
                    </div>
                    <div class="modal-body"></div>
                    <div class="modal-footer">
                        <button type="button" id="confirm-approve"
                            class="btn btn-primary confirm-approve">Xác nhận</button>
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
                    <div class="modal-body"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default reload"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" tabindex="-1" role="dialog" id="approvingModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Duyệt</h4>
                    </div>
                    <div class="modal-body">
                        <div style="text-align: center;">
                            <i class="fa fa-4x fa-cog fa-spin"></i>
                            <br>
                            <p>Đang duyệt (<span class="approving-text"></span>)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" tabindex="-1" role="dialog" id="errorModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                            aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">Lỗi</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </div>
				
@endsection

@section('js')

	<script type="text/javascript">
		var usrCnf = {
			language: 'vi'
		};
	</script>
	<script type="text/javascript" src="{{ asset('/asset/js/crm/target/saved_resource') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/crm/target/firebase-app.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/crm/target/firebase-messaging.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/crm/target/firebase-firestore.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/crm/target/firebase-auth.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/crm/target/getfirebaseconfig') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/crm/target/notification.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/crm/target/notification.reducer.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/crm/target/ckeditor.js') }}"></script>
	<script type="text/javascript">
		CKEDITOR.env.isCompatible = true;
	</script>
    <script type="text/javascript" src="{{ asset('/asset/js/crm/target/saved_resource(1)') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/crm/target/index.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/crm/target/saved_resource(2)') }}"></script>

@endsection
			