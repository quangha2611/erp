@extends('Layout.master')

@section('title','ERP-Danh Sách Gian Hàng')

@section('css')
    <link rel="stylesheet" href="{{ asset('asset/css/service/style.css') }}" type="text/css">  
@endsection

@section('content-page')
    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/crm/service/index">Danh sách gian hàng</a></li>
        </ul>
        <div class="filterContainer">
            <form method="GET" name="crmServiceFilter" class="form-inline lolify" role="form"
                id="crmServiceFilter">
                <div class="col-md-10 lolify-default">

                    <div class="form-group">
                        <select name="companyId" id="companyId" class="form-control">
                            <option value="">- Công ty -</option>
                            <option value="2">Công ty cổ phần Vật Giá Việt Nam</option>
                            <option value="1">Nhanh.vn</option>
                        </select> </div>
                    <div class="form-group">
                        <input type="text" name="id" maxlength="10" placeholder="ID" id="id"
                            class="form-control" value=""> </div>
                    <div class="form-group">
                        <input type="text" name="leadName" maxlength="255"
                            placeholder="Tên khách hàng" id="leadName"
                            class="form-control ui-autocomplete-input" value="" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input type="text" name="privateName" maxlength="255"
                            placeholder="Tên Gian Hàng" id="privateName" class="form-control"
                            value=""> </div>
                    <input type="hidden" name="leadId" id="leadId" class="form-control" value="">
                    <input type="hidden" name="accountId" id="accountId" class="form-control"
                        value="">
                    <div class="form-group">
                        <input type="text" name="userName" maxlength="255"
                            placeholder="Nhân viên chăm sóc" id="userName"
                            class="form-control ui-autocomplete-input" value="" autocomplete="off">
                    </div>
                    <input type="hidden" name="userId" id="userId" class="form-control" value="">
                    <input type="hidden" name="notMeetMonth" id="notMeetMonth" class="form-control"
                        value=""> <input type="hidden" name="nextExpired" id="nextExpired"
                        class="form-control" value=""> <input type="hidden" name="notCareMonth"
                        id="notCareMonth" class="form-control" value="">
                    <div class="form-group">
                        <input type="text" name="fromDaterangepicker"
                            class="form-control date-range-picker" placeholder="Ngày bắt đầu"
                            id="fromDaterangepicker" value=""> </div>
                    <div class="form-group">
                        <input type="text" name="endDaterangepicker"
                            class="form-control date-range-picker" placeholder="Ngày hết hạn"
                            id="endDaterangepicker" value=""> </div>
                    <div class="form-group">
                        <input type="text" name="historyTimeDaterangepicker"
                            class="form-control date-range-picker" placeholder="Thời gian chăm sóc"
                            id="historyTimeDaterangepicker" value=""> </div>
                    <input type="hidden" name="createdById" id="createdById" class="form-control"
                        value="">
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
                            <li><a id="exportAll"><i class="fa fa-file-excel-o"></i> Xuất Toàn
                                    bộ</a></li>
                        </ul>
                    </div>

                    <div class="btn-group pull-right lolify-bookmark" data-toggle="tooltip"
                        data-placement="top" title="" data-original-title="Đường dẫn nhanh">
                        <button class="btn  dropdown-toggle" data-toggle="dropdown" type="button"
                            aria-haspopup="true" aria-expanded="true">
                            <span class="fa fa-bookmark"></span> <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a
                                    href="https://erp.nhanh.vn/crm/service/index?quickLinkIndex=0&amp;nextExpired=1"><i
                                        class="fa fa-list"></i> GH sắp hết hạn </a></li>
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
                        <input type="text" name="createdDaterangepicker"
                            class="form-control date-range-picker" placeholder="Thời gian Tạo"
                            id="createdDaterangepicker" value=""> </div>
                    <div class="form-group">
                        <input type="text" name="notCareDaterangepicker"
                            class="form-control date-range-picker"
                            placeholder="Thời gian không chăm sóc" id="notCareDaterangepicker"
                            value=""> </div>
                    <div class="form-group">
                        <input type="text" name="notMeetDaterangepicker"
                            class="form-control date-range-picker"
                            placeholder="Thời gian không đến gặp" id="notMeetDaterangepicker"
                            value=""> </div>
                    <div class="form-group">
                        <input type="text" name="beforeCreatedDate"
                            placeholder="Thời gian tạo trước ngày ..."
                            class="form-control datepicker" id="beforeCreatedDate" value=""> </div>
                    <div class="form-group">
                        <input type="text" name="beforeHandOverDate"
                            placeholder="Bàn giao trước ngày ..." class="form-control datepicker"
                            id="beforeHandOverDate" value=""> </div>
                    <div class="form-group">
                        <select name="expriedStatus" id="expriedStatus" class="form-control">
                            <option value="">- Hạn Gian hàng-</option>
                            <option value="1">GH còn hạn</option>
                            <option value="-1">Tất cả</option>
                        </select> </div>
                    <div class="form-group">
                        <input type="text" name="createdByName" maxlength="225"
                            placeholder="Người tạo" id="createdByName" class="form-control"
                            value=""> </div>

                </div>
            </form>
            <div class="clearfix"></div>
            <div class="lolify-left-menu" style="display: none;">
                <ul class="main-menu">
                    <li class=""><a class="js-sub-menu-toggle"> <i class="fa fa-bookmark"></i> <span
                                class="text">Đường dẫn nhanh</span>
                            <i class="toggle-icon fa fa-angle-right"></i>
                        </a>
                        <ul class="sub-menu ">
                            <li class=""><a
                                    href="https://erp.nhanh.vn/crm/service/index?quickLinkIndex=0&amp;nextExpired=1"
                                    class=""><i class="fa fa-list"></i> GH sắp hết hạn </a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
        <div class="dgContainer">
            <div style="display: none; width: 1569px;" class="stickyHeader">
                <table class="table table-bordered" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr class="even">
                            <th style="width: 122px;">STT</th>
                            <th style="width: 83px;">ID</th>
                            <th style="width: 244px;">Gian hàng</th>
                            <th style="width: 464px;">Người tạo | Phụ trách</th>
                            <th style="width: 167px;">Số HĐ</th>
                            <th style="width: 391px;">Lịch sử chăm sóc</th>
                            <th class="col-align-left" title="Thao tác" style="width: 98px;"><i
                                    class="fa fa-cogs icon"></i></th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 dgButtons"><a
                        href="https://erp.nhanh.vn/crm/service/index?expriedStatus=1"
                        class="btn btn-success">Chỉ hiển thị GH còn hạn</a></div>
                <div class="col-md-6 paginatorItem"></div>
                <div style="clear: both;"></div><br>
            </div>
            <table id="dgContract" class="table table-hover">
                <thead>
                    <tr class="even">
                        <th>STT</th>
                        <th>ID</th>
                        <th>Gian hàng</th>
                        <th>Người tạo | Phụ trách</th>
                        <th>Số HĐ</th>
                        <th>Lịch sử chăm sóc</th>
                        <th class="col-align-left" title="Thao tác"><i class="fa fa-cogs icon"></i>
                        </th>
                    </tr>
                </thead>
            </table>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div class="col-md-6 paginatorItem"></div>
            </div>
        </div>
        <div id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">×</button>
                        <h4 class="modal-title">Thông báo</h4>
                    </div>
                    <div class="modal-body"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary confirm">Xác nhận</button>
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="alertModal" class="modal fade">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">×</button>
                        <h4 class="modal-title">Thông báo</h4>
                    </div>
                    <div class="modal-body">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default reload"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
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
        <style>
            /* table tr td{
    text-align:center;
    } */

            .td-history {
                margin: 0;
                padding: 0;
                min-width: 570px;
            }

            .td-history li {
                margin: 5px;
                border-bottom: 1px dashed gray;
                padding: 0;
                list-style: none;
            }

            .td-history li.last {
                border-bottom: none;
            }

            .td-history .head-activity {
                font-size: 1.1em;
                font-weight: bold;
            }

            .td-history .infor-activity {
                padding-left: 20px;
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
    <script type="text/javascript" src="{{ asset('asset/js/service/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/service/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/service/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/service/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/service/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/service/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/service/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/service/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/service/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/customer/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/customer/saved_resource(2)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/customer/saved_resource(3)') }}"></script>
@endsection