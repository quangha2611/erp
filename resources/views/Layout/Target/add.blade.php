@extends('Layout.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('asset/css/target/style.css') }}" type="text/css">
@endsection

@section('title','ERP-Danh sách khách hàng')

@section('content-page')
			
    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/crm/target/registtarget">Danh sách chỉ tiêu</a></li>
            <li class="active">Đăng kí chỉ tiêu</li>
        </ul>

        <div class="main-header">
            <h2>Đăng kí chỉ tiêu</h2>
            <em>Các trường có dấu * là bắt buộc phải nhập</em>
        </div>

        <form id="crmTarget" name="crmTarget" method="post"
            action="https://erp.nhanh.vn/crm/target/add?groupId=113">
            <div class="form-horizontal">
                <fieldset>
                    <div class="col-md-6">
                        <legend>Chỉ tiêu VNP HCM 07-2020</legend>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Từ ngày:</label>
                            <div class="col-md-8">
                                <span class="form-control disabled">01/07/2020</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Đến ngày:</label>
                            <div class="col-md-8">
                                <span class="form-control disabled">31/07/2020</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label required">
                                Doanh số Thường:<span class="required">*</span>
                            </label>
                            <div class="col-md-8">
                                <input type="text" name="amount" class="form-control" id="amount"
                                    value=""> </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label required">
                                Sản phẩm </label>
                            <div class="col-md-8">
                                <input type="hidden" name="products" id="products" value=""> <select
                                    class="form-control" id="productSelect">
                                    <option>- Sản phẩm -</option>
                                    <option value="231">GHĐB (tái ký)</option>
                                    <option value="232">GHBD (mới)</option>
                                </select>
                                <div class="description fontsize-85 text-muted">Chọn các sản phẩm
                                    bạn muốn đăng kí</div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="col-md-2 control-label "></label>
                            <div class="col-md-8" style="margin-left: -0.5%;" id="productList">
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Chăm sóc:</label>
                            <div class="col-md-8">
                                <input type="hidden" name="items" id="items" value=""> <select
                                    class="form-control" id="itemSelect">
                                    <option value=""> - Lựa chọn - </option>
                                    <option value="4"> Lịch hẹn </option>
                                    <option value="2"> Gọi </option>
                                    <option value="3"> Gặp </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="col-md-2 control-label "></label>
                            <div class="col-md-8" style="margin-left: -0.5%;" id="itemList">
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <div class="col-md-6">
                        <label class="col-md-4 control-label"></label>
                        <div class="col-md-8">
                            <a href="https://erp.nhanh.vn/crm/target/add?groupId=113#"
                                id="btnSubmit" class="btn btn-primary"><i
                                    class="fa fa-floppy-o"></i> Lưu</a>
                        </div>
                    </div>
                </fieldset>
            </div>
        </form>

        <div id="productTemplate" class="fade">
            <div class="col-md-10 row clearfix product">
                <div class="col-md-5 row">
                    <span class="form-control disabled productName">Gói business</span> <input
                        type="hidden" class="productId" value="">
                </div>
                <div class="col-md-3">
                    <input type="text" class="form-control quantity" placeholder="Số lượng">
                </div>
                <div class="col-md-3">
                    <input type="text" class="form-control amount intAutoNumeric"
                        placeholder="Số tiền">
                </div>
                <a class="fa fa-times pull-left icon removeProduct text-muted"></a>
            </div>
        </div>

        <div id="itemTemplate" class="fade">
            <div class="col-md-10 row clearfix item">
                <div class="col-md-5 row">
                    <span class="form-control disabled itemName">Tìm</span>
                    <input type="hidden" class="item-type" value="">
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control item-amount intAutoNumeric"
                        placeholder="Số lượng">
                </div>
                <a class="fa fa-times pull-left icon remove-item text-muted"></a>
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
        <style>
            .removeProduct {
                height: 30px;
                padding: 4px 8px;
                cursor: pointer;
            }

            .product,
            .item {
                margin-bottom: 5px;
            }

            .error {
                border-color: red;
                color: red;
            }
        </style>
        <script>
            var MESSAGES_NO_AMOUNT = 'Bạn chưa nhập số tiền';
            var MESSAGES_NO_PRODUCT = 'Bạn chưa nhập các sản phẩm đăng kí';
            var MESSAGES_NO_QUANTITY = 'Bạn chưa nhập số lượng hoặc giá trị sản phẩm đăng kí';
            var SERVER_ERROR_MESSAGE = 'Có lỗi trong quá trình thực hiện';
            var MESSAGES_NO_ITEM_AMOUNT = 'Bạn chưa nhập số lượng chăm sóc';
        </script>
    </div>
				
@endsection

@section('js')

	<script type="text/javascript">
		var usrCnf = {
			language: 'vi'
		};
	</script>
	<script type="text/javascript" src="{{ asset('/asset/js/target/saved_resource') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/target/firebase-app.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/target/firebase-messaging.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/target/firebase-firestore.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/target/firebase-auth.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/target/getfirebaseconfig') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/target/notification.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/target/notification.reducer.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/target/ckeditor.js') }}"></script>
	<script type="text/javascript">
		CKEDITOR.env.isCompatible = true;
	</script>
    <script type="text/javascript" src="{{ asset('/asset/js/target/saved_resource(1)') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/target/index.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/target/saved_resource(2)') }}"></script>

@endsection
			