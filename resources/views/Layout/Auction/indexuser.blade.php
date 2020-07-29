@extends('Layout.master')

@section('title','ERP-Danh Sách Đấu Giá')

@section('css')
    <link href="{{ asset('asset/css/auction/bootstrap-multiselect.css" media="screen') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/css/auction/style.css') }}" type="text/css">
@endsection


@section('content-page')
    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/crm/auction/crm/auction/join">Danh sách phiên đấu giá
                    bạn tham gia</a></li>
        </ul>
        <div class="filterContainer">
            <form method="GET" name="IndexFilter" class="form-inline lolify" role="form"
                id="IndexFilter">
                <div class="col-md-10 lolify-default">

                    <div class="form-group">
                        <input type="text" name="keyword" maxlength="255" placeholder="Từ khóa"
                            id="keyword" class="form-control" value=""> </div>
                    <div class="form-group">
                        <input type="text" name="startingAmount" placeholder="Giá khởi điểm"
                            class="form-control intAutoNumeric" id="startingAmount" value=""> </div>
                    <div class="form-group">
                        <input type="text" name="slideAmount" placeholder="Giá thấp nhất"
                            class="form-control intAutoNumeric" id="slideAmount" value=""> </div>
                    <div class="form-group">
                        <input type="text" name="expectedAmount" placeholder="Giá thắng ngay"
                            class="form-control intAutoNumeric" id="expectedAmount" value=""> </div>
                    <div class="form-group">
                        <input name="submit" type="submit" id="btnSubmit"
                            class="form-control btn btn-primary" value="Lọc"> </div>

                </div>
                <div class="col-md-2 lolify-control">


                    <button class="btn  pull-right lolify-showextend" type="button"
                        data-toggle="tooltip" data-placement="top" title=""
                        data-original-title="bộ lọc nâng cao">
                        <span class="fa fa-th"></span>
                    </button>
                </div>
                <div class="col-md-12 lolify-extend" style="">
                    <div class="form-group">
                        <select name="companyId" id="companyId" class="form-control">
                            <option value="391" selected="selected">123job.vn</option>
                        </select> </div>
                    <div class="form-group">
                        <select name="categoryId" id="categoryId" class="form-control">
                            <option value="">- Danh mục đấu giá -</option>
                            <option value="5">Đấu giá số hotline</option>
                            <option value="4">Đấu giá Vchat</option>
                            <option value="3">Đấu giá từ khóa SEO</option>
                            <option value="2">Đấu giá số điện thoại quảng cáo</option>
                            <option value="1">Đấu Giá Gian hàng</option>
                        </select> </div>
                    <div class="form-group">
                        <select name="status" id="status" class="form-control">
                            <option value="">- Trạng thái -</option>
                            <option value="1">Đã Duyệt</option>
                            <option value="2">Không duyệt</option>
                            <option value="3">Mới</option>
                            <option value="4">Kết thúc</option>
                        </select> </div>
                    <div class="form-group">
                        <input type="text" name="id" maxlength="10" placeholder="ID" id="id"
                            class="form-control" value=""> </div>
                    <div class="form-group">
                        <input type="text" name="createdDateRange" maxlength="225"
                            placeholder="Ngày tạo" class="form-control date-range-picker"
                            id="createdDateRange" value=""> </div>
                    <div class="form-group">
                        <input type="text" name="approvedDateRange" maxlength="225"
                            placeholder="Ngày duyệt" class="form-control date-range-picker"
                            id="approvedDateRange" value=""> </div>
                    <div class="form-group">
                        <input type="text" name="deadlineDateRange" maxlength="225"
                            placeholder="Ngày hết hạn" class="form-control date-range-picker"
                            id="deadlineDateRange" value=""> </div>

                </div>
            </form>
            <div class="clearfix"></div>
            <div class="lolify-left-menu" style="display: none;">
            </div>
        </div>
        <div class="dgContainer">
            <div style="display: none; width: 1569px;" class="stickyHeader">
                <table class="table table-bordered" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr class="even">
                            <th style="width: 46px;">ID</th>
                            <th style="min-width: 200px; width: 389px;">Tiêu đề</th>
                            <th style="width: 175px;">Giá khởi điểm</th>
                            <th style="width: 169px;">Giá thấp nhất</th>
                            <th style="width: 188px;">Giá thắng ngay</th>
                            <th style="min-width: 150px; width: 292px;">Chiến thắng</th>
                            <th style="width: 135px;">Người tạo</th>
                            <th style="width:120px;">Tham gia</th>
                            <th style="width: 55px;"><i class="fa fa-cogs icon"></i></th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div class="col-md-6 paginatorItem"></div>
                <div style="clear: both;"></div><br>
            </div>
            <table id="dgContract" class="table table-hover">
                <thead>
                    <tr class="even">
                        <th>ID</th>
                        <th style="min-width:200px;">Tiêu đề</th>
                        <th>Giá khởi điểm</th>
                        <th>Giá thấp nhất</th>
                        <th>Giá thắng ngay</th>
                        <th style="min-width:150px;">Chiến thắng</th>
                        <th>Người tạo</th>
                        <th style="width:120px;">Tham gia</th>
                        <th><i class="fa fa-cogs icon"></i></th>
                    </tr>
                </thead>
            </table>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div class="col-md-6 paginatorItem"></div>
            </div>
        </div>
        <div class="modal fade" id="confirmReapproveModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Xác nhận</h4>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" class="referId" value="">
                        <div class="alert alert-warning">Bạn muốn hoàn duyệt hợp đồng này?</div>
                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-primary btnSave">Đồng ý</button>
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="errorModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Lỗi</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default"
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
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        var usrCnf = {
            language: 'vi'
        };
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/auction/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/auction/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/auction/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/auction/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/auction/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/auction/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/auction/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/auction/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/auction/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/auction/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/auction/bootstrap-multiselect.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/auction/saved_resource(2)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/auction/saved_resource(3)') }}"></script>
@endsection