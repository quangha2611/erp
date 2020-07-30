@extends('Layout.master1')

@section('css')
    <link href="{{ asset('asset/css/report/bootstrap-multiselect.css') }}" media="screen" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/css/report/style.css') }}" type="text/css">
@endsection

@section('title','ERP-Báo cáo theo phòng ban')

@section('content-page')

    <div class="tab-content">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li class="active">Báo cáo KPI chăm sóc Gian hàng</li>
        </ul>
        <div class="filterContainer">
            <form method="GET" name="crmReportEmployeesFilter" class="form-inline lolify"
                role="form" id="crmReportEmployeesFilter">
                <div class="col-md-10 lolify-default">

                    <div class="form-group">
                        <input type="text" name="daterangepicker"
                            class="form-control date-range-picker" id="daterangepicker"
                            value="01/07/2020 - 31/07/2020"> </div>
                    <div class="form-group">
                        <select name="companyId" id="companyId"
                            class="form-control select2-hidden-accessible" tabindex="-1"
                            aria-hidden="true">
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
                        </select><span
                            class="select2 select2-container select2-container--default"
                            dir="ltr" style="width: 150px;"><span class="selection"><span
                                    class="select2-selection select2-selection--single"
                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                    tabindex="0"
                                    aria-labelledby="select2-companyId-container"><span
                                        class="select2-selection__rendered"
                                        id="select2-companyId-container"><span
                                            class="select2-selection__placeholder">Công
                                            ty</span></span><span
                                        class="select2-selection__arrow" role="presentation"><b
                                            role="presentation"></b></span></span></span><span
                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                    </div>
                    <div class="form-group">
                        <select name="departmentId" id="departmentId"
                            class="form-control select2-hidden-accessible" tabindex="-1"
                            aria-hidden="true">
                            <option value="">- Phòng ban -</option>
                        </select><span
                            class="select2 select2-container select2-container--default select2-container--below select2-container--focus"
                            dir="ltr" style="width: 103px;"><span class="selection"><span
                                    class="select2-selection select2-selection--single"
                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                    tabindex="0"
                                    aria-labelledby="select2-departmentId-container"><span
                                        class="select2-selection__rendered"
                                        id="select2-departmentId-container"><span
                                            class="select2-selection__placeholder">Phòng ban
                                            hưởng doanh số</span></span><span
                                        class="select2-selection__arrow" role="presentation"><b
                                            role="presentation"></b></span></span></span><span
                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                    </div>
                    <div class="form-group">
                        <input type="text" name="q" placeholder="Tên hoặc mã nhân sự" id="q"
                            class="form-control" value=""> </div>
                    <div class="form-group">
                        <select name="reasonType" id="reasonType" class="form-control">
                            <option value="">- Mục đích -</option>
                            <option value="1">Giải thích tính năng</option>
                            <option value="2">Giới thiệu chính sách mới</option>
                            <option value="3">Báo cáo hiệu quả gian hàng</option>
                        </select> </div>
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
                            <li><a id="exportAll"><i class="fa fa-download fa-lg"></i> Xuất
                                    excel</a></li>
                        </ul>
                    </div>


                </div>
            </form>
            <div class="clearfix"></div>
            <div class="lolify-left-menu" style="display: none;">
            </div>
        </div>
        <div class="dgButtons" style="float:right;"><a
                href="https://erp.nhanh.vn/crm/report/mettingvg"
                class="btn btn-primary btn-sm">Xem chi tiết báo cáo đến gặp</a></div>
        <div class="dgContainer">
            <div style="display: none; width: 1889px;" class="stickyHeader">
                <table class="table table-bordered" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr class="even">
                            <th rowspan="2" style="width: 36px;">STT</th>
                            <th rowspan="2" style="width: 48px;">Mã NV</th>
                            <th rowspan="2" style="width: 129px;">Nhân viên</th>
                            <th rowspan="2" style="width: 332px;">Phòng ban</th>
                            <th rowspan="2" style="width: 143px;">Số lượng GH chăm sóc</th>
                            <th rowspan="2" style="width: 147px;">Số lượng GH được giao</th>
                            <th rowspan="2" style="width: 103px;">Thời gian</th>
                            <th colspan="3" style="width: 260px;">Đến gặp</th>
                            <th colspan="2" style="width: 138px;">Thu tiền</th>
                            <th colspan="2" style="width: 138px;">Gọi điện</th>
                            <th colspan="2" style="width: 138px;">Gửi Email</th>
                            <th colspan="2" style="width: 138px;">Gửi SMS</th>
                            <th colspan="2" style="width: 138px;">Khác</th>
                        </tr>
                        <tr>
                            <th style="width: 80px;">Thành công</th>
                            <th style="width: 58px;">Thất bại</th>
                            <th style="width: 122px;">Quãng đường (Km)</th>
                            <th style="width: 80px;">Thành công</th>
                            <th style="width: 58px;">Thất bại</th>
                            <th style="width: 80px;">Thành công</th>
                            <th style="width: 58px;">Thất bại</th>
                            <th style="width: 80px;">Thành công</th>
                            <th style="width: 58px;">Thất bại</th>
                            <th style="width: 80px;">Thành công</th>
                            <th style="width: 58px;">Thất bại</th>
                            <th style="width: 80px;">Thành công</th>
                            <th style="width: 58px;">Thất bại</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div style="clear: both;"></div><br>
            </div>
            <table id="dgCrmReportTarget" class="table table-bordered">
                <thead>
                    <tr class="even">
                        <th rowspan="2">STT</th>
                        <th rowspan="2">Mã NV</th>
                        <th rowspan="2">Nhân viên</th>
                        <th rowspan="2">Phòng ban</th>
                        <th rowspan="2">Số lượng GH chăm sóc</th>
                        <th rowspan="2">Số lượng GH được giao</th>
                        <th rowspan="2">Thời gian</th>
                        <th colspan="3">Đến gặp</th>
                        <th colspan="2">Thu tiền</th>
                        <th colspan="2">Gọi điện</th>
                        <th colspan="2">Gửi Email</th>
                        <th colspan="2">Gửi SMS</th>
                        <th colspan="2">Khác</th>
                    </tr>
                    <tr>
                        <th>Thành công</th>
                        <th>Thất bại</th>
                        <th>Quãng đường (Km)</th>
                        <th>Thành công</th>
                        <th>Thất bại</th>
                        <th>Thành công</th>
                        <th>Thất bại</th>
                        <th>Thành công</th>
                        <th>Thất bại</th>
                        <th>Thành công</th>
                        <th>Thất bại</th>
                        <th>Thành công</th>
                        <th>Thất bại</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="taskStt3 even">
                        <td colspan="4"><b>Tổng</b></td>
                        <td class="colNumber"><b>55</b></td>
                        <td class="colNumber"><b>127</b></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><b></b></td>
                        <td class="colNumber"><b></b></td>
                        <td class="colNumber"><b></b></td>
                        <td class="colNumber"><b></b></td>
                        <td class="colNumber"><b></b></td>
                        <td class="colNumber"><b>13</b></td>
                        <td class="colNumber"><b>1</b></td>
                        <td class="colNumber"><b></b></td>
                        <td class="colNumber"><b></b></td>
                        <td class="colNumber"><b></b></td>
                        <td class="colNumber"><b></b></td>
                        <td class="colNumber"><b>54</b></td>
                        <td class="colNumber"><b></b></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;userId=6797">8102</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;userId=6797">Lê
                                Thùy Linh</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/carevg?departmentId=516">Phòng
                                chăm sóc khách hàng - Online | Vật giá - Hà Nội</a></td>
                        <td class="colNumber">10</td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/service/index?endDaterangepicker=01%2F07%2F2020%20-%2001%2F07%2F2070&amp;userId=6797">12</a>
                        </td>
                        <td class="colNumber">147 giờ 20 phút</td>
                        <td class="colNumber"><b>0</b></td>
                        <td class="colNumber"><b>0</b></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><b>0</b></td>
                        <td class="colNumber"><b>0</b></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;userId=6797&amp;type=32">1</a>
                        </td>
                        <td class="colNumber"><b>0</b></td>
                        <td class="colNumber"><b>0</b></td>
                        <td class="colNumber"><b>0</b></td>
                        <td class="colNumber"><b>0</b></td>
                        <td class="colNumber"><b>0</b></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;userId=6797&amp;type=99">9</a>
                        </td>
                        <td class="colNumber"><b>0</b></td>
                    </tr>
                    <tr class="even">
                        <td>2</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;userId=6787">8094</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;userId=6787">Nguyễn
                                Thanh Tâm</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/carevg?departmentId=516">Phòng
                                chăm sóc khách hàng - Online | Vật giá - Hà Nội</a></td>
                        <td class="colNumber">13</td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/service/index?endDaterangepicker=01%2F07%2F2020%20-%2001%2F07%2F2070&amp;userId=6787">16</a>
                        </td>
                        <td class="colNumber">202 giờ 27 phút</td>
                        <td class="colNumber"><b>0</b></td>
                        <td class="colNumber"><b>0</b></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><b>0</b></td>
                        <td class="colNumber"><b>0</b></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;userId=6787&amp;type=32">2</a>
                        </td>
                        <td class="colNumber"><b>0</b></td>
                        <td class="colNumber"><b>0</b></td>
                        <td class="colNumber"><b>0</b></td>
                        <td class="colNumber"><b>0</b></td>
                        <td class="colNumber"><b>0</b></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;userId=6787&amp;type=99">12</a>
                        </td>
                        <td class="colNumber"><b>0</b></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;userId=4405">5095</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;userId=4405">Phạm
                                Thị Giang</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/carevg?departmentId=516">Phòng
                                chăm sóc khách hàng - Online | Vật giá - Hà Nội</a></td>
                        <td class="colNumber">29</td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/service/index?endDaterangepicker=01%2F07%2F2020%20-%2001%2F07%2F2070&amp;userId=4405">34</a>
                        </td>
                        <td class="colNumber">513 giờ 42 phút</td>
                        <td class="colNumber"><b>0</b></td>
                        <td class="colNumber"><b>0</b></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><b>0</b></td>
                        <td class="colNumber"><b>0</b></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;userId=4405&amp;type=32">8</a>
                        </td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;userId=4405&amp;type=32">1</a>
                        </td>
                        <td class="colNumber"><b>0</b></td>
                        <td class="colNumber"><b>0</b></td>
                        <td class="colNumber"><b>0</b></td>
                        <td class="colNumber"><b>0</b></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;userId=4405&amp;type=99">28</a>
                        </td>
                        <td class="colNumber"><b>0</b></td>
                    </tr>
                    <tr class="even">
                        <td>4</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;userId=2943">4092</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;userId=2943">Lê
                                Thị Mến</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/carevg?departmentId=516">Phòng
                                chăm sóc khách hàng - Online | Vật giá - Hà Nội</a></td>
                        <td class="colNumber">2</td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/service/index?endDaterangepicker=01%2F07%2F2020%20-%2001%2F07%2F2070&amp;userId=2943">4</a>
                        </td>
                        <td class="colNumber">55 giờ 13 phút</td>
                        <td class="colNumber"><b>0</b></td>
                        <td class="colNumber"><b>0</b></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><b>0</b></td>
                        <td class="colNumber"><b>0</b></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;userId=2943&amp;type=32">1</a>
                        </td>
                        <td class="colNumber"><b>0</b></td>
                        <td class="colNumber"><b>0</b></td>
                        <td class="colNumber"><b>0</b></td>
                        <td class="colNumber"><b>0</b></td>
                        <td class="colNumber"><b>0</b></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;userId=2943&amp;type=99">5</a>
                        </td>
                        <td class="colNumber"><b>0</b></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;userId=1096">0189</a>
                        </td>
                        <td><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;userId=1096">Phan
                                Quỳnh Hương</a></td>
                        <td><a href="https://erp.nhanh.vn/crm/report/carevg?departmentId=591">Phòng
                                CSGH | Vật giá - Hà Nội</a></td>
                        <td class="colNumber">1</td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/service/index?endDaterangepicker=01%2F07%2F2020%20-%2001%2F07%2F2070&amp;userId=1096">61</a>
                        </td>
                        <td class="colNumber">30 phút</td>
                        <td class="colNumber"><b>0</b></td>
                        <td class="colNumber"><b>0</b></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><b>0</b></td>
                        <td class="colNumber"><b>0</b></td>
                        <td class="colNumber"><a
                                href="https://erp.nhanh.vn/crm/report/detailcarevg?dateRange=01%2F07%2F2020%20-%2031%2F07%2F2020&amp;userId=1096&amp;type=32">1</a>
                        </td>
                        <td class="colNumber"><b>0</b></td>
                        <td class="colNumber"><b>0</b></td>
                        <td class="colNumber"><b>0</b></td>
                        <td class="colNumber"><b>0</b></td>
                        <td class="colNumber"><b>0</b></td>
                        <td class="colNumber"><b>0</b></td>
                        <td class="colNumber"><b>0</b></td>
                    </tr>
                    <tr class="taskStt3 even">
                        <td colspan="4"><b>Tổng</b></td>
                        <td class="colNumber"><b>55</b></td>
                        <td class="colNumber"><b>127</b></td>
                        <td class="colNumber"></td>
                        <td class="colNumber"><b></b></td>
                        <td class="colNumber"><b></b></td>
                        <td class="colNumber"><b></b></td>
                        <td class="colNumber"><b></b></td>
                        <td class="colNumber"><b></b></td>
                        <td class="colNumber"><b>13</b></td>
                        <td class="colNumber"><b>1</b></td>
                        <td class="colNumber"><b></b></td>
                        <td class="colNumber"><b></b></td>
                        <td class="colNumber"><b></b></td>
                        <td class="colNumber"><b></b></td>
                        <td class="colNumber"><b>54</b></td>
                        <td class="colNumber"><b></b></td>
                    </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
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
                    <li><b>Lưu ý: </b> Số lượng gian hàng chăm sóc là số lượng gian hàng mà nhân
                        viên ấy đang chăm sóc và vẫn còn hạn!</li>
                    <li>Click vào tên nhân viên hoặc số liệu để xem báo cáo chi tiết hơn!</li>
                </ul>
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
</div>
    
@endsection

@section('js')
    <script type="text/javascript">
        var usrCnf = {
            language: 'vi'
        };
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/report/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/report/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/report/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/report/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/report/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/report/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/report/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/report/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/report/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/report/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/report/bootstrap-multiselect.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/report/saved_resource(2)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/report/department.js') }}"></script>
@endsection