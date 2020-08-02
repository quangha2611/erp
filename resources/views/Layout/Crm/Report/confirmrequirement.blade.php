@extends('Layout.master1')

@section('css')
    <link href="{{ asset('asset/css/crm/report/bootstrap-multiselect.css') }}" media="screen" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/css/crm/report/style.css') }}" type="text/css">
@endsection

@section('title','ERP-Báo cáo thực hiện dịch vụ Vật Giá')

@section('content-page')

        <div class="tab-content">
            <ul class="breadcrumb">
                <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
                <li class="active">Báo cáo thực hiện dịch vụ Vật Giá</li>
            </ul>

            <div class="filterContainer">
                <form method="GET" name="crmReportConfirmFilter" class="form-inline" role="form"
                    id="crmReportConfirmFilter">
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
                            <option value="1">----Nhanh.vn</option>
                            <option value="366">----Nhanh.vn Đà Nẵng</option>
                            <option value="395">----Nhanh.vn HCM</option>
                            <option value="379">--Westay</option>
                            <option value="384">--Công ty cổ phần WeHelp</option>
                            <option value="398">--WeLove</option>
                        </select></div>
                    <div class="form-group"><select name="department" id="department"
                            class="form-control">
                            <option value="">- Phòng ban -</option>
                        </select></div>
                    <div class="form-group"><input type="text" name="daterangepicker"
                            class="form-control date-range-picker" id="daterangepicker"
                            value="01/07/2020 - 31/07/2020"></div>
                    <div class="form-group"><input type="text" name="q"
                            placeholder="Tên hoặc mã nhân sự" id="q" class="form-control" value="">
                    </div>
                    <div class="form-group"><select name="valueType" id="valueType"
                            class="form-control">
                            <option value="">- Tài khoản -</option>
                            <option value="5">Không có tài khoản</option>
                            <option value="1">Tài khoản Chính</option>
                            <option value="2">Tài khoản Marketing</option>
                        </select></div>
                    <div class="form-group"><input name="submit" type="submit"
                            id="btnFilterCrmReport" class="form-control btn btn-primary"
                            value="Lọc"></div>
                </form>
            </div>
            <style>
                tr:hover {
                    background-color: #f5f5f0;
                }
            </style>
            <div class="dgContainer">
                <div style="display: none; width: 1889px;" class="stickyHeader">
                    <table class="table table-bordered" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr class="even">
                                <th style="width: 57px;">ID</th>
                                <th style="width: 112px;">Mã NV</th>
                                <th style="width: 319px;">Nhân viên</th>
                                <th style="width: 527px;">Phòng ban</th>
                                <th style="width: 259px;">Số lượng yêu cầu</th>
                                <th style="width: 181px;">Số tiền TH</th>
                                <th style="width: 248px;">Phí duy trì (khác)</th>
                                <th style="width: 185px;">Khuyến mại</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-6 dgButtons"></div>
                    <div style="clear: both;"></div><br>
                </div>
                <table id="dgCrmReportConfirm" class="table table-bordered">
                    <thead>
                        <tr class="even">
                            <th>ID</th>
                            <th>Mã NV</th>
                            <th>Nhân viên</th>
                            <th>Phòng ban</th>
                            <th>Số lượng yêu cầu</th>
                            <th>Số tiền TH</th>
                            <th>Phí duy trì (khác)</th>
                            <th>Khuyến mại</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="taskStt3">
                            <td colspan="4"><b>Tổng</b></td>
                            <td align="center">126</td>
                            <td class="colNumber">97.165.000</td>
                            <td class="colNumber">228.426.000</td>
                            <td class="colNumber">67.149.603</td>
                        </tr>
                        <tr class="even">
                            <td>1</td>
                            <td>3681</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/requirement/confirmvg?createdById=2747&amp;valueType=&amp;confirmrangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020">Nguyễn
                                    Nhật Linh</a></td>
                            <td>Rao vặt - THDV</td>
                            <td align="center">65</td>
                            <td class="colNumber">82.064.000</td>
                            <td class="colNumber">23.430.000</td>
                            <td class="colNumber">56.836.900</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>8820</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/requirement/confirmvg?createdById=7574&amp;valueType=&amp;confirmrangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020">Đào
                                    Ngọc Ánh</a></td>
                            <td>Phòng chăm sóc khách hàng - Online</td>
                            <td align="center">53</td>
                            <td class="colNumber">10.005.000</td>
                            <td class="colNumber">201.036.000</td>
                            <td class="colNumber">9.936.703</td>
                        </tr>
                        <tr class="even">
                            <td>3</td>
                            <td>3963</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/requirement/confirmvg?createdById=2895&amp;valueType=&amp;confirmrangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020">Phạm
                                    Phương Thanh</a></td>
                            <td>Vchat</td>
                            <td align="center">6</td>
                            <td class="colNumber">5.096.000</td>
                            <td class="colNumber"></td>
                            <td class="colNumber">376.000</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>4553</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/requirement/confirmvg?createdById=3116&amp;valueType=&amp;confirmrangepicker=01%2F07%2F2020%20-%2031%2F07%2F2020">Phạm
                                    Thị Hồng Linh</a></td>
                            <td>Phòng chăm sóc khách hàng - Online</td>
                            <td align="center">2</td>
                            <td class="colNumber"></td>
                            <td class="colNumber">3.960.000</td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="taskStt3  even">
                            <td colspan="4"><b>Tổng</b></td>
                            <td align="center">126</td>
                            <td class="colNumber">97.165.000</td>
                            <td class="colNumber">228.426.000</td>
                            <td class="colNumber">67.149.603</td>
                        </tr>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-md-6 dgButtons"></div>
                </div>
            </div>



            <style>

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
@endsection