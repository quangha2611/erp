@extends('Layout.master')

@section('title','ERP-Danh hợp đồng hết hạn')

@section('css')
	<link rel="stylesheet" href="{{ asset('asset/css/contract/style.css') }}" type="text/css">
@endsection

@section('content-page')
    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/hrm/employee/index">Lịch hẹn thanh toán</a></li>
        </ul>
        <div class="advance-form-filter">
            <form method="GET" name="crmContractPaymentFilter" id="crmContractPaymentFilter">
                <div>
                    <div class="form-group collapse-toggle">
                        <a class="btn btn-default  btn-toggle-filter" data-toggle="collapse"
                            href="https://erp.nhanh.vn/crm/contract/scheduce?scheduceDateRange=15%2F07%2F2009+-+22%2F08%2F2020&amp;keyword=&amp;contractId=&amp;contractCompanyId=391&amp;userName=&amp;userId=#collapseFilter">
                            Bộ lọc nâng cao <i class="fa fa-angle-down"></i>
                        </a>
                    </div>
                    <div class="form-group pull-right">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i>
                            Tìm kiếm</button>
                    </div>
                    <div class="col-md-2 pull-right form-group"><input type="text"
                            name="scheduceDateRange" placeholder="Ngày hẹn" id="scheduceDateRange"
                            class="form-control form-control" value="15/07/2009 - 22/08/2020"></div>
                    <div class="col-md-6 pull-right form-group"><input type="text" name="keyword"
                            placeholder="Thông tin khách hàng" id="keyword"
                            class="form-control form-control" value=""></div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-12 collapseFilter collapse in" id="collapseFilter" style="">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="form-group col-md-3"><input type="text" name="contractId"
                                    maxlength="15" placeholder="ID hợp đồng" id="contractId"
                                    class="form-control form-control" value=""></div><input
                                type="hidden" name="contractCompanyId" id="contractCompanyId"
                                value="391">
                            <div class="form-group col-md-3"><input type="text" name="userName"
                                    placeholder="Nhân viên phụ trách" id="userName"
                                    class="form-control form-control ui-autocomplete-input" value=""
                                    autocomplete="off"></div><input type="hidden" name="userId"
                                id="userId" value="">
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-footer">
                            <div class="pull-right">
                                <button type="submit" class="btn btn-primary"><i
                                        class="fa fa-search"></i> Tìm kiếm</button>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                </div>
                <div class="clearfix"></div>
            </form>
        </div>
        <div class="dgContainer">
            <div style="display: none; width: 1556px;" class="stickyHeader">
                <table class="table table-bordered" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr class="even">
                            <th class="col-align-left" style="width: 74px;">ID</th>
                            <th class="col-align-left" style="width: 203px;">Ngày hẹn</th>
                            <th class="col-align-left" style="width: 84px;">TT</th>
                            <th class="col-align-left" style="width: 115px;">Loại</th>
                            <th class="col-align-left" style="width: 212px;">Hợp đồng</th>
                            <th class="col-align-left" style="width: 247px;">Khách hàng</th>
                            <th class="col-align-right" style="width: 159px;">Dự thu</th>
                            <th class="col-align-right" style="width: 198px;">Thực thu</th>
                            <th class="col-align-left" style="width: 176px;">Ghi chú</th>
                            <th class="colControls" style="width: 88px;"><i
                                    class="fa fa-cogs icon"></i></th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div class="col-md-6 paginatorItem"></div>
                <div style="clear: both;"></div><br>
            </div>
            <table id="dgScheduce" class="table table-hover">
                <thead>
                    <tr class="even">
                        <th class="col-align-left">ID</th>
                        <th class="col-align-left">Ngày hẹn</th>
                        <th class="col-align-left">TT</th>
                        <th class="col-align-left">Loại</th>
                        <th class="col-align-left">Hợp đồng</th>
                        <th class="col-align-left">Khách hàng</th>
                        <th class="col-align-right">Dự thu</th>
                        <th class="col-align-right">Thực thu</th>
                        <th class="col-align-left">Ghi chú</th>
                        <th class="colControls"><i class="fa fa-cogs icon"></i></th>
                    </tr>
                </thead>
            </table>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div class="col-md-6 paginatorItem"></div>
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
    <script type="text/javascript" src="{{ asset('asset/js/contract/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/contract/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/contract/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/contract/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/contract/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/contract/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/contract/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/contract/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/contract/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/contract/saved_resource(1)') }}"></script>
@endsection
    