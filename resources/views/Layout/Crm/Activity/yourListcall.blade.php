@extends('Layout.master')

@section('title','ERP-Danh sách cần gọi')

@section('css')
	<link rel="stylesheet" href="{{ asset('asset/css/crm/activity/style.css') }}" type="text/css">
@endsection

@section('content-page')
    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/crm/activity/index">Lịch sử chăm sóc</a></li>
            <li class="active">Danh sách cần gọi</li>
        </ul>
        <div class="filterContainer">
            <form method="GET" name="crmActivityListcall" class="form-inline" role="form"
                id="crmActivityListcall">
                <div class="form-group"><select name="companyId" id="companyId"
                        class="form-control">
                        <option value="391" selected="selected">123job.vn</option>
                    </select></div>
                <div class="form-group"><select name="loadType" id="loadType" class="form-control">
                        <option value="">- Loại yêu cầu -</option>
                        <option value="request">Yêu cầu gọi</option>
                        <option value="calendar">Lịch gọi</option>
                    </select></div>
                <div class="form-group"><input type="text" name="accountInfor"
                        placeholder="Thông tin khách hàng"
                        title="Nhập vào tên, email, sdt hoặc website của khách hàng" maxlength="255"
                        id="accountInfor" class="form-control" value=""></div> <input type="hidden"
                    name="assignToId" id="assignToId" class="form-control" value="">
                <div class="form-group"><input type="text" name="assignToName"
                        placeholder="Người được giao việc" maxlength="225" id="assignToName"
                        class="form-control ui-autocomplete-input" value="" autocomplete="off">
                </div> <input type="hidden" name="createdById" id="createdById" class="form-control"
                    value="5374">
                <div class="form-group"><input type="text" name="createdByName"
                        placeholder="Người tạo" maxlength="225" id="createdByName"
                        class="form-control ui-autocomplete-input" value="" autocomplete="off">
                </div>
                <div class="form-group"><input type="text" name="daterangepicker"
                        class="form-control date-range-picker" placeholder="Thời gian"
                        id="daterangepicker" value=""></div>
                <div class="form-group"><select name="crm_type" id="crm_type" class="form-control">
                        <option value="">- Loại khách hàng -</option>
                        <option value="lead">Thông tin</option>
                        <option value="account">Khách hàng</option>
                        <option value="contact">Liên hệ</option>
                    </select></div> <input type="hidden" name="pageType" id="pageType"
                    class="form-control" value="">
                <div class="form-group"><input name="submit" type="submit" id="btnFilterCrmContact"
                        class="form-control btn btn-primary" value="Lọc"></div>
            </form>
        </div>
        <div class="page-overview">
            <div style="margin-bottom: 20px;" class="btn-group btn-group-justified">
                <a href="{{ route('activityListcall') }}" class="btn
    taskStt8			  col-sm-6">Danh sách cần gọi</a>

                <a href="{{ route('activityYourListcall') }}" class="btn 
    btn-success			 col-sm-6">Danh sách bạn tạo</a>
                <a href="{{ route('activityAllListcall') }}" class="btn 
    taskStt8			 col-sm-6">Tất cả</a>
            </div>
        </div>
        <!-- <div class="page-overview">
    <div style="margin-bottom: 20px;" class="btn-group btn-group-justified">
    <a href="/crm/activity/listcall?crm_type=lead" class="btn btn-default col-sm-6">Thông tin</a>
    <a href="/crm/activity/listcall?crm_type=account" class="btn btn-info col-sm-6">Khách hàng</a>
    </div>
    </div> -->
        <div class="dgContainer">
            <div style="display: none; width: 1556px;" class="stickyHeader">
                <table class="table table-bordered" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr class="even">
                            <th style="width: 68px;">Gọi</th>
                            <th style="width: 477px;">Lịch gọi</th>
                            <th style="width: 475px;">Khách hàng</th>
                            <th style="width: 297px;">Người yêu cầu</th>
                            <th style="width: 119px;">Ghi chú</th>
                            <th class="col-align-left" title="Tìm cuộc gọi" style="width: 52px;"><i
                                    class="fa fa-history"></i></th>
                            <th class="col-align-left" title="Thao tác" style="width: 67px;"><i
                                    class="fa fa-cogs icon"></i></th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div class="col-md-6 paginatorItem">
                    <div class="paginator"><span class="labelPages">1 - 4 / 4</span></div>
                </div>
                <div style="clear: both;"></div><br>
            </div>
            <table id="dgActivityListcall" class="table table-bordered">
                <thead>
                    <tr class="even">
                        <th>Gọi</th>
                        <th>Lịch gọi</th>
                        <th>Khách hàng</th>
                        <th>Người yêu cầu</th>
                        <th>Ghi chú</th>
                        <th class="col-align-left" title="Tìm cuộc gọi"><i
                                class="fa fa-history"></i></th>
                        <th class="col-align-left" title="Thao tác"><i class="fa fa-cogs icon"></i>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="colControls"><a class="fa fa-phone-square text-primary icon"
                                title="Thực hiện cuộc gọi"
                                href="https://erp.nhanh.vn/crm/activity/addphonecall?fromId=3047677"></a>
                        </td>
                        <td>10:10 AM - 14/07 <i class="fa fa-arrow-right"></i> 11:59 PM -
                            14/07<br>Yêu cầu gọi cho khách</td>
                        <td>
                            <div class="item-block"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?id=406317"
                                    class="label btn-default crm-type">Thông tin</a></div>
                            <div class="item-block">
                                <div class="item-icon"><i class="fa fa-user"></i></div>
                                <div class="item-infor"><a
                                        href="https://erp.nhanh.vn/crm/lead/view?id=406317">Ứng Đình
                                        Hướng</a></div>
                            </div>
                            <div class="item-block">
                                <div class="item-icon"><i class="fa fa-building-o"></i></div>
                                <div class="item-infor"><a
                                        href="https://erp.nhanh.vn/crm/lead/view?id=406317">Công ty
                                        cổ phần Vnp Group</a></div>
                            </div>
                            <div class="item-block">
                                <div class="item-icon"><i class="fa fa-globe"></i></div>
                                <div class="item-infor">123job.vn</div>
                            </div>
                            <div class="item-block">
                                <div class="item-icon"><i class="fa fa-phone"></i></div>
                                <div class="item-infor">0333383633</div>
                            </div>
                        </td>
                        <td>
                            <div title="14/07/2020 10:10:24">Nguyễn Văn Hưng</div> <i
                                class="fa  fa-hand-o-right"></i> Đỗ Thị Thanh Nhàn
                        </td>
                        <td>
                            <div class="col-description"></div>
                        </td>
                        <td><a class="fa fa-history checkrequestphonecall" data-title="tooltip"
                                data-id="3047677" data-userid="8627" title="Tìm cuộc gọi"></a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/activity/edit?id=3047677&amp;redirectUri=L2NybS9hY3Rpdml0eS9saXN0Y2FsbD9jcmVhdGVkQnlJZD01Mzc0">Sửa</a>
                                    </li>
                                    <li><a class="removeCalendar" data-id="88229"
                                            href="javascript:void(0))">Xóa khỏi danh sách</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colControls"><a class="fa fa-phone-square text-primary icon"
                                title="Thực hiện cuộc gọi"
                                href="https://erp.nhanh.vn/crm/activity/addphonecall?fromId=3047437"></a>
                        </td>
                        <td>10:32 PM - 13/07 <i class="fa fa-arrow-right"></i> 11:59 PM -
                            14/07<br>Yêu cầu gọi cho thông tin vừa nhập</td>
                        <td>
                            <div class="item-block"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?id=406317"
                                    class="label btn-default crm-type">Thông tin</a></div>
                            <div class="item-block">
                                <div class="item-icon"><i class="fa fa-user"></i></div>
                                <div class="item-infor"><a
                                        href="https://erp.nhanh.vn/crm/lead/view?id=406317">Ứng Đình
                                        Hướng</a></div>
                            </div>
                            <div class="item-block">
                                <div class="item-icon"><i class="fa fa-building-o"></i></div>
                                <div class="item-infor"><a
                                        href="https://erp.nhanh.vn/crm/lead/view?id=406317">Công ty
                                        cổ phần Vnp Group</a></div>
                            </div>
                            <div class="item-block">
                                <div class="item-icon"><i class="fa fa-globe"></i></div>
                                <div class="item-infor">123job.vn</div>
                            </div>
                            <div class="item-block">
                                <div class="item-icon"><i class="fa fa-phone"></i></div>
                                <div class="item-infor">0333383633</div>
                            </div>
                        </td>
                        <td>
                            <div title="13/07/2020 22:32:53">Nguyễn Văn Hưng</div> <i
                                class="fa  fa-hand-o-right"></i> Ứng Đình Hướng
                        </td>
                        <td>
                            <div class="col-description"></div>
                        </td>
                        <td><a class="fa fa-history checkrequestphonecall" data-title="tooltip"
                                data-id="3047437" data-userid="6792" title="Tìm cuộc gọi"></a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/activity/edit?id=3047437&amp;redirectUri=L2NybS9hY3Rpdml0eS9saXN0Y2FsbD9jcmVhdGVkQnlJZD01Mzc0">Sửa</a>
                                    </li>
                                    <li><a class="removeCalendar" data-id="88227"
                                            href="javascript:void(0))">Xóa khỏi danh sách</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colControls"><a class="fa fa-phone-square text-primary icon"
                                title="Thực hiện cuộc gọi"
                                href="https://erp.nhanh.vn/crm/activity/addphonecall?fromId=3046554"></a>
                        </td>
                        <td>02:16 PM - 13/07 <i class="fa fa-arrow-right"></i> 11:59 PM -
                            14/07<br>Yêu cầu gọi cho khách</td>
                        <td>
                            <div class="item-block"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?id=405964"
                                    class="label btn-default crm-type">Thông tin</a></div>
                            <div class="item-block">
                                <div class="item-icon"><i class="fa fa-user"></i></div>
                                <div class="item-infor"><a
                                        href="https://erp.nhanh.vn/crm/lead/view?id=405964">Nguyễn
                                        Văn Hưng</a></div>
                            </div>
                            <div class="item-block">
                                <div class="item-icon"><i class="fa fa-building-o"></i></div>
                                <div class="item-infor"><a
                                        href="https://erp.nhanh.vn/crm/lead/view?id=405964">Công ty
                                        cổ phần Vnp Group</a></div>
                            </div>
                            <div class="item-block">
                                <div class="item-icon"><i class="fa fa-globe"></i></div>
                                <div class="item-infor">123job.vn</div>
                            </div>
                            <div class="item-block">
                                <div class="item-icon"><i class="fa fa-phone"></i></div>
                                <div class="item-infor">0333383632</div>
                            </div>
                            <div class="item-block">
                                <div class="item-icon"><i class="fa fa-envelope-o"></i></div>
                                <div class="item-infor">hungnv@vatgia.com</div>
                            </div>
                        </td>
                        <td>
                            <div title="13/07/2020 14:16:09">Nguyễn Văn Hưng</div> <i
                                class="fa  fa-hand-o-right"></i> Đỗ Thị Thanh Nhàn
                        </td>
                        <td>
                            <div class="col-description"></div>
                        </td>
                        <td><a class="fa fa-history checkrequestphonecall" data-title="tooltip"
                                data-id="3046554" data-userid="8627" title="Tìm cuộc gọi"></a></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/activity/edit?id=3046554&amp;redirectUri=L2NybS9hY3Rpdml0eS9saXN0Y2FsbD9jcmVhdGVkQnlJZD01Mzc0">Sửa</a>
                                    </li>
                                    <li><a class="removeCalendar" data-id="88216"
                                            href="javascript:void(0))">Xóa khỏi danh sách</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colControls"><a class="fa fa-phone-square text-primary icon"
                                title="Thực hiện cuộc gọi"
                                href="https://erp.nhanh.vn/crm/activity/addphonecall?fromId=3044960"></a>
                        </td>
                        <td>09:32 PM - 10/07 <i class="fa fa-arrow-right"></i> 11:59 PM -
                            10/07<br>Yêu cầu gọi cho thông tin vừa nhập</td>
                        <td>
                            <div class="item-block"><a
                                    href="https://erp.nhanh.vn/crm/lead/desk?id=405964"
                                    class="label btn-default crm-type">Thông tin</a></div>
                            <div class="item-block">
                                <div class="item-icon"><i class="fa fa-user"></i></div>
                                <div class="item-infor"><a
                                        href="https://erp.nhanh.vn/crm/lead/view?id=405964">Nguyễn
                                        Văn Hưng</a></div>
                            </div>
                            <div class="item-block">
                                <div class="item-icon"><i class="fa fa-building-o"></i></div>
                                <div class="item-infor"><a
                                        href="https://erp.nhanh.vn/crm/lead/view?id=405964">Công ty
                                        cổ phần Vnp Group</a></div>
                            </div>
                            <div class="item-block">
                                <div class="item-icon"><i class="fa fa-globe"></i></div>
                                <div class="item-infor">123job.vn</div>
                            </div>
                            <div class="item-block">
                                <div class="item-icon"><i class="fa fa-phone"></i></div>
                                <div class="item-infor">0333383632</div>
                            </div>
                            <div class="item-block">
                                <div class="item-icon"><i class="fa fa-envelope-o"></i></div>
                                <div class="item-infor">hungnv@vatgia.com</div>
                            </div>
                        </td>
                        <td>
                            <div title="10/07/2020 21:32:31">Nguyễn Văn Hưng</div> <i
                                class="fa  fa-hand-o-right"></i>
                        </td>
                        <td>
                            <div class="col-description"></div>
                        </td>
                        <td></td>
                        <td>
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/crm/activity/edit?id=3044960&amp;redirectUri=L2NybS9hY3Rpdml0eS9saXN0Y2FsbD9jcmVhdGVkQnlJZD01Mzc0">Sửa</a>
                                    </li>
                                    <li><a class="removeCalendar" data-id="88193"
                                            href="javascript:void(0))">Xóa khỏi danh sách</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div class="col-md-6 paginatorItem">
                    <div class="paginator"><span class="labelPages">1 - 4 / 4</span></div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="checkRequestPhonecallModal" tabindex="-1" role="dialog"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Kiểm tra các cuộc gọi</h4>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary conectRequestPhonecall"
                            data-loading-text="loading...">Xác nhận</button>
                        <button type="button" class="btn btn-default close-modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="alertModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">×</button>
                        <h4 class="modal-title">Thông báo</h4>
                    </div>
                    <div class="modal-body"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default reload"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .page-overview .btn {
                border-right: 1px solid #888;
                font-family: "arial";
            }

            .page-overview .btn:last-child {
                border-right: none;
            }

            .taskStt8 {
                background: #eee;
            }

            i.description {
                font-size: 0.8em;
            }

            .dropdown-menu>li>a {
                text-align: left;
            }

            .item-block {
                padding: 0;
                border: none;
            }

            .item-icon {
                width: 16px;
                display: inline-block;
                vertical-align: top;
            }

            .item-infor {
                width: 200px;
                display: inline-block;
            }

            .line-break {
                width: 100%;
                border-bottom: 1px dashed gray;
                margin: auto;
                margin-top: 3px;
                margin-bottom: 3px;
            }

            .crm-type {
                width: 100%;
                display: block;
                margin-bottom: 5px;
                text-align: left;
                font-size: 0.9em;
                font-weight: bold;
            }

            .col-description {
                max-width: 120px;
            }

            .modal .loading {
                font-size: 2em;
                display: block;
                margin: auto;
                width: 30px;
                height: 30px;
                text-align: center;
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
    <script type="text/javascript" src="{{ asset('asset/js/crm/activity/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/activity/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/activity/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/activity/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/activity/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/activity/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/activity/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/activity/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/activity/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/activity/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/activity/indexvg.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/activity/saved_resource(2)') }}"></script>
@endsection