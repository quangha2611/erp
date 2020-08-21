@extends('document::layouts.master')

@section('css')
<link rel="stylesheet" href="{{ asset('/css/document/document/style.css') }}" type="text/css">
@endsection

@section('title','ERP-Danh sách tài liệu')

@section('content-page')
    
    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/document/document/index">Danh sách tài liệu</a></li>
        </ul>
        <div id="page-crm-contact">
            <div class="filterContainer">
                <form method="GET" name="documentIndexFilter" class="form-inline" role="form"
                    id="documentIndexFilter">
                    <div class="form-group"><select name="companyId" id="companyId"
                            class="form-control">
                            <option value="">- Công ty -</option>
                            @include('document::pages.document.include._inc_recursiveInput',[
                                'data' => $companies,
                                'parentId' => null,
                                'note' => '--'
                            ])
                        </select></div>
                    <div class="form-group">
                        <input type="text" name="id" maxlength="255" placeholder="ID tài liệu" id="id" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="createdByName" placeholder="Người tạo" id="createdByName" class="form-control ui-autocomplete-input" value="" autocomplete="off">
                    </div> 
                    <input type="hidden" name="author" id="author" class="form-control" value="{{ Auth::user()->id }}">
                    <div class="form-group">
                        <input type="text" name="name" maxlength="255" placeholder="Tên tài liệu" id="name" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <select name="departmentId" id="departmentId" class="form-control">
                            <option value="">- Phòng ban -</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="categoryId" id="categoryId" class="form-control">
                            <option value="">- Danh mục tài liệu -</option>
                            @include('document::pages.document.include._inc_recursiveInput',[
                                'data' => $categories,
                                'parentId' => null,
                                'note' => '--'
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
            <div style="display: none; width: 1556px;" class="stickyHeader">
                <table class="table table-bordered" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr class="even">
                            <th style="width: 42px;">ID</th>
                            <th style="width: 166px;">Company</th>
                            <th style="width: 168px;">Phòng ban</th>
                            <th style="width: 273px;">Danh mục tài liệu</th>
                            <th style="width: 649px;">Tên</th>
                            <th style="width: 218px;">Người tạo</th>
                            <th class="colControls" title="Sửa" style="width: 39px;"><i
                                    class="fa fa-cogs"></i></th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 dgButtons"><a href="{{ route('get.document.document.create') }}"
                        class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Thêm tài liệu</a>
                </div>
                <div class="col-md-6 paginatorItem">
                    <div class="paginator"><span class="labelPages">1 - 30 / 191</span><span
                            class="disabled fa fa-step-backward"></span><span
                            class="disabled fa fa-backward"></span><a class="fa fa-forward"
                            href="https://erp.nhanh.vn/document/document/index?page=2"
                            title="Trang sau"></a> <a class="fa fa-step-forward"
                            href="https://erp.nhanh.vn/document/document/index?page=7"
                            title="Trang cuối"></a></div>
                </div>
                <div style="clear: both;"></div><br>
            </div>
            <table cellspacing="0" cellpadding="0" class="table table-bordered">
                <thead>
                    <tr class="even">
                        <th>ID</th>
                        <th>Company</th>
                        <th>Phòng ban</th>
                        <th>Danh mục tài liệu</th>
                        <th>Tên</th>
                        <th>Người tạo</th>
                        <th class="colControls" title="Sửa"><i class="fa fa-cogs"></i></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($documents as $document)
                        <tr class="even">
                            <td>{{ $document->id }}</td>
                            <td>{{ $document->companyId }}</td>
                            <td></td>
                            <td>
                                <a href="https://erp.nhanh.vn/document/document/index?companyId=1&amp;categoryId=52">
                                    {{ $document->categoryId }}
                                </a>
                            </td>
                            <td>
                                <a href="https://erp.nhanh.vn/document/document/view?id=822">
                                    {{ $document->name }}
                                </a>
                                <a ref="https://erp.nhanh.vn/document/document/view?id=822#files">
                                    <span class="badge element-bg-color-blue" style="float:right;" data-toggle="tooltip" data-placement="top" data-original-title="Tổng số tệp tin">
                                        {{ $document->count_file}}
                                    </span>
                                </a>
                            </td>
                            <td data-toggle="tooltip" data-placement="top" data-original-title="2019-09-16 15:46:45" class="colControls">
                                {{ $document->author }}
                            </td>
                            <td class="colControls">
                                <div class="dropdown">
                                    <a class="fa fa-cogs fa-lg dropdown-toggle" data-toggle="dropdown"></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li>
                                            <a href="https://erp.nhanh.vn/document/document/edit?id=822">
                                                <i class="fa fa-edit" style="margin-right: 5px;">
                                                </i>
                                                Sửa tài liệu
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://erp.nhanh.vn/document/document/index#" class="deleteDocument" value="822">
                                                <i class="fa fa-trash-o" style="margin-right:8px"></i>
                                                Xoá tài liệu
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div class="col-md-6 paginatorItem">
                    <div class="paginator"><span class="labelPages">1 - 30 / 191</span><span
                            class="disabled fa fa-step-backward"></span><span
                            class="disabled fa fa-backward"></span><a class="fa fa-forward"
                            href="https://erp.nhanh.vn/document/document/index?page=2"
                            title="Trang sau"></a> <a class="fa fa-step-forward"
                            href="https://erp.nhanh.vn/document/document/index?page=7"
                            title="Trang cuối"></a></div>
                </div>
            </div>
        </div>

        <!-- Dialog bootstrap -->
        <div id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">×</button>
                        <h4 class="modal-title">Xóa tài liệu</h4>
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
    <script type="text/javascript" src="{{ asset('/js/document/document/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/document/document/getfirebaseconfig') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('/js/document/document/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/document/document/app.js') }}"></script>
    

@endsection