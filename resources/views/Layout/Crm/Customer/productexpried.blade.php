@extends('Layout.master')

@section('title','ERP-Danh hợp đồng hết hạn')

@section('css')
    <link href=".{{ asset('asset/css/crm/customer/bootstrap-multiselect.css') }}" media="screen" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="{{ asset('asset/css/crm/customer/style.css') }}" type="text/css">
@endsection

@section('content-page')
    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li class="active"><a href="https://erp.nhanh.vn/crm/customer/productexpired">Hợp đồng
                    đã hết hạn</a></li>
        </ul>
        <ul class="nav nav-tabs">
            <li class="active ">
                <a href="{{ route('customerProductexpried') }}">
                    <i class="fa fa-list"></i> Tất cả
                </a>
            </li>
            <li class="">
                <a href="{{ route('customerProductexpried30') }}">
                    <i class="fa fa-exclamation-triangle"></i>
                    Sản phẩm hết hạn trong 30 ngày tới</a>
            </li>
        </ul>
        <br>
        <div class="advance-form-filter">
            <form method="GET" name="customerProductExpired" id="customerProductExpired">
                <div>
                    <div class="form-group collapse-toggle">
                        <a class="btn btn-default  btn-toggle-filter collapsed"
                            data-toggle="collapse"
                            href="https://erp.nhanh.vn/crm/customer/productexpired#collapseFilter">
                            Bộ lọc nâng cao <i class="fa fa-angle-down"></i>
                        </a>
                    </div>
                    <div class="form-group pull-right">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i>
                            Tìm kiếm</button>
                    </div>
                    <div class="col-md-6 pull-right form-group"><input type="text" name="keyword"
                            placeholder="Thông tin khách hàng" id="keyword"
                            class="form-control form-control" value=""></div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-12 collapseFilter collapse" id="collapseFilter"
                    style="height: 0px;">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-md-3">
                                <legend>Sản phẩm</legend>
                                <div class="form-group"><select name="supplyCompanyId"
                                        id="supplyCompanyId" class="form-control form-control">
                                        <option value="">- Cty cung cấp -</option>
                                        <option value="1">Nhanh.vn</option>
                                        <option value="10">VNP group</option>
                                        <option value="2">---Công ty cổ phần Vật Giá Việt Nam
                                        </option>
                                        <option value="315">------Vật giá - Hà Nội</option>
                                        <option value="391">------123job.vn</option>
                                        <option value="14">---Easycare.vn</option>
                                        <option value="321">---Công ty cổ phần TMDT Bảo Kim</option>
                                        <option value="384">---Công ty cổ phần WeHelp</option>
                                    </select></div>
                                <div class="form-group"><select name="productId[]"
                                        multiple="multiple" id="productId"
                                        class="form-control form-control" style="display: none;">
                                        <optgroup label="Nhanh.vn">
                                            <option value="1">Gói Pro - QLBH</option>
                                            <option value="103">Gói thiết kế website theo yêu cầu
                                            </option>
                                            <option value="107">Dịch vụ vận chuyển</option>
                                            <option value="112">Gói phần mềm theo yêu cầu</option>
                                            <option value="125">Phần mềm quản lý doanh nghiệp ERP
                                            </option>
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
                                            <option value="284">Gói Phần mềm quản lý fanpage
                                            </option>
                                            <option value="285">Gói Premium Website</option>
                                            <option value="293">Gói Basic 1 - QLBH - online</option>
                                            <option value="294">Gói Basic 2 - QLBH - offline
                                            </option>
                                            <option value="297">Máy in mã vạch Xprinter XP 350B
                                            </option>
                                            <option value="299">Giấy in bill K58</option>
                                            <option value="300">Giấy in bill K80</option>
                                            <option value="301">Decal nhiệt in mã vạch 2 tem 35*22 (
                                                cuộn )</option>
                                            <option value="302">Ngăn kéo đựng tiền ZQ410F</option>
                                            <option value="305">Thiết kế thêm tính năng cho website:
                                                bảo mật https cho website</option>
                                            <option value="306">Máy đọc mã vạch YJ3300</option>
                                            <option value="307">Chân đế</option>
                                            <option value="310">Máy in hóa đơn XP-N200H</option>
                                            <option value="316">Gói phí chuyển đổi dữ liệu website
                                            </option>
                                            <option value="317">Gói phí nâng cấp gói phần mềm
                                            </option>
                                            <option value="321">Chăm sóc fanpage - Gói content
                                            </option>
                                            <option value="322">Máy quét mã vạch Honeywell HH360
                                            </option>
                                            <option value="324">Máy in mã vạch Honeywell PC42D
                                            </option>
                                            <option value="328">Máy quét mã vạch Honeywell HF600
                                            </option>
                                            <option value="366">Máy in mã vạch HPRT LPQ80</option>
                                            <option value="372">Gói thiết kế thêm tính năng cho
                                                website</option>
                                            <option value="385">Free Phí chỉnh sửa website</option>
                                            <option value="388">Máy quét mã vạch có dây Hugo 1607
                                            </option>
                                            <option value="403">Gói Free - QLBH</option>
                                            <option value="404">Hoàn cước vận chuyển</option>
                                            <option value="414">Gói Omni Starter</option>
                                            <option value="415">Gói Omni Premium</option>
                                            <option value="416">Gói Omni Enterprise</option>
                                            <option value="420">Gói Kho tổng (chỉ xuất nhập kho,
                                                không bán hàng)</option>
                                            <option value="439">Gói Combo 3 fanpage</option>
                                            <option value="440">Máy in HPRT POS80FE</option>
                                            <option value="450">Gói Combo 5 fanpage</option>
                                            <option value="451">Gói Combo 5 gian hàng</option>
                                            <option value="471">Gói combo 3 gian hàng</option>
                                            <option value="474">Gói môi giới</option>
                                            <option value="476">Máy in hóa đơn Xprinter XP-58IIH
                                            </option>
                                            <option value="477">Máy quét Datamax</option>
                                            <option value="479">Gói Quảng Cáo Fanpage</option>
                                            <option value="481">Ngăn kéo đựng tiền JJ330 (Nhỏ)
                                            </option>
                                            <option value="489">Máy in hóa đơn HPRT TP80BE</option>
                                            <option value="492">Gói Combo 10 gian hàng</option>
                                            <option value="493">Gói Combo 10 fanpage</option>
                                            <option value="497">Gói dịch vụ nhập liệu website
                                            </option>
                                            <option value="502">Gói dịch vụ nhập liệu sàn TMĐT
                                            </option>
                                            <option value="503">Gói Ecomcare Shopee</option>
                                            <option value="508">Gói Ecomcare Lazada</option>
                                            <option value="509">Gói Ecom</option>
                                            <option value="511">Gói Ecom (không giới hạn gian hàng/1
                                                sàn TMĐT)</option>
                                            <option value="513">Chăm sóc fanpage - Gói VIP 1
                                            </option>
                                            <option value="514">Chăm sóc fanpage - Gói VIP 2
                                            </option>
                                            <option value="515">Chăm sóc fanpage - Gói VIP 3
                                            </option>
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
                                            <option value="549">Gói Chạy Quảng Cáo Instagram
                                            </option>
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
                                            <option value="568">Phí dịch vụ TK quản trị tên miền VN
                                            </option>
                                            <option value="570">Phí đăng ký tên miền quốc tế
                                            </option>
                                            <option value="571">Phí duy trì tên miền quốc tế
                                            </option>
                                            <option value="573">Gói SEO CƠ BẢN</option>
                                            <option value="574">Gói SEO TỐI ƯU</option>
                                            <option value="575">Máy đếm cầm tay</option>
                                            <option value="576">SMS Brandname</option>
                                            <option value="578">Giấy in mã vạch 2 tem</option>
                                            <option value="579">Gói khởi tạo và Decor gian hàng
                                            </option>
                                            <option value="580">DV GTGT</option>
                                            <option value="581">SMS</option>
                                            <option value="582">DV TÊN MIỀN</option>
                                            <option value="583">Gói chăm sóc gian hàng chuyên nghiệp
                                            </option>
                                            <option value="585">Máy in tem nhiệt N41</option>
                                            <option value="586">Gói chăm sóc website seo cơ bản
                                            </option>
                                            <option value="587">Gói chăm sóc website seo tối ưu
                                            </option>
                                            <option value="588">Gói Hỗ trợ và định hướng content seo
                                            </option>
                                            <option value="589">Gói Tool quét data facebook</option>
                                            <option value="590">Máy quét mã vạch Antech 1266i
                                            </option>
                                            <option value="591">Giấy trắng dạng cuộn dùng trong in
                                                hóa đơn siêu thị</option>
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
                                            <option value="331">Quản trị Fanpage Basic - WeSave
                                            </option>
                                            <option value="332">Quản trị Fanpage Standard - WeSave
                                            </option>
                                            <option value="333">Quản trị Fanpage Business - WeSave
                                            </option>
                                            <option value="334">Gói chụp ảnh menu</option>
                                            <option value="335">Gói chụp ảnh đồ ăn căn bản</option>
                                            <option value="336">Gói chụp ảnh không gian</option>
                                            <option value="337">Gói quay video kèm dựng</option>
                                            <option value="349">Quảng cáo Facebook dạng Tổng hợp ảnh
                                                Gói Căn Bản</option>
                                            <option value="350">Quảng cáo Facebook dạng Tổng hợp ảnh
                                                Gói Thương Gia</option>
                                            <option value="351">Quảng cáo Facebook dạng Độc quyền
                                                ảnh Gói Căn Bản</option>
                                            <option value="352">Quảng cáo Facebook dạng Độc quyền
                                                ảnh Gói Thương Gia</option>
                                            <option value="353">Quảng cáo Facebook dạng Video Gói
                                                Căn Bản</option>
                                            <option value="354">Quảng cáo Facebook dạng Video Gói
                                                Thương Gia</option>
                                            <option value="355">Gói Chụp ảnh sản phẩm I</option>
                                            <option value="356">Gói Chụp ảnh sản phẩm II</option>
                                            <option value="357">Gói Quay video</option>
                                            <option value="358">Gói Thiết kế Menu dạng truyền thống
                                            </option>
                                            <option value="359">Gói Thiết kế Menu dạng hiện đại
                                            </option>
                                            <option value="360">Gói Sản xuất video qua ảnh</option>
                                            <option value="361">Gói Quản trị Instagram</option>
                                            <option value="362">Gói Quảng cáo Facebook dạng ảnh Kênh
                                                cộng đồng</option>
                                            <option value="363">Gói Quảng cáo Facebook dạng video
                                                Kênh cộng đồng</option>
                                            <option value="386">Vchat gói Cơ bản</option>
                                            <option value="387">Vchat gói Chuyên nghiệp</option>
                                            <option value="389">Wemarry - Quản trị fanpage - Gói
                                                Basic</option>
                                            <option value="390">Wemarry - Dịch vụ facebook ads
                                            </option>
                                            <option value="391">Wemarry - Dịch vụ quảng cáo khác -
                                                Gói chụp ảnh sản phẩm 01</option>
                                            <option value="400">Mini Combo - WeSave</option>
                                            <option value="401">Big Combo - WeSave</option>
                                            <option value="402">Extra Combo - WeSave</option>
                                            <option value="412">Wemarry - Quản trị fanpage - Gói
                                                business</option>
                                            <option value="436">Wehelp</option>
                                            <option value="465">Chạy quảng cáo zalo</option>
                                            <option value="466">Gói phát triển website</option>
                                            <option value="467">CRM Starter - weSave</option>
                                            <option value="468">CRM Premium - weSave</option>
                                            <option value="469">Wemarry - thiết kế website</option>
                                            <option value="470">Wemarry - dịch vụ GA</option>
                                            <option value="480">Tư vấn và tối ưu quy trình Marketing
                                                Insight</option>
                                            <option value="482">CRM Chatbot - WeSave</option>
                                            <option value="487">Wemarry - Dịch vụ SEO</option>
                                            <option value="488">wePOS - Phần cứng</option>
                                            <option value="499">Phần mềm quản lý fanpage chốt sale –
                                                Gói 1</option>
                                            <option value="500">Phần mềm quản lý fanpage chốt sale –
                                                Gói 2</option>
                                            <option value="501">Phần mềm quản lý fanpage chốt sale –
                                                Gói 3</option>
                                            <option value="516">9Houz - DV Content</option>
                                            <option value="517">9Houz - DV Banner</option>
                                            <option value="518">9Houz - DV Seo Banner</option>
                                            <option value="572">Vchat gói nâng cao</option>
                                            <option value="577">Vchat gói Forum</option>
                                        </optgroup>
                                        <optgroup label="VNP group">
                                            <option value="392">Wemarry - Quản trị fanpage - Gói
                                                Standard</option>
                                            <option value="393">Wemarry - Quản trị fanpage - Gói
                                                Business</option>
                                            <option value="394">Wemarry - Dịch vụ quảng cáo khác -
                                                Gói chụp ảnh sản phẩm 02</option>
                                            <option value="395">Wemarry - Gói chụp ảnh không gian
                                            </option>
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
                                            <option value="540">Dịch vụ trên ứng dụng Panama
                                            </option>
                                        </optgroup>
                                        <optgroup label="Công ty cổ phần WeHelp">
                                            <option value="408">Bizshare - Gói chăm sóc fanpage -
                                                Nội dung</option>
                                            <option value="409">Bizshare - Chạy quảng cáo</option>
                                            <option value="410">Bizshare - Xây dựng nội dung trên
                                                Website và Fanpage</option>
                                            <option value="411">Bizshare - Chạy chiến dịch quảng cáo
                                                trên Facebook Ads và Google Adword</option>
                                            <option value="437">Bizshare - Gói quảng cáo Media
                                            </option>
                                            <option value="472">BizShare - Dịch vụ SEO tổng thể
                                            </option>
                                            <option value="483">Bizshare - Dịch vụ quản lý ngân sách
                                                chạy quảng cáo</option>
                                            <option value="484">Bizshare - Chăm sóc website, nội
                                                dung</option>
                                            <option value="485">Bizshare - Xây dựng landing page bán
                                                hàng</option>
                                            <option value="486">Bizshare - Tối ưu kênh bán hàng sàn
                                                TMĐT Shopee</option>
                                            <option value="490">Bizshare - Gói chăm sóc fanpage
                                                Facebook và Instagram</option>
                                            <option value="498">BizShare - Thiết kế ấn phẩm truyền
                                                thông</option>
                                            <option value="519">Bizshare - Thiết kế landing page
                                            </option>
                                            <option value="521">Bizshare - Thiết kế website</option>
                                            <option value="522">Bizshare - Thiết kế Brochure
                                            </option>
                                            <option value="523">Bizshare - Thiết kế Logo</option>
                                            <option value="529">Bizshare - Quảng cáo Facebook và
                                                Instagram</option>
                                            <option value="530">Bizshare - Định hướng tư vấn truyền
                                                thông và tư vấn chiến lược</option>
                                            <option value="531">Bizshare - Gói Quản trị kênh Thương
                                                mại điện tử</option>
                                            <option value="533">SEO lead</option>
                                            <option value="535">Facebook Ads</option>
                                        </optgroup>
                                        <optgroup label="123job.vn">
                                            <option value="584">123job - Gói mở hồ sơ ứng viên
                                            </option>
                                        </optgroup>
                                    </select>
                                    <div class="btn-group"><button type="button"
                                            class="multiselect dropdown-toggle btn btn-default"
                                            data-toggle="dropdown" title="Sản phẩm">Sản phẩm <b
                                                class="caret"></b></button>
                                        <ul class="multiselect-container dropdown-menu">
                                            <li class="multiselect-item filter" value="0">
                                                <div class="input-group"><span
                                                        class="input-group-addon"><i
                                                            class="glyphicon glyphicon-search"></i></span><input
                                                        class="form-control multiselect-search"
                                                        type="text" placeholder="Search"></div>
                                            </li>
                                            <li class="multiselect-item group"><label
                                                    class="multiselect-group">Nhanh.vn</label></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="1"> Gói Pro - QLBH</label></a>
                                            </li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="103"> Gói thiết kế website theo
                                                        yêu cầu</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="107"> Dịch vụ vận
                                                        chuyển</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="112"> Gói phần mềm theo yêu
                                                        cầu</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="125"> Phần mềm quản lý doanh
                                                        nghiệp ERP</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="236"> Gói thêm tính năng
                                                        mới</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="251"> Gói Shipping -
                                                        QLBH</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="252"> Gói Starter -
                                                        QLBH</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="253"> Gói Premium -
                                                        QLBH</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="254"> Gói Enterprise -
                                                        QLBH</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="261"> Gói phí tích hợp
                                                        API</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="267"> Gói Website cơ
                                                        bản</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="268"> Gói Website tối
                                                        ưu</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="269"> Gói Website tiết
                                                        kiệm</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="273"> Gói website theo yêu
                                                        cầu</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="284"> Gói Phần mềm quản lý
                                                        fanpage</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="285"> Gói Premium
                                                        Website</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="293"> Gói Basic 1 - QLBH -
                                                        online</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="294"> Gói Basic 2 - QLBH -
                                                        offline</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="297"> Máy in mã vạch Xprinter XP
                                                        350B</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="299"> Giấy in bill
                                                        K58</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="300"> Giấy in bill
                                                        K80</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="301"> Decal nhiệt in mã vạch 2
                                                        tem 35*22 ( cuộn )</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="302"> Ngăn kéo đựng tiền
                                                        ZQ410F</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="305"> Thiết kế thêm tính năng cho
                                                        website: bảo mật https cho
                                                        website</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="306"> Máy đọc mã vạch
                                                        YJ3300</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="307"> Chân đế</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="310"> Máy in hóa đơn
                                                        XP-N200H</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="316"> Gói phí chuyển đổi dữ liệu
                                                        website</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="317"> Gói phí nâng cấp gói phần
                                                        mềm</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="321"> Chăm sóc fanpage - Gói
                                                        content</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="322"> Máy quét mã vạch Honeywell
                                                        HH360</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="324"> Máy in mã vạch Honeywell
                                                        PC42D</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="328"> Máy quét mã vạch Honeywell
                                                        HF600</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="366"> Máy in mã vạch HPRT
                                                        LPQ80</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="372"> Gói thiết kế thêm tính năng
                                                        cho website</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="385"> Free Phí chỉnh sửa
                                                        website</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="388"> Máy quét mã vạch có dây
                                                        Hugo 1607</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="403"> Gói Free - QLBH</label></a>
                                            </li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="404"> Hoàn cước vận
                                                        chuyển</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="414"> Gói Omni
                                                        Starter</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="415"> Gói Omni
                                                        Premium</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="416"> Gói Omni
                                                        Enterprise</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="420"> Gói Kho tổng (chỉ xuất nhập
                                                        kho, không bán hàng)</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="439"> Gói Combo 3
                                                        fanpage</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="440"> Máy in HPRT
                                                        POS80FE</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="450"> Gói Combo 5
                                                        fanpage</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="451"> Gói Combo 5 gian
                                                        hàng</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="471"> Gói combo 3 gian
                                                        hàng</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="474"> Gói môi giới</label></a>
                                            </li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="476"> Máy in hóa đơn Xprinter
                                                        XP-58IIH</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="477"> Máy quét
                                                        Datamax</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="479"> Gói Quảng Cáo
                                                        Fanpage</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="481"> Ngăn kéo đựng tiền JJ330
                                                        (Nhỏ)</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="489"> Máy in hóa đơn HPRT
                                                        TP80BE</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="492"> Gói Combo 10 gian
                                                        hàng</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="493"> Gói Combo 10
                                                        fanpage</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="497"> Gói dịch vụ nhập liệu
                                                        website</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="502"> Gói dịch vụ nhập liệu sàn
                                                        TMĐT</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="503"> Gói Ecomcare
                                                        Shopee</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="508"> Gói Ecomcare
                                                        Lazada</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="509"> Gói Ecom</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="511"> Gói Ecom (không giới hạn
                                                        gian hàng/1 sàn TMĐT)</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="513"> Chăm sóc fanpage - Gói VIP
                                                        1</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="514"> Chăm sóc fanpage - Gói VIP
                                                        2</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="515"> Chăm sóc fanpage - Gói VIP
                                                        3</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="520"> Gói Thiết kế Website
                                                        P</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="524"> Máy in mã vạch
                                                        380B</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="525"> Máy Đọc Mã Vạch
                                                        ChipPOS</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="528"> Gói Thiết kế Website
                                                        W</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="532"> Gói Thiết kế Website
                                                        E</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="534"> Giấy tờ Công ty</label></a>
                                            </li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="536"> Gói Ecom full sàn
                                                        TMĐT</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="538"> Máy in hóa đơn model
                                                        A160</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="539"> Két đựng tiền SC -
                                                        335A</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="542"> Gói Tạo mới
                                                        Maps</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="543"> Gói Xác minh
                                                        Maps</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="544"> Gói Chăm sóc
                                                        Maps</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="548"> Máy in hóa đơn
                                                        XP-V320N</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="549"> Gói Chạy Quảng Cáo
                                                        Instagram</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="550"> Gói Hỗ trợ quảng cáo
                                                        Shopee</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="552"> Gói Ecom COVID
                                                        Free</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="553"> Gói WEB COVID
                                                        Free</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="554"> POS</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="555"> WEB</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="556"> ECOM</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="557"> VPAGE</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="558"> OMNI</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="559"> MAP</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="560"> ECOMCARE</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="561"> SEO</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="562"> FB</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="563"> PC</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="564"> DVPM</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="565"> DVMKT</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="566"> Lệ phí đăng ký tên miền
                                                        VN</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="567"> Phí duy trì tên miền
                                                        VN</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="568"> Phí dịch vụ TK quản trị tên
                                                        miền VN</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="570"> Phí đăng ký tên miền quốc
                                                        tế</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="571"> Phí duy trì tên miền quốc
                                                        tế</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="573"> Gói SEO CƠ BẢN</label></a>
                                            </li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="574"> Gói SEO TỐI ƯU</label></a>
                                            </li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="575"> Máy đếm cầm tay</label></a>
                                            </li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="576"> SMS Brandname</label></a>
                                            </li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="578"> Giấy in mã vạch 2
                                                        tem</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="579"> Gói khởi tạo và Decor gian
                                                        hàng</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="580"> DV GTGT</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="581"> SMS</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="582"> DV TÊN MIỀN</label></a>
                                            </li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="583"> Gói chăm sóc gian hàng
                                                        chuyên nghiệp</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="585"> Máy in tem nhiệt
                                                        N41</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="586"> Gói chăm sóc website seo cơ
                                                        bản</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="587"> Gói chăm sóc website seo
                                                        tối ưu</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="588"> Gói Hỗ trợ và định hướng
                                                        content seo</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="589"> Gói Tool quét data
                                                        facebook</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="590"> Máy quét mã vạch Antech
                                                        1266i</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="591"> Giấy trắng dạng cuộn dùng
                                                        trong in hóa đơn siêu thị</label></a></li>
                                            <li class="multiselect-item group"><label
                                                    class="multiselect-group">Công ty cổ phần Vật
                                                    Giá Việt Nam</label></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="114"> Facebook Ad</label></a>
                                            </li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="115"> Google Ad</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="120"> Vchat</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="220"> Marketing</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="222"> GHĐB Phát sinh</label></a>
                                            </li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="223"> GHĐB Ngoại tỉnh</label></a>
                                            </li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="224"> Tin vip</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="225"> Siêu vip dính</label></a>
                                            </li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="226"> Siêu vip</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="227"> Banner</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="229"> Nạp tiền Ad by
                                                        Vatgia</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="230"> Nạp tiền</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="231"> GHĐB (tái ký)</label></a>
                                            </li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="232"> GHĐB (mới)</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="235"> Gian hàng phát
                                                        sinh</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="237"> Gian hàng
                                                        Premium</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="240"> Gian hàng thu
                                                        CPA</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="246"> Banner (tái ký)</label></a>
                                            </li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="247"> Nạp tiền (tái
                                                        ký)</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="248"> Tin vip (tái
                                                        ký)</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="249"> Siêu vip dính (tái
                                                        ký)</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="250"> Siêu vip (tái
                                                        ký)</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="271"> Deal VG</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="272"> Nạp tiền tài khoản
                                                        chính</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="275"> Vpage</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="276"> Gói Traffic</label></a>
                                            </li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="278"> Zopzep -
                                                        Marketing</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="279"> Fanpage</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="280"> Nạp tiền dự án</label></a>
                                            </li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="281"> Fanpage VG</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="282"> Dịch vụ Viết
                                                        bài</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="283"> Seo Banner</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="286"> Khóa học FB
                                                        Marketing</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="288"> Lipo (gói
                                                        thường)</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="289"> Lipo (gói nâng
                                                        cao)</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="290"> Lipo (gói cao
                                                        cấp)</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="308"> Cho thuê phòng</label></a>
                                            </li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="309"> Dịch vụ trang trí
                                                        phòng</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="311"> wePOS (basic)</label></a>
                                            </li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="312"> wePOS (starter)</label></a>
                                            </li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="313"> wePOS
                                                        (advanced)</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="314"> wePOS (premium)</label></a>
                                            </li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="315"> wePOS (diamond)</label></a>
                                            </li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="325"> Gói TMDT toàn diện
                                                        1</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="326"> Gói TMDT toàn diện
                                                        2</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="331"> Quản trị Fanpage Basic -
                                                        WeSave</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="332"> Quản trị Fanpage Standard -
                                                        WeSave</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="333"> Quản trị Fanpage Business -
                                                        WeSave</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="334"> Gói chụp ảnh
                                                        menu</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="335"> Gói chụp ảnh đồ ăn căn
                                                        bản</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="336"> Gói chụp ảnh không
                                                        gian</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="337"> Gói quay video kèm
                                                        dựng</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="349"> Quảng cáo Facebook dạng
                                                        Tổng hợp ảnh Gói Căn Bản</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="350"> Quảng cáo Facebook dạng
                                                        Tổng hợp ảnh Gói Thương Gia</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="351"> Quảng cáo Facebook dạng Độc
                                                        quyền ảnh Gói Căn Bản</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="352"> Quảng cáo Facebook dạng Độc
                                                        quyền ảnh Gói Thương Gia</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="353"> Quảng cáo Facebook dạng
                                                        Video Gói Căn Bản</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="354"> Quảng cáo Facebook dạng
                                                        Video Gói Thương Gia</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="355"> Gói Chụp ảnh sản phẩm
                                                        I</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="356"> Gói Chụp ảnh sản phẩm
                                                        II</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="357"> Gói Quay video</label></a>
                                            </li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="358"> Gói Thiết kế Menu dạng
                                                        truyền thống</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="359"> Gói Thiết kế Menu dạng hiện
                                                        đại</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="360"> Gói Sản xuất video qua
                                                        ảnh</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="361"> Gói Quản trị
                                                        Instagram</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="362"> Gói Quảng cáo Facebook dạng
                                                        ảnh Kênh cộng đồng</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="363"> Gói Quảng cáo Facebook dạng
                                                        video Kênh cộng đồng</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="386"> Vchat gói Cơ
                                                        bản</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="387"> Vchat gói Chuyên
                                                        nghiệp</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="389"> Wemarry - Quản trị fanpage
                                                        - Gói Basic</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="390"> Wemarry - Dịch vụ facebook
                                                        ads</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="391"> Wemarry - Dịch vụ quảng cáo
                                                        khác - Gói chụp ảnh sản phẩm 01</label></a>
                                            </li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="400"> Mini Combo -
                                                        WeSave</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="401"> Big Combo -
                                                        WeSave</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="402"> Extra Combo -
                                                        WeSave</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="412"> Wemarry - Quản trị fanpage
                                                        - Gói business</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="436"> Wehelp</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="465"> Chạy quảng cáo
                                                        zalo</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="466"> Gói phát triển
                                                        website</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="467"> CRM Starter -
                                                        weSave</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="468"> CRM Premium -
                                                        weSave</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="469"> Wemarry - thiết kế
                                                        website</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="470"> Wemarry - dịch vụ
                                                        GA</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="480"> Tư vấn và tối ưu quy trình
                                                        Marketing Insight</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="482"> CRM Chatbot -
                                                        WeSave</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="487"> Wemarry - Dịch vụ
                                                        SEO</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="488"> wePOS - Phần
                                                        cứng</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="499"> Phần mềm quản lý fanpage
                                                        chốt sale – Gói 1</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="500"> Phần mềm quản lý fanpage
                                                        chốt sale – Gói 2</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="501"> Phần mềm quản lý fanpage
                                                        chốt sale – Gói 3</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="516"> 9Houz - DV
                                                        Content</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="517"> 9Houz - DV
                                                        Banner</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="518"> 9Houz - DV Seo
                                                        Banner</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="572"> Vchat gói nâng
                                                        cao</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="577"> Vchat gói Forum</label></a>
                                            </li>
                                            <li class="multiselect-item group"><label
                                                    class="multiselect-group">VNP group</label></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="392"> Wemarry - Quản trị fanpage
                                                        - Gói Standard</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="393"> Wemarry - Quản trị fanpage
                                                        - Gói Business</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="394"> Wemarry - Dịch vụ quảng cáo
                                                        khác - Gói chụp ảnh sản phẩm 02</label></a>
                                            </li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="395"> Wemarry - Gói chụp ảnh
                                                        không gian</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="396"> Wemarry - Gói quay
                                                        phim</label></a></li>
                                            <li class="multiselect-item group"><label
                                                    class="multiselect-group">Easycare.vn</label>
                                            </li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="258"> Dịch vụ trả theo
                                                        tháng</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="259"> Dịch vụ trả theo thời
                                                        gian</label></a></li>
                                            <li class="multiselect-item group"><label
                                                    class="multiselect-group">Vật giá - Hà
                                                    Nội</label></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="274"> Phần mềm QL bán
                                                        thuốc</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="277"> Zopzep - Quản lý nhà
                                                        hàng</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="551"> BA - Phát triển phần
                                                        mềm</label></a></li>
                                            <li class="multiselect-item group"><label
                                                    class="multiselect-group">Công ty cổ phần TMDT
                                                    Bảo Kim</label></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="504"> Cổng thanh toán</label></a>
                                            </li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="505"> Dịch vụ hỗ trợ Thu
                                                        hộ</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="506"> Dịch vụ hỗ trợ Chi
                                                        hộ</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="507"> Xác thực tài
                                                        khoản</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="540"> Dịch vụ trên ứng dụng
                                                        Panama</label></a></li>
                                            <li class="multiselect-item group"><label
                                                    class="multiselect-group">Công ty cổ phần
                                                    WeHelp</label></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="408"> Bizshare - Gói chăm sóc
                                                        fanpage - Nội dung</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="409"> Bizshare - Chạy quảng
                                                        cáo</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="410"> Bizshare - Xây dựng nội
                                                        dung trên Website và Fanpage</label></a>
                                            </li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="411"> Bizshare - Chạy chiến dịch
                                                        quảng cáo trên Facebook Ads và Google
                                                        Adword</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="437"> Bizshare - Gói quảng cáo
                                                        Media</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="472"> BizShare - Dịch vụ SEO tổng
                                                        thể</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="483"> Bizshare - Dịch vụ quản lý
                                                        ngân sách chạy quảng cáo</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="484"> Bizshare - Chăm sóc
                                                        website, nội dung</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="485"> Bizshare - Xây dựng landing
                                                        page bán hàng</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="486"> Bizshare - Tối ưu kênh bán
                                                        hàng sàn TMĐT Shopee</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="490"> Bizshare - Gói chăm sóc
                                                        fanpage Facebook và Instagram</label></a>
                                            </li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="498"> BizShare - Thiết kế ấn phẩm
                                                        truyền thông</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="519"> Bizshare - Thiết kế landing
                                                        page</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="521"> Bizshare - Thiết kế
                                                        website</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="522"> Bizshare - Thiết kế
                                                        Brochure</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="523"> Bizshare - Thiết kế
                                                        Logo</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="529"> Bizshare - Quảng cáo
                                                        Facebook và Instagram</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="530"> Bizshare - Định hướng tư
                                                        vấn truyền thông và tư vấn chiến
                                                        lược</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="531"> Bizshare - Gói Quản trị
                                                        kênh Thương mại điện tử</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="533"> SEO lead</label></a></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="535"> Facebook Ads</label></a>
                                            </li>
                                            <li class="multiselect-item group"><label
                                                    class="multiselect-group">123job.vn</label></li>
                                            <li><a href="javascript:void(0);"><label
                                                        class="checkbox"><input type="checkbox"
                                                            value="584"> 123job - Gói mở hồ sơ ứng
                                                        viên</label></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <legend>Hợp đồng</legend>
                                <div class="form-group"><input type="text" name="contractId"
                                        placeholder="ID hợp đồng" id="contractId"
                                        class="form-control form-control" value=""></div>
                                <div class="form-group"><select name="companyId" id="companyId"
                                        class="form-control form-control">
                                        <option value="">- Cty kí hợp đồng -</option>
                                        <option value="10">VNP group</option>
                                        <option value="2">--Công ty cổ phần Vật Giá Việt Nam
                                        </option>
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
                                    </select></div>
                                <div class="form-group"><select name="departmentId"
                                        id="departmentId"
                                        class="form-control form-control select2-hidden-accessible"
                                        tabindex="-1" aria-hidden="true">
                                        <option value="">- Phòng ban -</option>
                                    </select><span
                                        class="select2 select2-container select2-container--default"
                                        dir="ltr" style="width: 100px;"><span
                                            class="selection"><span
                                                class="select2-selection select2-selection--single"
                                                role="combobox" aria-haspopup="true"
                                                aria-expanded="false" tabindex="0"
                                                aria-labelledby="select2-departmentId-container"><span
                                                    class="select2-selection__rendered"
                                                    id="select2-departmentId-container"
                                                    title="- Phòng ban -">- Phòng ban -</span><span
                                                    class="select2-selection__arrow"
                                                    role="presentation"><b
                                                        role="presentation"></b></span></span></span><span
                                            class="dropdown-wrapper"
                                            aria-hidden="true"></span></span></div>
                                <div class="form-group"><input type="text" name="createdByName"
                                        maxlength="225" placeholder="Người tạo" id="createdByName"
                                        class="form-control form-control ui-autocomplete-input"
                                        value="" autocomplete="off"></div>
                            </div><input type="hidden" name="createdById" id="createdById"
                                value=""><input type="hidden" name="tab" id="tab" value="">
                            <div class="col-md-3">
                                <legend>Khách hàng</legend>
                                <div class="form-group"><input type="text" name="leadId"
                                        placeholder="ID thông tin" id="leadId"
                                        class="form-control form-control" value=""></div>
                                <div class="form-group"><input type="text" name="accountId"
                                        placeholder="ID khách hàng" id="accountId"
                                        class="form-control form-control" value=""></div>
                            </div>
                            <div class="col-md-3">
                                <legend>Tiện ích</legend>
                                <div class="form-group"><input type="text" name="fromExpriredDate"
                                        placeholder="Từ ngày"
                                        class="datepicker form-control form-control"
                                        id="fromExpriredDate" value=""></div>
                                <div class="form-group"><input type="text" name="toExpriredDate"
                                        placeholder="Đến ngày"
                                        class="datepicker form-control form-control"
                                        id="toExpriredDate" value=""></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-footer">
                            <div class="pull-right">
                                <button type="submit" class="btn btn-primary"><i
                                        class="fa fa-search"></i> Tìm kiếm</button>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                </div>
                <div class="clearfix"></div>
            </form>
        </div>
        <div class="dgContainer">
            <div style="display: none; width: 1556px;" class="stickyHeader">
                <table class="table table-bordered" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr class="even">
                            <th class="col-align-left" style="width: 35px;"><i
                                    class="fa fa-cog"></i></th>
                            <th class="col-align-right" style="width: 99px;">Hợp đồng</th>
                            <th class="col-align-left" style="width: 737px;">Khách hàng</th>
                            <th class="col-align-left" style="width: 137px;">Hết hạn</th>
                            <th class="col-align-left" style="width: 445px;">Sản phẩm</th>
                            <th class="col-align-left" style="width: 103px;">Gian hàng</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div class="col-md-6 paginatorItem">
                    <div class="paginator"><span class="labelPages">1 - 50 / 20,476</span><span
                            class="disabled fa fa-step-backward"></span><span
                            class="disabled fa fa-backward"></span><a class="fa fa-forward"
                            href="https://erp.nhanh.vn/crm/customer/productexpired?page=2"
                            title="Trang sau"></a> <a class="fa fa-step-forward"
                            href="https://erp.nhanh.vn/crm/customer/productexpired?page=410"
                            title="Trang cuối"></a></div>
                </div>
                <div style="clear: both;"></div><br>
            </div>
            <table id="dgExpriedProduct" class="table table table-hover">
                <thead>
                    <tr class="even">
                        <th class="col-align-left"><i class="fa fa-cog"></i></th>
                        <th class="col-align-right">Hợp đồng</th>
                        <th class="col-align-left">Khách hàng</th>
                        <th class="col-align-left">Hết hạn</th>
                        <th class="col-align-left">Sản phẩm</th>
                        <th class="col-align-left">Gian hàng</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td class="">
                            <div class="dropdown">
                                <a class="fa fa-cog dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a class="pickup" data-id="4424"><i class="fa fa-heart"></i>
                                            Nhận chăm sóc</a></li>
                                </ul>
                            </div>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=5584">5584</a>
                        </td>
                        <td class="col-align-left"><a
                                href="https://erp.nhanh.vn/crm/account/view?id=4424">NGÔ MINH
                                DUY</a></td>
                        <td class="col-align-left text-success"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=5584"><i
                                    class="fa fa-check text-success"></i> 27/05/2106</a></td>
                        <td class="col-align-left">GHĐB (tái ký)</td>
                        <td class="col-align-left"></td>
                    </tr>
                    <tr class="even">
                        <td class="">
                            <div class="dropdown">
                                <a class="fa fa-cog dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a class="pickup" data-id="2720"><i class="fa fa-heart"></i>
                                            Nhận chăm sóc</a></li>
                                </ul>
                            </div>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=59108">59108</a>
                        </td>
                        <td class="col-align-left"><a
                                href="https://erp.nhanh.vn/crm/account/view?id=2720">CÔNG TY CỔ PHẦN
                                SẢN XUẤT THƯƠNG MẠI TRƯƠNG HOÀNG</a></td>
                        <td class="col-align-left text-success"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=59108"><i
                                    class="fa fa-check text-success"></i> 08/12/2037</a></td>
                        <td class="col-align-left">GHĐB (tái ký)</td>
                        <td class="col-align-left"></td>
                    </tr>
                    <tr class="">
                        <td class="">
                            <div class="dropdown">
                                <a class="fa fa-cog dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a class="pickup" data-id="21884"><i
                                                class="fa fa-heart"></i> Nhận chăm sóc</a></li>
                                </ul>
                            </div>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=61719">61719</a>
                        </td>
                        <td class="col-align-left"><a
                                href="https://erp.nhanh.vn/crm/account/view?id=21884">chị Oanh</a>
                        </td>
                        <td class="col-align-left text-success"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=61719"><i
                                    class="fa fa-check text-success"></i> 22/01/2031</a></td>
                        <td class="col-align-left">Gói Kho tổng (chỉ xuất nhập kho, không bán hàng)
                        </td>
                        <td class="col-align-left"></td>
                    </tr>
                    <tr class="even">
                        <td class="">
                            <div class="dropdown">
                                <a class="fa fa-cog dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a class="pickup" data-id="20868"><i
                                                class="fa fa-heart"></i> Nhận chăm sóc</a></li>
                                </ul>
                            </div>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=59337">59337</a>
                        </td>
                        <td class="col-align-left"><a
                                href="https://erp.nhanh.vn/crm/account/view?id=20868">Bùi Bảo
                                Trâm</a></td>
                        <td class="col-align-left text-success"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=59337"><i
                                    class="fa fa-check text-success"></i> 02/04/2030</a></td>
                        <td class="col-align-left">Gói Enterprise - QLBH</td>
                        <td class="col-align-left"></td>
                    </tr>
                    <tr class="">
                        <td class="">
                            <div class="dropdown">
                                <a class="fa fa-cog dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a class="pickup" data-id="20697"><i
                                                class="fa fa-heart"></i> Nhận chăm sóc</a></li>
                                </ul>
                            </div>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=58480">58480</a>
                        </td>
                        <td class="col-align-left"><a
                                href="https://erp.nhanh.vn/crm/account/view?id=20697">Anh Khanh</a>
                        </td>
                        <td class="col-align-left text-success"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=58480"><i
                                    class="fa fa-check text-success"></i> 15/03/2030</a></td>
                        <td class="col-align-left">Gói Website khởi nghiệp dài hạn</td>
                        <td class="col-align-left"></td>
                    </tr>
                    <tr class="even">
                        <td class="">
                            <div class="dropdown">
                                <a class="fa fa-cog dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a class="pickup" data-id="20684"><i
                                                class="fa fa-heart"></i> Nhận chăm sóc</a></li>
                                </ul>
                            </div>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=58184">58184</a>
                        </td>
                        <td class="col-align-left"><a
                                href="https://erp.nhanh.vn/crm/account/view?id=20684">Đoàn Thuỳ
                                Dung</a></td>
                        <td class="col-align-left text-success"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=58184"><i
                                    class="fa fa-check text-success"></i> 11/03/2030</a></td>
                        <td class="col-align-left">Gói PREMIUM dài hạn - QLBH</td>
                        <td class="col-align-left"></td>
                    </tr>
                    <tr class="">
                        <td class="">
                            <div class="dropdown">
                                <a class="fa fa-cog dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a class="pickup" data-id="20558"><i
                                                class="fa fa-heart"></i> Nhận chăm sóc</a></li>
                                </ul>
                            </div>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=57893">57893</a>
                        </td>
                        <td class="col-align-left"><a
                                href="https://erp.nhanh.vn/crm/account/view?id=20558">Ngọc Linh( PET
                                SHOP)</a></td>
                        <td class="col-align-left text-success"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=57893"><i
                                    class="fa fa-check text-success"></i> 21/02/2030</a></td>
                        <td class="col-align-left">Gói PREMIUM dài hạn - QLBH</td>
                        <td class="col-align-left"></td>
                    </tr>
                    <tr class="even">
                        <td class="">
                            <div class="dropdown">
                                <a class="fa fa-cog dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a class="pickup" data-id="20500"><i
                                                class="fa fa-heart"></i> Nhận chăm sóc</a></li>
                                </ul>
                            </div>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=57535">57535</a>
                        </td>
                        <td class="col-align-left"><a
                                href="https://erp.nhanh.vn/crm/account/view?id=20500">Family
                                Mart</a></td>
                        <td class="col-align-left text-success"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=57535"><i
                                    class="fa fa-check text-success"></i> 14/02/2030</a></td>
                        <td class="col-align-left">Gói BASIC 2 dài hạn - QLBH</td>
                        <td class="col-align-left"></td>
                    </tr>
                    <tr class="">
                        <td class="">
                            <div class="dropdown">
                                <a class="fa fa-cog dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a class="pickup" data-id="20494"><i
                                                class="fa fa-heart"></i> Nhận chăm sóc</a></li>
                                </ul>
                            </div>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=57603">57603</a>
                        </td>
                        <td class="col-align-left"><a
                                href="https://erp.nhanh.vn/crm/account/view?id=20494">Chị Thủy</a>
                        </td>
                        <td class="col-align-left text-success"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=57603"><i
                                    class="fa fa-check text-success"></i> 12/02/2030</a></td>
                        <td class="col-align-left">Gói thêm tính năng mới</td>
                        <td class="col-align-left"></td>
                    </tr>
                    <tr class="even">
                        <td class="">
                            <div class="dropdown">
                                <a class="fa fa-cog dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a class="pickup" data-id="20463"><i
                                                class="fa fa-heart"></i> Nhận chăm sóc</a></li>
                                </ul>
                            </div>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=57460">57460</a>
                        </td>
                        <td class="col-align-left"><a
                                href="https://erp.nhanh.vn/crm/account/view?id=20463">GRESUN</a>
                        </td>
                        <td class="col-align-left text-success"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=57460"><i
                                    class="fa fa-check text-success"></i> 07/02/2030</a></td>
                        <td class="col-align-left">Gói PREMIUM dài hạn - QLBH</td>
                        <td class="col-align-left"></td>
                    </tr>
                    <tr class="">
                        <td class="">
                            <div class="dropdown">
                                <a class="fa fa-cog dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a class="pickup" data-id="20196"><i
                                                class="fa fa-heart"></i> Nhận chăm sóc</a></li>
                                </ul>
                            </div>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=56163">56163</a>
                        </td>
                        <td class="col-align-left"><a
                                href="https://erp.nhanh.vn/crm/account/view?id=20196">Thầy Việt</a>
                        </td>
                        <td class="col-align-left text-success"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=56163"><i
                                    class="fa fa-check text-success"></i> 01/01/2030</a></td>
                        <td class="col-align-left">Gói BASIC 2 dài hạn - QLBH</td>
                        <td class="col-align-left"></td>
                    </tr>
                    <tr class="even">
                        <td class="">
                            <div class="dropdown">
                                <a class="fa fa-cog dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a class="pickup" data-id="20331"><i
                                                class="fa fa-heart"></i> Nhận chăm sóc</a></li>
                                </ul>
                            </div>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=56817">56817</a>
                        </td>
                        <td class="col-align-left"><a
                                href="https://erp.nhanh.vn/crm/account/view?id=20331">Dương Quỳnh
                                Chi</a></td>
                        <td class="col-align-left text-success"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=56817"><i
                                    class="fa fa-check text-success"></i> 01/01/2030</a></td>
                        <td class="col-align-left">Gói STARTER dài hạn - QLBH</td>
                        <td class="col-align-left"></td>
                    </tr>
                    <tr class="">
                        <td class="">
                            <div class="dropdown">
                                <a class="fa fa-cog dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a class="pickup" data-id="20267"><i
                                                class="fa fa-heart"></i> Nhận chăm sóc</a></li>
                                </ul>
                            </div>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=56460">56460</a>
                        </td>
                        <td class="col-align-left"><a
                                href="https://erp.nhanh.vn/crm/account/view?id=20267">chị Trúc</a>
                        </td>
                        <td class="col-align-left text-success"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=56460"><i
                                    class="fa fa-check text-success"></i> 23/12/2029</a></td>
                        <td class="col-align-left">Gói STARTER dài hạn - QLBH</td>
                        <td class="col-align-left"></td>
                    </tr>
                    <tr class="even">
                        <td class="">
                            <div class="dropdown">
                                <a class="fa fa-cog dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a class="pickup" data-id="20332"><i
                                                class="fa fa-heart"></i> Nhận chăm sóc</a></li>
                                </ul>
                            </div>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=55738">55738</a>
                        </td>
                        <td class="col-align-left"><a
                                href="https://erp.nhanh.vn/crm/account/view?id=20332">Phan Thanh
                                Duy</a></td>
                        <td class="col-align-left text-success"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=55738"><i
                                    class="fa fa-check text-success"></i> 05/12/2029</a></td>
                        <td class="col-align-left">Gói Website khởi nghiệp dài hạn</td>
                        <td class="col-align-left"></td>
                    </tr>
                    <tr class="">
                        <td class="">
                            <div class="dropdown">
                                <a class="fa fa-cog dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a class="pickup" data-id="20034"><i
                                                class="fa fa-heart"></i> Nhận chăm sóc</a></li>
                                </ul>
                            </div>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=55469">55469</a>
                        </td>
                        <td class="col-align-left"><a
                                href="https://erp.nhanh.vn/crm/account/view?id=20034">C Huyền</a>
                        </td>
                        <td class="col-align-left text-success"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=55469"><i
                                    class="fa fa-check text-success"></i> 01/12/2029</a></td>
                        <td class="col-align-left">Gói STARTER dài hạn - QLBH</td>
                        <td class="col-align-left"></td>
                    </tr>
                    <tr class="even">
                        <td class="">
                            <div class="dropdown">
                                <a class="fa fa-cog dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a class="pickup" data-id="20032"><i
                                                class="fa fa-heart"></i> Nhận chăm sóc</a></li>
                                </ul>
                            </div>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=55741">55741</a>
                        </td>
                        <td class="col-align-left"><a
                                href="https://erp.nhanh.vn/crm/account/view?id=20032">Đồng Khánh
                                Sơn</a></td>
                        <td class="col-align-left text-success"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=55741"><i
                                    class="fa fa-check text-success"></i> 01/12/2029</a></td>
                        <td class="col-align-left">Gói PREMIUM dài hạn - QLBH</td>
                        <td class="col-align-left"></td>
                    </tr>
                    <tr>
                        <td class="">
                            <div class="dropdown">
                                <a class="fa fa-cog dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a class="pickup" data-id="20071"><i
                                                class="fa fa-heart"></i> Nhận chăm sóc</a></li>
                                </ul>
                            </div>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=55815">55815</a>
                        </td>
                        <td class="col-align-left"><a
                                href="https://erp.nhanh.vn/crm/account/view?id=20071">chị Hiền ( Dat
                                kd2 được giới thiệu)</a></td>
                        <td class="col-align-left text-success"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=55815"><i
                                    class="fa fa-check text-success"></i> 30/11/2029</a></td>
                        <td class="col-align-left">Gói Phần mềm quản lý fanpage dài hạn</td>
                        <td class="col-align-left"></td>
                    </tr>
                    <tr class="even">
                        <td class="">
                            <div class="dropdown">
                                <a class="fa fa-cog dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a class="pickup" data-id="20005"><i
                                                class="fa fa-heart"></i> Nhận chăm sóc</a></li>
                                </ul>
                            </div>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=55132">55132</a>
                        </td>
                        <td class="col-align-left"><a
                                href="https://erp.nhanh.vn/crm/account/view?id=20005">Chị Trang</a>
                        </td>
                        <td class="col-align-left text-success"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=55132"><i
                                    class="fa fa-check text-success"></i> 20/11/2029</a></td>
                        <td class="col-align-left">Gói STARTER dài hạn - QLBH</td>
                        <td class="col-align-left"></td>
                    </tr>
                    <tr>
                        <td class="">
                            <div class="dropdown">
                                <a class="fa fa-cog dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a class="pickup" data-id="19886"><i
                                                class="fa fa-heart"></i> Nhận chăm sóc</a></li>
                                </ul>
                            </div>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=55180">55180</a>
                        </td>
                        <td class="col-align-left"><a
                                href="https://erp.nhanh.vn/crm/account/view?id=19886">Nguyễn Văn
                                Lên</a></td>
                        <td class="col-align-left text-success"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=55180"><i
                                    class="fa fa-check text-success"></i> 20/11/2029</a></td>
                        <td class="col-align-left">Gói STARTER dài hạn - QLBH</td>
                        <td class="col-align-left"></td>
                    </tr>
                    <tr class="even">
                        <td class="">
                            <div class="dropdown">
                                <a class="fa fa-cog dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a class="pickup" data-id="19884"><i
                                                class="fa fa-heart"></i> Nhận chăm sóc</a></li>
                                </ul>
                            </div>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=54962">54962</a>
                        </td>
                        <td class="col-align-left"><a
                                href="https://erp.nhanh.vn/crm/account/view?id=19884">Đinh Thanh
                                Tùng</a></td>
                        <td class="col-align-left text-success"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=54962"><i
                                    class="fa fa-check text-success"></i> 13/11/2029</a></td>
                        <td class="col-align-left">Gói Combo 20 cửa hàng Premium dài hạn</td>
                        <td class="col-align-left"></td>
                    </tr>
                    <tr>
                        <td class="">
                            <div class="dropdown">
                                <a class="fa fa-cog dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a class="pickup" data-id="19723"><i
                                                class="fa fa-heart"></i> Nhận chăm sóc</a></li>
                                </ul>
                            </div>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=54634">54634</a>
                        </td>
                        <td class="col-align-left"><a
                                href="https://erp.nhanh.vn/crm/account/view?id=19723">Nguyễn Trọng
                                Tùng</a></td>
                        <td class="col-align-left text-success"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=54634"><i
                                    class="fa fa-check text-success"></i> 28/10/2029</a></td>
                        <td class="col-align-left">Gói STARTER dài hạn - QLBH</td>
                        <td class="col-align-left"></td>
                    </tr>
                    <tr class="even">
                        <td class="">
                            <div class="dropdown">
                                <a class="fa fa-cog dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a class="pickup" data-id="19521"><i
                                                class="fa fa-heart"></i> Nhận chăm sóc</a></li>
                                </ul>
                            </div>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=53864">53864</a>
                        </td>
                        <td class="col-align-left"><a
                                href="https://erp.nhanh.vn/crm/account/view?id=19521">Cty Bột Mì
                                Thiện Phát</a></td>
                        <td class="col-align-left text-success"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=53864"><i
                                    class="fa fa-check text-success"></i> 03/10/2029</a></td>
                        <td class="col-align-left">Gói PREMIUM dài hạn - QLBH</td>
                        <td class="col-align-left"></td>
                    </tr>
                    <tr>
                        <td class="">
                            <div class="dropdown">
                                <a class="fa fa-cog dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a class="pickup" data-id="15372"><i
                                                class="fa fa-heart"></i> Nhận chăm sóc</a></li>
                                </ul>
                            </div>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=53822">53822</a>
                        </td>
                        <td class="col-align-left"><a
                                href="https://erp.nhanh.vn/crm/account/view?id=15372">Zuna Nhiên</a>
                        </td>
                        <td class="col-align-left text-success"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=53822"><i
                                    class="fa fa-check text-success"></i> 02/10/2029</a></td>
                        <td class="col-align-left">Gói STARTER dài hạn - QLBH</td>
                        <td class="col-align-left"></td>
                    </tr>
                    <tr class="even">
                        <td class="">
                            <div class="dropdown">
                                <a class="fa fa-cog dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a class="pickup" data-id="19455"><i
                                                class="fa fa-heart"></i> Nhận chăm sóc</a></li>
                                </ul>
                            </div>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=53655">53655</a>
                        </td>
                        <td class="col-align-left"><a
                                href="https://erp.nhanh.vn/crm/account/view?id=19455">chị ngọc</a>
                        </td>
                        <td class="col-align-left text-success"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=53655"><i
                                    class="fa fa-check text-success"></i> 29/09/2029</a></td>
                        <td class="col-align-left">Gói BASIC 2 dài hạn - QLBH</td>
                        <td class="col-align-left"></td>
                    </tr>
                    <tr>
                        <td class="">
                            <div class="dropdown">
                                <a class="fa fa-cog dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a class="pickup" data-id="19256"><i
                                                class="fa fa-heart"></i> Nhận chăm sóc</a></li>
                                </ul>
                            </div>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=53037">53037</a>
                        </td>
                        <td class="col-align-left"><a
                                href="https://erp.nhanh.vn/crm/account/view?id=19256">Trần Duy
                                Khánh</a></td>
                        <td class="col-align-left text-success"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=53037"><i
                                    class="fa fa-check text-success"></i> 15/09/2029</a></td>
                        <td class="col-align-left">Gói Website dài hạn</td>
                        <td class="col-align-left"></td>
                    </tr>
                    <tr class="even">
                        <td class="">
                            <div class="dropdown">
                                <a class="fa fa-cog dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a class="pickup" data-id="19091"><i
                                                class="fa fa-heart"></i> Nhận chăm sóc</a></li>
                                </ul>
                            </div>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=52416">52416</a>
                        </td>
                        <td class="col-align-left"><a
                                href="https://erp.nhanh.vn/crm/account/view?id=19091">Trịnh Quốc
                                Nhật</a></td>
                        <td class="col-align-left text-success"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=52416"><i
                                    class="fa fa-check text-success"></i> 28/08/2029</a></td>
                        <td class="col-align-left">Gói PREMIUM dài hạn - QLBH</td>
                        <td class="col-align-left"></td>
                    </tr>
                    <tr>
                        <td class="">
                            <div class="dropdown">
                                <a class="fa fa-cog dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a class="pickup" data-id="18920"><i
                                                class="fa fa-heart"></i> Nhận chăm sóc</a></li>
                                </ul>
                            </div>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=52035">52035</a>
                        </td>
                        <td class="col-align-left"><a
                                href="https://erp.nhanh.vn/crm/account/view?id=18920">Chị Hà</a>
                        </td>
                        <td class="col-align-left text-success"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=52035"><i
                                    class="fa fa-check text-success"></i> 19/08/2029</a></td>
                        <td class="col-align-left">Gói BASIC 2 dài hạn - QLBH</td>
                        <td class="col-align-left"></td>
                    </tr>
                    <tr class="even">
                        <td class="">
                            <div class="dropdown">
                                <a class="fa fa-cog dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a class="pickup" data-id="18778"><i
                                                class="fa fa-heart"></i> Nhận chăm sóc</a></li>
                                </ul>
                            </div>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=50789">50789</a>
                        </td>
                        <td class="col-align-left"><a
                                href="https://erp.nhanh.vn/crm/account/view?id=18778">Trương Kiều
                                Dương</a></td>
                        <td class="col-align-left text-success"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=50789"><i
                                    class="fa fa-check text-success"></i> 31/07/2029</a></td>
                        <td class="col-align-left">Gói ENTERPRISE dài hạn - QLBH</td>
                        <td class="col-align-left"></td>
                    </tr>
                    <tr>
                        <td class="">
                            <div class="dropdown">
                                <a class="fa fa-cog dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a class="pickup" data-id="18661"><i
                                                class="fa fa-heart"></i> Nhận chăm sóc</a></li>
                                </ul>
                            </div>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=51146">51146</a>
                        </td>
                        <td class="col-align-left"><a
                                href="https://erp.nhanh.vn/crm/account/view?id=18661">BonBon
                                shop</a></td>
                        <td class="col-align-left text-success"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=51146"><i
                                    class="fa fa-check text-success"></i> 25/07/2029</a></td>
                        <td class="col-align-left">Gói STARTER dài hạn - QLBH</td>
                        <td class="col-align-left"></td>
                    </tr>
                    <tr class="even">
                        <td class="">
                            <div class="dropdown">
                                <a class="fa fa-cog dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a class="pickup" data-id="19151"><i
                                                class="fa fa-heart"></i> Nhận chăm sóc</a></li>
                                </ul>
                            </div>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=50525">50525</a>
                        </td>
                        <td class="col-align-left"><a
                                href="https://erp.nhanh.vn/crm/account/view?id=19151">elsa, chị
                                Nguyêt</a></td>
                        <td class="col-align-left text-success"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=50525"><i
                                    class="fa fa-check text-success"></i> 12/07/2029</a></td>
                        <td class="col-align-left">Gói STARTER dài hạn - QLBH</td>
                        <td class="col-align-left"></td>
                    </tr>
                    <tr>
                        <td class="">
                            <div class="dropdown">
                                <a class="fa fa-cog dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a class="pickup" data-id="18408"><i
                                                class="fa fa-heart"></i> Nhận chăm sóc</a></li>
                                </ul>
                            </div>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=50174">50174</a>
                        </td>
                        <td class="col-align-left"><a
                                href="https://erp.nhanh.vn/crm/account/view?id=18408">Anh Hưng</a>
                        </td>
                        <td class="col-align-left text-success"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=50174"><i
                                    class="fa fa-check text-success"></i> 01/07/2029</a></td>
                        <td class="col-align-left">Gói BASIC 2 dài hạn - QLBH</td>
                        <td class="col-align-left"></td>
                    </tr>
                    <tr class="even">
                        <td class="">
                            <div class="dropdown">
                                <a class="fa fa-cog dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a class="pickup" data-id="17863"><i
                                                class="fa fa-heart"></i> Nhận chăm sóc</a></li>
                                </ul>
                            </div>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=48737">48737</a>
                        </td>
                        <td class="col-align-left"><a
                                href="https://erp.nhanh.vn/crm/account/view?id=17863">Chị Khanh</a>
                        </td>
                        <td class="col-align-left text-success"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=48737"><i
                                    class="fa fa-check text-success"></i> 30/05/2029</a></td>
                        <td class="col-align-left">Gói thêm tính năng mới</td>
                        <td class="col-align-left"></td>
                    </tr>
                    <tr>
                        <td class="">
                            <div class="dropdown">
                                <a class="fa fa-cog dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a class="pickup" data-id="17911"><i
                                                class="fa fa-heart"></i> Nhận chăm sóc</a></li>
                                </ul>
                            </div>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=47092">47092</a>
                        </td>
                        <td class="col-align-left"><a
                                href="https://erp.nhanh.vn/crm/account/view?id=17911">CÔNG TY TNHH
                                QUỐC TẾ KIDMART</a></td>
                        <td class="col-align-left text-success"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=47092"><i
                                    class="fa fa-check text-success"></i> 28/05/2029</a></td>
                        <td class="col-align-left">Gói STARTER dài hạn - QLBH</td>
                        <td class="col-align-left"></td>
                    </tr>
                    <tr class="even">
                        <td class="">
                            <div class="dropdown">
                                <a class="fa fa-cog dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a class="pickup" data-id="17769"><i
                                                class="fa fa-heart"></i> Nhận chăm sóc</a></li>
                                </ul>
                            </div>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=48302">48302</a>
                        </td>
                        <td class="col-align-left"><a
                                href="https://erp.nhanh.vn/crm/account/view?id=17769">A Tấn</a></td>
                        <td class="col-align-left text-success"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=48302"><i
                                    class="fa fa-check text-success"></i> 25/05/2029</a></td>
                        <td class="col-align-left">Gói BASIC 2 dài hạn - QLBH</td>
                        <td class="col-align-left"></td>
                    </tr>
                    <tr>
                        <td class="">
                            <div class="dropdown">
                                <a class="fa fa-cog dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a class="pickup" data-id="17642"><i
                                                class="fa fa-heart"></i> Nhận chăm sóc</a></li>
                                </ul>
                            </div>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=47980">47980</a>
                        </td>
                        <td class="col-align-left"><a
                                href="https://erp.nhanh.vn/crm/account/view?id=17642">CÔNG TY CỔ
                                PHẦN CÔNG NGHỆ THÔNG TIN AQ VIỆT NAM (SIEUTHISUA.COM)</a></td>
                        <td class="col-align-left text-success"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=47980"><i
                                    class="fa fa-check text-success"></i> 16/05/2029</a></td>
                        <td class="col-align-left">Gói Website khởi nghiệp dài hạn</td>
                        <td class="col-align-left"></td>
                    </tr>
                    <tr class="even">
                        <td class="">
                            <div class="dropdown">
                                <a class="fa fa-cog dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a class="pickup" data-id="17626"><i
                                                class="fa fa-heart"></i> Nhận chăm sóc</a></li>
                                </ul>
                            </div>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=48005">48005</a>
                        </td>
                        <td class="col-align-left"><a
                                href="https://erp.nhanh.vn/crm/account/view?id=17626">ART FOR
                                ARCH-xưởng tranh sơn dầu Đà Nẵng</a></td>
                        <td class="col-align-left text-success"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=48005"><i
                                    class="fa fa-check text-success"></i> 15/05/2029</a></td>
                        <td class="col-align-left">Gói BASIC 2 dài hạn - QLBH</td>
                        <td class="col-align-left"></td>
                    </tr>
                    <tr>
                        <td class="">
                            <div class="dropdown">
                                <a class="fa fa-cog dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a class="pickup" data-id="17235"><i
                                                class="fa fa-heart"></i> Nhận chăm sóc</a></li>
                                </ul>
                            </div>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=47162">47162</a>
                        </td>
                        <td class="col-align-left"><a
                                href="https://erp.nhanh.vn/crm/account/view?id=17235">chị Hằng bán
                                thực phẩm chức năng</a></td>
                        <td class="col-align-left text-success"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=47162"><i
                                    class="fa fa-check text-success"></i> 22/04/2029</a></td>
                        <td class="col-align-left">Gói BASIC 1 dài hạn - QLBH</td>
                        <td class="col-align-left"></td>
                    </tr>
                    <tr class="even">
                        <td class="">
                            <div class="dropdown">
                                <a class="fa fa-cog dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a class="pickup" data-id="17181"><i
                                                class="fa fa-heart"></i> Nhận chăm sóc</a></li>
                                </ul>
                            </div>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=46929">46929</a>
                        </td>
                        <td class="col-align-left"><a
                                href="https://erp.nhanh.vn/crm/account/view?id=17181">Ponhi
                                House</a></td>
                        <td class="col-align-left text-success"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=46929"><i
                                    class="fa fa-check text-success"></i> 20/04/2029</a></td>
                        <td class="col-align-left">Gói STARTER dài hạn - QLBH</td>
                        <td class="col-align-left"></td>
                    </tr>
                    <tr>
                        <td class="">
                            <div class="dropdown">
                                <a class="fa fa-cog dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a class="pickup" data-id="16867"><i
                                                class="fa fa-heart"></i> Nhận chăm sóc</a></li>
                                </ul>
                            </div>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=45938">45938</a>
                        </td>
                        <td class="col-align-left"><a
                                href="https://erp.nhanh.vn/crm/account/view?id=16867">Chị Đào</a>
                        </td>
                        <td class="col-align-left text-success"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=45938"><i
                                    class="fa fa-check text-success"></i> 23/03/2029</a></td>
                        <td class="col-align-left">Gói STARTER dài hạn - QLBH</td>
                        <td class="col-align-left"></td>
                    </tr>
                    <tr class="even">
                        <td class="">
                            <div class="dropdown">
                                <a class="fa fa-cog dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a class="pickup" data-id="16821"><i
                                                class="fa fa-heart"></i> Nhận chăm sóc</a></li>
                                </ul>
                            </div>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=45711">45711</a>
                        </td>
                        <td class="col-align-left"><a
                                href="https://erp.nhanh.vn/crm/account/view?id=16821">Đồ hình
                                thú_Pijama hình thú</a></td>
                        <td class="col-align-left text-success"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=45711"><i
                                    class="fa fa-check text-success"></i> 20/03/2029</a></td>
                        <td class="col-align-left">Gói STARTER dài hạn - QLBH</td>
                        <td class="col-align-left"></td>
                    </tr>
                    <tr>
                        <td class="">
                            <div class="dropdown">
                                <a class="fa fa-cog dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a class="pickup" data-id="16671"><i
                                                class="fa fa-heart"></i> Nhận chăm sóc</a></li>
                                </ul>
                            </div>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=44660">44660</a>
                        </td>
                        <td class="col-align-left"><a
                                href="https://erp.nhanh.vn/crm/account/view?id=16671">Thuong Ngoc
                                Fresh Food</a></td>
                        <td class="col-align-left text-success"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=44660"><i
                                    class="fa fa-check text-success"></i> 10/03/2029</a></td>
                        <td class="col-align-left">Gói Website dài hạn</td>
                        <td class="col-align-left"></td>
                    </tr>
                    <tr class="even">
                        <td class="">
                            <div class="dropdown">
                                <a class="fa fa-cog dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a class="pickup" data-id="16471"><i
                                                class="fa fa-heart"></i> Nhận chăm sóc</a></li>
                                </ul>
                            </div>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=44759">44759</a>
                        </td>
                        <td class="col-align-left"><a
                                href="https://erp.nhanh.vn/crm/account/view?id=16471">Lê Thị
                                Thúy</a></td>
                        <td class="col-align-left text-success"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=44759"><i
                                    class="fa fa-check text-success"></i> 22/02/2029</a></td>
                        <td class="col-align-left">Gói BASIC 2 dài hạn - QLBH</td>
                        <td class="col-align-left"></td>
                    </tr>
                    <tr>
                        <td class="">
                            <div class="dropdown">
                                <a class="fa fa-cog dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a class="pickup" data-id="20427"><i
                                                class="fa fa-heart"></i> Nhận chăm sóc</a></li>
                                </ul>
                            </div>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=57265">57265</a>
                        </td>
                        <td class="col-align-left"><a
                                href="https://erp.nhanh.vn/crm/account/view?id=20427">Lưu Chí
                                Cường</a></td>
                        <td class="col-align-left text-success"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=57265"><i
                                    class="fa fa-check text-success"></i> 01/02/2029</a></td>
                        <td class="col-align-left">Gói Premium - QLBH</td>
                        <td class="col-align-left"></td>
                    </tr>
                    <tr class="even">
                        <td class="">
                            <div class="dropdown">
                                <a class="fa fa-cog dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a class="pickup" data-id="16239"><i
                                                class="fa fa-heart"></i> Nhận chăm sóc</a></li>
                                </ul>
                            </div>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=44387">44387</a>
                        </td>
                        <td class="col-align-left"><a
                                href="https://erp.nhanh.vn/crm/account/view?id=16239">CÔNG TY TNHH
                                NĂNG LƯỢNG THẾ GIỚI</a></td>
                        <td class="col-align-left text-success"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=44387"><i
                                    class="fa fa-check text-success"></i> 30/01/2029</a></td>
                        <td class="col-align-left">Gói Website dài hạn</td>
                        <td class="col-align-left"></td>
                    </tr>
                    <tr>
                        <td class="">
                            <div class="dropdown">
                                <a class="fa fa-cog dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a class="pickup" data-id="16289"><i
                                                class="fa fa-heart"></i> Nhận chăm sóc</a></li>
                                </ul>
                            </div>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=44059">44059</a>
                        </td>
                        <td class="col-align-left"><a
                                href="https://erp.nhanh.vn/crm/account/view?id=16289">Ngọc Thùy
                                Trang</a></td>
                        <td class="col-align-left text-success"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=44059"><i
                                    class="fa fa-check text-success"></i> 20/01/2029</a></td>
                        <td class="col-align-left">Gói phần mềm tích hợp API sàn TMĐT</td>
                        <td class="col-align-left"></td>
                    </tr>
                    <tr class="even">
                        <td class="">
                            <div class="dropdown">
                                <a class="fa fa-cog dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a class="pickup" data-id="16123"><i
                                                class="fa fa-heart"></i> Nhận chăm sóc</a></li>
                                </ul>
                            </div>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=43097">43097</a>
                        </td>
                        <td class="col-align-left"><a
                                href="https://erp.nhanh.vn/crm/account/view?id=16123">Đỗ Duy
                                Hiên</a></td>
                        <td class="col-align-left text-success"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=43097"><i
                                    class="fa fa-check text-success"></i> 24/12/2028</a></td>
                        <td class="col-align-left">Gói BASIC 2 dài hạn - QLBH</td>
                        <td class="col-align-left"></td>
                    </tr>
                    <tr>
                        <td class="">
                            <div class="dropdown">
                                <a class="fa fa-cog dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a class="pickup" data-id="16154"><i
                                                class="fa fa-heart"></i> Nhận chăm sóc</a></li>
                                </ul>
                            </div>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=42824">42824</a>
                        </td>
                        <td class="col-align-left"><a
                                href="https://erp.nhanh.vn/crm/account/view?id=16154">Trung Tâm Phân
                                Phối Nhựa Duy Tân Chính Hãng</a></td>
                        <td class="col-align-left text-success"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=42824"><i
                                    class="fa fa-check text-success"></i> 15/12/2028</a></td>
                        <td class="col-align-left">Gói Website dài hạn</td>
                        <td class="col-align-left"></td>
                    </tr>
                    <tr class="even">
                        <td class="">
                            <div class="dropdown">
                                <a class="fa fa-cog dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a class="pickup" data-id="15562"><i
                                                class="fa fa-heart"></i> Nhận chăm sóc</a></li>
                                </ul>
                            </div>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=41539">41539</a>
                        </td>
                        <td class="col-align-left"><a
                                href="https://erp.nhanh.vn/crm/account/view?id=15562">Anh Đài</a>
                        </td>
                        <td class="col-align-left text-success"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=41539"><i
                                    class="fa fa-check text-success"></i> 26/10/2028</a></td>
                        <td class="col-align-left">Gói phần mềm theo yêu cầu</td>
                        <td class="col-align-left"></td>
                    </tr>
                    <tr>
                        <td class="">
                            <div class="dropdown">
                                <a class="fa fa-cog dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a class="pickup" data-id="3177"><i class="fa fa-heart"></i>
                                            Nhận chăm sóc</a></li>
                                </ul>
                            </div>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=3145">3145</a>
                        </td>
                        <td class="col-align-left"><a
                                href="https://erp.nhanh.vn/crm/account/view?id=3177">Đào Thị Hà</a>
                        </td>
                        <td class="col-align-left text-success"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=3145"><i
                                    class="fa fa-check text-success"></i> 15/10/2028</a></td>
                        <td class="col-align-left">Phí duy trì Website</td>
                        <td class="col-align-left"></td>
                    </tr>
                    <tr class="even">
                        <td class="">
                            <div class="dropdown">
                                <a class="fa fa-cog dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a class="pickup" data-id="15010"><i
                                                class="fa fa-heart"></i> Nhận chăm sóc</a></li>
                                </ul>
                            </div>
                        </td>
                        <td class="col-align-right"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=39812">39812</a>
                        </td>
                        <td class="col-align-left"><a
                                href="https://erp.nhanh.vn/crm/account/view?id=15010">Nguyễn Minh
                                Hùng</a></td>
                        <td class="col-align-left text-success"><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=39812"><i
                                    class="fa fa-check text-success"></i> 23/08/2028</a></td>
                        <td class="col-align-left">Gói Premium - QLBH</td>
                        <td class="col-align-left"></td>
                    </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div class="col-md-6 paginatorItem">
                    <div class="paginator"><span class="labelPages">1 - 50 / 20,476</span><span
                            class="disabled fa fa-step-backward"></span><span
                            class="disabled fa fa-backward"></span><a class="fa fa-forward"
                            href="https://erp.nhanh.vn/crm/customer/productexpired?page=2"
                            title="Trang sau"></a> <a class="fa fa-step-forward"
                            href="https://erp.nhanh.vn/crm/customer/productexpired?page=410"
                            title="Trang cuối"></a></div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <hr>
        <div class="page-description">
            <div class="col-md-1" style="text-align: center;">
                <i class="fa fa-lightbulb-o fontsize-150"></i>
            </div>
            <div class="col-md-11">
                <ul>
                    <li>Bấm nút <i class="fa fa-cog"></i> ở mỗi dòng để chọn thao tác với khách hàng
                    </li>
                    <li>Chú ý: cho đến thời điểm hợp đồng mới được thanh toán lần đầu tiên, khách
                        hàng mới rời khỏi bảng này</li>
                </ul>
            </div>
        </div>
        <div class="modal fade" tabindex="-1" role="dialog" id="confirmPickupModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Nhận chăm sóc</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-info">
                            Bạn muốn nhận chăm sóc khách hàng <span class="accountName"></span> ?
                        </div>
                        <input type="hidden" class="referId" value="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-save">Có</button>
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Không</button>

                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" tabindex="-1" role="dialog" id="successModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Thành công</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-success">
                            Bạn đã nhận chăm sóc nhân viên thành công. Bấm vào link khách hàng để về
                            trang chi tiết khách hàng.
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" tabindex="-1" role="dialog" id="errorModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Thất bại</h4>
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
        <div class="modal fade" tabindex="-1" role="dialog" id="confirmAssignModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Bàn giao</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-info">
                            <p><i class="fa fa-hand-o-right"></i> Bạn muốn bàn giao khách hàng <span
                                    class="accountName"></span> cho</p>
                            <input type="text"
                                class="assignToName form-control ui-autocomplete-input"
                                placeholder="Nhân viên" autocomplete="off">
                        </div>
                        <input type="hidden" class="referId" value="">
                        <input type="hidden" class="assignToId">
                        <ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content"
                            id="ui-id-1" tabindex="0" style="display: none;"></ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-save">Có</button>
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Không</button>
                    </div>
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
    <script type="text/javascript" src="{{ asset('asset/js/crm/customer/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/customer/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/customer/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/customer/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/customer/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/customer/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/customer/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/customer/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/customer/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/customer/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/customer/productexpired.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/customer/bootstrap-multiselect.js') }}"></script>

@endsection
    