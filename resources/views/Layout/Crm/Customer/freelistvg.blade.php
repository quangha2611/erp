@extends('Layout.master')

@section('title','ERP-Danh sách khách hàng thả nổi')

@section('css')
    <link rel="stylesheet" href="{{ asset('asset/css/crm/customer/style.css') }}" type="text/css">
@endsection

@section('content-page')
    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/crm/customer/mycustomer">Khách hàng đang thả nổi</a>
            </li>
        </ul>
        <div class="advance-form-filter">
            <form method="GET" name="customerIndexFilter" id="customerIndexFilter">
                <div>
                    <div class="form-group collapse-toggle">
                        <a class="btn btn-default  btn-toggle-filter collapsed"
                            data-toggle="collapse"
                            href="https://erp.nhanh.vn/crm/customer/freelistvg#collapseFilter">
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
                <div class="col-md-12 collapseFilter collapse" id="collapseFilter"
                    style="height: 0px;">
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
            <div class="alert alert-warning">
                Không tìm thấy kết quả nào.
            </div>
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
        </style>
    </div>
@endsection

@section('js')

    <script type="text/javascript">
        var usrCnf = {
            language: 'vi'
        };
    </script>
    <script type="text/javascript" src="{{ asset('/asset/js/crm/customer/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/crm/customer/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/crm/customer/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/crm/customer/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/crm/customer/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/crm/customer/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/crm/customer/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/crm/customer/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/crm/customer/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('/asset/js/crm/customer/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('/asset/js/crm/customer/saved_resource(2)') }}"></script>

@endsection