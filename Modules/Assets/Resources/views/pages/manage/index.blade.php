@extends('assets::layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/asset/manage/style.css') }}" type="text/css">
@endsection

@section('title','ERP-Danh sách tài sản')

@section('content-page')
    
    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/asset"><i class="fa fa-home"></i></a></li>
            <li><a class="active" href="https://erp.nhanh.vn/asset/manage/index">Danh sách tài
                    sản</a></li>
        </ul>
        <div id="page-idea-contact">
            <form method="GET" name="documentIndexFilter" class="form-inline lolify" role="form" id="documentIndexFilter" action="{{ route('get.asset.manage.filter') }}" >
                <div class="col-md-10 lolify-default">
                    <div class="form-group">
                        <select name="companyId" id="companyId" class="form-control">
                            <option value="">- Công ty -</option>
                            @include('assets::pages.manage.include._inc_recursiveInput',[
                                'data' => $companies,
                                'parentId' => null,
                                'note' => '--',
                            ])
                        </select> 
                    </div>
                    <div class="form-group">
                        <input type="text" name="id" maxlength="255" placeholder="ID" id="id" class="form-control" value=""> 
                    </div>
                    <div class="form-group">
                        <input type="text" name="author" placeholder="Người tạo" id="author" class="form-control ui-autocomplete-input" value="" autocomplete="off"> 
                    </div>
                    <input type="hidden" name="createdById" id="createdById" class="form-control" value="">
                    <div class="form-group">
                        <input type="text" name="name" maxlength="255" placeholder="Tên tài sản" id="name" class="form-control" value=""> 
                    </div>
                    <div class="form-group">
                        <select name="categoryId" id="categoryId" class="form-control">
                            <option value="">- Danh mục -</option>
                            @include('assets::pages.manage.include._inc_recursiveInput',[
                                'data' => $categories,
                                'parentId' => null,
                                'note' => '--',
                            ])
                        </select> 
                    </div>
                    <div class="form-group">
                        <input name="submit" type="submit" id="btnFilterCompanyContact" class="form-control btn btn-primary" value="Lọc"> 
                    </div>

                </div>
                <div class="col-md-2 lolify-control">
                    <div class="btn-group pull-right lolify-features" data-toggle="tooltip"
                        data-placement="top" title="" data-original-title="Chức năng, thao tác">
                        <button class="btn dropdown-toggle" type="button" aria-haspopup="true"
                            aria-expanded="false" data-toggle="dropdown">
                            <span class="fa fa-cog"></span> <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="https://erp.nhanh.vn/asset/manage/index#" id="exportExcel">
                                    <i class="fa fa-file-excel-o"> </i> Xuất excel trang hiện tại
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('get.asset.manage.exportAll',['type'=>'xlsx']) }}" id="exportAll">
                                    <i class="fa fa-file-excel-o"></i> Xuất toàn bộ excel
                                </a>
                            </li>
                        </ul>
                    </div>


                    <button class="btn  pull-right lolify-showextend" type="button"
                        data-toggle="tooltip" data-placement="top" title=""
                        data-original-title="bộ lọc nâng cao">
                        <span class="fa fa-th"></span>
                    </button>
                </div>
                <div class="col-md-12 lolify-extend" style="">
                    <div class="form-group">
                        <select name="departmentId" id="departmentId" class="form-control">
                            <option value="">- Phòng ban -</option>
                        </select> 
                    </div>
                </div>
            </form>
            <div class="clearfix"></div>
            <div class="lolify-left-menu" style="display: none;">
            </div>
        </div>
        <div class="alert alert-warning alert-dismissable">
            <a href="https://erp.nhanh.vn/asset/manage/index" class="close">×</a>
            <strong>Cảnh báo!</strong> Không có dữ liệu
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
                        <div class="alert alert-info alert-dismissable">Xác nhận hủy tài
                            sản này?</div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary confirm">Xác nhận</button>
                        <button type="button" class="btn btn-default"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="recoveryModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">×</button>
                        <h4 class="modal-title">Thông báo</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-info alert-dismissable">Xác nhận thu hồi
                            tài sản này</div>
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
        <style>
            .action-item {
                text-align: left !important;
            }

            .action-item a {
                padding: 0 2px;
                font-size: 12px;
                font-weight: normal;
                display: block;
                text-align: center;
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
	<script type="text/javascript" src="{{ asset('/js/asset/manage/saved_resource') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/asset/manage/getfirebaseconfig') }}"></script>
	<script type="text/javascript">
		CKEDITOR.env.isCompatible = true;
	</script>
	<script type="text/javascript" src="{{ asset('/js/asset/manage/saved_resource(1)') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/asset/manage/saved_resource(2)') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/asset/manage/app.js') }}"></script>
    

@endsection