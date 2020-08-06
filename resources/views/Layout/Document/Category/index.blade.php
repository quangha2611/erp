@extends('Layout.master3')

@section('css')
    <link rel="stylesheet" href="{{ asset('asset/css/document/document/style.css') }}" type="text/css">
@endsection

@section('title','ERP-Danh sách danh mục tài liệu')

@section('content-page')
    
    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/document/category/index">Danh sách danh mục tài
                    liệu</a></li>
        </ul>
        <div id="page-crm-contact">
            <div class="filterContainer">
                <form method="GET" name="documentIndexFilter" class="form-inline" role="form"
                    id="documentIndexFilter">
                    <div class="form-group"><input type="text" name="id" maxlength="10"
                            placeholder="ID" id="id" class="form-control" value=""></div>
                    <div class="form-group"><input type="text" name="name" maxlength="255"
                            placeholder="Tên" id="name" class="form-control" value=""></div>
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
                    <div class="form-group"><select name="departmentId" id="departmentId"
                            class="form-control">
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
                <div class="col-md-6 dgButtons"><a href="{{ route('documentCategoryAdd') }}"
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
                    <tr class="">
                        <td class="colCheckbox"><input id="1" class="cb orderCb" type="checkbox">
                        </td>
                        <td><span data-toggle="tooltip" data-title="parentId: ">1</span></td>
                        <td>Nhanh.vn</td>
                        <td></td>
                        <td style="padding-left: 10px;"><a
                                href="https://erp.nhanh.vn/document/document/index?name=&amp;companyId=1&amp;categoryId=1&amp;submit=L%E1%BB%8Dc">Hướng
                                dẫn sử dụng phần mềm bán hàng</a></td>
                        <td>13</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/document/category/edit?id=1"><i
                                                class="fa fa-edit"
                                                style="margin-right:7px;margin-left:2px"></i>Sửa
                                            danh mục</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/category/index#"
                                            class="deleteCat" value="1"><i class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá danh mục</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input id="3446" class="cb orderCb" type="checkbox">
                        </td>
                        <td><span data-toggle="tooltip" data-title="parentId: ">3446</span></td>
                        <td>VNP group</td>
                        <td></td>
                        <td style="padding-left: 10px;"><a
                                href="https://erp.nhanh.vn/document/document/index?name=&amp;companyId=10&amp;categoryId=3446&amp;submit=L%E1%BB%8Dc">TỔNG
                                QUAN VỀ VNP GROUP</a></td>
                        <td></td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/document/category/edit?id=3446"><i
                                                class="fa fa-edit"
                                                style="margin-right:7px;margin-left:2px"></i>Sửa
                                            danh mục</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/category/index#"
                                            class="deleteCat" value="3446"><i class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá danh mục</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="colCheckbox"><input id="3509" class="cb orderCb" type="checkbox">
                        </td>
                        <td><span data-toggle="tooltip" data-title="parentId: 3446">3509</span></td>
                        <td>VNP group</td>
                        <td></td>
                        <td style="padding-left: 50px;"><a
                                href="https://erp.nhanh.vn/document/document/index?name=&amp;companyId=10&amp;categoryId=3509&amp;submit=L%E1%BB%8Dc">Bài
                                viết về VNP Group</a></td>
                        <td>8</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/document/category/edit?id=3509"><i
                                                class="fa fa-edit"
                                                style="margin-right:7px;margin-left:2px"></i>Sửa
                                            danh mục</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/category/index#"
                                            class="deleteCat" value="3509"><i class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá danh mục</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input id="3510" class="cb orderCb" type="checkbox">
                        </td>
                        <td><span data-toggle="tooltip" data-title="parentId: 3446">3510</span></td>
                        <td>VNP group</td>
                        <td></td>
                        <td style="padding-left: 50px;"><a
                                href="https://erp.nhanh.vn/document/document/index?name=&amp;companyId=10&amp;categoryId=3510&amp;submit=L%E1%BB%8Dc">Tiêu
                                chuẩn con người VNP</a></td>
                        <td>8</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/document/category/edit?id=3510"><i
                                                class="fa fa-edit"
                                                style="margin-right:7px;margin-left:2px"></i>Sửa
                                            danh mục</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/category/index#"
                                            class="deleteCat" value="3510"><i class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá danh mục</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="colCheckbox"><input id="3449" class="cb orderCb" type="checkbox">
                        </td>
                        <td><span data-toggle="tooltip" data-title="parentId: ">3449</span></td>
                        <td>Công ty cổ phần Vật Giá Việt Nam</td>
                        <td></td>
                        <td style="padding-left: 10px;"><a
                                href="https://erp.nhanh.vn/document/document/index?name=&amp;companyId=2&amp;categoryId=3449&amp;submit=L%E1%BB%8Dc">Vatgia.com
                                - Tài liệu cho Kinh doanh/Chăm sóc ...</a></td>
                        <td>2</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/document/category/edit?id=3449"><i
                                                class="fa fa-edit"
                                                style="margin-right:7px;margin-left:2px"></i>Sửa
                                            danh mục</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/category/index#"
                                            class="deleteCat" value="3449"><i class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá danh mục</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input id="3462" class="cb orderCb" type="checkbox">
                        </td>
                        <td><span data-toggle="tooltip" data-title="parentId: ">3462</span></td>
                        <td>Vật giá - Hồ Chí Minh</td>
                        <td>Bộ phận Hành chính nhân sự HCM</td>
                        <td style="padding-left: 10px;"><a
                                href="https://erp.nhanh.vn/document/document/index?name=&amp;companyId=319&amp;categoryId=3462&amp;submit=L%E1%BB%8Dc">HÌNH
                                NHÂN VIÊN</a></td>
                        <td></td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/document/category/edit?id=3462"><i
                                                class="fa fa-edit"
                                                style="margin-right:7px;margin-left:2px"></i>Sửa
                                            danh mục</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/category/index#"
                                            class="deleteCat" value="3462"><i class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá danh mục</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input id="3466" class="cb orderCb" type="checkbox">
                        </td>
                        <td><span data-toggle="tooltip" data-title="parentId: ">3466</span></td>
                        <td>Vật giá - Hồ Chí Minh</td>
                        <td>Bộ phận Hành chính nhân sự HCM</td>
                        <td style="padding-left: 10px;"><a
                                href="https://erp.nhanh.vn/document/document/index?name=&amp;companyId=319&amp;categoryId=3466&amp;submit=L%E1%BB%8Dc">Nội
                                quy Công ty</a></td>
                        <td></td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/document/category/edit?id=3466"><i
                                                class="fa fa-edit"
                                                style="margin-right:7px;margin-left:2px"></i>Sửa
                                            danh mục</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/category/index#"
                                            class="deleteCat" value="3466"><i class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá danh mục</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input id="3487" class="cb orderCb" type="checkbox">
                        </td>
                        <td><span data-toggle="tooltip" data-title="parentId: ">3487</span></td>
                        <td>Vật giá - Hồ Chí Minh</td>
                        <td></td>
                        <td style="padding-left: 10px;"><a
                                href="https://erp.nhanh.vn/document/document/index?name=&amp;companyId=319&amp;categoryId=3487&amp;submit=L%E1%BB%8Dc">KSNB</a>
                        </td>
                        <td>13</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/document/category/edit?id=3487"><i
                                                class="fa fa-edit"
                                                style="margin-right:7px;margin-left:2px"></i>Sửa
                                            danh mục</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/category/index#"
                                            class="deleteCat" value="3487"><i class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá danh mục</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input id="3495" class="cb orderCb" type="checkbox">
                        </td>
                        <td><span data-toggle="tooltip" data-title="parentId: ">3495</span></td>
                        <td>VNP group</td>
                        <td></td>
                        <td style="padding-left: 10px;"><a
                                href="https://erp.nhanh.vn/document/document/index?name=&amp;companyId=10&amp;categoryId=3495&amp;submit=L%E1%BB%8Dc">NỘI
                                QUY - QUY ĐỊNH - QUY TRÌNH</a></td>
                        <td>1</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/document/category/edit?id=3495"><i
                                                class="fa fa-edit"
                                                style="margin-right:7px;margin-left:2px"></i>Sửa
                                            danh mục</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/category/index#"
                                            class="deleteCat" value="3495"><i class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá danh mục</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input id="3506" class="cb orderCb" type="checkbox">
                        </td>
                        <td><span data-toggle="tooltip" data-title="parentId: 3495">3506</span></td>
                        <td>VNP group</td>
                        <td></td>
                        <td style="padding-left: 50px;"><a
                                href="https://erp.nhanh.vn/document/document/index?name=&amp;companyId=10&amp;categoryId=3506&amp;submit=L%E1%BB%8Dc">Quy
                                trình hoạt động</a></td>
                        <td>14</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/document/category/edit?id=3506"><i
                                                class="fa fa-edit"
                                                style="margin-right:7px;margin-left:2px"></i>Sửa
                                            danh mục</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/category/index#"
                                            class="deleteCat" value="3506"><i class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá danh mục</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input id="3503" class="cb orderCb" type="checkbox">
                        </td>
                        <td><span data-toggle="tooltip" data-title="parentId: 3495">3503</span></td>
                        <td>VNP group</td>
                        <td></td>
                        <td style="padding-left: 50px;"><a
                                href="https://erp.nhanh.vn/document/document/index?name=&amp;companyId=10&amp;categoryId=3503&amp;submit=L%E1%BB%8Dc">Nội
                                quy lao động</a></td>
                        <td>3</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/document/category/edit?id=3503"><i
                                                class="fa fa-edit"
                                                style="margin-right:7px;margin-left:2px"></i>Sửa
                                            danh mục</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/category/index#"
                                            class="deleteCat" value="3503"><i class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá danh mục</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input id="3505" class="cb orderCb" type="checkbox">
                        </td>
                        <td><span data-toggle="tooltip" data-title="parentId: 3495">3505</span></td>
                        <td>VNP group</td>
                        <td></td>
                        <td style="padding-left: 50px;"><a
                                href="https://erp.nhanh.vn/document/document/index?name=&amp;companyId=10&amp;categoryId=3505&amp;submit=L%E1%BB%8Dc">Quy
                                định bổ sung</a></td>
                        <td>17</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/document/category/edit?id=3505"><i
                                                class="fa fa-edit"
                                                style="margin-right:7px;margin-left:2px"></i>Sửa
                                            danh mục</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/category/index#"
                                            class="deleteCat" value="3505"><i class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá danh mục</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input id="3440" class="cb orderCb" type="checkbox">
                        </td>
                        <td><span data-toggle="tooltip" data-title="parentId: ">3440</span></td>
                        <td>Công ty cổ phần Vật Giá Việt Nam</td>
                        <td></td>
                        <td style="padding-left: 10px;"><a
                                href="https://erp.nhanh.vn/document/document/index?name=&amp;companyId=2&amp;categoryId=3440&amp;submit=L%E1%BB%8Dc">Biểu
                                mẫu</a></td>
                        <td>1</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/document/category/edit?id=3440"><i
                                                class="fa fa-edit"
                                                style="margin-right:7px;margin-left:2px"></i>Sửa
                                            danh mục</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/category/index#"
                                            class="deleteCat" value="3440"><i class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá danh mục</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input id="3518" class="cb orderCb" type="checkbox">
                        </td>
                        <td><span data-toggle="tooltip" data-title="parentId: ">3518</span></td>
                        <td>Nhanh.vn</td>
                        <td></td>
                        <td style="padding-left: 10px;"><a
                                href="https://erp.nhanh.vn/document/document/index?name=&amp;companyId=1&amp;categoryId=3518&amp;submit=L%E1%BB%8Dc">Mẫu
                                HĐ</a></td>
                        <td></td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/document/category/edit?id=3518"><i
                                                class="fa fa-edit"
                                                style="margin-right:7px;margin-left:2px"></i>Sửa
                                            danh mục</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/category/index#"
                                            class="deleteCat" value="3518"><i class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá danh mục</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input id="3519" class="cb orderCb" type="checkbox">
                        </td>
                        <td><span data-toggle="tooltip" data-title="parentId: ">3519</span></td>
                        <td>Vật giá - Hồ Chí Minh</td>
                        <td>NHANH.VN HCM</td>
                        <td style="padding-left: 10px;"><a
                                href="https://erp.nhanh.vn/document/document/index?name=&amp;companyId=319&amp;categoryId=3519&amp;submit=L%E1%BB%8Dc">Mẫu
                                hợp đồng Nhanh</a></td>
                        <td></td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/document/category/edit?id=3519"><i
                                                class="fa fa-edit"
                                                style="margin-right:7px;margin-left:2px"></i>Sửa
                                            danh mục</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/category/index#"
                                            class="deleteCat" value="3519"><i class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá danh mục</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input id="3521" class="cb orderCb" type="checkbox">
                        </td>
                        <td><span data-toggle="tooltip" data-title="parentId: ">3521</span></td>
                        <td>Nhanh.vn</td>
                        <td></td>
                        <td style="padding-left: 10px;"><a
                                href="https://erp.nhanh.vn/document/document/index?name=&amp;companyId=1&amp;categoryId=3521&amp;submit=L%E1%BB%8Dc">Giấy
                                tờ công ty</a></td>
                        <td></td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/document/category/edit?id=3521"><i
                                                class="fa fa-edit"
                                                style="margin-right:7px;margin-left:2px"></i>Sửa
                                            danh mục</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/category/index#"
                                            class="deleteCat" value="3521"><i class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá danh mục</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input id="47" class="cb orderCb" type="checkbox">
                        </td>
                        <td><span data-toggle="tooltip" data-title="parentId: ">47</span></td>
                        <td>Nhanh.vn</td>
                        <td></td>
                        <td style="padding-left: 10px;"><a
                                href="https://erp.nhanh.vn/document/document/index?name=&amp;companyId=1&amp;categoryId=47&amp;submit=L%E1%BB%8Dc">Gặp
                                mặt KH - Gặp khách</a></td>
                        <td>4</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/document/category/edit?id=47"><i
                                                class="fa fa-edit"
                                                style="margin-right:7px;margin-left:2px"></i>Sửa
                                            danh mục</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/category/index#"
                                            class="deleteCat" value="47"><i class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá danh mục</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input id="2" class="cb orderCb" type="checkbox">
                        </td>
                        <td><span data-toggle="tooltip" data-title="parentId: ">2</span></td>
                        <td>Nhanh.vn</td>
                        <td></td>
                        <td style="padding-left: 10px;"><a
                                href="https://erp.nhanh.vn/document/document/index?name=&amp;companyId=1&amp;categoryId=2&amp;submit=L%E1%BB%8Dc">Đào
                                tạo kĩ năng mềm</a></td>
                        <td>7</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/document/category/edit?id=2"><i
                                                class="fa fa-edit"
                                                style="margin-right:7px;margin-left:2px"></i>Sửa
                                            danh mục</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/category/index#"
                                            class="deleteCat" value="2"><i class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá danh mục</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input id="4" class="cb orderCb" type="checkbox">
                        </td>
                        <td><span data-toggle="tooltip" data-title="parentId: ">4</span></td>
                        <td>Nhanh.vn</td>
                        <td></td>
                        <td style="padding-left: 10px;"><a
                                href="https://erp.nhanh.vn/document/document/index?name=&amp;companyId=1&amp;categoryId=4&amp;submit=L%E1%BB%8Dc">Đào
                                tạo về sản phẩm</a></td>
                        <td>20</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/document/category/edit?id=4"><i
                                                class="fa fa-edit"
                                                style="margin-right:7px;margin-left:2px"></i>Sửa
                                            danh mục</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/category/index#"
                                            class="deleteCat" value="4"><i class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá danh mục</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input id="10" class="cb orderCb" type="checkbox">
                        </td>
                        <td><span data-toggle="tooltip" data-title="parentId: ">10</span></td>
                        <td>Nhanh.vn</td>
                        <td></td>
                        <td style="padding-left: 10px;"><a
                                href="https://erp.nhanh.vn/document/document/index?name=&amp;companyId=1&amp;categoryId=10&amp;submit=L%E1%BB%8Dc">Hướng
                                dẫn sử dụng ERP</a></td>
                        <td>2</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/document/category/edit?id=10"><i
                                                class="fa fa-edit"
                                                style="margin-right:7px;margin-left:2px"></i>Sửa
                                            danh mục</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/category/index#"
                                            class="deleteCat" value="10"><i class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá danh mục</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input id="41" class="cb orderCb" type="checkbox">
                        </td>
                        <td><span data-toggle="tooltip" data-title="parentId: ">41</span></td>
                        <td>Nhanh.vn</td>
                        <td></td>
                        <td style="padding-left: 10px;"><a
                                href="https://erp.nhanh.vn/document/document/index?name=&amp;companyId=1&amp;categoryId=41&amp;submit=L%E1%BB%8Dc">Tổng
                                quan Nhanh.vn</a></td>
                        <td>3</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/document/category/edit?id=41"><i
                                                class="fa fa-edit"
                                                style="margin-right:7px;margin-left:2px"></i>Sửa
                                            danh mục</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/category/index#"
                                            class="deleteCat" value="41"><i class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá danh mục</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input id="3520" class="cb orderCb" type="checkbox">
                        </td>
                        <td><span data-toggle="tooltip" data-title="parentId: 41">3520</span></td>
                        <td>Nhanh.vn</td>
                        <td></td>
                        <td style="padding-left: 50px;"><a
                                href="https://erp.nhanh.vn/document/document/index?name=&amp;companyId=1&amp;categoryId=3520&amp;submit=L%E1%BB%8Dc">Mẫu
                                HĐ Nhanh</a></td>
                        <td></td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/document/category/edit?id=3520"><i
                                                class="fa fa-edit"
                                                style="margin-right:7px;margin-left:2px"></i>Sửa
                                            danh mục</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/category/index#"
                                            class="deleteCat" value="3520"><i class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá danh mục</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input id="44" class="cb orderCb" type="checkbox">
                        </td>
                        <td><span data-toggle="tooltip" data-title="parentId: ">44</span></td>
                        <td>Nhanh.vn</td>
                        <td></td>
                        <td style="padding-left: 10px;"><a
                                href="https://erp.nhanh.vn/document/document/index?name=&amp;companyId=1&amp;categoryId=44&amp;submit=L%E1%BB%8Dc">Quy
                                trình làm việc của KD hàng ngày</a></td>
                        <td>3</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/document/category/edit?id=44"><i
                                                class="fa fa-edit"
                                                style="margin-right:7px;margin-left:2px"></i>Sửa
                                            danh mục</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/category/index#"
                                            class="deleteCat" value="44"><i class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá danh mục</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input id="45" class="cb orderCb" type="checkbox">
                        </td>
                        <td><span data-toggle="tooltip" data-title="parentId: ">45</span></td>
                        <td>Nhanh.vn</td>
                        <td></td>
                        <td style="padding-left: 10px;"><a
                                href="https://erp.nhanh.vn/document/document/index?name=&amp;companyId=1&amp;categoryId=45&amp;submit=L%E1%BB%8Dc">Tiếp
                                cận khách hàng - Gọi điện</a></td>
                        <td>4</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/document/category/edit?id=45"><i
                                                class="fa fa-edit"
                                                style="margin-right:7px;margin-left:2px"></i>Sửa
                                            danh mục</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/category/index#"
                                            class="deleteCat" value="45"><i class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá danh mục</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input id="46" class="cb orderCb" type="checkbox">
                        </td>
                        <td><span data-toggle="tooltip" data-title="parentId: ">46</span></td>
                        <td>Nhanh.vn</td>
                        <td></td>
                        <td style="padding-left: 10px;"><a
                                href="https://erp.nhanh.vn/document/document/index?name=&amp;companyId=1&amp;categoryId=46&amp;submit=L%E1%BB%8Dc">Tiếp
                                cận khách hàng - Các tài liệu gửi mail</a></td>
                        <td>5</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/document/category/edit?id=46"><i
                                                class="fa fa-edit"
                                                style="margin-right:7px;margin-left:2px"></i>Sửa
                                            danh mục</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/category/index#"
                                            class="deleteCat" value="46"><i class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá danh mục</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input id="3439" class="cb orderCb" type="checkbox">
                        </td>
                        <td><span data-toggle="tooltip" data-title="parentId: ">3439</span></td>
                        <td>Công ty cổ phần Vật Giá Việt Nam</td>
                        <td></td>
                        <td style="padding-left: 10px;"><a
                                href="https://erp.nhanh.vn/document/document/index?name=&amp;companyId=2&amp;categoryId=3439&amp;submit=L%E1%BB%8Dc">Giấy
                                Ủy Quyền 2016</a></td>
                        <td></td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/document/category/edit?id=3439"><i
                                                class="fa fa-edit"
                                                style="margin-right:7px;margin-left:2px"></i>Sửa
                                            danh mục</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/category/index#"
                                            class="deleteCat" value="3439"><i class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá danh mục</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input id="48" class="cb orderCb" type="checkbox">
                        </td>
                        <td><span data-toggle="tooltip" data-title="parentId: ">48</span></td>
                        <td>Nhanh.vn</td>
                        <td></td>
                        <td style="padding-left: 10px;"><a
                                href="https://erp.nhanh.vn/document/document/index?name=&amp;companyId=1&amp;categoryId=48&amp;submit=L%E1%BB%8Dc">Gặp
                                mặt KH - Sale Kit mang đi khi gặp khách trực tiếp</a></td>
                        <td>3</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/document/category/edit?id=48"><i
                                                class="fa fa-edit"
                                                style="margin-right:7px;margin-left:2px"></i>Sửa
                                            danh mục</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/category/index#"
                                            class="deleteCat" value="48"><i class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá danh mục</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input id="49" class="cb orderCb" type="checkbox">
                        </td>
                        <td><span data-toggle="tooltip" data-title="parentId: ">49</span></td>
                        <td>Nhanh.vn</td>
                        <td></td>
                        <td style="padding-left: 10px;"><a
                                href="https://erp.nhanh.vn/document/document/index?name=&amp;companyId=1&amp;categoryId=49&amp;submit=L%E1%BB%8Dc">SMS
                                marketing</a></td>
                        <td>5</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/document/category/edit?id=49"><i
                                                class="fa fa-edit"
                                                style="margin-right:7px;margin-left:2px"></i>Sửa
                                            danh mục</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/category/index#"
                                            class="deleteCat" value="49"><i class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá danh mục</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input id="51" class="cb orderCb" type="checkbox">
                        </td>
                        <td><span data-toggle="tooltip" data-title="parentId: ">51</span></td>
                        <td>Nhanh.vn</td>
                        <td></td>
                        <td style="padding-left: 10px;"><a
                                href="https://erp.nhanh.vn/document/document/index?name=&amp;companyId=1&amp;categoryId=51&amp;submit=L%E1%BB%8Dc">Marketing
                                vatgia</a></td>
                        <td>3</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/document/category/edit?id=51"><i
                                                class="fa fa-edit"
                                                style="margin-right:7px;margin-left:2px"></i>Sửa
                                            danh mục</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/category/index#"
                                            class="deleteCat" value="51"><i class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá danh mục</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input id="52" class="cb orderCb" type="checkbox">
                        </td>
                        <td><span data-toggle="tooltip" data-title="parentId: ">52</span></td>
                        <td>Nhanh.vn</td>
                        <td></td>
                        <td style="padding-left: 10px;"><a
                                href="https://erp.nhanh.vn/document/document/index?name=&amp;companyId=1&amp;categoryId=52&amp;submit=L%E1%BB%8Dc">báo
                                giá dịch vụ</a></td>
                        <td>1</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/document/category/edit?id=52"><i
                                                class="fa fa-edit"
                                                style="margin-right:7px;margin-left:2px"></i>Sửa
                                            danh mục</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/category/index#"
                                            class="deleteCat" value="52"><i class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá danh mục</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input id="3515" class="cb orderCb" type="checkbox">
                        </td>
                        <td><span data-toggle="tooltip" data-title="parentId: 52">3515</span></td>
                        <td>Nhanh.vn</td>
                        <td></td>
                        <td style="padding-left: 50px;"><a
                                href="https://erp.nhanh.vn/document/document/index?name=&amp;companyId=1&amp;categoryId=3515&amp;submit=L%E1%BB%8Dc">Sơ
                                đồ phòng ban</a></td>
                        <td></td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/document/category/edit?id=3515"><i
                                                class="fa fa-edit"
                                                style="margin-right:7px;margin-left:2px"></i>Sửa
                                            danh mục</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/category/index#"
                                            class="deleteCat" value="3515"><i class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá danh mục</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input id="3516" class="cb orderCb" type="checkbox">
                        </td>
                        <td><span data-toggle="tooltip" data-title="parentId: 3515">3516</span></td>
                        <td>Nhanh.vn</td>
                        <td>Kinh doanh Nhanh.vn</td>
                        <td style="padding-left: 100px;"><a
                                href="https://erp.nhanh.vn/document/document/index?name=&amp;companyId=1&amp;categoryId=3516&amp;submit=L%E1%BB%8Dc">Sơ
                                đồ phòng ban Nhanh</a></td>
                        <td></td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/document/category/edit?id=3516"><i
                                                class="fa fa-edit"
                                                style="margin-right:7px;margin-left:2px"></i>Sửa
                                            danh mục</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/category/index#"
                                            class="deleteCat" value="3516"><i class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá danh mục</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input id="53" class="cb orderCb" type="checkbox">
                        </td>
                        <td><span data-toggle="tooltip" data-title="parentId: ">53</span></td>
                        <td>Nhanh.vn</td>
                        <td></td>
                        <td style="padding-left: 10px;"><a
                                href="https://erp.nhanh.vn/document/document/index?name=&amp;companyId=1&amp;categoryId=53&amp;submit=L%E1%BB%8Dc">Video
                                Marketing Tool</a></td>
                        <td>9</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/document/category/edit?id=53"><i
                                                class="fa fa-edit"
                                                style="margin-right:7px;margin-left:2px"></i>Sửa
                                            danh mục</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/category/index#"
                                            class="deleteCat" value="53"><i class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá danh mục</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input id="55" class="cb orderCb" type="checkbox">
                        </td>
                        <td><span data-toggle="tooltip" data-title="parentId: ">55</span></td>
                        <td>Nhanh.vn</td>
                        <td></td>
                        <td style="padding-left: 10px;"><a
                                href="https://erp.nhanh.vn/document/document/index?name=&amp;companyId=1&amp;categoryId=55&amp;submit=L%E1%BB%8Dc">Video
                                Hướng dẫn sử dụng Nhanh.vn</a></td>
                        <td>16</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/document/category/edit?id=55"><i
                                                class="fa fa-edit"
                                                style="margin-right:7px;margin-left:2px"></i>Sửa
                                            danh mục</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/category/index#"
                                            class="deleteCat" value="55"><i class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá danh mục</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input id="3433" class="cb orderCb" type="checkbox">
                        </td>
                        <td><span data-toggle="tooltip" data-title="parentId: ">3433</span></td>
                        <td>VNP group</td>
                        <td>Nhân sự</td>
                        <td style="padding-left: 10px;"><a
                                href="https://erp.nhanh.vn/document/document/index?name=&amp;companyId=10&amp;categoryId=3433&amp;submit=L%E1%BB%8Dc">CHẾ
                                ĐỘ ĐÃI NGỘ</a></td>
                        <td>7</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/document/category/edit?id=3433"><i
                                                class="fa fa-edit"
                                                style="margin-right:7px;margin-left:2px"></i>Sửa
                                            danh mục</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/category/index#"
                                            class="deleteCat" value="3433"><i class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá danh mục</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input id="3438" class="cb orderCb" type="checkbox">
                        </td>
                        <td><span data-toggle="tooltip" data-title="parentId: ">3438</span></td>
                        <td>Công ty cổ phần Vật Giá Việt Nam</td>
                        <td>HCNS</td>
                        <td style="padding-left: 10px;"><a
                                href="https://erp.nhanh.vn/document/document/index?name=&amp;companyId=2&amp;categoryId=3438&amp;submit=L%E1%BB%8Dc">Quy
                                trình Tính và Trả lương hàng tháng</a></td>
                        <td>1</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/document/category/edit?id=3438"><i
                                                class="fa fa-edit"
                                                style="margin-right:7px;margin-left:2px"></i>Sửa
                                            danh mục</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/category/index#"
                                            class="deleteCat" value="3438"><i class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá danh mục</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="colCheckbox"><input id="12" class="cb orderCb" type="checkbox">
                        </td>
                        <td><span data-toggle="tooltip" data-title="parentId: ">12</span></td>
                        <td>Nhanh.vn</td>
                        <td></td>
                        <td style="padding-left: 10px;"><a
                                href="https://erp.nhanh.vn/document/document/index?name=&amp;companyId=1&amp;categoryId=12&amp;submit=L%E1%BB%8Dc">Mẫu
                                hợp đồng</a></td>
                        <td>5</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="https://erp.nhanh.vn/document/category/edit?id=12"><i
                                                class="fa fa-edit"
                                                style="margin-right:7px;margin-left:2px"></i>Sửa
                                            danh mục</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/category/index#"
                                            class="deleteCat" value="12"><i class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá danh mục</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="colCheckbox"><input id="3517" class="cb orderCb" type="checkbox">
                        </td>
                        <td><span data-toggle="tooltip" data-title="parentId: ">3517</span></td>
                        <td>Nhanh.vn</td>
                        <td></td>
                        <td style="padding-left: 10px;"><a
                                href="https://erp.nhanh.vn/document/document/index?name=&amp;companyId=1&amp;categoryId=3517&amp;submit=L%E1%BB%8Dc">Biểu
                                mẫu</a></td>
                        <td></td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/document/category/edit?id=3517"><i
                                                class="fa fa-edit"
                                                style="margin-right:7px;margin-left:2px"></i>Sửa
                                            danh mục</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/category/index#"
                                            class="deleteCat" value="3517"><i class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá danh mục</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
            </div>
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
	<script type="text/javascript" src="{{ asset('/asset/js/document/document/saved_resource') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/document/document/firebase-app.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/document/document/firebase-messaging.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/document/document/firebase-firestore.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/document/document/firebase-auth.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/document/document/getfirebaseconfig') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/document/document/notification.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/document/document/notification.reducer.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/document/document/ckeditor.js') }}"></script>
	<script type="text/javascript">
		CKEDITOR.env.isCompatible = true;
	</script>
	<script type="text/javascript" src="{{ asset('/asset/js/document/document/saved_resource(1)') }}"></script>
	<script type="text/javascript" src="{{ asset('/asset/js/document/document/index.js') }}"></script>
    

@endsection