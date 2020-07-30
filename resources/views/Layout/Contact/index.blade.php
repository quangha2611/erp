@extends('Layout.master')

@section('title','Danh sách liên hệ')

@section('css')
	<link rel="stylesheet" href="{{ asset('asset/css/contact/style.css') }}" type="text/css">
@endsection

@section('content-page')
    <div class="col-md-10 content-wrapper">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li><a href="https://erp.nhanh.vn/crm/contact/index">Danh sách liên hệ</a></li>
        </ul>
        <div id="page-crm-contact">
            <div class="filterContainer">
                <form method="GET" name="crmContactFilter" class="form-inline" role="form"
                    id="crmContactFilter">
                    <div class="form-group"><select name="companyId" id="companyId"
                            class="form-control">
                            <option value="391" selected="selected">123job.vn</option>
                        </select></div>
                    <div class="form-group"><input type="text" name="id" maxlength="10"
                            placeholder="ID" id="id" class="form-control" value=""></div>
                    <div class="form-group"><input type="text" name="name" maxlength="255"
                            placeholder="Tên / Thông tin liên hệ" id="name" class="form-control"
                            value=""></div>
                    <div class="form-group"><input type="text" name="mobile" maxlength="11"
                            placeholder="Mobile" id="mobile" class="form-control" value=""></div>
                    <div class="form-group"><input name="submit" type="submit"
                            id="btnFilterCrmContact" class="form-control btn btn-primary"
                            value="Lọc"></div>
                </form>
            </div>
        </div>
        <div class="widget widget-table">
            <div class="widget-header">
                <h3><i class="fa fa-table"></i> Danh sách liên hệ</h3>
            </div>
            <div class="dgContainer widget-content table-responsive">
                <div style="display: none; width: 1534px;" class="stickyHeader">
                    <table class="table table-bordered" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr class="even">
                                <th style="width: 42px;">ID</th>
                                <th style="width: 213px;">Tên liên hệ</th>
                                <th style="width: 119px;">khách hàng</th>
                                <th style="width: 171px;">Phòng ban</th>
                                <th style="width: 132px;">Số ĐT</th>
                                <th style="width: 260px;">email</th>
                                <th style="width: 295px;">Địa chỉ</th>
                                <th style="width: 262px;">Ghi chú</th>
                                <th class="col-align-left" title="Thao tác" style="width: 40px;"><i
                                        class="fa fa-cogs icon"></i></th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-6 dgButtons"><a href="https://erp.nhanh.vn/crm/contact/add"
                            class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Thêm liên
                            hệ</a></div>
                    <div class="col-md-6 paginatorItem">
                        <div class="paginator"><span class="labelPages">1 - 3 / 3</span></div>
                    </div>
                    <div style="clear: both;"></div><br>
                </div>
                <table id="dgContact" class="table table table-hover">
                    <thead>
                        <tr class="even">
                            <th>ID</th>
                            <th>Tên liên hệ</th>
                            <th>khách hàng</th>
                            <th>Phòng ban</th>
                            <th>Số ĐT</th>
                            <th>email</th>
                            <th>Địa chỉ</th>
                            <th>Ghi chú</th>
                            <th class="col-align-left" title="Thao tác"><i
                                    class="fa fa-cogs icon"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td><a title="xem chi tiết"
                                    href="https://erp.nhanh.vn/crm/contact/view?id=98">98</a></td>
                            <td>
                                <p><i class="fa fa-user"></i> Hoàng Bảo Quốc</p>
                            </td>
                            <td><a target="_blank" href="https://erp.nhanh.vn/crm/account/view?id=">
                                </a></td>
                            <td></td>
                            <td>
                                <p> 0987235313</p>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                        data-toggle="dropdown"></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="https://erp.nhanh.vn/crm/contact/edit?id=98"><i
                                                    class="fa fa-edit"
                                                    style="margin-right:10px"></i>Sửa liên hệ</a>
                                        </li>
                                        <li><a class="deleteContact" id="deleteContact"
                                                data-id="98"><i class="fa fa-trash"
                                                    style="margin-right:10px"></i>Xóa liên hệ</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="even">
                            <td><a title="xem chi tiết"
                                    href="https://erp.nhanh.vn/crm/contact/view?id=97">97</a></td>
                            <td>
                                <p><i class="fa fa-user"></i> Hoàng Bảo Quốc</p>
                            </td>
                            <td><a target="_blank" href="https://erp.nhanh.vn/crm/account/view?id=">
                                </a></td>
                            <td>
                                <p>Hr</p>
                            </td>
                            <td>
                                <p> 0936717001</p>
                            </td>
                            <td>
                                <p> hungitc.hubt@gmail.com</p>
                            </td>
                            <td>
                                <div data-placement="left"> Hồ Chí Minh</div>
                            </td>
                            <td>Ghi chú liên hệ</td>
                            <td>
                                <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                        data-toggle="dropdown"></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="https://erp.nhanh.vn/crm/contact/edit?id=97"><i
                                                    class="fa fa-edit"
                                                    style="margin-right:10px"></i>Sửa liên hệ</a>
                                        </li>
                                        <li><a class="deleteContact" id="deleteContact"
                                                data-id="97"><i class="fa fa-trash"
                                                    style="margin-right:10px"></i>Xóa liên hệ</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="h">
                            <td><a title="xem chi tiết"
                                    href="https://erp.nhanh.vn/crm/contact/view?id=96">96</a></td>
                            <td>
                                <p><i class="fa fa-user"></i> Nguyễn Văn Hưng</p>
                            </td>
                            <td><a target="_blank" href="https://erp.nhanh.vn/crm/account/view?id=">
                                </a></td>
                            <td>
                                <p>Phòng 123job.vn</p>
                            </td>
                            <td>
                                <p> 0333383630</p>
                            </td>
                            <td>
                                <p> hungokata630@gmail.com</p>
                            </td>
                            <td>
                                <div data-placement="left"> 102 thái thịnh Đống Đa Hà Nội</div>
                            </td>
                            <td>Khách hàng thêm bằng tay</td>
                            <td>
                                <div class="dropdown"><a class="fa fa-cogs fa-lg dropdown-toggle"
                                        data-toggle="dropdown"></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="https://erp.nhanh.vn/crm/contact/edit?id=96"><i
                                                    class="fa fa-edit"
                                                    style="margin-right:10px"></i>Sửa liên hệ</a>
                                        </li>
                                        <li><a class="deleteContact" id="deleteContact"
                                                data-id="96"><i class="fa fa-trash"
                                                    style="margin-right:10px"></i>Xóa liên hệ</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-md-6 dgButtons"></div>
                    <div class="col-md-6 paginatorItem">
                        <div class="paginator"><span class="labelPages">1 - 3 / 3</span></div>
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
    <script type="text/javascript" src="{{ asset('asset/js/contact/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/contact/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/contact/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/contact/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/contact/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/contact/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/contact/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/contact/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/contact/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/contact/saved_resource(1)') }}"></script>
@endsection
    