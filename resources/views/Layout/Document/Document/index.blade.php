@extends('Layout.master3')

@section('css')
    <link rel="stylesheet" href="{{ asset('asset/css/document/document/style.css') }}" type="text/css">
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
                    <div class="form-group"><input type="text" name="id" maxlength="255"
                            placeholder="ID tài liệu" id="id" class="form-control" value=""></div>
                    <div class="form-group"><input type="text" name="createdByName"
                            placeholder="Người tạo" id="createdByName"
                            class="form-control ui-autocomplete-input" value="" autocomplete="off">
                    </div> <input type="hidden" name="createdById" id="createdById"
                        class="form-control" value="">
                    <div class="form-group"><input type="text" name="name" maxlength="255"
                            placeholder="Tên tài liệu" id="name" class="form-control" value="">
                    </div>
                    <div class="form-group"><select name="departmentId" id="departmentId"
                            class="form-control">
                            <option value="">- Phòng ban -</option>
                        </select></div>
                    <div class="form-group"><select name="categoryId" id="categoryId"
                            class="form-control">
                            <option value="">- Danh mục tài liệu -</option>
                            <option value="3433">CHẾ ĐỘ ĐÃI NGỘ</option>
                            <option value="3495">NỘI QUY - QUY ĐỊNH - QUY TRÌNH</option>
                            <option value="3446">TỔNG QUAN VỀ VNP GROUP</option>
                            <option value="3509">Bài viết về VNP Group</option>
                            <option value="3510">Tiêu chuẩn con người VNP</option>
                            <option value="3503">Nội quy lao động</option>
                            <option value="3506">Quy trình hoạt động</option>
                            <option value="3505">Quy định bổ sung</option>
                        </select></div>
                    <div class="form-group"><input name="submit" type="submit"
                            id="btnFilterCompanyContact" class="form-control btn btn-primary"
                            value="Lọc"></div>
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
                <div class="col-md-6 dgButtons"><a href="{{ route('documentDocumentAdd') }}"
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
                    <tr>
                        <td>828</td>
                        <td>VNP group</td>
                        <td>Nhân sự</td>
                        <td><a
                                href="https://erp.nhanh.vn/document/document/index?companyId=10&amp;categoryId=3495">NỘI
                                QUY - QUY ĐỊNH - QUY TRÌNH</a></td>
                        <td><a href="https://erp.nhanh.vn/document/document/view?id=828">QUY TRÌNH
                                MUA BÁN TAÌ SẢN CỐ ĐỊNH, CÔNG CỤ, DỤNG CỤ</a><a
                                href="https://erp.nhanh.vn/document/document/view?id=828#files"><span
                                    class="badge element-bg-color-blue" style="float:right;"
                                    data-toggle="tooltip" data-placement="top"
                                    data-original-title="Tổng số tệp tin"></span></a></td>
                        <td data-toggle="tooltip" data-placement="top"
                            data-original-title="2019-11-02 12:05:07" class="colControls">Nguyễn Thị
                            Mai Hương</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/document/document/edit?id=828"><i
                                                class="fa fa-edit"
                                                style="margin-right: 5px;"></i>Sửa tài liệu</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/document/index#"
                                            class="deleteDocument" value="828"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá tài liệu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td>822</td>
                        <td>Nhanh.vn</td>
                        <td></td>
                        <td><a
                                href="https://erp.nhanh.vn/document/document/index?companyId=1&amp;categoryId=52">báo
                                giá dịch vụ</a></td>
                        <td><a href="https://erp.nhanh.vn/document/document/view?id=822">Báo giá
                                phần mềm</a><a
                                href="https://erp.nhanh.vn/document/document/view?id=822#files"><span
                                    class="badge element-bg-color-blue" style="float:right;"
                                    data-toggle="tooltip" data-placement="top"
                                    data-original-title="Tổng số tệp tin">1</span></a></td>
                        <td data-toggle="tooltip" data-placement="top"
                            data-original-title="2019-09-16 15:46:45" class="colControls">Tạ Thị Hoa
                        </td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/document/document/edit?id=822"><i
                                                class="fa fa-edit"
                                                style="margin-right: 5px;"></i>Sửa tài liệu</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/document/index#"
                                            class="deleteDocument" value="822"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá tài liệu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>764</td>
                        <td>Nhanh.vn</td>
                        <td></td>
                        <td><a
                                href="https://erp.nhanh.vn/document/document/index?companyId=1&amp;categoryId=41">Tổng
                                quan Nhanh.vn</a></td>
                        <td><a href="https://erp.nhanh.vn/document/document/view?id=764">Văn hóa
                                Nhanh</a><a
                                href="https://erp.nhanh.vn/document/document/view?id=764#files"><span
                                    class="badge element-bg-color-blue" style="float:right;"
                                    data-toggle="tooltip" data-placement="top"
                                    data-original-title="Tổng số tệp tin">1</span></a></td>
                        <td data-toggle="tooltip" data-placement="top"
                            data-original-title="2019-08-26 14:51:19" class="colControls">Tạ Thị Hoa
                        </td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/document/document/edit?id=764"><i
                                                class="fa fa-edit"
                                                style="margin-right: 5px;"></i>Sửa tài liệu</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/document/index#"
                                            class="deleteDocument" value="764"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá tài liệu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td>763</td>
                        <td>Nhanh.vn</td>
                        <td>Kinh doanh Nhanh.vn</td>
                        <td><a
                                href="https://erp.nhanh.vn/document/document/index?companyId=1&amp;categoryId=41">Tổng
                                quan Nhanh.vn</a></td>
                        <td><a href="https://erp.nhanh.vn/document/document/view?id=763">Sơ đồ phòng
                                ban Nhanh</a><a
                                href="https://erp.nhanh.vn/document/document/view?id=763#files"><span
                                    class="badge element-bg-color-blue" style="float:right;"
                                    data-toggle="tooltip" data-placement="top"
                                    data-original-title="Tổng số tệp tin">1</span></a></td>
                        <td data-toggle="tooltip" data-placement="top"
                            data-original-title="2019-08-26 14:42:48" class="colControls">Tạ Thị Hoa
                        </td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/document/document/edit?id=763"><i
                                                class="fa fa-edit"
                                                style="margin-right: 5px;"></i>Sửa tài liệu</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/document/index#"
                                            class="deleteDocument" value="763"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá tài liệu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>746</td>
                        <td>VNP group</td>
                        <td>Kiểm soát nội bộ</td>
                        <td><a
                                href="https://erp.nhanh.vn/document/document/index?companyId=10&amp;categoryId=3506">Quy
                                trình hoạt động</a></td>
                        <td><a href="https://erp.nhanh.vn/document/document/view?id=746">VNP - Quy
                                trình V/v Hoàn tiền của khách hàng trên tài khoản Bảo Kim</a><a
                                href="https://erp.nhanh.vn/document/document/view?id=746#files"><span
                                    class="badge element-bg-color-blue" style="float:right;"
                                    data-toggle="tooltip" data-placement="top"
                                    data-original-title="Tổng số tệp tin"></span></a></td>
                        <td data-toggle="tooltip" data-placement="top"
                            data-original-title="2019-08-01 15:34:29" class="colControls">Nguyễn
                            Dương Hồng Nhung</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/document/document/edit?id=746"><i
                                                class="fa fa-edit"
                                                style="margin-right: 5px;"></i>Sửa tài liệu</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/document/index#"
                                            class="deleteDocument" value="746"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá tài liệu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td>744</td>
                        <td>VNP group</td>
                        <td>Nhân sự</td>
                        <td><a
                                href="https://erp.nhanh.vn/document/document/index?companyId=10&amp;categoryId=3503">Nội
                                quy lao động</a></td>
                        <td><a href="https://erp.nhanh.vn/document/document/view?id=744">NỘI QUY LAO
                                ĐỘNG</a><a
                                href="https://erp.nhanh.vn/document/document/view?id=744#files"><span
                                    class="badge element-bg-color-blue" style="float:right;"
                                    data-toggle="tooltip" data-placement="top"
                                    data-original-title="Tổng số tệp tin">1</span></a></td>
                        <td data-toggle="tooltip" data-placement="top"
                            data-original-title="2019-07-29 11:42:33" class="colControls">Nguyễn Thị
                            Mai Hương</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/document/document/edit?id=744"><i
                                                class="fa fa-edit"
                                                style="margin-right: 5px;"></i>Sửa tài liệu</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/document/index#"
                                            class="deleteDocument" value="744"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá tài liệu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>743</td>
                        <td>VNP group</td>
                        <td>Kiểm soát nội bộ</td>
                        <td><a
                                href="https://erp.nhanh.vn/document/document/index?companyId=10&amp;categoryId=3505">Quy
                                định bổ sung</a></td>
                        <td><a href="https://erp.nhanh.vn/document/document/view?id=743">VNP - Quy
                                định chi tiết mục 17 điều 44 - Nội quy lao động về hình thức kỷ
                                luật</a><a
                                href="https://erp.nhanh.vn/document/document/view?id=743#files"><span
                                    class="badge element-bg-color-blue" style="float:right;"
                                    data-toggle="tooltip" data-placement="top"
                                    data-original-title="Tổng số tệp tin"></span></a></td>
                        <td data-toggle="tooltip" data-placement="top"
                            data-original-title="2019-07-27 11:02:08" class="colControls">Nguyễn
                            Dương Hồng Nhung</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/document/document/edit?id=743"><i
                                                class="fa fa-edit"
                                                style="margin-right: 5px;"></i>Sửa tài liệu</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/document/index#"
                                            class="deleteDocument" value="743"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá tài liệu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td>742</td>
                        <td>VNP group</td>
                        <td>Kiểm soát nội bộ</td>
                        <td><a
                                href="https://erp.nhanh.vn/document/document/index?companyId=10&amp;categoryId=3506">Quy
                                trình hoạt động</a></td>
                        <td><a href="https://erp.nhanh.vn/document/document/view?id=742">VNP - Quy
                                trình nhận lương tiền mặt</a><a
                                href="https://erp.nhanh.vn/document/document/view?id=742#files"><span
                                    class="badge element-bg-color-blue" style="float:right;"
                                    data-toggle="tooltip" data-placement="top"
                                    data-original-title="Tổng số tệp tin"></span></a></td>
                        <td data-toggle="tooltip" data-placement="top"
                            data-original-title="2019-07-27 10:04:45" class="colControls">Nguyễn
                            Dương Hồng Nhung</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/document/document/edit?id=742"><i
                                                class="fa fa-edit"
                                                style="margin-right: 5px;"></i>Sửa tài liệu</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/document/index#"
                                            class="deleteDocument" value="742"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá tài liệu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>741</td>
                        <td>VNP group</td>
                        <td>Nhân sự</td>
                        <td><a
                                href="https://erp.nhanh.vn/document/document/index?companyId=10&amp;categoryId=3433">CHẾ
                                ĐỘ ĐÃI NGỘ</a></td>
                        <td><a href="https://erp.nhanh.vn/document/document/view?id=741">Quy định về
                                quy trình Công đoàn thăm hỏi</a><a
                                href="https://erp.nhanh.vn/document/document/view?id=741#files"><span
                                    class="badge element-bg-color-blue" style="float:right;"
                                    data-toggle="tooltip" data-placement="top"
                                    data-original-title="Tổng số tệp tin"></span></a></td>
                        <td data-toggle="tooltip" data-placement="top"
                            data-original-title="2019-07-26 12:04:26" class="colControls">Nguyễn Thị
                            Mai Hương</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/document/document/edit?id=741"><i
                                                class="fa fa-edit"
                                                style="margin-right: 5px;"></i>Sửa tài liệu</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/document/index#"
                                            class="deleteDocument" value="741"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá tài liệu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td>740</td>
                        <td>VNP group</td>
                        <td>Nhân sự</td>
                        <td><a
                                href="https://erp.nhanh.vn/document/document/index?companyId=10&amp;categoryId=3433">CHẾ
                                ĐỘ ĐÃI NGỘ</a></td>
                        <td><a href="https://erp.nhanh.vn/document/document/view?id=740">Quy định
                                V/v: Hỗ trợ học phí cho con nhân viên 2018</a><a
                                href="https://erp.nhanh.vn/document/document/view?id=740#files"><span
                                    class="badge element-bg-color-blue" style="float:right;"
                                    data-toggle="tooltip" data-placement="top"
                                    data-original-title="Tổng số tệp tin"></span></a></td>
                        <td data-toggle="tooltip" data-placement="top"
                            data-original-title="2019-07-26 11:48:57" class="colControls">Nguyễn Thị
                            Mai Hương</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/document/document/edit?id=740"><i
                                                class="fa fa-edit"
                                                style="margin-right: 5px;"></i>Sửa tài liệu</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/document/index#"
                                            class="deleteDocument" value="740"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá tài liệu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>739</td>
                        <td>VNP group</td>
                        <td>Nhân sự</td>
                        <td><a
                                href="https://erp.nhanh.vn/document/document/index?companyId=10&amp;categoryId=3433">CHẾ
                                ĐỘ ĐÃI NGỘ</a></td>
                        <td><a href="https://erp.nhanh.vn/document/document/view?id=739">Quy định:
                                Các khoản phụ cấp trong lương 2018</a><a
                                href="https://erp.nhanh.vn/document/document/view?id=739#files"><span
                                    class="badge element-bg-color-blue" style="float:right;"
                                    data-toggle="tooltip" data-placement="top"
                                    data-original-title="Tổng số tệp tin"></span></a></td>
                        <td data-toggle="tooltip" data-placement="top"
                            data-original-title="2019-07-26 11:22:49" class="colControls">Nguyễn Thị
                            Mai Hương</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/document/document/edit?id=739"><i
                                                class="fa fa-edit"
                                                style="margin-right: 5px;"></i>Sửa tài liệu</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/document/index#"
                                            class="deleteDocument" value="739"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá tài liệu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td>738</td>
                        <td>VNP group</td>
                        <td>Nhân sự</td>
                        <td><a
                                href="https://erp.nhanh.vn/document/document/index?companyId=10&amp;categoryId=3433">CHẾ
                                ĐỘ ĐÃI NGỘ</a></td>
                        <td><a href="https://erp.nhanh.vn/document/document/view?id=738">Hỗ trợ viện
                                phí cho nhân viên - con nhân viên nằm viện 2018</a><a
                                href="https://erp.nhanh.vn/document/document/view?id=738#files"><span
                                    class="badge element-bg-color-blue" style="float:right;"
                                    data-toggle="tooltip" data-placement="top"
                                    data-original-title="Tổng số tệp tin"></span></a></td>
                        <td data-toggle="tooltip" data-placement="top"
                            data-original-title="2019-07-26 11:06:11" class="colControls">Nguyễn Thị
                            Mai Hương</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/document/document/edit?id=738"><i
                                                class="fa fa-edit"
                                                style="margin-right: 5px;"></i>Sửa tài liệu</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/document/index#"
                                            class="deleteDocument" value="738"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá tài liệu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>737</td>
                        <td>VNP group</td>
                        <td>Kiểm soát nội bộ</td>
                        <td><a
                                href="https://erp.nhanh.vn/document/document/index?companyId=10&amp;categoryId=3506">Quy
                                trình hoạt động</a></td>
                        <td><a href="https://erp.nhanh.vn/document/document/view?id=737">VNP - Quy
                                trình vệ sinh</a><a
                                href="https://erp.nhanh.vn/document/document/view?id=737#files"><span
                                    class="badge element-bg-color-blue" style="float:right;"
                                    data-toggle="tooltip" data-placement="top"
                                    data-original-title="Tổng số tệp tin"></span></a></td>
                        <td data-toggle="tooltip" data-placement="top"
                            data-original-title="2019-07-24 15:12:00" class="colControls">Nguyễn
                            Dương Hồng Nhung</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/document/document/edit?id=737"><i
                                                class="fa fa-edit"
                                                style="margin-right: 5px;"></i>Sửa tài liệu</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/document/index#"
                                            class="deleteDocument" value="737"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá tài liệu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td>736</td>
                        <td>VNP group</td>
                        <td>Kiểm soát nội bộ</td>
                        <td><a
                                href="https://erp.nhanh.vn/document/document/index?companyId=10&amp;categoryId=3506">Quy
                                trình hoạt động</a></td>
                        <td><a href="https://erp.nhanh.vn/document/document/view?id=736">VNP - Quy
                                trình tuyển dụng</a><a
                                href="https://erp.nhanh.vn/document/document/view?id=736#files"><span
                                    class="badge element-bg-color-blue" style="float:right;"
                                    data-toggle="tooltip" data-placement="top"
                                    data-original-title="Tổng số tệp tin"></span></a></td>
                        <td data-toggle="tooltip" data-placement="top"
                            data-original-title="2019-07-24 15:11:04" class="colControls">Nguyễn
                            Dương Hồng Nhung</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/document/document/edit?id=736"><i
                                                class="fa fa-edit"
                                                style="margin-right: 5px;"></i>Sửa tài liệu</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/document/index#"
                                            class="deleteDocument" value="736"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá tài liệu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>735</td>
                        <td>VNP group</td>
                        <td>Kiểm soát nội bộ</td>
                        <td><a
                                href="https://erp.nhanh.vn/document/document/index?companyId=10&amp;categoryId=3506">Quy
                                trình hoạt động</a></td>
                        <td><a href="https://erp.nhanh.vn/document/document/view?id=735">VNP - Quy
                                trình rà soát nhân sự</a><a
                                href="https://erp.nhanh.vn/document/document/view?id=735#files"><span
                                    class="badge element-bg-color-blue" style="float:right;"
                                    data-toggle="tooltip" data-placement="top"
                                    data-original-title="Tổng số tệp tin"></span></a></td>
                        <td data-toggle="tooltip" data-placement="top"
                            data-original-title="2019-07-24 15:07:53" class="colControls">Nguyễn
                            Dương Hồng Nhung</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/document/document/edit?id=735"><i
                                                class="fa fa-edit"
                                                style="margin-right: 5px;"></i>Sửa tài liệu</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/document/index#"
                                            class="deleteDocument" value="735"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá tài liệu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td>734</td>
                        <td>VNP group</td>
                        <td>Kiểm soát nội bộ</td>
                        <td><a
                                href="https://erp.nhanh.vn/document/document/index?companyId=10&amp;categoryId=3505">Quy
                                định bổ sung</a></td>
                        <td><a href="https://erp.nhanh.vn/document/document/view?id=734">VNP - Quy
                                trình nhân sự mới của Tuyển dụng - Pháp chế - Hành chính nhân
                                sự</a><a
                                href="https://erp.nhanh.vn/document/document/view?id=734#files"><span
                                    class="badge element-bg-color-blue" style="float:right;"
                                    data-toggle="tooltip" data-placement="top"
                                    data-original-title="Tổng số tệp tin"></span></a></td>
                        <td data-toggle="tooltip" data-placement="top"
                            data-original-title="2019-07-24 15:06:05" class="colControls">Nguyễn
                            Dương Hồng Nhung</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/document/document/edit?id=734"><i
                                                class="fa fa-edit"
                                                style="margin-right: 5px;"></i>Sửa tài liệu</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/document/index#"
                                            class="deleteDocument" value="734"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá tài liệu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>733</td>
                        <td>VNP group</td>
                        <td>Kiểm soát nội bộ</td>
                        <td><a
                                href="https://erp.nhanh.vn/document/document/index?companyId=10&amp;categoryId=3505">Quy
                                định bổ sung</a></td>
                        <td><a href="https://erp.nhanh.vn/document/document/view?id=733">VNP - Quy
                                chế tài chính nội bộ</a><a
                                href="https://erp.nhanh.vn/document/document/view?id=733#files"><span
                                    class="badge element-bg-color-blue" style="float:right;"
                                    data-toggle="tooltip" data-placement="top"
                                    data-original-title="Tổng số tệp tin"></span></a></td>
                        <td data-toggle="tooltip" data-placement="top"
                            data-original-title="2019-07-24 15:04:44" class="colControls">Nguyễn
                            Dương Hồng Nhung</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/document/document/edit?id=733"><i
                                                class="fa fa-edit"
                                                style="margin-right: 5px;"></i>Sửa tài liệu</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/document/index#"
                                            class="deleteDocument" value="733"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá tài liệu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td>731</td>
                        <td>VNP group</td>
                        <td>Kiểm soát nội bộ</td>
                        <td><a
                                href="https://erp.nhanh.vn/document/document/index?companyId=10&amp;categoryId=3505">Quy
                                định bổ sung</a></td>
                        <td><a href="https://erp.nhanh.vn/document/document/view?id=731">VNP - Quy
                                định trách nhiệm quản trị rủi ro</a><a
                                href="https://erp.nhanh.vn/document/document/view?id=731#files"><span
                                    class="badge element-bg-color-blue" style="float:right;"
                                    data-toggle="tooltip" data-placement="top"
                                    data-original-title="Tổng số tệp tin"></span></a></td>
                        <td data-toggle="tooltip" data-placement="top"
                            data-original-title="2019-07-24 14:59:39" class="colControls">Nguyễn
                            Dương Hồng Nhung</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/document/document/edit?id=731"><i
                                                class="fa fa-edit"
                                                style="margin-right: 5px;"></i>Sửa tài liệu</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/document/index#"
                                            class="deleteDocument" value="731"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá tài liệu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>730</td>
                        <td>VNP group</td>
                        <td>Kiểm soát nội bộ</td>
                        <td><a
                                href="https://erp.nhanh.vn/document/document/index?companyId=10&amp;categoryId=3505">Quy
                                định bổ sung</a></td>
                        <td><a href="https://erp.nhanh.vn/document/document/view?id=730">VNP - Quy
                                định hướng dẫn thực hiện điều 32 - Nội quy lao động v/v lưu trữ tài
                                liệu, dữ liệu</a><a
                                href="https://erp.nhanh.vn/document/document/view?id=730#files"><span
                                    class="badge element-bg-color-blue" style="float:right;"
                                    data-toggle="tooltip" data-placement="top"
                                    data-original-title="Tổng số tệp tin"></span></a></td>
                        <td data-toggle="tooltip" data-placement="top"
                            data-original-title="2019-07-24 14:56:46" class="colControls">Nguyễn
                            Dương Hồng Nhung</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/document/document/edit?id=730"><i
                                                class="fa fa-edit"
                                                style="margin-right: 5px;"></i>Sửa tài liệu</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/document/index#"
                                            class="deleteDocument" value="730"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá tài liệu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td>729</td>
                        <td>VNP group</td>
                        <td>Kiểm soát nội bộ</td>
                        <td><a
                                href="https://erp.nhanh.vn/document/document/index?companyId=10&amp;categoryId=3506">Quy
                                trình hoạt động</a></td>
                        <td><a href="https://erp.nhanh.vn/document/document/view?id=729">VNP - Quy
                                trình IT Support</a><a
                                href="https://erp.nhanh.vn/document/document/view?id=729#files"><span
                                    class="badge element-bg-color-blue" style="float:right;"
                                    data-toggle="tooltip" data-placement="top"
                                    data-original-title="Tổng số tệp tin"></span></a></td>
                        <td data-toggle="tooltip" data-placement="top"
                            data-original-title="2019-07-24 14:11:21" class="colControls">Nguyễn
                            Dương Hồng Nhung</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/document/document/edit?id=729"><i
                                                class="fa fa-edit"
                                                style="margin-right: 5px;"></i>Sửa tài liệu</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/document/index#"
                                            class="deleteDocument" value="729"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá tài liệu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>725</td>
                        <td>VNP group</td>
                        <td>Kiểm soát nội bộ</td>
                        <td><a
                                href="https://erp.nhanh.vn/document/document/index?companyId=10&amp;categoryId=3505">Quy
                                định bổ sung</a></td>
                        <td><a href="https://erp.nhanh.vn/document/document/view?id=725">VNP - Quy
                                định thay đổi thông tin trên id.vatgia.com của khách hàng</a><a
                                href="https://erp.nhanh.vn/document/document/view?id=725#files"><span
                                    class="badge element-bg-color-blue" style="float:right;"
                                    data-toggle="tooltip" data-placement="top"
                                    data-original-title="Tổng số tệp tin"></span></a></td>
                        <td data-toggle="tooltip" data-placement="top"
                            data-original-title="2019-07-18 17:40:23" class="colControls">Lưu Bảo
                            Hoa</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/document/document/edit?id=725"><i
                                                class="fa fa-edit"
                                                style="margin-right: 5px;"></i>Sửa tài liệu</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/document/index#"
                                            class="deleteDocument" value="725"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá tài liệu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td>594</td>
                        <td>VNP group</td>
                        <td>Nhân sự</td>
                        <td><a
                                href="https://erp.nhanh.vn/document/document/index?companyId=10&amp;categoryId=3503">Nội
                                quy lao động</a></td>
                        <td><a href="https://erp.nhanh.vn/document/document/view?id=594">Nội quy lao
                                động 2018</a><a
                                href="https://erp.nhanh.vn/document/document/view?id=594#files"><span
                                    class="badge element-bg-color-blue" style="float:right;"
                                    data-toggle="tooltip" data-placement="top"
                                    data-original-title="Tổng số tệp tin"></span></a></td>
                        <td data-toggle="tooltip" data-placement="top"
                            data-original-title="2018-07-02 10:25:46" class="colControls">Nguyễn Thị
                            Mai Hương</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/document/document/edit?id=594"><i
                                                class="fa fa-edit"
                                                style="margin-right: 5px;"></i>Sửa tài liệu</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/document/index#"
                                            class="deleteDocument" value="594"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá tài liệu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>592</td>
                        <td>Vật giá - Hồ Chí Minh</td>
                        <td></td>
                        <td><a
                                href="https://erp.nhanh.vn/document/document/index?companyId=319&amp;categoryId=3487">KSNB</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/document/document/view?id=592">Mẫu biên
                                bản thanh lý có VAT.docx</a><a
                                href="https://erp.nhanh.vn/document/document/view?id=592#files"><span
                                    class="badge element-bg-color-blue" style="float:right;"
                                    data-toggle="tooltip" data-placement="top"
                                    data-original-title="Tổng số tệp tin">1</span></a></td>
                        <td data-toggle="tooltip" data-placement="top"
                            data-original-title="2018-06-30 13:42:29" class="colControls">Nguyễn Lê
                            Vy Vân</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/document/document/edit?id=592"><i
                                                class="fa fa-edit"
                                                style="margin-right: 5px;"></i>Sửa tài liệu</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/document/index#"
                                            class="deleteDocument" value="592"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá tài liệu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td>593</td>
                        <td>Vật giá - Hồ Chí Minh</td>
                        <td></td>
                        <td><a
                                href="https://erp.nhanh.vn/document/document/index?companyId=319&amp;categoryId=3487">KSNB</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/document/document/view?id=593">Mẫu biên
                                bản thanh lý không VAT.docx</a><a
                                href="https://erp.nhanh.vn/document/document/view?id=593#files"><span
                                    class="badge element-bg-color-blue" style="float:right;"
                                    data-toggle="tooltip" data-placement="top"
                                    data-original-title="Tổng số tệp tin">1</span></a></td>
                        <td data-toggle="tooltip" data-placement="top"
                            data-original-title="2018-06-30 13:42:29" class="colControls">Nguyễn Lê
                            Vy Vân</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/document/document/edit?id=593"><i
                                                class="fa fa-edit"
                                                style="margin-right: 5px;"></i>Sửa tài liệu</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/document/index#"
                                            class="deleteDocument" value="593"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá tài liệu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>584</td>
                        <td>Vật giá - Hồ Chí Minh</td>
                        <td></td>
                        <td><a
                                href="https://erp.nhanh.vn/document/document/index?companyId=319&amp;categoryId=3487">KSNB</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/document/document/view?id=584">Biên bản
                                bàn giao công việc.docx</a><a
                                href="https://erp.nhanh.vn/document/document/view?id=584#files"><span
                                    class="badge element-bg-color-blue" style="float:right;"
                                    data-toggle="tooltip" data-placement="top"
                                    data-original-title="Tổng số tệp tin">1</span></a></td>
                        <td data-toggle="tooltip" data-placement="top"
                            data-original-title="2018-06-27 14:01:19" class="colControls">Nguyễn Lê
                            Vy Vân</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/document/document/edit?id=584"><i
                                                class="fa fa-edit"
                                                style="margin-right: 5px;"></i>Sửa tài liệu</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/document/index#"
                                            class="deleteDocument" value="584"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá tài liệu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td>585</td>
                        <td>Vật giá - Hồ Chí Minh</td>
                        <td></td>
                        <td><a
                                href="https://erp.nhanh.vn/document/document/index?companyId=319&amp;categoryId=3487">KSNB</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/document/document/view?id=585">Mẫu công
                                văn đi.docx</a><a
                                href="https://erp.nhanh.vn/document/document/view?id=585#files"><span
                                    class="badge element-bg-color-blue" style="float:right;"
                                    data-toggle="tooltip" data-placement="top"
                                    data-original-title="Tổng số tệp tin">1</span></a></td>
                        <td data-toggle="tooltip" data-placement="top"
                            data-original-title="2018-06-27 14:01:19" class="colControls">Nguyễn Lê
                            Vy Vân</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/document/document/edit?id=585"><i
                                                class="fa fa-edit"
                                                style="margin-right: 5px;"></i>Sửa tài liệu</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/document/index#"
                                            class="deleteDocument" value="585"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá tài liệu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>586</td>
                        <td>Vật giá - Hồ Chí Minh</td>
                        <td></td>
                        <td><a
                                href="https://erp.nhanh.vn/document/document/index?companyId=319&amp;categoryId=3487">KSNB</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/document/document/view?id=586">Giấy ủy
                                quyền.docx</a><a
                                href="https://erp.nhanh.vn/document/document/view?id=586#files"><span
                                    class="badge element-bg-color-blue" style="float:right;"
                                    data-toggle="tooltip" data-placement="top"
                                    data-original-title="Tổng số tệp tin">1</span></a></td>
                        <td data-toggle="tooltip" data-placement="top"
                            data-original-title="2018-06-27 14:01:19" class="colControls">Nguyễn Lê
                            Vy Vân</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/document/document/edit?id=586"><i
                                                class="fa fa-edit"
                                                style="margin-right: 5px;"></i>Sửa tài liệu</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/document/index#"
                                            class="deleteDocument" value="586"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá tài liệu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td>587</td>
                        <td>Vật giá - Hồ Chí Minh</td>
                        <td></td>
                        <td><a
                                href="https://erp.nhanh.vn/document/document/index?companyId=319&amp;categoryId=3487">KSNB</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/document/document/view?id=587">PL chuyển
                                điểm 2 KH - giấy tờ đầy đủ.doc</a><a
                                href="https://erp.nhanh.vn/document/document/view?id=587#files"><span
                                    class="badge element-bg-color-blue" style="float:right;"
                                    data-toggle="tooltip" data-placement="top"
                                    data-original-title="Tổng số tệp tin">1</span></a></td>
                        <td data-toggle="tooltip" data-placement="top"
                            data-original-title="2018-06-27 14:01:19" class="colControls">Nguyễn Lê
                            Vy Vân</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/document/document/edit?id=587"><i
                                                class="fa fa-edit"
                                                style="margin-right: 5px;"></i>Sửa tài liệu</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/document/index#"
                                            class="deleteDocument" value="587"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá tài liệu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>588</td>
                        <td>Vật giá - Hồ Chí Minh</td>
                        <td></td>
                        <td><a
                                href="https://erp.nhanh.vn/document/document/index?companyId=319&amp;categoryId=3487">KSNB</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/document/document/view?id=588">PL đổi
                                mail.điện thoại - giấy tờ đầy đủ.doc</a><a
                                href="https://erp.nhanh.vn/document/document/view?id=588#files"><span
                                    class="badge element-bg-color-blue" style="float:right;"
                                    data-toggle="tooltip" data-placement="top"
                                    data-original-title="Tổng số tệp tin">1</span></a></td>
                        <td data-toggle="tooltip" data-placement="top"
                            data-original-title="2018-06-27 14:01:19" class="colControls">Nguyễn Lê
                            Vy Vân</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/document/document/edit?id=588"><i
                                                class="fa fa-edit"
                                                style="margin-right: 5px;"></i>Sửa tài liệu</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/document/index#"
                                            class="deleteDocument" value="588"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá tài liệu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="even">
                        <td>589</td>
                        <td>Vật giá - Hồ Chí Minh</td>
                        <td></td>
                        <td><a
                                href="https://erp.nhanh.vn/document/document/index?companyId=319&amp;categoryId=3487">KSNB</a>
                        </td>
                        <td><a href="https://erp.nhanh.vn/document/document/view?id=589">PL đổi
                                thông tin 2 KH - giấy tờ đầy đủ.doc</a><a
                                href="https://erp.nhanh.vn/document/document/view?id=589#files"><span
                                    class="badge element-bg-color-blue" style="float:right;"
                                    data-toggle="tooltip" data-placement="top"
                                    data-original-title="Tổng số tệp tin">1</span></a></td>
                        <td data-toggle="tooltip" data-placement="top"
                            data-original-title="2018-06-27 14:01:19" class="colControls">Nguyễn Lê
                            Vy Vân</td>
                        <td class="colControls">
                            <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a
                                            href="https://erp.nhanh.vn/document/document/edit?id=589"><i
                                                class="fa fa-edit"
                                                style="margin-right: 5px;"></i>Sửa tài liệu</a></li>
                                    <li><a href="https://erp.nhanh.vn/document/document/index#"
                                            class="deleteDocument" value="589"><i
                                                class="fa fa-trash-o"
                                                style="margin-right:8px"></i>Xoá tài liệu</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
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