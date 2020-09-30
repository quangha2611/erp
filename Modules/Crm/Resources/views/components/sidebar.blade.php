<div class="bottom">
    <div class="container">
        <div class="row">

            <div class="col-md-2 left-sidebar">
                <nav class="main-nav">
                    <ul class="main-menu">
                        <li class=""><a class="js-sub-menu-toggle" rel="/crm/calendar/personalview"><i
                                    class="fa fa-calendar"></i> <span class="text">Lịch làm việc</span> <i
                                    class="toggle-icon fa fa-angle-left"></i></a>
                            <ul class="sub-menu ">
                                <li class=""><a class="" href="{{ route('get.crm.calendar.index') }}"><i
                                            class="fa fa-list"></i> <span class="text">Quản lí sự
                                            kiện</span></a></li>
                                <li class=""><a class="" href="{{ route('get.crm.calendar.create') }}"><i
                                            class="fa fa-plus"></i> <span class="text">Thêm sự
                                            kiện</span></a></li>
                                <li class=""><a class="" href="{{ route('get.crm.calendar.personal') }}"><i
                                            class="fa fa-calendar"></i> <span class="text">Lịch làm việc cá
                                            nhân</span></a></li>
                            </ul>
                        </li>
                        <li class=""><a class="js-sub-menu-toggle" rel="/crm/activity/indexvg"><i
                                    class="fa fa-exchange"></i> <span class="text">Lịch sử chăm sóc</span>
                                <i class="toggle-icon fa fa-angle-left"></i></a>
                            <ul class="sub-menu ">
                                <li class=""><a class="" href="{{ route('get.crm.activity.index') }}"><i
                                            class="fa fa-cogs"></i> <span class="text">Quản trị hành
                                            động</span></a></li>
                                <li class=""><a class="" href="{{ route('get.crm.activity.indexvg') }}"><i
                                            class="fa fa-list"></i> <span class="text">Lịch sử chăm
                                            sóc</span></a></li>
                            </ul>
                        </li>
                        <li class=""><a class="js-sub-menu-toggle" rel="/crm/lead/index"><i
                                    class="fa fa-info"></i> <span class="text">Thông tin</span> <i
                                    class="toggle-icon fa fa-angle-left"></i></a>
                            <ul class="sub-menu ">
                                <li class=""><a class="" href="{{ route('get.crm.customer.index') }}"><i
                                            class="fa fa-list"></i> <span class="text">Danh sách chung
                                            (Nhanh)</span></a></li>
                                <li class=""><a class=""
                                        href="{{ route('opportunityIndex') }}"><i
                                            class="fa fa-refresh"></i> <span class="text">Trạng thái thông
                                            tin</span></a></li>
                                <li class=""><a class=""
                                        href="{{ route('get.crm.customer.companyResource') }}"><i
                                        class="fa fa-list"></i> <span class="text">Thông tin nguồn công
                                        ty</span></a></li>
                                <li class=""><a class=""
                                        href="{{ route('get.crm.activity.listcall') }}"><i
                                            class="fa fa-headphones"></i> <span class="text">Danh sách yêu
                                            cầu gọi</span></a></li>
                                <li class=""><a class="" href="{{ route('get.crm.lead.search') }}"><i
                                            class="fa fa-check"></i> <span class="text">Kiểm tra thông tin
                                            tồn tại</span></a></li>
                                <li class=""><a class="" href="{{ route('get.crm.lead.add') }}"><i
                                            class="fa fa-plus"></i> <span class="text">Nhập thông
                                            tin</span></a></li>
                            </ul>
                        </li>
                        <li class=""><a class="js-sub-menu-toggle" rel="/crm/account/index"><i
                                    class="fa fa-users"></i> <span class="text">Khách hàng</span> <i
                                    class="toggle-icon fa fa-angle-left"></i></a>
                            <ul class="sub-menu">
                                <li class=""><a class="" href="{{ route('get.crm.account.index') }}">
                                    <i class="fa fa-list"> </i> 
                                    <span class="text">Danh sách KH (Nhanh)</span></a>
                                </li>
                                <li class=""><a class="" href="{{ route('get.crm.customer.indexvg') }}">
                                    <i class="fa fa-list"> </i> 
                                    <span class="text">Khách hàng đang chăm sóc</span></a>
                                </li>
                                <li class=""><a class="" href="{{ route('get.crm.customer.freeCustomer') }}">
                                    <i class="fa fa-list"></i> 
                                    <span class="text">Khách hàng đang thả nổi</span></a>
                                </li>
                                <li class=""><a class="" href="{{ route('accountStatus') }}">
                                    <i class="fa fa-list"></i> 
                                    <span class="text">Trạng thái khách hàng</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class=""><a class="js-sub-menu-toggle" rel="/crm/contact/index"><i
                                    class="fa fa-user"></i> <span class="text">Liên hệ</span> <i
                                    class="toggle-icon fa fa-angle-left"></i></a>
                            <ul class="sub-menu ">
                                <li class=""><a class="" href="{{ route('get.crm.contact.index') }}"><i
                                            class="fa fa-list "></i> <span class="text">Danh sách liên
                                            hệ</span></a></li>
                                <li class=""><a class="" href="{{ route('get.crm.contact.add') }}"><i
                                            class="fa fa-plus"></i> <span class="text">Thêm liên
                                            hệ</span></a></li>
                            </ul>
                        </li>
                        {{-- <li class=""><a class="js-sub-menu-toggle" rel="/crm/requirement/indexvg"><i
                                    class="fa fa-cogs"></i> <span class="text">Thực hiện dịch vụ VG</span>
                                <i class="toggle-icon fa fa-angle-left"></i></a>
                                <ul class="sub-menu">
                                    <li class=""><a class=""
                                            href="{{ route('requirementIndexvg') }}"><i
                                                class="fa fa-list"></i> <span class="text">Tất cả yêu
                                                cầu</span></a></li>
                                    <li class=""><a class=""
                                            href="{{ route('requirementIndexnocontractvg') }}"><i
                                                class="fa fa-list"></i> <span class="text">Yêu cầu trả
                                                trước</span></a></li>
                                    <li class=""><a class=""
                                            href="{{ route('requirementIndexcontractvg') }}"><i
                                                class="fa fa-list"></i> <span class="text">Yêu cầu gắn Hợp
                                                đồng</span></a></li>
                                    <li class=""><a class=""
                                            href="{{ route('requirementIndexsharevg') }}"><i
                                                class="fa fa-list"></i> <span class="text">Yêu cầu đã tách
                                                HĐ</span></a></li>
                                    <li class=""><a class=""
                                            href="{{ route('requirementAddvg') }}"><i
                                                class="fa fa-plus"></i> <span class="text">Thêm yêu cầu trả
                                                trước</span></a></li>
                                </ul>
                        </li>
                        <li class=""><a class="js-sub-menu-toggle" rel="/crm/requirement/index"><i
                                    class="fa fa-cog"></i> <span class="text">Yêu cầu</span> <i
                                    class="toggle-icon fa fa-angle-left"></i></a>
                            <ul class="sub-menu ">
                                <li class=""><a class=""
                                        href="{{ route('requirementIndex') }}"><i
                                            class="fa fa-list"></i> <span class="text">Danh sách yêu cầu
                                            Task</span></a></li>
                                <li><a class="" href="{{ route('reportRequirementemployee') }}"><i
                                            class="fa fa-bar-chart-o"></i> <span class="text">Yêu cầu task nhân viên</span> </a>
                                </li>
                                <li><a class="" href="{{ route('reportRequirementcustomer') }}"><i
                                            class="fa fa-bar-chart-o"></i> <span class="text">Yêu cầu task khách hàng</span> </a>
                                </li>
                            </ul>
                        </li> --}}
                        <li class=""><a class="js-sub-menu-toggle" rel="/crm/contract/index"><i
                                    class="fa fa-book"></i> <span class="text">Hợp đồng</span> <i
                                    class="toggle-icon fa fa-angle-left"></i></a>
                            <ul class="sub-menu ">
                                <li class=""><a class="" href="{{ route('get.crm.contract.index') }}"><i
                                            class="fa fa-list"></i> <span class="text">Danh sách hợp
                                            đồng</span></a></li>
                                <li class=""><a class=""
                                        href="{{ route('get.crm.contract.transaction') }}"><i
                                            class="fa fa-money"></i> <span class="text">Danh sách thanh
                                            toán</span></a></li>
                                <li class=""><a class="" href="{{ route('get.crm.contract.create') }}"><i
                                            class="fa fa-plus"></i> <span class="text">Thêm hợp
                                            đồng</span></a></li>
                                <li class=""><a class=""
                                    href="{{ route('contractScheduce') }}"><i
                                            class="fa fa-calendar"></i> <span class="text">Lịch hẹn thanh
                                            toán</span></a></li>
                                <li class=""><a class=""
                                        href="{{ route('customerProductexpried') }}"><i
                                            class="fa fa-clock-o"></i> <span class="text">Các hợp đồng hết
                                            hạn</span></a></li>
                                <li class=""><a class=""
                                        href="{{ route('contractTemplate') }}"><i
                                            class="fa fa-list"></i> <span class="text">Danh sách mẫu
                                            in</span></a></li>
                                <li class=""><a class=""
                                        href="{{ route('contractAddTemplate') }}"><i
                                            class="fa fa-plus"></i> <span class="text">Thêm mẫu
                                            in</span></a></li>
                            </ul>
                        </li>
                        <li class=""><a class="js-sub-menu-toggle" rel="/crm/target/index"><i
                                    class="fa fa-bullseye"></i> <span class="text">Chỉ tiêu</span> <i
                                    class="toggle-icon fa fa-angle-left"></i></a>
                            <ul class="sub-menu ">
                                <li class=""><a class="" href="{{ route('targetIndex') }}"><i
                                            class="fa fa-list"></i> <span class="text">Danh sách chỉ
                                            tiêu</span></a></li>
                                <li class=""><a class=""
                                        href="{{ route('targetRegisttarget') }}"><i
                                            class="fa fa-bullseye"></i> <span class="text">Đăng kí chỉ
                                            tiêu</span></a></li>
                            </ul>
                        </li>
                        <li class=""><a class="js-sub-menu-toggle" rel="/crm/campaign/index"><i
                                    class="fa fa-suitcase"></i> <span class="text">Marketing Campaign</span>
                                <i class="toggle-icon fa fa-angle-left"></i></a>
                            <ul class="sub-menu "></ul>
                        </li>
                        <li><a class="" href="{{ route('billSalary') }}">
                                <i class="fa fa-money"></i> 
                                <span class="text">Doanh số triển khai &amp; vận chuyển</span> 
                            </a>
                        </li>
                        <li class=""><a class="js-sub-menu-toggle" rel="/crm/report/target"><i
                                    class="fa fa-bar-chart-o"></i> <span class="text">Báo cáo</span> <i
                                    class="toggle-icon fa fa-angle-left"></i></a>
                            <ul class="sub-menu ">
                                <li class=""><a class="" href="{{ route('reportTarget') }}"><i
                                            class="fa fa-bar-chart-o"></i> <span class="text">Nhân viên
                                            VG</span></a></li>
                                <li class=""><a class="" href="{{ route('reportEmployee') }}"><i
                                            class="fa fa-bar-chart-o"></i> <span class="text">Doanh thu theo
                                            nhân viên</span></a></li>
                                <li class=""><a class="" href="{{ route('reportRank') }}"><i
                                            class="fa fa-bar-chart-o"></i> <span class="text">Xếp
                                            hạng</span></a></li>
                                <li class=""><a class=""
                                        href="{{ route('reportContractforservice') }}"><i
                                            class="fa fa-bar-chart-o"></i> <span class="text">Doanh số gian
                                            hàng</span></a></li>
                                <li class=""><a class="" href="{{ route('reportRevanuevg') }}"><i
                                            class="fa fa-bar-chart-o"></i> <span class="text">Doanh Số
                                            VG</span></a></li>
                                <li class=""><a class="" href="{{ route('reportSurvey') }}"><i
                                            class="fa fa-bar-chart-o"></i> <span class="text">Khảo sát kinh
                                            doanh</span></a></li>
                                <li class=""><a class=""
                                        href="{{ route('reportVgnewcustomer') }}"><i
                                            class="fa fa-bar-chart-o"></i> <span class="text">Hợp đồng mới
                                            (VG)</span></a></li>
                                <li class=""><a class="" href="{{ route('reportIndex') }}"><i
                                            class="fa fa-bar-chart-o"></i> <span class="text">Chăm
                                            sóc</span></a></li>
                                <li class=""><a class=""
                                        href="{{ route('reportEmployeecare') }}"><i
                                            class="fa fa-bar-chart-o"></i> <span class="text">Chăm sóc khách
                                            hàng</span></a></li>
                                <li class=""><a class=""
                                        href="{{ route('reportEmployeecarevg') }}"><i
                                            class="fa fa-bar-chart-o"></i> <span class="text">Chăm sóc khách
                                            hàng VG</span></a></li>
                                <li class=""><a class=""
                                        href="{{ route('reportAccounttoemployee') }}"><i
                                            class="fa fa-bar-chart-o"></i> <span class="text">Trạng thái
                                            khách theo nhân viên</span></a></li>
                                <li class=""><a class="" href="{{ route('reportRevenuetomonth') }}"><i
                                    class="fa fa-bar-chart-o"></i> <span class="text">Doanh số từng
                                            tháng cho nvkd</span></a></li>
                                <li class=""><a class="" href="{{ route('reportService') }}"><i
                                    class="fa fa-bar-chart-o"></i> <span class="text">Dịch vụ khách
                                            hàng</span></a></li>
                                <li class=""><a class="" href="{{ route('reportCarekpi') }}"><i
                                    class="fa fa-bar-chart-o"></i> <span class="text">KPI chăm sóc
                                            theo nhân viên</span></a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="sidebar-minified js-toggle-minified">
                        <i class="fa fa-angle-left"></i>
                    </div>
                </nav>


                <!-- <nav class="quickLinkNav"></nav> -->
            </div>