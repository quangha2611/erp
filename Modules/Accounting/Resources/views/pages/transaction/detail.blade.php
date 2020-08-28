@extends('accounting::layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/accounting/transaction/style.css') }}" type="text/css">
@endsection

@section('title', 'ERP-Danh sách phiếu thu chi')

@section('content-page')

    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li class="active">Chi tiết Phiếu chi</li>
        </ul>
        <div class="form-horizontal">

            <div style="float: right;" class="fast-link col-md-12">
            </div>
            <div class="clearfix"></div>

            <div class="col-md-12">
                <fieldset>
                    <div class="col-md-12 title text-success">
                        <span>
                            <i class="fa fa-arrow-circle-right"></i>
                        </span>
                        {{ $transaction->type }}
                        <span id="confirm-group" style="float: right;">
                            <b class="text-success">{{ $transaction->status }}</b> 
                        </span>
                    </div>
                    <div class="group-content">
                        <div class="col-md-6">
                            <ul>
                                <li><label>Mã phiếu:</label>
                                    <div class="col-ele">
                                        <span class="text-warning">{{ $transaction->id }}</span>
                                    </div>
                                </li>
                                <li><label>Ngày hạch toán:</label>
                                    <div class="col-ele">
                                        <i class="fa fa-calendar"></i> {{ $transaction->applyDate }} </div>
                                </li>
                                <li><label>Trạng thái:</label>
                                    <div class="col-ele">
                                        <b>{{ $transaction->status }}</b>
                                    </div>
                                </li>

                                <li>
                                    <label>File đính kèm:</label>
                                    <div class="col-ele">
                                        @foreach ($files as $file)
                                            <a href="{{ route('get.accounting.transaction.preview',$file->name) }}" target="_blank">
                                                {{ $file->name }}
                                            </a>
                                        @endforeach
                                    </div>
                                </li>

                                <li><label>Số tiền:</label>
                                    <div class="col-ele">
                                        <b>{{ $transaction->amount }}</b>
                                    </div>
                                </li>
                                <li>
                                    <label>Link đối soát:</label>
                                    <div class="col-ele">
                                        {{ $transaction->link }}
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li><label>Công ty:</label>
                                    <div class="col-ele">{{ $transaction->companyId }}</div>
                                </li>
                                <li><label>Loại:</label>
                                    <div class="col-ele">
                                        <b class="text-info">Phiếu chi</b>
                                    </div>
                                </li>
                                <li>
                                    <label>Qũy:</label>
                                    <div class="col-ele">
                                        <b>
                                            {{ $transaction->accountId }}
                                        </b> 
                                    </div>
                                </li>

                                <li><label>Khoản mục:</label>
                                    <div class="col-ele">
                                        <span class="text-warning">{{ $transaction->expenseCategoryId }}</span>
                                    </div>
                                </li>
                                <li><label>Hoàn trả tạm ứng:</label>
                                    <div class="col-ele">
                                        <div>
                                            <label>
                                                <input name="updatepaystatus" id="updatepaystatus"
                                                    value="0" type="checkbox">
                                                Đã hoàn trả
                                            </label> <span> <br> (Tích chọn nếu đã hoàn trả tạm ứng)
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <label>Mô tả:</label>
                                    <div class="col-ele">
                                        <span>{{ $transaction->description }}</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </fieldset>


            </div>


            <div class="col-md-12">
                <div class="col-md-12 title ">
                    <span><i class="fa fa-check"></i></span>Thông tin chi tiết
                </div>
                <div class="group-content">
                    <table class="table table-hover ">
                        <thead>

                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $transaction->description }}</td>
                                <td class="col-align-right">{{ $transaction->amount }}</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-md-12">
                <div class="col-md-12 title ">
                    <span><i class="fa fa-check"></i></span>Thông tin người tạo
                </div>
                <div class="group-content">
                    <div class="col-md-6">
                        <ul>
                            <li>
                                <label>Tên nhân viên:</label>
                                <div class="col-ele">
                                    {{ $transaction->author }}
                                </div>
                            </li>
                            <li><label>Phòng ban:</label>
                                <div class="col-ele">
                                    Chăm sóc đơn hàng - HươngĐTM </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul>

                            <li><label>Vị trí:</label>
                                <div class="col-ele">
                                    Kế toán </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="col-md-12 title ">
                    <span><i class="fa fa-check"></i></span>Thông tin người duyệt </div>
                <div class="group-content">
                    <div class="col-md-6">
                        <ul>
                            <li><label>Tên NV:</label>
                                <div class="col-ele">
                                    Đoàn Thị Minh Hương </div>
                            </li>
                            <li><label>Phòng ban:</label>
                                <div class="col-ele">
                                    Chăm sóc đơn hàng - HươngĐTM </div>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-6">
                        <ul>
                            <li><label>Ngày :</label>
                                <div class="col-ele">
                                    23/07/2020 16:37:42 </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-md-12">
                <div class="col-md-12 title ">
                    <span><i class="fa fa-check"></i></span>Thông tin kế toán xác nhận
                </div>
                <div class="group-content">
                    <div class="col-md-6">
                        <ul>
                            <li><label>Tên người xác nhận:</label>
                                <div class="col-ele">
                                    Đoàn Thị Minh Hương </div>
                            </li>
                            <li><label>Phòng ban:</label>
                                <div class="col-ele">
                                    Chăm sóc đơn hàng - HươngĐTM </div>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-6">
                        <ul>
                            <li><label>Ngày xác nhận:</label>
                                <div class="col-ele">
                                    23/07/2020 16:37:42 </div>
                            </li>
                            <li><label>Trạng thái:</label>
                                <div class="col-ele">
                                    <b>Đã xác nhận</b>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>




        </div>
        <div class="col-md-12">
            <div class="col-md-12 title ">
                <span>
                    <i class="fa fa-check"></i>
                </span>Bình luận
            </div>

            <div class="col-md-12" id="commentArea">
                <textarea name="content" id="editor">

                </textarea>
            </div>
            <div class="col-md-9" id="addCommentArea">
                <div class="col-md-10" style="padding-top: 10px;">
                    <a class="btn btn-primary" id="addComment">Thêm bình luận</a>
                </div>
            </div>
            <style>
                .user-avatar img {
                    width: 90%;
                    height: 90%;
                }

                .comment {
                    margin-bottom: 12px;
                }

                .comment .avatar-box {
                    padding: 0px;
                }

                .comment .user-info {
                    padding-left: 0px;
                }

                .comment .user-avatar {
                    padding: 0px;
                    text-align: center;
                    border: 1px solid #ccc;
                    height: 60px;
                    display: block;
                    font-size: 3em;
                    overflow: hidden;
                }

                .comment .user-avatar image {
                    width: 100%;
                    height: 100%;
                }

                .comment .content-box {
                    min-height: 80px;
                    border: 1px solid #ccc;
                    position: relative;
                }

                .comment .content-box .left-outline {
                    background: none repeat scroll 0 0 #fff;
                    border-bottom: 1px solid #d8d8d8;
                    border-left: 1px solid #d8d8d8;
                    height: 12px;
                    left: -7px;
                    position: absolute;
                    top: 12px;
                    transform: rotate(45deg);
                    width: 12px;
                }

                .comment .content-box .content {
                    padding: 5px;
                }

                .tableContract tbody tr td {
                    border: none !important;
                }

                .comment .content-box .action {
                    position: absolute;
                    right: 5px;
                    top: 0;
                }
            </style>
        </div>


        <div class="modal fade" id="showContentModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <div class="modal fade" id="approveTransactionModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Xác nhận duyệt phiếu</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-info">Bạn có muốn duyệt phiếu này không?</div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary approve-btn">Xác nhận</button>
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <div class="modal fade" id="inapproveTransactionModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Xác nhận hủy phiếu</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-info">Bạn có muốn hủy phiếu này?</div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary delete-btn">Xác nhận</button>
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <div class="modal fade" id="acceptTransactionModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">
                            <i class="fa fa-hand-o-right"></i> Kế toán xác nhận
                        </h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-info">Bạn có muốn xác nhận không?</div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary accept-btn">Xác nhận</button>
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <div class="modal fade" id="reApproveTransactionModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">
                            <i class="fa fa-hand-o-right"></i> Xác nhận hoàn duyệt
                        </h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-info">Bạn có muốn hoàn duyệt phiếu không?</div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary reApprove-btn">Xác
                            nhận</button>
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <div class="modal fade" id="updateStatusTransactionModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">
                            <i class="fa fa-hand-o-right"></i> Xác nhận thay đổi trạng thái
                        </h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-info">Bạn muốn cập nhật trạng thái về trạng thái
                            <b>chưa hạch toán(chưa thu hoặc chi tiền, mới chỉ duyệt)</b> ? </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button"
                            class="btn btn-primary updateStatusTransaction-btn">Xác nhận</button>
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <div class="modal fade" id="alertModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Thông báo!</h4>
                    </div>
                    <div class="modal-body"></div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-default reload"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- Dialog bootstrap -->
        <div id="preview" class="modal fade">
            <div class="modal-dialog modal-lg"
                style="width: 100%; height:0px; margin:0px; padding-top:5px;">
                <div class="modal-content" style="width: 100%;">
                    <div class="modal-header"><button type="button" class="close"
                            data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Xem trước</h4>
                    </div>
                    <div class="modal-body"></div>
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
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <style>
            table tr:first-child td {
                border-top: none;
            }

            span#confirm-group {
                font-size: 13px;
                font-weight: normal;
            }

            .title {
                background-color: #eee;
                padding: 8px 15px;
                margin-bottom: 15px;
                color: rgb(171, 28, 30);
                font-weight: bold;
            }

            ul li .btn {
                margin-top: -10px;
            }

            .btn-default {
                color: #333;
                background-color: #fff;
                border-color: #ccc;
                margin-left: 5px;
            }

            span i {
                margin-right: 5px;
            }

            span i.description {
                font-size: 13px;
                text-align: center;
                margin-left: 10px;
                font-style: normal;
            }

            .group-content ul {
                margin: 0;
                padding: 0;
            }

            .group-content li {
                list-style: none;
                margin: 10px 0 0 0;
                border-bottom: 1px solid rgba(184, 171, 171, .11);
            }

            .group-content label {
                display: inline-block;
                width: 37%;
                font-weight: normal;
                text-align: left;
                padding: 0 5px;
                vertical-align: top;
            }

            .group-content .col-ele {
                display: inline-block;
                width: 60%;
                text-align: left;
                padding: 0 5px;
            }

            .view-group:hover {
                background: #FFFEE8;
            }

            .line-break {
                border-bottom: 1px dashed #eee;
                margin: 3px auto;
                width: 100%;
            }

            .clear {
                clear: both;
            }
        </style>
        <script>
            var transactionId = '76741';
        </script>
    </div>

@endsection


@section('js')

	<script type="text/javascript">
		var usrCnf = {
			language: 'vi'
		};
    </script>
    <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'editor' );
    </script>
    <script type="text/javascript" src="{{ asset('/js/accounting/transaction/saved_resource') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/accounting/transaction/getfirebaseconfig') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/accounting/transaction/app.js') }}"></script>
	<script>
		CKEDITOR.env.isCompatible = true;
	</script>
	<script type="text/javascript" src="{{ asset('/js/accounting/transaction/saved_resource(1)') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/accounting/transaction/saved_resource(2)') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/accounting/transaction/saved_resource(3)') }}"></script>
    

@endsection
