@extends('accounting::layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/accounting/category/style.css') }}" type="text/css">
@endsection

@section('title', 'ERP-Sửa hoản mục')

@section('content-page')
    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/accounting"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/accounting/expense/category">Danh sách khoản mục chi
                    phí</a></li>
        </ul>
        <div id="page-idea-contact">
            <div class="filterContainer">
                <form method="GET" name="ideaFilter" class="form-inline" role="form"
                    id="ideaFilter" action="{{ route('get.accounting.category.filter') }}">
                    <div class="form-group"><select name="companyId" id="companyId"
                            class="form-control" required>
                            <option value="">- Công ty -</option>
                            @include('accounting::pages.category.include._inc_recursiveInput',[
                                'data' => $companies,
                                'parentId' => null,
                                'note' => '--'
                            ])
                        </select></div>
                    <div class="form-group"><input name="submit" type="submit"
                            id="btnFilterCompanyContact" class="form-control btn btn-primary"
                            value="Lọc"></div>
                </form>
            </div>
        </div>
        <div class="widget widget-table">
            <div class="widget-header">
                <h3><i class="fa fa-table"></i> Danh mục khoản mục chi phí</h3>
            </div>
            <div class="dgContainer widget-content table-responsive">
                <div style="display: none; width: 1534px;" class="stickyHeader">
                    <table class="table table-bordered" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr class="even">
                                <th style="width: 52px;">ID</th>
                                <th style="width: 468px;">Tên tài khoản</th>
                                <th style="width: 234px;">Mã code</th>
                                <th class="maxw50" style="width: 45px;">Trạng thái</th>
                                <th style="width: 492px;">Tên Công ty </th>
                                <th style="width: 198px;">Người tạo</th>
                                <th style="width: 44px;"><i class="fa fa-edit"></i> </th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-6 dgButtons"><a
                            href="{{ route('get.accounting.category.create') }}"
                            class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Thêm khoản
                            mục</a></div>
                    <div style="clear: both;"></div><br>
                </div>
                <table cellspacing="0" cellpadding="0" class="table table-bordered">
                    <thead>
                        <tr class="even">
                            <th>ID</th>
                            <th>Tên tài khoản</th>
                            <th>Mã code</th>
                            <th class="maxw50">Trạng thái</th>
                            <th>Tên Công ty </th>
                            <th>Người tạo</th>
                            <th><i class="fa fa-edit"></i> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
							<tr class="">
								<td>{{$category->id}}</td>
								<td style="padding-left: 10px;">{{$category->name}}</td>
								<td>{{$category->code}}</td>
								<td style="width:30px;"><i style="color:green;font-size:14px;"
										class="fa fa-check-circle"></i></td>
								<td>{{$category->companyId}}</td>
								<td style="position: relative">{{$category->author}}</td>
								<td class="colControls">
                                    <form action="{{ route('post.accounting.category.destroy') }}" method="POST">
                                        @csrf
                                        <a href="{{ route('get.accounting.category.edit',['id' => $category->id]) }}" class="fa fa-edit"></a>
                                        <a href="#" class="fa fa-trash-o deleteAccount del_Item mgleft5" 
                                            onclick="event.preventDefault(); 
                                            document.getElementById('modalbox').style.display = 'block';
                                            deletedId = 'deleted' + {{$category->id}}; ">
                                        </a>
                                        <input type="submit" name="id" value="{{ $category->id }}" style="display: none" id="{{ 'deleted'.$category->id }}">
                                    </form>
                                </td>
							</tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-md-6 dgButtons"></div>
                </div>
            </div>
        </div>
        <!-- Dialog bootstrap -->
        <div class="modal" tabindex="-1" role="dialog" id="modalbox">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="document.getElementById('modalbox').style.display='none'">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Xác nhận xóa mục này</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="document.getElementById(deletedId).click()">Delete</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="document.getElementById('modalbox').style.display='none'">Close</button>
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

        var deletedId = '';
    </script>
    <script type="text/javascript" src="{{ asset('/js/accounting/category/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/accounting/category/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/accounting/category/app.js') }}"></script>
    <script>
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('/js/accounting/category/saved_resource(1)') }}"></script>


@endsection