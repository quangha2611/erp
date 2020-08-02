@extends('Layout.master1')

@section('css')
    <link href="{{ asset('asset/css/crm/report/bootstrap-multiselect.css') }}" media="screen" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/css/crm/report/style.css') }}" type="text/css">
@endsection

@section('title','ERP-Báo cáo doanh số nhân viên theo từng sản phẩm')

@section('content-page')

    <div class="tab-content">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li class="active">Báo cáo doanh số nhân viên theo sản phẩm</li>
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
                                        id="select2-companyId-container"
                                        title="----Nhanh.vn">----Nhanh.vn</span><span
                                        class="select2-selection__arrow" role="presentation"><b
                                            role="presentation"></b></span></span></span><span
                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                    </div>
                    <div class="form-group">
                        <select name="employeeDepartmentId" id="employeeDepartmentId"
                            class="form-control select2-hidden-accessible" tabindex="-1"
                            aria-hidden="true">
                            <option value="">- Phòng ban NV -</option>
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
                            <li><a href="https://erp.nhanh.vn/crm/report/productforemployee#"
                                    id="exportExcel"><i class="fa fa-download fa-lg"></i> Xuất
                                    excel</a></li>
                        </ul>
                    </div>


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
                            <th rowspan="2" style="width: 271px;">Nhân viên</th>
                            <th rowspan="2" style="width: 533px;">Phòng ban</th>
                            <th rowspan="2" style="width: 124px;">Số lượng SP</th>
                            <th rowspan="2" style="width: 145px;">Tổng Doanh số</th>
                            <th colspan="2" style="width: 675px;">Doanh số theo sản phẩm</th>
                        </tr>
                        <tr>
                            <th style="width: 559px;">Sản phẩm</th>
                            <th style="width: 116px;">Doanh số</th>
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
                        <th rowspan="2">Số lượng SP</th>
                        <th rowspan="2">Tổng Doanh số</th>
                        <th colspan="2">Doanh số theo sản phẩm</th>
                    </tr>
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Doanh số</th>
                    </tr>
                </thead>
                <tbody>
                    <tr trid="2" class="trid-2 even">
                        <td rowspan="2">1</td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11189&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10039</a>
                        </td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11189&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Ngọ
                                Văn Tình</a></td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=656">Phòng
                                KD 8 | Vật giá - Hồ Chí Minh</a></td>
                        <td rowspan="2"><b>1</b></td>
                        <td rowspan="2"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11189&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">415,000</a>
                        </td>
                    </tr>
                    <tr trid="2" class="trid-2">
                        <td>Nạp tiền</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=230&amp;employeeId=11189&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">415,000</a>
                        </td>
                    </tr>
                    <tr trid="4" class="trid-4 even">
                        <td rowspan="4">2</td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7861&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6917</a>
                        </td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7861&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Đức Công</a></td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1263">Nhanh
                                HN - KD8_CôngND | Nhanh.vn</a></td>
                        <td rowspan="4"><b>3</b></td>
                        <td rowspan="4"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7861&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,530,500</a>
                        </td>
                    </tr>
                    <tr trid="4" class="trid-4">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=7861&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,530,000</a>
                        </td>
                    </tr>
                    <tr trid="4" class="trid-4 even">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=7861&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,500,000</a>
                        </td>
                    </tr>
                    <tr trid="4" class="trid-4">
                        <td>Gói Xác minh Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=543&amp;employeeId=7861&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">500,500</a>
                        </td>
                    </tr>
                    <tr trid="8" class="trid-8 even">
                        <td rowspan="11">3</td>
                        <td rowspan="11"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=359&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">0671</a>
                        </td>
                        <td rowspan="11"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=359&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Vũ
                                Văn Trường</a></td>
                        <td rowspan="11"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1320">Nhanh
                                HN - Phòng KD4_TrườngVV | Nhanh.vn</a></td>
                        <td rowspan="11"><b>10</b></td>
                        <td rowspan="11"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=359&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">36,683,450</a>
                        </td>
                    </tr>
                    <tr trid="8" class="trid-8">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=359&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">16,050,000</a>
                        </td>
                    </tr>
                    <tr trid="8" class="trid-8 even">
                        <td>Gói Ecomcare Shopee</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=503&amp;employeeId=359&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6,456,450</a>
                        </td>
                    </tr>
                    <tr trid="8" class="trid-8">
                        <td>Gói Premium - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=253&amp;employeeId=359&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5,610,000</a>
                        </td>
                    </tr>
                    <tr trid="8" class="trid-8 even">
                        <td>Gói thêm tính năng mới</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=236&amp;employeeId=359&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,285,000</a>
                        </td>
                    </tr>
                    <tr trid="8" class="trid-8">
                        <td>Gói Ecom</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=509&amp;employeeId=359&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,980,000</a>
                        </td>
                    </tr>
                    <tr trid="8" class="trid-8 even">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=359&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,800,000</a>
                        </td>
                    </tr>
                    <tr trid="8" class="trid-8">
                        <td>Gói SEO CƠ BẢN</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=573&amp;employeeId=359&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,001,000</a>
                        </td>
                    </tr>
                    <tr trid="8" class="trid-8 even">
                        <td>Gói Xác minh Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=543&amp;employeeId=359&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">500,500</a>
                        </td>
                    </tr>
                    <tr trid="8" class="trid-8">
                        <td>Gói Tạo mới Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=542&amp;employeeId=359&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">500,500</a>
                        </td>
                    </tr>
                    <tr trid="8" class="trid-8 even">
                        <td>Gói Pro - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=1&amp;employeeId=359&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">500,000</a>
                        </td>
                    </tr>
                    <tr trid="19" class="trid-19">
                        <td rowspan="4">4</td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10982&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9752</a>
                        </td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10982&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Thị Phương Loan</a></td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1048">Vchat
                                | Vật giá - Hà Nội</a></td>
                        <td rowspan="4"><b>3</b></td>
                        <td rowspan="4"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10982&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">18,294,700</a>
                        </td>
                    </tr>
                    <tr trid="19" class="trid-19 even">
                        <td>Vchat gói nâng cao</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=572&amp;employeeId=10982&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8,211,000</a>
                        </td>
                    </tr>
                    <tr trid="19" class="trid-19">
                        <td>Vchat gói Chuyên nghiệp</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=387&amp;employeeId=10982&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5,053,000</a>
                        </td>
                    </tr>
                    <tr trid="19" class="trid-19 even">
                        <td>Vchat gói Cơ bản</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=386&amp;employeeId=10982&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5,030,700</a>
                        </td>
                    </tr>
                    <tr trid="23" class="trid-23">
                        <td rowspan="4">5</td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10354&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9188</a>
                        </td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10354&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Bích Diệp</a></td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1282">Phòng
                                Dịch Vụ Khách Hàng | Nhanh.vn</a></td>
                        <td rowspan="4"><b>3</b></td>
                        <td rowspan="4"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10354&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8,670,000</a>
                        </td>
                    </tr>
                    <tr trid="23" class="trid-23 even">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=10354&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6,720,000</a>
                        </td>
                    </tr>
                    <tr trid="23" class="trid-23">
                        <td>Gói Combo 3 fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=439&amp;employeeId=10354&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,500,000</a>
                        </td>
                    </tr>
                    <tr trid="23" class="trid-23 even">
                        <td>Gói Combo 5 fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=450&amp;employeeId=10354&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">450,000</a>
                        </td>
                    </tr>
                    <tr trid="27" class="trid-27">
                        <td rowspan="10">6</td>
                        <td rowspan="10"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10653&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9442</a>
                        </td>
                        <td rowspan="10"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10653&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Tiến Đạt</a></td>
                        <td rowspan="10"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1318">Nhanh
                                HN - Phòng KD2_TùngNT | Nhanh.vn</a></td>
                        <td rowspan="10"><b>9</b></td>
                        <td rowspan="10"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10653&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">60,740,000</a>
                        </td>
                    </tr>
                    <tr trid="27" class="trid-27 even">
                        <td>Gói Premium - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=253&amp;employeeId=10653&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">31,500,000</a>
                        </td>
                    </tr>
                    <tr trid="27" class="trid-27">
                        <td>Gói Website tối ưu</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=268&amp;employeeId=10653&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">14,400,000</a>
                        </td>
                    </tr>
                    <tr trid="27" class="trid-27 even">
                        <td>Gói Website cơ bản</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=267&amp;employeeId=10653&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,600,000</a>
                        </td>
                    </tr>
                    <tr trid="27" class="trid-27">
                        <td>Gói Ecomcare Shopee</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=503&amp;employeeId=10653&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,575,000</a>
                        </td>
                    </tr>
                    <tr trid="27" class="trid-27 even">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=10653&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,100,000</a>
                        </td>
                    </tr>
                    <tr trid="27" class="trid-27">
                        <td>Gói Basic 1 - QLBH - online</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=293&amp;employeeId=10653&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,680,000</a>
                        </td>
                    </tr>
                    <tr trid="27" class="trid-27 even">
                        <td>Gói Tạo mới Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=542&amp;employeeId=10653&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,485,000</a>
                        </td>
                    </tr>
                    <tr trid="27" class="trid-27">
                        <td>Gói phí tích hợp API</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=261&amp;employeeId=10653&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,200,000</a>
                        </td>
                    </tr>
                    <tr trid="27" class="trid-27 even">
                        <td>Gói Ecom</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=509&amp;employeeId=10653&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,200,000</a>
                        </td>
                    </tr>
                    <tr trid="37" class="trid-37">
                        <td rowspan="4">7</td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8236&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7291</a>
                        </td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8236&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phạm
                                Thị Thủy</a></td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1319">Nhanh
                                HN - Phòng KD3_HuyPV | Nhanh.vn</a></td>
                        <td rowspan="4"><b>3</b></td>
                        <td rowspan="4"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8236&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7,116,000</a>
                        </td>
                    </tr>
                    <tr trid="37" class="trid-37 even">
                        <td>Gói Basic 2 - QLBH - offline</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=294&amp;employeeId=8236&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,600,000</a>
                        </td>
                    </tr>
                    <tr trid="37" class="trid-37">
                        <td>Gói Premium - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=253&amp;employeeId=8236&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,000,000</a>
                        </td>
                    </tr>
                    <tr trid="37" class="trid-37 even">
                        <td>Gói phí nâng cấp gói phần mềm</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=317&amp;employeeId=8236&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">516,000</a>
                        </td>
                    </tr>
                    <tr trid="41" class="trid-41">
                        <td rowspan="14">8</td>
                        <td rowspan="14"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10336&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4724</a>
                        </td>
                        <td rowspan="14"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10336&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Giảm
                                giá</a></td>
                        <td rowspan="14"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=300">Phòng
                                IT | Nhanh.vn</a></td>
                        <td rowspan="14"><b>13</b></td>
                        <td rowspan="14"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10336&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,922,600</a>
                        </td>
                    </tr>
                    <tr trid="41" class="trid-41 even">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=10336&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">969,000</a>
                        </td>
                    </tr>
                    <tr trid="41" class="trid-41">
                        <td>Gói Enterprise - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=254&amp;employeeId=10336&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">960,000</a>
                        </td>
                    </tr>
                    <tr trid="41" class="trid-41 even">
                        <td>Gói Ecom (không giới hạn gian hàng/1 sàn TMĐT)</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=511&amp;employeeId=10336&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">690,000</a>
                        </td>
                    </tr>
                    <tr trid="41" class="trid-41">
                        <td>Gói Website tối ưu</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=268&amp;employeeId=10336&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">550,000</a>
                        </td>
                    </tr>
                    <tr trid="41" class="trid-41 even">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=10336&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">240,000</a>
                        </td>
                    </tr>
                    <tr trid="41" class="trid-41">
                        <td>Gói Omni Starter</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=414&amp;employeeId=10336&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">210,600</a>
                        </td>
                    </tr>
                    <tr trid="41" class="trid-41 even">
                        <td>Gói phí nâng cấp gói phần mềm</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=317&amp;employeeId=10336&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">84,000</a>
                        </td>
                    </tr>
                    <tr trid="41" class="trid-41">
                        <td>Gói Basic 2 - QLBH - offline</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=294&amp;employeeId=10336&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">72,000</a>
                        </td>
                    </tr>
                    <tr trid="41" class="trid-41 even">
                        <td>Gói thiết kế thêm tính năng cho website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=372&amp;employeeId=10336&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">50,000</a>
                        </td>
                    </tr>
                    <tr trid="41" class="trid-41">
                        <td>Chăm sóc fanpage - Gói VIP 1</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=513&amp;employeeId=10336&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">44,000</a>
                        </td>
                    </tr>
                    <tr trid="41" class="trid-41 even">
                        <td>Gói Ecom</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=509&amp;employeeId=10336&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">27,000</a>
                        </td>
                    </tr>
                    <tr trid="41" class="trid-41">
                        <td>Gói thêm tính năng mới</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=236&amp;employeeId=10336&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">18,000</a>
                        </td>
                    </tr>
                    <tr trid="41" class="trid-41 even">
                        <td>Gói Tool quét data facebook</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=589&amp;employeeId=10336&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8,000</a>
                        </td>
                    </tr>
                    <tr trid="55" class="trid-55">
                        <td rowspan="12">9</td>
                        <td rowspan="12"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8509&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7553</a>
                        </td>
                        <td rowspan="12"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8509&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Thị Hiền</a></td>
                        <td rowspan="12"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1284">Nhanh
                                HN - KD16_TungNH | Nhanh.vn</a></td>
                        <td rowspan="12"><b>11</b></td>
                        <td rowspan="12"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8509&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">50,241,000</a>
                        </td>
                    </tr>
                    <tr trid="55" class="trid-55 even">
                        <td>Gói Premium - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=253&amp;employeeId=8509&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">24,720,000</a>
                        </td>
                    </tr>
                    <tr trid="55" class="trid-55">
                        <td>Gói Website tối ưu</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=268&amp;employeeId=8509&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5,040,000</a>
                        </td>
                    </tr>
                    <tr trid="55" class="trid-55 even">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=8509&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4,757,000</a>
                        </td>
                    </tr>
                    <tr trid="55" class="trid-55">
                        <td>Gói SEO TỐI ƯU</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=574&amp;employeeId=8509&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4,219,500</a>
                        </td>
                    </tr>
                    <tr trid="55" class="trid-55 even">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=8509&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4,200,000</a>
                        </td>
                    </tr>
                    <tr trid="55" class="trid-55">
                        <td>Gói Combo 5 gian hàng</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=451&amp;employeeId=8509&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,520,000</a>
                        </td>
                    </tr>
                    <tr trid="55" class="trid-55 even">
                        <td>Gói Ecom</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=509&amp;employeeId=8509&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,644,000</a>
                        </td>
                    </tr>
                    <tr trid="55" class="trid-55">
                        <td>Gói Basic 1 - QLBH - online</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=293&amp;employeeId=8509&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,200,000</a>
                        </td>
                    </tr>
                    <tr trid="55" class="trid-55 even">
                        <td>Thiết kế thêm tính năng cho website: bảo mật https cho website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=305&amp;employeeId=8509&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">840,000</a>
                        </td>
                    </tr>
                    <tr trid="55" class="trid-55">
                        <td>Gói Shipping - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=251&amp;employeeId=8509&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">600,000</a>
                        </td>
                    </tr>
                    <tr trid="55" class="trid-55 even">
                        <td>Gói Tạo mới Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=542&amp;employeeId=8509&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">500,500</a>
                        </td>
                    </tr>
                    <tr trid="67" class="trid-67">
                        <td rowspan="26">10</td>
                        <td rowspan="26"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10337&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">0006</a>
                        </td>
                        <td rowspan="26"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10337&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Data
                                bàn giao</a></td>
                        <td rowspan="26"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=300">Phòng
                                IT | Nhanh.vn</a></td>
                        <td rowspan="26"><b>25</b></td>
                        <td rowspan="26"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10337&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">75,307,800</a>
                        </td>
                    </tr>
                    <tr trid="67" class="trid-67 even">
                        <td>Gói Premium - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=253&amp;employeeId=10337&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">14,940,000</a>
                        </td>
                    </tr>
                    <tr trid="67" class="trid-67">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=10337&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">12,320,000</a>
                        </td>
                    </tr>
                    <tr trid="67" class="trid-67 even">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=10337&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10,533,000</a>
                        </td>
                    </tr>
                    <tr trid="67" class="trid-67">
                        <td>Gói Omni Enterprise</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=416&amp;employeeId=10337&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5,968,800</a>
                        </td>
                    </tr>
                    <tr trid="67" class="trid-67 even">
                        <td>Gói Website tối ưu</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=268&amp;employeeId=10337&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5,544,000</a>
                        </td>
                    </tr>
                    <tr trid="67" class="trid-67">
                        <td>Gói Website cơ bản</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=267&amp;employeeId=10337&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,600,000</a>
                        </td>
                    </tr>
                    <tr trid="67" class="trid-67 even">
                        <td>Gói Ecom full sàn TMĐT</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=536&amp;employeeId=10337&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,240,000</a>
                        </td>
                    </tr>
                    <tr trid="67" class="trid-67">
                        <td>Gói Omni Starter</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=414&amp;employeeId=10337&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,340,000</a>
                        </td>
                    </tr>
                    <tr trid="67" class="trid-67 even">
                        <td>Gói thiết kế thêm tính năng cho website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=372&amp;employeeId=10337&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,300,000</a>
                        </td>
                    </tr>
                    <tr trid="67" class="trid-67">
                        <td>Gói Omni Premium</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=415&amp;employeeId=10337&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,040,000</a>
                        </td>
                    </tr>
                    <tr trid="67" class="trid-67 even">
                        <td>Gói Kho tổng (chỉ xuất nhập kho, không bán hàng)</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=420&amp;employeeId=10337&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,016,000</a>
                        </td>
                    </tr>
                    <tr trid="67" class="trid-67">
                        <td>Gói Basic 1 - QLBH - online</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=293&amp;employeeId=10337&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,680,000</a>
                        </td>
                    </tr>
                    <tr trid="67" class="trid-67 even">
                        <td>Gói thêm tính năng mới</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=236&amp;employeeId=10337&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,512,000</a>
                        </td>
                    </tr>
                    <tr trid="67" class="trid-67">
                        <td>Thiết kế thêm tính năng cho website: bảo mật https cho website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=305&amp;employeeId=10337&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,224,000</a>
                        </td>
                    </tr>
                    <tr trid="67" class="trid-67 even">
                        <td>Gói thiết kế website theo yêu cầu</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=103&amp;employeeId=10337&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,200,000</a>
                        </td>
                    </tr>
                    <tr trid="67" class="trid-67">
                        <td>Gói Combo 3 fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=439&amp;employeeId=10337&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">840,000</a>
                        </td>
                    </tr>
                    <tr trid="67" class="trid-67 even">
                        <td>Gói Ecom</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=509&amp;employeeId=10337&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">816,000</a>
                        </td>
                    </tr>
                    <tr trid="67" class="trid-67">
                        <td>Gói dịch vụ nhập liệu sàn TMĐT</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=502&amp;employeeId=10337&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">731,700</a>
                        </td>
                    </tr>
                    <tr trid="67" class="trid-67 even">
                        <td>Gói Shipping - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=251&amp;employeeId=10337&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">720,000</a>
                        </td>
                    </tr>
                    <tr trid="67" class="trid-67">
                        <td>Gói Ecomcare Shopee</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=503&amp;employeeId=10337&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">516,375</a>
                        </td>
                    </tr>
                    <tr trid="67" class="trid-67 even">
                        <td>Gói Basic 2 - QLBH - offline</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=294&amp;employeeId=10337&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">480,000</a>
                        </td>
                    </tr>
                    <tr trid="67" class="trid-67">
                        <td>Gói phí tích hợp API</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=261&amp;employeeId=10337&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">360,000</a>
                        </td>
                    </tr>
                    <tr trid="67" class="trid-67 even">
                        <td>Gói khởi tạo và Decor gian hàng</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=579&amp;employeeId=10337&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">182,925</a>
                        </td>
                    </tr>
                    <tr trid="67" class="trid-67">
                        <td>Gói Xác minh Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=543&amp;employeeId=10337&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">143,000</a>
                        </td>
                    </tr>
                    <tr trid="67" class="trid-67 even">
                        <td>Gói Ecom (không giới hạn gian hàng/1 sàn TMĐT)</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=511&amp;employeeId=10337&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">60,000</a>
                        </td>
                    </tr>
                    <tr trid="93" class="trid-93">
                        <td rowspan="2">11</td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7955&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7023</a>
                        </td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7955&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Thị Nhật Minh</a></td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1318">Nhanh
                                HN - Phòng KD2_TùngNT | Nhanh.vn</a></td>
                        <td rowspan="2"><b>1</b></td>
                        <td rowspan="2"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7955&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="93" class="trid-93 even">
                        <td>Gói Xác minh Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=543&amp;employeeId=7955&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="95" class="trid-95">
                        <td rowspan="8">12</td>
                        <td rowspan="8"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10303&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9138</a>
                        </td>
                        <td rowspan="8"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10303&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Chu
                                Văn Thảo</a></td>
                        <td rowspan="8"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1457">Phòng
                                dịch vụ SEO GG MAPS | Nhanh.vn</a></td>
                        <td rowspan="8"><b>7</b></td>
                        <td rowspan="8"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10303&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">15,600,000</a>
                        </td>
                    </tr>
                    <tr trid="95" class="trid-95 even">
                        <td>Gói SEO CƠ BẢN</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=573&amp;employeeId=10303&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5,940,000</a>
                        </td>
                    </tr>
                    <tr trid="95" class="trid-95">
                        <td>Gói Tạo mới Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=542&amp;employeeId=10303&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5,895,000</a>
                        </td>
                    </tr>
                    <tr trid="95" class="trid-95 even">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=10303&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,085,000</a>
                        </td>
                    </tr>
                    <tr trid="95" class="trid-95">
                        <td>Gói Xác minh Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=543&amp;employeeId=10303&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">855,000</a>
                        </td>
                    </tr>
                    <tr trid="95" class="trid-95 even">
                        <td>Gói Website cơ bản</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=267&amp;employeeId=10303&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">825,000</a>
                        </td>
                    </tr>
                    <tr trid="95" class="trid-95">
                        <td>Gói SEO TỐI ƯU</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=574&amp;employeeId=10303&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="95" class="trid-95 even">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=10303&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="103" class="trid-103">
                        <td rowspan="7">13</td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8171&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7226</a>
                        </td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8171&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Đức Kiên</a></td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1318">Nhanh
                                HN - Phòng KD2_TùngNT | Nhanh.vn</a></td>
                        <td rowspan="7"><b>6</b></td>
                        <td rowspan="7"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8171&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">40,335,000</a>
                        </td>
                    </tr>
                    <tr trid="103" class="trid-103 even">
                        <td>Gói Premium - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=253&amp;employeeId=8171&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">29,640,000</a>
                        </td>
                    </tr>
                    <tr trid="103" class="trid-103">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=8171&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4,200,000</a>
                        </td>
                    </tr>
                    <tr trid="103" class="trid-103 even">
                        <td>Gói Website tối ưu</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=268&amp;employeeId=8171&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,085,714</a>
                        </td>
                    </tr>
                    <tr trid="103" class="trid-103">
                        <td>Gói Basic 2 - QLBH - offline</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=294&amp;employeeId=8171&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,400,000</a>
                        </td>
                    </tr>
                    <tr trid="103" class="trid-103 even">
                        <td>Thiết kế thêm tính năng cho website: bảo mật https cho website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=305&amp;employeeId=8171&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">514,286</a>
                        </td>
                    </tr>
                    <tr trid="103" class="trid-103">
                        <td>Gói Xác minh Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=543&amp;employeeId=8171&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">495,000</a>
                        </td>
                    </tr>
                    <tr trid="110" class="trid-110 even">
                        <td rowspan="12">14</td>
                        <td rowspan="12"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10571&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9362</a>
                        </td>
                        <td rowspan="12"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10571&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Khánh Vinh</a></td>
                        <td rowspan="12"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1320">Nhanh
                                HN - Phòng KD4_TrườngVV | Nhanh.vn</a></td>
                        <td rowspan="12"><b>11</b></td>
                        <td rowspan="12"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10571&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">53,348,000</a>
                        </td>
                    </tr>
                    <tr trid="110" class="trid-110">
                        <td>Gói Premium - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=253&amp;employeeId=10571&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">22,362,768</a>
                        </td>
                    </tr>
                    <tr trid="110" class="trid-110 even">
                        <td>Gói Omni Premium</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=415&amp;employeeId=10571&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">12,285,442</a>
                        </td>
                    </tr>
                    <tr trid="110" class="trid-110">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=10571&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7,175,000</a>
                        </td>
                    </tr>
                    <tr trid="110" class="trid-110 even">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=10571&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,945,346</a>
                        </td>
                    </tr>
                    <tr trid="110" class="trid-110">
                        <td>Gói Ecom</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=509&amp;employeeId=10571&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,818,425</a>
                        </td>
                    </tr>
                    <tr trid="110" class="trid-110 even">
                        <td>Gói SEO CƠ BẢN</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=573&amp;employeeId=10571&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,518,000</a>
                        </td>
                    </tr>
                    <tr trid="110" class="trid-110">
                        <td>Gói Kho tổng (chỉ xuất nhập kho, không bán hàng)</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=420&amp;employeeId=10571&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,445,346</a>
                        </td>
                    </tr>
                    <tr trid="110" class="trid-110 even">
                        <td>Gói Basic 2 - QLBH - offline</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=294&amp;employeeId=10571&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,200,000</a>
                        </td>
                    </tr>
                    <tr trid="110" class="trid-110">
                        <td>Gói Website cơ bản</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=267&amp;employeeId=10571&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">825,000</a>
                        </td>
                    </tr>
                    <tr trid="110" class="trid-110 even">
                        <td>Thiết kế thêm tính năng cho website: bảo mật https cho website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=305&amp;employeeId=10571&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">772,673</a>
                        </td>
                    </tr>
                    <tr trid="110" class="trid-110">
                        <td>Giấy in mã vạch 2 tem</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=578&amp;employeeId=10571&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="122" class="trid-122 even">
                        <td rowspan="6">15</td>
                        <td rowspan="6"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1159&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4754</a>
                        </td>
                        <td rowspan="6"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1159&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lại
                                Thị Thúy Ngần</a></td>
                        <td rowspan="6"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1248">Nhanh
                                HN - KD11_NganLTT | Nhanh.vn</a></td>
                        <td rowspan="6"><b>5</b></td>
                        <td rowspan="6"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1159&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9,820,000</a>
                        </td>
                    </tr>
                    <tr trid="122" class="trid-122">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=1159&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,580,000</a>
                        </td>
                    </tr>
                    <tr trid="122" class="trid-122 even">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=1159&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,500,000</a>
                        </td>
                    </tr>
                    <tr trid="122" class="trid-122">
                        <td>Gói Basic 1 - QLBH - online</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=293&amp;employeeId=1159&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,040,000</a>
                        </td>
                    </tr>
                    <tr trid="122" class="trid-122 even">
                        <td>Gói phí tích hợp API</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=261&amp;employeeId=1159&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,500,000</a>
                        </td>
                    </tr>
                    <tr trid="122" class="trid-122">
                        <td>Gói Ecom</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=509&amp;employeeId=1159&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,200,000</a>
                        </td>
                    </tr>
                    <tr trid="128" class="trid-128 even">
                        <td rowspan="7">16</td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11174&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10025</a>
                        </td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11174&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Đào
                                Thị Hồng Nhung</a></td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1457">Phòng
                                dịch vụ SEO GG MAPS | Nhanh.vn</a></td>
                        <td rowspan="7"><b>6</b></td>
                        <td rowspan="7"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11174&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">18,940,000</a>
                        </td>
                    </tr>
                    <tr trid="128" class="trid-128">
                        <td>Gói Xác minh Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=543&amp;employeeId=11174&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5,279,000</a>
                        </td>
                    </tr>
                    <tr trid="128" class="trid-128 even">
                        <td>Gói Thiết kế Website P</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=520&amp;employeeId=11174&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4,000,000</a>
                        </td>
                    </tr>
                    <tr trid="128" class="trid-128">
                        <td>Gói SEO CƠ BẢN</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=573&amp;employeeId=11174&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,861,000</a>
                        </td>
                    </tr>
                    <tr trid="128" class="trid-128 even">
                        <td>Gói SEO TỐI ƯU</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=574&amp;employeeId=11174&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,003,000</a>
                        </td>
                    </tr>
                    <tr trid="128" class="trid-128">
                        <td>Gói Tạo mới Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=542&amp;employeeId=11174&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,497,000</a>
                        </td>
                    </tr>
                    <tr trid="128" class="trid-128 even">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=11174&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">300,000</a>
                        </td>
                    </tr>
                    <tr trid="135" class="trid-135">
                        <td rowspan="2">17</td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1739&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">0445</a>
                        </td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1739&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Đinh
                                Thị Thu Hương</a></td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1265">Phòng
                                KD 4.1 | Vật giá - Hà Nội</a></td>
                        <td rowspan="2"><b>1</b></td>
                        <td rowspan="2"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1739&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8,712,000</a>
                        </td>
                    </tr>
                    <tr trid="135" class="trid-135 even">
                        <td>GHĐB (tái ký)</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=231&amp;employeeId=1739&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8,712,000</a>
                        </td>
                    </tr>
                    <tr trid="137" class="trid-137">
                        <td rowspan="2">18</td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=6681&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5095</a>
                        </td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=6681&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phạm
                                Thị Giang</a></td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=516">Phòng
                                chăm sóc khách hàng - Online | Vật giá - Hà Nội</a></td>
                        <td rowspan="2"><b>1</b></td>
                        <td rowspan="2"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=6681&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">792,000</a>
                        </td>
                    </tr>
                    <tr trid="137" class="trid-137 even">
                        <td>GHĐB (tái ký)</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=231&amp;employeeId=6681&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">792,000</a>
                        </td>
                    </tr>
                    <tr trid="139" class="trid-139">
                        <td rowspan="5">19</td>
                        <td rowspan="5"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=2097&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">0826</a>
                        </td>
                        <td rowspan="5"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=2097&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Tạ
                                Thị Thùy</a></td>
                        <td rowspan="5"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=560">Phòng
                                KD 4 | Vật giá - Hà Nội</a></td>
                        <td rowspan="5"><b>4</b></td>
                        <td rowspan="5"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=2097&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">22,325,600</a>
                        </td>
                    </tr>
                    <tr trid="139" class="trid-139 even">
                        <td>GHĐB (tái ký)</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=231&amp;employeeId=2097&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10,098,000</a>
                        </td>
                    </tr>
                    <tr trid="139" class="trid-139">
                        <td>GHĐB (mới)</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=232&amp;employeeId=2097&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7,920,000</a>
                        </td>
                    </tr>
                    <tr trid="139" class="trid-139 even">
                        <td>Vchat gói Cơ bản</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=386&amp;employeeId=2097&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,707,600</a>
                        </td>
                    </tr>
                    <tr trid="139" class="trid-139">
                        <td>Nạp tiền</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=230&amp;employeeId=2097&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">600,000</a>
                        </td>
                    </tr>
                    <tr trid="144" class="trid-144 even">
                        <td rowspan="7">20</td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8489&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7533</a>
                        </td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8489&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Diệu Linh</a></td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1282">Phòng
                                Dịch Vụ Khách Hàng | Nhanh.vn</a></td>
                        <td rowspan="7"><b>6</b></td>
                        <td rowspan="7"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8489&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">12,255,568</a>
                        </td>
                    </tr>
                    <tr trid="144" class="trid-144">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=8489&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6,690,000</a>
                        </td>
                    </tr>
                    <tr trid="144" class="trid-144 even">
                        <td>Gói SEO TỐI ƯU</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=574&amp;employeeId=8489&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,537,568</a>
                        </td>
                    </tr>
                    <tr trid="144" class="trid-144">
                        <td>Gói Premium - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=253&amp;employeeId=8489&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,500,000</a>
                        </td>
                    </tr>
                    <tr trid="144" class="trid-144 even">
                        <td>Gói Thiết kế Website P</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=520&amp;employeeId=8489&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">700,000</a>
                        </td>
                    </tr>
                    <tr trid="144" class="trid-144">
                        <td>Gói phần mềm theo yêu cầu</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=112&amp;employeeId=8489&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">600,000</a>
                        </td>
                    </tr>
                    <tr trid="144" class="trid-144 even">
                        <td>Gói Ecom</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=509&amp;employeeId=8489&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">228,000</a>
                        </td>
                    </tr>
                    <tr trid="151" class="trid-151">
                        <td rowspan="3">21</td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1479&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">0174</a>
                        </td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1479&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Vũ
                                Thị Phương Anh</a></td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1146">Phòng
                                KD 7 | Vật giá - Hà Nội</a></td>
                        <td rowspan="3"><b>2</b></td>
                        <td rowspan="3"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1479&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7,422,000</a>
                        </td>
                    </tr>
                    <tr trid="151" class="trid-151 even">
                        <td>Vchat gói Cơ bản</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=386&amp;employeeId=1479&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4,452,000</a>
                        </td>
                    </tr>
                    <tr trid="151" class="trid-151">
                        <td>GHĐB (tái ký)</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=231&amp;employeeId=1479&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,970,000</a>
                        </td>
                    </tr>
                    <tr trid="154" class="trid-154 even">
                        <td rowspan="3">22</td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=805&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">0630</a>
                        </td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=805&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Thị Uyên</a></td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=516">Phòng
                                chăm sóc khách hàng - Online | Vật giá - Hà Nội</a></td>
                        <td rowspan="3"><b>2</b></td>
                        <td rowspan="3"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=805&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,782,000</a>
                        </td>
                    </tr>
                    <tr trid="154" class="trid-154">
                        <td>GHĐB (tái ký)</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=231&amp;employeeId=805&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,782,000</a>
                        </td>
                    </tr>
                    <tr trid="154" class="trid-154 even">
                        <td>GHĐB (mới)</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=232&amp;employeeId=805&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="157" class="trid-157">
                        <td rowspan="3">23</td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11110&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9962</a>
                        </td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11110&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Đoàn
                                Thị Hà</a></td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1386">Sale
                                Marketing | Nhanh.vn</a></td>
                        <td rowspan="3"><b>2</b></td>
                        <td rowspan="3"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11110&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5,960,000</a>
                        </td>
                    </tr>
                    <tr trid="157" class="trid-157 even">
                        <td>Chăm sóc fanpage - Gói VIP 1</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=513&amp;employeeId=11110&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,960,000</a>
                        </td>
                    </tr>
                    <tr trid="157" class="trid-157">
                        <td>Gói Thiết kế Website P</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=520&amp;employeeId=11110&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,000,000</a>
                        </td>
                    </tr>
                    <tr trid="160" class="trid-160 even">
                        <td rowspan="8">24</td>
                        <td rowspan="8"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9503&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8396</a>
                        </td>
                        <td rowspan="8"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9503&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Anh Tuấn</a></td>
                        <td rowspan="8"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1317">Nhanh
                                HN - Phòng KD5_AnhNX | Nhanh.vn</a></td>
                        <td rowspan="8"><b>7</b></td>
                        <td rowspan="8"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9503&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">57,150,000</a>
                        </td>
                    </tr>
                    <tr trid="160" class="trid-160">
                        <td>Gói Premium - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=253&amp;employeeId=9503&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">27,900,000</a>
                        </td>
                    </tr>
                    <tr trid="160" class="trid-160 even">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=9503&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">16,776,000</a>
                        </td>
                    </tr>
                    <tr trid="160" class="trid-160">
                        <td>Gói Combo 5 gian hàng</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=451&amp;employeeId=9503&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4,680,000</a>
                        </td>
                    </tr>
                    <tr trid="160" class="trid-160 even">
                        <td>Gói Basic 1 - QLBH - online</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=293&amp;employeeId=9503&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,600,000</a>
                        </td>
                    </tr>
                    <tr trid="160" class="trid-160">
                        <td>Gói Ecom</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=509&amp;employeeId=9503&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,244,000</a>
                        </td>
                    </tr>
                    <tr trid="160" class="trid-160 even">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=9503&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,650,000</a>
                        </td>
                    </tr>
                    <tr trid="160" class="trid-160">
                        <td>Gói thêm tính năng mới</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=236&amp;employeeId=9503&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">300,000</a>
                        </td>
                    </tr>
                    <tr trid="168" class="trid-168 even">
                        <td rowspan="13">25</td>
                        <td rowspan="13"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10265&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9100</a>
                        </td>
                        <td rowspan="13"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10265&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Vũ
                                Thị Hoa</a></td>
                        <td rowspan="13"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1319">Nhanh
                                HN - Phòng KD3_HuyPV | Nhanh.vn</a></td>
                        <td rowspan="13"><b>12</b></td>
                        <td rowspan="13"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10265&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">27,419,976</a>
                        </td>
                    </tr>
                    <tr trid="168" class="trid-168">
                        <td>Gói Ecom (không giới hạn gian hàng/1 sàn TMĐT)</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=511&amp;employeeId=10265&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8,310,000</a>
                        </td>
                    </tr>
                    <tr trid="168" class="trid-168 even">
                        <td>Gói SEO TỐI ƯU</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=574&amp;employeeId=10265&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6,014,976</a>
                        </td>
                    </tr>
                    <tr trid="168" class="trid-168">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=10265&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,300,000</a>
                        </td>
                    </tr>
                    <tr trid="168" class="trid-168 even">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=10265&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,505,000</a>
                        </td>
                    </tr>
                    <tr trid="168" class="trid-168">
                        <td>Gói Ecom</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=509&amp;employeeId=10265&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,473,000</a>
                        </td>
                    </tr>
                    <tr trid="168" class="trid-168 even">
                        <td>Gói Website cơ bản</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=267&amp;employeeId=10265&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,260,000</a>
                        </td>
                    </tr>
                    <tr trid="168" class="trid-168">
                        <td>Gói Basic 1 - QLBH - online</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=293&amp;employeeId=10265&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,200,000</a>
                        </td>
                    </tr>
                    <tr trid="168" class="trid-168 even">
                        <td>Gói thêm tính năng mới</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=236&amp;employeeId=10265&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">918,000</a>
                        </td>
                    </tr>
                    <tr trid="168" class="trid-168">
                        <td>Gói Shipping - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=251&amp;employeeId=10265&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">840,000</a>
                        </td>
                    </tr>
                    <tr trid="168" class="trid-168 even">
                        <td>Gói phí tích hợp API</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=261&amp;employeeId=10265&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">840,000</a>
                        </td>
                    </tr>
                    <tr trid="168" class="trid-168">
                        <td>Gói SEO CƠ BẢN</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=573&amp;employeeId=10265&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">506,000</a>
                        </td>
                    </tr>
                    <tr trid="168" class="trid-168 even">
                        <td>Gói Xác minh Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=543&amp;employeeId=10265&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">253,000</a>
                        </td>
                    </tr>
                    <tr trid="181" class="trid-181">
                        <td rowspan="6">26</td>
                        <td rowspan="6"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10098&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8949</a>
                        </td>
                        <td rowspan="6"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10098&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Hoàng
                                Tiến Cường</a></td>
                        <td rowspan="6"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1389">Dự
                                án Wehelp | Công ty cổ phần WeHelp</a></td>
                        <td rowspan="6"><b>5</b></td>
                        <td rowspan="6"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10098&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">55,440,000</a>
                        </td>
                    </tr>
                    <tr trid="181" class="trid-181 even">
                        <td>Bizshare - Gói chăm sóc fanpage - Nội dung</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=408&amp;employeeId=10098&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">16,280,000</a>
                        </td>
                    </tr>
                    <tr trid="181" class="trid-181">
                        <td>SEO lead</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=533&amp;employeeId=10098&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">13,200,000</a>
                        </td>
                    </tr>
                    <tr trid="181" class="trid-181 even">
                        <td>Bizshare - Thiết kế website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=521&amp;employeeId=10098&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">13,200,000</a>
                        </td>
                    </tr>
                    <tr trid="181" class="trid-181">
                        <td>Bizshare - Tối ưu kênh bán hàng sàn TMĐT Shopee</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=486&amp;employeeId=10098&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">12,760,000</a>
                        </td>
                    </tr>
                    <tr trid="181" class="trid-181 even">
                        <td>BizShare - Dịch vụ SEO tổng thể</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=472&amp;employeeId=10098&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="187" class="trid-187">
                        <td rowspan="10">27</td>
                        <td rowspan="10"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=364&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4396</a>
                        </td>
                        <td rowspan="10"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=364&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Diệu Linh</a></td>
                        <td rowspan="10"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1317">Nhanh
                                HN - Phòng KD5_AnhNX | Nhanh.vn</a></td>
                        <td rowspan="10"><b>9</b></td>
                        <td rowspan="10"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=364&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">19,200,000</a>
                        </td>
                    </tr>
                    <tr trid="187" class="trid-187 even">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=364&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6,000,000</a>
                        </td>
                    </tr>
                    <tr trid="187" class="trid-187">
                        <td>Gói Premium - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=253&amp;employeeId=364&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6,000,000</a>
                        </td>
                    </tr>
                    <tr trid="187" class="trid-187 even">
                        <td>Gói phần mềm theo yêu cầu</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=112&amp;employeeId=364&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,240,000</a>
                        </td>
                    </tr>
                    <tr trid="187" class="trid-187">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=364&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,100,000</a>
                        </td>
                    </tr>
                    <tr trid="187" class="trid-187 even">
                        <td>Gói Ecom</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=509&amp;employeeId=364&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,500,000</a>
                        </td>
                    </tr>
                    <tr trid="187" class="trid-187">
                        <td>Gói thêm tính năng mới</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=236&amp;employeeId=364&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">360,000</a>
                        </td>
                    </tr>
                    <tr trid="187" class="trid-187 even">
                        <td>Lệ phí đăng ký tên miền VN</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=566&amp;employeeId=364&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="187" class="trid-187">
                        <td>Phí dịch vụ TK quản trị tên miền VN</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=568&amp;employeeId=364&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="187" class="trid-187 even">
                        <td>Phí duy trì tên miền VN</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=567&amp;employeeId=364&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="197" class="trid-197">
                        <td rowspan="6">28</td>
                        <td rowspan="6"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1493&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">0189</a>
                        </td>
                        <td rowspan="6"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1493&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phan
                                Quỳnh Hương</a></td>
                        <td rowspan="6"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=591">Phòng
                                CSGH | Vật giá - Hà Nội</a></td>
                        <td rowspan="6"><b>5</b></td>
                        <td rowspan="6"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1493&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">61,858,400</a>
                        </td>
                    </tr>
                    <tr trid="197" class="trid-197 even">
                        <td>Vchat gói Chuyên nghiệp</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=387&amp;employeeId=1493&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">32,946,000</a>
                        </td>
                    </tr>
                    <tr trid="197" class="trid-197">
                        <td>GHĐB (tái ký)</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=231&amp;employeeId=1493&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">19,602,000</a>
                        </td>
                    </tr>
                    <tr trid="197" class="trid-197 even">
                        <td>GHĐB (mới)</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=232&amp;employeeId=1493&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7,920,000</a>
                        </td>
                    </tr>
                    <tr trid="197" class="trid-197">
                        <td>Vchat gói Cơ bản</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=386&amp;employeeId=1493&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">890,400</a>
                        </td>
                    </tr>
                    <tr trid="197" class="trid-197 even">
                        <td>Nạp tiền</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=230&amp;employeeId=1493&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">500,000</a>
                        </td>
                    </tr>
                    <tr trid="203" class="trid-203">
                        <td rowspan="4">29</td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11283&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10118</a>
                        </td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11283&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Văn Sơn</a></td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1320">Nhanh
                                HN - Phòng KD4_TrườngVV | Nhanh.vn</a></td>
                        <td rowspan="4"><b>3</b></td>
                        <td rowspan="4"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11283&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5,489,000</a>
                        </td>
                    </tr>
                    <tr trid="203" class="trid-203 even">
                        <td>Gói Xác minh Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=543&amp;employeeId=11283&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,502,500</a>
                        </td>
                    </tr>
                    <tr trid="203" class="trid-203">
                        <td>Gói SEO CƠ BẢN</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=573&amp;employeeId=11283&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,486,000</a>
                        </td>
                    </tr>
                    <tr trid="203" class="trid-203 even">
                        <td>Gói Tạo mới Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=542&amp;employeeId=11283&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">500,500</a>
                        </td>
                    </tr>
                    <tr trid="207" class="trid-207">
                        <td rowspan="7">30</td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=715&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4375</a>
                        </td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=715&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Xuân Anh</a></td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1317">Nhanh
                                HN - Phòng KD5_AnhNX | Nhanh.vn</a></td>
                        <td rowspan="7"><b>6</b></td>
                        <td rowspan="7"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=715&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">14,826,000</a>
                        </td>
                    </tr>
                    <tr trid="207" class="trid-207 even">
                        <td>Gói Premium - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=253&amp;employeeId=715&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8,730,000</a>
                        </td>
                    </tr>
                    <tr trid="207" class="trid-207">
                        <td>Gói Enterprise - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=254&amp;employeeId=715&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,150,000</a>
                        </td>
                    </tr>
                    <tr trid="207" class="trid-207 even">
                        <td>Gói Kho tổng (chỉ xuất nhập kho, không bán hàng)</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=420&amp;employeeId=715&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,440,000</a>
                        </td>
                    </tr>
                    <tr trid="207" class="trid-207">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=715&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">750,000</a>
                        </td>
                    </tr>
                    <tr trid="207" class="trid-207 even">
                        <td>Gói Ecom</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=509&amp;employeeId=715&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">456,000</a>
                        </td>
                    </tr>
                    <tr trid="207" class="trid-207">
                        <td>Gói thêm tính năng mới</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=236&amp;employeeId=715&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">300,000</a>
                        </td>
                    </tr>
                    <tr trid="214" class="trid-214 even">
                        <td rowspan="6">31</td>
                        <td rowspan="6"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8000&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7068</a>
                        </td>
                        <td rowspan="6"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8000&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phạm
                                Thị Thanh</a></td>
                        <td rowspan="6"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1241">Nhanh
                                HN - KD10_ThanhPT | Nhanh.vn</a></td>
                        <td rowspan="6"><b>5</b></td>
                        <td rowspan="6"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8000&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8,945,500</a>
                        </td>
                    </tr>
                    <tr trid="214" class="trid-214">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=8000&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5,700,000</a>
                        </td>
                    </tr>
                    <tr trid="214" class="trid-214 even">
                        <td>Gói thêm tính năng mới</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=236&amp;employeeId=8000&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,080,000</a>
                        </td>
                    </tr>
                    <tr trid="214" class="trid-214">
                        <td>Gói Premium - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=253&amp;employeeId=8000&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">975,000</a>
                        </td>
                    </tr>
                    <tr trid="214" class="trid-214 even">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=8000&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">690,000</a>
                        </td>
                    </tr>
                    <tr trid="214" class="trid-214">
                        <td>Gói Xác minh Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=543&amp;employeeId=8000&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">500,500</a>
                        </td>
                    </tr>
                    <tr trid="220" class="trid-220 even">
                        <td rowspan="13">32</td>
                        <td rowspan="13"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10145&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8981</a>
                        </td>
                        <td rowspan="13"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10145&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                Thị Ngọc Quyền</a></td>
                        <td rowspan="13"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1158">Nhanh
                                HCM - Nhóm KD3_NgânTK | Vật giá - Hồ Chí Minh</a></td>
                        <td rowspan="13"><b>12</b></td>
                        <td rowspan="13"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10145&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">44,348,000</a>
                        </td>
                    </tr>
                    <tr trid="220" class="trid-220">
                        <td>Gói Premium - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=253&amp;employeeId=10145&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">21,552,000</a>
                        </td>
                    </tr>
                    <tr trid="220" class="trid-220 even">
                        <td>Gói Website cơ bản</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=267&amp;employeeId=10145&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8,160,000</a>
                        </td>
                    </tr>
                    <tr trid="220" class="trid-220">
                        <td>Gói Website tối ưu</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=268&amp;employeeId=10145&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5,760,000</a>
                        </td>
                    </tr>
                    <tr trid="220" class="trid-220 even">
                        <td>Thiết kế thêm tính năng cho website: bảo mật https cho website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=305&amp;employeeId=10145&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,700,000</a>
                        </td>
                    </tr>
                    <tr trid="220" class="trid-220">
                        <td>Gói Basic 2 - QLBH - offline</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=294&amp;employeeId=10145&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,200,000</a>
                        </td>
                    </tr>
                    <tr trid="220" class="trid-220 even">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=10145&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">960,000</a>
                        </td>
                    </tr>
                    <tr trid="220" class="trid-220">
                        <td>Gói Ecom</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=509&amp;employeeId=10145&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">864,000</a>
                        </td>
                    </tr>
                    <tr trid="220" class="trid-220 even">
                        <td>Gói thiết kế thêm tính năng cho website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=372&amp;employeeId=10145&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">800,000</a>
                        </td>
                    </tr>
                    <tr trid="220" class="trid-220">
                        <td>Gói Basic 1 - QLBH - online</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=293&amp;employeeId=10145&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">600,000</a>
                        </td>
                    </tr>
                    <tr trid="220" class="trid-220 even">
                        <td>Gói combo 3 gian hàng</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=471&amp;employeeId=10145&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">600,000</a>
                        </td>
                    </tr>
                    <tr trid="220" class="trid-220">
                        <td>Gói Kho tổng (chỉ xuất nhập kho, không bán hàng)</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=420&amp;employeeId=10145&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">576,000</a>
                        </td>
                    </tr>
                    <tr trid="220" class="trid-220 even">
                        <td>Gói phí tích hợp API</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=261&amp;employeeId=10145&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">576,000</a>
                        </td>
                    </tr>
                    <tr trid="233" class="trid-233">
                        <td rowspan="5">33</td>
                        <td rowspan="5"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11117&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9969</a>
                        </td>
                        <td rowspan="5"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11117&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Ecomcare
                                Nhanhvn</a></td>
                        <td rowspan="5"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1419">Ecomcare
                                | Nhanh.vn</a></td>
                        <td rowspan="5"><b>4</b></td>
                        <td rowspan="5"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11117&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="233" class="trid-233 even">
                        <td>Gói khởi tạo và Decor gian hàng</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=579&amp;employeeId=11117&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="233" class="trid-233">
                        <td>Gói Thiết kế Website E</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=532&amp;employeeId=11117&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="233" class="trid-233 even">
                        <td>Gói dịch vụ nhập liệu sàn TMĐT</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=502&amp;employeeId=11117&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="233" class="trid-233">
                        <td>Gói Ecomcare Shopee</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=503&amp;employeeId=11117&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="238" class="trid-238 even">
                        <td rowspan="4">34</td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11284&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10119</a>
                        </td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11284&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                Thị Thu Trang</a></td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1419">Ecomcare
                                | Nhanh.vn</a></td>
                        <td rowspan="4"><b>3</b></td>
                        <td rowspan="4"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11284&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7,265,500</a>
                        </td>
                    </tr>
                    <tr trid="238" class="trid-238">
                        <td>Gói Ecomcare Shopee</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=503&amp;employeeId=11284&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5,005,000</a>
                        </td>
                    </tr>
                    <tr trid="238" class="trid-238 even">
                        <td>Gói dịch vụ nhập liệu sàn TMĐT</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=502&amp;employeeId=11284&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,408,000</a>
                        </td>
                    </tr>
                    <tr trid="238" class="trid-238">
                        <td>Gói khởi tạo và Decor gian hàng</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=579&amp;employeeId=11284&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">852,500</a>
                        </td>
                    </tr>
                    <tr trid="242" class="trid-242 even">
                        <td rowspan="2">35</td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10994&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9764</a>
                        </td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10994&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lê
                                Hải Anh</a></td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1147">Chăm
                                sóc khách hàng - UyênTL | Nhanh.vn</a></td>
                        <td rowspan="2"><b>1</b></td>
                        <td rowspan="2"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10994&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,580,000</a>
                        </td>
                    </tr>
                    <tr trid="242" class="trid-242">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=10994&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,580,000</a>
                        </td>
                    </tr>
                    <tr trid="244" class="trid-244 even">
                        <td rowspan="4">36</td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9702&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8570</a>
                        </td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9702&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phan
                                Thị Thu Thảo</a></td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1147">Chăm
                                sóc khách hàng - UyênTL | Nhanh.vn</a></td>
                        <td rowspan="4"><b>3</b></td>
                        <td rowspan="4"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9702&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5,430,000</a>
                        </td>
                    </tr>
                    <tr trid="244" class="trid-244">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=9702&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,930,000</a>
                        </td>
                    </tr>
                    <tr trid="244" class="trid-244 even">
                        <td>Gói Combo 5 fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=450&amp;employeeId=9702&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">900,000</a>
                        </td>
                    </tr>
                    <tr trid="244" class="trid-244">
                        <td>Gói Combo 3 fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=439&amp;employeeId=9702&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">600,000</a>
                        </td>
                    </tr>
                    <tr trid="248" class="trid-248 even">
                        <td rowspan="8">37</td>
                        <td rowspan="8"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=5442&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4822</a>
                        </td>
                        <td rowspan="8"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=5442&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Hữu Điệp</a></td>
                        <td rowspan="8"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1157">Nhanh
                                HN - KD7_ĐiệpNH | Nhanh.vn</a></td>
                        <td rowspan="8"><b>7</b></td>
                        <td rowspan="8"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=5442&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">19,902,000</a>
                        </td>
                    </tr>
                    <tr trid="248" class="trid-248">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=5442&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6,600,000</a>
                        </td>
                    </tr>
                    <tr trid="248" class="trid-248 even">
                        <td>Gói Premium - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=253&amp;employeeId=5442&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5,850,000</a>
                        </td>
                    </tr>
                    <tr trid="248" class="trid-248">
                        <td>Gói Ecom</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=509&amp;employeeId=5442&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,232,000</a>
                        </td>
                    </tr>
                    <tr trid="248" class="trid-248 even">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=5442&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,800,000</a>
                        </td>
                    </tr>
                    <tr trid="248" class="trid-248">
                        <td>Gói Kho tổng (chỉ xuất nhập kho, không bán hàng)</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=420&amp;employeeId=5442&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,620,000</a>
                        </td>
                    </tr>
                    <tr trid="248" class="trid-248 even">
                        <td>Gói Basic 1 - QLBH - online</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=293&amp;employeeId=5442&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,200,000</a>
                        </td>
                    </tr>
                    <tr trid="248" class="trid-248">
                        <td>Gói thiết kế thêm tính năng cho website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=372&amp;employeeId=5442&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">600,000</a>
                        </td>
                    </tr>
                    <tr trid="256" class="trid-256 even">
                        <td rowspan="11">38</td>
                        <td rowspan="11"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10180&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9015</a>
                        </td>
                        <td rowspan="11"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10180&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Huỳnh
                                Diễm Thy</a></td>
                        <td rowspan="11"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1158">Nhanh
                                HCM - Nhóm KD3_NgânTK | Vật giá - Hồ Chí Minh</a></td>
                        <td rowspan="11"><b>10</b></td>
                        <td rowspan="11"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10180&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">25,882,000</a>
                        </td>
                    </tr>
                    <tr trid="256" class="trid-256">
                        <td>Gói Premium - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=253&amp;employeeId=10180&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10,368,000</a>
                        </td>
                    </tr>
                    <tr trid="256" class="trid-256 even">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=10180&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4,900,000</a>
                        </td>
                    </tr>
                    <tr trid="256" class="trid-256">
                        <td>Gói Ecom</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=509&amp;employeeId=10180&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,976,000</a>
                        </td>
                    </tr>
                    <tr trid="256" class="trid-256 even">
                        <td>Chăm sóc fanpage - Gói VIP 3</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=515&amp;employeeId=10180&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,970,000</a>
                        </td>
                    </tr>
                    <tr trid="256" class="trid-256">
                        <td>Gói Basic 1 - QLBH - online</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=293&amp;employeeId=10180&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,200,000</a>
                        </td>
                    </tr>
                    <tr trid="256" class="trid-256 even">
                        <td>Gói Basic 2 - QLBH - offline</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=294&amp;employeeId=10180&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,200,000</a>
                        </td>
                    </tr>
                    <tr trid="256" class="trid-256">
                        <td>Gói thêm tính năng mới</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=236&amp;employeeId=10180&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">900,000</a>
                        </td>
                    </tr>
                    <tr trid="256" class="trid-256 even">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=10180&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">600,000</a>
                        </td>
                    </tr>
                    <tr trid="256" class="trid-256">
                        <td>Gói Kho tổng (chỉ xuất nhập kho, không bán hàng)</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=420&amp;employeeId=10180&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">384,000</a>
                        </td>
                    </tr>
                    <tr trid="256" class="trid-256 even">
                        <td>Gói phí tích hợp API</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=261&amp;employeeId=10180&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">384,000</a>
                        </td>
                    </tr>
                    <tr trid="267" class="trid-267">
                        <td rowspan="8">39</td>
                        <td rowspan="8"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11015&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9785</a>
                        </td>
                        <td rowspan="8"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11015&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Hồ
                                Thị Lan Anh</a></td>
                        <td rowspan="8"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1318">Nhanh
                                HN - Phòng KD2_TùngNT | Nhanh.vn</a></td>
                        <td rowspan="8"><b>7</b></td>
                        <td rowspan="8"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11015&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">21,360,000</a>
                        </td>
                    </tr>
                    <tr trid="267" class="trid-267 even">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=11015&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8,400,000</a>
                        </td>
                    </tr>
                    <tr trid="267" class="trid-267">
                        <td>Gói Website cơ bản</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=267&amp;employeeId=11015&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,600,000</a>
                        </td>
                    </tr>
                    <tr trid="267" class="trid-267 even">
                        <td>Gói Premium - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=253&amp;employeeId=11015&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,000,000</a>
                        </td>
                    </tr>
                    <tr trid="267" class="trid-267">
                        <td>Gói Basic 1 - QLBH - online</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=293&amp;employeeId=11015&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,400,000</a>
                        </td>
                    </tr>
                    <tr trid="267" class="trid-267 even">
                        <td>Gói Ecom</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=509&amp;employeeId=11015&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,400,000</a>
                        </td>
                    </tr>
                    <tr trid="267" class="trid-267">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=11015&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,260,000</a>
                        </td>
                    </tr>
                    <tr trid="267" class="trid-267 even">
                        <td>Thiết kế thêm tính năng cho website: bảo mật https cho website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=305&amp;employeeId=11015&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">300,000</a>
                        </td>
                    </tr>
                    <tr trid="275" class="trid-275">
                        <td rowspan="8">40</td>
                        <td rowspan="8"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8453&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7497</a>
                        </td>
                        <td rowspan="8"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8453&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Ngô
                                Hữu Tình</a></td>
                        <td rowspan="8"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1318">Nhanh
                                HN - Phòng KD2_TùngNT | Nhanh.vn</a></td>
                        <td rowspan="8"><b>7</b></td>
                        <td rowspan="8"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8453&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">21,444,000</a>
                        </td>
                    </tr>
                    <tr trid="275" class="trid-275 even">
                        <td>Gói Premium - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=253&amp;employeeId=8453&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">16,344,000</a>
                        </td>
                    </tr>
                    <tr trid="275" class="trid-275">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=8453&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,800,000</a>
                        </td>
                    </tr>
                    <tr trid="275" class="trid-275 even">
                        <td>Gói Website cơ bản</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=267&amp;employeeId=8453&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,800,000</a>
                        </td>
                    </tr>
                    <tr trid="275" class="trid-275">
                        <td>Gói phí tích hợp API</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=261&amp;employeeId=8453&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,200,000</a>
                        </td>
                    </tr>
                    <tr trid="275" class="trid-275 even">
                        <td>Thiết kế thêm tính năng cho website: bảo mật https cho website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=305&amp;employeeId=8453&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">300,000</a>
                        </td>
                    </tr>
                    <tr trid="275" class="trid-275">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=8453&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="275" class="trid-275 even">
                        <td>Gói Basic 1 - QLBH - online</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=293&amp;employeeId=8453&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="283" class="trid-283">
                        <td rowspan="9">41</td>
                        <td rowspan="9"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11132&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9984</a>
                        </td>
                        <td rowspan="9"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11132&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Văn Long</a></td>
                        <td rowspan="9"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1457">Phòng
                                dịch vụ SEO GG MAPS | Nhanh.vn</a></td>
                        <td rowspan="9"><b>8</b></td>
                        <td rowspan="9"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11132&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">30,758,850</a>
                        </td>
                    </tr>
                    <tr trid="283" class="trid-283 even">
                        <td>Gói SEO TỐI ƯU</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=574&amp;employeeId=11132&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7,657,650</a>
                        </td>
                    </tr>
                    <tr trid="283" class="trid-283">
                        <td>Gói chăm sóc website seo tối ưu</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=587&amp;employeeId=11132&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5,005,000</a>
                        </td>
                    </tr>
                    <tr trid="283" class="trid-283 even">
                        <td>Gói Tạo mới Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=542&amp;employeeId=11132&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4,413,500</a>
                        </td>
                    </tr>
                    <tr trid="283" class="trid-283">
                        <td>Gói SEO CƠ BẢN</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=573&amp;employeeId=11132&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,498,000</a>
                        </td>
                    </tr>
                    <tr trid="283" class="trid-283 even">
                        <td>Gói Xác minh Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=543&amp;employeeId=11132&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,250,500</a>
                        </td>
                    </tr>
                    <tr trid="283" class="trid-283">
                        <td>Chăm sóc fanpage - Gói content</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=321&amp;employeeId=11132&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,003,000</a>
                        </td>
                    </tr>
                    <tr trid="283" class="trid-283 even">
                        <td>Gói dịch vụ chăm sóc website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=496&amp;employeeId=11132&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,930,200</a>
                        </td>
                    </tr>
                    <tr trid="283" class="trid-283">
                        <td>Gói khởi tạo và Decor gian hàng</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=579&amp;employeeId=11132&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,001,000</a>
                        </td>
                    </tr>
                    <tr trid="292" class="trid-292 even">
                        <td rowspan="11">42</td>
                        <td rowspan="11"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9915&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8773</a>
                        </td>
                        <td rowspan="11"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9915&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lê
                                Quang Hùng</a></td>
                        <td rowspan="11"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1263">Nhanh
                                HN - KD8_CôngND | Nhanh.vn</a></td>
                        <td rowspan="11"><b>10</b></td>
                        <td rowspan="11"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9915&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">22,298,000</a>
                        </td>
                    </tr>
                    <tr trid="292" class="trid-292">
                        <td>Gói Premium - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=253&amp;employeeId=9915&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10,800,000</a>
                        </td>
                    </tr>
                    <tr trid="292" class="trid-292 even">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=9915&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,850,000</a>
                        </td>
                    </tr>
                    <tr trid="292" class="trid-292">
                        <td>Gói Basic 2 - QLBH - offline</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=294&amp;employeeId=9915&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,400,000</a>
                        </td>
                    </tr>
                    <tr trid="292" class="trid-292 even">
                        <td>Chăm sóc fanpage - Gói VIP 1</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=513&amp;employeeId=9915&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,628,000</a>
                        </td>
                    </tr>
                    <tr trid="292" class="trid-292">
                        <td>Gói Website cơ bản</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=267&amp;employeeId=9915&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,620,000</a>
                        </td>
                    </tr>
                    <tr trid="292" class="trid-292 even">
                        <td>Gói thêm tính năng mới</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=236&amp;employeeId=9915&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,200,000</a>
                        </td>
                    </tr>
                    <tr trid="292" class="trid-292">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=9915&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">900,000</a>
                        </td>
                    </tr>
                    <tr trid="292" class="trid-292 even">
                        <td>Gói Ecom</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=509&amp;employeeId=9915&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">900,000</a>
                        </td>
                    </tr>
                    <tr trid="292" class="trid-292">
                        <td>Thiết kế thêm tính năng cho website: bảo mật https cho website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=305&amp;employeeId=9915&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="292" class="trid-292 even">
                        <td>SMS Brandname</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=576&amp;employeeId=9915&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="303" class="trid-303">
                        <td rowspan="2">43</td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11246&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10091</a>
                        </td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11246&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phạm
                                Quang Minh</a></td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1386">Sale
                                Marketing | Nhanh.vn</a></td>
                        <td rowspan="2"><b>1</b></td>
                        <td rowspan="2"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11246&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">12,012,000</a>
                        </td>
                    </tr>
                    <tr trid="303" class="trid-303 even">
                        <td>Chăm sóc fanpage - Gói VIP 1</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=513&amp;employeeId=11246&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">12,012,000</a>
                        </td>
                    </tr>
                    <tr trid="305" class="trid-305">
                        <td rowspan="2">44</td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=430&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4120</a>
                        </td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=430&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Thị Vân Anh</a></td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=849">Tester
                                | Nhanh.vn</a></td>
                        <td rowspan="2"><b>1</b></td>
                        <td rowspan="2"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=430&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6,000,000</a>
                        </td>
                    </tr>
                    <tr trid="305" class="trid-305 even">
                        <td>Gói Premium - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=253&amp;employeeId=430&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6,000,000</a>
                        </td>
                    </tr>
                    <tr trid="307" class="trid-307">
                        <td rowspan="8">45</td>
                        <td rowspan="8"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10814&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9585</a>
                        </td>
                        <td rowspan="8"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10814&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lê
                                Ngọc Khánh</a></td>
                        <td rowspan="8"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1126">Nhanh
                                HCM - Phòng KD1_NgânHTM | Vật giá - Hồ Chí Minh</a></td>
                        <td rowspan="8"><b>7</b></td>
                        <td rowspan="8"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10814&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">13,490,000</a>
                        </td>
                    </tr>
                    <tr trid="307" class="trid-307 even">
                        <td>Gói Enterprise - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=254&amp;employeeId=10814&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4,320,000</a>
                        </td>
                    </tr>
                    <tr trid="307" class="trid-307">
                        <td>Gói Premium - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=253&amp;employeeId=10814&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4,200,000</a>
                        </td>
                    </tr>
                    <tr trid="307" class="trid-307 even">
                        <td>Gói Website cơ bản</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=267&amp;employeeId=10814&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,120,000</a>
                        </td>
                    </tr>
                    <tr trid="307" class="trid-307">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=10814&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">750,000</a>
                        </td>
                    </tr>
                    <tr trid="307" class="trid-307 even">
                        <td>Gói thiết kế thêm tính năng cho website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=372&amp;employeeId=10814&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">500,000</a>
                        </td>
                    </tr>
                    <tr trid="307" class="trid-307">
                        <td>Gói Ecom</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=509&amp;employeeId=10814&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">450,000</a>
                        </td>
                    </tr>
                    <tr trid="307" class="trid-307 even">
                        <td>Thiết kế thêm tính năng cho website: bảo mật https cho website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=305&amp;employeeId=10814&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">150,000</a>
                        </td>
                    </tr>
                    <tr trid="315" class="trid-315">
                        <td rowspan="2">46</td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=2126&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">0857</a>
                        </td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=2126&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                Phương Chi</a></td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=552">Nhóm
                                KD 7.2 | Vật giá - Hà Nội</a></td>
                        <td rowspan="2"><b>1</b></td>
                        <td rowspan="2"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=2126&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,960,000</a>
                        </td>
                    </tr>
                    <tr trid="315" class="trid-315 even">
                        <td>GHĐB (mới)</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=232&amp;employeeId=2126&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,960,000</a>
                        </td>
                    </tr>
                    <tr trid="317" class="trid-317">
                        <td rowspan="11">47</td>
                        <td rowspan="11"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10746&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9517</a>
                        </td>
                        <td rowspan="11"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10746&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Hoàng Giang</a></td>
                        <td rowspan="11"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1248">Nhanh
                                HN - KD11_NganLTT | Nhanh.vn</a></td>
                        <td rowspan="11"><b>10</b></td>
                        <td rowspan="11"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10746&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">19,016,040</a>
                        </td>
                    </tr>
                    <tr trid="317" class="trid-317 even">
                        <td>Gói Omni Enterprise</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=416&amp;employeeId=10746&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4,775,040</a>
                        </td>
                    </tr>
                    <tr trid="317" class="trid-317">
                        <td>Gói Premium - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=253&amp;employeeId=10746&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,780,000</a>
                        </td>
                    </tr>
                    <tr trid="317" class="trid-317 even">
                        <td>Gói Ecom full sàn TMĐT</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=536&amp;employeeId=10746&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,780,000</a>
                        </td>
                    </tr>
                    <tr trid="317" class="trid-317">
                        <td>Gói Ecom</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=509&amp;employeeId=10746&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,400,000</a>
                        </td>
                    </tr>
                    <tr trid="317" class="trid-317 even">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=10746&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,500,000</a>
                        </td>
                    </tr>
                    <tr trid="317" class="trid-317">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=10746&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,356,000</a>
                        </td>
                    </tr>
                    <tr trid="317" class="trid-317 even">
                        <td>Gói thiết kế thêm tính năng cho website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=372&amp;employeeId=10746&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">960,000</a>
                        </td>
                    </tr>
                    <tr trid="317" class="trid-317">
                        <td>Gói Thiết kế Website W</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=528&amp;employeeId=10746&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">300,000</a>
                        </td>
                    </tr>
                    <tr trid="317" class="trid-317 even">
                        <td>Gói Xác minh Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=543&amp;employeeId=10746&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">165,000</a>
                        </td>
                    </tr>
                    <tr trid="317" class="trid-317">
                        <td>SMS Brandname</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=576&amp;employeeId=10746&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="328" class="trid-328 even">
                        <td rowspan="7">48</td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9221&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8154</a>
                        </td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9221&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Trung Quân</a></td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1319">Nhanh
                                HN - Phòng KD3_HuyPV | Nhanh.vn</a></td>
                        <td rowspan="7"><b>6</b></td>
                        <td rowspan="7"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9221&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9,411,080</a>
                        </td>
                    </tr>
                    <tr trid="328" class="trid-328">
                        <td>Gói Omni Enterprise</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=416&amp;employeeId=9221&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4,576,080</a>
                        </td>
                    </tr>
                    <tr trid="328" class="trid-328 even">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=9221&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,550,000</a>
                        </td>
                    </tr>
                    <tr trid="328" class="trid-328">
                        <td>Gói thiết kế thêm tính năng cho website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=372&amp;employeeId=9221&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">920,000</a>
                        </td>
                    </tr>
                    <tr trid="328" class="trid-328 even">
                        <td>Gói Ecom</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=509&amp;employeeId=9221&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">900,000</a>
                        </td>
                    </tr>
                    <tr trid="328" class="trid-328">
                        <td>Gói Thiết kế Website W</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=528&amp;employeeId=9221&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">300,000</a>
                        </td>
                    </tr>
                    <tr trid="328" class="trid-328 even">
                        <td>Gói Xác minh Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=543&amp;employeeId=9221&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">165,000</a>
                        </td>
                    </tr>
                    <tr trid="335" class="trid-335">
                        <td rowspan="5">49</td>
                        <td rowspan="5"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10877&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9648</a>
                        </td>
                        <td rowspan="5"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10877&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lê
                                Thị Ly Ly</a></td>
                        <td rowspan="5"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=845">Marketing
                                | Nhanh.vn</a></td>
                        <td rowspan="5"><b>4</b></td>
                        <td rowspan="5"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10877&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">11,662,000</a>
                        </td>
                    </tr>
                    <tr trid="335" class="trid-335 even">
                        <td>Gói dịch vụ chăm sóc website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=496&amp;employeeId=10877&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5,852,000</a>
                        </td>
                    </tr>
                    <tr trid="335" class="trid-335">
                        <td>Gói Thiết kế Website W</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=528&amp;employeeId=10877&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,000,000</a>
                        </td>
                    </tr>
                    <tr trid="335" class="trid-335 even">
                        <td>Gói dịch vụ nhập liệu website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=497&amp;employeeId=10877&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,810,000</a>
                        </td>
                    </tr>
                    <tr trid="335" class="trid-335">
                        <td>Gói chăm sóc website seo tối ưu</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=587&amp;employeeId=10877&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="340" class="trid-340 even">
                        <td rowspan="9">50</td>
                        <td rowspan="9"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9478&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8372</a>
                        </td>
                        <td rowspan="9"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9478&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lê
                                Quốc Duy</a></td>
                        <td rowspan="9"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1468">Nhanh
                                HCM - Sale Marketing | Vật giá - Hồ Chí Minh</a></td>
                        <td rowspan="9"><b>8</b></td>
                        <td rowspan="9"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9478&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6,650,000</a>
                        </td>
                    </tr>
                    <tr trid="340" class="trid-340">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=9478&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,000,000</a>
                        </td>
                    </tr>
                    <tr trid="340" class="trid-340 even">
                        <td>Chăm sóc fanpage - Gói VIP 3</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=515&amp;employeeId=9478&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,485,000</a>
                        </td>
                    </tr>
                    <tr trid="340" class="trid-340">
                        <td>Chăm sóc fanpage - Gói VIP 2</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=514&amp;employeeId=9478&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,265,000</a>
                        </td>
                    </tr>
                    <tr trid="340" class="trid-340 even">
                        <td>Gói phí tích hợp API</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=261&amp;employeeId=9478&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">900,000</a>
                        </td>
                    </tr>
                    <tr trid="340" class="trid-340">
                        <td>Máy in mã vạch Xprinter XP 350B</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=297&amp;employeeId=9478&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="340" class="trid-340 even">
                        <td>Máy đọc mã vạch YJ3300</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=306&amp;employeeId=9478&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="340" class="trid-340">
                        <td>Máy in hóa đơn Xprinter XP-58IIH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=476&amp;employeeId=9478&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="340" class="trid-340 even">
                        <td>Chăm sóc fanpage - Gói VIP 1</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=513&amp;employeeId=9478&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="349" class="trid-349">
                        <td rowspan="5">51</td>
                        <td rowspan="5"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=341&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1241</a>
                        </td>
                        <td rowspan="5"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=341&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Đoàn
                                Thị Minh Hương</a></td>
                        <td rowspan="5"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=843">Chăm
                                sóc đơn hàng - HươngĐTM | Nhanh.vn</a></td>
                        <td rowspan="5"><b>4</b></td>
                        <td rowspan="5"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=341&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8,920,000</a>
                        </td>
                    </tr>
                    <tr trid="349" class="trid-349 even">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=341&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5,400,000</a>
                        </td>
                    </tr>
                    <tr trid="349" class="trid-349">
                        <td>Gói Website cơ bản</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=267&amp;employeeId=341&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,800,000</a>
                        </td>
                    </tr>
                    <tr trid="349" class="trid-349 even">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=341&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,120,000</a>
                        </td>
                    </tr>
                    <tr trid="349" class="trid-349">
                        <td>Gói Shipping - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=251&amp;employeeId=341&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">600,000</a>
                        </td>
                    </tr>
                    <tr trid="354" class="trid-354 even">
                        <td rowspan="7">52</td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9510&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8402</a>
                        </td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9510&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Thị Anh Thư</a></td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1308">Nhanh
                                HCM - Nhóm KD9_ThưNTA | Vật giá - Hồ Chí Minh</a></td>
                        <td rowspan="7"><b>6</b></td>
                        <td rowspan="7"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9510&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">22,809,000</a>
                        </td>
                    </tr>
                    <tr trid="354" class="trid-354">
                        <td>Gói SEO TỐI ƯU</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=574&amp;employeeId=9510&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9,009,000</a>
                        </td>
                    </tr>
                    <tr trid="354" class="trid-354 even">
                        <td>Gói Combo 5 gian hàng</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=451&amp;employeeId=9510&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5,645,455</a>
                        </td>
                    </tr>
                    <tr trid="354" class="trid-354">
                        <td>Gói Omni Starter</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=414&amp;employeeId=9510&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,954,545</a>
                        </td>
                    </tr>
                    <tr trid="354" class="trid-354 even">
                        <td>Gói Combo 3 fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=439&amp;employeeId=9510&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,000,000</a>
                        </td>
                    </tr>
                    <tr trid="354" class="trid-354">
                        <td>Thiết kế thêm tính năng cho website: bảo mật https cho website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=305&amp;employeeId=9510&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,200,000</a>
                        </td>
                    </tr>
                    <tr trid="354" class="trid-354 even">
                        <td>Gói Tạo mới Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=542&amp;employeeId=9510&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="361" class="trid-361">
                        <td rowspan="7">53</td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11089&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9942</a>
                        </td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11089&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Huỳnh
                                Ngọc Hải</a></td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1308">Nhanh
                                HCM - Nhóm KD9_ThưNTA | Vật giá - Hồ Chí Minh</a></td>
                        <td rowspan="7"><b>6</b></td>
                        <td rowspan="7"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11089&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7,225,847</a>
                        </td>
                    </tr>
                    <tr trid="361" class="trid-361 even">
                        <td>Gói SEO TỐI ƯU</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=574&amp;employeeId=11089&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,259,385</a>
                        </td>
                    </tr>
                    <tr trid="361" class="trid-361">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=11089&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,920,000</a>
                        </td>
                    </tr>
                    <tr trid="361" class="trid-361 even">
                        <td>Gói SEO CƠ BẢN</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=573&amp;employeeId=11089&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,086,462</a>
                        </td>
                    </tr>
                    <tr trid="361" class="trid-361">
                        <td>Gói Ecom</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=509&amp;employeeId=11089&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">960,000</a>
                        </td>
                    </tr>
                    <tr trid="361" class="trid-361 even">
                        <td>Gói Tạo mới Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=542&amp;employeeId=11089&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="361" class="trid-361">
                        <td>Gói Xác minh Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=543&amp;employeeId=11089&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="368" class="trid-368 even">
                        <td rowspan="4">54</td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11271&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10106</a>
                        </td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11271&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Hồ
                                Thị Thanh Mai</a></td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1467">Nhanh
                                HCM - SEO GG MAPS | Vật giá - Hồ Chí Minh</a></td>
                        <td rowspan="4"><b>3</b></td>
                        <td rowspan="4"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11271&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,366,000</a>
                        </td>
                    </tr>
                    <tr trid="368" class="trid-368">
                        <td>Gói SEO CƠ BẢN</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=573&amp;employeeId=11271&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,365,000</a>
                        </td>
                    </tr>
                    <tr trid="368" class="trid-368 even">
                        <td>Gói Tạo mới Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=542&amp;employeeId=11271&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,001,000</a>
                        </td>
                    </tr>
                    <tr trid="368" class="trid-368">
                        <td>Gói Xác minh Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=543&amp;employeeId=11271&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="372" class="trid-372 even">
                        <td rowspan="6">55</td>
                        <td rowspan="6"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8893&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7923</a>
                        </td>
                        <td rowspan="6"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8893&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Đạt Trung</a></td>
                        <td rowspan="6"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1320">Nhanh
                                HN - Phòng KD4_TrườngVV | Nhanh.vn</a></td>
                        <td rowspan="6"><b>5</b></td>
                        <td rowspan="6"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8893&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">14,945,000</a>
                        </td>
                    </tr>
                    <tr trid="372" class="trid-372">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=8893&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6,745,000</a>
                        </td>
                    </tr>
                    <tr trid="372" class="trid-372 even">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=8893&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4,440,000</a>
                        </td>
                    </tr>
                    <tr trid="372" class="trid-372">
                        <td>Gói Premium - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=253&amp;employeeId=8893&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,200,000</a>
                        </td>
                    </tr>
                    <tr trid="372" class="trid-372 even">
                        <td>Gói Website cơ bản</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=267&amp;employeeId=8893&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,260,000</a>
                        </td>
                    </tr>
                    <tr trid="372" class="trid-372">
                        <td>Thiết kế thêm tính năng cho website: bảo mật https cho website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=305&amp;employeeId=8893&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">300,000</a>
                        </td>
                    </tr>
                    <tr trid="378" class="trid-378 even">
                        <td rowspan="5">56</td>
                        <td rowspan="5"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=331&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2659</a>
                        </td>
                        <td rowspan="5"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=331&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Thanh Lan</a></td>
                        <td rowspan="5"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1072">Nhanh
                                HN - KD1_LanNT | Nhanh.vn</a></td>
                        <td rowspan="5"><b>4</b></td>
                        <td rowspan="5"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=331&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8,295,000</a>
                        </td>
                    </tr>
                    <tr trid="378" class="trid-378">
                        <td>Gói Premium - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=253&amp;employeeId=331&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4,575,000</a>
                        </td>
                    </tr>
                    <tr trid="378" class="trid-378 even">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=331&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,400,000</a>
                        </td>
                    </tr>
                    <tr trid="378" class="trid-378">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=331&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">720,000</a>
                        </td>
                    </tr>
                    <tr trid="378" class="trid-378 even">
                        <td>Gói Pro - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=1&amp;employeeId=331&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">600,000</a>
                        </td>
                    </tr>
                    <tr trid="383" class="trid-383">
                        <td rowspan="3">57</td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7790&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6846</a>
                        </td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7790&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Duy Hưng</a></td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1032">Phòng
                                KD10 | Vật giá - Hồ Chí Minh</a></td>
                        <td rowspan="3"><b>2</b></td>
                        <td rowspan="3"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7790&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">12,280,000</a>
                        </td>
                    </tr>
                    <tr trid="383" class="trid-383 even">
                        <td>GHĐB (mới)</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=232&amp;employeeId=7790&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">11,880,000</a>
                        </td>
                    </tr>
                    <tr trid="383" class="trid-383">
                        <td>Nạp tiền</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=230&amp;employeeId=7790&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">400,000</a>
                        </td>
                    </tr>
                    <tr trid="386" class="trid-386 even">
                        <td rowspan="8">58</td>
                        <td rowspan="8"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10701&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9479</a>
                        </td>
                        <td rowspan="8"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10701&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lê
                                Thúy Quỳnh</a></td>
                        <td rowspan="8"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1386">Sale
                                Marketing | Nhanh.vn</a></td>
                        <td rowspan="8"><b>7</b></td>
                        <td rowspan="8"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10701&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">38,498,500</a>
                        </td>
                    </tr>
                    <tr trid="386" class="trid-386">
                        <td>Chăm sóc fanpage - Gói VIP 2</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=514&amp;employeeId=10701&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">16,428,500</a>
                        </td>
                    </tr>
                    <tr trid="386" class="trid-386 even">
                        <td>Chăm sóc fanpage - Gói VIP 3</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=515&amp;employeeId=10701&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10,230,000</a>
                        </td>
                    </tr>
                    <tr trid="386" class="trid-386">
                        <td>Chăm sóc fanpage - Gói VIP 1</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=513&amp;employeeId=10701&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6,380,000</a>
                        </td>
                    </tr>
                    <tr trid="386" class="trid-386 even">
                        <td>Gói Thiết kế Website P</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=520&amp;employeeId=10701&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,500,000</a>
                        </td>
                    </tr>
                    <tr trid="386" class="trid-386">
                        <td>Gói thiết kế website theo yêu cầu</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=103&amp;employeeId=10701&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,400,000</a>
                        </td>
                    </tr>
                    <tr trid="386" class="trid-386 even">
                        <td>Gói Website cơ bản</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=267&amp;employeeId=10701&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,260,000</a>
                        </td>
                    </tr>
                    <tr trid="386" class="trid-386">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=10701&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">300,000</a>
                        </td>
                    </tr>
                    <tr trid="394" class="trid-394 even">
                        <td rowspan="3">59</td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11265&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10100</a>
                        </td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11265&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Ngọc Ánh</a></td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1419">Ecomcare
                                | Nhanh.vn</a></td>
                        <td rowspan="3"><b>2</b></td>
                        <td rowspan="3"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11265&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7,750,000</a>
                        </td>
                    </tr>
                    <tr trid="394" class="trid-394">
                        <td>Gói Thiết kế Website E</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=532&amp;employeeId=11265&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5,950,000</a>
                        </td>
                    </tr>
                    <tr trid="394" class="trid-394 even">
                        <td>Gói Ecom</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=509&amp;employeeId=11265&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,800,000</a>
                        </td>
                    </tr>
                    <tr trid="397" class="trid-397">
                        <td rowspan="2">60</td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9281&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8214</a>
                        </td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9281&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trương
                                Mạnh Tùng</a></td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1419">Ecomcare
                                | Nhanh.vn</a></td>
                        <td rowspan="2"><b>1</b></td>
                        <td rowspan="2"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9281&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="397" class="trid-397 even">
                        <td>Gói Thiết kế Website E</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=532&amp;employeeId=9281&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="399" class="trid-399">
                        <td rowspan="4">61</td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11261&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10096</a>
                        </td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11261&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lê
                                Thị Tuyết</a></td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1318">Nhanh
                                HN - Phòng KD2_TùngNT | Nhanh.vn</a></td>
                        <td rowspan="4"><b>3</b></td>
                        <td rowspan="4"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11261&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5,250,000</a>
                        </td>
                    </tr>
                    <tr trid="399" class="trid-399 even">
                        <td>Gói SEO CƠ BẢN</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=573&amp;employeeId=11261&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,655,000</a>
                        </td>
                    </tr>
                    <tr trid="399" class="trid-399">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=11261&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,100,000</a>
                        </td>
                    </tr>
                    <tr trid="399" class="trid-399 even">
                        <td>Gói Xác minh Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=543&amp;employeeId=11261&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">495,000</a>
                        </td>
                    </tr>
                    <tr trid="403" class="trid-403">
                        <td rowspan="4">62</td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9730&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8592</a>
                        </td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9730&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phạm
                                Kim Yến</a></td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=843">Chăm
                                sóc đơn hàng - HươngĐTM | Nhanh.vn</a></td>
                        <td rowspan="4"><b>3</b></td>
                        <td rowspan="4"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9730&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,395,000</a>
                        </td>
                    </tr>
                    <tr trid="403" class="trid-403 even">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=9730&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">705,000</a>
                        </td>
                    </tr>
                    <tr trid="403" class="trid-403">
                        <td>Gói Website cơ bản</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=267&amp;employeeId=9730&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">540,000</a>
                        </td>
                    </tr>
                    <tr trid="403" class="trid-403 even">
                        <td>Thiết kế thêm tính năng cho website: bảo mật https cho website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=305&amp;employeeId=9730&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">150,000</a>
                        </td>
                    </tr>
                    <tr trid="407" class="trid-407">
                        <td rowspan="2">63</td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11247&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10092</a>
                        </td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11247&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Cao
                                Thị Thu Hằng</a></td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1468">Nhanh
                                HCM - Sale Marketing | Vật giá - Hồ Chí Minh</a></td>
                        <td rowspan="2"><b>1</b></td>
                        <td rowspan="2"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11247&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4,004,000</a>
                        </td>
                    </tr>
                    <tr trid="407" class="trid-407 even">
                        <td>Chăm sóc fanpage - Gói VIP 1</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=513&amp;employeeId=11247&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4,004,000</a>
                        </td>
                    </tr>
                    <tr trid="409" class="trid-409">
                        <td rowspan="8">64</td>
                        <td rowspan="8"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9630&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8504</a>
                        </td>
                        <td rowspan="8"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9630&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Thành Trung</a></td>
                        <td rowspan="8"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1319">Nhanh
                                HN - Phòng KD3_HuyPV | Nhanh.vn</a></td>
                        <td rowspan="8"><b>7</b></td>
                        <td rowspan="8"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9630&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">11,450,000</a>
                        </td>
                    </tr>
                    <tr trid="409" class="trid-409 even">
                        <td>Gói Ecom</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=509&amp;employeeId=9630&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,240,000</a>
                        </td>
                    </tr>
                    <tr trid="409" class="trid-409">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=9630&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,550,000</a>
                        </td>
                    </tr>
                    <tr trid="409" class="trid-409 even">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=9630&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,800,000</a>
                        </td>
                    </tr>
                    <tr trid="409" class="trid-409">
                        <td>Gói thiết kế thêm tính năng cho website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=372&amp;employeeId=9630&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,400,000</a>
                        </td>
                    </tr>
                    <tr trid="409" class="trid-409 even">
                        <td>Gói Website cơ bản</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=267&amp;employeeId=9630&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,260,000</a>
                        </td>
                    </tr>
                    <tr trid="409" class="trid-409">
                        <td>Gói Premium - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=253&amp;employeeId=9630&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,200,000</a>
                        </td>
                    </tr>
                    <tr trid="409" class="trid-409 even">
                        <td>Máy in hóa đơn XP-V320N</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=548&amp;employeeId=9630&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="417" class="trid-417">
                        <td rowspan="8">65</td>
                        <td rowspan="8"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10054&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8906</a>
                        </td>
                        <td rowspan="8"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10054&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Hoàng
                                Minh Thảo</a></td>
                        <td rowspan="8"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1317">Nhanh
                                HN - Phòng KD5_AnhNX | Nhanh.vn</a></td>
                        <td rowspan="8"><b>7</b></td>
                        <td rowspan="8"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10054&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,500,500</a>
                        </td>
                    </tr>
                    <tr trid="417" class="trid-417 even">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=10054&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,000,000</a>
                        </td>
                    </tr>
                    <tr trid="417" class="trid-417">
                        <td>Gói Tạo mới Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=542&amp;employeeId=10054&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">500,500</a>
                        </td>
                    </tr>
                    <tr trid="417" class="trid-417 even">
                        <td>Máy Đọc Mã Vạch ChipPOS</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=525&amp;employeeId=10054&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="417" class="trid-417">
                        <td>Chân đế</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=307&amp;employeeId=10054&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="417" class="trid-417 even">
                        <td>Két đựng tiền SC - 335A</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=539&amp;employeeId=10054&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="417" class="trid-417">
                        <td>Máy in hóa đơn XP-N200H</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=310&amp;employeeId=10054&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="417" class="trid-417 even">
                        <td>Giấy in bill K80</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=300&amp;employeeId=10054&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="425" class="trid-425">
                        <td rowspan="7">66</td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=349&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3152</a>
                        </td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=349&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Thanh Tùng</a></td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1318">Nhanh
                                HN - Phòng KD2_TùngNT | Nhanh.vn</a></td>
                        <td rowspan="7"><b>6</b></td>
                        <td rowspan="7"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=349&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">40,530,000</a>
                        </td>
                    </tr>
                    <tr trid="425" class="trid-425 even">
                        <td>Gói phí nâng cấp gói phần mềm</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=317&amp;employeeId=349&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">14,940,000</a>
                        </td>
                    </tr>
                    <tr trid="425" class="trid-425">
                        <td>Gói Premium - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=253&amp;employeeId=349&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">13,200,000</a>
                        </td>
                    </tr>
                    <tr trid="425" class="trid-425 even">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=349&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5,100,000</a>
                        </td>
                    </tr>
                    <tr trid="425" class="trid-425">
                        <td>Gói Website tối ưu</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=268&amp;employeeId=349&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,600,000</a>
                        </td>
                    </tr>
                    <tr trid="425" class="trid-425 even">
                        <td>Gói phần mềm theo yêu cầu</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=112&amp;employeeId=349&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,240,000</a>
                        </td>
                    </tr>
                    <tr trid="425" class="trid-425">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=349&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">450,000</a>
                        </td>
                    </tr>
                    <tr trid="432" class="trid-432 even">
                        <td rowspan="8">67</td>
                        <td rowspan="8"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10212&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9047</a>
                        </td>
                        <td rowspan="8"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10212&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Đỗ
                                Thị Ngọc Hân</a></td>
                        <td rowspan="8"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1126">Nhanh
                                HCM - Phòng KD1_NgânHTM | Vật giá - Hồ Chí Minh</a></td>
                        <td rowspan="8"><b>7</b></td>
                        <td rowspan="8"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10212&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">23,250,000</a>
                        </td>
                    </tr>
                    <tr trid="432" class="trid-432">
                        <td>Gói Omni Premium</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=415&amp;employeeId=10212&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8,160,000</a>
                        </td>
                    </tr>
                    <tr trid="432" class="trid-432 even">
                        <td>Gói Website cơ bản</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=267&amp;employeeId=10212&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6,360,000</a>
                        </td>
                    </tr>
                    <tr trid="432" class="trid-432">
                        <td>Gói Enterprise - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=254&amp;employeeId=10212&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4,320,000</a>
                        </td>
                    </tr>
                    <tr trid="432" class="trid-432 even">
                        <td>Gói Ecom</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=509&amp;employeeId=10212&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,350,000</a>
                        </td>
                    </tr>
                    <tr trid="432" class="trid-432">
                        <td>Gói thiết kế thêm tính năng cho website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=372&amp;employeeId=10212&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,200,000</a>
                        </td>
                    </tr>
                    <tr trid="432" class="trid-432 even">
                        <td>Thiết kế thêm tính năng cho website: bảo mật https cho website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=305&amp;employeeId=10212&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,110,000</a>
                        </td>
                    </tr>
                    <tr trid="432" class="trid-432">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=10212&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">750,000</a>
                        </td>
                    </tr>
                    <tr trid="440" class="trid-440 even">
                        <td rowspan="5">68</td>
                        <td rowspan="5"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10381&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9215</a>
                        </td>
                        <td rowspan="5"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10381&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                Thị Yến Phương</a></td>
                        <td rowspan="5"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1254">Nhanh
                                HCM - Nhóm KD5_LiêmNT | Vật giá - Hồ Chí Minh</a></td>
                        <td rowspan="5"><b>4</b></td>
                        <td rowspan="5"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10381&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5,606,000</a>
                        </td>
                    </tr>
                    <tr trid="440" class="trid-440">
                        <td>Gói Combo 5 gian hàng</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=451&amp;employeeId=10381&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,300,000</a>
                        </td>
                    </tr>
                    <tr trid="440" class="trid-440 even">
                        <td>Gói Basic 1 - QLBH - online</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=293&amp;employeeId=10381&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,200,000</a>
                        </td>
                    </tr>
                    <tr trid="440" class="trid-440">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=10381&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">600,000</a>
                        </td>
                    </tr>
                    <tr trid="440" class="trid-440 even">
                        <td>Gói dịch vụ nhập liệu website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=497&amp;employeeId=10381&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">506,000</a>
                        </td>
                    </tr>
                    <tr trid="445" class="trid-445">
                        <td rowspan="3">69</td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11169&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10020</a>
                        </td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11169&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Hoàng
                                Lân</a></td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1254">Nhanh
                                HCM - Nhóm KD5_LiêmNT | Vật giá - Hồ Chí Minh</a></td>
                        <td rowspan="3"><b>2</b></td>
                        <td rowspan="3"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11169&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,700,000</a>
                        </td>
                    </tr>
                    <tr trid="445" class="trid-445 even">
                        <td>Gói Combo 5 gian hàng</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=451&amp;employeeId=11169&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,500,000</a>
                        </td>
                    </tr>
                    <tr trid="445" class="trid-445">
                        <td>Gói Basic 1 - QLBH - online</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=293&amp;employeeId=11169&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,200,000</a>
                        </td>
                    </tr>
                    <tr trid="448" class="trid-448 even">
                        <td rowspan="15">70</td>
                        <td rowspan="15"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9646&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8520</a>
                        </td>
                        <td rowspan="15"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9646&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Quốc Gia Thịnh</a></td>
                        <td rowspan="15"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1376">Nhanh
                                HCM - Nhóm KD4_ThịnhNQG | Vật giá - Hồ Chí Minh</a></td>
                        <td rowspan="15"><b>14</b></td>
                        <td rowspan="15"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9646&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">24,958,500</a>
                        </td>
                    </tr>
                    <tr trid="448" class="trid-448">
                        <td>Gói Premium - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=253&amp;employeeId=9646&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10,800,000</a>
                        </td>
                    </tr>
                    <tr trid="448" class="trid-448 even">
                        <td>Gói thiết kế website theo yêu cầu</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=103&amp;employeeId=9646&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4,000,000</a>
                        </td>
                    </tr>
                    <tr trid="448" class="trid-448">
                        <td>Gói Website cơ bản</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=267&amp;employeeId=9646&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,600,000</a>
                        </td>
                    </tr>
                    <tr trid="448" class="trid-448 even">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=9646&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,000,000</a>
                        </td>
                    </tr>
                    <tr trid="448" class="trid-448">
                        <td>Gói dịch vụ chăm sóc website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=496&amp;employeeId=9646&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,227,500</a>
                        </td>
                    </tr>
                    <tr trid="448" class="trid-448 even">
                        <td>Thiết kế thêm tính năng cho website: bảo mật https cho website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=305&amp;employeeId=9646&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">600,000</a>
                        </td>
                    </tr>
                    <tr trid="448" class="trid-448">
                        <td>Gói dịch vụ nhập liệu website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=497&amp;employeeId=9646&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">506,000</a>
                        </td>
                    </tr>
                    <tr trid="448" class="trid-448 even">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=9646&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">225,000</a>
                        </td>
                    </tr>
                    <tr trid="448" class="trid-448">
                        <td>Decal nhiệt in mã vạch 2 tem 35*22 ( cuộn )</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=301&amp;employeeId=9646&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="448" class="trid-448 even">
                        <td>Phí dịch vụ TK quản trị tên miền VN</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=568&amp;employeeId=9646&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="448" class="trid-448">
                        <td>Lệ phí đăng ký tên miền VN</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=566&amp;employeeId=9646&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="448" class="trid-448 even">
                        <td>Phí duy trì tên miền VN</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=567&amp;employeeId=9646&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="448" class="trid-448">
                        <td>Phí đăng ký tên miền quốc tế</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=570&amp;employeeId=9646&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="448" class="trid-448 even">
                        <td>Gói Tạo mới Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=542&amp;employeeId=9646&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="463" class="trid-463">
                        <td rowspan="7">71</td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9225&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8158</a>
                        </td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9225&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Huyền Trang</a></td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1317">Nhanh
                                HN - Phòng KD5_AnhNX | Nhanh.vn</a></td>
                        <td rowspan="7"><b>6</b></td>
                        <td rowspan="7"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9225&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">16,710,000</a>
                        </td>
                    </tr>
                    <tr trid="463" class="trid-463 even">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=9225&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8,790,000</a>
                        </td>
                    </tr>
                    <tr trid="463" class="trid-463">
                        <td>Gói Ecom</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=509&amp;employeeId=9225&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,600,000</a>
                        </td>
                    </tr>
                    <tr trid="463" class="trid-463 even">
                        <td>Gói Kho tổng (chỉ xuất nhập kho, không bán hàng)</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=420&amp;employeeId=9225&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,160,000</a>
                        </td>
                    </tr>
                    <tr trid="463" class="trid-463">
                        <td>Gói thêm tính năng mới</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=236&amp;employeeId=9225&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,680,000</a>
                        </td>
                    </tr>
                    <tr trid="463" class="trid-463 even">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=9225&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">480,000</a>
                        </td>
                    </tr>
                    <tr trid="463" class="trid-463">
                        <td>Két đựng tiền SC - 335A</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=539&amp;employeeId=9225&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="470" class="trid-470 even">
                        <td rowspan="8">72</td>
                        <td rowspan="8"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=304&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2965</a>
                        </td>
                        <td rowspan="8"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=304&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Viết Lâm</a></td>
                        <td rowspan="8"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1133">Nhanh
                                HN - KD6_LâmVN | Nhanh.vn</a></td>
                        <td rowspan="8"><b>7</b></td>
                        <td rowspan="8"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=304&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="470" class="trid-470">
                        <td>Thiết kế thêm tính năng cho website: bảo mật https cho website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=305&amp;employeeId=304&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="470" class="trid-470 even">
                        <td>Gói Premium - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=253&amp;employeeId=304&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="470" class="trid-470">
                        <td>Gói chăm sóc gian hàng chuyên nghiệp</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=583&amp;employeeId=304&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="470" class="trid-470 even">
                        <td>Gói Ecom</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=509&amp;employeeId=304&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="470" class="trid-470">
                        <td>Gói Website cơ bản</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=267&amp;employeeId=304&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="470" class="trid-470 even">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=304&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="470" class="trid-470">
                        <td>Gói thiết kế thêm tính năng cho website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=372&amp;employeeId=304&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="478" class="trid-478 even">
                        <td rowspan="9">73</td>
                        <td rowspan="9"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11047&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9906</a>
                        </td>
                        <td rowspan="9"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11047&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Viết Lâm</a></td>
                        <td rowspan="9"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1155">Nhanh
                                HCM - Phòng KD8_LâmNV | Vật giá - Hồ Chí Minh</a></td>
                        <td rowspan="9"><b>8</b></td>
                        <td rowspan="9"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11047&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">53,437,500</a>
                        </td>
                    </tr>
                    <tr trid="478" class="trid-478">
                        <td>Gói chăm sóc gian hàng chuyên nghiệp</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=583&amp;employeeId=11047&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">30,000,000</a>
                        </td>
                    </tr>
                    <tr trid="478" class="trid-478 even">
                        <td>Gói Premium - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=253&amp;employeeId=11047&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">12,000,000</a>
                        </td>
                    </tr>
                    <tr trid="478" class="trid-478">
                        <td>Gói Website cơ bản</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=267&amp;employeeId=11047&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,600,000</a>
                        </td>
                    </tr>
                    <tr trid="478" class="trid-478 even">
                        <td>Gói thiết kế thêm tính năng cho website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=372&amp;employeeId=11047&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,000,000</a>
                        </td>
                    </tr>
                    <tr trid="478" class="trid-478">
                        <td>Thiết kế thêm tính năng cho website: bảo mật https cho website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=305&amp;employeeId=11047&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,137,500</a>
                        </td>
                    </tr>
                    <tr trid="478" class="trid-478 even">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=11047&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,500,000</a>
                        </td>
                    </tr>
                    <tr trid="478" class="trid-478">
                        <td>Gói Ecom</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=509&amp;employeeId=11047&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,200,000</a>
                        </td>
                    </tr>
                    <tr trid="478" class="trid-478 even">
                        <td>Máy in hóa đơn XP-V320N</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=548&amp;employeeId=11047&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="487" class="trid-487">
                        <td rowspan="3">74</td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11167&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10018</a>
                        </td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11167&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                Thị Kim Oanh</a></td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1254">Nhanh
                                HCM - Nhóm KD5_LiêmNT | Vật giá - Hồ Chí Minh</a></td>
                        <td rowspan="3"><b>2</b></td>
                        <td rowspan="3"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11167&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,720,000</a>
                        </td>
                    </tr>
                    <tr trid="487" class="trid-487 even">
                        <td>Gói Basic 2 - QLBH - offline</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=294&amp;employeeId=11167&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,920,000</a>
                        </td>
                    </tr>
                    <tr trid="487" class="trid-487">
                        <td>Gói Combo 5 gian hàng</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=451&amp;employeeId=11167&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,800,000</a>
                        </td>
                    </tr>
                    <tr trid="490" class="trid-490 even">
                        <td rowspan="4">75</td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11236&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10082</a>
                        </td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11236&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Dương
                                Thị Hoa</a></td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1285">Nhanh
                                HN - ThanhTV_Phát triển đối tác | Nhanh.vn</a></td>
                        <td rowspan="4"><b>3</b></td>
                        <td rowspan="4"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11236&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7,866,353</a>
                        </td>
                    </tr>
                    <tr trid="490" class="trid-490">
                        <td>Gói SEO TỐI ƯU</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=574&amp;employeeId=11236&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4,155,715</a>
                        </td>
                    </tr>
                    <tr trid="490" class="trid-490 even">
                        <td>Gói Xác minh Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=543&amp;employeeId=11236&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,325,400</a>
                        </td>
                    </tr>
                    <tr trid="490" class="trid-490">
                        <td>Gói SEO CƠ BẢN</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=573&amp;employeeId=11236&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,385,238</a>
                        </td>
                    </tr>
                    <tr trid="494" class="trid-494 even">
                        <td rowspan="6">76</td>
                        <td rowspan="6"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11229&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10076</a>
                        </td>
                        <td rowspan="6"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11229&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trịnh
                                Xuân Tài</a></td>
                        <td rowspan="6"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1468">Nhanh
                                HCM - Sale Marketing | Vật giá - Hồ Chí Minh</a></td>
                        <td rowspan="6"><b>5</b></td>
                        <td rowspan="6"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11229&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">18,737,000</a>
                        </td>
                    </tr>
                    <tr trid="494" class="trid-494">
                        <td>Chăm sóc fanpage - Gói VIP 3</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=515&amp;employeeId=11229&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10,560,000</a>
                        </td>
                    </tr>
                    <tr trid="494" class="trid-494 even">
                        <td>Gói Thiết kế Website P</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=520&amp;employeeId=11229&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5,300,000</a>
                        </td>
                    </tr>
                    <tr trid="494" class="trid-494">
                        <td>Chăm sóc fanpage - Gói VIP 2</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=514&amp;employeeId=11229&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,265,000</a>
                        </td>
                    </tr>
                    <tr trid="494" class="trid-494 even">
                        <td>Gói Quảng Cáo Fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=479&amp;employeeId=11229&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,012,000</a>
                        </td>
                    </tr>
                    <tr trid="494" class="trid-494">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=11229&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">600,000</a>
                        </td>
                    </tr>
                    <tr trid="500" class="trid-500 even">
                        <td rowspan="3">77</td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11273&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10108</a>
                        </td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11273&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lê
                                Tấn Anh Trung</a></td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1468">Nhanh
                                HCM - Sale Marketing | Vật giá - Hồ Chí Minh</a></td>
                        <td rowspan="3"><b>2</b></td>
                        <td rowspan="3"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11273&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">14,201,000</a>
                        </td>
                    </tr>
                    <tr trid="500" class="trid-500">
                        <td>Chăm sóc fanpage - Gói VIP 1</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=513&amp;employeeId=11273&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9,196,000</a>
                        </td>
                    </tr>
                    <tr trid="500" class="trid-500 even">
                        <td>Chăm sóc fanpage - Gói VIP 2</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=514&amp;employeeId=11273&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5,005,000</a>
                        </td>
                    </tr>
                    <tr trid="503" class="trid-503">
                        <td rowspan="8">78</td>
                        <td rowspan="8"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10347&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9181</a>
                        </td>
                        <td rowspan="8"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10347&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lưu
                                Thị Hiền</a></td>
                        <td rowspan="8"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1241">Nhanh
                                HN - KD10_ThanhPT | Nhanh.vn</a></td>
                        <td rowspan="8"><b>7</b></td>
                        <td rowspan="8"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10347&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9,459,700</a>
                        </td>
                    </tr>
                    <tr trid="503" class="trid-503 even">
                        <td>Gói Website cơ bản</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=267&amp;employeeId=10347&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,600,000</a>
                        </td>
                    </tr>
                    <tr trid="503" class="trid-503">
                        <td>Chăm sóc fanpage - Gói VIP 1</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=513&amp;employeeId=10347&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,980,000</a>
                        </td>
                    </tr>
                    <tr trid="503" class="trid-503 even">
                        <td>Gói Omni Starter</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=414&amp;employeeId=10347&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,649,700</a>
                        </td>
                    </tr>
                    <tr trid="503" class="trid-503">
                        <td>Gói thêm tính năng mới</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=236&amp;employeeId=10347&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">720,000</a>
                        </td>
                    </tr>
                    <tr trid="503" class="trid-503 even">
                        <td>Thiết kế thêm tính năng cho website: bảo mật https cho website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=305&amp;employeeId=10347&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">600,000</a>
                        </td>
                    </tr>
                    <tr trid="503" class="trid-503">
                        <td>Gói SEO CƠ BẢN</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=573&amp;employeeId=10347&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">550,000</a>
                        </td>
                    </tr>
                    <tr trid="503" class="trid-503 even">
                        <td>Gói Tool quét data facebook</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=589&amp;employeeId=10347&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">360,000</a>
                        </td>
                    </tr>
                    <tr trid="511" class="trid-511">
                        <td rowspan="3">79</td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11122&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9974</a>
                        </td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11122&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phạm
                                Thị Nguyệt</a></td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1386">Sale
                                Marketing | Nhanh.vn</a></td>
                        <td rowspan="3"><b>2</b></td>
                        <td rowspan="3"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11122&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6,182,000</a>
                        </td>
                    </tr>
                    <tr trid="511" class="trid-511 even">
                        <td>Chăm sóc fanpage - Gói VIP 3</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=515&amp;employeeId=11122&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4,158,000</a>
                        </td>
                    </tr>
                    <tr trid="511" class="trid-511">
                        <td>Chăm sóc fanpage - Gói VIP 1</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=513&amp;employeeId=11122&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,024,000</a>
                        </td>
                    </tr>
                    <tr trid="514" class="trid-514 even">
                        <td rowspan="3">80</td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8490&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7534</a>
                        </td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8490&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trịnh
                                Xuân Tài</a></td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1386">Sale
                                Marketing | Nhanh.vn</a></td>
                        <td rowspan="3"><b>2</b></td>
                        <td rowspan="3"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8490&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="514" class="trid-514">
                        <td>Chăm sóc fanpage - Gói VIP 1</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=513&amp;employeeId=8490&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="514" class="trid-514 even">
                        <td>Gói Thiết kế Website P</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=520&amp;employeeId=8490&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="517" class="trid-517">
                        <td rowspan="5">81</td>
                        <td rowspan="5"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10879&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9650</a>
                        </td>
                        <td rowspan="5"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10879&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Dương
                                Thị Thu</a></td>
                        <td rowspan="5"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1318">Nhanh
                                HN - Phòng KD2_TùngNT | Nhanh.vn</a></td>
                        <td rowspan="5"><b>4</b></td>
                        <td rowspan="5"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10879&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">21,975,000</a>
                        </td>
                    </tr>
                    <tr trid="517" class="trid-517 even">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=10879&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">15,225,000</a>
                        </td>
                    </tr>
                    <tr trid="517" class="trid-517">
                        <td>Gói Premium - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=253&amp;employeeId=10879&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4,050,000</a>
                        </td>
                    </tr>
                    <tr trid="517" class="trid-517 even">
                        <td>Gói Ecom</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=509&amp;employeeId=10879&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,400,000</a>
                        </td>
                    </tr>
                    <tr trid="517" class="trid-517">
                        <td>Gói Basic 1 - QLBH - online</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=293&amp;employeeId=10879&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">300,000</a>
                        </td>
                    </tr>
                    <tr trid="522" class="trid-522 even">
                        <td rowspan="5">82</td>
                        <td rowspan="5"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10870&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9641</a>
                        </td>
                        <td rowspan="5"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10870&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Đỗ
                                Thị Thu Hà</a></td>
                        <td rowspan="5"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1318">Nhanh
                                HN - Phòng KD2_TùngNT | Nhanh.vn</a></td>
                        <td rowspan="5"><b>4</b></td>
                        <td rowspan="5"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10870&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,445,000</a>
                        </td>
                    </tr>
                    <tr trid="522" class="trid-522">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=10870&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,350,000</a>
                        </td>
                    </tr>
                    <tr trid="522" class="trid-522 even">
                        <td>Gói Ecom</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=509&amp;employeeId=10870&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">600,000</a>
                        </td>
                    </tr>
                    <tr trid="522" class="trid-522">
                        <td>Gói Tạo mới Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=542&amp;employeeId=10870&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">495,000</a>
                        </td>
                    </tr>
                    <tr trid="522" class="trid-522 even">
                        <td>Máy in hóa đơn Xprinter XP-58IIH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=476&amp;employeeId=10870&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="527" class="trid-527">
                        <td rowspan="10">83</td>
                        <td rowspan="10"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10564&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9356</a>
                        </td>
                        <td rowspan="10"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10564&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Cao
                                Anh Cường</a></td>
                        <td rowspan="10"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1318">Nhanh
                                HN - Phòng KD2_TùngNT | Nhanh.vn</a></td>
                        <td rowspan="10"><b>9</b></td>
                        <td rowspan="10"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10564&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9,215,000</a>
                        </td>
                    </tr>
                    <tr trid="527" class="trid-527 even">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=10564&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4,320,000</a>
                        </td>
                    </tr>
                    <tr trid="527" class="trid-527">
                        <td>Gói Website cơ bản</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=267&amp;employeeId=10564&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,600,000</a>
                        </td>
                    </tr>
                    <tr trid="527" class="trid-527 even">
                        <td>Gói thêm tính năng mới</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=236&amp;employeeId=10564&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">720,000</a>
                        </td>
                    </tr>
                    <tr trid="527" class="trid-527">
                        <td>Gói thiết kế thêm tính năng cho website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=372&amp;employeeId=10564&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">500,000</a>
                        </td>
                    </tr>
                    <tr trid="527" class="trid-527 even">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=10564&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">75,000</a>
                        </td>
                    </tr>
                    <tr trid="527" class="trid-527">
                        <td>Máy in hóa đơn Xprinter XP-58IIH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=476&amp;employeeId=10564&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="527" class="trid-527 even">
                        <td>Máy in mã vạch 380B</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=524&amp;employeeId=10564&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="527" class="trid-527">
                        <td>Giấy in bill K58</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=299&amp;employeeId=10564&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="527" class="trid-527 even">
                        <td>Giấy in mã vạch 2 tem</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=578&amp;employeeId=10564&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="537" class="trid-537">
                        <td rowspan="2">84</td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9987&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8844</a>
                        </td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9987&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Đỗ
                                Thanh Tùng</a></td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1419">Ecomcare
                                | Nhanh.vn</a></td>
                        <td rowspan="2"><b>1</b></td>
                        <td rowspan="2"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9987&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,375,000</a>
                        </td>
                    </tr>
                    <tr trid="537" class="trid-537 even">
                        <td>Gói Ecomcare Shopee</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=503&amp;employeeId=9987&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,375,000</a>
                        </td>
                    </tr>
                    <tr trid="539" class="trid-539">
                        <td rowspan="3">85</td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9812&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8673</a>
                        </td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9812&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Thị Ngọc Trầm</a></td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1032">Phòng
                                KD10 | Vật giá - Hồ Chí Minh</a></td>
                        <td rowspan="3"><b>2</b></td>
                        <td rowspan="3"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9812&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,200,000</a>
                        </td>
                    </tr>
                    <tr trid="539" class="trid-539 even">
                        <td>GHĐB (mới)</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=232&amp;employeeId=9812&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,000,000</a>
                        </td>
                    </tr>
                    <tr trid="539" class="trid-539">
                        <td>Nạp tiền</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=230&amp;employeeId=9812&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">200,000</a>
                        </td>
                    </tr>
                    <tr trid="542" class="trid-542 even">
                        <td rowspan="3">86</td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1257&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1412</a>
                        </td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1257&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phan
                                Vũ Như Quỳnh</a></td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=641">Phòng
                                KD 01 | Vật giá - Hồ Chí Minh</a></td>
                        <td rowspan="3"><b>2</b></td>
                        <td rowspan="3"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1257&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">12,580,000</a>
                        </td>
                    </tr>
                    <tr trid="542" class="trid-542">
                        <td>GHĐB (mới)</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=232&amp;employeeId=1257&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">11,880,000</a>
                        </td>
                    </tr>
                    <tr trid="542" class="trid-542 even">
                        <td>Nạp tiền</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=230&amp;employeeId=1257&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">700,000</a>
                        </td>
                    </tr>
                    <tr trid="545" class="trid-545">
                        <td rowspan="3">87</td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10356&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9190</a>
                        </td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10356&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Vũ
                                Duy Hoàng</a></td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1032">Phòng
                                KD10 | Vật giá - Hồ Chí Minh</a></td>
                        <td rowspan="3"><b>2</b></td>
                        <td rowspan="3"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10356&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">11,510,000</a>
                        </td>
                    </tr>
                    <tr trid="545" class="trid-545 even">
                        <td>GHĐB (mới)</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=232&amp;employeeId=10356&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10,560,000</a>
                        </td>
                    </tr>
                    <tr trid="545" class="trid-545">
                        <td>Nạp tiền</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=230&amp;employeeId=10356&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">950,000</a>
                        </td>
                    </tr>
                    <tr trid="548" class="trid-548 even">
                        <td rowspan="3">88</td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=2021&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">0745</a>
                        </td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=2021&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Thị Quỳnh Vân</a></td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=567">Phòng
                                KD 9 | Vật giá - Hà Nội</a></td>
                        <td rowspan="3"><b>2</b></td>
                        <td rowspan="3"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=2021&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4,960,000</a>
                        </td>
                    </tr>
                    <tr trid="548" class="trid-548">
                        <td>GHĐB (mới)</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=232&amp;employeeId=2021&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,960,000</a>
                        </td>
                    </tr>
                    <tr trid="548" class="trid-548 even">
                        <td>Nạp tiền</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=230&amp;employeeId=2021&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,000,000</a>
                        </td>
                    </tr>
                    <tr trid="551" class="trid-551">
                        <td rowspan="7">89</td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9181&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8117</a>
                        </td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9181&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Sơn Hà</a></td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1317">Nhanh
                                HN - Phòng KD5_AnhNX | Nhanh.vn</a></td>
                        <td rowspan="7"><b>6</b></td>
                        <td rowspan="7"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9181&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">13,799,000</a>
                        </td>
                    </tr>
                    <tr trid="551" class="trid-551 even">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=9181&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6,150,000</a>
                        </td>
                    </tr>
                    <tr trid="551" class="trid-551">
                        <td>Gói Omni Starter</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=414&amp;employeeId=9181&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4,524,000</a>
                        </td>
                    </tr>
                    <tr trid="551" class="trid-551 even">
                        <td>Gói Website tối ưu</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=268&amp;employeeId=9181&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,375,000</a>
                        </td>
                    </tr>
                    <tr trid="551" class="trid-551">
                        <td>Gói dịch vụ chăm sóc website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=496&amp;employeeId=9181&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,375,000</a>
                        </td>
                    </tr>
                    <tr trid="551" class="trid-551 even">
                        <td>Thiết kế thêm tính năng cho website: bảo mật https cho website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=305&amp;employeeId=9181&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">300,000</a>
                        </td>
                    </tr>
                    <tr trid="551" class="trid-551">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=9181&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">75,000</a>
                        </td>
                    </tr>
                    <tr trid="558" class="trid-558 even">
                        <td rowspan="9">90</td>
                        <td rowspan="9"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10850&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9621</a>
                        </td>
                        <td rowspan="9"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10850&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lâm
                                Viết Hùng</a></td>
                        <td rowspan="9"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1313">Nhanh
                                HN - KD17_TùngNT | Nhanh.vn</a></td>
                        <td rowspan="9"><b>8</b></td>
                        <td rowspan="9"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10850&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">13,740,000</a>
                        </td>
                    </tr>
                    <tr trid="558" class="trid-558">
                        <td>Gói Website tối ưu</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=268&amp;employeeId=10850&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4,536,000</a>
                        </td>
                    </tr>
                    <tr trid="558" class="trid-558 even">
                        <td>Gói Premium - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=253&amp;employeeId=10850&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,648,000</a>
                        </td>
                    </tr>
                    <tr trid="558" class="trid-558">
                        <td>Gói thiết kế thêm tính năng cho website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=372&amp;employeeId=10850&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,700,000</a>
                        </td>
                    </tr>
                    <tr trid="558" class="trid-558 even">
                        <td>Gói Website cơ bản</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=267&amp;employeeId=10850&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,800,000</a>
                        </td>
                    </tr>
                    <tr trid="558" class="trid-558">
                        <td>Thiết kế thêm tính năng cho website: bảo mật https cho website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=305&amp;employeeId=10850&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,056,000</a>
                        </td>
                    </tr>
                    <tr trid="558" class="trid-558 even">
                        <td>Lệ phí đăng ký tên miền VN</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=566&amp;employeeId=10850&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="558" class="trid-558">
                        <td>Phí duy trì tên miền VN</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=567&amp;employeeId=10850&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="558" class="trid-558 even">
                        <td>Phí dịch vụ TK quản trị tên miền VN</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=568&amp;employeeId=10850&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="567" class="trid-567">
                        <td rowspan="2">91</td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11218&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10066</a>
                        </td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11218&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Phúc Duy Khang</a></td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1126">Nhanh
                                HCM - Phòng KD1_NgânHTM | Vật giá - Hồ Chí Minh</a></td>
                        <td rowspan="2"><b>1</b></td>
                        <td rowspan="2"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11218&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">240,000</a>
                        </td>
                    </tr>
                    <tr trid="567" class="trid-567 even">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=11218&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">240,000</a>
                        </td>
                    </tr>
                    <tr trid="569" class="trid-569">
                        <td rowspan="4">92</td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11173&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10024</a>
                        </td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11173&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Thị Lan</a></td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1241">Nhanh
                                HN - KD10_ThanhPT | Nhanh.vn</a></td>
                        <td rowspan="4"><b>3</b></td>
                        <td rowspan="4"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11173&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,919,500</a>
                        </td>
                    </tr>
                    <tr trid="569" class="trid-569 even">
                        <td>Gói SEO CƠ BẢN</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=573&amp;employeeId=11173&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,519,000</a>
                        </td>
                    </tr>
                    <tr trid="569" class="trid-569">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=11173&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">900,000</a>
                        </td>
                    </tr>
                    <tr trid="569" class="trid-569 even">
                        <td>Gói Tạo mới Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=542&amp;employeeId=11173&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">500,500</a>
                        </td>
                    </tr>
                    <tr trid="573" class="trid-573">
                        <td rowspan="4">93</td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=469&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">0646</a>
                        </td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=469&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Hồ
                                Ngọc Huy</a></td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1209">Support
                                văn phòng | Nhanh.vn</a></td>
                        <td rowspan="4"><b>3</b></td>
                        <td rowspan="4"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=469&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5,475,000</a>
                        </td>
                    </tr>
                    <tr trid="573" class="trid-573 even">
                        <td>Gói Premium - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=253&amp;employeeId=469&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4,275,000</a>
                        </td>
                    </tr>
                    <tr trid="573" class="trid-573">
                        <td>Gói Kho tổng (chỉ xuất nhập kho, không bán hàng)</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=420&amp;employeeId=469&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">600,000</a>
                        </td>
                    </tr>
                    <tr trid="573" class="trid-573 even">
                        <td>Gói Pro - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=1&amp;employeeId=469&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">600,000</a>
                        </td>
                    </tr>
                    <tr trid="577" class="trid-577">
                        <td rowspan="6">94</td>
                        <td rowspan="6"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8779&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7813</a>
                        </td>
                        <td rowspan="6"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8779&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Ngô
                                Tiến Tùng</a></td>
                        <td rowspan="6"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1313">Nhanh
                                HN - KD17_TùngNT | Nhanh.vn</a></td>
                        <td rowspan="6"><b>5</b></td>
                        <td rowspan="6"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8779&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">17,360,000</a>
                        </td>
                    </tr>
                    <tr trid="577" class="trid-577 even">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=8779&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7,500,000</a>
                        </td>
                    </tr>
                    <tr trid="577" class="trid-577">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=8779&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,658,000</a>
                        </td>
                    </tr>
                    <tr trid="577" class="trid-577 even">
                        <td>Gói Premium - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=253&amp;employeeId=8779&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,552,000</a>
                        </td>
                    </tr>
                    <tr trid="577" class="trid-577">
                        <td>Gói thiết kế thêm tính năng cho website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=372&amp;employeeId=8779&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,450,000</a>
                        </td>
                    </tr>
                    <tr trid="577" class="trid-577 even">
                        <td>Gói Ecom</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=509&amp;employeeId=8779&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,200,000</a>
                        </td>
                    </tr>
                    <tr trid="583" class="trid-583">
                        <td rowspan="2">95</td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=954&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1602</a>
                        </td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=954&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Thiện Tâm</a></td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1443">Phòng
                                KD Bảo Kim &amp; Wesave | Vật giá - Hồ Chí Minh</a></td>
                        <td rowspan="2"><b>1</b></td>
                        <td rowspan="2"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=954&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8,800,000</a>
                        </td>
                    </tr>
                    <tr trid="583" class="trid-583 even">
                        <td>Dịch vụ Viết bài</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=282&amp;employeeId=954&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8,800,000</a>
                        </td>
                    </tr>
                    <tr trid="585" class="trid-585">
                        <td rowspan="3">96</td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1289&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2497</a>
                        </td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1289&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Đỗ
                                Văn Thảo</a></td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=656">Phòng
                                KD 8 | Vật giá - Hồ Chí Minh</a></td>
                        <td rowspan="3"><b>2</b></td>
                        <td rowspan="3"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1289&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">26,400,000</a>
                        </td>
                    </tr>
                    <tr trid="585" class="trid-585 even">
                        <td>Dịch vụ Viết bài</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=282&amp;employeeId=1289&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">16,500,000</a>
                        </td>
                    </tr>
                    <tr trid="585" class="trid-585">
                        <td>BizShare - Dịch vụ SEO tổng thể</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=472&amp;employeeId=1289&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9,900,000</a>
                        </td>
                    </tr>
                    <tr trid="588" class="trid-588 even">
                        <td rowspan="11">97</td>
                        <td rowspan="11"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1075&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4062</a>
                        </td>
                        <td rowspan="11"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1075&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Hứa
                                Thị Mai Ngân</a></td>
                        <td rowspan="11"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1126">Nhanh
                                HCM - Phòng KD1_NgânHTM | Vật giá - Hồ Chí Minh</a></td>
                        <td rowspan="11"><b>10</b></td>
                        <td rowspan="11"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1075&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">40,080,000</a>
                        </td>
                    </tr>
                    <tr trid="588" class="trid-588">
                        <td>Gói Website tối ưu</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=268&amp;employeeId=1075&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10,450,000</a>
                        </td>
                    </tr>
                    <tr trid="588" class="trid-588 even">
                        <td>Gói Premium - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=253&amp;employeeId=1075&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8,700,000</a>
                        </td>
                    </tr>
                    <tr trid="588" class="trid-588">
                        <td>Gói Enterprise - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=254&amp;employeeId=1075&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8,400,000</a>
                        </td>
                    </tr>
                    <tr trid="588" class="trid-588 even">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=1075&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6,960,000</a>
                        </td>
                    </tr>
                    <tr trid="588" class="trid-588">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=1075&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,500,000</a>
                        </td>
                    </tr>
                    <tr trid="588" class="trid-588 even">
                        <td>Gói Ecom</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=509&amp;employeeId=1075&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,200,000</a>
                        </td>
                    </tr>
                    <tr trid="588" class="trid-588">
                        <td>Gói Kho tổng (chỉ xuất nhập kho, không bán hàng)</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=420&amp;employeeId=1075&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,020,000</a>
                        </td>
                    </tr>
                    <tr trid="588" class="trid-588 even">
                        <td>Gói thiết kế thêm tính năng cho website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=372&amp;employeeId=1075&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">950,000</a>
                        </td>
                    </tr>
                    <tr trid="588" class="trid-588">
                        <td>Gói Website cơ bản</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=267&amp;employeeId=1075&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">750,000</a>
                        </td>
                    </tr>
                    <tr trid="588" class="trid-588 even">
                        <td>Thiết kế thêm tính năng cho website: bảo mật https cho website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=305&amp;employeeId=1075&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">150,000</a>
                        </td>
                    </tr>
                    <tr trid="599" class="trid-599">
                        <td rowspan="2">98</td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7967&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7035</a>
                        </td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7967&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                Lệ Uyên</a></td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1147">Chăm
                                sóc khách hàng - UyênTL | Nhanh.vn</a></td>
                        <td rowspan="2"><b>1</b></td>
                        <td rowspan="2"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7967&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,000,000</a>
                        </td>
                    </tr>
                    <tr trid="599" class="trid-599 even">
                        <td>Gói Premium - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=253&amp;employeeId=7967&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,000,000</a>
                        </td>
                    </tr>
                    <tr trid="601" class="trid-601">
                        <td rowspan="4">99</td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11090&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9943</a>
                        </td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11090&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Vũ
                                Thị Minh Hằng</a></td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1284">Nhanh
                                HN - KD16_TungNH | Nhanh.vn</a></td>
                        <td rowspan="4"><b>3</b></td>
                        <td rowspan="4"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11090&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5,492,000</a>
                        </td>
                    </tr>
                    <tr trid="601" class="trid-601 even">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=11090&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4,200,000</a>
                        </td>
                    </tr>
                    <tr trid="601" class="trid-601">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=11090&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">940,000</a>
                        </td>
                    </tr>
                    <tr trid="601" class="trid-601 even">
                        <td>Gói Xác minh Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=543&amp;employeeId=11090&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">352,000</a>
                        </td>
                    </tr>
                    <tr trid="605" class="trid-605">
                        <td rowspan="10">100</td>
                        <td rowspan="10"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10753&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9524</a>
                        </td>
                        <td rowspan="10"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10753&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Quang Huy</a></td>
                        <td rowspan="10"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1248">Nhanh
                                HN - KD11_NganLTT | Nhanh.vn</a></td>
                        <td rowspan="10"><b>9</b></td>
                        <td rowspan="10"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10753&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9,451,080</a>
                        </td>
                    </tr>
                    <tr trid="605" class="trid-605 even">
                        <td>Gói Omni Enterprise</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=416&amp;employeeId=10753&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4,576,080</a>
                        </td>
                    </tr>
                    <tr trid="605" class="trid-605">
                        <td>Chăm sóc fanpage - Gói VIP 3</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=515&amp;employeeId=10753&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,640,000</a>
                        </td>
                    </tr>
                    <tr trid="605" class="trid-605 even">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=10753&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,000,000</a>
                        </td>
                    </tr>
                    <tr trid="605" class="trid-605">
                        <td>Gói thiết kế thêm tính năng cho website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=372&amp;employeeId=10753&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">920,000</a>
                        </td>
                    </tr>
                    <tr trid="605" class="trid-605 even">
                        <td>Gói Xác minh Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=543&amp;employeeId=10753&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">165,000</a>
                        </td>
                    </tr>
                    <tr trid="605" class="trid-605">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=10753&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">150,000</a>
                        </td>
                    </tr>
                    <tr trid="605" class="trid-605 even">
                        <td>Phí dịch vụ TK quản trị tên miền VN</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=568&amp;employeeId=10753&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="605" class="trid-605">
                        <td>Lệ phí đăng ký tên miền VN</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=566&amp;employeeId=10753&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="605" class="trid-605 even">
                        <td>Phí duy trì tên miền VN</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=567&amp;employeeId=10753&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="615" class="trid-615">
                        <td rowspan="6">101</td>
                        <td rowspan="6"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10831&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9602</a>
                        </td>
                        <td rowspan="6"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10831&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Hoàng
                                Văn Phúc</a></td>
                        <td rowspan="6"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1317">Nhanh
                                HN - Phòng KD5_AnhNX | Nhanh.vn</a></td>
                        <td rowspan="6"><b>5</b></td>
                        <td rowspan="6"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10831&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6,876,000</a>
                        </td>
                    </tr>
                    <tr trid="615" class="trid-615 even">
                        <td>Gói Basic 1 - QLBH - online</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=293&amp;employeeId=10831&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,400,000</a>
                        </td>
                    </tr>
                    <tr trid="615" class="trid-615">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=10831&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,920,000</a>
                        </td>
                    </tr>
                    <tr trid="615" class="trid-615 even">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=10831&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,020,000</a>
                        </td>
                    </tr>
                    <tr trid="615" class="trid-615">
                        <td>Gói Kho tổng (chỉ xuất nhập kho, không bán hàng)</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=420&amp;employeeId=10831&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">864,000</a>
                        </td>
                    </tr>
                    <tr trid="615" class="trid-615 even">
                        <td>Gói thêm tính năng mới</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=236&amp;employeeId=10831&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">672,000</a>
                        </td>
                    </tr>
                    <tr trid="621" class="trid-621">
                        <td rowspan="6">102</td>
                        <td rowspan="6"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11232&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10079</a>
                        </td>
                        <td rowspan="6"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11232&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Hoàng
                                Huyền Trang</a></td>
                        <td rowspan="6"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1285">Nhanh
                                HN - ThanhTV_Phát triển đối tác | Nhanh.vn</a></td>
                        <td rowspan="6"><b>5</b></td>
                        <td rowspan="6"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11232&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7,861,000</a>
                        </td>
                    </tr>
                    <tr trid="621" class="trid-621 even">
                        <td>Gói SEO CƠ BẢN</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=573&amp;employeeId=11232&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,288,000</a>
                        </td>
                    </tr>
                    <tr trid="621" class="trid-621">
                        <td>Chăm sóc fanpage - Gói VIP 3</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=515&amp;employeeId=11232&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,848,000</a>
                        </td>
                    </tr>
                    <tr trid="621" class="trid-621 even">
                        <td>Gói Tạo mới Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=542&amp;employeeId=11232&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,501,500</a>
                        </td>
                    </tr>
                    <tr trid="621" class="trid-621">
                        <td>Gói Xác minh Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=543&amp;employeeId=11232&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,215,500</a>
                        </td>
                    </tr>
                    <tr trid="621" class="trid-621 even">
                        <td>Gói Basic 2 - QLBH - offline</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=294&amp;employeeId=11232&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,008,000</a>
                        </td>
                    </tr>
                    <tr trid="627" class="trid-627">
                        <td rowspan="3">103</td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1357&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">0048</a>
                        </td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1357&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Ngô
                                Thị Hồng Hoa</a></td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=591">Phòng
                                CSGH | Vật giá - Hà Nội</a></td>
                        <td rowspan="3"><b>2</b></td>
                        <td rowspan="3"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1357&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,626,000</a>
                        </td>
                    </tr>
                    <tr trid="627" class="trid-627 even">
                        <td>GHĐB (tái ký)</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=231&amp;employeeId=1357&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">990,000</a>
                        </td>
                    </tr>
                    <tr trid="627" class="trid-627">
                        <td>Vchat gói Cơ bản</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=386&amp;employeeId=1357&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">636,000</a>
                        </td>
                    </tr>
                    <tr trid="630" class="trid-630 even">
                        <td rowspan="3">104</td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8387&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7431</a>
                        </td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8387&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Thanh Liêm</a></td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1254">Nhanh
                                HCM - Nhóm KD5_LiêmNT | Vật giá - Hồ Chí Minh</a></td>
                        <td rowspan="3"><b>2</b></td>
                        <td rowspan="3"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8387&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">950,500</a>
                        </td>
                    </tr>
                    <tr trid="630" class="trid-630">
                        <td>Gói Tạo mới Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=542&amp;employeeId=8387&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">500,500</a>
                        </td>
                    </tr>
                    <tr trid="630" class="trid-630 even">
                        <td>Gói Ecom</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=509&amp;employeeId=8387&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">450,000</a>
                        </td>
                    </tr>
                    <tr trid="633" class="trid-633">
                        <td rowspan="8">105</td>
                        <td rowspan="8"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8427&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7471</a>
                        </td>
                        <td rowspan="8"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8427&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                Kim Ngân</a></td>
                        <td rowspan="8"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1158">Nhanh
                                HCM - Nhóm KD3_NgânTK | Vật giá - Hồ Chí Minh</a></td>
                        <td rowspan="8"><b>7</b></td>
                        <td rowspan="8"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8427&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">37,680,000</a>
                        </td>
                    </tr>
                    <tr trid="633" class="trid-633 even">
                        <td>Gói Premium - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=253&amp;employeeId=8427&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">25,920,000</a>
                        </td>
                    </tr>
                    <tr trid="633" class="trid-633">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=8427&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,900,000</a>
                        </td>
                    </tr>
                    <tr trid="633" class="trid-633 even">
                        <td>Gói Ecom</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=509&amp;employeeId=8427&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,840,000</a>
                        </td>
                    </tr>
                    <tr trid="633" class="trid-633">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=8427&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,200,000</a>
                        </td>
                    </tr>
                    <tr trid="633" class="trid-633 even">
                        <td>Gói Kho tổng (chỉ xuất nhập kho, không bán hàng)</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=420&amp;employeeId=8427&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">960,000</a>
                        </td>
                    </tr>
                    <tr trid="633" class="trid-633">
                        <td>Gói phí tích hợp API</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=261&amp;employeeId=8427&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">960,000</a>
                        </td>
                    </tr>
                    <tr trid="633" class="trid-633 even">
                        <td>Gói thêm tính năng mới</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=236&amp;employeeId=8427&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">900,000</a>
                        </td>
                    </tr>
                    <tr trid="641" class="trid-641">
                        <td rowspan="3">106</td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1160&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4827</a>
                        </td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1160&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                Hoàng Nhung</a></td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1387">Phòng
                                nhân sự - Nhanh.vn | Nhanh.vn</a></td>
                        <td rowspan="3"><b>2</b></td>
                        <td rowspan="3"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1160&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,960,000</a>
                        </td>
                    </tr>
                    <tr trid="641" class="trid-641 even">
                        <td>Gói Premium - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=253&amp;employeeId=1160&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,000,000</a>
                        </td>
                    </tr>
                    <tr trid="641" class="trid-641">
                        <td>Gói Kho tổng (chỉ xuất nhập kho, không bán hàng)</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=420&amp;employeeId=1160&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">960,000</a>
                        </td>
                    </tr>
                    <tr trid="644" class="trid-644 even">
                        <td rowspan="3">107</td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10776&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9547</a>
                        </td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10776&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Ma
                                Thị Phương Thảo</a></td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1282">Phòng
                                Dịch Vụ Khách Hàng | Nhanh.vn</a></td>
                        <td rowspan="3"><b>2</b></td>
                        <td rowspan="3"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10776&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">225,000</a>
                        </td>
                    </tr>
                    <tr trid="644" class="trid-644">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=10776&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">225,000</a>
                        </td>
                    </tr>
                    <tr trid="644" class="trid-644 even">
                        <td>Giấy in bill K80</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=300&amp;employeeId=10776&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="647" class="trid-647">
                        <td rowspan="7">108</td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11048&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9900</a>
                        </td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11048&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lê
                                Thị Nam</a></td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1468">Nhanh
                                HCM - Sale Marketing | Vật giá - Hồ Chí Minh</a></td>
                        <td rowspan="7"><b>6</b></td>
                        <td rowspan="7"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11048&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10,648,000</a>
                        </td>
                    </tr>
                    <tr trid="647" class="trid-647 even">
                        <td>Chăm sóc fanpage - Gói VIP 2</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=514&amp;employeeId=11048&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5,500,000</a>
                        </td>
                    </tr>
                    <tr trid="647" class="trid-647">
                        <td>Gói SEO TỐI ƯU</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=574&amp;employeeId=11048&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,013,000</a>
                        </td>
                    </tr>
                    <tr trid="647" class="trid-647 even">
                        <td>Gói Xác minh Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=543&amp;employeeId=11048&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,221,000</a>
                        </td>
                    </tr>
                    <tr trid="647" class="trid-647">
                        <td>Gói SEO CƠ BẢN</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=573&amp;employeeId=11048&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,100,000</a>
                        </td>
                    </tr>
                    <tr trid="647" class="trid-647 even">
                        <td>Chăm sóc fanpage - Gói VIP 1</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=513&amp;employeeId=11048&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">814,000</a>
                        </td>
                    </tr>
                    <tr trid="647" class="trid-647">
                        <td>Phí đăng ký tên miền quốc tế</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=570&amp;employeeId=11048&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="654" class="trid-654 even">
                        <td rowspan="2">109</td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11279&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10114</a>
                        </td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11279&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Minh Hải</a></td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1452">Đại
                                lý công ty | Nhanh.vn</a></td>
                        <td rowspan="2"><b>1</b></td>
                        <td rowspan="2"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11279&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">900,000</a>
                        </td>
                    </tr>
                    <tr trid="654" class="trid-654">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=11279&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">900,000</a>
                        </td>
                    </tr>
                    <tr trid="656" class="trid-656 even">
                        <td rowspan="5">110</td>
                        <td rowspan="5"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10833&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9604</a>
                        </td>
                        <td rowspan="5"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10833&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Thanh Ngân</a></td>
                        <td rowspan="5"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1467">Nhanh
                                HCM - SEO GG MAPS | Vật giá - Hồ Chí Minh</a></td>
                        <td rowspan="5"><b>4</b></td>
                        <td rowspan="5"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10833&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">15,004,000</a>
                        </td>
                    </tr>
                    <tr trid="656" class="trid-656">
                        <td>Gói SEO TỐI ƯU</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=574&amp;employeeId=10833&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9,009,000</a>
                        </td>
                    </tr>
                    <tr trid="656" class="trid-656 even">
                        <td>Gói SEO CƠ BẢN</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=573&amp;employeeId=10833&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4,393,400</a>
                        </td>
                    </tr>
                    <tr trid="656" class="trid-656">
                        <td>Gói Tạo mới Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=542&amp;employeeId=10833&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,101,100</a>
                        </td>
                    </tr>
                    <tr trid="656" class="trid-656 even">
                        <td>Gói Xác minh Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=543&amp;employeeId=10833&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">500,500</a>
                        </td>
                    </tr>
                    <tr trid="661" class="trid-661">
                        <td rowspan="6">111</td>
                        <td rowspan="6"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11260&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10095</a>
                        </td>
                        <td rowspan="6"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11260&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Danh Công</a></td>
                        <td rowspan="6"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1318">Nhanh
                                HN - Phòng KD2_TùngNT | Nhanh.vn</a></td>
                        <td rowspan="6"><b>5</b></td>
                        <td rowspan="6"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11260&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7,007,000</a>
                        </td>
                    </tr>
                    <tr trid="661" class="trid-661 even">
                        <td>Gói dịch vụ nhập liệu sàn TMĐT</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=502&amp;employeeId=11260&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4,004,000</a>
                        </td>
                    </tr>
                    <tr trid="661" class="trid-661">
                        <td>Gói Ecomcare Shopee</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=503&amp;employeeId=11260&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,502,500</a>
                        </td>
                    </tr>
                    <tr trid="661" class="trid-661 even">
                        <td>Gói khởi tạo và Decor gian hàng</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=579&amp;employeeId=11260&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">500,500</a>
                        </td>
                    </tr>
                    <tr trid="661" class="trid-661">
                        <td>Gói Tạo mới Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=542&amp;employeeId=11260&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="661" class="trid-661 even">
                        <td>Gói Xác minh Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=543&amp;employeeId=11260&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="667" class="trid-667">
                        <td rowspan="12">112</td>
                        <td rowspan="12"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11092&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9945</a>
                        </td>
                        <td rowspan="12"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11092&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Đỗ
                                Quang Trung</a></td>
                        <td rowspan="12"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1284">Nhanh
                                HN - KD16_TungNH | Nhanh.vn</a></td>
                        <td rowspan="12"><b>11</b></td>
                        <td rowspan="12"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11092&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">29,381,000</a>
                        </td>
                    </tr>
                    <tr trid="667" class="trid-667 even">
                        <td>Gói Website tối ưu</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=268&amp;employeeId=11092&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">15,840,000</a>
                        </td>
                    </tr>
                    <tr trid="667" class="trid-667">
                        <td>Gói Thiết kế Website W</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=528&amp;employeeId=11092&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6,750,000</a>
                        </td>
                    </tr>
                    <tr trid="667" class="trid-667 even">
                        <td>Gói thiết kế website theo yêu cầu</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=103&amp;employeeId=11092&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,400,000</a>
                        </td>
                    </tr>
                    <tr trid="667" class="trid-667">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=11092&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,100,000</a>
                        </td>
                    </tr>
                    <tr trid="667" class="trid-667 even">
                        <td>Thiết kế thêm tính năng cho website: bảo mật https cho website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=305&amp;employeeId=11092&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,440,000</a>
                        </td>
                    </tr>
                    <tr trid="667" class="trid-667">
                        <td>Gói thêm tính năng mới</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=236&amp;employeeId=11092&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">840,000</a>
                        </td>
                    </tr>
                    <tr trid="667" class="trid-667 even">
                        <td>Gói Xác minh Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=543&amp;employeeId=11092&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5,500</a>
                        </td>
                    </tr>
                    <tr trid="667" class="trid-667">
                        <td>Gói Tạo mới Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=542&amp;employeeId=11092&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5,500</a>
                        </td>
                    </tr>
                    <tr trid="667" class="trid-667 even">
                        <td>Phí dịch vụ TK quản trị tên miền VN</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=568&amp;employeeId=11092&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="667" class="trid-667">
                        <td>Lệ phí đăng ký tên miền VN</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=566&amp;employeeId=11092&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="667" class="trid-667 even">
                        <td>Phí duy trì tên miền VN</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=567&amp;employeeId=11092&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="679" class="trid-679">
                        <td rowspan="5">113</td>
                        <td rowspan="5"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=369&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4221</a>
                        </td>
                        <td rowspan="5"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=369&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phạm
                                Viết Huy</a></td>
                        <td rowspan="5"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1319">Nhanh
                                HN - Phòng KD3_HuyPV | Nhanh.vn</a></td>
                        <td rowspan="5"><b>4</b></td>
                        <td rowspan="5"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=369&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9,150,000</a>
                        </td>
                    </tr>
                    <tr trid="679" class="trid-679 even">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=369&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,750,000</a>
                        </td>
                    </tr>
                    <tr trid="679" class="trid-679">
                        <td>Gói Ecom</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=509&amp;employeeId=369&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,400,000</a>
                        </td>
                    </tr>
                    <tr trid="679" class="trid-679 even">
                        <td>Gói thiết kế thêm tính năng cho website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=372&amp;employeeId=369&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,500,000</a>
                        </td>
                    </tr>
                    <tr trid="679" class="trid-679">
                        <td>Gói Premium - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=253&amp;employeeId=369&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,500,000</a>
                        </td>
                    </tr>
                    <tr trid="684" class="trid-684 even">
                        <td rowspan="4">114</td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8175&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7230</a>
                        </td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8175&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Hữu Tùng</a></td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1284">Nhanh
                                HN - KD16_TungNH | Nhanh.vn</a></td>
                        <td rowspan="4"><b>3</b></td>
                        <td rowspan="4"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8175&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">11,245,000</a>
                        </td>
                    </tr>
                    <tr trid="684" class="trid-684">
                        <td>Gói Premium - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=253&amp;employeeId=8175&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6,570,000</a>
                        </td>
                    </tr>
                    <tr trid="684" class="trid-684 even">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=8175&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,300,000</a>
                        </td>
                    </tr>
                    <tr trid="684" class="trid-684">
                        <td>Gói Website tối ưu</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=268&amp;employeeId=8175&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,375,000</a>
                        </td>
                    </tr>
                    <tr trid="688" class="trid-688 even">
                        <td rowspan="5">115</td>
                        <td rowspan="5"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11231&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10078</a>
                        </td>
                        <td rowspan="5"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11231&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lê
                                Tạ Tú Uyên</a></td>
                        <td rowspan="5"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1467">Nhanh
                                HCM - SEO GG MAPS | Vật giá - Hồ Chí Minh</a></td>
                        <td rowspan="5"><b>4</b></td>
                        <td rowspan="5"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11231&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10,989,660</a>
                        </td>
                    </tr>
                    <tr trid="688" class="trid-688">
                        <td>Gói SEO TỐI ƯU</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=574&amp;employeeId=11231&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,993,000</a>
                        </td>
                    </tr>
                    <tr trid="688" class="trid-688 even">
                        <td>Gói SEO CƠ BẢN</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=573&amp;employeeId=11231&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,289,000</a>
                        </td>
                    </tr>
                    <tr trid="688" class="trid-688">
                        <td>Gói Tạo mới Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=542&amp;employeeId=11231&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,662,660</a>
                        </td>
                    </tr>
                    <tr trid="688" class="trid-688 even">
                        <td>Gói Xác minh Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=543&amp;employeeId=11231&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,045,000</a>
                        </td>
                    </tr>
                    <tr trid="693" class="trid-693">
                        <td rowspan="4">116</td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11224&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10073</a>
                        </td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11224&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Bùi
                                Gia Bảo</a></td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1376">Nhanh
                                HCM - Nhóm KD4_ThịnhNQG | Vật giá - Hồ Chí Minh</a></td>
                        <td rowspan="4"><b>3</b></td>
                        <td rowspan="4"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11224&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5,472,500</a>
                        </td>
                    </tr>
                    <tr trid="693" class="trid-693 even">
                        <td>Chăm sóc fanpage - Gói VIP 3</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=515&amp;employeeId=11224&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,970,000</a>
                        </td>
                    </tr>
                    <tr trid="693" class="trid-693">
                        <td>Gói SEO CƠ BẢN</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=573&amp;employeeId=11224&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,716,000</a>
                        </td>
                    </tr>
                    <tr trid="693" class="trid-693 even">
                        <td>Gói Xác minh Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=543&amp;employeeId=11224&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">786,500</a>
                        </td>
                    </tr>
                    <tr trid="697" class="trid-697">
                        <td rowspan="7">117</td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11130&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9982</a>
                        </td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11130&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Thị Kiều Mỹ</a></td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1308">Nhanh
                                HCM - Nhóm KD9_ThưNTA | Vật giá - Hồ Chí Minh</a></td>
                        <td rowspan="7"><b>6</b></td>
                        <td rowspan="7"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11130&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">14,997,000</a>
                        </td>
                    </tr>
                    <tr trid="697" class="trid-697 even">
                        <td>Chăm sóc fanpage - Gói VIP 2</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=514&amp;employeeId=11130&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5,005,000</a>
                        </td>
                    </tr>
                    <tr trid="697" class="trid-697">
                        <td>Gói Basic 1 - QLBH - online</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=293&amp;employeeId=11130&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,840,000</a>
                        </td>
                    </tr>
                    <tr trid="697" class="trid-697 even">
                        <td>Gói Combo 5 gian hàng</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=451&amp;employeeId=11130&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,600,000</a>
                        </td>
                    </tr>
                    <tr trid="697" class="trid-697">
                        <td>Chăm sóc fanpage - Gói VIP 3</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=515&amp;employeeId=11130&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,112,000</a>
                        </td>
                    </tr>
                    <tr trid="697" class="trid-697 even">
                        <td>Gói Ecom (không giới hạn gian hàng/1 sàn TMĐT)</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=511&amp;employeeId=11130&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">240,000</a>
                        </td>
                    </tr>
                    <tr trid="697" class="trid-697">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=11130&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">200,000</a>
                        </td>
                    </tr>
                    <tr trid="704" class="trid-704 even">
                        <td rowspan="2">118</td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10015&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8871</a>
                        </td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10015&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phạm
                                Quốc Tuấn</a></td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1457">Phòng
                                dịch vụ SEO GG MAPS | Nhanh.vn</a></td>
                        <td rowspan="2"><b>1</b></td>
                        <td rowspan="2"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10015&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4,521,000</a>
                        </td>
                    </tr>
                    <tr trid="704" class="trid-704">
                        <td>Gói SEO CƠ BẢN</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=573&amp;employeeId=10015&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4,521,000</a>
                        </td>
                    </tr>
                    <tr trid="706" class="trid-706 even">
                        <td rowspan="4">119</td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11280&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10115</a>
                        </td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11280&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                Thị Soan</a></td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1318">Nhanh
                                HN - Phòng KD2_TùngNT | Nhanh.vn</a></td>
                        <td rowspan="4"><b>3</b></td>
                        <td rowspan="4"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11280&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,440,500</a>
                        </td>
                    </tr>
                    <tr trid="706" class="trid-706">
                        <td>Gói Premium - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=253&amp;employeeId=11280&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,100,000</a>
                        </td>
                    </tr>
                    <tr trid="706" class="trid-706 even">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=11280&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">840,000</a>
                        </td>
                    </tr>
                    <tr trid="706" class="trid-706">
                        <td>Gói Tạo mới Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=542&amp;employeeId=11280&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">500,500</a>
                        </td>
                    </tr>
                    <tr trid="710" class="trid-710 even">
                        <td rowspan="2">120</td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11272&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10107</a>
                        </td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11272&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Đức Tuấn</a></td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1318">Nhanh
                                HN - Phòng KD2_TùngNT | Nhanh.vn</a></td>
                        <td rowspan="2"><b>1</b></td>
                        <td rowspan="2"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11272&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="710" class="trid-710">
                        <td>Gói Tạo mới Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=542&amp;employeeId=11272&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="712" class="trid-712 even">
                        <td rowspan="6">121</td>
                        <td rowspan="6"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10070&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8922</a>
                        </td>
                        <td rowspan="6"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10070&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Hồ
                                Tấn Hải</a></td>
                        <td rowspan="6"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1155">Nhanh
                                HCM - Phòng KD8_LâmNV | Vật giá - Hồ Chí Minh</a></td>
                        <td rowspan="6"><b>5</b></td>
                        <td rowspan="6"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10070&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">14,296,000</a>
                        </td>
                    </tr>
                    <tr trid="712" class="trid-712">
                        <td>Gói thiết kế website theo yêu cầu</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=103&amp;employeeId=10070&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8,000,000</a>
                        </td>
                    </tr>
                    <tr trid="712" class="trid-712 even">
                        <td>Gói Kho tổng (chỉ xuất nhập kho, không bán hàng)</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=420&amp;employeeId=10070&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,880,000</a>
                        </td>
                    </tr>
                    <tr trid="712" class="trid-712">
                        <td>Gói thiết kế thêm tính năng cho website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=372&amp;employeeId=10070&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,000,000</a>
                        </td>
                    </tr>
                    <tr trid="712" class="trid-712 even">
                        <td>Gói Ecom</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=509&amp;employeeId=10070&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,116,000</a>
                        </td>
                    </tr>
                    <tr trid="712" class="trid-712">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=10070&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">300,000</a>
                        </td>
                    </tr>
                    <tr trid="718" class="trid-718 even">
                        <td rowspan="2">122</td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11120&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9972</a>
                        </td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11120&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Hoài Nam</a></td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1241">Nhanh
                                HN - KD10_ThanhPT | Nhanh.vn</a></td>
                        <td rowspan="2"><b>1</b></td>
                        <td rowspan="2"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11120&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">500,500</a>
                        </td>
                    </tr>
                    <tr trid="718" class="trid-718">
                        <td>Gói Xác minh Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=543&amp;employeeId=11120&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">500,500</a>
                        </td>
                    </tr>
                    <tr trid="720" class="trid-720 even">
                        <td rowspan="3">123</td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11144&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9995</a>
                        </td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11144&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Thị Thu Hằng</a></td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1147">Chăm
                                sóc khách hàng - UyênTL | Nhanh.vn</a></td>
                        <td rowspan="3"><b>2</b></td>
                        <td rowspan="3"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11144&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,800,000</a>
                        </td>
                    </tr>
                    <tr trid="720" class="trid-720">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=11144&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,440,000</a>
                        </td>
                    </tr>
                    <tr trid="720" class="trid-720 even">
                        <td>Gói Combo 3 fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=439&amp;employeeId=11144&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">360,000</a>
                        </td>
                    </tr>
                    <tr trid="723" class="trid-723">
                        <td rowspan="7">124</td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9521&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8413</a>
                        </td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9521&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                Văn Thành</a></td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1285">Nhanh
                                HN - ThanhTV_Phát triển đối tác | Nhanh.vn</a></td>
                        <td rowspan="7"><b>6</b></td>
                        <td rowspan="7"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9521&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">17,716,000</a>
                        </td>
                    </tr>
                    <tr trid="723" class="trid-723 even">
                        <td>Gói Premium - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=253&amp;employeeId=9521&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">13,296,000</a>
                        </td>
                    </tr>
                    <tr trid="723" class="trid-723">
                        <td>Gói thiết kế website theo yêu cầu</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=103&amp;employeeId=9521&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,220,690</a>
                        </td>
                    </tr>
                    <tr trid="723" class="trid-723 even">
                        <td>Gói phí tích hợp API</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=261&amp;employeeId=9521&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,200,000</a>
                        </td>
                    </tr>
                    <tr trid="723" class="trid-723">
                        <td>Gói Website cơ bản</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=267&amp;employeeId=9521&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">999,310</a>
                        </td>
                    </tr>
                    <tr trid="723" class="trid-723 even">
                        <td>Gói Basic 2 - QLBH - offline</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=294&amp;employeeId=9521&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="723" class="trid-723">
                        <td>Thiết kế thêm tính năng cho website: bảo mật https cho website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=305&amp;employeeId=9521&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="730" class="trid-730 even">
                        <td rowspan="3">125</td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11148&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9999</a>
                        </td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11148&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Viết Tuấn</a></td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1452">Đại
                                lý công ty | Nhanh.vn</a></td>
                        <td rowspan="3"><b>2</b></td>
                        <td rowspan="3"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11148&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,380,000</a>
                        </td>
                    </tr>
                    <tr trid="730" class="trid-730">
                        <td>Gói thiết kế website theo yêu cầu</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=103&amp;employeeId=11148&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">951,724</a>
                        </td>
                    </tr>
                    <tr trid="730" class="trid-730 even">
                        <td>Gói Website cơ bản</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=267&amp;employeeId=11148&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">428,276</a>
                        </td>
                    </tr>
                    <tr trid="733" class="trid-733">
                        <td rowspan="7">126</td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10319&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9154</a>
                        </td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10319&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Ngô
                                Trí Cường</a></td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1313">Nhanh
                                HN - KD17_TùngNT | Nhanh.vn</a></td>
                        <td rowspan="7"><b>6</b></td>
                        <td rowspan="7"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10319&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7,400,000</a>
                        </td>
                    </tr>
                    <tr trid="733" class="trid-733 even">
                        <td>Gói thiết kế thêm tính năng cho website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=372&amp;employeeId=10319&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,000,000</a>
                        </td>
                    </tr>
                    <tr trid="733" class="trid-733">
                        <td>Gói Website cơ bản</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=267&amp;employeeId=10319&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,800,000</a>
                        </td>
                    </tr>
                    <tr trid="733" class="trid-733 even">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=10319&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,500,000</a>
                        </td>
                    </tr>
                    <tr trid="733" class="trid-733">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=10319&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">900,000</a>
                        </td>
                    </tr>
                    <tr trid="733" class="trid-733 even">
                        <td>Gói Ecom</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=509&amp;employeeId=10319&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">900,000</a>
                        </td>
                    </tr>
                    <tr trid="733" class="trid-733">
                        <td>Thiết kế thêm tính năng cho website: bảo mật https cho website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=305&amp;employeeId=10319&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">300,000</a>
                        </td>
                    </tr>
                    <tr trid="740" class="trid-740 even">
                        <td rowspan="3">127</td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=951&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1601</a>
                        </td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=951&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Hoàng Long</a></td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1032">Phòng
                                KD10 | Vật giá - Hồ Chí Minh</a></td>
                        <td rowspan="3"><b>2</b></td>
                        <td rowspan="3"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=951&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">15,040,000</a>
                        </td>
                    </tr>
                    <tr trid="740" class="trid-740">
                        <td>GHĐB (mới)</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=232&amp;employeeId=951&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">14,840,000</a>
                        </td>
                    </tr>
                    <tr trid="740" class="trid-740 even">
                        <td>Nạp tiền</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=230&amp;employeeId=951&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">200,000</a>
                        </td>
                    </tr>
                    <tr trid="743" class="trid-743">
                        <td rowspan="2">128</td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11209&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10058</a>
                        </td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11209&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Phương Mai</a></td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1155">Nhanh
                                HCM - Phòng KD8_LâmNV | Vật giá - Hồ Chí Minh</a></td>
                        <td rowspan="2"><b>1</b></td>
                        <td rowspan="2"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11209&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">500,500</a>
                        </td>
                    </tr>
                    <tr trid="743" class="trid-743 even">
                        <td>Gói Tạo mới Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=542&amp;employeeId=11209&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">500,500</a>
                        </td>
                    </tr>
                    <tr trid="745" class="trid-745">
                        <td rowspan="3">129</td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11292&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10127</a>
                        </td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11292&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lê
                                Trung Nghĩa</a></td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1376">Nhanh
                                HCM - Nhóm KD4_ThịnhNQG | Vật giá - Hồ Chí Minh</a></td>
                        <td rowspan="3"><b>2</b></td>
                        <td rowspan="3"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11292&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,501,500</a>
                        </td>
                    </tr>
                    <tr trid="745" class="trid-745 even">
                        <td>Gói Xác minh Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=543&amp;employeeId=11292&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,001,000</a>
                        </td>
                    </tr>
                    <tr trid="745" class="trid-745">
                        <td>Gói Tạo mới Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=542&amp;employeeId=11292&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">500,500</a>
                        </td>
                    </tr>
                    <tr trid="748" class="trid-748 even">
                        <td rowspan="2">130</td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9640&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8514</a>
                        </td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9640&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Cao
                                Thị Thu Hằng</a></td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1386">Sale
                                Marketing | Nhanh.vn</a></td>
                        <td rowspan="2"><b>1</b></td>
                        <td rowspan="2"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9640&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="748" class="trid-748">
                        <td>Gói Thiết kế Website P</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=520&amp;employeeId=9640&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="750" class="trid-750 even">
                        <td rowspan="3">131</td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11166&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10017</a>
                        </td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11166&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Dương
                                Thị Thanh Tú</a></td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1241">Nhanh
                                HN - KD10_ThanhPT | Nhanh.vn</a></td>
                        <td rowspan="3"><b>2</b></td>
                        <td rowspan="3"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11166&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,486,000</a>
                        </td>
                    </tr>
                    <tr trid="750" class="trid-750">
                        <td>Gói SEO CƠ BẢN</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=573&amp;employeeId=11166&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,485,000</a>
                        </td>
                    </tr>
                    <tr trid="750" class="trid-750 even">
                        <td>Gói Xác minh Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=543&amp;employeeId=11166&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,001,000</a>
                        </td>
                    </tr>
                    <tr trid="753" class="trid-753">
                        <td rowspan="3">132</td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9631&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8505</a>
                        </td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9631&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Lê
                                Trung Đức</a></td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=840">Giám
                                đốc dự án | Nhanh.vn</a></td>
                        <td rowspan="3"><b>2</b></td>
                        <td rowspan="3"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9631&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7,170,000</a>
                        </td>
                    </tr>
                    <tr trid="753" class="trid-753 even">
                        <td>Gói Premium - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=253&amp;employeeId=9631&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5,850,000</a>
                        </td>
                    </tr>
                    <tr trid="753" class="trid-753">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=9631&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,320,000</a>
                        </td>
                    </tr>
                    <tr trid="756" class="trid-756 even">
                        <td rowspan="3">133</td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10500&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9294</a>
                        </td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10500&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Thái
                                Chí Toàn</a></td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1032">Phòng
                                KD10 | Vật giá - Hồ Chí Minh</a></td>
                        <td rowspan="3"><b>2</b></td>
                        <td rowspan="3"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10500&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">20,300,000</a>
                        </td>
                    </tr>
                    <tr trid="756" class="trid-756">
                        <td>GHĐB (tái ký)</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=231&amp;employeeId=10500&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">19,800,000</a>
                        </td>
                    </tr>
                    <tr trid="756" class="trid-756 even">
                        <td>Nạp tiền</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=230&amp;employeeId=10500&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">500,000</a>
                        </td>
                    </tr>
                    <tr trid="759" class="trid-759">
                        <td rowspan="4">134</td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1746&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">0452</a>
                        </td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1746&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phạm
                                Thị Thu Hằng</a></td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=561">Phòng
                                KD 6 | Vật giá - Hà Nội</a></td>
                        <td rowspan="4"><b>3</b></td>
                        <td rowspan="4"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=1746&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">16,544,000</a>
                        </td>
                    </tr>
                    <tr trid="759" class="trid-759 even">
                        <td>GHĐB (mới)</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=232&amp;employeeId=1746&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7,920,000</a>
                        </td>
                    </tr>
                    <tr trid="759" class="trid-759">
                        <td>Nạp tiền</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=230&amp;employeeId=1746&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6,050,000</a>
                        </td>
                    </tr>
                    <tr trid="759" class="trid-759 even">
                        <td>GHĐB (tái ký)</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=231&amp;employeeId=1746&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,574,000</a>
                        </td>
                    </tr>
                    <tr trid="763" class="trid-763">
                        <td rowspan="2">135</td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7389&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6448</a>
                        </td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7389&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Hồ
                                Phạm Ngọc Tiên</a></td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=640">Sàn
                                Vật Giá HCM | Vật giá - Hồ Chí Minh</a></td>
                        <td rowspan="2"><b>1</b></td>
                        <td rowspan="2"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7389&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="763" class="trid-763 even">
                        <td>Dịch vụ Viết bài</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=282&amp;employeeId=7389&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="765" class="trid-765">
                        <td rowspan="2">136</td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11200&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10049</a>
                        </td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11200&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Vũ
                                Tiến Tài</a></td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1282">Phòng
                                Dịch Vụ Khách Hàng | Nhanh.vn</a></td>
                        <td rowspan="2"><b>1</b></td>
                        <td rowspan="2"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11200&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,000,000</a>
                        </td>
                    </tr>
                    <tr trid="765" class="trid-765 even">
                        <td>Gói Premium - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=253&amp;employeeId=11200&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,000,000</a>
                        </td>
                    </tr>
                    <tr trid="767" class="trid-767">
                        <td rowspan="7">137</td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10769&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9540</a>
                        </td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10769&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Thị Hiếu</a></td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1254">Nhanh
                                HCM - Nhóm KD5_LiêmNT | Vật giá - Hồ Chí Minh</a></td>
                        <td rowspan="7"><b>6</b></td>
                        <td rowspan="7"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10769&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">17,880,000</a>
                        </td>
                    </tr>
                    <tr trid="767" class="trid-767 even">
                        <td>Gói Premium - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=253&amp;employeeId=10769&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6,000,000</a>
                        </td>
                    </tr>
                    <tr trid="767" class="trid-767">
                        <td>Gói Website cơ bản</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=267&amp;employeeId=10769&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,880,000</a>
                        </td>
                    </tr>
                    <tr trid="767" class="trid-767 even">
                        <td>Gói Combo 3 fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=439&amp;employeeId=10769&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,400,000</a>
                        </td>
                    </tr>
                    <tr trid="767" class="trid-767">
                        <td>Gói Ecom</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=509&amp;employeeId=10769&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,400,000</a>
                        </td>
                    </tr>
                    <tr trid="767" class="trid-767 even">
                        <td>Gói phí tích hợp API</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=261&amp;employeeId=10769&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,400,000</a>
                        </td>
                    </tr>
                    <tr trid="767" class="trid-767">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=10769&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,800,000</a>
                        </td>
                    </tr>
                    <tr trid="774" class="trid-774 even">
                        <td rowspan="2">138</td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11291&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10126</a>
                        </td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11291&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Đặng
                                Anh Tuấn</a></td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1452">Đại
                                lý công ty | Nhanh.vn</a></td>
                        <td rowspan="2"><b>1</b></td>
                        <td rowspan="2"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11291&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,800,000</a>
                        </td>
                    </tr>
                    <tr trid="774" class="trid-774">
                        <td>Gói Basic 2 - QLBH - offline</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=294&amp;employeeId=11291&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,800,000</a>
                        </td>
                    </tr>
                    <tr trid="776" class="trid-776 even">
                        <td rowspan="3">139</td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11239&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10085</a>
                        </td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11239&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Huỳnh Anh Thư</a></td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1468">Nhanh
                                HCM - Sale Marketing | Vật giá - Hồ Chí Minh</a></td>
                        <td rowspan="3"><b>2</b></td>
                        <td rowspan="3"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11239&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8,508,500</a>
                        </td>
                    </tr>
                    <tr trid="776" class="trid-776">
                        <td>Chăm sóc fanpage - Gói VIP 1</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=513&amp;employeeId=11239&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8,008,000</a>
                        </td>
                    </tr>
                    <tr trid="776" class="trid-776 even">
                        <td>Gói Tạo mới Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=542&amp;employeeId=11239&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">500,500</a>
                        </td>
                    </tr>
                    <tr trid="779" class="trid-779">
                        <td rowspan="3">140</td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11299&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10134</a>
                        </td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11299&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Vũ
                                Quang Chung</a></td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1318">Nhanh
                                HN - Phòng KD2_TùngNT | Nhanh.vn</a></td>
                        <td rowspan="3"><b>2</b></td>
                        <td rowspan="3"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11299&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,911,000</a>
                        </td>
                    </tr>
                    <tr trid="779" class="trid-779 even">
                        <td>Gói Tạo mới Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=542&amp;employeeId=11299&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,001,000</a>
                        </td>
                    </tr>
                    <tr trid="779" class="trid-779">
                        <td>Gói Xác minh Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=543&amp;employeeId=11299&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">910,000</a>
                        </td>
                    </tr>
                    <tr trid="782" class="trid-782 even">
                        <td rowspan="3">141</td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9523&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8415</a>
                        </td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9523&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Hồng Anh</a></td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1460">CTV
                                KD Đà Nẵng | Nhanh.vn Đà Nẵng</a></td>
                        <td rowspan="3"><b>2</b></td>
                        <td rowspan="3"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9523&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,385,000</a>
                        </td>
                    </tr>
                    <tr trid="782" class="trid-782">
                        <td>Gói Premium - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=253&amp;employeeId=9523&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,160,000</a>
                        </td>
                    </tr>
                    <tr trid="782" class="trid-782 even">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=9523&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">225,000</a>
                        </td>
                    </tr>
                    <tr trid="785" class="trid-785">
                        <td rowspan="6">142</td>
                        <td rowspan="6"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11295&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10130</a>
                        </td>
                        <td rowspan="6"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11295&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                Quang Nhật</a></td>
                        <td rowspan="6"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1320">Nhanh
                                HN - Phòng KD4_TrườngVV | Nhanh.vn</a></td>
                        <td rowspan="6"><b>5</b></td>
                        <td rowspan="6"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11295&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7,317,000</a>
                        </td>
                    </tr>
                    <tr trid="785" class="trid-785 even">
                        <td>Chăm sóc fanpage - Gói VIP 3</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=515&amp;employeeId=11295&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,036,000</a>
                        </td>
                    </tr>
                    <tr trid="785" class="trid-785">
                        <td>Gói thiết kế website theo yêu cầu</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=103&amp;employeeId=11295&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,600,000</a>
                        </td>
                    </tr>
                    <tr trid="785" class="trid-785 even">
                        <td>Gói Website tối ưu</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=268&amp;employeeId=11295&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,440,000</a>
                        </td>
                    </tr>
                    <tr trid="785" class="trid-785">
                        <td>Gói Xác minh Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=543&amp;employeeId=11295&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,001,000</a>
                        </td>
                    </tr>
                    <tr trid="785" class="trid-785 even">
                        <td>Thiết kế thêm tính năng cho website: bảo mật https cho website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=305&amp;employeeId=11295&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">240,000</a>
                        </td>
                    </tr>
                    <tr trid="791" class="trid-791">
                        <td rowspan="4">143</td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=937&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1308</a>
                        </td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=937&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phạm
                                Văn Phú</a></td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=629">Phòng
                                giám đốc | Vật giá - Hồ Chí Minh</a></td>
                        <td rowspan="4"><b>3</b></td>
                        <td rowspan="4"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=937&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">28,820,000</a>
                        </td>
                    </tr>
                    <tr trid="791" class="trid-791 even">
                        <td>GHĐB (mới)</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=232&amp;employeeId=937&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10,560,000</a>
                        </td>
                    </tr>
                    <tr trid="791" class="trid-791">
                        <td>Marketing</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=220&amp;employeeId=937&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9,350,000</a>
                        </td>
                    </tr>
                    <tr trid="791" class="trid-791 even">
                        <td>Tư vấn và tối ưu quy trình Marketing Insight</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=480&amp;employeeId=937&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8,910,000</a>
                        </td>
                    </tr>
                    <tr trid="795" class="trid-795">
                        <td rowspan="3">144</td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=4785&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3996</a>
                        </td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=4785&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                Văn Anh Vũ</a></td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1442">Phòng
                                KD ĐDV | Vật giá - Hồ Chí Minh</a></td>
                        <td rowspan="3"><b>2</b></td>
                        <td rowspan="3"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=4785&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4,950,000</a>
                        </td>
                    </tr>
                    <tr trid="795" class="trid-795 even">
                        <td>GHĐB (mới)</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=232&amp;employeeId=4785&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,960,000</a>
                        </td>
                    </tr>
                    <tr trid="795" class="trid-795">
                        <td>Siêu vip</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=226&amp;employeeId=4785&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">990,000</a>
                        </td>
                    </tr>
                    <tr trid="798" class="trid-798 even">
                        <td rowspan="2">145</td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7691&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6749</a>
                        </td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7691&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Văn Hưng</a></td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1437">123Job
                                | 123job.vn</a></td>
                        <td rowspan="2"><b>1</b></td>
                        <td rowspan="2"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7691&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,595,000</a>
                        </td>
                    </tr>
                    <tr trid="798" class="trid-798">
                        <td>123job - Gói mở hồ sơ ứng viên</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=584&amp;employeeId=7691&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,595,000</a>
                        </td>
                    </tr>
                    <tr trid="800" class="trid-800 even">
                        <td rowspan="2">146</td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11021&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9791</a>
                        </td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11021&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Đỗ
                                Thị Thanh Nhàn</a></td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1437">123Job
                                | 123job.vn</a></td>
                        <td rowspan="2"><b>1</b></td>
                        <td rowspan="2"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11021&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="800" class="trid-800">
                        <td>123job - Gói mở hồ sơ ứng viên</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=584&amp;employeeId=11021&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="802" class="trid-802 even">
                        <td rowspan="7">147</td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10375&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8882</a>
                        </td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10375&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Giới
                                thiệu</a></td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=453">IT
                                ERP | Nhanh.vn</a></td>
                        <td rowspan="7"><b>6</b></td>
                        <td rowspan="7"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10375&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,150,000</a>
                        </td>
                    </tr>
                    <tr trid="802" class="trid-802">
                        <td>Gói Website cơ bản</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=267&amp;employeeId=10375&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,080,000</a>
                        </td>
                    </tr>
                    <tr trid="802" class="trid-802 even">
                        <td>Gói Premium - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=253&amp;employeeId=10375&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">900,000</a>
                        </td>
                    </tr>
                    <tr trid="802" class="trid-802">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=10375&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">450,000</a>
                        </td>
                    </tr>
                    <tr trid="802" class="trid-802 even">
                        <td>Gói Basic 1 - QLBH - online</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=293&amp;employeeId=10375&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">360,000</a>
                        </td>
                    </tr>
                    <tr trid="802" class="trid-802">
                        <td>Gói Kho tổng (chỉ xuất nhập kho, không bán hàng)</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=420&amp;employeeId=10375&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">180,000</a>
                        </td>
                    </tr>
                    <tr trid="802" class="trid-802 even">
                        <td>Thiết kế thêm tính năng cho website: bảo mật https cho website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=305&amp;employeeId=10375&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">180,000</a>
                        </td>
                    </tr>
                    <tr trid="809" class="trid-809">
                        <td rowspan="2">148</td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11300&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10135</a>
                        </td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11300&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Thị Phương Thảo</a></td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1468">Nhanh
                                HCM - Sale Marketing | Vật giá - Hồ Chí Minh</a></td>
                        <td rowspan="2"><b>1</b></td>
                        <td rowspan="2"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11300&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6,006,000</a>
                        </td>
                    </tr>
                    <tr trid="809" class="trid-809 even">
                        <td>Chăm sóc fanpage - Gói VIP 1</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=513&amp;employeeId=11300&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">6,006,000</a>
                        </td>
                    </tr>
                    <tr trid="811" class="trid-811">
                        <td rowspan="5">149</td>
                        <td rowspan="5"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=3927&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2898</a>
                        </td>
                        <td rowspan="5"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=3927&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phụ
                                trách marketing</a></td>
                        <td rowspan="5"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1386">Sale
                                Marketing | Nhanh.vn</a></td>
                        <td rowspan="5"><b>4</b></td>
                        <td rowspan="5"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=3927&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="811" class="trid-811 even">
                        <td>Chăm sóc fanpage - Gói content</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=321&amp;employeeId=3927&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="811" class="trid-811">
                        <td>Chăm sóc fanpage - Gói VIP 2</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=514&amp;employeeId=3927&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="811" class="trid-811 even">
                        <td>Chăm sóc fanpage - Gói VIP 1</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=513&amp;employeeId=3927&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="811" class="trid-811">
                        <td>Gói Tool quét data facebook</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=589&amp;employeeId=3927&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="816" class="trid-816 even">
                        <td rowspan="3">150</td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11301&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10136</a>
                        </td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11301&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Võ
                                Thị Thu Sương</a></td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1158">Nhanh
                                HCM - Nhóm KD3_NgânTK | Vật giá - Hồ Chí Minh</a></td>
                        <td rowspan="3"><b>2</b></td>
                        <td rowspan="3"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11301&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4,476,000</a>
                        </td>
                    </tr>
                    <tr trid="816" class="trid-816">
                        <td>Chăm sóc fanpage - Gói VIP 3</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=515&amp;employeeId=11301&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,036,000</a>
                        </td>
                    </tr>
                    <tr trid="816" class="trid-816 even">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=11301&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,440,000</a>
                        </td>
                    </tr>
                    <tr trid="819" class="trid-819">
                        <td rowspan="3">151</td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9481&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8375</a>
                        </td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9481&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trịnh
                                Thị Phương Nhi</a></td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=641">Phòng
                                KD 01 | Vật giá - Hồ Chí Minh</a></td>
                        <td rowspan="3"><b>2</b></td>
                        <td rowspan="3"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9481&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">11,880,000</a>
                        </td>
                    </tr>
                    <tr trid="819" class="trid-819 even">
                        <td>GHĐB (tái ký)</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=231&amp;employeeId=9481&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7,920,000</a>
                        </td>
                    </tr>
                    <tr trid="819" class="trid-819">
                        <td>GHĐB (mới)</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=232&amp;employeeId=9481&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,960,000</a>
                        </td>
                    </tr>
                    <tr trid="822" class="trid-822 even">
                        <td rowspan="2">152</td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10696&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9474</a>
                        </td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10696&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trương
                                Thị Tường Vi</a></td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1371">CSonline-Telesale
                                | Vật giá - Hồ Chí Minh</a></td>
                        <td rowspan="2"><b>1</b></td>
                        <td rowspan="2"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10696&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="822" class="trid-822">
                        <td>GHĐB (tái ký)</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=231&amp;employeeId=10696&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="824" class="trid-824 even">
                        <td rowspan="3">153</td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11312&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10147</a>
                        </td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11312&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Ngọc Ánh</a></td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1320">Nhanh
                                HN - Phòng KD4_TrườngVV | Nhanh.vn</a></td>
                        <td rowspan="3"><b>2</b></td>
                        <td rowspan="3"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11312&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,001,000</a>
                        </td>
                    </tr>
                    <tr trid="824" class="trid-824">
                        <td>Gói Tạo mới Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=542&amp;employeeId=11312&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">500,500</a>
                        </td>
                    </tr>
                    <tr trid="824" class="trid-824 even">
                        <td>Gói Xác minh Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=543&amp;employeeId=11312&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">500,500</a>
                        </td>
                    </tr>
                    <tr trid="827" class="trid-827">
                        <td rowspan="3">154</td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11276&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10111</a>
                        </td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11276&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Võ
                                Việt Quốc Đại</a></td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1468">Nhanh
                                HCM - Sale Marketing | Vật giá - Hồ Chí Minh</a></td>
                        <td rowspan="3"><b>2</b></td>
                        <td rowspan="3"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11276&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4,092,000</a>
                        </td>
                    </tr>
                    <tr trid="827" class="trid-827 even">
                        <td>Chăm sóc fanpage - Gói VIP 2</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=514&amp;employeeId=11276&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,090,000</a>
                        </td>
                    </tr>
                    <tr trid="827" class="trid-827">
                        <td>Chăm sóc fanpage - Gói VIP 1</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=513&amp;employeeId=11276&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,002,000</a>
                        </td>
                    </tr>
                    <tr trid="830" class="trid-830 even">
                        <td rowspan="6">155</td>
                        <td rowspan="6"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11245&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10090</a>
                        </td>
                        <td rowspan="6"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11245&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phạm
                                Ngọc Tiến</a></td>
                        <td rowspan="6"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1419">Ecomcare
                                | Nhanh.vn</a></td>
                        <td rowspan="6"><b>5</b></td>
                        <td rowspan="6"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11245&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4,292,000</a>
                        </td>
                    </tr>
                    <tr trid="830" class="trid-830">
                        <td>Gói thiết kế website theo yêu cầu</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=103&amp;employeeId=11245&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,400,000</a>
                        </td>
                    </tr>
                    <tr trid="830" class="trid-830 even">
                        <td>Gói Website cơ bản</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=267&amp;employeeId=11245&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,260,000</a>
                        </td>
                    </tr>
                    <tr trid="830" class="trid-830">
                        <td>Gói Ecomcare Shopee</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=503&amp;employeeId=11245&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,224,000</a>
                        </td>
                    </tr>
                    <tr trid="830" class="trid-830 even">
                        <td>Gói dịch vụ nhập liệu sàn TMĐT</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=502&amp;employeeId=11245&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">326,400</a>
                        </td>
                    </tr>
                    <tr trid="830" class="trid-830">
                        <td>Gói khởi tạo và Decor gian hàng</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=579&amp;employeeId=11245&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">81,600</a>
                        </td>
                    </tr>
                    <tr trid="836" class="trid-836 even">
                        <td rowspan="4">156</td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11082&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9935</a>
                        </td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11082&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Thanh Vân</a></td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1048">Vchat
                                | Vật giá - Hà Nội</a></td>
                        <td rowspan="4"><b>3</b></td>
                        <td rowspan="4"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11082&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">18,504,000</a>
                        </td>
                    </tr>
                    <tr trid="836" class="trid-836">
                        <td>Vchat gói nâng cao</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=572&amp;employeeId=11082&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7,019,100</a>
                        </td>
                    </tr>
                    <tr trid="836" class="trid-836 even">
                        <td>Vchat gói Chuyên nghiệp</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=387&amp;employeeId=11082&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5,768,700</a>
                        </td>
                    </tr>
                    <tr trid="836" class="trid-836">
                        <td>Vchat gói Cơ bản</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=386&amp;employeeId=11082&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5,716,200</a>
                        </td>
                    </tr>
                    <tr trid="840" class="trid-840 even">
                        <td rowspan="4">157</td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=4760&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3963</a>
                        </td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=4760&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phạm
                                Phương Thanh</a></td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1048">Vchat
                                | Vật giá - Hà Nội</a></td>
                        <td rowspan="4"><b>3</b></td>
                        <td rowspan="4"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=4760&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">17,274,400</a>
                        </td>
                    </tr>
                    <tr trid="840" class="trid-840">
                        <td>Vchat gói Chuyên nghiệp</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=387&amp;employeeId=4760&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">11,111,500</a>
                        </td>
                    </tr>
                    <tr trid="840" class="trid-840 even">
                        <td>Vchat gói Cơ bản</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=386&amp;employeeId=4760&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4,833,600</a>
                        </td>
                    </tr>
                    <tr trid="840" class="trid-840">
                        <td>Vchat gói nâng cao</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=572&amp;employeeId=4760&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,329,300</a>
                        </td>
                    </tr>
                    <tr trid="844" class="trid-844 even">
                        <td rowspan="4">158</td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10593&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9384</a>
                        </td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10593&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phan
                                Ngọc Ý Linh</a></td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1126">Nhanh
                                HCM - Phòng KD1_NgânHTM | Vật giá - Hồ Chí Minh</a></td>
                        <td rowspan="4"><b>3</b></td>
                        <td rowspan="4"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10593&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9,116,500</a>
                        </td>
                    </tr>
                    <tr trid="844" class="trid-844">
                        <td>Gói SEO CƠ BẢN</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=573&amp;employeeId=10593&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5,016,000</a>
                        </td>
                    </tr>
                    <tr trid="844" class="trid-844 even">
                        <td>Gói Website cơ bản</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=267&amp;employeeId=10593&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,600,000</a>
                        </td>
                    </tr>
                    <tr trid="844" class="trid-844">
                        <td>Gói Xác minh Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=543&amp;employeeId=10593&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">500,500</a>
                        </td>
                    </tr>
                    <tr trid="848" class="trid-848 even">
                        <td rowspan="4">159</td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11176&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10027</a>
                        </td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11176&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Quang Nghĩa</a></td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1457">Phòng
                                dịch vụ SEO GG MAPS | Nhanh.vn</a></td>
                        <td rowspan="4"><b>3</b></td>
                        <td rowspan="4"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11176&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4,504,500</a>
                        </td>
                    </tr>
                    <tr trid="848" class="trid-848">
                        <td>Gói Xác minh Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=543&amp;employeeId=11176&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,002,000</a>
                        </td>
                    </tr>
                    <tr trid="848" class="trid-848 even">
                        <td>Gói Tạo mới Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=542&amp;employeeId=11176&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,501,500</a>
                        </td>
                    </tr>
                    <tr trid="848" class="trid-848">
                        <td>Gói SEO CƠ BẢN</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=573&amp;employeeId=11176&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,001,000</a>
                        </td>
                    </tr>
                    <tr trid="852" class="trid-852 even">
                        <td rowspan="7">160</td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9756&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">8618</a>
                        </td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9756&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Hoàng
                                Thùy Linh</a></td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1317">Nhanh
                                HN - Phòng KD5_AnhNX | Nhanh.vn</a></td>
                        <td rowspan="7"><b>6</b></td>
                        <td rowspan="7"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=9756&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">13,680,000</a>
                        </td>
                    </tr>
                    <tr trid="852" class="trid-852">
                        <td>Gói Premium - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=253&amp;employeeId=9756&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">12,000,000</a>
                        </td>
                    </tr>
                    <tr trid="852" class="trid-852 even">
                        <td>Gói Omni Starter</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=414&amp;employeeId=9756&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,560,000</a>
                        </td>
                    </tr>
                    <tr trid="852" class="trid-852">
                        <td>Thiết kế thêm tính năng cho website: bảo mật https cho website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=305&amp;employeeId=9756&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">120,000</a>
                        </td>
                    </tr>
                    <tr trid="852" class="trid-852 even">
                        <td>Phí dịch vụ TK quản trị tên miền VN</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=568&amp;employeeId=9756&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="852" class="trid-852">
                        <td>Lệ phí đăng ký tên miền VN</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=566&amp;employeeId=9756&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="852" class="trid-852 even">
                        <td>Phí duy trì tên miền VN</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=567&amp;employeeId=9756&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="859" class="trid-859">
                        <td rowspan="2">161</td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11303&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10138</a>
                        </td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11303&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Thị Như Quỳnh</a></td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1457">Phòng
                                dịch vụ SEO GG MAPS | Nhanh.vn</a></td>
                        <td rowspan="2"><b>1</b></td>
                        <td rowspan="2"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11303&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,275,000</a>
                        </td>
                    </tr>
                    <tr trid="859" class="trid-859 even">
                        <td>Gói Xác minh Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=543&amp;employeeId=11303&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,275,000</a>
                        </td>
                    </tr>
                    <tr trid="861" class="trid-861">
                        <td rowspan="2">162</td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=4148&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3194</a>
                        </td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=4148&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Cao
                                Văn Thảo</a></td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=756">Giảng
                                Võ | Cucre.vn - Hà Nội</a></td>
                        <td rowspan="2"><b>1</b></td>
                        <td rowspan="2"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=4148&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="861" class="trid-861 even">
                        <td>Gói Xác minh Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=543&amp;employeeId=4148&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="863" class="trid-863">
                        <td rowspan="2">163</td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11310&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10145</a>
                        </td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11310&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                Minh Tâm</a></td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1263">Nhanh
                                HN - KD8_CôngND | Nhanh.vn</a></td>
                        <td rowspan="2"><b>1</b></td>
                        <td rowspan="2"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11310&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,001,000</a>
                        </td>
                    </tr>
                    <tr trid="863" class="trid-863 even">
                        <td>Gói Xác minh Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=543&amp;employeeId=11310&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,001,000</a>
                        </td>
                    </tr>
                    <tr trid="865" class="trid-865">
                        <td rowspan="4">164</td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11131&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9983</a>
                        </td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11131&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Vũ
                                Thị Việt Trinh</a></td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1284">Nhanh
                                HN - KD16_TungNH | Nhanh.vn</a></td>
                        <td rowspan="4"><b>3</b></td>
                        <td rowspan="4"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11131&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,600,500</a>
                        </td>
                    </tr>
                    <tr trid="865" class="trid-865 even">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=11131&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,260,000</a>
                        </td>
                    </tr>
                    <tr trid="865" class="trid-865">
                        <td>Gói Shipping - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=251&amp;employeeId=11131&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">840,000</a>
                        </td>
                    </tr>
                    <tr trid="865" class="trid-865 even">
                        <td>Gói Tạo mới Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=542&amp;employeeId=11131&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">500,500</a>
                        </td>
                    </tr>
                    <tr trid="869" class="trid-869">
                        <td rowspan="5">165</td>
                        <td rowspan="5"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11138&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9990</a>
                        </td>
                        <td rowspan="5"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11138&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Hoàng Long</a></td>
                        <td rowspan="5"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1248">Nhanh
                                HN - KD11_NganLTT | Nhanh.vn</a></td>
                        <td rowspan="5"><b>4</b></td>
                        <td rowspan="5"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11138&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">11,316,000</a>
                        </td>
                    </tr>
                    <tr trid="869" class="trid-869 even">
                        <td>Gói Premium - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=253&amp;employeeId=11138&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,780,000</a>
                        </td>
                    </tr>
                    <tr trid="869" class="trid-869">
                        <td>Gói Ecom full sàn TMĐT</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=536&amp;employeeId=11138&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,780,000</a>
                        </td>
                    </tr>
                    <tr trid="869" class="trid-869 even">
                        <td>Gói Starter - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=252&amp;employeeId=11138&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,000,000</a>
                        </td>
                    </tr>
                    <tr trid="869" class="trid-869">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=11138&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">756,000</a>
                        </td>
                    </tr>
                    <tr trid="874" class="trid-874 even">
                        <td rowspan="3">166</td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10737&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9508</a>
                        </td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10737&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Thị Mai Hoa</a></td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1317">Nhanh
                                HN - Phòng KD5_AnhNX | Nhanh.vn</a></td>
                        <td rowspan="3"><b>2</b></td>
                        <td rowspan="3"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10737&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4,200,000</a>
                        </td>
                    </tr>
                    <tr trid="874" class="trid-874">
                        <td>Gói Omni Starter</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=414&amp;employeeId=10737&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,900,000</a>
                        </td>
                    </tr>
                    <tr trid="874" class="trid-874 even">
                        <td>Thiết kế thêm tính năng cho website: bảo mật https cho website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=305&amp;employeeId=10737&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">300,000</a>
                        </td>
                    </tr>
                    <tr trid="877" class="trid-877">
                        <td rowspan="3">167</td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11140&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9991</a>
                        </td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11140&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Thị Kim Thoa</a></td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1177">Kinh
                                doanh | Nhanh.vn Đà Nẵng</a></td>
                        <td rowspan="3"><b>2</b></td>
                        <td rowspan="3"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11140&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,227,500</a>
                        </td>
                    </tr>
                    <tr trid="877" class="trid-877 even">
                        <td>Gói SEO CƠ BẢN</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=573&amp;employeeId=11140&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,980,000</a>
                        </td>
                    </tr>
                    <tr trid="877" class="trid-877">
                        <td>Gói Tạo mới Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=542&amp;employeeId=11140&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">247,500</a>
                        </td>
                    </tr>
                    <tr trid="880" class="trid-880 even">
                        <td rowspan="3">168</td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11135&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9987</a>
                        </td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11135&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Phan
                                Lương Thị Kim Phương</a></td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1177">Kinh
                                doanh | Nhanh.vn Đà Nẵng</a></td>
                        <td rowspan="3"><b>2</b></td>
                        <td rowspan="3"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11135&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,227,500</a>
                        </td>
                    </tr>
                    <tr trid="880" class="trid-880">
                        <td>Gói SEO CƠ BẢN</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=573&amp;employeeId=11135&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,980,000</a>
                        </td>
                    </tr>
                    <tr trid="880" class="trid-880 even">
                        <td>Gói Tạo mới Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=542&amp;employeeId=11135&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">247,500</a>
                        </td>
                    </tr>
                    <tr trid="883" class="trid-883">
                        <td rowspan="5">169</td>
                        <td rowspan="5"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10919&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9689</a>
                        </td>
                        <td rowspan="5"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10919&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                Hữu Chiến</a></td>
                        <td rowspan="5"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1313">Nhanh
                                HN - KD17_TùngNT | Nhanh.vn</a></td>
                        <td rowspan="5"><b>4</b></td>
                        <td rowspan="5"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10919&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4,539,700</a>
                        </td>
                    </tr>
                    <tr trid="883" class="trid-883 even">
                        <td>Chăm sóc fanpage - Gói VIP 1</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=513&amp;employeeId=10919&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,980,000</a>
                        </td>
                    </tr>
                    <tr trid="883" class="trid-883">
                        <td>Gói Omni Starter</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=414&amp;employeeId=10919&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,649,700</a>
                        </td>
                    </tr>
                    <tr trid="883" class="trid-883 even">
                        <td>Gói SEO CƠ BẢN</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=573&amp;employeeId=10919&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">550,000</a>
                        </td>
                    </tr>
                    <tr trid="883" class="trid-883">
                        <td>Gói Tool quét data facebook</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=589&amp;employeeId=10919&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">360,000</a>
                        </td>
                    </tr>
                    <tr trid="888" class="trid-888 even">
                        <td rowspan="2">170</td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11184&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10035</a>
                        </td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11184&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Tuấn Vũ</a></td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1457">Phòng
                                dịch vụ SEO GG MAPS | Nhanh.vn</a></td>
                        <td rowspan="2"><b>1</b></td>
                        <td rowspan="2"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11184&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">550,000</a>
                        </td>
                    </tr>
                    <tr trid="888" class="trid-888">
                        <td>Gói Tạo mới Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=542&amp;employeeId=11184&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">550,000</a>
                        </td>
                    </tr>
                    <tr trid="890" class="trid-890 even">
                        <td rowspan="2">171</td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10553&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9345</a>
                        </td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10553&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Dương
                                Minh Hiếu</a></td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1263">Nhanh
                                HN - KD8_CôngND | Nhanh.vn</a></td>
                        <td rowspan="2"><b>1</b></td>
                        <td rowspan="2"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10553&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="890" class="trid-890">
                        <td>Gói Omni Starter</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=414&amp;employeeId=10553&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="892" class="trid-892 even">
                        <td rowspan="2">172</td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8743&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">7779</a>
                        </td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8743&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                Thị Hương</a></td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1177">Kinh
                                doanh | Nhanh.vn Đà Nẵng</a></td>
                        <td rowspan="2"><b>1</b></td>
                        <td rowspan="2"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=8743&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5,040,000</a>
                        </td>
                    </tr>
                    <tr trid="892" class="trid-892">
                        <td>Gói Premium - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=253&amp;employeeId=8743&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5,040,000</a>
                        </td>
                    </tr>
                    <tr trid="894" class="trid-894 even">
                        <td rowspan="3">173</td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11315&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10150</a>
                        </td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11315&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Hữu Lộc</a></td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1457">Phòng
                                dịch vụ SEO GG MAPS | Nhanh.vn</a></td>
                        <td rowspan="3"><b>2</b></td>
                        <td rowspan="3"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11315&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">910,000</a>
                        </td>
                    </tr>
                    <tr trid="894" class="trid-894">
                        <td>Gói Xác minh Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=543&amp;employeeId=11315&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">455,000</a>
                        </td>
                    </tr>
                    <tr trid="894" class="trid-894 even">
                        <td>Gói Tạo mới Maps</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=542&amp;employeeId=11315&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">455,000</a>
                        </td>
                    </tr>
                    <tr trid="897" class="trid-897">
                        <td rowspan="3">174</td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10785&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9556</a>
                        </td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10785&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Trần
                                Minh Thu</a></td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1468">Nhanh
                                HCM - Sale Marketing | Vật giá - Hồ Chí Minh</a></td>
                        <td rowspan="3"><b>2</b></td>
                        <td rowspan="3"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=10785&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,800,000</a>
                        </td>
                    </tr>
                    <tr trid="897" class="trid-897 even">
                        <td>Gói Basic 1 - QLBH - online</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=293&amp;employeeId=10785&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">1,200,000</a>
                        </td>
                    </tr>
                    <tr trid="897" class="trid-897">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=10785&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">600,000</a>
                        </td>
                    </tr>
                    <tr trid="900" class="trid-900 even">
                        <td rowspan="7">175</td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11091&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">9944</a>
                        </td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11091&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Dương
                                Hồng Quân</a></td>
                        <td rowspan="7"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1320">Nhanh
                                HN - Phòng KD4_TrườngVV | Nhanh.vn</a></td>
                        <td rowspan="7"><b>6</b></td>
                        <td rowspan="7"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11091&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="900" class="trid-900">
                        <td>Gói Omni Premium</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=415&amp;employeeId=11091&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="900" class="trid-900 even">
                        <td>Gói Premium - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=253&amp;employeeId=11091&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="900" class="trid-900">
                        <td>Thiết kế thêm tính năng cho website: bảo mật https cho website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=305&amp;employeeId=11091&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="900" class="trid-900 even">
                        <td>Gói Ecom</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=509&amp;employeeId=11091&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="900" class="trid-900">
                        <td>Gói Phần mềm quản lý fanpage</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=284&amp;employeeId=11091&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="900" class="trid-900 even">
                        <td>Gói Kho tổng (chỉ xuất nhập kho, không bán hàng)</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=420&amp;employeeId=11091&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="907" class="trid-907">
                        <td rowspan="3">176</td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11262&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10097</a>
                        </td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11262&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                Thị Mỹ Phụng</a></td>
                        <td rowspan="3"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1468">Nhanh
                                HCM - Sale Marketing | Vật giá - Hồ Chí Minh</a></td>
                        <td rowspan="3"><b>2</b></td>
                        <td rowspan="3"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11262&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4,604,000</a>
                        </td>
                    </tr>
                    <tr trid="907" class="trid-907 even">
                        <td>Chăm sóc fanpage - Gói VIP 1</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=513&amp;employeeId=11262&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">4,004,000</a>
                        </td>
                    </tr>
                    <tr trid="907" class="trid-907">
                        <td>Gói Shipping - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=251&amp;employeeId=11262&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">600,000</a>
                        </td>
                    </tr>
                    <tr trid="910" class="trid-910 even">
                        <td rowspan="4">177</td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11305&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10140</a>
                        </td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11305&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Huỳnh
                                Thị Hằng</a></td>
                        <td rowspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1452">Đại
                                lý công ty | Nhanh.vn</a></td>
                        <td rowspan="4"><b>3</b></td>
                        <td rowspan="4"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11305&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">5,760,000</a>
                        </td>
                    </tr>
                    <tr trid="910" class="trid-910">
                        <td>Gói Premium - QLBH</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=253&amp;employeeId=11305&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">3,600,000</a>
                        </td>
                    </tr>
                    <tr trid="910" class="trid-910 even">
                        <td>Gói Website cơ bản</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=267&amp;employeeId=11305&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">2,160,000</a>
                        </td>
                    </tr>
                    <tr trid="910" class="trid-910">
                        <td>Thiết kế thêm tính năng cho website: bảo mật https cho website</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=305&amp;employeeId=11305&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020"></a>
                        </td>
                    </tr>
                    <tr trid="914" class="trid-914 even">
                        <td rowspan="2">178</td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11288&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">10123</a>
                        </td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11288&amp;contractType=&amp;productId=&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">Vũ
                                Thị Quỳnh Trang</a></td>
                        <td rowspan="2"><a
                                href="https://erp.nhanh.vn/crm/report/productforemployee?employeeDepartmentId=1048">Vchat
                                | Vật giá - Hà Nội</a></td>
                        <td rowspan="2"><b>1</b></td>
                        <td rowspan="2"><a style="font-weight:bold" target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11288&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">867,000</a>
                        </td>
                    </tr>
                    <tr trid="914" class="trid-914">
                        <td>Vchat gói Chuyên nghiệp</td>
                        <td><a target="_blank"
                                href="https://erp.nhanh.vn/crm/report/employeetransaction?productId%5B%5D=387&amp;employeeId=11288&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020">867,000</a>
                        </td>
                    </tr>
                    <tr class="taskStt3 even">
                        <td colspan="5"><b>Tổng</b></td>
                        <td colspan="3" class="colNumber"><b>2,100,704,804</b></td>
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