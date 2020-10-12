@extends('crm::layouts.master1')

@section('css')
    <link href="{{ asset('css/crm/report/bootstrap-multiselect.css') }}" media="screen" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/crm/report/style.css') }}" type="text/css">
@endsection

@section('title','ERP-Báo cáo theo nguồn khách hàng')

@section('content-page')

    <div class="tab-content">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li class="active">Báo cáo theo nguồn khách hàng</li>
        </ul>
        <div class="filterContainer">
            <form method="GET" name="crmReportEmployeesFilter" class="form-inline lolify"
                  role="form" id="crmReportEmployeesFilter" action="{{ route('get.crm.report.accountSource.filter') }}">
                @csrf
                <div class="col-md-10 lolify-default">

                    <div class="form-group">
                        <input type="text" name="dateRange"
                               class="form-control date-range-picker" id="daterangepicker"
                               value="" placeholder="FROM - TO"> </div>
                    <div class="form-group">
                        <select name="companyId" id="companyId" class="form-control">
                            <option value="">- Công ty nhân viên -</option>
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
                        </select> </div>
                    <div class="form-group">
                        <select name="departmentId" id="departmentId" class="form-control">
                            <option value="">- Phòng ban -</option>
                        </select> </div>
                    <div class="form-group">
                        <input type="text" name="createdByName" maxlength="255"
                               placeholder="Nhân viên" id="createdByName"
                               class="form-control ui-autocomplete-input" value=""
                               autocomplete="off"> </div>
                    <input type="hidden" name="createdById" id="createdById"
                           class="form-control" value="">
                    <div class="form-group">
                        <input name="submit" type="submit" id="btnFilterCrmContact"
                               class="form-control btn btn-primary" value="Lọc"> </div>

                </div>
                <div class="col-md-2 lolify-control">


                </div>
            </form>
            <div class="clearfix"></div>
            <div class="lolify-left-menu" style="display: none;">
            </div>
        </div><a id="exportExcel" href="https://erp.nhanh.vn/crm/report/sourceaccount#"><button
                    class="btn btn-primary btn-sm "><i class="fa fa-download fa-lg"></i>Xuất
                excel</button></a>
        <div class="dgContainer">
            <div style="display: none; width: 1874px;" class="stickyHeader">
                <table class="table table-bordered" cellspacing="0" cellpadding="0">
                    <thead>
                    <tr class="even">
                        <th style="width: 229px;">STT</th>
                        <th style="width: 343px;">Tên Nguồn</th>
                        <th style="width: 171px;">Nhận chăm sóc</th>
                        <th style="width: 212px;">Số Khách hàng mới</th>
                        <th style="width: 376px;">CVR (Số KH mới/ Số nhận chăm sóc)</th>
                        <th style="width: 194px;">Số Hợp đồng mới</th>
                        <th style="width: 180px;">Giá trị hợp đồng</th>
                        <th style="width: 168px;">Đã trả </th>
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
                    <th>STT</th>
                    <th>Tên Nguồn</th>
                    <th>Nhận chăm sóc</th>
                    <th>Số Khách hàng mới</th>
                    <th>CVR (Số KH mới/ Số nhận chăm sóc)</th>
                    <th>Số Hợp đồng mới</th>
                    <th>Giá trị hợp đồng</th>
                    <th>Đã trả </th>
                </tr>
                </thead>
                <tbody>
                @foreach($reports as $key => $report)
                    <tr class="">
                        <td class="col-align-right">1</td>
                        <td class="">{{ $key }}</td>
                        <td class="col-align-right">
                            <a>{{ $report['takeCare'] }}</a>
                        </td>
                        <td class="col-align-right">
                            <a]>{{ $report['newAccount'] }}</a>
                        </td>
                        <td class="col-align-right">{{ $report['cvr']."%" }}</td>
                        <td class="col-align-right"
                            @if($report['amountOfNewContract'] > 0)
                                style="box-shadow: 0 0 0 1px #fff inset; background-image: -webkit-linear-gradient(0deg, #FDD25C {{ round($report['amountOfNewContract'] * 100 / $report['amountAllNewContract']) }}%, #ffffff 2%);">
                                <a>{{ $report['amountOfNewContract'] }}
                                    <span class="text-info">
                                        {{ "(".round($report['amountOfNewContract'] * 100 / $report['amountAllNewContract'])."%)" }}
                                    </span>
                                </a>
                            @else
                                style="box-shadow: 0 0 0 1px #fff inset; background-image: -webkit-linear-gradient(0deg, #FDD25C 0%, #ffffff 2%);">
                                <a>{{ $report['amountOfNewContract'] }}
                                    <span class="text-info">
                                        0%
                                    </span>
                                </a>
                            @endif
                        </td>
                        <td class="col-align-right">
                            <a>{{ number_format($report['totalValueNewContract']) }}</a>
                        </td>
                        <td class="col-align-right">
                            <a>{{ number_format($report['totalValueTransaction']) }}</a>
                        </td>
                    </tr>
                @endforeach
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
                    <li>Báo cáo này lọc theo tên nhân viên và phòng ban tạo hợp đồng</li>
                </ul>
            </div>
        </div>
        <style>
            #exportExcell {
                color: #fff;
                background-color: #3276b1;
                border-color: #285e8e;
                text-decoration: none;
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
    <script type="text/javascript" src="{{ asset('js/crm/report/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/report/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/report/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/report/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/report/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/report/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/report/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/report/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/report/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('js/crm/report/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/report/saved_resource(2)') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/report/saved_resource(3)') }}"></script>
@endsection