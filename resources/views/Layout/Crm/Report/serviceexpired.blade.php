@extends('Layout.master1')

@section('css')
    <link href="{{ asset('asset/css/crm/report/bootstrap-multiselect.css') }}" media="screen" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/css/crm/report/style.css') }}" type="text/css">
@endsection

@section('title','ERP-Báo cáo gian hàng hết hạn trong tháng')

@section('content-page')

    <div class="tab-content">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li class="active">Báo cáo gian hàng hết hạn trong tháng</li>
        </ul>
        <div class="filterContainer">
            <form method="GET" name="crmReportIndexFilter" class="form-inline" role="form"
                id="crmReportIndexFilter">
                <div class="form-group"><input type="text" name="daterangepicker"
                        class="form-control date-range-picker" id="daterangepicker"
                        value="01/07/2020 - 31/07/2020"></div>
                <div class="form-group"><input type="text" name="service"
                        placeholder="Gian hàng" id="service" class="form-control" value="">
                </div>
                <div class="form-group"><input type="text" name="userName" maxlength="255"
                        placeholder="Người chăm sóc" id="userName"
                        class="form-control ui-autocomplete-input" value="" autocomplete="off">
                </div> <input type="hidden" name="userId" id="userId" class="form-control"
                    value="">
                <div class="form-group"><input name="submit" type="submit"
                        id="btnFilterCrmContact" class="form-control btn btn-primary"
                        value="Lọc"></div>
            </form>
        </div>
        <div class="dgContainer">
            <div style="width: 1874px; display: none;" class="stickyHeader">
                <table class="table table-bordered" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr class="even">
                            <th style="width: 126px;">STT</th>
                            <th style="width: 616px;">Gian hàng</th>
                            <th style="width: 521px;">Người chăm sóc</th>
                            <th style="width: 303px;">Số lượng HD</th>
                            <th style="width: 307px;">Ngày hết hạn</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 dgButtons">&nbsp;<a id="exportAll"
                        href="https://erp.nhanh.vn/crm/report/serviceexpired#"
                        class="btn btn-primary btn-sm"><i class="fa fa-download "></i> Xuất
                        excel</a></div>
                <div class="col-md-6 paginatorItem">
                    <div class="paginator"><span class="labelPages">1 - 30 / 48</span><span
                            class="disabled fa fa-step-backward"></span><span
                            class="disabled fa fa-backward"></span><a class="fa fa-forward"
                            href="https://erp.nhanh.vn/crm/report/serviceexpired?page=2"
                            title="Trang sau"></a> <a class="fa fa-step-forward"
                            href="https://erp.nhanh.vn/crm/report/serviceexpired?page=2"
                            title="Trang cuối"></a></div>
                </div>
                <div style="clear: both;"></div><br>
            </div>
            <table cellspacing="0" cellpadding="0" class="table table-bordered">
                <thead>
                    <tr class="even">
                        <th>STT</th>
                        <th>Gian hàng</th>
                        <th>Người chăm sóc</th>
                        <th>Số lượng HD</th>
                        <th>Ngày hết hạn</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td class="col-align-center">1</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=477">muabanuytin</a>
                        </td>
                        <td class="col-align-center">
                            <div title="13/01/2016 17:52:37">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2016-01-13 17:52:37 "> Phan
                                    Vũ Như Quỳnh</p>
                            </div>
                            <div title="13/01/2016 17:52:37">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2016-01-13 17:52:37 "> Trương
                                    Thị Tường Vi</p>
                            </div>
                        </td>
                        <td class="col-align-center">12</td>
                        <td class="col-align-center"><span
                                class="text-success">30/12/2019</span><br><span
                                class="text-danger">30/07/2020</span></td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center">2</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=519">namtrungvietco</a>
                        </td>
                        <td class="col-align-center">
                            <div title="26/12/2015 12:31:54">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2015-12-26 12:31:54 "> Thái
                                    Chí Toàn</p>
                            </div>
                            <div title="26/12/2015 12:31:54">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2015-12-26 12:31:54 "> Trương
                                    Thị Tường Vi</p>
                            </div>
                        </td>
                        <td class="col-align-center">6</td>
                        <td class="col-align-center"><span
                                class="text-success">01/07/2019</span><br><span
                                class="text-danger">01/07/2020</span></td>
                    </tr>
                    <tr>
                        <td class="col-align-center">3</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=556">vanphongphamhungminh</a>
                        </td>
                        <td class="col-align-center">
                            <div title="15/02/2016 15:05:10">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2016-02-15 15:05:10 "> Vũ Thị
                                    Phương Anh</p>
                            </div>
                            <div title="15/02/2016 15:05:10">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2016-02-15 15:05:10 "> Ngô
                                    Thị Hồng Hoa</p>
                            </div>
                        </td>
                        <td class="col-align-center">24</td>
                        <td class="col-align-center"><span
                                class="text-success">24/12/2019</span><br><span
                                class="text-danger">24/07/2020</span></td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center">4</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=779">linhvietlighting</a>
                        </td>
                        <td class="col-align-center">
                            <div title="01/02/2016 15:00:46">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2016-02-01 15:00:46 "> Phan
                                    Quỳnh Hương</p>
                            </div>
                            <div title="01/02/2016 15:00:46">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2016-02-01 15:00:46 "> Phạm
                                    Thị Thu Hằng</p>
                            </div>
                        </td>
                        <td class="col-align-center">15</td>
                        <td class="col-align-center"><span
                                class="text-success">15/11/2019</span><br><span
                                class="text-danger">17/07/2020</span></td>
                    </tr>
                    <tr>
                        <td class="col-align-center">5</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=954">ototruongphat1</a>
                        </td>
                        <td class="col-align-center">
                            <div title="26/12/2015 12:31:55">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2015-12-26 12:31:55 "> Trương
                                    Thị Tường Vi</p>
                            </div>
                            <div title="26/12/2015 12:31:55">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2015-12-26 12:31:55 "> Phan
                                    Vũ Như Quỳnh</p>
                            </div>
                        </td>
                        <td class="col-align-center">14</td>
                        <td class="col-align-center"><span
                                class="text-success">08/07/2019</span><br><span
                                class="text-danger">08/07/2020</span></td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center">6</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=986">ilacomputer</a>
                        </td>
                        <td class="col-align-center">
                            <div title="26/12/2015 12:31:55">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2015-12-26 12:31:55 "> Trương
                                    Thị Tường Vi</p>
                            </div>
                            <div title="26/12/2015 12:31:55">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2015-12-26 12:31:55 "> Trần
                                    Văn Anh Vũ</p>
                            </div>
                        </td>
                        <td class="col-align-center">4</td>
                        <td class="col-align-center"><span
                                class="text-success">15/07/2019</span><br><span
                                class="text-danger">15/07/2020</span></td>
                    </tr>
                    <tr>
                        <td class="col-align-center">7</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=1117">LePhanCorp</a>
                        </td>
                        <td class="col-align-center">
                            <div title="26/12/2015 12:31:56">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2015-12-26 12:31:56 "> Nguyễn
                                    Duy Hưng</p>
                            </div>
                            <div title="26/12/2015 12:31:56">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2015-12-26 12:31:56 "> Trương
                                    Thị Tường Vi</p>
                            </div>
                        </td>
                        <td class="col-align-center">20</td>
                        <td class="col-align-center"><span
                                class="text-success">18/07/2019</span><br><span
                                class="text-danger">18/07/2020</span></td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center">8</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=1233">tienminhvn</a>
                        </td>
                        <td class="col-align-center">
                            <div title="26/12/2015 12:31:56">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2015-12-26 12:31:56 "> Trịnh
                                    Thị Phương Nhi</p>
                            </div>
                            <div title="26/12/2015 12:31:56">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2015-12-26 12:31:56 "> Trương
                                    Thị Tường Vi</p>
                            </div>
                        </td>
                        <td class="col-align-center">8</td>
                        <td class="col-align-center"><span
                                class="text-success">16/12/2019</span><br><span
                                class="text-danger">21/07/2020</span></td>
                    </tr>
                    <tr>
                        <td class="col-align-center">9</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=1253">valvequangnang</a>
                        </td>
                        <td class="col-align-center">
                            <div title="26/12/2015 12:31:56">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2015-12-26 12:31:56 "> Phan
                                    Vũ Như Quỳnh</p>
                            </div>
                            <div title="26/12/2015 12:31:56">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2015-12-26 12:31:56 "> Trương
                                    Thị Tường Vi</p>
                            </div>
                        </td>
                        <td class="col-align-center">13</td>
                        <td class="col-align-center"><span
                                class="text-success">31/01/2020</span><br><span
                                class="text-danger">31/07/2020</span></td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center">10</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=1601">manhtuan</a>
                        </td>
                        <td class="col-align-center">
                            <div title="07/01/2016 09:28:39">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2016-01-07 09:28:39 "> Phạm
                                    Thị Thu Hằng</p>
                            </div>
                            <div title="07/01/2016 09:28:39">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2016-01-07 09:28:39 "> Ngô
                                    Thị Hồng Hoa</p>
                            </div>
                        </td>
                        <td class="col-align-center">20</td>
                        <td class="col-align-center"><span
                                class="text-success">27/12/2019</span><br><span
                                class="text-danger">27/07/2020</span></td>
                    </tr>
                    <tr>
                        <td class="col-align-center">11</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=1690">ykhoathienphu</a>
                        </td>
                        <td class="col-align-center">
                            <div title="13/01/2016 08:42:05">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2016-01-13 08:42:05 "> Nguyễn
                                    Hoàng Long</p>
                            </div>
                            <div title="13/01/2016 08:42:05">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2016-01-13 08:42:05 "> Trương
                                    Thị Tường Vi</p>
                            </div>
                        </td>
                        <td class="col-align-center">1</td>
                        <td class="col-align-center"><span
                                class="text-success">25/07/2019</span><br><span
                                class="text-danger">25/07/2020</span></td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center">12</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=1727">sieuthimaydo</a>
                        </td>
                        <td class="col-align-center">
                            <div title="13/01/2016 09:02:06">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2016-01-13 09:02:06 "> Vũ Thị
                                    Phương Anh</p>
                            </div>
                            <div title="13/01/2016 09:02:06">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2016-01-13 09:02:06 "> Phan
                                    Quỳnh Hương</p>
                            </div>
                        </td>
                        <td class="col-align-center">11</td>
                        <td class="col-align-center"><span
                                class="text-success">04/12/2019</span><br><span
                                class="text-danger">06/07/2020</span></td>
                    </tr>
                    <tr>
                        <td class="col-align-center">13</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=1750">Mr_Khoa</a>
                        </td>
                        <td class="col-align-center">
                            <div title="13/01/2016 09:02:06">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2016-01-13 09:02:06 "> Đinh
                                    Thị Thu Hương</p>
                            </div>
                            <div title="13/01/2016 09:02:06">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2016-01-13 09:02:06 "> Phan
                                    Quỳnh Hương</p>
                            </div>
                        </td>
                        <td class="col-align-center">4</td>
                        <td class="col-align-center"><span
                                class="text-success">02/07/2019</span><br><span
                                class="text-danger">02/07/2020</span></td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center">14</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=1790">congnghevathietbihan</a>
                        </td>
                        <td class="col-align-center">
                            <div title="13/01/2016 09:02:07">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2016-01-13 09:02:07 "> Đinh
                                    Thị Thu Hương</p>
                            </div>
                            <div title="13/01/2016 09:02:07">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2016-01-13 09:02:07 "> Phạm
                                    Thị Hiền</p>
                            </div>
                        </td>
                        <td class="col-align-center">7</td>
                        <td class="col-align-center"><span
                                class="text-success">11/07/2019</span><br><span
                                class="text-danger">11/07/2020</span></td>
                    </tr>
                    <tr>
                        <td class="col-align-center">15</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=1922">bomchuachay3mien</a>
                        </td>
                        <td class="col-align-center">
                            <div title="13/01/2016 09:02:10">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2016-01-13 09:02:10 "> Nguyễn
                                    Hoàng Long</p>
                            </div>
                            <div title="13/01/2016 09:02:10">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2016-01-13 09:02:10 "> Trương
                                    Thị Tường Vi</p>
                            </div>
                        </td>
                        <td class="col-align-center">10</td>
                        <td class="col-align-center"><span
                                class="text-success">17/12/2019</span><br><span
                                class="text-danger">17/07/2020</span></td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center">16</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=1956">congtydichvumoitruongxanh</a>
                        </td>
                        <td class="col-align-center">
                            <div title="13/01/2016 09:02:10">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2016-01-13 09:02:10 "> Phan
                                    Vũ Như Quỳnh</p>
                            </div>
                            <div title="13/01/2016 09:02:10">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2016-01-13 09:02:10 "> Trương
                                    Thị Tường Vi</p>
                            </div>
                        </td>
                        <td class="col-align-center">11</td>
                        <td class="col-align-center"><span
                                class="text-success">25/03/2019</span><br><span
                                class="text-danger">09/07/2020</span></td>
                    </tr>
                    <tr>
                        <td class="col-align-center">17</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=2137">dodongthucong</a>
                        </td>
                        <td class="col-align-center">
                            <div title="13/01/2016 09:02:15">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2016-01-13 09:02:15 "> Trương
                                    Thị Tường Vi</p>
                            </div>
                            <div title="13/01/2016 09:02:15">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2016-01-13 09:02:15 "> Thái
                                    Chí Toàn</p>
                            </div>
                        </td>
                        <td class="col-align-center">7</td>
                        <td class="col-align-center"><span
                                class="text-success">09/12/2019</span><br><span
                                class="text-danger">14/07/2020</span></td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center">18</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=2492">noithatanhtuan</a>
                        </td>
                        <td class="col-align-center">
                            <div title="25/01/2016 17:28:57">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2016-01-25 17:28:57 "> Trịnh
                                    Thị Phương Nhi</p>
                            </div>
                            <div title="25/01/2016 17:28:57">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2016-01-25 17:28:57 "> Trương
                                    Thị Tường Vi</p>
                            </div>
                        </td>
                        <td class="col-align-center">15</td>
                        <td class="col-align-center"><span
                                class="text-success">13/06/2019</span><br><span
                                class="text-danger">19/07/2020</span></td>
                    </tr>
                    <tr>
                        <td class="col-align-center">19</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=2749">THANHMAISTORE</a>
                        </td>
                        <td class="col-align-center">
                            <div title="17/02/2016 14:52:29">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2016-02-17 14:52:29 "> Phan
                                    Vũ Như Quỳnh</p>
                            </div>
                            <div title="17/02/2016 14:52:29">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2016-02-17 14:52:29 "> Trương
                                    Thị Tường Vi</p>
                            </div>
                        </td>
                        <td class="col-align-center">10</td>
                        <td class="col-align-center"><span
                                class="text-success">04/07/2019</span><br><span
                                class="text-danger">04/07/2020</span></td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center">20</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=2762">xnk_thienphat</a>
                        </td>
                        <td class="col-align-center">
                            <div title="27/01/2016 08:29:53">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2016-01-27 08:29:53 "> Phan
                                    Vũ Như Quỳnh</p>
                            </div>
                            <div title="27/01/2016 08:29:53">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2016-01-27 08:29:53 "> Trương
                                    Thị Tường Vi</p>
                            </div>
                        </td>
                        <td class="col-align-center">4</td>
                        <td class="col-align-center"><span
                                class="text-success">10/07/2019</span><br><span
                                class="text-danger">10/07/2020</span></td>
                    </tr>
                    <tr>
                        <td class="col-align-center">21</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=2765">giadungquangsang</a>
                        </td>
                        <td class="col-align-center">
                            <div title="27/01/2016 08:57:44">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2016-01-27 08:57:44 "> Đào
                                    Việt Hà</p>
                            </div>
                            <div title="27/01/2016 08:57:44">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2016-01-27 08:57:44 "> Phan
                                    Quỳnh Hương</p>
                            </div>
                        </td>
                        <td class="col-align-center">9</td>
                        <td class="col-align-center"><span
                                class="text-success">18/07/2019</span><br><span
                                class="text-danger">20/07/2020</span></td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center">22</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=2904">noithatcaocapvanxuan</a>
                        </td>
                        <td class="col-align-center">
                            <div title="15/02/2016 15:35:43">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2016-02-15 15:35:43 "> Nguyễn
                                    Hoàng Long</p>
                            </div>
                            <div title="15/02/2016 15:35:43">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2016-02-15 15:35:43 "> Trương
                                    Thị Tường Vi</p>
                            </div>
                        </td>
                        <td class="col-align-center">13</td>
                        <td class="col-align-center"><span
                                class="text-success">14/02/2020</span><br><span
                                class="text-danger">16/07/2020</span></td>
                    </tr>
                    <tr>
                        <td class="col-align-center">23</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=3032">vanthangphat</a>
                        </td>
                        <td class="col-align-center">
                            <div title="28/01/2016 23:10:47">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2016-01-28 23:10:47 "> Đỗ Văn
                                    Thảo</p>
                            </div>
                            <div title="28/01/2016 23:10:47">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2016-01-28 23:10:47 "> Hồ
                                    Phạm Ngọc Tiên</p>
                            </div>
                            <div title="28/01/2016 23:10:47">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2016-01-28 23:10:47 "> Trương
                                    Thị Tường Vi</p>
                            </div>
                        </td>
                        <td class="col-align-center">6</td>
                        <td class="col-align-center"><span
                                class="text-success">11/07/2019</span><br><span
                                class="text-danger">11/07/2020</span></td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center">24</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=3064">vienthinh</a>
                        </td>
                        <td class="col-align-center">
                            <div title="15/02/2016 11:23:10">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2016-02-15 11:23:10 "> Phan
                                    Vũ Như Quỳnh</p>
                            </div>
                            <div title="15/02/2016 11:23:10">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2016-02-15 11:23:10 "> Trương
                                    Thị Tường Vi</p>
                            </div>
                        </td>
                        <td class="col-align-center">13</td>
                        <td class="col-align-center"><span
                                class="text-success">24/07/2019</span><br><span
                                class="text-danger">24/07/2020</span></td>
                    </tr>
                    <tr>
                        <td class="col-align-center">25</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=4030">GULL</a>
                        </td>
                        <td class="col-align-center">
                            <div title="16/05/2016 23:39:42">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2016-05-16 23:39:42 "> Vũ Duy
                                    Hoàng</p>
                            </div>
                            <div title="16/05/2016 23:39:42">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2016-05-16 23:39:42 "> Trương
                                    Thị Tường Vi</p>
                            </div>
                        </td>
                        <td class="col-align-center">5</td>
                        <td class="col-align-center"><span
                                class="text-success">06/12/2019</span><br><span
                                class="text-danger">06/07/2020</span></td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center">26</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=4048">phongchaychuachayab</a>
                        </td>
                        <td class="col-align-center">
                            <div title="18/05/2016 10:54:22">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2016-05-18 10:54:22 "> Phan
                                    Vũ Như Quỳnh</p>
                            </div>
                            <div title="18/05/2016 10:54:22">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2016-05-18 10:54:22 "> Trương
                                    Thị Tường Vi</p>
                            </div>
                        </td>
                        <td class="col-align-center">4</td>
                        <td class="col-align-center"><span
                                class="text-success">19/06/2019</span><br><span
                                class="text-danger">19/07/2020</span></td>
                    </tr>
                    <tr>
                        <td class="col-align-center">27</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=5906">thietbidientanminh</a>
                        </td>
                        <td class="col-align-center">
                            <div title="24/04/2017 10:13:48">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2017-04-24 10:13:48 "> Nguyễn
                                    Thị Quỳnh Vân</p>
                            </div>
                            <div title="24/04/2017 10:13:48">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2017-04-24 10:13:48 "> Phạm
                                    Thị Hiền</p>
                            </div>
                        </td>
                        <td class="col-align-center">8</td>
                        <td class="col-align-center"><span
                                class="text-success">17/12/2019</span><br><span
                                class="text-danger">17/07/2020</span></td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center">28</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=6614">cokhituanviet</a>
                        </td>
                        <td class="col-align-center">
                            <div title="21/08/2017 09:07:15">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2017-08-21 09:07:15 "> Phạm
                                    Thị Giang</p>
                            </div>
                            <div title="21/08/2017 09:07:15">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2017-08-21 09:07:15 "> Tạ Thị
                                    Thùy</p>
                            </div>
                        </td>
                        <td class="col-align-center">8</td>
                        <td class="col-align-center"><span
                                class="text-success">05/12/2019</span><br><span
                                class="text-danger">05/07/2020</span></td>
                    </tr>
                    <tr>
                        <td class="col-align-center">29</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=7210">dogosieuquan</a>
                        </td>
                        <td class="col-align-center">
                            <div title="23/11/2017 13:28:17">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2017-11-23 13:28:17 "> Tạ Thị
                                    Thùy</p>
                            </div>
                            <div title="23/11/2017 13:28:17">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2017-11-23 13:28:17 ">
                                    Nguyễn Thanh Tâm</p>
                            </div>
                        </td>
                        <td class="col-align-center">3</td>
                        <td class="col-align-center"><span
                                class="text-success">18/04/2019</span><br><span
                                class="text-danger">01/07/2020</span></td>
                    </tr>
                    <tr class="even">
                        <td class="col-align-center">30</td>
                        <td class="col-align-center"><a
                                href="https://erp.nhanh.vn/crm/service/view?id=7543">banghephuongdong</a>
                        </td>
                        <td class="col-align-center">
                            <div title="06/04/2018 15:31:32">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2018-04-06 15:31:32 "> Trương
                                    Thị Tường Vi</p>
                            </div>
                            <div title="06/04/2018 15:31:32">
                                <p data-toggle="tooltip"
                                    data-original-title="Ngày tạo: 2018-04-06 15:31:32 "> Nguyễn
                                    Thị Ngọc Trầm</p>
                            </div>
                        </td>
                        <td class="col-align-center">8</td>
                        <td class="col-align-center"><span
                                class="text-success">16/03/2020</span><br><span
                                class="text-danger">16/07/2020</span></td>
                    </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div class="col-md-6 paginatorItem">
                    <div class="paginator"><span class="labelPages">1 - 30 / 48</span><span
                            class="disabled fa fa-step-backward"></span><span
                            class="disabled fa fa-backward"></span><a class="fa fa-forward"
                            href="https://erp.nhanh.vn/crm/report/serviceexpired?page=2"
                            title="Trang sau"></a> <a class="fa fa-step-forward"
                            href="https://erp.nhanh.vn/crm/report/serviceexpired?page=2"
                            title="Trang cuối"></a></div>
                </div>
            </div>
        </div>
        <style>
            .widget-table {
                overflow: auto !important;
            }

            ul.multiselect-container>li>a label.checkbox {
                padding: 0 !important;
            }
        </style>
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
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/saved_resource(2)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/servicexpried.js') }}"></script>
@endsection