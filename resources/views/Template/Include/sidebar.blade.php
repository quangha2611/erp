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
                                <li class=""><a class="" href="{{ route('calendarIndex') }}"><i
                                            class="fa fa-list"></i> <span class="text">Quản lí sự
                                            kiện</span></a></li>
                                <li class=""><a class="" href="{{ route('calendarAdd') }}"><i
                                            class="fa fa-plus"></i> <span class="text">Thêm sự
                                            kiện</span></a></li>
                                <li class=""><a class="" href="{{ route('calendarPersonalview') }}"><i
                                            class="fa fa-calendar"></i> <span class="text">Lịch làm việc cá
                                            nhân</span></a></li>
                            </ul>
                        </li>
                        <li class=""><a class="js-sub-menu-toggle" rel="/crm/activity/indexvg"><i
                                    class="fa fa-exchange"></i> <span class="text">Lịch sử chăm sóc</span>
                                <i class="toggle-icon fa fa-angle-left"></i></a>
                            <ul class="sub-menu ">
                                <li class=""><a class="" href="{{ route('activityIndex') }}"><i
                                            class="fa fa-cogs"></i> <span class="text">Quản trị hành
                                            động</span></a></li>
                                <li class=""><a class="" href="{{ route('activityIndexvg') }}"><i
                                            class="fa fa-list"></i> <span class="text">Lịch sử chăm
                                            sóc</span></a></li>
                            </ul>
                        </li>
                        <li class=""><a class="js-sub-menu-toggle" rel="/crm/lead/index"><i
                                    class="fa fa-info"></i> <span class="text">Thông tin</span> <i
                                    class="toggle-icon fa fa-angle-left"></i></a>
                            <ul class="sub-menu ">
                                <li class=""><a class="" href="https://erp.nhanh.vn/crm/customer/index"><i
                                            class="fa fa-list"></i> <span class="text">Danh sách chung
                                            (Nhanh)</span></a></li>
                                <li class=""><a class=""
                                        href="https://erp.nhanh.vn/crm/opportunity/index"><i
                                            class="fa fa-refresh"></i> <span class="text">Trạng thái thông
                                            tin</span></a></li>
                                <li class=""><a class=""
                                        href="https://erp.nhanh.vn/crm/activity/listcall"><i
                                            class="fa fa-headphones"></i> <span class="text">Danh sách yêu
                                            cầu gọi</span></a></li>
                                <li class=""><a class="" href="https://erp.nhanh.vn/crm/lead/search"><i
                                            class="fa fa-check"></i> <span class="text">Kiểm tra thông tin
                                            tồn tại</span></a></li>
                                <li class=""><a class="" href="https://erp.nhanh.vn/crm/lead/add"><i
                                            class="fa fa-plus"></i> <span class="text">Nhập thông
                                            tin</span></a></li>
                            </ul>
                        </li>
                        <li class=""><a class="js-sub-menu-toggle" rel="/crm/account/index"><i
                                    class="fa fa-users"></i> <span class="text">Khách hàng</span> <i
                                    class="toggle-icon fa fa-angle-right"></i></a>
                            <ul class="sub-menu">
                                <li class=""><a class="" href="{{ route('customerIndex') }}">
                                    <i class="fa fa-list"> </i> 
                                    <span class="text">Danh sách KH (Nhanh)</span></a>
                                </li>
                                <li class=""><a class="" href="{{ route('customerIndexvg') }}">
                                    <i class="fa fa-list"> </i> 
                                    <span class="text">Khách hàng đang chăm sóc</span></a>
                                </li>
                                <li class=""><a class="" href="{{ route('customerFreelistvg') }}">
                                    <i class="fa fa-list"></i> 
                                    <span class="text">Khách hàng đang thả nổi</span></a>
                                </li>
                                <li class=""><a class="" href="{{ route('customerStatus') }}">
                                    <i class="fa fa-list"></i> 
                                    <span class="text">Trạng thái khách hàng</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class=""><a class="js-sub-menu-toggle" rel="/crm/service/index"><i
                                    class="fa fa-home"></i> <span class="text">Gian hàng</span> <i
                                    class="toggle-icon fa fa-angle-left"></i></a>
                            <ul class="sub-menu ">
                                <li class=""><a class="" href="https://erp.nhanh.vn/crm/service/index"><i
                                            class="fa fa-list"></i> <span class="text">Danh sách Gian
                                            hàng</span></a></li>
                                <li class=""><a class="" href="https://erp.nhanh.vn/crm/service/expried"><i
                                            class="fa fa-list"></i> <span class="text">Gian hàng sắp hết
                                            hạn</span></a></li>
                                <li class=""><a class=""
                                        href="https://erp.nhanh.vn/crm/service/exprieddate"><i
                                            class="fa fa-list"></i> <span class="text">Gian hàng hết
                                            hạn</span></a></li>
                                <li class=""><a class=""
                                        href="https://erp.nhanh.vn/crm/service/indexuser"><i
                                            class="fa fa-user"></i> <span class="text">Gian hàng bạn chăm
                                            sóc</span></a></li>
                            </ul>
                        </li>
                        <li class=""><a class="js-sub-menu-toggle" rel="/crm/auction/index"><i
                                    class="fa fa-gavel"></i> <span class="text">Đấu giá</span> <i
                                    class="toggle-icon fa fa-angle-left"></i></a>
                            <ul class="sub-menu ">
                                <li class=""><a class="" href="https://erp.nhanh.vn/crm/auction/join"><i
                                            class="fa fa-users"></i> <span class="text">Tham gia đấu
                                            giá</span></a></li>
                                <li class=""><a class=""
                                        href="https://erp.nhanh.vn/crm/auction/indexuser"><i
                                            class="fa fa-user"></i> <span class="text">Phiên đấu giá bạn
                                            tham gia</span></a></li>
                                <li class=""><a class="" href="https://erp.nhanh.vn/crm/auction/add"><i
                                            class="fa fa-plus"></i> <span class="text">Thêm phiên đấu
                                            giá</span></a></li>
                            </ul>
                        </li>
                        <li class=""><a class="js-sub-menu-toggle" rel="/crm/keyword/index"><i
                                    class="fa fa-search"></i> <span class="text">Từ khóa</span> <i
                                    class="toggle-icon fa fa-angle-left"></i></a>
                            <ul class="sub-menu ">
                                <li class=""><a class="" href="https://erp.nhanh.vn/crm/keyword/index"><i
                                            class="fa fa-list"></i> <span class="text">Danh sách từ
                                            khóa</span></a></li>
                            </ul>
                        </li>
                        <li class=""><a class="js-sub-menu-toggle" rel="/crm/contact/index"><i
                                    class="fa fa-user"></i> <span class="text">Liên hệ</span> <i
                                    class="toggle-icon fa fa-angle-left"></i></a>
                            <ul class="sub-menu ">
                                <li class=""><a class="" href="https://erp.nhanh.vn/crm/contact/index"><i
                                            class="fa fa-list "></i> <span class="text">Danh sách liên
                                            hệ</span></a></li>
                                <li class=""><a class="" href="https://erp.nhanh.vn/crm/contact/add"><i
                                            class="fa fa-plus"></i> <span class="text">Thêm liên
                                            hệ</span></a></li>
                            </ul>
                        </li>
                        <li class=""><a class="js-sub-menu-toggle" rel="/crm/requirement/index"><i
                                    class="fa fa-cogs"></i> <span class="text">Triển khai dịch vụ</span> <i
                                    class="toggle-icon fa fa-angle-left"></i></a>
                            <ul class="sub-menu "></ul>
                        </li>
                        <li class=""><a class="js-sub-menu-toggle" rel="/crm/requirement/indexvg"><i
                                    class="fa fa-cogs"></i> <span class="text">Thực hiện dịch vụ VG</span>
                                <i class="toggle-icon fa fa-angle-left"></i></a>
                            <ul class="sub-menu ">
                                <li class=""><a class=""
                                        href="https://erp.nhanh.vn/crm/requirement/myindexvg"><i
                                            class="fa fa-list"></i> <span class="text">Yêu cầu của
                                            bạn</span></a></li>
                            </ul>
                        </li>
                        <li class=""><a class="js-sub-menu-toggle" rel="/crm/requirement/index"><i
                                    class="fa fa-cog"></i> <span class="text">Yêu cầu</span> <i
                                    class="toggle-icon fa fa-angle-left"></i></a>
                            <ul class="sub-menu ">
                                <li class=""><a class=""
                                        href="https://erp.nhanh.vn/crm/requirement/index"><i
                                            class="fa fa-list"></i> <span class="text">Danh sách yêu cầu
                                            Task</span></a></li>
                            </ul>
                        </li>
                        <li class=""><a class="js-sub-menu-toggle" rel="/crm/contract/index"><i
                                    class="fa fa-book"></i> <span class="text">Hợp đồng</span> <i
                                    class="toggle-icon fa fa-angle-left"></i></a>
                            <ul class="sub-menu ">
                                <li class=""><a class="" href="https://erp.nhanh.vn/crm/contract/index"><i
                                            class="fa fa-list"></i> <span class="text">Danh sách hợp
                                            đồng</span></a></li>
                                <li class=""><a class=""
                                        href="https://erp.nhanh.vn/crm/contract/transaction"><i
                                            class="fa fa-money"></i> <span class="text">Danh sách thanh
                                            toán</span></a></li>
                                <li class=""><a class="" href="https://erp.nhanh.vn/crm/contract/add"><i
                                            class="fa fa-plus"></i> <span class="text">Thêm hợp
                                            đồng</span></a></li>
                                <li class=""><a class=""
                                        href="https://erp.nhanh.vn/crm/contract/scheduce"><i
                                            class="fa fa-calendar"></i> <span class="text">Lịch hẹn thanh
                                            toán</span></a></li>
                                <li class=""><a class=""
                                        href="https://erp.nhanh.vn/crm/customer/productexpired"><i
                                            class="fa fa-clock-o"></i> <span class="text">Các hợp đồng hết
                                            hạn</span></a></li>
                                <li class=""><a class=""
                                        href="https://erp.nhanh.vn/crm/contract/template"><i
                                            class="fa fa-list"></i> <span class="text">Danh sách mẫu
                                            in</span></a></li>
                                <li class=""><a class=""
                                        href="https://erp.nhanh.vn/crm/contract/addtemplate"><i
                                            class="fa fa-plus"></i> <span class="text">Thêm mẫu
                                            in</span></a></li>
                            </ul>
                        </li>
                        <li class=""><a class="js-sub-menu-toggle" rel="/crm/target/index"><i
                                    class="fa fa-bullseye"></i> <span class="text">Chỉ tiêu</span> <i
                                    class="toggle-icon fa fa-angle-left"></i></a>
                            <ul class="sub-menu ">
                                <li class=""><a class="" href="https://erp.nhanh.vn/crm/target/index"><i
                                            class="fa fa-list"></i> <span class="text">Danh sách chỉ
                                            tiêu</span></a></li>
                                <li class=""><a class=""
                                        href="https://erp.nhanh.vn/crm/target/registtarget"><i
                                            class="fa fa-bullseye"></i> <span class="text">Đăng kí chỉ
                                            tiêu</span></a></li>
                            </ul>
                        </li>
                        <li class=""><a class="js-sub-menu-toggle" rel="/crm/campaign/index"><i
                                    class="fa fa-suitcase"></i> <span class="text">Marketing Campaign</span>
                                <i class="toggle-icon fa fa-angle-left"></i></a>
                            <ul class="sub-menu "></ul>
                        </li>
                        <li class=""><a class="js-sub-menu-toggle" rel="/crm/report/target"><i
                                    class="fa fa-bar-chart-o"></i> <span class="text">Báo cáo</span> <i
                                    class="toggle-icon fa fa-angle-left"></i></a>
                            <ul class="sub-menu ">
                                <li class=""><a class="" href="https://erp.nhanh.vn/crm/report/target"><i
                                            class="fa fa-bar-chart-o"></i> <span class="text">Nhân viên
                                            VG</span></a></li>
                                <li class=""><a class="" href="https://erp.nhanh.vn/crm/report/employee"><i
                                            class="fa fa-bar-chart-o"></i> <span class="text">Doanh thu theo
                                            nhân viên</span></a></li>
                                <li class=""><a class="" href="https://erp.nhanh.vn/crm/report/rank"><i
                                            class="fa fa-bar-chart-o"></i> <span class="text">Xếp
                                            hạng</span></a></li>
                                <li class=""><a class=""
                                        href="https://erp.nhanh.vn/crm/report/contractforservice"><i
                                            class="fa fa-bar-chart-o"></i> <span class="text">Doanh số gian
                                            hàng</span></a></li>
                                <li class=""><a class="" href="https://erp.nhanh.vn/crm/report/revanuevg"><i
                                            class="fa fa-bar-chart-o"></i> <span class="text">Doanh Số
                                            VG</span></a></li>
                                <li class=""><a class="" href="https://erp.nhanh.vn/crm/report/survey"><i
                                            class="fa fa-bar-chart-o"></i> <span class="text">Khảo sát kinh
                                            doanh</span></a></li>
                                <li class=""><a class=""
                                        href="https://erp.nhanh.vn/crm/report/vgnewcustomer"><i
                                            class="fa fa-bar-chart-o"></i> <span class="text">Hợp đồng mới
                                            (VG)</span></a></li>
                                <li class=""><a class="" href="https://erp.nhanh.vn/crm/report/index"><i
                                            class="fa fa-bar-chart-o"></i> <span class="text">Chăm
                                            sóc</span></a></li>
                                <li class=""><a class=""
                                        href="https://erp.nhanh.vn/crm/report/employeecare"><i
                                            class="fa fa-bar-chart-o"></i> <span class="text">Chăm sóc khách
                                            hàng</span></a></li>
                                <li class=""><a class=""
                                        href="https://erp.nhanh.vn/crm/report/employeecarevg"><i
                                            class="fa fa-bar-chart-o"></i> <span class="text">Chăm sóc khách
                                            hàng VG</span></a></li>
                                <li class=""><a class=""
                                        href="https://erp.nhanh.vn/crm/report/accounttoemployee"><i
                                            class="fa fa-bar-chart-o"></i> <span class="text">Trạng thái
                                            khách theo nhân viên</span></a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="sidebar-minified js-toggle-minified">
                        <i class="fa fa-angle-left"></i>
                    </div>
                </nav>


                <!-- <nav class="quickLinkNav"></nav> -->
            </div>