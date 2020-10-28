@extends('crm::layouts.master1')

@section('css')
    <link href="{{ asset('css/crm/report/bootstrap-multiselect.css') }}" media="screen" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/crm/report/style.css') }}" type="text/css">
    <style>
        .cke {
            visibility: hidden;
        }
    </style>
    <script type="text/javascript" charset="UTF-8" src="{{ asset('js/crm/report/loader.js') }}"></script>
    <link id="load-css-0" rel="stylesheet" type="text/css" href="{{ asset('css/crm/report/tooltip.css') }}">
    <link id="load-css-1" rel="stylesheet" type="text/css" href="{{ asset('css/crm/report/util.css') }}">
    <script type="text/javascript" charset="UTF-8" src="{{ asset('js/crm/report/jsapi_compiled_default_module.js') }}"></script>
    <script type="text/javascript" charset="UTF-8" src="{{ asset('js/crm/report/jsapi_compiled_graphics_module.js') }}"></script>
    <script type="text/javascript" charset="UTF-8" src="{{ asset('js/crm/report/jsapi_compiled_ui_module.js') }}"></script>
    <script type="text/javascript" charset="UTF-8" src="{{ asset('js/crm/report/jsapi_compiled_corechart_module.js') }}"></script>
@endsection

@section('title','ERP-Báo cáo theo hợp đồng hết hạn')

@section('content-page')

    <div class="tab-content">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li class="active">Báo cáo hợp đồng hết hạn</li>
        </ul>
        <div class="filterContainer">
            <form method="GET" name="crmReportIndexFilter" class="form-inline" role="form"
                  id="crmReportIndexFilter">
                <div class="form-group"><input type="text" name="daterangepicker"
                                               class="form-control date-range-picker" id="daterangepicker"
                                               value="01/07/2020 - 31/07/2020"></div>
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
                <div class="form-group"><input type="text" name="accountName" maxlength="255"
                                               placeholder="Khách hàng" id="accountName"
                                               class="form-control ui-autocomplete-input" value="" autocomplete="off">
                </div> <input type="hidden" name="accountId" id="accountId" class="form-control"
                              value="">
                <div class="form-group"><input type="text" name="productName" maxlength="255"
                                               placeholder="Sản phẩm" id="productName"
                                               class="form-control ui-autocomplete-input" value="" autocomplete="off">
                </div> <input type="hidden" name="productId" id="productId" class="form-control"
                              value="">
                <div class="form-group"><input type="text" name="value"
                                               placeholder="Giá trị hợp đồng" id="value" class="form-control" value="">
                </div>
                <div class="form-group"><input name="submit" type="submit"
                                               id="btnFilterCrmContact" class="form-control btn btn-primary"
                                               value="Lọc"></div>
            </form>
        </div>
        <div class="dgContainer">
            <div style="display: none; width: 1874px;" class="stickyHeader">
                <table class="table table-bordered" cellspacing="0" cellpadding="0">
                    <thead>
                    <tr class="even">
                        <th rowspan="2" style="width: 43px;">STT</th>
                        <th style="min-width: 200px; width: 809px;" rowspan="2">Khách hàng
                        </th>
                        <th rowspan="2" style="width: 125px;">Trạng thái</th>
                        <th rowspan="2" style="width: 98px;">HĐ đã duyệt</th>
                        <th rowspan="2" style="width: 116px;">Tổng giá trị</th>
                        <th rowspan="2" style="width: 116px;">Tổng đã trả</th>
                        <th style="min-width: 150px; width: 249px;" rowspan="2">NV chăm sóc
                        </th>
                        <th style="min-width: 150px; width: 317px;" colspan="3">Hợp đồng hết
                            hạn</th>
                    </tr>
                    <tr>
                        <th style="width: 101px;">ID Hợp đồng</th>
                        <th style="width: 95px;">Đã trả</th>
                        <th style="min-width: 100px; width: 121px;">Ngày hết hạn</th>
                    </tr>
                    </thead>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 dgButtons">&nbsp;<a id="exportExcel"
                                                         href="https://erp.nhanh.vn/crm/report/expirationcontract#"
                                                         class="btn btn-primary btn-sm"><i class="fa fa-download "></i> Xuất
                        excel</a></div>
                <div style="clear: both;"></div><br>
            </div>
            <table id="dgCrmReportDepartment" class="table table-bordered">
                <thead>
                <tr class="even">
                    <th rowspan="2">STT</th>
                    <th style="min-width:200px;" rowspan="2">Khách hàng</th>
                    <th rowspan="2">Trạng thái</th>
                    <th rowspan="2">HĐ đã duyệt</th>
                    <th rowspan="2">Tổng giá trị</th>
                    <th rowspan="2">Tổng đã trả</th>
                    <th style="min-width:150px;" rowspan="2">NV chăm sóc</th>
                    <th style="min-width:150px;" colspan="3">Hợp đồng hết hạn</th>
                </tr>
                <tr>
                    <th>ID Hợp đồng</th>
                    <th>Đã trả</th>
                    <th style="min-width:100px;">Ngày hết hạn</th>
                </tr>
                </thead>
                <tbody>
                @foreach($reports as $report)
                    <tr>
                        <td rowspan="2">1</td>
                        <td rowspan="2">
                            <a href="" class="text-info">{{ $report->customer->name }}</a>
                        </td>
                        <td rowspan="2">{{ $report->customer->status->name }}</td>
                        <td rowspan="2">2</td>
                        <td rowspan="2">4.200.000</td>
                        <td rowspan="2">2.700.000</td>
                        <td rowspan="2">
                            @foreach ($report->customer->users as $user)
                                <a href="#" data-toggle="tooltip">
                                    {{ $user->name }}
                                </a>
                                <br>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="https://erp.nhanh.vn/crm/contract/detail?id=45114">{{ $report->id }}</a>
                        </td>
                        <td>{{ $report->is_checked == 1 ? number_format($report->total_value) : '' }}</td>
                        <td>
                            <i class="fa fa-minus-circle text-danger"></i>
                            {{ $report->expired_date }}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
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
    <script type="text/javascript" src="{{ asset('js/crm/report/bootstrap-multiselect.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/report/saved_resource(2)') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/report/expirationcontract.js') }}"></script>
@endsection