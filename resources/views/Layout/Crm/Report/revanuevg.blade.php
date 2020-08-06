@extends('Layout.master1')

@section('css')
    <link href="{{ asset('asset/css/crm/report/bootstrap-multiselect.css') }}" media="screen" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/css/crm/report/style.css') }}" type="text/css">
    <style>
		.cke {
			visibility: hidden;
		}
	</style>
@endsection

@section('title','ERP-Báo cáo doanh số VG')

@section('content-page')

        <div class="tab-content">
            <ul class="breadcrumb">
                <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
                <li class="active">Báo cáo theo nhân viên</li>
            </ul>
            <div class="filterContainer">
                <form method="GET" name="crmReportEmployeesFilter" class="form-inline lolify"
                    role="form" id="crmReportEmployeesFilter">
                    <div class="col-md-10 lolify-default">

                        <div class="form-group">
                            <input type="text" name="daterangepicker"
                                class="form-control date-range-picker" id="daterangepicker"
                                value="21/08/2018 - 01/08/2020"> </div>
                        <input type="hidden" name="companyId" id="companyId"
                            class="form-control select2-hidden-accessible" value="391" tabindex="-1"
                            aria-hidden="true"><span
                            class="select2 select2-container select2-container--default select2-container--below"
                            dir="ltr" style="width: auto;"><span class="selection"><span
                                    class="select2-selection select2-selection--single"
                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                    tabindex="0" aria-labelledby="select2-companyId-container"><span
                                        class="select2-selection__rendered"
                                        id="select2-companyId-container"><span
                                            class="select2-selection__placeholder">Công
                                            ty</span></span><span class="select2-selection__arrow"
                                        role="presentation"><b
                                            role="presentation"></b></span></span></span><span
                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                        <div class="form-group">
                            <select name="employeeDepartmentId" id="employeeDepartmentId"
                                class="form-control select2-hidden-accessible" tabindex="-1"
                                aria-hidden="true">
                                <option value="">- Phòng ban -</option>
                                <option value="1437">123Job</option>
                                <option value="1475">Kinh doanh 123Job</option>
                            </select><span
                                class="select2 select2-container select2-container--default"
                                dir="ltr" style="width: 139px;"><span class="selection"><span
                                        class="select2-selection select2-selection--single"
                                        role="combobox" aria-haspopup="true" aria-expanded="false"
                                        tabindex="0"
                                        aria-labelledby="select2-employeeDepartmentId-container"><span
                                            class="select2-selection__rendered"
                                            id="select2-employeeDepartmentId-container"><span
                                                class="select2-selection__placeholder">Phòng ban của
                                                nhân viên</span></span><span
                                            class="select2-selection__arrow" role="presentation"><b
                                                role="presentation"></b></span></span></span><span
                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div>
                        <div class="form-group">
                            <select name="departmentId" id="departmentId"
                                class="form-control select2-hidden-accessible" tabindex="-1"
                                aria-hidden="true">
                                <option value="">- Phòng ban -</option>
                                <option value="1437">123Job</option>
                                <option value="1475">Kinh doanh 123Job</option>
                            </select><span
                                class="select2 select2-container select2-container--default"
                                dir="ltr" style="width: 139px;"><span class="selection"><span
                                        class="select2-selection select2-selection--single"
                                        role="combobox" aria-haspopup="true" aria-expanded="false"
                                        tabindex="0"
                                        aria-labelledby="select2-departmentId-container"><span
                                            class="select2-selection__rendered"
                                            id="select2-departmentId-container"><span
                                                class="select2-selection__placeholder">Phòng ban
                                                hưởng doanh số</span></span><span
                                            class="select2-selection__arrow" role="presentation"><b
                                                role="presentation"></b></span></span></span><span
                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div>
                        <div class="form-group">
                            <input type="text" name="q" placeholder="Tên hoặc mã nhân sự" id="q"
                                class="form-control" value=""> </div>
                        <div class="form-group">
                            <input name="submit" type="submit" id="btnFilterCrmContact"
                                class="form-control btn btn-primary" value="Lọc"> </div>

                    </div>
                    <div class="col-md-2 lolify-control">
                        <div class="btn-group pull-right lolify-features" data-toggle="tooltip"
                            data-placement="top" title="Chức năng, thao tác">
                            <button class="btn dropdown-toggle" type="button" aria-haspopup="true"
                                aria-expanded="false" data-toggle="dropdown">
                                <span class="fa fa-cog"></span> <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a id="exportExcel"
                                        href="https://erp.nhanh.vn/crm/report/revanuevg?daterangepicker=21%2F08%2F2018+-+01%2F08%2F2020&amp;companyId=391&amp;submit=L%E1%BB%8Dc#"><i
                                            class="fa fa-download fa-lg"></i> Xuất excel</a></li>
                            </ul>
                        </div>


                    </div>
                </form>
                <div class="clearfix"></div>
                <div class="lolify-left-menu" style="display: none;">
                </div>
            </div>
            <div class="dgContainer">
                <div style="display: none; width: 1889px;" class="stickyHeader">
                    <table class="table table-bordered" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr class="even">
                                <th style="width: 120px;">STT</th>
                                <th style="width: 164px;">Mã NV</th>
                                <th style="width: 421px;">Nhân viên</th>
                                <th style="width: 412px;">Phòng ban</th>
                                <th style="width: 238px;">DS GHĐB</th>
                                <th style="width: 294px;">DS Marketing</th>
                                <th style="width: 239px;">Tổng DS</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-6 dgButtons"></div>
                    <div style="clear: both;"></div><br>
                </div>
                <table id="dgCrmReportTarget" class="table table-bordered">
                    <thead>
                        <tr class="even">
                            <th>STT</th>
                            <th>Mã NV</th>
                            <th>Nhân viên</th>
                            <th>Phòng ban</th>
                            <th>DS GHĐB</th>
                            <th>DS Marketing</th>
                            <th>Tổng DS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="taskStt3">
                            <td colspan="4"><b>Tổng</b></td>
                            <td class="colNumber"><b>1,595,000</b></td>
                            <td class="colNumber"><b></b></td>
                            <td class="colNumber"><b>1,595,000</b></td>
                        </tr>
                        <tr class="even">
                            <td>1</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7691&amp;applyDateRange=21%2F08%2F2018%20-%2001%2F08%2F2020">6749</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=7691&amp;applyDateRange=21%2F08%2F2018%20-%2001%2F08%2F2020">Nguyễn
                                    Văn Hưng</a></td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/revanuevg?daterangepicker=21%2F08%2F2018+-+01%2F08%2F2020&amp;companyId=391&amp;submit=L%E1%BB%8Dc&amp;employeeDepartmentId=1437">123Job
                                    | 123job.vn</a></td>
                            <td class="colNumber">1,595,000</td>
                            <td class="colNumber"></td>
                            <td class="colNumber">1,595,000</td>
                        </tr>
                        <tr class="">
                            <td>2</td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11021&amp;applyDateRange=21%2F08%2F2018%20-%2001%2F08%2F2020">9791</a>
                            </td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/employeetransaction?employeeId=11021&amp;applyDateRange=21%2F08%2F2018%20-%2001%2F08%2F2020">Đỗ
                                    Thị Thanh Nhàn</a></td>
                            <td><a
                                    href="https://erp.nhanh.vn/crm/report/revanuevg?daterangepicker=21%2F08%2F2018+-+01%2F08%2F2020&amp;companyId=391&amp;submit=L%E1%BB%8Dc&amp;employeeDepartmentId=1437">123Job
                                    | 123job.vn</a></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                            <td class="colNumber"></td>
                        </tr>
                        <tr class="taskStt3 even">
                            <td colspan="4"><b>Tổng</b></td>
                            <td class="colNumber"><b>1,595,000</b></td>
                            <td class="colNumber"><b></b></td>
                            <td class="colNumber"><b>1,595,000</b></td>
                        </tr>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-md-6 dgButtons"></div>
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
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/saved_resource(2)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/saved_resource(3)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/bootstrap-multiselect.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/target.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/revenuevg.js') }}"></script>
@endsection