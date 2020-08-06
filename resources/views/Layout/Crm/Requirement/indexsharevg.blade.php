@extends('Layout.master')

@section('title','Danh sách requirement')
    
@section('css')
    <link rel="stylesheet" href="{{ asset('asset/css/crm/requirement/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('asset/css/crm/requirement/bootstrap-multiselect.css') }}" type="text/css">
        
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
                        data-placement="top" title="Chức năng, thao tác">
                        <button class="btn dropdown-toggle" type="button" aria-haspopup="true"
                            aria-expanded="false" data-toggle="dropdown">
                            <span class="fa fa-cog"></span> <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="https://erp.nhanh.vn/crm/requirement/addvg"><i
                                        class="fa fa-plus"></i> Thêm yêu cầu</a></li>
                            <li><a href="https://erp.nhanh.vn/crm/requirement/indexsharevg?format=excel"
                                    class="exportExcel"><i class="fa fa-file-excel-o"></i> Xuất
                                    excel trang hiện tại</a></li>
                            <li><a id="exportAll"><i class="fa fa-file-excel-o"></i> Xuất excel toàn
                                    bộ</a></li>
                        </ul>
                    </div>


                    <button class="btn  pull-right lolify-showextend" type="button"
                        data-toggle="tooltip" data-placement="top" title="bộ lọc nâng cao">
                        <span class="fa fa-th"></span>
                    </button>
                </div>
                <div class="col-md-12 lolify-extend" style="display: none;">
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
                            id="createdByName" class="form-control" value=""> </div>
                    <div class="form-group">
                        <input type="text" name="confirmedByName" placeholder="Người thực hiện"
                            id="confirmedByName" class="form-control" value=""> </div>
                    <div class="form-group">
                        <select name="productId[]" multiple="multiple" id="productId"
                            class="form-control">
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
                        </select> </div>
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
                            <th rowspan="2" style="width: 54px;">ID</th>
                            <th rowspan="2" style="width: 75px;">Hợp đồng</th>
                            <th rowspan="2" style="width: 269px;">Khách hàng</th>
                            <th colspan="3" style="width: 365px;">Bên yêu cầu</th>
                            <th colspan="6" style="width: 680px;">Bên thực hiện</th>
                            <th rowspan="2" style="width: 76px;">Trạng thái</th>
                            <th class="col-align-left" title="Thao tác" rowspan="2"
                                style="width: 36px;"><i class="fa fa-cogs icon"></i></th>
                        </tr>
                        <tr>
                            <th style="width: 176px;">Người yêu cầu</th>
                            <th style="width: 103px;">Sản phẩm </th>
                            <th style="width: 86px;">Số tiền </th>
                            <th style="width: 145px;">Người kích hoạt cuối</th>
                            <th style="min-width: 100px; width: 110px;">Thời gian DV </th>
                            <th style="width: 125px;">Số tiền TH </th>
                            <th style="width: 118px;">Phí duy trì (khác)</th>
                            <th style="width: 88px;">Khuyến mại </th>
                            <th style="width: 94px;">Tổng tiền TH </th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div class="col-md-6 paginatorItem">
                    <div class="paginator"><span class="labelPages">1 - 30 / 37</span><span
                            class="disabled fa fa-step-backward"></span><span
                            class="disabled fa fa-backward"></span><a class="fa fa-forward"
                            href="https://erp.nhanh.vn/crm/requirement/indexsharevg?page=2"
                            title="Trang sau"></a> <a class="fa fa-step-forward"
                            href="https://erp.nhanh.vn/crm/requirement/indexsharevg?page=2"
                            title="Trang cuối"></a></div>
                </div>
                <div style="clear: both;"></div><br>
            </div>
            <table id="dgRequirement" class="table table-bordered">
                <thead>
                    <tr class="even">
                        <th rowspan="2">ID</th>
                        <th rowspan="2">Hợp đồng</th>
                        <th rowspan="2">Khách hàng</th>
                        <th colspan="3">Bên yêu cầu</th>
                        <th colspan="6">Bên thực hiện</th>
                        <th rowspan="2">Trạng thái</th>
                        <th class="col-align-left" title="Thao tác" rowspan="2"><i
                                class="fa fa-cogs icon"></i></th>
                    </tr>
                    <tr>
                        <th>Người yêu cầu</th>
                        <th>Sản phẩm </th>
                        <th>Số tiền </th>
                        <th>Người kích hoạt cuối</th>
                        <th style="min-width:100px;">Thời gian DV </th>
                        <th>Số tiền TH </th>
                        <th>Phí duy trì (khác)</th>
                        <th>Khuyến mại </th>
                        <th>Tổng tiền TH </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="even h">
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=36298">36298</a><br>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=55808&amp;token=1ec2de5d3865553b61f839050d913911">55808</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=2314">Trần Văn Anh
                                Vũ</a></td>
                        <td><span data-toggle="tooltip" data-title="Phòng KD ĐDV"
                                data-original-title="" title="">Trần Văn Anh Vũ</span><br><i
                                class="description text-muted fontsize-85">04/11/2019</i></td>
                        <td>Nạp tiền</td>
                        <td>2.000.000</td>
                        <td><span data-toggle="tooltip" data-title="Rao vặt - THDV">Nguyễn Nhật
                                Linh</span></td>
                        <td><i class="fa fa-check text-success"></i>04/11/2019<br><i
                                class="fa fa-minus-circle text-danger"></i>04/11/2019</td>
                        <td>2.000.000</td>
                        <td></td>
                        <td>100.000</td>
                        <td>2.100.000</td>
                        <td><a class="label label-warning">Tách HĐ</a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/requirement/editvg?id=36298">Sửa</a>
                                    </li>
                                    <li><a class="del_item" data-id="36298">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=32790">32790</a><br>
                        </td>
                        <td></td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=13311">CÔNG TY TNHH
                                ĐIỆN MÁY ÁNH ...</a></td>
                        <td><span data-toggle="tooltip" data-title="Phòng KD 01">Phan Vũ Như
                                Quỳnh</span><br><i
                                class="description text-muted fontsize-85">16/04/2019</i></td>
                        <td>Nạp tiền</td>
                        <td>3.000.000</td>
                        <td><span data-toggle="tooltip"
                                data-title="Phòng chăm sóc khách hàng - Online">Phạm Thị Hồng
                                Linh</span></td>
                        <td><i class="fa fa-check text-success"></i>16/04/2019<br><i
                                class="fa fa-minus-circle text-danger"></i>16/04/2019</td>
                        <td>3.000.000</td>
                        <td></td>
                        <td>150.000</td>
                        <td>3.150.000</td>
                        <td><a class="label label-warning">Tách HĐ</a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/requirement/editvg?id=32790">Sửa</a>
                                    </li>
                                    <li><a class="del_item" data-id="32790">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=32136">32136</a><br>
                        </td>
                        <td></td>
                        <td><a href="https://erp.nhanh.vn/crm/lead/view?id=184206">CÔNG TY CP DAEWOO
                                AN SƯƠNG ...</a></td>
                        <td><span data-toggle="tooltip"
                                data-title="Phòng KD Bảo Kim &amp; Wesave">Lê Thảo Quỳnh
                                Dương</span><br><i
                                class="description text-muted fontsize-85">11/03/2019</i></td>
                        <td>Nạp tiền</td>
                        <td>500.000</td>
                        <td><span data-toggle="tooltip"
                                data-title="Phòng chăm sóc khách hàng - Online">Phạm Thị Hồng
                                Linh</span></td>
                        <td><i class="fa fa-check text-success"></i>11/03/2019<br><i
                                class="fa fa-minus-circle text-danger"></i>11/03/2019</td>
                        <td>500.000</td>
                        <td></td>
                        <td>25.000</td>
                        <td>525.000</td>
                        <td><a class="label label-warning">Tách HĐ</a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/requirement/editvg?id=32136">Sửa</a>
                                    </li>
                                    <li><a class="del_item" data-id="32136">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=31563">31563</a><br>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=44235&amp;token=eafa2613242d4d7925cb95e22f833bea">44235</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=7862">Công Ty Cổ Phần
                                Thương Mại ...</a></td>
                        <td><span data-toggle="tooltip" data-title="Nhóm KD 24">Phan Thành
                                Quang</span><br><i
                                class="description text-muted fontsize-85">22/01/2019</i></td>
                        <td>Nạp tiền</td>
                        <td>2.100.000</td>
                        <td><span data-toggle="tooltip"
                                data-title="Phòng chăm sóc khách hàng - Online">Phạm Thị Hồng
                                Linh</span></td>
                        <td><i class="fa fa-check text-success"></i>22/01/2019<br><i
                                class="fa fa-minus-circle text-danger"></i>22/01/2019</td>
                        <td>2.100.000</td>
                        <td></td>
                        <td>210.000</td>
                        <td>2.310.000</td>
                        <td><a class="label label-warning">Tách HĐ</a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/requirement/editvg?id=31563">Sửa</a>
                                    </li>
                                    <li><a class="del_item" data-id="31563">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=30639">30639</a><br>
                        </td>
                        <td></td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=2314">Trần Văn Anh
                                Vũ</a></td>
                        <td><span data-toggle="tooltip" data-title="Phòng KD ĐDV">Trần Văn Anh
                                Vũ</span><br><i
                                class="description text-muted fontsize-85">28/11/2018</i></td>
                        <td>Nạp tiền</td>
                        <td>2.000.000</td>
                        <td><span data-toggle="tooltip" data-title="Rao vặt - THDV">Nguyễn Nhật
                                Linh</span></td>
                        <td><i class="fa fa-check text-success"></i>28/11/2018<br><i
                                class="fa fa-minus-circle text-danger"></i>28/11/2018</td>
                        <td>2.000.000</td>
                        <td></td>
                        <td>100.000</td>
                        <td>2.100.000</td>
                        <td><a class="label label-warning">Tách HĐ</a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/requirement/editvg?id=30639">Sửa</a>
                                    </li>
                                    <li><a class="del_item" data-id="30639">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=29176">29176</a><br>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=39817&amp;token=fe43f7c266afd3b7fe6443f958fcb435">39817</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=14417">CÔNG TY TNHH SX
                                - TM ...</a></td>
                        <td><span data-toggle="tooltip" data-title="Nhóm KD 7">Nguyễn Thị Thùy
                                Vân</span><br><i
                                class="description text-muted fontsize-85">30/08/2018</i></td>
                        <td>Seo Popup</td>
                        <td>5.181.000</td>
                        <td><span data-toggle="tooltip" data-title="Rao vặt - THDV">Nguyễn Nhật
                                Linh</span></td>
                        <td><i class="fa fa-check text-success"></i>30/08/2018<br><i
                                class="fa fa-minus-circle text-danger"></i>28/02/2019</td>
                        <td></td>
                        <td>4.323.000</td>
                        <td></td>
                        <td>4.323.000</td>
                        <td><a class="label label-warning">Tách HĐ</a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/requirement/editvg?id=29176">Sửa</a>
                                    </li>
                                    <li><a class="del_item" data-id="29176">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=24420">24420</a><br>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=34027&amp;token=ae1d3e532bcea5f796c9c3bdb1977f09">34027</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=2314">Trần Văn Anh
                                Vũ</a></td>
                        <td><span data-toggle="tooltip" data-title="Phòng KD ĐDV">Trần Văn Anh
                                Vũ</span><br><i
                                class="description text-muted fontsize-85">18/12/2017</i></td>
                        <td>Nạp tiền</td>
                        <td>1.000.000</td>
                        <td><span data-toggle="tooltip" data-title="Quản trị thông tin">Nguyễn Thị
                                Hằng</span></td>
                        <td><i class="fa fa-check text-success"></i>18/12/2017<br><i
                                class="fa fa-minus-circle text-danger"></i>18/12/2017</td>
                        <td>1.000.000</td>
                        <td></td>
                        <td>50.000</td>
                        <td>1.050.000</td>
                        <td><a class="label label-warning">Tách HĐ</a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/requirement/editvg?id=24420">Sửa</a>
                                    </li>
                                    <li><a class="del_item" data-id="24420">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=21745">21745</a><br>
                        </td>
                        <td></td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=11741">bàn ghế cfe</a>
                        </td>
                        <td><span data-toggle="tooltip" data-title="Phòng KD 01">Phan Vũ Như
                                Quỳnh</span><br><i
                                class="description text-muted fontsize-85">29/09/2017</i></td>
                        <td>Nạp tiền</td>
                        <td>2.000.000</td>
                        <td><span data-toggle="tooltip" data-title="Quản trị thông tin">Nguyễn Thị
                                Hằng</span></td>
                        <td><i class="fa fa-check text-success"></i>29/09/2017<br><i
                                class="fa fa-minus-circle text-danger"></i>29/09/2017</td>
                        <td>2.000.000</td>
                        <td></td>
                        <td>100.000</td>
                        <td>2.100.000</td>
                        <td><a class="label label-warning">Tách HĐ</a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/requirement/editvg?id=21745">Sửa</a>
                                    </li>
                                    <li><a class="del_item" data-id="21745">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=20507">20507</a><br>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=27585&amp;token=40a13817b090905c3514cab64bf93300">27585</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=479">Nguyễn Thị Thảo
                                Nguyên</a></td>
                        <td><span data-toggle="tooltip" data-title="Phòng KD 8">Nguyễn Thị Thảo
                                Nguyên</span><br><i
                                class="description text-muted fontsize-85">24/08/2017</i></td>
                        <td>Nạp tiền</td>
                        <td>200.000</td>
                        <td><span data-toggle="tooltip" data-title="Quản trị thông tin">Nguyễn Thị
                                Hằng</span></td>
                        <td><i class="fa fa-check text-success"></i>24/08/2017<br><i
                                class="fa fa-minus-circle text-danger"></i>24/08/2017</td>
                        <td>200.000</td>
                        <td></td>
                        <td>10.000</td>
                        <td>210.000</td>
                        <td><a class="label label-warning">Tách HĐ</a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/requirement/editvg?id=20507">Sửa</a>
                                    </li>
                                    <li><a class="del_item" data-id="20507">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=13645">13645</a><br>
                        </td>
                        <td></td>
                        <td><a href="https://erp.nhanh.vn/crm/lead/view?id=90931">VI TÍNH LAPTOP
                                THIÊN PHÚ</a></td>
                        <td><span data-toggle="tooltip" data-title="Sàn Vật Giá HCM">Nguyễn Đinh Kim
                                Khuê</span><br><i
                                class="description text-muted fontsize-85">22/03/2017</i></td>
                        <td>Nạp tiền</td>
                        <td>500.000</td>
                        <td><span data-toggle="tooltip" data-title="Quản trị thông tin">Nguyễn Thị
                                Hằng</span></td>
                        <td><i class="fa fa-check text-success"></i>22/03/2017<br><i
                                class="fa fa-minus-circle text-danger"></i>22/03/2017</td>
                        <td>500.000<br>
                            <div class="description text-muted fontsize-85"><i>Tài khoản
                                    Marketing</i></div>
                        </td>
                        <td></td>
                        <td>25.000</td>
                        <td>525.000</td>
                        <td><a class="label label-warning">Tách HĐ</a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/requirement/editvg?id=13645">Sửa</a>
                                    </li>
                                    <li><a class="del_item" data-id="13645">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=11232">11232</a><br>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=21787&amp;token=c3bb6b3ea26c32537a03af6c8e42c8db">21787</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=2970">Công Ty TNHH
                                Thiên Minh Phú ...</a></td>
                        <td><span data-toggle="tooltip" data-title="Phòng CS 8">Nguyễn Văn
                                Việt</span><br><i
                                class="description text-muted fontsize-85">05/01/2017</i></td>
                        <td>Nạp tiền</td>
                        <td>4.000.000</td>
                        <td><span data-toggle="tooltip" data-title="Quản trị thông tin">Nguyễn Thị
                                Hằng</span></td>
                        <td><i class="fa fa-check text-success"></i>05/01/2017<br><i
                                class="fa fa-minus-circle text-danger"></i>05/01/2017</td>
                        <td>4.000.000<br>
                            <div class="description text-muted fontsize-85"><i>Tài khoản
                                    Marketing</i></div>
                        </td>
                        <td></td>
                        <td>200.000</td>
                        <td>4.200.000</td>
                        <td><a class="label label-warning">Tách HĐ</a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/requirement/editvg?id=11232">Sửa</a>
                                    </li>
                                    <li><a class="del_item" data-id="11232">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=10413">10413</a><br>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=20164&amp;token=8f15456473fab804e05ec5875437ec45">20164</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=3022">Công ty TNHH
                                thương mại dịch ...</a></td>
                        <td><span data-toggle="tooltip" data-title="Nhóm CS online">Nguyễn Quốc
                                Đạt</span><br><i
                                class="description text-muted fontsize-85">09/12/2016</i></td>
                        <td>GHĐB (tái ký)</td>
                        <td>17.846.000</td>
                        <td><span data-toggle="tooltip" data-title="Quản trị thông tin">Nguyễn Thị
                                Hằng</span></td>
                        <td><i class="fa fa-check text-success"></i>09/12/2016<br><i
                                class="fa fa-minus-circle text-danger"></i>09/12/2016</td>
                        <td>13.200.000<br>
                            <div class="description text-muted fontsize-85"><i>Tài khoản
                                    Marketing</i></div>
                        </td>
                        <td></td>
                        <td>4.646.000</td>
                        <td>17.846.000</td>
                        <td><a class="label label-warning">Tách HĐ</a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/requirement/editvg?id=10413">Sửa</a>
                                    </li>
                                    <li><a class="del_item" data-id="10413">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=10017">10017</a><br>
                        </td>
                        <td></td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=2730">ĐẶNG THỊ KIỀU
                                HUÊ</a></td>
                        <td><span data-toggle="tooltip" data-title="Nhóm KD 24">Nguyễn Xuân
                                Hoàng</span><br><i
                                class="description text-muted fontsize-85">01/12/2016</i></td>
                        <td>Nạp tiền</td>
                        <td>10.000.000</td>
                        <td><span data-toggle="tooltip" data-title="Quản trị thông tin">Nguyễn Thị
                                Hằng</span></td>
                        <td><i class="fa fa-check text-success"></i>01/12/2016<br><i
                                class="fa fa-minus-circle text-danger"></i>01/12/2016</td>
                        <td>10.000.000<br>
                            <div class="description text-muted fontsize-85"><i>Tài khoản
                                    Marketing</i></div>
                        </td>
                        <td></td>
                        <td>2.280.000</td>
                        <td>12.280.000</td>
                        <td><a class="label label-warning">Tách HĐ</a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/requirement/editvg?id=10017">Sửa</a>
                                    </li>
                                    <li><a class="del_item" data-id="10017">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=10066">10066</a><br>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=19710&amp;token=d2c779b1bb7cc66061aaae4daa9ec269">19710</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=3896">cty tnhh tm dv
                                tân hữu ...</a></td>
                        <td><span data-toggle="tooltip" data-title="Sàn Vật Giá HCM">Nguyễn Đinh Kim
                                Khuê</span><br><i
                                class="description text-muted fontsize-85">04/11/2016</i></td>
                        <td>Nạp tiền</td>
                        <td>900.000</td>
                        <td><span data-toggle="tooltip" data-title="Quản trị thông tin">Nguyễn Thị
                                Hằng</span></td>
                        <td><i class="fa fa-check text-success"></i>04/11/2016<br><i
                                class="fa fa-minus-circle text-danger"></i>04/11/2016</td>
                        <td>900.000</td>
                        <td></td>
                        <td></td>
                        <td>900.000</td>
                        <td><a class="label label-warning">Tách HĐ</a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/requirement/editvg?id=10066">Sửa</a>
                                    </li>
                                    <li><a class="del_item" data-id="10066">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=9126">9126</a><br>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=19708&amp;token=a92273e6f6c9c255d4bb0733de60174d">19708</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=3896">cty tnhh tm dv
                                tân hữu ...</a></td>
                        <td><span data-toggle="tooltip" data-title="Sàn Vật Giá HCM">Nguyễn Đinh Kim
                                Khuê</span><br><i
                                class="description text-muted fontsize-85">04/11/2016</i></td>
                        <td>Nạp tiền</td>
                        <td>1.000.000</td>
                        <td><span data-toggle="tooltip" data-title="Quản trị thông tin">Nguyễn Thị
                                Hằng</span></td>
                        <td><i class="fa fa-check text-success"></i>04/11/2016<br><i
                                class="fa fa-minus-circle text-danger"></i>04/11/2016</td>
                        <td>1.000.000</td>
                        <td></td>
                        <td></td>
                        <td>1.000.000</td>
                        <td><a class="label label-warning">Tách HĐ</a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/requirement/editvg?id=9126">Sửa</a>
                                    </li>
                                    <li><a class="del_item" data-id="9126">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=9403">9403</a><br>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=19710&amp;token=d2c779b1bb7cc66061aaae4daa9ec269">19710</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=3896">cty tnhh tm dv
                                tân hữu ...</a></td>
                        <td><span data-toggle="tooltip" data-title="Sàn Vật Giá HCM">Nguyễn Đinh Kim
                                Khuê</span><br><i
                                class="description text-muted fontsize-85">14/11/2016</i></td>
                        <td>Nạp tiền</td>
                        <td>1.000.000</td>
                        <td><span data-toggle="tooltip" data-title="Quản trị thông tin">Nguyễn Thị
                                Hằng</span></td>
                        <td><i class="fa fa-check text-success"></i>14/11/2016<br><i
                                class="fa fa-minus-circle text-danger"></i>14/11/2016</td>
                        <td>1.000.000</td>
                        <td></td>
                        <td></td>
                        <td>1.000.000</td>
                        <td><a class="label label-warning">Tách HĐ</a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/requirement/editvg?id=9403">Sửa</a>
                                    </li>
                                    <li><a class="del_item" data-id="9403">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=8521">8521</a><br>
                        </td>
                        <td></td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=2835">HỒ PHAN ANH
                                TUẤN</a></td>
                        <td><span data-toggle="tooltip" data-title="Nhóm 5- Hào">Nguyễn Lê
                                Hào</span><br><i
                                class="description text-muted fontsize-85">19/10/2016</i></td>
                        <td>Nạp tiền</td>
                        <td>5.000.000</td>
                        <td><span data-toggle="tooltip" data-title="Quản trị thông tin">Nguyễn Thị
                                Hằng</span></td>
                        <td><i class="fa fa-check text-success"></i>19/10/2016<br><i
                                class="fa fa-minus-circle text-danger"></i>19/10/2016</td>
                        <td>5.000.000<br>
                            <div class="description text-muted fontsize-85"><i>Tài khoản
                                    Marketing</i></div>
                        </td>
                        <td></td>
                        <td>350.000</td>
                        <td>5.350.000</td>
                        <td><a class="label label-warning">Tách HĐ</a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/requirement/editvg?id=8521">Sửa</a>
                                    </li>
                                    <li><a class="del_item" data-id="8521">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=8189">8189</a><br>
                        </td>
                        <td></td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=2788">Công Ty TNHH
                                Thương Mại Dịch ...</a></td>
                        <td><span data-toggle="tooltip" data-title="Sàn Vật Giá HCM">Nguyễn Đinh Kim
                                Khuê</span><br><i
                                class="description text-muted fontsize-85">10/10/2016</i></td>
                        <td>Nạp tiền</td>
                        <td>2.000.000</td>
                        <td><span data-toggle="tooltip" data-title="Quản trị thông tin">Nguyễn Thị
                                Hằng</span></td>
                        <td><i class="fa fa-check text-success"></i>10/10/2016<br><i
                                class="fa fa-minus-circle text-danger"></i>10/10/2016</td>
                        <td>2.000.000<br>
                            <div class="description text-muted fontsize-85"><i>Tài khoản
                                    Marketing</i></div>
                        </td>
                        <td></td>
                        <td></td>
                        <td>2.000.000</td>
                        <td><a class="label label-warning">Tách HĐ</a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/requirement/editvg?id=8189">Sửa</a>
                                    </li>
                                    <li><a class="del_item" data-id="8189">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=7104">7104</a><br>
                        </td>
                        <td></td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=6247">Công Ty Cổ Phần
                                Thương Mại ...</a></td>
                        <td><span data-toggle="tooltip" data-title="Nhóm KD 24">Nguyễn Xuân
                                Hoàng</span><br><i
                                class="description text-muted fontsize-85">05/09/2016</i></td>
                        <td>Nạp tiền</td>
                        <td>3.300.000</td>
                        <td><span data-toggle="tooltip" data-title="Quản trị thông tin">Nguyễn Thị
                                Hằng</span></td>
                        <td><i class="fa fa-check text-success"></i>05/09/2016<br><i
                                class="fa fa-minus-circle text-danger"></i>05/09/2016</td>
                        <td>3.300.000<br>
                            <div class="description text-muted fontsize-85"><i>Tài khoản
                                    Marketing</i></div>
                        </td>
                        <td></td>
                        <td>165.000</td>
                        <td>3.465.000</td>
                        <td><a class="label label-warning">Tách HĐ</a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/requirement/editvg?id=7104">Sửa</a>
                                    </li>
                                    <li><a class="del_item" data-id="7104">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=7063">7063</a><br>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=16230&amp;token=b09971eff5ace5a2779cbebfe2774068">16230</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=2529">Nguyễn Thanh
                                Long</a></td>
                        <td><span data-toggle="tooltip" data-title="Phòng KD 8">Đỗ Văn
                                Thảo</span><br><i
                                class="description text-muted fontsize-85">05/09/2016</i></td>
                        <td>Nạp tiền</td>
                        <td>1.000.000</td>
                        <td><span data-toggle="tooltip" data-title="Quản trị thông tin">Nguyễn Thị
                                Hằng</span></td>
                        <td><i class="fa fa-check text-success"></i>05/09/2016<br><i
                                class="fa fa-minus-circle text-danger"></i>05/09/2016</td>
                        <td>1.000.000<br>
                            <div class="description text-muted fontsize-85"><i>Tài khoản
                                    Marketing</i></div>
                        </td>
                        <td></td>
                        <td>50.000</td>
                        <td>1.050.000</td>
                        <td><a class="label label-warning">Tách HĐ</a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/requirement/editvg?id=7063">Sửa</a>
                                    </li>
                                    <li><a class="del_item" data-id="7063">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=7888">7888</a><br>
                        </td>
                        <td></td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=2529">Nguyễn Thanh
                                Long</a></td>
                        <td><span data-toggle="tooltip" data-title="Phòng KD 8">Đỗ Văn
                                Thảo</span><br><i
                                class="description text-muted fontsize-85">05/09/2016</i></td>
                        <td>Nạp tiền</td>
                        <td>1.000.000</td>
                        <td><span data-toggle="tooltip" data-title="Quản trị thông tin">Nguyễn Thị
                                Hằng</span></td>
                        <td><i class="fa fa-check text-success"></i>05/09/2016<br><i
                                class="fa fa-minus-circle text-danger"></i>05/09/2016</td>
                        <td>1.000.000<br>
                            <div class="description text-muted fontsize-85"><i>Tài khoản
                                    Marketing</i></div>
                        </td>
                        <td></td>
                        <td>50.000</td>
                        <td>1.050.000</td>
                        <td><a class="label label-warning">Tách HĐ</a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/requirement/editvg?id=7888">Sửa</a>
                                    </li>
                                    <li><a class="del_item" data-id="7888">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=7859">7859</a><br>
                        </td>
                        <td></td>
                        <td><a href="https://erp.nhanh.vn/crm/lead/view?id=90931">VI TÍNH LAPTOP
                                THIÊN PHÚ</a></td>
                        <td><span data-toggle="tooltip" data-title="Sàn Vật Giá HCM">Nguyễn Đinh Kim
                                Khuê</span><br><i
                                class="description text-muted fontsize-85">01/10/2016</i></td>
                        <td>Nạp tiền</td>
                        <td>1.000.000</td>
                        <td><span data-toggle="tooltip" data-title="Quản trị thông tin">Nguyễn Thị
                                Hằng</span></td>
                        <td><i class="fa fa-check text-success"></i>01/10/2016<br><i
                                class="fa fa-minus-circle text-danger"></i>01/10/2016</td>
                        <td>1.000.000<br>
                            <div class="description text-muted fontsize-85"><i>Tài khoản
                                    Marketing</i></div>
                        </td>
                        <td></td>
                        <td>50.000</td>
                        <td>1.050.000</td>
                        <td><a class="label label-warning">Tách HĐ</a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/requirement/editvg?id=7859">Sửa</a>
                                    </li>
                                    <li><a class="del_item" data-id="7859">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=7611">7611</a><br>
                        </td>
                        <td></td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=7264">CÔNG TY CỔ PHẦN
                                THƯƠNG MẠI ...</a></td>
                        <td><span data-toggle="tooltip" data-title="Nhóm KD 24">Nguyễn Xuân
                                Hoàng</span><br><i
                                class="description text-muted fontsize-85">22/09/2016</i></td>
                        <td>Nạp tiền</td>
                        <td>1.000.000</td>
                        <td><span data-toggle="tooltip" data-title="Quản trị thông tin">Nguyễn Thị
                                Hằng</span></td>
                        <td><i class="fa fa-check text-success"></i>22/09/2016<br><i
                                class="fa fa-minus-circle text-danger"></i>22/09/2016</td>
                        <td>1.000.000<br>
                            <div class="description text-muted fontsize-85"><i>Tài khoản
                                    Marketing</i></div>
                        </td>
                        <td></td>
                        <td>50.000</td>
                        <td>1.050.000</td>
                        <td><a class="label label-warning">Tách HĐ</a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/requirement/editvg?id=7611">Sửa</a>
                                    </li>
                                    <li><a class="del_item" data-id="7611">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=7246">7246</a><br>
                        </td>
                        <td></td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=2163">Công ty TNHH
                                Homedeal</a></td>
                        <td><span data-toggle="tooltip" data-title="Sàn Vật Giá HCM">Nguyễn Đinh Kim
                                Khuê</span><br><i
                                class="description text-muted fontsize-85">09/09/2016</i></td>
                        <td>Nạp tiền</td>
                        <td>1.000.000</td>
                        <td><span data-toggle="tooltip" data-title="Quản trị thông tin">Nguyễn Thị
                                Hằng</span></td>
                        <td><i class="fa fa-check text-success"></i>09/09/2016<br><i
                                class="fa fa-minus-circle text-danger"></i>09/09/2016</td>
                        <td>1.000.000<br>
                            <div class="description text-muted fontsize-85"><i>Tài khoản
                                    Marketing</i></div>
                        </td>
                        <td></td>
                        <td>50.000</td>
                        <td>1.050.000</td>
                        <td><a class="label label-warning">Tách HĐ</a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/requirement/editvg?id=7246">Sửa</a>
                                    </li>
                                    <li><a class="del_item" data-id="7246">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=6930">6930</a><br>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=15792&amp;token=8f620ee96b27bb6b3244d9376d250886">15792</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/lead/view?id=116246">Công Ty TNHH Cơ
                                Khí Ô ...</a></td>
                        <td><span data-toggle="tooltip" data-title="Nhóm KD 24">Nguyễn Xuân
                                Hoàng</span><br><i
                                class="description text-muted fontsize-85">31/08/2016</i></td>
                        <td>GHĐB (mới)</td>
                        <td>6.600.000</td>
                        <td><span data-toggle="tooltip" data-title="Quản trị thông tin">Nguyễn Thị
                                Hằng</span></td>
                        <td><i class="fa fa-check text-success"></i>31/08/2016<br><i
                                class="fa fa-minus-circle text-danger"></i>31/08/2016</td>
                        <td>3.800.000<br>
                            <div class="description text-muted fontsize-85"><i>Tài khoản Chính</i>
                            </div>
                        </td>
                        <td></td>
                        <td></td>
                        <td>3.800.000</td>
                        <td><a class="label label-warning">Tách HĐ</a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/requirement/editvg?id=6930">Sửa</a>
                                    </li>
                                    <li><a class="del_item" data-id="6930">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=6033">6033</a><br>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=15202&amp;token=b9a7a3fa24922a0a743b45b97a539ff6">15202</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/lead/view?id=90931">VI TÍNH LAPTOP
                                THIÊN PHÚ</a></td>
                        <td><span data-toggle="tooltip" data-title="Sàn Vật Giá HCM">Nguyễn Đinh Kim
                                Khuê</span><br><i
                                class="description text-muted fontsize-85">01/08/2016</i></td>
                        <td>Nạp tiền</td>
                        <td>1.000.000</td>
                        <td><span data-toggle="tooltip" data-title="Quản trị thông tin">Nguyễn Thị
                                Hằng</span></td>
                        <td><i class="fa fa-check text-success"></i>01/08/2016<br><i
                                class="fa fa-minus-circle text-danger"></i>01/08/2016</td>
                        <td>1.000.000<br>
                            <div class="description text-muted fontsize-85"><i>Tài khoản
                                    Marketing</i></div>
                        </td>
                        <td></td>
                        <td>50.000</td>
                        <td>1.050.000</td>
                        <td><a class="label label-warning">Tách HĐ</a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/requirement/editvg?id=6033">Sửa</a>
                                    </li>
                                    <li><a class="del_item" data-id="6033">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=6319">6319</a><br>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=15123&amp;token=915afbd64b9ab1f3226cca910b42ed0a">15123</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=3473">Nguyễn Thị Thanh
                                Thảo</a></td>
                        <td><span data-toggle="tooltip" data-title="Nhóm KD 8.7 _Nhi">Lò Aí
                                Nhi</span><br><i
                                class="description text-muted fontsize-85">08/08/2016</i></td>
                        <td>Nạp tiền</td>
                        <td>1.000.000</td>
                        <td><span data-toggle="tooltip" data-title="Quản trị thông tin">Nguyễn Thị
                                Hằng</span></td>
                        <td><i class="fa fa-check text-success"></i>08/08/2016<br><i
                                class="fa fa-minus-circle text-danger"></i>08/08/2016</td>
                        <td>1.000.000<br>
                            <div class="description text-muted fontsize-85"><i>Tài khoản Chính</i>
                            </div>
                        </td>
                        <td></td>
                        <td>50.000</td>
                        <td>1.050.000</td>
                        <td><a class="label label-warning">Tách HĐ</a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/requirement/editvg?id=6319">Sửa</a>
                                    </li>
                                    <li><a class="del_item" data-id="6319">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=5390">5390</a><br>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=15190&amp;token=e718e8e04fc1ff2d019ce577b963765b">15190</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=3531">alo hot</a></td>
                        <td><span data-toggle="tooltip"
                                data-title="Phòng KD Bảo Kim &amp; Wesave">Nguyễn Thiện
                                Tâm</span><br><i
                                class="description text-muted fontsize-85">08/07/2016</i></td>
                        <td>Nạp tiền</td>
                        <td>3.000.000</td>
                        <td><span data-toggle="tooltip" data-title="Quản trị thông tin">Nguyễn Thị
                                Hằng</span></td>
                        <td><i class="fa fa-check text-success"></i>08/07/2016<br><i
                                class="fa fa-minus-circle text-danger"></i>08/07/2016</td>
                        <td>3.000.000<br>
                            <div class="description text-muted fontsize-85"><i>Tài khoản
                                    Marketing</i></div>
                        </td>
                        <td></td>
                        <td>150.000</td>
                        <td>3.150.000</td>
                        <td><a class="label label-warning">Tách HĐ</a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/requirement/editvg?id=5390">Sửa</a>
                                    </li>
                                    <li><a class="del_item" data-id="5390">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=2618">2618</a><br>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=14674&amp;token=e20b29f437f2283f02a68e9e017bc434">14674</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=2738">HUỲNH THỊ
                                NARY</a></td>
                        <td><span data-toggle="tooltip" data-title="Nhóm KD 7">Nguyễn Thị
                                Thảo</span><br><i
                                class="description text-muted fontsize-85">20/04/2016</i></td>
                        <td>GHĐB (mới)</td>
                        <td>2.970.000</td>
                        <td><span data-toggle="tooltip" data-title="Quản trị thông tin">Nguyễn Thị
                                Hằng</span></td>
                        <td><i class="fa fa-check text-success"></i>20/04/2016<br><i
                                class="fa fa-minus-circle text-danger"></i>20/04/2016</td>
                        <td>1.485.000<br>
                            <div class="description text-muted fontsize-85"><i>Tài khoản Chính</i>
                            </div>
                        </td>
                        <td></td>
                        <td></td>
                        <td>1.485.000</td>
                        <td><a class="label label-warning">Tách HĐ</a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/requirement/editvg?id=2618">Sửa</a>
                                    </li>
                                    <li><a class="del_item" data-id="2618">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="text-danger"
                                href="https://erp.nhanh.vn/crm/requirement/viewvg?id=5470">5470</a><br>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/contract/detail?id=15123&amp;token=915afbd64b9ab1f3226cca910b42ed0a">15123</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/crm/account/view?id=3473">Nguyễn Thị Thanh
                                Thảo</a></td>
                        <td><span data-toggle="tooltip" data-title="Phòng KD ĐDV">Trần Văn Anh
                                Vũ</span><br><i
                                class="description text-muted fontsize-85">12/07/2016</i></td>
                        <td>Nạp tiền</td>
                        <td>1.000.000</td>
                        <td><span data-toggle="tooltip" data-title="Quản trị thông tin">Nguyễn Thị
                                Hằng</span></td>
                        <td><i class="fa fa-check text-success"></i>12/07/2016<br><i
                                class="fa fa-minus-circle text-danger"></i>12/07/2016</td>
                        <td>1.000.000<br>
                            <div class="description text-muted fontsize-85"><i>Tài khoản
                                    Marketing</i></div>
                        </td>
                        <td></td>
                        <td>50.000</td>
                        <td>1.050.000</td>
                        <td><a class="label label-warning">Tách HĐ</a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/requirement/editvg?id=5470">Sửa</a>
                                    </li>
                                    <li><a class="del_item" data-id="5470">Xóa</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div class="col-md-6 paginatorItem">
                    <div class="paginator"><span class="labelPages">1 - 30 / 37</span><span
                            class="disabled fa fa-step-backward"></span><span
                            class="disabled fa fa-backward"></span><a class="fa fa-forward"
                            href="https://erp.nhanh.vn/crm/requirement/indexsharevg?page=2"
                            title="Trang sau"></a> <a class="fa fa-step-forward"
                            href="https://erp.nhanh.vn/crm/requirement/indexsharevg?page=2"
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
    <script type="text/javascript" src="{{ asset('asset/js/crm/requirement/indexvg.js') }}"></script>
@endsection