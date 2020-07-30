@extends('Layout.master')

@section('title','ERP-Danh Sách Thanh Toán')
    
@section('css')
    <link href="{{ asset('asset/css/contract/bootstrap-multiselect.css" media="screen') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/css/contract/style.css') }}" type="text/css">
@endsection

@section('content-page')
    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/crm/contract/index">Danh sách hợp đồng</a></li>
            <li class="active">Danh sách thanh toán</li>
        </ul>
        <div class="filterContainer">
            <form method="GET" name="crmContractPaymentFilter" class="form-inline lolify"
                role="form" id="crmContractPaymentFilter">
                <div class="col-md-10 lolify-default">

                    <div class="form-group">
                        <input type="text" name="contractCustomer" maxlength="225"
                            placeholder="Bên khách" data-toggle="tooltip"
                            title="Thông tin bên khách ghi trên hợp đồng. Tên cá nhân, công ty, số điện toại, email, cmnd, gian hàng..."
                            id="contractCustomer" class="form-control" value=""> </div>
                    <div class="form-group">
                        <input type="text" name="contractId" maxlength="255"
                            placeholder="ID Hợp đồng" id="contractId" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="id" maxlength="255" placeholder="ID Phiếu Thu"
                            id="id" class="form-control" value=""> </div>
                    <div class="form-group">
                        <select name="transactionCode" id="transactionCode" class="form-control">
                            <option value="">----Hóa đơn----</option>
                            <option value="1">Đã xuất hoá đơn</option>
                            <option value="-1">Chưa xuất hoá đơn</option>
                        </select> </div>
                    <input type="hidden" name="leadId" id="leadId" class="form-control" value="">
                    <input type="hidden" name="accountId" id="accountId" class="form-control"
                        value=""> <input type="hidden" name="createdById" id="createdById"
                        class="form-control" value=""> <input type="hidden" name="accountingById"
                        id="accountingById" class="form-control" value=""> <input type="hidden"
                        name="commisstionToEmployeeId" id="commisstionToEmployeeId"
                        class="form-control" value=""> <input type="hidden"
                        name="accountingTransactionId" id="accountingTransactionId"
                        class="form-control" value="">
                    <div class="form-group">
                        <input name="submit" type="submit" id="btnFilter"
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
                            <li><a href="https://erp.nhanh.vn/crm/contract/transaction#"
                                    id="exportExcel"><i class="fa fa-file-excel-o"></i> Xuất trang
                                    hiện tại</a></li>
                            <li><a href="https://erp.nhanh.vn/crm/contract/transaction#"
                                    id="exportAll"><i class="fa fa-file-excel-o"></i> Xuất toàn
                                    bộ</a></li>
                            <li><a href="https://erp.nhanh.vn/crm/contract/transaction#"
                                    id="exportContractAll"><i class="fa fa-file-excel-o"></i> Xuất
                                    hợp đồng</a></li>
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
                            <option value="1">Chưa duyệt</option>
                            <option value="3">Đã duyệt</option>
                            <option value="5">Đã hủy</option>
                        </select> </div>
                    <div class="form-group">
                        <select name="productId[]" multiple="multiple" id="productId"
                            class="form-control" style="display: none;">
                            <option value="">- Sản phẩm -</option>
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
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value=""> - Sản phẩm -</label></a>
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
                        <select name="type" id="type" class="form-control">
                            <option value="">- Loại phiếu -</option>
                            <option value="3">Phiếu thu</option>
                            <option value="4">Phiếu chi</option>
                        </select> </div>
                    <div class="form-group">
                        <input type="text" name="customerName" maxlength="225"
                            placeholder="Khách hàng trên hệ thống" data-toggle="tooltip" title=""
                            id="customerName" class="form-control ui-autocomplete-input" value=""
                            autocomplete="off"
                            data-original-title="Thông tin khách hàng trên hệ thống. Ô nhập này là dạng suggest">
                    </div>
                    <div class="form-group">
                        <input type="text" name="applyDaterange" maxlength="11"
                            placeholder="Ngày tính doanh số" class="form-control date-range-picker"
                            id="applyDaterange" value=""> </div>
                    <div class="form-group">
                        <input type="text" name="approvedDaterange" maxlength="11"
                            placeholder="Ngày xác nhận" class="form-control date-range-picker"
                            id="approvedDaterange" value=""> </div>
                    <div class="form-group">
                        <input type="text" name="createdDaterange" maxlength="11"
                            placeholder="Ngày tạo" class="form-control date-range-picker"
                            id="createdDaterange" value=""> </div>
                    <div class="form-group">
                        <input type="text" name="createdByName" maxlength="225"
                            placeholder="Người tạo" id="createdByName"
                            class="form-control ui-autocomplete-input" value="" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input type="text" name="accountingByName" maxlength="225"
                            placeholder="Người duyệt" id="accountingByName"
                            class="form-control ui-autocomplete-input" value="" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input type="text" name="commisstionToName" maxlength="225"
                            placeholder="Người hưởng doanh số" id="commisstionToName"
                            class="form-control ui-autocomplete-input" value="" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input type="text" name="amount" maxlength="255"
                            placeholder="Giá trị thanh toán" id="amount" class="form-control"
                            value=""> </div>
                    <div class="form-group">
                        <input type="text" name="contractCreatedDaterange" maxlength="11"
                            placeholder="Ngày tạo hợp đồng" class="form-control date-range-picker"
                            id="contractCreatedDaterange" value=""> </div>
                    <div class="form-group">
                        <select name="source" id="source" class="form-control">
                            <option value="">- Nguồn thông tin -</option>
                            <option value="-1">Chưa cập nhật nguồn</option>
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
                        <select name="typeContract" id="typeContract" class="form-control">
                            <option value="">- Loại hợp đồng -</option>
                            <option value="1">Kí mới</option>
                            <option value="2">Tái kí</option>
                            <option value="3">Mở rộng</option>
                            <option value="4">Bán chéo</option>
                        </select> </div>
                    <div class="form-group">
                        <select name="accountingType" id="accountingType" class="form-control">
                            <option value="">- Hình thức thanh toán -</option>
                            <option value="3">Tiền mặt</option>
                            <option value="1">Chuyển khoản</option>
                        </select> </div>
                    <div class="form-group">
                        <select name="accountAccept" id="accountAccept" class="form-control">
                            <option value="">- Quỹ -</option>
                            <option value="1">Cty cổ phần Vật Giá VN</option>
                            <option value="2">----Vật Giá HN</option>
                            <option value="3">----Vật Giá HCM</option>
                            <option value="10">----Vật Giá Đà Nẵng</option>
                            <option value="19">Nhanh HN</option>
                            <option value="25">Nhanh HN(Phần cứng)</option>
                            <option value="20">Nhanh HCM</option>
                            <option value="26">Nhanh HCM(Phần cứng)</option>
                            <option value="21">Nhanh Đà Nẵng</option>
                            <option value="7">Marketing HN</option>
                            <option value="8">Marketing HCM</option>
                            <option value="9">Elite</option>
                            <option value="11">WeSave HN</option>
                            <option value="15">WeSave HCM</option>
                            <option value="12">IKI</option>
                            <option value="13">WeMarry</option>
                            <option value="14">Vchat</option>
                            <option value="16">Bizshare HN</option>
                            <option value="24">Bizshare HCM</option>
                            <option value="17">KyNguyenSo</option>
                            <option value="18">9houz</option>
                            <option value="22">9houz (HCM)</option>
                            <option value="23">WeHelp</option>
                            <option value="27">Khối KD độc lập</option>
                        </select> </div>
                    <div class="form-group">
                        <input type="text" name="description" placeholder="Ghi chú" id="description"
                            class="form-control" value=""> </div>

                </div>
            </form>
            <div class="clearfix"></div>
            <div class="lolify-left-menu" style="display: none;">
            </div>
        </div>
        <div class="dgContainer">
            <div style="display: none; width: 1556px;" class="stickyHeader">
                <table class="table table-bordered" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr class="even">
                            <th style="width: 49px;">ID</th>
                            <th style="width: 49px;">HĐ</th>
                            <th style="width:160px;">Bên khách</th>
                            <th style="width:70px;">Loại phiếu</th>
                            <th style="width: 85px;">Giá trị</th>
                            <th style="width: 47px;">Loại phiếu</th>
                            <th style="width: 52px;">Số hoá đơn</th>
                            <th style="width:160px;">Người tạo</th>
                            <th style="width:94px;">Tình trạng</th>
                            <th style="width:160px;">Người duyệt</th>
                            <th style="width: 599px;">Diễn giải</th>
                            <th style="width: 31px;"><i class="fa fa-cog"></i></th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div class="col-md-6 paginatorItem">
                    <div class="paginator"><span class="labelPages">1 - 100 / 57,208</span><span
                            class="disabled fa fa-step-backward"></span><span
                            class="disabled fa fa-backward"></span><a class="fa fa-forward"
                            href="https://erp.nhanh.vn/crm/contract/transaction?page=2"
                            title="Trang sau"></a> <a class="fa fa-step-forward"
                            href="https://erp.nhanh.vn/crm/contract/transaction?page=573"
                            title="Trang cuối"></a></div>
                </div>
                <div style="clear: both;"></div><br>
            </div>
            <table id="dgContractPayment" class="table table table-hover">
                <thead>
                    <tr class="even h">
                        <th>ID</th>
                        <th>HĐ</th>
                        <th style="width:160px;">Bên khách</th>
                        <th style="width:70px;">Loại phiếu</th>
                        <th>Giá trị</th>
                        <th>Loại phiếu</th>
                        <th>Số hoá đơn</th>
                        <th style="width:160px;">Người tạo</th>
                        <th style="width:94px;">Tình trạng</th>
                        <th style="width:160px;">Người duyệt</th>
                        <th>Diễn giải</th>
                        <th><i class="fa fa-cog"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76816">76816</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63135">63135</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/lead/view?id=404816">CÔNG TY TNHH
                                SCCV</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76816">6.000.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HCM - Nhóm KD9_ThưNTA" data-original-title="">
                                Huỳnh Ngọc Hải</div>
                        </td>
                        <td class="col-align-center col-status"><a class=" color-orange"
                                href="https://erp.nhanh.vn/crm/contract/confirmtransaction?id=76816"
                                data-toggle="tooltip" title=""
                                data-original-title="Bấm để duyệt"><b>Chưa duyệt</b></a></td>
                        <td></td>
                        <td>TCB 23/07/2020 FT20205A04010690\XNV 6.000.000 (B/O CTY TNHH SCCV)
                            HBSCCV- 0908481124- TTHD SO 63135</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/edittransaction?id=76816"><i
                                                class="fa fa-edit" style="margin-right:9px"></i>Sửa
                                            thanh toán</a></li>
                                    <li><a class="deleteTransaction" data-id="76816"><i
                                                class="fa fa-trash"
                                                style="margin-right:10px"></i>Xóa thanh toán</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76815">76815</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63257">63257</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=21779">CÔNG TY CỔ PHẦN
                                XUẤT KHẨU THƯƠNG MẠI HÀ NỘI</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76815">550.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-money" data-toggle="tooltip"
                                title="Tiền mặt"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HN - Phòng KD2_TùngNT">Nguyễn Tiến Đạt</div>
                        </td>
                        <td class="col-align-center col-status"><a class=" color-orange"
                                href="https://erp.nhanh.vn/crm/contract/confirmtransaction?id=76815"
                                data-toggle="tooltip" title="Bấm để duyệt"><b>Chưa duyệt</b></a>
                        </td>
                        <td></td>
                        <td></td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/edittransaction?id=76815"><i
                                                class="fa fa-edit" style="margin-right:9px"></i>Sửa
                                            thanh toán</a></li>
                                    <li><a class="deleteTransaction" data-id="76815"><i
                                                class="fa fa-trash"
                                                style="margin-right:10px"></i>Xóa thanh toán</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76814">76814</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63297">63297</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=19130">Nguyễn Đắc
                                Quyết</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76814">550.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HN - Phòng KD2_TùngNT">Nguyễn Tiến Đạt</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="24/07/2020 17:12:15" class="">Nguyễn Thị Hương
                            </div>
                        </td>
                        <td>24/07/2020 FT20206384231300\BNK 19031021519190 Vincentxmmap 550,000</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76813">76813</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=62946">62946</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/lead/view?id=406037">Hoàng Đức
                                Thông</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76813">6.600.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HCM - Sale Marketing">Cao Thị Thu Hằng</div>
                        </td>
                        <td class="col-align-center col-status"><a class=" color-orange"
                                href="https://erp.nhanh.vn/crm/contract/confirmtransaction?id=76813"
                                data-toggle="tooltip" title="Bấm để duyệt"><b>Chưa duyệt</b></a>
                        </td>
                        <td></td>
                        <td>TCB 24/07/2020 FT20206A01026680\XNV 6.600.000 (B/O HOANG DUC THONG -
                            0913063608) HOANG DUC THONG - ...</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/edittransaction?id=76813"><i
                                                class="fa fa-edit" style="margin-right:9px"></i>Sửa
                                            thanh toán</a></li>
                                    <li><a class="deleteTransaction" data-id="76813"><i
                                                class="fa fa-trash"
                                                style="margin-right:10px"></i>Xóa thanh toán</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76812">76812</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63230">63230</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=16072">BÀ TRẦN NGUYÊN
                                MINH HẠNH</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76812">12.000.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HN - Phòng KD3_HuyPV">Phạm Thị Thủy</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="24/07/2020 17:05:33" class="">Đỗ Thị Bích Thủy
                            </div>
                        </td>
                        <td>5091 - 58359 2020-07-24 12,000,000.00 811657.240720.152317.Mhl ck cho
                            thuypt Vietcombank</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76811">76811</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63105">63105</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=21866">Công Ty TNHH
                                MARTINO Việt Nam</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76811">1.000.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-money" data-toggle="tooltip"
                                title="Tiền mặt"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title="" data-title="Phòng KD10">Nguyễn Hoàng
                                Long</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="24/07/2020 16:46:28" class="">Phạm Văn Phú
                            </div>
                        </td>
                        <td>Thu lần 2: 1000k</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76810">76810</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63304">63304</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=17780">Vũ Duy
                                Hoàng</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76810">200.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title="" data-title="Phòng KD10">Vũ Duy Hoàng
                            </div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="24/07/2020 16:47:36" class="">Phạm Văn Phú
                            </div>
                        </td>
                        <td>101403133 22/07/2020 200k
                            nạp điểm vào tk tuichuomhuongduong</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76809">76809</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63285">63285</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/lead/view?id=408519">Nguyễn Thị Bích
                                Liễu</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76809">4.800.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HCM - Nhóm KD9_ThưNTA">Nguyễn Thị Anh Thư</div>
                        </td>
                        <td class="col-align-center col-status"><a class=" color-orange"
                                href="https://erp.nhanh.vn/crm/contract/confirmtransaction?id=76809"
                                data-toggle="tooltip" title="Bấm để duyệt"><b>Chưa duyệt</b></a>
                        </td>
                        <td></td>
                        <td>TCB 24/07/2020 FT20206664458801\BNK 4.800.000 BICH LIEU THANH TOAN PM
                        </td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/edittransaction?id=76809"><i
                                                class="fa fa-edit" style="margin-right:9px"></i>Sửa
                                            thanh toán</a></li>
                                    <li><a class="deleteTransaction" data-id="76809"><i
                                                class="fa fa-trash"
                                                style="margin-right:10px"></i>Xóa thanh toán</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76808">76808</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63087">63087</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=17863">Nguyễn Thị Tuệ
                                Khanh</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76808">3.300.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HCM - Nhóm KD9_ThưNTA">Nguyễn Thị Anh Thư</div>
                        </td>
                        <td class="col-align-center col-status"><a class=" color-orange"
                                href="https://erp.nhanh.vn/crm/contract/confirmtransaction?id=76808"
                                data-toggle="tooltip" title="Bấm để duyệt"><b>Chưa duyệt</b></a>
                        </td>
                        <td></td>
                        <td>TCB 24/07/2020 FT20206A06003772\XNV 7.500.000 "NGUYEN THI TUE KHANH.
                            TC:507895987. MBVCB.707326122.Tue khanh thanh toa n ...</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/edittransaction?id=76808"><i
                                                class="fa fa-edit" style="margin-right:9px"></i>Sửa
                                            thanh toán</a></li>
                                    <li><a class="deleteTransaction" data-id="76808"><i
                                                class="fa fa-trash"
                                                style="margin-right:10px"></i>Xóa thanh toán</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76807">76807</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63085">63085</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=17863">Nguyễn Thị Tuệ
                                Khanh</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76807">4.200.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HCM - Nhóm KD9_ThưNTA">Nguyễn Thị Anh Thư</div>
                        </td>
                        <td class="col-align-center col-status"><a class=" color-orange"
                                href="https://erp.nhanh.vn/crm/contract/confirmtransaction?id=76807"
                                data-toggle="tooltip" title="Bấm để duyệt"><b>Chưa duyệt</b></a>
                        </td>
                        <td></td>
                        <td>TCB 24/07/2020 FT20206A06003772\XNV 7.500.000 "NGUYEN THI TUE KHANH.
                            TC:507895987. MBVCB.707326122.Tue khanh thanh toa n ...</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/edittransaction?id=76807"><i
                                                class="fa fa-edit" style="margin-right:9px"></i>Sửa
                                            thanh toán</a></li>
                                    <li><a class="deleteTransaction" data-id="76807"><i
                                                class="fa fa-trash"
                                                style="margin-right:10px"></i>Xóa thanh toán</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76806">76806</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63149">63149</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=21547">CÔNG TY CỔ PHẦN
                                ĐẦU TƯ SẢN XUẤT VÀ THƯƠNG MẠI VINLIFE VIỆT NAM</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76806">2.750.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HN - Phòng KD2_TùngNT">Lê Thị Tuyết</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="24/07/2020 16:38:38" class="">Đỗ Thị Bích Thủy
                            </div>
                        </td>
                        <td>FT20199212652879\BNK 17/07/2020 2.750.000 Phan thi hong quyen ck cham
                            soc sho pee Techcombank</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76805">76805</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63159">63159</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=21909">Nguyễn Tấn
                                Lai</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76805">250.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Phòng dịch vụ SEO GG MAPS">Đào Thị Hồng Nhung</div>
                        </td>
                        <td class="col-align-center col-status"><a class=" color-orange"
                                href="https://erp.nhanh.vn/crm/contract/confirmtransaction?id=76805"
                                data-toggle="tooltip" title="Bấm để duyệt"><b>Chưa duyệt</b></a>
                        </td>
                        <td></td>
                        <td>FT20206985200027\BNK 24/07/2020 250.000 anh Lai thanh toan hd 63159</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/edittransaction?id=76805"><i
                                                class="fa fa-edit" style="margin-right:9px"></i>Sửa
                                            thanh toán</a></li>
                                    <li><a class="deleteTransaction" data-id="76805"><i
                                                class="fa fa-trash"
                                                style="margin-right:10px"></i>Xóa thanh toán</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76804">76804</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63254">63254</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/lead/view?id=408265">Nguyễn Vũ Duy</a>
                        </td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76804">1.650.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HCM - Nhóm KD4_ThịnhNQG">Bùi Gia Bảo</div>
                        </td>
                        <td class="col-align-center col-status"><a class=" color-orange"
                                href="https://erp.nhanh.vn/crm/contract/confirmtransaction?id=76804"
                                data-toggle="tooltip" title="Bấm để duyệt"><b>Chưa duyệt</b></a>
                        </td>
                        <td></td>
                        <td>TCB 24/07/2020 FT20206375950233\BNK 1.650.000 Com ga Hai Nam Nha Trang
                        </td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/edittransaction?id=76804"><i
                                                class="fa fa-edit" style="margin-right:9px"></i>Sửa
                                            thanh toán</a></li>
                                    <li><a class="deleteTransaction" data-id="76804"><i
                                                class="fa fa-trash"
                                                style="margin-right:10px"></i>Xóa thanh toán</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76803">76803</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63209">63209</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=10908">CÔNG TY TNHH
                                HITA VIỆT NAM</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76803">2.640.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-money" data-toggle="tooltip"
                                title="Tiền mặt"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title="" data-title="Phòng KD10">Thái Chí
                                Toàn</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="24/07/2020 16:23:21" class="">Phạm Văn Phú
                            </div>
                        </td>
                        <td>Hợp đồng chính.</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76802">76802</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63300">63300</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=16994">Phạm Xuân
                                Thái</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76802">100.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title="" data-title="Nhanh HN - KD8_CôngND">
                                Lê Quang Hùng</div>
                        </td>
                        <td class="col-align-center col-status"><a class=" color-orange"
                                href="https://erp.nhanh.vn/crm/contract/confirmtransaction?id=76802"
                                data-toggle="tooltip" title="Bấm để duyệt"><b>Chưa duyệt</b></a>
                        </td>
                        <td></td>
                        <td>4 24/07/2020 FT20206856685495\BNK 19022308673019 Legrandphap chuyen ten
                            mien 770,000 2,388,632,535 ...</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/edittransaction?id=76802"><i
                                                class="fa fa-edit" style="margin-right:9px"></i>Sửa
                                            thanh toán</a></li>
                                    <li><a class="deleteTransaction" data-id="76802"><i
                                                class="fa fa-trash"
                                                style="margin-right:10px"></i>Xóa thanh toán</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76801">76801</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63251">63251</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=20519">Nguyễn Thế
                                Trình</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76801">900.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HN - Phòng KD2_TùngNT">Nguyễn Đức Kiên</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="24/07/2020 16:32:28" class="">Đỗ Thị Bích Thủy
                            </div>
                        </td>
                        <td>32 20/07/2020 FT20202369209392\BNK 19026907740013 SBAY CTHD 7226 900,000
                            1,985,297,535 In</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76800">76800</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63303">63303</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=21934">Nguyễn Như
                                Quỳnh</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76800">550.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Phòng dịch vụ SEO GG MAPS">Nguyễn Thị Như Quỳnh</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="24/07/2020 16:31:12" class="">Đỗ Thị Bích Thủy
                            </div>
                        </td>
                        <td>22/07/2020 FT20204873001120\BNK Ha Thuy Ngan chuyen tien 550,000
                            2,217,242,535 In</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76799">76799</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63296">63296</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=16994">Phạm Xuân
                                Thái</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76799">670.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title="" data-title="Nhanh HN - KD8_CôngND">
                                Lê Quang Hùng</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="24/07/2020 16:14:50" class="">Đỗ Thị Bích Thủy
                            </div>
                        </td>
                        <td>4 24/07/2020 FT20206856685495\BNK 19022308673019 Legrandphap chuyen ten
                            mien 770,000 2,388,632,535 In</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76798">76798</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63288">63288</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=11595">Hoàng Đình
                                Trung</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76798">4.800.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HN - Phòng KD3_HuyPV">Phạm Thị Thủy</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="24/07/2020 17:05:40" class="">Đỗ Thị Bích Thủy
                            </div>
                        </td>
                        <td>5091 - 57000 2020-07-24 4,800,000.00 043075.240720.100829.A Trung thanh
                            toan cho Thuypt FT20206710275874 Vietcombank</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76797">76797</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=62873">62873</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=21805">Nguyễn Thanh
                                Long</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76797">1.100.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HCM - Nhóm KD4_ThịnhNQG">Bùi Gia Bảo</div>
                        </td>
                        <td class="col-align-center col-status"><a class=" color-orange"
                                href="https://erp.nhanh.vn/crm/contract/confirmtransaction?id=76797"
                                data-toggle="tooltip" title="Bấm để duyệt"><b>Chưa duyệt</b></a>
                        </td>
                        <td></td>
                        <td>TCB 24/07/2020 FT20206590001251\BNK 1.100.000 seo map</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/edittransaction?id=76797"><i
                                                class="fa fa-edit" style="margin-right:9px"></i>Sửa
                                            thanh toán</a></li>
                                    <li><a class="deleteTransaction" data-id="76797"><i
                                                class="fa fa-trash"
                                                style="margin-right:10px"></i>Xóa thanh toán</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76796">76796</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63190">63190</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=9780">Công ty TNHH
                                Thương Mại Nam Đồng</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76796">1.800.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HN - Phòng KD2_TùngNT">Nguyễn Danh Công</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="24/07/2020 16:32:54" class="">Đỗ Thị Bích Thủy
                            </div>
                        </td>
                        <td>24/07/2020 FT20206552256827\BNK Tu Anh ck Vpage 1,800,000 2,401,722,535
                            In</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76788">76788</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=62577">62577</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=21730">Trần Xuân
                                Hiếu</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76788">1.500.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HCM - SEO GG MAPS">Hồ Thị Thanh Mai</div>
                        </td>
                        <td class="col-align-center col-status"><a class=" color-orange"
                                href="https://erp.nhanh.vn/crm/contract/confirmtransaction?id=76788"
                                data-toggle="tooltip" title="Bấm để duyệt"><b>Chưa duyệt</b></a>
                        </td>
                        <td></td>
                        <td>TCB 23/07/2020 FT20205564988768\BNK 1.500.000 Tranxuanhieu TTHDMAPS</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/edittransaction?id=76788"><i
                                                class="fa fa-edit" style="margin-right:9px"></i>Sửa
                                            thanh toán</a></li>
                                    <li><a class="deleteTransaction" data-id="76788"><i
                                                class="fa fa-trash"
                                                style="margin-right:10px"></i>Xóa thanh toán</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76787">76787</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63292">63292</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=14776">Nguyễn Duy
                                Hưng</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76787">1.650.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title="" data-title="Phòng KD10">Nguyễn Duy
                                Hưng</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="24/07/2020 15:09:54" class="">Phạm Văn Phú
                            </div>
                        </td>
                        <td>Nạp tiền bảo kim.
                            500k - ID:101377422 - 13/07/2020 - phatthienthanh.hong@gmail.com,
                            500k ...</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76786">76786</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63063">63063</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=18072">Hoàng Văn
                                Huynh</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76786">1.950.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HCM - Nhóm KD9_ThưNTA">Nguyễn Thị Anh Thư</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="24/07/2020 14:56:31" class="">Trần Kim Ngân
                            </div>
                        </td>
                        <td>TCB 23/07/2020 FT20205757431604\BNK 3.500.000 Green Kite - thanh toan
                            web
                            --nợ hđ</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76785">76785</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63064">63064</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=18072">Hoàng Văn
                                Huynh</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76785">550.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HCM - Nhóm KD9_ThưNTA">Nguyễn Thị Anh Thư</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="24/07/2020 14:58:12" class="">Trần Kim Ngân
                            </div>
                        </td>
                        <td>TCB 23/07/2020 FT20205757431604\BNK 3.500.000 Green Kite - thanh toan
                            web
                            --nợ hđ</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76784">76784</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63291">63291</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=18072">Hoàng Văn
                                Huynh</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76784">1.000.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HCM - Nhóm KD9_ThưNTA">Nguyễn Thị Anh Thư</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="24/07/2020 14:58:22" class="">Trần Kim Ngân
                            </div>
                        </td>
                        <td>TCB 23/07/2020 FT20205757431604\BNK 3.500.000 Green Kite - thanh toan
                            web
                            ---nợ hđ</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76783">76783</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63286">63286</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=19608">Phùng Thị
                                Nhung</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76783">300.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Phòng Dịch Vụ Khách Hàng">Nguyễn Bích Diệp</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="24/07/2020 15:08:58" class="">Đỗ Thị Bích Thủy
                            </div>
                        </td>
                        <td>VPnhanh
                            FT20206163052300 24/07/2020 300,000 NHAN TU 45110000574636 TRACE 292190
                            ND nhung ck ...</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76782">76782</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63294">63294</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=17780">Vũ Duy
                                Hoàng</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76782">200.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title="" data-title="Phòng KD10">Vũ Duy Hoàng
                            </div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="24/07/2020 15:09:41" class="">Phạm Văn Phú
                            </div>
                        </td>
                        <td>101409008 24/07/2020: 200k
                            nạp điểm vào tk xetaitragophaidangmiennam</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76781">76781</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63150">63150</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=21931">CÔNG TY TNHH
                                CÔNG NGHỆ VÀ GIẢI PHÁP AIO VIỆT NAM</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76781">4.800.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HN - Phòng KD2_TùngNT">Đỗ Thị Thu Hà</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="24/07/2020 14:27:04" class="">Đỗ Thị Bích Thủy
                            </div>
                        </td>
                        <td>TCB Nhanh
                            23/07/2020 FT20205086782710\BNK 19035694631011 63150 4,800,000
                            2,346,932,535 In</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76780">76780</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63205">63205</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/lead/view?id=16917">Công ty TNHH
                                Kombi Việt Nam</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76780">5.500.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title="" data-title="Ecomcare">Phạm Ngọc Tiến
                            </div>
                        </td>
                        <td class="col-align-center col-status"><a class=" color-orange"
                                href="https://erp.nhanh.vn/crm/contract/confirmtransaction?id=76780"
                                data-toggle="tooltip" title="Bấm để duyệt"><b>Chưa duyệt</b></a>
                        </td>
                        <td></td>
                        <td>4 23/07/2020 FT20205851241345\BNK 11721356113013 KOMBI-0904905903-THANH
                            TOAN CHO HOP DONG SO 63205 5,500,000 2,340,932,535 In</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/edittransaction?id=76780"><i
                                                class="fa fa-edit" style="margin-right:9px"></i>Sửa
                                            thanh toán</a></li>
                                    <li><a class="deleteTransaction" data-id="76780"><i
                                                class="fa fa-trash"
                                                style="margin-right:10px"></i>Xóa thanh toán</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76779">76779</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63154">63154</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=21930">Nguyễn Thị
                                Tuyết</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76779">3.600.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HN - Phòng KD2_TùngNT">Đỗ Thị Thu Hà</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="24/07/2020 14:24:53" class="">Đỗ Thị Bích Thủy
                            </div>
                        </td>
                        <td>TCB Nhanh
                            23/07/2020 FT20205902466979\BNK 12221823494019 Tuyet BN ck tien mua phan
                            mem ban ...</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76778">76778</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63269">63269</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=21932">Trần Trọng
                                Hiếu</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76778">550.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HN - ThanhTV_Phát triển đối tác">Dương Thị Hoa
                            </div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="24/07/2020 14:29:28" class="">Đỗ Thị Bích Thủy
                            </div>
                        </td>
                        <td>FT20206496537098 24/07/2020 550,000 NHAN TU 107005263500 TRACE 285765 N
                            D a hieu ...</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76777">76777</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63179">63179</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=7035">CÔNG TY TNHH SẢN
                                XUẤT - THƯƠNG MẠI HỒNG GIA HÂN</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76777">7.920.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-money" data-toggle="tooltip"
                                title="Tiền mặt"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title="" data-title="Phòng KD 01">Phan Vũ Như
                                Quỳnh</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="24/07/2020 14:14:07" class="">Lưu Thị Ngọc Bích
                            </div>
                        </td>
                        <td>Thu đủ 7tr920, hd chính</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76776">76776</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63280">63280</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=17112">Lê Thanh
                                Hoa</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76776">3.000.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HN - Phòng KD3_HuyPV">Nguyễn Trung Quân</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="24/07/2020 14:09:52" class="">Đỗ Thị Bích Thủy
                            </div>
                        </td>
                        <td>2020-07-24 5091 - 20785 3,000,000.00
                            101711.240720.113254.thanhthanhhoa92 FT20206185981347</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76775">76775</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63176">63176</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=2892">CÔNG TY TNHH
                                CÔNG NGHỆ VÀ MÔI TRƯỜNG TƯỜNG PHÁT</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76775">1.000.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title="" data-title="Phòng KD 01">Phan Vũ Như
                                Quỳnh</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="24/07/2020 14:14:52" class="">Lưu Thị Ngọc Bích
                            </div>
                        </td>
                        <td>Nhận BIDV
                            21/07/2020 1,000,000.00 ...</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76773">76773</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63279">63279</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=11242">CÔNG TY TNHH
                                POLIDO VIỆT NAM</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76773">3.000.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HCM - Phòng KD8_LâmNV">Nguyễn Viết Lâm</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="24/07/2020 13:59:33" class="">Trần Kim Ngân
                            </div>
                        </td>
                        <td>VCB 24/07/2020 5078 - 54731 3,000,000.00 MBVCB.707221095.POLIDO thanh
                            toan HD API web va API ...</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76772">76772</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=62917">62917</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=21825">CÔNG TY TNHH
                                NC</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76772">2.950.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title="" data-title="Ecomcare">Phạm Ngọc Tiến
                            </div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="24/07/2020 14:00:29" class="">Đỗ Thị Bích Thủy
                            </div>
                        </td>
                        <td>2 24/07/2020 FT20206A01008386\XNV (B/O NC COMPANY LIMITED) CONG TY TNHH
                            NC THANH TOAN ...</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76771">76771</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63202">63202</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=21929">CÔNG TY CỔ PHẦN
                                NHẬT NĂNG</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76771">770.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HCM - Nhóm KD4_ThịnhNQG">Nguyễn Quốc Gia Thịnh
                            </div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="24/07/2020 13:42:28" class="">Trần Kim Ngân
                            </div>
                        </td>
                        <td>TK 19035876814012
                            So tien GD:+21,170,000
                            So du:584,032,253
                            (B/O CT CP NHAT NANG) TC:505831092.NHAT ...</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76769">76769</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63200">63200</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=21929">CÔNG TY CỔ PHẦN
                                NHẬT NĂNG</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76769">20.400.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HCM - Nhóm KD4_ThịnhNQG">Nguyễn Quốc Gia Thịnh
                            </div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="24/07/2020 13:42:31" class="">Trần Kim Ngân
                            </div>
                        </td>
                        <td>TK 19035876814012
                            So tien GD:+21,170,000
                            So du:584,032,253
                            (B/O CT CP NHAT NANG) TC:505831092.NHAT ...</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76767">76767</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63255">63255</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=21933">Hoàng Anh
                                Nhân</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76767">550.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HN - KD10_ThanhPT">Nguyễn Thị Lan</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="24/07/2020 15:39:23" class="">Đỗ Thị Bích Thủy
                            </div>
                        </td>
                        <td>23/07/2020 FT20205907689001\BNK 19027784826666 Xac minh maps Showroom
                            Honda My Din h 550,000 2,369,982,535 In</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76766">76766</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=62364">62364</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=9308">Phạm Văn
                                Vương</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76766">6.000.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HN - Phòng KD4_TrườngVV">Vũ Văn Trường</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="24/07/2020 15:38:37" class="">Đỗ Thị Bích Thủy
                            </div>
                        </td>
                        <td>FT20203546000855\BNK 21/07/2020 6.000.000 Vuong dong anh mua nhanh vn 2
                            nam Techcombank</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76765">76765</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63275">63275</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=21926">Trương Mạnh
                                Tùng</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76765">6.000.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HCM - Phòng KD8_LâmNV">Hồ Tấn Hải</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="24/07/2020 12:08:14" class="">Trần Kim Ngân
                            </div>
                        </td>
                        <td>TCB 24/07/2020 FT20206375133509\BNK 6.000.000 MBVCB.707085404.043239.VU
                            QUANG HUY 0906368958 dang ky khoa MasterShop ee.CT tu ...</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76761">76761</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63268">63268</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=21925">Hoàng Văn
                                Hảo</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76761">550.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HCM - Phòng KD8_LâmNV">Nguyễn Phương Mai</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="24/07/2020 11:28:10" class="">Trần Kim Ngân
                            </div>
                        </td>
                        <td>TCB 24/07/2020 FT20206550083903\BNK 550.000 HOANGVANHAO 0866620778
                            HD63268
                            --nợ hđ</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76760">76760</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63270">63270</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=21926">Trương Mạnh
                                Tùng</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76760">6.000.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HCM - Nhóm KD9_ThưNTA">Nguyễn Thị Kiều Mỹ</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="24/07/2020 11:40:09" class="">Trần Kim Ngân
                            </div>
                        </td>
                        <td>TCB 24/07/2020
                            FT20206693071825\BNK 6.000.000
                            TRAN THI THU TAM 0932733024 DANG KI KHOA HOC MASTERSHOPEE-240720-11:00
                            ...</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76759">76759</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63252">63252</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=21927">Nguyễn Văn
                                Tình</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76759">550.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HN - KD11_NganLTT">Nguyễn Hoàng Long</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="24/07/2020 12:36:45" class="">Đỗ Thị Bích Thủy
                            </div>
                        </td>
                        <td>FT20205034578324\BNK 23/07/2020 550.000 MACADA COFFE THANH TOAN CHI PHI
                            MAP ...</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76758">76758</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63241">63241</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=20952">Lê Mạnh
                                Khôi</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76758">3.300.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Phòng dịch vụ SEO GG MAPS">Phạm Quốc Tuấn</div>
                        </td>
                        <td class="col-align-center col-status"><a class=" color-orange"
                                href="https://erp.nhanh.vn/crm/contract/confirmtransaction?id=76758"
                                data-toggle="tooltip" title="Bấm để duyệt"><b>Chưa duyệt</b></a>
                        </td>
                        <td></td>
                        <td>FT20205317146747 23/07/2020 3,300,000 NHAN TU 19028187331016 TRACE
                            709657 ND Bean Flowers ck seo ...</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/edittransaction?id=76758"><i
                                                class="fa fa-edit" style="margin-right:9px"></i>Sửa
                                            thanh toán</a></li>
                                    <li><a class="deleteTransaction" data-id="76758"><i
                                                class="fa fa-trash"
                                                style="margin-right:10px"></i>Xóa thanh toán</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76757">76757</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=62860">62860</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=21924">CÔNG TY TNHH
                                THƯƠNG MẠI XUẤT NHẬP KHẨU CƯỜNG PHÚC</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76757">3.000.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title="" data-title="Phòng KD 8">Đỗ Văn Thảo
                            </div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="24/07/2020 10:44:42" class="">Lê Quỳnh Thủy
                                Tiên</div>
                        </td>
                        <td>Lần 1
                            Nhận BIDV
                            15/07/2020 ...</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76756">76756</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63104">63104</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=20491">PHẠM THỊ
                                UYÊN</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76756">1.200.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HCM - Phòng KD1_NgânHTM">Đỗ Thị Ngọc Hân</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="24/07/2020 10:36:46" class="">Trần Kim Ngân
                            </div>
                        </td>
                        <td>TCB 24/07/2020 FT20206154494085\BNK 1.200.000 Di dong xanh
                            ---nợ hđ</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76755">76755</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63267">63267</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=5713">Trịnh Danh
                                Hoàng</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76755">600.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HCM - Phòng KD1_NgânHTM">Hứa Thị Mai Ngân</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="24/07/2020 10:35:08" class="">Trần Kim Ngân
                            </div>
                        </td>
                        <td>VCB 23/07/2020 5091 - 43051 600,000.00 666309.230720.135931.Hoang ck
                            FT20205509006538
                            --nợ hđ</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76754">76754</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=62788">62788</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=20939">CÔNG TY TNHH
                                CÔNG NGHỆ TOÀN CẦU WOOK VIỆT NAM</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76754">4.400.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HCM - Sale Marketing">Lê Thị Nam</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="24/07/2020 10:33:53" class="">Trần Kim Ngân
                            </div>
                        </td>
                        <td>TCB 23/07/2020 0001 - 01585 4,400,000.00
                            IBPS/SE:79202002.DD:230720.SH:10005157.BO:CTY TNHH CONG NGHE TOAN CAU
                            WOOK VIET ...</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76753">76753</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63070">63070</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=21571">CÔNG TY CỔ PHẦN
                                THƯƠNG MẠI VÀ KINH DOANH XUẤT NHẬP KHẨU TOGI</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76753">360.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HN - KD10_ThanhPT">Phạm Thị Thanh</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="24/07/2020 12:41:00" class="">Đỗ Thị Bích Thủy
                            </div>
                        </td>
                        <td>CK NHANH.VN
                            10 FT20202106080456\I2B 20/07/2020 360,000 A an ck 1,625,681,679
                            20/07/2020 10:35</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76752">76752</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63241">63241</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=20952">Lê Mạnh
                                Khôi</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76752">3.300.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Phòng dịch vụ SEO GG MAPS">Phạm Quốc Tuấn</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="24/07/2020 16:33:26" class="">Đỗ Thị Bích Thủy
                            </div>
                        </td>
                        <td>FT20205317146747 23/07/2020 3,300,000 NHAN TU 19028187331016 TRACE
                            709657 ND Bean Flowers ck seo ...</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76751">76751</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63234">63234</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=17227">Nguyễn Thị
                                Nhã</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76751">4.000.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Phòng dịch vụ SEO GG MAPS">Chu Văn Thảo</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="24/07/2020 09:41:04" class="">Nguyễn Thị Hương
                            </div>
                        </td>
                        <td>24/07/2020 FT20206285409830\BNK 19030604774011 Xiaohaha thanh toan 2 kho
                            3 nam 4,000,000</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76750">76750</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63256">63256</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=17117">Dương Thị Thu
                                Minh</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76750">1.000.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Phòng dịch vụ SEO GG MAPS">Chu Văn Thảo</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="24/07/2020 09:41:36" class="">Nguyễn Thị Hương
                            </div>
                        </td>
                        <td>FT20205852600013\BNK 23/07/2020 1.000.000 Ladoux ck web Techcombank</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76749">76749</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63188">63188</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=10476">CÔNG TY CỔ PHẦN
                                DANCO</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76749">1.800.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HN - Phòng KD3_HuyPV">Phạm Viết Huy</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="24/07/2020 15:08:28" class="">Đỗ Thị Bích Thủy
                            </div>
                        </td>
                        <td>FT20205676392784\BNK 23/07/2020 1.800.000 Danco thanh toan tien dong bo
                            shope e lazada</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76748">76748</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63219">63219</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=10346">CÔNG TY TNHH
                                SẢN XUẤT- THƯƠNG MẠI THIẾT BỊ VẬT LÝ KỸ THUẬT</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76748">5.100.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-money" data-toggle="tooltip"
                                title="Tiền mặt"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HN - Phòng KD3_HuyPV">Phạm Viết Huy</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="24/07/2020 14:06:04" class="">Đỗ Thị Bích Thủy
                            </div>
                        </td>
                        <td>pt2007009</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76747">76747</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63205">63205</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/lead/view?id=16917">Công ty TNHH
                                Kombi Việt Nam</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76747">5.500.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title="" data-title="Ecomcare">Phạm Ngọc Tiến
                            </div>
                        </td>
                        <td class="col-align-center col-status"><a class=" color-orange"
                                href="https://erp.nhanh.vn/crm/contract/confirmtransaction?id=76747"
                                data-toggle="tooltip" title="Bấm để duyệt"><b>Chưa duyệt</b></a>
                        </td>
                        <td></td>
                        <td>4 23/07/2020 FT20205851241345\BNK 11721356113013 KOMBI-0904905903-THANH
                            TOAN CHO HOP DONG SO ...</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/contract/edittransaction?id=76747"><i
                                                class="fa fa-edit" style="margin-right:9px"></i>Sửa
                                            thanh toán</a></li>
                                    <li><a class="deleteTransaction" data-id="76747"><i
                                                class="fa fa-trash"
                                                style="margin-right:10px"></i>Xóa thanh toán</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76706">76706</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63088">63088</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=21935">Đỗ Xuân
                                Quang</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76706">32.400.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HN - Phòng KD2_TùngNT">Nguyễn Tiến Đạt</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="24/07/2020 17:05:38" class="">Nguyễn Thị Hương
                            </div>
                        </td>
                        <td>23/07/2020 FT20205108421017\BNK 19030621486011 HD63088 32,400,000</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76703">76703</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63212">63212</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=21928">DƯƠNG THỊ
                                HOÀN</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76703">4.200.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HN - KD10_ThanhPT">Phạm Thị Thanh</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="24/07/2020 12:41:34" class="">Đỗ Thị Bích Thủy
                            </div>
                        </td>
                        <td>CK NHANH.VN
                            8 23/07/2020 FT20205748570090\BNK Mimac ck tien mua phan mem nhanh
                            4,200,000 2,221,442,535 In</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76699">76699</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63086">63086</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=21923">Nguyễn Văn
                                Tuân</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76699">550.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Phòng dịch vụ SEO GG MAPS">Chu Văn Thảo</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="24/07/2020 09:39:33" class="">Nguyễn Thị Hương
                            </div>
                        </td>
                        <td>FT20200527461283\BNK 18/07/2020 550.000 Tuan Techcombank</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76685">76685</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63199">63199</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=20968">Nguyễn Tuấn
                                Anh</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76685">300.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title="" data-title="Nhanh HN - KD8_CôngND">
                                Nguyễn Đức Công</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="24/07/2020 14:08:03" class="">Đỗ Thị Bích Thủy
                            </div>
                        </td>
                        <td>7 FT20111002504320 20/04/2020 300,000 NHAN TU 0020196693999 TRACE 759734
                            ND tuan Anh Phong ...</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76389">76389</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=62908">62908</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=20425">NGUYỄN ĐĂNG
                                HÙNG</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76389">600.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HN - Phòng KD2_TùngNT">Nguyễn Đức Kiên</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="24/07/2020 16:31:59" class="">Đỗ Thị Bích Thủy
                            </div>
                        </td>
                        <td>8 15/07/2020 FT20197308674539\BNK THE DUST CTDH 7226 600,000
                            1,857,997,535 In</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76746">76746</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63121">63121</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=13728">CÔNG TY TNHH
                                THƯƠNG MẠI VÀ DỊCH VỤ ĐẶNG TRẦN GIA</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76746">3.900.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HN - Phòng KD2_TùngNT">Dương Thị Thu</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="23/07/2020 17:18:50" class="">Đỗ Thị Bích Thủy
                            </div>
                        </td>
                        <td>23/07/2020 FT20205241416354\BNK ZYM TT TIEN MUA PM NHANH CHO KHO HC
                            M-230720-16:54:31 ...</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76745">76745</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63144">63144</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=17248">CÔNG TY TNHH
                                MARIN VIỆT NAM</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76745">9.600.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HN - Phòng KD2_TùngNT">Ngô Hữu Tình</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="23/07/2020 16:47:12" class="">Đỗ Thị Bích Thủy
                            </div>
                        </td>
                        <td>23/07/2020 FT20205035227050\BNK 19135708790013 Cong ty TNHH Marin Viet
                            Nam gia han Nhanh.vn 9,600,000 2,357,732,535 In</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76744">76744</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63247">63247</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=21922">Trần Thị Xuân
                                Ngọc</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76744">550.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HN - ThanhTV_Phát triển đối tác">Dương Thị Hoa
                            </div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="23/07/2020 16:47:31" class="">Đỗ Thị Bích Thủy
                            </div>
                        </td>
                        <td>FT20205045577020\BNK 23/07/2020 550.000 MBVCB.467416738.000287.ck xac
                            minh map anna pham bungalow .CT tu 01510 ...</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76743">76743</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63238">63238</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=16171">Phạm hiếu
                                mĩ</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76743">600.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HN - Phòng KD4_TrườngVV">Nguyễn Đạt Trung</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="23/07/2020 16:53:14" class="">Nguyễn Thị Hương
                            </div>
                        </td>
                        <td>FT20205975138070\BNK 23/07/2020 600.000 Pham Hieu My ck gia han vpage
                            ...</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76742">76742</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63244">63244</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=21921">Lê Tiến
                                Tùng</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76742">867.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title="" data-title="Vchat">Vũ Thị Quỳnh
                                Trang</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="23/07/2020 16:37:18" class="">Đỗ Thị Bích Thủy
                            </div>
                        </td>
                        <td>23/07/2020 FT20205757068446\BNK 19025303341017 Tung 867,000 20,733,745
                        </td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76733">76733</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63208">63208</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=20991">Đổng Xuân
                                Tuấn</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76733">747.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title="" data-title="Vchat">Nguyễn Thanh Vân
                            </div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="23/07/2020 16:53:04" class="">Đỗ Thị Bích Thủy
                            </div>
                        </td>
                        <td>2020-07-23 5078 - 95668 47,000.00
                            MBVCB.705984156.Trungtamdienlanhsaoviet.vn.CT tu 0301000416182 DONG XUAN
                            ...</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76732">76732</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63170">63170</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=21920">Nguyễn Quang
                                Thành</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76732">747.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title="" data-title="Vchat">Nguyễn Thị Phương
                                Loan</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="23/07/2020 16:35:11" class="">Đỗ Thị Bích Thủy
                            </div>
                        </td>
                        <td>2020-07-22 5091 - 30850 747,000.00 295335.220720.095903.NGUYEN QUANG
                            THANH Chuyen tien ...</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76731">76731</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63131">63131</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=19521">Công ty TNHH
                                MTV Bột Mì Thiện Phát</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76731">6.600.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-money" data-toggle="tooltip"
                                title="Tiền mặt"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HCM - Phòng KD1_NgânHTM">Phan Ngọc Ý Linh</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="23/07/2020 16:26:43" class="">Trần Kim Ngân
                            </div>
                        </td>
                        <td>Nhận đủ 6tr6
                            --- hđ gốc</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76730">76730</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63246">63246</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=288">Phạm Thanh
                                Sơn</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76730">1.800.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HCM - Phòng KD8_LâmNV">Nguyễn Viết Lâm</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="23/07/2020 16:23:49" class="">Trần Kim Ngân
                            </div>
                        </td>
                        <td>&gt; TCB 22/07/2020 FT20204798921352\BNK 3.800.000
                            MBVCB.705309725.075393.Remmy.CT tu 0021000262601 PHAM THANH SON ...</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76729">76729</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63245">63245</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=288">Phạm Thanh
                                Sơn</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76729">2.000.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HCM - Phòng KD8_LâmNV">Nguyễn Viết Lâm</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="23/07/2020 16:16:37" class="">Trần Kim Ngân
                            </div>
                        </td>
                        <td>&gt; TCB 22/07/2020 FT20204798921352\BNK 3.800.000
                            MBVCB.705309725.075393.Remmy.CT tu 0021000262601 PHAM THANH SON ...</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76728">76728</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63175">63175</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=21918">CÔNG TY TNHH TM
                                DV KỸ THUẬT VIỄN THÔNG BẢO AN</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76728">2.688.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title="" data-title="Vchat">Nguyễn Thanh Vân
                            </div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="23/07/2020 16:21:36" class="">Đỗ Thị Bích Thủy
                            </div>
                        </td>
                        <td>22-07-20 2943
                            HBCTY TNHH TM DV KT VIEN THONG BAO AN ...</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76727">76727</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63164">63164</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=4802">Công ty TNHH TM
                                DV Máy Móc Thiết Bị Sài Gòn Gartex</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76727">1.747.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title="" data-title="Vchat">Nguyễn Thanh Vân
                            </div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="23/07/2020 16:22:17" class="">Đỗ Thị Bích Thủy
                            </div>
                        </td>
                        <td>2020-07-21 5078 - 21466 1,747,000.00 MBVCB467227408.oanh - sggartex.com
                            ck cho ...</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76726">76726</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=62948">62948</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=21917">HỢP TÁC XÃ DƯỢC
                                LIỆU NHƯ Ý</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76726">19.200.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HCM - Nhóm KD3_NgânTK">Trần Thị Ngọc Quyền</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="23/07/2020 15:11:23" class="">Trần Kim Ngân
                            </div>
                        </td>
                        <td>TCB 23/07/2020 19.200.000 MBVCB.706308456.046549.Htx duoc lie u nhu y
                            chuyen tien hop ...</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76725">76725</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63213">63213</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=21525">PHẠM PHÚ
                                CƯỜNG</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76725">600.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HCM - Sale Marketing">Nguyễn Thị Mỹ Phụng</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="23/07/2020 14:57:37" class="">Trần Kim Ngân
                            </div>
                        </td>
                        <td>666836 600,000.00 76,851,346.00 CA Branch Trf-TTHDOL 23/07/20 09:40:54
                            Tfr Ac: ...</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76724">76724</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63123">63123</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=21855">CÔNG TY TNHH
                                HEADFULLY</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76724">6.600.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HCM - Nhóm KD3_NgânTK">Trần Kim Ngân</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="23/07/2020 14:43:02" class="">Trần Kim Ngân
                            </div>
                        </td>
                        <td>TCB 23/07/2020 FT20205A04004491\XNV 6.600.000 (B/O CONG TY TNHH
                            HEADFULLY) HBTHANH TOAN THEO HD SO ...</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76723">76723</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63228">63228</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=21915">Nguyễn Trọng
                                Thắng</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76723">4.400.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title="" data-title="Sale Marketing">Phạm
                                Quang Minh</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="23/07/2020 14:35:49" class="">Đỗ Thị Bích Thủy
                            </div>
                        </td>
                        <td>2020-07-23 5050 - 73917 4,400,000.00 IBVCB.2307200618639001.DANG THI
                            LANH.Nguye n Trong Thang -0865691419 thanh ...</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76722">76722</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63148">63148</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=21914">Lều Văn
                                Tiến</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76722">700.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-money" data-toggle="tooltip"
                                title="Tiền mặt"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HN - Phòng KD4_TrườngVV">Nguyễn Khánh Vinh</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="23/07/2020 14:32:17" class="">Đỗ Thị Bích Thủy
                            </div>
                        </td>
                        <td>nbpt2007033</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76721">76721</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63236">63236</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=21911">Công ty TNHH Kỹ
                                thuật Dầu khi Golden Sea</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76721">300.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Phòng dịch vụ SEO GG MAPS">Nguyễn Thị Như Quỳnh</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="23/07/2020 14:17:58" class="">Đỗ Thị Bích Thủy
                            </div>
                        </td>
                        <td>23/07/2020 FT20205092268606\BNK MBVCB.706216433.089932.NGUYEN NGOC CHIEN
                            chuyen tien.CT tu 00810012954 66 NGUYEN NGOC ...</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76720">76720</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63220">63220</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=16418">Nguyễn Thị Mai
                                Hương</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76720">6.000.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HN - Phòng KD5_AnhNX">Nguyễn Xuân Anh</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="23/07/2020 15:16:48" class="">Đỗ Thị Bích Thủy
                            </div>
                        </td>
                        <td>6 23/07/2020 FT20205837995809\BNK MBVCB.706145908.072430.NGUYEN THI M AI
                            HUONG gia han phan mem dia ...</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76719">76719</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63218">63218</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=21913">Nguyễn Hải
                                An</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76719">3.600.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HCM - Nhóm KD5_LiêmNT">Nguyễn Thị Hiếu</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="23/07/2020 14:31:04" class="">Trần Kim Ngân
                            </div>
                        </td>
                        <td>Nhận TCB ngày 23/7/2020
                            MoMoT01674816826T6402937182T970407T Nguyen Hai An 037 481 6826 ...</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76718">76718</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63182">63182</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=21791">CÔNG TY CỔ PHẦN
                                ĐẦU TƯ XÂY DỰNG ĐỊA ỐC SKY ECO</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76718">6.600.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HCM - Sale Marketing">Trịnh Xuân Tài</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="23/07/2020 14:27:00" class="">Trần Kim Ngân
                            </div>
                        </td>
                        <td>Vcb: SD TK 0421000541530 +6,600,000VND luc 23-07-2020 10:38:33. SD
                            138,185,898VND. ...</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76715">76715</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63198">63198</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=16290">Nguyễn Đào Phú
                                Minh</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76715">6.000.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title="" data-title="Nhanh HN - KD7_ĐiệpNH">
                                Nguyễn Hữu Điệp</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="23/07/2020 14:18:32" class="">Đỗ Thị Bích Thủy
                            </div>
                        </td>
                        <td>13 22/07/2020 FT20204109307159\BNK 19035127208017 Lamiann gia han phan
                            mem diepnh 6,000,000 2,214,792,535 In</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76714">76714</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63067">63067</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=21916">Đinh Công
                                Vinh</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76714">3.000.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HN - Phòng KD3_HuyPV">Nguyễn Trung Quân</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="23/07/2020 15:02:58" class="">Đỗ Thị Bích Thủy
                            </div>
                        </td>
                        <td>23/07/2020 FT20205494338181\BNK Thanh toan hop dong 63067 3,000,000
                            2,293,072,535 In</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76713">76713</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63189">63189</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=21457">ĐINH TRỌNG
                                QUỲNH</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76713">2.376.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HCM - SEO GG MAPS">Lê Tạ Tú Uyên</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="23/07/2020 11:54:16" class="">Trần Kim Ngân
                            </div>
                        </td>
                        <td>TCB 22/07/2020
                            TK 19035876814012
                            So tien GD:+2,376,000
                            DINH TRONG QUYNH 0869112049 ...</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76712">76712</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63203">63203</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=21908">Giang Thị
                                Tuyết</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76712">100.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HN - Phòng KD4_TrườngVV">Nguyễn Khánh Vinh</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="23/07/2020 14:09:50" class="">Đỗ Thị Bích Thủy
                            </div>
                        </td>
                        <td>12 22/07/2020 FT20204436756905\BNK 19034394172017 Ck cho Vinh Nhanh.vn
                            100,000 2,214,892,535 In</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76710">76710</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63089">63089</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=21905">Lê Thị Mộng
                                Thu</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76710">4.400.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-money" data-toggle="tooltip"
                                title="Tiền mặt"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HCM - Sale Marketing">Nguyễn Thị Mỹ Phụng</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="23/07/2020 13:55:19" class="">Trần Kim Ngân
                            </div>
                        </td>
                        <td>Đã nhận tiền mặt của khách vào ngày 23/7/2020
                            --hđ gốc</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76709">76709</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=61295">61295</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=21350">CÔNG TY TNHH
                                HOẢ CHÂU</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76709">30.280.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HN - Phòng KD4_TrườngVV">Nguyễn Khánh Vinh</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="23/07/2020 14:08:44" class="">Đỗ Thị Bích Thủy
                            </div>
                        </td>
                        <td>2 23/07/2020 FT20205060607066\BNK 11121259468012 Hoa Chau 0984493630
                            Thanh toan HD s o 61295 2020 ...</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76708">76708</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63207">63207</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=21902">Hồ Nguyên
                                Khải</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76708">550.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Phòng dịch vụ SEO GG MAPS">Nguyễn Quang Nghĩa</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="23/07/2020 10:43:44" class="">Đỗ Thị Bích Thủy
                            </div>
                        </td>
                        <td>22/07/2020 FT20204608001401\BNK MBVCB.705289428.070679.fb: NGUYEN K HAI
                            chuyen tien.CT tu 0051000560710 HO NGUYEN ...</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76707">76707</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63211">63211</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=21903">Nguyễn Hữu
                                Nhật</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76707">550.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Phòng dịch vụ SEO GG MAPS">Nguyễn Quang Nghĩa</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="23/07/2020 10:45:05" class="">Đỗ Thị Bích Thủy
                            </div>
                        </td>
                        <td>23/07/2020 FT20205269548701\BNK ck googlemap cua hang gao vinh 550,000
                            2,258,892,535 In</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76705">76705</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63215">63215</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=14297">Phan Quỳnh
                                Trang</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76705">4.200.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HN - Phòng KD5_AnhNX">Nguyễn Xuân Anh</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="23/07/2020 10:33:11" class="">Đỗ Thị Bích Thủy
                            </div>
                        </td>
                        <td>5 23/07/2020 FT20205787098458\BNK 19035701156012 Megaphone 4,200,000
                            2,258,342,535 In</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76704">76704</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=62550">62550</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=21900">Mai Văn
                                Cường</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76704">300.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Phòng Dịch Vụ Khách Hàng">Nguyễn Bích Diệp</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="23/07/2020 10:31:25" class="">Đỗ Thị Bích Thủy
                            </div>
                        </td>
                        <td>TCB nhanhvn
                            FT20186505298439\BNK 04/07/2020 200.000 MBVCB.454287069.584954.Mai Van
                            Cuon g - 0962982892 - thanh ...</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76702">76702</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63197">63197</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=20379">Ngô Thị
                                Nhàn</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76702">900.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HN - Phòng KD4_TrườngVV">Nguyễn Đạt Trung</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="23/07/2020 12:00:44" class="">Đỗ Thị Bích Thủy
                            </div>
                        </td>
                        <td>FT20204713477624\BNK 22/07/2020 900.000 Ngo thi nhan ck 2 page
                            Techcombank</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76701">76701</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63073">63073</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=21196">Nguyễn Thị
                                Thanh Xuân</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76701">2.200.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HCM - Sale Marketing">Trịnh Xuân Tài</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="23/07/2020 14:20:20" class="">Trần Kim Ngân
                            </div>
                        </td>
                        <td>BIDV: TK311xxx3375 tai BIDV +2,200,000VND vao 20:24 22/07/2020. So
                            du:76,251,346VND. ...</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76700">76700</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=62763">62763</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=21919">Công ty TNHH
                                Thương Mại Tổng hợp Thuận Tân</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76700">4.776.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title="" data-title="Vchat">Nguyễn Thị Phương
                                Loan</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="23/07/2020 16:34:27" class="">Đỗ Thị Bích Thủy
                            </div>
                        </td>
                        <td>Nguyễn, 9:48 SA
                            2020-07-22 0016 - 00140 4,776,000.00 CT TNHH TM ...</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76698">76698</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=62964">62964</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=2617">Phạm Văn Tú</a>
                        </td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76698">12.960.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HN - Phòng KD2_TùngNT">Nguyễn Thanh Tùng</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="23/07/2020 09:49:45" class="">Nguyễn Thị Hương
                            </div>
                        </td>
                        <td>12 22/07/2020 FT20204511600470\BNK MBVCB.705035987.082571.Pham Van Tu -
                            Thanh Toan HDS : 62964.CT tu ...</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76697">76697</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63113">63113</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=21899">CÔNG TY TNHH
                                VỊNH CÁT</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76697">1.650.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HCM - Nhóm KD9_ThưNTA">Huỳnh Ngọc Hải</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="23/07/2020 09:45:41" class="">Trần Kim Ngân
                            </div>
                        </td>
                        <td>TCB 23/07/2020 - 1,650,000 CTY VINH CAT 0918296067 TT HD ...</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76696">76696</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=62748">62748</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=11518">Lê Duy Tân</a>
                        </td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76696">1.200.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HN - KD11_NganLTT">Lại Thị Thúy Ngần</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="23/07/2020 10:35:19" class="">Đỗ Thị Bích Thủy
                            </div>
                        </td>
                        <td>5078 - 85079 2020-07-10 1,200,000.00 MBVCB460508027.kaizen thanh toan hd
                            so: 62748/2020/PLHD goi ecom.CT ...</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-primary"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76695">76695</a>
                        </td>
                        <td><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/detail?id=63155">63155</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=21906">PHẠM TỐ
                                QUYÊN</a></td>
                        <td class="colControls"><b title="Phiếu thu">Thu</b></td>
                        <td class="colNb"><a style="color: #F73838;"
                                href="https://erp.nhanh.vn/crm/contract/viewtransaction?id=76695">10.450.000</a>
                        </td>
                        <td class="colControls"><i class="fa fa-bank" data-toggle="tooltip"
                                title="Chuyển khoản"></i></td>
                        <td class="col-align-center col-status"></td>
                        <td style="text-algin:center">
                            <div data-toggle="tooltip" title=""
                                data-title="Nhanh HCM - SEO GG MAPS">Nguyễn Thanh Ngân</div>
                        </td>
                        <td class="col-align-center col-status"><b data-toggle="tooltip"
                                class="text-success" title="Đã duyệt">Đã duyệt</b></td>
                        <td>
                            <div data-toggle="tooltip" style="width:auto;"
                                data-original-title="23/07/2020 13:57:31" class="">Trần Kim Ngân
                            </div>
                        </td>
                        <td>TCB 22/07/2020 FT20204608494061\BNK 10.450.000 lespa tt hd so 63155
                            --hđ gốc</td>
                        <td class="col-align-center">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right"></ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Tổng</b></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><b>374.048.000</b></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><b data-toggle="tooltip" data-title="Tổng tiền đã duyệt"
                                class="text-success">329.698.000</b><br><b data-toggle="tooltip"
                                data-title="Tổng tiền chưa duyệt">44.350.000</b></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div class="col-md-6 paginatorItem">
                    <div class="paginator"><span class="labelPages">1 - 100 / 57,208</span><span
                            class="disabled fa fa-step-backward"></span><span
                            class="disabled fa fa-backward"></span><a class="fa fa-forward"
                            href="https://erp.nhanh.vn/crm/contract/transaction?page=2"
                            title="Trang sau"></a> <a class="fa fa-step-forward"
                            href="https://erp.nhanh.vn/crm/contract/transaction?page=573"
                            title="Trang cuối"></a></div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="confirmModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Xác nhận</h4>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" class="referId" value="">
                        <div class="alert alert-warning">
                            Bạn muốn xóa thanh toán này! </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary accept">Có</button>
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Không</button>
                    </div>
                </div>
            </div>
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
        <div class="modal fade" id="errorModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Lỗi</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .select2-container--default {
                width: 250px !important;
            }
        </style>
        <script>
            var SERVER_ERROR_MSG = 'Hệ thống xảy ra lỗi';
        </script>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        var usrCnf = {
            language: 'vi'
        };
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/contract/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/contract/firebase-app.j') }}s"></script>
    <script type="text/javascript" src="{{ asset('asset/js/contract/firebase-messa') }}ging.js"></script>
    <script type="text/javascript" src="{{ asset('asset/js/contract/firebase-fires') }}tore.js"></script>
    <script type="text/javascript" src="{{ asset('asset/js/contract/firebase-auth.') }}js"></script>
    <script type="text/javascript" src="{{ asset('asset/js/contract/getfirebasecon') }}fig"></script>
    <script type="text/javascript" src="{{ asset('asset/js/contract/notification.j') }}s"></script>
    <script type="text/javascript" src="{{ asset('asset/js/contract/notification.r') }}educer.js"></script>
    <script type="text/javascript" src="{{ asset('asset/js/contract/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/contract/saved_resource') }}(1)"></script>
    <script type="text/javascript" src="{{ asset('asset/js/contract/bootstrap-mult') }}iselect.js"></script>
    <script type="text/javascript" src="{{ asset('asset/js/contract/saved_resource') }}(2)"></script>
    <script type="text/javascript" src="{{ asset('asset/js/contract/transaction.js') }}"></script>
@endsection