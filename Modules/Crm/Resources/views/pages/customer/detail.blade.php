@extends('crm::layouts.master')

@section('title','ERP-Chi tiết khách hàng')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/crm/customer/style.css') }}" type="text/css">
@endsection

@section('content-page')
<div class="col-md-10 content-wrapper">
    <ul class="breadcrumb">
        <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
        <li><a href="https://erp.nhanh.vn/crm/account/index">Danh sách khách hàng</a></li>
        <li class="active">Chi tiết khách hàng</li>
    </ul>
    <div class="main-header">
        <h2>Chi tiết khách hàng</h2>
        <em>Các trường có dấu * là bắt buộc phải nhập</em>
    </div>
    <div>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a
                    href="https://erp.nhanh.vn/crm/account/view?id=21810#profile"
                    aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-user"></i>
                    Thông tin chung</a></li>
            <li role="presentation" class=""><a
                    href="https://erp.nhanh.vn/crm/account/view?id=21810#activities"
                    aria-controls="profile" role="tab" data-toggle="tab"><i
                        class="fa fa-rss"></i> Lịch sử chăm sóc</a></li>
            <li role="presentation" class=""><a
                    href="https://erp.nhanh.vn/crm/account/view?id=21810#activityPhonecalls"
                    aria-controls="profile" role="tab" data-toggle="tab"><i
                        class="fa fa-calendar"></i> 3 hành động gần nhất</a></li>
            <li role="presentation" class=""><a
                    href="https://erp.nhanh.vn/crm/account/view?id=21810#contract"
                    aria-controls="messages" role="tab" data-toggle="tab"><i class="fa fa-book">
                    </i> Hợp đồng</a></li>
            <li role="presentation" class="dropdown">
                <a id="dLabel">
                    <i class="fa fa-edit"></i>
                    Cập nhật trạng thái <span class="caret"></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel">
                    <li class="update" value="1">Chưa sử dụng</li>
                    <li class="update" value="2">Đang triển khai</li>
                    <li class="update" value="3">Cần hỗ trợ, tư vấn</li>
                    <li class="update" value="4">Đang sử dụng</li>
                    <li class="update" value="5">Ngừng sử dụng</li>
                    <li class="update" value="6">Dùng thử</li>
                </ul>

            </li>

            <li role="presentation" class="dropdown">
                <a id="dLabel">
                    <i class="fa fa-cog"></i>
                    <span class="caret"></span>
                </a>

                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel">
                    <li>
                        <a href="https://erp.nhanh.vn/crm/account/edit2?id=21810">
                            <i class="fa fa-edit"></i> Sửa khách hàng
                        </a>
                    </li>
                    <li>
                        <a href="https://erp.nhanh.vn/crm/activity/addmeeting?accountId=21810">
                            <i class="fa fa-users"></i> Thêm cuộc gặp
                        </a>
                    </li>
                    <li>
                        <a
                            href="https://erp.nhanh.vn/crm/activity/addphonecall?accountId=21810">
                            <i class="fa fa-phone"></i> Thêm cuộc gọi
                        </a>
                    </li>
                    <li>
                        <a
                            href="https://erp.nhanh.vn/crm/activity/addrequestphonecall?accountId=21810">
                            <i class="fa fa-phone-square"></i> Yêu cầu gọi
                        </a>
                    </li>
                    <li>
                        <a href="https://erp.nhanh.vn/crm/contract/add?accountId=21810">
                            <i class="fa fa-book"></i> Thêm hợp đồng
                        </a>
                    </li>
                    <li>
                        <a href="https://erp.nhanh.vn/crm/account/view?id=21810#"
                            data-id="405449" class="updateOpportunityStatus">
                            <i class="fa fa-refresh"></i> Cập nhật Level KH
                        </a>
                    </li>
                    <li>
                        <a href="https://erp.nhanh.vn/crm/account/view?id=21810#"
                            data-id="405449" class="updateSource">
                            <i class="fa fa-refresh"></i> Cập nhật nguồn KH
                        </a>
                    </li>
                    <li>
                        <a href="https://erp.nhanh.vn/crm/account/view?id=21810#"
                            data-account="21810" data-lead="405449" id="updateNhanhStore">
                            <i class="fa fa-edit"></i> Cập nhật DN Nhanh.vn
                        </a>
                    </li>
                    <li>
                        <a href="https://erp.nhanh.vn/crm/account/view?id=21810#"
                            data-leadid="405449" data-description="" class="editDescription">
                            <i class="fa fa-edit"></i> Cập nhật ghi chú KH
                        </a>
                    </li>
                </ul>
            </li>

        </ul>

        <!-- Tab panes -->
        <div class="tab-content col-md-12">
            <div role="tabpanel" class="tab-pane active" id="profile">
                <div class="dl-horizontal">
                    <div class="col-md-9" id="infor">
                        <div id="basic-infor">
                            <div class="title col-md-12"><a>Thông tin cơ bản ({{ $customer->level->name }})</a> </div>
                            <dl class="data-row col-md-12">
                                <dt>Trạng thái DN:</dt>
                                <dd>
                                    <b> {{ $customer->status->name }}</b> <br>
                                    <span>Cập nhật cuối: <i>{{ $customer->updated_at }}</i> </span>
                                </dd>
                            </dl>
                            <dl class="data-row col-md-6">
                                <dt>ID:</dt>
                                <dd>{{ $customer->id}} </dd>
                            </dl>
                            <dl class="data-row col-md-6">
                                <dt>Tên:</dt>
                                <dd>{{ $customer->name}} </dd>
                            </dl>
                            <dl class="data-row col-md-6">
                                <dt>Loại khách:</dt>
                                <dd>{{ $customer->type->name}}</dd>
                            </dl>
                            <dl class="data-row col-md-6">
                                <dt>Người đại diện:</dt>
                                <dd></dd>
                            </dl>


                            <dl class="data-row col-md-6">
                                <dt>Mã số thuế:</dt>
                                <dd>{{ $customer->taxcode}}</dd>
                            </dl>
                            <dl class="data-row col-md-6">
                                <dt>Nguồn thông tin:</dt>
                                <dd>{{ $customer->source->name}}</dd>
                            </dl>
                            <dl class="data-row col-md-6">
                                <dt>NhanhStore:</dt>
                                <dd>
                                </dd>
                            </dl>
                            <dl class="data-row col-md-6">
                                <dt>NhanhStoreId:</dt>
                                <dd>
                                </dd>
                            </dl>
                            <div class="clearfix"></div>

                            <div class="clearfix"></div>
                            <dl class="data-row col-md-12">
                                <dt>Ngành hàng:</dt>
                                <dd>
                                    <span data-id="28"
                                        class="label label-default industry-item">{{ $customer->major->name}}</span> </dd>
                            </dl>
                            <div class="clearfix"></div>
                            <dl class="data-row col-md-12">
                                <dt>Trạng thái:</dt>
                                <dd>
                                    <b class="text-danger salesStageName">
                                    </b>
                                </dd>
                            </dl>
                            <dl class="data-row col-md-12">
                                <dt>Sản phẩm đã sử dụng:</dt>
                                <dd>
                                    <p>123job - Gói mở hồ sơ ứng viên<span class="text-success"
                                            data-toggle="tooltip" data-title="Ngày ký"> ( <i
                                                class="fa fa-calendar"></i> 08/07/2020)</span>
                                    </p>
                                </dd>
                            </dl>

                        </div>
                        <div id="contact-infor">
                            <div class="title col-md-12"><a>Thông tin liên hệ</a>

                            </div>
                            <dl class="data-row col-md-12">
                                <dt>Số điện thoại:</dt>
                                <dd>
                                    <div>{{ $customer->phone}}</div>
                                </dd>
                            </dl>
                            <dl class="data-row col-md-12">
                                <dt>Email:</dt>
                                <dd>
                                    <div>{{ $customer->email}}</div>
                                </dd>
                            </dl>
                            <dl class="data-row col-md-12">
                                <dt>Website:</dt>
                                <dd>
                                    {{ $customer->website}}
                                </dd>
                            </dl>
                            <dl class="data-row col-md-12">
                                <dt>Địa chỉ:</dt>
                                <dd>
                                    <div>{{ $customer->address }}</div>
                                </dd>
                            </dl>
                            <dl class="data-row col-md-12">
                                <dt>Ghi chú:</dt>
                                <dd>
                                </dd>
                            </dl>
                            <div class="title col-md-12"><a>Thông tin người liên hệ</a>
                            </div>
                        </div>

                        <div id="serviceArea">
                            <div class="title col-md-12"><a>Gian hàng</a></div>
                            <div class="col-md-12">
                                <div class="alert alert-warning">Khách hàng chưa có gian hàng
                                    nào</div>
                            </div>
                        </div>

                        <div>
                            <div class="title col-md-12"><a>Công ty đang chăm sóc</a></div>
                            <div class="col-md-12">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-users"></i> Nhân viên đang phụ trách
                            </div>
                            <div class="panel-body">
                                <div style="float: right;"> <i data-toggle="tooltip"
                                        data-leadid="405449" data-title="Bàn giao"
                                        style="padding: 5px 15px;cursor:pointer;color:red;"
                                        class="fa fa-plus assignLead"></i></div>

                                <table class="table">
                                    <tbody>
                                        @foreach ($customer->users as $user)
                                            <tr>
                                                <td>
                                                    <b>Kinh doanh</b> <br>
                                                    <span class=""><i class="fa fa-user"></i> {{ $user->id . '-' . $user->name }}</span><br> </td>
                                            </tr>
                                        @endforeach

                                        <tr>
                                            <td><b>Người tạo</b> <br>{{ $customer->user->name}}</td>
                                        </tr>
                                        <tr>

                                            <td><b>Thời gian tạo</b> <br>{{ $customer->created_at}}</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-lightbulb-o"></i> Tips
                            </div>
                            <div class="panel-body">
                                <p>
                                    Thông tin được coi là khách hàng khi họ có ít nhất 1 hợp
                                    đồng đã được thanh toán.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div role="tabpanel" class="tab-pane " id="activities">
                <div class="activity-section" id="activity-section">
                    <ul class="list-unstyled activity-list">
                        @foreach ($customer->activities as $activity)
                            <li data-id="3061766" class="activity-list-item">
                                <i class="fa fa-hand-o-right activity-icon pull-left"></i>
                                <p><span class="text-primary" data-toggle="tooltip"
                                    data-title="hungnv5">{{ $activity->user->name }}</span> <b>{{ $activity->title }}</b>
                                    <br>
                                    <span class="fontsize-85 text-muted">{{ $activity->created_at }}</span>
                                </p>

                                <p class="">Ngày thực hiện: <span>{{ $activity->created_at }}</span></p>
                                <p class="uiActivityAction">
                                    <a class="addComment text-primary"> Nhận xét</a>
                                </p>

                            </li>
                        @endforeach
                    </ul>
                </div>
                <style>
                    ul.activity-list>li {
                        padding-left: 40px;
                    }

                    ul.activity-list>li .activity-icon,
                    ul.activity-list>li img.avatar {
                        margin-left: -40px;
                    }

                    ul.activity-list li p {
                        padding-left: 0;
                    }

                    ul.activity-list .well>div {
                        padding-left: 40px;
                    }

                    ul.activity-list .activity-sub-list {
                        padding: 5px 0 0 40px;
                    }

                    .uiActivityAction {
                        margin-top: 5px;
                    }

                    .uiActivityAction a {
                        cursor: pointer;
                    }

                    .activity-list .save-comment {
                        cursor: pointer;
                        border: 1px solid #ccc;
                    }

                    ul.activity-list li .activity-icon.activity-icon-o {
                        background: none;
                    }
                </style>

            </div>
            <div role="tabpanel" class="tab-pane " id="activityPhonecalls">
                <div class="activity-section" id="activity-section">
                    <ul class="list-unstyled activity-list">
                        @for ($i = 0; $i < 3; $i++)
                            @if(isset($customer->activities->toArray()[$i]))
                                <li data-id="3061766" class="activity-list-item">
                                    <i class="fa fa-hand-o-right activity-icon pull-left"></i>
                                    <p><span class="text-primary">{{ $customer->activities->toArray()[$i]['user']['name'] }}</span> 
                                        <b> {{$customer->activities->toArray()[$i]['title'] }}</b><span class="text-warning"></span>
                                        <br>
                                        <span class="fontsize-85 text-muted">{{ date("d-m-Y", strtotime($customer->activities->toArray()[$i]['created_at'])) }}</span>
                                    </p>

                                    <p class="">Ngày thực hiện: <span>{{ date("d-m-Y", strtotime($customer->activities->toArray()[$i]['created_at'])) }}</span></p>
                                    <p class="uiActivityAction">
                                        <a class="addComment text-primary"> Nhận xét</a>
                                    </p>

                                </li>
                            @endif
                        @endfor
                    </ul>
                </div>
                <style>
                    ul.activity-list>li {
                        padding-left: 40px;
                    }

                    ul.activity-list>li .activity-icon,
                    ul.activity-list>li img.avatar {
                        margin-left: -40px;
                    }

                    ul.activity-list li p {
                        padding-left: 0;
                    }

                    ul.activity-list .well>div {
                        padding-left: 40px;
                    }

                    ul.activity-list .activity-sub-list {
                        padding: 5px 0 0 40px;
                    }

                    .uiActivityAction {
                        margin-top: 5px;
                    }

                    .uiActivityAction a {
                        cursor: pointer;
                    }

                    .activity-list .save-comment {
                        cursor: pointer;
                        border: 1px solid #ccc;
                    }

                    ul.activity-list li .activity-icon.activity-icon-o {
                        background: none;
                    }
                </style>

            </div>
            <div role="tabpanel" class="tab-pane " id="contract">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="col-align-left">STT</th>
                            <th class="col-align-left">ID</th>
                            <th>Trạng thái</th>
                            <th>Hình thức ký</th>
                            <th class="col-align-left">Sản phẩm</th>
                            <th>Ngày bắt đầu</th>
                            <th>Ngày hết hạn</th>
                            <th>Ngày tạo</th>
                            <th>Ngày duyệt</th>
                            <th class="col-align-right">Giá trị</th>
                            <th class="col-align-right">Đã thanh toán</th>
                            <th class="col-align-right">Còn lại</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <a
                                    href="https://erp.nhanh.vn/crm/contract/detail?id=62733">62733</a>
                            </td>
                            <td class="col-align-center">
                                <i class="text-success icon fa fa-check" data-toggle="tooltip"
                                    title="Đã duyệt"></i> </td>
                            <td>Kí mới</td>
                            <td>
                                <div>
                                    123job - Gói mở hồ sơ ứng viên </div>
                            </td>
                            <td class="col-align-center">
                                08/07/2020 </td>
                            <td class="col-align-center">
                                08/08/2020 </td>
                            <td class="col-align-center">
                                10/07/2020 </td>
                            <td class="col-align-center">
                                15/07/2020 </td>
                            <td class="col-align-right">
                                1.595.000 </td>
                            <td class="col-align-right">
                                1.595.000 </td>
                            <td class="col-align-right">
                            </td>
                        </tr>


                        <tr>
                            <td colspan="9"><b>Tổng</b></td>
                            <td class="col-align-right"><b>1.595.000</b></td>
                            <td class="col-align-right"><b>1.595.000</b></td>
                            <td class="col-align-right"><b></b></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <input type="hidden" id="accountId" value="21810">
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
                    <button type="button" class="btn btn-primary saveStatus">Xác nhận</button>
                    <button type="button" class="btn btn-default"
                        data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>

    <div id="closeModel" class="modal fade">
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

    <!-- Modal -->
    <div class="modal fade" id="assignModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">×</span><span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Danh sách bàn giao</h4>
                </div>
                <div class="modal-body" data-backdrop="false">
                    <div class="loading fa fa-repeat fa-spin"></div>
                    <div class="formAssignt">
                        <div class="col-md-4">
                            <fieldset>
                                <legend>Kinh doanh</legend>
                                <div class="bootstrap-tagsinput" id="saleAssign">
                                    <input size="1" type="text"
                                        class="userAssignSuggest ui-autocomplete-input"
                                        placeholder="" autocomplete="off">

                                </div>
                            </fieldset>
                        </div>
                        <div class="col-md-4">
                            <fieldset>
                                <legend>Telesale</legend>
                                <div class="bootstrap-tagsinput" id="telesaleAssign">
                                    <input size="1" type="text"
                                        class="userAssignSuggest ui-autocomplete-input"
                                        placeholder="" autocomplete="off">
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-md-4">
                            <fieldset>
                                <legend>Support</legend>
                                <div class="bootstrap-tagsinput" id="supportAssign">
                                    <input size="1" type="text"
                                        class="userAssignSuggest ui-autocomplete-input"
                                        placeholder="" autocomplete="off">

                                </div>

                            </fieldset>
                        </div>
                        <div style="clear: both;"></div>
                    </div>

                    <ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content"
                        id="ui-id-1" tabindex="0" style="display: none;"></ul>
                    <ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content"
                        id="ui-id-2" tabindex="0" style="display: none;"></ul>
                    <ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content"
                        id="ui-id-3" tabindex="0" style="display: none;"></ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary saveMultiple"
                        style="display:none;" data-loading-text="loading...">Lưu</button>
                    <button type="button" class="btn btn-primary save"
                        data-loading-text="loading...">Lưu</button>
                    <button type="button" class="btn btn-default"
                        data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="alertModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Thông báo!</h4>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-default reload"
                        data-dismiss="modal">Đóng</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <div class="modal fade" id="errorModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Lỗi</h4>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger alert-dismissable">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default"
                        data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="updateContactModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Cập nhật thông tin người liên hệ</h4>
                </div>
                <div class="modal-body">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label class="form-label col-md-3">Tên người liên hệ:<span
                                    style="color:red;" class="required">*</span></label>
                            <div class="col-md-8">
                                <input type="text" id="name-contact-txt" class="form-control ">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label col-md-3">Giới tính:<span
                                    style="color:red;" class="required">*</span></label>
                            <div class="col-md-8">
                                <select id="genderContact" class="form-control">
                                    <option value="1">Nam</option>
                                    <option value="2">Nữ</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label col-md-3">Số điện thoai:<span
                                    style="color:red;" class="required">*</span></label>
                            <div class="col-md-8">
                                <input type="text" id="mobile-contact-txt" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label col-md-3">Phòng ban:</label>
                            <div class="col-md-8">
                                <input type="text" id="department-contact-txt"
                                    class="form-control ">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label col-md-3">Email:</label>
                            <div class="col-md-8">
                                <input type="text" id="email-contact-txt" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label col-md-3">Địa chỉ:</label>
                            <div class="col-md-8">
                                <input type="text" id="address-contact-txt"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label col-md-3">Ghi chú:</label>
                            <div class="col-md-8">
                                <textarea style="min-height: 120px;"
                                    id="description-contact-txt"
                                    class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success save-contact">Lưu</button>
                    <button type="button" class="btn btn-default"
                        data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="updateOpportunityModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Cập nhật Level khách hàng</h4>
                </div>
                <div class="modal-body">
                    <div class="form-horizontal">
                        <div class="col-md-12">
                            <div class="levelCustomerArea">
                                <div class="clearfix"></div>
                                <div class="col-md-2"><b>LEVEL 0</b></div>
                                <div class="col-md-5">
                                    <label><input type="radio" name="levelSaleStage"
                                            class="levelSaleStageRadio" style="margin:0px 5px;"
                                            value="20">L0 - Cần xử lý</label>
                                </div>

                                <div class="clearfix"></div>
                                <hr>
                                <div class="col-md-2"><b>LEVEL 1</b></div>
                                <div class="col-md-5"></div>
                                <div class="col-md-5">
                                    <label class="text-danger"><input type="radio"
                                            name="levelSaleStage" class="levelSaleStageRadio"
                                            style="margin:0px 5px;" value="22">L1B - Thông tin
                                        sai</label>
                                </div>
                                <div class="clearfix"></div>
                                <hr>
                                <div class="col-md-2"><b>LEVEL 2</b></div>
                                <div class="col-md-5">
                                    <label><input type="radio" name="levelSaleStage"
                                            class="levelSaleStageRadio" style="margin:0px 5px;"
                                            value="23">L2A - Có nhu cầu</label>
                                </div>
                                <div class="col-md-5">
                                    <label class="text-danger"><input type="radio"
                                            name="levelSaleStage" class="levelSaleStageRadio"
                                            style="margin:0px 5px;" value="24">L2B1 - Không có
                                        nhu cầu</label>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-5"></div>
                                <div class="col-md-5">
                                    <label class="text-danger"><input type="radio"
                                            name="levelSaleStage" class="levelSaleStageRadio"
                                            style="margin:0px 5px;" value="34">L2B2 - Đã dùng PM
                                        khác</label>
                                </div>
                                <div class="clearfix"></div>
                                <hr>
                                <div class="col-md-2"><b>LEVEL 3</b></div>
                                <div class="col-md-5">
                                    <label><input type="radio" name="levelSaleStage"
                                            class="levelSaleStageRadio" style="margin:0px 5px;"
                                            value="25">L3A - Đã hẹn</label>
                                </div>
                                <div class="clearfix"></div>
                                <hr>
                                <div class="col-md-2"><b>LEVEL 4</b></div>
                                <div class="col-md-5">
                                    <label><input type="radio" name="levelSaleStage"
                                            class="levelSaleStageRadio" style="margin:0px 5px;"
                                            value="26">L4A - Đã gặp</label>
                                </div>
                                <div class="clearfix"></div>
                                <hr>
                                <div class="col-md-2"><b>LEVEL 5</b></div>
                                <div class="col-md-5">
                                    <label><input type="radio" name="levelSaleStage"
                                            class="levelSaleStageRadio" style="margin:0px 5px;"
                                            value="27">L5A1 - Dùng thử</label>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-2"></div>
                                <div class="col-md-5">
                                    <label><input type="radio" name="levelSaleStage"
                                            class="levelSaleStageRadio" style="margin:0px 5px;"
                                            value="28">L5A2 - Có yêu cầu</label>
                                </div>
                                <div class="clearfix"></div>
                                <hr>
                                <div class="col-md-2"><b>LEVEL 6</b></div>
                                <div class="col-md-5">
                                    <label><input type="radio" name="levelSaleStage"
                                            class="levelSaleStageRadio" style="margin:0px 5px;"
                                            value="29">L6A - Đã ký HĐ</label>
                                </div>
                                <div class="col-md-5">
                                    <label class="text-danger"><input type="radio"
                                            name="levelSaleStage" class="levelSaleStageRadio"
                                            style="margin:0px 5px;" value="30">L6B1 - Từ chối,
                                        giá đắt</label>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-5"></div>
                                <div class="col-md-5">
                                    <label class="text-danger"><input type="radio"
                                            name="levelSaleStage" class="levelSaleStageRadio"
                                            style="margin:0px 5px;" value="35">L6B2 - PM không
                                        phù hợp</label>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-5"></div>
                                <div class="col-md-5">
                                    <label class="text-danger"><input type="radio"
                                            name="levelSaleStage" class="levelSaleStageRadio"
                                            style="margin:0px 5px;" value="36">L6B3 - Không phản
                                        hồi</label>
                                </div>
                                <div class="clearfix"></div>
                                <hr>
                                <div class="col-md-2"><b>LEVEL 7</b></div>
                                <div class="col-md-5">
                                    <label><input type="radio" name="levelSaleStage"
                                            class="levelSaleStageRadio" style="margin:0px 5px;"
                                            value="31">L7A - Đã triển khai</label>
                                </div>
                                <div class="clearfix"></div>
                                <hr>
                                <div class="col-md-2"><b>LEVEL 8</b></div>
                                <div class="col-md-5">
                                    <label><input type="radio" name="levelSaleStage"
                                            class="levelSaleStageRadio" style="margin:0px 5px;"
                                            value="32">L8A - Đã bán chéo</label>
                                </div>
                                <div class="clearfix"></div>
                                <hr>
                                <div class="col-md-2"><b>LEVEL 9</b></div>
                                <div class="col-md-5">
                                    <label><input type="radio" name="levelSaleStage"
                                            class="levelSaleStageRadio" style="margin:0px 5px;"
                                            value="33">L9A - Đã tái ký</label>
                                </div>
                                <div class="col-md-5">
                                    <label class="text-danger"><input type="radio"
                                            name="levelSaleStage" class="levelSaleStageRadio"
                                            style="margin:0px 5px;" value="37">L9B1 - Ngừng kinh
                                        doanh</label>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-5"></div>
                                <div class="col-md-5">
                                    <label class="text-danger"><input type="radio"
                                            name="levelSaleStage" class="levelSaleStageRadio"
                                            style="margin:0px 5px;" value="38">L9B2 - Dùng PM
                                        khác</label>
                                </div>
                                <div class="clearfix"></div>
                                <hr>
                            </div>
                        </div>

                    </div>
                </div>
                <div style="border: none;" class="modal-footer">
                    <button type="button" class="btn btn-info save-update-opportunity"
                        data-saving-text="saving...">Cập nhật</button>
                    <button type="button" class="btn btn-default"
                        data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="updateSourceModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Cập nhật Nguồn khách hàng</h4>
                </div>
                <div class="modal-body">
                    <div class="form-horizontal">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nguồn khách hàng</label>
                                <select id="leadSource" class="form-control">
                                    <option value="">-Nguồn-</option>
                                    <option value="1">Data bàn giao - FB ADS</option>
                                    <option value="26">Data bàn giao - Fanpage</option>
                                    <option value="25">Data bàn giao - Google Ads</option>
                                    <option value="22">Data bàn giao - SEO</option>
                                    <option value="19">Data bàn giao- Hotline</option>
                                    <option value="8">Data bàn giao - Không có mã</option>
                                    <option value="11">Data bàn giao - Email marketing</option>
                                    <option value="21">Data bàn giao - SĐT quét từ QC</option>
                                    <option value="3">Data bàn giao - Được giới thiệu</option>
                                    <option value="12">Hội thảo, sự kiện, đi thị trường</option>
                                    <option value="13">Khách tự liên hệ kinh doanh</option>
                                    <option value="15">Kinh doanh được giới thiệu</option>
                                    <option value="17">TeleSale</option>
                                    <option value="24">Seeding/ Inbox/ Spam</option>
                                    <option value="100">Khác</option>
                                </select>
                            </div>
                        </div>

                    </div>
                </div>
                <div style="border: none;" class="modal-footer">
                    <button type="button" class="btn btn-info confirmUpdateSource"
                        data-saving-text="saving...">Cập nhật</button>
                    <button type="button" class="btn btn-default"
                        data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="updateNhanhStoreIdModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Update doanh nghiệp trên nhanh</h4>
                </div>
                <div class="modal-body">
                    <div class="form-horizontal inputArea">
                        <div class="form-group">
                            <label class="col-md-4 control-label required">NhanhStoreId</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control nhanhStoreId" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label
                                class="col-md-4 control-label required">NhanhStoreName</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control nhanhStoreName" value="">
                            </div>
                        </div>
                    </div>
                    <div class="form-horizontal loadingArea"
                        style="text-align: center; font-size: 3em; display: none;">
                        <i class="fa fa-refresh"></i>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning save"
                        data-saving-text="Saving...">Lưu</button>
                    <button type="button" class="btn btn-default"
                        data-dismiss="modal">Hủy</button>
                </div>
            </div>
        </div>
    </div>
    <div id="updateDescription" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"
                        aria-hidden="true">×</button>
                    <h4 class="modal-title">Cập nhật thông tin ghi chú</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 form-horizontal">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <textarea placeholder="Ghi chú" class="form-control"
                                        style="min-height: 90px;"
                                        id="description-txt"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <input type="hidden" id="leadIdDescription">
                    <button type="button"
                        class="btn btn-success editDescriptionBtn">Lưu</button>
                    <button type="button" class="btn btn-default"
                        data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>
    <style>
        #updateOpportunityModal hr {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        #assignModal .bootstrap-tagsinput {
            width: 100%;
        }

        #assignModal .modal-dialog {
            width: 900px;
        }

        .bootstrap-tagsinput .label {
            display: inline-block;
        }

        .update {
            padding-left: 9px;
            font-size: 14px;
            font-weight: normal;
            color: #555;
            line-height: 28px;
            cursor: pointer;
        }

        .data-row {
            margin-bottom: 10px;
        }

        #infor .data-row {
            border-bottom: 1px solid #eee;
        }

        #basic-infor .data-row:last-child {
            border-bottom: 0px;
        }

        #contact-infor .data-row:last-child {
            border-bottom: 0px;
        }

        .data-row .data-value {
            min-height: 2em;
        }

        .data-row .data-value {
            padding: 0px !important;
        }

        #infor {
            padding-left: 0px;
        }

        #infor .nav>li>a {
            background-color: #eee;
        }

        .title {
            background-color: #eee;
            padding: 8px 15px;
            margin-bottom: 15px;
        }

        .title a {
            text-decoration: none;
            font-weight: bold;
            color: rgb(171, 28, 30);
            font-size: 1.18em;
        }

        #profile .panel-heading {
            background-color: #296EAA;
            color: white;
        }

        #activities thead tr {
            border: 0px;
            height: 37px !important;
            color: rgb(171, 28, 30);
            font-size: 1.12em;
        }

        .table-account {
            width: 100%;
            margin-bottom: 20px;
        }

        .table-account thead {
            background-color: #eee;
        }

        .table-account tr {
            height: 70px;
            border-bottom: 1px solid #eee;
        }

        .table-account tr td div {
            margin-left: 7px;
        }

        .table-account th,
        .table-account td {
            text-align: left;
            min-width: 175px;
        }

        .table-account th div {
            padding-left: 7px;
        }

        .table-account tr:hover {
            background-color: #eee;
        }

        .dl-horizontal dl {
            margin-bottom: 10px;
        }

        .dl-horizontal dt {
            width: 120px;
        }

        .dl-horizontal dd {
            margin-left: 140px;
            ;
        }

        .industry-item {
            float: left;
            margin-right: 3px;
            margin-bottom: 3px;
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
	<script type="text/javascript" src="{{ asset('js/crm/customer/view.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/customer/saved_resource(2)') }}"></script>
@endsection