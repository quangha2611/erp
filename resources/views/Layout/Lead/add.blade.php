@extends('Layout.master')

@section('title','ERP-Check thông tin')

@section('css')
	<link rel="stylesheet" href="{{ asset('asset/css/lead/style.css') }}" type="text/css">
@endsection

@section('content-page')
    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/crm/lead/index">Danh sách thông tin</a></li>
            <li class="active">Nhập thông tin</li>
        </ul>
        <div id="page-crm-contact-add">

            <div class="main-header">
                <h2>Nhập thông tin</h2>
                <em>Các trường có dấu * là bắt buộc phải nhập</em>
            </div>

            <form id="crmLead" name="crmLead" method="post"
                action="https://erp.nhanh.vn/crm/lead/add">
                <div class="form-horizontal">
                    <div class="col-md-6">
                        <fieldset>
                            <legend>Thông tin chung</legend>
                            <input type="hidden" name="companyId" id="companyId" value="391">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Loại thông tin:<span
                                        class="required">*</span></label>
                                <div class="col-md-8">
                                    <div class="type-content content">
                                        <select name="type" id="type" class="type form-control">
                                            <option value="">- Loại -</option>
                                            <option value="1">Công ty</option>
                                            <option value="2" selected="selected">Cá nhân</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Tên cá nhân đại diện:<span
                                        style="color:red;" class="required">*</span></label>
                                <div class="col-md-8">
                                    <input type="text" name="name" maxlength="255" id="name"
                                        class="form-control" value=""> </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Phone: <span
                                        class="required">*</span> </label>
                                <div class="col-md-8">
                                    <div class="phone-content content">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i
                                                    class="fa fa-phone"></i></span>
                                            <input type="text" name="phone" maxlength="13"
                                                id="phone" class="phone form-control" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-group-btn">
                                <label class="col-md-4"></label>
                                <div class="col-md-8">
                                    <span class="addPhone  addBtn btn btn-info"> <i
                                            class="fa fa-plus"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Nghành nghề: <span
                                        style="color: red;" class="required">*</span> </label>

                                <div class="col-md-8">
                                    <select name="industrySelect" id="industrySelect"
                                        class="form-control select2-hidden-accessible" tabindex="-1"
                                        aria-hidden="true">
                                        <option value="">- Ngành nghề -</option>
                                        <option value="1">Thời trang, phụ kiện</option>
                                        <option value="2">Mỹ phẩm</option>
                                        <option value="3">Điện tử, Điện máy</option>
                                        <option value="4">Sách, văn phòng, quà tặng</option>
                                        <option value="5">Dịch vụ, giải trí, du lịch</option>
                                        <option value="6">Đồ dùng sinh hoạt</option>
                                        <option value="8">Sức khỏe, sắc đẹp</option>
                                        <option value="10">Điện thoại, Viễn thông</option>
                                        <option value="11">Máy tính, Linh kiện</option>
                                        <option value="13">Thực phẩm, đồ uống, hàng tiêu dùng
                                        </option>
                                        <option value="16">Nội thất, ngoại thất</option>
                                        <option value="18">Thể thao</option>
                                        <option value="19">Máy ảnh, máy quay</option>
                                        <option value="20">Ô tô, xe máy, xe đạp</option>
                                        <option value="21">Công nghiệp - xây dựng</option>
                                        <option value="24">Bất động sản</option>
                                        <option value="25">Hoạt động cấp tín dụng khác</option>
                                        <option value="26">Hoạt động tư vấn đầu tư</option>
                                        <option value="27">Hoạt động liên quan đến tài chính tín
                                            dụng</option>
                                        <option value="28">Hoạt động kinh doanh khác</option>
                                    </select><span
                                        class="select2 select2-container select2-container--default select2-container--below"
                                        dir="ltr" style="width: 489px;"><span
                                            class="selection"><span
                                                class="select2-selection select2-selection--single"
                                                role="combobox" aria-haspopup="true"
                                                aria-expanded="false" tabindex="0"
                                                aria-labelledby="select2-industrySelect-container"><span
                                                    class="select2-selection__rendered"
                                                    id="select2-industrySelect-container"
                                                    title="- Ngành nghề -">- Ngành nghề
                                                    -</span><span class="select2-selection__arrow"
                                                    role="presentation"><b
                                                        role="presentation"></b></span></span></span><span
                                            class="dropdown-wrapper"
                                            aria-hidden="true"></span></span> </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div id="industry-items" class="col-md-8">

                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-4 control-label">Thành phố: <span
                                        style="color: red;" class="required">*</span> </label>

                                <div class="col-md-8">
                                    <select name="cityId" id="cityId"
                                        class="form-control select2-hidden-accessible" tabindex="-1"
                                        aria-hidden="true">
                                        <option value="">- Thành phố -</option>
                                        <option value="2">Hà Nội</option>
                                        <option value="3">Hồ Chí Minh</option>
                                        <option value="4">An Giang</option>
                                        <option value="5">Bà Rịa - Vũng Tàu</option>
                                        <option value="6">Bắc Ninh</option>
                                        <option value="7">Bắc Giang</option>
                                        <option value="8">Bình Dương</option>
                                        <option value="9">Bình Định</option>
                                        <option value="10">Bình Phước</option>
                                        <option value="11">Bình Thuận</option>
                                        <option value="13">Bến Tre</option>
                                        <option value="14">Bắc Cạn</option>
                                        <option value="15">Cần Thơ</option>
                                        <option value="17">Khánh Hòa</option>
                                        <option value="19">Thừa Thiên Huế</option>
                                        <option value="20">Lào Cai</option>
                                        <option value="21">Quảng Ninh</option>
                                        <option value="22">Đồng Nai</option>
                                        <option value="23">Nam Định</option>
                                        <option value="24">Cà Mau</option>
                                        <option value="25">Cao Bằng</option>
                                        <option value="26">Gia Lai</option>
                                        <option value="27">Hà Giang</option>
                                        <option value="28">Hà Nam</option>
                                        <option value="30">Hà Tĩnh</option>
                                        <option value="31">Hải Dương</option>
                                        <option value="32">Hải Phòng</option>
                                        <option value="33">Hoà Bình</option>
                                        <option value="34">Hưng Yên</option>
                                        <option value="35">Kiên Giang</option>
                                        <option value="36">Kon Tum</option>
                                        <option value="37">Lai Châu</option>
                                        <option value="38">Lâm Đồng</option>
                                        <option value="39">Lạng Sơn</option>
                                        <option value="40">Long An</option>
                                        <option value="41">Nghệ An</option>
                                        <option value="42">Ninh Bình</option>
                                        <option value="43">Ninh Thuận</option>
                                        <option value="44">Phú Thọ</option>
                                        <option value="45">Phú Yên</option>
                                        <option value="46">Quảng Bình</option>
                                        <option value="47">Quảng Nam</option>
                                        <option value="48">Quảng Ngãi</option>
                                        <option value="49">Quảng Trị</option>
                                        <option value="50">Sóc Trăng</option>
                                        <option value="51">Sơn La</option>
                                        <option value="52">Tây Ninh</option>
                                        <option value="53">Thái Bình</option>
                                        <option value="54">Thái Nguyên</option>
                                        <option value="55">Thanh Hoá</option>
                                        <option value="56">Tiền Giang</option>
                                        <option value="57">Trà Vinh</option>
                                        <option value="58">Tuyên Quang</option>
                                        <option value="59">Vĩnh Long</option>
                                        <option value="60">Vĩnh Phúc</option>
                                        <option value="61">Yên Bái</option>
                                        <option value="62">Đắc Lắc</option>
                                        <option value="64">Đồng Tháp</option>
                                        <option value="65">Đà Nẵng</option>
                                        <option value="66">Buôn Mê Thuột</option>
                                        <option value="67">Đắc Nông</option>
                                        <option value="68">Hậu Giang</option>
                                        <option value="70">Bạc Liêu</option>
                                        <option value="71">Điện Biên</option>
                                    </select><span
                                        class="select2 select2-container select2-container--default select2-container--below"
                                        dir="ltr" style="width: 489px;"><span
                                            class="selection"><span
                                                class="select2-selection select2-selection--single"
                                                role="combobox" aria-haspopup="true"
                                                aria-expanded="false" tabindex="0"
                                                aria-labelledby="select2-cityId-container"><span
                                                    class="select2-selection__rendered"
                                                    id="select2-cityId-container" title="Hà Nội">Hà
                                                    Nội</span><span class="select2-selection__arrow"
                                                    role="presentation"><b
                                                        role="presentation"></b></span></span></span><span
                                            class="dropdown-wrapper"
                                            aria-hidden="true"></span></span> </div>
                            </div>



                            <div class="form-group">
                                <label class="col-md-4 control-label">Quận huyện:</label>
                                <div class="col-md-8">
                                    <select name="districtId" id="districtId"
                                        class="form-control select2-hidden-accessible" tabindex="-1"
                                        aria-hidden="true">
                                        <option value="">- Quận huyện -</option>
                                        <option value="1">Quận Hoàng Mai</option>
                                        <option value="2">Quận Ba Đình</option>
                                        <option value="3">Quận Long Biên</option>
                                        <option value="4">Quận Cầu Giấy</option>
                                        <option value="5">Quận Đống Đa</option>
                                        <option value="6">Quận Hai Bà Trưng</option>
                                        <option value="7">Quận Hoàn Kiếm</option>
                                        <option value="8">Quận Tây Hồ</option>
                                        <option value="9">Quận Thanh Xuân</option>
                                        <option value="10">Huyện Ba Vì</option>
                                        <option value="11">Huyện Chương Mỹ</option>
                                        <option value="12">Huyện Đan Phượng</option>
                                        <option value="15">Huyện Gia Lâm</option>
                                        <option value="16">Huyện Hoài Đức</option>
                                        <option value="17">Huyện Mê Linh</option>
                                        <option value="18">Huyện Mỹ Đức</option>
                                        <option value="19">Huyện Phú Xuyên</option>
                                        <option value="20">Huyện Phúc Thọ</option>
                                        <option value="21">Huyện Quốc Oai</option>
                                        <option value="22">Huyện Sóc Sơn</option>
                                        <option value="23">Huyện Thạch Thất</option>
                                        <option value="24">Huyện Thanh Oai</option>
                                        <option value="25">Huyện Thanh Trì</option>
                                        <option value="26">Huyện Thường Tín</option>
                                        <option value="27">Huyện Từ Liêm</option>
                                        <option value="28">Huyện Ứng Hòa</option>
                                        <option value="63">Quận Hà Đông</option>
                                        <option value="555">Huyện Đông Anh</option>
                                        <option value="697">Thị xã Sơn Tây</option>
                                    </select><span
                                        class="select2 select2-container select2-container--default select2-container--below"
                                        dir="ltr" style="width: 489px;"><span
                                            class="selection"><span
                                                class="select2-selection select2-selection--single"
                                                role="combobox" aria-haspopup="true"
                                                aria-expanded="false" tabindex="0"
                                                aria-labelledby="select2-districtId-container"><span
                                                    class="select2-selection__rendered"
                                                    id="select2-districtId-container"
                                                    title="- Quận huyện -">- Quận huyện
                                                    -</span><span class="select2-selection__arrow"
                                                    role="presentation"><b
                                                        role="presentation"></b></span></span></span><span
                                            class="dropdown-wrapper"
                                            aria-hidden="true"></span></span> </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Nguồn:</label>
                                <div class="col-md-8">
                                    <select name="source" id="source" class="form-control">
                                        <option value="">- Nguồn -</option>
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
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Chi tiết nguồn:</label>
                                <div class="col-md-8">
                                    <input type="text" name="sourceReference" maxlength="255"
                                        id="sourceReference" class="form-control" value=""> </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Ghi chú: </label>
                                <div class="col-md-8">
                                    <textarea name="description" class="form-control"
                                        id="description"></textarea> </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-4 control-label">Yêu cầu chăm sóc gọi
                                    lại:</label>
                                <div class="col-md-8">
                                    <input type="hidden" name="requestPhonecall" value="0"><input
                                        type="checkbox" name="requestPhonecall"
                                        id="requestPhonecall" value="1"> </div>
                            </div>
                            <div class="form-group" style="">
                                <label class="col-md-4 control-label">Thời điểm gọi:</label>
                                <div class="col-md-8">
                                    <select name="requestTimeCall" id="requestTimeCall"
                                        class="form-control">
                                        <option value="1">Trong ngày</option>
                                        <option value="2">Trong 2 ngày</option>
                                        <option value="3">Trong 3 ngày</option>
                                        <option value="7">Trong tuần</option>
                                    </select> </div>
                            </div>
                            <div class="form-group" style="">
                                <label class="col-md-4 control-label required">Người gọi:</label>
                                <div class="col-md-8">
                                    <input type="text" name="requestUserIds" style="display:none;"
                                        id="requestUserIds" class="form-control" value="">
                                    <div class="bootstrap-tagsinput" id="calendar_user_input">
                                        <input size="1" type="text" placeholder="" id="tag-input"
                                            class="ui-autocomplete-input" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-md-6">
                        <fieldset>
                            <legend>Thông tin xác thực</legend>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Tên doanh nghiệp:</label>
                                <div class="col-md-8">
                                    <input type="text" name="companyName" maxlength="255"
                                        id="companyName" class="form-control" value="">
                                    <div class="description text-muted fontsize-85">Nhập <b
                                            class="text-danger">Tên Doanh nghiệp</b> là bắt buộc nếu
                                        loại thông tin là công ty</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Chức danh:</label>
                                <div class="col-md-8">
                                    <input type="text" name="title" maxlength="255" id="title"
                                        class="form-control" value=""> </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Phòng ban công tác:</label>
                                <div class="col-md-8">
                                    <input type="text" name="department" maxlength="255"
                                        id="department" class="form-control" value=""> </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">CMND:</label>
                                <div class="col-md-8">
                                    <div class="identification-content content">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i
                                                    class="fa fa-user"></i></span>
                                            <input type="text" name="identification" maxlength="45"
                                                id="identification"
                                                class="identification form-control" value=""> </div>

                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-8">
                                    <div class="col-md-6 row">
                                        <div class="identificationPlace-content content">
                                            <input type="text" name="identificationPlace"
                                                placeholder="Nơi cấp" id="identificationPlace"
                                                class="identificationPlace form-control pull-left"
                                                value=""> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="identificationDate-content content">
                                            <input type="text" name="identificationDate"
                                                class="identificationDate form-control datepicker"
                                                placeholder="Ngày cấp" id="identificationDate"
                                                value=""> </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Mã số thuế:</label>
                                <div class="col-md-8">
                                    <div class="content">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i
                                                    class="fa fa-plus"></i></span>
                                            <input type="text" name="taxCode" maxlength="20"
                                                id="taxCode" class="taxCode form-control" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="form-group">
                                <label class="col-md-4 control-label">Địa chỉ: </label>
                                <div class="col-md-8">
                                    <div class="address-content content">
                                        <input type="text" name="address" maxlength="255"
                                            id="address" class="address form-control" value="">
                                    </div>

                                </div>
                            </div>
                            <div class="form-group form-group-btn">
                                <label class="col-md-4"></label>
                                <div class="col-md-8">
                                    <span class="addAddress addBtn btn btn-info"> <i
                                            class="fa fa-plus"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Email:</label>
                                <div class="col-md-8">
                                    <div class="email-content content">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i
                                                    class="fa fa-envelope-o"></i></span>
                                            <input type="text" name="email" maxlength="255"
                                                id="email" class="email form-control" value="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group form-group-btn">
                                <label class="col-md-4"></label>
                                <div class="col-md-8">
                                    <span class="addEmail addBtn btn btn-info"> <i
                                            class="fa fa-plus"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Website doanh nghiệp:</label>
                                <div class="col-md-8">
                                    <div class="website-content content">
                                        <input type="text" name="website" maxlength="255"
                                            id="website" class="website form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-group-btn">
                                <label class="col-md-4"></label>
                                <div class="col-md-8">
                                    <span class="addWebsite addBtn btn btn-info"> <i
                                            class="fa fa-plus"></i>
                                    </span>
                                </div>
                            </div>




                            <div class="form-group form-group-btn">
                                <label class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="hidden" name="websites" id="websites" value="">
                                    <input type="hidden" name="addresses" id="addresses" value="">
                                    <input type="hidden" name="phones" id="phones" value=""> <input
                                        type="hidden" name="emails" id="emails" value=""> <input
                                        type="hidden" name="industries" id="industries" value="">
                                </div>
                            </div>


                        </fieldset>
                    </div>
                    <div class="clearfix"></div>

                    <input type="hidden" value="" id="id" name="id">
                    <div style="clear: both"></div>
                    <div class="col-md-12">
                        <div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Sau khi lưu dữ liệu:</label>
                                <div class="col-md-10">
                                    <label class="radio radio-inline"><input checked="checked"
                                            type="radio" value="/crm/lead/add"
                                            name="afterSubmit">Tiếp tục nhập thông tin</label><label
                                        class="radio radio-inline"><input type="radio"
                                            value="/crm/customer/indexvg" name="afterSubmit">Hiện
                                        danh sách thông tin</label> </div>
                            </div>
                        </div>
                    </div>
                    <div style="clear: both"></div>
                    <div class="col-md-6">
                        <div>
                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-8">
                                    <input name="btnSubmit" type="button" id="btnSaveCrmLead"
                                        class="btn btn-primary" value="Lưu"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- Dialog bootstrap -->
        <div id="alertModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">×</button>
                        <h4 class="modal-title">Thông báo</h4>
                    </div>
                    <div class="modal-body"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .form-group-btn {
                margin-top: -7px !important;
                margin-bottom: 6px !important;
            }

            .addBtn {
                padding: 2px 6px;
                float: right;
                cursor: pointer
            }

            #crmLead .content input[type="text"] {
                margin-bottom: 12px;
            }

            #crmLead .content .input-group {
                margin-bottom: 12px;
            }

            #crmLead .content .input-group:last-child {
                margin-bottom: 0px;
            }

            #crmLead .content input[type="text"]:last-child {
                margin-bottom: 0px;
            }

            .required {
                color: red;
            }

            #crmLead input[type="checkbox"] {
                margin-top: 9px;
            }

            .bootstrap-tagsinput {
                width: 100%;
            }

            .care-leadId,
            .care-account {
                cursor: pointer;
            }

            .removeItem {
                cursor: pointer;
                margin-left: 3px;
            }

            .industry-item {
                float: left;
                margin-right: 3px;
                margin-bottom: 3px;
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
    <script type="text/javascript" src="{{ asset('asset/js/lead/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/lead/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/lead/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/lead/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/lead/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/lead/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/lead/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/lead/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/lead/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/lead/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/lead/indexvg.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/lead/saved_resource(2)') }}"></script>
@endsection