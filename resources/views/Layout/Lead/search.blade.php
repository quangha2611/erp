@extends('Layout.master')

@section('title','ERP-Check thông tin')

@section('css')
	<link rel="stylesheet" href="{{ asset('asset/css/lead/style.css') }}" type="text/css">
@endsection

@section('content-page')
    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/crm/lead/index">Danh sách thông tin</a></li>
            <li class="active">Check thông tin</li>
        </ul>
        <div class="filterContainer">
            <form method="GET" name="crmAccount" class="form-inline" role="form" id="crmAccount">
                <div class="form-group"><input type="text" name="content" maxlength="200"
                        placeholder="Thông tin khách hàng" id="content" class="form-control"
                        value="hungnv5"></div>
                <div class="form-group"><input type="text" name="serviceName" maxlength="255"
                        placeholder="Tên gian hàng" id="serviceName" class="form-control" value="">
                </div>
                <div class="form-group"><input name="submit" type="submit" id="btnFilterCrmContact"
                        class="form-control btn btn-primary" value="Lọc"></div>
            </form>
        </div>
        <div class="container">
            <ul class="media-list" id="dgCustomer">
                <li class="">
                    <div>
                        <h4 class="media-heading pull-left row">
                            <a class="customerName customer_58832"
                                href="https://erp.nhanh.vn/crm/account/view?id=19754">Công Ty TNHH
                                Thương Mại Dịch Vụ Minh Uy</a>
                        </h4>
                        <div class="col-md-2 pull-right">
                            <div class="dropdown">
                                <a class="dropdown-toggle btn btn-pure btn-sm" type="button"
                                    data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="true">
                                    Thao tác <span class="fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a class="pickup" data-namerefer="customer_144111"
                                            data-leadid="144111" data-accountid="19754"><i
                                                class="fa fa-heart"></i> Nhận chăm sóc</a></li>
                                    <li><a class="assign" data-namerefer="customer_144111"
                                            data-leadid="144111" data-accountid="19754"><i
                                                class="fa fa-hand-o-right"></i> Bàn giao</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div>
                        <i class="fa fa-envelope"></i> vppminhuyd@gmail.com | thietbim5s@gmail.com
                    </div>
                    <div>
                        <i class="fa fa-phone-square"></i><a
                            href="https://erp.nhanh.vn/crm/account/view?id=19754"> 0838559814 |
                            0838559814</a>
                    </div>
                    <div>
                        <i class="fa fa-map-marker"></i> 5 </div>
                    <div class="collapse in" id="">
                        <div class="col-md-6 row">
                            <div>
                                <h4 style="font-size: 16px;"><i class="fa fa-users"></i> Nhân viên
                                    đang chăm sóc : </h4>
                            </div>
                            <div>
                                <p><i class="fa fa-plus"></i> 6448 - Hồ Phạm Ngọc Tiên .(<span
                                        data-toggle="tooltip" ,=""
                                        data-title="Ngày bắt đầu chăm sóc" class="text-info"><i
                                            class="fa fa-clock-o"></i> 10/12/2016
                                        23:03:57</span>)<span
                                        style="font-size:10px;display: block;font-style: italic;margin-left: 12px;">(Sàn
                                        Vật Giá HCM)</span> </p>
                                <p><i class="fa fa-plus"></i> 9047 - Đỗ Thị Ngọc Hân .(<span
                                        data-toggle="tooltip" ,=""
                                        data-title="Ngày bắt đầu chăm sóc" class="text-info"><i
                                            class="fa fa-clock-o"></i> 06/09/2019
                                        17:00:27</span>)<span
                                        style="font-size:10px;display: block;font-style: italic;margin-left: 12px;">(Nhanh
                                        HCM - Phòng KD1_NgânHTM)</span> </p>
                                <p><i class="fa fa-plus"></i> 3963 - Phạm Phương Thanh .(<span
                                        data-toggle="tooltip" ,=""
                                        data-title="Ngày bắt đầu chăm sóc" class="text-info"><i
                                            class="fa fa-clock-o"></i> 30/10/2019
                                        10:25:54</span>)<span
                                        style="font-size:10px;display: block;font-style: italic;margin-left: 12px;">(Vchat)</span>
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6 row">
                            <div>
                                <h4>Đang sử dụng sản phẩm</h4>
                            </div>
                            <div>
                                <p>Vchat gói Cơ bản <span data-toggle="tooltip"
                                        data-title="Ngày hết hạn"
                                        class="text-danger">(15/10/2020)</span></p>

                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
        <hr>
        <div class="page-description">
            <div class="col-md-1" style="text-align: center;">
                <i class="fa fa-lightbulb-o fontsize-150"></i>
            </div>
            <div class="col-md-11">
                <ul>
                    <li>Bạn có thể tìm kiếm theo số điện thoại, email, CMND hoặc mã số thuế.</li>
                    <li>Bạn cần nhận chăm sóc khách hàng để bắt đầu thao tác với khách hàng.</li>
                </ul>
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
                            id="ui-id-1" tabindex="0" style="display: none;"></ul>
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
    <script type="text/javascript" src="{{ asset('asset/js/lead/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/lead/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/lead/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/lead/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/lead/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/lead/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/lead/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/lead/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/lead/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/lead/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/lead/indexvg.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/lead/saved_resource(2)') }}"></script>
@endsection