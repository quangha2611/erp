@extends('Layout.master')

@section('title','ERP-Quản lý sự kiện')

@section('css')
    <link rel="stylesheet" href="{{ asset('asset/css/calendar/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('asset/css/calendar/fullcalendar.css') }}" type="text/css">
@endsection

@section('content-page')
    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/crm/account/index">Lịch làm việc của nhân viên</a>
            </li>
        </ul>
        <div class="filterContainer">
            <form method="GET" name="crmCalendarFilter" class="form-inline" role="form"
                id="crmCalendarFilter">
                <div class="form-group"><select name="companyId" id="companyId"
                        class="form-control">
                        <option value="391" selected="selected">123job.vn</option>
                    </select></div>
                <div class="form-group"><input type="text" name="daterange" maxlength="11"
                        placeholder="Thời điểm bắt đầu" id="daterange" class="form-control"
                        value=""></div>
                <div class="form-group"><input type="text" name="userName" maxlength="255"
                        placeholder="Thành viên" id="userName"
                        class="form-control ui-autocomplete-input" value="" autocomplete="off">
                </div> <input type="hidden" name="userId" id="userId" class="form-control" value="">
                <div class="form-group"><select name="status" id="status" class="form-control">
                        <option value="">- Trạng thái -</option>
                        <option value="1" selected="selected">Mới</option>
                        <option value="2">Đang làm</option>
                        <option value="3">Đã xong</option>
                        <option value="4">Hủy</option>
                    </select></div>
                <div class="form-group"><input name="submit" type="submit" id="btnFilterCrmContact"
                        class="form-control btn btn-primary" value="Lọc"></div>
            </form>
        </div>
        <div class="btn-group btn-group-justified"><a
                href="https://erp.nhanh.vn/crm/calendar/index?status=1"
                class="btn calendarStt1 col-sm-6">Mới</a><a
                href="https://erp.nhanh.vn/crm/calendar/index?status=2"
                class="btn calendarStt2 col-sm-6">Đang làm</a><a
                href="https://erp.nhanh.vn/crm/calendar/index?status=3"
                class="btn calendarStt3 col-sm-6">Đã xong</a><a
                href="https://erp.nhanh.vn/crm/calendar/index?status=4"
                class="btn calendarStt4 col-sm-6">Hủy</a></div>
        <div class="widget widget-table">
            <div class="widget-header">
                <h3><i class="fa fa-table"></i> Danh sách thông tin</h3>
            </div>
            <div class="dgContainer widget-content table-responsive">
                <div style="display: none; width: 1534px;" class="stickyHeader">
                    <table class="table table-bordered" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr class="even">
                                <th style="width: 46px;"><i class="fa fa-plus-circle"></i></th>
                                <th style="width: 402px;">Thời gian &amp; địa điểm</th>
                                <th style="width: 398px;">Khách hàng</th>
                                <th style="width: 381px;">Sự kiện</th>
                                <th style="width: 227px;">Người được yêu cầu</th>
                                <th style="width: 79px;"><i class="fa fa-edit"></i></th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-6 dgButtons"><a class="btn btn-primary btn-sm"
                            href="https://erp.nhanh.vn/crm/calendar/add"><i class="fa fa-plus"></i>
                            Thêm sự kiện</a></div>
                    <div class="col-md-6 paginatorItem">
                        <div class="paginator"><span class="labelPages">1 - 4 / 4</span></div>
                    </div>
                    <div style="clear: both;"></div><br>
                </div>
                <table id="dgCalendar" class="table table-bordered">
                    <thead>
                        <tr class="even h">
                            <th><i class="fa fa-plus-circle"></i></th>
                            <th>Thời gian &amp; địa điểm</th>
                            <th>Khách hàng</th>
                            <th>Sự kiện</th>
                            <th>Người được yêu cầu</th>
                            <th><i class="fa fa-edit"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="calendarStt1">
                            <td class="colControls">
                                <div class="dropdown">
                                    <a data-toggle="dropdown"
                                        href="https://erp.nhanh.vn/crm/calendar/index?status=1#"
                                        class="fa fa-plus-circle icon"></a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addphonecall?fromId=3047677">
                                                <i class="fa fa-phone"></i> Thêm cuộc gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addmeeting?fromId=3047677">
                                                <i class="fa fa-users"></i> Thêm cuộc hẹn
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/adddeploy?fromId=3047677">
                                                <i class="fa fa-cogs"></i> Thêm triển khai
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </td>
                            <td>10:10 AM - 14/07 <i class="fa fa-arrow-right"></i> 11:59 PM - 14/07
                            </td>
                            <td>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor">Ứng Đình Hướng</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-building-o"></i></div>
                                    <div class="item-infor">Công ty cổ phần Vnp Group</div>
                                </div>
                                <div><i class="fa fa-file-text"
                                        data-original-title="Ngành hàng của khách"
                                        data-toggle="tooltip" data-placement="top"></i><span
                                        class="label label-success industries-item"
                                        style="margin-left:5px;margin-right:5pxcoler:#ccc">Điện tử,
                                        Điện máy</span></div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-globe"></i></div>
                                    <div class="item-infor">123job.vn</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-phone"></i></div>
                                    <div class="item-infor">0333383633</div>
                                </div>
                            </td>
                            <td title="88229">Yêu cầu gọi cho khách</td>
                            <td>Đỗ Thị Thanh Nhàn</td>
                            <td class="colControls"><a class="fa fa-edit icon"
                                    href="{{ route('calendarEdit') }}"></a>&nbsp;<a
                                    class="fa fa-trash deleteCalendar icon" idref="88229"></a></td>
                        </tr>
                        <tr class="calendarStt1 even">
                            <td class="colControls">
                                <div class="dropdown">
                                    <a data-toggle="dropdown"
                                        href="https://erp.nhanh.vn/crm/calendar/index?status=1#"
                                        class="fa fa-plus-circle icon"></a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addphonecall?fromId=3047437">
                                                <i class="fa fa-phone"></i> Thêm cuộc gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addmeeting?fromId=3047437">
                                                <i class="fa fa-users"></i> Thêm cuộc hẹn
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/adddeploy?fromId=3047437">
                                                <i class="fa fa-cogs"></i> Thêm triển khai
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </td>
                            <td>10:32 PM - 13/07 <i class="fa fa-arrow-right"></i> 11:59 PM - 14/07
                            </td>
                            <td>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor">Ứng Đình Hướng</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-building-o"></i></div>
                                    <div class="item-infor">Công ty cổ phần Vnp Group</div>
                                </div>
                                <div><i class="fa fa-file-text"
                                        data-original-title="Ngành hàng của khách"
                                        data-toggle="tooltip" data-placement="top"></i><span
                                        class="label label-success industries-item"
                                        style="margin-left:5px;margin-right:5pxcoler:#ccc">Điện tử,
                                        Điện máy</span></div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-globe"></i></div>
                                    <div class="item-infor">123job.vn</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-phone"></i></div>
                                    <div class="item-infor">0333383633</div>
                                </div>
                            </td>
                            <td title="88227">Yêu cầu gọi cho thông tin vừa nhập</td>
                            <td>Ứng Đình Hướng</td>
                            <td class="colControls"><a class="fa fa-edit icon"
                                    href="{{ route('calendarEdit') }}"></a>&nbsp;<a
                                    class="fa fa-trash deleteCalendar icon" idref="88227"></a></td>
                        </tr>
                        <tr class="calendarStt1">
                            <td class="colControls">
                                <div class="dropdown">
                                    <a data-toggle="dropdown"
                                        href="https://erp.nhanh.vn/crm/calendar/index?status=1#"
                                        class="fa fa-plus-circle icon"></a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addphonecall?fromId=3046554">
                                                <i class="fa fa-phone"></i> Thêm cuộc gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addmeeting?fromId=3046554">
                                                <i class="fa fa-users"></i> Thêm cuộc hẹn
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/adddeploy?fromId=3046554">
                                                <i class="fa fa-cogs"></i> Thêm triển khai
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </td>
                            <td>02:16 PM - 13/07 <i class="fa fa-arrow-right"></i> 11:59 PM - 14/07
                            </td>
                            <td>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor">Nguyễn Văn Hưng</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-building-o"></i></div>
                                    <div class="item-infor">Công ty cổ phần Vnp Group</div>
                                </div>
                                <div><i class="fa fa-file-text"
                                        data-original-title="Ngành hàng của khách"
                                        data-toggle="tooltip" data-placement="top"></i><span
                                        class="label label-success industries-item"
                                        style="margin-left:5px;margin-right:5pxcoler:#ccc">Thời
                                        trang, phụ kiện</span></div>
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
                            <td title="88216">Yêu cầu gọi cho khách</td>
                            <td>Đỗ Thị Thanh Nhàn</td>
                            <td class="colControls"><a class="fa fa-edit icon"
                                    href="{{ route('calendarEdit') }}"></a>&nbsp;<a
                                    class="fa fa-trash deleteCalendar icon" idref="88216"></a></td>
                        </tr>
                        <tr class="calendarStt1 even">
                            <td class="colControls">
                                <div class="dropdown">
                                    <a data-toggle="dropdown"
                                        href="https://erp.nhanh.vn/crm/calendar/index?status=1#"
                                        class="fa fa-plus-circle icon"></a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addphonecall?fromId=3046522">
                                                <i class="fa fa-phone"></i> Thêm cuộc gọi
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/addmeeting?fromId=3046522">
                                                <i class="fa fa-users"></i> Thêm cuộc hẹn
                                            </a>
                                        </li>
                                        <li>
                                            <a class=""
                                                href="https://erp.nhanh.vn/crm/activity/adddeploy?fromId=3046522">
                                                <i class="fa fa-cogs"></i> Thêm triển khai
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </td>
                            <td>04:00 PM - 07/07 <i class="fa fa-arrow-right"></i> 05:00 PM - 07/07
                            </td>
                            <td>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-user"></i></div>
                                    <div class="item-infor">Nguyễn Văn Hưng</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-building-o"></i></div>
                                    <div class="item-infor">Công ty cổ phần Vnp Group</div>
                                </div>
                                <div><i class="fa fa-file-text"
                                        data-original-title="Ngành hàng của khách"
                                        data-toggle="tooltip" data-placement="top"></i><span
                                        class="label label-success industries-item"
                                        style="margin-left:5px;margin-right:5pxcoler:#ccc">Dịch vụ,
                                        giải trí, du lịch</span></div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-globe"></i></div>
                                    <div class="item-infor">123job.vn</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-phone"></i></div>
                                    <div class="item-infor">0333383630</div>
                                </div>
                                <div class="item-block">
                                    <div class="item-icon"><i class="fa fa-envelope-o"></i></div>
                                    <div class="item-infor">hungitc.hubt@gmail.com</div>
                                </div>
                            </td>
                            <td title="88215">Tư vấn dịch vụ</td>
                            <td>Nguyễn Văn Hưng</td>
                            <td class="colControls"><a class="fa fa-edit icon"
                                    href="{{ route('calendarEdit') }}"></a>&nbsp;<a
                                    class="fa fa-trash deleteCalendar icon" idref="88215"></a></td>
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
        </div><!-- Modal -->
        <div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span><span class="sr-only">Close</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Xác nhận xóa sự kiện</h4>
                    </div>
                    <input type="hidden" class="idref" value="">
                    <div class="modal-body"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default confirm-yes"
                            data-dismiss="modal">Có</button>
                        <button type="button" class="btn btn-primary confirm-no">Không</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="errorModal" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span><span class="sr-only">Close</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Lỗi</h4>
                    </div>
                    <div class="modal-body"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default hide-modal"
                            data-dismiss="modal">Hủy</button>
                    </div>
                </div>
            </div>
        </div>
        <script>
            var confirmDeleteMsg = 'Bạn muốn xóa hết thành viên của sự kiện';
        </script>
        <style>
            i.description {
                font-size: 0.8em;
            }

            .dropdown-menu>li>a {
                text-align: left;
            }

            .item-block {
                width: 216px;
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

            .calendarStt1 {
                background: #c2dfff;
            }

            .calendarStt2 {
                background: #e3b7eb;
            }

            .calendarStt3 {
                background: #fff494;
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
    <script type="text/javascript" src="{{ asset('asset/js/calendar/saved_resource')}}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/calendar/firebase-app.js')}}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/calendar/firebase-messaging.js')}}">
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/calendar/firebase-firestore.js')}}">
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/calendar/firebase-auth.js')}}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/calendar/getfirebaseconfig')}}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/calendar/notification.js')}}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/calendar/notification.reducer.js')}}">
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/calendar/ckeditor.js')}}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/calendar/saved_resource(1)')}}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/calendar/fullcalendar.js')}}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/calendar/view.js')}}"></script>
@endsection