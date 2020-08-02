@extends('Layout.master')

@section('title','ERP-Danh Sách Từ Khóa')

@section('css')
    <link href="{{ asset('asset/css/crm/auction/bootstrap-multiselect.css" media="screen') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/css/crm/auction/style.css') }}" type="text/css">
@endsection


@section('content-page')
    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/crm/auction/crm/auction/join">Danh sách phiên đấu
                    giá</a></li>
        </ul>
        <div class="filterContainer">
            <form method="GET" name="IndexFilter" class="form-inline lolify" role="form"
                id="IndexFilter">
                <div class="col-md-10 lolify-default">

                    <div class="form-group">
                        <input type="text" name="keyword" maxlength="255" placeholder="Từ khóa"
                            id="keyword" class="form-control" value=""> </div>
                    <div class="form-group">
                        <input type="text" name="startingAmount" placeholder="Giá khởi điểm"
                            class="form-control intAutoNumeric" id="startingAmount" value=""> </div>
                    <div class="form-group">
                        <input type="text" name="slideAmount" placeholder="Giá thấp nhất"
                            class="form-control intAutoNumeric" id="slideAmount" value=""> </div>
                    <div class="form-group">
                        <input type="text" name="expectedAmount" placeholder="Giá thắng ngay"
                            class="form-control intAutoNumeric" id="expectedAmount" value=""> </div>
                    <div class="form-group">
                        <input name="submit" type="submit" id="btnSubmit"
                            class="form-control btn btn-primary" value="Lọc"> </div>

                </div>
                <div class="col-md-2 lolify-control">


                    <button class="btn  pull-right lolify-showextend" type="button"
                        data-toggle="tooltip" data-placement="top" title=""
                        data-original-title="bộ lọc nâng cao">
                        <span class="fa fa-th"></span>
                    </button>
                </div>
                <div class="col-md-12 lolify-extend" style="">
                    <div class="form-group">
                        <select name="companyId" id="companyId" class="form-control">
                            <option value="">- Công ty -</option>
                            <option value="10">VNP group</option>
                            <option value="2">---Công ty cổ phần Vật Giá Việt Nam</option>
                            <option value="315">------Vật giá - Hà Nội</option>
                            <option value="319">------Vật giá - Hồ Chí Minh</option>
                            <option value="365">------Vật giá - Hải Phòng</option>
                            <option value="387">------WeSave</option>
                            <option value="389">------123doc.org</option>
                            <option value="390">------Cunghocvui.com</option>
                            <option value="391">------123job.vn</option>
                            <option value="392">------9houz.com</option>
                            <option value="393">------123dok.com</option>
                            <option value="321">---Công ty cổ phần TMDT Bảo Kim</option>
                            <option value="322">------Bảo Kim - Hà Nội</option>
                            <option value="323">------Bảo Kim - Hồ Chí Minh</option>
                            <option value="324">---Công ty cổ phần Nhanh.vn</option>
                            <option value="1">------Nhanh.vn</option>
                            <option value="366">------Nhanh.vn Đà Nẵng</option>
                            <option value="395">------Nhanh.vn HCM</option>
                            <option value="379">---Westay</option>
                            <option value="384">---Công ty cổ phần WeHelp</option>
                            <option value="398">---WeLove</option>
                        </select> </div>
                    <div class="form-group">
                        <select name="categoryId" id="categoryId" class="form-control">
                            <option value="">- Danh mục đấu giá -</option>
                            <option value="5">Đấu giá số hotline</option>
                            <option value="4">Đấu giá Vchat</option>
                            <option value="3">Đấu giá từ khóa SEO</option>
                            <option value="2">Đấu giá số điện thoại quảng cáo</option>
                            <option value="1">Đấu Giá Gian hàng</option>
                        </select> </div>
                    <div class="form-group">
                        <select name="status" id="status" class="form-control">
                            <option value="">- Trạng thái -</option>
                            <option value="1">Đã Duyệt</option>
                            <option value="2">Không duyệt</option>
                            <option value="3">Mới</option>
                            <option value="4">Kết thúc</option>
                        </select> </div>
                    <div class="form-group">
                        <input type="text" name="id" maxlength="10" placeholder="ID" id="id"
                            class="form-control" value=""> </div>
                    <div class="form-group">
                        <input type="text" name="createdDateRange" maxlength="225"
                            placeholder="Ngày tạo" class="form-control date-range-picker"
                            id="createdDateRange" value=""> </div>
                    <div class="form-group">
                        <input type="text" name="approvedDateRange" maxlength="225"
                            placeholder="Ngày duyệt" class="form-control date-range-picker"
                            id="approvedDateRange" value=""> </div>
                    <div class="form-group">
                        <input type="text" name="deadlineDateRange" maxlength="225"
                            placeholder="Ngày hết hạn" class="form-control date-range-picker"
                            id="deadlineDateRange" value=""> </div>
                    <div class="form-group">
                        <select name="hiddenStatus" id="hiddenStatus" class="form-control">
                            <option value="1" selected="selected">Ẩn trạng thái kết thúc</option>
                            <option value="2">Hiện tất cả</option>
                        </select> </div>

                </div>
            </form>
            <div class="clearfix"></div>
            <div class="lolify-left-menu" style="display: none;">
            </div>
        </div>
        <div class="dgContainer">
            <div style="width: 1556px; display: none;" class="stickyHeader">
                <table class="table table-bordered" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr class="even">
                            <th style="width: 49px;">ID</th>
                            <th style="min-width: 200px; width: 667px;">Tiêu đề</th>
                            <th style="width: 108px;">Giá khởi điểm</th>
                            <th style="width: 104px;">Giá thấp nhất</th>
                            <th style="width: 116px;">Giá thắng ngay</th>
                            <th style="min-width: 150px; width: 180px;">Chiến thắng</th>
                            <th style="width: 178px;">Người tạo</th>
                            <th style="width:120px;">Tham gia</th>
                            <th style="width: 34px;"><i class="fa fa-cogs icon"></i></th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div class="col-md-6 paginatorItem">
                    <div class="paginator"><span class="labelPages">1 - 30 / 645</span><span
                            class="disabled fa fa-step-backward"></span><span
                            class="disabled fa fa-backward"></span><a class="fa fa-forward"
                            href="https://erp.nhanh.vn/crm/auction/join?page=2"
                            title="Trang sau"></a> <a class="fa fa-step-forward"
                            href="https://erp.nhanh.vn/crm/auction/join?page=22"
                            title="Trang cuối"></a></div>
                </div>
                <div style="clear: both;"></div><br>
            </div>
            <table id="dgContract" class="table table-hover">
                <thead>
                    <tr class="even">
                        <th>ID</th>
                        <th style="min-width:200px;">Tiêu đề</th>
                        <th>Giá khởi điểm</th>
                        <th>Giá thấp nhất</th>
                        <th>Giá thắng ngay</th>
                        <th style="min-width:150px;">Chiến thắng</th>
                        <th>Người tạo</th>
                        <th style="width:120px;">Tham gia</th>
                        <th><i class="fa fa-cogs icon"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1478">1478</a></td>
                        <td style="min-width:200px;"><a
                                href="https://erp.nhanh.vn/crm/auction/view?id=1478">Bán thẳng từ
                                khoá SEO "sóng nhựa hở" giá 350k/tháng chưa VAT, bước giá
                                50k.</a><br><label class="label label-info">Đấu giá từ khóa
                                SEO</label><br> <i class="text-danger"><i
                                    class="fa fa-minus-circle text-danger"></i> 22/07/2020
                                00:00:00</i> </td>
                        <td class="colControls">350.000</td>
                        <td class="colControls">50.000</td>
                        <td class="colControls">350.000</td>
                        <td class="colControls"></td>
                        <td style="text-align:center;"><span data-toggle="tooltip"
                                data-title="22/07/2020">Thái Chí Toàn</span></td>
                        <td style="text-align:center;"><a data-toggle="tooltip"
                                title="Bấm để tham gia"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1478"><b>Tham
                                    gia</b></a></td>
                        <td class="colControls"></td>
                    </tr>
                    <tr class="even h">
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1477">1477</a></td>
                        <td style="min-width:200px;"><a
                                href="https://erp.nhanh.vn/crm/auction/view?id=1477">Bán thẳng từ
                                khoá SEO "sóng nhựa bít" giá 350k/tháng chưa VAT, bước giá
                                50k.</a><br><label class="label label-info">Đấu giá từ khóa
                                SEO</label><br> <i class="text-danger"><i
                                    class="fa fa-minus-circle text-danger"></i> 22/07/2020
                                00:00:00</i> </td>
                        <td class="colControls">350.000</td>
                        <td class="colControls">50.000</td>
                        <td class="colControls">350.000</td>
                        <td class="colControls"></td>
                        <td style="text-align:center;"><span data-toggle="tooltip"
                                data-title="22/07/2020">Thái Chí Toàn</span></td>
                        <td style="text-align:center;"><a data-toggle="tooltip"
                                title="Bấm để tham gia"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1477"><b>Tham
                                    gia</b></a></td>
                        <td class="colControls"></td>
                    </tr>
                    <tr class="">
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1476">1476</a></td>
                        <td style="min-width:200px;"><a
                                href="https://erp.nhanh.vn/crm/auction/view?id=1476">Đấu giá nick hỗ
                                trợ Vchat T07/2020 - HN</a><br><label class="label label-info">Đấu
                                giá Vchat</label><br> <i class="text-danger"><i
                                    class="fa fa-minus-circle text-danger"></i> 01/07/2020
                                16:50:00</i> </td>
                        <td class="colControls">500.000</td>
                        <td class="colControls">500.000</td>
                        <td class="colControls"></td>
                        <td class="colControls"></td>
                        <td style="text-align:center;"><span data-toggle="tooltip"
                                data-title="30/06/2020">Đào Ngọc Ánh</span></td>
                        <td style="text-align:center;"><a data-toggle="tooltip"
                                title="Bấm để tham gia"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1476"><b>Tham
                                    gia</b></a></td>
                        <td class="colControls"></td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1475">1475</a></td>
                        <td style="min-width:200px;"><a
                                href="https://erp.nhanh.vn/crm/auction/view?id=1475">Đấu giá nick hỗ
                                trợ Vchat T07/2020 - HCM</a><br><label class="label label-info">Đấu
                                giá Vchat</label><br> <i class="text-danger"><i
                                    class="fa fa-minus-circle text-danger"></i> 01/07/2020
                                16:50:00</i> </td>
                        <td class="colControls">6.000.000</td>
                        <td class="colControls">500.000</td>
                        <td class="colControls"></td>
                        <td class="colControls"></td>
                        <td style="text-align:center;"><span data-toggle="tooltip"
                                data-title="30/06/2020">Đào Ngọc Ánh</span></td>
                        <td style="text-align:center;"><a data-toggle="tooltip"
                                title="Bấm để tham gia"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1475"><b>Tham
                                    gia</b></a></td>
                        <td class="colControls"></td>
                    </tr>
                    <tr class="">
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1474">1474</a></td>
                        <td style="min-width:200px;"><a
                                href="https://erp.nhanh.vn/crm/auction/view?id=1474">Đấu giá danh
                                sách mới đăng ký T07/2020- HN</a><br><label
                                class="label label-info">Đấu Giá Gian hàng</label><br> <i
                                class="text-danger"><i class="fa fa-minus-circle text-danger"></i>
                                01/07/2020 16:40:00</i> </td>
                        <td class="colControls">500.000</td>
                        <td class="colControls">500.000</td>
                        <td class="colControls"></td>
                        <td class="colControls"></td>
                        <td style="text-align:center;"><span data-toggle="tooltip"
                                data-title="30/06/2020">Đào Ngọc Ánh</span></td>
                        <td style="text-align:center;"><a data-toggle="tooltip"
                                title="Bấm để tham gia"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1474"><b>Tham
                                    gia</b></a></td>
                        <td class="colControls"></td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1472">1472</a></td>
                        <td style="min-width:200px;"><a
                                href="https://erp.nhanh.vn/crm/auction/view?id=1472">Đấu giá quản lý
                                số điện thoại quảng cáo của công ty tháng T07/2020 -
                                HCM</a><br><label class="label label-info">Đấu giá số điện thoại
                                quảng cáo</label><br> <i class="text-danger"><i
                                    class="fa fa-minus-circle text-danger"></i> 01/07/2020
                                16:40:00</i> </td>
                        <td class="colControls">20.000.000</td>
                        <td class="colControls">2.000.000</td>
                        <td class="colControls"></td>
                        <td class="colControls"></td>
                        <td style="text-align:center;"><span data-toggle="tooltip"
                                data-title="30/06/2020">Đào Ngọc Ánh</span></td>
                        <td style="text-align:center;"><a data-toggle="tooltip"
                                title="Bấm để tham gia"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1472"><b>Tham
                                    gia</b></a></td>
                        <td class="colControls"></td>
                    </tr>
                    <tr class="">
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1471">1471</a></td>
                        <td style="min-width:200px;"><a
                                href="https://erp.nhanh.vn/crm/auction/view?id=1471">Đấu giá quản lý
                                số điện thoại quảng cáo của công ty tháng T06/2020 -
                                HCM</a><br><label class="label label-info">Đấu giá số điện thoại
                                quảng cáo</label><br> <i class="text-danger"><i
                                    class="fa fa-minus-circle text-danger"></i> 01/06/2020
                                16:40:00</i> </td>
                        <td class="colControls">20.000.000</td>
                        <td class="colControls">2.000.000</td>
                        <td class="colControls"></td>
                        <td class="colControls"></td>
                        <td style="text-align:center;"><span data-toggle="tooltip"
                                data-title="01/06/2020">Đào Ngọc Ánh</span></td>
                        <td style="text-align:center;"><a data-toggle="tooltip"
                                title="Bấm để tham gia"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1471"><b>Tham
                                    gia</b></a></td>
                        <td class="colControls"></td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1470">1470</a></td>
                        <td style="min-width:200px;"><a
                                href="https://erp.nhanh.vn/crm/auction/view?id=1470">Đấu giá danh
                                sách mới đăng ký T06/2020 - HCM</a><br><label
                                class="label label-info">Đấu Giá Gian hàng</label><br> <i
                                class="text-danger"><i class="fa fa-minus-circle text-danger"></i>
                                01/06/2020 16:45:00</i> </td>
                        <td class="colControls">2.000.000</td>
                        <td class="colControls">1.000.000</td>
                        <td class="colControls"></td>
                        <td class="colControls"></td>
                        <td style="text-align:center;"><span data-toggle="tooltip"
                                data-title="01/06/2020">Đào Ngọc Ánh</span></td>
                        <td style="text-align:center;"><a data-toggle="tooltip"
                                title="Bấm để tham gia"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1470"><b>Tham
                                    gia</b></a></td>
                        <td class="colControls"></td>
                    </tr>
                    <tr class="">
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1469">1469</a></td>
                        <td style="min-width:200px;"><a
                                href="https://erp.nhanh.vn/crm/auction/view?id=1469">Đấu giá danh
                                sách mới đăng ký T06/2020- HN</a><br><label
                                class="label label-info">Đấu Giá Gian hàng</label><br> <i
                                class="text-danger"><i class="fa fa-minus-circle text-danger"></i>
                                01/06/2020 16:40:00</i> </td>
                        <td class="colControls">500.000</td>
                        <td class="colControls">500.000</td>
                        <td class="colControls"></td>
                        <td class="colControls"></td>
                        <td style="text-align:center;"><span data-toggle="tooltip"
                                data-title="01/06/2020">Đào Ngọc Ánh</span></td>
                        <td style="text-align:center;"><a data-toggle="tooltip"
                                title="Bấm để tham gia"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1469"><b>Tham
                                    gia</b></a></td>
                        <td class="colControls"></td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1468">1468</a></td>
                        <td style="min-width:200px;"><a
                                href="https://erp.nhanh.vn/crm/auction/view?id=1468">Đấu giá nick hỗ
                                trợ Vchat T06/2020 - HCM</a><br><label class="label label-info">Đấu
                                giá Vchat</label><br> <i class="text-danger"><i
                                    class="fa fa-minus-circle text-danger"></i> 01/06/2020
                                16:50:00</i> </td>
                        <td class="colControls">6.000.000</td>
                        <td class="colControls">500.000</td>
                        <td class="colControls"></td>
                        <td class="colControls"></td>
                        <td style="text-align:center;"><span data-toggle="tooltip"
                                data-title="01/06/2020">Đào Ngọc Ánh</span></td>
                        <td style="text-align:center;"><a data-toggle="tooltip"
                                title="Bấm để tham gia"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1468"><b>Tham
                                    gia</b></a></td>
                        <td class="colControls"></td>
                    </tr>
                    <tr>
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1467">1467</a></td>
                        <td style="min-width:200px;"><a
                                href="https://erp.nhanh.vn/crm/auction/view?id=1467">Đấu giá nick hỗ
                                trợ Vchat T06/2020 - HN</a><br><label class="label label-info">Đấu
                                giá Vchat</label><br> <i class="text-danger"><i
                                    class="fa fa-minus-circle text-danger"></i> 01/06/2020
                                16:50:00</i> </td>
                        <td class="colControls">500.000</td>
                        <td class="colControls">500.000</td>
                        <td class="colControls"></td>
                        <td class="colControls"></td>
                        <td style="text-align:center;"><span data-toggle="tooltip"
                                data-title="01/06/2020">Đào Ngọc Ánh</span></td>
                        <td style="text-align:center;"><a data-toggle="tooltip"
                                title="Bấm để tham gia"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1467"><b>Tham
                                    gia</b></a></td>
                        <td class="colControls"></td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1466">1466</a></td>
                        <td style="min-width:200px;"><a
                                href="https://erp.nhanh.vn/crm/auction/view?id=1466">Bán thẳng từ
                                khoá SEO "đá ráp xếp chính hãng" giá 350k/tháng chưa VAT, bước giá
                                50k.</a><br><label class="label label-info">Đấu giá từ khóa
                                SEO</label><br> <i class="text-danger"><i
                                    class="fa fa-minus-circle text-danger"></i> 19/05/2020
                                16:00:00</i> </td>
                        <td class="colControls">350.000</td>
                        <td class="colControls">50.000</td>
                        <td class="colControls">350.000</td>
                        <td class="colControls"></td>
                        <td style="text-align:center;"><span data-toggle="tooltip"
                                data-title="18/05/2020">Thái Chí Toàn</span></td>
                        <td style="text-align:center;"><a data-toggle="tooltip"
                                title="Bấm để tham gia"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1466"><b>Tham
                                    gia</b></a></td>
                        <td class="colControls"></td>
                    </tr>
                    <tr>
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1465">1465</a></td>
                        <td style="min-width:200px;"><a
                                href="https://erp.nhanh.vn/crm/auction/view?id=1465">Bán thẳng từ
                                khoá SEO "đá gốm chất lượng" giá 350k/tháng chưa VAT, bước giá
                                50k.</a><br><label class="label label-info">Đấu giá từ khóa
                                SEO</label><br> <i class="text-danger"><i
                                    class="fa fa-minus-circle text-danger"></i> 19/05/2020
                                16:00:00</i> </td>
                        <td class="colControls">350.000</td>
                        <td class="colControls">50.000</td>
                        <td class="colControls">350.000</td>
                        <td class="colControls"></td>
                        <td style="text-align:center;"><span data-toggle="tooltip"
                                data-title="18/05/2020">Thái Chí Toàn</span></td>
                        <td style="text-align:center;"><a data-toggle="tooltip"
                                title="Bấm để tham gia"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1465"><b>Tham
                                    gia</b></a></td>
                        <td class="colControls"></td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1464">1464</a></td>
                        <td style="min-width:200px;"><a
                                href="https://erp.nhanh.vn/crm/auction/view?id=1464">Bán thẳng từ
                                khoá SEO "đá mài hợp kim chính hãng" giá 350k/tháng chưa VAT, bước
                                giá 50k.</a><br><label class="label label-info">Đấu giá từ khóa
                                SEO</label><br> <i class="text-danger"><i
                                    class="fa fa-minus-circle text-danger"></i> 19/05/2020
                                16:00:00</i> </td>
                        <td class="colControls">350.000</td>
                        <td class="colControls">50.000</td>
                        <td class="colControls">350.000</td>
                        <td class="colControls"></td>
                        <td style="text-align:center;"><span data-toggle="tooltip"
                                data-title="18/05/2020">Thái Chí Toàn</span></td>
                        <td style="text-align:center;"><a data-toggle="tooltip"
                                title="Bấm để tham gia"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1464"><b>Tham
                                    gia</b></a></td>
                        <td class="colControls"></td>
                    </tr>
                    <tr>
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1463">1463</a></td>
                        <td style="min-width:200px;"><a
                                href="https://erp.nhanh.vn/crm/auction/view?id=1463">Đấu giá quản lý
                                số điện thoại quảng cáo của công ty tháng T05/2020 -
                                HCM</a><br><label class="label label-info">Đấu giá số điện thoại
                                quảng cáo</label><br> <i class="text-danger"><i
                                    class="fa fa-minus-circle text-danger"></i> 04/05/2020
                                16:40:00</i> </td>
                        <td class="colControls">20.000.000</td>
                        <td class="colControls">2.000.000</td>
                        <td class="colControls"></td>
                        <td class="colControls"></td>
                        <td style="text-align:center;"><span data-toggle="tooltip"
                                data-title="04/05/2020">Đào Ngọc Ánh</span></td>
                        <td style="text-align:center;"><a data-toggle="tooltip"
                                title="Bấm để tham gia"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1463"><b>Tham
                                    gia</b></a></td>
                        <td class="colControls"></td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1462">1462</a></td>
                        <td style="min-width:200px;"><a
                                href="https://erp.nhanh.vn/crm/auction/view?id=1462">Đấu giá nick hỗ
                                trợ Vchat T05/2020 - HN</a><br><label class="label label-info">Đấu
                                giá Vchat</label><br> <i class="text-danger"><i
                                    class="fa fa-minus-circle text-danger"></i> 04/05/2020
                                16:50:00</i> </td>
                        <td class="colControls">500.000</td>
                        <td class="colControls">500.000</td>
                        <td class="colControls"></td>
                        <td class="colControls"></td>
                        <td style="text-align:center;"><span data-toggle="tooltip"
                                data-title="04/05/2020">Đào Ngọc Ánh</span></td>
                        <td style="text-align:center;"><a data-toggle="tooltip"
                                title="Bấm để tham gia"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1462"><b>Tham
                                    gia</b></a></td>
                        <td class="colControls"></td>
                    </tr>
                    <tr>
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1461">1461</a></td>
                        <td style="min-width:200px;"><a
                                href="https://erp.nhanh.vn/crm/auction/view?id=1461">Đấu giá nick hỗ
                                trợ Vchat T05/2020 - HCM</a><br><label class="label label-info">Đấu
                                giá Vchat</label><br> <i class="text-danger"><i
                                    class="fa fa-minus-circle text-danger"></i> 04/05/2020
                                16:50:00</i> </td>
                        <td class="colControls">6.000.000</td>
                        <td class="colControls">500.000</td>
                        <td class="colControls"></td>
                        <td class="colControls"></td>
                        <td style="text-align:center;"><span data-toggle="tooltip"
                                data-title="04/05/2020">Đào Ngọc Ánh</span></td>
                        <td style="text-align:center;"><a data-toggle="tooltip"
                                title="Bấm để tham gia"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1461"><b>Tham
                                    gia</b></a></td>
                        <td class="colControls"></td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1460">1460</a></td>
                        <td style="min-width:200px;"><a
                                href="https://erp.nhanh.vn/crm/auction/view?id=1460">Đấu giá danh
                                sách mới đăng ký T05/2020- HN</a><br><label
                                class="label label-info">Đấu Giá Gian hàng</label><br> <i
                                class="text-danger"><i class="fa fa-minus-circle text-danger"></i>
                                04/05/2020 16:40:00</i> </td>
                        <td class="colControls">500.000</td>
                        <td class="colControls">500.000</td>
                        <td class="colControls"></td>
                        <td class="colControls"></td>
                        <td style="text-align:center;"><span data-toggle="tooltip"
                                data-title="04/05/2020">Đào Ngọc Ánh</span></td>
                        <td style="text-align:center;"><a data-toggle="tooltip"
                                title="Bấm để tham gia"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1460"><b>Tham
                                    gia</b></a></td>
                        <td class="colControls"></td>
                    </tr>
                    <tr>
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1459">1459</a></td>
                        <td style="min-width:200px;"><a
                                href="https://erp.nhanh.vn/crm/auction/view?id=1459">Đấu giá danh
                                sách mới đăng ký T05/2020 - HCM</a><br><label
                                class="label label-info">Đấu Giá Gian hàng</label><br> <i
                                class="text-danger"><i class="fa fa-minus-circle text-danger"></i>
                                04/05/2020 16:45:00</i> </td>
                        <td class="colControls">2.000.000</td>
                        <td class="colControls">1.000.000</td>
                        <td class="colControls"></td>
                        <td class="colControls"></td>
                        <td style="text-align:center;"><span data-toggle="tooltip"
                                data-title="04/05/2020">Đào Ngọc Ánh</span></td>
                        <td style="text-align:center;"><a data-toggle="tooltip"
                                title="Bấm để tham gia"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1459"><b>Tham
                                    gia</b></a></td>
                        <td class="colControls"></td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1457">1457</a></td>
                        <td style="min-width:200px;"><a
                                href="https://erp.nhanh.vn/crm/auction/view?id=1457">Đấu giá danh
                                sách mới đăng ký T04/2020- HN</a><br><label
                                class="label label-info">Đấu Giá Gian hàng</label><br> <i
                                class="text-danger"><i class="fa fa-minus-circle text-danger"></i>
                                01/04/2020 16:40:00</i> </td>
                        <td class="colControls">500.000</td>
                        <td class="colControls">500.000</td>
                        <td class="colControls"></td>
                        <td class="colControls"></td>
                        <td style="text-align:center;"><span data-toggle="tooltip"
                                data-title="31/03/2020">Đào Ngọc Ánh</span></td>
                        <td style="text-align:center;"><a data-toggle="tooltip"
                                title="Bấm để tham gia"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1457"><b>Tham
                                    gia</b></a></td>
                        <td class="colControls"></td>
                    </tr>
                    <tr>
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1456">1456</a></td>
                        <td style="min-width:200px;"><a
                                href="https://erp.nhanh.vn/crm/auction/view?id=1456">Đấu giá nick hỗ
                                trợ Vchat T04/2020 - HCM</a><br><label class="label label-info">Đấu
                                giá Vchat</label><br> <i class="text-danger"><i
                                    class="fa fa-minus-circle text-danger"></i> 01/04/2020
                                16:50:00</i> </td>
                        <td class="colControls">6.000.000</td>
                        <td class="colControls">500.000</td>
                        <td class="colControls"></td>
                        <td class="colControls"></td>
                        <td style="text-align:center;"><span data-toggle="tooltip"
                                data-title="31/03/2020">Đào Ngọc Ánh</span></td>
                        <td style="text-align:center;"><a data-toggle="tooltip"
                                title="Bấm để tham gia"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1456"><b>Tham
                                    gia</b></a></td>
                        <td class="colControls"></td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1455">1455</a></td>
                        <td style="min-width:200px;"><a
                                href="https://erp.nhanh.vn/crm/auction/view?id=1455">Đấu giá nick hỗ
                                trợ Vchat T04/2020 - HN</a><br><label class="label label-info">Đấu
                                giá Vchat</label><br> <i class="text-danger"><i
                                    class="fa fa-minus-circle text-danger"></i> 01/04/2020
                                16:50:00</i> </td>
                        <td class="colControls">500.000</td>
                        <td class="colControls">500.000</td>
                        <td class="colControls"></td>
                        <td class="colControls"></td>
                        <td style="text-align:center;"><span data-toggle="tooltip"
                                data-title="31/03/2020">Đào Ngọc Ánh</span></td>
                        <td style="text-align:center;"><a data-toggle="tooltip"
                                title="Bấm để tham gia"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1455"><b>Tham
                                    gia</b></a></td>
                        <td class="colControls"></td>
                    </tr>
                    <tr>
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1454">1454</a></td>
                        <td style="min-width:200px;"><a
                                href="https://erp.nhanh.vn/crm/auction/view?id=1454">Đấu giá quản lý
                                số điện thoại quảng cáo của công ty tháng T04/2020 -
                                HCM</a><br><label class="label label-info">Đấu giá số điện thoại
                                quảng cáo</label><br> <i class="text-danger"><i
                                    class="fa fa-minus-circle text-danger"></i> 01/04/2020
                                16:40:00</i> </td>
                        <td class="colControls">20.000.000</td>
                        <td class="colControls">2.000.000</td>
                        <td class="colControls"></td>
                        <td class="colControls"></td>
                        <td style="text-align:center;"><span data-toggle="tooltip"
                                data-title="31/03/2020">Đào Ngọc Ánh</span></td>
                        <td style="text-align:center;"><a data-toggle="tooltip"
                                title="Bấm để tham gia"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1454"><b>Tham
                                    gia</b></a></td>
                        <td class="colControls"></td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1453">1453</a></td>
                        <td style="min-width:200px;"><a
                                href="https://erp.nhanh.vn/crm/auction/view?id=1453">Đấu giá từ
                                khóa: bàn ghế cafe, giá 1320k / tháng ,bước giá 100k, chưa
                                vat</a><br><label class="label label-info">Đấu giá từ khóa
                                SEO</label><br> <i class="text-danger"><i
                                    class="fa fa-minus-circle text-danger"></i> 26/03/2020
                                17:00:00</i> </td>
                        <td class="colControls">1.320.000</td>
                        <td class="colControls">100.000</td>
                        <td class="colControls">6.600.000</td>
                        <td class="colControls"></td>
                        <td style="text-align:center;"><span data-toggle="tooltip"
                                data-title="24/03/2020">Trần Văn Anh Vũ</span></td>
                        <td style="text-align:center;"><a data-toggle="tooltip"
                                title="Bấm để tham gia"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1453"><b>Tham
                                    gia</b></a></td>
                        <td class="colControls"></td>
                    </tr>
                    <tr>
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1452">1452</a></td>
                        <td style="min-width:200px;"><a
                                href="https://erp.nhanh.vn/crm/auction/view?id=1452">Bán thẳng từ
                                khóa "kệ tủ bếp" giá 350K/tháng chưa VAT</a><br><label
                                class="label label-info">Đấu giá từ khóa SEO</label><br> <i
                                class="text-danger"><i class="fa fa-minus-circle text-danger"></i>
                                18/03/2020 14:30:22</i> </td>
                        <td class="colControls">350.000</td>
                        <td class="colControls">50.000</td>
                        <td class="colControls">350.000</td>
                        <td class="colControls"></td>
                        <td style="text-align:center;"><span data-toggle="tooltip"
                                data-title="17/03/2020">Đỗ Văn Thảo</span></td>
                        <td style="text-align:center;"><a data-toggle="tooltip"
                                title="Bấm để tham gia"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1452"><b>Tham
                                    gia</b></a></td>
                        <td class="colControls"></td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1451">1451</a></td>
                        <td style="min-width:200px;"><a
                                href="https://erp.nhanh.vn/crm/auction/view?id=1451">Đấu giá từ khóa
                                "may in phun kho lon" 350k/ tháng chưa VAT</a><br><label
                                class="label label-info">Đấu giá từ khóa SEO</label><br> <i
                                class="text-danger"><i class="fa fa-minus-circle text-danger"></i>
                                19/03/2020 14:45:23</i> </td>
                        <td class="colControls">350.000</td>
                        <td class="colControls">50.000</td>
                        <td class="colControls"></td>
                        <td class="colControls"></td>
                        <td style="text-align:center;"><span data-toggle="tooltip"
                                data-title="16/03/2020">Nguyễn Thị Quỳnh Vân</span></td>
                        <td style="text-align:center;"><a data-toggle="tooltip"
                                title="Bấm để tham gia"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1451"><b>Tham
                                    gia</b></a></td>
                        <td class="colControls"></td>
                    </tr>
                    <tr>
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1450">1450</a></td>
                        <td style="min-width:200px;"><a
                                href="https://erp.nhanh.vn/crm/auction/view?id=1450">Đấu giá từ khóa
                                "máy cắt khắc cnc" 350k/ tháng chưa VAT</a><br><label
                                class="label label-info">Đấu giá từ khóa SEO</label><br> <i
                                class="text-danger"><i class="fa fa-minus-circle text-danger"></i>
                                19/03/2020 14:44:26</i> </td>
                        <td class="colControls">350.000</td>
                        <td class="colControls">50.000</td>
                        <td class="colControls"></td>
                        <td class="colControls"></td>
                        <td style="text-align:center;"><span data-toggle="tooltip"
                                data-title="16/03/2020">Nguyễn Thị Quỳnh Vân</span></td>
                        <td style="text-align:center;"><a data-toggle="tooltip"
                                title="Bấm để tham gia"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1450"><b>Tham
                                    gia</b></a></td>
                        <td class="colControls"></td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1449">1449</a></td>
                        <td style="min-width:200px;"><a
                                href="https://erp.nhanh.vn/crm/auction/view?id=1449">Bán thẳng từ
                                khóa SEO "sóng nhựa bít" giá 350k chưa VAT, bước giá
                                50k.</a><br><label class="label label-info">Đấu giá từ khóa
                                SEO</label><br> <i class="text-danger"><i
                                    class="fa fa-minus-circle text-danger"></i> 03/03/2020
                                11:00:00</i> </td>
                        <td class="colControls">350.000</td>
                        <td class="colControls">50.000</td>
                        <td class="colControls">350.000</td>
                        <td class="colControls"></td>
                        <td style="text-align:center;"><span data-toggle="tooltip"
                                data-title="02/03/2020">Thái Chí Toàn</span></td>
                        <td style="text-align:center;"><a data-toggle="tooltip"
                                title="Bấm để tham gia"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1449"><b>Tham
                                    gia</b></a></td>
                        <td class="colControls"></td>
                    </tr>
                    <tr>
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1448">1448</a></td>
                        <td style="min-width:200px;"><a
                                href="https://erp.nhanh.vn/crm/auction/view?id=1448">Bán thẳng từ
                                khóa SEO "sóng nhựa hở" giá 350k/tháng chưa VAT, bước giá
                                50k.</a><br><label class="label label-info">Đấu giá từ khóa
                                SEO</label><br> <i class="text-danger"><i
                                    class="fa fa-minus-circle text-danger"></i> 03/03/2020
                                11:00:00</i> </td>
                        <td class="colControls">350.000</td>
                        <td class="colControls">50.000</td>
                        <td class="colControls">350.000</td>
                        <td class="colControls"></td>
                        <td style="text-align:center;"><span data-toggle="tooltip"
                                data-title="02/03/2020">Thái Chí Toàn</span></td>
                        <td style="text-align:center;"><a data-toggle="tooltip"
                                title="Bấm để tham gia"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1448"><b>Tham
                                    gia</b></a></td>
                        <td class="colControls"></td>
                    </tr>
                    <tr class="even">
                        <td><a class="text-info"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1446">1446</a></td>
                        <td style="min-width:200px;"><a
                                href="https://erp.nhanh.vn/crm/auction/view?id=1446">Đấu giá nick hỗ
                                trợ Vchat T03/2020 - HN</a><br><label class="label label-info">Đấu
                                giá Vchat</label><br> <i class="text-danger"><i
                                    class="fa fa-minus-circle text-danger"></i> 02/03/2020
                                16:50:00</i> </td>
                        <td class="colControls">500.000</td>
                        <td class="colControls">500.000</td>
                        <td class="colControls"></td>
                        <td class="colControls"></td>
                        <td style="text-align:center;"><span data-toggle="tooltip"
                                data-title="01/03/2020">Phạm Thị Hồng Linh</span></td>
                        <td style="text-align:center;"><a data-toggle="tooltip"
                                title="Bấm để tham gia"
                                href="https://erp.nhanh.vn/crm/auction/view?id=1446"><b>Tham
                                    gia</b></a></td>
                        <td class="colControls"></td>
                    </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div class="col-md-6 paginatorItem">
                    <div class="paginator"><span class="labelPages">1 - 30 / 645</span><span
                            class="disabled fa fa-step-backward"></span><span
                            class="disabled fa fa-backward"></span><a class="fa fa-forward"
                            href="https://erp.nhanh.vn/crm/auction/join?page=2"
                            title="Trang sau"></a> <a class="fa fa-step-forward"
                            href="https://erp.nhanh.vn/crm/auction/join?page=22"
                            title="Trang cuối"></a></div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="confirmReapproveModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Xác nhận</h4>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" class="referId" value="">
                        <div class="alert alert-warning">Bạn muốn hoàn duyệt hợp đồng này?</div>
                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-primary btnSave">Đồng ý</button>
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Đóng</button>
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
                        <div class="alert alert-danger"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default"
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
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        var usrCnf = {
            language: 'vi'
        };
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/auction/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/auction/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/auction/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/auction/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/auction/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/auction/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/auction/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/auction/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/auction/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/auction/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/auction/bootstrap-multiselect.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/auction/saved_resource(2)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/auction/saved_resource(3)') }}"></script>
@endsection