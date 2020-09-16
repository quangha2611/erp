@extends('crm::layouts.master')

@section('title','ERP-Quản trị hành động')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/crm/activity/style.css') }}" type="text/css">
@endsection

@section('content-page')
    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/crm/lead/index">Danh sách thông tin</a></li>
            <li class="active">Lịch sử chăm sóc</li>
        </ul>
        <div id="page-crm-contact">
            <div class="filterContainer">
                <form method="GET" name="crmContactFilter" class="form-inline" role="form"
                    id="crmContactFilter"><input type="hidden" name="companyId" id="companyId"
                        class="form-control" value="391">
                    <div class="form-group"><select name="departmentId" id="departmentId"
                            class="form-control">
                            <option value="">- Phòng ban -</option>
                            <option value="1437">123Job</option>
                            <option value="1475">Kinh doanh 123Job</option>
                        </select></div>
                    <div class="form-group"><input type="text" name="id" placeholder="ID"
                            maxlength="15" id="id" class="form-control" value=""></div>
                    <div class="form-group"><input type="text" name="leadId"
                            placeholder="ID thông tin" maxlength="15" id="leadId"
                            class="form-control" value=""></div>
                    <div class="form-group"><input type="text" name="accountId"
                            placeholder="ID khách hàng" maxlength="15" id="accountId"
                            class="form-control" value=""></div>
                    <div class="form-group"><input type="text" name="accountInfor"
                            placeholder="Thông tin khách hàng"
                            title="Nhập vào tên, email, sdt hoặc website của khách hàng"
                            maxlength="15" id="accountInfor" class="form-control" value=""></div>
                    <input type="hidden" name="createdById" id="createdById" class="form-control"
                        value="">
                    <div class="form-group"><input type="text" name="createdByName"
                            placeholder="Nhân viên" maxlength="225" id="createdByName"
                            class="form-control ui-autocomplete-input" value="" autocomplete="off">
                    </div>
                    <div class="form-group"><input type="text" name="daterangepicker"
                            class="form-control date-range-picker" placeholder="Thời gian"
                            id="daterangepicker" value=""></div>
                    <div class="form-group"><input type="text" name="content" placeholder="Ghi chú"
                            maxlength="15" id="content" class="form-control" value=""></div>
                    <div class="form-group"><select name="type" id="type" class="form-control">
                            <option value="">- Hành động -</option>
                            <option value="1">Gặp mặt</option>
                            <option value="2">Gọi điện</option>
                            <option value="3">Công việc</option>
                            <option value="4">Triển khai</option>
                            <option value="5">Đặt lịch</option>
                            <option value="6">Yêu cầu gọi điện</option>
                            <option value="7">Bàn giao</option>
                            <option value="8">Nhận chăm sóc</option>
                            <option value="9">Tạo hợp đồng</option>
                            <option value="10">Tạo thanh toán</option>
                            <option value="11">Giải phóng</option>
                            <option value="12">Bỏ quyền chăm sóc</option>
                            <option value="13">Hệ thống tự giải phóng</option>
                            <option value="14">Tạo thành khách hàng</option>
                            <option value="33">Gửi Email</option>
                            <option value="34">Gửi tin nhắn SMS</option>
                            <option value="31">Đến gặp</option>
                            <option value="32">Gọi điện</option>
                            <option value="35">Thu tiền</option>
                            <option value="36">Hoàn duyệt phiếu thu</option>
                            <option value="99">Thao tác Khác</option>
                            <option value="37">Sửa gian hàng </option>
                            <option value="15">Thêm hợp đồng</option>
                            <option value="16">Thêm phiếu thu</option>
                            <option value="17">Chuyển thành cơ hội</option>
                            <option value="19">Sửa thông tin</option>
                            <option value="20">Đăng kí dùng thử</option>
                            <option value="21">Khách hàng yêu cầu tính năng</option>
                            <option value="22">Sửa khách hàng</option>
                            <option value="23">Sửa hợp đồng</option>
                            <option value="24">Sửa thanh toán</option>
                            <option value="25">Duyệt hợp đồng</option>
                            <option value="26">Hủy hợp đồng</option>
                            <option value="30">Hoàn duyệt hợp đồng</option>
                            <option value="27">Duyệt phiếu thu</option>
                            <option value="28">Hủy phiếu thu</option>
                            <option value="29">Thêm yêu cầu thực hiện dịch vụ</option>
                            <option value="38">Thêm nhận xét</option>
                            <option value="39">Khảo sát trước gặp</option>
                            <option value="40">Khảo sát sau gặp</option>
                            <option value="41">Ý kiến khách hàng</option>
                            <option value="42">Khảo sát khách hàng</option>
                            <option value="43">Cập nhật Level khách hàng</option>
                        </select></div>
                    <div class="form-group"><select name="result" id="result" class="form-control">
                            <option value="">- Kết quả -</option>
                            <option value="1">Khách từ chối</option>
                            <option value="2">Khách suy nghĩ - hẹn gặp sau</option>
                            <option value="3">Khách suy nghĩ - hẹn gọi lại sau</option>
                            <option value="7">Khách có yêu cầu riêng cần trao đổi thêm</option>
                            <option value="6">Thành công - chốt hợp đồng</option>
                            <option value="200">Khác</option>
                        </select></div>
                    <div class="form-group"><select name="reasonId" id="reasonId"
                            class="form-control">
                            <option value="">- Lý do từ chối -</option>
                            <option value="12">Khách chưa có nhu cầu</option>
                            <option value="11">Gọi nhầm số</option>
                            <option value="10">Bị tác động sau khi quyết định - đắn đo về giá
                            </option>
                            <option value="9">Có IT khó chốt</option>
                            <option value="8">Kho giao diện xấu</option>
                            <option value="7">Cần module Kế toán</option>
                            <option value="6">Không hỗ trợ marketing, SEO - Nhân viên thiếu kiến
                                thức marketing</option>
                            <option value="5">Không tin là bán online được</option>
                            <option value="4">Bảo mật ko tin tưởng</option>
                            <option value="3">Chờ bản Offline</option>
                            <option value="2">Khách muốn mua đứt (không muốn trả phí hàng tháng)
                            </option>
                            <option value="1">Giá đắt</option>
                        </select></div>
                    <div class="form-group"><input name="submit" type="submit"
                            id="btnFilterCrmContact" class="form-control btn btn-primary"
                            value="Lọc"></div>
                </form>
            </div>
        </div>
        <div class="widget widget-table">
            <div class="widget-header">
                <h3><i class="fa fa-table"></i> Lịch sử chăm sóc</h3>
            </div>
            <div class="dgContainer widget-content table-responsive">
                <div style="display: none; width: 1534px;" class="stickyHeader">
                    <table class="table table-bordered" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr class="even">
                                <th style="width: 233px;">Khách hàng</th>
                                <th style="width: 231px;">Hành động</th>
                                <th style="width: 515px;">Kết quả</th>
                                <th style="width: 380px;">Nội dung</th>
                                <th style="width: 145px;">Ngày tạo</th>
                                <th style="width: 29px;"><i class="fa fa-edit icon"></i></th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-6 dgButtons"></div>
                    <div class="col-md-6 paginatorItem">
                        <div class="paginator"><span class="labelPages">1 - 28 / 28</span></div>
                    </div>
                    <div style="clear: both;"></div><br>
                </div>
                <table id="dgActivity" class="table table-bordered">
                    <thead>
                        <tr class="even">
                            <th>Khách hàng</th>
                            <th>Hành động</th>
                            <th>Kết quả</th>
                            <th>Nội dung</th>
                            <th>Ngày tạo</th>
                            <th><i class="fa fa-edit icon"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($activities as $activity)
                            <tr class="even">
                                <td>
                                    <div class="item-block">
                                        <div class="item-icon"><i class="fa fa-user"></i></div>
                                        <div class="item-infor">{{ $activity->customer->name }}</div>
                                    </div>
                                    <div class="item-block">
                                        <div class="item-icon"><i class="fa fa-globe"></i></div>
                                        <div class="item-infor">{{ $activity->customer->website }}</div>
                                    </div>
                                    <div class="item-block">
                                        <div class="item-icon"><i class="fa fa-phone"></i></div>
                                        <div class="item-infor">{{ $activity->customer->phone }}</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="colType">
                                        <div class="actType btn-default"><i
                                                class="fa {{ $activity->action_id == 1 ? 'fa-calendar' : 'fa-phone-square' }}"></i>
                                                {{ $activity->action->name }}
                                        </div>
                                        <div class="actStatus btn-success" title="Thành công"><i
                                                class="fa fa-check"></i></div>
                                    </div>
                                </td>
                                <td>
                                    @if ($activity->calendar_id != 0)
                                        <div class="colResult">
                                            <div class="line-break"></div>
                                            <div class="actResult">
                                                <b class="text-primary">
                                                    <i class="fa fa-calendar"></i> 
                                                    Tạo lịch: </b>{{ $activity->calendar->begin_date_time }} 
                                                    <i class="fa fa-arrow-right"></i> 
                                                    {{ $activity->calendar->end_date_time }} - {{ $activity->calendar->title }}
                                                <div class="actResult">
                                                    <b class="text-primary">
                                                        <i class="fa fa-github-alt"></i> 
                                                        Thành viên:
                                                    </b>
                                                    @foreach($activity->calendar->users as $user)
                                                        <span class="text-success " title="{{ $user->name }}">
                                                            {{ $user->name }}
                                                        </span>
                                                        ,&nbsp;
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    @if ($activity->request_call_id != 0)
                                        <div class="colResult">
                                            <div class="line-break"></div>
                                            <div class="actResult">
                                                <b class="text-primary">
                                                    <i class="fa fa-calendar"></i> 
                                                    Tạo lịch: </b>{{ $activity->requestCall->request_time_call }} 
                                                    - {{ $activity->title }}
                                                <div class="actResult">
                                                    <b class="text-primary">
                                                        <i class="fa fa-github-alt"></i> 
                                                        Thành viên:
                                                    </b>
                                                    <span class="text-success " title="{{ $activity->requestCall->teleSale->name }}">
                                                        {{ $activity->requestCall->teleSale->name }}
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </td>
                                <td>
                                    <div class="colResult">
                                        <div class="actResult">
                                            <b>Tiêu đề: </b>
                                            <label>
                                                {{ $activity->title }}
                                            </label>
                                            <br>
                                            @if ($activity->phone_call_id != 0)
                                                <b>Kết quả: </b>
                                                <label>{{ $activity->phone_call_id != 0 ? $activity->phoneCall->result->name : '---' }}</label>
                                                <br>
                                            @endif
                                            @if ($activity->calendar_id != 0)
                                                <div class="actResult">
                                                    <b>Lịch: </b>
                                                    <label>{{ $activity->calendar->begin_date_time }}</label> 
                                                    <i class="fa fa-arrow-right"></i>
                                                    {{ $activity->calendar->end_date_time }}
                                                    <div class="actResult">
                                                        <b> Giao cho:
                                                        </b>
                                                        @foreach($activity->calendar->users as $user)
                                                            <span class="text-success " title="{{ $user->name }}">
                                                                {{ $user->name }}
                                                            </span>
                                                            ,&nbsp;
                                                        @endforeach
                                                    </div>
                                                    <div class="line-break"></div>
                                                    <b>Ghi chú:</b>
                                                    <label>{{ $activity->content}}</label>
                                                    <br>
                                                </div>
                                            @endif

                                            @if ($activity->request_call_id != 0)
                                                <div class="actResult">
                                                    <b>Lịch: </b>
                                                    <label>{{ $activity->requestCall->request_time_call }}</label> 
                                                    <div class="actResult">
                                                        <b> Giao cho:</b>
                                                        <span class="text-success " title="{{ $activity->requestCall->teleSale->name }}">
                                                            {{ $activity->requestCall->teleSale->name }}
                                                        </span>
                                                    </div>
                                                    <div class="line-break"></div>
                                                    <b>Ghi chú:</b>
                                                    <label>{{ $activity->content}}</label>
                                                    <br>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div>{{ $activity->created_at }}<div class="line-break"></div>
                                    <div class="text-success" title="{{ $activity->user->name }}">{{ $activity->user->name }}</div>
                                    </div>
                                </td>
                                <td class="colControls"><a class="fa fa-edit icon"
                                        href="{{ route('get.crm.activity.edit',['id'=>$activity->id]) }}"></a>
                                </td>
                            </tr>
                        @endforeach   
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-md-6 dgButtons"></div>
                    <div class="col-md-6 paginatorItem">
                        <div class="paginator"><span class="labelPages">1 - 28 / 28</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="errorDialog" style="display: none;" title="Lỗi"></div>
    <div class="modal fade" id="showContentModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default"
                        data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <script>
        var lbAccept = 'Đồng ý';
        var lbCancel = 'Hủy';
        var lbClose = 'Đóng';
    </script>
    <style>
        .td-note {
            max-width: 170px;
        }

        .item-block {
            width: 220px;
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
            border-bottom: 1px dashed #eee;
            margin: auto;
            margin-top: 3px;
            margin-bottom: 3px;
        }

        .colType {
            min-width: 170px;
        }

        .colResult {
            min-width: 250px;
        }

        .actType {
            min-width: 120px;
            display: inline-block;
            padding: 5px 10px;
        }

        .actType i {
            font-size: 1.2em;
            margin-right: 5px;
        }

        .actStatus {
            display: inline-block;
            text-align: center;
            padding: 5px 10px;
        }
    </style>
</div>
    <div id="announcementModel" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Thông báo</h4>
                </div>
                <div class="modal-body">
                    <div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default close-announcementModel" data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>
    <div class="nn-dialog" id="nn-dialog">
        <div class="nn-body">
            <div class="nn-container-link">
                <div class="nn-icon">
                    <i class="fa fa-bell"></i>
                </div>
                <div class="nn-content">
                    <div class="nn-content-title"></div>
                    <div class="nn-content-body"></div>
                    <div class="nn-content-description text-muted"> </div>
                </div>
            </div>
            <div class="nn-control">
                <a class="fa fa-times text-muted nn-dislog-close"></a>
            </div>
        </div>
    </div>
    <div class="daterangepicker dropdown-menu opensright">
        <div class="calendar first right">
            <div class="calendar-date">
                <table class="table-condensed">
                    <thead>
                        <tr>
                            <th></th>
                            <th colspan="5" class="month"><select class="monthselect">
                                    <option value="6" selected="selected">Jul</option>
                                    <option value="7">Aug</option>
                                    <option value="8">Sep</option>
                                    <option value="9">Oct</option>
                                    <option value="10">Nov</option>
                                    <option value="11">Dec</option>
                                </select><select class="yearselect">
                                    <option value="2020" selected="selected">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                </select></th>
                            <th class="next available"><i
                                    class="fa fa-arrow-right icon icon-arrow-right glyphicon glyphicon-arrow-right"></i>
                            </th>
                        </tr>
                        <tr>
                            <th>Su</th>
                            <th>Mo</th>
                            <th>Tu</th>
                            <th>We</th>
                            <th>Th</th>
                            <th>Fr</th>
                            <th>Sa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="off disabled" data-title="r0c0">28</td>
                            <td class="off disabled" data-title="r0c1">29</td>
                            <td class="off disabled" data-title="r0c2">30</td>
                            <td class="off disabled" data-title="r0c3">1</td>
                            <td class="off disabled" data-title="r0c4">2</td>
                            <td class="off disabled" data-title="r0c5">3</td>
                            <td class="off disabled" data-title="r0c6">4</td>
                        </tr>
                        <tr>
                            <td class="off disabled" data-title="r1c0">5</td>
                            <td class="off disabled" data-title="r1c1">6</td>
                            <td class="off disabled" data-title="r1c2">7</td>
                            <td class="off disabled" data-title="r1c3">8</td>
                            <td class="off disabled" data-title="r1c4">9</td>
                            <td class="off disabled" data-title="r1c5">10</td>
                            <td class="off disabled" data-title="r1c6">11</td>
                        </tr>
                        <tr>
                            <td class="off disabled" data-title="r2c0">12</td>
                            <td class="off disabled" data-title="r2c1">13</td>
                            <td class="off disabled" data-title="r2c2">14</td>
                            <td class="off disabled" data-title="r2c3">15</td>
                            <td class="off disabled" data-title="r2c4">16</td>
                            <td class="off disabled" data-title="r2c5">17</td>
                            <td class="off disabled" data-title="r2c6">18</td>
                        </tr>
                        <tr>
                            <td class="off disabled" data-title="r3c0">19</td>
                            <td class="off disabled" data-title="r3c1">20</td>
                            <td class="off disabled" data-title="r3c2">21</td>
                            <td class="off disabled" data-title="r3c3">22</td>
                            <td class="off disabled" data-title="r3c4">23</td>
                            <td class="available active start-date end-date" data-title="r3c5">24</td>
                            <td class="available" data-title="r3c6">25</td>
                        </tr>
                        <tr>
                            <td class="available" data-title="r4c0">26</td>
                            <td class="available" data-title="r4c1">27</td>
                            <td class="available" data-title="r4c2">28</td>
                            <td class="available" data-title="r4c3">29</td>
                            <td class="available" data-title="r4c4">30</td>
                            <td class="available" data-title="r4c5">31</td>
                            <td class="available off" data-title="r4c6">1</td>
                        </tr>
                        <tr>
                            <td class="available off" data-title="r5c0">2</td>
                            <td class="available off" data-title="r5c1">3</td>
                            <td class="available off" data-title="r5c2">4</td>
                            <td class="available off" data-title="r5c3">5</td>
                            <td class="available off" data-title="r5c4">6</td>
                            <td class="available off" data-title="r5c5">7</td>
                            <td class="available off" data-title="r5c6">8</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="calendar second left">
            <div class="calendar-date">
                <table class="table-condensed">
                    <thead>
                        <tr>
                            <th class="prev available"><i
                                    class="fa fa-arrow-left icon icon-arrow-left glyphicon glyphicon-arrow-left"></i>
                            </th>
                            <th colspan="5" class="month"><select class="monthselect">
                                    <option value="0">Jan</option>
                                    <option value="1">Feb</option>
                                    <option value="2">Mar</option>
                                    <option value="3">Apr</option>
                                    <option value="4">May</option>
                                    <option value="5">Jun</option>
                                    <option value="6" selected="selected">Jul</option>
                                    <option value="7">Aug</option>
                                    <option value="8">Sep</option>
                                    <option value="9">Oct</option>
                                    <option value="10">Nov</option>
                                    <option value="11">Dec</option>
                                </select><select class="yearselect">
                                    <option value="1970">1970</option>
                                    <option value="1971">1971</option>
                                    <option value="1972">1972</option>
                                    <option value="1973">1973</option>
                                    <option value="1974">1974</option>
                                    <option value="1975">1975</option>
                                    <option value="1976">1976</option>
                                    <option value="1977">1977</option>
                                    <option value="1978">1978</option>
                                    <option value="1979">1979</option>
                                    <option value="1980">1980</option>
                                    <option value="1981">1981</option>
                                    <option value="1982">1982</option>
                                    <option value="1983">1983</option>
                                    <option value="1984">1984</option>
                                    <option value="1985">1985</option>
                                    <option value="1986">1986</option>
                                    <option value="1987">1987</option>
                                    <option value="1988">1988</option>
                                    <option value="1989">1989</option>
                                    <option value="1990">1990</option>
                                    <option value="1991">1991</option>
                                    <option value="1992">1992</option>
                                    <option value="1993">1993</option>
                                    <option value="1994">1994</option>
                                    <option value="1995">1995</option>
                                    <option value="1996">1996</option>
                                    <option value="1997">1997</option>
                                    <option value="1998">1998</option>
                                    <option value="1999">1999</option>
                                    <option value="2000">2000</option>
                                    <option value="2001">2001</option>
                                    <option value="2002">2002</option>
                                    <option value="2003">2003</option>
                                    <option value="2004">2004</option>
                                    <option value="2005">2005</option>
                                    <option value="2006">2006</option>
                                    <option value="2007">2007</option>
                                    <option value="2008">2008</option>
                                    <option value="2009">2009</option>
                                    <option value="2010">2010</option>
                                    <option value="2011">2011</option>
                                    <option value="2012">2012</option>
                                    <option value="2013">2013</option>
                                    <option value="2014">2014</option>
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020" selected="selected">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                </select></th>
                            <th class="next available"><i
                                    class="fa fa-arrow-right icon icon-arrow-right glyphicon glyphicon-arrow-right"></i>
                            </th>
                        </tr>
                        <tr>
                            <th>Su</th>
                            <th>Mo</th>
                            <th>Tu</th>
                            <th>We</th>
                            <th>Th</th>
                            <th>Fr</th>
                            <th>Sa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="available off" data-title="r0c0">28</td>
                            <td class="available off" data-title="r0c1">29</td>
                            <td class="available off" data-title="r0c2">30</td>
                            <td class="available" data-title="r0c3">1</td>
                            <td class="available" data-title="r0c4">2</td>
                            <td class="available" data-title="r0c5">3</td>
                            <td class="available" data-title="r0c6">4</td>
                        </tr>
                        <tr>
                            <td class="available" data-title="r1c0">5</td>
                            <td class="available" data-title="r1c1">6</td>
                            <td class="available" data-title="r1c2">7</td>
                            <td class="available" data-title="r1c3">8</td>
                            <td class="available" data-title="r1c4">9</td>
                            <td class="available" data-title="r1c5">10</td>
                            <td class="available" data-title="r1c6">11</td>
                        </tr>
                        <tr>
                            <td class="available" data-title="r2c0">12</td>
                            <td class="available" data-title="r2c1">13</td>
                            <td class="available" data-title="r2c2">14</td>
                            <td class="available" data-title="r2c3">15</td>
                            <td class="available" data-title="r2c4">16</td>
                            <td class="available" data-title="r2c5">17</td>
                            <td class="available" data-title="r2c6">18</td>
                        </tr>
                        <tr>
                            <td class="available" data-title="r3c0">19</td>
                            <td class="available" data-title="r3c1">20</td>
                            <td class="available" data-title="r3c2">21</td>
                            <td class="available" data-title="r3c3">22</td>
                            <td class="available" data-title="r3c4">23</td>
                            <td class="available active start-date end-date" data-title="r3c5">24</td>
                            <td class="available" data-title="r3c6">25</td>
                        </tr>
                        <tr>
                            <td class="available" data-title="r4c0">26</td>
                            <td class="available" data-title="r4c1">27</td>
                            <td class="available" data-title="r4c2">28</td>
                            <td class="available" data-title="r4c3">29</td>
                            <td class="available" data-title="r4c4">30</td>
                            <td class="available" data-title="r4c5">31</td>
                            <td class="available off" data-title="r4c6">1</td>
                        </tr>
                        <tr>
                            <td class="available off" data-title="r5c0">2</td>
                            <td class="available off" data-title="r5c1">3</td>
                            <td class="available off" data-title="r5c2">4</td>
                            <td class="available off" data-title="r5c3">5</td>
                            <td class="available off" data-title="r5c4">6</td>
                            <td class="available off" data-title="r5c5">7</td>
                            <td class="available off" data-title="r5c6">8</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="ranges">
            <ul>
                <li class="active">Today</li>
                <li>Yesterday</li>
                <li>Last 7 Days</li>
                <li>Last 30 Days</li>
                <li>This Month</li>
                <li>Last Month</li>
                <li>Custom Range</li>
            </ul>
            <div class="range_inputs">
                <div class="daterangepicker_start_input">
                    <label for="daterangepicker_start">From</label>
                    <input class="input-mini" type="text" name="daterangepicker_start" value="">
                </div>
                <div class="daterangepicker_end_input">
                    <label for="daterangepicker_end">To</label>
                    <input class="input-mini" type="text" name="daterangepicker_end" value="">
                </div>
                <button class="applyBtn btn btn-small btn-sm btn-success">Apply</button>&nbsp;
                <button class="cancelBtn btn btn-small btn-sm btn-default">Cancel</button>
            </div>
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
    <script type="text/javascript" src="{{ asset('js/crm/activity/saved_resource')}}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/activity/getfirebaseconfig')}}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('js/crm/activity/saved_resource(1)')}}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/activity/saved_resource(2)')}}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/activity/app.js') }}"></script>
@endsection