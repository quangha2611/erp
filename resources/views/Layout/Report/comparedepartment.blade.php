@extends('Layout.master1')

@section('css')
    <style>
        .cke {
            visibility: hidden;
        }
    </style>
    <link href="{{ asset('asset/css/report/bootstrap-multiselect.css') }}" media="screen" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/css/report/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('asset/js/report/css') }}">
    <link id="load-css-0" rel="stylesheet" type="text/css" href="{{ asset('asset/css/report/tooltip.css') }}">
	<link id="load-css-1" rel="stylesheet" type="text/css" href="{{ asset('asset/css/report/util.css') }}">
@endsection

@section('title','ERP-Báo cáo theo phòng ban')

@section('content-page')

    <div class="tab-content">
        <script type="text/javascript" src="{{ asset('asset/js/report/jsapi') }}"></script>
        <ul class="breadcrumb">
            <li><a href="https://erp.nhanh.vn/"><i class="fa fa-home"></i></a></li>
            <li class="active">Báo cáo so sánh phòng ban</li>
        </ul>
        <div class="filterContainer">
            <form method="GET" name="crmReportDepartmentFilter" class="form-inline" role="form"
                id="crmReportDepartmentFilter">
                <div class="form-group"><input type="text" name="daterangepicker"
                        class="form-control date-range-picker" id="daterangepicker"
                        value="01/07/2020 - 24/07/2020"></div>
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
                        <option value="1" selected="selected">----Nhanh.vn</option>
                        <option value="366">----Nhanh.vn Đà Nẵng</option>
                        <option value="395">----Nhanh.vn HCM</option>
                        <option value="379">--Westay</option>
                        <option value="384">--Công ty cổ phần WeHelp</option>
                        <option value="398">--WeLove</option>
                    </select></div>
                <div class="form-group"><select name="supplyCompanyId" id="supplyCompanyId"
                        class="form-control">
                        <option value="">- Cty cung cấp sp -</option>
                        <option value="1">Nhanh.vn</option>
                        <option value="10">VNP group</option>
                        <option value="2">---Công ty cổ phần Vật Giá Việt Nam</option>
                        <option value="315">------Vật giá - Hà Nội</option>
                        <option value="391">------123job.vn</option>
                        <option value="14">---Easycare.vn</option>
                        <option value="321">---Công ty cổ phần TMDT Bảo Kim</option>
                        <option value="384">---Công ty cổ phần WeHelp</option>
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
                        id="btnFilterCrmContact" class="form-control btn btn-primary"
                        value="Lọc"></div>
            </form>
        </div>
        <div style="min-height:500px;" id="chart">
            <div style="position: relative; width: 1874px; height: 500px;">
                <div
                    style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;">
                    <svg width="1874" height="500">
                        <defs>
                            <filter x="-100%" y="-100%" width="300%" height="300%"
                                id="rablfilter5">
                                <fegaussianblur in="SourceAlpha" stdDeviation="2">
                                </fegaussianblur>
                                <feoffset dx="0" dy="0"></feoffset>
                                <fecomponenttransfer>
                                    <fefunca type="linear" slope="0"></fefunca>
                                </fecomponenttransfer>
                                <femerge>
                                    <femergenode></femergenode>
                                    <femergenode in="SourceGraphic"></femergenode>
                                </femerge>
                            </filter>
                            <filter x="-100%" y="-100%" width="300%" height="300%"
                                id="rablfilter4">
                                <fegaussianblur in="SourceAlpha" stdDeviation="2">
                                </fegaussianblur>
                                <feoffset dx="0" dy="0"></feoffset>
                                <fecomponenttransfer>
                                    <fefunca type="linear" slope="0.4"></fefunca>
                                </fecomponenttransfer>
                                <femerge>
                                    <femergenode></femergenode>
                                    <femergenode in="SourceGraphic"></femergenode>
                                </femerge>
                            </filter>
                            <filter x="-100%" y="-100%" width="300%" height="300%"
                                id="rablfilter3">
                                <fegaussianblur in="SourceAlpha" stdDeviation="1">
                                </fegaussianblur>
                                <feoffset dx="0" dy="2"></feoffset>
                                <fecomponenttransfer>
                                    <fefunca type="linear" slope="0.2"></fefunca>
                                </fecomponenttransfer>
                                <femerge>
                                    <femergenode></femergenode>
                                    <femergenode in="SourceGraphic"></femergenode>
                                </femerge>
                            </filter>
                            <filter x="-100%" y="-100%" width="300%" height="300%"
                                id="rablfilter2">
                                <fegaussianblur in="SourceAlpha" stdDeviation="2">
                                </fegaussianblur>
                                <feoffset dx="0" dy="1"></feoffset>
                                <fecomponenttransfer>
                                    <fefunca type="linear" slope="0.4"></fefunca>
                                </fecomponenttransfer>
                                <femerge>
                                    <femergenode></femergenode>
                                    <femergenode in="SourceGraphic"></femergenode>
                                </femerge>
                            </filter>
                            <filter x="-100%" y="-100%" width="300%" height="300%"
                                id="rablfilter1">
                                <fegaussianblur in="SourceAlpha" stdDeviation="0">
                                </fegaussianblur>
                                <feoffset dx="0" dy="1"></feoffset>
                                <fecomponenttransfer>
                                    <fefunca type="linear" slope="0.4"></fefunca>
                                </fecomponenttransfer>
                                <femerge>
                                    <femergenode></femergenode>
                                    <femergenode in="SourceGraphic"></femergenode>
                                </femerge>
                            </filter>
                            <clippath id="rablfilter0">
                                <rect x="39.5" y="62.5" width="1703" height="385"></rect>
                            </clippath>
                        </defs>
                        <g>
                            <rect x="0" y="0" width="1874" height="500" fill="white"
                                stroke="black" stroke-width="0"></rect><text x="0" y="15"
                                style="cursor: default; user-select: none; -webkit-font-smoothing: antialiased; font-family: Roboto; font-size: 16px;"
                                fill="#757575" dx="0px">So sánh doanh thu phòng ban</text>
                            <rect x="1782.75" y="62.5" width="12" height="12" rx="2" ry="2"
                                fill="#4285f4"></rect><text x="1802.75" y="74.5"
                                style="cursor: default; user-select: none; -webkit-font-smoothing: antialiased; font-family: Roboto;"
                                fill="#757575" dx="0px">Tháng trước</text>
                            <rect x="1782.75" y="93.5" width="12" height="12" rx="2" ry="2"
                                fill="#db4437"></rect><text x="1802.75" y="105.5"
                                style="cursor: default; user-select: none; -webkit-font-smoothing: antialiased; font-family: Roboto;"
                                fill="#757575" dx="0px">Tháng này</text>
                            <rect x="39.5" y="62.5" width="1703" height="385" fill="none">
                            </rect>
                        </g>
                        <g>
                            <line x1="39.5" x2="1742.5" y1="447.5" y2="447.5" stroke="#9E9E9E"
                                stroke-width="1"></line>
                            <line x1="39.5" x2="1742.5" y1="392.5" y2="392.5" stroke="#E0E0E0"
                                stroke-width="1"></line>
                            <line x1="39.5" x2="1742.5" y1="337.5" y2="337.5" stroke="#E0E0E0"
                                stroke-width="1"></line>
                            <line x1="39.5" x2="1742.5" y1="282.5" y2="282.5" stroke="#E0E0E0"
                                stroke-width="1"></line>
                            <line x1="39.5" x2="1742.5" y1="227.5" y2="227.5" stroke="#E0E0E0"
                                stroke-width="1"></line>
                            <line x1="39.5" x2="1742.5" y1="172.5" y2="172.5" stroke="#E0E0E0"
                                stroke-width="1"></line>
                            <line x1="39.5" x2="1742.5" y1="117.5" y2="117.5" stroke="#E0E0E0"
                                stroke-width="1"></line>
                            <line x1="39.5" x2="1742.5" y1="62.5" y2="62.5" stroke="#E0E0E0"
                                stroke-width="1"></line>
                        </g>
                        <g>
                            <path
                                d="M 195.47936210131334 444.7 A 2 2 0 0 1 197.47936210131334 446.7 L 197.47936210131334 447 A 0 0 0 0 1 197.47936210131334 447 L 178.00375234521573 447 A 0 0 0 0 1 178.00375234521573 447 L 178.00375234521573 446.7 A 2 2 0 0 1 180.00375234521573 444.7 Z"
                                fill="#4285f4" clip-path="url(#rablfilter0)"></path>
                            <path
                                d="M 215.9549718574109 436.12 A 2 2 0 0 1 217.9549718574109 438.12 L 217.9549718574109 447 A 0 0 0 0 1 217.9549718574109 447 L 198.47936210131334 447 A 0 0 0 0 1 198.47936210131334 447 L 198.47936210131334 438.12 A 2 2 0 0 1 200.47936210131334 436.12 Z"
                                fill="#db4437" clip-path="url(#rablfilter0)"></path>
                            <path
                                d="M 258.48123827392124 404.11 A 2 2 0 0 1 260.48123827392124 406.11 L 260.48123827392124 447 A 0 0 0 0 1 260.48123827392124 447 L 241.00562851782365 447 A 0 0 0 0 1 241.00562851782365 447 L 241.00562851782365 406.11 A 2 2 0 0 1 243.00562851782365 404.11 Z"
                                fill="#4285f4" clip-path="url(#rablfilter0)"></path>
                            <path
                                d="M 278.9568480300188 436.01 A 2 2 0 0 1 280.9568480300188 438.01 L 280.9568480300188 447 A 0 0 0 0 1 280.9568480300188 447 L 261.48123827392124 447 A 0 0 0 0 1 261.48123827392124 447 L 261.48123827392124 438.01 A 2 2 0 0 1 263.48123827392124 436.01 Z"
                                fill="#db4437" clip-path="url(#rablfilter0)"></path>
                            <path
                                d="M 321.4831144465291 380.90000000000003 A 2 2 0 0 1 323.4831144465291 382.90000000000003 L 323.4831144465291 447 A 0 0 0 0 1 323.4831144465291 447 L 304.0075046904316 447 A 0 0 0 0 1 304.0075046904316 447 L 304.0075046904316 382.90000000000003 A 2 2 0 0 1 306.0075046904316 380.90000000000003 Z"
                                fill="#4285f4" clip-path="url(#rablfilter0)"></path>
                            <path
                                d="M 341.9587242026267 421.59999999999997 A 2 2 0 0 1 343.9587242026267 423.59999999999997 L 343.9587242026267 447 A 0 0 0 0 1 343.9587242026267 447 L 324.4831144465291 447 A 0 0 0 0 1 324.4831144465291 447 L 324.4831144465291 423.59999999999997 A 2 2 0 0 1 326.4831144465291 421.59999999999997 Z"
                                fill="#db4437" clip-path="url(#rablfilter0)"></path>
                            <path
                                d="M 404.96060037523455 434.8 A 2 2 0 0 1 406.96060037523455 436.8 L 406.96060037523455 447 A 0 0 0 0 1 406.96060037523455 447 L 387.484990619137 447 A 0 0 0 0 1 387.484990619137 447 L 387.484990619137 436.8 A 2 2 0 0 1 389.484990619137 434.8 Z"
                                fill="#db4437" clip-path="url(#rablfilter0)"></path>
                            <path
                                d="M 468.75247654784243 446.29 A 1.2099999999999795 1.2099999999999795 0 0 1 469.9624765478424 447.5 L 469.9624765478424 447.5 A 0 0 0 0 1 469.9624765478424 447.5 L 450.4868667917449 447.5 A 0 0 0 0 1 450.4868667917449 447.5 L 450.4868667917449 447.5 A 1.2099999999999795 1.2099999999999795 0 0 1 451.69686679174487 446.29 Z"
                                fill="#db4437" clip-path="url(#rablfilter0)"></path>
                            <path
                                d="M 510.4887429643527 440.74 A 2 2 0 0 1 512.4887429643527 442.74 L 512.4887429643527 447 A 0 0 0 0 1 512.4887429643527 447 L 493.0131332082552 447 A 0 0 0 0 1 493.0131332082552 447 L 493.0131332082552 442.74 A 2 2 0 0 1 495.0131332082552 440.74 Z"
                                fill="#4285f4" clip-path="url(#rablfilter0)"></path>
                            <path
                                d="M 530.9643527204503 442.39 A 2 2 0 0 1 532.9643527204503 444.39 L 532.9643527204503 447 A 0 0 0 0 1 532.9643527204503 447 L 513.4887429643527 447 A 0 0 0 0 1 513.4887429643527 447 L 513.4887429643527 444.39 A 2 2 0 0 1 515.4887429643527 442.39 Z"
                                fill="#db4437" clip-path="url(#rablfilter0)"></path>
                            <path
                                d="M 573.4906191369606 444.4965 A 2 2 0 0 1 575.4906191369606 446.4965 L 575.4906191369606 447 A 0 0 0 0 1 575.4906191369606 447 L 556.0150093808631 447 A 0 0 0 0 1 556.0150093808631 447 L 556.0150093808631 446.4965 A 2 2 0 0 1 558.0150093808631 444.4965 Z"
                                fill="#4285f4" clip-path="url(#rablfilter0)"></path>
                            <path
                                d="M 593.9662288930581 432.985 A 2 2 0 0 1 595.9662288930581 434.985 L 595.9662288930581 447 A 0 0 0 0 1 595.9662288930581 447 L 576.4906191369606 447 A 0 0 0 0 1 576.4906191369606 447 L 576.4906191369606 434.985 A 2 2 0 0 1 578.4906191369606 432.985 Z"
                                fill="#db4437" clip-path="url(#rablfilter0)"></path>
                            <path
                                d="M 636.4924953095684 391.92321000000004 A 2 2 0 0 1 638.4924953095684 393.92321000000004 L 638.4924953095684 447 A 0 0 0 0 1 638.4924953095684 447 L 619.016885553471 447 A 0 0 0 0 1 619.016885553471 447 L 619.016885553471 393.92321000000004 A 2 2 0 0 1 621.016885553471 391.92321000000004 Z"
                                fill="#4285f4" clip-path="url(#rablfilter0)"></path>
                            <path
                                d="M 656.9681050656659 417.64 A 2 2 0 0 1 658.9681050656659 419.64 L 658.9681050656659 447 A 0 0 0 0 1 658.9681050656659 447 L 639.4924953095684 447 A 0 0 0 0 1 639.4924953095684 447 L 639.4924953095684 419.64 A 2 2 0 0 1 641.4924953095684 417.64 Z"
                                fill="#db4437" clip-path="url(#rablfilter0)"></path>
                            <path
                                d="M 699.4943714821763 402.13 A 2 2 0 0 1 701.4943714821763 404.13 L 701.4943714821763 447 A 0 0 0 0 1 701.4943714821763 447 L 682.0187617260789 447 A 0 0 0 0 1 682.0187617260789 447 L 682.0187617260789 404.13 A 2 2 0 0 1 684.0187617260789 402.13 Z"
                                fill="#4285f4" clip-path="url(#rablfilter0)"></path>
                            <path
                                d="M 719.9699812382738 423.019 A 2 2 0 0 1 721.9699812382738 425.019 L 721.9699812382738 447 A 0 0 0 0 1 721.9699812382738 447 L 702.4943714821763 447 A 0 0 0 0 1 702.4943714821763 447 L 702.4943714821763 425.019 A 2 2 0 0 1 704.4943714821763 423.019 Z"
                                fill="#db4437" clip-path="url(#rablfilter0)"></path>
                            <path
                                d="M 762.4962476547843 431.5 A 2 2 0 0 1 764.4962476547843 433.5 L 764.4962476547843 447 A 0 0 0 0 1 764.4962476547843 447 L 745.0206378986867 447 A 0 0 0 0 1 745.0206378986867 447 L 745.0206378986867 433.5 A 2 2 0 0 1 747.0206378986867 431.5 Z"
                                fill="#4285f4" clip-path="url(#rablfilter0)"></path>
                            <path
                                d="M 783.3318574108818 445.36 A 1.6399999999999864 1.6399999999999864 0 0 1 784.9718574108817 447 L 784.9718574108817 447 A 0 0 0 0 1 784.9718574108817 447 L 765.4962476547843 447 A 0 0 0 0 1 765.4962476547843 447 L 765.4962476547843 447 A 1.6399999999999864 1.6399999999999864 0 0 1 767.1362476547843 445.36 Z"
                                fill="#db4437" clip-path="url(#rablfilter0)"></path>
                            <path
                                d="M 825.4981238273921 375.1426 A 2 2 0 0 1 827.4981238273921 377.1426 L 827.4981238273921 447 A 0 0 0 0 1 827.4981238273921 447 L 808.0225140712946 447 A 0 0 0 0 1 808.0225140712946 447 L 808.0225140712946 377.1426 A 2 2 0 0 1 810.0225140712946 375.1426 Z"
                                fill="#4285f4" clip-path="url(#rablfilter0)"></path>
                            <path
                                d="M 845.9737335834895 419.14700000000005 A 2 2 0 0 1 847.9737335834895 421.14700000000005 L 847.9737335834895 447 A 0 0 0 0 1 847.9737335834895 447 L 828.4981238273921 447 A 0 0 0 0 1 828.4981238273921 447 L 828.4981238273921 421.14700000000005 A 2 2 0 0 1 830.4981238273921 419.14700000000005 Z"
                                fill="#db4437" clip-path="url(#rablfilter0)"></path>
                            <path
                                d="M 888.5 241.23421000000002 A 2 2 0 0 1 890.5 243.23421000000002 L 890.5 447 A 0 0 0 0 1 890.5 447 L 871.0243902439025 447 A 0 0 0 0 1 871.0243902439025 447 L 871.0243902439025 243.23421000000002 A 2 2 0 0 1 873.0243902439025 241.23421000000002 Z"
                                fill="#4285f4" clip-path="url(#rablfilter0)"></path>
                            <path
                                d="M 908.9756097560976 369.0904 A 2 2 0 0 1 910.9756097560976 371.0904 L 910.9756097560976 447 A 0 0 0 0 1 910.9756097560976 447 L 891.5 447 A 0 0 0 0 1 891.5 447 L 891.5 371.0904 A 2 2 0 0 1 893.5 369.0904 Z"
                                fill="#db4437" clip-path="url(#rablfilter0)"></path>
                            <path
                                d="M 951.5018761726078 414.065 A 2 2 0 0 1 953.5018761726078 416.065 L 953.5018761726078 447 A 0 0 0 0 1 953.5018761726078 447 L 934.0262664165105 447 A 0 0 0 0 1 934.0262664165105 447 L 934.0262664165105 416.065 A 2 2 0 0 1 936.0262664165105 414.065 Z"
                                fill="#4285f4" clip-path="url(#rablfilter0)"></path>
                            <path
                                d="M 971.9774859287054 408.675 A 2 2 0 0 1 973.9774859287054 410.675 L 973.9774859287054 447 A 0 0 0 0 1 973.9774859287054 447 L 954.5018761726078 447 A 0 0 0 0 1 954.5018761726078 447 L 954.5018761726078 410.675 A 2 2 0 0 1 956.5018761726078 408.675 Z"
                                fill="#db4437" clip-path="url(#rablfilter0)"></path>
                            <path
                                d="M 1014.5037523452157 444.37 A 2 2 0 0 1 1016.5037523452157 446.37 L 1016.5037523452157 447 A 0 0 0 0 1 1016.5037523452157 447 L 997.0281425891181 447 A 0 0 0 0 1 997.0281425891181 447 L 997.0281425891181 446.37 A 2 2 0 0 1 999.0281425891181 444.37 Z"
                                fill="#4285f4" clip-path="url(#rablfilter0)"></path>
                            <path
                                d="M 1034.9793621013132 423.64599999999996 A 2 2 0 0 1 1036.9793621013132 425.64599999999996 L 1036.9793621013132 447 A 0 0 0 0 1 1036.9793621013132 447 L 1017.5037523452157 447 A 0 0 0 0 1 1017.5037523452157 447 L 1017.5037523452157 425.64599999999996 A 2 2 0 0 1 1019.5037523452157 423.64599999999996 Z"
                                fill="#db4437" clip-path="url(#rablfilter0)"></path>
                            <path
                                d="M 1077.5056285178237 398.885 A 2 2 0 0 1 1079.5056285178237 400.885 L 1079.5056285178237 447 A 0 0 0 0 1 1079.5056285178237 447 L 1060.0300187617263 447 A 0 0 0 0 1 1060.0300187617263 447 L 1060.0300187617263 400.885 A 2 2 0 0 1 1062.0300187617263 398.885 Z"
                                fill="#4285f4" clip-path="url(#rablfilter0)"></path>
                            <path
                                d="M 1097.9812382739212 327.968 A 2 2 0 0 1 1099.9812382739212 329.968 L 1099.9812382739212 447 A 0 0 0 0 1 1099.9812382739212 447 L 1080.5056285178237 447 A 0 0 0 0 1 1080.5056285178237 447 L 1080.5056285178237 329.968 A 2 2 0 0 1 1082.5056285178237 327.968 Z"
                                fill="#db4437" clip-path="url(#rablfilter0)"></path>
                            <path
                                d="M 1140.5075046904315 384.2385 A 2 2 0 0 1 1142.5075046904315 386.2385 L 1142.5075046904315 447 A 0 0 0 0 1 1142.5075046904315 447 L 1123.0318949343339 447 A 0 0 0 0 1 1123.0318949343339 447 L 1123.0318949343339 386.2385 A 2 2 0 0 1 1125.0318949343339 384.2385 Z"
                                fill="#4285f4" clip-path="url(#rablfilter0)"></path>
                            <path
                                d="M 1160.983114446529 394.24850000000004 A 2 2 0 0 1 1162.983114446529 396.24850000000004 L 1162.983114446529 447 A 0 0 0 0 1 1162.983114446529 447 L 1143.5075046904315 447 A 0 0 0 0 1 1143.5075046904315 447 L 1143.5075046904315 396.24850000000004 A 2 2 0 0 1 1145.5075046904315 394.24850000000004 Z"
                                fill="#db4437" clip-path="url(#rablfilter0)"></path>
                            <path
                                d="M 1203.5093808630393 192.371 A 2 2 0 0 1 1205.5093808630393 194.371 L 1205.5093808630393 447 A 0 0 0 0 1 1205.5093808630393 447 L 1186.033771106942 447 A 0 0 0 0 1 1186.033771106942 447 L 1186.033771106942 194.371 A 2 2 0 0 1 1188.033771106942 192.371 Z"
                                fill="#4285f4" clip-path="url(#rablfilter0)"></path>
                            <path
                                d="M 1223.9849906191369 376.379 A 2 2 0 0 1 1225.9849906191369 378.379 L 1225.9849906191369 447 A 0 0 0 0 1 1225.9849906191369 447 L 1206.5093808630393 447 A 0 0 0 0 1 1206.5093808630393 447 L 1206.5093808630393 378.379 A 2 2 0 0 1 1208.5093808630393 376.379 Z"
                                fill="#db4437" clip-path="url(#rablfilter0)"></path>
                            <path
                                d="M 1266.5112570356473 212.7723337 A 2 2 0 0 1 1268.5112570356473 214.7723337 L 1268.5112570356473 447 A 0 0 0 0 1 1268.5112570356473 447 L 1249.0356472795497 447 A 0 0 0 0 1 1249.0356472795497 447 L 1249.0356472795497 214.7723337 A 2 2 0 0 1 1251.0356472795497 212.7723337 Z"
                                fill="#4285f4" clip-path="url(#rablfilter0)"></path>
                            <path
                                d="M 1286.986866791745 233.016 A 2 2 0 0 1 1288.986866791745 235.016 L 1288.986866791745 447 A 0 0 0 0 1 1288.986866791745 447 L 1269.5112570356473 447 A 0 0 0 0 1 1269.5112570356473 447 L 1269.5112570356473 235.016 A 2 2 0 0 1 1271.5112570356473 233.016 Z"
                                fill="#db4437" clip-path="url(#rablfilter0)"></path>
                            <path
                                d="M 1329.513133208255 76.618 A 2 2 0 0 1 1331.513133208255 78.618 L 1331.513133208255 447 A 0 0 0 0 1 1331.513133208255 447 L 1312.0375234521578 447 A 0 0 0 0 1 1312.0375234521578 447 L 1312.0375234521578 78.618 A 2 2 0 0 1 1314.0375234521578 76.618 Z"
                                fill="#4285f4" clip-path="url(#rablfilter0)"></path>
                            <path
                                d="M 1349.9887429643527 96.71500000000003 A 2 2 0 0 1 1351.9887429643527 98.71500000000003 L 1351.9887429643527 447 A 0 0 0 0 1 1351.9887429643527 447 L 1332.513133208255 447 A 0 0 0 0 1 1332.513133208255 447 L 1332.513133208255 98.71500000000003 A 2 2 0 0 1 1334.513133208255 96.71500000000003 Z"
                                fill="#db4437" clip-path="url(#rablfilter0)"></path>
                            <path
                                d="M 1392.5150093808631 323.03999999999996 A 2 2 0 0 1 1394.5150093808631 325.03999999999996 L 1394.5150093808631 447 A 0 0 0 0 1 1394.5150093808631 447 L 1375.0393996247656 447 A 0 0 0 0 1 1375.0393996247656 447 L 1375.0393996247656 325.03999999999996 A 2 2 0 0 1 1377.0393996247656 323.03999999999996 Z"
                                fill="#4285f4" clip-path="url(#rablfilter0)"></path>
                            <path
                                d="M 1412.9906191369607 354.98136 A 2 2 0 0 1 1414.9906191369607 356.98136 L 1414.9906191369607 447 A 0 0 0 0 1 1414.9906191369607 447 L 1395.5150093808631 447 A 0 0 0 0 1 1395.5150093808631 447 L 1395.5150093808631 356.98136 A 2 2 0 0 1 1397.5150093808631 354.98136 Z"
                                fill="#db4437" clip-path="url(#rablfilter0)"></path>
                            <path
                                d="M 1455.516885553471 365.236 A 2 2 0 0 1 1457.516885553471 367.236 L 1457.516885553471 447 A 0 0 0 0 1 1457.516885553471 447 L 1438.0412757973734 447 A 0 0 0 0 1 1438.0412757973734 447 L 1438.0412757973734 367.236 A 2 2 0 0 1 1440.0412757973734 365.236 Z"
                                fill="#4285f4" clip-path="url(#rablfilter0)"></path>
                            <path
                                d="M 1475.9924953095685 274.34849999999994 A 2 2 0 0 1 1477.9924953095685 276.34849999999994 L 1477.9924953095685 447 A 0 0 0 0 1 1477.9924953095685 447 L 1458.516885553471 447 A 0 0 0 0 1 1458.516885553471 447 L 1458.516885553471 276.34849999999994 A 2 2 0 0 1 1460.516885553471 274.34849999999994 Z"
                                fill="#db4437" clip-path="url(#rablfilter0)"></path>
                            <path
                                d="M 1518.5187617260788 304.395 A 2 2 0 0 1 1520.5187617260788 306.395 L 1520.5187617260788 447 A 0 0 0 0 1 1520.5187617260788 447 L 1501.0431519699812 447 A 0 0 0 0 1 1501.0431519699812 447 L 1501.0431519699812 306.395 A 2 2 0 0 1 1503.0431519699812 304.395 Z"
                                fill="#4285f4" clip-path="url(#rablfilter0)"></path>
                            <path
                                d="M 1538.9943714821763 344.875 A 2 2 0 0 1 1540.9943714821763 346.875 L 1540.9943714821763 447 A 0 0 0 0 1 1540.9943714821763 447 L 1521.5187617260788 447 A 0 0 0 0 1 1521.5187617260788 447 L 1521.5187617260788 346.875 A 2 2 0 0 1 1523.5187617260788 344.875 Z"
                                fill="#db4437" clip-path="url(#rablfilter0)"></path>
                            <path
                                d="M 1581.5206378986866 386.29 A 2 2 0 0 1 1583.5206378986866 388.29 L 1583.5206378986866 447 A 0 0 0 0 1 1583.5206378986866 447 L 1564.0450281425892 447 A 0 0 0 0 1 1564.0450281425892 447 L 1564.0450281425892 388.29 A 2 2 0 0 1 1566.0450281425892 386.29 Z"
                                fill="#4285f4" clip-path="url(#rablfilter0)"></path>
                            <path
                                d="M 1601.9962476547842 432.16 A 2 2 0 0 1 1603.9962476547842 434.16 L 1603.9962476547842 447 A 0 0 0 0 1 1603.9962476547842 447 L 1584.5206378986866 447 A 0 0 0 0 1 1584.5206378986866 447 L 1584.5206378986866 434.16 A 2 2 0 0 1 1586.5206378986866 432.16 Z"
                                fill="#db4437" clip-path="url(#rablfilter0)"></path>
                            <path
                                d="M 1644.5225140712946 421.98499999999996 A 2 2 0 0 1 1646.5225140712946 423.98499999999996 L 1646.5225140712946 447 A 0 0 0 0 1 1646.5225140712946 447 L 1627.046904315197 447 A 0 0 0 0 1 1627.046904315197 447 L 1627.046904315197 423.98499999999996 A 2 2 0 0 1 1629.046904315197 421.98499999999996 Z"
                                fill="#4285f4" clip-path="url(#rablfilter0)"></path>
                            <path
                                d="M 1664.9981238273922 414.835 A 2 2 0 0 1 1666.9981238273922 416.835 L 1666.9981238273922 447 A 0 0 0 0 1 1666.9981238273922 447 L 1647.5225140712946 447 A 0 0 0 0 1 1647.5225140712946 447 L 1647.5225140712946 416.835 A 2 2 0 0 1 1649.5225140712946 414.835 Z"
                                fill="#db4437" clip-path="url(#rablfilter0)"></path>
                            <path
                                d="M 1707.5243902439024 364.0095 A 2 2 0 0 1 1709.5243902439024 366.0095 L 1709.5243902439024 447 A 0 0 0 0 1 1709.5243902439024 447 L 1690.048780487805 447 A 0 0 0 0 1 1690.048780487805 447 L 1690.048780487805 366.0095 A 2 2 0 0 1 1692.048780487805 364.0095 Z"
                                fill="#4285f4" clip-path="url(#rablfilter0)"></path>
                            <path
                                d="M 1728 353.9115 A 2 2 0 0 1 1730 355.9115 L 1730 447 A 0 0 0 0 1 1730 447 L 1710.5243902439024 447 A 0 0 0 0 1 1710.5243902439024 447 L 1710.5243902439024 355.9115 A 2 2 0 0 1 1712.5243902439024 353.9115 Z"
                                fill="#db4437" clip-path="url(#rablfilter0)"></path>
                        </g>
                        <g></g>
                        <g><text x="71.97560975609755" y="464.5"
                                style="cursor: default; user-select: none; -webkit-font-smoothing: antialiased; font-family: Roboto; font-size: 12px;"
                                fill="#757575" dx="-37.7607421875px">Phòng kế toán</text><text
                                x="134.97748592870545" y="464.5"
                                style="cursor: default; user-select: none; -webkit-font-smoothing: antialiased; font-family: Roboto; font-size: 12px;"
                                fill="#757575" dx="-14.34375px">Trợ lý</text><text
                                x="260.98123827392124" y="464.5"
                                style="cursor: default; user-select: none; -webkit-font-smoothing: antialiased; font-family: Roboto; font-size: 12px;"
                                fill="#757575" dx="-87.12890625px">Chăm sóc đơn hàng -
                                HươngĐTM</text><text x="386.984990619137" y="464.5"
                                style="cursor: default; user-select: none; -webkit-font-smoothing: antialiased; font-family: Roboto; font-size: 12px;"
                                fill="#757575" dx="-16.7314453125px">Tester</text><text
                                x="512.9887429643527" y="464.5"
                                style="cursor: default; user-select: none; -webkit-font-smoothing: antialiased; font-family: Roboto; font-size: 12px;"
                                fill="#757575" dx="-63.474609375px">Nhanh HN -
                                KD1_LanNT</text><text x="701.9943714821763" y="464.5"
                                style="cursor: default; user-select: none; -webkit-font-smoothing: antialiased; font-family: Roboto; font-size: 12px;"
                                fill="#757575" dx="-66.2724609375px">Nhanh HN -
                                KD7_ĐiệpNH</text><text x="891" y="464.5"
                                style="cursor: default; user-select: none; -webkit-font-smoothing: antialiased; font-family: Roboto; font-size: 12px;"
                                fill="#757575" dx="-73.1162109375px">Nhanh HN -
                                KD11_NganLTT</text><text x="1080.0056285178237" y="464.5"
                                style="cursor: default; user-select: none; -webkit-font-smoothing: antialiased; font-family: Roboto; font-size: 12px;"
                                fill="#757575" dx="-71.109375px">Nhanh HN -
                                KD16_TungNH</text><text x="1269.0112570356473" y="464.5"
                                style="cursor: default; user-select: none; -webkit-font-smoothing: antialiased; font-family: Roboto; font-size: 12px;"
                                fill="#757575" dx="-83.19140625px">Nhanh HN - Phòng
                                KD5_AnhNX</text><text x="1458.016885553471" y="464.5"
                                style="cursor: default; user-select: none; -webkit-font-smoothing: antialiased; font-family: Roboto; font-size: 12px;"
                                fill="#757575" dx="-90.7001953125px">Nhanh HN - Phòng
                                KD4_TrườngVV</text><text x="1647.0225140712946" y="464.5"
                                style="cursor: default; user-select: none; -webkit-font-smoothing: antialiased; font-family: Roboto; font-size: 12px;"
                                fill="#757575" dx="-26.7333984375px">Ecomcare</text><text
                                x="882.0112423780488" y="496.5"
                                style="cursor: default; user-select: none; -webkit-font-smoothing: antialiased; font-family: Roboto; font-size: 12px;"
                                fill="#424242" dx="-28.6142578125px">Phòng ban</text><text
                                x="33.5" y="451.5"
                                style="cursor: default; user-select: none; -webkit-font-smoothing: antialiased; font-family: Roboto; font-size: 12px;"
                                fill="#757575" dx="-6.73828125px">0</text><text x="33.5"
                                y="396.5"
                                style="cursor: default; user-select: none; -webkit-font-smoothing: antialiased; font-family: Roboto; font-size: 12px;"
                                fill="#757575" dx="-23.953125px">50M</text><text x="33.5"
                                y="341.5"
                                style="cursor: default; user-select: none; -webkit-font-smoothing: antialiased; font-family: Roboto; font-size: 12px;"
                                fill="#757575" dx="-30.69140625px">100M</text><text x="33.5"
                                y="286.5"
                                style="cursor: default; user-select: none; -webkit-font-smoothing: antialiased; font-family: Roboto; font-size: 12px;"
                                fill="#757575" dx="-30.69140625px">150M</text><text x="33.5"
                                y="231.5"
                                style="cursor: default; user-select: none; -webkit-font-smoothing: antialiased; font-family: Roboto; font-size: 12px;"
                                fill="#757575" dx="-30.69140625px">200M</text><text x="33.5"
                                y="176.5"
                                style="cursor: default; user-select: none; -webkit-font-smoothing: antialiased; font-family: Roboto; font-size: 12px;"
                                fill="#757575" dx="-30.69140625px">250M</text><text x="33.5"
                                y="121.5"
                                style="cursor: default; user-select: none; -webkit-font-smoothing: antialiased; font-family: Roboto; font-size: 12px;"
                                fill="#757575" dx="-30.69140625px">300M</text><text x="33.5"
                                y="66.5"
                                style="cursor: default; user-select: none; -webkit-font-smoothing: antialiased; font-family: Roboto; font-size: 12px;"
                                fill="#757575" dx="-30.69140625px">350M</text></g>
                        <g></g>
                        <g></g>
                        <g></g>
                    </svg></div>
            </div>
        </div>
        <h3>I.So sánh doanh thu</h3><a id="exportExcel1"
            class="exportExcel exportExcel1 btn btn-success right">Xuất Excel</a>
        <div class="dgContainer">
            <div style="display:none" class="stickyHeader">
                <table class="table table-bordered" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr class="even">
                            <th rowspan="2">STT</th>
                            <th rowspan="2">Phòng ban</th>
                            <th colspan="4"><a
                                    href="https://erp.nhanh.vn/crm/report/comparedepartment?daterangepicker=01%2F07%2F2020+-+24%2F07%2F2020&amp;companyId=1&amp;submit=L%E1%BB%8Dc&amp;sort=thismonth&amp;dir=asc"><i
                                        class="fa fa-sort"></i> Tháng hiện tại</a></th>
                            <th colspan="4"><a
                                    href="https://erp.nhanh.vn/crm/report/comparedepartment?daterangepicker=01%2F07%2F2020+-+24%2F07%2F2020&amp;companyId=1&amp;submit=L%E1%BB%8Dc&amp;sort=lastmonth&amp;dir=asc"><i
                                        class="fa fa-sort"></i> Tháng trước</a></th>
                            <th colspan="4"><a
                                    href="https://erp.nhanh.vn/crm/report/comparedepartment?daterangepicker=01%2F07%2F2020+-+24%2F07%2F2020&amp;companyId=1&amp;submit=L%E1%BB%8Dc&amp;sort=comparelastmonth&amp;dir=asc"><i
                                        class="fa fa-sort"></i> So với cùng kỳ tháng trước</a>
                            </th>
                        </tr>
                        <tr>
                            <th>Nhân viên</th>
                            <th>Tìm</th>
                            <th>Gọi</th>
                            <th>Gặp</th>
                            <th>Nhân viên</th>
                            <th>Tìm</th>
                            <th>Gọi</th>
                            <th>Gặp</th>
                            <th>Nhân viên</th>
                            <th>Tìm</th>
                            <th>Gọi</th>
                            <th>Gặp</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div style="display:none" class="stickyHeader">
                <table class="table table-bordered" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr class="even">
                            <th rowspan="2">STT</th>
                            <th rowspan="2">Phòng ban</th>
                            <th colspan="5"><a
                                    href="https://erp.nhanh.vn/crm/report/comparedepartment?daterangepicker=01%2F07%2F2020+-+24%2F07%2F2020&amp;companyId=1&amp;submit=L%E1%BB%8Dc&amp;sort=thismonth&amp;dir=asc"><i
                                        class="fa fa-sort"></i> Tháng hiện tại</a></th>
                            <th colspan="5"><a
                                    href="https://erp.nhanh.vn/crm/report/comparedepartment?daterangepicker=01%2F07%2F2020+-+24%2F07%2F2020&amp;companyId=1&amp;submit=L%E1%BB%8Dc&amp;sort=lastmonth&amp;dir=asc"><i
                                        class="fa fa-sort"></i> Tháng trước</a></th>
                            <th colspan="5"><a
                                    href="https://erp.nhanh.vn/crm/report/comparedepartment?daterangepicker=01%2F07%2F2020+-+24%2F07%2F2020&amp;companyId=1&amp;submit=L%E1%BB%8Dc&amp;sort=comparelastmonth&amp;dir=asc"><i
                                        class="fa fa-sort"></i> So với cùng kỳ tháng trước</a>
                            </th>
                        </tr>
                        <tr>
                            <th>Nhân viên</th>
                            <th>Hợp đồng</th>
                            <th>Giá trị</th>
                            <th>Đã thu</th>
                            <th>Tính doanh số</th>
                            <th>Nhân viên</th>
                            <th>Hợp đồng</th>
                            <th>Giá trị</th>
                            <th>Đã thu</th>
                            <th>Tính doanh số</th>
                            <th>Nhân viên</th>
                            <th>Hợp đồng</th>
                            <th>Giá trị</th>
                            <th>Đã thu</th>
                            <th>Tính doanh số</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div style="clear: both;"></div><br>
            </div>
            <table id="dgCrmReportDepartment1" class="table table-bordered">
                <thead>
                    <tr class="even">
                        <th rowspan="2">STT</th>
                        <th rowspan="2">Phòng ban</th>
                        <th colspan="5"><a
                                href="https://erp.nhanh.vn/crm/report/comparedepartment?daterangepicker=01%2F07%2F2020+-+24%2F07%2F2020&amp;companyId=1&amp;submit=L%E1%BB%8Dc&amp;sort=thismonth&amp;dir=asc"><i
                                    class="fa fa-sort"></i> Tháng hiện tại</a></th>
                        <th colspan="5"><a
                                href="https://erp.nhanh.vn/crm/report/comparedepartment?daterangepicker=01%2F07%2F2020+-+24%2F07%2F2020&amp;companyId=1&amp;submit=L%E1%BB%8Dc&amp;sort=lastmonth&amp;dir=asc"><i
                                    class="fa fa-sort"></i> Tháng trước</a></th>
                        <th colspan="5"><a
                                href="https://erp.nhanh.vn/crm/report/comparedepartment?daterangepicker=01%2F07%2F2020+-+24%2F07%2F2020&amp;companyId=1&amp;submit=L%E1%BB%8Dc&amp;sort=comparelastmonth&amp;dir=asc"><i
                                    class="fa fa-sort"></i> So với cùng kỳ tháng trước</a></th>
                    </tr>
                    <tr class="">
                        <th>Nhân viên</th>
                        <th>Hợp đồng</th>
                        <th>Giá trị</th>
                        <th>Đã thu</th>
                        <th>Tính doanh số</th>
                        <th>Nhân viên</th>
                        <th>Hợp đồng</th>
                        <th>Giá trị</th>
                        <th>Đã thu</th>
                        <th>Tính doanh số</th>
                        <th>Nhân viên</th>
                        <th>Hợp đồng</th>
                        <th>Giá trị</th>
                        <th>Đã thu</th>
                        <th>Tính doanh số</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="even">
                        <td>1</td>
                        <td>Phòng kế toán</td>
                        <td>3</td>
                        <td>4</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>3</td>
                        <td>4</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="taskStt7"><b>100%</b></td>
                        <td class="taskStt7"><b>100%</b></td>
                        <td class=""><b>0%</b></td>
                        <td class=""></td>
                        <td class=""></td>
                    </tr>
                    <tr class="">
                        <td>2</td>
                        <td>Trợ lý</td>
                        <td>2</td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>2</td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="taskStt7"><b>100%</b></td>
                        <td class="taskStt7"><b>100%</b></td>
                        <td class=""><b>0%</b></td>
                        <td class=""></td>
                        <td class=""></td>
                    </tr>
                    <tr class="even">
                        <td>3</td>
                        <td>Giám đốc dự án</td>
                        <td>2</td>
                        <td>1</td>
                        <td>7.800.000</td>
                        <td>10.800.000</td>
                        <td>7.170.000</td>
                        <td>2</td>
                        <td>1</td>
                        <td>3.000.000</td>
                        <td>750.000</td>
                        <td>810.000</td>
                        <td class="taskStt7"><b>100%</b></td>
                        <td class="taskStt7"><b>100%</b></td>
                        <td class="taskStt7"><b>260%</b></td>
                        <td class="taskStt7"><b>1440%</b></td>
                        <td class="taskStt7"><b>885%</b></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Chăm sóc đơn hàng - HươngĐTM</td>
                        <td>11</td>
                        <td>8</td>
                        <td>10.900.000</td>
                        <td>10.900.000</td>
                        <td>10.315.000</td>
                        <td>11</td>
                        <td>12</td>
                        <td>39.900.000</td>
                        <td>39.900.000</td>
                        <td>30.000.000</td>
                        <td class="taskStt7"><b>100%</b></td>
                        <td class="taskStt5"><b>67%</b></td>
                        <td class="taskStt5"><b>27%</b></td>
                        <td class="taskStt5"><b>27%</b></td>
                        <td class="taskStt5"><b>34%</b></td>
                    </tr>
                    <tr class="even">
                        <td>5</td>
                        <td>Marketing</td>
                        <td>9</td>
                        <td>8</td>
                        <td>62.950.000</td>
                        <td>24.000.000</td>
                        <td>11.662.000</td>
                        <td>7</td>
                        <td>8</td>
                        <td>61.000.000</td>
                        <td>14.850.000</td>
                        <td>11.502.000</td>
                        <td class="taskStt7"><b>129%</b></td>
                        <td class="taskStt7"><b>100%</b></td>
                        <td class="taskStt7"><b>103%</b></td>
                        <td class="taskStt7"><b>162%</b></td>
                        <td class="taskStt7"><b>101%</b></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Tester</td>
                        <td>2</td>
                        <td></td>
                        <td></td>
                        <td>12.000.000</td>
                        <td>6.000.000</td>
                        <td>2</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="taskStt7"><b>100%</b></td>
                        <td class=""></td>
                        <td class=""></td>
                        <td class="taskStt7"><b>100%</b></td>
                        <td class="taskStt7"><b>100%</b></td>
                    </tr>
                    <tr class="even">
                        <td>7</td>
                        <td>Nhanh.vn Hà Nội</td>
                        <td></td>
                        <td>1</td>
                        <td>1.100.000</td>
                        <td>1.100.000</td>
                        <td>1.001.000</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class=""></td>
                        <td class="taskStt7"><b>100%</b></td>
                        <td class="taskStt7"><b>100%</b></td>
                        <td class="taskStt7"><b>100%</b></td>
                        <td class="taskStt7"><b>100%</b></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Nhanh HN - KD1_LanNT</td>
                        <td>1</td>
                        <td>3</td>
                        <td>12.300.000</td>
                        <td>5.100.000</td>
                        <td>8.295.000</td>
                        <td>1</td>
                        <td>6</td>
                        <td>6.600.000</td>
                        <td>4.800.000</td>
                        <td>4.150.000</td>
                        <td class="taskStt7"><b>100%</b></td>
                        <td class="taskStt5"><b>50%</b></td>
                        <td class="taskStt7"><b>186%</b></td>
                        <td class="taskStt7"><b>106%</b></td>
                        <td class="taskStt7"><b>200%</b></td>
                    </tr>
                    <tr class="even">
                        <td>9</td>
                        <td>Nhanh HN - KD6_LâmVN</td>
                        <td>1</td>
                        <td>7</td>
                        <td>92.850.000</td>
                        <td>13.650.000</td>
                        <td></td>
                        <td>1</td>
                        <td>4</td>
                        <td>3.185.000</td>
                        <td>3.185.000</td>
                        <td></td>
                        <td class="taskStt7"><b>100%</b></td>
                        <td class="taskStt7"><b>175%</b></td>
                        <td class="taskStt7"><b>2915%</b></td>
                        <td class="taskStt7"><b>429%</b></td>
                        <td class=""><b>0%</b></td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Chăm sóc khách hàng - UyênTL</td>
                        <td>4</td>
                        <td>36</td>
                        <td>21.000.000</td>
                        <td>27.600.000</td>
                        <td>12.810.000</td>
                        <td>4</td>
                        <td>84</td>
                        <td>50.978.900</td>
                        <td>46.178.900</td>
                        <td>31.260.000</td>
                        <td class="taskStt7"><b>100%</b></td>
                        <td class="taskStt5"><b>43%</b></td>
                        <td class="taskStt5"><b>41%</b></td>
                        <td class="taskStt5"><b>60%</b></td>
                        <td class="taskStt5"><b>41%</b></td>
                    </tr>
                    <tr class="even">
                        <td>11</td>
                        <td>Nhanh HN - KD7_ĐiệpNH</td>
                        <td>2</td>
                        <td>11</td>
                        <td>52.710.000</td>
                        <td>22.710.000</td>
                        <td>19.902.000</td>
                        <td>2</td>
                        <td>11</td>
                        <td>41.700.000</td>
                        <td>26.100.000</td>
                        <td>20.316.000</td>
                        <td class="taskStt7"><b>100%</b></td>
                        <td class="taskStt7"><b>100%</b></td>
                        <td class="taskStt7"><b>126%</b></td>
                        <td class="taskStt5"><b>87%</b></td>
                        <td class="taskStt5"><b>98%</b></td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>Support văn phòng</td>
                        <td>1</td>
                        <td>1</td>
                        <td>2.400.000</td>
                        <td>2.400.000</td>
                        <td>5.475.000</td>
                        <td>1</td>
                        <td>2</td>
                        <td>15.000.000</td>
                        <td></td>
                        <td>11.329.950</td>
                        <td class="taskStt7"><b>100%</b></td>
                        <td class="taskStt5"><b>50%</b></td>
                        <td class="taskStt5"><b>16%</b></td>
                        <td class="taskStt7"><b>100%</b></td>
                        <td class="taskStt5"><b>48%</b></td>
                    </tr>
                    <tr class="even">
                        <td>13</td>
                        <td>Nhanh HN - KD10_ThanhPT</td>
                        <td>5</td>
                        <td>15</td>
                        <td>28.490.000</td>
                        <td>26.230.000</td>
                        <td>25.311.200</td>
                        <td>5</td>
                        <td>16</td>
                        <td>66.234.000</td>
                        <td>59.354.000</td>
                        <td>55.275.500</td>
                        <td class="taskStt7"><b>100%</b></td>
                        <td class="taskStt5"><b>94%</b></td>
                        <td class="taskStt5"><b>43%</b></td>
                        <td class="taskStt5"><b>44%</b></td>
                        <td class="taskStt5"><b>46%</b></td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>Nhanh HN - KD11_NganLTT</td>
                        <td>5</td>
                        <td>27</td>
                        <td>113.286.000</td>
                        <td>71.736.000</td>
                        <td>49.603.120</td>
                        <td>4</td>
                        <td>39</td>
                        <td>187.968.900</td>
                        <td>113.928.900</td>
                        <td>97.504.000</td>
                        <td class="taskStt7"><b>125%</b></td>
                        <td class="taskStt5"><b>69%</b></td>
                        <td class="taskStt5"><b>60%</b></td>
                        <td class="taskStt5"><b>63%</b></td>
                        <td class="taskStt5"><b>51%</b></td>
                    </tr>
                    <tr class="even">
                        <td>15</td>
                        <td>Nhanh HN - KD8_CôngND</td>
                        <td>6</td>
                        <td>18</td>
                        <td>52.940.000</td>
                        <td>35.750.000</td>
                        <td>26.829.500</td>
                        <td>5</td>
                        <td>14</td>
                        <td>30.850.000</td>
                        <td>131.230.000</td>
                        <td>81.326.000</td>
                        <td class="taskStt7"><b>120%</b></td>
                        <td class="taskStt7"><b>129%</b></td>
                        <td class="taskStt7"><b>172%</b></td>
                        <td class="taskStt5"><b>27%</b></td>
                        <td class="taskStt5"><b>33%</b></td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>Phòng Dịch Vụ Khách Hàng</td>
                        <td>8</td>
                        <td>27</td>
                        <td>21.840.000</td>
                        <td>22.140.000</td>
                        <td>24.150.568</td>
                        <td>8</td>
                        <td>7</td>
                        <td>3.300.000</td>
                        <td>2.250.000</td>
                        <td>1.350.000</td>
                        <td class="taskStt7"><b>100%</b></td>
                        <td class="taskStt7"><b>386%</b></td>
                        <td class="taskStt7"><b>662%</b></td>
                        <td class="taskStt7"><b>984%</b></td>
                        <td class="taskStt7"><b>1789%</b></td>
                    </tr>
                    <tr class="even">
                        <td>17</td>
                        <td>Nhanh HN - KD16_TungNH</td>
                        <td>5</td>
                        <td>29</td>
                        <td>135.870.000</td>
                        <td>109.120.000</td>
                        <td>81.300.000</td>
                        <td>5</td>
                        <td>14</td>
                        <td>44.650.000</td>
                        <td>35.200.000</td>
                        <td>36.274.000</td>
                        <td class="taskStt7"><b>100%</b></td>
                        <td class="taskStt7"><b>207%</b></td>
                        <td class="taskStt7"><b>304%</b></td>
                        <td class="taskStt7"><b>310%</b></td>
                        <td class="taskStt7"><b>224%</b></td>
                    </tr>
                    <tr>
                        <td>18</td>
                        <td>Nhanh HN - ThanhTV_Phát triển đối tác</td>
                        <td>3</td>
                        <td>17</td>
                        <td>46.465.000</td>
                        <td>48.865.000</td>
                        <td>33.443.353</td>
                        <td>3</td>
                        <td>18</td>
                        <td>57.965.000</td>
                        <td>51.385.000</td>
                        <td>22.693.500</td>
                        <td class="taskStt7"><b>100%</b></td>
                        <td class="taskStt5"><b>94%</b></td>
                        <td class="taskStt5"><b>80%</b></td>
                        <td class="taskStt5"><b>95%</b></td>
                        <td class="taskStt7"><b>147%</b></td>
                    </tr>
                    <tr class="even">
                        <td>19</td>
                        <td>Nhanh HN - KD17_TùngNT</td>
                        <td>5</td>
                        <td>16</td>
                        <td>65.800.000</td>
                        <td>65.110.000</td>
                        <td>43.039.700</td>
                        <td>5</td>
                        <td>18</td>
                        <td>232.390.000</td>
                        <td>118.760.000</td>
                        <td>92.434.000</td>
                        <td class="taskStt7"><b>100%</b></td>
                        <td class="taskStt5"><b>89%</b></td>
                        <td class="taskStt5"><b>28%</b></td>
                        <td class="taskStt5"><b>55%</b></td>
                        <td class="taskStt5"><b>47%</b></td>
                    </tr>
                    <tr>
                        <td>20</td>
                        <td>Nhanh HN - Phòng KD5_AnhNX</td>
                        <td>9</td>
                        <td>63</td>
                        <td>278.740.000</td>
                        <td>195.440.000</td>
                        <td>149.941.500</td>
                        <td>9</td>
                        <td>50</td>
                        <td>213.843.333</td>
                        <td>187.623.333</td>
                        <td>133.769.000</td>
                        <td class="taskStt7"><b>100%</b></td>
                        <td class="taskStt7"><b>126%</b></td>
                        <td class="taskStt7"><b>130%</b></td>
                        <td class="taskStt7"><b>104%</b></td>
                        <td class="taskStt7"><b>112%</b></td>
                    </tr>
                    <tr class="even">
                        <td>21</td>
                        <td>Nhanh HN - Phòng KD2_TùngNT</td>
                        <td>13</td>
                        <td>78</td>
                        <td>371.410.000</td>
                        <td>319.350.000</td>
                        <td>235.652.500</td>
                        <td>11</td>
                        <td>57</td>
                        <td>337.620.000</td>
                        <td>193.360.000</td>
                        <td>139.556.500</td>
                        <td class="taskStt7"><b>118%</b></td>
                        <td class="taskStt7"><b>137%</b></td>
                        <td class="taskStt7"><b>110%</b></td>
                        <td class="taskStt7"><b>165%</b></td>
                        <td class="taskStt7"><b>169%</b></td>
                    </tr>
                    <tr>
                        <td>22</td>
                        <td>Nhanh HN - Phòng KD3_HuyPV</td>
                        <td>5</td>
                        <td>38</td>
                        <td>151.762.400</td>
                        <td>84.562.400</td>
                        <td>64.547.056</td>
                        <td>5</td>
                        <td>31</td>
                        <td>113.600.000</td>
                        <td>89.000.000</td>
                        <td>73.552.000</td>
                        <td class="taskStt7"><b>100%</b></td>
                        <td class="taskStt7"><b>123%</b></td>
                        <td class="taskStt7"><b>134%</b></td>
                        <td class="taskStt5"><b>95%</b></td>
                        <td class="taskStt5"><b>88%</b></td>
                    </tr>
                    <tr class="even">
                        <td>23</td>
                        <td>Nhanh HN - Phòng KD4_TrườngVV</td>
                        <td>6</td>
                        <td>42</td>
                        <td>130.825.000</td>
                        <td>157.865.000</td>
                        <td>117.782.450</td>
                        <td>3</td>
                        <td>17</td>
                        <td>75.240.000</td>
                        <td>73.120.000</td>
                        <td>73.859.500</td>
                        <td class="taskStt7"><b>200%</b></td>
                        <td class="taskStt7"><b>247%</b></td>
                        <td class="taskStt7"><b>174%</b></td>
                        <td class="taskStt7"><b>216%</b></td>
                        <td class="taskStt7"><b>159%</b></td>
                    </tr>
                    <tr>
                        <td>24</td>
                        <td>Sale Marketing</td>
                        <td>8</td>
                        <td>21</td>
                        <td>165.800.000</td>
                        <td>93.750.000</td>
                        <td>62.652.500</td>
                        <td>8</td>
                        <td>18</td>
                        <td>130.550.000</td>
                        <td>58.150.000</td>
                        <td>33.214.000</td>
                        <td class="taskStt7"><b>100%</b></td>
                        <td class="taskStt7"><b>117%</b></td>
                        <td class="taskStt7"><b>127%</b></td>
                        <td class="taskStt7"><b>161%</b></td>
                        <td class="taskStt7"><b>189%</b></td>
                    </tr>
                    <tr class="even">
                        <td>25</td>
                        <td>Phòng nhân sự - Nhanh.vn</td>
                        <td>6</td>
                        <td>5</td>
                        <td>14.400.000</td>
                        <td>14.400.000</td>
                        <td>3.960.000</td>
                        <td>5</td>
                        <td>10</td>
                        <td>56.100.000</td>
                        <td>44.119.800</td>
                        <td>12.689.850</td>
                        <td class="taskStt7"><b>120%</b></td>
                        <td class="taskStt5"><b>50%</b></td>
                        <td class="taskStt5"><b>26%</b></td>
                        <td class="taskStt5"><b>33%</b></td>
                        <td class="taskStt5"><b>31%</b></td>
                    </tr>
                    <tr>
                        <td>26</td>
                        <td>Ecomcare</td>
                        <td>10</td>
                        <td>9</td>
                        <td>49.600.000</td>
                        <td>30.150.000</td>
                        <td>20.682.500</td>
                        <td>9</td>
                        <td>7</td>
                        <td>23.650.000</td>
                        <td>25.150.000</td>
                        <td>19.650.000</td>
                        <td class="taskStt7"><b>111%</b></td>
                        <td class="taskStt7"><b>129%</b></td>
                        <td class="taskStt7"><b>210%</b></td>
                        <td class="taskStt7"><b>120%</b></td>
                        <td class="taskStt7"><b>105%</b></td>
                    </tr>
                    <tr class="even">
                        <td>27</td>
                        <td>Phòng dịch vụ SEO GG MAPS</td>
                        <td>9</td>
                        <td>58</td>
                        <td>100.985.900</td>
                        <td>85.535.000</td>
                        <td>78.059.350</td>
                        <td>7</td>
                        <td>39</td>
                        <td>76.355.000</td>
                        <td>69.605.000</td>
                        <td>57.726.600</td>
                        <td class="taskStt7"><b>129%</b></td>
                        <td class="taskStt7"><b>149%</b></td>
                        <td class="taskStt7"><b>132%</b></td>
                        <td class="taskStt7"><b>123%</b></td>
                        <td class="taskStt7"><b>135%</b></td>
                    </tr>
                    <tr>
                        <td>28</td>
                        <td><b>Tổng</b></td>
                        <td>141</td>
                        <td>544</td>
                        <td>1.992.224.300</td>
                        <td>1.490.263.400</td>
                        <td>1.099.585.297</td>
                        <td>128</td>
                        <td>488</td>
                        <td>1.871.680.133</td>
                        <td>1.387.999.933</td>
                        <td>1.040.242.400</td>
                        <td class="taskStt7"><b>110%</b></td>
                        <td class="taskStt7"><b>111%</b></td>
                        <td class="taskStt7"><b>106%</b></td>
                        <td class="taskStt7"><b>107%</b></td>
                        <td class="taskStt7"><b>106%</b></td>
                    </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
            </div>
        </div>
        <div class="clearfix"></div>
        <h3>II.So sánh hoạt động</h3><a id="exportExcel2"
            class="exportExcel exportExcel2 btn btn-success right">Xuất Excel</a>
        <div class="dgContainer">
            <div style="width: 1874px; display: none;" class="stickyHeader">
                <table class="table table-bordered" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr class="even">
                            <th rowspan="2" style="width: 75px;">STT</th>
                            <th rowspan="2" style="width: 508px;">Phòng ban</th>
                            <th colspan="4" style="width: 411px;"><a
                                    href="https://erp.nhanh.vn/crm/report/comparedepartment?daterangepicker=01%2F07%2F2020+-+24%2F07%2F2020&amp;companyId=1&amp;submit=L%E1%BB%8Dc&amp;sort=thismonth&amp;dir=asc"><i
                                        class="fa fa-sort"></i> Tháng hiện tại</a></th>
                            <th colspan="4" style="width: 411px;"><a
                                    href="https://erp.nhanh.vn/crm/report/comparedepartment?daterangepicker=01%2F07%2F2020+-+24%2F07%2F2020&amp;companyId=1&amp;submit=L%E1%BB%8Dc&amp;sort=lastmonth&amp;dir=asc"><i
                                        class="fa fa-sort"></i> Tháng trước</a></th>
                            <th colspan="4" style="width: 468px;"><a
                                    href="https://erp.nhanh.vn/crm/report/comparedepartment?daterangepicker=01%2F07%2F2020+-+24%2F07%2F2020&amp;companyId=1&amp;submit=L%E1%BB%8Dc&amp;sort=comparelastmonth&amp;dir=asc"><i
                                        class="fa fa-sort"></i> So với cùng kỳ tháng trước</a>
                            </th>
                        </tr>
                        <tr>
                            <th style="width: 144px;">Nhân viên</th>
                            <th style="width: 96px;">Tìm</th>
                            <th style="width: 96px;">Gọi</th>
                            <th style="width: 75px;">Gặp</th>
                            <th style="width: 144px;">Nhân viên</th>
                            <th style="width: 96px;">Tìm</th>
                            <th style="width: 96px;">Gọi</th>
                            <th style="width: 75px;">Gặp</th>
                            <th style="width: 144px;">Nhân viên</th>
                            <th style="width: 112px;">Tìm</th>
                            <th style="width: 98px;">Gọi</th>
                            <th style="width: 114px;">Gặp</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div style="width: 1874px; display: none;" class="stickyHeader">
                <table class="table table-bordered" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr class="even">
                            <th rowspan="2" style="width: 45px;">STT</th>
                            <th rowspan="2" style="width: 309px;">Phòng ban</th>
                            <th colspan="5" style="width: 543px;"><a
                                    href="https://erp.nhanh.vn/crm/report/comparedepartment?daterangepicker=01%2F07%2F2020+-+24%2F07%2F2020&amp;companyId=1&amp;submit=L%E1%BB%8Dc&amp;sort=thismonth&amp;dir=asc"><i
                                        class="fa fa-sort"></i> Tháng hiện tại</a></th>
                            <th colspan="5" style="width: 543px;"><a
                                    href="https://erp.nhanh.vn/crm/report/comparedepartment?daterangepicker=01%2F07%2F2020+-+24%2F07%2F2020&amp;companyId=1&amp;submit=L%E1%BB%8Dc&amp;sort=lastmonth&amp;dir=asc"><i
                                        class="fa fa-sort"></i> Tháng trước</a></th>
                            <th colspan="5" style="width: 433px;"><a
                                    href="https://erp.nhanh.vn/crm/report/comparedepartment?daterangepicker=01%2F07%2F2020+-+24%2F07%2F2020&amp;companyId=1&amp;submit=L%E1%BB%8Dc&amp;sort=comparelastmonth&amp;dir=asc"><i
                                        class="fa fa-sort"></i> So với cùng kỳ tháng trước</a>
                            </th>
                        </tr>
                        <tr>
                            <th style="width: 87px;">Nhân viên</th>
                            <th style="width: 87px;">Hợp đồng</th>
                            <th style="width: 123px;">Giá trị</th>
                            <th style="width: 123px;">Đã thu</th>
                            <th style="width: 123px;">Tính doanh số</th>
                            <th style="width: 87px;">Nhân viên</th>
                            <th style="width: 87px;">Hợp đồng</th>
                            <th style="width: 123px;">Giá trị</th>
                            <th style="width: 123px;">Đã thu</th>
                            <th style="width: 123px;">Tính doanh số</th>
                            <th style="width: 88px;">Nhân viên</th>
                            <th style="width: 88px;">Hợp đồng</th>
                            <th style="width: 69px;">Giá trị</th>
                            <th style="width: 69px;">Đã thu</th>
                            <th style="width: 119px;">Tính doanh số</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
                <div style="clear: both;"></div><br>
            </div>
            <table id="dgCrmReportDepartment2" class="table table-bordered">
                <thead>
                    <tr class="even">
                        <th rowspan="2">STT</th>
                        <th rowspan="2">Phòng ban</th>
                        <th colspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/comparedepartment?daterangepicker=01%2F07%2F2020+-+24%2F07%2F2020&amp;companyId=1&amp;submit=L%E1%BB%8Dc&amp;sort=thismonth&amp;dir=asc"><i
                                    class="fa fa-sort"></i> Tháng hiện tại</a></th>
                        <th colspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/comparedepartment?daterangepicker=01%2F07%2F2020+-+24%2F07%2F2020&amp;companyId=1&amp;submit=L%E1%BB%8Dc&amp;sort=lastmonth&amp;dir=asc"><i
                                    class="fa fa-sort"></i> Tháng trước</a></th>
                        <th colspan="4"><a
                                href="https://erp.nhanh.vn/crm/report/comparedepartment?daterangepicker=01%2F07%2F2020+-+24%2F07%2F2020&amp;companyId=1&amp;submit=L%E1%BB%8Dc&amp;sort=comparelastmonth&amp;dir=asc"><i
                                    class="fa fa-sort"></i> So với cùng kỳ tháng trước</a></th>
                    </tr>
                    <tr>
                        <th>Nhân viên</th>
                        <th>Tìm</th>
                        <th>Gọi</th>
                        <th>Gặp</th>
                        <th>Nhân viên</th>
                        <th>Tìm</th>
                        <th>Gọi</th>
                        <th>Gặp</th>
                        <th>Nhân viên</th>
                        <th>Tìm</th>
                        <th>Gọi</th>
                        <th>Gặp</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="even">
                        <td>1</td>
                        <td>Phòng kế toán</td>
                        <td>3</td>
                        <td></td>
                        <td>0</td>
                        <td></td>
                        <td>3</td>
                        <td></td>
                        <td>0</td>
                        <td>0</td>
                        <td class="taskStt7"><b>100%</b></td>
                        <td class=""></td>
                        <td class=""><b>0%</b></td>
                        <td class=""><b>0%</b></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Trợ lý</td>
                        <td>2</td>
                        <td></td>
                        <td>0</td>
                        <td></td>
                        <td>2</td>
                        <td></td>
                        <td>0</td>
                        <td>0</td>
                        <td class="taskStt7"><b>100%</b></td>
                        <td class=""></td>
                        <td class=""><b>0%</b></td>
                        <td class=""><b>0%</b></td>
                    </tr>
                    <tr class="even">
                        <td>3</td>
                        <td>Giám đốc dự án</td>
                        <td>2</td>
                        <td></td>
                        <td>0</td>
                        <td></td>
                        <td>2</td>
                        <td></td>
                        <td>0</td>
                        <td>0</td>
                        <td class="taskStt7"><b>100%</b></td>
                        <td class=""></td>
                        <td class=""><b>0%</b></td>
                        <td class=""><b>0%</b></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Chăm sóc đơn hàng - HươngĐTM</td>
                        <td>11</td>
                        <td></td>
                        <td>0</td>
                        <td></td>
                        <td>11</td>
                        <td>2</td>
                        <td>2</td>
                        <td>0</td>
                        <td class="taskStt7"><b>100%</b></td>
                        <td class=""><b>0%</b></td>
                        <td class=""><b>0%</b></td>
                        <td class=""><b>0%</b></td>
                    </tr>
                    <tr class="even">
                        <td>5</td>
                        <td>Marketing</td>
                        <td>9</td>
                        <td>16</td>
                        <td>4</td>
                        <td>23</td>
                        <td>7</td>
                        <td>2</td>
                        <td>3</td>
                        <td>5</td>
                        <td class="taskStt7"><b>129%</b></td>
                        <td class="taskStt7"><b>800%</b></td>
                        <td class="taskStt7"><b>133%</b></td>
                        <td class="taskStt7"><b>460%</b></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Nhanh.vn Hà Nội</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class=""></td>
                        <td class=""></td>
                        <td class=""></td>
                        <td class=""></td>
                    </tr>
                    <tr class="even">
                        <td>7</td>
                        <td>Nhanh HN - KD1_LanNT</td>
                        <td>1</td>
                        <td></td>
                        <td>0</td>
                        <td></td>
                        <td>1</td>
                        <td>1</td>
                        <td>0</td>
                        <td>0</td>
                        <td class="taskStt7"><b>100%</b></td>
                        <td class=""><b>0%</b></td>
                        <td class=""><b>0%</b></td>
                        <td class=""><b>0%</b></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Nhanh HN - KD6_LâmVN</td>
                        <td>1</td>
                        <td></td>
                        <td>0</td>
                        <td></td>
                        <td>1</td>
                        <td></td>
                        <td>0</td>
                        <td>0</td>
                        <td class="taskStt7"><b>100%</b></td>
                        <td class=""></td>
                        <td class=""><b>0%</b></td>
                        <td class=""><b>0%</b></td>
                    </tr>
                    <tr class="even">
                        <td>9</td>
                        <td>Chăm sóc khách hàng - UyênTL</td>
                        <td>4</td>
                        <td>1092</td>
                        <td>22</td>
                        <td></td>
                        <td>4</td>
                        <td>1995</td>
                        <td>10</td>
                        <td>0</td>
                        <td class="taskStt7"><b>100%</b></td>
                        <td class="taskStt5"><b>55%</b></td>
                        <td class="taskStt7"><b>220%</b></td>
                        <td class=""><b>0%</b></td>
                    </tr>
                    <tr class="">
                        <td>10</td>
                        <td>Nhanh HN - KD7_ĐiệpNH</td>
                        <td>2</td>
                        <td>1</td>
                        <td>2</td>
                        <td></td>
                        <td>2</td>
                        <td>1</td>
                        <td>3</td>
                        <td>0</td>
                        <td class="taskStt7"><b>100%</b></td>
                        <td class="taskStt7"><b>100%</b></td>
                        <td class="taskStt5"><b>67%</b></td>
                        <td class=""><b>0%</b></td>
                    </tr>
                    <tr class="even">
                        <td>11</td>
                        <td>Support văn phòng</td>
                        <td>1</td>
                        <td></td>
                        <td>0</td>
                        <td></td>
                        <td>1</td>
                        <td></td>
                        <td>0</td>
                        <td>0</td>
                        <td class="taskStt7"><b>100%</b></td>
                        <td class=""></td>
                        <td class=""><b>0%</b></td>
                        <td class=""><b>0%</b></td>
                    </tr>
                    <tr class="">
                        <td>12</td>
                        <td>Nhanh HN - KD10_ThanhPT</td>
                        <td>5</td>
                        <td>159</td>
                        <td>444</td>
                        <td>40</td>
                        <td>5</td>
                        <td>195</td>
                        <td>678</td>
                        <td>50</td>
                        <td class="taskStt7"><b>100%</b></td>
                        <td class="taskStt5"><b>82%</b></td>
                        <td class="taskStt5"><b>65%</b></td>
                        <td class="taskStt5"><b>80%</b></td>
                    </tr>
                    <tr class="even">
                        <td>13</td>
                        <td>Nhanh HN - KD11_NganLTT</td>
                        <td>5</td>
                        <td>118</td>
                        <td>295</td>
                        <td>41</td>
                        <td>4</td>
                        <td>27</td>
                        <td>273</td>
                        <td>57</td>
                        <td class="taskStt7"><b>125%</b></td>
                        <td class="taskStt7"><b>437%</b></td>
                        <td class="taskStt7"><b>108%</b></td>
                        <td class="taskStt5"><b>72%</b></td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>Nhanh HN - KD8_CôngND</td>
                        <td>6</td>
                        <td>27</td>
                        <td>149</td>
                        <td>31</td>
                        <td>5</td>
                        <td>21</td>
                        <td>159</td>
                        <td>34</td>
                        <td class="taskStt7"><b>120%</b></td>
                        <td class="taskStt7"><b>129%</b></td>
                        <td class="taskStt5"><b>94%</b></td>
                        <td class="taskStt5"><b>91%</b></td>
                    </tr>
                    <tr class="even">
                        <td>15</td>
                        <td>Phòng Dịch Vụ Khách Hàng</td>
                        <td>8</td>
                        <td>7</td>
                        <td>198</td>
                        <td></td>
                        <td>8</td>
                        <td>36</td>
                        <td>238</td>
                        <td>2</td>
                        <td class="taskStt7"><b>100%</b></td>
                        <td class="taskStt5"><b>19%</b></td>
                        <td class="taskStt5"><b>83%</b></td>
                        <td class=""><b>0%</b></td>
                    </tr>
                    <tr class="">
                        <td>16</td>
                        <td>Nhanh HN - KD16_TungNH</td>
                        <td>5</td>
                        <td>112</td>
                        <td>314</td>
                        <td>36</td>
                        <td>5</td>
                        <td>167</td>
                        <td>434</td>
                        <td>57</td>
                        <td class="taskStt7"><b>100%</b></td>
                        <td class="taskStt5"><b>67%</b></td>
                        <td class="taskStt5"><b>72%</b></td>
                        <td class="taskStt5"><b>63%</b></td>
                    </tr>
                    <tr class="even">
                        <td>17</td>
                        <td>Nhanh HN - ThanhTV_Phát triển đối tác</td>
                        <td>3</td>
                        <td>89</td>
                        <td>42</td>
                        <td>7</td>
                        <td>3</td>
                        <td>41</td>
                        <td>34</td>
                        <td>2</td>
                        <td class="taskStt7"><b>100%</b></td>
                        <td class="taskStt7"><b>217%</b></td>
                        <td class="taskStt7"><b>124%</b></td>
                        <td class="taskStt7"><b>350%</b></td>
                    </tr>
                    <tr class="">
                        <td>18</td>
                        <td>Nhanh HN - KD17_TùngNT</td>
                        <td>5</td>
                        <td>14</td>
                        <td>204</td>
                        <td>39</td>
                        <td>5</td>
                        <td>19</td>
                        <td>190</td>
                        <td>44</td>
                        <td class="taskStt7"><b>100%</b></td>
                        <td class="taskStt5"><b>74%</b></td>
                        <td class="taskStt7"><b>107%</b></td>
                        <td class="taskStt5"><b>89%</b></td>
                    </tr>
                    <tr class="even">
                        <td>19</td>
                        <td>Nhanh HN - Phòng KD5_AnhNX</td>
                        <td>9</td>
                        <td>196</td>
                        <td>676</td>
                        <td>52</td>
                        <td>9</td>
                        <td>288</td>
                        <td>856</td>
                        <td>54</td>
                        <td class="taskStt7"><b>100%</b></td>
                        <td class="taskStt5"><b>68%</b></td>
                        <td class="taskStt5"><b>79%</b></td>
                        <td class="taskStt5"><b>96%</b></td>
                    </tr>
                    <tr class="">
                        <td>20</td>
                        <td>Nhanh HN - Phòng KD2_TùngNT</td>
                        <td>13</td>
                        <td>219</td>
                        <td>970</td>
                        <td>124</td>
                        <td>11</td>
                        <td>384</td>
                        <td>1191</td>
                        <td>61</td>
                        <td class="taskStt7"><b>118%</b></td>
                        <td class="taskStt5"><b>57%</b></td>
                        <td class="taskStt5"><b>81%</b></td>
                        <td class="taskStt7"><b>203%</b></td>
                    </tr>
                    <tr class="even">
                        <td>21</td>
                        <td>Nhanh HN - Phòng KD3_HuyPV</td>
                        <td>5</td>
                        <td>37</td>
                        <td>103</td>
                        <td>9</td>
                        <td>5</td>
                        <td>18</td>
                        <td>67</td>
                        <td>17</td>
                        <td class="taskStt7"><b>100%</b></td>
                        <td class="taskStt7"><b>206%</b></td>
                        <td class="taskStt7"><b>154%</b></td>
                        <td class="taskStt5"><b>53%</b></td>
                    </tr>
                    <tr class="">
                        <td>22</td>
                        <td>Nhanh HN - Phòng KD4_TrườngVV</td>
                        <td>6</td>
                        <td>94</td>
                        <td>194</td>
                        <td>56</td>
                        <td>3</td>
                        <td>5</td>
                        <td>29</td>
                        <td>6</td>
                        <td class="taskStt7"><b>200%</b></td>
                        <td class="taskStt7"><b>1880%</b></td>
                        <td class="taskStt7"><b>669%</b></td>
                        <td class="taskStt7"><b>933%</b></td>
                    </tr>
                    <tr class="even">
                        <td>23</td>
                        <td>Sale Marketing</td>
                        <td>8</td>
                        <td>405</td>
                        <td>456</td>
                        <td>12</td>
                        <td>8</td>
                        <td>433</td>
                        <td>603</td>
                        <td>8</td>
                        <td class="taskStt7"><b>100%</b></td>
                        <td class="taskStt5"><b>94%</b></td>
                        <td class="taskStt5"><b>76%</b></td>
                        <td class="taskStt7"><b>150%</b></td>
                    </tr>
                    <tr>
                        <td>24</td>
                        <td>Phòng nhân sự - Nhanh.vn</td>
                        <td>6</td>
                        <td>2</td>
                        <td>0</td>
                        <td></td>
                        <td>5</td>
                        <td>2</td>
                        <td>1</td>
                        <td>0</td>
                        <td class="taskStt7"><b>120%</b></td>
                        <td class="taskStt7"><b>100%</b></td>
                        <td class=""><b>0%</b></td>
                        <td class=""><b>0%</b></td>
                    </tr>
                    <tr class="even">
                        <td>25</td>
                        <td>Ecomcare</td>
                        <td>10</td>
                        <td>90</td>
                        <td>156</td>
                        <td>10</td>
                        <td>9</td>
                        <td>152</td>
                        <td>58</td>
                        <td>1</td>
                        <td class="taskStt7"><b>111%</b></td>
                        <td class="taskStt5"><b>59%</b></td>
                        <td class="taskStt7"><b>269%</b></td>
                        <td class="taskStt7"><b>1000%</b></td>
                    </tr>
                    <tr>
                        <td>26</td>
                        <td>Phòng dịch vụ SEO GG MAPS</td>
                        <td>9</td>
                        <td>34</td>
                        <td>10</td>
                        <td>7</td>
                        <td>7</td>
                        <td>43</td>
                        <td>12</td>
                        <td>4</td>
                        <td class="taskStt7"><b>129%</b></td>
                        <td class="taskStt5"><b>79%</b></td>
                        <td class="taskStt5"><b>83%</b></td>
                        <td class="taskStt7"><b>175%</b></td>
                    </tr>
                    <tr class="even">
                        <td>27</td>
                        <td><b>Tổng</b></td>
                        <td>139</td>
                        <td>2.712</td>
                        <td>4.239</td>
                        <td>487</td>
                        <td>126</td>
                        <td>3.832</td>
                        <td>4.841</td>
                        <td>402</td>
                        <td class="taskStt7"><b>110%</b></td>
                        <td class="taskStt5"><b>71%</b></td>
                        <td class="taskStt5"><b>88%</b></td>
                        <td class="taskStt7"><b>121%</b></td>
                    </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-6 dgButtons"></div>
            </div>
        </div>
        <style>
            .right {
                float: right;
            }

            ul.multiselect-container>li>a label.checkbox {
                padding: 0 !important;
            }
        </style>
    </div>
</div>
    
@endsection

@section('js')
    <script type="text/javascript" charset="UTF-8" src="{{ asset('asset/js/report/loader.js') }}"></script>
    <script type="text/javascript" charset="UTF-8" src="{{ asset('asset/js/report/jsapi_compiled_default_module.js') }}"></script>
    <script type="text/javascript" charset="UTF-8" src="{{ asset('asset/js/report/jsapi_compiled_graphics_module.js') }}"></script>
    <script type="text/javascript" charset="UTF-8" src="{{ asset('asset/js/report/jsapi_compiled_ui_module.js') }}"> </script>
    <script type="text/javascript" charset="UTF-8" src="{{ asset('asset/js/report/jsapi_compiled_fw_module.js') }}"> </script>
    <script type="text/javascript" charset="UTF-8" src="{{ asset('asset/js/report/dygraph-tickers-combined.js') }}"> </script>
    <script type="text/javascript" charset="UTF-8" src="{{ asset('asset/js/report/webfont.js') }}"></script>
    <script type="text/javascript" charset="UTF-8" src="{{ asset('asset/js/report/jsapi_compiled_bar_module.js') }}"></script>

    <script type="text/javascript">
        var usrCnf = {
            language: 'vi'
        };
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/report/saved_resource') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/report/firebase-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/report/firebase-messaging.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/report/firebase-firestore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/report/firebase-auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/report/getfirebaseconfig') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/report/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/report/notification.reducer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/report/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.env.isCompatible = true;
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/report/saved_resource(1)') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/report/bootstrap-multiselect.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/report/comparedepartment.js') }}"></script>
@endsection