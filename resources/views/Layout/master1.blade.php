@include('Template.Include.Crm.header')

{{-- report menu  --}}

<div class="bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-12 content-wrapper">
                <ul class="nav nav-tabs">
                    <li class="">
                        <a href="{{ route('reportIndex') }}">
                            <i class="fa fa-cog"></i>
                            <span class="text">Báo cáo</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" rel="/crm/report/index">
                            <i class="fa fa-bar-chart-o"></i>
                            <span class="text">Doanh thu</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu ">
                            <li class=""><a href="{{ route('reportDepartment') }}">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span class="text">Doanh thu theo phòng ban</span>
                                </a></li>
                            <li class=""><a href="{{ route('reportLocation') }}">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span class="text">Doanh thu theo địa điểm</span>
                                </a></li>
                            <li class=""><a href="{{ route('reportComparedepartment') }}">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span class="text">So sánh phòng ban tháng trước</span>
                                </a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" rel="/crm/report/index">
                            <i class="fa fa-bar-chart-o"></i>
                            <span class="text">Khách hàng</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu ">
                            <li class=""><a href="{{ route('reportIndex') }}">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span class="text">Chăm sóc</span>
                                </a></li>
                            <li class=""><a href="{{ route('reportCustomer') }}">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span class="text">Khách hàng</span>
                                </a></li>
                            <li class=""><a href="{{ route('reportStatuscustomer') }}">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span class="text">Trạng thái khách hàng</span>
                                </a></li>
                            <li class=""><a href="{{ route('reportStatusproduct') }}">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span class="text">Trạng thái KH theo Sản phẩm</span>
                                </a></li>
                            <li class=""><a href="{{ route('reportSourceaccount') }}">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span class="text">Nguồn khách hàng</span>
                                </a></li>
                            <li class=""><a href="{{ route('reportAccounttoemployeeHome') }}">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span class="text">Trạng thái khách theo nhân viên</span>
                                </a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" rel="/crm/report/index">
                            <i class="fa fa-bar-chart-o"></i>
                            <span class="text">Hợp đồng</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu ">
                            <li class=""><a href="{{ route('reportContractrequirement') }}">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span class="text">THDV theo công ty</span>
                                </a></li>
                            <li class=""><a href="{{ route('reportVgnewcustomer') }}">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span class="text">Hợp đồng mới (VG)</span>
                                </a></li>
                            <li class=""><a href="{{ route('reportExpirationcontract') }}">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span class="text">Hợp đồng hết hạn</span>
                                </a></li>
                            <li class=""><a href="{{ route('reportBill') }}">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span class="text">Xuất hóa đơn theo ngày tháng</span>
                                </a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" rel="/crm/report/index">
                            <i class="fa fa-bar-chart-o"></i>
                            <span class="text">Nhân viên</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu ">
                            <li class=""><a href="{{ route('reportTarget') }}">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span class="text">Nhân viên VG</span>
                                </a></li>
                            <li class=""><a href="{{ route('reportEmployee') }}">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span class="text">Doanh thu theo nhân viên</span>
                                </a></li>
                            <li class=""><a href="{{ route('reportRank') }}">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span class="text">Xếp hạng</span>
                                </a></li>
                            <li class=""><a href="{{ route('reportProductforemployee') }}">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span class="text">Doanh thu NV theo Sản phẩm</span>
                                </a></li>
                            <li class=""><a href="{{ route('reportSurvey') }}">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span class="text">Khảo sát kinh doanh</span>
                                </a></li>
                            <li class=""><a href="{{ route('reportEmployeecarevg') }}">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span class="text">Chăm sóc khách hàng VG</span>
                                </a></li>
                            <li class=""><a href="{{ route('reportAccounttoemployeeHome') }}">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span class="text">Trạng thái khách theo nhân viên</span>
                                </a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" rel="/crm/report/index">
                            <i class="fa fa-bar-chart-o"></i>
                            <span class="text">Gian hàng</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu ">
                            <li class=""><a href="{{ route('reportContractforservice') }}">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span class="text">Doanh số gian hàng</span>
                                </a></li>
                            <li class=""><a href="{{ route('reportCarevg') }}">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span class="text">Chăm sóc Gian Hàng</span>
                                </a></li>
                            <li class=""><a href="{{ route('reportRawserviceproduct') }}">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span class="text">Gian hàng - sản phẩm</span>
                                </a></li>
                            <li class=""><a href="{{ route('reportServiceexpired') }}">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span class="text">Hợp đồng hết hạn trong tháng</span>
                                </a></li>
                            <li class=""><a href="{{ route('reportServiceexpired') }}">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span class="text">Gian hàng hết hạn</span>
                                </a></li>
                            <li class=""><a href="{{ route('reportMeetingvg') }}">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span class="text">Đến gặp của NV theo từng mục đích</span>
                                </a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" rel="/crm/report/index">
                            <i class="fa fa-bar-chart-o"></i>
                            <span class="text">Sản phẩm</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu ">
                            <li class=""><a href="{{ route('reportProductforemployee') }}">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span class="text">Doanh thu NV theo Sản phẩm</span>
                                </a></li>
                            <li class=""><a href="{{ route('reportVgnewcustomer') }}">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span class="text">Hợp đồng mới (VG)</span>
                                </a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" rel="/crm/report/index">
                            <i class="fa fa-bar-chart-o"></i>
                            <span class="text">Thực hiện dịch vụ</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu ">
                            <li class=""><a href="{{ route('reportContractrequirement') }}">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span class="text">THDV theo công ty</span>
                                </a></li>
                            <li class=""><a href="{{ route('reportConfirmrequirement') }}">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span class="text">THDV theo người thực hiện</span>
                                </a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" rel="/crm/report/index">
                            <i data-togle="tooltip" data-title="Danh sách" class="fa fa-cogs"></i>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu ">
                            <li>
                                <a href="{{ route('customerIndexvg') }}">Khách hàng đang chăm
                                    sóc</a>
                            </li>
                            <li>
                                <a href="{{ route('customerIndexvg') }}">Danh sách hợp đồng</a>
                            </li>
                            <li>
                                <a href="https://erp.nhanh.vn/crm/requirement/addvg">Thêm yêu cầu trả
                                    trước</a>
                            </li>
                        </ul>
                    </li>
                </ul>



 
{{-- report menu  --}}

@yield('content-page')
    
@include('Template.Include.Crm.footer')