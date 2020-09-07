@extends('accounting::layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/accounting/report/style.css') }}" type="text/css">
@endsection

@section('title', 'ERP-Báo cáo theo khoản mục thu chi')

@section('content-page')

    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li class="active">Báo cáo theo khoản mục thu chi</li>
        </ul>
        <div class="filterContainer">
            <form method="GET" name="crmReportEmployeesFilter" class="form-inline lolify"
                role="form" id="crmReportEmployeesFilter" action="{{ route('get.accounting.report.filter.category') }}">
                <div class="col-md-10 lolify-default">

                    <div class="form-group">
                        <input type="number" name="monthFilter" placeholder="Tháng"
                            data-date-format="MM/YYYY" id="daterangepicker"
                            class="form-control hasDatepicker" value="{{ date('m',strtotime($currentDate)) }}" nim="1" max="12"> </div>
                    <div class="form-group">
                        <select name="companyId" id="companyId" class="form-control">
                            <option value="">- Công ty giao dịch -</option>
                            @include('accounting::pages.report.include._inc_recursiveInput',[
                                'data' => $companies,
                                'parentId' => null,
                                'note' => '--'
                            ])
                        </select> 
                    </div>
                    <div class="form-group">
                        <select name="accountId" style="min-width:250px" id="accountId"
                            class="form-control" tabindex="-1"
                            aria-hidden="true">
                            <option value="">- Quỹ -</option>
                            @foreach ($funds as $fund)
                                <option value="{{ $fund->id }}">{{ $fund->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input name="submit" type="submit" id="btnFilterCrmContact"
                            class="form-control btn btn-primary" value="Lọc"> </div>

                </div>
                <div class="col-md-2 lolify-control">
                    <div class="btn-group pull-right lolify-features" data-toggle="tooltip"
                        data-placement="top" title="" data-original-title="Chức năng, thao tác"
                        aria-describedby="tooltip198839">
                        <button class="btn dropdown-toggle" type="button" aria-haspopup="true"
                            aria-expanded="false" data-toggle="dropdown">
                            <span class="fa fa-cog"></span> <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a
                                    href="https://erp.nhanh.vn/accounting/report/expensecategory?daterangepicker=07%2F2020&amp;companyId=10&amp;accountId=880&amp;submit=L%E1%BB%8Dc&amp;format=excel"><i
                                        class="fa fa-download fa-lg"></i> Xuất excel</a></li>
                        </ul>
                    </div>


                    <button class="btn  pull-right lolify-showextend" type="button"
                        data-toggle="tooltip" data-placement="top" title=""
                        data-original-title="bộ lọc nâng cao">
                        <span class="fa fa-th"></span>
                    </button>
                </div>
                <div class="col-md-12 lolify-extend" style="">
                    <div class="form-group">
                        <select name="contractStatus" id="contractStatus" class="form-control">
                            <option value="">-- Loại phiếu --</option>
                            @foreach ($types as $type)
                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                        </select> </div>

                </div>
            </form>
            <div class="clearfix"></div>
            <div class="lolify-left-menu" style="display: none;">
            </div>
        </div>
        <div class="alert alert-info">Bạn đang xem thông tin quỹ 
            <b class="text-danger">
                {{ $funds[0]->name }}
            </b>
            <br> Tồn đầu kỳ: <b>{{ number_format($funds[0]->money) }}</b>
            <br> Tổng thu trong kỳ: <b>60,737,000</b>
            <br> Tổng chi trong kỳ: <b>90,960,480</b>
        </div>
        <div class="dgContainer">
            <div style="display: none; width: 1556px;" class="stickyHeader">
                <table class="table table-bordered" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr class="even">
                            <th rowspan="2" style="width: 438px;">Ngày</th>
                            <th rowspan="2" style="width: 277px;">Quỹ (trước giao dịch)</th>
                            <th rowspan="2" style="width: 252px;">Quỹ (sau giao dịch)</th>
                            <th colspan="3" style="width: 588px;">Chi tiết giao dịch</th>
                        </tr>
                        <tr>
                            <th style="width: 260px;">Khoản mục</th>
                            <th style="width: 164px;">Thu</th>
                            <th style="width: 164px;">Chi</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div style="clear: both;"></div><br>
            </div>
            <table id="dgCrmReportExpenseCategory" class="table table-bordered">
                <thead>
                    <tr class="even">
                        <th rowspan="2">Ngày</th>
                        <th rowspan="2">Quỹ (trước giao dịch)</th>
                        <th rowspan="2">Quỹ (sau giao dịch)</th>
                        <th colspan="3">Chi tiết giao dịch</th>
                    </tr>
                    <tr>
                        <th>Khoản mục</th>
                        <th>Thu</th>
                        <th>Chi</th>
                    </tr>
                </thead>
                <tbody>
                    @php $fund = $funds[0] @endphp
                    @for ($i = 1; $i <= $countDay; $i++)
                        <tr class="even">
                            <td rowspan="">{{ $i }}</td>
                            @php $check = 0 @endphp
                            @foreach ($transactions as $transaction)
                                @if(date('d', strtotime($transaction->applyDate)) ==  $i &&  date('m', strtotime($transaction->applyDate)) ==  date('m',strtotime($currentDate)))
                                    <td rowspan="">
                                        {{ number_format($fund->money) }}
                                    </td>
                                    <td rowspan="">
                                        @if($transaction->type == 'Phiếu thu')
                                            {{ number_format($fund->money+$transaction->amount) }}
                                        @else 
                                            {{ number_format($fund->money-$transaction->amount) }}
                                        @endif
                                    </td>
                                    <td rowspan="">
                                        {{ $transaction->expenseCategoryId}}
                                    </td>
                                    <td rowspan="">
                                        @if($transaction->type=='Phiếu thu')
                                            {{ number_format($transaction->amount) }}
                                            @php 
                                                $fund->money+=$transaction->amount
                                            @endphp
                                        @endif
                                    </td>
                                    <td rowspan="">
                                        @if($transaction->type=='Phiếu chi')
                                            {{ number_format($transaction->amount) }}
                                            @php 
                                                $fund->money-=$transaction->amount
                                            @endphp
                                        @endif
                                    </td>
                                    @php $check = 1 @endphp
                                @endif
                            @endforeach
                            @if ($check == 0)
                                <td rowspan=""></td>
                                <td rowspan=""></td>
                                <td rowspan=""></td>
                                <td rowspan=""></td>
                                <td rowspan=""></td>
                            @endif
                        </tr>
                    @endfor
                    <tr>
                        <td><b>Tổng Quỹ (Còn lại sau giảm trừ)</b></td>
                        <td colspan="5"><b>{{ number_format($fund->money) }}</b></td>
                    </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
            </div>
        </div>
        <style>
            .table .rowSat {
                background-color: #FAFAFA;
            }

            .table .rowSun {
                background-color: #F0F0F0;
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
    <script type="text/javascript" src="{{ asset('/js/accounting/report/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/accounting/report/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/accounting/report/app.js') }}"></script>
    <script>
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('/js/accounting/report/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/accounting/report/saved_resource(2)') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/accounting/report/saved_resource(3)') }}"></script>


@endsection
