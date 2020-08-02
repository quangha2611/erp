@extends('Layout.master1')

@section('css')
    <link href="{{ asset('asset/css/crm/report/bootstrap-multiselect.css') }}" media="screen" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/css/crm/report/style.css') }}" type="text/css">
@endsection

@section('title','ERP-Báo cáo theo phòng ban')

@section('content-page')

    <div class="tab-content">
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li class="active">Báo cáo tham gia khảo sát của nhân viên kinh doanh</li>
        </ul>
        <div class="filterContainer">
            <form method="GET" name="crmReportEmployeesFilter" class="form-inline lolify"
                role="form" id="crmReportEmployeesFilter">
                <div class="col-md-10 lolify-default">

                    <div class="form-group">
                        <input type="text" name="daterangepicker"
                            class="form-control date-range-picker" id="daterangepicker"
                            value="01/07/2020 - 31/07/2020"> </div>
                    <div class="form-group">
                        <select name="surveyId" id="surveyId" class="form-control">
                            <option value="">- Khảo sát -</option>
                            <option value="1">Trước gặp</option>
                            <option value="2">Sau gặp</option>
                        </select> </div>
                    <div class="form-group">
                        <select name="companyId" id="companyId" class="form-control">
                            <option value="">- Công ty nhân viên -</option>
                            <option value="10" selected="selected">VNP group</option>
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
                        </select> </div>
                    <div class="form-group">
                        <select name="departmentId" id="departmentId" class="form-control">
                            <option value="">- Phòng ban NV -</option>
                            <option value="388">Giám đốc</option>
                            <option value="940">Kế toán</option>
                            <option value="943">Nhân sự</option>
                            <option value="1043">Trợ Lý</option>
                            <option value="1055">Kiểm soát nội bộ</option>
                            <option value="1112">YPP</option>
                            <option value="1123">BNC Group</option>
                            <option value="1145">Quà trực tuyến</option>
                            <option value="1204">Công ty TNHH Nguồn Nhân Lực Elite Việt Nam
                            </option>
                            <option value="1205">-- Tuyển dụng ngoại bộ</option>
                            <option value="1206">-- Đào tạo ngoại bộ Westart</option>
                            <option value="1272">Dự Án Westay</option>
                        </select> </div>
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
                            <li><a href="https://erp.nhanh.vn/crm/report/survey?daterangepicker=01%2F07%2F2020+-+31%2F07%2F2020&amp;companyId=10&amp;submit=L%E1%BB%8Dc#"
                                    id="exportExcel"><i class="fa fa-download fa-lg"></i> Xuất
                                    tất cả</a></li>
                        </ul>
                    </div>


                </div>
            </form>
            <div class="clearfix"></div>
            <div class="lolify-left-menu" style="display: none;">
            </div>
        </div>
        <div class="col-md-12" id="table-container" style="overflow:auto;">
            <div class="dgContainer">
                <div style="display: none; width: 1859px;" class="stickyHeader">
                    <table class="table table-bordered" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr class="even">
                                <th style="width: 36px;">STT</th>
                                <th style="width: 42px;">Mã NV</th>
                                <th style="width: 58px;">Nhân viên</th>
                                <th style="width: 113px;">Khách hàng</th>
                                <th style="width: 67px;">Đã thu tiền</th>
                                <th style="width: 73px;">Địa chỉ của khách?</th>
                                <th style="width: 74px;">Ngành hàng kinh doanh?</th>
                                <th style="width: 74px;">Sản phẩm kinh doanh?</th>
                                <th style="width: 81px;">Khách có đang chạy quảng cáo Google hay
                                    Facebook không?</th>
                                <th style="width: 90px;">Một số doanh nghiệp tiêu biểu, tương tự
                                    khách hàng đang dùng dịch vụ Vatgia.com?</th>
                                <th style="width: 72px;">Các vấn đề cơ bản mà các doanh nghiệp
                                    trong ngành đang gặp phải?</th>
                                <th style="width: 64px;">Các câu hỏi gợi mở?</th>
                                <th style="width: 63px;">Lưu ý</th>
                                <th style="width: 70px;">Ảnh cửa hàng?</th>
                                <th style="width: 71px;">Ảnh card visit của khách hàng?</th>
                                <th style="width: 78px;">Số lượng cửa hàng/chi nhánh?</th>
                                <th style="width: 70px;">Số lượng nhân viên?</th>
                                <th style="width: 66px;">Diện tích cửa hàng (m2) ?</th>
                                <th style="width: 70px;">1 tới 3 vấn đề mà khách đang quan tâm
                                    nhất?</th>
                                <th style="width: 73px;">Khách hàng của doanh nghiệp này là đối
                                    tượng như thế nào? </th>
                                <th style="width: 74px;">Doanh thu hàng tháng của khách?</th>
                                <th style="width: 83px;">Chi phí marketing hàng tháng của khách?
                                </th>
                                <th style="width: 90px;">Quan ngại của khách hàng (nếu có) về
                                    việc sử dụng dịch vụ Vatgia.com?</th>
                                <th style="width: 71px;">Lời từ chối của Khách hàng và cách xử
                                    lý?</th>
                                <th style="width: 71px;">Mức độ thành công trong việc thuyết
                                    phục khách hàng?</th>
                                <th style="width: 64px;">Lưu ý</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-6 dgButtons"></div>
                    <div class="col-md-6 paginatorItem">
                        <div class="paginator"><span class="labelPages">1 - 1 / 1</span></div>
                    </div>
                    <div style="clear: both;"></div><br>
                </div>
                <table id="dgCrmReportSurvey" class="table table-bordered">
                    <thead>
                        <tr class="even">
                            <th>STT</th>
                            <th>Mã NV</th>
                            <th>Nhân viên</th>
                            <th style="width:100px">Khách hàng</th>
                            <th style="width:100px">Đã thu tiền</th>
                            <th style="width:100px">Địa chỉ của khách?</th>
                            <th style="width:100px">Ngành hàng kinh doanh?</th>
                            <th style="width:100px">Sản phẩm kinh doanh?</th>
                            <th style="width:100px">Khách có đang chạy quảng cáo Google hay
                                Facebook không?</th>
                            <th style="width:100px">Một số doanh nghiệp tiêu biểu, tương tự
                                khách hàng đang dùng dịch vụ Vatgia.com?</th>
                            <th style="width:100px">Các vấn đề cơ bản mà các doanh nghiệp trong
                                ngành đang gặp phải?</th>
                            <th style="width:100px">Các câu hỏi gợi mở?</th>
                            <th style="width:100px">Lưu ý</th>
                            <th style="width:100px">Ảnh cửa hàng?</th>
                            <th style="width:100px">Ảnh card visit của khách hàng?</th>
                            <th style="width:100px">Số lượng cửa hàng/chi nhánh?</th>
                            <th style="width:100px">Số lượng nhân viên?</th>
                            <th style="width:100px">Diện tích cửa hàng (m2) ?</th>
                            <th style="width:100px">1 tới 3 vấn đề mà khách đang quan tâm nhất?
                            </th>
                            <th style="width:100px">Khách hàng của doanh nghiệp này là đối tượng
                                như thế nào? </th>
                            <th style="width:100px">Doanh thu hàng tháng của khách?</th>
                            <th style="width:100px">Chi phí marketing hàng tháng của khách?</th>
                            <th style="width:100px">Quan ngại của khách hàng (nếu có) về việc sử
                                dụng dịch vụ Vatgia.com?</th>
                            <th style="width:100px">Lời từ chối của Khách hàng và cách xử lý?
                            </th>
                            <th style="width:100px">Mức độ thành công trong việc thuyết phục
                                khách hàng?</th>
                            <th style="width:100px">Lưu ý</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td>1</td>
                            <td>6749</td>
                            <td><span data-toggle="tooltip"
                                    data-title="123job.vn | 123Job">Nguyễn Văn Hưng</span></td>
                            <td><a style="display:block;word-wrap: break-word;width:100px;"
                                    href="https://erp.nhanh.vn/crm/lead/view?id=405964"></a>
                            </td>
                            <td><i class="text-danger">Chưa thu</i></td>
                            <td style="width:100px"></td>
                            <td style="width:100px"></td>
                            <td style="width:100px"></td>
                            <td style="width:100px"></td>
                            <td style="width:100px"></td>
                            <td style="width:100px"></td>
                            <td style="width:100px"></td>
                            <td style="width:100px"></td>
                            <td style="width:100px"></td>
                            <td style="width:100px"></td>
                            <td style="width:100px"></td>
                            <td style="width:100px"></td>
                            <td style="width:100px"></td>
                            <td style="width:100px"></td>
                            <td style="width:100px"></td>
                            <td style="width:100px"></td>
                            <td style="width:100px"></td>
                            <td style="width:100px"></td>
                            <td style="width:100px"></td>
                            <td style="width:100px"></td>
                            <td style="width:100px"></td>
                        </tr>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-md-6 dgButtons"></div>
                    <div class="col-md-6 paginatorItem">
                        <div class="paginator"><span class="labelPages">1 - 1 / 1</span></div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .dgContainer {
                width: 100%;
                overflow: auto;
            }
        </style>
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
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/bootstrap-multiselect.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/saved_resource(2)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/saved_resource(3)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/crm/report/saved_resource(4)') }}"></script>
@endsection