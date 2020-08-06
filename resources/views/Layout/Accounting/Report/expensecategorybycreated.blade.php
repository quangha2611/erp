@extends('Layout.master4')

@section('css')
    <link rel="stylesheet" href="{{ asset('asset/css/accounting/report/style.css') }}">
@endsection

@section('title', 'ERP-Báo cáo khoản mục thu chi theo người tạo')

@section('content-page')

    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/accounting"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/accounting/report/expensecategorybycreated">Báo cáo
                    khoản mục thu chi theo người tạo</a></li>
        </ul>
        <div class="filterContainer">
            <form method="GET" name="transactionFilter" class="form-inline lolify" role="form"
                id="transactionFilter">
                <div class="col-md-10 lolify-default">

                    <div class="form-group">
                        <input type="text" name="applyDate" class="form-control date-range-picker"
                            id="applyDate" value="01/07/2020 - 31/07/2020"> </div>
                    <div class="form-group">
                        <input type="text" name="q" maxlength="255" placeholder="Tên hoặc mã code"
                            id="q" class="form-control" value=""> </div>
                    <div class="form-group">
                        <select name="companyId" id="companyId" class="form-control">
                            <option value="">- Công ty -</option>
                            <option value="10">VNP group</option>
                            <option value="2">--Công ty cổ phần Vật Giá Việt Nam</option>
                            <option value="315" selected="selected">----Vật giá - Hà Nội</option>
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
                            <option value="402">--Công ty TNHH Nguồn Nhân Lực Elite Việt Nam
                            </option>
                        </select> </div>
                    <div class="form-group">
                        <select name="departmentId" id="departmentId" class="form-control">
                            <option value="">- Phòng ban -</option>
                            <option value="516">Phòng chăm sóc khách hàng - Online</option>
                            <option value="520">IT</option>
                            <option value="522">-- IT-Vật Giá</option>
                            <option value="1295">-- -- IT - Anh Toản</option>
                            <option value="1296">-- -- IT - Anh Tuấn</option>
                            <option value="523">-- IT-Sever</option>
                            <option value="532">Tài chính</option>
                            <option value="535">-- Tài chính - Kế toán</option>
                            <option value="548">-- Tư pháp</option>
                            <option value="538">Nhân sự</option>
                            <option value="539">-- HCNS</option>
                            <option value="541">-- Tuyển Dụng</option>
                            <option value="544">-- Đào tạo</option>
                            <option value="606">-- PR nội bộ</option>
                            <option value="613">Pub.vn</option>
                            <option value="619">123doc</option>
                            <option value="1048">Vchat</option>
                            <option value="1094">BA</option>
                            <option value="1106">Sales</option>
                            <option value="550">-- Sale Sàn</option>
                            <option value="551">-- -- Phòng KD 2</option>
                            <option value="560">-- -- Phòng KD 4</option>
                            <option value="1265">-- -- -- Phòng KD 4.1</option>
                            <option value="1266">-- -- -- Phòng KD 4.2</option>
                            <option value="1267">-- -- -- Phòng KD 4.3</option>
                            <option value="561">-- -- Phòng KD 6</option>
                            <option value="1162">-- -- -- Nhóm KD 6.1</option>
                            <option value="567">-- -- Phòng KD 9</option>
                            <option value="570">-- -- -- Nhóm KD 9.1</option>
                            <option value="1122">-- -- Phòng KD 10</option>
                            <option value="1134">-- -- Phòng KD 5</option>
                            <option value="1146">-- -- Phòng KD 7</option>
                            <option value="552">-- -- -- Nhóm KD 7.2</option>
                            <option value="572">-- -- -- Nhóm KD 7.1</option>
                            <option value="591">-- Phòng CSGH</option>
                            <option value="1111">Wesave</option>
                            <option value="1166">Nhập liệu - CSKH</option>
                            <option value="1167">Hỏi đáp - CSKH</option>
                            <option value="1303">So Sánh Nhà</option>
                            <option value="1305">Content Marketing</option>
                            <option value="1306">Dự án</option>
                            <option value="1290">-- Bizshare</option>
                            <option value="1426">Dự án VNP Software</option>
                        </select> </div>
                    <div class="form-group">
                        <input name="submit" type="submit" id="btnFilterCompanyContact"
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
                            <li><a id="exportAll"
                                    href="https://erp.nhanh.vn/accounting/report/expensecategorybycreated?applyDate=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=315&amp;submit=L%E1%BB%8Dc#"><i
                                        class="fa fa-file-excel-o"></i> Xuất toàn bộ</a></li>
                        </ul>
                    </div>


                </div>
            </form>
            <div class="clearfix"></div>
            <div class="lolify-left-menu" style="display: none;">
            </div>
        </div>
        <div class="dgContainer">
            <div style="display: none; width: 1569px;" class="stickyHeader">
                <table class="table table-bordered" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr class="even">
                            <th style="width: 105px;">Mã code</th>
                            <th style="width: 264px;">Tên nhân viên</th>
                            <th style="width: 185px;">Công ty</th>
                            <th style="width: 217px;">Phòng ban</th>
                            <th style="width: 151px;">Chi khác</th>
                            <th style="width: 207px;">Khoản giữ lại MKT</th>
                            <th style="width: 175px;">Xin mua tài sản</th>
                            <th style="width: 152px;">Tổng chi</th>
                            <th style="width: 112px;">Tổng thu</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div style="clear: both;"></div><br>
            </div>
            <table id="dgContainer" class="table table-bordered">
                <thead>
                    <tr class="even">
                        <th>Mã code</th>
                        <th>Tên nhân viên</th>
                        <th>Công ty</th>
                        <th>Phòng ban</th>
                        <th>Chi khác</th>
                        <th>Khoản giữ lại MKT</th>
                        <th>Xin mua tài sản</th>
                        <th>Tổng chi</th>
                        <th>Tổng thu</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td>8187</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=6893&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Phùng
                                Thị Thu Phương</a></td>
                        <td>Vật giá - Hà Nội</td>
                        <td>Tài chính - Kế toán</td>
                        <td>11.500.000</td>
                        <td></td>
                        <td></td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=6893&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">11.500.000</a>
                        </td>
                        <td>0</td>
                    </tr>
                    <tr class="even">
                        <td>0553</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=1172&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Trịnh
                                Anh Tuấn</a></td>
                        <td>Vật giá - Hà Nội</td>
                        <td>Pub.vn</td>
                        <td>427.131.396</td>
                        <td></td>
                        <td>72.400.000</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=1172&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">499.531.396</a>
                        </td>
                        <td>0</td>
                    </tr>
                    <tr class="">
                        <td>8186</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=6892&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Nguyễn
                                Thị Hồng Vân</a></td>
                        <td>Vật giá - Hà Nội</td>
                        <td>Tài chính - Kế toán</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr class="even">
                        <td>0009</td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=1038&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">Đặng
                                Quốc Dũng</a></td>
                        <td>Vật giá - Hà Nội</td>
                        <td>IT-Sever</td>
                        <td>42.900.000</td>
                        <td></td>
                        <td></td>
                        <td><a
                                href="https://erp.nhanh.vn/accounting/transaction/index?createdById=1038&amp;type=4&amp;applyDateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;statusActive=1">42.900.000</a>
                        </td>
                        <td>0</td>
                    </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
            </div>
        </div>
        <style>
            #dgTransaction i.date {
                font-size: 0.85em;
            }

            b.red {
                color: #ff0000;
            }

            .rowEnd {
                background: #f1f1f1;
            }

            .dgContainer {
                width: 100%;
                overflow: auto;
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
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/report/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/report/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/report/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/report/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/report/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/report/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/report/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/report/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/report/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/report/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/report/saved_resource(2)') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/accounting/report/saved_resource(3)') }}"></script>


@endsection
