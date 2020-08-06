@extends('Layout.master4')

@section('css')
    <link rel="stylesheet" href="{{ asset('asset/css/accounting/transaction/style.css') }}">
@endsection

@section('title', 'ERP-Thêm phiếu xin thu')

@section('content-page')

    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/accounting"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/accounting/transaction/index">thu chi</a></li>
            <li class="active">Thêm phiếu yêu cầu thu</li>
        </ul>
        <div class="main-header">
            <h2><span class="text-primary"><i class="fa fa-arrow-left"></i> Lập phiếu yêu cầu
                    thu</span></h2>
            <em>Các trường có dấu * là bắt buộc phải nhập</em>
        </div>
        <form method="post" name="fTransaction" enctype="multipart/form-data" id="fTransaction">
            <div class="form-horizontal">
                <div class="col-md-6 ">
                    <fieldset>
                        <div class="form-group"><label class="col-md-4 control-label required">Công
                                ty yêu cầu: <span class="required">*</span> </label>
                            <div class="col-md-8"><select name="companyId" id="companyId"
                                    class="form-control">
                                    <option value="">- Công ty yêu cầu -</option>
                                    <option value="10" selected="selected">VNP group</option>
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
                                </select></div>
                        </div>
                        <div class="form-group"><label class="col-md-4 control-label required">Phòng
                                ban yêu cầu: <span class="required">*</span> </label>
                            <div class="col-md-8"><select name="departmentId" id="departmentId"
                                    class="form-control">
                                    <option value="">- Phòng ban -</option>
                                    <option value="388">Giám đốc</option>
                                    <option value="940">Kế toán</option>
                                    <option value="943" selected="selected">Nhân sự</option>
                                    <option value="1043">Trợ Lý</option>
                                    <option value="1055">Kiểm soát nội bộ</option>
                                    <option value="1112">YPP</option>
                                    <option value="1123">BNC Group</option>
                                    <option value="1145">Quà trực tuyến</option>
                                    <option value="1204">Công ty TNHH Nguồn Nhân Lực Elite Việt Nam
                                    </option>
                                    <option value="1205">-- Tuyển dụng ngoại bộ</option>
                                    <option value="1206">-- Đào tạo ngoại bộ Westart</option>
                                    <option value="1272">Dự Án Westay</option>
                                </select></div>
                        </div>
                        <div class="form-group"><label class="col-md-4 control-label required">Ngày
                                hạch toán: <span class="required">*</span> </label>
                            <div class="col-md-8"><input type="text" name="applyDate"
                                    class="datepicker form-control" id="applyDate"
                                    value="24/07/2020"></div>
                        </div>
                        <div class="form-group"><label class="col-md-4 control-label required">Quỹ
                                thu: <span class="required">*</span> </label>
                            <div class="col-md-8"><select name="accountId" id="accountId"
                                    class="form-control select2-hidden-accessible" tabindex="-1"
                                    aria-hidden="true">
                                    <option value="">- Quỹ -</option>
                                    <option value="321">Tiền chuyển khoản</option>
                                    <option value="880">-- Khối KD độc lập (CK)</option>
                                    <option value="878">-- Welove (Chuyển khoản)</option>
                                    <option value="876">-- Nhanh HCM(Phần cứng)</option>
                                    <option value="874">-- Nhanh HN(Phần cứng)</option>
                                    <option value="872">-- Bizshare HCM</option>
                                    <option value="870">-- WeHelp</option>
                                    <option value="868">-- 9houz (HCM)</option>
                                    <option value="866">-- Nhanh Đà Nẵng(CK)</option>
                                    <option value="864">-- Nhanh HN 2019 (Chuyển khoản)</option>
                                    <option value="856">-- Nhanh HCM 2019 (Chuyển khoản)</option>
                                    <option value="854">-- 9houz</option>
                                    <option value="815">-- KyNguyenSo</option>
                                    <option value="813">-- Bizshare</option>
                                    <option value="810">-- Wesave Hồ Chí Minh</option>
                                    <option value="809">-- Vchat</option>
                                    <option value="807">-- WeMarry</option>
                                    <option value="804">-- IKI</option>
                                    <option value="783">-- WeSave Hà Nội</option>
                                    <option value="775">-- Vật Giá Đà Nẵng</option>
                                    <option value="773">-- Elite</option>
                                    <option value="770">-- Doanh thu phần cứng</option>
                                    <option value="319">-- Vận chuyển Nhanh</option>
                                    <option value="318">-- Doanh thu VC Nhanh</option>
                                    <option value="309">-- Nhanh HCM</option>
                                    <option value="308">-- Nhanh HN</option>
                                    <option value="305">-- Cty cổ phần Vật Giá VN</option>
                                    <option value="307">-- -- Vật Giá HCM</option>
                                    <option value="306">-- -- Vật Giá HN</option>
                                    <option value="320">Tiền mặt</option>
                                    <option value="879">-- Khối KD độc lập (TM)</option>
                                    <option value="877">-- Welove (Tiền mặt)</option>
                                    <option value="875">-- Nhanh HCM(Phần cứng)</option>
                                    <option value="873">-- Nhanh HN(Phần cứng)</option>
                                    <option value="871">-- Bizshare HCM</option>
                                    <option value="869">-- WeHelp</option>
                                    <option value="867">-- 9houz (HCM)</option>
                                    <option value="865">-- Nhanh Đà Nẵng (TM)</option>
                                    <option value="863">-- Nhanh HN 2019 (Tiền mặt)</option>
                                    <option value="855">-- Nhanh HCM 2019 (Tiền mặt)</option>
                                    <option value="853">-- 9houz</option>
                                    <option value="814">-- KyNguyenSo</option>
                                    <option value="812">-- Bizshare</option>
                                    <option value="811">-- Wesave Hồ Chí Minh</option>
                                    <option value="808">-- Vchat</option>
                                    <option value="806">-- WeMarry</option>
                                    <option value="803">-- IKI</option>
                                    <option value="799">-- Amall</option>
                                    <option value="798">-- 123Study</option>
                                    <option value="784">-- WeSave Hà Nội</option>
                                    <option value="777">-- WeStay</option>
                                    <option value="774">-- Vật giá Đà Nẵng</option>
                                    <option value="772">-- Elite</option>
                                    <option value="771">-- Doanh thu phần cứng</option>
                                    <option value="304">-- Nhanh HCM</option>
                                    <option value="303">-- Nhanh HN</option>
                                    <option value="300">-- Cty cổ phần Vật Giá VN</option>
                                    <option value="302">-- -- Vật Giá HCM</option>
                                    <option value="301">-- -- Vật Giá HN</option>
                                    <option value="542">-- -- -- Quỹ Maketing(VG Hà Nội)</option>
                                </select><span
                                    class="select2 select2-container select2-container--default"
                                    dir="ltr" style="width: 493px;"><span class="selection"><span
                                            class="select2-selection select2-selection--single"
                                            role="combobox" aria-haspopup="true"
                                            aria-expanded="false" tabindex="0"
                                            aria-labelledby="select2-accountId-container"><span
                                                class="select2-selection__rendered"
                                                id="select2-accountId-container" title="- Quỹ -">-
                                                Quỹ -</span><span class="select2-selection__arrow"
                                                role="presentation"><b
                                                    role="presentation"></b></span></span></span><span
                                        class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>
                        </div>
                        <div class="form-group"><label class="col-md-4 control-label required">Khoản
                                mục: <span class="required">*</span> </label>
                            <div class="col-md-8"><select name="expenseCategoryId"
                                    id="expenseCategoryId"
                                    class="form-control select2-hidden-accessible" tabindex="-1"
                                    aria-hidden="true">
                                    <option value="">- Khoản mục -</option>
                                    <option value="149">Chi khác</option>
                                    <option value="28">Thu khác</option>
                                </select><span
                                    class="select2 select2-container select2-container--default"
                                    dir="ltr" style="width: 493px;"><span class="selection"><span
                                            class="select2-selection select2-selection--single"
                                            role="combobox" aria-haspopup="true"
                                            aria-expanded="false" tabindex="0"
                                            aria-labelledby="select2-expenseCategoryId-container"><span
                                                class="select2-selection__rendered"
                                                id="select2-expenseCategoryId-container"
                                                title="- Khoản mục -">- Khoản mục -</span><span
                                                class="select2-selection__arrow"
                                                role="presentation"><b
                                                    role="presentation"></b></span></span></span><span
                                        class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>
                        </div>
                        <div class="form-group"><label class="col-md-4 control-label required">Số
                                tiền <span class="required">*</span> </label>
                            <div class="col-md-8"><input type="text" name="amount"
                                    class="intAutoNumeric form-control" id="amount" value=""></div>
                        </div>
                        <div class="form-group"><label class="col-md-4 control-label">Link Đối
                                Soát:</label>
                            <div class="col-md-8"><textarea name="link" class="form-control"
                                    id="link"></textarea></div>
                        </div>
                        <div class="form-group"><label class="col-md-4 control-label">Nội dung/ Ghi
                                chú:</label>
                            <div class="col-md-8"><textarea name="description" class="form-control"
                                    id="description"></textarea></div>
                        </div>
                        <div class="form-group"><label class="col-md-4 control-label">File
                                upload:</label>
                            <div class="col-md-8"><input type="file" name="fileUpload[]"
                                    multiple="multiple" id="fileUpload"></div>
                        </div>
                    </fieldset>
                </div>
                <div style="clear:both"></div>
                <div class="col-md-6">
                    <div>
                        <div class="form-group"><label class="col-md-4 control-label"></label>
                            <div class="col-md-8"><input name="btnSubmit" type="submit" id="btnSave"
                                    class="btn btn-primary" value="Lưu"></div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection


@section('js')

    <script type="text/javascript">
        var usrCnf = {
            language: 'vi'
        };

    </script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/transaction/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/transaction/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/transaction/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/transaction/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/transaction/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/transaction/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/transaction/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/transaction/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/transaction/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/transaction/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/transaction/saved_resource(2)') }}"></script>


@endsection
