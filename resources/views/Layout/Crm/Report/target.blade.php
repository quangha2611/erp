@extends('Layout.master1')

@section('css')
    <link href="{{ asset('asset/css/crm/report/bootstrap-multiselect.css') }}" media="screen" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/css/crm/report/style.css') }}" type="text/css">
@endsection

@section('title','ERP-Báo cáo chỉ tiêu')

@section('content-page')

    <div class="tab-content">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li class="active">Báo cáo theo nhân viên</li>
        </ul>
        <div class="filterContainer">
            <form method="GET" name="crmReportEmployeesFilter" class="form-inline lolify"
                role="form" id="crmReportEmployeesFilter">
                <div class="col-md-10 lolify-default">

                    <div class="form-group">
                        <input type="text" name="daterangepicker"
                            class="form-control date-range-picker" id="daterangepicker"
                            value="01/07/2020 - 31/07/2020"> </div>
                    <div class="form-group">
                        <select name="groupId" id="groupId" class="form-control">
                            <option value="">- Đợt chỉ tiêu -</option>
                            <option value="113">Chỉ tiêu VNP HCM 07-2020</option>
                            <option value="112">CHỈ TIÊU VNP (Bạch Mã) THÁNG 07/2020</option>
                            <option value="111">CHỈ TIÊU SALE NHANH THÁNG 07.2020</option>
                            <option value="110">Chỉ tiêu VNP HCM 06-2020</option>
                            <option value="109">CHỈ TIÊU Vật giá HCM 02( anh Thịnh) Tháng
                                06/2020</option>
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
                        </select> </div>
                    <div class="form-group">
                        <select name="companyId" id="companyId"
                            class="form-control select2-hidden-accessible" tabindex="-1"
                            aria-hidden="true">
                            <option value="">- Công ty nhân viên -</option>
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
                        </select><span
                            class="select2 select2-container select2-container--default select2-container--below"
                            dir="ltr" style="width: 150px;"><span class="selection"><span
                                    class="select2-selection select2-selection--single"
                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                    tabindex="0"
                                    aria-labelledby="select2-companyId-container"><span
                                        class="select2-selection__rendered"
                                        id="select2-companyId-container"><span
                                            class="select2-selection__placeholder">Công
                                            ty</span></span><span
                                        class="select2-selection__arrow" role="presentation"><b
                                            role="presentation"></b></span></span></span><span
                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                    </div>
                    <div class="form-group">
                        <select name="employeeDepartmentId" id="employeeDepartmentId"
                            class="form-control select2-hidden-accessible" tabindex="-1"
                            aria-hidden="true">
                            <option value="">- Phòng ban NV -</option>
                        </select><span
                            class="select2 select2-container select2-container--default select2-container--below"
                            dir="ltr" style="width: 127px;"><span class="selection"><span
                                    class="select2-selection select2-selection--single"
                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                    tabindex="0"
                                    aria-labelledby="select2-employeeDepartmentId-container"><span
                                        class="select2-selection__rendered"
                                        id="select2-employeeDepartmentId-container"><span
                                            class="select2-selection__placeholder">Phòng ban của
                                            nhân viên</span></span><span
                                        class="select2-selection__arrow" role="presentation"><b
                                            role="presentation"></b></span></span></span><span
                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                    </div>
                    <div class="form-group">
                        <select name="supplyCompanyId" id="supplyCompanyId"
                            class="form-control">
                            <option value="">- Cty cung cấp sp -</option>
                            <option value="1">Nhanh.vn</option>
                            <option value="10">VNP group</option>
                            <option value="2">---Công ty cổ phần Vật Giá Việt Nam</option>
                            <option value="315">------Vật giá - Hà Nội</option>
                            <option value="391">------123job.vn</option>
                            <option value="14">---Easycare.vn</option>
                            <option value="321">---Công ty cổ phần TMDT Bảo Kim</option>
                            <option value="384">---Công ty cổ phần WeHelp</option>
                        </select> </div>
                    <div class="form-group">
                        <input type="text" name="q" placeholder="Tên hoặc mã nhân sự" id="q"
                            class="form-control" value=""> </div>
                    <div class="form-group">
                        <select name="contractType" id="contractType" class="form-control">
                            <option value="">- Loại hợp đồng -</option>
                            <option value="1">Hợp đồng thường</option>
                            <option value="2">Hợp đồng Marketing</option>
                            <option value="3">Hợp đồng đặt cọc</option>
                        </select> </div>
                    <div class="form-group">
                        <select name="type" id="type" class="form-control">
                            <option value="">- Hình thức ký -</option>
                            <option value="1">Ký mới</option>
                            <option value="2">Tái ký</option>
                        </select> </div>
                    <div class="form-group">
                        <select name="accountingType" id="accountingType" class="form-control">
                            <option value="">- Hình thức thanh toán -</option>
                            <option value="3">Tiền mặt</option>
                            <option value="1">Chuyển khoản</option>
                        </select> </div>
                    <div class="form-group">
                        <select name="source" id="source" class="form-control">
                            <option value="">- Nguồn thông tin -</option>
                            <option value="-1">Chưa cập nhật nguồn</option>
                            <option value="999">Đã cập nhật nguồn</option>
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
                            <li><a href="https://erp.nhanh.vn/crm/report/target#"
                                    id="exportExcel"><i class="fa fa-download fa-lg"></i> Xuất
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
                        <select name="extractDepartmentIds[]" multiple="multiple"
                            class="form-control multiselect" id="extractDepartmentIds"
                            style="display: none;">
                            <option value="">- Loại bỏ Phòng ban -</option>
                        </select>
                        <div class="btn-group"><button type="button"
                                class="multiselect dropdown-toggle btn btn-default"
                                data-toggle="dropdown" title="Loại trừ phòng ban">Loại trừ phòng
                                ban <b class="caret"></b></button>
                            <ul class="multiselect-container dropdown-menu">
                                <li class="multiselect-item filter" value="0">
                                    <div class="input-group"><span class="input-group-addon"><i
                                                class="glyphicon glyphicon-search"></i></span><input
                                            class="form-control multiselect-search" type="text"
                                            placeholder="Search"></div>
                                </li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value=""> - Loại bỏ Phòng ban
                                            -</label></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="form-group">
                        <select name="productId[]" multiple="multiple" id="productId"
                            class="form-control" style="display: none;">
                            <optgroup label="Nhanh.vn">
                                <option value="1">Gói Pro - QLBH</option>
                                <option value="103">Gói thiết kế website theo yêu cầu</option>
                                <option value="107">Dịch vụ vận chuyển</option>
                                <option value="112">Gói phần mềm theo yêu cầu</option>
                                <option value="125">Phần mềm quản lý doanh nghiệp ERP</option>
                                <option value="236">Gói thêm tính năng mới</option>
                                <option value="251">Gói Shipping - QLBH</option>
                                <option value="252">Gói Starter - QLBH</option>
                                <option value="253">Gói Premium - QLBH</option>
                                <option value="254">Gói Enterprise - QLBH</option>
                                <option value="261">Gói phí tích hợp API</option>
                                <option value="267">Gói Website cơ bản</option>
                                <option value="268">Gói Website tối ưu</option>
                                <option value="269">Gói Website tiết kiệm</option>
                                <option value="273">Gói website theo yêu cầu</option>
                                <option value="284">Gói Phần mềm quản lý fanpage</option>
                                <option value="285">Gói Premium Website</option>
                                <option value="293">Gói Basic 1 - QLBH - online</option>
                                <option value="294">Gói Basic 2 - QLBH - offline</option>
                                <option value="297">Máy in mã vạch Xprinter XP 350B</option>
                                <option value="299">Giấy in bill K58</option>
                                <option value="300">Giấy in bill K80</option>
                                <option value="301">Decal nhiệt in mã vạch 2 tem 35*22 ( cuộn )
                                </option>
                                <option value="302">Ngăn kéo đựng tiền ZQ410F</option>
                                <option value="305">Thiết kế thêm tính năng cho website: bảo mật
                                    https cho website</option>
                                <option value="306">Máy đọc mã vạch YJ3300</option>
                                <option value="307">Chân đế</option>
                                <option value="310">Máy in hóa đơn XP-N200H</option>
                                <option value="316">Gói phí chuyển đổi dữ liệu website</option>
                                <option value="317">Gói phí nâng cấp gói phần mềm</option>
                                <option value="321">Chăm sóc fanpage - Gói content</option>
                                <option value="322">Máy quét mã vạch Honeywell HH360</option>
                                <option value="324">Máy in mã vạch Honeywell PC42D</option>
                                <option value="328">Máy quét mã vạch Honeywell HF600</option>
                                <option value="366">Máy in mã vạch HPRT LPQ80</option>
                                <option value="372">Gói thiết kế thêm tính năng cho website
                                </option>
                                <option value="385">Free Phí chỉnh sửa website</option>
                                <option value="388">Máy quét mã vạch có dây Hugo 1607</option>
                                <option value="403">Gói Free - QLBH</option>
                                <option value="404">Hoàn cước vận chuyển</option>
                                <option value="414">Gói Omni Starter</option>
                                <option value="415">Gói Omni Premium</option>
                                <option value="416">Gói Omni Enterprise</option>
                                <option value="420">Gói Kho tổng (chỉ xuất nhập kho, không bán
                                    hàng)</option>
                                <option value="439">Gói Combo 3 fanpage</option>
                                <option value="440">Máy in HPRT POS80FE</option>
                                <option value="450">Gói Combo 5 fanpage</option>
                                <option value="451">Gói Combo 5 gian hàng</option>
                                <option value="471">Gói combo 3 gian hàng</option>
                                <option value="474">Gói môi giới</option>
                                <option value="476">Máy in hóa đơn Xprinter XP-58IIH</option>
                                <option value="477">Máy quét Datamax</option>
                                <option value="479">Gói Quảng Cáo Fanpage</option>
                                <option value="481">Ngăn kéo đựng tiền JJ330 (Nhỏ)</option>
                                <option value="489">Máy in hóa đơn HPRT TP80BE</option>
                                <option value="492">Gói Combo 10 gian hàng</option>
                                <option value="493">Gói Combo 10 fanpage</option>
                                <option value="497">Gói dịch vụ nhập liệu website</option>
                                <option value="502">Gói dịch vụ nhập liệu sàn TMĐT</option>
                                <option value="503">Gói Ecomcare Shopee</option>
                                <option value="508">Gói Ecomcare Lazada</option>
                                <option value="509">Gói Ecom</option>
                                <option value="511">Gói Ecom (không giới hạn gian hàng/1 sàn
                                    TMĐT)</option>
                                <option value="513">Chăm sóc fanpage - Gói VIP 1</option>
                                <option value="514">Chăm sóc fanpage - Gói VIP 2</option>
                                <option value="515">Chăm sóc fanpage - Gói VIP 3</option>
                                <option value="520">Gói Thiết kế Website P</option>
                                <option value="524">Máy in mã vạch 380B</option>
                                <option value="525">Máy Đọc Mã Vạch ChipPOS</option>
                                <option value="528">Gói Thiết kế Website W</option>
                                <option value="532">Gói Thiết kế Website E</option>
                                <option value="534">Giấy tờ Công ty</option>
                                <option value="536">Gói Ecom full sàn TMĐT</option>
                                <option value="538">Máy in hóa đơn A160</option>
                                <option value="539">Két đựng tiền SC - 335A</option>
                                <option value="542">Gói Tạo mới Maps</option>
                                <option value="543">Gói Xác minh Maps</option>
                                <option value="544">Gói Chăm sóc Maps</option>
                                <option value="548">Máy in hóa đơn XP-V320N</option>
                                <option value="549">Gói Chạy Quảng Cáo Instagram</option>
                                <option value="550">Gói Hỗ trợ quảng cáo Shopee</option>
                                <option value="552">Gói Ecom COVID Free</option>
                                <option value="553">Gói WEB COVID Free</option>
                                <option value="554">POS</option>
                                <option value="555">WEB</option>
                                <option value="556">ECOM</option>
                                <option value="557">VPAGE</option>
                                <option value="558">OMNI</option>
                                <option value="559">MAP</option>
                                <option value="560">ECOMCARE</option>
                                <option value="561">SEO</option>
                                <option value="562">FB</option>
                                <option value="563">PC</option>
                                <option value="564">DVPM</option>
                                <option value="565">DVMKT</option>
                                <option value="566">Lệ phí đăng ký tên miền VN</option>
                                <option value="567">Phí duy trì tên miền VN</option>
                                <option value="568">Phí dịch vụ TK quản trị tên miền VN</option>
                                <option value="570">Phí đăng ký tên miền quốc tế</option>
                                <option value="571">Phí duy trì tên miền quốc tế</option>
                                <option value="573">Gói SEO CƠ BẢN</option>
                                <option value="574">Gói SEO TỐI ƯU</option>
                                <option value="575">Máy đếm cầm tay</option>
                                <option value="576">SMS Brandname</option>
                                <option value="578">Giấy in mã vạch 2 tem</option>
                                <option value="579">Gói khởi tạo và Decor gian hàng</option>
                                <option value="580">DV GTGT</option>
                                <option value="581">SMS</option>
                                <option value="582">DV TÊN MIỀN</option>
                                <option value="583">Gói chăm sóc gian hàng chuyên nghiệp
                                </option>
                                <option value="585">Máy in tem nhiệt N41</option>
                                <option value="586">Gói chăm sóc website seo cơ bản</option>
                                <option value="587">Gói chăm sóc website seo tối ưu</option>
                                <option value="588">Gói Hỗ trợ và định hướng content seo
                                </option>
                                <option value="589">Gói Tool quét data facebook</option>
                                <option value="590">Máy quét mã vạch Antech 1266i</option>
                            </optgroup>
                            <optgroup label="Công ty cổ phần Vật Giá Việt Nam">
                                <option value="114">Facebook Ad</option>
                                <option value="115">Google Ad</option>
                                <option value="120">Vchat</option>
                                <option value="220">Marketing</option>
                                <option value="222">GHĐB Phát sinh</option>
                                <option value="223">GHĐB Ngoại tỉnh</option>
                                <option value="224">Tin vip</option>
                                <option value="225">Siêu vip dính</option>
                                <option value="226">Siêu vip</option>
                                <option value="227">Banner</option>
                                <option value="229">Nạp tiền Ad by Vatgia</option>
                                <option value="230">Nạp tiền</option>
                                <option value="231">GHĐB (tái ký)</option>
                                <option value="232">GHĐB (mới)</option>
                                <option value="235">Gian hàng phát sinh</option>
                                <option value="237">Gian hàng Premium</option>
                                <option value="240">Gian hàng thu CPA</option>
                                <option value="246">Banner (tái ký)</option>
                                <option value="247">Nạp tiền (tái ký)</option>
                                <option value="248">Tin vip (tái ký)</option>
                                <option value="249">Siêu vip dính (tái ký)</option>
                                <option value="250">Siêu vip (tái ký)</option>
                                <option value="271">Deal VG</option>
                                <option value="272">Nạp tiền tài khoản chính</option>
                                <option value="275">Vpage</option>
                                <option value="276">Gói Traffic</option>
                                <option value="278">Zopzep - Marketing</option>
                                <option value="279">Fanpage</option>
                                <option value="280">Nạp tiền dự án</option>
                                <option value="281">Fanpage VG</option>
                                <option value="282">Dịch vụ Viết bài</option>
                                <option value="283">Seo Banner</option>
                                <option value="286">Khóa học FB Marketing</option>
                                <option value="288">Lipo (gói thường)</option>
                                <option value="289">Lipo (gói nâng cao)</option>
                                <option value="290">Lipo (gói cao cấp)</option>
                                <option value="308">Cho thuê phòng</option>
                                <option value="309">Dịch vụ trang trí phòng</option>
                                <option value="311">wePOS (basic)</option>
                                <option value="312">wePOS (starter)</option>
                                <option value="313">wePOS (advanced)</option>
                                <option value="314">wePOS (premium)</option>
                                <option value="315">wePOS (diamond)</option>
                                <option value="325">Gói TMDT toàn diện 1</option>
                                <option value="326">Gói TMDT toàn diện 2</option>
                                <option value="331">Quản trị Fanpage Basic - WeSave</option>
                                <option value="332">Quản trị Fanpage Standard - WeSave</option>
                                <option value="333">Quản trị Fanpage Business - WeSave</option>
                                <option value="334">Gói chụp ảnh menu</option>
                                <option value="335">Gói chụp ảnh đồ ăn căn bản</option>
                                <option value="336">Gói chụp ảnh không gian</option>
                                <option value="337">Gói quay video kèm dựng</option>
                                <option value="349">Quảng cáo Facebook dạng Tổng hợp ảnh Gói Căn
                                    Bản</option>
                                <option value="350">Quảng cáo Facebook dạng Tổng hợp ảnh Gói
                                    Thương Gia</option>
                                <option value="351">Quảng cáo Facebook dạng Độc quyền ảnh Gói
                                    Căn Bản</option>
                                <option value="352">Quảng cáo Facebook dạng Độc quyền ảnh Gói
                                    Thương Gia</option>
                                <option value="353">Quảng cáo Facebook dạng Video Gói Căn Bản
                                </option>
                                <option value="354">Quảng cáo Facebook dạng Video Gói Thương Gia
                                </option>
                                <option value="355">Gói Chụp ảnh sản phẩm I</option>
                                <option value="356">Gói Chụp ảnh sản phẩm II</option>
                                <option value="357">Gói Quay video</option>
                                <option value="358">Gói Thiết kế Menu dạng truyền thống</option>
                                <option value="359">Gói Thiết kế Menu dạng hiện đại</option>
                                <option value="360">Gói Sản xuất video qua ảnh</option>
                                <option value="361">Gói Quản trị Instagram</option>
                                <option value="362">Gói Quảng cáo Facebook dạng ảnh Kênh cộng
                                    đồng</option>
                                <option value="363">Gói Quảng cáo Facebook dạng video Kênh cộng
                                    đồng</option>
                                <option value="386">Vchat gói Cơ bản</option>
                                <option value="387">Vchat gói Chuyên nghiệp</option>
                                <option value="389">Wemarry - Quản trị fanpage - Gói Basic
                                </option>
                                <option value="390">Wemarry - Dịch vụ facebook ads</option>
                                <option value="391">Wemarry - Dịch vụ quảng cáo khác - Gói chụp
                                    ảnh sản phẩm 01</option>
                                <option value="400">Mini Combo - WeSave</option>
                                <option value="401">Big Combo - WeSave</option>
                                <option value="402">Extra Combo - WeSave</option>
                                <option value="412">Wemarry - Quản trị fanpage - Gói business
                                </option>
                                <option value="436">Wehelp</option>
                                <option value="465">Chạy quảng cáo zalo</option>
                                <option value="466">Gói phát triển website</option>
                                <option value="467">CRM Starter - weSave</option>
                                <option value="468">CRM Premium - weSave</option>
                                <option value="469">Wemarry - thiết kế website</option>
                                <option value="470">Wemarry - dịch vụ GA</option>
                                <option value="480">Tư vấn và tối ưu quy trình Marketing Insight
                                </option>
                                <option value="482">CRM Chatbot - WeSave</option>
                                <option value="487">Wemarry - Dịch vụ SEO</option>
                                <option value="488">wePOS - Phần cứng</option>
                                <option value="499">Phần mềm quản lý fanpage chốt sale – Gói 1
                                </option>
                                <option value="500">Phần mềm quản lý fanpage chốt sale – Gói 2
                                </option>
                                <option value="501">Phần mềm quản lý fanpage chốt sale – Gói 3
                                </option>
                                <option value="516">9Houz - DV Content</option>
                                <option value="517">9Houz - DV Banner</option>
                                <option value="518">9Houz - DV Seo Banner</option>
                                <option value="572">Vchat gói nâng cao</option>
                                <option value="577">Vchat gói Forum</option>
                            </optgroup>
                            <optgroup label="VNP group">
                                <option value="392">Wemarry - Quản trị fanpage - Gói Standard
                                </option>
                                <option value="393">Wemarry - Quản trị fanpage - Gói Business
                                </option>
                                <option value="394">Wemarry - Dịch vụ quảng cáo khác - Gói chụp
                                    ảnh sản phẩm 02</option>
                                <option value="395">Wemarry - Gói chụp ảnh không gian</option>
                                <option value="396">Wemarry - Gói quay phim</option>
                            </optgroup>
                            <optgroup label="Easycare.vn">
                                <option value="258">Dịch vụ trả theo tháng</option>
                                <option value="259">Dịch vụ trả theo thời gian</option>
                            </optgroup>
                            <optgroup label="Vật giá - Hà Nội">
                                <option value="274">Phần mềm QL bán thuốc</option>
                                <option value="277">Zopzep - Quản lý nhà hàng</option>
                                <option value="551">BA - Phát triển phần mềm</option>
                            </optgroup>
                            <optgroup label="Công ty cổ phần TMDT Bảo Kim">
                                <option value="504">Cổng thanh toán</option>
                                <option value="505">Dịch vụ hỗ trợ Thu hộ</option>
                                <option value="506">Dịch vụ hỗ trợ Chi hộ</option>
                                <option value="507">Xác thực tài khoản</option>
                                <option value="540">Dịch vụ trên ứng dụng Panama</option>
                            </optgroup>
                            <optgroup label="Công ty cổ phần WeHelp">
                                <option value="408">Bizshare - Gói chăm sóc fanpage - Nội dung
                                </option>
                                <option value="409">Bizshare - Chạy quảng cáo</option>
                                <option value="410">Bizshare - Xây dựng nội dung trên Website và
                                    Fanpage</option>
                                <option value="411">Bizshare - Chạy chiến dịch quảng cáo trên
                                    Facebook Ads và Google Adword</option>
                                <option value="437">Bizshare - Gói quảng cáo Media</option>
                                <option value="472">BizShare - Dịch vụ SEO tổng thể</option>
                                <option value="483">Bizshare - Dịch vụ quản lý ngân sách chạy
                                    quảng cáo</option>
                                <option value="484">Bizshare - Chăm sóc website, nội dung
                                </option>
                                <option value="485">Bizshare - Xây dựng landing page bán hàng
                                </option>
                                <option value="486">Bizshare - Tối ưu kênh bán hàng sàn TMĐT
                                    Shopee</option>
                                <option value="490">Bizshare - Gói chăm sóc fanpage Facebook và
                                    Instagram</option>
                                <option value="498">BizShare - Thiết kế ấn phẩm truyền thông
                                </option>
                                <option value="519">Bizshare - Thiết kế landing page</option>
                                <option value="521">Bizshare - Thiết kế website</option>
                                <option value="522">Bizshare - Thiết kế Brochure</option>
                                <option value="523">Bizshare - Thiết kế Logo</option>
                                <option value="529">Bizshare - Quảng cáo Facebook và Instagram
                                </option>
                                <option value="530">Bizshare - Định hướng tư vấn truyền thông và
                                    tư vấn chiến lược</option>
                                <option value="531">Bizshare - Gói Quản trị kênh Thương mại điện
                                    tử</option>
                                <option value="533">SEO lead</option>
                                <option value="535">Facebook Ads</option>
                            </optgroup>
                            <optgroup label="123job.vn">
                                <option value="584">123job - Gói mở hồ sơ ứng viên</option>
                            </optgroup>
                        </select>
                        <div class="btn-group"><button type="button"
                                class="multiselect dropdown-toggle btn btn-default"
                                data-toggle="dropdown" title="Sản phẩm">Sản phẩm <b
                                    class="caret"></b></button>
                            <ul class="multiselect-container dropdown-menu">
                                <li class="multiselect-item filter" value="0">
                                    <div class="input-group"><span class="input-group-addon"><i
                                                class="glyphicon glyphicon-search"></i></span><input
                                            class="form-control multiselect-search" type="text"
                                            placeholder="Search"></div>
                                </li>
                                <li class="multiselect-item group"><label
                                        class="multiselect-group">Nhanh.vn</label></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="1"> Gói Pro -
                                            QLBH</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="103"> Gói thiết kế
                                            website theo yêu cầu</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="107"> Dịch vụ vận
                                            chuyển</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="112"> Gói phần mềm theo
                                            yêu cầu</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="125"> Phần mềm quản lý
                                            doanh nghiệp ERP</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="236"> Gói thêm tính năng
                                            mới</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="251"> Gói Shipping -
                                            QLBH</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="252"> Gói Starter -
                                            QLBH</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="253"> Gói Premium -
                                            QLBH</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="254"> Gói Enterprise -
                                            QLBH</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="261"> Gói phí tích hợp
                                            API</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="267"> Gói Website cơ
                                            bản</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="268"> Gói Website tối
                                            ưu</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="269"> Gói Website tiết
                                            kiệm</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="273"> Gói website theo
                                            yêu cầu</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="284"> Gói Phần mềm quản
                                            lý fanpage</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="285"> Gói Premium
                                            Website</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="293"> Gói Basic 1 - QLBH
                                            - online</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="294"> Gói Basic 2 - QLBH
                                            - offline</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="297"> Máy in mã vạch
                                            Xprinter XP 350B</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="299"> Giấy in bill
                                            K58</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="300"> Giấy in bill
                                            K80</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="301"> Decal nhiệt in mã
                                            vạch 2 tem 35*22 ( cuộn )</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="302"> Ngăn kéo đựng tiền
                                            ZQ410F</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="305"> Thiết kế thêm tính
                                            năng cho website: bảo mật https cho
                                            website</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="306"> Máy đọc mã vạch
                                            YJ3300</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="307"> Chân đế</label></a>
                                </li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="310"> Máy in hóa đơn
                                            XP-N200H</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="316"> Gói phí chuyển đổi
                                            dữ liệu website</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="317"> Gói phí nâng cấp
                                            gói phần mềm</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="321"> Chăm sóc fanpage -
                                            Gói content</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="322"> Máy quét mã vạch
                                            Honeywell HH360</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="324"> Máy in mã vạch
                                            Honeywell PC42D</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="328"> Máy quét mã vạch
                                            Honeywell HF600</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="366"> Máy in mã vạch HPRT
                                            LPQ80</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="372"> Gói thiết kế thêm
                                            tính năng cho website</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="385"> Free Phí chỉnh sửa
                                            website</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="388"> Máy quét mã vạch có
                                            dây Hugo 1607</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="403"> Gói Free -
                                            QLBH</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="404"> Hoàn cước vận
                                            chuyển</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="414"> Gói Omni
                                            Starter</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="415"> Gói Omni
                                            Premium</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="416"> Gói Omni
                                            Enterprise</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="420"> Gói Kho tổng (chỉ
                                            xuất nhập kho, không bán hàng)</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="439"> Gói Combo 3
                                            fanpage</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="440"> Máy in HPRT
                                            POS80FE</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="450"> Gói Combo 5
                                            fanpage</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="451"> Gói Combo 5 gian
                                            hàng</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="471"> Gói combo 3 gian
                                            hàng</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="474"> Gói môi
                                            giới</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="476"> Máy in hóa đơn
                                            Xprinter XP-58IIH</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="477"> Máy quét
                                            Datamax</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="479"> Gói Quảng Cáo
                                            Fanpage</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="481"> Ngăn kéo đựng tiền
                                            JJ330 (Nhỏ)</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="489"> Máy in hóa đơn HPRT
                                            TP80BE</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="492"> Gói Combo 10 gian
                                            hàng</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="493"> Gói Combo 10
                                            fanpage</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="497"> Gói dịch vụ nhập
                                            liệu website</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="502"> Gói dịch vụ nhập
                                            liệu sàn TMĐT</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="503"> Gói Ecomcare
                                            Shopee</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="508"> Gói Ecomcare
                                            Lazada</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="509"> Gói
                                            Ecom</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="511"> Gói Ecom (không
                                            giới hạn gian hàng/1 sàn TMĐT)</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="513"> Chăm sóc fanpage -
                                            Gói VIP 1</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="514"> Chăm sóc fanpage -
                                            Gói VIP 2</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="515"> Chăm sóc fanpage -
                                            Gói VIP 3</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="520"> Gói Thiết kế
                                            Website P</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="524"> Máy in mã vạch
                                            380B</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="525"> Máy Đọc Mã Vạch
                                            ChipPOS</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="528"> Gói Thiết kế
                                            Website W</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="532"> Gói Thiết kế
                                            Website E</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="534"> Giấy tờ Công
                                            ty</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="536"> Gói Ecom full sàn
                                            TMĐT</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="538"> Máy in hóa đơn
                                            A160</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="539"> Két đựng tiền SC -
                                            335A</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="542"> Gói Tạo mới
                                            Maps</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="543"> Gói Xác minh
                                            Maps</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="544"> Gói Chăm sóc
                                            Maps</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="548"> Máy in hóa đơn
                                            XP-V320N</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="549"> Gói Chạy Quảng Cáo
                                            Instagram</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="550"> Gói Hỗ trợ quảng
                                            cáo Shopee</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="552"> Gói Ecom COVID
                                            Free</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="553"> Gói WEB COVID
                                            Free</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="554"> POS</label></a>
                                </li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="555"> WEB</label></a>
                                </li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="556"> ECOM</label></a>
                                </li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="557"> VPAGE</label></a>
                                </li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="558"> OMNI</label></a>
                                </li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="559"> MAP</label></a>
                                </li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="560">
                                            ECOMCARE</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="561"> SEO</label></a>
                                </li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="562"> FB</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="563"> PC</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="564"> DVPM</label></a>
                                </li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="565"> DVMKT</label></a>
                                </li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="566"> Lệ phí đăng ký tên
                                            miền VN</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="567"> Phí duy trì tên
                                            miền VN</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="568"> Phí dịch vụ TK quản
                                            trị tên miền VN</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="570"> Phí đăng ký tên
                                            miền quốc tế</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="571"> Phí duy trì tên
                                            miền quốc tế</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="573"> Gói SEO CƠ
                                            BẢN</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="574"> Gói SEO TỐI
                                            ƯU</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="575"> Máy đếm cầm
                                            tay</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="576"> SMS
                                            Brandname</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="578"> Giấy in mã vạch 2
                                            tem</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="579"> Gói khởi tạo và
                                            Decor gian hàng</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="580"> DV GTGT</label></a>
                                </li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="581"> SMS</label></a>
                                </li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="582"> DV TÊN
                                            MIỀN</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="583"> Gói chăm sóc gian
                                            hàng chuyên nghiệp</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="585"> Máy in tem nhiệt
                                            N41</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="586"> Gói chăm sóc
                                            website seo cơ bản</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="587"> Gói chăm sóc
                                            website seo tối ưu</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="588"> Gói Hỗ trợ và định
                                            hướng content seo</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="589"> Gói Tool quét data
                                            facebook</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="590"> Máy quét mã vạch
                                            Antech 1266i</label></a></li>
                                <li class="multiselect-item group"><label
                                        class="multiselect-group">Công ty cổ phần Vật Giá Việt
                                        Nam</label></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="114"> Facebook
                                            Ad</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="115"> Google
                                            Ad</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="120"> Vchat</label></a>
                                </li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="220">
                                            Marketing</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="222"> GHĐB Phát
                                            sinh</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="223"> GHĐB Ngoại
                                            tỉnh</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="224"> Tin vip</label></a>
                                </li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="225"> Siêu vip
                                            dính</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="226"> Siêu
                                            vip</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="227"> Banner</label></a>
                                </li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="229"> Nạp tiền Ad by
                                            Vatgia</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="230"> Nạp
                                            tiền</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="231"> GHĐB (tái
                                            ký)</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="232"> GHĐB
                                            (mới)</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="235"> Gian hàng phát
                                            sinh</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="237"> Gian hàng
                                            Premium</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="240"> Gian hàng thu
                                            CPA</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="246"> Banner (tái
                                            ký)</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="247"> Nạp tiền (tái
                                            ký)</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="248"> Tin vip (tái
                                            ký)</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="249"> Siêu vip dính (tái
                                            ký)</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="250"> Siêu vip (tái
                                            ký)</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="271"> Deal VG</label></a>
                                </li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="272"> Nạp tiền tài khoản
                                            chính</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="275"> Vpage</label></a>
                                </li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="276"> Gói
                                            Traffic</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="278"> Zopzep -
                                            Marketing</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="279"> Fanpage</label></a>
                                </li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="280"> Nạp tiền dự
                                            án</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="281"> Fanpage
                                            VG</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="282"> Dịch vụ Viết
                                            bài</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="283"> Seo
                                            Banner</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="286"> Khóa học FB
                                            Marketing</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="288"> Lipo (gói
                                            thường)</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="289"> Lipo (gói nâng
                                            cao)</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="290"> Lipo (gói cao
                                            cấp)</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="308"> Cho thuê
                                            phòng</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="309"> Dịch vụ trang trí
                                            phòng</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="311"> wePOS
                                            (basic)</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="312"> wePOS
                                            (starter)</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="313"> wePOS
                                            (advanced)</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="314"> wePOS
                                            (premium)</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="315"> wePOS
                                            (diamond)</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="325"> Gói TMDT toàn diện
                                            1</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="326"> Gói TMDT toàn diện
                                            2</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="331"> Quản trị Fanpage
                                            Basic - WeSave</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="332"> Quản trị Fanpage
                                            Standard - WeSave</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="333"> Quản trị Fanpage
                                            Business - WeSave</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="334"> Gói chụp ảnh
                                            menu</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="335"> Gói chụp ảnh đồ ăn
                                            căn bản</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="336"> Gói chụp ảnh không
                                            gian</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="337"> Gói quay video kèm
                                            dựng</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="349"> Quảng cáo Facebook
                                            dạng Tổng hợp ảnh Gói Căn Bản</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="350"> Quảng cáo Facebook
                                            dạng Tổng hợp ảnh Gói Thương Gia</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="351"> Quảng cáo Facebook
                                            dạng Độc quyền ảnh Gói Căn Bản</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="352"> Quảng cáo Facebook
                                            dạng Độc quyền ảnh Gói Thương Gia</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="353"> Quảng cáo Facebook
                                            dạng Video Gói Căn Bản</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="354"> Quảng cáo Facebook
                                            dạng Video Gói Thương Gia</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="355"> Gói Chụp ảnh sản
                                            phẩm I</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="356"> Gói Chụp ảnh sản
                                            phẩm II</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="357"> Gói Quay
                                            video</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="358"> Gói Thiết kế Menu
                                            dạng truyền thống</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="359"> Gói Thiết kế Menu
                                            dạng hiện đại</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="360"> Gói Sản xuất video
                                            qua ảnh</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="361"> Gói Quản trị
                                            Instagram</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="362"> Gói Quảng cáo
                                            Facebook dạng ảnh Kênh cộng đồng</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="363"> Gói Quảng cáo
                                            Facebook dạng video Kênh cộng đồng</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="386"> Vchat gói Cơ
                                            bản</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="387"> Vchat gói Chuyên
                                            nghiệp</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="389"> Wemarry - Quản trị
                                            fanpage - Gói Basic</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="390"> Wemarry - Dịch vụ
                                            facebook ads</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="391"> Wemarry - Dịch vụ
                                            quảng cáo khác - Gói chụp ảnh sản phẩm
                                            01</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="400"> Mini Combo -
                                            WeSave</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="401"> Big Combo -
                                            WeSave</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="402"> Extra Combo -
                                            WeSave</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="412"> Wemarry - Quản trị
                                            fanpage - Gói business</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="436"> Wehelp</label></a>
                                </li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="465"> Chạy quảng cáo
                                            zalo</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="466"> Gói phát triển
                                            website</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="467"> CRM Starter -
                                            weSave</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="468"> CRM Premium -
                                            weSave</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="469"> Wemarry - thiết kế
                                            website</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="470"> Wemarry - dịch vụ
                                            GA</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="480"> Tư vấn và tối ưu
                                            quy trình Marketing Insight</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="482"> CRM Chatbot -
                                            WeSave</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="487"> Wemarry - Dịch vụ
                                            SEO</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="488"> wePOS - Phần
                                            cứng</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="499"> Phần mềm quản lý
                                            fanpage chốt sale – Gói 1</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="500"> Phần mềm quản lý
                                            fanpage chốt sale – Gói 2</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="501"> Phần mềm quản lý
                                            fanpage chốt sale – Gói 3</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="516"> 9Houz - DV
                                            Content</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="517"> 9Houz - DV
                                            Banner</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="518"> 9Houz - DV Seo
                                            Banner</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="572"> Vchat gói nâng
                                            cao</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="577"> Vchat gói
                                            Forum</label></a></li>
                                <li class="multiselect-item group"><label
                                        class="multiselect-group">VNP group</label></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="392"> Wemarry - Quản trị
                                            fanpage - Gói Standard</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="393"> Wemarry - Quản trị
                                            fanpage - Gói Business</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="394"> Wemarry - Dịch vụ
                                            quảng cáo khác - Gói chụp ảnh sản phẩm
                                            02</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="395"> Wemarry - Gói chụp
                                            ảnh không gian</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="396"> Wemarry - Gói quay
                                            phim</label></a></li>
                                <li class="multiselect-item group"><label
                                        class="multiselect-group">Easycare.vn</label></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="258"> Dịch vụ trả theo
                                            tháng</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="259"> Dịch vụ trả theo
                                            thời gian</label></a></li>
                                <li class="multiselect-item group"><label
                                        class="multiselect-group">Vật giá - Hà Nội</label></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="274"> Phần mềm QL bán
                                            thuốc</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="277"> Zopzep - Quản lý
                                            nhà hàng</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="551"> BA - Phát triển
                                            phần mềm</label></a></li>
                                <li class="multiselect-item group"><label
                                        class="multiselect-group">Công ty cổ phần TMDT Bảo
                                        Kim</label></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="504"> Cổng thanh
                                            toán</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="505"> Dịch vụ hỗ trợ Thu
                                            hộ</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="506"> Dịch vụ hỗ trợ Chi
                                            hộ</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="507"> Xác thực tài
                                            khoản</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="540"> Dịch vụ trên ứng
                                            dụng Panama</label></a></li>
                                <li class="multiselect-item group"><label
                                        class="multiselect-group">Công ty cổ phần WeHelp</label>
                                </li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="408"> Bizshare - Gói chăm
                                            sóc fanpage - Nội dung</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="409"> Bizshare - Chạy
                                            quảng cáo</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="410"> Bizshare - Xây dựng
                                            nội dung trên Website và Fanpage</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="411"> Bizshare - Chạy
                                            chiến dịch quảng cáo trên Facebook Ads và Google
                                            Adword</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="437"> Bizshare - Gói
                                            quảng cáo Media</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="472"> BizShare - Dịch vụ
                                            SEO tổng thể</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="483"> Bizshare - Dịch vụ
                                            quản lý ngân sách chạy quảng cáo</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="484"> Bizshare - Chăm sóc
                                            website, nội dung</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="485"> Bizshare - Xây dựng
                                            landing page bán hàng</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="486"> Bizshare - Tối ưu
                                            kênh bán hàng sàn TMĐT Shopee</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="490"> Bizshare - Gói chăm
                                            sóc fanpage Facebook và Instagram</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="498"> BizShare - Thiết kế
                                            ấn phẩm truyền thông</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="519"> Bizshare - Thiết kế
                                            landing page</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="521"> Bizshare - Thiết kế
                                            website</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="522"> Bizshare - Thiết kế
                                            Brochure</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="523"> Bizshare - Thiết kế
                                            Logo</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="529"> Bizshare - Quảng
                                            cáo Facebook và Instagram</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="530"> Bizshare - Định
                                            hướng tư vấn truyền thông và tư vấn chiến
                                            lược</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="531"> Bizshare - Gói Quản
                                            trị kênh Thương mại điện tử</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="533"> SEO
                                            lead</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="535"> Facebook
                                            Ads</label></a></li>
                                <li class="multiselect-item group"><label
                                        class="multiselect-group">123job.vn</label></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="584"> 123job - Gói mở hồ
                                            sơ ứng viên</label></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="form-group">
                        <select name="showWorkingDate" id="showWorkingDate"
                            class="form-control">
                            <option value="">- Trạng thái làm việc -</option>
                            <option value="1">Trên 3 tháng</option>
                            <option value="2">Dưới 3 tháng</option>
                            <option value="3">Trên 6 tháng</option>
                            <option value="4">Dưới 6 tháng</option>
                        </select> </div>

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
                            <th rowspan="2" style="width: 52px;">STT</th>
                            <th rowspan="2" style="width: 73px;">Mã NV</th>
                            <th rowspan="2" style="width: 270px;">Nhân viên</th>
                            <th rowspan="2" style="width: 531px;">Phòng ban</th>
                            <th colspan="3" style="width: 301px;">Doanh số thường</th>
                            <th colspan="3" style="width: 250px;">GHĐB (mới)</th>
                            <th colspan="3" style="width: 252px;">GHĐB (tái ký)</th>
                            <th rowspan="2" style="width: 144px;">Tổng thực thu</th>
                        </tr>
                        <tr>
                            <th style="width: 141px;">Thực thu</th>
                            <th style="width: 86px;">Đăng ký</th>
                            <th style="width: 74px;">Đạt(%)</th>
                            <th style="width: 90px;">Ký được</th>
                            <th style="width: 86px;">Đăng ký</th>
                            <th style="width: 74px;">Đạt(%)</th>
                            <th style="width: 91px;">Ký được</th>
                            <th style="width: 86px;">Đăng ký</th>
                            <th style="width: 75px;">Đạt(%)</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div style="clear: both;"></div><br>
            </div>
            <table id="dgCrmReportTarget" class="table table-bordered">
                <thead>
                    <tr class="even">
                        <th rowspan="2">STT</th>
                        <th rowspan="2">Mã NV</th>
                        <th rowspan="2">Nhân viên</th>
                        <th rowspan="2">Phòng ban</th>
                        <th colspan="3">Doanh số thường</th>
                        <th colspan="3">GHĐB (mới)</th>
                        <th colspan="3">GHĐB (tái ký)</th>
                        <th rowspan="2">Tổng thực thu</th>
                    </tr>
                    <tr>
                        <th>Thực thu</th>
                        <th>Đăng ký</th>
                        <th>Đạt(%)</th>
                        <th>Ký được</th>
                        <th>Đăng ký</th>
                        <th>Đạt(%)</th>
                        <th>Ký được</th>
                        <th>Đăng ký</th>
                        <th>Đạt(%)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="taskStt3 even">
                        <td colspan="4"><b>Tổng</b></td>
                        <td class="colNumber">2,100,704,804</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">12</td>
                        <td class="colNumber">0</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">9</td>
                        <td class="colNumber">0</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">2,100,704,804</td>
                    </tr>
                    <tr class="">
                        <td>1</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10337&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">0006</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10337&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Data
                                bàn giao</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=300">Phòng
                                IT | Nhanh.vn</a></td>
                        <td class="colNumber">75,307,800</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">75,307,800</td>
                    </tr>
                    <tr class="even">
                        <td>2</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1493&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">0189</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1493&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phan
                                Quỳnh Hương</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=591">Phòng
                                CSGH | Vật giá - Hà Nội</a></td>
                        <td class="colNumber">61,858,400</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">1</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">3</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">61,858,400</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10653&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9442</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10653&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Tiến Đạt</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1318">Nhanh
                                HN - Phòng KD2_TùngNT | Nhanh.vn</a></td>
                        <td class="colNumber">60,740,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">60,740,000</td>
                    </tr>
                    <tr class="even">
                        <td>4</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9503&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8396</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9503&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Anh Tuấn</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1317">Nhanh
                                HN - Phòng KD5_AnhNX | Nhanh.vn</a></td>
                        <td class="colNumber">57,150,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">57,150,000</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10098&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8949</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10098&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Hoàng
                                Tiến Cường</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1389">Dự
                                án Wehelp | Công ty cổ phần WeHelp</a></td>
                        <td class="colNumber">55,440,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">55,440,000</td>
                    </tr>
                    <tr class="even">
                        <td>6</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11047&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9906</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11047&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Viết Lâm</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1155">Nhanh
                                HCM - Phòng KD8_LâmNV | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">53,437,500</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">53,437,500</td>
                    </tr>
                    <tr class="">
                        <td>7</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10571&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9362</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10571&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Khánh Vinh</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1320">Nhanh
                                HN - Phòng KD4_TrườngVV | Nhanh.vn</a></td>
                        <td class="colNumber">53,348,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">53,348,000</td>
                    </tr>
                    <tr class="even">
                        <td>8</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8509&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7553</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8509&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Thị Hiền</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1284">Nhanh
                                HN - KD16_TungNH | Nhanh.vn</a></td>
                        <td class="colNumber">50,241,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">50,241,000</td>
                    </tr>
                    <tr class="">
                        <td>9</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10145&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8981</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10145&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                Thị Ngọc Quyền</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1158">Nhanh
                                HCM - Nhóm KD3_NgânTK | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">44,348,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">44,348,000</td>
                    </tr>
                    <tr class="even">
                        <td>10</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=349&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3152</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=349&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Thanh Tùng</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1318">Nhanh
                                HN - Phòng KD2_TùngNT | Nhanh.vn</a></td>
                        <td class="colNumber">40,530,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">40,530,000</td>
                    </tr>
                    <tr class="">
                        <td>11</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8171&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7226</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8171&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Đức Kiên</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1318">Nhanh
                                HN - Phòng KD2_TùngNT | Nhanh.vn</a></td>
                        <td class="colNumber">40,335,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">40,335,000</td>
                    </tr>
                    <tr class="even">
                        <td>12</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1075&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4062</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1075&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Hứa
                                Thị Mai Ngân</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1126">Nhanh
                                HCM - Phòng KD1_NgânHTM | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">40,080,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">40,080,000</td>
                    </tr>
                    <tr class="">
                        <td>13</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10701&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9479</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10701&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lê
                                Thúy Quỳnh</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1386">Sale
                                Marketing | Nhanh.vn</a></td>
                        <td class="colNumber">38,498,500</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">38,498,500</td>
                    </tr>
                    <tr class="even">
                        <td>14</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8427&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7471</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8427&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                Kim Ngân</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1158">Nhanh
                                HCM - Nhóm KD3_NgânTK | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">37,680,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">37,680,000</td>
                    </tr>
                    <tr class="">
                        <td>15</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=359&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">0671</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=359&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Vũ
                                Văn Trường</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1320">Nhanh
                                HN - Phòng KD4_TrườngVV | Nhanh.vn</a></td>
                        <td class="colNumber">36,683,450</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">36,683,450</td>
                    </tr>
                    <tr class="even">
                        <td>16</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11132&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9984</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11132&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Văn Long</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1457">Phòng
                                dịch vụ SEO GG MAPS | Nhanh.vn</a></td>
                        <td class="colNumber">30,758,850</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">30,758,850</td>
                    </tr>
                    <tr class="">
                        <td>17</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11092&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9945</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11092&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Đỗ
                                Quang Trung</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1284">Nhanh
                                HN - KD16_TungNH | Nhanh.vn</a></td>
                        <td class="colNumber">29,381,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">29,381,000</td>
                    </tr>
                    <tr class="even">
                        <td>18</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=937&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1308</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=937&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phạm
                                Văn Phú</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=629">Phòng
                                giám đốc | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">28,820,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">28,820,000</td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10265&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9100</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10265&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Vũ
                                Thị Hoa</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1319">Nhanh
                                HN - Phòng KD3_HuyPV | Nhanh.vn</a></td>
                        <td class="colNumber">27,419,976</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">27,419,976</td>
                    </tr>
                    <tr class="even">
                        <td>20</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1289&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2497</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1289&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Đỗ
                                Văn Thảo</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=656">Phòng
                                KD 8 | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">26,400,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">26,400,000</td>
                    </tr>
                    <tr>
                        <td>21</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10180&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9015</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10180&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Huỳnh
                                Diễm Thy</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1158">Nhanh
                                HCM - Nhóm KD3_NgânTK | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">25,882,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">25,882,000</td>
                    </tr>
                    <tr class="even">
                        <td>22</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9646&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8520</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9646&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Quốc Gia Thịnh</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1376">Nhanh
                                HCM - Nhóm KD4_ThịnhNQG | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">24,958,500</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">24,958,500</td>
                    </tr>
                    <tr>
                        <td>23</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10212&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9047</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10212&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Đỗ
                                Thị Ngọc Hân</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1126">Nhanh
                                HCM - Phòng KD1_NgânHTM | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">23,250,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">23,250,000</td>
                    </tr>
                    <tr class="even">
                        <td>24</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9510&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8402</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9510&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Thị Anh Thư</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1308">Nhanh
                                HCM - Nhóm KD9_ThưNTA | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">22,809,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">22,809,000</td>
                    </tr>
                    <tr>
                        <td>25</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9915&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8773</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9915&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lê
                                Quang Hùng</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1263">Nhanh
                                HN - KD8_CôngND | Nhanh.vn</a></td>
                        <td class="colNumber">22,298,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">22,298,000</td>
                    </tr>
                    <tr class="even">
                        <td>26</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=2097&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">0826</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=2097&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Tạ
                                Thị Thùy</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=560">Phòng
                                KD 4 | Vật giá - Hà Nội</a></td>
                        <td class="colNumber">22,325,600</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">1</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">22,325,600</td>
                    </tr>
                    <tr>
                        <td>27</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8453&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7497</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8453&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Ngô
                                Hữu Tình</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1318">Nhanh
                                HN - Phòng KD2_TùngNT | Nhanh.vn</a></td>
                        <td class="colNumber">21,444,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">21,444,000</td>
                    </tr>
                    <tr class="even">
                        <td>28</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10879&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9650</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10879&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Dương
                                Thị Thu</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1318">Nhanh
                                HN - Phòng KD2_TùngNT | Nhanh.vn</a></td>
                        <td class="colNumber">21,975,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">21,975,000</td>
                    </tr>
                    <tr>
                        <td>29</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11015&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9785</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11015&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Hồ
                                Thị Lan Anh</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1318">Nhanh
                                HN - Phòng KD2_TùngNT | Nhanh.vn</a></td>
                        <td class="colNumber">21,360,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">21,360,000</td>
                    </tr>
                    <tr class="even">
                        <td>30</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10500&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9294</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10500&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Thái
                                Chí Toàn</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1032">Phòng
                                KD10 | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">20,300,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">20,300,000</td>
                    </tr>
                    <tr>
                        <td>31</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=5442&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4822</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=5442&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Hữu Điệp</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1157">Nhanh
                                HN - KD7_ĐiệpNH | Nhanh.vn</a></td>
                        <td class="colNumber">19,902,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">19,902,000</td>
                    </tr>
                    <tr class="even">
                        <td>32</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=364&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4396</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=364&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Diệu Linh</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1317">Nhanh
                                HN - Phòng KD5_AnhNX | Nhanh.vn</a></td>
                        <td class="colNumber">19,200,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">19,200,000</td>
                    </tr>
                    <tr>
                        <td>33</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10746&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9517</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10746&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Hoàng Giang</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1248">Nhanh
                                HN - KD11_NganLTT | Nhanh.vn</a></td>
                        <td class="colNumber">19,016,040</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">19,016,040</td>
                    </tr>
                    <tr class="even">
                        <td>34</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11174&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10025</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11174&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Đào
                                Thị Hồng Nhung</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1457">Phòng
                                dịch vụ SEO GG MAPS | Nhanh.vn</a></td>
                        <td class="colNumber">18,940,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">18,940,000</td>
                    </tr>
                    <tr>
                        <td>35</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11229&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10076</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11229&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trịnh
                                Xuân Tài</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1468">Nhanh
                                HCM - Sale Marketing | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">18,737,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">18,737,000</td>
                    </tr>
                    <tr class="even">
                        <td>36</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11082&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9935</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11082&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Thanh Vân</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1048">Vchat
                                | Vật giá - Hà Nội</a></td>
                        <td class="colNumber">18,504,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">18,504,000</td>
                    </tr>
                    <tr>
                        <td>37</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10982&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9752</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10982&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Thị Phương Loan</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1048">Vchat
                                | Vật giá - Hà Nội</a></td>
                        <td class="colNumber">18,294,700</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">18,294,700</td>
                    </tr>
                    <tr class="even">
                        <td>38</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10769&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9540</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10769&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Thị Hiếu</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1254">Nhanh
                                HCM - Nhóm KD5_LiêmNT | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">17,880,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">17,880,000</td>
                    </tr>
                    <tr>
                        <td>39</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9521&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8413</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9521&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                Văn Thành</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1285">Nhanh
                                HN - ThanhTV_Phát triển đối tác | Nhanh.vn</a></td>
                        <td class="colNumber">17,716,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">17,716,000</td>
                    </tr>
                    <tr class="even">
                        <td>40</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8779&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7813</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8779&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Ngô
                                Tiến Tùng</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1313">Nhanh
                                HN - KD17_TùngNT | Nhanh.vn</a></td>
                        <td class="colNumber">17,360,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">17,360,000</td>
                    </tr>
                    <tr>
                        <td>41</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=4760&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3963</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=4760&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phạm
                                Phương Thanh</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1048">Vchat
                                | Vật giá - Hà Nội</a></td>
                        <td class="colNumber">17,274,400</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">17,274,400</td>
                    </tr>
                    <tr class="even">
                        <td>42</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9225&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8158</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9225&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Huyền Trang</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1317">Nhanh
                                HN - Phòng KD5_AnhNX | Nhanh.vn</a></td>
                        <td class="colNumber">16,710,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">16,710,000</td>
                    </tr>
                    <tr>
                        <td>43</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1746&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">0452</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1746&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phạm
                                Thị Thu Hằng</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=561">Phòng
                                KD 6 | Vật giá - Hà Nội</a></td>
                        <td class="colNumber">16,544,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">16,544,000</td>
                    </tr>
                    <tr class="even">
                        <td>44</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10303&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9138</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10303&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Chu
                                Văn Thảo</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1457">Phòng
                                dịch vụ SEO GG MAPS | Nhanh.vn</a></td>
                        <td class="colNumber">15,600,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">15,600,000</td>
                    </tr>
                    <tr>
                        <td>45</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=951&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1601</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=951&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Hoàng Long</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1032">Phòng
                                KD10 | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">15,040,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">1</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">15,040,000</td>
                    </tr>
                    <tr class="even">
                        <td>46</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8893&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7923</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8893&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Đạt Trung</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1320">Nhanh
                                HN - Phòng KD4_TrườngVV | Nhanh.vn</a></td>
                        <td class="colNumber">14,945,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">14,945,000</td>
                    </tr>
                    <tr>
                        <td>47</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10833&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9604</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10833&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Thanh Ngân</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1467">Nhanh
                                HCM - SEO GG MAPS | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">15,004,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">15,004,000</td>
                    </tr>
                    <tr class="even">
                        <td>48</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11130&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9982</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11130&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Thị Kiều Mỹ</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1308">Nhanh
                                HCM - Nhóm KD9_ThưNTA | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">14,997,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">14,997,000</td>
                    </tr>
                    <tr>
                        <td>49</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=715&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4375</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=715&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Xuân Anh</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1317">Nhanh
                                HN - Phòng KD5_AnhNX | Nhanh.vn</a></td>
                        <td class="colNumber">14,826,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">14,826,000</td>
                    </tr>
                    <tr class="even">
                        <td>50</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10070&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8922</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10070&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Hồ
                                Tấn Hải</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1155">Nhanh
                                HCM - Phòng KD8_LâmNV | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">14,296,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">14,296,000</td>
                    </tr>
                    <tr>
                        <td>51</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11273&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10108</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11273&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lê
                                Tấn Anh Trung</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1468">Nhanh
                                HCM - Sale Marketing | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">14,201,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">14,201,000</td>
                    </tr>
                    <tr class="even">
                        <td>52</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9181&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8117</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9181&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Sơn Hà</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1317">Nhanh
                                HN - Phòng KD5_AnhNX | Nhanh.vn</a></td>
                        <td class="colNumber">13,799,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">13,799,000</td>
                    </tr>
                    <tr>
                        <td>53</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10850&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9621</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10850&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lâm
                                Viết Hùng</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1313">Nhanh
                                HN - KD17_TùngNT | Nhanh.vn</a></td>
                        <td class="colNumber">13,740,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">13,740,000</td>
                    </tr>
                    <tr class="even">
                        <td>54</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9756&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8618</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9756&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Hoàng
                                Thùy Linh</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1317">Nhanh
                                HN - Phòng KD5_AnhNX | Nhanh.vn</a></td>
                        <td class="colNumber">13,680,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">13,680,000</td>
                    </tr>
                    <tr>
                        <td>55</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10814&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9585</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10814&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lê
                                Ngọc Khánh</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1126">Nhanh
                                HCM - Phòng KD1_NgânHTM | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">13,490,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">13,490,000</td>
                    </tr>
                    <tr class="even">
                        <td>56</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1257&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1412</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1257&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phan
                                Vũ Như Quỳnh</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=641">Phòng
                                KD 01 | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">12,580,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">2</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">12,580,000</td>
                    </tr>
                    <tr>
                        <td>57</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8489&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7533</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8489&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Diệu Linh</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1282">Phòng
                                Dịch Vụ Khách Hàng | Nhanh.vn</a></td>
                        <td class="colNumber">12,255,568</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">12,255,568</td>
                    </tr>
                    <tr class="even">
                        <td>58</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7790&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6846</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7790&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Duy Hưng</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1032">Phòng
                                KD10 | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">12,280,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">2</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">12,280,000</td>
                    </tr>
                    <tr>
                        <td>59</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11246&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10091</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11246&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phạm
                                Quang Minh</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1386">Sale
                                Marketing | Nhanh.vn</a></td>
                        <td class="colNumber">12,012,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">12,012,000</td>
                    </tr>
                    <tr class="even">
                        <td>60</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9481&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8375</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9481&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trịnh
                                Thị Phương Nhi</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=641">Phòng
                                KD 01 | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">11,880,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">1</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">1</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">11,880,000</td>
                    </tr>
                    <tr>
                        <td>61</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10877&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9648</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10877&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lê
                                Thị Ly Ly</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=845">Marketing
                                | Nhanh.vn</a></td>
                        <td class="colNumber">11,662,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">11,662,000</td>
                    </tr>
                    <tr class="even">
                        <td>62</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9630&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8504</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9630&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Thành Trung</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1319">Nhanh
                                HN - Phòng KD3_HuyPV | Nhanh.vn</a></td>
                        <td class="colNumber">11,450,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">11,450,000</td>
                    </tr>
                    <tr>
                        <td>63</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10356&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9190</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10356&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Vũ
                                Duy Hoàng</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1032">Phòng
                                KD10 | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">11,510,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">1</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">11,510,000</td>
                    </tr>
                    <tr class="even">
                        <td>64</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8175&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7230</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8175&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Hữu Tùng</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1284">Nhanh
                                HN - KD16_TungNH | Nhanh.vn</a></td>
                        <td class="colNumber">11,245,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">11,245,000</td>
                    </tr>
                    <tr>
                        <td>65</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11138&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9990</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11138&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Hoàng Long</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1248">Nhanh
                                HN - KD11_NganLTT | Nhanh.vn</a></td>
                        <td class="colNumber">11,316,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">11,316,000</td>
                    </tr>
                    <tr class="even">
                        <td>66</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11231&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10078</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11231&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lê
                                Tạ Tú Uyên</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1467">Nhanh
                                HCM - SEO GG MAPS | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">10,989,660</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">10,989,660</td>
                    </tr>
                    <tr>
                        <td>67</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11048&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9900</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11048&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lê
                                Thị Nam</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1468">Nhanh
                                HCM - Sale Marketing | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">10,648,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">10,648,000</td>
                    </tr>
                    <tr class="even">
                        <td>68</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10753&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9524</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10753&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Quang Huy</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1248">Nhanh
                                HN - KD11_NganLTT | Nhanh.vn</a></td>
                        <td class="colNumber">9,451,080</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">9,451,080</td>
                    </tr>
                    <tr>
                        <td>69</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1159&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4754</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1159&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lại
                                Thị Thúy Ngần</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1248">Nhanh
                                HN - KD11_NganLTT | Nhanh.vn</a></td>
                        <td class="colNumber">9,820,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">9,820,000</td>
                    </tr>
                    <tr class="even">
                        <td>70</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10347&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9181</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10347&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lưu
                                Thị Hiền</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1241">Nhanh
                                HN - KD10_ThanhPT | Nhanh.vn</a></td>
                        <td class="colNumber">9,459,700</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">9,459,700</td>
                    </tr>
                    <tr>
                        <td>71</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9221&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8154</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9221&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Trung Quân</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1319">Nhanh
                                HN - Phòng KD3_HuyPV | Nhanh.vn</a></td>
                        <td class="colNumber">9,411,080</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">9,411,080</td>
                    </tr>
                    <tr class="even">
                        <td>72</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10593&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9384</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10593&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phan
                                Ngọc Ý Linh</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1126">Nhanh
                                HCM - Phòng KD1_NgânHTM | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">9,116,500</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">9,116,500</td>
                    </tr>
                    <tr>
                        <td>73</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=369&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4221</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=369&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phạm
                                Viết Huy</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1319">Nhanh
                                HN - Phòng KD3_HuyPV | Nhanh.vn</a></td>
                        <td class="colNumber">9,150,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">9,150,000</td>
                    </tr>
                    <tr class="even">
                        <td>74</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10564&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9356</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10564&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Cao
                                Anh Cường</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1318">Nhanh
                                HN - Phòng KD2_TùngNT | Nhanh.vn</a></td>
                        <td class="colNumber">9,215,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">9,215,000</td>
                    </tr>
                    <tr>
                        <td>75</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8000&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7068</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8000&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phạm
                                Thị Thanh</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1241">Nhanh
                                HN - KD10_ThanhPT | Nhanh.vn</a></td>
                        <td class="colNumber">8,945,500</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">8,945,500</td>
                    </tr>
                    <tr class="even">
                        <td>76</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=341&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1241</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=341&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Đoàn
                                Thị Minh Hương</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=843">Chăm
                                sóc đơn hàng - HươngĐTM | Nhanh.vn</a></td>
                        <td class="colNumber">8,920,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">8,920,000</td>
                    </tr>
                    <tr>
                        <td>77</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=954&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1602</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=954&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Thiện Tâm</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1443">Phòng
                                KD Bảo Kim &amp; Wesave | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">8,800,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">8,800,000</td>
                    </tr>
                    <tr class="even">
                        <td>78</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1739&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">0445</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1739&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Đinh
                                Thị Thu Hương</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1265">Phòng
                                KD 4.1 | Vật giá - Hà Nội</a></td>
                        <td class="colNumber">8,712,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">8,712,000</td>
                    </tr>
                    <tr>
                        <td>79</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10354&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9188</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10354&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Bích Diệp</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1282">Phòng
                                Dịch Vụ Khách Hàng | Nhanh.vn</a></td>
                        <td class="colNumber">8,670,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">8,670,000</td>
                    </tr>
                    <tr class="even">
                        <td>80</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11239&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10085</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11239&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Huỳnh Anh Thư</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1468">Nhanh
                                HCM - Sale Marketing | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">8,508,500</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">8,508,500</td>
                    </tr>
                    <tr>
                        <td>81</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=331&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2659</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=331&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Thanh Lan</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1072">Nhanh
                                HN - KD1_LanNT | Nhanh.vn</a></td>
                        <td class="colNumber">8,295,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">8,295,000</td>
                    </tr>
                    <tr class="even">
                        <td>82</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11236&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10082</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11236&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Dương
                                Thị Hoa</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1285">Nhanh
                                HN - ThanhTV_Phát triển đối tác | Nhanh.vn</a></td>
                        <td class="colNumber">7,866,353</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">7,866,353</td>
                    </tr>
                    <tr>
                        <td>83</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11232&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10079</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11232&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Hoàng
                                Huyền Trang</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1285">Nhanh
                                HN - ThanhTV_Phát triển đối tác | Nhanh.vn</a></td>
                        <td class="colNumber">7,861,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">7,861,000</td>
                    </tr>
                    <tr class="even">
                        <td>84</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11265&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10100</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11265&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Ngọc Ánh</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1419">Ecomcare
                                | Nhanh.vn</a></td>
                        <td class="colNumber">7,750,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">7,750,000</td>
                    </tr>
                    <tr>
                        <td>85</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1479&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">0174</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1479&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Vũ
                                Thị Phương Anh</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1146">Phòng
                                KD 7 | Vật giá - Hà Nội</a></td>
                        <td class="colNumber">7,422,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">7,422,000</td>
                    </tr>
                    <tr class="even">
                        <td>86</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10319&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9154</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10319&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Ngô
                                Trí Cường</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1313">Nhanh
                                HN - KD17_TùngNT | Nhanh.vn</a></td>
                        <td class="colNumber">7,400,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">7,400,000</td>
                    </tr>
                    <tr>
                        <td>87</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11295&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10130</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11295&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                Quang Nhật</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1320">Nhanh
                                HN - Phòng KD4_TrườngVV | Nhanh.vn</a></td>
                        <td class="colNumber">7,317,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">7,317,000</td>
                    </tr>
                    <tr class="even">
                        <td>88</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11089&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9942</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11089&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Huỳnh
                                Ngọc Hải</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1308">Nhanh
                                HCM - Nhóm KD9_ThưNTA | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">7,225,847</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">7,225,847</td>
                    </tr>
                    <tr>
                        <td>89</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11284&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10119</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11284&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                Thị Thu Trang</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1419">Ecomcare
                                | Nhanh.vn</a></td>
                        <td class="colNumber">7,265,500</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">7,265,500</td>
                    </tr>
                    <tr class="even">
                        <td>90</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8236&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7291</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8236&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phạm
                                Thị Thủy</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1319">Nhanh
                                HN - Phòng KD3_HuyPV | Nhanh.vn</a></td>
                        <td class="colNumber">7,116,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">7,116,000</td>
                    </tr>
                    <tr>
                        <td>91</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9631&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8505</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9631&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lê
                                Trung Đức</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=840">Giám
                                đốc dự án | Nhanh.vn</a></td>
                        <td class="colNumber">7,170,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">7,170,000</td>
                    </tr>
                    <tr class="even">
                        <td>92</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11260&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10095</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11260&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Danh Công</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1318">Nhanh
                                HN - Phòng KD2_TùngNT | Nhanh.vn</a></td>
                        <td class="colNumber">7,007,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">7,007,000</td>
                    </tr>
                    <tr>
                        <td>93</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10831&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9602</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10831&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Hoàng
                                Văn Phúc</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1317">Nhanh
                                HN - Phòng KD5_AnhNX | Nhanh.vn</a></td>
                        <td class="colNumber">6,876,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">6,876,000</td>
                    </tr>
                    <tr class="even">
                        <td>94</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9478&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8372</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9478&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lê
                                Quốc Duy</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1468">Nhanh
                                HCM - Sale Marketing | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">6,650,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">6,650,000</td>
                    </tr>
                    <tr>
                        <td>95</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11122&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9974</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11122&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phạm
                                Thị Nguyệt</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1386">Sale
                                Marketing | Nhanh.vn</a></td>
                        <td class="colNumber">6,182,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">6,182,000</td>
                    </tr>
                    <tr class="even">
                        <td>96</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11300&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10135</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11300&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Thị Phương Thảo</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1468">Nhanh
                                HCM - Sale Marketing | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">6,006,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">6,006,000</td>
                    </tr>
                    <tr>
                        <td>97</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=430&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4120</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=430&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Thị Vân Anh</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=849">Tester
                                | Nhanh.vn</a></td>
                        <td class="colNumber">6,000,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">6,000,000</td>
                    </tr>
                    <tr class="even">
                        <td>98</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11110&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9962</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11110&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Đoàn
                                Thị Hà</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1386">Sale
                                Marketing | Nhanh.vn</a></td>
                        <td class="colNumber">5,960,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">5,960,000</td>
                    </tr>
                    <tr>
                        <td>99</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11305&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10140</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11305&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Huỳnh
                                Thị Hằng</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1452">Đại
                                lý công ty | Nhanh.vn</a></td>
                        <td class="colNumber">5,760,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">5,760,000</td>
                    </tr>
                    <tr class="even">
                        <td>100</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10381&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9215</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10381&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                Thị Yến Phương</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1254">Nhanh
                                HCM - Nhóm KD5_LiêmNT | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">5,606,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">5,606,000</td>
                    </tr>
                    <tr>
                        <td>101</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11090&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9943</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11090&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Vũ
                                Thị Minh Hằng</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1284">Nhanh
                                HN - KD16_TungNH | Nhanh.vn</a></td>
                        <td class="colNumber">5,492,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">5,492,000</td>
                    </tr>
                    <tr class="even">
                        <td>102</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11283&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10118</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11283&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Văn Sơn</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1320">Nhanh
                                HN - Phòng KD4_TrườngVV | Nhanh.vn</a></td>
                        <td class="colNumber">5,489,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">5,489,000</td>
                    </tr>
                    <tr>
                        <td>103</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=469&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">0646</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=469&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Hồ
                                Ngọc Huy</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1209">Support
                                văn phòng | Nhanh.vn</a></td>
                        <td class="colNumber">5,475,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">5,475,000</td>
                    </tr>
                    <tr class="even">
                        <td>104</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11224&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10073</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11224&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Bùi
                                Gia Bảo</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1376">Nhanh
                                HCM - Nhóm KD4_ThịnhNQG | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">5,472,500</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">5,472,500</td>
                    </tr>
                    <tr>
                        <td>105</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9702&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8570</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9702&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phan
                                Thị Thu Thảo</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1147">Chăm
                                sóc khách hàng - UyênTL | Nhanh.vn</a></td>
                        <td class="colNumber">5,430,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">5,430,000</td>
                    </tr>
                    <tr class="even">
                        <td>106</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11261&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10096</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11261&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lê
                                Thị Tuyết</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1318">Nhanh
                                HN - Phòng KD2_TùngNT | Nhanh.vn</a></td>
                        <td class="colNumber">5,250,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">5,250,000</td>
                    </tr>
                    <tr>
                        <td>107</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8743&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7779</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8743&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                Thị Hương</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1177">Kinh
                                doanh | Nhanh.vn Đà Nẵng</a></td>
                        <td class="colNumber">5,040,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">5,040,000</td>
                    </tr>
                    <tr class="even">
                        <td>108</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=2021&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">0745</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=2021&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Thị Quỳnh Vân</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=567">Phòng
                                KD 9 | Vật giá - Hà Nội</a></td>
                        <td class="colNumber">4,960,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">1</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">4,960,000</td>
                    </tr>
                    <tr>
                        <td>109</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=4785&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3996</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=4785&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                Văn Anh Vũ</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1442">Phòng
                                KD ĐDV | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">4,950,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">1</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">4,950,000</td>
                    </tr>
                    <tr class="even">
                        <td>110</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11262&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10097</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11262&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Thị Mỹ Phụng</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1468">Nhanh
                                HCM - Sale Marketing | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">4,604,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">4,604,000</td>
                    </tr>
                    <tr>
                        <td>111</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10919&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9689</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10919&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                Hữu Chiến</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1313">Nhanh
                                HN - KD17_TùngNT | Nhanh.vn</a></td>
                        <td class="colNumber">4,539,700</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">4,539,700</td>
                    </tr>
                    <tr class="even">
                        <td>112</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10015&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8871</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10015&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phạm
                                Quốc Tuấn</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1457">Phòng
                                dịch vụ SEO GG MAPS | Nhanh.vn</a></td>
                        <td class="colNumber">4,521,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">4,521,000</td>
                    </tr>
                    <tr>
                        <td>113</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11176&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10027</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11176&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Quang Nghĩa</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1457">Phòng
                                dịch vụ SEO GG MAPS | Nhanh.vn</a></td>
                        <td class="colNumber">4,504,500</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">4,504,500</td>
                    </tr>
                    <tr class="even">
                        <td>114</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11301&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10136</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11301&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Võ
                                Thị Thu Sương</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1158">Nhanh
                                HCM - Nhóm KD3_NgânTK | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">4,476,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">4,476,000</td>
                    </tr>
                    <tr>
                        <td>115</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11245&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10090</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11245&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phạm
                                Ngọc Tiến</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1419">Ecomcare
                                | Nhanh.vn</a></td>
                        <td class="colNumber">4,292,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">4,292,000</td>
                    </tr>
                    <tr class="even">
                        <td>116</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10737&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9508</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10737&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Thị Mai Hoa</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1317">Nhanh
                                HN - Phòng KD5_AnhNX | Nhanh.vn</a></td>
                        <td class="colNumber">4,200,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">4,200,000</td>
                    </tr>
                    <tr>
                        <td>117</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11276&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10111</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11276&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Võ
                                Việt Quốc Đại</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1468">Nhanh
                                HCM - Sale Marketing | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">4,092,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">4,092,000</td>
                    </tr>
                    <tr class="even">
                        <td>118</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11247&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10092</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11247&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Cao
                                Thị Thu Hằng</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1468">Nhanh
                                HCM - Sale Marketing | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">4,004,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">4,004,000</td>
                    </tr>
                    <tr>
                        <td>119</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1160&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4827</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1160&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                Hoàng Nhung</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1387">Phòng
                                nhân sự - Nhanh.vn | Nhanh.vn</a></td>
                        <td class="colNumber">3,960,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">3,960,000</td>
                    </tr>
                    <tr class="even">
                        <td>120</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=2126&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">0857</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=2126&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                Phương Chi</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=552">Nhóm
                                KD 7.2 | Vật giá - Hà Nội</a></td>
                        <td class="colNumber">3,960,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">1</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">3,960,000</td>
                    </tr>
                    <tr>
                        <td>121</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10336&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4724</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10336&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Giảm
                                giá</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=300">Phòng
                                IT | Nhanh.vn</a></td>
                        <td class="colNumber">3,922,600</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">3,922,600</td>
                    </tr>
                    <tr class="even">
                        <td>122</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11173&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10024</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11173&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Thị Lan</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1241">Nhanh
                                HN - KD10_ThanhPT | Nhanh.vn</a></td>
                        <td class="colNumber">3,919,500</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">3,919,500</td>
                    </tr>
                    <tr>
                        <td>123</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11167&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10018</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11167&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                Thị Kim Oanh</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1254">Nhanh
                                HCM - Nhóm KD5_LiêmNT | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">3,720,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">3,720,000</td>
                    </tr>
                    <tr class="even">
                        <td>124</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10054&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8906</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10054&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Hoàng
                                Minh Thảo</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1317">Nhanh
                                HN - Phòng KD5_AnhNX | Nhanh.vn</a></td>
                        <td class="colNumber">3,500,500</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">3,500,500</td>
                    </tr>
                    <tr>
                        <td>125</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7861&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6917</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7861&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Đức Công</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1263">Nhanh
                                HN - KD8_CôngND | Nhanh.vn</a></td>
                        <td class="colNumber">3,530,500</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">3,530,500</td>
                    </tr>
                    <tr class="even">
                        <td>126</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11280&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10115</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11280&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                Thị Soan</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1318">Nhanh
                                HN - Phòng KD2_TùngNT | Nhanh.vn</a></td>
                        <td class="colNumber">3,440,500</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">3,440,500</td>
                    </tr>
                    <tr>
                        <td>127</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10375&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8882</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10375&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Giới
                                thiệu</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=453">IT
                                ERP | Nhanh.vn</a></td>
                        <td class="colNumber">3,150,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">3,150,000</td>
                    </tr>
                    <tr class="even">
                        <td>128</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7967&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7035</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7967&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                Lệ Uyên</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1147">Chăm
                                sóc khách hàng - UyênTL | Nhanh.vn</a></td>
                        <td class="colNumber">3,000,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">3,000,000</td>
                    </tr>
                    <tr>
                        <td>129</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11200&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10049</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11200&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Vũ
                                Tiến Tài</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1282">Phòng
                                Dịch Vụ Khách Hàng | Nhanh.vn</a></td>
                        <td class="colNumber">3,000,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">3,000,000</td>
                    </tr>
                    <tr class="even">
                        <td>130</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11169&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10020</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11169&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Hoàng
                                Lân</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1254">Nhanh
                                HCM - Nhóm KD5_LiêmNT | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">2,700,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">2,700,000</td>
                    </tr>
                    <tr>
                        <td>131</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11131&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9983</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11131&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Vũ
                                Thị Việt Trinh</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1284">Nhanh
                                HN - KD16_TungNH | Nhanh.vn</a></td>
                        <td class="colNumber">2,600,500</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">2,600,500</td>
                    </tr>
                    <tr class="even">
                        <td>132</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10994&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9764</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10994&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lê
                                Hải Anh</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1147">Chăm
                                sóc khách hàng - UyênTL | Nhanh.vn</a></td>
                        <td class="colNumber">2,580,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">2,580,000</td>
                    </tr>
                    <tr>
                        <td>133</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10870&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9641</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10870&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Đỗ
                                Thị Thu Hà</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1318">Nhanh
                                HN - Phòng KD2_TùngNT | Nhanh.vn</a></td>
                        <td class="colNumber">2,445,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">2,445,000</td>
                    </tr>
                    <tr class="even">
                        <td>134</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11166&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10017</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11166&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Dương
                                Thị Thanh Tú</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1241">Nhanh
                                HN - KD10_ThanhPT | Nhanh.vn</a></td>
                        <td class="colNumber">2,486,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">2,486,000</td>
                    </tr>
                    <tr>
                        <td>135</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9523&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8415</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9523&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Hồng Anh</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1460">CTV
                                KD Đà Nẵng | Nhanh.vn Đà Nẵng</a></td>
                        <td class="colNumber">2,385,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">2,385,000</td>
                    </tr>
                    <tr class="even">
                        <td>136</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11271&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10106</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11271&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Hồ
                                Thị Thanh Mai</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1467">Nhanh
                                HCM - SEO GG MAPS | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">2,366,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">2,366,000</td>
                    </tr>
                    <tr>
                        <td>137</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11303&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10138</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11303&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Thị Như Quỳnh</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1457">Phòng
                                dịch vụ SEO GG MAPS | Nhanh.vn</a></td>
                        <td class="colNumber">2,275,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">2,275,000</td>
                    </tr>
                    <tr class="even">
                        <td>138</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11140&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9991</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11140&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Thị Kim Thoa</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1177">Kinh
                                doanh | Nhanh.vn Đà Nẵng</a></td>
                        <td class="colNumber">2,227,500</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">2,227,500</td>
                    </tr>
                    <tr>
                        <td>139</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11135&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9987</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11135&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phan
                                Lương Thị Kim Phương</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1177">Kinh
                                doanh | Nhanh.vn Đà Nẵng</a></td>
                        <td class="colNumber">2,227,500</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">2,227,500</td>
                    </tr>
                    <tr class="even">
                        <td>140</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10785&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9556</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10785&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                Minh Thu</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1468">Nhanh
                                HCM - Sale Marketing | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">1,800,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">1,800,000</td>
                    </tr>
                    <tr>
                        <td>141</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9812&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8673</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9812&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Thị Ngọc Trầm</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1032">Phòng
                                KD10 | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">2,200,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">2,200,000</td>
                    </tr>
                    <tr class="even">
                        <td>142</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11299&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10134</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11299&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Vũ
                                Quang Chung</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1318">Nhanh
                                HN - Phòng KD2_TùngNT | Nhanh.vn</a></td>
                        <td class="colNumber">1,911,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">1,911,000</td>
                    </tr>
                    <tr>
                        <td>143</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11144&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9995</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11144&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Thị Thu Hằng</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1147">Chăm
                                sóc khách hàng - UyênTL | Nhanh.vn</a></td>
                        <td class="colNumber">1,800,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">1,800,000</td>
                    </tr>
                    <tr class="even">
                        <td>144</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11291&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10126</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11291&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Đặng
                                Anh Tuấn</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1452">Đại
                                lý công ty | Nhanh.vn</a></td>
                        <td class="colNumber">1,800,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">1,800,000</td>
                    </tr>
                    <tr>
                        <td>145</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=805&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">0630</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=805&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Thị Uyên</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=516">Phòng
                                chăm sóc khách hàng - Online | Vật giá - Hà Nội</a></td>
                        <td class="colNumber">1,782,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">2</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">1,782,000</td>
                    </tr>
                    <tr class="even">
                        <td>146</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1357&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">0048</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1357&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Ngô
                                Thị Hồng Hoa</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=591">Phòng
                                CSGH | Vật giá - Hà Nội</a></td>
                        <td class="colNumber">1,626,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">1</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">1,626,000</td>
                    </tr>
                    <tr>
                        <td>147</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7691&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6749</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7691&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Văn Hưng</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1437">123Job
                                | 123job.vn</a></td>
                        <td class="colNumber">1,595,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">1,595,000</td>
                    </tr>
                    <tr class="even">
                        <td>148</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11292&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10127</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11292&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lê
                                Trung Nghĩa</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1376">Nhanh
                                HCM - Nhóm KD4_ThịnhNQG | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">1,501,500</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">1,501,500</td>
                    </tr>
                    <tr>
                        <td>149</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9730&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8592</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9730&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phạm
                                Kim Yến</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=843">Chăm
                                sóc đơn hàng - HươngĐTM | Nhanh.vn</a></td>
                        <td class="colNumber">1,395,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">1,395,000</td>
                    </tr>
                    <tr class="even">
                        <td>150</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11148&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9999</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11148&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Viết Tuấn</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1452">Đại
                                lý công ty | Nhanh.vn</a></td>
                        <td class="colNumber">1,380,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">1,380,000</td>
                    </tr>
                    <tr>
                        <td>151</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9987&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8844</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9987&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Đỗ
                                Thanh Tùng</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1419">Ecomcare
                                | Nhanh.vn</a></td>
                        <td class="colNumber">1,375,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">1,375,000</td>
                    </tr>
                    <tr class="even">
                        <td>152</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11312&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10147</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11312&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Ngọc Ánh</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1320">Nhanh
                                HN - Phòng KD4_TrườngVV | Nhanh.vn</a></td>
                        <td class="colNumber">1,001,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">1,001,000</td>
                    </tr>
                    <tr>
                        <td>153</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11310&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10145</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11310&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                Minh Tâm</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1263">Nhanh
                                HN - KD8_CôngND | Nhanh.vn</a></td>
                        <td class="colNumber">1,001,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">1,001,000</td>
                    </tr>
                    <tr class="even">
                        <td>154</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8387&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7431</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8387&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Thanh Liêm</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1254">Nhanh
                                HCM - Nhóm KD5_LiêmNT | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">950,500</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">950,500</td>
                    </tr>
                    <tr>
                        <td>155</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11315&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10150</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11315&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Hữu Lộc</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1457">Phòng
                                dịch vụ SEO GG MAPS | Nhanh.vn</a></td>
                        <td class="colNumber">910,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">910,000</td>
                    </tr>
                    <tr class="even">
                        <td>156</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11279&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10114</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11279&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Minh Hải</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1452">Đại
                                lý công ty | Nhanh.vn</a></td>
                        <td class="colNumber">900,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">900,000</td>
                    </tr>
                    <tr>
                        <td>157</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11288&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10123</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11288&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Vũ
                                Thị Quỳnh Trang</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1048">Vchat
                                | Vật giá - Hà Nội</a></td>
                        <td class="colNumber">867,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">867,000</td>
                    </tr>
                    <tr class="even">
                        <td>158</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=6681&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5095</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=6681&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phạm
                                Thị Giang</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=516">Phòng
                                chăm sóc khách hàng - Online | Vật giá - Hà Nội</a></td>
                        <td class="colNumber">792,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">1</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">792,000</td>
                    </tr>
                    <tr>
                        <td>159</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11184&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10035</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11184&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Tuấn Vũ</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1457">Phòng
                                dịch vụ SEO GG MAPS | Nhanh.vn</a></td>
                        <td class="colNumber">550,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">550,000</td>
                    </tr>
                    <tr class="even">
                        <td>160</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11209&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10058</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11209&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Phương Mai</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1155">Nhanh
                                HCM - Phòng KD8_LâmNV | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">500,500</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">500,500</td>
                    </tr>
                    <tr>
                        <td>161</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11120&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9972</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11120&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Hoài Nam</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1241">Nhanh
                                HN - KD10_ThanhPT | Nhanh.vn</a></td>
                        <td class="colNumber">500,500</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">500,500</td>
                    </tr>
                    <tr class="even">
                        <td>162</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11189&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10039</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11189&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Ngọ
                                Văn Tình</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=656">Phòng
                                KD 8 | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">415,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">415,000</td>
                    </tr>
                    <tr>
                        <td>163</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11218&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10066</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11218&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Phúc Duy Khang</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1126">Nhanh
                                HCM - Phòng KD1_NgânHTM | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber">240,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">240,000</td>
                    </tr>
                    <tr class="even">
                        <td>164</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10776&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9547</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10776&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Ma
                                Thị Phương Thảo</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1282">Phòng
                                Dịch Vụ Khách Hàng | Nhanh.vn</a></td>
                        <td class="colNumber">225,000</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">225,000</td>
                    </tr>
                    <tr>
                        <td>165</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10553&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9345</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10553&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Dương
                                Minh Hiếu</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1263">Nhanh
                                HN - KD8_CôngND | Nhanh.vn</a></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr class="even">
                        <td>166</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9640&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8514</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9640&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Cao
                                Thị Thu Hằng</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1386">Sale
                                Marketing | Nhanh.vn</a></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr>
                        <td>167</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9281&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8214</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9281&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trương
                                Mạnh Tùng</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1419">Ecomcare
                                | Nhanh.vn</a></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr class="even">
                        <td>168</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11117&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9969</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11117&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Ecomcare
                                Nhanhvn</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1419">Ecomcare
                                | Nhanh.vn</a></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr>
                        <td>169</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8490&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7534</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8490&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trịnh
                                Xuân Tài</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1386">Sale
                                Marketing | Nhanh.vn</a></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr class="even">
                        <td>170</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7955&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7023</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7955&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Thị Nhật Minh</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1318">Nhanh
                                HN - Phòng KD2_TùngNT | Nhanh.vn</a></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr>
                        <td>171</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11021&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9791</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11021&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Đỗ
                                Thị Thanh Nhàn</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1437">123Job
                                | 123job.vn</a></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr class="even">
                        <td>172</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=304&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2965</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=304&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Viết Lâm</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1133">Nhanh
                                HN - KD6_LâmVN | Nhanh.vn</a></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr>
                        <td>173</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=3927&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2898</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=3927&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phụ
                                trách marketing</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1386">Sale
                                Marketing | Nhanh.vn</a></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr class="even">
                        <td>174</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=4148&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3194</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=4148&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Cao
                                Văn Thảo</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=756">Giảng
                                Võ | Cucre.vn - Hà Nội</a></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr>
                        <td>175</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7389&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6448</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7389&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Hồ
                                Phạm Ngọc Tiên</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=640">Sàn
                                Vật Giá HCM | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr class="even">
                        <td>176</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10696&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9474</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10696&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trương
                                Thị Tường Vi</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1371">CSonline-Telesale
                                | Vật giá - Hồ Chí Minh</a></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber">1</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr>
                        <td>177</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11091&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9944</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11091&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Dương
                                Hồng Quân</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1320">Nhanh
                                HN - Phòng KD4_TrườngVV | Nhanh.vn</a></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr class="even">
                        <td>178</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11272&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10107</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11272&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Đức Tuấn</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1318">Nhanh
                                HN - Phòng KD2_TùngNT | Nhanh.vn</a></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr>
                        <td>179</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8241&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7296</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8241&amp;contractType=&amp;type=&amp;productId=&amp;supplyCompanyId=&amp;accountingType=&amp;source=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Đào
                                Giáp Phố</a></td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/target?employeeDepartmentId=1381">Nhanh
                                HN - KD19 - PhoDG | Nhanh.vn</a></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">0%</td>
                        <td class="colNumber"></td>
                    </tr>
                    <tr class="taskStt3 even">
                        <td colspan="4"><b>Tổng</b></td>
                        <td class="colNumber">2,100,704,804</td>
                        <td class="colNumber"></td>
                        <td class="colNumber"></td>
                        <td class="colNumber">12</td>
                        <td class="colNumber">0</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">9</td>
                        <td class="colNumber">0</td>
                        <td class="colNumber"></td>
                        <td class="colNumber">2,100,704,804</td>
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
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/saved_resource(4)') }}"></script>
@endsection