@extends('crm::layouts.master')

@section('title','ERP-Danh sách mẫu in')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/crm/contract/style.css') }}" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/crm/contract/editor.css') }}">
    <style>
        .table-bordered > tbody > tr > td {
            text-align: center;
        }
    </style>
@endsection

@section('content-page')

<div class="col-md-10 content-wrapper">
    <ul class="breadcrumb">
        <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
        <li><a href="https://erp.nhanh.vn/document/contract/template">Danh sách mẫu hợp đồng</a>
        </li>
    </ul>
    <div id="page-crm-contact">
        <div class="filterContainer">
            <form method="GET" name="docContractFilter" class="form-inline" role="form"
                id="docContractFilter">
                <div class="form-group"><select name="companyId" id="companyId"
                        class="form-control">
                        <option value="">- Công ty -</option>
                        <option value="10">VNP group</option>
                        <option value="2">--Công ty cổ phần Vật Giá Việt Nam</option>
                        <option value="315">----Vật giá - Hà Nội</option>
                        <option value="319">----Vật giá - Hồ Chí Minh</option>
                        <option value="365">----Vật giá - Hải Phòng</option>
                        <option value="387">----WeSave</option>
                        <option value="389">----123doc.org</option>
                        <option value="390">----Cunghocvui.com</option>
                        <option value="391">----123job.vn</option>
                        <option value="392">----9houz.com</option>
                        <option value="393">----123dok.com</option>
                        <option value="321">--Công ty cổ phần TMDT Bảo Kim</option>
                        <option value="322">----Bảo Kim - Hà Nội</option>
                        <option value="323">----Bảo Kim - Hồ Chí Minh</option>
                        <option value="324">--Công ty cổ phần Nhanh.vn</option>
                        <option value="1">----Nhanh.vn</option>
                        <option value="366">----Nhanh.vn Đà Nẵng</option>
                        <option value="395">----Nhanh.vn HCM</option>
                        <option value="379">--Westay</option>
                        <option value="384">--Công ty cổ phần WeHelp</option>
                        <option value="398">--WeLove</option>
                    </select></div>
                <div class="form-group"><input type="text" name="name" maxlength="255"
                        placeholder="Tên mẫu" id="name" class="form-control" value=""></div>
                <div class="form-group"><input name="submit" type="submit"
                        id="btnFilterCrmCampaign" class="form-control btn btn-primary"
                        value="Lọc"></div>
            </form>
        </div>
    </div>
    <div class="widget widget-table">
        <div class="widget-header">
            <h3><i class="fa fa-table"></i> Danh sách mẫu in</h3>
        </div>
        <div class="dgContainer widget-content table-responsive">
            <div style="display: none; width: 1534px;" class="stickyHeader">
                <table class="table table-bordered" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr class="even">
                            <th style="width: 97px;">ID</th>
                            <th style="width: 383px;">Tên công ty</th>
                            <th style="width: 869px;">Tên mẫu hợp đồng</th>
                            <th style="width: 94px;">File</th>
                            <th class="colControls" title="Thao tác" style="width: 90px;"><i
                                    class="fa fa-cogs"></i></th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 dgButtons"><a
                        href="{{ route('get.crm.contract.addTemplate') }}"
                        class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Thêm mẫu
                        in</a></div>
                <div class="col-md-6 paginatorItem">
                    <div class="paginator"><span class="labelPages">1 - 20 / 183</span><span
                            class="disabled fa fa-step-backward"></span><span
                            class="disabled fa fa-backward"></span><a class="fa fa-forward"
                            href="https://erp.nhanh.vn/crm/contract/template?page=2"
                            title="Trang sau"></a> <a class="fa fa-step-forward"
                            href="https://erp.nhanh.vn/crm/contract/template?page=10"
                            title="Trang cuối"></a></div>
                </div>
                <div style="clear: both;"></div><br>
            </div>
            <table id="dgDocument" class="table table-bordered">
                <thead>
                    <tr class="even">
                        <th>ID</th>
                        <th>Tên công ty</th>
                        <th>Tên mẫu hợp đồng</th>
                        <th>File</th>
                        <th class="colControls" title="Thao tác"><i class="fa fa-cogs"></i></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($templates as $template)
                        <tr class="">
                            <td>{{ $template->id }}</td>
                            <td>{{ $template->company->name }}</td>
                            <td>
                                <a data-toggle="tooltip" data-original-title="Nguyễn Văn Hưng"
                                    class="text-info"
                                    href="https://erp.nhanh.vn/crm/contract/preview?id=900">
                                    {{ $template->name }}
                                </a>
                            </td>
                            <td>
                                <a class="fa fa-download fa-lg"
                                    href="{{ route('get.crm.contract.downloadTemplate',['template_id' => $template->id]) }}">
                                </a>
                            </td>
                            <td class="colControls">
                                <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                        data-toggle="dropdown"></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a
                                                href="https://erp.nhanh.vn/crm/contract/edittemplate?id=900">Sửa</a>
                                        </li>
                                        <li><a class="deleteTemplate" data-id="900">Xóa</a></li>
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
                    <div class="paginator"><span class="labelPages">1 - 20 / 183</span><span
                            class="disabled fa fa-step-backward"></span><span
                            class="disabled fa fa-backward"></span><a class="fa fa-forward"
                            href="https://erp.nhanh.vn/crm/contract/template?page=2"
                            title="Trang sau"></a> <a class="fa fa-step-forward"
                            href="https://erp.nhanh.vn/crm/contract/template?page=10"
                            title="Trang cuối"></a></div>
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
    <script type="text/javascript" src="{{ asset('js/crm/contract/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/contract/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/contract/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/contract/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/contract/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/contract/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/contract/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/contract/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/contract/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('js/crm/contract/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('js/crm/contract/template.js') }}"></script>
@endsection