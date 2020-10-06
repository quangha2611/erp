@extends('crm::layouts.master1')

@section('css')
    <link href="{{ asset('css/crm/report/bootstrap-multiselect.css') }}" media="screen" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/crm/report/style.css') }}" type="text/css">
@endsection

@section('title','ERP-Báo cáo chăm sóc')

@section('content-page')

    <div class="tab-content">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li class="active">Báo cáo chăm sóc</li>
        </ul>
        <div id="page-crm-contact">
            <div class="filterContainer">
                <form method="GET" name="crmReportIndexFilter" class="form-inline" role="form"
                      id="crmReportIndexFilter" action="{{ route('get.crm.report.filter') }}">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="dateRange" class="form-control date-range-picker" id="daterangepicker"
                               value="" placeholder="FROM - TO">
                    </div>
                    <div class="form-group"><select name="groupBy" id="groupBy"
                                                    class="form-control">
                            <option value="day">Theo ngày</option>
                            <option value="month">Theo tháng</option>
                        </select></div>
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
                    <div class="form-group"><select name="departmentId" id="departmentId"
                                                    class="form-control">
                            <option value="">- Phòng ban -</option>
                        </select></div>
                    <div class="form-group"><select name="supplyCompanyId" id="supplyCompanyId"
                                                    class="form-control">
                            <option value="">- Cty cung cấp sp -</option>
                            <option value="1">Nhanh.vn</option>
                            <option value="10">VNP group</option>
                            <option value="2">---Công ty cổ phần Vật Giá Việt Nam</option>
                            <option value="315">------Vật giá - Hà Nội</option>
                            <option value="391">------123job.vn</option>
                            <option value="14">---Easycare.vn</option>
                            <option value="321">---Công ty cổ phần TMDT Bảo Kim</option>
                            <option value="384">---Công ty cổ phần WeHelp</option>
                        </select></div>
                    <div class="form-group"><input type="text" name="createdByName"
                                                   placeholder="Nhân viên" id="createdByName"
                                                   class="form-control ui-autocomplete-input" value=""
                                                   autocomplete="off"></div> <input type="hidden" name="createdById"
                                                                                    id="createdById" class="form-control" value="">
                    <div class="form-group"><input name="submit" type="submit"
                                                   id="btnFilterCrmContact" class="form-control btn btn-primary"
                                                   value="Lọc"></div>
                </form>
            </div>
            <div class="col-md-12">
                <div id="crm-chart">

                </div>
            </div>
            <div class="col-md-12">
                <div id="crm-chart-revenue">

                </div>
            </div>
            <div style="clear: both;"></div>
            <div class="widget widget-table">
                <div class="widget-header">
                    <h3><i class="fa fa-table"></i> Báo cáo chăm sóc</h3>
                </div>
                <div class="dgContainer widget-content table-responsive">
                    <div style="display: none; width: 1852px;" class="stickyHeader">
                        <table class="table table-bordered" cellspacing="0" cellpadding="0">
                            <thead>
                            <tr class="even">
                                <th rowspan="2" style="width: 152px;">Thời gian</th>
                                <th rowspan="2" style="width: 120px;"><a
                                            href="https://erp.nhanh.vn/crm/report/index?sort=createdLead&amp;dir=asc"><i
                                                class="fa fa-sort"></i> Tạo TT</a></th>
                                <th rowspan="2" style="width: 213px;"><a
                                            href="https://erp.nhanh.vn/crm/report/index?sort=lead&amp;dir=asc"><i
                                                class="fa fa-sort"></i> Nhận chăm sóc</a></th>
                                <th colspan="2" style="width: 178px;">Gọi</th>
                                <th rowspan="2" style="width: 89px;"><a
                                            href="https://erp.nhanh.vn/crm/report/index?sort=meeting&amp;dir=asc"><i
                                                class="fa fa-sort"></i> Gặp</a></th>
                                <th rowspan="2" style="width: 89px;"><a
                                            href="https://erp.nhanh.vn/crm/report/index?sort=calendar&amp;dir=asc"><i
                                                class="fa fa-sort"></i> Hẹn</a></th>
                                <th rowspan="2" style="width: 151px;"><a
                                            href="https://erp.nhanh.vn/crm/report/index?sort=deploy&amp;dir=asc"><i
                                                class="fa fa-sort"></i> Triển khai</a></th>
                                <th rowspan="2" style="width: 153px;"><a
                                            href="https://erp.nhanh.vn/crm/report/index?sort=employee&amp;dir=asc"><i
                                                class="fa fa-sort"></i> Nhân viên</a></th>
                                <th rowspan="2" style="width: 174px;"><a
                                            href="https://erp.nhanh.vn/crm/report/index?sort=account&amp;dir=asc"><i
                                                class="fa fa-sort"></i> Khách hàng</a></th>
                                <th colspan="3" style="width: 532px;">Hợp đồng</th>
                            </tr>
                            <tr>
                                <th style="width: 89px;"><a
                                            href="https://erp.nhanh.vn/crm/report/index?sort=callSuccess&amp;dir=asc"><i
                                                class="fa fa-sort"></i> <i
                                                class="fa fa-check"></i></a></th>
                                <th style="width: 89px;"><a
                                            href="https://erp.nhanh.vn/crm/report/index?sort=callFail&amp;dir=asc"><i
                                                class="fa fa-sort"></i> <i
                                                class="fa fa-minus-circle"></i></a></th>
                                <th style="width: 147px;"><a
                                            href="https://erp.nhanh.vn/crm/report/index?sort=contractTotal&amp;dir=asc"><i
                                                class="fa fa-sort"></i> Số lượng</a></th>
                                <th style="width: 188px;"><a
                                            href="https://erp.nhanh.vn/crm/report/index?sort=contractValue&amp;dir=asc"><i
                                                class="fa fa-sort"></i> Giá trị (VNĐ)</a></th>
                                <th style="width: 197px;"><a
                                            href="https://erp.nhanh.vn/crm/report/index?sort=contractPayment&amp;dir=asc"><i
                                                class="fa fa-sort"></i> Thu (VNĐ)</a></th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-6 dgButtons"></div>
                        <div style="clear: both;"></div><br>
                    </div>
                    <table id="dgCrmReportIndex" class="table table-bordered">
                        <thead>
                        <tr class="even">
                            <th rowspan="2">Thời gian</th>
                            <th rowspan="2"><a
                                        href="https://erp.nhanh.vn/crm/report/index?sort=createdLead&amp;dir=asc"><i
                                            class="fa fa-sort"></i> Tạo TT</a></th>
                            <th rowspan="2"><a
                                        href="https://erp.nhanh.vn/crm/report/index?sort=lead&amp;dir=asc"><i
                                            class="fa fa-sort"></i> Nhận chăm sóc</a></th>
                            <th colspan="2">Gọi</th>
                            <th rowspan="2"><a
                                        href="https://erp.nhanh.vn/crm/report/index?sort=meeting&amp;dir=asc"><i
                                            class="fa fa-sort"></i> Gặp</a></th>
                            <th rowspan="2"><a
                                        href="https://erp.nhanh.vn/crm/report/index?sort=calendar&amp;dir=asc"><i
                                            class="fa fa-sort"></i> Hẹn</a></th>
                            <th rowspan="2"><a
                                        href="https://erp.nhanh.vn/crm/report/index?sort=deploy&amp;dir=asc"><i
                                            class="fa fa-sort"></i> Triển khai</a></th>
                            <th rowspan="2"><a
                                        href="https://erp.nhanh.vn/crm/report/index?sort=employee&amp;dir=asc"><i
                                            class="fa fa-sort"></i> Nhân viên</a></th>
                            <th rowspan="2"><a
                                        href="https://erp.nhanh.vn/crm/report/index?sort=account&amp;dir=asc"><i
                                            class="fa fa-sort"></i> Khách hàng</a></th>
                            <th colspan="3">Hợp đồng</th>
                        </tr>
                        <tr>
                            <th><a
                                        href="https://erp.nhanh.vn/crm/report/index?sort=callSuccess&amp;dir=asc"><i
                                            class="fa fa-sort"></i> <i
                                            class="fa fa-check"></i></a></th>
                            <th><a
                                        href="https://erp.nhanh.vn/crm/report/index?sort=callFail&amp;dir=asc"><i
                                            class="fa fa-sort"></i> <i
                                            class="fa fa-minus-circle"></i></a></th>
                            <th><a
                                        href="https://erp.nhanh.vn/crm/report/index?sort=contractTotal&amp;dir=asc"><i
                                            class="fa fa-sort"></i> Số lượng</a></th>
                            <th><a
                                        href="https://erp.nhanh.vn/crm/report/index?sort=contractValue&amp;dir=asc"><i
                                            class="fa fa-sort"></i> Giá trị (VNĐ)</a></th>
                            <th><a
                                        href="https://erp.nhanh.vn/crm/report/index?sort=contractPayment&amp;dir=asc"><i
                                            class="fa fa-sort"></i> Thu (VNĐ)</a></th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($reports as $date => $report)
                                <tr class="even">
                                    <td>{{ $date }}</td>
                                    <td class="colNumber" {!! $report['customers'] != 0 ? '' : 'style="color: white"' !!}>
                                        {{ $report['customers'] }}
                                    </td>
                                    <td class="colNumber" {!! $report['customers'] != 0 ? '' : 'style="color: white"' !!}>
                                        {{ $report['customers'] }}
                                    </td>
                                    <td class="colNumber" {!! $report['phoneCallsDone'] != 0 ? '' : 'style="color: white"' !!}>
                                        {{ $report['phoneCallsDone'] }}
                                    </td>
                                    <td class="colNumber" {!! $report['phoneCallsFalse'] != 0 ? '' : 'style="color: white"' !!}>
                                        {{ $report['phoneCallsFalse'] }}
                                    </td>
                                    <td class="colNumber" {!! $report['calendars'] != 0 ? '' : 'style="color: white"' !!}>
                                        {{  $report['calendars'] }}
                                    </td>
                                    <td class="colNumber" {!! $report['meetings'] != 0 ? '' : 'style="color: white"' !!}>
                                        {{  $report['meetings'] }}
                                    </td>
                                    <td class="colNumber"></td>
                                    <td class="colNumber">
                                        10
                                    </td>
                                    <td class="colNumber" {!! $report['accounts'] != 0 ? '' : 'style="color: white"' !!}>
                                        {{ $report['accounts'] }}
                                    </td>
                                    <td class="colNumber" {!! $report['contracts'] != 0 ? '' : 'style="color: white"' !!}>
                                        {{ $report['contracts'] }}
                                    </td>
                                    <td class="colNumber" {!! $report['totalValueContracts'] != 0 ? '' : 'style="color: white"' !!}>
                                        {{ number_format($report['totalValueContracts']) }}
                                    </td>
                                    <td class="colNumber" {!! $report['totalContractTransactions'] != 0 ? '' : 'style="color: white"' !!}>
                                        {{ number_format($report['totalContractTransactions']) }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-md-6 dgButtons"></div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            td.mark {
                font-weight: bold;
            }

            td.colNumber {
                text-align: right;
            }
        </style>
        <script>
            var titleFirstChart = 'Tình hình chăm sóc - tìm, gọi gặp';
            var titleSecondChart = 'Tình hình chăm sóc - giá trị hợp đồng, doanh thu';
        </script>
    </div>
    </div>

@endsection

@section('js')
    <script type="text/javascript" charset="UTF-8" src="{{ asset('js/crm/report/loader.js') }}"></script>
    <script type="text/javascript" charset="UTF-8" src="{{ asset('js/crm/report/jsapi_compiled_default_module.js') }}"></script>
    <script type="text/javascript" charset="UTF-8" src="{{ asset('js/crm/report/jsapi_compiled_graphics_module.js') }}"></script>
    <script type="text/javascript" charset="UTF-8" src="{{ asset('js/crm/report/jsapi_compiled_ui_module.js') }}"> </script>
    <script type="text/javascript" charset="UTF-8" src="{{ asset('js/crm/report/jsapi_compiled_fw_module.js') }}"> </script>
    <script type="text/javascript" charset="UTF-8" src="{{ asset('js/crm/report/jsapi_compiled_corechart_module.js') }}"></script>

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
    <script type="text/javascript" src="{{ asset('js/crm/report/jsapi') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/report/index.js') }}"></script>
@endsection