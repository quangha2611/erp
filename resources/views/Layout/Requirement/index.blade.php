@extends('Layout.master')

@section('title','Danh sách requirement')
    
@section('css')
	<link rel="stylesheet" href="{{ asset('asset/css/requirement/style.css') }}" type="text/css">
@endsection

@section('content-page')
    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li class="active">Danh sách thông tin</li>
        </ul>
        <div class="filterContainer">
            <form method="GET" name="crmAccountFilter" class="form-inline" role="form"
                id="crmAccountFilter">
                <div class="form-group"><input type="text" name="id" maxlength="255"
                        placeholder="ID" id="id" class="form-control" value=""></div>
                <div class="form-group"><select name="projectId" id="projectId"
                        class="form-control">
                        <option value="">- Dự án -</option>
                    </select></div>
                <div class="form-group"><select name="categoryId" id="categoryId"
                        class="form-control">
                        <option value="">- Danh mục nhiệm vụ -</option>
                        <option value="2">Cải tiến tính năng</option>
                        <option value="5">Cut giao diện</option>
                        <option value="9">Họp, thảo luận</option>
                        <option value="8">Hướng dẫn sử dụng</option>
                        <option value="1">Lỗi</option>
                        <option value="10">Thiết kế</option>
                        <option value="7">Tích hợp hệ thống</option>
                        <option value="4">Tính năng mới</option>
                        <option value="3">Tối ưu hệ thống</option>
                        <option value="6">Việc cần làm</option>
                    </select></div>
                <div class="form-group"><select name="companyId" id="companyId"
                        class="form-control">
                        <option value="">- Công ty -</option>
                        <option value="10">VNP group</option>
                        <option value="2">---Công ty cổ phần Vật Giá Việt Nam</option>
                        <option value="315">------Vật giá - Hà Nội</option>
                        <option value="319">------Vật giá - Hồ Chí Minh</option>
                        <option value="365">------Vật giá - Hải Phòng</option>
                        <option value="387">------WeSave</option>
                        <option value="389">------123doc.org</option>
                        <option value="390">------Cunghocvui.com</option>
                        <option value="391">------123job.vn</option>
                        <option value="392">------9houz.com</option>
                        <option value="393">------123dok.com</option>
                        <option value="321">---Công ty cổ phần TMDT Bảo Kim</option>
                        <option value="322">------Bảo Kim - Hà Nội</option>
                        <option value="323">------Bảo Kim - Hồ Chí Minh</option>
                        <option value="324">---Công ty cổ phần Nhanh.vn</option>
                        <option value="1">------Nhanh.vn</option>
                        <option value="366">------Nhanh.vn Đà Nẵng</option>
                        <option value="395">------Nhanh.vn HCM</option>
                        <option value="379">---Westay</option>
                        <option value="384">---Công ty cổ phần WeHelp</option>
                        <option value="398">---WeLove</option>
                    </select></div>
                <div class="form-group"><input type="text" name="mobile" maxlength="16"
                        placeholder="Số điện thoại" id="mobile" class="form-control" value=""></div>
                <div class="form-group"><input type="text" name="customerName"
                        placeholder="Tên/website/email" id="customerName" class="form-control"
                        value=""></div>
                <div class="form-group"><select name="status" id="status" class="form-control">
                        <option value="">- Trạng thái -</option>
                        <option value="1">Mới</option>
                        <option value="2">Phản hồi</option>
                        <option value="3">Đã kiểm tra</option>
                        <option value="4">Đã chốt</option>
                        <option value="5">Hủy</option>
                        <option value="6">Đóng</option>
                        <option value="7">Hủy bỏ</option>
                    </select></div>
                <div class="form-group"><select name="hasTask" id="hasTask" class="form-control">
                        <option value="">- Trạng thái task-</option>
                        <option value="1">Đã thành nhiệm vụ</option>
                        <option value="-1">Chưa thành nhiệm vụ</option>
                    </select></div>
                <div class="form-group"><input type="text" name="createdByName"
                        placeholder="Người tạo" id="createdByName"
                        class="form-control ui-autocomplete-input" value="" autocomplete="off">
                </div> <input type="hidden" name="createdById" id="createdById" class="form-control"
                    value=""><input type="hidden" name="leadId" id="leadId" class="form-control"
                    value=""><input type="hidden" name="confirmedById" id="confirmedById"
                    class="form-control" value=""><input type="hidden" name="checkedById"
                    id="checkedById" class="form-control" value="">
                <div class="form-group"><select name="hiddenStatus" id="hiddenStatus"
                        class="form-control">
                        <option value="1" selected="selected">Ẩn trạng thái đóng và hủy</option>
                        <option value="2">Ẩn trạng thái hủy</option>
                        <option value="3">Ẩn trạng thái đóng</option>
                        <option value="-1">Hiện tất cả</option>
                    </select></div>
                <div class="form-group"><input type="text" name="rangetimeDeadlineTask"
                        class="form-control date-range-picker" placeholder="Ngày tạo"
                        id="rangetimeDeadlineTask" value=""></div>
                <div class="form-group"><input name="submit" type="submit" id="btnFilterCrmContact"
                        class="form-control btn btn-primary" value="Lọc"></div>
            </form>
        </div>
        <div>
            <div class="page-overview">
                <div style="margin-bottom: 20px;" class="btn-group btn-group-justified">
                    <a href="https://erp.nhanh.vn/crm/requirement/index?status=1"
                        class="btn col-sm-6 taskStt3">Mới</a>
                    <a href="https://erp.nhanh.vn/crm/requirement/index?status=2"
                        class="btn col-sm-6 taskStt2">Phản hồi</a>
                    <a href="https://erp.nhanh.vn/crm/requirement/index?status=3"
                        class="btn col-sm-6 taskStt6">Đã kiểm tra</a>
                    <a href="https://erp.nhanh.vn/crm/requirement/index?status=4"
                        class="btn col-sm-6 taskStt7">Đã chốt</a>
                    <a href="https://erp.nhanh.vn/crm/requirement/index?status=6&amp;hiddenStatus="
                        class="btn col-sm-6 taskStt8">Đóng</a>
                    <a href="https://erp.nhanh.vn/crm/requirement/index?status=5&amp;hiddenStatus="
                        class="btn col-sm-6 taskStt5">Hủy</a>
                </div>
            </div>
        </div>
        <div class="widget widget-table">
            <div class="widget-header">
                <h3><i class="fa fa-table"></i> Danh sách yêu cầu</h3>
            </div>
            <div class="dgContainer widget-content table-responsive">
                <div style="display: none; width: 1547px;" class="stickyHeader">
                    <table class="table table-bordered" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr class="even">
                                <th style="width: 82px;">ID</th>
                                <th style="width: 92px;"><i class="fa fa-comments-o icon"
                                        data-original-title="Bình luận"></i></th>
                                <th style="width: 83px;"><i
                                        class="fa fa-paperclip fa-rotate-90 icon"
                                        data-original-title="Số file đính kèm"></i></th>
                                <th style="width: 156px;">Dự án</th>
                                <th style="width: 112px;">Tên</th>
                                <th style="width: 156px;">Giá trị</th>
                                <th style="width: 279px;">Người duyệt</th>
                                <th style="width: 256px;">Người chốt</th>
                                <th style="width: 233px;">Người tạo</th>
                                <th class="colControls" title="Thao tác" style="width: 97px;"><i
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
                <table id="dgRequirement" class="table table-bordered">
                    <thead>
                        <tr class="even">
                            <th>ID</th>
                            <th><i class="fa fa-comments-o icon"
                                    data-original-title="Bình luận"></i></th>
                            <th><i class="fa fa-paperclip fa-rotate-90 icon"
                                    data-original-title="Số file đính kèm"></i></th>
                            <th>Dự án</th>
                            <th>Tên</th>
                            <th>Giá trị</th>
                            <th>Người duyệt</th>
                            <th>Người chốt</th>
                            <th>Người tạo</th>
                            <th class="colControls" title="Thao tác"><i class="fa fa-cogs icon"></i>
                            </th>
                        </tr>
                    </thead>
                </table>
                <div class="row">
                    <div class="col-md-6 dgButtons"></div>
                    <div class="col-md-6 paginatorItem"></div>
                </div>
            </div>
        </div>
        <!-- Dialog bootstrap -->
        <div id="myModal" class="modal fade">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">×</button>
                        <h4 class="modal-title">Thông báo</h4>
                    </div>
                    <div class="modal-body"></div>
                    <div class="modal-footer">
                    </div>
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
    <script type="text/javascript" src="{{ asset('asset/js/requirement/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/requirement/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/requirement/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/requirement/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/requirement/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/requirement/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/requirement/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/requirement/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/requirement/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/contact/saved_resource(1)') }}"></script>
@endsection