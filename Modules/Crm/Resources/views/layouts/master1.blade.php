@include('crm::components.header')

<div class="bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-12 content-wrapper">
                <ul class="nav nav-tabs">
                    <li class="">
                        <a href="{{ route('get.crm.report.index') }}">
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
                            <li class=""><a href="{{ route('get.crm.report.location') }}">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span class="text">Doanh thu theo địa điểm</span>
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
                            <li class=""><a href="{{ route('get.crm.report.index') }}">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span class="text">Chăm sóc</span>
                                </a></li>
                            <li class=""><a href="{{ route('get.crm.report.customer') }}">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span class="text">Khách hàng</span>
                                </a></li>
                            <li class=""><a href="{{ route('get.crm.report.accountSource') }}">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span class="text">Nguồn khách hàng</span>
                                </a></li>
                            <li class=""><a href="{{ route('get.crm.report.levelCustomer') }}">
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
                            <li class=""><a href="{{ route('get.crm.report.expiredContract') }}">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span class="text">Hợp đồng hết hạn</span>
                                </a></li>
                            <li class=""><a href="{{ route('get.crm.report.bill') }}">
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
                            <li class=""><a href="{{ route('get.crm.report.employee') }}">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span class="text">Doanh thu theo nhân viên</span>
                                </a></li>
                            <li class=""><a href="{{ route('reportRank') }}">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span class="text">Xếp hạng</span>
                                </a></li>
                            <li class=""><a href="{{ route('reportSurvey') }}">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span class="text">Khảo sát kinh doanh</span>
                                </a></li>
                            <li class=""><a href="{{ route('get.crm.report.levelCustomer') }}">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span class="text">Trạng thái khách theo nhân viên</span>
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
                                <a href="{{ route('requirementAddvg') }}">Thêm yêu cầu trả
                                    trước</a>
                            </li>
                        </ul>
                    </li>
                </ul>




{{-- report menu  --}}

@yield('content-page')

@include('crm::components.footer')
