@extends('Layout.master')

@section('title','Danh sách requirement')
    
@section('css')
	<link rel="stylesheet" href="{{ asset('asset/css/crm/requirement/style.css') }}" type="text/css">
@endsection

@section('content-page')
    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li class="active">Danh sách thông tin</li>
        </ul>
        <div class="filterContainer">
            <form method="GET" name="crmAccountFilter" class="form-inline lolify" role="form"
                id="crmAccountFilter">
                <div class="col-md-10 lolify-default">

                    <div class="form-group">
                        <input type="text" name="startDaterangepicker"
                            class="form-control date-range-picker" placeholder="Ngày bắt đầu"
                            id="startDaterangepicker" value=""> </div>
                    <div class="form-group">
                        <input type="text" name="endDaterangepicker"
                            class="form-control date-range-picker" placeholder="Ngày kết thúc"
                            id="endDaterangepicker" value=""> </div>
                    <div class="form-group">
                        <input type="text" name="createdrangepicker"
                            class="form-control date-range-picker" placeholder="Ngày tạo"
                            id="createdrangepicker" value=""> </div>
                    <div class="form-group">
                        <input type="text" name="confirmrangepicker"
                            class="form-control date-range-picker" placeholder="Ngày thực hiện"
                            id="confirmrangepicker" value=""> </div>
                    <div class="form-group">
                        <input type="text" name="id" maxlength="255" placeholder="ID" id="id"
                            class="form-control" value=""> </div>
                    <div class="form-group">
                        <input type="text" name="contractId" maxlength="255"
                            placeholder="ID Hợp đồng" id="contractId" class="form-control" value="">
                    </div>
                    <input type="hidden" name="companyId" id="companyId" class="form-control"
                        value="319">
                    <div class="form-group">
                        <input type="text" name="customerName" placeholder="Tên/website/email"
                            id="customerName" class="form-control" value=""> </div>
                    <input type="hidden" name="createdById" id="createdById" class="form-control"
                        value=""> <input type="hidden" name="confirmedById" id="confirmedById"
                        class="form-control" value=""> <input type="hidden" name="checkedById"
                        id="checkedById" class="form-control" value="">
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
                            <li><a href="https://erp.nhanh.vn/crm/requirement/addvg"><i
                                        class="fa fa-plus"></i> Thêm yêu cầu</a></li>
                            <li><a href="https://erp.nhanh.vn/crm/requirement/indexnocontractvg#"
                                    id="exportExcel"><i class="fa fa-file-excel-o"></i> Xuất excel
                                    trang hiện tại</a></li>
                            <li><a id="exportAll"><i class="fa fa-file-excel-o"></i> Xuất excel toàn
                                    bộ</a></li>
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
                        <input type="text" name="mobile" maxlength="16" placeholder="Số điện thoại"
                            id="mobile" class="form-control" value=""> </div>
                    <div class="form-group">
                        <select name="status" id="status" class="form-control">
                            <option value="">- Trạng thái -</option>
                            <option value="1">Mới</option>
                            <option value="2">Đã Duyệt</option>
                            <option value="3">Không duyệt</option>
                            <option value="4">Đã Nhận</option>
                            <option value="5">Không nhận</option>
                            <option value="6">Đã giao việc</option>
                            <option value="7">Hoàn thành</option>
                            <option value="8">Thất bại</option>
                            <option value="9">Tách HĐ</option>
                        </select> </div>
                    <div class="form-group">
                        <select name="valueType" id="valueType" class="form-control">
                            <option value="">- Tài khoản -</option>
                            <option value="5">Không có tài khoản</option>
                            <option value="1">Tài khoản Chính</option>
                            <option value="2">Tài khoản Marketing</option>
                        </select> </div>
                    <div class="form-group">
                        <input type="text" name="createdByName" placeholder="Người tạo"
                            id="createdByName" class="form-control ui-autocomplete-input" value=""
                            autocomplete="off"> </div>
                    <div class="form-group">
                        <input type="text" name="confirmedByName" placeholder="Người thực hiện"
                            id="confirmedByName" class="form-control ui-autocomplete-input" value=""
                            autocomplete="off"> </div>
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
                                <option value="576">SMS Brandname</option>
                                <option value="579">Gói khởi tạo và Decor gian hàng</option>
                                <option value="583">Gói chăm sóc gian hàng chuyên nghiệp</option>
                                <option value="586">Gói chăm sóc website seo cơ bản</option>
                                <option value="587">Gói chăm sóc website seo tối ưu</option>
                                <option value="588">Gói Hỗ trợ và định hướng content seo</option>
                                <option value="589">Gói Tool quét data facebook</option>
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
                                <option value="237">Gian hàng Premium</option>
                                <option value="240">Gian hàng thu CPA</option>
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
                                <option value="288">Lipo (gói thường)</option>
                                <option value="289">Lipo (gói nâng cao)</option>
                                <option value="290">Lipo (gói cao cấp)</option>
                                <option value="311">wePOS (basic)</option>
                                <option value="312">wePOS (starter)</option>
                                <option value="313">wePOS (advanced)</option>
                                <option value="314">wePOS (premium)</option>
                                <option value="315">wePOS (diamond)</option>
                                <option value="331">Quản trị Fanpage Basic - WeSave</option>
                                <option value="332">Quản trị Fanpage Standard - WeSave</option>
                                <option value="333">Quản trị Fanpage Business - WeSave</option>
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
                            </optgroup>
                            <optgroup label="Công ty TNHH Nguồn Nhân Lực Elite Việt Nam">
                                <option value="592">Dịch vụ tuyển dụng</option>
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
                                                type="checkbox" value="576"> SMS
                                            Brandname</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="579"> Gói khởi tạo và Decor
                                            gian hàng</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="583"> Gói chăm sóc gian hàng
                                            chuyên nghiệp</label></a></li>
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
                                                type="checkbox" value="237"> Gian hàng
                                            Premium</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="240"> Gian hàng thu
                                            CPA</label></a></li>
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
                                                type="checkbox" value="288"> Lipo (gói
                                            thường)</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="289"> Lipo (gói nâng
                                            cao)</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="290"> Lipo (gói cao
                                            cấp)</label></a></li>
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
                                                type="checkbox" value="331"> Quản trị Fanpage Basic
                                            - WeSave</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="332"> Quản trị Fanpage
                                            Standard - WeSave</label></a></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="333"> Quản trị Fanpage
                                            Business - WeSave</label></a></li>
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
                                <li class="multiselect-item group"><label
                                        class="multiselect-group">Công ty TNHH Nguồn Nhân Lực Elite
                                        Việt Nam</label></li>
                                <li><a href="javascript:void(0);"><label class="checkbox"><input
                                                type="checkbox" value="592"> Dịch vụ tuyển
                                            dụng</label></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="form-group">
                        <select name="contractType" id="contractType" class="form-control">
                            <option value="">- Loại yêu cầu -</option>
                            <option value="1">Yêu cầu thực hiện trước</option>
                            <option value="-1">Yêu cầu thực hiện đã có hợp đồng</option>
                        </select> </div>
                    <div class="form-group">
                        <select name="employeeStartedDate" id="employeeStartedDate"
                            class="form-control">
                            <option value="">- Yêu cầu của nhân viên -</option>
                            <option value="-1">Nhân viên dưới 3 tháng</option>
                            <option value="1">Nhân viên trên 3 tháng</option>
                        </select> </div>

                </div>
            </form>
            <div class="clearfix"></div>
            <div class="lolify-left-menu" style="display: none;">
            </div>
        </div>
        <div>

        </div>
        <div class="dgContainer">
            <div style="display: none; width: 1556px;" class="stickyHeader">
                <table class="table table-bordered" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr class="even">
                            <th rowspan="2" style="width: 50px;">ID</th>
                            <th rowspan="2" style="width: 443px;">Khách hàng</th>
                            <th colspan="3" style="width: 313px;">Bên yêu cầu</th>
                            <th colspan="6" style="width: 647px;">Bên thực hiện</th>
                            <th rowspan="2" style="width: 76px;">Trạng thái</th>
                            <th rowspan="2" style="width: 26px;"><i class="fa fa-cog icon"></i></th>
                        </tr>
                        <tr>
                            <th style="width: 150px;">Người yêu cầu</th>
                            <th style="width: 92px;">Sản phẩm </th>
                            <th style="width: 71px;">Số tiền </th>
                            <th style="width: 136px;">Người kích hoạt cuối</th>
                            <th style="width: 170px;">Thời gian DV </th>
                            <th style="width: 71px;">Số tiền </th>
                            <th style="width: 108px;">Phí duy trì (Khác) </th>
                            <th style="width: 78px;">Khuyến mại </th>
                            <th style="width: 84px;">Tổng tiền TH </th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div class="col-md-6 paginatorItem">
                    <div class="paginator"><span class="labelPages">1 - 30 / 2,417</span><span
                            class="disabled fa fa-step-backward"></span><span
                            class="disabled fa fa-backward"></span><a class="fa fa-forward"
                            href="https://erp.nhanh.vn/crm/requirement/indexnocontractvg?page=2"
                            title="Trang sau"></a> <a class="fa fa-step-forward"
                            href="https://erp.nhanh.vn/crm/requirement/indexnocontractvg?page=81"
                            title="Trang cuối"></a></div>
                </div>
                <div style="clear: both;"></div><br>
            </div>
            <table id="dgRequirement" class="table table-bordered">
                <thead>
                    <tr class="even">
                        <th rowspan="2">ID</th>
                        <th rowspan="2">Khách hàng</th>
                        <th colspan="3">Bên yêu cầu</th>
                        <th colspan="6">Bên thực hiện</th>
                        <th rowspan="2">Trạng thái</th>
                        <th rowspan="2"><i class="fa fa-cog icon"></i></th>
                    </tr>
                    <tr class="">
                        <th>Người yêu cầu</th>
                        <th>Sản phẩm </th>
                        <th>Số tiền </th>
                        <th>Người kích hoạt cuối</th>
                        <th>Thời gian DV </th>
                        <th>Số tiền </th>
                        <th>Phí duy trì (Khác) </th>
                        <th>Khuyến mại </th>
                        <th>Tổng tiền TH </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="even">
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=38556">38556</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=9218">PHAN VŨ NHƯ
                                QUỲNH</a></td>
                        <td><span data-toggle="tooltip" data-title="Phòng KD 01"
                                data-original-title="" title="">Phan Vũ Như Quỳnh</span></td>
                        <td>Nạp tiền</td>
                        <td>2.000.000</td>
                        <td><span data-toggle="tooltip" data-title="Rao vặt - THDV"
                                data-original-title="" title="">Nguyễn Nhật Linh</span></td>
                        <td style="width:170px;">29/07/2020 - 29/07/2020</td>
                        <td>2.000.000</td>
                        <td></td>
                        <td>100.000</td>
                        <td>2.100.000</td>
                        <td><a class="label label-success">Hoàn thành</a></td>
                        <td><a data-id="38556" class="fa fa-trash-o del_item"
                                href="https://erp.nhanh.vn/crm/requirement/indexnocontractvg#"></a>
                        </td>
                    </tr>
                    <tr class="">
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=38521">38521</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=9218">PHAN VŨ NHƯ
                                QUỲNH</a></td>
                        <td><span data-toggle="tooltip" data-title="Phòng KD 01">Phan Vũ Như
                                Quỳnh</span></td>
                        <td>Nạp tiền</td>
                        <td>1.000.000</td>
                        <td><span data-toggle="tooltip" data-title="Rao vặt - THDV"
                                data-original-title="" title="">Nguyễn Nhật Linh</span></td>
                        <td style="width:170px;">23/07/2020 - 23/07/2020</td>
                        <td>1.000.000</td>
                        <td></td>
                        <td>50.000</td>
                        <td>1.050.000</td>
                        <td><a class="label label-success">Hoàn thành</a></td>
                        <td><a data-id="38521" class="fa fa-trash-o del_item"
                                href="https://erp.nhanh.vn/crm/requirement/indexnocontractvg#"></a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=38518">38518</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=6922">CÔNG TY CỔ PHẦN
                                CƠ ĐIỆN LIÊN THÀNH VIỆT NAM</a></td>
                        <td><span data-toggle="tooltip" data-title="Phòng KD 01">Trịnh Thị Phương
                                Nhi</span></td>
                        <td>Vchat</td>
                        <td>1.344.000</td>
                        <td><span data-toggle="tooltip" data-title="Vchat">Phạm Phương Thanh</span>
                        </td>
                        <td style="width:170px;">22/07/2020 - 22/01/2021</td>
                        <td>1.344.000</td>
                        <td></td>
                        <td></td>
                        <td>1.344.000</td>
                        <td><a class="label label-success">Hoàn thành</a></td>
                        <td><a data-id="38518" class="fa fa-trash-o del_item"
                                href="https://erp.nhanh.vn/crm/requirement/indexnocontractvg#"></a>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=38495">38495</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=2892">CÔNG TY TNHH
                                CÔNG NGHỆ VÀ MÔI TRƯỜNG TƯỜNG PHÁT</a></td>
                        <td><span data-toggle="tooltip" data-title="Phòng KD 01">Phan Vũ Như
                                Quỳnh</span></td>
                        <td>Nạp tiền</td>
                        <td>1.000.000</td>
                        <td><span data-toggle="tooltip" data-title="Rao vặt - THDV">Nguyễn Nhật
                                Linh</span></td>
                        <td style="width:170px;">20/07/2020 - 20/07/2020</td>
                        <td>1.000.000</td>
                        <td></td>
                        <td>50.000</td>
                        <td>1.050.000</td>
                        <td><a class="label label-success">Hoàn thành</a></td>
                        <td><a data-id="38495" class="fa fa-trash-o del_item"
                                href="https://erp.nhanh.vn/crm/requirement/indexnocontractvg#"></a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=38420">38420</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=2501">CÔNG TY TNHH
                                XUẤT NHẬP KHẨU NGÔI SAO SÀI GÒN</a></td>
                        <td><span data-toggle="tooltip" data-title="Nhóm KD 24">Phan Thành
                                Quang</span></td>
                        <td>GHĐB (mới)</td>
                        <td>3.960.000</td>
                        <td><span data-toggle="tooltip"
                                data-title="Phòng chăm sóc khách hàng - Online">Đào Ngọc Ánh</span>
                        </td>
                        <td style="width:170px;">03/07/2020 - 03/08/2020</td>
                        <td></td>
                        <td>660.000</td>
                        <td></td>
                        <td>660.000</td>
                        <td><a class="label label-success">Hoàn thành</a></td>
                        <td><a data-id="38420" class="fa fa-trash-o del_item"
                                href="https://erp.nhanh.vn/crm/requirement/indexnocontractvg#"></a>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=38410">38410</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=4795">Đỗ Văn Thảo</a>
                        </td>
                        <td><span data-toggle="tooltip" data-title="Phòng KD 8">Đỗ Văn Thảo</span>
                        </td>
                        <td>Nạp tiền</td>
                        <td>400.000</td>
                        <td><span data-toggle="tooltip" data-title="Rao vặt - THDV">Nguyễn Nhật
                                Linh</span></td>
                        <td style="width:170px;">01/07/2020 - 01/07/2020</td>
                        <td>400.000</td>
                        <td></td>
                        <td>20.000</td>
                        <td>420.000</td>
                        <td><a class="label label-success">Hoàn thành</a></td>
                        <td><a data-id="38410" class="fa fa-trash-o del_item"
                                href="https://erp.nhanh.vn/crm/requirement/indexnocontractvg#"></a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=38206">38206</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=2501">CÔNG TY TNHH
                                XUẤT NHẬP KHẨU NGÔI SAO SÀI GÒN</a></td>
                        <td><span data-toggle="tooltip" data-title="Phòng KD 01">Trịnh Thị Phương
                                Nhi</span></td>
                        <td>Vchat</td>
                        <td>710.000</td>
                        <td></td>
                        <td style="width:170px;"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a data-toggle="tooltip" data-title="Phan Vũ Như Quỳnh - Phòng KD 01"
                                class="label label-success">Đã Duyệt</a></td>
                        <td><a data-id="38206" class="fa fa-trash-o del_item"
                                href="https://erp.nhanh.vn/crm/requirement/indexnocontractvg#"></a>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=38190">38190</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=18983">Lưu Thị Sao</a>
                        </td>
                        <td><span data-toggle="tooltip" data-title="Phòng KD ĐDV">Trần Văn Anh
                                Vũ</span></td>
                        <td>Vchat</td>
                        <td>249.000</td>
                        <td></td>
                        <td style="width:170px;"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a class="label label-info">Mới</a></td>
                        <td><a data-id="38190" class="fa fa-trash-o del_item"
                                href="https://erp.nhanh.vn/crm/requirement/indexnocontractvg#"></a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=38182">38182</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=13311">CÔNG TY TNHH
                                ĐIỆN MÁY ÁNH NGÂN</a></td>
                        <td><span data-toggle="tooltip" data-title="Phòng KD 01">Phan Vũ Như
                                Quỳnh</span></td>
                        <td>GHĐB (tái ký)</td>
                        <td>7.920.000</td>
                        <td></td>
                        <td style="width:170px;"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a data-toggle="tooltip" data-title="Phan Vũ Như Quỳnh - Phòng KD 01"
                                class="label label-success">Đã Duyệt</a></td>
                        <td><a data-id="38182" class="fa fa-trash-o del_item"
                                href="https://erp.nhanh.vn/crm/requirement/indexnocontractvg#"></a>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=38100">38100</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=7035">NGUYỄN HỒNG
                                SANG</a></td>
                        <td><span data-toggle="tooltip" data-title="Phòng KD 01">Phan Vũ Như
                                Quỳnh</span></td>
                        <td>GHĐB (tái ký)</td>
                        <td>660.000</td>
                        <td></td>
                        <td style="width:170px;"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a data-toggle="tooltip" data-title="Phan Vũ Như Quỳnh - Phòng KD 01"
                                class="label label-success">Đã Duyệt</a></td>
                        <td><a data-id="38100" class="fa fa-trash-o del_item"
                                href="https://erp.nhanh.vn/crm/requirement/indexnocontractvg#"></a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=37921">37921</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=16611">Lens Shop</a>
                        </td>
                        <td><span data-toggle="tooltip" data-title="Phòng KD 01">Trịnh Thị Phương
                                Nhi</span></td>
                        <td>Nạp tiền</td>
                        <td>500</td>
                        <td></td>
                        <td style="width:170px;"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a data-toggle="tooltip" data-title="Phan Vũ Như Quỳnh - Phòng KD 01"
                                class="label label-success">Đã Duyệt</a></td>
                        <td><a data-id="37921" class="fa fa-trash-o del_item"
                                href="https://erp.nhanh.vn/crm/requirement/indexnocontractvg#"></a>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=37920">37920</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=16611">Lens Shop</a>
                        </td>
                        <td><span data-toggle="tooltip" data-title="Phòng KD 01">Trịnh Thị Phương
                                Nhi</span></td>
                        <td>Nạp tiền</td>
                        <td>500</td>
                        <td></td>
                        <td style="width:170px;"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a class="label label-info">Mới</a></td>
                        <td><a data-id="37920" class="fa fa-trash-o del_item"
                                href="https://erp.nhanh.vn/crm/requirement/indexnocontractvg#"></a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=37725">37725</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=12440">DƯƠNG THỊ
                                NGA</a></td>
                        <td><span data-toggle="tooltip" data-title="Phòng KD 01">Phan Vũ Như
                                Quỳnh</span></td>
                        <td>Vchat</td>
                        <td>212.000</td>
                        <td></td>
                        <td style="width:170px;"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a class="label label-info">Mới</a></td>
                        <td><a data-id="37725" class="fa fa-trash-o del_item"
                                href="https://erp.nhanh.vn/crm/requirement/indexnocontractvg#"></a>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=37502">37502</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=10377">Nguyễn Thành
                                Nghiệp</a></td>
                        <td><span data-toggle="tooltip" data-title="Phòng KD ĐDV">Lê Cát Mộng
                                Linh</span></td>
                        <td>GHĐB (mới)</td>
                        <td>810.000</td>
                        <td><span data-toggle="tooltip" data-title="Rao vặt - THDV">Nguyễn Nhật
                                Linh</span></td>
                        <td style="width:170px;">17/03/2020 - 17/03/2020</td>
                        <td></td>
                        <td>660.000</td>
                        <td>150.000</td>
                        <td>810.000</td>
                        <td><a class="label label-success">Hoàn thành</a></td>
                        <td><a data-id="37502" class="fa fa-trash-o del_item"
                                href="https://erp.nhanh.vn/crm/requirement/indexnocontractvg#"></a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=37482">37482</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=15001">Lê Mộng Cát
                                Linh</a></td>
                        <td><span data-toggle="tooltip" data-title="Phòng KD ĐDV">Lê Cát Mộng
                                Linh</span></td>
                        <td>Nạp tiền</td>
                        <td>1.000.000</td>
                        <td><span data-toggle="tooltip" data-title="Rao vặt - THDV">Nguyễn Nhật
                                Linh</span></td>
                        <td style="width:170px;">13/03/2020 - 13/03/2020</td>
                        <td>1.000.000</td>
                        <td></td>
                        <td>50.000</td>
                        <td>1.050.000</td>
                        <td><a class="label label-success">Hoàn thành</a></td>
                        <td><a data-id="37482" class="fa fa-trash-o del_item"
                                href="https://erp.nhanh.vn/crm/requirement/indexnocontractvg#"></a>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=37413">37413</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=18983">Lưu Thị Sao</a>
                        </td>
                        <td><span data-toggle="tooltip" data-title="Phòng KD ĐDV">Trần Văn Anh
                                Vũ</span></td>
                        <td>Vchat</td>
                        <td>249.000</td>
                        <td><span data-toggle="tooltip" data-title="Vchat">Phạm Phương Thanh</span>
                        </td>
                        <td style="width:170px;">03/03/2020 - 03/04/2020</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a class="label label-success">Hoàn thành</a></td>
                        <td><a data-id="37413" class="fa fa-trash-o del_item"
                                href="https://erp.nhanh.vn/crm/requirement/indexnocontractvg#"></a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=37276">37276</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=5663">CÔNG TY TNHH SẢN
                                XUẤT &amp; THƯƠNG MẠI ĐỒNG KHỞI</a></td>
                        <td><span data-toggle="tooltip" data-title="Phòng KD 01">Phan Vũ Như
                                Quỳnh</span></td>
                        <td>Nạp tiền</td>
                        <td>2.000.000</td>
                        <td></td>
                        <td style="width:170px;"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a data-toggle="tooltip" data-title="Phan Vũ Như Quỳnh - Phòng KD 01"
                                class="label label-success">Đã Duyệt</a></td>
                        <td><a data-id="37276" class="fa fa-trash-o del_item"
                                href="https://erp.nhanh.vn/crm/requirement/indexnocontractvg#"></a>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=37214">37214</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=11209">CÔNG TY TNHH
                                DỊCH VỤ THƯƠNG MẠI XUẤT NHẬP KHẨU NGỌC TINH</a></td>
                        <td><span data-toggle="tooltip" data-title="Phòng KD ĐDV">Trần Văn Anh
                                Vũ</span></td>
                        <td>GHĐB (mới)</td>
                        <td>660.000</td>
                        <td><span data-toggle="tooltip" data-title="Rao vặt - THDV">Nguyễn Nhật
                                Linh</span></td>
                        <td style="width:170px;">17/02/2020 - 17/03/2020</td>
                        <td></td>
                        <td>660.000</td>
                        <td></td>
                        <td>660.000</td>
                        <td><a class="label label-success">Hoàn thành</a></td>
                        <td><a data-id="37214" class="fa fa-trash-o del_item"
                                href="https://erp.nhanh.vn/crm/requirement/indexnocontractvg#"></a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=36911">36911</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/lead/view?id=333781">Nguyễn Văn
                                Nguyện</a></td>
                        <td><span data-toggle="tooltip" data-title="Phòng KD 8">Trần Sơn Nam</span>
                        </td>
                        <td>GHĐB (mới)</td>
                        <td>3.960.000</td>
                        <td></td>
                        <td style="width:170px;"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a class="label label-info">Mới</a></td>
                        <td><a data-id="36911" class="fa fa-trash-o del_item"
                                href="https://erp.nhanh.vn/crm/requirement/indexnocontractvg#"></a>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=36800">36800</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=13844">Trung Tâm Hỗ
                                Trợ Sửa Chữa Điên Máy Xan</a></td>
                        <td><span data-toggle="tooltip" data-title="Phòng KD 01">Trịnh Thị Phương
                                Nhi</span></td>
                        <td>Vchat</td>
                        <td>711.000</td>
                        <td></td>
                        <td style="width:170px;"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a class="label label-info">Mới</a></td>
                        <td><a data-id="36800" class="fa fa-trash-o del_item"
                                href="https://erp.nhanh.vn/crm/requirement/indexnocontractvg#"></a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=36798">36798</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=2854">CÔNG TY TNHH TM
                                DV TIN HỌC AN LỘC</a></td>
                        <td><span data-toggle="tooltip"
                                data-title="Phòng KD Bảo Kim &amp; Wesave">Lê Thảo Quỳnh
                                Dương</span></td>
                        <td>Vchat</td>
                        <td>249.000</td>
                        <td><span data-toggle="tooltip" data-title="Vchat">Phạm Phương Thanh</span>
                        </td>
                        <td style="width:170px;">18/12/2019 - 18/01/2020</td>
                        <td>249.000</td>
                        <td></td>
                        <td></td>
                        <td>249.000</td>
                        <td><a class="label label-success">Hoàn thành</a></td>
                        <td><a data-id="36798" class="fa fa-trash-o del_item"
                                href="https://erp.nhanh.vn/crm/requirement/indexnocontractvg#"></a>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=36483">36483</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/lead/view?id=184206">CÔNG TY CP DAEWOO
                                AN SƯƠNG</a></td>
                        <td><span data-toggle="tooltip"
                                data-title="Phòng KD Bảo Kim &amp; Wesave">Lê Thảo Quỳnh
                                Dương</span></td>
                        <td>Nạp tiền</td>
                        <td>500.000</td>
                        <td><span data-toggle="tooltip" data-title="Rao vặt - THDV">Nguyễn Nhật
                                Linh</span></td>
                        <td style="width:170px;">25/11/2019 - 25/11/2019</td>
                        <td>500.000</td>
                        <td></td>
                        <td>25.000</td>
                        <td>525.000</td>
                        <td><a class="label label-success">Hoàn thành</a></td>
                        <td><a data-id="36483" class="fa fa-trash-o del_item"
                                href="https://erp.nhanh.vn/crm/requirement/indexnocontractvg#"></a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=36479">36479</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=10418">CôNG TY Cổ PHầN
                                THANH BìNH GROUP</a></td>
                        <td><span data-toggle="tooltip" data-title="Phòng KD 8">Huỳnh Ngọc Bảo
                                Khanh</span></td>
                        <td>Nạp tiền</td>
                        <td>5.000.000</td>
                        <td></td>
                        <td style="width:170px;"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a data-toggle="tooltip" data-title="Đỗ  Văn  Thảo - Phòng KD 8"
                                class="label label-success">Đã Duyệt</a></td>
                        <td><a data-id="36479" class="fa fa-trash-o del_item"
                                href="https://erp.nhanh.vn/crm/requirement/indexnocontractvg#"></a>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=36334">36334</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=2314">Trần Văn Anh
                                Vũ</a></td>
                        <td><span data-toggle="tooltip" data-title="Phòng KD ĐDV">Trần Văn Anh
                                Vũ</span></td>
                        <td>Nạp tiền</td>
                        <td>5.000</td>
                        <td><span data-toggle="tooltip" data-title="Rao vặt - THDV">Nguyễn Nhật
                                Linh</span></td>
                        <td style="width:170px;">06/11/2019 - 06/11/2019</td>
                        <td>5.000</td>
                        <td></td>
                        <td>250</td>
                        <td>5.250</td>
                        <td><a class="label label-success">Hoàn thành</a></td>
                        <td><a data-id="36334" class="fa fa-trash-o del_item"
                                href="https://erp.nhanh.vn/crm/requirement/indexnocontractvg#"></a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=36125">36125</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=6571">CÔNG TY TNHH
                                CÁCH NHIỆT CÁCH ÂM THÀNH ĐẠT</a></td>
                        <td><span data-toggle="tooltip" data-title="Phòng KD10">Nguyễn Hoàng
                                Long</span></td>
                        <td>Seo Popup</td>
                        <td>1.150.000</td>
                        <td></td>
                        <td style="width:170px;"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a data-toggle="tooltip" data-title="Nguyễn Hoàng Long - Phòng KD10"
                                class="label label-success">Đã Duyệt</a></td>
                        <td><a data-id="36125" class="fa fa-trash-o del_item"
                                href="https://erp.nhanh.vn/crm/requirement/indexnocontractvg#"></a>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=35935">35935</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/lead/view?id=184206">CÔNG TY CP DAEWOO
                                AN SƯƠNG</a></td>
                        <td><span data-toggle="tooltip"
                                data-title="Phòng KD Bảo Kim &amp; Wesave">Lê Thảo Quỳnh
                                Dương</span></td>
                        <td>Nạp tiền</td>
                        <td>500.000</td>
                        <td><span data-toggle="tooltip" data-title="Rao vặt - THDV">Nguyễn Nhật
                                Linh</span></td>
                        <td style="width:170px;">10/10/2019 - 10/10/2019</td>
                        <td>500.000</td>
                        <td></td>
                        <td>25.000</td>
                        <td>525.000</td>
                        <td><a class="label label-success">Hoàn thành</a></td>
                        <td><a data-id="35935" class="fa fa-trash-o del_item"
                                href="https://erp.nhanh.vn/crm/requirement/indexnocontractvg#"></a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=35877">35877</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=13690">CÔNG TY TNHH DA
                                NY</a></td>
                        <td><span data-toggle="tooltip" data-title="Nhóm KD 24">Phan Thành
                                Quang</span></td>
                        <td>Banner</td>
                        <td>90.000</td>
                        <td></td>
                        <td style="width:170px;"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a data-toggle="tooltip" data-title="Phan Thành Quang - Nhóm KD 24"
                                class="label label-success">Đã Duyệt</a></td>
                        <td><a data-id="35877" class="fa fa-trash-o del_item"
                                href="https://erp.nhanh.vn/crm/requirement/indexnocontractvg#"></a>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=35674">35674</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=2690">CÔNG TY TNHH MÁY
                                IN TIẾN THỊNH</a></td>
                        <td><span data-toggle="tooltip" data-title="KINH DOANH TD">Nông Thị
                                Hoa</span></td>
                        <td>GHĐB (tái ký)</td>
                        <td>200.000</td>
                        <td></td>
                        <td style="width:170px;"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a class="label label-info">Mới</a></td>
                        <td><a data-id="35674" class="fa fa-trash-o del_item"
                                href="https://erp.nhanh.vn/crm/requirement/indexnocontractvg#"></a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=35639">35639</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=17780">Nguyễn Hoàng
                                Bảo</a></td>
                        <td><span data-toggle="tooltip" data-title="Phòng KD10">Vũ Duy Hoàng</span>
                        </td>
                        <td>Nạp tiền</td>
                        <td>20.000</td>
                        <td><span data-toggle="tooltip" data-title="Rao vặt - THDV">Nguyễn Nhật
                                Linh</span></td>
                        <td style="width:170px;">24/09/2019 - 24/09/2019</td>
                        <td>20.000</td>
                        <td></td>
                        <td>1.000</td>
                        <td>21.000</td>
                        <td><a class="label label-success">Hoàn thành</a></td>
                        <td><a data-id="35639" class="fa fa-trash-o del_item"
                                href="https://erp.nhanh.vn/crm/requirement/indexnocontractvg#"></a>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=35574">35574</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=18580">Công Ty TNHH
                                Sản Xuất Thương Mại Bao Bì Ngọc Minh</a></td>
                        <td><span data-toggle="tooltip" data-title="Phòng KD10">Thái Chí Toàn</span>
                        </td>
                        <td>Nạp tiền</td>
                        <td>200.000</td>
                        <td></td>
                        <td style="width:170px;"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a class="label label-info">Mới</a></td>
                        <td><a data-id="35574" class="fa fa-trash-o del_item"
                                href="https://erp.nhanh.vn/crm/requirement/indexnocontractvg#"></a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div class="col-md-6 paginatorItem">
                    <div class="paginator"><span class="labelPages">1 - 30 / 2,417</span><span
                            class="disabled fa fa-step-backward"></span><span
                            class="disabled fa fa-backward"></span><a class="fa fa-forward"
                            href="https://erp.nhanh.vn/crm/requirement/indexnocontractvg?page=2"
                            title="Trang sau"></a> <a class="fa fa-step-forward"
                            href="https://erp.nhanh.vn/crm/requirement/indexnocontractvg?page=81"
                            title="Trang cuối"></a></div>
                </div>
            </div>
        </div>
        <!-- Dialog bootstrap -->
        <div id="myModal" class="modal fade">
            <div class="modal-dialog modal-lg">
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

        <div id="alertModal" class="modal fade">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">×</button>
                        <h4 class="modal-title">Thông báo</h4>
                    </div>
                    <div class="modal-body">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default reload"
                            data-dismiss="modal">Đóng</button>
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
        <style>
            ul.lst-result {
                list-style: none;
                padding-left: 0px;

            }

            ul.lst-result li {
                padding: 5px 0;
            }

            ul.lst-result li i {
                margin-right: 5px;
                line-height: 4px;
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
    <script type="text/javascript" src="{{ asset('asset/js/crm/requirement/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/requirement/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/requirement/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/requirement/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/requirement/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/requirement/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/requirement/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/requirement/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/requirement/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/requirement/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/requirement/saved_resource(2)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/requirement/bootstrap-multiselect.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/requirement/indexvg.js') }}"></script>
@endsection