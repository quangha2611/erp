@extends('Layout.master')

@section('title','ERP-Danh hợp đồng hết hạn')

@section('css')
    <link href=".{{ asset('asset/css/contract/bootstrap-multiselect.css') }}" media="screen" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="{{ asset('asset/css/contract/style.css') }}" type="text/css">
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
                                        href="{{ route('contractAddTemplate') }}"
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
                                    <tr class="">
                                        <td>900</td>
                                        <td>123job.vn</td>
                                        <td><a data-toggle="tooltip" data-original-title="Nguyễn Văn Hưng"
                                                class="text-info"
                                                href="https://erp.nhanh.vn/crm/contract/preview?id=900">Bảng giá
                                                dịch vụ</a></td>
                                        <td><a class="fa fa-download fa-lg"
                                                href="https://erp.nhanh.vn/home/media/download?type=6&amp;f=3093"></a>
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
                                    <tr class="even">
                                        <td>899</td>
                                        <td>123job.vn</td>
                                        <td><a data-toggle="tooltip" data-original-title="Cao Ngọc Khánh My"
                                                class="text-info"
                                                href="https://erp.nhanh.vn/crm/contract/preview?id=899">Mẫu Hợp
                                                đồng dịch vụ 123job (1.7.2020)</a></td>
                                        <td><a class="fa fa-download fa-lg"
                                                href="https://erp.nhanh.vn/home/media/download?type=6&amp;f=3092"></a>
                                        </td>
                                        <td class="colControls">
                                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                                    data-toggle="dropdown"></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a
                                                            href="https://erp.nhanh.vn/crm/contract/edittemplate?id=899">Sửa</a>
                                                    </li>
                                                    <li><a class="deleteTemplate" data-id="899">Xóa</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td>888</td>
                                        <td>Nhanh.vn</td>
                                        <td><a data-toggle="tooltip" data-original-title="Nguyễn Thị Tú Anh"
                                                class="text-info"
                                                href="https://erp.nhanh.vn/crm/contract/preview?id=888">HĐ đại
                                                lý của Nhanh.vn - HN (19/06/2020)</a></td>
                                        <td><a class="fa fa-download fa-lg"
                                                href="https://erp.nhanh.vn/home/media/download?type=6&amp;f=3053"></a>
                                        </td>
                                        <td class="colControls">
                                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                                    data-toggle="dropdown"></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a
                                                            href="https://erp.nhanh.vn/crm/contract/edittemplate?id=888">Sửa</a>
                                                    </li>
                                                    <li><a class="deleteTemplate" data-id="888">Xóa</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td>887</td>
                                        <td>Vật giá - Hồ Chí Minh</td>
                                        <td><a data-toggle="tooltip" data-original-title="Tạ Thị Thùy Linh"
                                                class="text-info"
                                                href="https://erp.nhanh.vn/crm/contract/preview?id=887">HĐ SEO
                                                banner khối kinh doanh độc lập HCM 2020</a></td>
                                        <td><a class="fa fa-download fa-lg"
                                                href="https://erp.nhanh.vn/home/media/download?type=6&amp;f=3028"></a>
                                        </td>
                                        <td class="colControls">
                                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                                    data-toggle="dropdown"></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a
                                                            href="https://erp.nhanh.vn/crm/contract/edittemplate?id=887">Sửa</a>
                                                    </li>
                                                    <li><a class="deleteTemplate" data-id="887">Xóa</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td>886</td>
                                        <td>Vật giá - Hồ Chí Minh</td>
                                        <td><a data-toggle="tooltip" data-original-title="Tạ Thị Thùy Linh"
                                                class="text-info"
                                                href="https://erp.nhanh.vn/crm/contract/preview?id=886">HĐ GHĐB-
                                                khối kinh doanh độc lập HCM 2020</a></td>
                                        <td><a class="fa fa-download fa-lg"
                                                href="https://erp.nhanh.vn/home/media/download?type=6&amp;f=3024"></a>
                                        </td>
                                        <td class="colControls">
                                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                                    data-toggle="dropdown"></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a
                                                            href="https://erp.nhanh.vn/crm/contract/edittemplate?id=886">Sửa</a>
                                                    </li>
                                                    <li><a class="deleteTemplate" data-id="886">Xóa</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td>885</td>
                                        <td>Vật giá - Hồ Chí Minh</td>
                                        <td><a data-toggle="tooltip" data-original-title="Tạ Thị Thùy Linh"
                                                class="text-info"
                                                href="https://erp.nhanh.vn/crm/contract/preview?id=885">Hợp đồng
                                                GHĐB nạp tiền dự án khối độc lập- HCM</a></td>
                                        <td><a class="fa fa-download fa-lg"
                                                href="https://erp.nhanh.vn/home/media/download?type=6&amp;f=3025"></a>
                                        </td>
                                        <td class="colControls">
                                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                                    data-toggle="dropdown"></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a
                                                            href="https://erp.nhanh.vn/crm/contract/edittemplate?id=885">Sửa</a>
                                                    </li>
                                                    <li><a class="deleteTemplate" data-id="885">Xóa</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td>884</td>
                                        <td>Vật giá - Hồ Chí Minh</td>
                                        <td><a data-toggle="tooltip" data-original-title="Tạ Thị Thùy Linh"
                                                class="text-info"
                                                href="https://erp.nhanh.vn/crm/contract/preview?id=884">Hợp đồng
                                                NẠP Tiền khối độc lập- HCM</a></td>
                                        <td><a class="fa fa-download fa-lg"
                                                href="https://erp.nhanh.vn/home/media/download?type=6&amp;f=3026"></a>
                                        </td>
                                        <td class="colControls">
                                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                                    data-toggle="dropdown"></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a
                                                            href="https://erp.nhanh.vn/crm/contract/edittemplate?id=884">Sửa</a>
                                                    </li>
                                                    <li><a class="deleteTemplate" data-id="884">Xóa</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td>883</td>
                                        <td>Nhanh.vn Đà Nẵng</td>
                                        <td><a data-toggle="tooltip" data-original-title="Nguyễn Thị Tú Anh"
                                                class="text-info"
                                                href="https://erp.nhanh.vn/crm/contract/preview?id=883">Hợp đồng
                                                SMS - ĐN (11/062020)</a></td>
                                        <td><a class="fa fa-download fa-lg"
                                                href="https://erp.nhanh.vn/home/media/download?type=6&amp;f=3103"></a>
                                        </td>
                                        <td class="colControls">
                                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                                    data-toggle="dropdown"></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a
                                                            href="https://erp.nhanh.vn/crm/contract/edittemplate?id=883">Sửa</a>
                                                    </li>
                                                    <li><a class="deleteTemplate" data-id="883">Xóa</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td>882</td>
                                        <td>Vật giá - Hồ Chí Minh</td>
                                        <td><a data-toggle="tooltip" data-original-title="Nguyễn Thị Tú Anh"
                                                class="text-info"
                                                href="https://erp.nhanh.vn/crm/contract/preview?id=882">Hợp đồng
                                                SMS - HCM (25/5/2020)</a></td>
                                        <td><a class="fa fa-download fa-lg"
                                                href="https://erp.nhanh.vn/home/media/download?type=6&amp;f=3104"></a>
                                        </td>
                                        <td class="colControls">
                                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                                    data-toggle="dropdown"></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a
                                                            href="https://erp.nhanh.vn/crm/contract/edittemplate?id=882">Sửa</a>
                                                    </li>
                                                    <li><a class="deleteTemplate" data-id="882">Xóa</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td>881</td>
                                        <td>Nhanh.vn</td>
                                        <td><a data-toggle="tooltip" data-original-title="Nguyễn Thị Tú Anh"
                                                class="text-info"
                                                href="https://erp.nhanh.vn/crm/contract/preview?id=881">Hợp đồng
                                                SMS - HN (25/5/2020)</a></td>
                                        <td><a class="fa fa-download fa-lg"
                                                href="https://erp.nhanh.vn/home/media/download?type=6&amp;f=3105"></a>
                                        </td>
                                        <td class="colControls">
                                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                                    data-toggle="dropdown"></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a
                                                            href="https://erp.nhanh.vn/crm/contract/edittemplate?id=881">Sửa</a>
                                                    </li>
                                                    <li><a class="deleteTemplate" data-id="881">Xóa</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>880</td>
                                        <td>Nhanh.vn Đà Nẵng</td>
                                        <td><a data-toggle="tooltip" data-original-title="Nguyễn Thị Tú Anh"
                                                class="text-info"
                                                href="https://erp.nhanh.vn/crm/contract/preview?id=880">HĐ đăng
                                                ký tên miền - ĐN (11/062020)</a></td>
                                        <td><a class="fa fa-download fa-lg"
                                                href="https://erp.nhanh.vn/home/media/download?type=6&amp;f=3034"></a>
                                        </td>
                                        <td class="colControls">
                                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                                    data-toggle="dropdown"></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a
                                                            href="https://erp.nhanh.vn/crm/contract/edittemplate?id=880">Sửa</a>
                                                    </li>
                                                    <li><a class="deleteTemplate" data-id="880">Xóa</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td>879</td>
                                        <td>Vật giá - Hồ Chí Minh</td>
                                        <td><a data-toggle="tooltip" data-original-title="Nguyễn Thị Tú Anh"
                                                class="text-info"
                                                href="https://erp.nhanh.vn/crm/contract/preview?id=879">HĐ đăng
                                                ký tên miền - HCM (18.05.2020)</a></td>
                                        <td><a class="fa fa-download fa-lg"
                                                href="https://erp.nhanh.vn/home/media/download?type=6&amp;f=2966"></a>
                                        </td>
                                        <td class="colControls">
                                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                                    data-toggle="dropdown"></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a
                                                            href="https://erp.nhanh.vn/crm/contract/edittemplate?id=879">Sửa</a>
                                                    </li>
                                                    <li><a class="deleteTemplate" data-id="879">Xóa</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>878</td>
                                        <td>Nhanh.vn</td>
                                        <td><a data-toggle="tooltip" data-original-title="Nguyễn Thị Tú Anh"
                                                class="text-info"
                                                href="https://erp.nhanh.vn/crm/contract/preview?id=878">HĐ đăng
                                                ký tên miền - HN (12/5/2020)</a></td>
                                        <td><a class="fa fa-download fa-lg"
                                                href="https://erp.nhanh.vn/home/media/download?type=6&amp;f=3000"></a>
                                        </td>
                                        <td class="colControls">
                                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                                    data-toggle="dropdown"></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a
                                                            href="https://erp.nhanh.vn/crm/contract/edittemplate?id=878">Sửa</a>
                                                    </li>
                                                    <li><a class="deleteTemplate" data-id="878">Xóa</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td>877</td>
                                        <td>Vật giá - Hồ Chí Minh</td>
                                        <td><a data-toggle="tooltip" data-original-title="Nguyễn Thị Tú Anh"
                                                class="text-info"
                                                href="https://erp.nhanh.vn/crm/contract/preview?id=877">HĐ SEO
                                                MAPS - HCM (17/07/2020)</a></td>
                                        <td><a class="fa fa-download fa-lg"
                                                href="https://erp.nhanh.vn/home/media/download?type=6&amp;f=3102"></a>
                                        </td>
                                        <td class="colControls">
                                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                                    data-toggle="dropdown"></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a
                                                            href="https://erp.nhanh.vn/crm/contract/edittemplate?id=877">Sửa</a>
                                                    </li>
                                                    <li><a class="deleteTemplate" data-id="877">Xóa</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td>876</td>
                                        <td>Nhanh.vn Đà Nẵng</td>
                                        <td><a data-toggle="tooltip" data-original-title="Nguyễn Thị Tú Anh"
                                                class="text-info"
                                                href="https://erp.nhanh.vn/crm/contract/preview?id=876">HĐ SEO
                                                MAPS - ĐN (17/07/2020)</a></td>
                                        <td><a class="fa fa-download fa-lg"
                                                href="https://erp.nhanh.vn/home/media/download?type=6&amp;f=3101"></a>
                                        </td>
                                        <td class="colControls">
                                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                                    data-toggle="dropdown"></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a
                                                            href="https://erp.nhanh.vn/crm/contract/edittemplate?id=876">Sửa</a>
                                                    </li>
                                                    <li><a class="deleteTemplate" data-id="876">Xóa</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td>875</td>
                                        <td>Nhanh.vn</td>
                                        <td><a data-toggle="tooltip" data-original-title="Nguyễn Thị Tú Anh"
                                                class="text-info"
                                                href="https://erp.nhanh.vn/crm/contract/preview?id=875">HĐ SEO
                                                MAPS - HN (17/07/2020)</a></td>
                                        <td><a class="fa fa-download fa-lg"
                                                href="https://erp.nhanh.vn/home/media/download?type=6&amp;f=3100"></a>
                                        </td>
                                        <td class="colControls">
                                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                                    data-toggle="dropdown"></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a
                                                            href="https://erp.nhanh.vn/crm/contract/edittemplate?id=875">Sửa</a>
                                                    </li>
                                                    <li><a class="deleteTemplate" data-id="875">Xóa</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>873</td>
                                        <td>Nhanh.vn Đà Nẵng</td>
                                        <td><a data-toggle="tooltip" data-original-title="Nguyễn Thị Tú Anh"
                                                class="text-info"
                                                href="https://erp.nhanh.vn/crm/contract/preview?id=873">HĐ chăm
                                                sóc website - ĐN (23/7/2020)</a></td>
                                        <td><a class="fa fa-download fa-lg"
                                                href="https://erp.nhanh.vn/home/media/download?type=6&amp;f=3112"></a>
                                        </td>
                                        <td class="colControls">
                                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                                    data-toggle="dropdown"></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a
                                                            href="https://erp.nhanh.vn/crm/contract/edittemplate?id=873">Sửa</a>
                                                    </li>
                                                    <li><a class="deleteTemplate" data-id="873">Xóa</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td>872</td>
                                        <td>Nhanh.vn Đà Nẵng</td>
                                        <td><a data-toggle="tooltip" data-original-title="Nguyễn Thị Tú Anh"
                                                class="text-info"
                                                href="https://erp.nhanh.vn/crm/contract/preview?id=872">HĐ nhập
                                                liệu website - ĐN (11/062020)</a></td>
                                        <td><a class="fa fa-download fa-lg"
                                                href="https://erp.nhanh.vn/home/media/download?type=6&amp;f=3060"></a>
                                        </td>
                                        <td class="colControls">
                                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                                    data-toggle="dropdown"></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a
                                                            href="https://erp.nhanh.vn/crm/contract/edittemplate?id=872">Sửa</a>
                                                    </li>
                                                    <li><a class="deleteTemplate" data-id="872">Xóa</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>871</td>
                                        <td>Nhanh.vn Đà Nẵng</td>
                                        <td><a data-toggle="tooltip" data-original-title="Nguyễn Thị Tú Anh"
                                                class="text-info"
                                                href="https://erp.nhanh.vn/crm/contract/preview?id=871">Hợp đồng
                                                chăm sóc fanpage - ĐN (11/062020)</a></td>
                                        <td><a class="fa fa-download fa-lg"
                                                href="https://erp.nhanh.vn/home/media/download?type=6&amp;f=3057"></a>
                                        </td>
                                        <td class="colControls">
                                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                                    data-toggle="dropdown"></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a
                                                            href="https://erp.nhanh.vn/crm/contract/edittemplate?id=871">Sửa</a>
                                                    </li>
                                                    <li><a class="deleteTemplate" data-id="871">Xóa</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td>870</td>
                                        <td>Nhanh.vn Đà Nẵng</td>
                                        <td><a data-toggle="tooltip" data-original-title="Nguyễn Thị Tú Anh"
                                                class="text-info"
                                                href="https://erp.nhanh.vn/crm/contract/preview?id=870">Hợp đồng
                                                Quảng cáo fanpage - ĐN (11/062020)</a></td>
                                        <td><a class="fa fa-download fa-lg"
                                                href="https://erp.nhanh.vn/home/media/download?type=6&amp;f=3039"></a>
                                        </td>
                                        <td class="colControls">
                                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                                    data-toggle="dropdown"></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a
                                                            href="https://erp.nhanh.vn/crm/contract/edittemplate?id=870">Sửa</a>
                                                    </li>
                                                    <li><a class="deleteTemplate" data-id="870">Xóa</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
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
                <!-- Dialog bootstrap -->
                <div id="myModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">×</button>
                                <h4 class="modal-title">Thông báo</h4>
                            </div>
                            <div class="modal-body"></div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary confirm">Xác nhận</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="alertModal" class="modal fade">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">×</button>
                                <h4 class="modal-title">Thông báo</h4>
                            </div>
                            <div class="modal-body">

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default reload"
                                    data-dismiss="modal">Đóng</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="announcementModel" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Thông báo</h4>
                </div>
                <div class="modal-body">
                    <div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default close-announcementModel"
                        data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>
    <div class="nn-dialog" id="nn-dialog">
        <div class="nn-body">
            <div class="nn-container-link">
                <div class="nn-icon">
                    <i class="fa fa-bell"></i>
                </div>
                <div class="nn-content">
                    <div class="nn-content-title"></div>
                    <div class="nn-content-body"></div>
                    <div class="nn-content-description text-muted">

                    </div>
                </div>
            </div>
            <div class="nn-control">
                <a class="fa fa-times text-muted nn-dislog-close"></a>
@endsection

@section('js')
    <script type="text/javascript">
        var usrCnf = {
            language: 'vi'
        };
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/contract/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/contract/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/contract/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/contract/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/contract/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/contract/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/contract/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/contract/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/contract/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/contract/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/contract/productexpired.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/contract/bootstrap-multiselect.js') }}"></script>

@endsection
    