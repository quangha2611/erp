@extends('document::layouts.master')

@section('css')
<link rel="stylesheet" href="{{ asset('/css/document/document/style.css') }}" type="text/css">
@endsection

@section('title','ERP-Danh sách tài liệu')

@section('content-page')
    
    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/document/category/index">Danh sách danh mục tài
                    liệu</a></li>
        </ul>
        <div id="page-crm-contact">
            <div class="filterContainer">
                <form method="GET" name="documentIndexFilter" class="form-inline" role="form" id="documentIndexFilter" action="{{ route('get.document.category.filter') }}">
                    <div class="form-group">
                        <input type="text" name="id" maxlength="10" placeholder="ID" id="id" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="name" maxlength="255" placeholder="Tên" id="name" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <select name="companyId" id="companyId" class="form-control">
                            <option value="">- Công ty -</option>
                            @include('document::pages.category.include._inc_recursiveInput',[
                                'data' => $companies,
                                'parentId' => null,
                                'note' => '--',
                            ])
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="departmentId" id="departmentId" class="form-control">
                            <option value="">- Phòng ban -</option>
                            <option value="1270">Kinh doanh Nhanh.vn</option>
                            <option value="950">-- Nhanh.vn Hà Nội</option>
                            <option value="1072">-- -- Nhanh HN - KD1_LanNT</option>
                            <option value="1133">-- -- Nhanh HN - KD6_LâmVN</option>
                            <option value="1157">-- -- Nhanh HN - KD7_ĐiệpNH</option>
                            <option value="1248">-- -- Nhanh HN - KD11_NganLTT</option>
                            <option value="1269">-- -- CTV Kinh doanh</option>
                            <option value="1317">-- -- Nhanh HN - Phòng KD5_AnhNX</option>
                            <option value="1284">-- -- -- Nhanh HN - KD16_TungNH</option>
                            <option value="1285">-- -- -- Nhanh HN - ThanhTV_Phát triển đối tác
                            </option>
                            <option value="1318">-- -- Nhanh HN - Phòng KD2_TùngNT</option>
                            <option value="1319">-- -- Nhanh HN - Phòng KD3_HuyPV</option>
                            <option value="1320">-- -- Nhanh HN - Phòng KD4_TrườngVV</option>
                            <option value="1241">-- -- -- Nhanh HN - KD10_ThanhPT</option>
                            <option value="1263">-- -- -- Nhanh HN - KD8_CôngND</option>
                            <option value="1313">-- -- -- Nhanh HN - KD17_TùngNT</option>
                            <option value="1292">-- Nhanh Nghệ An</option>
                            <option value="1439">-- Phòng đại lý</option>
                            <option value="1440">-- -- HN - Đại lý - KD5_AnhNX</option>
                            <option value="1445">-- -- HN - Đại lý - KD18_ThanhNT</option>
                            <option value="1452">-- -- Đại lý công ty</option>
                            <option value="1453">Khối văn phòng</option>
                            <option value="300">-- Phòng IT</option>
                            <option value="452">-- -- IT admin</option>
                            <option value="453">-- -- IT ERP</option>
                            <option value="454">-- -- IT giao diện</option>
                            <option value="849">-- -- Tester</option>
                            <option value="313">-- Phòng kế toán</option>
                            <option value="840">-- Giám đốc dự án</option>
                            <option value="829">-- -- Trợ lý</option>
                            <option value="1282">-- -- Phòng Dịch Vụ Khách Hàng</option>
                            <option value="843">-- Chăm sóc đơn hàng - HươngĐTM</option>
                            <option value="1147">-- Chăm sóc khách hàng - UyênTL</option>
                            <option value="1209">-- Support văn phòng</option>
                            <option value="1387">-- Phòng nhân sự - Nhanh.vn</option>
                            <option value="1459">Khối sale dịch vụ mkt</option>
                            <option value="845">-- Marketing</option>
                            <option value="1386">-- Sale Marketing</option>
                            <option value="1419">-- Ecomcare</option>
                            <option value="1457">-- Phòng dịch vụ SEO GG MAPS</option>
                        </select></div>
                    <div class="form-group"><input name="submit" type="submit"
                            id="btnFilterDocumentContact" class="form-control btn btn-primary"
                            value="Lọc"></div>
                </form>
            </div>
        </div>
        <div class="dgContainer">
            <div style="display: none; width: 1556px;" class="stickyHeader">
                <table class="table table-bordered" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr class="even">
                            <th class="colCheckbox" style="width: 41px;"><input type="checkbox"
                                    class="cb" id=""></th>
                            <th style="width: 67px;">ID</th>
                            <th style="width: 341px;">Company</th>
                            <th style="width: 350px;">Phòng ban</th>
                            <th style="width: 533px;">Tên</th>
                            <th style="width: 171px;">Số lượng tài liệu</th>
                            <th class="colControls" title="Sửa" style="width: 52px;"><i
                                    class="fa fa-cogs"></i></th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 dgButtons"><a href="{{ route('get.document.category.create') }}"
                        class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Thêm danh mục tài
                        liệu</a></div>
                <div style="clear: both;"></div><br>
            </div>
            <table cellspacing="0" cellpadding="0" class="table table-bordered">
                <thead>
                    <tr class="even">
                        <th class="colCheckbox"><input type="checkbox" class="cb" id="cbCheckAll">
                        </th>
                        <th>ID</th>
                        <th>Company</th>
                        <th>Phòng ban</th>
                        <th>Tên</th>
                        <th>Số lượng tài liệu</th>
                        <th class="colControls" title="Sửa"><i class="fa fa-cogs"></i></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr class="">
                            <td class="colCheckbox">
                                <input id="1" class="cb orderCb" type="checkbox">
                            </td>
                            <td>
                                <span data-toggle="tooltip" data-title="parentId: ">{{ $category->id }}</span>
                            </td>
                            <td>{{ $category->companyId }}</td>
                            <td>{{ $category->departmentId }}</td>
                            <td style="padding-left: 10px;">
                                <a href="https://erp.nhanh.vn/document/document/index?name=&amp;companyId=1&amp;categoryId=1&amp;submit=L%E1%BB%8Dc">
                                    {{ $category->name }}
                                </a>
                            </td>
                            <td>13</td>
                            <td class="colControls">
                                <div class="dropdown">
                                    <a class="fa fa-cogs fa-lg dropdown-toggle" data-toggle="dropdown"></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li>
                                            <a href="https://erp.nhanh.vn/document/category/edit?id=1">
                                                <i class="fa fa-edit" style="margin-right:7px;margin-left:2px"></i>
                                                Sửa danh mục
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://erp.nhanh.vn/document/category/index#" class="deleteCat" value="1">
                                                <i class="fa fa-trash-o" style="margin-right:8px"></i>
                                                Xoá danh mục
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
            </div>
            {{-- <div class="text-center">
                {{ $categories->links() }}
            </div> --}}
        </div>
        <!-- Dialog bootstrap -->
        <div id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">×</button>
                        <h4 class="modal-title">Xóa danh mục</h4>
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