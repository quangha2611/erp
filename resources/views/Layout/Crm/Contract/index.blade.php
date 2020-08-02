@extends('Layout.master')

@section('title','ERP-Danh Sách Hợp Đồng')
    
@section('css')
    <link href="{{ asset('asset/css/crm/contract/bootstrap-multiselect.css" media="screen') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/css/crm/contract/style.css') }}" type="text/css">
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
                                                type="checkbox" value="103"> Gói thiết kế website
                                            theo yêu cầu</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="107"> Dịch vụ vận
                                            chuyển</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="112"> Gói phần mềm theo yêu
                                            cầu</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="125"> Phần mềm quản lý doanh
                                            nghiệp ERP</label></a></li>
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
                                                type="checkbox" value="273"> Gói website theo yêu
                                            cầu</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="284"> Gói Phần mềm quản lý
                                            fanpage</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="285"> Gói Premium
                                            Website</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="293"> Gói Basic 1 - QLBH -
                                            online</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="294"> Gói Basic 2 - QLBH -
                                            offline</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="297"> Máy in mã vạch Xprinter
                                            XP 350B</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="299"> Giấy in bill
                                            K58</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="300"> Giấy in bill
                                            K80</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="301"> Decal nhiệt in mã vạch
                                            2 tem 35*22 ( cuộn )</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="302"> Ngăn kéo đựng tiền
                                            ZQ410F</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="305"> Thiết kế thêm tính năng
                                            cho website: bảo mật https cho website</label></a></li>
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
                                                type="checkbox" value="316"> Gói phí chuyển đổi dữ
                                            liệu website</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="317"> Gói phí nâng cấp gói
                                            phần mềm</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="321"> Chăm sóc fanpage - Gói
                                            content</label></a></li>
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
                                                type="checkbox" value="372"> Gói thiết kế thêm tính
                                            năng cho website</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="385"> Free Phí chỉnh sửa
                                            website</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="388"> Máy quét mã vạch có dây
                                            Hugo 1607</label></a></li>
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
                                                type="checkbox" value="420"> Gói Kho tổng (chỉ xuất
                                            nhập kho, không bán hàng)</label></a></li>
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
                                                type="checkbox" value="476"> Máy in hóa đơn Xprinter
                                            XP-58IIH</label></a></li>
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
                                                type="checkbox" value="497"> Gói dịch vụ nhập liệu
                                            website</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="502"> Gói dịch vụ nhập liệu
                                            sàn TMĐT</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="503"> Gói Ecomcare
                                            Shopee</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="508"> Gói Ecomcare
                                            Lazada</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="509"> Gói Ecom</label></a>
                                </li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="511"> Gói Ecom (không giới
                                            hạn gian hàng/1 sàn TMĐT)</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="513"> Chăm sóc fanpage - Gói
                                            VIP 1</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="514"> Chăm sóc fanpage - Gói
                                            VIP 2</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="515"> Chăm sóc fanpage - Gói
                                            VIP 3</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="520"> Gói Thiết kế Website
                                            P</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="524"> Máy in mã vạch
                                            380B</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="525"> Máy Đọc Mã Vạch
                                            ChipPOS</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="528"> Gói Thiết kế Website
                                            W</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="532"> Gói Thiết kế Website
                                            E</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="534"> Giấy tờ Công
                                            ty</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="536"> Gói Ecom full sàn
                                            TMĐT</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="538"> Máy in hóa đơn model
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
                                                type="checkbox" value="550"> Gói Hỗ trợ quảng cáo
                                            Shopee</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="552"> Gói Ecom COVID
                                            Free</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="553"> Gói WEB COVID
                                            Free</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="554"> POS</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="555"> WEB</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="556"> ECOM</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="557"> VPAGE</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="558"> OMNI</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="559"> MAP</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="560"> ECOMCARE</label></a>
                                </li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="561"> SEO</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="562"> FB</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="563"> PC</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="564"> DVPM</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="565"> DVMKT</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="566"> Lệ phí đăng ký tên miền
                                            VN</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="567"> Phí duy trì tên miền
                                            VN</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="568"> Phí dịch vụ TK quản trị
                                            tên miền VN</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="570"> Phí đăng ký tên miền
                                            quốc tế</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="571"> Phí duy trì tên miền
                                            quốc tế</label></a></li>
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
                                                type="checkbox" value="579"> Gói khởi tạo và Decor
                                            gian hàng</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="580"> DV GTGT</label></a>
                                </li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="581"> SMS</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="582"> DV TÊN MIỀN</label></a>
                                </li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="583"> Gói chăm sóc gian hàng
                                            chuyên nghiệp</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="585"> Máy in tem nhiệt
                                            N41</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="586"> Gói chăm sóc website
                                            seo cơ bản</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="587"> Gói chăm sóc website
                                            seo tối ưu</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="588"> Gói Hỗ trợ và định
                                            hướng content seo</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="589"> Gói Tool quét data
                                            facebook</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="590"> Máy quét mã vạch Antech
                                            1266i</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="591"> Giấy trắng dạng cuộn
                                            dùng trong in hóa đơn siêu thị</label></a></li>
                                <li class="multiselect-item group"><label
                                        class="multiselect-group">Công ty cổ phần Vật Giá Việt
                                        Nam</label></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="114"> Facebook Ad</label></a>
                                </li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="115"> Google Ad</label></a>
                                </li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="120"> Vchat</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="220"> Marketing</label></a>
                                </li>
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
                                                type="checkbox" value="226"> Siêu vip</label></a>
                                </li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="227"> Banner</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="229"> Nạp tiền Ad by
                                            Vatgia</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="230"> Nạp tiền</label></a>
                                </li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="231"> GHĐB (tái
                                            ký)</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="232"> GHĐB (mới)</label></a>
                                </li>
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
                                                type="checkbox" value="275"> Vpage</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="276"> Gói Traffic</label></a>
                                </li>
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
                                                type="checkbox" value="281"> Fanpage VG</label></a>
                                </li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="282"> Dịch vụ Viết
                                            bài</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="283"> Seo Banner</label></a>
                                </li>
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
                                                type="checkbox" value="331"> Quản trị Fanpage Basic
                                            - WeSave</label></a></li>
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
                                                type="checkbox" value="335"> Gói chụp ảnh đồ ăn căn
                                            bản</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="336"> Gói chụp ảnh không
                                            gian</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="337"> Gói quay video kèm
                                            dựng</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="349"> Quảng cáo Facebook dạng
                                            Tổng hợp ảnh Gói Căn Bản</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="350"> Quảng cáo Facebook dạng
                                            Tổng hợp ảnh Gói Thương Gia</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="351"> Quảng cáo Facebook dạng
                                            Độc quyền ảnh Gói Căn Bản</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="352"> Quảng cáo Facebook dạng
                                            Độc quyền ảnh Gói Thương Gia</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="353"> Quảng cáo Facebook dạng
                                            Video Gói Căn Bản</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="354"> Quảng cáo Facebook dạng
                                            Video Gói Thương Gia</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="355"> Gói Chụp ảnh sản phẩm
                                            I</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="356"> Gói Chụp ảnh sản phẩm
                                            II</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="357"> Gói Quay
                                            video</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="358"> Gói Thiết kế Menu dạng
                                            truyền thống</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="359"> Gói Thiết kế Menu dạng
                                            hiện đại</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="360"> Gói Sản xuất video qua
                                            ảnh</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="361"> Gói Quản trị
                                            Instagram</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="362"> Gói Quảng cáo Facebook
                                            dạng ảnh Kênh cộng đồng</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="363"> Gói Quảng cáo Facebook
                                            dạng video Kênh cộng đồng</label></a></li>
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
                                                type="checkbox" value="391"> Wemarry - Dịch vụ quảng
                                            cáo khác - Gói chụp ảnh sản phẩm 01</label></a></li>
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
                                                type="checkbox" value="436"> Wehelp</label></a></li>
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
                                                type="checkbox" value="480"> Tư vấn và tối ưu quy
                                            trình Marketing Insight</label></a></li>
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
                                                type="checkbox" value="394"> Wemarry - Dịch vụ quảng
                                            cáo khác - Gói chụp ảnh sản phẩm 02</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="395"> Wemarry - Gói chụp ảnh
                                            không gian</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="396"> Wemarry - Gói quay
                                            phim</label></a></li>
                                <li class="multiselect-item group"><label
                                        class="multiselect-group">Easycare.vn</label></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="258"> Dịch vụ trả theo
                                            tháng</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="259"> Dịch vụ trả theo thời
                                            gian</label></a></li>
                                <li class="multiselect-item group"><label
                                        class="multiselect-group">Vật giá - Hà Nội</label></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="274"> Phần mềm QL bán
                                            thuốc</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="277"> Zopzep - Quản lý nhà
                                            hàng</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="551"> BA - Phát triển phần
                                            mềm</label></a></li>
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
                                                type="checkbox" value="540"> Dịch vụ trên ứng dụng
                                            Panama</label></a></li>
                                <li class="multiselect-item group"><label
                                        class="multiselect-group">Công ty cổ phần WeHelp</label>
                                </li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="408"> Bizshare - Gói chăm sóc
                                            fanpage - Nội dung</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="409"> Bizshare - Chạy quảng
                                            cáo</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="410"> Bizshare - Xây dựng nội
                                            dung trên Website và Fanpage</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="411"> Bizshare - Chạy chiến
                                            dịch quảng cáo trên Facebook Ads và Google
                                            Adword</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="437"> Bizshare - Gói quảng
                                            cáo Media</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="472"> BizShare - Dịch vụ SEO
                                            tổng thể</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="483"> Bizshare - Dịch vụ quản
                                            lý ngân sách chạy quảng cáo</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="484"> Bizshare - Chăm sóc
                                            website, nội dung</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="485"> Bizshare - Xây dựng
                                            landing page bán hàng</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="486"> Bizshare - Tối ưu kênh
                                            bán hàng sàn TMĐT Shopee</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="490"> Bizshare - Gói chăm sóc
                                            fanpage Facebook và Instagram</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="498"> BizShare - Thiết kế ấn
                                            phẩm truyền thông</label></a></li>
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
                                                type="checkbox" value="529"> Bizshare - Quảng cáo
                                            Facebook và Instagram</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="530"> Bizshare - Định hướng
                                            tư vấn truyền thông và tư vấn chiến lược</label></a>
                                </li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="531"> Bizshare - Gói Quản trị
                                            kênh Thương mại điện tử</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="533"> SEO lead</label></a>
                                </li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="535"> Facebook
                                            Ads</label></a></li>
                                <li class="multiselect-item group"><label
                                        class="multiselect-group">123job.vn</label></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="584"> 123job - Gói mở hồ sơ
                                            ứng viên</label></a></li>
                            </ul>
                        </div>
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
                    <tr class="">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63312">63312</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a href="https://erp.nhanh.vn/crm/lead/view?id=407346"><span
                                    data-toggle="tooltip" data-title="Phạm Thị An">Phạm Thị
                                    An</span></a><br><label class="text-muted fontsize-85">(Nguồn:
                                TeleSale)</label><br><label class="text-muted fontsize-85">Nội thất,
                                ngoại thất</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">4.400.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63312">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63312">Chăm
                                    sóc fanpage - ...</a></div>
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63312">Gói
                                    Phần mềm quản ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> Phạm Quang Minh</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><a data-toggle="tooltip" title=""
                                href="https://erp.nhanh.vn/crm/contract/approve?id=63312"
                                data-original-title="Bấm để duyệt"><b>Chưa duyệt</b></a></td>
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
                    <tr class="even">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63311">63311</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a href="https://erp.nhanh.vn/crm/lead/view?id=402236"><span
                                    data-toggle="tooltip" data-title="Nguyễn Thị Hoài">Nguyễn Thị
                                    Hoài</span></a><br><label class="text-muted fontsize-85">(Nguồn:
                                TeleSale)</label><br><label class="text-muted fontsize-85">Thời
                                trang, phụ kiện</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">550.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63311">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63311">Gói Xác
                                    minh Maps ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> Trần Quang Nhật</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><a data-toggle="tooltip"
                                title="Bấm để duyệt"
                                href="https://erp.nhanh.vn/crm/contract/approve?id=63311"><b>Chưa
                                    duyệt</b></a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/contract/edit?id=63311"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            hợp đồng</a></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63310">63310</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a href="https://erp.nhanh.vn/crm/lead/view?id=408632"><span
                                    data-toggle="tooltip" data-title="Phạm Thị Hương">Phạm Thị
                                    Hương</span></a><br><label class="text-muted fontsize-85">Thời
                                trang, phụ kiện</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">300.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63310">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63310">Gói
                                    Phần mềm quản ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Thành Trung</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><a data-toggle="tooltip"
                                title="Bấm để duyệt"
                                href="https://erp.nhanh.vn/crm/contract/approve?id=63310"><b>Chưa
                                    duyệt</b></a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/contract/edit?id=63310"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            hợp đồng</a></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63309">63309</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a href="https://erp.nhanh.vn/crm/lead/view?id=371336"><span
                                    data-toggle="tooltip"
                                    data-title="Công ty Cổ phần Nhanh.vn">Công ty Cổ phần
                                    Nhanh.vn</span></a><br><label
                                class="text-muted fontsize-85">(Nguồn: Khác)</label><br><label
                                class="text-muted fontsize-85">Hoạt động kinh doanh khác</label>
                        </td>
                        <td class="AttAmount colNb" style="display: table-cell;"></td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63309">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63309">Giấy tờ
                                    Công ty ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> Tạ Thị Hoa</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><a data-toggle="tooltip"
                                title="Bấm để duyệt"
                                href="https://erp.nhanh.vn/crm/contract/approve?id=63309"><b>Chưa
                                    duyệt</b></a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/contract/edit?id=63309"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            hợp đồng</a></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63308">63308</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=17757"><span
                                    data-toggle="tooltip" data-title="Chu Diệu Linh">Chu Diệu
                                    Linh</span></a><br><label class="text-muted fontsize-85">(Nguồn:
                                Khách tự liên hệ kinh doanh)</label><br><label
                                class="text-muted fontsize-85">Thời trang, phụ kiện</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">1.496.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63308">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63308">Máy in
                                    hóa đơn ...</a></div>
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63308">Giấy
                                    trắng dạng cuộn ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> Hoàng Thùy Linh</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><a data-toggle="tooltip"
                                title="Bấm để duyệt"
                                href="https://erp.nhanh.vn/crm/contract/approve?id=63308"><b>Chưa
                                    duyệt</b></a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/contract/edit?id=63308"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            hợp đồng</a></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63307">63307</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a href="https://erp.nhanh.vn/crm/lead/view?id=408607"><span
                                    data-toggle="tooltip" data-title="Trần Thị Hồng Thắm">Trần Thị
                                    Hồng Thắm</span></a><br><label
                                class="text-muted fontsize-85">(Nguồn: Seeding/ Inbox/
                                Spam)</label><br><label class="text-muted fontsize-85">Thời trang,
                                phụ kiện</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">550.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63307">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63307">Gói Tạo
                                    mới Maps ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> Lê Thúy Quỳnh</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><a data-toggle="tooltip"
                                title="Bấm để duyệt"
                                href="https://erp.nhanh.vn/crm/contract/approve?id=63307"><b>Chưa
                                    duyệt</b></a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/contract/edit?id=63307"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            hợp đồng</a></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63306">63306</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=17757"><span
                                    data-toggle="tooltip" data-title="Chu Diệu Linh">Chu Diệu
                                    Linh</span></a><br><label class="text-muted fontsize-85">(Nguồn:
                                Khách tự liên hệ kinh doanh)</label><br><label
                                class="text-muted fontsize-85">Thời trang, phụ kiện</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">5.098.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63306">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63306">Gói
                                    Premium - QLBH ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> Hoàng Thùy Linh</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Mở rộng</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><a data-toggle="tooltip"
                                title="Bấm để duyệt"
                                href="https://erp.nhanh.vn/crm/contract/approve?id=63306"><b>Chưa
                                    duyệt</b></a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/contract/edit?id=63306"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            hợp đồng</a></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63305">63305</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=20093"><span
                                    data-toggle="tooltip" data-title="CÔNG TY CỔ PHẦN SKYMOND"
                                    data-original-title="" title="">CÔNG TY CỔ PHẦN
                                    SKYMOND</span><br><i style="font-size:11px;"
                                    class="text-warning">DN Nhanh: 61398 - Skymond</i></a><br><label
                                class="text-muted fontsize-85">(Nguồn: Data bàn giao - Được giới
                                thiệu)</label><br><label class="text-muted fontsize-85">Thời trang,
                                phụ kiện</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">2.400.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63305">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63305">Gói
                                    Phần mềm quản ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Huyền Trang</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Tái kí</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><a data-toggle="tooltip"
                                title="Bấm để duyệt"
                                href="https://erp.nhanh.vn/crm/contract/approve?id=63305"><b>Chưa
                                    duyệt</b></a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/contract/edit?id=63305"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            hợp đồng</a></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="taskStt5">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63304">63304</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=17780"><span
                                    data-toggle="tooltip" data-title="Vũ Duy Hoàng">Vũ Duy
                                    Hoàng</span></a><br><label class="text-muted fontsize-85">Điện
                                tử, Điện máy</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">200.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63304">200.000</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63304">Nạp
                                    tiền</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> Vũ Duy Hoàng</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="" data-original-title="Đã duyệt">Nguyễn
                                Hoàng Long<br><i class=" text-muted fontsize-85">16:32
                                    24/07</i></span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63304"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63303">63303</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=21934"><span
                                    data-toggle="tooltip" data-title="Nguyễn Như Quỳnh">Nguyễn Như
                                    Quỳnh</span></a><br><label
                                class="text-muted fontsize-85">(Nguồn: Seeding/ Inbox/
                                Spam)</label><br><label class="text-muted fontsize-85">Dịch vụ, giải
                                trí, du lịch</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">550.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63303">550.000</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63303">Gói Tạo
                                    mới Maps ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Thị Như Quỳnh</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Nguyễn Thị Tú Anh<br><i
                                    class=" text-muted fontsize-85">16:13 24/07</i></span><br> <span
                                data-toggle="tooltip" data-title="24/07/2020 16:31:39"
                                class="label label-danger">Nợ gốc</span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63303"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63302">63302</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=17397"><span
                                    data-toggle="tooltip" data-title="VŨ HÙNG VIỆT">VŨ HÙNG
                                    VIỆT</span><br><i style="font-size:11px;"
                                    class="text-warning">DN Nhanh: 47648 - Thiết bị và nguyên liệu
                                    Spa</i></a><br><label class="text-muted fontsize-85">(Nguồn:
                                Kinh doanh được giới thiệu)</label><br><label
                                class="text-muted fontsize-85">Mỹ phẩm</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">3.000.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63302">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63302">Gói
                                    Starter - QLBH ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Huyền Trang</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Tái kí</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><a data-toggle="tooltip"
                                title="Bấm để duyệt"
                                href="https://erp.nhanh.vn/crm/contract/approve?id=63302"><b>Chưa
                                    duyệt</b></a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/contract/edit?id=63302"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            hợp đồng</a></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63301">63301</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=20215"><span
                                    data-toggle="tooltip" data-title="NGUYỄN THỊ QUÍ">NGUYỄN THỊ
                                    QUÍ</span></a><br><label class="text-muted fontsize-85">(Nguồn:
                                Kinh doanh được giới thiệu)</label><br><label
                                class="text-muted fontsize-85">Thời trang, phụ kiện</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">300.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63301">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63301">Gói
                                    Phần mềm quản ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Huyền Trang</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Mở rộng</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><a data-toggle="tooltip"
                                title="Bấm để duyệt"
                                href="https://erp.nhanh.vn/crm/contract/approve?id=63301"><b>Chưa
                                    duyệt</b></a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/contract/edit?id=63301"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            hợp đồng</a></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63300">63300</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=16994"><span
                                    data-toggle="tooltip" data-title="Phạm Xuân Thái">Phạm Xuân
                                    Thái</span><br><i style="font-size:11px;"
                                    class="text-warning">DN Nhanh: 43428 - Legrand</i></a><br><label
                                class="text-muted fontsize-85">(Nguồn: Data bàn giao-
                                Hotline)</label><br><label class="text-muted fontsize-85">Thời
                                trang, phụ kiện</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">100.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63300">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63300">Thiết
                                    kế thêm tính ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> Lê Quang Hùng</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Tái kí</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Nguyễn Thị Tú Anh<br><i
                                    class=" text-muted fontsize-85">16:16 24/07</i></span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63300"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63299">63299</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a href="https://erp.nhanh.vn/crm/lead/view?id=408573"><span
                                    data-toggle="tooltip" data-title="Pham Văn Khánh">Pham Văn
                                    Khánh</span></a><br><label
                                class="text-muted fontsize-85">(Nguồn: Seeding/ Inbox/
                                Spam)</label><br><label class="text-muted fontsize-85">Thực phẩm, đồ
                                uống, hàng tiêu dùng</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">3.590.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63299">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63299">Gói Xác
                                    minh Maps ...</a></div>
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63299">Gói SEO
                                    CƠ BẢN ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Văn Long</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Nguyễn Thị Tú Anh<br><i
                                    class=" text-muted fontsize-85">15:53 24/07</i></span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63299"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63298">63298</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a href="https://erp.nhanh.vn/crm/lead/view?id=408571"><span
                                    data-toggle="tooltip" data-title="Phạm Văn Diễm">Phạm Văn
                                    Diễm</span></a><br><label class="text-muted fontsize-85">Nội
                                thất, ngoại thất</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">747.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63298">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63298">Vchat
                                    gói nâng cao ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Linh Trang</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><a data-toggle="tooltip"
                                title="Bấm để duyệt"
                                href="https://erp.nhanh.vn/crm/contract/approve?id=63298"><b>Chưa
                                    duyệt</b></a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/contract/edit?id=63298"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            hợp đồng</a></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63297">63297</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=19130"><span
                                    data-toggle="tooltip" data-title="Nguyễn Đắc Quyết">Nguyễn Đắc
                                    Quyết</span></a><br><label
                                class="text-muted fontsize-85">(Nguồn: Khách tự liên hệ kinh
                                doanh)</label><br><label class="text-muted fontsize-85">Thời trang,
                                phụ kiện</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">550.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63297">550.000</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63297">Gói Xác
                                    minh Maps ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Tiến Đạt</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Nguyễn Thị Tú Anh<br><i
                                    class=" text-muted fontsize-85">16:28 24/07</i></span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63297"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63296">63296</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=16994"><span
                                    data-toggle="tooltip" data-title="Phạm Xuân Thái">Phạm Xuân
                                    Thái</span><br><i style="font-size:11px;"
                                    class="text-warning">DN Nhanh: 43428 - Legrand</i></a><br><label
                                class="text-muted fontsize-85">(Nguồn: Data bàn giao-
                                Hotline)</label><br><label class="text-muted fontsize-85">Nội thất,
                                ngoại thất</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">670.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63296">670.000</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63296">Lệ phí
                                    đăng ký ...</a></div>
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63296">Phí duy
                                    trì tên ...</a></div>
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63296">Phí
                                    dịch vụ TK ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> Lê Quang Hùng</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Mở rộng</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Nguyễn Diệu Linh<br><i
                                    class=" text-muted fontsize-85">15:36 24/07</i></span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63296"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63295">63295</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=8462"><span
                                    data-toggle="tooltip"
                                    data-title="CÔNG TY TNHH ĐẦU TƯ IN VIỆT NAM">CÔNG TY TNHH ĐẦU TƯ
                                    IN VIỆT NAM</span></a><br><label
                                class="text-muted fontsize-85">Dịch vụ, giải trí, du lịch</label>
                        </td>
                        <td class="AttAmount colNb" style="display: table-cell;">7.656.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63295">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63295">Vchat
                                    gói Chuyên nghiệp ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Thị Quỳnh Vân</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Lê Thị Phương Thảo<br><i
                                    class=" text-muted fontsize-85">15:44 24/07</i></span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63295"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="taskStt5">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63294">63294</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=17780"><span
                                    data-toggle="tooltip" data-title="Vũ Duy Hoàng">Vũ Duy
                                    Hoàng</span></a><br><label class="text-muted fontsize-85">Ô tô,
                                xe máy, xe đạp</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">200.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63294">200.000</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63294">Nạp
                                    tiền</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> Vũ Duy Hoàng</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Nguyễn Hoàng Long<br><i
                                    class=" text-muted fontsize-85">14:49 24/07</i></span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63294"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63293">63293</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a href="https://erp.nhanh.vn/crm/lead/view?id=371336"><span
                                    data-toggle="tooltip"
                                    data-title="Công ty Cổ phần Nhanh.vn">Công ty Cổ phần
                                    Nhanh.vn</span></a><br><label
                                class="text-muted fontsize-85">(Nguồn: Khác)</label><br><label
                                class="text-muted fontsize-85">Hoạt động kinh doanh khác</label>
                        </td>
                        <td class="AttAmount colNb" style="display: table-cell;"></td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63293">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63293">Giấy tờ
                                    Công ty ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> trần thị Ánh tuyết</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Đoàn Thị Minh Hương<br><i
                                    class=" text-muted fontsize-85">14:39 24/07</i></span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63293"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="taskStt5">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63292">63292</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=14776"><span
                                    data-toggle="tooltip" data-title="Nguyễn Duy Hưng">Nguyễn Duy
                                    Hưng</span></a><br><label class="text-muted fontsize-85">Công
                                nghiệp - xây dựng</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">1.650.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63292">1.650.000</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63292">Nạp
                                    tiền</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Duy Hưng</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Nguyễn Hoàng Long<br><i
                                    class=" text-muted fontsize-85">14:49 24/07</i></span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63292"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63291">63291</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=18072"><span
                                    data-toggle="tooltip" data-title="Hoàng Văn Huynh">Hoàng Văn
                                    Huynh</span></a><br><label
                                class="text-muted fontsize-85">(Nguồn: Data bàn giao-
                                Hotline)</label><br><label class="text-muted fontsize-85">Thực phẩm,
                                đồ uống, hàng tiêu dùng</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">1.000.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63291">1.000.000</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63291">Gói
                                    thiết kế website ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Thị Anh Thư</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Hứa Thị Mai Ngân<br><i
                                    class=" text-muted fontsize-85">14:28 24/07</i></span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63291"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63290">63290</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a href="https://erp.nhanh.vn/crm/lead/view?id=404784"><span
                                    data-toggle="tooltip" data-title="Nguyễn Văn Thương">Nguyễn Văn
                                    Thương</span></a><br><label
                                class="text-muted fontsize-85">(Nguồn: Data bàn giao -
                                SEO)</label><br><label class="text-muted fontsize-85">Mỹ
                                phẩm</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;"></td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63290">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63290">Máy đọc
                                    mã vạch ...</a></div>
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63290">Máy in
                                    mã vạch ...</a></div>
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63290">Giấy in
                                    bill K80 ...</a></div>
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63290">Decal
                                    nhiệt in mã ...</a></div>
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63290">Máy in
                                    hóa đơn ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> Trần Thị Ngọc Quyền</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><a data-toggle="tooltip"
                                title="Bấm để duyệt"
                                href="https://erp.nhanh.vn/crm/contract/approve?id=63290"><b>Chưa
                                    duyệt</b></a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/contract/edit?id=63290"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            hợp đồng</a></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63289">63289</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a href="https://erp.nhanh.vn/crm/lead/view?id=408526"><span
                                    data-toggle="tooltip" data-title="Vũ Thị Thu Hà">Vũ Thị Thu
                                    Hà</span></a><br><label class="text-muted fontsize-85">Nội thất,
                                ngoại thất</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">747.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63289">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63289">Vchat
                                    gói nâng cao ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Linh Trang</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><a data-toggle="tooltip"
                                title="Bấm để duyệt"
                                href="https://erp.nhanh.vn/crm/contract/approve?id=63289"><b>Chưa
                                    duyệt</b></a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/contract/edit?id=63289"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            hợp đồng</a></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63288">63288</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=11595"><span
                                    data-toggle="tooltip" data-title="Hoàng Đình Trung">Hoàng Đình
                                    Trung</span></a><br><label
                                class="text-muted fontsize-85">(Nguồn: Data bàn giao - Được giới
                                thiệu)</label><br><label class="text-muted fontsize-85">Thời trang,
                                phụ kiện</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">4.800.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63288">4.800.000</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63288">Gói
                                    Premium - QLBH ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> Phạm Thị Thủy</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Nguyễn Thị Tú Anh<br><i
                                    class=" text-muted fontsize-85">15:43 24/07</i></span><br> <span
                                data-toggle="tooltip" data-title="24/07/2020 17:06:21"
                                class="label label-danger">Nợ gốc</span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63288"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63287">63287</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a href="https://erp.nhanh.vn/crm/lead/view?id=408518"><span
                                    data-toggle="tooltip" data-title="Phạm Thúy Hằng">Phạm Thúy
                                    Hằng</span><br><i style="font-size:11px;"
                                    class="text-warning">DN Nhanh: 81136 - An An</i></a><br><label
                                class="text-muted fontsize-85">(Nguồn: TeleSale)</label><br><label
                                class="text-muted fontsize-85">Thời trang, phụ kiện</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">12.000.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63287">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63287">Gói
                                    Premium - QLBH ...</a></div>
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63287">Gói
                                    Phần mềm quản ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Hữu Điệp</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Nguyễn Thị Tú Anh<br><i
                                    class=" text-muted fontsize-85">14:14 24/07</i></span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63287"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63286">63286</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=19608"><span
                                    data-toggle="tooltip" data-title="Phùng Thị Nhung">Phùng Thị
                                    Nhung</span></a><br><label
                                class="text-muted fontsize-85">(Nguồn: Kinh doanh được giới
                                thiệu)</label><br><label class="text-muted fontsize-85">Hoạt động
                                kinh doanh khác</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">300.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63286">300.000</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63286">Gói
                                    Phần mềm quản ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Bích Diệp</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Tái kí</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Nguyễn Thị Tú Anh<br><i
                                    class=" text-muted fontsize-85">14:03 24/07</i></span><br> <span
                                data-toggle="tooltip" data-title="24/07/2020 15:09:16"
                                class="label label-danger">Nợ gốc</span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63286"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63285">63285</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a href="https://erp.nhanh.vn/crm/lead/view?id=408519"><span
                                    data-toggle="tooltip" data-title="Nguyễn Thị Bích Liễu">Nguyễn
                                    Thị Bích Liễu</span></a><br><label
                                class="text-muted fontsize-85">Đồ dùng sinh hoạt</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">4.800.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63285">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63285">Gói
                                    Premium - QLBH ...</a></div>
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63285">Gói
                                    Phần mềm quản ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Thị Anh Thư</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Hứa Thị Mai Ngân<br><i
                                    class=" text-muted fontsize-85">14:29 24/07</i></span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63285"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63284">63284</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=14750"><span
                                    data-toggle="tooltip" data-title="NGUYỄN VĂN VIỆT">NGUYỄN VĂN
                                    VIỆT</span></a><br><label class="text-muted fontsize-85">(Nguồn:
                                Khác)</label><br><label class="text-muted fontsize-85">Thời trang,
                                phụ kiện</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">4.320.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63284">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63284">Gói
                                    Starter - QLBH ...</a></div>
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63284">Gói
                                    Ecom</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> Đỗ Thị Ngọc Hân</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Bán chéo</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Hứa Thị Mai Ngân<br><i
                                    class=" text-muted fontsize-85">14:02 24/07</i></span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63284"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63283">63283</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=21797"><span
                                    data-toggle="tooltip"
                                    data-title="CÔNG TY TNHH THƯƠNG MẠI VÀ ĐẦU TƯ ĐẠI HÀN VIỆT">CÔNG
                                    TY TNHH THƯƠNG MẠI VÀ ĐẦU TƯ ĐẠI ...</span></a><br><label
                                class="text-muted fontsize-85">(Nguồn: TeleSale)</label><br><label
                                class="text-muted fontsize-85">Mẹ và bé</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;"></td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63283">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63283">Dịch vụ
                                    vận chuyển ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Thị Hiếu</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><a data-toggle="tooltip"
                                title="Bấm để duyệt"
                                href="https://erp.nhanh.vn/crm/contract/approve?id=63283"><b>Chưa
                                    duyệt</b></a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/contract/edit?id=63283"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            hợp đồng</a></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63282">63282</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a href="https://erp.nhanh.vn/crm/lead/view?id=394986"><span
                                    data-toggle="tooltip" data-title="Huỳnh Ngọc Thanh Tâm">Huỳnh
                                    Ngọc Thanh Tâm</span></a><br><label
                                class="text-muted fontsize-85">Thời trang, phụ kiện</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">18.000.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63282">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63282">Gói
                                    Thiết kế Website ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Thị Anh Thư</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Hứa Thị Mai Ngân<br><i
                                    class=" text-muted fontsize-85">14:29 24/07</i></span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63282"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63281">63281</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a href="https://erp.nhanh.vn/crm/lead/view?id=365232"><span
                                    data-toggle="tooltip" data-title="Nguyễn Hữu Tú">Nguyễn Hữu
                                    Tú</span></a><br><label class="text-muted fontsize-85">(Nguồn:
                                TeleSale)</label><br><label class="text-muted fontsize-85">Thời
                                trang, phụ kiện</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">13.200.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63281">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63281">Gói
                                    Starter - QLBH ...</a></div>
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63281">Gói
                                    Ecom (không giới ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Đức Công</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Nguyễn Thị Tú Anh<br><i
                                    class=" text-muted fontsize-85">14:15 24/07</i></span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63281"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63280">63280</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=17112"><span
                                    data-toggle="tooltip" data-title="Lê Thanh Hoa">Lê Thanh
                                    Hoa</span></a><br><label class="text-muted fontsize-85">(Nguồn:
                                Kinh doanh được giới thiệu)</label><br><label
                                class="text-muted fontsize-85">Thời trang, phụ kiện</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">3.000.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63280">3.000.000</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63280">Gói
                                    Starter - QLBH ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Trung Quân</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Tái kí</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Nguyễn Thị Tú Anh<br><i
                                    class=" text-muted fontsize-85">13:43 24/07</i></span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63280"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63279">63279</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=11242"><span
                                    data-toggle="tooltip"
                                    data-title="CÔNG TY TNHH POLIDO VIỆT NAM">CÔNG TY TNHH POLIDO
                                    VIỆT NAM</span><br><i style="font-size:11px;"
                                    class="text-warning">DN Nhanh: 17558 - POLIDO</i></a><br><label
                                class="text-muted fontsize-85">(Nguồn: Data bàn giao - Không có
                                mã)</label><br><label class="text-muted fontsize-85">Thời trang, phụ
                                kiện</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">3.000.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63279">3.000.000</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63279">Gói
                                    phí tích hợp ...</a></div>
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63279">Gói
                                    Ecom</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Viết Lâm</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Tái kí</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Nguyễn Viết Lâm<br><i
                                    class=" text-muted fontsize-85">13:58 24/07</i></span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63279"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63278">63278</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a href="https://erp.nhanh.vn/crm/lead/view?id=390937"><span
                                    data-toggle="tooltip"
                                    data-title="CÔNG TY TNHH CHUYỂN GIAO CÔNG NGHỆ NTT VIỆT NAM">CÔNG
                                    TY TNHH CHUYỂN GIAO CÔNG NGHỆ NTT VIỆT ...</span></a><br><label
                                class="text-muted fontsize-85">Công nghiệp - xây dựng</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">3.960.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63278">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63278">GHĐB
                                    (mới)</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> Tạ Thị Thùy</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Lê Thị Phương Thảo<br><i
                                    class=" text-muted fontsize-85">15:40 24/07</i></span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63278"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63277">63277</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=17399"><span
                                    data-toggle="tooltip"
                                    data-title="CÔNG TY TNHH XUẤT NHẬP KHẨU VÀ DỊCH VỤ KỸ THUẬT THIẾT BỊ BẢO MINH">CÔNG
                                    TY TNHH XUẤT NHẬP KHẨU VÀ DỊCH VỤ ...</span></a><br><label
                                class="text-muted fontsize-85">Công nghiệp - xây dựng</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">1.344.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63277">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63277">Vchat
                                    gói Cơ bản ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> Tạ Thị Thùy</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Lê Thị Phương Thảo<br><i
                                    class=" text-muted fontsize-85">15:41 24/07</i></span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63277"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63276">63276</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=21029"><span
                                    data-toggle="tooltip" data-title="Lê Ngọc Khánh">Lê Ngọc
                                    Khánh</span></a><br><label
                                class="text-muted fontsize-85">(Nguồn: Data bàn giao - Không có
                                mã)</label><br><label class="text-muted fontsize-85">Thời trang, phụ
                                kiện</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">750.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63276">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63276">Gói
                                    Phần mềm quản ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> PHAN THỊ THU THẢO</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><a data-toggle="tooltip"
                                title="Bấm để duyệt"
                                href="https://erp.nhanh.vn/crm/contract/approve?id=63276"><b>Chưa
                                    duyệt</b></a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/contract/edit?id=63276"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            hợp đồng</a></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63275">63275</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=21926"><span
                                    data-toggle="tooltip" data-title="Trương Mạnh Tùng">Trương Mạnh
                                    Tùng</span></a><br><label class="text-muted fontsize-85">(Nguồn:
                                Khác)</label><br><label class="text-muted fontsize-85">Thời trang,
                                phụ kiện</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">6.000.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63275">6.000.000</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63275">Gói
                                    Thiết kế Website ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> Hồ Tấn Hải</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Nguyễn Viết Lâm<br><i
                                    class=" text-muted fontsize-85">12:02 24/07</i></span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63275"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63274">63274</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a href="https://erp.nhanh.vn/crm/lead/view?id=405997"><span
                                    data-toggle="tooltip" data-title="Nghiêm Thị Quý">Nghiêm Thị
                                    Quý</span></a><br><label class="text-muted fontsize-85">(Nguồn:
                                Data bàn giao - Fanpage)</label><br><label
                                class="text-muted fontsize-85">Thời trang, phụ kiện</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">328.900</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63274">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63274">Phí
                                    đăng ký tên ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> Vũ Thị Hoa</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><a data-toggle="tooltip"
                                title="Bấm để duyệt"
                                href="https://erp.nhanh.vn/crm/contract/approve?id=63274"><b>Chưa
                                    duyệt</b></a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/contract/edit?id=63274"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            hợp đồng</a></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63273">63273</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a href="https://erp.nhanh.vn/crm/lead/view?id=408501"><span
                                    data-toggle="tooltip" data-title="Hoàng Ngọc Sơn">Hoàng Ngọc
                                    Sơn</span></a><br><label class="text-muted fontsize-85">Ô tô, xe
                                máy, xe đạp</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">249.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63273">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63273">Vchat
                                    gói nâng cao ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Linh Trang</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><a data-toggle="tooltip"
                                title="Bấm để duyệt"
                                href="https://erp.nhanh.vn/crm/contract/approve?id=63273"><b>Chưa
                                    duyệt</b></a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/contract/edit?id=63273"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            hợp đồng</a></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63272">63272</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a href="https://erp.nhanh.vn/crm/lead/view?id=405997"><span
                                    data-toggle="tooltip" data-title="Nghiêm Thị Quý">Nghiêm Thị
                                    Quý</span></a><br><label class="text-muted fontsize-85">(Nguồn:
                                Data bàn giao - Fanpage)</label><br><label
                                class="text-muted fontsize-85">Thời trang, phụ kiện</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">4.200.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63272">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63272">Gói
                                    Website cơ bản ...</a></div>
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63272">Thiết
                                    kế thêm tính ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> Vũ Thị Hoa</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Nguyễn Thị Tú Anh<br><i
                                    class=" text-muted fontsize-85">13:59 24/07</i></span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63272"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63271">63271</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=16556"><span
                                    data-toggle="tooltip" data-title="Trần Quốc Trường">Trần Quốc
                                    Trường</span></a><br><label
                                class="text-muted fontsize-85">(Nguồn: Data bàn giao - Không có
                                mã)</label><br><label class="text-muted fontsize-85">Thời trang, phụ
                                kiện</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">8.400.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63271">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63271">Gói
                                    Website tối ưu ...</a></div>
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63271">Thiết
                                    kế thêm tính ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Thị Anh Thư</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Bán chéo</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><a data-toggle="tooltip"
                                title="Bấm để duyệt"
                                href="https://erp.nhanh.vn/crm/contract/approve?id=63271"><b>Chưa
                                    duyệt</b></a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/contract/edit?id=63271"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            hợp đồng</a></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63270">63270</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=21926"><span
                                    data-toggle="tooltip" data-title="Trương Mạnh Tùng">Trương Mạnh
                                    Tùng</span></a><br><label class="text-muted fontsize-85">(Nguồn:
                                Khác)</label><br><label class="text-muted fontsize-85">Điện tử, Điện
                                máy</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">6.000.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63270">6.000.000</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63270">Gói
                                    Thiết kế Website ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Thị Kiều Mỹ</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Hứa Thị Mai Ngân<br><i
                                    class=" text-muted fontsize-85">11:18 24/07</i></span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63270"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63269">63269</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=21932"><span
                                    data-toggle="tooltip" data-title="Trần Trọng Hiếu">Trần Trọng
                                    Hiếu</span></a><br><label class="text-muted fontsize-85">(Nguồn:
                                Seeding/ Inbox/ Spam)</label><br><label
                                class="text-muted fontsize-85">Hoạt động kinh doanh khác</label>
                        </td>
                        <td class="AttAmount colNb" style="display: table-cell;">550.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63269">550.000</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63269">Gói Xác
                                    minh Maps ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> Dương Thị Hoa</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Nguyễn Thị Tú Anh<br><i
                                    class=" text-muted fontsize-85">10:44 24/07</i></span><br> <span
                                data-toggle="tooltip" data-title="24/07/2020 14:29:53"
                                class="label label-danger">Nợ gốc</span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63269"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63268">63268</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=21925"><span
                                    data-toggle="tooltip" data-title="Hoàng Văn Hảo">Hoàng Văn
                                    Hảo</span></a><br><label class="text-muted fontsize-85">(Nguồn:
                                Seeding/ Inbox/ Spam)</label><br><label
                                class="text-muted fontsize-85">Máy tính, Linh kiện</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">550.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63268">550.000</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63268">Gói
                                    khởi tạo và ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Phương Mai</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Nguyễn Viết Lâm<br><i
                                    class=" text-muted fontsize-85">11:17 24/07</i></span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63268"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63267">63267</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=5713"><span
                                    data-toggle="tooltip" data-title="Trịnh Danh Hoàng">Trịnh Danh
                                    Hoàng</span></a><br><label
                                class="text-muted fontsize-85">(Nguồn: Data bàn giao - Không có
                                mã)</label><br><label class="text-muted fontsize-85">Thời trang, phụ
                                kiện</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">600.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63267">600.000</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63267">Gói Kho
                                    tổng (chỉ ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> Hứa Thị Mai Ngân</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Mở rộng</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Hứa Thị Mai Ngân<br><i
                                    class=" text-muted fontsize-85">10:28 24/07</i></span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63267"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63266">63266</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=19292"><span
                                    data-toggle="tooltip" data-title="LÊ THANH HUYỀN">LÊ THANH
                                    HUYỀN</span></a><br><label
                                class="text-muted fontsize-85">(Nguồn: TeleSale)</label><br><label
                                class="text-muted fontsize-85">Mỹ phẩm</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">2.400.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63266">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63266">Gói
                                    Starter - QLBH ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> Lê Ngọc Khánh</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><a data-toggle="tooltip"
                                title="Bấm để duyệt"
                                href="https://erp.nhanh.vn/crm/contract/approve?id=63266"><b>Chưa
                                    duyệt</b></a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/contract/edit?id=63266"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            hợp đồng</a></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63265">63265</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=19668"><span
                                    data-toggle="tooltip" data-title="Nguyễn Trường Giang">Nguyễn
                                    Trường Giang</span><br><i style="font-size:11px;"
                                    class="text-warning">DN Nhanh: 60628 - GNM</i></a><br><label
                                class="text-muted fontsize-85">(Nguồn: Data bàn giao-
                                Hotline)</label><br><label class="text-muted fontsize-85">Thời
                                trang, phụ kiện</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">1.075.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63265">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63265">Gói phí
                                    nâng cấp ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Đức Công</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Mở rộng</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Nguyễn Thị Tú Anh<br><i
                                    class=" text-muted fontsize-85">10:24 24/07</i></span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63265"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63264">63264</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a href="https://erp.nhanh.vn/crm/lead/view?id=408393"><span
                                    data-toggle="tooltip"
                                    data-title="CÔNG TY TNHH RAY TRƯỢT DTC">CÔNG TY TNHH RAY TRƯỢT
                                    DTC</span></a><br><label class="text-muted fontsize-85">Điện tử,
                                Điện máy</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">7.920.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63264">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63264">GHĐB
                                    (mới)</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> Đỗ Văn Thảo</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Lưu Thị Ngọc Bích<br><i
                                    class=" text-muted fontsize-85">10:26 24/07</i></span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63264"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63263">63263</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=19580"><span
                                    data-toggle="tooltip"
                                    data-title="CÔNG TY CỔ PHẦN DỊCH VỤ VÀ ĐẦU TƯ VIPEAK">CÔNG TY CỔ
                                    PHẦN DỊCH VỤ VÀ ĐẦU TƯ ...</span></a><br><label
                                class="text-muted fontsize-85">(Nguồn: Khách tự liên hệ kinh
                                doanh)</label><br><label class="text-muted fontsize-85">Dịch vụ,
                                giải trí, du lịch</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">1.419.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63263">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63263">Vchat
                                    gói nâng cao ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Thanh Vân</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><a data-toggle="tooltip"
                                title="Bấm để duyệt"
                                href="https://erp.nhanh.vn/crm/contract/approve?id=63263"><b>Chưa
                                    duyệt</b></a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/contract/edit?id=63263"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            hợp đồng</a></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63262">63262</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=21666"><span
                                    data-toggle="tooltip" data-title="Phan Thị Thu Hiền">Phan Thị
                                    Thu Hiền</span></a><br><label
                                class="text-muted fontsize-85">(Nguồn: Data bàn giao - Không có
                                mã)</label><br><label class="text-muted fontsize-85">Thời trang, phụ
                                kiện</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">3.000.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63262">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63262">Gói
                                    Starter - QLBH ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Đạt Trung</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Mở rộng</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><a data-toggle="tooltip"
                                title="Bấm để duyệt"
                                href="https://erp.nhanh.vn/crm/contract/approve?id=63262"><b>Chưa
                                    duyệt</b></a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/contract/edit?id=63262"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            hợp đồng</a></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63261">63261</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=14804"><span
                                    data-toggle="tooltip" data-title="NGUYỄN THỊ HOÀI">NGUYỄN THỊ
                                    HOÀI</span></a><br><label class="text-muted fontsize-85">(Nguồn:
                                Data bàn giao - Không có mã)</label><br><label
                                class="text-muted fontsize-85">Thời trang, phụ kiện</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">1.200.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63261">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63261">Gói
                                    Shipping - QLBH ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Đức Kiên</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><a data-toggle="tooltip"
                                title="Bấm để duyệt"
                                href="https://erp.nhanh.vn/crm/contract/approve?id=63261"><b>Chưa
                                    duyệt</b></a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/contract/edit?id=63261"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            hợp đồng</a></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63260">63260</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=12601"><span
                                    data-toggle="tooltip"
                                    data-title="CÔNG TY CỔ PHẦN THỜI TRANG SMARTMEN VIỆT NAM">CÔNG
                                    TY CỔ PHẦN THỜI TRANG SMARTMEN VIỆT NAM ...</span></a><br><label
                                class="text-muted fontsize-85">(Nguồn: Data bàn giao - Không có
                                mã)</label><br><label class="text-muted fontsize-85">Thời trang, phụ
                                kiện</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">1.200.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63260">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63260">Gói
                                    phí tích hợp ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Thanh Tùng</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Mở rộng</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><a data-toggle="tooltip"
                                title="Bấm để duyệt"
                                href="https://erp.nhanh.vn/crm/contract/approve?id=63260"><b>Chưa
                                    duyệt</b></a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/contract/edit?id=63260"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            hợp đồng</a></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63259">63259</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a href="https://erp.nhanh.vn/crm/lead/view?id=406943"><span
                                    data-toggle="tooltip" data-title="Tôn Thất Bảo Hoàng">Tôn Thất
                                    Bảo Hoàng</span></a><br><label
                                class="text-muted fontsize-85">Dịch vụ, giải trí, du lịch</label>
                        </td>
                        <td class="AttAmount colNb" style="display: table-cell;">550.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63259">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63259">Gói Xác
                                    minh Maps ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 24/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Thị Như Huệ</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><a data-toggle="tooltip"
                                title="Bấm để duyệt"
                                href="https://erp.nhanh.vn/crm/contract/approve?id=63259"><b>Chưa
                                    duyệt</b></a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/contract/edit?id=63259"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            hợp đồng</a></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63258">63258</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a href="https://erp.nhanh.vn/crm/lead/view?id=408378"><span
                                    data-toggle="tooltip" data-title="VÕ THU VÂN">VÕ THU
                                    VÂN</span></a><br><label class="text-muted fontsize-85">Thực
                                phẩm, đồ uống, hàng tiêu dùng</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">4.400.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63258">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63258">Chăm
                                    sóc fanpage - ...</a></div>
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63258">Gói
                                    Phần mềm quản ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 23/07/2020 ">
                                <i class="fa fa-github-alt"></i> Đoàn Thị Hà</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><a data-toggle="tooltip"
                                title="Bấm để duyệt"
                                href="https://erp.nhanh.vn/crm/contract/approve?id=63258"><b>Chưa
                                    duyệt</b></a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/contract/edit?id=63258"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            hợp đồng</a></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63257">63257</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=21779"><span
                                    data-toggle="tooltip"
                                    data-title="CÔNG TY CỔ PHẦN XUẤT KHẨU THƯƠNG MẠI HÀ NỘI">CÔNG TY
                                    CỔ PHẦN XUẤT KHẨU THƯƠNG MẠI HÀ ...</span></a><br><label
                                class="text-muted fontsize-85">(Nguồn: Khách tự liên hệ kinh
                                doanh)</label><br><label class="text-muted fontsize-85">Đồ dùng sinh
                                hoạt</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">550.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63257">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63257">Gói Tạo
                                    mới Maps ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 23/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Tiến Đạt</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Nguyễn Thị Tú Anh<br><i
                                    class=" text-muted fontsize-85">14:31 24/07</i></span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63257"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63256">63256</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=17117"><span
                                    data-toggle="tooltip" data-title="Dương Thị Thu Minh">Dương Thị
                                    Thu Minh</span></a><br><label
                                class="text-muted fontsize-85">(Nguồn: Khách tự liên hệ kinh
                                doanh)</label><br><label class="text-muted fontsize-85">Điện tử,
                                Điện máy</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">1.000.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63256">1.000.000</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63256">Gói
                                    thiết kế thêm ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 23/07/2020 ">
                                <i class="fa fa-github-alt"></i> Chu Văn Thảo</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Bán chéo</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Nguyễn Thị Tú Anh<br><i
                                    class=" text-muted fontsize-85">09:34 24/07</i></span><br> <span
                                data-toggle="tooltip" data-title="24/07/2020 10:36:02"
                                class="label label-success">Đã nộp gốc</span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63256"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63255">63255</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=21933"><span
                                    data-toggle="tooltip" data-title="Hoàng Anh Nhân">Hoàng Anh
                                    Nhân</span></a><br><label class="text-muted fontsize-85">(Nguồn:
                                Seeding/ Inbox/ Spam)</label><br><label
                                class="text-muted fontsize-85">Hoạt động kinh doanh khác</label>
                        </td>
                        <td class="AttAmount colNb" style="display: table-cell;">550.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63255">550.000</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63255">Gói Tạo
                                    mới Maps ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 23/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Thị Lan</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Nguyễn Thị Tú Anh<br><i
                                    class=" text-muted fontsize-85">10:27 24/07</i></span><br> <span
                                data-toggle="tooltip" data-title="24/07/2020 15:39:48"
                                class="label label-danger">Nợ gốc</span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63255"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63254">63254</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a href="https://erp.nhanh.vn/crm/lead/view?id=408265"><span
                                    data-toggle="tooltip" data-title="Nguyễn Vũ Duy">Nguyễn Vũ
                                    Duy</span></a><br><label class="text-muted fontsize-85">Dịch vụ,
                                giải trí, du lịch</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">3.850.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63254">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63254">Gói Xác
                                    minh Maps ...</a></div>
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63254">Gói SEO
                                    CƠ BẢN ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 23/07/2020 ">
                                <i class="fa fa-github-alt"></i> Bùi Gia Bảo</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Hứa Thị Mai Ngân<br><i
                                    class=" text-muted fontsize-85">16:01 24/07</i></span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63254"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63253">63253</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a href="https://erp.nhanh.vn/crm/lead/view?id=371336"><span
                                    data-toggle="tooltip"
                                    data-title="Công ty Cổ phần Nhanh.vn">Công ty Cổ phần
                                    Nhanh.vn</span></a><br><label
                                class="text-muted fontsize-85">(Nguồn: Khác)</label><br><label
                                class="text-muted fontsize-85">Hoạt động kinh doanh khác</label>
                        </td>
                        <td class="AttAmount colNb" style="display: table-cell;"></td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63253">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63253">Giấy tờ
                                    Công ty ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 23/07/2020 ">
                                <i class="fa fa-github-alt"></i> Tạ Thị Hoa</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">nguyễn quỳnh dương<br><i
                                    class=" text-muted fontsize-85">06:52 24/07</i></span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63253"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63252">63252</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=21927"><span
                                    data-toggle="tooltip" data-title="Nguyễn Văn Tình">Nguyễn Văn
                                    Tình</span></a><br><label class="text-muted fontsize-85">(Nguồn:
                                TeleSale)</label><br><label class="text-muted fontsize-85">Thực
                                phẩm, đồ uống, hàng tiêu dùng</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">550.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63252">550.000</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63252">Gói Xác
                                    minh Maps ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 23/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Hoàng Long</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Nguyễn Thị Tú Anh<br><i
                                    class=" text-muted fontsize-85">17:03 23/07</i></span><br> <span
                                data-toggle="tooltip" data-title="24/07/2020 16:14:29"
                                class="label label-success">Đã nộp gốc</span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63252"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63251">63251</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=20519"><span
                                    data-toggle="tooltip" data-title="Nguyễn Thế Trình">Nguyễn Thế
                                    Trình</span></a><br><label
                                class="text-muted fontsize-85">(Nguồn: Kinh doanh được giới
                                thiệu)</label><br><label class="text-muted fontsize-85">Thời trang,
                                phụ kiện</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">900.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63251">900.000</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63251">Gói
                                    Phần mềm quản ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 23/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Đức Kiên</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Mở rộng</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Nguyễn Thị Tú Anh<br><i
                                    class=" text-muted fontsize-85">16:46 23/07</i></span><br> <span
                                data-toggle="tooltip" data-title="24/07/2020 16:32:50"
                                class="label label-danger">Nợ gốc</span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63251"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63250">63250</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=9255"><span
                                    data-toggle="tooltip"
                                    data-title="CÔNG TY CỔ PHẦN ĐIỆN TỬ VÀ TIN HỌC ĐÀ NẴNG">CÔNG TY
                                    CỔ PHẦN ĐIỆN TỬ VÀ TIN HỌC ...</span></a><br><label
                                class="text-muted fontsize-85">Điện tử, Điện máy</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">2.544.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63250">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63250">Vchat
                                    gói Cơ bản ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 23/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Thị Quỳnh Vân</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Lê Thị Phương Thảo<br><i
                                    class=" text-muted fontsize-85">14:55 24/07</i></span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63250"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63249">63249</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=9609"><span
                                    data-toggle="tooltip"
                                    data-title="CÔNG TY TNHH THƯƠNG MẠI VÀ ĐẦU TƯ HOA SEN">CÔNG TY
                                    TNHH THƯƠNG MẠI VÀ ĐẦU TƯ HOA ...</span></a><br><label
                                class="text-muted fontsize-85">Sức khỏe, sắc đẹp</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">1.344.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63249">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63249">Vchat
                                    gói Cơ bản ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 23/07/2020 ">
                                <i class="fa fa-github-alt"></i> Tạ Thị Thùy</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Lê Thị Phương Thảo<br><i
                                    class=" text-muted fontsize-85">15:43 24/07</i></span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63249"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63248">63248</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a href="https://erp.nhanh.vn/crm/lead/view?id=376023"><span
                                    data-toggle="tooltip" data-title="Lương Hoàng Tuấn">Lương Hoàng
                                    Tuấn</span></a><br><label class="text-muted fontsize-85">(Nguồn:
                                Data bàn giao - Fanpage)</label><br><label
                                class="text-muted fontsize-85">Mỹ phẩm</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">7.800.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63248">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63248">Gói
                                    Omni Starter</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 23/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Thị Kiều Mỹ</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><a data-toggle="tooltip"
                                title="Bấm để duyệt"
                                href="https://erp.nhanh.vn/crm/contract/approve?id=63248"><b>Chưa
                                    duyệt</b></a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/contract/edit?id=63248"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            hợp đồng</a></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63247">63247</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=21922"><span
                                    data-toggle="tooltip" data-title="Trần Thị Xuân Ngọc">Trần Thị
                                    Xuân Ngọc</span></a><br><label
                                class="text-muted fontsize-85">(Nguồn: Seeding/ Inbox/
                                Spam)</label><br><label class="text-muted fontsize-85">Hoạt động
                                kinh doanh khác</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">550.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63247">550.000</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63247">Gói Xác
                                    minh Maps ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 23/07/2020 ">
                                <i class="fa fa-github-alt"></i> Dương Thị Hoa</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Nguyễn Thị Tú Anh<br><i
                                    class=" text-muted fontsize-85">16:37 23/07</i></span><br> <span
                                data-toggle="tooltip" data-title="23/07/2020 16:47:56"
                                class="label label-danger">Nợ gốc</span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63247"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63246">63246</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=288"><span
                                    data-toggle="tooltip" data-title="Phạm Thanh Sơn">Phạm Thanh
                                    Sơn</span></a><br><label class="text-muted fontsize-85">(Nguồn:
                                TeleSale)</label><br><label class="text-muted fontsize-85">Thời
                                trang, phụ kiện</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">1.800.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63246">1.800.000</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63246">Thiết
                                    kế thêm tính ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 23/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Viết Lâm</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Bán chéo</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Nguyễn Viết Lâm<br><i
                                    class=" text-muted fontsize-85">16:04 23/07</i></span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63246"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63245">63245</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=288"><span
                                    data-toggle="tooltip" data-title="Phạm Thanh Sơn">Phạm Thanh
                                    Sơn</span></a><br><label class="text-muted fontsize-85">(Nguồn:
                                TeleSale)</label><br><label class="text-muted fontsize-85">Thời
                                trang, phụ kiện</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">2.000.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63245">2.000.000</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63245">Gói
                                    thiết kế thêm ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 23/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Viết Lâm</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Mở rộng</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Nguyễn Viết Lâm<br><i
                                    class=" text-muted fontsize-85">16:04 23/07</i></span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63245"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="taskStt5">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63244">63244</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=21921"><span
                                    data-toggle="tooltip" data-title="Lê Tiến Tùng">Lê Tiến
                                    Tùng</span></a><br><label class="text-muted fontsize-85">Nội
                                thất, ngoại thất</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">867.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63244">867.000</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63244">Vchat
                                    gói Chuyên nghiệp ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 23/07/2020 ">
                                <i class="fa fa-github-alt"></i> Vũ Thị Quỳnh Trang</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Lê Thị Phương Thảo<br><i
                                    class=" text-muted fontsize-85">16:21 23/07</i></span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63244"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63243">63243</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=20848"><span
                                    data-toggle="tooltip" data-title="CÔNG TY TNHH CHÍ CƯỜNG">CÔNG
                                    TY TNHH CHÍ CƯỜNG</span></a><br><label
                                class="text-muted fontsize-85">(Nguồn: Khách tự liên hệ kinh
                                doanh)</label><br><label class="text-muted fontsize-85">Điện tử,
                                Điện máy</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">1.200.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63243">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63243">Gói
                                    Ecom</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 23/07/2020 ">
                                <i class="fa fa-github-alt"></i> Vũ Văn Trường</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Bán chéo</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><a data-toggle="tooltip"
                                title="Bấm để duyệt"
                                href="https://erp.nhanh.vn/crm/contract/approve?id=63243"><b>Chưa
                                    duyệt</b></a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/contract/edit?id=63243"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            hợp đồng</a></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63242">63242</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=16589"><span
                                    data-toggle="tooltip" data-title="anh Khánh">anh
                                    Khánh</span></a><br><label
                                class="text-muted fontsize-85">(Nguồn: Seeding/ Inbox/
                                Spam)</label><br><label class="text-muted fontsize-85">Thời trang,
                                phụ kiện</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">100.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63242">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63242">Gói
                                    Phần mềm quản ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 23/07/2020 ">
                                <i class="fa fa-github-alt"></i> Vũ Văn Trường</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><a data-toggle="tooltip"
                                title="Bấm để duyệt"
                                href="https://erp.nhanh.vn/crm/contract/approve?id=63242"><b>Chưa
                                    duyệt</b></a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/contract/edit?id=63242"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            hợp đồng</a></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63241">63241</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=20952"><span
                                    data-toggle="tooltip" data-title="Lê Mạnh Khôi">Lê Mạnh
                                    Khôi</span></a><br><label class="text-muted fontsize-85">(Nguồn:
                                TeleSale)</label><br><label class="text-muted fontsize-85">Hoạt động
                                kinh doanh khác</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">6.600.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63241">3.300.000</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63241">Gói SEO
                                    TỐI ƯU ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 23/07/2020 ">
                                <i class="fa fa-github-alt"></i> Phạm Quốc Tuấn</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Tái kí</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Nguyễn Thị Tú Anh<br><i
                                    class=" text-muted fontsize-85">09:36 24/07</i></span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63241"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63240">63240</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=14153"><span
                                    data-toggle="tooltip" data-title="Nguyễn Thế Hoàn">Nguyễn Thế
                                    Hoàn</span><br><i style="font-size:11px;"
                                    class="text-warning">DN Nhanh: 68302 - Kỹ Sư Điện
                                    Máy</i></a><br><label class="text-muted fontsize-85">(Nguồn:
                                Data bàn giao - FB ADS)</label><br><label
                                class="text-muted fontsize-85">Điện tử, Điện máy</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">2.400.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63240">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63240">Gói
                                    Phần mềm quản ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 23/07/2020 ">
                                <i class="fa fa-github-alt"></i> Vũ Văn Trường</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Bán chéo</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><a data-toggle="tooltip"
                                title="Bấm để duyệt"
                                href="https://erp.nhanh.vn/crm/contract/approve?id=63240"><b>Chưa
                                    duyệt</b></a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/contract/edit?id=63240"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            hợp đồng</a></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63239">63239</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a href="https://erp.nhanh.vn/crm/lead/view?id=408223"><span
                                    data-toggle="tooltip" data-title="Hồ Thanh Hoàng">Hồ Thanh
                                    Hoàng</span></a><br><label
                                class="text-muted fontsize-85">(Nguồn: Data bàn giao -
                                Fanpage)</label><br><label class="text-muted fontsize-85">Đồ dùng
                                sinh hoạt</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;"></td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63239">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63239">Dịch vụ
                                    vận chuyển ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 23/07/2020 ">
                                <i class="fa fa-github-alt"></i> Trần Thị Thu Trang</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><a data-toggle="tooltip"
                                title="Bấm để duyệt"
                                href="https://erp.nhanh.vn/crm/contract/approve?id=63239"><b>Chưa
                                    duyệt</b></a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/contract/edit?id=63239"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            hợp đồng</a></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63238">63238</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=16171"><span
                                    data-toggle="tooltip" data-title="Phạm hiếu mĩ">Phạm hiếu
                                    mĩ</span></a><br><label class="text-muted fontsize-85">(Nguồn:
                                Seeding/ Inbox/ Spam)</label><br><label
                                class="text-muted fontsize-85">Thời trang, phụ kiện</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">600.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63238">600.000</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63238">Gói
                                    Phần mềm quản ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 23/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Đạt Trung</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Tái kí</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Nguyễn Thị Tú Anh<br><i
                                    class=" text-muted fontsize-85">14:05 23/07</i></span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63238"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63237">63237</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=11102"><span
                                    data-toggle="tooltip" data-title="Nguyễn Thị Hương Thảo">Nguyễn
                                    Thị Hương Thảo</span><br><i style="font-size:11px;"
                                    class="text-warning">DN Nhanh: 77800 - Song Minh
                                    Baby</i></a><br><label class="text-muted fontsize-85">(Nguồn:
                                Seeding/ Inbox/ Spam)</label><br><label
                                class="text-muted fontsize-85">Đồ dùng sinh hoạt</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;"></td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63237">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63237">Dịch vụ
                                    vận chuyển ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 23/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Hoàng Long</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Nguyễn Thị Việt Trinh<br><i
                                    class=" text-muted fontsize-85">17:17 23/07</i></span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63237"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63236">63236</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=21911"><span
                                    data-toggle="tooltip"
                                    data-title="Công ty TNHH Kỹ thuật Dầu khi Golden Sea">Công ty
                                    TNHH Kỹ thuật Dầu khi Golden Sea ...</span></a><br><label
                                class="text-muted fontsize-85">(Nguồn: Seeding/ Inbox/
                                Spam)</label><br><label class="text-muted fontsize-85">Dịch vụ, giải
                                trí, du lịch</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">550.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63236">300.000</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63236">Gói Xác
                                    minh Maps ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 23/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Thị Như Quỳnh</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Nguyễn Thị Tú Anh<br><i
                                    class=" text-muted fontsize-85">13:49 23/07</i></span><br> <span
                                data-toggle="tooltip" data-title="23/07/2020 14:18:23"
                                class="label label-danger">Nợ gốc</span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63236"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63235">63235</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=5076"><span
                                    data-toggle="tooltip" data-title="Nguyễn Việt Hùng">Nguyễn Việt
                                    Hùng</span><br><i style="font-size:11px;"
                                    class="text-warning">DN Nhanh: 9570 - Vân Anh
                                    Scarlet</i></a><br><label class="text-muted fontsize-85">(Nguồn:
                                Khách tự liên hệ kinh doanh)</label><br><label
                                class="text-muted fontsize-85">Thời trang, phụ kiện</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">14.400.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63235">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63235">Gói
                                    Starter - QLBH ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 23/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Xuân Anh</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Tái kí</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Nguyễn Thị Tú Anh<br><i
                                    class=" text-muted fontsize-85">13:45 23/07</i></span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63235"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63234">63234</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=17227"><span
                                    data-toggle="tooltip" data-title="Nguyễn Thị Nhã">Nguyễn Thị
                                    Nhã</span></a><br><label class="text-muted fontsize-85">(Nguồn:
                                TeleSale)</label><br><label class="text-muted fontsize-85">Thời
                                trang, phụ kiện</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">10.000.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63234">4.000.000</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63234">Gói
                                    Starter - QLBH ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 23/07/2020 ">
                                <i class="fa fa-github-alt"></i> Chu Văn Thảo</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Tái kí</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Nguyễn Thị Tú Anh<br><i
                                    class=" text-muted fontsize-85">13:55 23/07</i></span><br> <span
                                data-toggle="tooltip" data-title="24/07/2020 10:35:43"
                                class="label label-success">Đã nộp gốc</span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63234"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63233">63233</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=5076"><span
                                    data-toggle="tooltip" data-title="Nguyễn Việt Hùng">Nguyễn Việt
                                    Hùng</span><br><i style="font-size:11px;"
                                    class="text-warning">DN Nhanh: 9570 - Vân Anh
                                    Scarlet</i></a><br><label class="text-muted fontsize-85">(Nguồn:
                                Khách tự liên hệ kinh doanh)</label><br><label
                                class="text-muted fontsize-85">Thời trang, phụ kiện</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">3.600.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63233">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63233">Gói
                                    Starter - QLBH ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 23/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Xuân Anh</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Tái kí</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Nguyễn Thị Tú Anh<br><i
                                    class=" text-muted fontsize-85">13:46 23/07</i></span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63233"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63232">63232</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=21298"><span
                                    data-toggle="tooltip" data-title="Phạm Phương An">Phạm Phương
                                    An</span></a><br><label class="text-muted fontsize-85">(Nguồn:
                                Data bàn giao - SEO)</label><br><label
                                class="text-muted fontsize-85">Thời trang, phụ kiện</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">300.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63232">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63232">Gói
                                    Phần mềm quản ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 23/07/2020 ">
                                <i class="fa fa-github-alt"></i> Lê Hải Anh</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Mở rộng</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Nguyễn Thị Tú Anh<br><i
                                    class=" text-muted fontsize-85">13:39 23/07</i></span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63232"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63231">63231</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=16730"><span
                                    data-toggle="tooltip" data-title="TRỊNH THỊ NGUYỆT">TRỊNH THỊ
                                    NGUYỆT</span><br><i style="font-size:11px;"
                                    class="text-warning">DN Nhanh: 44230 - Gusta</i></a><br><label
                                class="text-muted fontsize-85">(Nguồn: Data bàn giao - Không có
                                mã)</label><br><label class="text-muted fontsize-85">Thời trang, phụ
                                kiện</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">2.200.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63231">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63231">Gói
                                    dịch vụ nhập ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 23/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Hữu Điệp</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Nguyễn Thị Tú Anh<br><i
                                    class=" text-muted fontsize-85">16:01 24/07</i></span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63231"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63230">63230</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=16072"><span
                                    data-toggle="tooltip" data-title="BÀ TRẦN NGUYÊN MINH HẠNH">BÀ
                                    TRẦN NGUYÊN MINH HẠNH</span></a><br><label
                                class="text-muted fontsize-85">(Nguồn: Khác)</label><br><label
                                class="text-muted fontsize-85">Thời trang, phụ kiện</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">12.000.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63230">12.000.000</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63230">Gói
                                    Premium - QLBH ...</a></div>
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63230">Gói Kho
                                    tổng (chỉ ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 23/07/2020 ">
                                <i class="fa fa-github-alt"></i> Phạm Thị Thủy</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Tái kí</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Nguyễn Thị Tú Anh<br><i
                                    class=" text-muted fontsize-85">16:57 24/07</i></span><br> <span
                                data-toggle="tooltip" data-title="24/07/2020 17:05:59"
                                class="label label-danger">Nợ gốc</span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63230"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63229">63229</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=15645"><span
                                    data-toggle="tooltip"
                                    data-title="CÔNG TY TNHH CÔNG NGHỆ TRUYỀN HÌNH 247">CÔNG TY TNHH
                                    CÔNG NGHỆ TRUYỀN HÌNH 247</span></a><br><label
                                class="text-muted fontsize-85">Thực phẩm, đồ uống, hàng tiêu
                                dùng</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">1.980.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63229">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63229">Siêu
                                    vip</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 23/07/2020 ">
                                <i class="fa fa-github-alt"></i> Đinh Thị Thu Hương</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><a data-toggle="tooltip"
                                title="Bấm để duyệt"
                                href="https://erp.nhanh.vn/crm/contract/approve?id=63229"><b>Chưa
                                    duyệt</b></a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/contract/edit?id=63229"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            hợp đồng</a></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63228">63228</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=21915"><span
                                    data-toggle="tooltip" data-title="Nguyễn Trọng Thắng">Nguyễn
                                    Trọng Thắng</span></a><br><label
                                class="text-muted fontsize-85">(Nguồn: TeleSale)</label><br><label
                                class="text-muted fontsize-85">Nội thất, ngoại thất</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">4.400.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63228">4.400.000</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63228">Chăm
                                    sóc fanpage - ...</a></div>
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63228">Gói
                                    Phần mềm quản ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 23/07/2020 ">
                                <i class="fa fa-github-alt"></i> Phạm Quang Minh</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Nguyễn Thị Tú Anh<br><i
                                    class=" text-muted fontsize-85">11:55 23/07</i></span><br> <span
                                data-toggle="tooltip" data-title="23/07/2020 15:15:38"
                                class="label label-success">Đã nộp gốc</span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63228"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63227">63227</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=7449"><span
                                    data-toggle="tooltip" data-title="Đỗ Hoàng Minh Khôi">Đỗ Hoàng
                                    Minh Khôi</span></a><br><label
                                class="text-muted fontsize-85">(Nguồn: Khách tự liên hệ kinh
                                doanh)</label><br><label class="text-muted fontsize-85">Thời trang,
                                phụ kiện</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">5.400.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63227">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63227">Gói
                                    Premium - QLBH ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 23/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Xuân Anh</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Mở rộng</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Nguyễn Thị Tú Anh<br><i
                                    class=" text-muted fontsize-85">11:40 23/07</i></span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63227"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63226">63226</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=21585"><span
                                    data-toggle="tooltip" data-title="Ngô Văn Định">Ngô Văn
                                    Định</span><br><i style="font-size:11px;"
                                    class="text-warning">DN Nhanh: 80929 - Ngô
                                    Định</i></a><br><label class="text-muted fontsize-85">(Nguồn:
                                Kinh doanh được giới thiệu)</label><br><label
                                class="text-muted fontsize-85">Thời trang, phụ kiện</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;"></td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63226">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63226">Dịch vụ
                                    vận chuyển ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 23/07/2020 ">
                                <i class="fa fa-github-alt"></i> Ngô Hữu Tình</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><a data-toggle="tooltip"
                                title="Bấm để duyệt"
                                href="https://erp.nhanh.vn/crm/contract/approve?id=63226"><b>Chưa
                                    duyệt</b></a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/contract/edit?id=63226"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            hợp đồng</a></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63225">63225</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a href="https://erp.nhanh.vn/crm/lead/view?id=407395"><span
                                    data-toggle="tooltip" data-title="Huỳnh Thị Mỹ Chi">Huỳnh Thị Mỹ
                                    Chi</span></a><br><label class="text-muted fontsize-85">(Nguồn:
                                Data bàn giao - Fanpage)</label><br><label
                                class="text-muted fontsize-85">Thời trang, phụ kiện</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">4.400.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63225">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63225">Chăm
                                    sóc fanpage - ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 23/07/2020 ">
                                <i class="fa fa-github-alt"></i> Lê Thúy Quỳnh</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><a data-toggle="tooltip"
                                title="Bấm để duyệt"
                                href="https://erp.nhanh.vn/crm/contract/approve?id=63225"><b>Chưa
                                    duyệt</b></a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/contract/edit?id=63225"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            hợp đồng</a></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63224">63224</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=7449"><span
                                    data-toggle="tooltip" data-title="Đỗ Hoàng Minh Khôi">Đỗ Hoàng
                                    Minh Khôi</span></a><br><label
                                class="text-muted fontsize-85">(Nguồn: Khách tự liên hệ kinh
                                doanh)</label><br><label class="text-muted fontsize-85">Thời trang,
                                phụ kiện</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">5.400.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63224">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63224">Gói
                                    Premium - QLBH ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 23/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Xuân Anh</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Tái kí</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Nguyễn Thị Tú Anh<br><i
                                    class=" text-muted fontsize-85">11:39 23/07</i></span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63224"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63223">63223</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=7449"><span
                                    data-toggle="tooltip" data-title="Đỗ Hoàng Minh Khôi">Đỗ Hoàng
                                    Minh Khôi</span></a><br><label
                                class="text-muted fontsize-85">(Nguồn: Khách tự liên hệ kinh
                                doanh)</label><br><label class="text-muted fontsize-85">Thời trang,
                                phụ kiện</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">10.800.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63223">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63223">Gói
                                    Premium - QLBH ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 23/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Xuân Anh</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Tái kí</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Nguyễn Thị Tú Anh<br><i
                                    class=" text-muted fontsize-85">11:36 23/07</i></span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63223"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63222">63222</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a href="https://erp.nhanh.vn/crm/lead/view?id=44562"><span
                                    data-toggle="tooltip"
                                    data-title="Biên bản đền bù hãng vận chuyển J&amp;T">Biên bản
                                    đền bù hãng vận chuyển J&amp;T</span></a><br><label
                                class="text-muted fontsize-85">(Nguồn: Khác)</label><br><label
                                class="text-muted fontsize-85">Điện thoại, Viễn thông</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;"></td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63222">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63222">Giấy tờ
                                    Công ty ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 23/07/2020 ">
                                <i class="fa fa-github-alt"></i> Trần Thúy Nga</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Đoàn Thị Minh Hương<br><i
                                    class=" text-muted fontsize-85">11:37 23/07</i></span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63222"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63221">63221</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a href="https://erp.nhanh.vn/crm/lead/view?id=371336"><span
                                    data-toggle="tooltip"
                                    data-title="Công ty Cổ phần Nhanh.vn">Công ty Cổ phần
                                    Nhanh.vn</span></a><br><label
                                class="text-muted fontsize-85">(Nguồn: Khác)</label><br><label
                                class="text-muted fontsize-85">Hoạt động kinh doanh khác</label>
                        </td>
                        <td class="AttAmount colNb" style="display: table-cell;"></td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63221">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63221">Giấy tờ
                                    Công ty ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 23/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Thị Hương</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">nguyễn quỳnh dương<br><i
                                    class=" text-muted fontsize-85">11:42 23/07</i></span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63221"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63220">63220</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=16418"><span
                                    data-toggle="tooltip" data-title="Nguyễn Thị Mai Hương">Nguyễn
                                    Thị Mai Hương</span></a><br><label
                                class="text-muted fontsize-85">(Nguồn: Data bàn giao - Được giới
                                thiệu)</label><br><label class="text-muted fontsize-85">Thời trang,
                                phụ kiện</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">6.000.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63220">6.000.000</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63220">Gói
                                    Premium - QLBH ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 23/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Xuân Anh</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Tái kí</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Nguyễn Thị Tú Anh<br><i
                                    class=" text-muted fontsize-85">11:20 23/07</i></span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63220"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63219">63219</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=10346"><span
                                    data-toggle="tooltip"
                                    data-title="CÔNG TY TNHH SẢN XUẤT- THƯƠNG MẠI THIẾT BỊ VẬT LÝ KỸ THUẬT">CÔNG
                                    TY TNHH SẢN XUẤT- THƯƠNG MẠI THIẾT BỊ ...</span></a><br><label
                                class="text-muted fontsize-85">(Nguồn: Kinh doanh được giới
                                thiệu)</label><br><label class="text-muted fontsize-85">Thời trang,
                                phụ kiện</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">5.100.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63219">5.100.000</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63219">Gói
                                    Premium - QLBH ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 23/07/2020 ">
                                <i class="fa fa-github-alt"></i> Phạm Viết Huy</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Tái kí</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Nguyễn Thị Tú Anh<br><i
                                    class=" text-muted fontsize-85">10:58 23/07</i></span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63219"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63218">63218</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=21913"><span
                                    data-toggle="tooltip" data-title="Nguyễn Hải An">Nguyễn Hải
                                    An</span></a><br><label class="text-muted fontsize-85">(Nguồn:
                                Data bàn giao - SEO)</label><br><label
                                class="text-muted fontsize-85">Thời trang, phụ kiện</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">3.600.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63218">3.600.000</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63218">Gói
                                    Website cơ bản ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 23/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Thị Hiếu</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Hứa Thị Mai Ngân<br><i
                                    class=" text-muted fontsize-85">13:45 23/07</i></span><br> <span
                                data-toggle="tooltip" data-title="23/07/2020 14:31:33"
                                class="label label-success">Đã nộp gốc</span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63218"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63217">63217</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=21585"><span
                                    data-toggle="tooltip" data-title="Ngô Văn Định">Ngô Văn
                                    Định</span></a><br><label class="text-muted fontsize-85">(Nguồn:
                                Kinh doanh được giới thiệu)</label><br><label
                                class="text-muted fontsize-85">Thời trang, phụ kiện</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">3.000.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63217">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63217">Gói
                                    Starter - QLBH ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 23/07/2020 ">
                                <i class="fa fa-github-alt"></i> Ngô Hữu Tình</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><a data-toggle="tooltip"
                                title="Bấm để duyệt"
                                href="https://erp.nhanh.vn/crm/contract/approve?id=63217"><b>Chưa
                                    duyệt</b></a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/contract/edit?id=63217"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            hợp đồng</a></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63216">63216</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a href="https://erp.nhanh.vn/crm/lead/view?id=408160"><span
                                    data-toggle="tooltip" data-title="Nguyễn Văn Việt">Nguyễn Văn
                                    Việt</span></a><br><label class="text-muted fontsize-85">(Nguồn:
                                Data bàn giao - Được giới thiệu)</label><br><label
                                class="text-muted fontsize-85">Thời trang, phụ kiện</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">900.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63216">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63216">Gói
                                    Combo 5 fanpage ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 23/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Thị Thu Hằng</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><a data-toggle="tooltip"
                                title="Bấm để duyệt"
                                href="https://erp.nhanh.vn/crm/contract/approve?id=63216"><b>Chưa
                                    duyệt</b></a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/crm/contract/edit?id=63216"><i
                                                class="fa fa-edit" style="margin-right:7px"></i>Sửa
                                            hợp đồng</a></li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63215">63215</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=14297"><span
                                    data-toggle="tooltip" data-title="Phan Quỳnh Trang">Phan Quỳnh
                                    Trang</span></a><br><label
                                class="text-muted fontsize-85">(Nguồn: Kinh doanh được giới
                                thiệu)</label><br><label class="text-muted fontsize-85">Điện thoại,
                                Viễn thông</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">4.200.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63215">4.200.000</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63215">Gói
                                    Enterprise - QLBH ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 23/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Xuân Anh</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Mở rộng</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Nguyễn Thị Tú Anh<br><i
                                    class=" text-muted fontsize-85">10:04 23/07</i></span><br> <span
                                data-toggle="tooltip" data-title="23/07/2020 15:18:00"
                                class="label label-success">Đã nộp gốc</span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63215"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63214">63214</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=3408"><span
                                    data-toggle="tooltip"
                                    data-title="CÔNG TY TNHH THIẾT BỊ VẬT TƯ NGÀNH ẢNH MINH ĐỨC">CÔNG
                                    TY TNHH THIẾT BỊ VẬT TƯ NGÀNH ẢNH ...</span></a><br><label
                                class="text-muted fontsize-85">Công nghiệp - xây dựng</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">2.544.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63214">0</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63214">Vchat
                                    gói Cơ bản ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 23/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Thị Quỳnh Vân</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Lê Thị Phương Thảo<br><i
                                    class=" text-muted fontsize-85">10:18 23/07</i></span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63214"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="AttId" style="display: table-cell;"><a class="text-info"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63213">63213</a>
                        </td>
                        <td style="max-width: 200px; display: table-cell;" class="AttCustomerName">
                            <a data="" href="https://erp.nhanh.vn/crm/account/view?id=21525"><span
                                    data-toggle="tooltip" data-title="PHẠM PHÚ CƯỜNG">PHẠM PHÚ
                                    CƯỜNG</span></a><br><label
                                class="text-muted fontsize-85">(Nguồn: Data bàn giao - Không có
                                mã)</label><br><label class="text-muted fontsize-85">Thực phẩm, đồ
                                uống, hàng tiêu dùng</label></td>
                        <td class="AttAmount colNb" style="display: table-cell;">600.000</td>
                        <td class="AttPaid colNb" style="display: table-cell;"><a
                                style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/transaction?contractId=63213">600.000</a>
                        </td>
                        <td style="max-width: 160px; display: table-cell;" class="AttProduct">
                            <div><a style="color: #F73838;"
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=63213">Gói
                                    Shipping - QLBH ...</a></div>
                        </td>
                        <td class="AttCreatedBy" style="display: table-cell;">
                            <div data-toggle="tooltip" data-original-title="Ngày tạo: 23/07/2020 ">
                                <i class="fa fa-github-alt"></i> Nguyễn Thị Mỹ Phụng</div>
                        </td>
                        <td class="colStatus AttType" style="display: table-cell;">Kí mới</td>
                        <td style="text-align: center; display: table-cell;"
                            class="colStatus AttApprovedById"><span class="text-success"
                                data-toggle="tooltip" title="Đã duyệt">Nguyễn Viết Lâm<br><i
                                    class=" text-muted fontsize-85">10:22 23/07</i></span><br> <span
                                data-toggle="tooltip" data-title="23/07/2020 14:58:31"
                                class="label label-success">Đã nộp gốc</span></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/addtransaction?contractId=63213"><i
                                                class="fa fa-plus-square text-success"
                                                style="margin-right:7px"></i>Thêm thanh toán</a>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
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
    <script type="text/javascript" src="{{ asset('asset/js/crm/contract/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/contract/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/contract/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/contract/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/contract/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/contract/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/contract/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/contract/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/contract/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/contract/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/contract/bootstrap-multiselect.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/contract/saved_resource(2)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/contract/saved_resource(3)') }}"></script>
@endsection