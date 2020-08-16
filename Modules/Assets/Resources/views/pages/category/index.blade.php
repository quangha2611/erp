@extends('assets::layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/asset/category/style.css') }}" type="text/css">
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
                <form method="GET" action="{{ route('get.asset.category.filter') }}" name="ideaFilter" class="form-inline" role="form" id="ideaFilter">
                    @csrf
                    <div class="form-group">
                        <select name="companyId" id="companyId" class="form-control" required>
                            <option value="">- Công ty -</option>
                            @include('assets::pages.category.include._inc_recursiveInput',[
                                'data' => $companies,
                                'parentId' => null,
                                'note' => '--',
                            ])
                        </select>
                    </div>
                    <div class="form-group">
                        <input name="submit" type="submit" id="btnFilterCompanyContact" class="form-control btn btn-primary" value="Lọc">
                    </div>
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
                    @foreach ($categories as $category)
                        <tr class="">
                            <td>{{ $category->id }}</td>
                            <td style="padding-left: 10px;"><i style="margin-right:5px;"
                                    class="fa fa-check text-success"></i>{{ $category->name }}</td>
                            <td>
                                {{ $category->code }}
                            </td>
                            <td>{{ $category->companyId }}</td>
                            <td style="position: relative">Phạm Văn Phú</td>
                            <td class="colControls">
                                <a href="{{ route('get.asset.category.edit', $category->id) }}" class="fa fa-edit edit-item"></a>
                                <a href="{{ route('post.asset.category.destroy', $category->id) }}" style="margin-left:5px;" value="631" class="fa fa-trash-o delete del_Item"></a>
                            
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
            </div>
        </div>
        <div class="text-center">
            {{ $categories->links() }}
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
	<script type="text/javascript" src="{{ asset('/js/asset/category/saved_resource') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/asset/category/getfirebaseconfig') }}"></script>
	<script type="text/javascript">
		CKEDITOR.env.isCompatible = true;
	</script>
	<script type="text/javascript" src="{{ asset('/js/asset/category/saved_resource(1)') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/asset/category/app.js') }}"></script>
    

@endsection