@extends('crm::layouts.master')

@section('title','ERP-Danh sách chung')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/crm/customer/style.css') }}" type="text/css">
@endsection

@section('content-page')
    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/crm/customer/mycustomer">Danh sách khách hàng đang thả nổi</a></li>
        </ul>
        <div class="advance-form-filter">
            <form method="GET" name="customerIndexFilter" id="customerIndexFilter">
                <div>
                    <div class="form-group collapse-toggle">
                        <a class="btn btn-default  btn-toggle-filter" data-toggle="collapse"
                            href="https://erp.nhanh.vn/crm/customer/indexvg#collapseFilter">
                            Bộ lọc nâng cao <i class="fa fa-angle-down"></i>
                        </a>
                    </div>
                    <div class="form-group pull-right">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i>
                            Tìm kiếm</button>
                    </div>
                    <div class="col-md-6 pull-right form-group"><input type="text" name="keyword"
                            placeholder="Thông tin khách hàng" id="keyword"
                            class="form-control form-control" value=""></div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-12 collapseFilter collapse in" id="collapseFilter" style="">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="form-group col-md-3"><input type="text" name="id"
                                    maxlength="15" placeholder="ID Thông tin" id="id"
                                    class="form-control form-control" value=""></div>
                            <div class="form-group col-md-3"><select name="contractStatus"
                                    id="contractStatus" class="form-control form-control">
                                    <option value="">- Trạng thái hợp đồng-</option>
                                    <option value="1">Có hợp đồng</option>
                                    <option value="2">Không có hợp đồng</option>
                                    <option value="3">tất cả</option>
                                </select></div>
                            <div class="form-group col-md-3"><input type="text" name="accountId"
                                    maxlength="15" placeholder="ID khách hàng" id="accountId"
                                    class="form-control form-control" value=""></div><input
                                type="hidden" name="userId" id="userId" value="">
                            <div class="form-group col-md-3"><input type="text" name="userIdSuggest"
                                    class="erp-form-userIdSuggest form-control form-control ui-autocomplete-input"
                                    data-lookup="userId" placeholder="Người phụ trách"
                                    id="userIdSuggest" value="" autocomplete="off"></div>
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
        <div class="container">
            <div class="row">
                <div class="col-md-6 dgButtons">
                </div>
                <div class="col-md-6 paginatorItem">
                    <div class="paginator"><span class="labelPages">1 - 5 / 5</span></div>
                </div>
                <div class="clearfix"></div>
                <br>
            </div>
            <ul class="media-list" id="dgCustomer">
                @foreach ($customers as $customer)
                    <li class="">
                        <div>
                            <h4 class="media-heading pull-left row">
                                <a href="{{ route('get.crm.customer.detail', ['id' => $customer->id]) }}"
                                    class="customerName customer_405449"><i class="fa fa-building"></i>
                                    {{ $customer->name }} <i class="fa fa-external-link"
                                        style="font-size: 12px;"></i></a>
                            </h4>
                            <div class="col-md-2 pull-right">
                                <div class="dropdown">
                                    <a class="dropdown-toggle btn btn-pure btn-sm" type="button"
                                        data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="true">
                                        Thao tác
                                        <span class="fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="https://erp.nhanh.vn/crm/account/edit2?id=21810"><i
                                                    class="fa fa-edit"></i> Sửa</a></li>
                                        <li><a
                                                href="https://erp.nhanh.vn/crm/activity/addphonecall?accountId=21810"><i
                                                    class="fa fa-phone"></i> Thêm cuộc gọi</a></li>
                                        <li><a
                                                href="https://erp.nhanh.vn/crm/activity/addmeeting?accountId=21810"><i
                                                    class="fa fa-map-marker"></i> Thêm cuộc gặp</a></li>
                                        <li><a
                                                href="https://erp.nhanh.vn/crm/activity/addcalendar?accountId=21810"><i
                                                    class="fa fa-calendar"></i> Thêm lịch hẹn</a></li>
                                        <li><a
                                                href="https://erp.nhanh.vn/crm/activity/addrequestphonecall?accountId=21810"><i
                                                    class="fa fa-phone-square"></i> Thêm yêu cầu gọi</a>
                                        </li>
                                        <li><a
                                                href="https://erp.nhanh.vn/crm/contract/add?accountId=21810"><i
                                                    class="fa fa-book"></i> Thêm hợp đồng</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a class="pickup" data-namerefer="customer_405449"
                                                data-leadid="405449" data-accountid="21810"><i
                                                    class="fa fa-heart"></i> Nhận chăm sóc</a></li>
                                        <li><a class="assign" data-namerefer="customer_405449"
                                                data-leadid="405449" data-accountid="21810"><i
                                                    class="fa fa-hand-o-right"></i> Bàn giao</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a
                                                href="https://erp.nhanh.vn/crm/activity/answersurvey?accountId=21810&amp;surveyId=1"><i
                                                    class="fa fa-question"></i> Khảo sát trước gặp</a>
                                        </li>
                                        <li><a
                                                href="https://erp.nhanh.vn/crm/activity/answersurvey?accountId=21810&amp;surveyId=2"><i
                                                    class="fa fa-question"></i> Khảo sát sau gặp</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div style="line-height: 25px;"><i class="fa fa-file-text"
                                data-original-title="Ngành hàng của khách" data-toggle="tooltip"
                                data-placement="top"></i> <span
                                class="label label-success industries-item">{{ $customer->major->name }}
                            </span></div>
                        <div style="line-height: 25px;"><i class="fa fa-phone-square"></i> {{ $customer->phone }}
                        </div>
                        <div style="line-height: 25px;"><i class="fa fa-map-marker"
                                style="padding: 0 2px;"></i> {{ $customer->address }}</div>
                        <div class="well margin-top-10 collapse" id="{{"customer_".$customer->id}}">
                            <div class="col-md-6 row">
                                <div>
                                    <h4>Đang được chăm sóc tại</h4>
                                </div>
                    
                                <div>
                                    <div>
                                        <p>123job.vn ({{ count($customer->users) }} người)</p>
                                        <div class="col-md-12">
                                            @foreach ($customer->users as $user)
                                                <p class="text-muted">
                                                    <span class="employeeName">{{ $user->id }} - {{ $user->name }}</span> 
                                                </p>
                                            @endforeach
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6 row">
                                <div>
                                    <h4>Đang sử dụng sản phẩm</h4>
                                </div>
                                <div>
                                    <p>123job - Gói mở hồ sơ ứng viên</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>

                            <!-- Lịch sử chắm sóc -->
                            <div class="col-md-12 row">
                                <h4>Lịch sử chăm sóc - 
                                    @php
                                        if ($customer->lastActivity != null) {
                                            $diff = abs(strtotime($customer->lastActivity->created_at) - strtotime(date("Y-m-d h:i:s")));
                                            $years = floor($diff / (365*60*60*24));
                                            $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
                                            $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
                                        }
                                    @endphp
                                    @if ($customer->lastActivity != null)
                                        @if ($years > 0 )
                                            <small class="text-muted">Lần chăm sóc gần nhất là {{ $years }} năm trước ({{$customer->lastActivity->created_at}})</small>
                                        @endif

                                        @if ($years == 0 && $months > 0)
                                            <small class="text-muted">Lần chăm sóc gần nhất là {{ $months }} tháng trước ({{$customer->lastActivity->created_at}})</small>
                                        @endif 
                                        
                                        @if ($years == 0 && $months == 0 &&  $days > 0)
                                            <small class="text-muted">Lần chăm sóc gần nhất là {{ $days }} ngày trước ({{$customer->lastActivity->created_at}})</small>
                                        @endif

                                        @if ($years == 0 && $months == 0 &&  $days == 0)
                                            <small class="text-muted">Lần chăm sóc gần nhất là hôm nay ({{$customer->lastActivity->created_at}})</small>
                                        @endif
                                    @else
                                        <small class="text-muted">Chưa có hành động nào</small>
                                    @endif
                                </h4>

                                <ul class="media-list">

                                    <li class="media">
                                        <a href="https://erp.nhanh.vn/crm/lead/view?id=405449&amp;tab=activities"
                                            class="center-block text-muted">Xem tổng cộng {{ $customer->countActivity }} hành
                                            động.</a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>

                            </div>
                            <!-- Kết thúc lịch sử -->

                            <div class="clearfix"></div>
                            <br>
                        </div>
                        <div class="col-md-12 row">
                            <a class="text-danger" data-toggle="collapse"
                            href="#" onclick="event.preventDefault(); customerId = 'customer_{{ $customer->id }}'; document.getElementById(customerId).classList.toggle('in');">Xem
                                tóm tắt <i class="fa  fa-angle-down"></i></a>&nbsp;&nbsp;&nbsp;<a
                                class="text-muted"
                                href="https://erp.nhanh.vn/crm/account/view?id=21810">Xem chi tiết <i
                                    class="fa fa-external-link"></i></a>
                        </div>
                        <div class="clearfix"></div>
                        <hr>
                    </li>
                @endforeach
                
            </ul>
        </div>

        <div class="modal fade" tabindex="-1" role="dialog" id="confirmPickupModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Nhận chăm sóc</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-info">
                            <p>Bạn muốn nhận chăm sóc khách hàng <i class="customerName"></i> ?</p>
                        </div>
                        <input type="hidden" class="referId" value="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-save">Có</button>
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Không</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" tabindex="-1" role="dialog" id="errorModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Lỗi</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger">

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" tabindex="-1" role="dialog" id="successModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="alert alert-success">

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" tabindex="-1" role="dialog" id="confirmAssignModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Nhận chăm sóc</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-info">
                            <div class="form-group">Khách hàng <i class="customerName"></i></div>
                            <div class="form-group">
                                <label class="form-label pull-left">Bàn giao cho: </label>
                                <div class="col-md-8">
                                    <input type="text"
                                        class="form-control userName ui-autocomplete-input"
                                        placeholder="Nhân viên" autocomplete="off">
                                    <div class="user-area">

                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">

                            </div>
                        </div>
                        <input type="hidden" class="referId" value="">
                        <ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content"
                            id="ui-id-2" tabindex="0" style="display: none;"></ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-save">Có</button>
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Không</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" tabindex="-1" role="dialog" id="confirmDiscardModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Gỡ chăm sóc</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-info">
                            <p>Bạn muốn hủy quyền chăm sóc khách hàng <b class="customerName"></b>
                                của nhân viên <b class="employeeName"></b></p>
                        </div>
                        <input type="hidden" class="userId" value="">
                        <input type="hidden" class="leadId" value="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-save">Có</button>
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Không</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            var pageVariable = {
                'messages': {
                    'SERVER_ERROR': 'Có lỗi trong quá trình thực hiện',
                    'PICKUP_SUCCESS': 'Bạn đã nhận chăm sóc khách hàng thành công.',
                    'ASSIGN_SUCCESS': 'Bạn đã bàn giao khách hàng thành công.',
                    'DISCARD_SUCCESS': 'Bạn đã bỏ chắm sóc thành công.',
                    'NO_USER_SELECT': 'Bạn chưa chọn người bàn giao',
                    'PAGE_DENIED': 'Bạn không có quyền thực hiện tác vụ này',

                }
            };
        </script>
        <style>
            .margin-top-10 {
                margin-top: 10px;
            }

            .industries-item {
                background: #296eaa !important;
                padding: 3px;
                margin-right: 2px;
            }

            .in {
                max-height: 1000px !important;
            }
        </style>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        var usrCnf = {
            language: 'vi'
        };

        var customer = '';
 
        var deletedId = 0;
    </script>
    <script type="text/javascript" src="{{ asset('js/crm/customer/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/customer/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/customer/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/customer/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/customer/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/customer/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/customer/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/customer/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/customer/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('js/crm/customer/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/customer/saved_resource(2)') }}"></script>
@endsection