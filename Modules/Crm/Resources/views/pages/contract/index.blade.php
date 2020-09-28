@extends('crm::layouts.master')

@section('title','ERP-Danh sách hợp đồng')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/crm/contract/bootstrap-multiselect.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/crm/contract/style.css') }}" type="text/css">
@endsection

@section('content-page')
    
<div class="col-md-10 content-wrapper">
    <ul class="breadcrumb">
        <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
        <li><a href="https://erp.nhanh.vn/hrm/employee/index">Danh sách hợp đồng</a></li>
    </ul>
    <div class="filterContainer">
        <form method="GET" name="crmContractTemplateFilter" class="form-inline lolify"
            role="form" id="crmContractTemplateFilter">
            <div class="col-md-10 lolify-default">

                <div class="form-group">
                    <input type="text" name="contractCustomer" maxlength="225"
                        placeholder="Bên khách" data-toggle="tooltip"
                        title="Thông tin bên khách ghi trên hợp đồng. Tên cá nhân, công ty, số điện thoại, email."
                        id="contractCustomer" class="form-control" value=""> </div>
                <div class="form-group">
                    <input type="text" name="id" maxlength="255" placeholder="ID hợp đồng"
                        id="id" class="form-control" value=""> </div>
                <input type="hidden" name="commissionEmployeeId" id="commissionEmployeeId"
                    class="form-control" value=""> <input type="hidden" name="createdById"
                    id="createdById" class="form-control" value=""> <input type="hidden"
                    name="approvedById" id="approvedById" class="form-control" value=""> <input
                    type="hidden" name="stampedById" id="stampedById" class="form-control"
                    value="">
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
                        <li><a href="https://erp.nhanh.vn/crm/contract/index#"
                                class="exportExcel"><i class="fa fa-file-excel-o"></i> Xuất
                                excel trang hiện tại</a></li>
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
                    <input type="text" name="customerName" maxlength="225"
                        placeholder="Khách hàng hệ thống" data-toggle="tooltip"
                        title="Thông tin khách hàng trên hệ thống. Ô nhập này là dạng suggest"
                        id="customerName" class="form-control ui-autocomplete-input" value=""
                        autocomplete="off"> </div>
                <div class="form-group">
                    <input type="text" name="serviceName" maxlength="225"
                        placeholder="Tên Gian hàng" data-toggle="tooltip" id="serviceName"
                        class="form-control" value=""> </div>
                <div class="form-group">
                    <input type="text" name="leadId" maxlength="255" placeholder="ID thông tin"
                        id="leadId" class="form-control" value=""> </div>
                <div class="form-group">
                    <input type="text" name="accountId" maxlength="255"
                        placeholder="ID khách hàng" id="accountId" class="form-control"
                        value=""> </div>
                <div class="form-group">
                    <select name="companyId" id="companyId"
                        class="form-control select2-hidden-accessible" tabindex="-1"
                        aria-hidden="true">
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
                    </select><span
                        class="select2 select2-container select2-container--default select2-container--below"
                        dir="ltr" style="width: auto;"><span class="selection"><span
                                class="select2-selection select2-selection--single"
                                role="combobox" aria-haspopup="true" aria-expanded="false"
                                tabindex="0" aria-labelledby="select2-companyId-container"><span
                                    class="select2-selection__rendered"
                                    id="select2-companyId-container"
                                    title="----Nhanh.vn">----Nhanh.vn</span><span
                                    class="select2-selection__arrow" role="presentation"><b
                                        role="presentation"></b></span></span></span><span
                            class="dropdown-wrapper" aria-hidden="true"></span></span> </div>
                <div class="form-group">
                    <select name="supplyCompanyId" id="supplyCompanyId" class="form-control">
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
                    <select name="departmentId" id="departmentId"
                        class="form-control select2-hidden-accessible" tabindex="-1"
                        aria-hidden="true">
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
                    </select><span
                        class="select2 select2-container select2-container--default select2-container--below"
                        dir="ltr" style="width: auto;"><span class="selection"><span
                                class="select2-selection select2-selection--single"
                                role="combobox" aria-haspopup="true" aria-expanded="false"
                                tabindex="0"
                                aria-labelledby="select2-departmentId-container"><span
                                    class="select2-selection__rendered"
                                    id="select2-departmentId-container" title="- Phòng ban -">-
                                    Phòng ban -</span><span class="select2-selection__arrow"
                                    role="presentation"><b
                                        role="presentation"></b></span></span></span><span
                            class="dropdown-wrapper" aria-hidden="true"></span></span> </div>
                <div class="form-group">
                    <select name="status" id="status" class="form-control">
                        <option value="">- Trạng thái -</option>
                        <option value="1">Duyệt</option>
                        <option value="2">Hủy</option>
                        <option value="3">Mới</option>
                    </select> </div>
                <div class="form-group">
                    <select name="type" id="type" class="form-control">
                        <option value="">- Hình thức -</option>
                        <option value="1">Kí mới</option>
                        <option value="2">Tái kí</option>
                        <option value="3">Mở rộng</option>
                        <option value="4">Bán chéo</option>
                    </select> </div>
                <div class="form-group">
                    <select name="serviceType" id="serviceType" class="form-control">
                        <option value="">- Loại -</option>
                        <option value="1">HĐ dịch vụ</option>
                        <option value="3">HĐ đặt cọc</option>
                        <option value="4">HĐ phụ lục</option>
                        <option value="5">HĐ đại lý</option>
                        <option value="6">HĐ Hợp tác</option>
                        <option value="7">HĐ Marketing</option>
                        <option value="8">HĐ Cộng tác viên</option>
                        <option value="9">HĐ Phần cứng</option>
                        <option value="10">HĐ vận chuyển</option>
                    </select> </div>
                <div class="form-group">
                    <select name="typeAccount" id="typeAccount" class="form-control">
                        <option value="">- Loại khách hàng -</option>
                        <option value="1">Công ty</option>
                        <option value="2">Cá nhân</option>
                    </select> </div>
                <div class="form-group">
                    <input type="text" name="commissionName" maxlength="225"
                        placeholder="Doanh số cho" id="commissionName"
                        class="form-control ui-autocomplete-input" value="" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="text" name="createdByName" maxlength="225"
                        placeholder="Người tạo" id="createdByName"
                        class="form-control ui-autocomplete-input" value="" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="text" name="approvedByName" maxlength="225"
                        placeholder="Người Duyệt" id="approvedByName"
                        class="form-control ui-autocomplete-input" value="" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="text" name="stampedByName" maxlength="225"
                        placeholder="Người triển khai" id="stampedByName"
                        class="form-control ui-autocomplete-input" value="" autocomplete="off">
                </div>
                <br>
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
                            <option value="372">Gói thiết kế thêm tính năng cho website</option>
                            <option value="385">Free Phí chỉnh sửa website</option>
                            <option value="388">Máy quét mã vạch có dây Hugo 1607</option>
                            <option value="403">Gói Free - QLBH</option>
                            <option value="404">Hoàn cước vận chuyển</option>
                            <option value="414">Gói Omni Starter</option>
                            <option value="415">Gói Omni Premium</option>
                            <option value="416">Gói Omni Enterprise</option>
                            <option value="420">Gói Kho tổng (chỉ xuất nhập kho, không bán hàng)
                            </option>
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
                            <option value="511">Gói Ecom (không giới hạn gian hàng/1 sàn TMĐT)
                            </option>
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
                            <option value="538">Máy in hóa đơn model A160</option>
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
                            <option value="583">Gói chăm sóc gian hàng chuyên nghiệp</option>
                            <option value="585">Máy in tem nhiệt N41</option>
                            <option value="586">Gói chăm sóc website seo cơ bản</option>
                            <option value="587">Gói chăm sóc website seo tối ưu</option>
                            <option value="588">Gói Hỗ trợ và định hướng content seo</option>
                            <option value="589">Gói Tool quét data facebook</option>
                            <option value="590">Máy quét mã vạch Antech 1266i</option>
                            <option value="591">Giấy trắng dạng cuộn dùng trong in hóa đơn siêu
                                thị</option>
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
                            <option value="349">Quảng cáo Facebook dạng Tổng hợp ảnh Gói Căn Bản
                            </option>
                            <option value="350">Quảng cáo Facebook dạng Tổng hợp ảnh Gói Thương
                                Gia</option>
                            <option value="351">Quảng cáo Facebook dạng Độc quyền ảnh Gói Căn
                                Bản</option>
                            <option value="352">Quảng cáo Facebook dạng Độc quyền ảnh Gói Thương
                                Gia</option>
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
                            <option value="362">Gói Quảng cáo Facebook dạng ảnh Kênh cộng đồng
                            </option>
                            <option value="363">Gói Quảng cáo Facebook dạng video Kênh cộng đồng
                            </option>
                            <option value="386">Vchat gói Cơ bản</option>
                            <option value="387">Vchat gói Chuyên nghiệp</option>
                            <option value="389">Wemarry - Quản trị fanpage - Gói Basic</option>
                            <option value="390">Wemarry - Dịch vụ facebook ads</option>
                            <option value="391">Wemarry - Dịch vụ quảng cáo khác - Gói chụp ảnh
                                sản phẩm 01</option>
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
                            <option value="394">Wemarry - Dịch vụ quảng cáo khác - Gói chụp ảnh
                                sản phẩm 02</option>
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
                            <option value="483">Bizshare - Dịch vụ quản lý ngân sách chạy quảng
                                cáo</option>
                            <option value="484">Bizshare - Chăm sóc website, nội dung</option>
                            <option value="485">Bizshare - Xây dựng landing page bán hàng
                            </option>
                            <option value="486">Bizshare - Tối ưu kênh bán hàng sàn TMĐT Shopee
                            </option>
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
                            <option value="530">Bizshare - Định hướng tư vấn truyền thông và tư
                                vấn chiến lược</option>
                            <option value="531">Bizshare - Gói Quản trị kênh Thương mại điện tử
                            </option>
                            <option value="533">SEO lead</option>
                            <option value="535">Facebook Ads</option>
                        </optgroup>
                        <optgroup label="123job.vn">
                            <option value="584">123job - Gói mở hồ sơ ứng viên</option>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" name="signedDateRange" maxlength="225"
                        placeholder="Ngày kí" class="form-control date-range-picker"
                        id="signedDateRange" value=""> </div>
                <div class="form-group">
                    <input type="text" name="createdDateRange" maxlength="225"
                        placeholder="Ngày tạo" class="form-control date-range-picker"
                        id="createdDateRange" value=""> </div>
                <div class="form-group">
                    <input type="text" name="endDateRange" maxlength="225"
                        placeholder="Ngày kết thúc" class="form-control date-range-picker"
                        id="endDateRange" value=""> </div>
                <div class="form-group">
                    <input type="text" name="approvedDateRange" maxlength="225"
                        placeholder="Ngày duyệt" class="form-control date-range-picker"
                        id="approvedDateRange" value=""> </div>
                <div class="form-group">
                    <input type="text" name="expiredDateRange" maxlength="225"
                        placeholder="Ngày hết hạn" class="form-control date-range-picker"
                        id="expiredDateRange" value=""> </div>
                <div class="form-group">
                    <input type="text" name="startDateRange" maxlength="225"
                        placeholder="Ngày bắt đầu" class="form-control date-range-picker"
                        id="startDateRange" value=""> </div>
                <div class="form-group">
                    <input type="text" name="fromValue" maxlength="225" placeholder="Giá từ"
                        class="form-control initAutonumeric" id="fromValue" value=""> </div>
                <div class="form-group">
                    <input type="text" name="toValue" maxlength="225" placeholder="Giá đến"
                        class="form-control initAutonumeric" id="toValue" value=""> </div>
                <div class="form-group">
                    <select name="hasService" id="hasService" class="form-control">
                        <option value="">- Trạng thái gian hàng -</option>
                        <option value="1">Đã có GH</option>
                        <option value="-1">Chưa có GH</option>
                    </select> </div>
                <div class="form-group">
                    <select name="hasRequirement" id="hasRequirement" class="form-control">
                        <option value="">- Thực hiện Y/C dịch vụ -</option>
                        <option value="1">Đã thực hiện</option>
                        <option value="-1">Chưa thực hiện </option>
                    </select> </div>
                <div class="form-group">
                    <select name="hasFile" id="hasFile" class="form-control">
                        <option value="">- File đính kèm -</option>
                        <option value="1">Có file đính kèm</option>
                    </select> </div>
                <div class="form-group">
                    <select name="isProfile" id="isProfile" class="form-control">
                        <option value="">- Loại hồ sơ -</option>
                        <option value="2">Chứng minh nhân dân</option>
                        <option value="3">Giấy phép kinh doanh</option>
                        <option value="4">Sổ thuế</option>
                        <option value="5">Biên bản bàn giao</option>
                        <option value="10">Khác</option>
                    </select> </div>
                <div class="form-group">
                    <select name="hasDiscount" id="hasDiscount" class="form-control">
                        <option value="">- Giảm Giá -</option>
                        <option value="1">Có giảm giá</option>
                    </select> </div>
                <div class="form-group">
                    <input type="text" name="applyTransactionDateRange" maxlength="225"
                        placeholder="Ngày duyệt phiếu thu"
                        class="form-control date-range-picker" id="applyTransactionDateRange"
                        value=""> </div>
                <div class="form-group">
                    <select name="statusPay" id="statusPay" class="form-control">
                        <option value="">- thanh toán -</option>
                        <option value="1">Chưa thanh toán</option>
                        <option value="4">Đã có thanh toán</option>
                        <option value="2">Thanh toán 1 phần</option>
                        <option value="3">Đã thanh toán hết</option>
                    </select> </div>
                <div class="form-group">
                    <select name="billStatus" id="billStatus" class="form-control">
                        <option value="">- Hóa đơn phiếu thu -</option>
                        <option value="1">Đã xuất hóa đơn</option>
                        <option value="-1">Chưa xuất hóa đơn</option>
                    </select> </div>
                <div class="form-group">
                    <select name="billContractStatus" id="billContractStatus"
                        class="form-control">
                        <option value="">- Hóa đơn hợp đồng-</option>
                        <option value="1">Đã xuất hóa đơn</option>
                        <option value="-1">Chưa xuất hóa đơn</option>
                    </select> </div>
                <div class="form-group">
                    <input type="text" name="billDateRange" maxlength="225"
                        placeholder="Ngày xuất hóa đơn" class="form-control date-range-picker"
                        id="billDateRange" value=""> </div>
                <div class="form-group">
                    <input type="text" name="monthProduct" maxlength="225"
                        placeholder="Số tháng dịch vụ" id="monthProduct" class="form-control"
                        value=""> </div>
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
                    <select name="numberPaid" id="numberPaid" class="form-control">
                        <option value="">- Số lần thanh toán-</option>
                        <option value="1">Thanh toán 1 lần</option>
                        <option value="2">Thanh toán nhiều lần</option>
                    </select> </div>
                <div class="form-group">
                    <select name="originalStatus" id="originalStatus" class="form-control">
                        <option value="">- Trạng thái hợp đồng gốc -</option>
                        <option value="1">Còn nợ</option>
                        <option value="2">Đã trả</option>
                    </select> </div>
                <div class="form-group">
                    <input type="text" name="paperDateRange" maxlength="225"
                        placeholder="Ngày cập nhật HĐ gốc"
                        class="form-control date-range-picker" id="paperDateRange" value="">
                </div>

            </div>
        </form>
        <div class="clearfix"></div>
        <div class="lolify-left-menu" style="display: none;">
        </div>
    </div>
    <div id="nav-table">
        <div class="btn-group pull-left" data-toggle="tooltip" data-placement="top"
            data-original-title="Thao tác hiển thị các phần hiển thị">
            <button class="btn btn-info" type="button">
                Hiển thị <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" style="display: none;">
                <li>
                    <a class="active" href="javascript:void(0)" data-name="AttId">
                        <i class="fa fa-check-square" aria-hidden="true"></i>
                        ID
                    </a>
                </li>
                <li>
                    <a class="active" href="javascript:void(0)" data-name="AttCustomerName">
                        <i class="fa fa-check-square" aria-hidden="true"></i>
                        Tên Khách Hàng
                    </a>
                </li>
                <li>
                    <a class="active" href="javascript:void(0)" data-name="AttAmount">
                        <i class="fa fa-check-square" aria-hidden="true"></i>
                        Giá trị
                    </a>
                </li>
                <li>
                    <a class="active" href="javascript:void(0)" data-name="AttPaid">
                        <i class="fa fa-check-square" aria-hidden="true"></i>
                        Thanh toán
                    </a>
                </li>
                <li>
                    <a class="active" href="javascript:void(0)" data-name="AttProduct">
                        <i class="fa fa-check-square" aria-hidden="true"></i>
                        Sản phẩm
                    </a>
                </li>
                <li>
                    <a class="active" href="javascript:void(0)" data-name="AttCreatedBy">
                        <i class="fa fa-check-square" aria-hidden="true"></i>
                        Người tạo
                    </a>
                </li>
                <li>
                    <a class="active" href="javascript:void(0)" data-name="AttType">
                        <i class="fa fa-check-square" aria-hidden="true"></i>
                        HT ký
                    </a>
                </li>
                <li>
                    <a class="active" href="javascript:void(0)" data-name="AttApprovedById">
                        <i class="fa fa-check-square" aria-hidden="true"></i>
                        Duyệt
                    </a>
                </li>
                <li>
                    <a class="active" href="javascript:void(0)" data-name="AttCareService">
                        <i class="fa fa-check-square" aria-hidden="true"></i>
                        Chăm sóc GH
                    </a>
                </li>
                <li>
                    <a class="active" href="javascript:void(0)" data-name="AttAction">
                        <i class="fa fa-check-square" aria-hidden="true"></i>
                        Action
                    </a>
                </li>
            </ul>
            <div class="mask-body" style="display: none;"></div>
        </div>
    </div>
    <div class="dgContainer">
        <div style="width: 1556px; display: none;" class="stickyHeader">
            <table class="table table-bordered" cellspacing="0" cellpadding="0">
                <thead>
                    <tr class="even">
                        <th class="AttId" style="width: 84px; display: table-cell;">ID</th>
                        <th style="max-width: 200px; width: 344px; display: table-cell;"
                            class="AttCustomerName">Khách hàng</th>
                        <th class="AttAmount" style="width: 146px; display: table-cell;">Giá trị
                        </th>
                        <th class="AttPaid" style="width: 134px; display: table-cell;">Thanh
                            toán</th>
                        <th style="max-width: 160px; width: 275px; display: table-cell;"
                            class="AttProduct">Sản phẩm</th>
                        <th class="AttCreatedBy" style="width: 284px; display: table-cell;">
                            Người tạo | Người TK</th>
                        <th style="min-width: 60px; width: 115px; display: table-cell;"
                            class="AttType">HT ký</th>
                        <th style="width: 120px; display: table-cell;" class="AttApprovedById">
                            Duyệt</th>
                        <th class="AttAction" style="width: 54px;"><i
                                class="fa fa-cogs icon"></i></th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="row">
            <div class="col-md-6 dgButtons"></div>
            <div class="col-md-6 paginatorItem">
                <div class="paginator"><span class="labelPages">1 - 100 / 63,168</span><span
                        class="disabled fa fa-step-backward"></span><span
                        class="disabled fa fa-backward"></span><a class="fa fa-forward"
                        href="https://erp.nhanh.vn/crm/contract/index?page=2"
                        title="Trang sau"></a> <a class="fa fa-step-forward"
                        href="https://erp.nhanh.vn/crm/contract/index?page=632"
                        title="Trang cuối"></a></div>
            </div>
            <div style="clear: both;"></div><br>
        </div>
        <table id="dgContract" class="table table-hover">
            <thead>
                <tr class="even">
                    <th class="AttId" style="display: table-cell;">ID</th>
                    <th style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                        Khách hàng</th>
                    <th class="AttAmount" style="display: table-cell;">Giá trị</th>
                    <th class="AttPaid" style="display: table-cell;">Thanh toán</th>
                    <th style="max-width: 160px; display: table-cell;" class="AttProduct">Sản
                        phẩm</th>
                    <th class="AttCreatedBy" style="display: table-cell;">Người tạo | Người TK
                    </th>
                    <th style="min-width: 60px; display: table-cell;" class="AttType">HT ký</th>
                    <th style="width: 120px; display: table-cell;" class="AttApprovedById">Duyệt
                    </th>
                    <th class="AttAction"><i class="fa fa-cogs icon"></i></th>
                </tr>
            </thead>
            <tbody>
                @foreach($contracts as $contract)
                    <tr class="">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="{{ route('get.crm.contract.show',['id' => $contract->id]) }}">{{$contract->id}}</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a href="{{ route('get.crm.customer.detail', ['id' => $contract->customer->id]) }}">
                                <span data-toggle="tooltip" data-title="Phạm Thị An">
                                    {{ $contract->customer->name }}
                                </span>
                            </a>
                            <br>
                            <label class="text-muted fontsize-85">
                                (Nguồn: {{ $contract->customer->source->name }})
                            </label>
                            <br>
                            <label class="text-muted fontsize-85">
                                {{ $contract->customer->major->name }}
                            </label>
                        </td>
                        <td class="AttAmount colNb" style="display: table-cell;">{{ number_format($contract->totalValue) }}</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63312">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            @foreach($contract->listOfProduct as $product)
                                <div>
                                    <a style="color: #F73838;" href="https://erp.nhanh.vn/crm/contract/detail?id=63312">
                                        {{ $product['name'] }}
                                    </a>
                                </div>
                            @endforeach
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: {{ $contract->created_at }} ">
                                <i class="fa fa-github-alt"></i> {{ $contract->user->name }}</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">{{ $contract->sign_type }}</td>
                        <td style="text-align: center; display: table-cell;" class="colStatus AttApprovedById">
                            <a data-toggle="tooltip" title="" data-original-title="Bấm để duyệt">
                                @if($contract->is_checked == 0)
                                    <b>Chưa duyệt</b>
                                @else
                                    <span class="text-success" data-toggle="tooltip" title="" data-original-title="Đã duyệt">
                                        Nguyễn Hoàng Long
                                        <br>
                                        <i class=" text-muted fontsize-85">16:32 24/07</i>
                                    </span>
                                @endif
                            </a>
                        </td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/contract/edit?id=63312"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            hợp đồng</a></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td><b>Tổng</b></td>
                    <td></td>
                    <td class="AttAmount colNb" style="display: table-cell;"><b>291.848.900</b>
                    </td>
                    <td class="AttAmount colNb" style="display: table-cell;"><b>81.937.000</b>
                    </td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <div class="row">
            <div class="col-md-6 dgButtons"></div>
            <div class="col-md-6 paginatorItem">
                <div class="paginator"><span class="labelPages">1 - 100 / 63,168</span><span
                        class="disabled fa fa-step-backward"></span><span
                        class="disabled fa fa-backward"></span><a class="fa fa-forward"
                        href="https://erp.nhanh.vn/crm/contract/index?page=2"
                        title="Trang sau"></a> <a class="fa fa-step-forward"
                        href="https://erp.nhanh.vn/crm/contract/index?page=632"
                        title="Trang cuối"></a></div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="confirmReapproveModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Xác nhận</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" class="referId" value="">
                    <div class="alert alert-warning">Bạn muốn hoàn duyệt hợp đồng này?</div>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-primary btnSave">Đồng ý</button>
                    <button type="button" class="btn btn-default"
                        data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="errorModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Lỗi</h4>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default"
                        data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="alertModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Thông báo!</h4>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default reload"
                        data-dismiss="modal">Đóng</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
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
    <div class="modal fade" id="acceptRequirementModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><i class="fa fa-hand-o-right"></i> Kích hoạt yêu cầu
                    </h4>
                </div>
                <div class="modal-body">
                    <div class="col-md-12 title "><span><i class="fa fa-check"></i></span>Thông
                        tin yêu cầu </div>
                    <div class="row">
                        <div id="show-requirement-area"></div>
                    </div>
                    <div class="col-md-12 title "><span><i class="fa fa-check"></i></span>Thông
                        tin kích hoạt </div>
                    <div class="row">
                        <div class="form-horizontal">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label col-md-3">Ngày bắt đầu:</label>
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i
                                                    class="fa fa-calendar-o"></i></span>
                                            <input type="text" value="24/07/2020"
                                                class="datepicker form-control  startedDate">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label col-md-3">Ngày kết thúc:</label>
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i
                                                    class="fa fa-calendar-o"></i></span>
                                            <input type="text" value="24/07/2020"
                                                class="datepicker form-control  endedDate">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label col-md-3">Tài khoản:</label>
                                    <div class="col-md-8">
                                        <div class="col-md-6">
                                            <input name="valueType" value="1" class="valueType"
                                                type="radio"><span>TK chính</span>
                                        </div>
                                        <div class="col-md-6">
                                            <input name="valueType" value="2" class="valueType"
                                                type="radio"><span>TK Marketing</span>
                                        </div>
                                        <div class="description text-muted fontsize-85"><i>Lưu ý
                                                chọn chính đúng tài khoản nạp để phục vụ việc
                                                báo cáo</i></div>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label col-md-3">Số tiền thực
                                        hiện:</label>
                                    <div class="col-md-8">
                                        <input value="" type="text"
                                            class="form-control isAutonumeric confirmValue">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label col-md-3">Phí duy trì ( hoặc phí
                                        khác ):</label>
                                    <div class="col-md-8">
                                        <input value="" type="text"
                                            class="form-control isAutonumeric otherValue">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label col-md-3">khuyến mại:</label>
                                    <div class="col-md-8">
                                        <input value="" type="text"
                                            class="form-control isAutonumeric extraValue">
                                    </div>
                                </div>
                                <input value="" type="hidden" id="requirementId"
                                    class="form-control isAutonumeric">
                                <div class="alert alert-info"><b><i class="fa fa-edit"></i> Lưu
                                        ý:</b> SỐ TIỀN THỰC HIỆN và PHÍ DUY TRÌ sẽ được tính để
                                    trừ nợ nhân viên khi có hợp đồng! KHUYẾN MẠI thì không!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary accept-btn">Xác nhận</button>
                    <button type="button" class="btn btn-default"
                        data-dismiss="modal">Đóng</button>


                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Xác nhận</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" class="referId" value="">
                    <div class="alert alert-warning">
                        Bạn muốn xóa hợp đồng này! </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary accept">Có</button>
                    <button type="button" class="btn btn-default"
                        data-dismiss="modal">Không</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="updateStampedEmployeeModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Cập nhật người triển khai</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-horizontal">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <span class="col-md-4">Người triển khai:</span>
                                    <div class="col-md-8">
                                        <input type="hidden" class="contractId" value="">
                                        <input type="text"
                                            class="stampedContractName form-control ui-autocomplete-input"
                                            placeholder="" autocomplete="off">
                                        <input type="hidden" class="stampedContractId">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <span class="col-md-4">Ngày triển khai:</span>
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i
                                                    class="fa fa-calendar-o"></i></span>
                                            <input type="text" value="24/07/2020"
                                                class="datepicker form-control suportedDate active">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button"
                        class="btn btn-primary save-accept-contract-support-btn">Xác
                        nhận</button>
                    <button type="button" class="btn btn-default reload"
                        data-dismiss="modal">Đóng</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <div class="modal fade" id="alertModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Thông báo!</h4>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-default reload"
                        data-dismiss="modal">Đóng</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <div id="updateOriginalStatusModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"
                        aria-hidden="true">×</button>
                    <h4 class="modal-title">
                        Cập nhật trạng thái hợp đồng gốc
                    </h4>
                </div>
                <div class="modal-body">
                    <div class="form-horizontal clearfix">
                        <div style="margin-bottom: 5px;" class="alert alert-info col-md-12">
                            Bạn vui lòng chọn 1 trong 2 trạng thái hợp đồng gốc
                        </div>
                        <div class="col-md-12">
                            <div class="checkbox">
                                <label>
                                    <input name="originalStatus" class="originalStatus"
                                        value="1" type="checkbox">
                                    <span>Còn nợ</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="checkbox">
                                <label>
                                    <input name="originalStatus" class="originalStatus"
                                        value="2" type="checkbox">
                                    <span>Đã nộp</span>
                                </label>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary confirmUpdateOriginalStatus">
                        Lưu
                    </button>
                    <button type="button" class="btn btn-default"
                        data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>
    <style>
        #nav-table {
            display: inline-block;
            margin-bottom: -9px;
            position: relative;
        }

        #nav-table button {
            position: relative;
            z-index: 10;
        }

        #nav-table .dropdown-menu {
            padding: 0 !important;
        }

        #nav-table .dropdown-menu li {
            position: relative;
            border-bottom: 1px solid #ddd;
        }

        #nav-table .dropdown-menu li a {
            padding: 5px 10px;
            font-size: 15px;
        }

        #nav-table .dropdown-menu li a.active {
            color: #a90202;
        }

        #nav-table .dropdown-menu li a i.fa-check-square {
            color: #00b6ff;
        }

        .mask-body {
            position: fixed;
            display: none;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            background: transparent;
        }

        .table>thead>tr>td,
        .table>tbody>tr>td {
            display: table-cell;
            text-align: center;
        }

        <blade media|%20(max-width%3A%201024px)%20%7B>#dgContract,
        .filterContainer {
            margin-bottom: 0;
        }

        .dgContainer .paginatorItem .paginator {
            float: right;
            margin-top: 0;
        }

        #nav-table {
            margin-bottom: -30px;
        }
        }

        .ui-autocomplete {
            z-index: 10000;
        }

        .AttCreatedBy>div {
            min-width: 130px;
            margin: 5px 0;
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
    <script type="text/javascript" src="{{ asset('js/crm/contract/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/contract/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/contract/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/contract/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/contract/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/contract/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/contract/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/contract/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/contract/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('js/crm/contract/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/contract/saved_resource(2)') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/contract/bootstrap-multiselect.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/contract/saved_resource(3)') }}"></script>

@endsection