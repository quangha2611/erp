<div class="bottom">
    <div class="container">
        <div class="row">

            <div class="col-md-2 left-sidebar">
                <nav class="main-nav">
                    <ul class="main-menu">
                        <li class=""><a class="js-sub-menu-toggle"
                                rel="/accounting/transaction/myindex"><i class="fa fa-list"></i> <span
                                    class="text">Thu chi</span> <i
                                    class="toggle-icon fa fa-angle-left"></i></a>
                            <ul class="sub-menu ">
                                <li class=""><a class=""
                                        href="{{ route('accountingTransactionMyindex') }}"><i
                                            class="fa fa-list"></i> <span class="text">Phiếu thu chi của
                                            tôi</span></a></li>
                                <li class=""><a class=""
                                        href="{{ route('accountingTransactionAddpaymentsimple') }}"><i
                                            class="fa fa-arrow-right"></i> <span class="text">Lập phiếu xin
                                            chi</span></a></li>
                                <li class=""><a class=""
                                        href="{{ route('accountingTransactionAddrecieversimple') }}"><i
                                            class="fa fa-arrow-left"></i> <span class="text">Lập phiếu xin
                                            thu</span></a></li>
                            </ul>
                        </li>
                        <li class=""><a class="js-sub-menu-toggle" rel="/accounting/transaction"><i
                            class="fa fa-exchange"></i> <span class="text">Quản trị thu chi</span>
                            <i class="toggle-icon fa fa-angle-left"></i></a>
                            <ul class="sub-menu ">
                                <li class=""><a class=""
                                href="{{ route('accountingTransaction') }}"><i
                                    class="fa fa-list"></i> <span class="text">Danh sách phiếu thu
                                    chi</span></a></li>
                                <li class=""><a class=""
                                href="{{ route('accountingTransactionAddreqpayment') }}"><i
                                    class="fa fa-plus"></i> <span class="text">Lập phiếu
                                    chi</span></a></li>
                            </ul>
                        </li>
                        <li class=""><a class="js-sub-menu-toggle" rel="/accounting/account"><i
                            class="fa fa-bank"></i> <span class="text">Danh sách tài khoản</span> <i
                            class="toggle-icon fa fa-angle-left"></i></a>
                                <ul class="sub-menu">
                                    <li class=""><a class="" href="{{ route('accountingAccount') }}"><i
                                    class="fa fa-list"></i> <span class="text">Tài khoản</span></a>
                                    </li>
                                    <li class=""><a class=""
                                    href="{{ route('accountingAccountAdd') }}"><i
                                    class="fa fa-plus"></i> <span class="text">Thêm tài
                                    khoản</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class=""><a class="js-sub-menu-toggle" rel="/accounting"><i
                                    class="fa fa-usd"></i> <span class="text">Khoản mục thu chi</span> <i
                                    class="toggle-icon fa fa-angle-left"></i></a>
                            <ul class="sub-menu ">
                                <li class=""><a class=""
                                        href="{{ route('accountingExpenseCategory') }}"><i
                                            class="fa fa-list"></i> <span class="text">Danh sách khoản
                                            mục</span></a></li>
                                <li class=""><a class=""
                                        href="{{ route('accountingExpenseAddcategory') }}"><i
                                            class="fa fa-plus"></i> <span class="text">Thêm khoản
                                            mục</span></a></li>
                            </ul>
                        </li>
                        <li class=""><a class="js-sub-menu-toggle" rel="/accounting/report"><i
                            class="fa fa-exchange"></i> <span class="text">Báo cáo</span> <i
                            class="toggle-icon fa fa-angle-left"></i></a>
                            <ul class="sub-menu">
                                <li class=""><a class=""
                                        href="{{ route('accountingReport') }}"><i
                                            class="fa fa-list"></i> <span class="text">Báo cáo theo tài
                                            khoản</span></a></li>
                                <li class=""><a class=""
                                        href="{{ route('accountingReportExpensecategory') }}"><i
                                            class="fa fa-list"></i> <span class="text">Báo cáo theo khoản
                                            mục </span></a></li>
                                <li class=""><a class=""
                                        href="{{ route('accountingReportExpensecategorybycreated') }}"><i
                                            class="fa fa-list"></i> <span class="text">Báo cáo khoản mục
                                            theo người tạo</span></a></li>
                                <li class=""><a class=""
                                        href="{{ route('accountingReportTransactionbycreated') }}"><i
                                            class="fa fa-list"></i> <span class="text">Báo cáo theo người
                                            tạo </span></a></li>
                                <li class=""><a class=""
                                        href="{{ route('accountingReportTransactionbyapprovedbyid') }}"><i
                                            class="fa fa-list"></i> <span class="text">Báo cáo theo người
                                            duyệt </span></a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="sidebar-minified js-toggle-minified">
                        <i class="fa fa-angle-left"></i>
                    </div>
                </nav>


                <!-- <nav class="quickLinkNav"></nav> -->
            </div>