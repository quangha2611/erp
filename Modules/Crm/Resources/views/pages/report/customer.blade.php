@extends('crm::layouts.master1')

@section('css')
    <link href="{{ asset('css/crm/report/bootstrap-multiselect.css') }}" media="screen" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/crm/report/style.css') }}" type="text/css">
    <style>
        .cke {
            visibility: hidden;
        }
    </style>
    <script type="text/javascript" charset="UTF-8" src="{{ asset('js/crm/report/loader.js') }}"></script>
    <link id="load-css-0" rel="stylesheet" type="text/css" href="{{ asset('css/crm/report/tooltip.css') }}">
    <link id="load-css-1" rel="stylesheet" type="text/css" href="{{ asset('css/crm/report/util.css') }}">
    <script type="text/javascript" charset="UTF-8" src="{{ asset('js/crm/report/jsapi_compiled_default_module.js') }}"></script>
    <script type="text/javascript" charset="UTF-8" src="{{ asset('js/crm/report/jsapi_compiled_graphics_module.js') }}"></script>
    <script type="text/javascript" charset="UTF-8" src="{{ asset('js/crm/report/jsapi_compiled_ui_module.js') }}"></script>
    <script type="text/javascript" charset="UTF-8" src="{{ asset('js/crm/report/jsapi_compiled_corechart_module.js') }}"></script>
@endsection

@section('title','ERP-Khách hàng')

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
                <div class="form-group">
                    <select name="companyId" id="companyId" class="form-control" tabindex="-1" aria-hidden="true">
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
                    </select>
                </div>
                <div class="form-group">
                    <select name="departmentId" id="departmentId" class="form-control" tabindex="-1" aria-hidden="true">
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
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" name="daterangepicker" class="form-control date-range-picker" id="daterangepicker" value="" placeholder="FROM - TO">
                </div>
                <div class="form-group">
                    <select name="productId[]" multiple="multiple" id="productId" class="form-control" style="display: none;">
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
                </div>
                <div class="form-group">
                    <input name="submit" type="submit" id="btnFilterCrmContact" class="form-control btn btn-primary" value="Lọc">
                </div>
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
                                    @php
                                        $totalAllContract = 0;
                                    @endphp
                                    @foreach ($reports['reportByLocation'] as $key => $reportByLocation)
                                        <tr class="">
                                            <td>{{ $key }}</td>
                                            <td>{{ $reportByLocation['amountOfCustomer'] }}</td>
                                            <td>{{ $reportByLocation['percent']."%" }}</td>
                                            @php
                                                $totalAllContract += $reportByLocation['amountOfCustomer'];
                                            @endphp
                                        </tr>
                                    @endforeach
                                    <tr class="">
                                        <td><strong>Tổng</strong></td>
                                        <td><strong>{{ $totalAllContract }}</strong></td>
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
                                    @foreach ($reports['reportByExpiredTime'] as $key => $reportByExpiredTime)
                                        <tr class="">
                                            <td>{{ $key  }}</td>
                                            <td>{{ $reportByExpiredTime['amountOfContract'] }}</td>
                                            <td>{{ $reportByExpiredTime['percent']."%" }}</td>
                                        </tr>
                                    @endforeach
                                    <tr class="">
                                        <td><strong>Tổng</strong></td>
                                        <td><strong>{{ $totalAllContract }}</strong></td>
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
                                    @foreach ($reports['reportByValue'] as $key => $reportByValue)
                                        <tr class="">
                                            <td>{{ $key }}</td>
                                            <td>{{ $reportByValue['amountOfContract'] }}</td>
                                            @if ($reportByValue['percent'] == 0)
                                                <td></td>
                                            @else
                                                <td>{{ $reportByValue['percent']."%" }}</td>
                                            @endif
                                        </tr>
                                    @endforeach
                                    <tr class="">
                                        <td><strong>Tổng</strong></td>
                                        <td><strong>{{ $totalAllContract }}</strong></td>
                                        <td><strong>100%</strong></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{--<div class="row">--}}
                {{--<div class="col-md-12">--}}
                    {{--<div class="widget">--}}
                        {{--<div class="widget-header">--}}
                            {{--<h3>--}}
                                {{--<i class="fa fa-bar-chart-o"></i> Biểu đồ: Thống kê theo số cửa--}}
                                {{--hàng--}}
                            {{--</h3>--}}
                        {{--</div>--}}
                        {{--<div class="widget-content col-md-12">--}}
                            {{--<div class="col-md-6">--}}
                                {{--<div id="flot-placeholder-sizeCompany-Branchs" style="width: 550px; height: 400px; margin: 0 auto">--}}
                                  {{----}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-6" style="padding-top: 35px">--}}
                                {{--<table cellspacing="0" cellpadding="0" class="table table-bordered" id="table-sizeBranch">--}}
                                    {{--<thead>--}}
                                    {{--<tr class="even">--}}
                                        {{--<th>Số chi nhánh</th>--}}
                                        {{--<th>Số lượng khách hàng</th>--}}
                                        {{--<th>Tỷ lệ</th>--}}
                                    {{--</tr>--}}
                                    {{--</thead>--}}
                                    {{--<tbody>--}}
                                    {{--<tr class="">--}}
                                        {{--<td>0 - 1</td>--}}
                                        {{--<td>20</td>--}}
                                        {{--<td>52.63%</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr class="">--}}
                                        {{--<td>1 - 3</td>--}}
                                        {{--<td>8</td>--}}
                                        {{--<td>21.05%</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr class="">--}}
                                        {{--<td>5 - 10</td>--}}
                                        {{--<td>9</td>--}}
                                        {{--<td>23.68%</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr class="">--}}
                                        {{--<td>90 - 100</td>--}}
                                        {{--<td>1</td>--}}
                                        {{--<td>2.63%</td>--}}
                                    {{--</tr>--}}

                                    {{--<tr class="">--}}
                                        {{--<td><strong>Tổng</strong></td>--}}
                                        {{--<td><strong>38</strong></td>--}}
                                        {{--<td><strong>100%</strong></td>--}}
                                    {{--</tr>--}}
                                    {{--</tbody>--}}
                                {{--</table>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            <div class="row">
                <div class="col-md-12">
                    <div class="widget">
                        <div class="widget-header">
                            <h3>
                                <i class="fa fa-bar-chart-o"></i> Biểu đồ: Thống kê theo số nhân viên
                            </h3>
                        </div>
                        <div class="widget-content col-md-12">
                            <div class="col-md-6">
                                <div id="flot-placeholder-sizeCompany-Employees" style="width: 550px; height: 400px; margin: 0 auto">

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
                                    @php
                                        $totalCustomer = 0;
                                    @endphp
                                    @foreach ($reports['reportByNumberOfEmployees'] as $key => $reportByNumberOfEmployee)
                                        @php
                                            $totalCustomer += $reportByNumberOfEmployee['amountOfCustomer'];
                                        @endphp
                                        <tr class="">
                                            <td>{{ $key }}</td>
                                            <td>{{ $reportByNumberOfEmployee['amountOfCustomer'] }}</td>
                                            <td>
                                                @if ($reportByNumberOfEmployee['percent'] != 0)
                                                    {{ $reportByNumberOfEmployee['percent'] }}%
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                    <tr class="">
                                        <td><strong>Tổng</strong></td>
                                        <td><strong>{{ $totalCustomer }}</strong></td>
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
                                    @foreach ($reports["reportByCustomerMajor"] as $key => $reportByCustomerMajor)
                                        <tr class="">
                                            <td>{{ $key }}</td>
                                            <td>{{ $reportByCustomerMajor["amountOfCustomer"] }}</td>
                                            <td>{{ $reportByCustomerMajor["percent"] }}%</td>
                                        </tr>
                                    @endforeach
                                    <tr class="">
                                        <td><strong>Tổng</strong></td>
                                        <td><strong>{{ $totalCustomer }}</strong></td>
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

                                </div>
                            </div>
                            <div class="col-md-6" style="padding-top: 35px">
                                <table cellspacing="0" cellpadding="0" class="table table-bordered" id="report-product">
                                    <thead>
                                    <tr class="even">
                                        <th>Sản phẩm</th>
                                        <th>Số HĐ</th>
                                        <th style="display: none">Số tháng</th>
                                        <th>Số lượng</th>
                                        <th>Giá trị</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $totalValue = 0;
                                        $totalProduct = 0;
                                    @endphp
                                    @foreach ($reports['reportByProducts'] as $key => $reportByProduct)
                                        @php
                                            $totalValue += $reportByProduct['value'];
                                            $totalProduct += $reportByProduct['amount'];
                                        @endphp
                                        <tr class="">
                                            <td>{{ $key }}</td>
                                            <td style="text-align: right">{{ $reportByProduct['contracts'] }}</td>
                                            <td style="display: none">642</td>
                                            <td style="text-align: right">{{ $reportByProduct['amount'] }}</td>
                                            <td style="text-align: right">{{ number_format($reportByProduct['value'],0,",",".") }}</td>
                                        </tr>
                                    @endforeach
                                    <tr class="">
                                        <td><strong>Tổng</strong></td>
                                        <td style="text-align: right"><strong>{{ $totalAllContract }}</strong></td>
                                        <td style="display: none"><strong>8379</strong></td>
                                        <td style="text-align: right"><strong>{{ $totalProduct }}</strong></td>
                                        <td style="text-align: right"><strong>{{ number_format($totalValue,0,",",".") }}</strong></td>
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
                                    @foreach ($reports['reportByCustomerStatus'] as $key => $reportByCustomerStatus)
                                        <tr class="">
                                            <td>{{ $key }}</td>
                                            <td>{{ $reportByCustomerStatus['amountOfCustomer'] }}</td>
                                            <td>{{ $reportByCustomerStatus['percent'] }}%</td>
                                        </tr>
                                    @endforeach
                                    <tr class="">
                                        <td><strong>Tổng</strong></td>
                                        <td><strong>{{ $totalCustomer }}</strong></td>
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
    <script type="text/javascript" src="{{ asset('js/crm/report/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/report/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/report/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/report/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/report/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/report/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/report/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/report/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/report/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('js/crm/report/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/report/bootstrap-multiselect.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/report/jsapi') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/report/customer.js') }}"></script>
@endsection