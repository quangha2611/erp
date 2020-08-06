@extends('Layout.master1')

@section('css')
    <link href="{{ asset('asset/css/crm/report/bootstrap-multiselect.css') }}" media="screen" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/css/crm/report/style.css') }}" type="text/css">
@endsection

@section('title','ERP-Báo cáo chỉ tiêu chăm sóc trong ngày')

@section('content-page')

    <div class="tab-content">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li class="active">Báo cáo chỉ tiêu chăm sóc trong ngày</li>
        </ul>
        <div class="filterContainer">
            <form method="GET" name="customercareDailyTarget" class="form-inline" role="form"
                id="customercareDailyTarget">
                <div class="form-group"><input type="text" name="date"
                        class="form-control datepicker" placeholder="Ngày" id="date"
                        value="01/02/2019"></div>
                <div class="form-group"><select name="companyId" id="companyId"
                        class="form-control">
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
                        <option value="1" selected="selected">----Nhanh.vn</option>
                        <option value="366">----Nhanh.vn Đà Nẵng</option>
                        <option value="395">----Nhanh.vn HCM</option>
                        <option value="379">--Westay</option>
                        <option value="384">--Công ty cổ phần WeHelp</option>
                        <option value="398">--WeLove</option>
                        <option value="402">--Công ty TNHH Nguồn Nhân Lực Elite Việt Nam
                        </option>
                    </select></div>
                <div class="form-group"><select name="departmentId" id="departmentId"
                        class="form-control">
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
                    </select></div>
                <div class="form-group"><input type="text" name="employeeName"
                        placeholder="Nhân viên" id="employeeName"
                        class="form-control ui-autocomplete-input" value="" autocomplete="off">
                </div> <input type="hidden" name="employeeId" id="employeeId"
                    class="form-control" value="">
                <div class="form-group"><input name="submit" type="submit"
                        id="btnFilterCrmContact" class="form-control btn btn-primary"
                        value="Lọc"></div>
            </form>
        </div>
        <div class="dgContainer">
            <div style="display: none; width: 1889px;" class="stickyHeader">
                <table class="table table-bordered" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr class="even">
                            <th rowspan="2" style="width: 168px;">Mã NV</th>
                            <th rowspan="2" style="width: 236px;">Nhân viên</th>
                            <th colspan="3" style="width: 494px;">Tìm</th>
                            <th colspan="3" style="width: 494px;">Gọi</th>
                            <th colspan="3" style="width: 496px;">Gặp</th>
                        </tr>
                        <tr>
                            <th style="width: 192px;">Đăng kí</th>
                            <th style="width: 192px;">Thực tế</th>
                            <th style="width: 110px;">Đạt</th>
                            <th style="width: 192px;">Đăng kí</th>
                            <th style="width: 192px;">Thực tế</th>
                            <th style="width: 110px;">Đạt</th>
                            <th style="width: 192px;">Đăng kí</th>
                            <th style="width: 193px;">Thực tế</th>
                            <th style="width: 111px;">Đạt</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div style="clear: both;"></div><br>
            </div>
            <table class="table table table-bordered" id="customercareDailyTargetDg">
                <thead>
                    <tr class="even">
                        <th rowspan="2">Mã NV</th>
                        <th rowspan="2">Nhân viên</th>
                        <th colspan="3">Tìm</th>
                        <th colspan="3">Gọi</th>
                        <th colspan="3">Gặp</th>
                    </tr>
                    <tr class="">
                        <th>Đăng kí</th>
                        <th>Thực tế</th>
                        <th>Đạt</th>
                        <th>Đăng kí</th>
                        <th>Thực tế</th>
                        <th>Đạt</th>
                        <th>Đăng kí</th>
                        <th>Thực tế</th>
                        <th>Đạt</th>
                    </tr>
                </thead>
            </table>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
            </div>
        </div>
    </div>
</div>
    
@endsection

@section('js')
    <script type="text/javascript" charset="UTF-8" src="{{ asset('asset/js/crm/report/loader.js') }}"></script>
    <script type="text/javascript" charset="UTF-8" src="{{ asset('asset/js/crm/report/jsapi_compiled_default_module.js') }}"></script>
    <script type="text/javascript" charset="UTF-8" src="{{ asset('asset/js/crm/report/jsapi_compiled_graphics_module.js') }}"></script>
    <script type="text/javascript" charset="UTF-8" src="{{ asset('asset/js/crm/report/jsapi_compiled_ui_module.js') }}"> </script>
    <script type="text/javascript" charset="UTF-8" src="{{ asset('asset/js/crm/report/jsapi_compiled_fw_module.js') }}"> </script>
    <script type="text/javascript" charset="UTF-8" src="{{ asset('asset/js/crm/report/jsapi_compiled_corechart_module.js') }}"></script>

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
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/jsapi') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/saved_resource(2)') }}"></script>
@endsection