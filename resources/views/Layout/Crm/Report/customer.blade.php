@extends('Layout.master1')

@section('css')
    <link href="{{ asset('asset/css/crm/report/bootstrap-multiselect.css') }}" media="screen" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('asset/css/crm/report/style.css') }}" type="text/css">
    <style>
    .cke {
        visibility: hidden;
    }
    </style>
    <script type="text/javascript" charset="UTF-8" src="{{ asset('asset/js/crm/report/loader.js') }}"></script>
    <link id="load-css-0" rel="stylesheet" type="text/css" href="{{ asset('asset/css/report/tooltip.css') }}">
    <link id="load-css-1" rel="stylesheet" type="text/css" href="{{ asset('asset/css/report/util.css') }}">
    <script type="text/javascript" charset="UTF-8" src="{{ asset('asset/js/crm/report/jsapi_compiled_default_module.js') }}"></script>
    <script type="text/javascript" charset="UTF-8" src="{{ asset('asset/js/crm/report/jsapi_compiled_graphics_module.js') }}"></script>
    <script type="text/javascript" charset="UTF-8" src="{{ asset('asset/js/crm/report/jsapi_compiled_ui_module.js') }}"></script>
    <script type="text/javascript" charset="UTF-8" src="{{ asset('asset/js/crm/report/jsapi_compiled_corechart_module.js') }}"></script>
@endsection

@section('title','ERP-Báo cáo theo phòng ban')

@section('content-page')

        <div class="tab-content">
            <style>
            .pieLabelBackground {
                background-color: transparent !important
            }
            </style>
            <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li class="active">Báo cáo chăm sóc</li>
            </ul>
            <div class="filterContainer">
            <form method="GET" name="crmReportEmployeesFilter" class="form-inline" role="form"
                id="crmReportEmployeesFilter">
                <div class="form-group"><select name="companyId" id="companyId"
                    class="form-control select2-hidden-accessible" tabindex="-1" aria-hidden="true">
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
                    class="select2 select2-container select2-container--default select2-container--below" dir="ltr"
                    style="width: 150px;"><span class="selection"><span
                        class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true"
                        aria-expanded="false" tabindex="0" aria-labelledby="select2-companyId-container"><span
                        class="select2-selection__rendered" id="select2-companyId-container"
                        title="----Nhanh.vn">----Nhanh.vn</span><span class="select2-selection__arrow"
                        role="presentation"><b role="presentation"></b></span></span></span><span
                    class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                <div class="form-group"><select name="departmentId" id="departmentId"
                    class="form-control select2-hidden-accessible" tabindex="-1" aria-hidden="true">
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
                    <option value="1285">-- -- -- Nhanh HN - ThanhTV_Phát triển đối tác</option>
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
                    class="select2 select2-container select2-container--default select2-container--below" dir="ltr"
                    style="width: 103px;"><span class="selection"><span
                        class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true"
                        aria-expanded="false" tabindex="0" aria-labelledby="select2-departmentId-container"><span
                        class="select2-selection__rendered" id="select2-departmentId-container"
                        title="- Phòng ban -">- Phòng ban -</span><span class="select2-selection__arrow"
                        role="presentation"><b role="presentation"></b></span></span></span><span
                    class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                <div class="form-group"><input type="text" name="daterangepicker"
                    class="form-control date-range-picker" id="daterangepicker" value="01/07/2020 - 31/07/2020">
                </div>
                <div class="form-group"><select name="productId[]" multiple="multiple" id="productId"
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
                    <option value="301">Decal nhiệt in mã vạch 2 tem 35*22 ( cuộn )</option>
                    <option value="302">Ngăn kéo đựng tiền ZQ410F</option>
                    <option value="305">Thiết kế thêm tính năng cho website: bảo mật https cho website</option>
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
                    <option value="420">Gói Kho tổng (chỉ xuất nhập kho, không bán hàng)</option>
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
                    <option value="511">Gói Ecom (không giới hạn gian hàng/1 sàn TMĐT)</option>
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
                    <option value="583">Gói chăm sóc gian hàng chuyên nghiệp</option>
                    <option value="585">Máy in tem nhiệt N41</option>
                    <option value="586">Gói chăm sóc website seo cơ bản</option>
                    <option value="587">Gói chăm sóc website seo tối ưu</option>
                    <option value="588">Gói Hỗ trợ và định hướng content seo</option>
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
                    <option value="349">Quảng cáo Facebook dạng Tổng hợp ảnh Gói Căn Bản</option>
                    <option value="350">Quảng cáo Facebook dạng Tổng hợp ảnh Gói Thương Gia</option>
                    <option value="351">Quảng cáo Facebook dạng Độc quyền ảnh Gói Căn Bản</option>
                    <option value="352">Quảng cáo Facebook dạng Độc quyền ảnh Gói Thương Gia</option>
                    <option value="353">Quảng cáo Facebook dạng Video Gói Căn Bản</option>
                    <option value="354">Quảng cáo Facebook dạng Video Gói Thương Gia</option>
                    <option value="355">Gói Chụp ảnh sản phẩm I</option>
                    <option value="356">Gói Chụp ảnh sản phẩm II</option>
                    <option value="357">Gói Quay video</option>
                    <option value="358">Gói Thiết kế Menu dạng truyền thống</option>
                    <option value="359">Gói Thiết kế Menu dạng hiện đại</option>
                    <option value="360">Gói Sản xuất video qua ảnh</option>
                    <option value="361">Gói Quản trị Instagram</option>
                    <option value="362">Gói Quảng cáo Facebook dạng ảnh Kênh cộng đồng</option>
                    <option value="363">Gói Quảng cáo Facebook dạng video Kênh cộng đồng</option>
                    <option value="386">Vchat gói Cơ bản</option>
                    <option value="387">Vchat gói Chuyên nghiệp</option>
                    <option value="389">Wemarry - Quản trị fanpage - Gói Basic</option>
                    <option value="390">Wemarry - Dịch vụ facebook ads</option>
                    <option value="391">Wemarry - Dịch vụ quảng cáo khác - Gói chụp ảnh sản phẩm 01</option>
                    <option value="400">Mini Combo - WeSave</option>
                    <option value="401">Big Combo - WeSave</option>
                    <option value="402">Extra Combo - WeSave</option>
                    <option value="412">Wemarry - Quản trị fanpage - Gói business</option>
                    <option value="436">Wehelp</option>
                    <option value="465">Chạy quảng cáo zalo</option>
                    <option value="466">Gói phát triển website</option>
                    <option value="467">CRM Starter - weSave</option>
                    <option value="468">CRM Premium - weSave</option>
                    <option value="469">Wemarry - thiết kế website</option>
                    <option value="470">Wemarry - dịch vụ GA</option>
                    <option value="480">Tư vấn và tối ưu quy trình Marketing Insight</option>
                    <option value="482">CRM Chatbot - WeSave</option>
                    <option value="487">Wemarry - Dịch vụ SEO</option>
                    <option value="488">wePOS - Phần cứng</option>
                    <option value="499">Phần mềm quản lý fanpage chốt sale – Gói 1</option>
                    <option value="500">Phần mềm quản lý fanpage chốt sale – Gói 2</option>
                    <option value="501">Phần mềm quản lý fanpage chốt sale – Gói 3</option>
                    <option value="516">9Houz - DV Content</option>
                    <option value="517">9Houz - DV Banner</option>
                    <option value="518">9Houz - DV Seo Banner</option>
                    <option value="572">Vchat gói nâng cao</option>
                    <option value="577">Vchat gói Forum</option>
                    </optgroup>
                    <optgroup label="VNP group">
                    <option value="392">Wemarry - Quản trị fanpage - Gói Standard</option>
                    <option value="393">Wemarry - Quản trị fanpage - Gói Business</option>
                    <option value="394">Wemarry - Dịch vụ quảng cáo khác - Gói chụp ảnh sản phẩm 02</option>
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
                    <option value="408">Bizshare - Gói chăm sóc fanpage - Nội dung</option>
                    <option value="409">Bizshare - Chạy quảng cáo</option>
                    <option value="410">Bizshare - Xây dựng nội dung trên Website và Fanpage</option>
                    <option value="411">Bizshare - Chạy chiến dịch quảng cáo trên Facebook Ads và Google Adword
                    </option>
                    <option value="437">Bizshare - Gói quảng cáo Media</option>
                    <option value="472">BizShare - Dịch vụ SEO tổng thể</option>
                    <option value="483">Bizshare - Dịch vụ quản lý ngân sách chạy quảng cáo</option>
                    <option value="484">Bizshare - Chăm sóc website, nội dung</option>
                    <option value="485">Bizshare - Xây dựng landing page bán hàng</option>
                    <option value="486">Bizshare - Tối ưu kênh bán hàng sàn TMĐT Shopee</option>
                    <option value="490">Bizshare - Gói chăm sóc fanpage Facebook và Instagram</option>
                    <option value="498">BizShare - Thiết kế ấn phẩm truyền thông</option>
                    <option value="519">Bizshare - Thiết kế landing page</option>
                    <option value="521">Bizshare - Thiết kế website</option>
                    <option value="522">Bizshare - Thiết kế Brochure</option>
                    <option value="523">Bizshare - Thiết kế Logo</option>
                    <option value="529">Bizshare - Quảng cáo Facebook và Instagram</option>
                    <option value="530">Bizshare - Định hướng tư vấn truyền thông và tư vấn chiến lược</option>
                    <option value="531">Bizshare - Gói Quản trị kênh Thương mại điện tử</option>
                    <option value="533">SEO lead</option>
                    <option value="535">Facebook Ads</option>
                    </optgroup>
                    <optgroup label="123job.vn">
                    <option value="584">123job - Gói mở hồ sơ ứng viên</option>
                    </optgroup>
                </select>
                <div class="btn-group"><button type="button" class="multiselect dropdown-toggle btn btn-default"
                    data-toggle="dropdown" title="Sản phẩm">Sản phẩm <b class="caret"></b></button>
                    <ul class="multiselect-container dropdown-menu">
                    <li class="multiselect-item filter" value="0">
                        <div class="input-group"><span class="input-group-addon"><i
                            class="glyphicon glyphicon-search"></i></span><input
                            class="form-control multiselect-search" type="text" placeholder="Search"></div>
                    </li>
                    <li class="multiselect-item group"><label class="multiselect-group">Nhanh.vn</label></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="1">
                            Gói Pro - QLBH</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="103">
                            Gói thiết kế website theo yêu cầu</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="107">
                            Dịch vụ vận chuyển</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="112">
                            Gói phần mềm theo yêu cầu</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="125">
                            Phần mềm quản lý doanh nghiệp ERP</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="236">
                            Gói thêm tính năng mới</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="251">
                            Gói Shipping - QLBH</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="252">
                            Gói Starter - QLBH</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="253">
                            Gói Premium - QLBH</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="254">
                            Gói Enterprise - QLBH</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="261">
                            Gói phí tích hợp API</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="267">
                            Gói Website cơ bản</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="268">
                            Gói Website tối ưu</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="269">
                            Gói Website tiết kiệm</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="273">
                            Gói website theo yêu cầu</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="284">
                            Gói Phần mềm quản lý fanpage</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="285">
                            Gói Premium Website</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="293">
                            Gói Basic 1 - QLBH - online</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="294">
                            Gói Basic 2 - QLBH - offline</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="297">
                            Máy in mã vạch Xprinter XP 350B</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="299">
                            Giấy in bill K58</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="300">
                            Giấy in bill K80</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="301">
                            Decal nhiệt in mã vạch 2 tem 35*22 ( cuộn )</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="302">
                            Ngăn kéo đựng tiền ZQ410F</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="305">
                            Thiết kế thêm tính năng cho website: bảo mật https cho website</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="306">
                            Máy đọc mã vạch YJ3300</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="307">
                            Chân đế</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="310">
                            Máy in hóa đơn XP-N200H</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="316">
                            Gói phí chuyển đổi dữ liệu website</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="317">
                            Gói phí nâng cấp gói phần mềm</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="321">
                            Chăm sóc fanpage - Gói content</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="322">
                            Máy quét mã vạch Honeywell HH360</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="324">
                            Máy in mã vạch Honeywell PC42D</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="328">
                            Máy quét mã vạch Honeywell HF600</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="366">
                            Máy in mã vạch HPRT LPQ80</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="372">
                            Gói thiết kế thêm tính năng cho website</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="385">
                            Free Phí chỉnh sửa website</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="388">
                            Máy quét mã vạch có dây Hugo 1607</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="403">
                            Gói Free - QLBH</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="404">
                            Hoàn cước vận chuyển</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="414">
                            Gói Omni Starter</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="415">
                            Gói Omni Premium</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="416">
                            Gói Omni Enterprise</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="420">
                            Gói Kho tổng (chỉ xuất nhập kho, không bán hàng)</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="439">
                            Gói Combo 3 fanpage</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="440">
                            Máy in HPRT POS80FE</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="450">
                            Gói Combo 5 fanpage</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="451">
                            Gói Combo 5 gian hàng</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="471">
                            Gói combo 3 gian hàng</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="474">
                            Gói môi giới</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="476">
                            Máy in hóa đơn Xprinter XP-58IIH</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="477">
                            Máy quét Datamax</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="479">
                            Gói Quảng Cáo Fanpage</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="481">
                            Ngăn kéo đựng tiền JJ330 (Nhỏ)</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="489">
                            Máy in hóa đơn HPRT TP80BE</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="492">
                            Gói Combo 10 gian hàng</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="493">
                            Gói Combo 10 fanpage</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="497">
                            Gói dịch vụ nhập liệu website</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="502">
                            Gói dịch vụ nhập liệu sàn TMĐT</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="503">
                            Gói Ecomcare Shopee</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="508">
                            Gói Ecomcare Lazada</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="509">
                            Gói Ecom</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="511">
                            Gói Ecom (không giới hạn gian hàng/1 sàn TMĐT)</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="513">
                            Chăm sóc fanpage - Gói VIP 1</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="514">
                            Chăm sóc fanpage - Gói VIP 2</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="515">
                            Chăm sóc fanpage - Gói VIP 3</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="520">
                            Gói Thiết kế Website P</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="524">
                            Máy in mã vạch 380B</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="525">
                            Máy Đọc Mã Vạch ChipPOS</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="528">
                            Gói Thiết kế Website W</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="532">
                            Gói Thiết kế Website E</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="534">
                            Giấy tờ Công ty</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="536">
                            Gói Ecom full sàn TMĐT</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="538">
                            Máy in hóa đơn A160</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="539">
                            Két đựng tiền SC - 335A</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="542">
                            Gói Tạo mới Maps</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="543">
                            Gói Xác minh Maps</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="544">
                            Gói Chăm sóc Maps</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="548">
                            Máy in hóa đơn XP-V320N</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="549">
                            Gói Chạy Quảng Cáo Instagram</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="550">
                            Gói Hỗ trợ quảng cáo Shopee</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="552">
                            Gói Ecom COVID Free</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="553">
                            Gói WEB COVID Free</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="554">
                            POS</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="555">
                            WEB</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="556">
                            ECOM</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="557">
                            VPAGE</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="558">
                            OMNI</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="559">
                            MAP</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="560">
                            ECOMCARE</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="561">
                            SEO</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="562">
                            FB</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="563">
                            PC</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="564">
                            DVPM</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="565">
                            DVMKT</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="566">
                            Lệ phí đăng ký tên miền VN</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="567">
                            Phí duy trì tên miền VN</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="568">
                            Phí dịch vụ TK quản trị tên miền VN</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="570">
                            Phí đăng ký tên miền quốc tế</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="571">
                            Phí duy trì tên miền quốc tế</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="573">
                            Gói SEO CƠ BẢN</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="574">
                            Gói SEO TỐI ƯU</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="575">
                            Máy đếm cầm tay</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="576">
                            SMS Brandname</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="578">
                            Giấy in mã vạch 2 tem</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="579">
                            Gói khởi tạo và Decor gian hàng</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="580">
                            DV GTGT</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="581">
                            SMS</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="582">
                            DV TÊN MIỀN</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="583">
                            Gói chăm sóc gian hàng chuyên nghiệp</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="585">
                            Máy in tem nhiệt N41</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="586">
                            Gói chăm sóc website seo cơ bản</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="587">
                            Gói chăm sóc website seo tối ưu</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="588">
                            Gói Hỗ trợ và định hướng content seo</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="589">
                            Gói Tool quét data facebook</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="590">
                            Máy quét mã vạch Antech 1266i</label></a></li>
                    <li class="multiselect-item group"><label class="multiselect-group">Công ty cổ phần Vật Giá
                        Việt Nam</label></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="114">
                            Facebook Ad</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="115">
                            Google Ad</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="120">
                            Vchat</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="220">
                            Marketing</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="222">
                            GHĐB Phát sinh</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="223">
                            GHĐB Ngoại tỉnh</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="224">
                            Tin vip</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="225">
                            Siêu vip dính</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="226">
                            Siêu vip</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="227">
                            Banner</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="229">
                            Nạp tiền Ad by Vatgia</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="230">
                            Nạp tiền</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="231">
                            GHĐB (tái ký)</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="232">
                            GHĐB (mới)</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="235">
                            Gian hàng phát sinh</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="237">
                            Gian hàng Premium</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="240">
                            Gian hàng thu CPA</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="246">
                            Banner (tái ký)</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="247">
                            Nạp tiền (tái ký)</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="248">
                            Tin vip (tái ký)</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="249">
                            Siêu vip dính (tái ký)</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="250">
                            Siêu vip (tái ký)</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="271">
                            Deal VG</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="272">
                            Nạp tiền tài khoản chính</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="275">
                            Vpage</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="276">
                            Gói Traffic</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="278">
                            Zopzep - Marketing</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="279">
                            Fanpage</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="280">
                            Nạp tiền dự án</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="281">
                            Fanpage VG</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="282">
                            Dịch vụ Viết bài</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="283">
                            Seo Banner</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="286">
                            Khóa học FB Marketing</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="288">
                            Lipo (gói thường)</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="289">
                            Lipo (gói nâng cao)</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="290">
                            Lipo (gói cao cấp)</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="308">
                            Cho thuê phòng</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="309">
                            Dịch vụ trang trí phòng</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="311">
                            wePOS (basic)</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="312">
                            wePOS (starter)</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="313">
                            wePOS (advanced)</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="314">
                            wePOS (premium)</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="315">
                            wePOS (diamond)</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="325">
                            Gói TMDT toàn diện 1</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="326">
                            Gói TMDT toàn diện 2</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="331">
                            Quản trị Fanpage Basic - WeSave</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="332">
                            Quản trị Fanpage Standard - WeSave</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="333">
                            Quản trị Fanpage Business - WeSave</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="334">
                            Gói chụp ảnh menu</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="335">
                            Gói chụp ảnh đồ ăn căn bản</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="336">
                            Gói chụp ảnh không gian</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="337">
                            Gói quay video kèm dựng</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="349">
                            Quảng cáo Facebook dạng Tổng hợp ảnh Gói Căn Bản</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="350">
                            Quảng cáo Facebook dạng Tổng hợp ảnh Gói Thương Gia</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="351">
                            Quảng cáo Facebook dạng Độc quyền ảnh Gói Căn Bản</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="352">
                            Quảng cáo Facebook dạng Độc quyền ảnh Gói Thương Gia</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="353">
                            Quảng cáo Facebook dạng Video Gói Căn Bản</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="354">
                            Quảng cáo Facebook dạng Video Gói Thương Gia</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="355">
                            Gói Chụp ảnh sản phẩm I</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="356">
                            Gói Chụp ảnh sản phẩm II</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="357">
                            Gói Quay video</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="358">
                            Gói Thiết kế Menu dạng truyền thống</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="359">
                            Gói Thiết kế Menu dạng hiện đại</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="360">
                            Gói Sản xuất video qua ảnh</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="361">
                            Gói Quản trị Instagram</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="362">
                            Gói Quảng cáo Facebook dạng ảnh Kênh cộng đồng</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="363">
                            Gói Quảng cáo Facebook dạng video Kênh cộng đồng</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="386">
                            Vchat gói Cơ bản</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="387">
                            Vchat gói Chuyên nghiệp</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="389">
                            Wemarry - Quản trị fanpage - Gói Basic</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="390">
                            Wemarry - Dịch vụ facebook ads</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="391">
                            Wemarry - Dịch vụ quảng cáo khác - Gói chụp ảnh sản phẩm 01</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="400">
                            Mini Combo - WeSave</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="401">
                            Big Combo - WeSave</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="402">
                            Extra Combo - WeSave</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="412">
                            Wemarry - Quản trị fanpage - Gói business</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="436">
                            Wehelp</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="465">
                            Chạy quảng cáo zalo</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="466">
                            Gói phát triển website</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="467">
                            CRM Starter - weSave</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="468">
                            CRM Premium - weSave</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="469">
                            Wemarry - thiết kế website</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="470">
                            Wemarry - dịch vụ GA</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="480">
                            Tư vấn và tối ưu quy trình Marketing Insight</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="482">
                            CRM Chatbot - WeSave</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="487">
                            Wemarry - Dịch vụ SEO</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="488">
                            wePOS - Phần cứng</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="499">
                            Phần mềm quản lý fanpage chốt sale – Gói 1</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="500">
                            Phần mềm quản lý fanpage chốt sale – Gói 2</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="501">
                            Phần mềm quản lý fanpage chốt sale – Gói 3</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="516">
                            9Houz - DV Content</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="517">
                            9Houz - DV Banner</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="518">
                            9Houz - DV Seo Banner</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="572">
                            Vchat gói nâng cao</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="577">
                            Vchat gói Forum</label></a></li>
                    <li class="multiselect-item group"><label class="multiselect-group">VNP group</label></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="392">
                            Wemarry - Quản trị fanpage - Gói Standard</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="393">
                            Wemarry - Quản trị fanpage - Gói Business</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="394">
                            Wemarry - Dịch vụ quảng cáo khác - Gói chụp ảnh sản phẩm 02</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="395">
                            Wemarry - Gói chụp ảnh không gian</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="396">
                            Wemarry - Gói quay phim</label></a></li>
                    <li class="multiselect-item group"><label class="multiselect-group">Easycare.vn</label></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="258">
                            Dịch vụ trả theo tháng</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="259">
                            Dịch vụ trả theo thời gian</label></a></li>
                    <li class="multiselect-item group"><label class="multiselect-group">Vật giá - Hà Nội</label>
                    </li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="274">
                            Phần mềm QL bán thuốc</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="277">
                            Zopzep - Quản lý nhà hàng</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="551">
                            BA - Phát triển phần mềm</label></a></li>
                    <li class="multiselect-item group"><label class="multiselect-group">Công ty cổ phần TMDT Bảo
                        Kim</label></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="504">
                            Cổng thanh toán</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="505">
                            Dịch vụ hỗ trợ Thu hộ</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="506">
                            Dịch vụ hỗ trợ Chi hộ</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="507">
                            Xác thực tài khoản</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="540">
                            Dịch vụ trên ứng dụng Panama</label></a></li>
                    <li class="multiselect-item group"><label class="multiselect-group">Công ty cổ phần
                        WeHelp</label></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="408">
                            Bizshare - Gói chăm sóc fanpage - Nội dung</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="409">
                            Bizshare - Chạy quảng cáo</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="410">
                            Bizshare - Xây dựng nội dung trên Website và Fanpage</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="411">
                            Bizshare - Chạy chiến dịch quảng cáo trên Facebook Ads và Google Adword</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="437">
                            Bizshare - Gói quảng cáo Media</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="472">
                            BizShare - Dịch vụ SEO tổng thể</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="483">
                            Bizshare - Dịch vụ quản lý ngân sách chạy quảng cáo</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="484">
                            Bizshare - Chăm sóc website, nội dung</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="485">
                            Bizshare - Xây dựng landing page bán hàng</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="486">
                            Bizshare - Tối ưu kênh bán hàng sàn TMĐT Shopee</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="490">
                            Bizshare - Gói chăm sóc fanpage Facebook và Instagram</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="498">
                            BizShare - Thiết kế ấn phẩm truyền thông</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="519">
                            Bizshare - Thiết kế landing page</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="521">
                            Bizshare - Thiết kế website</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="522">
                            Bizshare - Thiết kế Brochure</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="523">
                            Bizshare - Thiết kế Logo</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="529">
                            Bizshare - Quảng cáo Facebook và Instagram</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="530">
                            Bizshare - Định hướng tư vấn truyền thông và tư vấn chiến lược</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="531">
                            Bizshare - Gói Quản trị kênh Thương mại điện tử</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="533">
                            SEO lead</label></a></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="535">
                            Facebook Ads</label></a></li>
                    <li class="multiselect-item group"><label class="multiselect-group">123job.vn</label></li>
                    <li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="584">
                            123job - Gói mở hồ sơ ứng viên</label></a></li>
                    </ul>
                </div>
                </div>
                <div class="form-group"><input name="submit" type="submit" id="btnFilterCrmContact"
                    class="form-control btn btn-primary" value="Lọc"></div>
            </form>
            </div>
            <div class="alert alert-info alert-dismissable">
            <a href="https://erp.nhanh.vn/crm/report/customer" class="close">×</a>
            <strong>Chú ý!</strong> Thống kê này chỉ tính theo những khách hàng có hợp đồng đã được duyệt
            </div>
            <div id="page-crm-contact">
            <div class="row">
                <div class="col-md-12">
                <div class="widget">
                    <div class="widget-header">
                    <h3>
                        <i class="fa fa-bar-chart-o"></i> Biểu đồ: Thống kê theo khu vực
                    </h3>
                    </div>
                    <div class="widget-content col-md-12">
                    <div class="col-md-6">
                        <div id="piechart-location" style="width: 550px; height: 400px;">
                        <div style="position: relative;">
                            <div dir="ltr" style="position: relative; width: 550px; height: 400px;">
                            <div aria-label="A chart."
                                style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;"><svg
                                width="550" height="400" aria-label="A chart." style="overflow: hidden;">
                                <defs id="_ABSTRACT_RENDERER_ID_0"></defs>
                                <rect x="0" y="0" width="550" height="400" stroke="none" stroke-width="0"
                                    fill="#ffffff"></rect>
                                <g>
                                    <rect x="334" y="77" width="111" height="247" stroke="none" stroke-width="0"
                                    fill-opacity="0" fill="#ffffff"></rect>
                                    <g column-id="Hà Nội">
                                    <rect x="334" y="77" width="111" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="351" y="87.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">Hà Nội</text>
                                    </g>
                                    <circle cx="340" cy="83" r="6" stroke="none" stroke-width="0" fill="#3366cc">
                                    </circle>
                                    </g>
                                    <g column-id="Hồ Chí Minh">
                                    <rect x="334" y="96" width="111" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="351" y="106.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">Hồ Chí
                                        Minh</text></g>
                                    <circle cx="340" cy="102" r="6" stroke="none" stroke-width="0" fill="#dc3912">
                                    </circle>
                                    </g>
                                    <g column-id="Hải Dương">
                                    <rect x="334" y="115" width="111" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="351" y="125.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">Hải
                                        Dương</text></g>
                                    <circle cx="340" cy="121" r="6" stroke="none" stroke-width="0" fill="#ff9900">
                                    </circle>
                                    </g>
                                    <g column-id="Bến Tre">
                                    <rect x="334" y="134" width="111" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="351" y="144.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">Bến
                                        Tre</text></g>
                                    <circle cx="340" cy="140" r="6" stroke="none" stroke-width="0" fill="#109618">
                                    </circle>
                                    </g>
                                    <g column-id="Đồng Nai">
                                    <rect x="334" y="153" width="111" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="351" y="163.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">Đồng
                                        Nai</text></g>
                                    <circle cx="340" cy="159" r="6" stroke="none" stroke-width="0" fill="#990099">
                                    </circle>
                                    </g>
                                    <g column-id="Bình Định">
                                    <rect x="334" y="172" width="111" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="351" y="182.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">Bình
                                        Định</text></g>
                                    <circle cx="340" cy="178" r="6" stroke="none" stroke-width="0" fill="#0099c6">
                                    </circle>
                                    </g>
                                    <g column-id="Bắc Ninh">
                                    <rect x="334" y="191" width="111" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="351" y="201.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">Bắc
                                        Ninh</text></g>
                                    <circle cx="340" cy="197" r="6" stroke="none" stroke-width="0" fill="#dd4477">
                                    </circle>
                                    </g>
                                    <g column-id="Phú Thọ">
                                    <rect x="334" y="210" width="111" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="351" y="220.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">Phú
                                        Thọ</text></g>
                                    <circle cx="340" cy="216" r="6" stroke="none" stroke-width="0" fill="#66aa00">
                                    </circle>
                                    </g>
                                    <g column-id="Hải Phòng">
                                    <rect x="334" y="229" width="111" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="351" y="239.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">Hải
                                        Phòng</text></g>
                                    <circle cx="340" cy="235" r="6" stroke="none" stroke-width="0" fill="#b82e2e">
                                    </circle>
                                    </g>
                                    <g column-id="Đà Nẵng">
                                    <rect x="334" y="248" width="111" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="351" y="258.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">Đà
                                        Nẵng</text></g>
                                    <circle cx="340" cy="254" r="6" stroke="none" stroke-width="0" fill="#316395">
                                    </circle>
                                    </g>
                                    <g column-id="Vĩnh Phúc">
                                    <rect x="334" y="267" width="111" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="351" y="277.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">Vĩnh
                                        Phúc</text></g>
                                    <circle cx="340" cy="273" r="6" stroke="none" stroke-width="0" fill="#994499">
                                    </circle>
                                    </g>
                                    <g column-id="Long An">
                                    <rect x="334" y="286" width="111" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="351" y="296.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">Long
                                        An</text></g>
                                    <circle cx="340" cy="292" r="6" stroke="none" stroke-width="0" fill="#22aa99">
                                    </circle>
                                    </g>
                                    <path d="M346,324L340,312L334,324Z" stroke="none" stroke-width="0"
                                    fill="#cccccc"></path>
                                    <g><text text-anchor="middle" x="359.5" y="322.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#0011cc">1/3</text></g>
                                    <path d="M373,312L385,312L379,324Z" stroke="none" stroke-width="0"
                                    fill="#0011cc"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L207.80835034465872,96.02287548333092A105,105,0,0,1,210,96L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#990099"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L205.61765564255856,96.09149196593823A105,105,0,0,1,207.80835034465872,96.02287548333092L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#109618"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L204.52296471946036,96.14294451713933A105,105,0,0,1,205.61765564255856,96.09149196593823L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#ff9900"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L203.42887043084514,96.20581955000851A105,105,0,0,1,204.52296471946036,96.14294451713933L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#dc3912"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L201.24294841465402,96.36580842032758A105,105,0,0,1,203.42887043084514,96.20581955000851L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#3366cc"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L200.15135880795648,96.46290482957552A105,105,0,0,1,201.2429484146539,96.3658084203276L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#743411"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L199.06084205155943,96.57138886598621A105,105,0,0,1,200.15135880795648,96.46290482957552L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#0c5922"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L196.88350213656585,96.8224713107547A105,105,0,0,1,199.06084205155943,96.57138886598621L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#bea413"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L195.7969161639666,96.96504236773772A105,105,0,0,1,196.88350213656585,96.8224713107547L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#668d1c"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L193.62850400557946,97.28416649852988A105,105,0,0,1,195.7969161639666,96.96504236773772L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#2a778d"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L191.46722529259654,97.64848205447282A105,105,0,0,1,193.62850400557946,97.28416649852988L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#a9c413"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L190.3895553982474,97.84753777770696A105,105,0,0,1,191.46722529259654,97.64848205447282L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#9c5935"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L189.31402174492592,98.0578302947203A105,105,0,0,1,190.38955539824732,97.84753777770698L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#f4359e"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L186.10140861113774,98.75589342349264A105,105,0,0,1,189.31402174492592,98.0578302947203L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#b91383"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L185.03558902366126,99.01089183346852A105,105,0,0,1,186.10140861113774,98.75589342349264L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#16d620"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L183.97248890532705,99.27700030859944A105,105,0,0,1,185.03558902366126,99.01089183346852L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#b77322"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L182.91222406371284,99.55418986066748A105,105,0,0,1,183.97248890532705,99.27700030859944L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#3b3eac"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L177.6574599480514,101.1052548780062A105,105,0,0,1,182.91222406371284,99.55418986066748L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#5574a6"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L175.57941773394492,101.80209923357383A105,105,0,0,1,177.6574599480514,101.1052548780062L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#329262"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L173.51637337614068,102.54216644486421A105,105,0,0,1,175.57941773394492,101.80209923357383L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#651067"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L172.49075657088105,102.92830858308247A105,105,0,0,1,173.51637337614068,102.54216644486421L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#8b0707"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L170.45189231735912,103.7325996095185A105,105,0,0,1,172.49075657088105,102.92830858308247L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#e67300"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L169.43886697040853,104.15066088322654A105,105,0,0,1,170.45189231735912,103.7325996095185L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#6633cc"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L167.4261815878104,105.01838725148495A105,105,0,0,1,169.43886697040853,104.15066088322654L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#aaaa11"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L166.42674080170968,105.46795782127022A105,105,0,0,1,167.4261815878104,105.01838725148495L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#22aa99"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L160.53354843445442,108.38212823912691A105,105,0,0,1,166.42674080170968,105.46795782127022L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#994499"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L157.65825952896452,109.97614486046658A105,105,0,0,1,160.53354843445442,108.38212823912691L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#316395"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L151.15357749753818,114.03967250141157A105,105,0,0,1,157.65825952896452,109.97614486046658L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#b82e2e"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L150.24917814272598,114.65858880363199A105,105,0,0,1,151.15357749753818,114.03967250141157L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#66aa00"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L142.4140673343558,120.64365796208112A105,105,0,0,1,150.24917814272598,114.65858880363199L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#dd4477"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L139.93152482166488,122.79892081190287A105,105,0,0,1,142.4140673343558,120.64365796208112L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#0099c6"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L135.9477708660608,126.56031058437596A105,105,0,0,1,139.93152482166488,122.79892081190287L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#990099"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L135.17487756679114,127.33724785988984A105,105,0,0,1,135.9477708660608,126.56031058437598L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#109618"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L131.4343285064395,131.34057664058696A105,105,0,0,1,135.17487756679114,127.33724785988984L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#ff9900"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L126.55910790454924,264.7386658655117A105,105,0,0,1,131.4343285064395,131.34057664058696L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#dc3912"></path><text
                                    text-anchor="start" x="117.41371471112615" y="202.4375930015059"
                                    font-family="Arial" font-size="12" stroke="none" stroke-width="0"
                                    fill="#ffffff">21.9%</text>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L210,96A105,105,0,1,1,126.55910790454924,264.7386658655117L210,201A0,0,0,1,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#3366cc"></path><text
                                    text-anchor="start" x="260.29814521209425" y="238.47878197959642"
                                    font-family="Arial" font-size="12" stroke="none" stroke-width="0"
                                    fill="#ffffff">64.6%</text>
                                </g>
                                <g></g>
                                </svg>
                                <div aria-label="A tabular representation of the data in the chart."
                                style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;">
                                <table>
                                    <thead>
                                    <tr>
                                        <th>Tỉnh/TP</th>
                                        <th>Số lượng khách hàng</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Hà Nội</td>
                                        <td>389</td>
                                    </tr>
                                    <tr>
                                        <td>Hồ Chí Minh</td>
                                        <td>132</td>
                                    </tr>
                                    <tr>
                                        <td>Hải Dương</td>
                                        <td>5</td>
                                    </tr>
                                    <tr>
                                        <td>Bến Tre</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>Đồng Nai</td>
                                        <td>5</td>
                                    </tr>
                                    <tr>
                                        <td>Bình Định</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Bắc Ninh</td>
                                        <td>9</td>
                                    </tr>
                                    <tr>
                                        <td>Phú Thọ</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>Hải Phòng</td>
                                        <td>7</td>
                                    </tr>
                                    <tr>
                                        <td>Đà Nẵng</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Vĩnh Phúc</td>
                                        <td>6</td>
                                    </tr>
                                    <tr>
                                        <td>Long An</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>Bắc Giang</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>Hoà Bình</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>Nam Định</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>Lâm Đồng</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>Quảng Ninh</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>Thanh Hoá</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>Bà Rịa - Vũng Tàu</td>
                                        <td>5</td>
                                    </tr>
                                    <tr>
                                        <td>Bình Thuận</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>Tiền Giang</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>Tuyên Quang</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>Thái Bình</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Nghệ An</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>Hưng Yên</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>Quảng Nam</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>Kiên Giang</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>Cần Thơ</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>Gia Lai</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>Khánh Hòa</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>Hà Giang</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>Bình Dương</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>Hà Nam</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>Ninh Thuận</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>Phú Yên</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>An Giang</td>
                                        <td>2</td>
                                    </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            </div>
                            <div aria-hidden="true"
                            style="display: none; position: absolute; top: 410px; left: 560px; white-space: nowrap; font-family: Arial; font-size: 12px;">
                            0/0</div>
                            <div></div>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="padding-top: 35px">
                        <table cellspacing="0" cellpadding="0" class="table table-bordered" id="table-location">
                        <thead>
                            <tr class="even">
                            <th>Tỉnh/TP</th>
                            <th>Số lượng khách hàng</th>
                            <th>Tỷ lệ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                            <td>Hà Nội</td>
                            <td>389</td>
                            <td>64.62%</td>
                            </tr>
                            <tr class="">
                            <td>Hồ Chí Minh</td>
                            <td>132</td>
                            <td>21.93%</td>
                            </tr>
                            <tr class="">
                            <td>Hải Dương</td>
                            <td>5</td>
                            <td>0.83%</td>
                            </tr>
                            <tr class="">
                            <td>Bến Tre</td>
                            <td>1</td>
                            <td>0.17%</td>
                            </tr>
                            <tr class="">
                            <td>Đồng Nai</td>
                            <td>5</td>
                            <td>0.83%</td>
                            </tr>
                            <tr class="">
                            <td>Bình Định</td>
                            <td>3</td>
                            <td>0.5%</td>
                            </tr>
                            <tr class="">
                            <td>Bắc Ninh</td>
                            <td>9</td>
                            <td>1.5%</td>
                            </tr>
                            <tr class="">
                            <td>Phú Thọ</td>
                            <td>1</td>
                            <td>0.17%</td>
                            </tr>
                            <tr class="">
                            <td>Hải Phòng</td>
                            <td>7</td>
                            <td>1.16%</td>
                            </tr>
                            <tr class="">
                            <td>Đà Nẵng</td>
                            <td>3</td>
                            <td>0.5%</td>
                            </tr>
                            <tr class="">
                            <td>Vĩnh Phúc</td>
                            <td>6</td>
                            <td>1%</td>
                            </tr>
                            <tr class="">
                            <td>Long An</td>
                            <td>1</td>
                            <td>0.17%</td>
                            </tr>
                            <tr class="">
                            <td>Bắc Giang</td>
                            <td>2</td>
                            <td>0.33%</td>
                            </tr>
                            <tr class="">
                            <td>Hoà Bình</td>
                            <td>1</td>
                            <td>0.17%</td>
                            </tr>
                            <tr class="">
                            <td>Nam Định</td>
                            <td>2</td>
                            <td>0.33%</td>
                            </tr>
                            <tr class="">
                            <td>Lâm Đồng</td>
                            <td>1</td>
                            <td>0.17%</td>
                            </tr>
                            <tr class="">
                            <td>Quảng Ninh</td>
                            <td>2</td>
                            <td>0.33%</td>
                            </tr>
                            <tr class="">
                            <td>Thanh Hoá</td>
                            <td>2</td>
                            <td>0.33%</td>
                            </tr>
                            <tr class="">
                            <td>Bà Rịa - Vũng Tàu</td>
                            <td>5</td>
                            <td>0.83%</td>
                            </tr>
                            <tr class="">
                            <td>Bình Thuận</td>
                            <td>1</td>
                            <td>0.17%</td>
                            </tr>
                            <tr class="">
                            <td>Tiền Giang</td>
                            <td>1</td>
                            <td>0.17%</td>
                            </tr>
                            <tr class="">
                            <td>Tuyên Quang</td>
                            <td>1</td>
                            <td>0.17%</td>
                            </tr>
                            <tr class="">
                            <td>Thái Bình</td>
                            <td>3</td>
                            <td>0.5%</td>
                            </tr>
                            <tr class="">
                            <td>Nghệ An</td>
                            <td>1</td>
                            <td>0.17%</td>
                            </tr>
                            <tr class="">
                            <td>Hưng Yên</td>
                            <td>1</td>
                            <td>0.17%</td>
                            </tr>
                            <tr class="">
                            <td>Quảng Nam</td>
                            <td>2</td>
                            <td>0.33%</td>
                            </tr>
                            <tr class="">
                            <td>Kiên Giang</td>
                            <td>2</td>
                            <td>0.33%</td>
                            </tr>
                            <tr class="">
                            <td>Cần Thơ</td>
                            <td>1</td>
                            <td>0.17%</td>
                            </tr>
                            <tr class="">
                            <td>Gia Lai</td>
                            <td>2</td>
                            <td>0.33%</td>
                            </tr>
                            <tr class="">
                            <td>Khánh Hòa</td>
                            <td>1</td>
                            <td>0.17%</td>
                            </tr>
                            <tr class="">
                            <td>Hà Giang</td>
                            <td>1</td>
                            <td>0.17%</td>
                            </tr>
                            <tr class="">
                            <td>Bình Dương</td>
                            <td>2</td>
                            <td>0.33%</td>
                            </tr>
                            <tr class="">
                            <td>Hà Nam</td>
                            <td>1</td>
                            <td>0.17%</td>
                            </tr>
                            <tr class="">
                            <td>Ninh Thuận</td>
                            <td>1</td>
                            <td>0.17%</td>
                            </tr>
                            <tr class="">
                            <td>Phú Yên</td>
                            <td>2</td>
                            <td>0.33%</td>
                            </tr>
                            <tr class="">
                            <td>An Giang</td>
                            <td>2</td>
                            <td>0.33%</td>
                            </tr>

                            <tr class="">
                            <td><strong>Tổng</strong></td>
                            <td><strong>602</strong></td>
                            <td><strong>100%</strong></td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                <div class="widget">
                    <div class="widget-header">
                    <h3>
                        <i class="fa fa-bar-chart-o"></i> Biểu đồ: Thống kê theo thời hạn
                        sản phẩm
                    </h3>
                    </div>
                    <div class="widget-content col-md-12">
                    <div class="col-md-6">
                        <div id="flot-placeholder-timesigned" style="width: 550px; height: 400px;">
                        <div style="position: relative;">
                            <div dir="ltr" style="position: relative; width: 550px; height: 400px;">
                            <div aria-label="A chart."
                                style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;"><svg
                                width="550" height="400" aria-label="A chart." style="overflow: hidden;">
                                <defs id="_ABSTRACT_RENDERER_ID_1"></defs>
                                <rect x="0" y="0" width="550" height="400" stroke="none" stroke-width="0"
                                    fill="#ffffff"></rect>
                                <g>
                                    <rect x="334" y="77" width="111" height="164" stroke="none" stroke-width="0"
                                    fill-opacity="0" fill="#ffffff"></rect>
                                    <g column-id="12 tháng">
                                    <rect x="334" y="77" width="111" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="351" y="87.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">12
                                        tháng</text></g>
                                    <circle cx="340" cy="83" r="6" stroke="none" stroke-width="0" fill="#3366cc">
                                    </circle>
                                    </g>
                                    <g column-id="24 tháng">
                                    <rect x="334" y="96" width="111" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="351" y="106.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">24
                                        tháng</text></g>
                                    <circle cx="340" cy="102" r="6" stroke="none" stroke-width="0" fill="#dc3912">
                                    </circle>
                                    </g>
                                    <g column-id="1 tháng">
                                    <rect x="334" y="115" width="111" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="351" y="125.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">1
                                        tháng</text></g>
                                    <circle cx="340" cy="121" r="6" stroke="none" stroke-width="0" fill="#ff9900">
                                    </circle>
                                    </g>
                                    <g column-id="6 tháng">
                                    <rect x="334" y="134" width="111" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="351" y="144.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">6
                                        tháng</text></g>
                                    <circle cx="340" cy="140" r="6" stroke="none" stroke-width="0" fill="#109618">
                                    </circle>
                                    </g>
                                    <g column-id="48 tháng">
                                    <rect x="334" y="153" width="111" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="351" y="163.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">48
                                        tháng</text></g>
                                    <circle cx="340" cy="159" r="6" stroke="none" stroke-width="0" fill="#990099">
                                    </circle>
                                    </g>
                                    <g column-id="3 tháng">
                                    <rect x="334" y="172" width="111" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="351" y="182.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">3
                                        tháng</text></g>
                                    <circle cx="340" cy="178" r="6" stroke="none" stroke-width="0" fill="#0099c6">
                                    </circle>
                                    </g>
                                    <g column-id="36 tháng">
                                    <rect x="334" y="191" width="111" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="351" y="201.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">36
                                        tháng</text></g>
                                    <circle cx="340" cy="197" r="6" stroke="none" stroke-width="0" fill="#b82e2e">
                                    </circle>
                                    </g>
                                    <g column-id="33 tháng">
                                    <rect x="334" y="210" width="111" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="351" y="220.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">33
                                        tháng</text></g>
                                    <circle cx="340" cy="216" r="6" stroke="none" stroke-width="0" fill="#316395">
                                    </circle>
                                    </g>
                                    <g>
                                    <rect x="334" y="229" width="111" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="351" y="239.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">Other</text>
                                    </g>
                                    <circle cx="340" cy="235" r="6" stroke="none" stroke-width="0" fill="#cccccc">
                                    </circle>
                                    </g>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L210,96A105,105,0,0,1,305.637813197321,244.34061244184636L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#3366cc"></path><text
                                    text-anchor="start" x="256.34377448491506" y="164.36114965632578"
                                    font-family="Arial" font-size="12" stroke="none" stroke-width="0"
                                    fill="#ffffff">31.8%</text>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L305.637813197321,244.34061244184636A105,105,0,0,1,257.2794996779627,294.75312746890916L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#dc3912"></path><text
                                    text-anchor="start" x="248.048264552442" y="258.00516622696796"
                                    font-family="Arial" font-size="12" stroke="none" stroke-width="0"
                                    fill="#ffffff">10.8%</text>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L207.98464171667857,96.01934306268679A105,105,0,0,1,210,96L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#cccccc"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L206.64143622107827,96.05372779682494A105,105,0,0,1,207.98464171667857,96.01934306268679L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#316395"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L200.6069905157404,96.42098024542106A105,105,0,0,1,206.64143622107827,96.05372779682494L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#b82e2e"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L117.96838605862114,150.4511915536578A105,105,0,0,1,200.6069905157404,96.42098024542106L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#0099c6"></path><text
                                    text-anchor="start" x="150.30026111528323" y="139.89122650685516"
                                    font-family="Arial" font-size="12" stroke="none" stroke-width="0"
                                    fill="#ffffff">15.6%</text>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L117.01511190112845,152.2269481656075A105,105,0,0,1,117.96838605862114,150.4511915536578L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#990099"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L105.19391417365983,194.62156964749013A105,105,0,0,1,117.01511190112842,152.22694816560758L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#109618"></path><text
                                    text-anchor="start" x="121.01979648070011" y="184.1533110776204"
                                    font-family="Arial" font-size="12" stroke="none" stroke-width="0"
                                    fill="#ffffff">6.7%</text>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L257.2794996779627,294.75312746890916A105,105,0,0,1,105.19391417365983,194.62156964749013L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#ff9900"></path><text
                                    text-anchor="start" x="150.10777676504654" y="270.34718262850964"
                                    font-family="Arial" font-size="12" stroke="none" stroke-width="0"
                                    fill="#ffffff">33.4%</text>
                                </g>
                                <g></g>
                                </svg>
                                <div aria-label="A tabular representation of the data in the chart."
                                style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;">
                                <table>
                                    <thead>
                                    <tr>
                                        <th>Thời gian</th>
                                        <th>Số lượng hợp đồng</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>12 tháng</td>
                                        <td>312</td>
                                    </tr>
                                    <tr>
                                        <td>24 tháng</td>
                                        <td>106</td>
                                    </tr>
                                    <tr>
                                        <td>1 tháng</td>
                                        <td>328</td>
                                    </tr>
                                    <tr>
                                        <td>6 tháng</td>
                                        <td>66</td>
                                    </tr>
                                    <tr>
                                        <td>48 tháng</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>3 tháng</td>
                                        <td>153</td>
                                    </tr>
                                    <tr>
                                        <td>83 tháng</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>9 tháng</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>36 tháng</td>
                                        <td>9</td>
                                    </tr>
                                    <tr>
                                        <td>33 tháng</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>50 tháng</td>
                                        <td>1</td>
                                    </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            </div>
                            <div aria-hidden="true"
                            style="display: none; position: absolute; top: 410px; left: 560px; white-space: nowrap; font-family: Arial; font-size: 12px;">
                            Other</div>
                            <div></div>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="padding-top: 35px">
                        <table cellspacing="0" cellpadding="0" class="table table-bordered" id="table-timesign">
                        <thead>
                            <tr class="even">
                            <th>Thời gian</th>
                            <th>Số lượng hợp đồng</th>
                            <th>Tỷ lệ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                            <td>12 tháng</td>
                            <td>312</td>
                            <td>31.77%</td>
                            </tr>
                            <tr class="">
                            <td>24 tháng</td>
                            <td>106</td>
                            <td>10.79%</td>
                            </tr>
                            <tr class="">
                            <td>1 tháng</td>
                            <td>328</td>
                            <td>33.4%</td>
                            </tr>
                            <tr class="">
                            <td>6 tháng</td>
                            <td>66</td>
                            <td>6.72%</td>
                            </tr>
                            <tr class="">
                            <td>48 tháng</td>
                            <td>3</td>
                            <td>0.31%</td>
                            </tr>
                            <tr class="">
                            <td>3 tháng</td>
                            <td>153</td>
                            <td>15.58%</td>
                            </tr>
                            <tr class="">
                            <td>83 tháng</td>
                            <td>1</td>
                            <td>0.1%</td>
                            </tr>
                            <tr class="">
                            <td>9 tháng</td>
                            <td>1</td>
                            <td>0.1%</td>
                            </tr>
                            <tr class="">
                            <td>36 tháng</td>
                            <td>9</td>
                            <td>0.92%</td>
                            </tr>
                            <tr class="">
                            <td>33 tháng</td>
                            <td>2</td>
                            <td>0.2%</td>
                            </tr>
                            <tr class="">
                            <td>50 tháng</td>
                            <td>1</td>
                            <td>0.1%</td>
                            </tr>

                            <tr class="">
                            <td><strong>Tổng</strong></td>
                            <td><strong>982</strong></td>
                            <td><strong>100%</strong></td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                <div class="widget">
                    <div class="widget-header">
                    <h3>
                        <i class="fa fa-bar-chart-o"></i> Biểu đồ: Thống kê theo giá trị
                        hợp đồng
                    </h3>
                    </div>
                    <div class="widget-content col-md-12">
                    <div class="col-md-6">
                        <div id="flot-placeholder-valueContract" style="width: 550px; height: 400px;">
                        <div style="position: relative;">
                            <div dir="ltr" style="position: relative; width: 550px; height: 400px;">
                            <div aria-label="A chart."
                                style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;"><svg
                                width="550" height="400" aria-label="A chart." style="overflow: hidden;">
                                <defs id="_ABSTRACT_RENDERER_ID_2"></defs>
                                <rect x="0" y="0" width="550" height="400" stroke="none" stroke-width="0"
                                    fill="#ffffff"></rect>
                                <g>
                                    <rect x="334" y="77" width="111" height="145" stroke="none" stroke-width="0"
                                    fill-opacity="0" fill="#ffffff"></rect>
                                    <g column-id="Miễn phí">
                                    <rect x="334" y="77" width="111" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="351" y="87.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">Miễn
                                        phí</text></g>
                                    <circle cx="340" cy="83" r="6" stroke="none" stroke-width="0" fill="#3366cc">
                                    </circle>
                                    </g>
                                    <g column-id="0 tr - 2.5 tr">
                                    <rect x="334" y="96" width="111" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="351" y="106.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">0 tr - 2.5
                                        tr</text></g>
                                    <circle cx="340" cy="102" r="6" stroke="none" stroke-width="0" fill="#dc3912">
                                    </circle>
                                    </g>
                                    <g column-id="2.5 tr - 5 tr">
                                    <rect x="334" y="115" width="111" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="351" y="125.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">2.5 tr - 5
                                        tr</text></g>
                                    <circle cx="340" cy="121" r="6" stroke="none" stroke-width="0" fill="#ff9900">
                                    </circle>
                                    </g>
                                    <g column-id="5 tr - 10 tr">
                                    <rect x="334" y="134" width="111" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="351" y="144.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">5 tr - 10
                                        tr</text></g>
                                    <circle cx="340" cy="140" r="6" stroke="none" stroke-width="0" fill="#109618">
                                    </circle>
                                    </g>
                                    <g column-id="10 tr - 20 tr">
                                    <rect x="334" y="153" width="111" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="351" y="163.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">10 tr - 20
                                        tr</text></g>
                                    <circle cx="340" cy="159" r="6" stroke="none" stroke-width="0" fill="#990099">
                                    </circle>
                                    </g>
                                    <g column-id="20 tr - 30 tr">
                                    <rect x="334" y="172" width="111" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="351" y="182.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">20 tr - 30
                                        tr</text></g>
                                    <circle cx="340" cy="178" r="6" stroke="none" stroke-width="0" fill="#0099c6">
                                    </circle>
                                    </g>
                                    <g column-id="30 tr - 40 tr">
                                    <rect x="334" y="191" width="111" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="351" y="201.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">30 tr - 40
                                        tr</text></g>
                                    <circle cx="340" cy="197" r="6" stroke="none" stroke-width="0" fill="#dd4477">
                                    </circle>
                                    </g>
                                    <g>
                                    <rect x="334" y="210" width="111" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="351" y="220.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">Other</text>
                                    </g>
                                    <circle cx="340" cy="216" r="6" stroke="none" stroke-width="0" fill="#cccccc">
                                    </circle>
                                    </g>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L210,96A105,105,0,0,1,254.33143390586764,105.81741772861126L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#3366cc"></path><text
                                    text-anchor="start" x="214.54557871883074" y="123.71356411823571"
                                    font-family="Arial" font-size="12" stroke="none" stroke-width="0"
                                    fill="#ffffff">6.9%</text>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L209.13648295759648,96.00355082995674A105,105,0,0,1,210,96L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#cccccc"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L205.68358278205406,96.0887587414932A105,105,0,0,1,209.13648295759648,96.00355082995674L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#dd4477"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L195.36782191015575,97.0245251785447A105,105,0,0,1,205.68358278205406,96.0887587414932L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#0099c6"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L152.11464183067903,113.39700170879179A105,105,0,0,1,195.36782191015575,97.0245251785447L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#990099"></path><text
                                    text-anchor="start" x="167.46575951842573" y="128.49668454858892"
                                    font-family="Arial" font-size="12" stroke="none" stroke-width="0"
                                    fill="#ffffff">7.1%</text>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L105.00355082995674,200.13648295759657A105,105,0,0,1,152.11464183067903,113.39700170879179L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#109618"></path><text
                                    text-anchor="start" x="126.958176481507" y="169.33049383234305"
                                    font-family="Arial" font-size="12" stroke="none" stroke-width="0"
                                    fill="#ffffff">15.6%</text>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L181.02118734164475,301.92189265423013A105,105,0,0,1,105.00355082995674,200.13648295759657L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#ff9900"></path><text
                                    text-anchor="start" x="132.40089630149373" y="250.45796626075276"
                                    font-family="Arial" font-size="12" stroke="none" stroke-width="0"
                                    fill="#ffffff">20.7%</text>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L254.33143390586764,105.81741772861126A105,105,0,0,1,181.02118734164475,301.92189265423013L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#dc3912"></path><text
                                    text-anchor="start" x="263.2279330879471" y="231.45349111653832"
                                    font-family="Arial" font-size="12" stroke="none" stroke-width="0"
                                    fill="#ffffff">47.5%</text>
                                </g>
                                <g></g>
                                </svg>
                                <div aria-label="A tabular representation of the data in the chart."
                                style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;">
                                <table>
                                    <thead>
                                    <tr>
                                        <th>Khoảng Giá</th>
                                        <th>Số lượng hợp đồng</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Miễn phí</td>
                                        <td>53</td>
                                    </tr>
                                    <tr>
                                        <td>0 tr - 2.5 tr</td>
                                        <td>363</td>
                                    </tr>
                                    <tr>
                                        <td>2.5 tr - 5 tr</td>
                                        <td>158</td>
                                    </tr>
                                    <tr>
                                        <td>5 tr - 10 tr</td>
                                        <td>119</td>
                                    </tr>
                                    <tr>
                                        <td>10 tr - 20 tr</td>
                                        <td>54</td>
                                    </tr>
                                    <tr>
                                        <td>20 tr - 30 tr</td>
                                        <td>12</td>
                                    </tr>
                                    <tr>
                                        <td>30 tr - 40 tr</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td>50 tr - 60 tr</td>
                                        <td>1</td>
                                    </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            </div>
                            <div aria-hidden="true"
                            style="display: none; position: absolute; top: 410px; left: 560px; white-space: nowrap; font-family: Arial; font-size: 12px;">
                            Other</div>
                            <div></div>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="padding-top: 35px">
                        <table cellspacing="0" cellpadding="0" class="table table-bordered"
                        id="table-valueContract">
                        <thead>
                            <tr class="even">
                            <th>Khoảng Giá</th>
                            <th>Số lượng hợp đồng</th>
                            <th>Tỷ lệ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                            <td>Miễn phí</td>
                            <td>53</td>
                            <td>6.94%</td>
                            </tr>
                            <tr class="">
                            <td>0 tr - 2.5 tr</td>
                            <td>363</td>
                            <td>47.51%</td>
                            </tr>
                            <tr class="">
                            <td>2.5 tr - 5 tr</td>
                            <td>158</td>
                            <td>20.68%</td>
                            </tr>
                            <tr class="">
                            <td>5 tr - 10 tr</td>
                            <td>119</td>
                            <td>15.58%</td>
                            </tr>
                            <tr class="">
                            <td>10 tr - 20 tr</td>
                            <td>54</td>
                            <td>7.07%</td>
                            </tr>
                            <tr class="">
                            <td>20 tr - 30 tr</td>
                            <td>12</td>
                            <td>1.57%</td>
                            </tr>
                            <tr class="">
                            <td>30 tr - 40 tr</td>
                            <td>4</td>
                            <td>0.52%</td>
                            </tr>
                            <tr class="">
                            <td>50 tr - 60 tr</td>
                            <td>1</td>
                            <td>0.13%</td>
                            </tr>

                            <tr class="">
                            <td><strong>Tổng</strong></td>
                            <td><strong>764</strong></td>
                            <td><strong>100%</strong></td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                <div class="widget">
                    <div class="widget-header">
                    <h3>
                        <i class="fa fa-bar-chart-o"></i> Biểu đồ: Thống kê theo số cửa
                        hàng
                    </h3>
                    </div>
                    <div class="widget-content col-md-12">
                    <div class="col-md-6">
                        <div id="flot-placeholder-sizeCompany-Branchs"
                        style="width: 550px; height: 400px; margin: 0 auto">
                        <div style="position: relative;">
                            <div dir="ltr" style="position: relative; width: 550px; height: 400px;">
                            <div aria-label="A chart."
                                style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;"><svg
                                width="550" height="400" aria-label="A chart." style="overflow: hidden;">
                                <defs id="_ABSTRACT_RENDERER_ID_3"></defs>
                                <rect x="0" y="0" width="550" height="400" stroke="none" stroke-width="0"
                                    fill="#ffffff"></rect>
                                <g>
                                    <rect x="334" y="77" width="111" height="69" stroke="none" stroke-width="0"
                                    fill-opacity="0" fill="#ffffff"></rect>
                                    <g column-id="0 - 1">
                                    <rect x="334" y="77" width="111" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="351" y="87.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">0 - 1</text>
                                    </g>
                                    <circle cx="340" cy="83" r="6" stroke="none" stroke-width="0" fill="#3366cc">
                                    </circle>
                                    </g>
                                    <g column-id="1 - 3">
                                    <rect x="334" y="96" width="111" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="351" y="106.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">1 - 3</text>
                                    </g>
                                    <circle cx="340" cy="102" r="6" stroke="none" stroke-width="0" fill="#dc3912">
                                    </circle>
                                    </g>
                                    <g column-id="5 - 10">
                                    <rect x="334" y="115" width="111" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="351" y="125.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">5 - 10</text>
                                    </g>
                                    <circle cx="340" cy="121" r="6" stroke="none" stroke-width="0" fill="#ff9900">
                                    </circle>
                                    </g>
                                    <g column-id="90 - 100">
                                    <rect x="334" y="134" width="111" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="351" y="144.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">90 -
                                        100</text></g>
                                    <circle cx="340" cy="140" r="6" stroke="none" stroke-width="0" fill="#109618">
                                    </circle>
                                    </g>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L192.71756802052298,97.43206314271414A105,105,0,0,1,210,96L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#109618"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L105.35862823429967,209.67083127459492A105,105,0,0,1,192.7175680205229,97.43206314271416L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#ff9900"></path><text
                                    text-anchor="start" x="133.24306319303534" y="158.68930916459357"
                                    font-family="Arial" font-size="12" stroke="none" stroke-width="0"
                                    fill="#ffffff">23.7%</text>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L192.717568020523,304.5679368572859A105,105,0,0,1,105.35862823429967,209.67083127459492L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#dc3912"></path><text
                                    text-anchor="start" x="136.96901125516467" y="256.7801587610848"
                                    font-family="Arial" font-size="12" stroke="none" stroke-width="0"
                                    fill="#ffffff">21.1%</text>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L210,96A105,105,0,1,1,192.717568020523,304.5679368572859L210,201A0,0,0,1,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#3366cc"></path><text
                                    text-anchor="start" x="268.19225687071196" y="211.43060804231206"
                                    font-family="Arial" font-size="12" stroke="none" stroke-width="0"
                                    fill="#ffffff">52.6%</text>
                                </g>
                                <g></g>
                                </svg>
                                <div aria-label="A tabular representation of the data in the chart."
                                style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;">
                                <table>
                                    <thead>
                                    <tr>
                                        <th>Số chi nhánh</th>
                                        <th>Số lượng khách hàng</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>0 - 1</td>
                                        <td>20</td>
                                    </tr>
                                    <tr>
                                        <td>1 - 3</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td>5 - 10</td>
                                        <td>9</td>
                                    </tr>
                                    <tr>
                                        <td>90 - 100</td>
                                        <td>1</td>
                                    </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            </div>
                            <div aria-hidden="true"
                            style="display: none; position: absolute; top: 410px; left: 560px; white-space: nowrap; font-family: Arial; font-size: 12px;">
                            90 - 100</div>
                            <div></div>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="padding-top: 35px">
                        <table cellspacing="0" cellpadding="0" class="table table-bordered" id="table-sizeBranch">
                        <thead>
                            <tr class="even">
                            <th>Số chi nhánh</th>
                            <th>Số lượng khách hàng</th>
                            <th>Tỷ lệ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                            <td>0 - 1</td>
                            <td>20</td>
                            <td>52.63%</td>
                            </tr>
                            <tr class="">
                            <td>1 - 3</td>
                            <td>8</td>
                            <td>21.05%</td>
                            </tr>
                            <tr class="">
                            <td>5 - 10</td>
                            <td>9</td>
                            <td>23.68%</td>
                            </tr>
                            <tr class="">
                            <td>90 - 100</td>
                            <td>1</td>
                            <td>2.63%</td>
                            </tr>

                            <tr class="">
                            <td><strong>Tổng</strong></td>
                            <td><strong>38</strong></td>
                            <td><strong>100%</strong></td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                <div class="widget">
                    <div class="widget-header">
                    <h3>
                        <i class="fa fa-bar-chart-o"></i> Biểu đồ: Thống kê theo số nhân
                        viên
                    </h3>
                    </div>
                    <div class="widget-content col-md-12">
                    <div class="col-md-6">
                        <div id="flot-placeholder-sizeCompany-Employees"
                        style="width: 550px; height: 400px; margin: 0 auto">
                        <div style="position: relative;">
                            <div dir="ltr" style="position: relative; width: 550px; height: 400px;">
                            <div aria-label="A chart."
                                style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;"><svg
                                width="550" height="400" aria-label="A chart." style="overflow: hidden;">
                                <defs id="_ABSTRACT_RENDERER_ID_4"></defs>
                                <rect x="0" y="0" width="550" height="400" stroke="none" stroke-width="0"
                                    fill="#ffffff"></rect>
                                <g>
                                    <rect x="334" y="77" width="111" height="69" stroke="none" stroke-width="0"
                                    fill-opacity="0" fill="#ffffff"></rect>
                                    <g column-id="Dưới 10">
                                    <rect x="334" y="77" width="111" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="351" y="87.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">Dưới
                                        10</text></g>
                                    <circle cx="340" cy="83" r="6" stroke="none" stroke-width="0" fill="#3366cc">
                                    </circle>
                                    </g>
                                    <g column-id="10-50">
                                    <rect x="334" y="96" width="111" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="351" y="106.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">10-50</text>
                                    </g>
                                    <circle cx="340" cy="102" r="6" stroke="none" stroke-width="0" fill="#dc3912">
                                    </circle>
                                    </g>
                                    <g column-id="50-100">
                                    <rect x="334" y="115" width="111" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="351" y="125.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">50-100</text>
                                    </g>
                                    <circle cx="340" cy="121" r="6" stroke="none" stroke-width="0" fill="#ff9900">
                                    </circle>
                                    </g>
                                    <g column-id="Trên 500">
                                    <rect x="334" y="134" width="111" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="351" y="144.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">Trên
                                        500</text></g>
                                    <circle cx="340" cy="140" r="6" stroke="none" stroke-width="0" fill="#109618">
                                    </circle>
                                    </g>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L192.71756802052298,97.43206314271414A105,105,0,0,1,210,96L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#109618"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L175.90655573350813,101.6891896214334A105,105,0,0,1,192.7175680205229,97.43206314271416L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#ff9900"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L160.02552373110728,293.3447438766814A105,105,0,0,1,175.9065557335083,101.68918962143334L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#dc3912"></path><text
                                    text-anchor="start" x="117.80774312928804" y="198.9693919576879"
                                    font-family="Arial" font-size="12" stroke="none" stroke-width="0"
                                    fill="#ffffff">36.8%</text>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L210,96A105,105,0,1,1,160.02552373110728,293.3447438766814L210,201A0,0,0,1,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#3366cc"></path><text
                                    text-anchor="start" x="265.73678296186415" y="223.61945502371594"
                                    font-family="Arial" font-size="12" stroke="none" stroke-width="0"
                                    fill="#ffffff">57.9%</text>
                                </g>
                                <g></g>
                                </svg>
                                <div aria-label="A tabular representation of the data in the chart."
                                style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;">
                                <table>
                                    <thead>
                                    <tr>
                                        <th>Số lượng nhân viên</th>
                                        <th>Số lượng khách hàng</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Dưới 10</td>
                                        <td>22</td>
                                    </tr>
                                    <tr>
                                        <td>10-50</td>
                                        <td>14</td>
                                    </tr>
                                    <tr>
                                        <td>50-100</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>Trên 500</td>
                                        <td>1</td>
                                    </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            </div>
                            <div aria-hidden="true"
                            style="display: none; position: absolute; top: 410px; left: 560px; white-space: nowrap; font-family: Arial; font-size: 12px;">
                            Trên 500</div>
                            <div></div>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="padding-top: 35px">
                        <table cellspacing="0" cellpadding="0" class="table table-bordered"
                        id="table-numberEmployees">
                        <thead>
                            <tr class="even">
                            <th>Số lượng nhân viên</th>
                            <th>Số lượng khách hàng</th>
                            <th>Tỷ lệ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                            <td>Dưới 10</td>
                            <td>22</td>
                            <td>57.89%</td>
                            </tr>
                            <tr class="">
                            <td>10-50</td>
                            <td>14</td>
                            <td>36.84%</td>
                            </tr>
                            <tr class="">
                            <td>50-100</td>
                            <td>1</td>
                            <td>2.63%</td>
                            </tr>
                            <tr class="">
                            <td>Trên 500</td>
                            <td>1</td>
                            <td>2.63%</td>
                            </tr>

                            <tr class="">
                            <td><strong>Tổng</strong></td>
                            <td><strong>38</strong></td>
                            <td><strong>100%</strong></td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                <div class="widget">
                    <div class="widget-header">
                    <h3>
                        <i class="fa fa-bar-chart-o"></i> Biểu đồ: Thống kê theo ngành
                        hàng
                    </h3>
                    </div>
                    <div class="widget-content col-md-12">
                    <div class="col-md-6">
                        <div id="flot-placeholder-industry" style="width: 560px; height: 400px; margin: 0 auto">
                        <div style="position: relative;">
                            <div dir="ltr" style="position: relative; width: 560px; height: 400px;">
                            <div aria-label="A chart."
                                style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;"><svg
                                width="560" height="400" aria-label="A chart." style="overflow: hidden;">
                                <defs id="_ABSTRACT_RENDERER_ID_5"></defs>
                                <rect x="0" y="0" width="560" height="400" stroke="none" stroke-width="0"
                                    fill="#ffffff"></rect>
                                <g>
                                    <rect x="340" y="77" width="113" height="190" stroke="none" stroke-width="0"
                                    fill-opacity="0" fill="#ffffff"></rect>
                                    <g column-id="Điện tử, Điện máy">
                                    <rect x="340" y="77" width="113" height="28" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="357" y="87.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">Điện tử,
                                        Điện</text><text text-anchor="start" x="357" y="103.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">máy</text>
                                    </g>
                                    <circle cx="346" cy="83" r="6" stroke="none" stroke-width="0" fill="#3366cc">
                                    </circle>
                                    </g>
                                    <g column-id="(BỎ) Khác">
                                    <rect x="340" y="112" width="113" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="357" y="122.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">(BỎ)
                                        Khác</text></g>
                                    <circle cx="346" cy="118" r="6" stroke="none" stroke-width="0" fill="#dc3912">
                                    </circle>
                                    </g>
                                    <g column-id="Thời trang, phụ kiện">
                                    <rect x="340" y="131" width="113" height="28" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="357" y="141.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">Thời trang,
                                        phụ</text><text text-anchor="start" x="357" y="157.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">kiện</text>
                                    </g>
                                    <circle cx="346" cy="137" r="6" stroke="none" stroke-width="0" fill="#ff9900">
                                    </circle>
                                    </g>
                                    <g column-id="Mỹ phẩm">
                                    <rect x="340" y="166" width="113" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="357" y="176.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">Mỹ
                                        phẩm</text></g>
                                    <circle cx="346" cy="172" r="6" stroke="none" stroke-width="0" fill="#109618">
                                    </circle>
                                    </g>
                                    <g column-id="(BỎ) Tổng hợp">
                                    <rect x="340" y="185" width="113" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="357" y="195.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">(BỎ) Tổng
                                        hợp</text></g>
                                    <circle cx="346" cy="191" r="6" stroke="none" stroke-width="0" fill="#990099">
                                    </circle>
                                    </g>
                                    <g column-id="Máy tính, Linh kiện">
                                    <rect x="340" y="204" width="113" height="28" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="357" y="214.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">Máy tính,
                                        Linh</text><text text-anchor="start" x="357" y="230.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">kiện</text>
                                    </g>
                                    <circle cx="346" cy="210" r="6" stroke="none" stroke-width="0" fill="#0099c6">
                                    </circle>
                                    </g>
                                    <g column-id="Đồ dùng sinh hoạt">
                                    <rect x="340" y="239" width="113" height="28" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="357" y="249.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">Đồ dùng
                                        sinh</text><text text-anchor="start" x="357" y="265.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">hoạt</text>
                                    </g>
                                    <circle cx="346" cy="245" r="6" stroke="none" stroke-width="0" fill="#dd4477">
                                    </circle>
                                    </g>
                                </g>
                                <g>
                                    <path
                                    d="M214,201L214,94A107,107,0,0,1,234.2498831465639,95.93362939289038L214,201A0,0,0,0,0,214,201"
                                    stroke="#ffffff" stroke-width="1" fill="#3366cc"></path>
                                </g>
                                <g>
                                    <path
                                    d="M214,201L234.2498831465639,95.93362939289038A107,107,0,0,1,315.11508760246954,235.99627207496408L214,201A0,0,0,0,0,214,201"
                                    stroke="#ffffff" stroke-width="1" fill="#dc3912"></path><text
                                    text-anchor="start" x="263.87456935171224" y="166.5899493828486"
                                    font-family="Arial" font-size="12" stroke="none" stroke-width="0"
                                    fill="#ffffff">27.3%</text>
                                </g>
                                <g>
                                    <path
                                    d="M214,201L193.75011685343617,95.93362939289037A107,107,0,0,1,214,94L214,201A0,0,0,0,0,214,201"
                                    stroke="#ffffff" stroke-width="1" fill="#dd4477"></path>
                                </g>
                                <g>
                                    <path
                                    d="M214,201L156.151432532251,110.98587198706366A107,107,0,0,1,193.75011685343617,95.93362939289037L214,201A0,0,0,0,0,214,201"
                                    stroke="#ffffff" stroke-width="1" fill="#0099c6"></path>
                                </g>
                                <g>
                                    <path
                                    d="M214,201L140.161545771414,123.5604579227575A107,107,0,0,1,156.151432532251,110.98587198706366L214,201A0,0,0,0,0,214,201"
                                    stroke="#ffffff" stroke-width="1" fill="#990099"></path>
                                </g>
                                <g>
                                    <path
                                    d="M214,201L110.01616218938103,175.77379390049128A107,107,0,0,1,140.161545771414,123.5604579227575L214,201A0,0,0,0,0,214,201"
                                    stroke="#ffffff" stroke-width="1" fill="#109618"></path><text
                                    text-anchor="start" x="130.9616686846163" y="165.05202569606584"
                                    font-family="Arial" font-size="12" stroke="none" stroke-width="0"
                                    fill="#ffffff">9.1%</text>
                                </g>
                                <g>
                                    <path
                                    d="M214,201L315.11508760246954,235.9962720749641A107,107,0,0,1,110.01616218938103,175.77379390049128L214,201A0,0,0,0,0,214,201"
                                    stroke="#ffffff" stroke-width="1" fill="#ff9900"></path><text
                                    text-anchor="start" x="173.52555770915086" y="285.1466085499871"
                                    font-family="Arial" font-size="12" stroke="none" stroke-width="0"
                                    fill="#ffffff">48.5%</text>
                                </g>
                                <g></g>
                                </svg>
                                <div aria-label="A tabular representation of the data in the chart."
                                style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;">
                                <table>
                                    <thead>
                                    <tr>
                                        <th>Ngành hàng</th>
                                        <th>Số lượng khách hàng</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Điện tử, Điện máy</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>(BỎ) Khác</td>
                                        <td>9</td>
                                    </tr>
                                    <tr>
                                        <td>Thời trang, phụ kiện</td>
                                        <td>16</td>
                                    </tr>
                                    <tr>
                                        <td>Mỹ phẩm</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>(BỎ) Tổng hợp</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>Máy tính, Linh kiện</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>Đồ dùng sinh hoạt</td>
                                        <td>1</td>
                                    </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            </div>
                            <div aria-hidden="true"
                            style="display: none; position: absolute; top: 410px; left: 570px; white-space: nowrap; font-family: Arial; font-size: 12px;">
                            hoạt</div>
                            <div></div>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="padding-top: 35px">
                        <table cellspacing="0" cellpadding="0" class="table table-bordered" id="table-industry">
                        <thead>
                            <tr class="even">
                            <th>Ngành hàng</th>
                            <th>Số lượng khách hàng</th>
                            <th>Tỷ lệ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                            <td>Điện tử, Điện máy</td>
                            <td>1</td>
                            <td>3.03%</td>
                            </tr>
                            <tr class="">
                            <td>(BỎ) Khác</td>
                            <td>9</td>
                            <td>27.27%</td>
                            </tr>
                            <tr class="">
                            <td>Thời trang, phụ kiện</td>
                            <td>16</td>
                            <td>48.48%</td>
                            </tr>
                            <tr class="">
                            <td>Mỹ phẩm</td>
                            <td>3</td>
                            <td>9.09%</td>
                            </tr>
                            <tr class="">
                            <td>(BỎ) Tổng hợp</td>
                            <td>1</td>
                            <td>3.03%</td>
                            </tr>
                            <tr class="">
                            <td>Máy tính, Linh kiện</td>
                            <td>2</td>
                            <td>6.06%</td>
                            </tr>
                            <tr class="">
                            <td>Đồ dùng sinh hoạt</td>
                            <td>1</td>
                            <td>3.03%</td>
                            </tr>

                            <tr class="">
                            <td><strong>Tổng</strong></td>
                            <td><strong>33</strong></td>
                            <td><strong>100%</strong></td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                <div class="widget">
                    <div class="widget-header">
                    <h3><i class="fa fa-bar-chart-o"></i> Biểu đồ: Thống kê theo sản phẩm</h3>
                    </div>
                    <div class="widget-content col-md-12">
                    <div class="col-md-6">
                        <div id="product-piechart" style="width: 550px; height: 400px;">
                        <div style="position: relative;">
                            <div dir="ltr" style="position: relative; width: 550px; height: 400px;">
                            <div aria-label="A chart."
                                style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;"><svg
                                width="550" height="400" aria-label="A chart." style="overflow: hidden;">
                                <defs id="_ABSTRACT_RENDERER_ID_6"></defs>
                                <rect x="0" y="0" width="550" height="400" stroke="none" stroke-width="0"
                                    fill="#ffffff"></rect>
                                <g>
                                    <rect x="334" y="77" width="111" height="247" stroke="none" stroke-width="0"
                                    fill-opacity="0" fill="#ffffff"></rect>
                                    <g column-id="Gói Ecom">
                                    <rect x="334" y="77" width="111" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="351" y="87.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">Gói
                                        Ecom</text></g>
                                    <circle cx="340" cy="83" r="6" stroke="none" stroke-width="0" fill="#3366cc">
                                    </circle>
                                    </g>
                                    <g column-id="Gói Website cơ bản">
                                    <rect x="334" y="96" width="111" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="351" y="106.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">Gói Website
                                        cơ…</text>
                                        <rect x="351" y="96" width="94" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    </g>
                                    <circle cx="340" cy="102" r="6" stroke="none" stroke-width="0" fill="#dc3912">
                                    </circle>
                                    </g>
                                    <g column-id="Gói Phần mềm quản lý fanpage">
                                    <rect x="334" y="115" width="111" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="351" y="125.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">Gói Phần
                                        mềm…</text>
                                        <rect x="351" y="115" width="94" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    </g>
                                    <circle cx="340" cy="121" r="6" stroke="none" stroke-width="0" fill="#ff9900">
                                    </circle>
                                    </g>
                                    <g column-id="Gói Thiết kế Website P">
                                    <rect x="334" y="134" width="111" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="351" y="144.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">Gói Thiết kế
                                        W…</text>
                                        <rect x="351" y="134" width="94" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    </g>
                                    <circle cx="340" cy="140" r="6" stroke="none" stroke-width="0" fill="#109618">
                                    </circle>
                                    </g>
                                    <g column-id="Gói Website tối ưu">
                                    <rect x="334" y="153" width="111" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="351" y="163.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">Gói Website
                                        tối…</text>
                                        <rect x="351" y="153" width="94" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    </g>
                                    <circle cx="340" cy="159" r="6" stroke="none" stroke-width="0" fill="#990099">
                                    </circle>
                                    </g>
                                    <g column-id="Thiết kế thêm tính năng cho website: bảo mật https cho website">
                                    <rect x="334" y="172" width="111" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="351" y="182.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">Thiết kế thêm
                                        t…</text>
                                        <rect x="351" y="172" width="94" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    </g>
                                    <circle cx="340" cy="178" r="6" stroke="none" stroke-width="0" fill="#0099c6">
                                    </circle>
                                    </g>
                                    <g column-id="Gói thiết kế thêm tính năng cho website">
                                    <rect x="334" y="191" width="111" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="351" y="201.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">Gói thiết kế
                                        thê…</text>
                                        <rect x="351" y="191" width="94" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    </g>
                                    <circle cx="340" cy="197" r="6" stroke="none" stroke-width="0" fill="#dd4477">
                                    </circle>
                                    </g>
                                    <g column-id="Nạp tiền">
                                    <rect x="334" y="210" width="111" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="351" y="220.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">Nạp
                                        tiền</text></g>
                                    <circle cx="340" cy="216" r="6" stroke="none" stroke-width="0" fill="#b82e2e">
                                    </circle>
                                    </g>
                                    <g column-id="Gói Kho tổng (chỉ xuất nhập kho, không bán hàng)">
                                    <rect x="334" y="229" width="111" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="351" y="239.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">Gói Kho tổng
                                        (…</text>
                                        <rect x="351" y="229" width="94" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    </g>
                                    <circle cx="340" cy="235" r="6" stroke="none" stroke-width="0" fill="#316395">
                                    </circle>
                                    </g>
                                    <g column-id="Gói Starter - QLBH">
                                    <rect x="334" y="248" width="111" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="351" y="258.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">Gói Starter -
                                        Q…</text>
                                        <rect x="351" y="248" width="94" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    </g>
                                    <circle cx="340" cy="254" r="6" stroke="none" stroke-width="0" fill="#994499">
                                    </circle>
                                    </g>
                                    <g column-id="Gói thêm tính năng mới">
                                    <rect x="334" y="267" width="111" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="351" y="277.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">Gói thêm tính
                                        n…</text>
                                        <rect x="351" y="267" width="94" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    </g>
                                    <circle cx="340" cy="273" r="6" stroke="none" stroke-width="0" fill="#22aa99">
                                    </circle>
                                    </g>
                                    <g column-id="Gói Xác minh Maps">
                                    <rect x="334" y="286" width="111" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="351" y="296.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">Gói Xác
                                        minh…</text>
                                        <rect x="351" y="286" width="94" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    </g>
                                    <circle cx="340" cy="292" r="6" stroke="none" stroke-width="0" fill="#6633cc">
                                    </circle>
                                    </g>
                                    <path d="M346,324L340,312L334,324Z" stroke="none" stroke-width="0"
                                    fill="#cccccc"></path>
                                    <g><text text-anchor="middle" x="359.5" y="322.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#0011cc">1/4</text></g>
                                    <path d="M373,312L385,312L379,324Z" stroke="none" stroke-width="0"
                                    fill="#0011cc"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L210,96A105,105,0,0,1,227.03200534731164,97.39058539954418L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#3366cc"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L227.03200534731164,97.39058539954418A105,105,0,0,1,247.84791973061522,103.05851250841191L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#dc3912"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L247.84791973061522,103.05851250841191A105,105,0,0,1,279.64455324593905,122.42114659036082L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#ff9900"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L279.64455324593905,122.42114659036082A105,105,0,0,1,283.9255510591454,126.43450596554942L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#109618"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L283.9255510591454,126.43450596554942A105,105,0,0,1,298.1984796996184,144.02607457199392L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#990099"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L298.1984796996184,144.02607457199392A105,105,0,0,1,300.77648808614094,148.23041396081732L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#0099c6"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L300.77648808614094,148.23041396081732A105,105,0,0,1,304.7189457788144,155.68641141390336L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#dd4477"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L304.7189457788144,155.68641141390336A105,105,0,0,1,305.73843126552646,157.88210604846213L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#b82e2e"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L305.73843126552646,157.88210604846213A105,105,0,0,1,307.3956539092037,161.76880578418996L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#316395"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L307.3956539092037,161.76880578418996A105,105,0,0,1,309.0958773036134,235.71321220266424L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#994499"></path><text
                                    text-anchor="start" x="269.67639162833575" y="203.44845597630152"
                                    font-family="Arial" font-size="12" stroke="none" stroke-width="0"
                                    fill="#ffffff">11.5%</text>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L309.0958773036134,235.71321220266424A105,105,0,0,1,307.8877361510963,238.98672282802704L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#22aa99"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L307.8877361510963,238.98672282802704A105,105,0,0,1,304.0463902634133,247.69343078444504L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#6633cc"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L304.0463902634133,247.69343078444504A105,105,0,0,1,292.70836467076856,265.68636961128027L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#e67300"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L292.70836467076856,265.68636961128027A105,105,0,0,1,280.30439622100596,278.9890496928883L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#329262"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L280.304396221006,278.9890496928882A105,105,0,0,1,277.5151626482851,281.41581195620427L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#3b3eac"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L277.5151626482851,281.41581195620427A105,105,0,0,1,262.95073228396166,291.67094325412205L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#b77322"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L262.9507322839616,291.6709432541221A105,105,0,0,1,255.0392828040938,295.84968637002896L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#16d620"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L255.0392828040938,295.84968637002896A105,105,0,0,1,246.0735733165033,299.6088094856583L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#b91383"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L246.0735733165033,299.6088094856583A105,105,0,0,1,232.61529099093616,303.5355968110357L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#f4359e"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L205.66638736649017,96.08946763292694A105,105,0,0,1,210,96L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#cccccc"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L200.56713297090852,96.42456780098168A105,105,0,0,1,205.66638736649017,96.08946763292694L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#8b0707"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L199.52816562911454,96.52349218647888A105,105,0,0,1,200.56713297090852,96.42456780098168L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#6633cc"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L193.9979560379465,97.22652270914062A105,105,0,0,1,199.52816562911454,96.52349218647888L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#994499"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L186.89274600012146,98.57414968580882A105,105,0,0,1,193.9979560379465,97.22652270914062L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#66aa00"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L183.45225773614254,99.41152929248419A105,105,0,0,1,186.89274600012146,98.57414968580882L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#0099c6"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L180.11720183782992,100.34207247315786A105,105,0,0,1,183.45225773614254,99.41152929248419L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#ff9900"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L167.40567856792697,105.02748423771916A105,105,0,0,1,180.11720183782992,100.34207247315786L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#bea413"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L165.80246596713022,105.7551681957844A105,105,0,0,1,167.40567856792705,105.02748423771912L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#2a778d"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L150.1842776481106,114.70353796637039A105,105,0,0,1,165.80246596713022,105.7551681957844L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#a9c413"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L136.51583899012857,125.99947946397111A105,105,0,0,1,150.1842776481106,114.70353796637039L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#f4359e"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L131.8663987830199,130.8562878023559A105,105,0,0,1,136.51583899012857,125.99947946397111L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#3b3eac"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L131.1840468987562,131.62388352795654A105,105,0,0,1,131.8663987830199,130.8562878023559L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#5574a6"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L125.52757503035866,138.63487016169762A105,105,0,0,1,131.1840468987562,131.62388352795654L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#329262"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L124.26727613991535,140.37904603579324A105,105,0,0,1,125.52757503035866,138.63487016169762L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#aaaa11"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L122.00167250819575,143.7174166203621A105,105,0,0,1,124.26727613991535,140.37904603579324L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#994499"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L121.49160713506772,144.5087228639075A105,105,0,0,1,122.00167250819575,143.7174166203621L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#316395"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L118.33052359869272,149.7973917040336A105,105,0,0,1,121.49160713506772,144.5087228639075L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#b82e2e"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L116.94915168381628,152.35290730538392A105,105,0,0,1,118.33052359869272,149.7973917040336L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#66aa00"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L116.43334159434266,153.3525401012915A105,105,0,0,1,116.94915168381628,152.35290730538392L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#dd4477"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L114.62073598361319,157.09332629665076A105,105,0,0,1,116.43334159434266,153.3525401012915L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#109618"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L111.55662057239313,164.477389922512A105,105,0,0,1,114.62073598361319,157.09332629665076L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#ff9900"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L108.68174642392188,173.43894972441123A105,105,0,0,1,111.55662057239313,164.477389922512L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#dc3912"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L106.0942368346853,185.88072815795906A105,105,0,0,1,108.68174642392188,173.43894972441123L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#3366cc"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L105.39389543312018,191.91358776287342A105,105,0,0,1,106.0942368346853,185.88072815795906L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#743411"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L105.61232987503176,212.32317649252258A105,105,0,0,1,105.39389543312018,191.91358776287342L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#bea413"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L106.98358589499009,221.31301122298498A105,105,0,0,1,105.61232987503178,212.32317649252263L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#2a778d"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L107.47926179065611,223.6825535822397A105,105,0,0,1,106.98358589499009,221.31301122298498L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#a9c413"></path>
                                </g>
                                <g>
                                    <path
                                    d="M210,201L232.61529099093616,303.5355968110357A105,105,0,0,1,107.47926179065611,223.6825535822397L210,201A0,0,0,0,0,210,201"
                                    stroke="#ffffff" stroke-width="1" fill="#9c5935"></path><text
                                    text-anchor="start" x="154.30278983394498" y="273.67698154274444"
                                    font-family="Arial" font-size="12" stroke="none" stroke-width="0"
                                    fill="#ffffff">25%</text>
                                </g>
                                <g></g>
                                </svg>
                                <div aria-label="A tabular representation of the data in the chart."
                                style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;">
                                <table>
                                    <thead>
                                    <tr>
                                        <th>Sản phẩm</th>
                                        <th>Giá trị</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Gói Ecom</td>
                                        <td>69,960,024</td>
                                    </tr>
                                    <tr>
                                        <td>Gói Website cơ bản</td>
                                        <td>88,380,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gói Phần mềm quản lý fanpage</td>
                                        <td>153,050,330</td>
                                    </tr>
                                    <tr>
                                        <td>Gói Thiết kế Website P</td>
                                        <td>24,000,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gói Website tối ưu</td>
                                        <td>92,820,024</td>
                                    </tr>
                                    <tr>
                                        <td>Thiết kế thêm tính năng cho website: bảo mật https cho website</td>
                                        <td>20,170,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gói thiết kế thêm tính năng cho website</td>
                                        <td>34,500,000</td>
                                    </tr>
                                    <tr>
                                        <td>Dịch vụ vận chuyển</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Nạp tiền</td>
                                        <td>9,900,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gói Kho tổng (chỉ xuất nhập kho, không bán hàng)</td>
                                        <td>17,280,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gói Starter - QLBH</td>
                                        <td>309,100,048</td>
                                    </tr>
                                    <tr>
                                        <td>Gói thêm tính năng mới</td>
                                        <td>14,270,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gói Omni Enterprise</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Gói Xác minh Maps</td>
                                        <td>38,930,003</td>
                                    </tr>
                                    <tr>
                                        <td>GHĐB (mới)</td>
                                        <td>87,120,000</td>
                                    </tr>
                                    <tr>
                                        <td>Marketing</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Tư vấn và tối ưu quy trình Marketing Insight</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Gói SEO TỐI ƯU</td>
                                        <td>74,473,400</td>
                                    </tr>
                                    <tr>
                                        <td>Gói combo 3 gian hàng</td>
                                        <td>600,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gói phí tích hợp API</td>
                                        <td>15,120,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gói SEO CƠ BẢN</td>
                                        <td>72,930,902</td>
                                    </tr>
                                    <tr>
                                        <td>Gói Enterprise - QLBH</td>
                                        <td>36,600,000</td>
                                    </tr>
                                    <tr>
                                        <td>Vchat gói Cơ bản</td>
                                        <td>39,771,000</td>
                                    </tr>
                                    <tr>
                                        <td>Vchat gói Chuyên nghiệp</td>
                                        <td>57,374,002</td>
                                    </tr>
                                    <tr>
                                        <td>Gói Premium - QLBH</td>
                                        <td>674,200,008</td>
                                    </tr>
                                    <tr>
                                        <td>Gói Ecom (không giới hạn gian hàng/1 sàn TMĐT)</td>
                                        <td>9,900,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gói Basic 1 - QLBH - online</td>
                                        <td>37,200,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gói chăm sóc gian hàng chuyên nghiệp</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Chăm sóc fanpage - Gói VIP 1</td>
                                        <td>83,600,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gói Quảng Cáo Fanpage</td>
                                        <td>2,200,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gói Basic 2 - QLBH - offline</td>
                                        <td>24,840,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gói thiết kế website theo yêu cầu</td>
                                        <td>52,000,000</td>
                                    </tr>
                                    <tr>
                                        <td>Dịch vụ Viết bài</td>
                                        <td>38,500,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gói Tạo mới Maps</td>
                                        <td>32,701,015</td>
                                    </tr>
                                    <tr>
                                        <td>Gói Thiết kế Website E</td>
                                        <td>17,000,000</td>
                                    </tr>
                                    <tr>
                                        <td>Lệ phí đăng ký tên miền VN</td>
                                        <td>1,800,036</td>
                                    </tr>
                                    <tr>
                                        <td>Phí dịch vụ TK quản trị tên miền VN</td>
                                        <td>2,530,008</td>
                                    </tr>
                                    <tr>
                                        <td>Phí duy trì tên miền VN</td>
                                        <td>4,600,068</td>
                                    </tr>
                                    <tr>
                                        <td>Bizshare - Gói chăm sóc fanpage - Nội dung</td>
                                        <td>11,880,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gói Combo 5 gian hàng</td>
                                        <td>25,200,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gói khởi tạo và Decor gian hàng</td>
                                        <td>3,850,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gói Thiết kế Website W</td>
                                        <td>16,500,000</td>
                                    </tr>
                                    <tr>
                                        <td>Giấy tờ Công ty</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Gói dịch vụ nhập liệu sàn TMĐT</td>
                                        <td>8,800,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gói Combo 5 fanpage</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Máy đọc mã vạch YJ3300</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Máy in mã vạch Xprinter XP 350B</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Máy in hóa đơn Xprinter XP-58IIH</td>
                                        <td>850,020</td>
                                    </tr>
                                    <tr>
                                        <td>Gói dịch vụ chăm sóc website</td>
                                        <td>36,850,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gói Shipping - QLBH</td>
                                        <td>4,200,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gói Ecomcare Shopee</td>
                                        <td>27,500,000</td>
                                    </tr>
                                    <tr>
                                        <td>Giấy in bill K58</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Gói Omni Premium</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Decal nhiệt in mã vạch 2 tem 35*22 ( cuộn )</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Chăm sóc fanpage - Gói VIP 3</td>
                                        <td>72,600,000</td>
                                    </tr>
                                    <tr>
                                        <td>Phí đăng ký tên miền quốc tế</td>
                                        <td>328,904</td>
                                    </tr>
                                    <tr>
                                        <td>Chăm sóc fanpage - Gói VIP 2</td>
                                        <td>73,700,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gói Combo 3 fanpage</td>
                                        <td>7,200,024</td>
                                    </tr>
                                    <tr>
                                        <td>Free Phí chỉnh sửa website</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>GHĐB (tái ký)</td>
                                        <td>55,440,000</td>
                                    </tr>
                                    <tr>
                                        <td>Máy in mã vạch 380B</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Giấy in mã vạch 2 tem</td>
                                        <td>200,000</td>
                                    </tr>
                                    <tr>
                                        <td>SMS Brandname</td>
                                        <td>2,000,000</td>
                                    </tr>
                                    <tr>
                                        <td>Hoàn cước vận chuyển</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Gói phần mềm theo yêu cầu</td>
                                        <td>14,160,000</td>
                                    </tr>
                                    <tr>
                                        <td>Máy Đọc Mã Vạch ChipPOS</td>
                                        <td>1,500,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gói Pro - QLBH</td>
                                        <td>2,400,000</td>
                                    </tr>
                                    <tr>
                                        <td>Vchat gói nâng cao</td>
                                        <td>14,481,000</td>
                                    </tr>
                                    <tr>
                                        <td>123job - Gói mở hồ sơ ứng viên</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Gói Omni Starter</td>
                                        <td>29,580,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gói môi giới</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Két đựng tiền SC - 335A</td>
                                        <td>750,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gói Ecom full sàn TMĐT</td>
                                        <td>22,800,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gói Hỗ trợ và định hướng content seo</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Gói dịch vụ nhập liệu website</td>
                                        <td>2,200,000</td>
                                    </tr>
                                    <tr>
                                        <td>Máy in hóa đơn XP-V320N</td>
                                        <td>4,268,000</td>
                                    </tr>
                                    <tr>
                                        <td>Giấy in bill K80</td>
                                        <td>368,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gói chăm sóc website seo tối ưu</td>
                                        <td>20,900,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gói Website tiết kiệm</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Siêu vip</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Nạp tiền dự án</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Chân đế</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Máy in hóa đơn XP-N200H</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Chăm sóc fanpage - Gói content</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Bizshare - Thiết kế website</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Gói Tool quét data facebook</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Bizshare - Tối ưu kênh bán hàng sàn TMĐT Shopee</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Gói Combo 10 gian hàng</td>
                                        <td>0</td>
                                    </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            </div>
                            <div aria-hidden="true"
                            style="display: none; position: absolute; top: 410px; left: 560px; white-space: nowrap; font-family: Arial; font-size: 12px;">
                            0/0</div>
                            <div></div>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="padding-top: 35px">
                        <table cellspacing="0" cellpadding="0" class="table table-bordered" id="report-product">
                        <thead>
                            <tr class="even">
                            <th>Sản phẩm</th>
                            <th>Số HĐ</th>
                            <th>Số tháng</th>
                            <th>Số lượng</th>
                            <th>Giá trị</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                            <td>Gói Ecom</td>
                            <td style="text-align: right">47</td>
                            <td style="text-align: right">642</td>
                            <td style="text-align: right">70</td>
                            <td style="text-align: right">69.960.024</td>
                            </tr>
                            <tr class="">
                            <td>Gói Website cơ bản</td>
                            <td style="text-align: right">23</td>
                            <td style="text-align: right">318</td>
                            <td style="text-align: right">23</td>
                            <td style="text-align: right">88.380.000</td>
                            </tr>
                            <tr class="">
                            <td>Gói Phần mềm quản lý fanpage</td>
                            <td style="text-align: right">172</td>
                            <td style="text-align: right">1292</td>
                            <td style="text-align: right">248</td>
                            <td style="text-align: right">153.050.330</td>
                            </tr>
                            <tr class="">
                            <td>Gói Thiết kế Website P</td>
                            <td style="text-align: right">6</td>
                            <td style="text-align: right">8</td>
                            <td style="text-align: right">6</td>
                            <td style="text-align: right">24.000.000</td>
                            </tr>
                            <tr class="">
                            <td>Gói Website tối ưu</td>
                            <td style="text-align: right">15</td>
                            <td style="text-align: right">384</td>
                            <td style="text-align: right">15</td>
                            <td style="text-align: right">92.820.024</td>
                            </tr>
                            <tr class="">
                            <td>Thiết kế thêm tính năng cho website: bảo mật https cho website</td>
                            <td style="text-align: right">28</td>
                            <td style="text-align: right">497</td>
                            <td style="text-align: right">28</td>
                            <td style="text-align: right">20.170.000</td>
                            </tr>
                            <tr class="">
                            <td>Gói thiết kế thêm tính năng cho website</td>
                            <td style="text-align: right">17</td>
                            <td style="text-align: right">17</td>
                            <td style="text-align: right">19</td>
                            <td style="text-align: right">34.500.000</td>
                            </tr>
                            <tr class="">
                            <td>Dịch vụ vận chuyển</td>
                            <td style="text-align: right">26</td>
                            <td style="text-align: right">76</td>
                            <td style="text-align: right">26</td>
                            <td style="text-align: right">0</td>
                            </tr>
                            <tr class="">
                            <td>Nạp tiền</td>
                            <td style="text-align: right">19</td>
                            <td style="text-align: right">19</td>
                            <td style="text-align: right">19</td>
                            <td style="text-align: right">9.900.000</td>
                            </tr>
                            <tr class="">
                            <td>Gói Kho tổng (chỉ xuất nhập kho, không bán hàng)</td>
                            <td style="text-align: right">8</td>
                            <td style="text-align: right">156</td>
                            <td style="text-align: right">8</td>
                            <td style="text-align: right">17.280.000</td>
                            </tr>
                            <tr class="">
                            <td>Gói Starter - QLBH</td>
                            <td style="text-align: right">82</td>
                            <td style="text-align: right">1117</td>
                            <td style="text-align: right">97</td>
                            <td style="text-align: right">309.100.048</td>
                            </tr>
                            <tr class="">
                            <td>Gói thêm tính năng mới</td>
                            <td style="text-align: right">16</td>
                            <td style="text-align: right">225</td>
                            <td style="text-align: right">19</td>
                            <td style="text-align: right">14.270.000</td>
                            </tr>
                            <tr class="">
                            <td>Gói Omni Enterprise</td>
                            <td style="text-align: right">1</td>
                            <td style="text-align: right">24</td>
                            <td style="text-align: right">1</td>
                            <td style="text-align: right">0</td>
                            </tr>
                            <tr class="">
                            <td>Gói Xác minh Maps</td>
                            <td style="text-align: right">70</td>
                            <td style="text-align: right">70</td>
                            <td style="text-align: right">79</td>
                            <td style="text-align: right">38.930.003,2</td>
                            </tr>
                            <tr class="">
                            <td>GHĐB (mới)</td>
                            <td style="text-align: right">15</td>
                            <td style="text-align: right">102</td>
                            <td style="text-align: right">15</td>
                            <td style="text-align: right">87.120.000</td>
                            </tr>
                            <tr class="">
                            <td>Marketing</td>
                            <td style="text-align: right">1</td>
                            <td style="text-align: right">1</td>
                            <td style="text-align: right">1</td>
                            <td style="text-align: right">0</td>
                            </tr>
                            <tr class="">
                            <td>Tư vấn và tối ưu quy trình Marketing Insight</td>
                            <td style="text-align: right">1</td>
                            <td style="text-align: right">1</td>
                            <td style="text-align: right">1</td>
                            <td style="text-align: right">0</td>
                            </tr>
                            <tr class="">
                            <td>Gói SEO TỐI ƯU</td>
                            <td style="text-align: right">10</td>
                            <td style="text-align: right">25</td>
                            <td style="text-align: right">10</td>
                            <td style="text-align: right">74.473.400</td>
                            </tr>
                            <tr class="">
                            <td>Gói combo 3 gian hàng</td>
                            <td style="text-align: right">2</td>
                            <td style="text-align: right">15</td>
                            <td style="text-align: right">2</td>
                            <td style="text-align: right">600.000</td>
                            </tr>
                            <tr class="">
                            <td>Gói phí tích hợp API</td>
                            <td style="text-align: right">11</td>
                            <td style="text-align: right">156</td>
                            <td style="text-align: right">12</td>
                            <td style="text-align: right">15.120.000</td>
                            </tr>
                            <tr class="">
                            <td>Gói SEO CƠ BẢN</td>
                            <td style="text-align: right">29</td>
                            <td style="text-align: right">68</td>
                            <td style="text-align: right">30</td>
                            <td style="text-align: right">72.930.902</td>
                            </tr>
                            <tr class="">
                            <td>Gói Enterprise - QLBH</td>
                            <td style="text-align: right">4</td>
                            <td style="text-align: right">66</td>
                            <td style="text-align: right">4</td>
                            <td style="text-align: right">36.600.000</td>
                            </tr>
                            <tr class="">
                            <td>Vchat gói Cơ bản</td>
                            <td style="text-align: right">21</td>
                            <td style="text-align: right">204</td>
                            <td style="text-align: right">21</td>
                            <td style="text-align: right">39.771.000</td>
                            </tr>
                            <tr class="">
                            <td>Vchat gói Chuyên nghiệp</td>
                            <td style="text-align: right">11</td>
                            <td style="text-align: right">79</td>
                            <td style="text-align: right">25</td>
                            <td style="text-align: right">57.374.002</td>
                            </tr>
                            <tr class="">
                            <td>Gói Premium - QLBH</td>
                            <td style="text-align: right">69</td>
                            <td style="text-align: right">1083</td>
                            <td style="text-align: right">116</td>
                            <td style="text-align: right">674.200.008</td>
                            </tr>
                            <tr class="">
                            <td>Gói Ecom (không giới hạn gian hàng/1 sàn TMĐT)</td>
                            <td style="text-align: right">4</td>
                            <td style="text-align: right">49</td>
                            <td style="text-align: right">4</td>
                            <td style="text-align: right">9.900.000</td>
                            </tr>
                            <tr class="">
                            <td>Gói Basic 1 - QLBH - online</td>
                            <td style="text-align: right">16</td>
                            <td style="text-align: right">198</td>
                            <td style="text-align: right">16</td>
                            <td style="text-align: right">37.200.000</td>
                            </tr>
                            <tr class="">
                            <td>Gói chăm sóc gian hàng chuyên nghiệp</td>
                            <td style="text-align: right">3</td>
                            <td style="text-align: right">8</td>
                            <td style="text-align: right">3</td>
                            <td style="text-align: right">0</td>
                            </tr>
                            <tr class="">
                            <td>Chăm sóc fanpage - Gói VIP 1</td>
                            <td style="text-align: right">20</td>
                            <td style="text-align: right">20</td>
                            <td style="text-align: right">20</td>
                            <td style="text-align: right">83.600.000</td>
                            </tr>
                            <tr class="">
                            <td>Gói Quảng Cáo Fanpage</td>
                            <td style="text-align: right">2</td>
                            <td style="text-align: right">2</td>
                            <td style="text-align: right">2</td>
                            <td style="text-align: right">2.200.000</td>
                            </tr>
                            <tr class="">
                            <td>Gói Basic 2 - QLBH - offline</td>
                            <td style="text-align: right">11</td>
                            <td style="text-align: right">156</td>
                            <td style="text-align: right">11</td>
                            <td style="text-align: right">24.840.000</td>
                            </tr>
                            <tr class="">
                            <td>Gói thiết kế website theo yêu cầu</td>
                            <td style="text-align: right">6</td>
                            <td style="text-align: right">6</td>
                            <td style="text-align: right">6</td>
                            <td style="text-align: right">52.000.000</td>
                            </tr>
                            <tr class="">
                            <td>Dịch vụ Viết bài</td>
                            <td style="text-align: right">4</td>
                            <td style="text-align: right">4</td>
                            <td style="text-align: right">6</td>
                            <td style="text-align: right">38.500.000</td>
                            </tr>
                            <tr class="">
                            <td>Gói Tạo mới Maps</td>
                            <td style="text-align: right">49</td>
                            <td style="text-align: right">49</td>
                            <td style="text-align: right">75</td>
                            <td style="text-align: right">32.701.015,6</td>
                            </tr>
                            <tr class="">
                            <td>Gói Thiết kế Website E</td>
                            <td style="text-align: right">2</td>
                            <td style="text-align: right">2</td>
                            <td style="text-align: right">2</td>
                            <td style="text-align: right">17.000.000</td>
                            </tr>
                            <tr class="">
                            <td>Lệ phí đăng ký tên miền VN</td>
                            <td style="text-align: right">8</td>
                            <td style="text-align: right">96</td>
                            <td style="text-align: right">10</td>
                            <td style="text-align: right">1.800.036</td>
                            </tr>
                            <tr class="">
                            <td>Phí dịch vụ TK quản trị tên miền VN</td>
                            <td style="text-align: right">8</td>
                            <td style="text-align: right">156</td>
                            <td style="text-align: right">10</td>
                            <td style="text-align: right">2.530.008,79</td>
                            </tr>
                            <tr class="">
                            <td>Phí duy trì tên miền VN</td>
                            <td style="text-align: right">8</td>
                            <td style="text-align: right">156</td>
                            <td style="text-align: right">10</td>
                            <td style="text-align: right">4.600.068</td>
                            </tr>
                            <tr class="">
                            <td>Bizshare - Gói chăm sóc fanpage - Nội dung</td>
                            <td style="text-align: right">2</td>
                            <td style="text-align: right">2</td>
                            <td style="text-align: right">2</td>
                            <td style="text-align: right">11.880.000</td>
                            </tr>
                            <tr class="">
                            <td>Gói Combo 5 gian hàng</td>
                            <td style="text-align: right">7</td>
                            <td style="text-align: right">96</td>
                            <td style="text-align: right">7</td>
                            <td style="text-align: right">25.200.000</td>
                            </tr>
                            <tr class="">
                            <td>Gói khởi tạo và Decor gian hàng</td>
                            <td style="text-align: right">8</td>
                            <td style="text-align: right">8</td>
                            <td style="text-align: right">8</td>
                            <td style="text-align: right">3.850.000</td>
                            </tr>
                            <tr class="">
                            <td>Gói Thiết kế Website W</td>
                            <td style="text-align: right">3</td>
                            <td style="text-align: right">5</td>
                            <td style="text-align: right">3</td>
                            <td style="text-align: right">16.500.000</td>
                            </tr>
                            <tr class="">
                            <td>Giấy tờ Công ty</td>
                            <td style="text-align: right">16</td>
                            <td style="text-align: right">16</td>
                            <td style="text-align: right">36</td>
                            <td style="text-align: right">0</td>
                            </tr>
                            <tr class="">
                            <td>Gói dịch vụ nhập liệu sàn TMĐT</td>
                            <td style="text-align: right">5</td>
                            <td style="text-align: right">5</td>
                            <td style="text-align: right">5</td>
                            <td style="text-align: right">8.800.000</td>
                            </tr>
                            <tr class="">
                            <td>Gói Combo 5 fanpage</td>
                            <td style="text-align: right">1</td>
                            <td style="text-align: right">6</td>
                            <td style="text-align: right">1</td>
                            <td style="text-align: right">0</td>
                            </tr>
                            <tr class="">
                            <td>Máy đọc mã vạch YJ3300</td>
                            <td style="text-align: right">2</td>
                            <td style="text-align: right">2</td>
                            <td style="text-align: right">2</td>
                            <td style="text-align: right">0</td>
                            </tr>
                            <tr class="">
                            <td>Máy in mã vạch Xprinter XP 350B</td>
                            <td style="text-align: right">2</td>
                            <td style="text-align: right">2</td>
                            <td style="text-align: right">2</td>
                            <td style="text-align: right">0</td>
                            </tr>
                            <tr class="">
                            <td>Máy in hóa đơn Xprinter XP-58IIH</td>
                            <td style="text-align: right">4</td>
                            <td style="text-align: right">4</td>
                            <td style="text-align: right">4</td>
                            <td style="text-align: right">850.020</td>
                            </tr>
                            <tr class="">
                            <td>Gói dịch vụ chăm sóc website</td>
                            <td style="text-align: right">4</td>
                            <td style="text-align: right">8</td>
                            <td style="text-align: right">4</td>
                            <td style="text-align: right">36.850.000</td>
                            </tr>
                            <tr class="">
                            <td>Gói Shipping - QLBH</td>
                            <td style="text-align: right">6</td>
                            <td style="text-align: right">57</td>
                            <td style="text-align: right">6</td>
                            <td style="text-align: right">4.200.000</td>
                            </tr>
                            <tr class="">
                            <td>Gói Ecomcare Shopee</td>
                            <td style="text-align: right">6</td>
                            <td style="text-align: right">12</td>
                            <td style="text-align: right">6</td>
                            <td style="text-align: right">27.500.000</td>
                            </tr>
                            <tr class="">
                            <td>Giấy in bill K58</td>
                            <td style="text-align: right">3</td>
                            <td style="text-align: right">3</td>
                            <td style="text-align: right">15</td>
                            <td style="text-align: right">0</td>
                            </tr>
                            <tr class="">
                            <td>Gói Omni Premium</td>
                            <td style="text-align: right">1</td>
                            <td style="text-align: right">12</td>
                            <td style="text-align: right">1</td>
                            <td style="text-align: right">0</td>
                            </tr>
                            <tr class="">
                            <td>Decal nhiệt in mã vạch 2 tem 35*22 ( cuộn )</td>
                            <td style="text-align: right">2</td>
                            <td style="text-align: right">2</td>
                            <td style="text-align: right">4</td>
                            <td style="text-align: right">0</td>
                            </tr>
                            <tr class="">
                            <td>Chăm sóc fanpage - Gói VIP 3</td>
                            <td style="text-align: right">8</td>
                            <td style="text-align: right">14</td>
                            <td style="text-align: right">8</td>
                            <td style="text-align: right">72.600.000</td>
                            </tr>
                            <tr class="">
                            <td>Phí đăng ký tên miền quốc tế</td>
                            <td style="text-align: right">2</td>
                            <td style="text-align: right">24</td>
                            <td style="text-align: right">3</td>
                            <td style="text-align: right">328.904,4</td>
                            </tr>
                            <tr class="">
                            <td>Chăm sóc fanpage - Gói VIP 2</td>
                            <td style="text-align: right">6</td>
                            <td style="text-align: right">15</td>
                            <td style="text-align: right">6</td>
                            <td style="text-align: right">73.700.000</td>
                            </tr>
                            <tr class="">
                            <td>Gói Combo 3 fanpage</td>
                            <td style="text-align: right">8</td>
                            <td style="text-align: right">45</td>
                            <td style="text-align: right">10</td>
                            <td style="text-align: right">7.200.024</td>
                            </tr>
                            <tr class="">
                            <td>Free Phí chỉnh sửa website</td>
                            <td style="text-align: right">1</td>
                            <td style="text-align: right">1</td>
                            <td style="text-align: right">1</td>
                            <td style="text-align: right">0</td>
                            </tr>
                            <tr class="">
                            <td>GHĐB (tái ký)</td>
                            <td style="text-align: right">9</td>
                            <td style="text-align: right">78</td>
                            <td style="text-align: right">9</td>
                            <td style="text-align: right">55.440.000</td>
                            </tr>
                            <tr class="">
                            <td>Máy in mã vạch 380B</td>
                            <td style="text-align: right">1</td>
                            <td style="text-align: right">1</td>
                            <td style="text-align: right">1</td>
                            <td style="text-align: right">0</td>
                            </tr>
                            <tr class="">
                            <td>Giấy in mã vạch 2 tem</td>
                            <td style="text-align: right">2</td>
                            <td style="text-align: right">2</td>
                            <td style="text-align: right">5</td>
                            <td style="text-align: right">200.000</td>
                            </tr>
                            <tr class="">
                            <td>SMS Brandname</td>
                            <td style="text-align: right">2</td>
                            <td style="text-align: right">2</td>
                            <td style="text-align: right">2</td>
                            <td style="text-align: right">2.000.000</td>
                            </tr>
                            <tr class="">
                            <td>Hoàn cước vận chuyển</td>
                            <td style="text-align: right">4</td>
                            <td style="text-align: right">4</td>
                            <td style="text-align: right">6</td>
                            <td style="text-align: right">0</td>
                            </tr>
                            <tr class="">
                            <td>Gói phần mềm theo yêu cầu</td>
                            <td style="text-align: right">3</td>
                            <td style="text-align: right">60</td>
                            <td style="text-align: right">4</td>
                            <td style="text-align: right">14.160.000</td>
                            </tr>
                            <tr class="">
                            <td>Máy Đọc Mã Vạch ChipPOS</td>
                            <td style="text-align: right">3</td>
                            <td style="text-align: right">3</td>
                            <td style="text-align: right">3</td>
                            <td style="text-align: right">1.500.000</td>
                            </tr>
                            <tr class="">
                            <td>Gói Pro - QLBH</td>
                            <td style="text-align: right">2</td>
                            <td style="text-align: right">17</td>
                            <td style="text-align: right">2</td>
                            <td style="text-align: right">2.400.000</td>
                            </tr>
                            <tr class="">
                            <td>Vchat gói nâng cao</td>
                            <td style="text-align: right">8</td>
                            <td style="text-align: right">78</td>
                            <td style="text-align: right">8</td>
                            <td style="text-align: right">14.481.000</td>
                            </tr>
                            <tr class="">
                            <td>123job - Gói mở hồ sơ ứng viên</td>
                            <td style="text-align: right">1</td>
                            <td style="text-align: right">1</td>
                            <td style="text-align: right">1</td>
                            <td style="text-align: right">0</td>
                            </tr>
                            <tr class="">
                            <td>Gói Omni Starter</td>
                            <td style="text-align: right">4</td>
                            <td style="text-align: right">60</td>
                            <td style="text-align: right">4</td>
                            <td style="text-align: right">29.580.000</td>
                            </tr>
                            <tr class="">
                            <td>Gói môi giới</td>
                            <td style="text-align: right">3</td>
                            <td style="text-align: right">30</td>
                            <td style="text-align: right">3</td>
                            <td style="text-align: right">0</td>
                            </tr>
                            <tr class="">
                            <td>Két đựng tiền SC - 335A</td>
                            <td style="text-align: right">2</td>
                            <td style="text-align: right">2</td>
                            <td style="text-align: right">2</td>
                            <td style="text-align: right">750.000</td>
                            </tr>
                            <tr class="">
                            <td>Gói Ecom full sàn TMĐT</td>
                            <td style="text-align: right">3</td>
                            <td style="text-align: right">81</td>
                            <td style="text-align: right">3</td>
                            <td style="text-align: right">22.800.000</td>
                            </tr>
                            <tr class="">
                            <td>Gói Hỗ trợ và định hướng content seo</td>
                            <td style="text-align: right">1</td>
                            <td style="text-align: right">3</td>
                            <td style="text-align: right">1</td>
                            <td style="text-align: right">0</td>
                            </tr>
                            <tr class="">
                            <td>Gói dịch vụ nhập liệu website</td>
                            <td style="text-align: right">2</td>
                            <td style="text-align: right">2</td>
                            <td style="text-align: right">2</td>
                            <td style="text-align: right">2.200.000</td>
                            </tr>
                            <tr class="">
                            <td>Máy in hóa đơn XP-V320N</td>
                            <td style="text-align: right">2</td>
                            <td style="text-align: right">2</td>
                            <td style="text-align: right">3</td>
                            <td style="text-align: right">4.268.000</td>
                            </tr>
                            <tr class="">
                            <td>Giấy in bill K80</td>
                            <td style="text-align: right">5</td>
                            <td style="text-align: right">5</td>
                            <td style="text-align: right">60</td>
                            <td style="text-align: right">368.000</td>
                            </tr>
                            <tr class="">
                            <td>Gói chăm sóc website seo tối ưu</td>
                            <td style="text-align: right">3</td>
                            <td style="text-align: right">5</td>
                            <td style="text-align: right">3</td>
                            <td style="text-align: right">20.900.000</td>
                            </tr>
                            <tr class="">
                            <td>Gói Website tiết kiệm</td>
                            <td style="text-align: right">1</td>
                            <td style="text-align: right">36</td>
                            <td style="text-align: right">1</td>
                            <td style="text-align: right">0</td>
                            </tr>
                            <tr class="">
                            <td>Siêu vip</td>
                            <td style="text-align: right">1</td>
                            <td style="text-align: right">1</td>
                            <td style="text-align: right">1</td>
                            <td style="text-align: right">0</td>
                            </tr>
                            <tr class="">
                            <td>Nạp tiền dự án</td>
                            <td style="text-align: right">1</td>
                            <td style="text-align: right">1</td>
                            <td style="text-align: right">1</td>
                            <td style="text-align: right">0</td>
                            </tr>
                            <tr class="">
                            <td>Chân đế</td>
                            <td style="text-align: right">2</td>
                            <td style="text-align: right">2</td>
                            <td style="text-align: right">2</td>
                            <td style="text-align: right">0</td>
                            </tr>
                            <tr class="">
                            <td>Máy in hóa đơn XP-N200H</td>
                            <td style="text-align: right">1</td>
                            <td style="text-align: right">1</td>
                            <td style="text-align: right">1</td>
                            <td style="text-align: right">0</td>
                            </tr>
                            <tr class="">
                            <td>Chăm sóc fanpage - Gói content</td>
                            <td style="text-align: right">1</td>
                            <td style="text-align: right">1</td>
                            <td style="text-align: right">1</td>
                            <td style="text-align: right">0</td>
                            </tr>
                            <tr class="">
                            <td>Bizshare - Thiết kế website</td>
                            <td style="text-align: right">1</td>
                            <td style="text-align: right">1</td>
                            <td style="text-align: right">1</td>
                            <td style="text-align: right">0</td>
                            </tr>
                            <tr class="">
                            <td>Gói Tool quét data facebook</td>
                            <td style="text-align: right">1</td>
                            <td style="text-align: right">1</td>
                            <td style="text-align: right">4</td>
                            <td style="text-align: right">0</td>
                            </tr>
                            <tr class="">
                            <td>Bizshare - Tối ưu kênh bán hàng sàn TMĐT Shopee</td>
                            <td style="text-align: right">1</td>
                            <td style="text-align: right">1</td>
                            <td style="text-align: right">1</td>
                            <td style="text-align: right">0</td>
                            </tr>
                            <tr class="">
                            <td>Gói Combo 10 gian hàng</td>
                            <td style="text-align: right">1</td>
                            <td style="text-align: right">12</td>
                            <td style="text-align: right">1</td>
                            <td style="text-align: right">0</td>
                            </tr>
                            <tr class="">
                            <td><strong>Tổng</strong></td>
                            <td style="text-align: right"><strong>1013</strong></td>
                            <td style="text-align: right"><strong>8379</strong></td>
                            <td style="text-align: right"><strong>1340</strong></td>
                            <td style="text-align: right"><strong>2.697.926.817,99</strong></td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                </div>
            </div>

            <!-- hungpx -->
            <div class="row">
                <div class="col-md-12">
                <div class="widget">
                    <div class="widget-header">
                    <h3>
                        <i class="fa fa-bar-chart-o"></i> Biểu đồ: Thống kê theo trạng thái
                    </h3>
                    </div>
                    <div class="widget-content col-md-12">
                    <div class="col-md-6">
                        <div id="status-piechart" style="width: 560px; height: 400px; margin: 0 auto">
                        <div style="position: relative;">
                            <div dir="ltr" style="position: relative; width: 560px; height: 400px;">
                            <div aria-label="A chart."
                                style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;"><svg
                                width="560" height="400" aria-label="A chart." style="overflow: hidden;">
                                <defs id="_ABSTRACT_RENDERER_ID_7"></defs>
                                <rect x="0" y="0" width="560" height="400" stroke="none" stroke-width="0"
                                    fill="#ffffff"></rect>
                                <g>
                                    <rect x="340" y="77" width="113" height="66" stroke="none" stroke-width="0"
                                    fill-opacity="0" fill="#ffffff"></rect>
                                    <g column-id="Chưa có trạng thái">
                                    <rect x="340" y="77" width="113" height="28" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="357" y="87.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">Chưa có
                                        trạng</text><text text-anchor="start" x="357" y="103.2"
                                        font-family="Arial" font-size="12" stroke="none" stroke-width="0"
                                        fill="#222222">thái</text></g>
                                    <circle cx="346" cy="83" r="6" stroke="none" stroke-width="0" fill="#3366cc">
                                    </circle>
                                    </g>
                                    <g column-id="Dùng thử">
                                    <rect x="340" y="112" width="113" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="357" y="122.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">Dùng
                                        thử</text></g>
                                    <circle cx="346" cy="118" r="6" stroke="none" stroke-width="0" fill="#dc3912">
                                    </circle>
                                    </g>
                                    <g column-id="Đang sử dụng">
                                    <rect x="340" y="131" width="113" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="357" y="141.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">Đang sử
                                        dụng</text></g>
                                    <circle cx="346" cy="137" r="6" stroke="none" stroke-width="0" fill="#ff9900">
                                    </circle>
                                    </g>
                                </g>
                                <g>
                                    <path
                                    d="M214,201L211.43421226091124,94.03076735211222A107,107,0,0,1,214,94L214,201A0,0,0,0,0,214,201"
                                    stroke="#ffffff" stroke-width="1" fill="#ff9900"></path>
                                </g>
                                <g>
                                    <path
                                    d="M214,201L208.86990008247295,94.123051714431A107,107,0,0,1,211.43421226091107,94.03076735211222L214,201A0,0,0,0,0,214,201"
                                    stroke="#ffffff" stroke-width="1" fill="#dc3912"></path>
                                </g>
                                <g>
                                    <path
                                    d="M214,201L214,94A107,107,0,1,1,208.86990008247295,94.123051714431L214,201A0,0,0,1,0,214,201"
                                    stroke="#ffffff" stroke-width="1" fill="#3366cc"></path><text
                                    text-anchor="start" x="199.08830144523571" y="292.26254213127754"
                                    font-family="Arial" font-size="12" stroke="none" stroke-width="0"
                                    fill="#ffffff">99.2%</text>
                                </g>
                                <g></g>
                                </svg>
                                <div aria-label="A tabular representation of the data in the chart."
                                style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;">
                                <table>
                                    <thead>
                                    <tr>
                                        <th>Trạng thái</th>
                                        <th>Số lượng khách hàng</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Chưa có trạng thái</td>
                                        <td>260</td>
                                    </tr>
                                    <tr>
                                        <td>Dùng thử</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>Đang sử dụng</td>
                                        <td>1</td>
                                    </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            </div>
                            <div aria-hidden="true"
                            style="display: none; position: absolute; top: 410px; left: 570px; white-space: nowrap; font-family: Arial; font-size: 12px;">
                            Đang sử dụng</div>
                            <div></div>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="padding-top: 35px">
                        <table cellspacing="0" cellpadding="0" class="table table-bordered" id="table-status">
                        <thead>
                            <tr class="even">
                            <th>Trạng thái</th>
                            <th>Số lượng khách hàng</th>
                            <th>Tỷ lệ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                            <td>Chưa có trạng thái</td>
                            <td>260</td>
                            <td>99.24%</td>
                            </tr>
                            <tr class="">
                            <td>Dùng thử</td>
                            <td>1</td>
                            <td>0.38%</td>
                            </tr>
                            <tr class="">
                            <td>Đang sử dụng</td>
                            <td>1</td>
                            <td>0.38%</td>
                            </tr>

                            <tr class="">
                            <td><strong>Tổng</strong></td>
                            <td><strong>262</strong></td>
                            <td><strong>100%</strong></td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                </div>
            </div>

            <!-- hungpx -->
            <div class="row">
                <div class="col-md-12">
                <div class="widget">
                    <div class="widget-header">
                    <h3>
                        <i class="fa fa-bar-chart-o"></i> Biểu đồ: Thống kê theo lý do từ chối
                    </h3>
                    </div>
                    <div class="widget-content col-md-12">
                    <div class="col-md-6">
                        <div id="reason-piechart" style="width: 560px; height: 400px; margin: 0 auto">
                        <div style="position: relative;">
                            <div dir="ltr" style="position: relative; width: 560px; height: 400px;">
                            <div aria-label="A chart."
                                style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;"><svg
                                width="560" height="400" aria-label="A chart." style="overflow: hidden;">
                                <defs id="_ABSTRACT_RENDERER_ID_8"></defs>
                                <rect x="0" y="0" width="560" height="400" stroke="none" stroke-width="0"
                                    fill="#ffffff"></rect>
                                <g>
                                    <rect x="340" y="77" width="113" height="117" stroke="none" stroke-width="0"
                                    fill-opacity="0" fill="#ffffff"></rect>
                                    <g column-id="Bị tác động sau khi quyết định - đắn đo về giá">
                                    <rect x="340" y="77" width="113" height="44" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="357" y="87.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">Bị tác động
                                        sau</text><text text-anchor="start" x="357" y="103.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">khi quyết
                                        định -</text><text text-anchor="start" x="357" y="119.2"
                                        font-family="Arial" font-size="12" stroke="none" stroke-width="0"
                                        fill="#222222">đắn đo về giá</text></g>
                                    <circle cx="346" cy="83" r="6" stroke="none" stroke-width="0" fill="#3366cc">
                                    </circle>
                                    </g>
                                    <g column-id="Giá đắt">
                                    <rect x="340" y="128" width="113" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="357" y="138.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">Giá
                                        đắt</text></g>
                                    <circle cx="346" cy="134" r="6" stroke="none" stroke-width="0" fill="#dc3912">
                                    </circle>
                                    </g>
                                    <g column-id="Gọi nhầm số">
                                    <rect x="340" y="147" width="113" height="12" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="357" y="157.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">Gọi nhầm
                                        số</text></g>
                                    <circle cx="346" cy="153" r="6" stroke="none" stroke-width="0" fill="#ff9900">
                                    </circle>
                                    </g>
                                    <g column-id="Khách chưa có nhu cầu">
                                    <rect x="340" y="166" width="113" height="28" stroke="none" stroke-width="0"
                                        fill-opacity="0" fill="#ffffff"></rect>
                                    <g><text text-anchor="start" x="357" y="176.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">Khách chưa
                                        có</text><text text-anchor="start" x="357" y="192.2" font-family="Arial"
                                        font-size="12" stroke="none" stroke-width="0" fill="#222222">nhu
                                        cầu</text></g>
                                    <circle cx="346" cy="172" r="6" stroke="none" stroke-width="0" fill="#109618">
                                    </circle>
                                    </g>
                                </g>
                                <g>
                                    <path
                                    d="M214,201L214,94A107,107,0,0,1,216.7106004315111,94.03433894328194L214,201A0,0,0,0,0,214,201"
                                    stroke="#ffffff" stroke-width="1" fill="#3366cc"></path>
                                </g>
                                <g>
                                    <path
                                    d="M214,201L216.7106004315111,94.03433894328194A107,107,0,0,1,222.12484322210136,94.30891826110172L214,201A0,0,0,0,0,214,201"
                                    stroke="#ffffff" stroke-width="1" fill="#dc3912"></path>
                                </g>
                                <g>
                                    <path
                                    d="M214,201L222.12484322210136,94.30891826110172A107,107,0,0,1,238.18714355245962,96.76957216449358L214,201A0,0,0,0,0,214,201"
                                    stroke="#ffffff" stroke-width="1" fill="#ff9900"></path>
                                </g>
                                <g>
                                    <path
                                    d="M214,201L238.18714355245962,96.76957216449358A107,107,0,1,1,214,94L214,201A0,0,0,1,0,214,201"
                                    stroke="#ffffff" stroke-width="1" fill="#109618"></path><text
                                    text-anchor="start" x="187.249145631902" y="290.3558653657394"
                                    font-family="Arial" font-size="12" stroke="none" stroke-width="0"
                                    fill="#ffffff">96.4%</text>
                                </g>
                                <g></g>
                                </svg>
                                <div aria-label="A tabular representation of the data in the chart."
                                style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;">
                                <table>
                                    <thead>
                                    <tr>
                                        <th>Lý do</th>
                                        <th>Số lượng khách hàng</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Bị tác động sau khi quyết định - đắn đo về giá</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>Giá đắt</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>Gọi nhầm số</td>
                                        <td>6</td>
                                    </tr>
                                    <tr>
                                        <td>Khách chưa có nhu cầu</td>
                                        <td>239</td>
                                    </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            </div>
                            <div aria-hidden="true"
                            style="display: none; position: absolute; top: 410px; left: 570px; white-space: nowrap; font-family: Arial; font-size: 12px;">
                            nhu cầu</div>
                            <div></div>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="padding-top: 35px">
                        <table cellspacing="0" cellpadding="0" class="table table-bordered" id="table-reason">
                        <thead>
                            <tr class="even">
                            <th>Lý do</th>
                            <th>Số lượng khách hàng</th>
                            <th>Tỷ lệ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                            <td>Bị tác động sau khi quyết định - đắn đo về giá</td>
                            <td>1</td>
                            <td>0.4%</td>
                            </tr>
                            <tr class="">
                            <td>Giá đắt</td>
                            <td>2</td>
                            <td>0.81%</td>
                            </tr>
                            <tr class="">
                            <td>Gọi nhầm số</td>
                            <td>6</td>
                            <td>2.42%</td>
                            </tr>
                            <tr class="">
                            <td>Khách chưa có nhu cầu</td>
                            <td>239</td>
                            <td>96.37%</td>
                            </tr>

                            <tr class="">
                            <td><strong>Tổng</strong></td>
                            <td><strong>248</strong></td>
                            <td><strong>100%</strong></td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                </div>
            </div>

            </div>
            <style>
            .select2-container {
                width: 17%;
            }
            </style>
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
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/customer.js') }}"></script>
@endsection