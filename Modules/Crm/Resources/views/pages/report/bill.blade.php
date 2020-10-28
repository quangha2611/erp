@extends('crm::layouts.master1')

@section('css')
    <link href="{{ asset('css/crm/report/bootstrap-multiselect.css') }}" media="screen" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/crm/report/style.css') }}" type="text/css">
@endsection

@section('title','ERP-Báo cáo theo hợp đồng hết hạn')

@section('content-page')

    <div class="tab-content">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li class="active">Báo cáo quản lý xuất hóa đơn theo ngày tháng</li>
        </ul>
        <div class="filterContainer">
            <form method="GET" name="crmReportMettingVgFilter" class="form-inline lolify"
                  role="form" id="crmReportMettingVgFilter">
                <div class="col-md-10 lolify-default">

                    <div class="form-group">
                        <input type="text" name="daterangepicker"
                               class="form-control date-range-picker" id="daterangepicker"
                               value="01/07/2020 - 31/07/2020"> </div>
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
                        <input type="text" name="q" placeholder="Tên hoặc mã người xuất" id="q"
                               class="form-control" value=""> </div>
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
        </div><a style="float: right;" id="exportExcel"
                 href="{{ route('get.crm.report.bill.excel') }}"><button
                    class="btn btn-primary btn-sm "><i class="fa fa-download fa-lg"></i>Xuất
                excel</button></a>
        <div class="tab-content col-md-12">
            <div class="dgContainer">
                <div style="display: none; width: 1874px;" class="stickyHeader">
                    <table class="table table-bordered" cellspacing="0" cellpadding="0">
                        <thead>
                        <tr class="even">
                            <th rowspan="2" style="width: 325px;">Ngày xuất</th>
                            <th colspan="2" style="width: 712px;">Tổng số lượng hóa đơn</th>
                            <th colspan="2" style="width: 836px;">Tổng số Giá trị</th>
                        </tr>
                        <tr>
                            <th style="width: 283px;">Cá nhân</th>
                            <th style="width: 429px;">Doanh nghiệp</th>
                            <th style="width: 406px;">Cá nhân</th>
                            <th style="width: 430px;">Doanh nghiệp</th>
                        </tr>
                        </thead>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-6 dgButtons"></div>
                    <div style="clear: both;"></div><br>
                </div>
                <table id="dgCrmReportBill" class="table table-bordered">
                    <thead>
                    <tr class="even">
                        <th rowspan="2">Ngày xuất</th>
                        <th colspan="2">Tổng số lượng hóa đơn</th>
                        <th colspan="2">Tổng số Giá trị</th>
                    </tr>
                    <tr class="">
                        <th>Cá nhân</th>
                        <th>Doanh nghiệp</th>
                        <th>Cá nhân</th>
                        <th>Doanh nghiệp</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $totalAllValueContractPersonal   = 0;
                        $totalAllValueContractEnterprise = 0;
                        $totalPersonalContract           = 0;
                        $totalEnterpriseContract         = 0;
                    @endphp
                    @foreach ($reports as $key => $report)
                        @php
                            $totalPersonalContract            += $report['personal'];
                            $totalEnterpriseContract          += $report['enterprise'];
                            $totalAllValueContractPersonal    += $report['totalValueContractPersonal'];
                            $totalAllValueContractEnterprise  += $report['totalValueContractEnterprise'];
                        @endphp
                        <tr class="even">
                            <td class="colNumber" style="text-align: center"><b>{{ date_format(date_create($key), 'd/m/Y') }}</b></td>
                            <td class="colNumber" style="text-align: center">
                                {{ $report['personal'] != 0 ? $report['personal'] : '' }}
                            </td>
                            <td class="colNumber" style="text-align: center">
                                {{ $report['enterprise'] != 0 ? $report['enterprise'] : '' }}
                            </td>
                            <td class="colNumber" style="text-align: center">
                                {{ $report['totalValueContractPersonal'] != 0 ? number_format($report['totalValueContractPersonal']) : '' }}
                            </td>
                            <td class="colNumber" style="text-align: center">
                                {{ $report['totalValueContractEnterprise'] != 0 ? number_format($report['totalValueContractEnterprise']) : '' }}
                            </td>
                        </tr>
                    @endforeach
                    <tr class="rowSum">
                        <td><b>Tổng</b></td>
                        <td><b>{{ $totalPersonalContract }}</b></td>
                        <td><b>{{ $totalEnterpriseContract }}</b></td>
                        <td><b>{{ number_format($totalAllValueContractPersonal) }}</b></td>
                        <td><b>{{ number_format($totalAllValueContractEnterprise) }}</b></td>
                    </tr>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-md-6 dgButtons"></div>
                </div>
            </div>
        </div>

        <style>
            #exportExcel {
                color: #fff;
                background-color: #3276b1;
                border-color: #285e8e;
                text-decoration: none
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
    <script type="text/javascript" src="{{ asset('js/crm/report/saved_resource(2)') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/report/saved_resource(3)') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/report/saved_resource(4)') }}"></script>
@endsection