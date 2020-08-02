@extends('Layout.master1')

@section('css')
    <link href="{{ asset('asset/css/crm/report/bootstrap-multiselect.css') }}" media="screen" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/css/crm/report/style.css') }}" type="text/css">
@endsection

@section('title','ERP-Báo cáo theo phòng ban')

@section('content-page')

    <div class="tab-content">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li class="active">Danh sách báo cáo yêu cầu task nhân viên</li>
        </ul>
        <div class="filterContainer">
            <form method="GET" name="ideaFilter" class="form-inline" role="form"
                id="ideaFilter">
                <div class="form-group"><input type="text" name="daterangepicker"
                        class="form-control date-range-picker" id="daterangepicker"
                        value="01/07/2020 - 31/07/2020"></div>
                <div class="form-group"><input name="submit" type="submit"
                        id="btnFilterCompanyContact" class="form-control btn btn-primary"
                        value="Lọc"></div>
            </form>
        </div>
        <div class="col-md-12">
            <div class="widget widget-table">
                <div class="widget-header">
                    <h3><i class="fa fa-table"></i> Nhân viên yêu cầu công việc</h3>
                    <div class="btn-group widget-header-toolbar">
                        <a class="btn-borderless btn-focus" title="Focus"
                            href="https://erp.nhanh.vn/crm/report/requirementemployee#"><i
                                class="fa fa-eye"></i></a>
                        <a class="btn-borderless btn-toggle-expand" title="Expand/Collapse"
                            href="https://erp.nhanh.vn/crm/report/requirementemployee#"><i
                                class="fa fa-chevron-up"></i></a>
                        <a class="btn-borderless btn-remove" title="Remove"
                            href="https://erp.nhanh.vn/crm/report/requirementemployee#"><i
                                class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="dgContainer widget-content table-responsive">
                    <div style="display: none; width: 1897px;" class="stickyHeader">
                        <table class="table table-bordered" cellspacing="0" cellpadding="0">
                            <thead>
                                <tr class="even">
                                    <th style="width: 167px;">Tên</th>
                                    <th style="width: 171px;">Mới</th>
                                    <th style="width: 309px;">Phản hồi</th>
                                    <th style="width: 378px;">Đã kiểm tra</th>
                                    <th style="width: 275px;">Đã chốt</th>
                                    <th style="width: 177px;">Hủy</th>
                                    <th style="width: 211px;">Đóng</th>
                                    <th style="width: 208px;">Tổng</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-6 dgButtons"></div>
                    </div>
                    <table cellspacing="0" cellpadding="0" class="table table-bordered">
                        <thead>
                            <tr class="even">
                                <th>Tên</th>
                                <th>Mới</th>
                                <th>Phản hồi</th>
                                <th>Đã kiểm tra</th>
                                <th>Đã chốt</th>
                                <th>Hủy</th>
                                <th>Đóng</th>
                                <th>Tổng</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <style>
            .col-md-12 {
                padding: 0 0 !important;
            }

            .table-bordered>thead>tr>th,
            .table-bordered>tbody>tr>th,
            .table-bordered>tfoot>tr>th,
            .table-bordered>thead>tr>td,
            .table-bordered>tbody>tr>td,
            .table-bordered>tfoot>tr>td {
                border: 1px solid #fff;
            }

            tr td a {
                color: black !important;
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
@endsection