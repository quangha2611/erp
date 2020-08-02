@extends('Layout.master2')

@section('css')
    <link rel="stylesheet" href="{{ asset('asset/css/asset/category/style.css') }}" type="text/css">
@endsection

@section('title','ERP-Danh mục tài sản')

@section('content-page')
    
    <div class="col-md-10 content-wrapper">


        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/asset"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/asset/category/index">Danh sách danh mục tài sản</a>
            </li>
        </ul>
        <div id="page-idea-contact">
            <div class="filterContainer">
                <form method="GET" name="ideaFilter" class="form-inline" role="form"
                    id="ideaFilter">
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
                    <div class="form-group"><input name="submit" type="submit"
                            id="btnFilterCompanyContact" class="form-control btn btn-primary"
                            value="Lọc"></div>
                </form>
            </div>
        </div>
        <div class="dgContainer">
            <div style="display: none; width: 1569px;" class="stickyHeader">
                <table class="table table-bordered" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr class="even">
                            <th style="width: 105px;">ID</th>
                            <th style="width: 432px;">Tên danh mục</th>
                            <th style="width: 181px;">Mã code</th>
                            <th style="width: 417px;">Tên Công ty </th>
                            <th style="width: 305px;">Người tạo</th>
                            <th style="width: 128px;"><i class="fa fa-edit"></i> </th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div style="clear: both;"></div><br>
            </div>
            <table cellspacing="0" cellpadding="0" class="table table-bordered">
                <thead>
                    <tr class="even">
                        <th>ID</th>
                        <th>Tên danh mục</th>
                        <th>Mã code</th>
                        <th>Tên Công ty </th>
                        <th>Người tạo</th>
                        <th><i class="fa fa-edit"></i> </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td>631</td>
                        <td style="padding-left: 10px;"><i style="margin-right:5px;"
                                class="fa fa-check text-success"></i>Thủ quỹ</td>
                        <td></td>
                        <td>Vật giá - Hồ Chí Minh</td>
                        <td style="position: relative">Phạm Văn Phú</td>
                        <td class="colControls"><a
                                href="{{ route('assetCategoryEdit') }}"
                                class="fa fa-edit edit-item"></a><a
                                href="https://erp.nhanh.vn/asset/category/index#"
                                style="margin-left:5px;" value="631"
                                class="fa fa-trash-o delete del_Item"></a></td>
                    </tr>
                    <tr class="even h">
                        <td>630</td>
                        <td style="padding-left: 10px;"><i style="margin-right:5px;"
                                class="fa fa-check text-success"></i>Phòng trợ lý</td>
                        <td></td>
                        <td>Vật giá - Hồ Chí Minh</td>
                        <td style="position: relative">Phạm Văn Phú</td>
                        <td class="colControls"><a
                                href="{{ route('assetCategoryEdit') }}"
                                class="fa fa-edit edit-item"></a><a
                                href="https://erp.nhanh.vn/asset/category/index#"
                                style="margin-left:5px;" value="630"
                                class="fa fa-trash-o delete del_Item"></a></td>
                    </tr>
                    <tr>
                        <td>629</td>
                        <td style="padding-left: 10px;"><i style="margin-right:5px;"
                                class="fa fa-check text-success"></i>Phòng Hành chính</td>
                        <td></td>
                        <td>Vật giá - Hồ Chí Minh</td>
                        <td style="position: relative">Phạm Văn Phú</td>
                        <td class="colControls"><a
                                href="{{ route('assetCategoryEdit') }}"
                                class="fa fa-edit edit-item"></a><a
                                href="https://erp.nhanh.vn/asset/category/index#"
                                style="margin-left:5px;" value="629"
                                class="fa fa-trash-o delete del_Item"></a></td>
                    </tr>
                    <tr class="even">
                        <td>628</td>
                        <td style="padding-left: 10px;"><i style="margin-right:5px;"
                                class="fa fa-check text-success"></i>Phòng IT</td>
                        <td></td>
                        <td>Vật giá - Hồ Chí Minh</td>
                        <td style="position: relative">Phạm Văn Phú</td>
                        <td class="colControls"><a
                                href="{{ route('assetCategoryEdit') }}"
                                class="fa fa-edit edit-item"></a><a
                                href="https://erp.nhanh.vn/asset/category/index#"
                                style="margin-left:5px;" value="628"
                                class="fa fa-trash-o delete del_Item"></a></td>
                    </tr>
                    <tr>
                        <td>627</td>
                        <td style="padding-left: 10px;"><i style="margin-right:5px;"
                                class="fa fa-check text-success"></i>Phòng kết toán</td>
                        <td></td>
                        <td>Vật giá - Hồ Chí Minh</td>
                        <td style="position: relative">Phạm Văn Phú</td>
                        <td class="colControls"><a
                                href="{{ route('assetCategoryEdit') }}"
                                class="fa fa-edit edit-item"></a><a
                                href="https://erp.nhanh.vn/asset/category/index#"
                                style="margin-left:5px;" value="627"
                                class="fa fa-trash-o delete del_Item"></a></td>
                    </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
            </div>
        </div>
        <!-- Dialog bootstrap -->
        <div id="delModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">×</button>
                        <h4 class="modal-title">Thông báo</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-info alert-dismissable">Xác nhận xóa danh mục này
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary confirm">Xác nhận</button>
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="alertModal" class="modal fade">
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
    </div>

@endsection


@section('js')

	<script type="text/javascript">
		var usrCnf = {
			language: 'vi'
		};
	</script>
	<script type="text/javascript" src="{{ asset('/asset/js/asset/category/saved_resource') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/asset/category/firebase-app.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/asset/category/firebase-messaging.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/asset/category/firebase-firestore.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/asset/category/firebase-auth.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/asset/category/getfirebaseconfig') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/asset/category/notification.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/asset/category/notification.reducer.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/asset/category/ckeditor.js') }}"></script>
	<script type="text/javascript">
		CKEDITOR.env.isCompatible = true;
	</script>
	<script type="text/javascript" src="{{ asset('/asset/js/asset/category/saved_resource(1)') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/asset/category/index.js') }}"></script>
    

@endsection